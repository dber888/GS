<?php
if (isset($_GET["s"])) { 
    $str = file_get_contents("https://ws3.morpher.ru/russian/declension?s=".urlencode($_GET["s"])); 
    die($str);
}

die("dsdsd");