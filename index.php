<?
require 'engine/function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Главная | <?=$site['nameproject']?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="icon.jpg" />
	<!-- Libs CSS -->
    <?GetCSS();?>
	<!--<link rel="stylesheet" href="classes/libs/bootstrap/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="classes/libs/bootstrap/bootstrap.min.css" />
	<link rel="stylesheet" href="classes/libs/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="classes/libs/linea/styles.css" />
	<link rel="stylesheet" href="classes/libs/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="classes/libs/animate/animate.min.css" />
	<!-- Main CSS ->
	<link rel="stylesheet" href="classes/css/main.css" />
	<link rel="stylesheet" href="classes/css/fonts.css" />
	<link rel="stylesheet" href="classes/css/media.css" />-->
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>
	<script>
		$('body').append('<button class="btn-up" />');
	</script>
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>
</head>
<body>
	<!-- PRELOADER -->
	<div class="loader">
		<div class="loader-inner"></div>
	</div>
	<?CreateMenu($site['nameproject']);?>
	
	<section class="section-main-header">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="mh-wrap">
						<div class="col-lg-8 col-lg-offset col-md-8 col-md-offset">
							<div class="mh-content">
								<h1>Добро пожаловать на <?=$site['nameproject']?> RP</h1>
								<p>
									Основная задача сервера - ...
									</p>
								<div class="mh-button">
									<a href="#start" class="btn btn-mh">Начать игру</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- SECTION: ABOUT-US -->
	<section class="section-about-us" id="about">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="about-wrap animated wow zoomIn">
						<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
							<div class="section-title"><h1>О проекте</h1></div>
							<div class="about-text">
								<p><br>
									Основная задача сервера - ...

<br>Начиная с августа 2017 года наша команда усердно работает над сайтом, форумом, игровым модом и прочими составляющими нашего проекта. Было разработано ...

<br>Можем смело заявить, что являемся уникальным проектом в SA:MP индустрии, так как аналогичных нам проектов с подобным функционалом просто нет.

<br>3 строка...

<br>Про команду...
</p>
							</div>
							<div class="about-img hidden-sm hidden-xs"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- SECTION: ADV -->
	<section class="section-adv">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="adv-wrap animated wow zoomIn">
						<div class="section-title"><h1>Наши преимущества</h1></div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="adv-item">
								<div class="adv-icon"><center><i class="fa fa-rocket" aria-hidden="true"></i></center></div>
								<div class="adv-title"><h3>Скорость работы</h3></div>
								<div class="adv-text"><p>Наша команда делает быстро и качественно.</p></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="adv-item">
								<div class="adv-icon"><center><i class="fa fa-list" aria-hidden="true"></i></center></div>
								<div class="adv-title"><h3>Популярность</h3></div>
								<div class="adv-text"><p>Наш проект один из самых популярных проектов SAMP индустрии!</p></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="adv-item">
								<div class="adv-icon"><center><i class="fa fa-cog" aria-hidden="true"></i></center></div>
								<div class="adv-title"><h3>Мод</h3></div>
								<div class="adv-text"><p>Наш игровой мод не имеет аналогов.<p></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="adv-item">
								<div class="adv-icon"><center><i class="fa fa-comments" aria-hidden="true"></i></center></div>
								<div class="adv-title"><h3>Поддержка</h3></div>
								<div class="adv-text"><p>Наша Администрация помогает игрокам 24/7.</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- SECTION: START-GAME -->
	<section class="section-start-game" id="start">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="start-wrap animated wow zoomIn">
						<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
							<div class="section-title"><h1>Как начать игру?</h1><br>ip:79.126.49.98:7777</div>
							<div class="row">
								<div class="s-box">
									<div class="s-num">1</div>
									<div class="s-text"><a href="https://goo.gl/6MzCDZ">Скачать чистую версию GTA San Andreas (click)</a></div>
								</div>
							</div>
							<div class="row">
								<div class="s-box">
									<div class="s-num">2</div>
									<div class="s-text"><a href="https://goo.gl/PLry5G">Скачать клиент SA:MP (click)</a> </div>
								</div>
							</div>
							<div class="row">
								<div class="s-box">
									<div class="s-num">3</div>
									<div class="s-text">Добавить сервер в избранные</div>
								</div>
							</div>
							<div class="row">
								<div class="s-box">
									<div class="s-num">4</div>
									<div class="s-text">Подключиться к серверу и зарегистрировать аккаунт</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-social">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="social-wrap animated wow zoomIn">
						<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
							<div class="section-title">
								<h1>Сейчас играет</h1><br><br>						
								<div class = "bg"><br><br>
								<b><script src="http://servers-samp.ru/sinfo-1-0.js"></script></b>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- SECTION: SOCIAL -->
	<section class="section-social">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="social-wrap animated wow zoomIn">
						<div class="section-title"><h1>Мы в социальной сети</h1></div>

						<div class="s-button">
							<center><a href="https://vk.com/bttlgrndtdm" class="btn btn-s">Сообщество ВКонтакте</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		<?CreateFooter($site['nameproject'],'black')?>
	
	<!--[if lt IE 9]>
		<script src="classes/libs/html5shiv/es5-shim.min.js"></script>
		<script src="classes/libs/html5shiv/html5shiv.min.js"></script>
		<script src="classes/libs/html5shiv/html5shiv-printshiv.min.js"></script>
		<script src="classes/libs/respond/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>

	<!-- Libs JS -->
		<!-- Вверх-->
		<div id="back-top"><a href="#top" class="arrow" title="Вверх"><span></span></a></div>
		<script src="http://code.jquery.com/jquery.min.js"></script>
	<!--<script src="scripts/jquery.up.js"></script> -->
	
	<script src="classes/libs/jquery/jquery-2.1.3.min.js"></script>
	<script src="classes/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="classes/libs/mixitup/mixitup.min.js"></script>
	<script src="classes/libs/scroll2id/PageScroll2id.min.js"></script>
	<script src="classes/libs/animate/animate-css.js"></script>
	<script src="classes/js/common.js"></script>
	<script src="classes/js/wow.min.js"></script>

	
	<!-- VK Widget -->
	<div id="vk_community_messages"></div>
	<script type="text/javascript">
	VK.Widgets.CommunityMessages("vk_community_messages", 68081783, {tooltipButtonText: "Поддержка"});
	</script>
</body>
</html>