<?php include("modal/baza.php");?> 
<!DOCTYPE html>
 
 
<html lang="ru"> 

<head> 
 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122214809-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}  
  gtag('js', new Date());

  gtag('config', 'UA-122214809-1'); 
  gtag('config', 'AW-797146162');

</script>
  

	<script type="application/ld+json">
        {
         "@context" : "http://schema.org",
         "@type" : "Organization",
         "name" : "«Pc-master» - сеть сервисных центров",
         "url" : "https://www.pc-master.com.ua/",
         "sameAs" : []
        }
</script>

  <!-- Event snippet for Клик - заказ conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-797146162/xtysCJyntYYBELL4jfwC',
      'value': 1.0,
      'currency': 'UAH',
      'transaction_id': '',
      'event_callback': callback
  });
  return false;
}
</script>

	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/main.min.css?v=<?=time();?>"> 
	<link rel="stylesheet" type="text/css" href="css/icons/adv-icons.css?v=<?=time();?>">
	<link rel="stylesheet" type="text/css" href="css/icons/serv-icons.css?v=<?=time();?>"> 
	<link rel="icon" href="favicon.ico.png" type="image/x-icon">
	<meta name="description" content="Ремонт компьютеров в Киеве. Работаем быстро и качественно! Бесплатный выезд мастера. Звоните! +38(093)537-35-22, +38(095) 608-16-72">

	<title>Ремонт компьютеров в Киеве! на дому или офисе</title>
</head>
 
<body>
 
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2VFP29"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="mask_menu"></div>


<section class="section_modal_phone">
	<div id="mask"></div>
		<div class="container_modal_phone">
			
			<div id="modalMain">
					<div class="close"></div>
						<div id="phoneOrder">
									 <div id="phoneOrderName" > Заказать звонок </div>
									 <div>											 
											<form  action="" method="post" id="contact_form" name="phoneMainOeder" onsubmit="return false;">
											<input size="15" type="text" name="phoneName"  id="phoneName" value="Ваше имя:" class="input-text"> 
											<input size="15" type="text" name="phonePhone" id="phonePhone" value="Ваш телефон:" class="input-text">
											 <input  type="submit" class="modal_phone_button button" name="phoneSend" value="Заказать"></input>
											 </form>
										</div>
						</div>
			</div>

		</div>
</section>


			 


<section class="section_menu flex">
	<div class="container container_menu flex">
		<div class="warp_content_menu flex">

			<div class="wrap_logo flex">
				<a href="#" class="logo flex">
					<span class="main_logo flex"><b>Pc-master</b></span>
					<span class="main_logo_descripton flex">Компьютерный сервис</span>
				</a> 
			</div>
				
			
			<div class="wrap_phones_menu flex">
				<div class="wrap_phones flex">
					<div class="phones flex">
						<span class="operator mts"><span class="big">+38</span>(099)220-35-38</span>
						<span class="operator life"><span class="big">+38</span>(093)537-35-22</span>
					</div>
					<div class="phone_button flex">
						<a href="#" class="phoneButton">Заказать звонок</a>
					</div>
				</div>
			</div>
		</div>

			<div class="wrap_toggle_menu flex">
				<div class="line_toggle_menu">
					<a href="#" onclick="return false" class="toggle_menu flex"><span></span></a>
				</div>
			</div>

			<div class="main_menu flex">
						<ul class="menu_ul flex">
							<a href="#" class="menu_link"><div class="glav flex">Главная</div></a>
							<a href="#price_title" class="menu_link" ><div class="price flex">Прайс</div></a>
							<a href="#title_adv" class="menu_link" ><div class="adv flex">Преимушества</div></a>
							<a href="#section_serv"class="menu_link" ><div class="services flex">Услуги</div></a>
							<a href="#section_fix"class="menu_link" ><div class="consult flex">Консультация</div></a>
							<!-- <a href="#" ><div class="contacts flex">Контакты</div></a> -->
						</ul>	
				</div>
	</div>

