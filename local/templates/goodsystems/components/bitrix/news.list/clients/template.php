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
    <div class="logotip_slider">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="logotip_slider_item"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""><span></span><span></span><span></span><span></span></div>
    <?endforeach;?>
    </div>
<? endif; ?>