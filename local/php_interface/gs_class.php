<?php

if ((isset($_COOKIE["DEBUG"]) && $_COOKIE["DEBUG"] == 1) || (isset($_COOKIE["debug"]) && $_COOKIE["debug"] == 1)) {
    define("DEBUG", true);
} else {
    define("DEBUG", false);
}

class GS
{
    protected static $_instance;
    private $favorite = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    /**
     * @param $num int
     * @param $forms array()
     *  0 элемент - для количества 1
     *  1 элемент - для значения 2
     *  2 элемент - для значения 5
     * @return - string верная словоформа
     **/
    public static function word($num,$forms){
        $num = abs($num) % 100;
        $n1 = $num % 10;

        if ($num > 10 && $num < 20) { return $forms[2]; }
        if ($n1 > 1 && $n1 < 5) { return $forms[1]; }
        if ($n1 == 1) { return $forms[0]; }
        return $forms[2];
    }

    static public function GetCountElements($arFilter = []) {
        if(!CModule::IncludeModule('iblock') || intval($arFilter['IBLOCK_ID']) <= 0) return false;
        return CIBlockElement::GetList(false, $arFilter, array('IBLOCK_ID'))->Fetch()['CNT'];
    }

    public static function deleteAllUsersBaskets()
    {
        if (CModule::IncludeModule("sale")) {
            $baskets = CSaleBasket::GetList(
                array(
                    "NAME" => "ASC",
                    "ID" => "ASC"
                ),
                array(
//			    "FUSER_ID" => CSaleBasket::GetBasketUserID(),
                    "LID" => SITE_ID,
                    "ORDER_ID" => "NULL"
                ),
                false,
                false,
                array(
                    "ID", "NAME", "CALLBACK_FUNC", "MODULE", "PRODUCT_ID", "QUANTITY", "DELAY", "CAN_BUY", "FUSER_ID", "PRICE", "WEIGHT", "DETAIL_PAGE_URL", "NOTES", "CURRENCY", "VAT_RATE", "CATALOG_XML_ID", "PRODUCT_XML_ID", "SUBSCRIBE", "DISCOUNT_PRICE", "PRODUCT_PROVIDER_CLASS", "TYPE", "SET_PARENT_ID"
                )
            );
//	    CSaleBasket::Delete(580); // Удалить конкретный товар из корзины
            $fusers = [];
            while ($basket = $baskets->Fetch()) {
                $fusers[$basket['FUSER_ID']][] = $basket;
            }

            foreach ($fusers as $fuserId => $fuser) {
                CSaleBasket::DeleteAll($fuserId);
            }
        }
    }


    public static function subscribeUser($userId, $email, $subscribeIds)
    {
        if (!CModule::IncludeModule("subscribe")) {
            self::see(GetMessage("CC_BSS_MODULE_NOT_INSTALLED"));
            return false;
        }

        $arNewRubrics = array();
        foreach ($subscribeIds as $rub_id) {
            $rub_id = intval($rub_id);
            if ($rub_id > 0)
                $arNewRubrics[$rub_id] = $rub_id;
        }

        $obSubscription = new CSubscription;
        $rsSubscription = $obSubscription->GetList(array(), array("USER_ID" => $userId));
        $arSubscription = $rsSubscription->Fetch();

        if (is_array($arSubscription)) {
            $rs = $obSubscription->Update(
                $arSubscription["ID"],
                array(
                    "FORMAT" => ($_POST["FORMAT"] !== "html" ? "text" : "html"),
                    "RUB_ID" => $arNewRubrics,
                ),
                false
            );

            if (!$rs)
                $arResult["ERRORS"][] = $obSubscription->LAST_ERROR;
            else
                $_SESSION["subscribe.simple.message"] = GetMessage("CC_BSS_UPDATE_SUCCESS");
        } else {
            $ID = $obSubscription->Add(array(
                "USER_ID" => $userId,
                "ACTIVE" => "Y",
                "EMAIL" => $email,
                "FORMAT" => "html",
//			    "FORMAT" => ($_REQUEST["FORMAT"] !== "html" ? "text" : "html"),
                "CONFIRMED" => "Y",
                "SEND_CONFIRM" => "N",
                "RUB_ID" => $arNewRubrics,
            ));
        }

        if (!$ID) {
            GS::see($obSubscription->LAST_ERROR);
            return false;
        } else
            return true;
    }

    public static function see($var, $die = false)
    {
        echo "<pre>";
        print_r($var);
        echo "</pre>";

        if ((bool)$die) {
            die;
        }
    }

    public static function getDeliveryPrice($id)
    {
        $arDeliv = \Bitrix\Sale\Delivery\Services\Manager::getById($id);

        //self::see($arDeliv);
        if ($arDeliv) {
            return CurrencyFormat($arDeliv["CONFIG"]["MAIN"]["PRICE"], $arDeliv["CURRENCY"]);
        }
    }

    /**
     *
     * $mask - Пример '<p>#option#</p>'
     *
     */
    public static function getOption($name, $mask = "")
    {
        $tmp = \Bitrix\Main\Config\Option::get("grain.customsettings", $name);
        if ($mask != "") {

            if ($tmp != "") {
                return str_replace("#option#", $tmp, $mask);
            } else {
                return "";
            }
        } else {
            return $tmp;
        }

    }

    public static function tinyPhone($name){
        return str_replace(array("+"," ","-","_","(",")"),"",self::getOption($name));
    }

    public static function prepareSiteOptions()
    {

    }


    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}