<?php

namespace lib;

class IncludeByFile
{
    function getComponentByFile($path) {
        global $APPLICATION;
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH . `$path`
            )
        );
    }
}