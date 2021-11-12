<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arTypesEx = CIBlockParameters::GetIBlockTypes(Array("-"=>" "));

$arIBlocks=Array();
$db_iblock = CIBlock::GetList(Array("SORT"=>"ASC"), Array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch()) {
	$arIBlocks[$arRes["ID"]] = $arRes["NAME"];
}

$arFields = include($_SERVER['DOCUMENT_ROOT'].'/local/components/goodsystems/callback.form/fields.php');
$fields = array();
foreach ($arFields as $k => $v)
	$fields[$k] = $v['NAME'];

$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"ID" => Array(
			"PARENT" => "BASE",
			"NAME" => "ID формы",
			"TYPE" => "STRING",
			"DEFAULT" => "f",
		),
		"EMAIL" => Array(
			"PARENT" => "BASE",
			"NAME" => "E-mail для оповещения",
			"TYPE" => "STRING",
		),
		"EVENT_TEMPLATE_ID" => Array(
			"PARENT" => "BASE",
			"NAME" => "ID шаблона почтового отправления",
			"TYPE" => "STRING",
		),
		"IBLOCK_TYPE" => Array(
			"PARENT" => "BASE",
			"NAME" => "Тип инфоблока данных",
			"TYPE" => "LIST",
			"VALUES" => $arTypesEx,
			"DEFAULT" => "news",
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => Array(
			"PARENT" => "BASE",
			"NAME" => "Инфоблок данных",
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks,
			"DEFAULT" => '={$_REQUEST["ID"]}',
			"ADDITIONAL_VALUES" => "Y",
			"REFRESH" => "Y",
		),
		"FIELDS" => Array(
			"PARENT" => "BASE",
			"NAME" => "Поля",
			"TYPE" => "LIST",
			"VALUES" => $fields,
			"MULTIPLE" => "Y",
		),

		"REQUIRED_FIELDS" => Array(
			"PARENT" => "BASE",
			"NAME" => "Поля",
			"TYPE" => "LIST",
			"VALUES" => $fields,
			"MULTIPLE" => "Y",
		),
        "SEND_OK_MESSAGE" => Array(
            "PARENT" => "BASE",
            "NAME" => "Сообщение при удачной отправке",
            "TYPE" => "STRING",
            "DEFAULT" => "Сообщение успешно отправлено",
        ),
        "RECAPTCHA_SECRET" => Array(
            "PARENT" => "BASE",
            "NAME" => "SECRET_KEY",
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "RECAPTCHA_PUBLIC" => Array(
            "PARENT" => "BASE",
            "NAME" => "PUBLIC_KEY",
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
	),
);
?>