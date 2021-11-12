<?php

$arFilter = Array('IBLOCK_ID'=>$arParams["IBLOCK_ID"], 'GLOBAL_ACTIVE'=>'Y');
$db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, false,  array('ID','DESCRIPTION','NAME','SECTION_PAGE_URL'));

$groups[]=array();
$arrs = array();

//echo "<pre>";
//print_r($arResult["SECTION"]["PATH"][0]); die;


while($ar_result = $db_list->GetNext())
{
    $arrs[$ar_result['ID']]=array("title"=>$ar_result['NAME'],"url"=>$ar_result['SECTION_PAGE_URL']);
    $groups[$ar_result['ID']]=$ar_result['NAME'];
}
$arResult["groups"]=$arrs;

if (isset($arResult["SECTION"]["PATH"][0])){
    $arResult["group"]["DESCRIPTION"]=$arResult["SECTION"]["PATH"][0]["DESCRIPTION"];
} else {
    $arResult["group"]["DESCRIPTION"]="";
}



foreach($arResult["ITEMS"] as $a=>$arItem){
    $arResult["ITEMS"][$a]["SECTION_NAME"]=$groups[$arItem["IBLOCK_SECTION_ID"]];
}