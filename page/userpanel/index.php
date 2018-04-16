<?
require 'auth.php';
require '../../engine/function.php';//Главный конфиг
require '../../engine/authorization.php';//Модули авторизации
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Личный кабинет | <?=$site['nameproject']?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.png" />
	<!-- Libs CSS -->
	<?GetCSS();?>
	<script src="/classes/js/jquery.knob.js"></script>
</head>
<body>

	<!-- PRELOADER -->
	<div class="loader">
		<div class="loader-inner"></div>
	</div>
	<?CreateMenu($site['nameproject']);?>
	<?PageTitle("Личный кабинет","Здесь Вы можете просматривать статистику<br> Вашего аккаунта, следить за его изменениями");?>

	<section class="inner-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="inner-container">
              <div class="inner-title">
                <h2>Общая информация</h2>
              </div>
              <div class="inner-body inner-border clearfix">
                <div class="player-skin pull-left"><div class='user_img' style='background:url(https://diamondrp.ru/skins/<?=$user["".$account['skin'].""];?>.png) -15px top;height:100px;border-radius: 300px;'></div></div>
                <div class="player-info pull-left">
                  <h2><?FixName($user["".$account['name'].""])?></h2>
				   <!-- <h3>Статус: <?=$user["".$account['level'].""];?></h3> -->
                  <h3>Статус: <?=exper($user["".$account['rank'].""])?></h3>
                </div>
                        
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Очки опыта:</td>
					<td><?=$user["".$account['exp'].""];?> exp</td>
                    <!-- <td><?=$user["".$account['exp'].""];?>/<?=$user["".$account['level'].""]*8;?></td> -->
                  </tr>
                 <tr>
                    <td>Убийств:</td>
                    <td><?=$user["".$account['kill'].""];?> убийств(-а)</td> 
                  </tr>
                  <tr>
                    <td>Смертей:</td>
                    <td><?=$user["".$account['dead'].""];?> смертей(-и)</td>
                  </tr>
                 
                  <tr>
                    <td>Попаданий в голову:</td>
                    <td><?=$user["".$account['head'].""];?> хэдшотов(-а)</td>
                  </tr>
                </table>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Последняя команда:</td>
                    <td><?=fracname($user["".$account['team'].""]);?></td>
                  </tr>
                  <tr>
                    <td>Ранг:</td>
                    <td><?=$user["".$account['rank'].""];?></td>
                  </tr>
                </table>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <!-- <tr>
                    <td>Основной счет:</td>
                    <td><?=$user["".$account['bank'].""];?>$</td>
                  </tr> -->
                  <tr>
                    <td>Денег:</td>
                    <td><?=$user["".$account['cash'].""];?> $</td>
                  </tr>             
                  <tr>
                    <td>Рублей на счету:</td>
                    <td><?=$user["".$account['donate'].""];?> руб.</td>
                  </tr>
                 
                </table><br>
                  <? if($user["".$account['admin'].""] > 0) echo "<a href=\"/page/dostup/admin/\"><center><button class=\"btn btn-d\">Панель администратора</button></center></a>";?><br>
                <a href="./?access=exit"><center><button class="btn btn-d">Выйти</button></center></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="inner-container xs-margin">
              <div class="inner-title"><h2>Специализации</h2></div>
              <div class="inner-body inner-border clearfix">
                <table class="player-stat">				 
                  <tr>
                    <td>Старший стрелок:</td>
                    <td><?GetClass($user["".$account['strelok'].""]);?></td>
                  </tr>
                  <tr>
                    <td>Подрывник:</td>
                    <td><?GetClass($user["".$account['grenadier'].""]);?></td>
                  </tr>
                    <tr>
                    <td>Штурмовик:</td>
                    <td><?GetClass($user["".$account['assault'].""]);?></td>
                  </tr>
                  <tr>
                    <td>Саниструктор:</td>
                    <td><?GetClass($user["".$account['medic'].""]);?></td>
                  </tr>
                  <tr>
                    <td>Командир экипажа БМ:</td>
                    <td><?GetClass($user["".$account['tankkom'].""]);?></td>
                  </tr>
				  <tr>
                    <td>Командир отделения:</td>
                    <td><?GetClass($user["".$account['squadkom'].""]);?></td>
                  </tr>
				  <tr>
                    <td>Командир:</td>
                    <td><?GetClass($user["".$account['kom'].""]);?></td>
                  </tr>		
                </table>
              </div>
            </div>
            <div class="inner-container inner-margin">
              <div class="inner-title"><h2>Время игры за класс</h2></div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Старший стрелок:</td>
                    <td><b><?=$user["".$account['strtime'].""]?> секунд</b></td>
                  </tr>
                  <tr>
                    <td>Подрывник:</td>
                    <td><b><?=$user["".$account['grentime'].""]?> секунд</b></td>
                  </tr>
                  <tr>
                    <td>Штурмовик:</td>
                    <td><b><?=$user["".$account['asstime'].""]?> секунд</b></td>
                  </tr>
                  <tr>
                    <td>Саниструктор:</td>
                    <td><b><?=$user["".$account['medtime'].""]?> секунд</b></td>
                  </tr>             
                </table>
              </div>
            </div>
			<div class="inner-container inner-margin">
              <div class="inner-title"><h2>Тех. информация</h2></div>
              <div class="inner-body inner-border">
                <table class="player-stat">
				<tr>
                    <td>IP:</td>
                    <td><?=$user["".$account['ip'].""]?></td>
                  </tr>
				  <tr>
                    <td>Регистрация:</td>
                    <td><?=$user["".$account['datareg'].""]?></td>
                  </tr>
				  <tr>
                    <td>IP регистрации:</td>
                    <td><?=$user["".$account['regip'].""]?></td>
                  </tr>
				  <tr>
                    <td>IP входа:</td>
                    <td><?=$user["".$account['lastip'].""]?></td>
                  </tr>
                  <tr>
                    <td>Последний вход:</td>
                    <td><?=$user["".$account['datavhod'].""]?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
		  
        </div>
      </div>
    </section>
<?CreateFooter($site['nameproject'],'white');?>
	<!--[if lt IE 9]>
		<script src="/classes/libs/html5shiv/es5-shim.min.js"></script>
		<script src="/classes/libs/html5shiv/html5shiv.min.js"></script>
		<script src="/classes/libs/html5shiv/html5shiv-printshiv.min.js"></script>
		<script src="/classes/libs/respond/respond.min.js"></script>
	<![endif]-->
	
	<!-- Libs JS -->
	<script src="/classes/libs/jquery/jquery-2.1.3.min.js"></script>
	<script src="/classes/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="/classes/libs/mixitup/mixitup.min.js"></script>
	<script src="/classes/libs/scroll2id/PageScroll2id.min.js"></script>
	<script src="/classes/libs/animate/animate-css.js"></script>
	<script src="/classes/js/common.js"></script>
	<script src="/classes/js/wow.min.js"></script>

</body>
</html>