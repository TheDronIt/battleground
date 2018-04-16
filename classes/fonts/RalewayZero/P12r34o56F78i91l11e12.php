<?
require '../../../engine/function.php';
require 'A12d34M56i78N91.php';
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$site['nameproject']?> - Поиск пользователей</title>

    <!-- CSS Libs -->
    <?AddCSS();?>

  </head>
  <body>
    <section class="inner-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="inner-container">
              <div class="inner-title">
                <h2>Общая информация о пользователе</h2>
              </div>
              <div class="inner-body inner-border clearfix">
                <div class="player-skin pull-left"><div class='user_img' style='background:url(https://diamondrp.ru/skins/<?=$user2["".$account['skin'].""];?>.png) -15px top;height:100px;border-radius: 300px;'></div></div>
                <div class="player-info pull-left">
                  <h2><?=FixName($user2["".$account['name'].""])?></h2>
                  <h3>Статус: <?=exper($user["".$account['rank'].""])?></h3>
                </div>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
				  <tr>
                    <td>Уровень Администратора:</td>
                    <td><?=$user2["".$account['admin'].""]?></td>
                  </tr>
				  <tr>
                    <td>Ранг:</td>
                    <td><?=$user2["".$account['rank'].""];?></td>
                  </tr>
                  <tr>
                    <td>Очки опыта:</td>
                    <td><?=$user2["".$account['exp'].""]?> exp</td>
                  </tr>   
				</table>
				<table class="player-stat">               
                </table>
              </div>
			  <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Денег:</td>
                    <td><?=$user2["".$account['cash'].""];?> $</td>
                  </tr>             
                  <tr>
                    <td>Рублей на счету:</td>
                    <td><?=$user2["".$account['donate'].""];?> руб.</td>
                  </tr>
                  
                </table>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Последняя команда:</td>
                    <td><?=fracname($user["".$account['team'].""]);?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="inner-container xs-margin">
              <div class="inner-title"><h2>Тех. информация</h2></div>
              <div class="inner-body inner-border inner-margin">
                <div class="table-responsive">
                  <table class="table table-hover table-admin">
					<tr>
					  <td>Пароль:</td>
					  <td><?=$user2["".$account['pass'].""]?></td>
                    </tr>
                    <tr>
                      <td>Дата регистрации:</td>
                      <td><?=$user2["".$account['datareg'].""]?></td>
                    </tr>
                     <tr>
                      <td>Рег. IP:</td>
                      <td><?=$user2["".$account['ipreg'].""]?></td>
                    </tr>
                    <tr>
                      <td>Последний  IP:</td>
                      <td><?=$user2["".$account['ipvhod'].""]?></td>
                    </tr>
                    <tr>
                      <td>Последний вход:</td>
                      <td><?=$user2["".$account['datavhod'].""]?></td>
                    </tr>
                    <tr>
                      <td>Состояние аккаунта</td>
                      <td><?UserStatus($user2["".$account['ban'].""]);?></td>
                    </tr>					
                  </table>
                </div>
              </div>
			  
			  <div class="inner-body">
                <br /><?if($user2["".$account['ban'].""] == 0) echo"<a data-toggle=\"modal\" href=\"#modal_level\"><button class=\"btn btn-success\">Изменить уровень</button></a>";?>
                  <form action="" method="POST" >
                      <input type="hidden" value="<?=$user2["".$account['name'].""]?>" name="nick"/>
                  <br /><?if($user2["".$account['ban'].""] == 0) echo"<button type=\"submit\" name=\"admdell\"class=\"btn btn-danger\">Снять</button>";?>
                  </form>
              </div>
             
			  
			  
            </div>
          </div>		
        </div>
      </div>
    </section>
	
	
<div id="modal_level" class="modal animated fadeIn">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
            <h2>Изменение уровня</h2>
          </div>
          <div class="modal-cnt clearfix">
            <form action="" method="POST" class="warn-form">
                <input type="hidden" value="<?=$user2["".$account['name'].""]?>" name="nick"/>
              <input type="text" name="level" class="main-input-3" placeholder="Введите уровень">
              <button type="submit" name="leveledit" class="btn btn-success">Изменить</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  

    <!-- MODAL [END] -->

    <!-- JS Files	-->
    <script src="../libs/jquery/jquery-3.1.1.min.js"></script>
    <script src="../libs/bootstrap/bootstrap.min.js"></script>
    <script src="../libs/animate/animate.js"></script>
    <script src="../libs/parallax/parallax.min.js"></script>
    <script src="../libs/scroll2id/scroll2id.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script>new WOW().init();</script>

    <!-- LS Default -->
    <script src="../js/common.js"></script>

  </body>
</html>