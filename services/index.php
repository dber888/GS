<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><div class="breadcrumbs">
	<div class="wrapper">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
Array()
);?>
	</div>
</div>
<div class="index_block cont_page ">
	<div class="wrapper">

        <?
        $tmp = explode("?",$_SERVER["REQUEST_URI"]);

        if (preg_match("|\/services\/.+|isx",$tmp[0])) :

            $APPLICATION->IncludeComponent(
	"bitrix:news", 
	"services", 
	array(
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
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "CONTENT",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
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
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
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
		"COMPONENT_TEMPLATE" => "services",
		"SEF_FOLDER" => "/services/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#",
		)
	),
	false
);
        else: ?>





		<div class="head">
            <a name="#develop"></a>
			<h1 class="h2">Мы можем быть <br>
			 вам полезны.  <span>Наши услуги </span></h1>


            <div class="itm">
                <h2 class="otstup">Разработка сайтов и Web-сервисов</h2>
                <p class="title_desc">
                    Мы предоставляем полный комплекс услуг по созданию сайтов различной степени сложности от составления требований до сдачи полностью настроенного проекта.
                    Обычно мы делаем под ключ <a >корпоративные сайты</a>, <a >интернет-магазины</a>, <a >одностраничные сайты Landing-page</a>, <a  >готовые сайты на Bitrix</a>
                    <br /> <br />
                    Так же мы занимаемся разработкой скриптов, выполняющих нужные вам задачи, например парсинг, изменение форматов даных, интеграция с web-сервисами, CRM и т.д.


                </p>
            </div>
            <div class="itm">
                <h2 class="otstup">Проектирование</h2>
                <p class="title_desc">
                    Техническое задание и прототипы позволяет контролировать качество создаваемого продукта,а еще поможет отстоять свою правоту в случае необходимости. <br /><br />
                    Наш опыт позволяет максимально полно собрать  все требования к новому продукту, чтобы ни один момент не был упущен при разработке.
                </p>
            </div>
            <?/*
			<p class="otstup">
 <span class="hdr">Примеры выполненных работ:</span>
			</p>
			<div class="projects">
				<ul>
					<li>
					<div>
						<h3>Стар Коммэн</h3>
						<p>
							 Разработка адаптивного корпоративного сайта крупозавода
						</p>
 <a class="a_watch" target="_blank" href="http://altai-krupa.ru">Смотреть</a>
					</div>
 <img width="400" alt="Стар Коммэн" src="https://good-systems.ru/assets/components/phpthumbof/cache/starkommen_preview.e8f302044b95dae287b25e426bb1a65e1.jpg" height="300"> </li>
					<li>
                        <div>
                            <h3>Taller</h3>
                            <p>
                                 Аукцион монет, бон и других предметов коллекционирования. Полностью адаптивный сайт
                            </p>
                            <a class="a_watch" target="_blank" href="http://tallerbid.ru">Смотреть</a>
                        </div>
                        <img width="400" alt="Taller" src="https://good-systems.ru/assets/components/phpthumbof/cache/auction_preview.e8f302044b95dae287b25e426bb1a65e1.jpg" height="300">
                    </li>
					<li>
                        <div>
                            <h3>МИРТ</h3>
                            <p>
                                 Разработка логотипа и лэндинга компании, занимающейся организацией оптовых поставок из Китая
                            </p>
                            <a class="a_watch" target="_blank" href="http://mirt-import.ru">Смотреть</a>
                        </div>
                        <img width="400" src="https://good-systems.ru/assets/components/phpthumbof/cache/mirt_preview.e8f302044b95dae287b25e426bb1a65e1.jpg" height="300" alt="МИРТ">
                    </li>
					<li>
                        <div>
                            <h3>МИРТ</h3>
                            <p>
                                 Разработка логотипа и лэндинга компании, занимающейся организацией оптовых поставок из Китая
                            </p>
                            <a class="a_watch" target="_blank" href="http://mirt-import.ru">Смотреть</a>
                        </div>
                        <img width="400" src="https://good-systems.ru/assets/components/phpthumbof/cache/mirt_preview.e8f302044b95dae287b25e426bb1a65e1.jpg" height="300" alt="МИРТ">
                    </li>
				</ul>
			</div>*/?>
<?/*
<!--            <p class="title_desc">-->
<!--                <a  class="button-green" href="/services/razrabotka-saytov"  >Подробнее</a>-->
<!--            </p>-->*/?>



            <a name="#support"></a>
            <div class="itm">
                <h2 class="otstup">Техническая поддержка сайтов</h2>
                <p class="title_desc">
                    Оказываем техническую поддержку для сайтов на платформах Битрикс "Управление сайтом" и Modx:</p>
                <ul style="margin-top: -20px;">
                    <li>Экстренное реагирование в случае сбоев, восстановление</li>
                    <li>Периодическое резервное копирование</li>
                    <li>Решение вопросов с третьими лицами от имени заказчика(хостинг; регистратор; сервисы, интегрированные с сайтом)</li>
                    <li>Развитие проекта, внедрение технических заданий сео-оптимизаторов и т.д.</li>
                    <li>Консультирование</li>
                </ul>
            </div>
<?/*<!--            <p class="title_desc">-->
<!--                <a  class="button-green" href="/services/tekhnicheskaya-poddnrzhka"  >Подробнее</a>-->
<!--            </p>-->*/?>




            <a name="#design"></a>
            <div class="itm">
                <h2 class="otstup">Дизайн сайтов, логотипов <br /> и фирменного стиля</h2>
                <p class="title_desc">
                    Создание логотипа  - очень ответственный шаг на пути новой компании, потому что все люди будут ассоциировать его с самой компанией.
                    К тому же логотип может влять на первоначальную лояльность лиентов.
                    За годы нашей работы мы создали более 50 логотипов и с радостью сделаем еще.
                </p>
            </div>
            <?/*
<!--            <p class="title_desc">-->
<!--                <a  class="button-green" href="/services/dizayn-logotipov"  >Подробнее</a>-->
<!--
 </p>-->*/?>

            <!--
            <div class="itm">

                <a name="#context"></a>
                <h2 class="otstup">Контекстная реклама</h2>
                <p class="title_desc">
                     Контекстная реклама - это самый быстрый способ привести целевых посетителей на свой сайт и получить результат.
                     Мы успешно настраиваем рекламные компании на площадках Yandex Direct и Google Adwords уже более 5 лет.
                </p>
            </div>-->
        <?/*
<!--            <p class="title_desc">-->
<!--                <a  class="button-green" href="/services/kontekstnaya-reklama"  >Подробнее</a>-->
<!--            </p>-->*/?>

		</div>
    <?endif;?>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>