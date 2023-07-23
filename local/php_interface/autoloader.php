<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses(null, [
    // ключ - имя класса с простанством имен, значение - путь относительно корня сайта к файлу
    'lib\IncludeByFile' => '/local/php_interface/lib/include_by_file.php'
]);