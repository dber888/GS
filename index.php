<? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");

$APPLICATION->SetPageProperty("TITLE", "Разработка и поддержка сайтов, дизайн сайтов и логотипов,  интернет-магазины и сервисы - Полезные системы");
$APPLICATION->SetPageProperty("description", "Создание сайтов на Битрикс с индивидуальным дизайном, Техническая поддержка сайтов, Дизайн сайтов, логотипов, фирменного стиля");
$APPLICATION->SetPageProperty("keywords", "Создание сайтов, Техническая поддержка сайтов, дизайн сайтов, сделать сайт на Битрикс");
 ?>




    <div class="index_block">
        <div class="wrapper">
            <div class="head">
                <?/*<!--    <h2>Стараемся чтобы <br>наша работа была для вас <span>полезной</span></h2>-->*/?>
                <p class="title_desc">Мы стремимся к тому, чтобы практически каждый пиксель нашей работы, каждый знак кода был направлен на достижение цели, ради которой создавался продукт. Именно поэтому мы тщательно подходим к каждому этапу производственного процесса и долго еще приглядываем за своими работами.</p>
            </div>
            <div class="work_items">
                <? $GLOBALS["arrFilter"]=array("ACTIVE"=>"Y","PROPERTY_show_on_main_VALUE"=>"Да") ?>
                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"works_main", 
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
                        1 => "PREVIEW_TEXT",
                        2 => "DETAIL_TEXT",
                        3 => "DETAIL_PICTURE",
                        4 => "",
                    ),
                    "FILTER_NAME" => "arrFilter",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "3",
                    "IBLOCK_TYPE" => "WORKS",
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
                        0 => "height_main",
                        1 => "makets",
                        2 => "srok",
                        3 => "members",
                        4 => "color",
                        5 => "button_title",
                        6 => "link",
                        7 => "",
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
                    "COMPONENT_TEMPLATE" => "works_main",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO"
                ),
                false
            );?>


                <div class="all_works">
                    <div class="left">
                        <p class="num"><? $work =GS::GetCountElements(array("IBLOCK_ID"=>3)); echo $work;?></p>
                    </div>
                    <div class="right">
                        <p><?=GS::word($work,array("интересная работа","интересные работы","интересных работ"))?> <br>в нашем портфолио</p>
                        <a class="h_border white_back green_line" href="/works/">Все работы<i></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>





    <div class="index_block">
        <div class="wrapper">
            <div class="head">
                <h2>Мы умеем делать и <br>делаем это <span>с любовью</span></h2>
                <p class="title_desc">Мы помогаем нашим клиентам с решением целого перечня задач. Но нам гораздо интереснее, если клиент доверит нам вывод нового продукта или услуги на рынок с самого начала (вплоть до нейминга и разработки логотипа), а не только разработку сайта. </p>
            </div>
            <div class="services_items slider_320">
                <div class="item" data-svg="svg_projecting">
                    <div class="svg svg_draw hidd">
                        <svg id="projecting"></svg>
                    </div>
                    <a href="/services/#proect" class="title">Проектирование</a>
                    <p>Подробные документальные технические задания и интерактивные прототипы Вашего будущего сайта или Web-сервиса</p>
                </div>
                <div class="item" data-svg="svg_design">
                    <div class="svg svg_draw hidd">
                        <svg id="design"></svg>
                    </div>
                    <a href="/services/#design" class="title">Дизайн</a>
                    <p>Оригинальный и эффективный дизайн сайта, яркий и незабываемый логотип и фирменный стиль</p>
                </div>
                <div class="item" data-svg="svg_development">
                    <div class="svg svg_draw hidd">
                        <svg id="development"></svg>
                    </div>
                    <a href="/services/#develop" class="title">Разработка</a>
                    <p>Лэндинг с высокой конверсией, стильный к орпоративный сайт, качественный Интернет-магазин, цепляющий промо-сайт</p>
                </div>
                <div class="item" data-svg="svg_support">
                    <div class="svg svg_draw hidd">
                        <svg id="support"></svg>
                    </div>
                    <a href="/services/#support" class="title">Поддержка</a>
                    <p>Оперативная дизайн и техническая поддержка проектов собственной и сторонней разработки</p>
                </div>
            </div>
        </div>
    </div>
    <div class="index_block klienty_out">
        <div class="wrapper">
            <div class="head">
                <h2>Наши <br>клиенты</h2>
            </div>
            <div class="row">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "reviews",
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
                            1 => "PREVIEW_TEXT",
                            2 => "DETAIL_TEXT",
                            3 => "DETAIL_PICTURE",
                            4 => "",
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "5",
                        "IBLOCK_TYPE" => "WORKS",
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
                            0 => "project",
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
                        "COMPONENT_TEMPLATE" => "works_main",
                        "COMPOSITE_FRAME_MODE" => "A",
                        "COMPOSITE_FRAME_TYPE" => "AUTO"
                    ),
                    false
                );?>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "clients",
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
                            1 => "PREVIEW_TEXT",
                            2 => "DETAIL_TEXT",
                            3 => "DETAIL_PICTURE",
                            4 => "PREVIEW_PICTURE",
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "6",
                        "IBLOCK_TYPE" => "WORKS",
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
                        "COMPONENT_TEMPLATE" => "works_main",
                        "COMPOSITE_FRAME_MODE" => "A",
                        "COMPOSITE_FRAME_TYPE" => "AUTO"
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
		"EMAIL" => "dmitry.berezikov@gmail.com",
		"EVENT_TEMPLATE_ID" => 11,
		"IBLOCK_TYPE" => "FORMS",
		"IBLOCK_ID" => "7",
		"FIELDS" => array(
			0 => "NAME",
			1 => "CONTACT",
			2 => "COMMENT",
			3 => "FILES",
		),
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "CONTACT",
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
                <h2>Есть для нас проект?</h2>
            </div><span class=" margin_ h_border green_back white_line">Давайте обсудим <i></i></span>
        </div>

    </div>


<? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>