<?php

if (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
    //header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
}


setlocale(LC_ALL, 'ru_RU.UTF-8');
setlocale(LC_NUMERIC, 'C');

use Bitrix\Main\Loader;

require_once(__DIR__ . "/gs_class.php");
