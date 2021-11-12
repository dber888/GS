<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

$arParams['FIELDS'] = array_merge($arParams['FIELDS'], array('ACTION_TYPE', 'PAGE'));

$arResult["ERRORS"] = null;
$arResult["MESSAGE"] = null;
if (isset($_REQUEST['callBackSendOk']) && $_REQUEST['callBackSendOk'] == 'Y')
	$arResult["MESSAGE"] = $arParams['SEND_OK_MESSAGE'];

$arResult['ALL_FIELDS'] = require($_SERVER['DOCUMENT_ROOT'].$componentPath.'/fields.php');


$arResult['VALUES'] = array();
$arResult['FIELDS'] = array();
$arResult['HIDDEN_FIELDS'] = array();
foreach ($arParams['FIELDS'] as $k)
{
	if (!isset($arResult['ALL_FIELDS'][$k]))
		continue;
	
	if ($arResult['ALL_FIELDS'][$k]['TYPE'] == 'HIDDEN')
		$arResult['HIDDEN_FIELDS'][$k] = $arResult['ALL_FIELDS'][$k];
	else
		$arResult['FIELDS'][$k] = $arResult['ALL_FIELDS'][$k];
}

$requiredFields = array('PAGE', 'ACTION_TYPE');
$arParams['REQUIRED_FIELDS'] = array_merge($arParams['REQUIRED_FIELDS'], $requiredFields);

if (
	isset($_POST['callBackAction']) 
	&& $_POST['callBackAction'] == 'sendCallBack' 
	&& check_bitrix_sessid()
	&& $_POST['ID'] == $arParams['ID']
)
{
	$arFields = array(
		'IBLOCK_ID' => $arParams['IBLOCK_ID'],
		'ACTIVE' => 'Y',
		'DATE_ACTIVE_FROM' => date($DB->DateFormatToPHP(CSite::GetDateFormat("FULL"))),
		'PROPERTY_VALUES' => array(
		),
	);
	
	$mailHtml = '';
	$smsText = array();
	$arFieldsMail = array();
	foreach (array('HIDDEN_FIELDS', 'FIELDS') as $f)
	{
		foreach ($arResult[$f] as $k => $arField)
		{
			if (!empty($_POST['F_'.$k]) && $_REQUEST['ajax'] == 'Y')
				$_POST['F_'.$k] = $_POST['F_'.$k];
			
			if ($arField['FIELD'] != false)
			{
				$arFields[$arField['FIELD']] = $_POST['F_'.$k];
				$arResult['VALUES'][$k] = $_POST['F_'.$k];
			}
			elseif ($arField['PROPERTY'] != false)
			{
				$arFields['PROPERTY_VALUES'][$arField['PROPERTY']] = $_POST['F_'.$k];
				$arResult['VALUES'][$k] = $_POST['F_'.$k];
			}
			
			$mailHtml.= $arField['NAME'].": ".$arResult['VALUES'][$k]."\n";
			$arFieldsMail[$k] = $arResult['VALUES'][$k];
			$smsText[] = $arField['NAME'].": ".$arResult['VALUES'][$k];
		}
	}


    $arFields['PROPERTY_VALUES']['USERIP'] = $_SERVER['REMOTE_ADDR'];
    $arFields['PROPERTY_VALUES']['USER_ID'] = $USER->GetID();

	foreach ($arParams['REQUIRED_FIELDS'] as $k)

	{
		if (empty($_POST['F_'.$k]))
			$arResult["ERRORS"][] = 'Вы не заполнили обязательное поле "'.$arResult['ALL_FIELDS'][$k]['NAME'].'"';
	}



	//проверка
    $flag= false;
    if( $curl = curl_init() ) {
        $arr=array(
            "secret"=>$arParams['RECAPTCHA_SECRET'],
            "response"=>$_POST["g-recaptcha-response"],
            "remoteip"=>$_SERVER['REMOTE_ADDR']
        );
        curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $arr);
        $out = json_decode(curl_exec($curl));
        curl_close($curl);

        $flag= (bool)$out->success;
    }

    if (!$flag) {
        $arResult["ERRORS"][] = 'Вы признаны роботом';
    }



            if (sizeof($arResult["ERRORS"]) == 0)
            {




                CModule::IncludeModule("iblock");

                $el = new CIBlockElement;
                $ID = $el->Add($arFields);
                if (!$ID) {
                    $arResult["ERRORS"][] = $el->LAST_ERROR;
                } else {
                    $arFieldsMailAdd = array(
                        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
                        'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
                        'ID' => $ID,
                        'MAIL_TEXT' => $mailHtml,
                        'ACTION' => $_POST['F_ACTION_TYPE'],
                        'EMAIL' => $arParams['EMAIL'],
                    );

                    $arFieldsMailAdd["IP"]=$_SERVER["REMOTE_ADDR"];
                    $arFieldsMailAdd["URL"]=$_SERVER["HTTP_REFERER"];

                    $arFieldsMail = array_merge($arFieldsMail, $arFieldsMailAdd);

//                    echo $arParams['EVENT_TEMPLATE_ID']."===";
//                    print_r($arFieldsMail); die;


                    CEvent::Send(
                        'SIMPLE_CALLBACK',
                        SITE_ID,
                        $arFieldsMail,
                        'Y',
                        $arParams['EVENT_TEMPLATE_ID']
                    );

                    if (isset($_REQUEST['ajax']) && $_REQUEST['ajax'] == 'Y')
                    {
                        $APPLICATION->RestartBuffer();

                        echo json_encode(array('status' => 'ok'));

                        die();
                    } else {
                        $url = $_SERVER['REQUEST_URI'];
                        if (strpos($url, '?') === false)
                            $url.= '?';
                        else
                            $url.= '&';
                        $url.= 'callBackSendOk=Y';
                        LocalRedirect($url);
                    }
                }
            }
	
	if (sizeof($arResult["ERRORS"]) > 0 && isset($_REQUEST['ajax']) && $_REQUEST['ajax'] == 'Y')
	{
		$APPLICATION->RestartBuffer();
		
		echo json_encode(array('status' => 'error', 'msg' => implode("\n", $arResult["ERRORS"])));
		
		die();
	}
}

$this->IncludeComponentTemplate();
?>