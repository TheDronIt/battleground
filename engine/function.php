<?
require 'config.php';
//--------Функции-----------//
function CreateMenu($nameproject){
	echo "<section class=\"section-header-line\">
		<div class=\"container-fluid\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-4 col-md-4 col-sm-4\">
					<a href='/index.php' title='по желанию'><img src='\classes\img\logo.png'/></a>
					<!-- <div class=\"hl-logotype\"><h2>".$nameproject."</h2></div> -->
					</div>
					<div class=\"col-lg-8 col-md-8 col-sm-8\">
						<div class=\"hl-menu\">
							<ul>
								<li><a href=\"/\">Главная</a></li>
								<li><a href=\"/forum\">Форум</a></li>
								<li><a href=\"/page/news/\">Новости</a></li>
								<li><a href=\"/page/donate/\">Донат</a></li>
								<li><a href=\"/page/lottery/\">Кейсы</a></li>
								<li><a href=\"/page/userpanel/\">Личный Кабинет</a></li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>";
}
function PageTitle($nametitle,$text){
	echo "
	<div class=\"page-title-gradient\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-4\">
              <h1>".$nametitle."</h1>
              <p>".$text."</p>
            </div>
          </div>
        </div>
      </div>
	";
}
function CreateAMenu(){
	echo "
	<section class=\"inner-header\">
      <div class=\"header-navbar animated fadeInDown\">
        <nav class=\"navbar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#collapse\">
                  <i class=\"fa fa-bars\"></i> Открыть меню
                </button>
              </div>
              <div class=\"collapse navbar-collapse\" id=\"collapse\">
             
                <ul class=\"nav navbar-nav navbar-right\">
                  <li><a href=\"../../userpanel/\">Личный кабинет</a></li> 
                </ul> 
              </div>
            </div>
          </div>
        </nav>
      </div>
    </section>
	";
}	
function CreateFooter($nameproject,$type){
	if($type == "white")
	{
		echo "<section class=\"section-footer-min\">
		<div class=\"container-fluid\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"footer-wrapper\">
						<div class=\"copyright-min\">
							<div class=\"f-logotype-min\"><h2>".$nameproject."</h2></div>
							<div class=\"copytext-min\"><h3>Все права защищены &copy; 2018 <br> Developed by <a href=\"https://vk.com/dronbro\">Dron</a></h3></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>";
	}
	else if($type == "black")
	{	
		echo "<section class=\"section-footer\">
			<div class=\"container-fluid\">
				<div class=\"container\">
					<div class=\"row\">
						<div class=\"footer-wrapper\">
							<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
								<div class=\"copyright\">
									<div class=\"f-logotype\"><h2>".$nameproject."</h2></div>
									<div class=\"copytext\"><h3>Все права защищены &copy; 2017-2018 <br></a></h3></div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>";
	}
}
function FixName($name){
	$order = array("_");
	$replace = " ";
	$newstr = str_replace($order,$replace,$name);
	$pos = strpos($newstr," ",1);
	$name = substr($newstr,0,$pos);
	$subname = substr($newstr,$pos,24);
	echo "".$name." ".$subname."";
//
}
function ProtectMail($mail){
	$str = $mail;
	$langoldmail = strlen($str);
	$pos = strpos($str,"@",1);
	$namemail = substr($str,0,$pos);
	$langmail = strlen($namemail);
	$protectmail = substr($namemail,5,$langmail);
	$dommen = $namemail = substr($str,$pos,$langoldmail);
	echo "*****".$protectmail."".$dommen."";	
	
}
function ProtectPass($pass){
	$pstr = $pass;
	$langpass = strlen($pstr);
	if($langpass > 8)
	{
		$protectpass = substr($pstr,5,$langpass);
		echo "*****".$protectpass."";
	}
	else
	{
		$protectpass = substr($pstr,3,$langpass);
		echo "***".$protectpass."";
	}	
}
function Sex($sex)
{
	if($sex == 0)
	{
		echo "Мужской";
	}
	else
	{
	echo "Женский";
	}
}
/*Spec()
{
		$sp = "SELECT * FROM `specializations` ORDER BY `strelok` DESC";
		//'sp' => 'specializations', 
		//'st' => 'strelok'
}*/
function CreateNews(){
	//Подсчет кол-ва новостей для лимита
	$query = mysql_query("SELECT * FROM `news`");
	$top = mysql_num_rows($query);
	$min = $top-$maxnews;
	//Запрос на получение новостей из базы | Получит последние 10 новостей
	if($top > 10)
	{
		$query = "SELECT * FROM `news` ORDER BY `id` DESC LIMIT ".$min.",".$top."";
	}
	else 
	{ $query = "SELECT * FROM `news` ORDER BY `id` DESC";
	}
	$rs = mysql_query($query);
	$count_news = mysql_num_rows($rs);
	if(mysql_num_rows($rs)>0)
	{
        while($row = mysql_fetch_array($rs)) {
		echo "<div class=\"col-lg-12 col-lg-offset col-md-8 col-md-offset\">
						<div class=\"inner-container news-wrp\">
						  <div class=\"inner-title\"><h2>".$row['title']."</h2></div>
						  <div class=\"inner-body np\">
							<div class=\"news-img\"><img src=\"".$row['img']."\" class=\"img-responsive\"></div>
							<div class=\"news-full-cnt\">
							  <p>".$row['Text']."</p>
							</div>
							<div class=\"news-footer clearfix\">
							  <span class=\"pull-left\">".$row['Date']." &nbsp&nbsp&nbsp<i class=\"fa fa-file\"></i> &nbsp".$row['id']."</span>
							  <a class=\"pull-right\" href=\"#\">".$row['Dev']."</a>
							</div>
						  </div>
						</div>
					  </div>";}
	}
    else echo "<div class=\"col-lg-12 col-lg-offset col-md-8 col-md-offset\"><br><br><center><h1>Новости отсутствуют!</h1></center></div>";
	mysql_close();
}
function CountTable($sql){
	$count = mysql_query($sql);
	echo mysql_num_rows($count);
}
function UserStatus($ban){
	if($ban > 0)
	
		echo "Заблокирован на ".$ban." дня(ей)";
	
	else
		echo "Активен";
}
function CreateANav(){
	echo "
	<div class=\"col-lg-3 col-md-12 col-sm-12\">
            <div class=\"inner-container hidden-xs\">
              <div class=\"inner-title\"><h2>Меню</h2></div>
              <div class=\"inner-body\">
                <ul class=\"admin-nav\">
                  <li><a href=\"index.php\">Главная</a></li>
				  <li><a href=\"admins.php\">Администрация</a></li>
                  <li><a href=\"news.php\">Управление новостями</a></li>
                </ul>
              </div>
            </div>
          </div>
	";
}
function rank($member,$rang)
{
		if($member == 1)
		{
			if($rang == 1) return $rank = "Фельдшер";
			else if($rang == 2) return $rank = "Глав.Врач";
		}
		else if($member == 2)
		{
			if($rang == 1) return $rank = "Секретарь";
			else if($rang == 2) return $rank = "Мэрия LS";
		}			
}
function exper($exper)
{	
	if($exper == 0) return $exper = "<font color = 'grey'>Несуществующий</font>";
	if($exper == 1) return $exper = "<font color = 'green'>Новичок</font>";
	if($exper == 2) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper == 3) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper == 4) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper == 5) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper == 6) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper == 7) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper == 8) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper == 9) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper == 10) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper == 11) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper == 12) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper == 13) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper == 14) return $exper = "<font color = 'green'>Скоро</font>";
	if($exper >= 15) return $exper = "<b><font color = 'darkred'>Л<font color = 'FireBrick'>И<font color = 'red'>Д<font color = 'Tomato'>Е<font color = 'DarkOrange'>Р</font></font></font></font></font></b>&nbsp&nbsp&nbsp<img src = '\classes\img\knife.png'";
	
	//else if(($exper > 8) && ($exper < 19)) return $exper = "";
}
function fracname($frac)
{
		if($frac == 0) return $fracname = "<b><font color = 'Ff0000'>Повстанцы</font></b>"; 
		else if($frac == 1) return $fracname = "<b><font color = '1e90ff'>Спецназ</font></b>"; 
        else if($frac == 3) return $fracname = "Гражданcкий"; 	
}
function GetClass($cl){
    if($cl == 1) echo "<b><font color = '00e600'>Имеется </font>|<font color = '#D79D41'> 1 Класс</font></b>";
	else if ($cl == 2) echo "<b><font color = '00e600'>Имеется </font>|<font color = '#D79D41'> 2 Класс</font></b>";
	else if ($cl == 3) echo "<b><font color = '00e600'>Имеется </font>|<font color = '#D79D41'> 3 Класс</font></b>";
    else if ($cl == 0) echo "<b><font color = 'ff0000'>Отсутствует</b>";
}
function GetTime($gtm){
    if($cl == 1) echo "131";
	else if ($cl == 2) echo "<b><font color = '00e600'>Имеется </font>|<font color = '#D79D41'> 2 Класс</font></b>";
	else if ($cl == 3) echo "<b><font color = '00e600'>Имеется </font>|<font color = '#D79D41'> 3 Класс</font></b>";
    else if ($cl == 0) echo "<b><font color = 'ff0000'>Отсутствует</b>";
}
function GetCSS(){
    echo "<link rel=\"stylesheet\" href=\"/classes/libs/bootstrap/bootstrap-grid.min.css\" />
    <link rel=\"stylesheet\" href=\"/classes/libs/bootstrap/bootstrap.min.css\" />
	<link rel=\"stylesheet\" href=\"/classes/libs/font-awesome/css/font-awesome.min.css\" />
	<link rel=\"stylesheet\" href=\"/classes/libs/linea/styles.css\" />
	<link rel=\"stylesheet\" href=\"/classes/libs/magnific-popup/magnific-popup.css\" />
	<link rel=\"stylesheet\" href=\"/classes/libs/animate/animate.min.css\" />
	<!-- Main CSS -->
	<link rel=\"stylesheet\" href=\"/classes/css/main.css\" />
	<link rel=\"stylesheet\" href=\"/classes/css/fonts.css\" />
	<link rel=\"stylesheet\" href=\"/classes/css/media.css\" />";
}
?>