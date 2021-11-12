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


<div class="filter">
<select id="choisegroup">
    <?$tmp = explode("?",$_SERVER["REQUEST_URI"]);
    $tmp=$tmp[0];

    ?>
    <option value="/works/" <?=($tmp == "/works/" ? " selected ":"")?> >Все</option>
    <?foreach($arResult["groups"] as $id=>$arr):?>
        <option value="<?=$arr["url"]?>"   <?=($tmp == $arr["url"] ? " selected ":"")?> ><?=$arr["title"]?></option>
    <?endforeach;?>
</select><br />
</div>

<?if ($arResult["group"]["DESCRIPTION"]!=""):?>
<p class="title_desc"><?=$arResult["group"]["DESCRIPTION"]?></p>
<?endif;?>


<div class="work_items cont_page">
<? if (count($arResult["ITEMS"])>0):?>


    <?foreach($arResult["ITEMS"] as $arItem):?>

        <div class="work_item _550">
            <div class="img">
                <a class="link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"></a>
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""/>
                <span class="effekt" style="background:<?=$arItem["PROPERTIES"]["color"]["VALUE"]!=''?$arItem["PROPERTIES"]["color"]["VALUE"]:'#3eaab7'?>;"></span>

                <div class="description" style="background:<?=$arItem["PROPERTIES"]["color"]["VALUE"]!=''?$arItem["PROPERTIES"]["color"]["VALUE"]:'#3eaab7'?>;">
                    <div class="description_in">
                        <p><?=$arItem["PREVIEW_TEXT"]?></p>
                        <div class="info">
                            <p class="makets"><?=$arItem["PROPERTIES"]["makets"]["VALUE"]?> макетов</p>
                            <p class="time"><?=$arItem["PROPERTIES"]["srok"]["VALUE"]?> месяца</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="line" style="background:<?=$arItem["PROPERTIES"]["color"]["VALUE"]!=''?$arItem["PROPERTIES"]["color"]["VALUE"]:'#3eaab7'?>;"></div>
                </div>
                <div class="right">
                    <a class="title"  href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                    <p class="desc"><?=$arItem["SECTION_NAME"]?></p>
                </div>
            </div>
        </div>



    <?endforeach;?>


<? endif; ?>
</div>
