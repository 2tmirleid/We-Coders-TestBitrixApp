<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty('TITLE', 'Контакты');
?><!-- Контакты + ФОС -->
<div class="contact-form pt-90 pb-30">
	<div class="container">
		<div class="row">
			<div class="section-heading text-center mb-70">
				<h2>Нужен классный сайт?</h2>
				<p>
					 Оставьте заявку в форме ниже и мы всё сделаем!
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="contact-info">
 <address>
					<ul>
						<li> <i aria-hidden="true" class="fa fa-map-marker brand-color"></i>
						<div class="address">
							 Мы находимся по адресу:
							<hr>
							<p>
								 г. Саранск, ул. Советская 54, офис 322
							</p>
						</div>
 </li>
						<li> <i aria-hidden="true" class="fa fa-phone brand-color"></i>
						<div class="phone">
							<p>
								 8-930-696-6343
							</p>
						</div>
 </li>
						<li> <i class="fa fa-envelope brand-color"></i>
						<div class="mail">
							<p>
 <a href="mailto:#">valeriyjobemail@gmail.com</a>
							</p>
						</div>
 </li>
						<li></li>
					</ul>
 </address>
				</div>
			</div>
			 <?$APPLICATION->IncludeComponent(
	"tutmirleid:main.feedback",
	"contactsPageForm",
	Array(
		"AJAX_MODE" => "Y",
		"EMAIL_TO" => "valeriyjobemail@gmail.com",
		"EVENT_MESSAGE_ID" => ["7"],
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => ["NAME","EMAIL",'PHONE'],
		"USE_CAPTCHA" => "N"
	)
);?>
		</div>
	</div>
</div>
 <!-- Карта -->
<div class="map-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="map" class="mtb-90">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"API_KEY" => "",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:54.180224999995964;s:10:\"yandex_lon\";d:45.17752399999999;s:12:\"yandex_scale\";i:10;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:45.17730083182805;s:3:\"LAT\";d:54.180322375674415;s:4:\"TEXT\";s:35:\"Главный офис 'We Coders'\";}}}",
		"MAP_HEIGHT" => "450",
		"MAP_ID" => "",
		"MAP_WIDTH" => "1920",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
				</div>
			</div>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>