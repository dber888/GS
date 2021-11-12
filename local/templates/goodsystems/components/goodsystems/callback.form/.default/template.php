<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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


<?   if (!empty($arResult["ERRORS"])):?>
<script>
$(document).ready(function(e) {
	ShowMessage('<?=implode("\n", $arResult["ERRORS"])?>', true);
});
</script>
<? endif;  ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?  if (strlen($arResult["MESSAGE"]) > 0):?>
    <script>
    var YreachGoal = 'CALLBACK';
    $(document).ready(function(e) {
        ShowMessage('<?=$arResult["MESSAGE"]?>', false);
    });
    </script>
<? endif ?>





<div  id="form-<?=$arParams['ID']?>">
<form class="form"  method="post"  id="proj_form"   name="iblock_add" enctype="multipart/form-data"  id="form-<?=$arParams['ID']?>">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="callBackAction" value="sendCallBack" />
    <input type="hidden" name="ID" value="<?=$arParams['ID']?>" />


    <input type="hidden" name="F_PAGE" value="1" />
    <input type="hidden" name="F_ACTION_TYPE" value="<?=$arParams['ID']?>" />

    <?/* foreach($arResult['FIELDS'] as $KEY => $arField):?>
        <div class="from__row row">
            <div class="col-sm-12 col-md-6 col-lg-6">
            <? if($arField['TYPE'] == 'STRING'):?>
                    <input type="text"  class="styled index-from-input"  name="F_<?=$KEY?>" value="<?=$arResult["VALUES"][$KEY]?>"<? if(in_array($KEY, $arParams['REQUIRED_FIELDS'])):?> required<? endif?> placeholder="<? if(in_array($KEY, $arParams['REQUIRED_FIELDS'])):?>*<? endif?><?=$arField['NAME']?>" id="<?=$arParams['ID']?>_F_<?=$KEY?>" />

            <? elseif($arField['TYPE'] == 'TEXT'):?>
                <textarea  class="styled index-from-input"  name="F_<?=$KEY?>" placeholder="<? if(in_array($KEY, $arParams['REQUIRED_FIELDS'])):?>*<? endif?>Сообщение"<? if(in_array($KEY, $arParams['REQUIRED_FIELDS'])):?> required<? endif?> id="<?=$arParams['ID']?>_F_<?=$KEY?>"><?=$arResult["VALUES"][$KEY]?></textarea>
            <? endif?>
            </div>
        </div>
    <? endforeach  */?>


    <div class="from__row row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <input class="styled index-from-input" required  type="text" data1  name="F_NAME" placeholder="Ваше имя">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <input class="styled index-from-input" required name="F_CONTACT" placeholder="Телефон или Email" type="text">
        </div>
    </div>

    <div class="from__row row from__row--witch-select">

        <div class="col-sm-12 col-md-12 col-lg-12">
            <textarea class="styled index-from-input" required  name="F_COMMENT" placeholder="Сообщение "></textarea>
        </div>

    </div>

    <?/*<div class="from__row row">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<input class="file" type="file" name="F_FILES[]" multiple>
		</div>

    </div>*/?>

    <div class="from__row row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <label class="checkbox-label">
                <input type="checkbox" checked="checked"   id="privancy_checkbox_<?=$arParams['ID']?>" />
                <div class="form-policy">Нажимая кнопку "Отправить", вы соглашаетесь с <a href="">политикой конфиденциальности</a></div>

            </label>
        </div>
    </div>

    <?/*
    <div class="from__row">
        <label class="checkbox-label">
            <input type="checkbox" checked="checked" onclick="checkPrivancy(this, '<?=$btnID?>');" id="privancy_checkbox_<?=$arParams['ID']?>" /> Я согласен(на) на обработку персональных данных<br>в соответствии с <a href="/soglasie/" target="_blank">Положением об обработке персональных данных</a>
        </label>
    </div>*/?>
    <script>
        function proj_submit(token) {
            document.getElementById("proj_form").submit();
        }
    </script>

    <div class="from__row"><?
        $btnID = 'btn_'.rand(0, 99999);
        ?>
		<div class="form__button">

            <input type="button" class="g-recaptcha button-green btn"  id="<?=$btnID?>"
                   data-sitekey="<?=$arParams['RECAPTCHA_PUBLIC']?>" data-callback='proj_submit'  value="Отправить">


        </div>
		<div class="form__button"><input class="button-gray button-green btn cancel" type="button" value="Отмена"></div>

    </div>
</form>
</div>




<?/*<div class="popup-form form-zvonok" style="display:none;" id="form-<?=$arParams['ID']?>">
	<div class="popup-form-container">
<form name="iblock_add" method="post">
	<?=bitrix_sessid_post()?>
    <input type="hidden" name="callBackAction" value="sendCallBack" />
	<input type="hidden" name="ID" value="<?=$arParams['ID']?>" />
	<? foreach($arResult['HIDDEN_FIELDS'] as $KEY => $arField):?>
	<input type="hidden" name="F_<?=$KEY?>" value="<?=$arResult["VALUES"][$KEY]?>" id="<?=$arParams['ID']?>_F_<?=$KEY?>" />
	<? endforeach?>
	<h2 class="title byonclick"><span>&nbsp;</span></h2>
	<div class="form-text">
		<? foreach($arResult['FIELDS'] as $KEY => $arField):?>
		<div class="form-line">
			<? if($arField['TYPE'] == 'STRING'):?>
			<span class="<?=$KEY?>"><input type="text" name="F_<?=$KEY?>" value="<?=$arResult["VALUES"][$KEY]?>"<? if(in_array($KEY, $arParams['REQUIRED_FIELDS'])):?> required<? endif?> placeholder="<? if(in_array($KEY, $arParams['REQUIRED_FIELDS'])):?>*<? endif?><?=$arField['NAME']?>" id="<?=$arParams['ID']?>_F_<?=$KEY?>" /></span>
			<? elseif($arField['TYPE'] == 'TEXT'):?>
			<textarea name="F_<?=$KEY?>" placeholder="<? if(in_array($KEY, $arParams['REQUIRED_FIELDS'])):?>*<? endif?>Сообщение"<? if(in_array($KEY, $arParams['REQUIRED_FIELDS'])):?> required<? endif?> id="<?=$arParams['ID']?>_F_<?=$KEY?>"><?=$arResult["VALUES"][$KEY]?></textarea>
			<? endif?>
		</div>
		<? endforeach?>
		<?
		$btnID = 'btn_'.rand(0, 99999)
		?>
		<div class="form-line privancy_container" style="padding:0 20px;">
            <input type="checkbox" checked="checked" onclick="checkPrivancy(this, '<?=$btnID?>');" id="privancy_checkbox_<?=$arParams['ID']?>" /> <label for="privancy_checkbox_<?=$arParams['ID']?>"> Я согласен(на) на обработку персональных данных<br>в соответствии с <a href="/soglasie/" target="_blank">Положением об обработке персональных данных</a>. *</label>
		</div>
		<div class="button-container">
			<button type="submit" class="btn" id="<?=$btnID?>"><span>Отправить</span></button>
		</div>
	</div>
</form>

	</div>
</div>
 */?>

<script>
BX.message({
	'CALLBACK_SUCCESS_<?=$arParams['ID']?>': '<?=html_entity_decode($arParams['SEND_OK_MESSAGE'])?>'
});
</script>