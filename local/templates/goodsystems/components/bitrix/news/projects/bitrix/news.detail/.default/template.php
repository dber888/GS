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

<?
//echo "<pre>";
//print_r($arResult);
//die();
?>
<div class="cont_page">
<?if($arResult["PROPERTIES"]["predislovie"]["VALUE"]["TEXT"]!=""):?>
    <p class="title_desc">
        <?=$arResult["PROPERTIES"]["predislovie"]["~VALUE"]["TEXT"];?>
    </p>
<?endif;?>


<?if($arResult["PROPERTIES"]["zakazchik"]["~VALUE"]["TEXT"]!=""):?>
    <?/* <h2>Заказчик</h2>*/?>
    <p class="title_desc">
        <?=$arResult["PROPERTIES"]["zakazchik"]["~VALUE"]["TEXT"];?>
    </p>
<?endif;?>

<?if($arResult["PROPERTIES"]["celi"]["~VALUE"]["TEXT"]!=""):?>
    <?/*<h2>Задача проекта:</h2>*/?>
    <p class="title_desc">
        <?=$arResult["PROPERTIES"]["celi"]["~VALUE"]["TEXT"];?>
    </p>
<?endif;?>

<?if($arResult["PROPERTIES"]["middle_text2"]["~VALUE"]["TEXT"]!=""):?>
    <p class="title_desc">
        <?=$arResult["PROPERTIES"]["middle_text2"]["~VALUE"]["TEXT"];?>
    </p>
<?endif;?>

<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
   <p class="title_desc"><!-- Вот, что у нас получилось!<br />-->
    <img
            class="detail_picture"
            border="0"  style="border: 1px solid #f2f4f5;padding: 30px;"
            src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
            width="100%"
            alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
            title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
    /> </p>
<?endif?>


    <?if (count($arResult["PROPERTIES"]["big_photos"]["~VALUE"])>0):?>

                <? foreach($arResult["PROPERTIES"]["big_photos"]["VALUE"] as $photo):?>

        <p class="title_desc">
        <img src="<?=CFile::GetPath($photo) ?>" width="100%" style="border: 6px solid #00a555;padding: 30px;"> </p>
                <? endforeach;?>
<?endif;?>





<?if($arResult["PROPERTIES"]["middle_text3"]["~VALUE"]["TEXT"]!=""):?>
    <p class="title_desc">
        <?=$arResult["PROPERTIES"]["middle_text3"]["~VALUE"]["TEXT"];?>
    </p>
<?endif;?>




<?if (count($arResult["PROPERTIES"]["main_photos"]["~VALUE"])>0):?>
    <div class="portfolio-slider">
        <div class="portfolio-slider__controls">
            <button class="portfolio-slider__arrow portfolio-slider__arrow--prev"></button>
            <button class="portfolio-slider__arrow portfolio-slider__arrow--next"></button>
        </div>
        <div class="portfolio-slider__list js-portfolio-slider">
            <? foreach($arResult["PROPERTIES"]["main_photos"]["VALUE"] as $photo):?>
            <? $renderImage = CFile::ResizeImageGet($photo, Array("width" => 1600,"height"=>1200)); ?>
            <div class="portfolio-slider__slide">
                <img src="<?echo $renderImage['src'] ?>">
            </div>
            <? endforeach;?>
        </div>
    </div>
<?endif;?>

<?if($arResult["PROPERTIES"]["middle_text4"]["~VALUE"]["TEXT"]!=""):?>
    <p class="title_desc">
        <?=$arResult["PROPERTIES"]["middle_text4"]["~VALUE"]["TEXT"];?>
    </p>
<?endif;?>

<?/*<pre><?print_r($arResult)?></pre>


<!-- $arResult["PROPERTIES"]["makets"]["VALUE"]  -->
    <!-- $arResult["PROPERTIES"]["srok"]["VALUE"]  -->
    <!-- $arResult["PROPERTIES"]["members"]["VALUE"]["TEXT"]  -->
    <!-- $arResult["PROPERTIES"]["url"]["VALUE"]  -->
    <!-- $arResult["PROPERTIES"]["celi"]["VALUE"]  -->
    <!-- $arResult["PROPERTIES"]["sub_title_item"]["VALUE"] подпись к названию сайта -->
    <!-- $arResult["PROPERTIES"]["date_start"]["VALUE"]  -->
    <!--   -->
    <!--   -->
    <!-- $arResult["PROPERTIES"]["middle_text3"]["VALUE"]  -->
    <!-- $arResult["PROPERTIES"]["middle_text4"]["VALUE"]  -->
    <!-- $arResult["PROPERTIES"]["middle_text3"]["VALUE"]  -->
    <!-- $arResult["PROPERTIES"]["middle_text3"]["VALUE"]  -->

    */?>



    <div  style="display: block; width: 100%;" >
        <div class="cast" >
            <p>
                <span>Дата запуска: </span>
                <?=$arResult["PROPERTIES"]["date_start"]["VALUE"]?>
            </p>

            <?if($arResult["PROPERTIES"]["url"]["VALUE"]!="") :?>
            <p >
                <span>Сайт:</span>
                <a href="<?=$arResult["PROPERTIES"]["url"]["VALUE"]?>" target="_blank"><?=str_replace(array("https://","http://","/"),"",$arResult["PROPERTIES"]["url"]["VALUE"])?></a>
            </p>
            <?endif;?>

            <?/*<p>
                <b>Над проектом работали:</b>
                <?=$arResult["PROPERTIES"]["members"]["~VALUE"]["TEXT"]?>
            </p>*/?>
        </div>
    </div>


<?/*
<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code) {
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		} else{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;?>
</div>*/?>

</div>
