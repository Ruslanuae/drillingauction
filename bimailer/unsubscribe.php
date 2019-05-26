<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Unsubscribe</title>
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
$psev=substr(base64_decode($_GET['otp']), 0,5);
$mail=substr(base64_decode($_GET['otp']), 5);
if(filter_var($mail, FILTER_VALIDATE_EMAIL)==false){echo 'Ошибка!';}else{
	$tops=mysqli_fetch_assoc(mysqli_query($s,"SELECT val FROM bus_conf WHERE nam='optis'"));
	$coupol=mysqli_num_fields(mysqli_query($s, "SELECT * FROM ".$tops['val']));//Количество полей в базе отписчиков
	$str=NULL;
	if(isset($tops['val'])){
		$joy=mysqli_query($s,  "SELECT * FROM $psev");
		//mysqli_fetch_field($joy)//Пропустить первое поле
		for ($i = 0; $i < $coupol; $i++) { 
			if($ar=mysqli_fetch_field_direct($joy, $i)){
			$str .=$ar->name=='id'?"'',":$ar->name.',';}else
			$str .="'',";
			}
			$str=substr($str,0,-1);
		$stmt=mysqli_prepare($s, "INSERT INTO {$tops['val']} SELECT $str FROM $psev WHERE A=?");
		mysqli_stmt_bind_param($stmt, 's', $mail);
		mysqli_stmt_execute($stmt);
	}
		$stm=mysqli_prepare($s, "DELETE FROM $psev WHERE A=?");
		mysqli_stmt_bind_param($stm, 's', $mail);
		mysqli_stmt_execute($stm);
		echo mysqli_stmt_affected_rows($stm)>0?'Email адрес почты <strong>'.$mail.'</strong> успешно отписан от рассылки.':exit('Email адрес почты <strong>'.$mail.'</strong> вероятно уже был отписан.');
		mysqli_query($s, "ALTER TABLE $psev DROP id");
		mysqli_query($s, "ALTER TABLE $psev ADD COLUMN id INT (11) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (id)");
}

?>


</section>
</body>
</html>