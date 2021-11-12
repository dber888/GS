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
    <div class="other_top">
<!--        <div class="top_slider_time">-->
<!--            <ul>-->
<!--                --><?//foreach($arResult["ITEMS"] as $arItem):?>
<!--                    <li><span><i></i></span></li>-->
<!--                --><?//endforeach;?>
<!--            </ul>-->
<!--        </div>-->
        <div class="top_slider_arrow"></div>
        <div class="wrapper">
            <div class="first_screen_in">
                <div class="top_slider">
                    <div class="slider_items">
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                            <?/*<div class="index_slider_item">
                                <img  src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"  alt="" />
                                <div class="row">
                                    <div class="col-12 col-sm-7 col-md-5 offset-sm-1 flex_outer">
                                        <div class="index_slider_item_text">
                                            <p class="top"><?=$arItem["NAME"]?></p>
                                            <p><?=$arItem["DETAIL_TEXT"]?></p>

                                            <?if($arItem["PROPERTIES"]["link"]["VALUE"]!=""):?>
                                                <a href="<?=$arItem["PROPERTIES"]["link"]["VALUE"]?>" class="button with_back"><?=$arItem["PROPERTIES"]["button_title"]["VALUE"]?></a>
                                            <?endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>*/?>
                            <div class="slider_item">
                                <p class="top">digital-агентство  |  2014-<?=date("Y")?></p>
                                <div class="wrap_grad">
                                    <p class="title"><?=$arItem["NAME"]?></p>
                                </div>
                                <div class="bottom_block">
                                    <p><?=$arItem["PREVIEW_TEXT"]?></p>
                                </div>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </div>
        <span class="scr_bottom" id="scr_bottom"></span>
    </div>
<? endif; ?>