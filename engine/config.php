<?
//****База и настройки*****//
date_default_timezone_set ('Asia/Khabarovsk'); // часовой пояс
/*
define("DB_HOST","localhost"); // хост базы данных
define("DB_USER","msgkhbru_kbgames"); // пользователь базы данных
define("DB_PASS","Retsam_2016"); // пароль от базы данных
define("DB_BASE","msgkhbru_kbgames"); // имя базы данных
*/
define("DB_HOST","localhost"); // хост базы данных
define("DB_USER","root"); // пользователь базы данных
define("DB_PASS",""); // пароль от базы данных
define("DB_BASE","samp"); // имя базы данных

@mysql_connect(DB_HOST,DB_USER,DB_PASS)
or die("NO CONNECT FOR DATABASE");
@mysql_select_db(DB_BASE)
or die("ERROR mysql_select_db()");
$maxnews = 10;//Максимально новостей

$account = array (
	'table' => 'users',//Таблица с аккаунтами // Таблица с акками [!]
	'pass' => 'pass',//Переменная пароля //Вписать переменную пароля из мода [!]
	'name' => 'login',//Переменная имени [!]
	'exp' => 'Exp',//Очки [!]
	'cash' => 'Money',//Переменная денег на руках [!]
	'bank' => 'Bank',//Переменная денег в банке
	'id' => 'id',//id аккаунта [!]
	'admin' => 'Adm',//админка [!]
	'dead' => 'Dead',//Смерти [!]
	'kill' => 'Kill',//Убийств [!]
	'head' => 'Head',//Голов [!]
	'skin' => 'lastskin',//скин [!]
	'mail' => 'mail',//Переменная почты
	'team' => 'lastteam',//Последняя команда [!]
	//admin
	'dataadmin' => 'dataadmin',//дата назначение
	'getadmin' => 'getadmin',//Кто поставил
	//Время игры
	'strtime' => 'strtime',//Старший стрелок (время)
	'grentime' => 'grentime',//Гренадер (время)
	'asstime' => 'asstime',//Штурмовик (время)
	'medtime' => 'medtime',//Медик (время)
	//Специализации
	'strelok' => 'strelok',// Старший стрелок
	'grenadier' => 'grenadier',// Подрывник
	'assault' => 'assault',// Штурмовик 
	'tankkom' => 'tankkom',// Командира экипажа БМ 
	'squadkom' => 'squadkom',// Командир отделения
	'kom' => 'kom',// Командир
	'medic' => 'medic',// Санинструктор
	//
	'rank' => 'Rank',//ранг [!]
	'ban' => 'bans', // Бан
	'online' => 'online',
	'donate' => 'Dp',//донат [!]
	//Информция
	'ip' => 'ip',
	'regip' => 'regip',
	'lastip' => 'lastip',
	//Остальное
	'donExp' => 'donExp',
	'm4a1' => 'm4a1',
	'heals' => 'heals',
	'secspc' => 'secspc',
	'spec1' => 'spec1',
	'spec2' => 'spec2'
	);

$site = array(
	'nameproject' => 'Battleground TDM',
	'keywords' => 'начать играть в гта са, гта по сети, андреас, GTA, Grand Theft Auto, самп, samp, sa-mp, гта са, swatch, свотч, s-rp, с-рп, роле плей, RolePlay, сервер, са мп, multiplayer',
	'description' => 'Стань командиром отряда!'
);
//-------------------------//
?>