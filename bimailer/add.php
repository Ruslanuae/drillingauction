<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Subscribe</title>
<meta name="author" content="BusMail.ru">
<link rel="shortcut icon" type="image/x-icon" href="/bimailer/images/icon.png">
<style>
html{height:100%;}
body
{
	font-size:14px;
	color:#000;
	margin:0;
	padding:0;
	height:100%;
	width:1000px;
	margin-left:auto;
	margin-right:auto;
}
section{
	text-align:center;
	display:block;
	width:360px;
	height:100px;
	position:relative;
	margin:auto;
	top:50%;
	margin-top:-50px;
}
</style>
</head>
<body>
<section>
<?php require_once "dbuser.php";
function refVal($arr){if(strnatcmp(phpversion(),'5.3') >= 0){$refs = array(); foreach($arr as $key => $value){$refs[$key] = &$arr[$key];}return $refs;}return $arr;}
print_r($_POST);
$psev=htmlspecialchars(substr($_POST['cat'], 0,5), ENT_QUOTES);
$kop=mysqli_query($s, "SELECT * FROM ".$psev) or die('База подписчиков не найдена. Обратитесь к администратору сайта.');
$pols=mysqli_num_fields($kop)-1;//3
$pods='?'.implode(array_fill(0, $pols, ',?'));//Количество запросов ?
$cont=mysqli_prepare($s, 'REPLACE INTO '.$psev.' VALUES('.$pods.')');
	$i=0;
	$rows=array_fill(0, $pols, NULL);
	foreach ($_POST['pole'] as $c ) {
		if($i < $pols && !empty($c)){$rows[$i] =$c;  $i++;}else{$i++; continue;}
	}
	$rows[0]=filter_var($rows[0], FILTER_SANITIZE_EMAIL);
	if(filter_var($rows[0], FILTER_VALIDATE_EMAIL)==false){echo 'Email адрес указан неверно!';}else{
	array_unshift($rows, $cont,  str_pad( '',($pols+1), 's'), NULL);
	call_user_func_array('mysqli_stmt_bind_param', refVal($rows));
	mysqli_stmt_execute($cont);
	echo mysqli_stmt_affected_rows($cont)>0?'Данные успешно добавлены':'Данные вероятно уже имеются в базе';
	}
?>
</section>
</body>
</html>