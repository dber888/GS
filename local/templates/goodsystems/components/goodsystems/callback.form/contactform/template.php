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


<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<? if (!empty($arResult["ERRORS"])):?>
<script>
$(document).ready(function(e) {
	ShowMessage("<?=implode("\n", $arResult["ERRORS"])?>", true);
});
</script>
<? endif; ?>



<? if (strlen($arResult["MESSAGE"]) > 0):?>
<script>
// var YreachGoal = 'CALLBACK';
$(document).ready(function(e) {
	ShowMessage("<?=$arResult["MESSAGE"]?>", false);
});
</script>
<? endif?>

<div  id="form-<?=$arParams['ID']?>">
<form action="/contacts/" class="contacts__form" id="cont-form" method="POST">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="callBackAction" value="sendCallBack" />
    <input type="hidden" name="ID" value="<?=$arParams['ID']?>" />


    <input type="hidden" name="F_PAGE" value="1" />
    <input type="hidden" name="F_ACTION_TYPE" value="<?=$arParams['ID']?>" />
<!--    <div class="row">-->
        <div class="col-12">Вы можете связаться с нами, заполнив форму:</div>

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






<!--        <div class="col-12 col-sm-6 contacts__form__block">-->
<!--            <input type="text" name="user_name" placeholder="Имя" class="styled" value=""   required  />-->
<!---->
<!--        </div>-->
<!--        <div class="col-12 col-sm-6 contacts__form__block">-->
<!--            <div>-->
<!--                <input type="text" name="user_email" placeholder="Почта" class="styled" value=""   />-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 contacts__form__block confirmContBlock__item" style=" margin-top: 20px;">-->
<!---->
<!--            <textarea id="area" placeholder="Ваше сообщение" class="textarea" required></textarea>-->
<!--        </div>-->

    <script>
        function con_submit(token) {
            document.getElementById("cont-form").submit();
        }
    </script>



        <div class="col-12 contacts__form__block__send">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-4 contacts__form__block__send__submit">
                    <input type="button" class="g-recaptcha button-green"
                           data-sitekey="<?=$arParams['RECAPTCHA_PUBLIC']?>" data-callback='con_submit'  value="Отправить">


                </div>
                <div class="col-12 col-lg-8 col-md-8 contacts__form__block__send__aggree">
                    <p>
                        Нажимая на кнопку, Вы подтверждаете свое согласие на обработку Ваших
                        персональных данных в соответствии с условиями <a class="policy" href="/docs/policy.docx">Политики конфиденциальности </a>
                    </p>
                </div>
            </div>
        </div>
<!--    </div>-->
</form>
</div>


<?/*
<div class="popup-form form-zvonok" style="display:none;" id="form-<?=$arParams['ID']?>">
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
</div>*/?>


<script>
BX.message({
	'CALLBACK_SUCCESS_<?=$arParams['ID']?>': '<?=html_entity_decode($arParams['SEND_OK_MESSAGE'])?>'
});
</script>