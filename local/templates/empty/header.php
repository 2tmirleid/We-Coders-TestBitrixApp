<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
        <html class="no-js" lang="en">
        <head>
            <?$APPLICATION->ShowHead();?>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">

            <title><?$APPLICATION->ShowTitle();?></title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicon.png">

            <!-- google fonts (шрифты) -->
            <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
            <?
            //Подключение стилей
                Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/bootstrap.min.css");
                Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/owl.carousel.css");
                Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/animate-text.css");
                Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/magnific-popup.css");
                Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/et-line.css");
                Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/pe-icon-7-stroke.css");
                Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/shortcode/shortcodes.css");
                Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/meanmenu.min.css");
                Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/font-awesome.min.css");
                Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/style.css");
                Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/responsive.css");
            //Подключение скриптов
                Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/vendor/modernizr-2.8.3.min.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/vendor/jquery-1.12.0.min.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/bootstrap.min.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/owl.carousel.min.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.counterup.min.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/waypoints.min.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.magnific-popup.min.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.mixitup.min.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.meanmenu.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.nav.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.parallax-1.1.3.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/animate-text.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/plugins.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/main.js");
            Asset::getInstance()->addString('<script src="https://kit.fontawesome.com/6199e25e57.js" crossorigin="anonymous"></script>');
            ?>

        </head>
        <body>
        <div id="panel">
            <?$APPLICATION->ShowPanel();?>
        </div>

        <!-- Линия с контактами -->
        <div class="header-top-area bg-color ptb-10 hidden-xs <?= ($APPLICATION->GetCurDir() === '/') ? 'transparent-header' : 'white-bg'; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="welcome">
                            <span>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/includes/header/header_email.php"
                                    )
                                );?>
                            </span>
                            <span>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/includes/header/header_phone.php"
                                    )
                                );?>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="social-icon-header text-right">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/includes/header/header_telegram.php"
                                )
                            );?><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/includes/header/header_vk.php"
                                )
                            );?><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/includes/header/header_inst.php"
                                )
                            );?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Шапка сайта (меню) -->
        <header id="sticky-header" class="header-area header-wrapper <?= ($APPLICATION->GetCurDir() === '/') ? 'transparent-header' : 'white-bg'; ?>">

            <!-- Меню (для десктопа) -->
            <div class="header-middle-area full-width">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <!-- Логотип -->
                            <div class="col-md-2 col-sm-3 col-xs-8">
                                <div class="logo ptb-22">
                                    <a href="index.html">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo/logo.png" alt="main logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-10 col-sm-9 col-xs-4 text-right dark-menu">
                                <!-- Меню (основное) -->
                                <? $APPLICATION->IncludeComponent("bitrix:menu", "top_menu", [
                                    "ALLOW_MULTI_SELECT"    => "N",
                                    "CHILD_MENU_TYPE"       => "subtop",
                                    "DELAY"                 => "N",
                                    "MAX_LEVEL"             => "2",
                                    "MENU_CACHE_GET_VARS"   => [],
                                    "MENU_CACHE_TIME"       => "3600",
                                    "MENU_CACHE_TYPE"       => "N",
                                    "MENU_CACHE_USE_GROUPS" => "N",
                                    "ROOT_MENU_TYPE"        => "top",
                                    "USE_EXT"               => "Y",
                                    "COMPONENT_TEMPLATE"    => "top_menu",
                                ], false); ?>

                            </div>
                                <!-- Меню (для мобилки) -->
                                <? $APPLICATION->IncludeComponent("bitrix:menu", "topMenuMobile", [
                                    "ALLOW_MULTI_SELECT"    => "N",
                                    "CHILD_MENU_TYPE"       => "left",
                                    "DELAY"                 => "N",
                                    "MAX_LEVEL"             => "2",
                                    "MENU_CACHE_GET_VARS"   => [],
                                    "MENU_CACHE_TIME"       => "3600",
                                    "MENU_CACHE_TYPE"       => "N",
                                    "MENU_CACHE_USE_GROUPS" => "N",
                                    "ROOT_MENU_TYPE"        => "top",
                                    "USE_EXT"               => "N",
                                    "COMPONENT_TEMPLATE"    => "top_menu",
                                ], false); ?>
        </header>

        <?php if ($APPLICATION->GetCurDir() !== '/'): ?>
            <!-- Хлебные крошки (навигация) -->
            <div class="breadcrumb-area brand-bg ptb-100">
                <div class="container width-100">
                    <div class="row z-index">
                        <div class="col-md-7 col-sm-6">
                            <div class="breadcrumb-title">
                                <h2 class="white-text"><?php $APPLICATION->ShowTitle(false); ?></h2>
                            </div>
                        </div>
                        <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb", "topNavigate", Array(
                            "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                            "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                            "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                            "COMPONENT_TEMPLATE" => ".default"
                        ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        <?php endif; ?>