</section>


<header class="main_head">
	<div class="container container_main_head flex">
		<div class="main-row-head flex">
				<div class="wrap-header-text">
						<div class="head-main-text">
							<h1 class="help_header">ремонт<br /><span>компьютеров</span><br /><span class="appersand"><!-- & --></span><br>установка<br />windows</h1>
						</div>
				</div>

			<div class="master_coming flex"><p>Гарантия на все виды работ</p></div>

				<div class="wrap-header-button">
					<button id='price_title' class="evoke_master">
						<div>Вызвать мастера</div>
					</button>
				</div>
			<!-- <div class="cell flex">работа от 200 гривен</div> -->

		</div>
	</div>
</header> 


<section class="section_adv flex" id='section_adv'>
	<div class="container_adv flex">
		<div class="container container_price flex">
			
			<div class="price_title flex" >
				<span>Прайс</span>
			</div>		

			<div class="wrap_price flex">
				<div class="flex price_item price_item1">
					<div class="flex price_name">Выезд специалиста по Киеву</div>
					<div class="flex price_cost">0 грн</div>
				</div>
				<div class="flex price_item price_item2">
					<div class="flex price_name">Диагностика компьютера</div>
					<div class="flex price_cost">100 грн</div>
				</div>

				<div class="flex price_item price_item3">
					<div class="flex price_name">Установка Windows 10</div>
					<div class="flex price_cost">350 грн</div>
				</div>
				<div class="flex price_item price_item4">
					<div class="flex price_name">Установка Windows 7/8/xp</div>
					<div class="flex price_cost">250 грн </div>
				</div>
				<div class="flex price_item price_item5">
					<div class="flex price_name">Установка набора стандартных программ</div>
					<div class="flex price_cost">150 грн </div>
				</div>
				
				<div class="flex price_item">
					<div class="flex price_name">Установка специализированых программ (Visio, Photoshop, Autocad...)</div>
					<div class="flex price_cost">150 грн</div>
				</div>

				<div class="flex price_item">
					<div class="flex price_name">Установка Microsoft Office <br />(Word, Exel, PPoint)</div>
					<div class="flex price_cost">250 грн</div>
				</div>

				<div class="flex price_item">
					<div class="flex price_name">Удаление вирусов</div>
					<div class="flex price_cost">100 грн</div>
				</div>

				<div class="flex price_item">
					<div class="flex price_name">Установка антивирусника</div>
					<div class="flex price_cost">250 грн</div>
				</div>

				<div class="flex price_item">
					<div class="flex price_name">Оптимизация работы Windows <br /> ускоряет работу компьютера до 250% </div>
					<div class="flex price_cost">300 грн</div>
				</div>
				
				<div class="flex price_item">
					<div class="flex price_name">Настройка родительского контроля (установка ограничений на опасные сайты)</div>
					<div class="flex price_cost">350 грн</div>
				</div>
				
				<div class="flex price_item">
					<div class="flex price_name">Сброс забытого пароля Windows</div>
					<div class="flex price_cost" id="title_adv">350 грн</div>
				</div>

				<form action="" method="post" class="wrap_price_form flex" onsubmit="return false;" >
					<input size="15" type="text" name="price_form_name" id="price_form_name" value="Ваше имя:" class="input-text">
					<input size="15" type="text" name="price_form_phone" id="price_form_phone" value="Ваш телефон:" class="input-text">
					<input type="submit" class="price_button wrap_button" name="price_send" value="Уточнить цену">
				</form>

			</div>
		</div>


		<div class="title_adv flex">
				<div class="container flex">
						<h2>наши <br /> преимущества</h2>
				</div>
		</div>

		<div class="wrap_adv flex">
			<div class="border_adv flex">
			<div class="container flex">
				<div class="item_adv item_adv1 flex">
					<div class="adv-icon flex">
						<div class="wrap_icon">
							<div class="num-icon flex">1</div>
							<div class="icon flex">
								<i class="adv-icon-online-pay"></i>
							</div>
						</div>
					</div>
					<div class="advant-text">
							<div class="adv-first-text">Доступные цены</div>
					</div>
				</div>

				<div class="item_adv item_adv2 flex">
					<div class="adv-icon flex">
							<div class="wrap_icon">
								<div class="num-icon flex">2</div>
								<div class="icon flex">
									<i class="adv-icon-checked-files"></i>
								</div>
							</div>
						</div>
						<div class="advant-text">
								<div class="adv-first-text">Осуществляем гарантийный ремонт до 3 лет</div>
						</div>				
				</div>

				<div class="item_adv item_adv3 flex">
						<div class="adv-icon flex">
							<div class="wrap_icon">
								<div class="num-icon flex">3</div>
								<div class="icon flex">
									<i class="adv-icon-repairs"></i>
								</div>
							</div>
						</div>
						<div class="advant-text">
								<div class="adv-first-text">Ремонт в день обращения</div>
						</div>
				</div>

				<div class="item_adv item_adv4 flex">
						<div class="adv-icon flex">
							<div class="wrap_icon">
								<div class="num-icon flex">4</div>
								<div class="icon flex">
									<i class="adv-icon-master"></i>
								</div>
							</div>
						</div>
						<div class="advant-text">
								<div class="adv-first-text">Квалифицированные мастера с опытом работы</div>
						</div>
				</div>

				<div class="item_adv item_adv5 flex" id='section_serv'>
						<div class="adv-icon flex">
							<div class="wrap_icon">
								<div class="num-icon flex">5</div>
								<div class="icon flex">
									<i class="adv-icon-clock"></i>
								</div>
							</div>
						</div>
						<div class="advant-text">
								<div class="adv-first-text">Устраняем проблемы максимум за 3 часа</div>
						</div>
				</div>

				<div class="item_adv item_adv6 flex" >
						<div class="adv-icon flex">
							<div class="wrap_icon">
								<div class="num-icon flex">6</div>
								<div class="icon flex">
									<i class="adv-icon-free-check-out"></i>
								</div>
							</div>
						</div>
						<div class="advant-text" >
								<div class="adv-first-text">Бесплатный выезд мастера</div>
						</div>
				</div>

			</div>

			</div>
			
		</div>
	</div>
