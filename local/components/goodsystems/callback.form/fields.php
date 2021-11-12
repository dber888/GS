<?
return array(
	"NAME" => array(
		"NAME" => "Ваше имя",
        "FIELD" => false,
        "PROPERTY" => "FIO",
		"TYPE" => "STRING",
        "VALID"=>"REQUIRED"
	),
	"FULL_NAME" => array(
		"NAME" => "Ваше ФИО",
		"FIELD" => false,
		"PROPERTY" => "FIO",
		"TYPE" => "STRING",
	),
    "PHONE" => array(
        "NAME" => "Ваш телефон",
        "FIELD" => false,
        "PROPERTY" => "PHONE",
        "TYPE" => "STRING",
    ),
    "CONTACT" => array(
        "NAME" => "Ваш контакт",
        "FIELD" => false,
        "PROPERTY" => "CONTACT",
        "TYPE" => "STRING",
        "VALID"=>"REQUIRED"
    ),
	"EMAIL" => array(
		"NAME" => "E-mail",
		"FIELD" => false,
		"PROPERTY" => "EMAIL",
		"TYPE" => "STRING",
	),
	"COMMENT" => array(
		"NAME" => "Комментарий",
		"FIELD" => "DETAIL_TEXT",
		"PROPERTY" => false,
		"TYPE" => "TEXT",
        "VALID"=>"REQUIRED"
	),
	"PAGE" => array(
		"NAME" => "Страница",
		"FIELD" => false,
		"PROPERTY" => "HREF_LINK",
		"TYPE" => "HIDDEN",
	),
	"ACTION_TYPE" => array(
		"NAME" => "Действие",
		"FIELD" => "NAME",
		"PROPERTY" => false,
		"TYPE" => "HIDDEN",
	),
    "FILES" => array(
        "NAME" => "Загруженные файлы",
        "FIELD" => "false",
        "PROPERTY" => false,
        "TYPE" => "FILES",
    ),
);
?>