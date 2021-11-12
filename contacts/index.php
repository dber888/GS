<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
<div class="breadcrumbs">
    <div class="wrapper">
        <?$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "",
            Array()
        );?>
    </div>
</div>
<div class="contacts">
    <div class="wrapper">
        <div class="head">
            <h1 class="h2">Контакты</h1>




            <!--            <div class="row">-->
            <!--                <div class="col-12">-->
            <!--                    <h1 class="title contacts__h1">Контакты</h1>-->
            <!--                </div>-->
            <!--            </div>-->
            <div class="row contacts__content">
                <div class="col-12 col-sm-6 contacts__info">
                    <div class="row">
                        <div class="col-12 col-md-6 contacts__info__block">
                            <span class="contacts__info__block__title">Телефон:</span>
                            <span class="contacts__info__block__desc--b"><a href="tel:<?=GS::getOption("phone")?>"><?=GS::getOption("phone")?></a></span>
                        </div>
                        <div class="col-12 col-md-6 contacts__info__block">
                            <span class="contacts__info__block__title">E-mail:</span>
                            <span class="contacts__info__block__desc--b"><?=GS::getOption("email")?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 contacts__info__block">
                            <span class="contacts__info__block__title">WhatsApp:</span>
                            <span class="contacts__info__block__desc--b">
                                <a href="https://api.whatsapp.com/send?phone=<?=GS::tinyPhone("whatsapp")?>"><?=GS::getOption("whatsapp")?></a></span>
                        </div>
                        <div class="col-12 col-md-6 contacts__info__block">
                            <span class="contacts__info__block__title">Telegram:</span>
                            <span class="contacts__info__block__desc--b">
                                <a href="tg://resolve?domain=<?=GS::tinyPhone("telegram")?>"><?=GS::getOption("telegram")?></a>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 contacts__info__block">
                            <span class="contacts__info__block__title">Адрес:</span>
                            <span class="contacts__info__block__desc"><?=GS::getOption("addr")?></span>
                            <div class="contacts__info__hr">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 contacts__map">

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:map.yandex.view",
                        ".default",
                        array(
                            "API_KEY" => "",
                            "CONTROLS" => array(
                                0 => "SMALLZOOM",
                                1 => "TYPECONTROL",
                                2 => "SCALELINE",
                            ),
                            "INIT_MAP_TYPE" => "MAP",
                            "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:53.339358698303386;s:10:\"yandex_lon\";d:83.6955331581609;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:83.7030276718812;s:3:\"LAT\";d:53.33739533963677;s:4:\"TEXT\";s:31:\"Полезные системы\";}}}",



                            "MAP_HEIGHT" => "350",
                            "MAP_ID" => "",
                            "MAP_WIDTH" => "100%",
                            "OPTIONS" => array(
                                0 => "ENABLE_DBLCLICK_ZOOM",
                                1 => "ENABLE_DRAGGING",
                            ),
                            "COMPONENT_TEMPLATE" => ".default",
                            "COMPOSITE_FRAME_MODE" => "A",
                            "COMPOSITE_FRAME_TYPE" => "AUTO"
                        ),
                        false
                    );?>

                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">

                        <?$APPLICATION->IncludeComponent(
                            "goodsystems:callback.form",
                            "contactform",
                            array(
                                "TITLE" => "<span>Остались вопросы</span> свяжитесь с нами",
                                "COMPONENT_TEMPLATE" => ".default",
                                "ID" => "f",
                                "EMAIL" => "",
                                "EVENT_TEMPLATE_ID" => "",
                                "IBLOCK_TYPE" => "FORMS",
                                "IBLOCK_ID" => "7",
                                "FIELDS" => array(
                                    0 => "NAME",
                                    2 => "CONTACT",
                                    4 => "COMMENT",
//                                    4 => "FILES",
                                ),
                                "REQUIRED_FIELDS" => array(
                                ),
                                "SEND_OK_MESSAGE" => "Сообщение успешно отправлено",
                                "COMPOSITE_FRAME_MODE" => "A",
                                "COMPOSITE_FRAME_TYPE" => "AUTO",
                                "RECAPTCHA_SECRET"=>"6Ld8sMMcAAAAAB2CWoq6XsvyRObdPzONrK7e0Zos",
                                "RECAPTCHA_PUBLIC"=>"6Ld8sMMcAAAAAM-nzLn2a615lb7qetYE1W4mTa9w"


                            ),
                            false
                        );?>
                    </div>
                </div>


                <div class="col-12 col-sm-6 contacts__address">
                    <div class="contacts__address__title">
                        Наши реквизиты:
                    </div>
                    <p >
                        ИП Березиков Д.К.<br />
                        ИНН/ОГРН: 222508434190/317222500024604<br />
                        Р/с: 40802810300000119568<br />
                        К/с: 30101810145250000974<br />
                        БИК: 044525974<br />
                        АО «Тинькофф Банк»
                    </p>
                </div>

            </div></div>
    </div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>    