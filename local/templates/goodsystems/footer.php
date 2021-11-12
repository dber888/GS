<footer>
    <div class="wrapper">
        <div class="top">
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CACHE_SELECTED_ITEMS" => "N",
                    "CHILD_MENU_TYPE" => "top",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "36000000",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_THEME" => "site",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "Y"
                )
            );?>
        </div>
        <div class="bottom">
            <div class="left">
                <p><?=GS::getOption("addr")?></p><a href="tel:<?=GS::getOption("phone")?>"><?=GS::getOption("phone")?></a>
            </div>
            <div class="right">
                <p>© 2014-<?=date("Y")?>. Полезные системы</p>
                <a href="/privacy_policy/">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>
</body>
<link type="text/css" rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/slick-theme.css">
<link type="text/css" rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/slick.css">
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/slick.js"></script>
<link type="text/css" rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.formstyler.css">
<link type="text/css" rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.formstyler.theme.css">
<link type="text/css" rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/nice-select.css">
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.formstyler.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.maskedinput.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.gradienttext.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.nice-select.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/snap.svg.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/hoverdiv.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/modernizr.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</html>