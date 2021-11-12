<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="top-menu-list">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="top-menu-list__item link "><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li class="top-menu-list__item link "><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
<?endforeach?>




        <li class="top-menu-list__item button-green button-green--mob-menu"><a href="#">Обсудить проект</a></li>
        <li  class="top-menu-list__item"><a class="phone phone--top-menu"  href="tel:<?=GS::getOption("phone")?>"><?=GS::getOption("phone")?></a></li>
        <li  class="top-menu-list__item"><a class="phone phone--top-menu"  href="mailto:<?=GS::getOption("email")?>"><?=GS::getOption("email")?></a></li>
</ul>
<?endif?>