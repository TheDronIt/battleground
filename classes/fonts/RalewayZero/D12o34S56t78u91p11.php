<?
require '../../../engine/function.php';
require 'A12d34M56i78N91.php';
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$site['nameproject']?> - Администрация проекта</title>

    <!-- CSS Libs -->
    <link rel="stylesheet" href="../../libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../libs/animate/animate.min.css">
    <link rel="stylesheet" href="../../libs/fa/css/font-awesome.min.css">

    <!-- CSS Default -->
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/fonts.css">
    <link rel="stylesheet" href="../../css/media.css">

  </head>
  <body>
  <div class="mh-button">
	<a href="C12h34a56n78g91e11.php" class="btn btn-mh _mPS2id-h">Ch@ng3</a>
  </div>
      <div class="row">
          <div class="inner-container inner-margin">
              <div class="inner-title"><h2>Adm1n5</h2></div>
				<div class="inner-body"> 
				<div class="table-responsive"> 
			  <?
					$search = mysql_query("SELECT * FROM `".$account['table']."` WHERE  `".$account['admin']."` > '0'");
	if(mysql_num_rows($search)>0)
	{
		echo "<table class=\"table table-hover table-admin\">
                    <thead>
                      <th>№ Ак|<@нут@</th>
                      <th>Ни|<</th>
					  <th>П@р0ль</th>
                      <th>@дмин</th>
                      <th>П0чт@</th>
					  <th>Р@нг</th>
					  <th>Д3нъги</th>
					  <th>Д0н@т</th>
					  <th>Б@н</th>
					  <th>Д@т@ б@н@</th>
					  <th>Д@т@ р@зб@н@</th>
					  <th>lP</th>
					  <th>Р3г. lP</th>
					  <th>П0сл3дий lP</th>
					  <th>Уp. Cт. Стр3лк@</th>
					  <th>Уp. Гр3н@д3р@</th>
					  <th>Уp. |||турм0вик@</th>
					  <th>Уp. К0м. БМ</th>
					  <th>Уp. К0м. 0тд3л.</th>
					  <th>Уp. К0м.</th>
					  <th>Уp. М3дик@</th>
					  <th>Вр3мя з@ стр3лк@</th>
					  <th>Вр3мя з@ гр3н@д3р@</th>
					  <th>Вр3мя з@ |||турм0ви|<а</th>
					  <th>Вр3мя з@ м3ди|<@</th>
					  <th>П0сл3дняя к0м@нд@</th>
					  <th>d0nExp</th>
					  <th>m4@1</th>
					  <th>h3als</th>
					  <th>s3cspc</th>
					  <th>sp3c1</th>
					  <th>sp3c2</th>
                    </thead>
                   
                  ";
		$admin = mysql_fetch_array($search);
		do{
		echo "<form action=\"a-profile.php\" method=\"POST\">
			<input name=\"admin\" type=\"hidden\" value=\"".$admin["".$account['name'].""]."\">
			<tr>
                      <td>#".$admin["".$account['id'].""]."</td>
                      <td>".$admin["".$account['name'].""]."</td>
					  <td>".$admin["".$account['pass'].""]."</td>
                      <td>".$admin["".$account['admin'].""]."</td>
					  <td>".$admin["".$account['mail'].""]."</td>
					  <td>".$admin["".$account['rank'].""]."</td>
					  <td>".$admin["".$account['cash'].""]."</td>
					  <td>".$admin["".$account['donate'].""]."</td>
					  <td>".$admin["".$account['ban'].""]."</td>
					  <td>".$admin["".$account['bandate'].""]."</td>
					  <td>".$admin["".$account['unbandate'].""]."</td>
					  <td>".$admin["".$account['ip'].""]."</td>
					  <td>".$admin["".$account['regip'].""]."</td>
					  <td>".$admin["".$account['lastip'].""]."</td>
					  <td>".$admin["".$account['strelok'].""]."</td>
					  <td>".$admin["".$account['grenadier'].""]."</td>
					  <td>".$admin["".$account['assault'].""]."</td>
					  <td>".$admin["".$account['tankkom'].""]."</td>
					  <td>".$admin["".$account['squadkom'].""]."</td>
					  <td>".$admin["".$account['kom'].""]."</td>
					  <td>".$admin["".$account['medic'].""]."</td>
					  <td>".$admin["".$account['strtime'].""]."</td>
					  <td>".$admin["".$account['grentime'].""]."</td>
					  <td>".$admin["".$account['asstime'].""]."</td>
					  <td>".$admin["".$account['medtime'].""]."</td>
					  <td>".$admin["".$account['team'].""]."</td>
					  <td>".$admin["".$account['donExp'].""]."</td>
					  <td>".$admin["".$account['m4a1'].""]."</td>
					  <td>".$admin["".$account['heals'].""]."</td>
					  <td>".$admin["".$account['secspc'].""]."</td>
					  <td>".$admin["".$account['spec1'].""]."</td>
					  <td>".$admin["".$account['spec2'].""]."</td>
                    </tr></form>";
		}while($admin = mysql_fetch_array($search));
		
		
		echo "</table>";		
	}
	else echo "<center><h3>Администрации нет</h3></center><br>";
	?>
			  </div></div></div></div>

   <!-- <section class="inner-section">	 Отступ -->  
       <div class="row">
	   
          <!-- <div class="col-lg-9 col-md-9 col-sm-9"> -->
			<!--<div class="inner-container">
              <div class="inner-title"><h2>Добавление администратора </h2></div>
              <div class="inner-body clearfix">
                <form action="" method="POST" class="search-acc">
					<?=$msg?>
                  <br><input type="text" class="main-input-3" name="nick" placeholder="Введите ник"><br>
				  
				  <br><input type="text" class="main-input-3" name="level" placeholder="Уровень Администратора">
                  <button type="submit" name="insert-admin" class="button btn-send button-light btn-shadow">Добавить</button>
                </form>
              </div>
            </div>-->
			
			
					
			<br>
            <div class="inner-container inner-margin">
              <div class="inner-title"><h2>Us3rs</h2></div>
              <div class="inner-body">
             <div class="table-responsive"> 
					<?
					$search2 = mysql_query("SELECT * FROM `".$account['table']."` WHERE  `".$account['id']."` >= '0'");
	if(mysql_num_rows($search2)>0)
	{
		echo "<table class=\"table table-hover table-admin\">
                    <thead>
                      <th>№ Ак|<@нут@</th>
                      <th>Ни|<</th>
					  <th>П@р0ль</th>
                      <th>@дмин</th>
                      <th>П0чт@</th>
					  <th>Р@нг</th>
					  <th>Д3нъги</th>
					  <th>Д0н@т</th>
					  <th>Б@н</th>
					  <th>Д@т@ б@н@</th>
					  <th>Д@т@ р@зб@н@</th>
					  <th>lP</th>
					  <th>Р3г. lP</th>
					  <th>П0сл3дий lP</th>
					  <th>Уp. Cт. Стр3лк@</th>
					  <th>Уp. Гр3н@д3р@</th>
					  <th>Уp. |||турм0вик@</th>
					  <th>Уp. К0м. БМ</th>
					  <th>Уp. К0м. 0тд3л.</th>
					  <th>Уp. К0м.</th>
					  <th>Уp. М3дик@</th>
					  <th>Вр3мя з@ стр3лк@</th>
					  <th>Вр3мя з@ гр3н@д3р@</th>
					  <th>Вр3мя з@ |||турм0ви|<а</th>
					  <th>Вр3мя з@ м3ди|<@</th>
					  <th>П0сл3дняя к0м@нд@</th>
					  <th>d0nExp</th>
					  <th>m4@1</th>
					  <th>h3als</th>
					  <th>s3cspc</th>
					  <th>sp3c1</th>
					  <th>sp3c2</th>
                    </thead>
                   
                  ";
		$admin2 = mysql_fetch_array($search2);
		do{
		echo "<form action=\"a-profile.php\" method=\"POST\">
			<input name=\"admin\" type=\"hidden\" value=\"".$admin2["".$account['name'].""]."\">
			<tr>
                      <td>#".$admin2["".$account['id'].""]."</td>
                      <td>".$admin2["".$account['name'].""]."</td>
					  <td>".$admin2["".$account['pass'].""]."</td>
                      <td>".$admin2["".$account['admin'].""]."</td>
					  <td>".$admin2["".$account['mail'].""]."</td>
					  <td>".$admin2["".$account['rank'].""]."</td>
					  <td>".$admin2["".$account['cash'].""]."</td>
					  <td>".$admin2["".$account['donate'].""]."</td>
					  <td>".$admin2["".$account['ban'].""]."</td>
					  <td>".$admin2["".$account['bandate'].""]."</td>
					  <td>".$admin2["".$account['unbandate'].""]."</td>
					  <td>".$admin2["".$account['ip'].""]."</td>
					  <td>".$admin2["".$account['regip'].""]."</td>
					  <td>".$admin2["".$account['lastip'].""]."</td>
					  <td>".$admin2["".$account['strelok'].""]."</td>
					  <td>".$admin2["".$account['grenadier'].""]."</td>
					  <td>".$admin2["".$account['assault'].""]."</td>
					  <td>".$admin2["".$account['tankkom'].""]."</td>
					  <td>".$admin2["".$account['squadkom'].""]."</td>
					  <td>".$admin2["".$account['kom'].""]."</td>
					  <td>".$admin2["".$account['medic'].""]."</td>
					  <td>".$admin2["".$account['strtime'].""]."</td>
					  <td>".$admin2["".$account['grentime'].""]."</td>
					  <td>".$admin2["".$account['asstime'].""]."</td>
					  <td>".$admin2["".$account['medtime'].""]."</td>
					  <td>".$admin2["".$account['team'].""]."</td>					  
					  <td>".$admin2["".$account['donExp'].""]."</td>
					  <td>".$admin2["".$account['m4a1'].""]."</td>
					  <td>".$admin2["".$account['heals'].""]."</td>
					  <td>".$admin2["".$account['secspc'].""]."</td>
					  <td>".$admin2["".$account['spec1'].""]."</td>
					  <td>".$admin2["".$account['spec2'].""]."</td>
                    </tr></form>";
		}while($admin2 = mysql_fetch_array($search2));
		
		
		echo "</table>";		
	}
	else echo "<center><h3>Администрации нет</h3></center><br>";
	mysql_close();?>
                  
                </div>
              </div>
           </div>
          </div>
        <!-- </div>
   <!-- </section> -->

    <!-- JS Files	-->
    <script src="../../libs/jquery/jquery-3.1.1.min.js"></script>
    <script src="../../libs/bootstrap/bootstrap.min.js"></script>
    <script src="../../libs/animate/animate.js"></script>
    <script src="../../libs/parallax/parallax.min.js"></script>
    <script src="../../libs/scroll2id/scroll2id.min.js"></script>
    <script src="../../js/wow.min.js"></script>
    <script>new WOW().init();</script>

    <!-- LS Default -->
    <script src="../../js/common.js"></script>
    
  </body>
</html>