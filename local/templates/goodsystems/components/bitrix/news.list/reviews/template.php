<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? if (count($arResult["ITEMS"])>0):?>
    <div class="client_slider">

    <?foreach($arResult["ITEMS"] as $arItem):?>

        <div class="client_slider_item">
            <div class="text">
                <p><?=$arItem["PREVIEW_TEXT"]?></p>
            </div>
            <div class="autor">
                <p><a ><?=$arItem["NAME"]?></a> <?=$arItem["PROPERTIES"]["project"]["VALUE"]!=''?"<span>|</span>".$arItem["PROPERTIES"]["project"]["VALUE"]:''?></p>

            </div>
        </div>
    <?endforeach;?>
</div>


<? endif; ?>