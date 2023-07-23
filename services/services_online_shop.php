<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty('TITLE', 'Онлайн-магазин');
?>

    <!-- ДЛЯ СТРАНИЦЫ УСЛУГИ -->
    <!-- Описание + картинка -->
    <section class="who-area-are pad-90" id="about_us">
        <div class="container">
            <h2 class="title-1">Разработка интернет-магазина</h2>
            <div class="row">
                <div class="col-md-7">
                    <div class="who-we">
                        <p>
                            <b>Интернет-магазин</b> — сайт, торгующий товарами посредством сети
                            Интернет. Позволяет пользователям онлайн, в своём браузере или через мобильное приложение,
                            сформировать заказ на покупку, выбрать способ оплаты и доставки заказа, оплатить заказ. При этом
                            продажа товаров осуществляется дистанционным способом и она накладывает ограничения на
                            продаваемые товары </p>

                        <p>Неоспоримый плюс подобных приобретений – это колоссальная экономия времени, которое обычно
                            требуется до того, чтобы добраться до торгового комплекса или рынка. Помимо этого, стоит выделить
                            следующие преимущества интернет-магазина: </p>
                        <ul>
                            <li>Нет необходимости стоять в многочасовых очередях.</li>
                            <li>Не нужно покидать квартиру.</li>
                            <li>Покупки можно совершать в любое время.</li>
                        </ul>
                        <p>Это далеко не все преимущества интернет-магазина. Поэтому большинство успешных компаний,
                            занимающихся продажей сейчас имеют интернет магазины.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-bg">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/services/interner_shop.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Доп. контент об услуге -->
    <div class="pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mb-30">Вопросы и ответы</h3>
                    <div class="brand-accordion">
                        <div class="panel-group icon angle-icon" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Что я получу в итоге?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        На выходе вы получите сайт интернет-магазин размещенный на хостинге с настроенным
                                        доменом, который будет полностью готов к интернет торговле.<br>
                                        Также вам будут высланы все макеты страницы, которые были сделаны во время работы.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Какие сроки?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Средние сроки создания интернет магазина от 3х до 6ти недель.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Будет ли наполнен каталог товаров?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        По умолчанию нет, но если в этом есть необходимость, то каталог также будет наполнен.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h3 class="mb-30">Этапы разработки</h3>
                    <div class="my-tab">
                        <!-- Nav tabs -->
                        <ul class="custom-tab mb-15" role="tablist">
                            <li role="presentation" class="active"><a href="#analytyc" aria-controls="analytyc" role="tab" data-toggle="tab">Аналитика</a></li>
                            <li role="presentation"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">Дизайн</a></li>
                            <li role="presentation"><a href="#progging" aria-controls="progging" role="tab" data-toggle="tab">Программирование</a></li>
                            <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab">Наполнение</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Настройка</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="analytyc">
                                <p>Перед началом работ будет проведена этап аналитики, в котором мы определим ваши
                                    предпочтения по дизайну, функционалу, контенту и прочие требования.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="design">
                                <p>Следующим этапом будет отрисовка дизайна, а затем внесение правок. </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="progging">
                                <p>После отрисовки макетов будет произведена верстка и программирование, а также тестирование функционала сайта.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="content">
                                <p>Когда сайт будет готов, при необходимости будет наполнен каталог товарами.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="settings">
                                <p>На последнем этапе сайт будет загружен на хостинг, будет настроен домен и произведены все необходимые настройки хотинга.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>