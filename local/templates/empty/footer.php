<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!-- Футер -->
<footer class="footer-style-2">
    <div class="footer-top-area brand-bg pad-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="footer-widget footer-widget-center text-center">
                        <!-- Лого + текст -->
                        <div class="footer-logo">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo/logo-white.png" alt=""/>
                            </a>
                        </div>
                        <p>Если вы похожи на большинство компаний, у вас нет маркетингового бюджета в миллион
                            долларов<br>
                            или своей команды разработки. Но это не значит, что у вас не может быть<br>
                            сайта мирового класса. И мы вам в этом поможем!</p>

                        <!-- Соц. сети -->
                        <div class="social-icon">
                            <a href="https://t.me/Tutmirleid"><i class="fa-brands fa-telegram"></i></a>
                            <a href="https://vk.com/id324754967"><i class="fa fa-vk"></i></a>
                            <a href="https://www.instagram.com/dayte_denek"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- нижнее меню -->
    <div class="footer-bottom-area pad-20 brand-bg footer-border">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="copyright white-text">
                        <p>We Coders © 2018</p>
                    </div>
                </div>
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "bottom_menu",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "N",
                        "ROOT_MENU_TYPE" => "bottom",
                        "USE_EXT" => "N",
                        "COMPONENT_MENU" => "bottom_menu"
                    )
                );?>

            </div>
        </div>
    </div>
</footer>


</body>
</html>