</section>

<section class="section_serv flex " >
	<div class="container container_serv flex">
		<div class="wrap_h3 flex">
			<h3>услуги</h3>
		</div>
		<div class="wrap_serv_items flex">
			
			<div class="wrap_item flex">
				<div class="serv_item_border flex">
					<div class="wrap_icon flex">
						<i class="serv-icon-computer-screen serv_icon"></i>
					</div>	
					<div class="wrap_text flex">
						<p class="item-text flex">Ремонт ноутбуков <br> и компьютеров</p>
					</div>
				</div>
			</div>


			<div class="wrap_item flex">
				<div class="serv_item_border flex">
					<div class="wrap_icon flex">
						<i class="serv-icon-windows-8 serv_icon"></i>
					</div>	
					<div class="wrap_text flex">
						<p class="item-text flex">Переустановка<br />Windows 7/8/10</p>
					</div>
				</div>
			</div>
			
			<div class="wrap_item flex">
				<div class="serv_item_border flex">
					<div class="wrap_icon flex">
						<i class="serv-icon-wi-fi serv_icon"></i>
					</div>	
					<div class="wrap_text flex">
						<p class="item-text">Настройка Wi-fi<br />роутера, сети</p>
					</div>
				</div>
			</div>

			<div class="wrap_item flex" id='section_fix'>
				<div class="serv_item_border flex">
					<div class="wrap_icon flex">
						<i class="serv-icon-web-interface serv_icon"></i>
					</div>	
					<div class="wrap_text flex">
						<p class="item-text flex">Установка<br />программ</p>
					</div>
				</div>
			</div>

			<div class="wrap_item flex" >
				<div class="serv_item_border flex">
					<div class="wrap_icon flex">
						<i class="serv-icon-virus serv_icon"></i>
					</div>	
					<div class="wrap_text flex">
						<p class="item-text flex">Удаление<br />вирусов</p>
					</div>
				</div>
			</div>
			</div>

		</div>
	</div>
