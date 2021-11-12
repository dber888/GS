<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наши работы");


$APPLICATION->SetPageProperty("TITLE", "Интернет-магазины, корпоративные сайты, дизайн выполненные компанией Полезные системы в Барнауле");
$APPLICATION->SetPageProperty("description", "Создание и техническая поддержка сайтов под ключ в Барнауле ✓ Дизайн сайтов, логотипов фирменного стиля ✓ Разрабатываем с нуля сайты любой сложности: от лендингов до интернет-магазинов ✓ Работаем с 2014 года ☎ Звоните 8 (3852) 57-07-59.");
$APPLICATION->SetPageProperty("keywords", "Работы Полезных систем, Наше портфолио");






?><div class="breadcrumbs">
	<div class="wrapper">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
Array()
);?>
	</div>
</div>
<div class="index_block  ">
	<div class="wrapper">
		<div class="head">
<h1 class="h2"><?$APPLICATION->ShowTitle(false);?></h1>


				 <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"projects", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "url",
			1 => "height_main",
			2 => "date_start",
			3 => "zakazchik",
			4 => "makets",
			5 => "sub_title_item",
			6 => "show_on_main",
			7 => "middle_text1",
			8 => "middle_text2",
			9 => "middle_text3",
			10 => "middle_text4",
			11 => "srok",
			12 => "members",
			13 => "color",
			14 => "celi",
			15 => "big_photos",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "WORKS",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "url",
			1 => "height_main",
			2 => "makets",
			3 => "show_on_main",
			4 => "srok",
			5 => "members",
			6 => "color",
			7 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
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
			0 => "height_main",
			1 => "makets",
			2 => "srok",
			3 => "members",
			4 => "color",
			5 => "button_title",
			6 => "link",
			7 => "",
		),
		"SEF_MODE" => "Y",
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
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "projects",
		"SEF_FOLDER" => "/works/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE_PATH#",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#",
		)
	),
	false
);?>
		</div>
	</div>
</div>

    <div class="new_project">
        <div class="white_back_new_project">
            <?$APPLICATION->IncludeComponent(
	"goodsystems:callback.form", 
	".default", 
	array(
		"TITLE" => "<span>Остались вопросы</span> свяжитесь с нами",
		"COMPONENT_TEMPLATE" => ".default",
		"ID" => "f",
		"EMAIL" => "",
		"EVENT_TEMPLATE_ID" => 11,
		"IBLOCK_TYPE" => "FORMS",
		"IBLOCK_ID" => "7",
		"FIELDS" => array(
			0 => "NAME",
			2 => "CONTACT",
            4 => "COMMENT",
            4 => "FILES",
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
        <div class="wrapper">
            <div class="title">
                <h2>Понравился проект?</h2>
            </div><span class=" margin_ h_border green_back white_line">Давайте обсудим <i></i></span>
        </div>

    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>