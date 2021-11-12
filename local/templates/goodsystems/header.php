<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
//CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);
$tmp = explode("?",$curPage);
$curPage=$tmp[0];

//$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "blue", SITE_ID);
?>
<!DOCTYPE html>
<html>
  <head>
      <link rel="icon" href="/local/templates/goodsystems/img/favicon.png" type="image/x-icon">


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <?$APPLICATION->ShowHead(); $ver=29;?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link type="text/css" rel="stylesheet" href="/local/templates/goodsystems/css/bootstrap-grid.css">
      <meta name="yandex-verification" content="7a174f6c6a118d89" />
    <link type="text/css" rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css?ver=<?=$ver?>">
    <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->

      <!-- Yandex.Metrika counter -->
      <script type="text/javascript" >
          (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
              m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
          (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

          ym(28434946, "init", {
              clickmap:true,
              trackLinks:true,
              accurateTrackBounce:true,
              webvisor:true
          });
      </script>
      <noscript><div><img src="https://mc.yandex.ru/watch/28434946" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
      <!-- /Yandex.Metrika counter -->

  </head>
  <body>

        <div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <div class="test"><img src="<?=SITE_TEMPLATE_PATH?>/images/ps_main22.jpg" alt="">
            <img class="_1024" src="<?=SITE_TEMPLATE_PATH?>/images/ps_main_1024.jpg" alt="">
            <img class="_768" src="<?=SITE_TEMPLATE_PATH?>/images/ps_main_768.jpg" alt="">
            <img class="_320" src="<?=SITE_TEMPLATE_PATH?>/images/ps_main_320.jpg" alt="">
        </div>

  <?if ($curPage=="/index.php") : ?>
    <div class="first_screen" >
        <header class="main">
            <div class="logo"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></a></div>

            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                ".default2",
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

            <div class="top_menu"><i class="t_l"></i><i class="t_r"></i><i class="b_l"></i><i class="b_r"></i></div>
            <a class="phone" href="tel:<?=GS::getOption("phone")?>"><?=GS::getOption("phone")?></a>

            <div class="top-menu-header">
                <div class="logo logo--top-menu"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></a></div>
                <div class="top_menu top_menu--top-menu"><i class="t_l"></i><i class="t_r"></i><i class="b_l"></i><i class="b_r"></i></div>
                <a class="phone phone--top_menu" href="tel:<?=GS::getOption("phone")?>"><?=GS::getOption("phone")?></a>
            </div>
            <div id="menu" class="top-menu">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    ".default",
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
        </header>

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "slider",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "DETAIL_TEXT",
                    2 => "DETAIL_PICTURE",
                    3 => "PREVIEW_TEXT",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "CONTENT",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "button_title",
                    2 => "link",
                    3 => "",
                ),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "COMPONENT_TEMPLATE" => "slider"
            ),
            false
        );?>



        <div class="fs_back"><img src="<?=SITE_TEMPLATE_PATH?>/img/fs_back.jpg" alt=""></div>
    </div>
  <?else:?>
        <header class="pagee">
            <div class="top-menu-header top-menu-header--white">
                <div class="wrapper  11container-fluid top-menu-header--inside">
                    <div class="logo logo--top-menu"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></a></div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        ".default2",
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

                    <div class="top_menu top_menu--top-menu">
                        <i class="t_l"></i>
                        <i class="t_r"></i>
                        <i class="b_l"></i>
                        <i class="b_r"></i>
                    </div>
                    <a class="phone phone--top_menu" href="tel:<?=GS::getOption("phone")?>"><?=GS::getOption("phone")?></a>
                </div>
            </div>
            <div id="menu" class="top-menu">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    ".default",
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
        </header>

<?endif;?>