</section>

	<!-- ========================================================== -->

	<section class="section_fix flex" >
		<div class="container container_fix flex">
			<div class="wrap_fix flex">
				<div class="fix_title flex">
					<div class="wrap_fix_h4 flex">
						<h4>у вас<br />неполадка с<br />компьютером?</h4>
					</div>
				</div>
				<div class="fix_offer flex">
					<div class="wrap_fix_offer flex">
						<div class="fix_ofer_title flex">Мы определим неполадку<br />еще ДО нашего приезда</div>
						<form action="" method="post" class="wrap_fix_form flex" onsubmit="return false;">
							<textarea class="fix_description" name="fix_description">Опишите ее тут...</textarea>
							<input size="15" type="text" name="fix_name" id="fix_name" value="Ваше имя:" class="input-text">
							<input size="15" type="text" name="fix_phone" id="fix_phone" value="Ваш телефон:" class="input-text">
							<input type="submit" class="fix_button_description wrap_button" name="fix_send" value="Рассказать о проблеме">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =================Review=====================-->

	<!-- <section class="review-section grid">
		<div class="container-grid review-container-top grid">
			<container class="container grid">
				<div class="review-title">
					<div class="inl-block">
						<div class="h1">Отзывы</div>
					</div>
				</div>
			</container>
		</div>
		<div class="container-grid review-container-bottom grid">
			<div class="review-container-border">
				<container class="container grid">
					<div class="review-items grid">
						<div class="pointers pointer-left">
							<div class="border-icon border-icon-left"></div>
						</div>
						<div class="pointers pointer-right">
							<div class="border-icon border-icon-right"></div>
						</div>
						<div class="person grid">
							<div class="image-pers-warp">
								<div class="image-pers"></div>
							</div>
							<div class="name-pers">
								<div class="name">Юрий Сиренко
									<br>
									<a href="#to-faceboock" class="to-faceboock">я вконтакте</a>
								</div>
							</div>
							<div class="review-line-warp">
								<div class="review-line"></div>
							</div>
						</div>
						<div class="review-text">
							<p>Отличная компания! Вызывали специалиста на позднее время, очень срочно
								<br> нужно было починить ноутбук и не ошиблась. Мастер приехал в течении часа, все толком
								<br> объяснил. В итоге ноутбук заработал и теперь наша семья очень благодарна.
								<br> Спасибо.
							</p>
						</div>
				</container>
				</div>
			</div>
	</section> -->




 <footer class="section_footer">
	<div class="container container_footer">
		<div class="warp_content_footer flex">

			<div class="wrap_logo flex">
				<a href="#" class="logo flex">
					<span class="main_logo flex"><b>Pc-master</b></span>
					<span class="main_logo_descripton flex">Компьютерный сервис</span>
				</a> 
			</div>
				

			<div class="wrap_phones_footer flex">
				<div class="wrap_phones flex">
					<div class="phones flex">
						<span class="operator mts"><span class="big">+38</span>(099)220-35-38</span>
						<span class="operator life"><span class="big">+38</span>(093)537-35-22</span>
					</div>
					<div class="phone_button flex">
						<a href="#" class="phoneButton">Заказать звонок</a>
					</div>
				</div>
			</div>
			</div>
	</div>
 </footer>

	<script src="js/scripts.min.js?v=<?=time();?>"></script>

</body>

</html>