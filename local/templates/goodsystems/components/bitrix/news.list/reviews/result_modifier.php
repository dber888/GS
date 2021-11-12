<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 15.03.2020
 * Time: 1:25
 */


/*
$unique_groups = array();
foreach($arResult["ITEMS"] as $arItem){
    $unique_groups[]=$arItem["IBLOCK_SECTION_ID"];
}
$unique_groups = array_unique($unique_groups);
$arFilter = Array('IBLOCK_ID'=>$arParams["IBLOCK_ID"], 'GLOBAL_ACTIVE'=>'Y', 'ID'=>$unique_groups);
$db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
$groups[]=array();
while($ar_result = $db_list->GetNext())
{
    $groups[$ar_result['ID']]=$ar_result['NAME'];
}
foreach($arResult["ITEMS"] as $a=>$arItem){
    $arResult["ITEMS"][$a]["SECTION_NAME"]=$groups[$arItem["IBLOCK_SECTION_ID"]];
}*/