<?php require_once "dbuser.php"; if(isset($_POST['название']) or isset($_POST['dlproj'])) require_once "advanced/saveprojekt.php"; ?><!doctype html><html lang="ru"><head><meta charset="utf-8" /><title>BiMailer</title><meta name="author" content="BusMail.ru"><link rel="shortcut icon" type="image/x-icon" href="/bimailer/images/icon.png"><link rel="stylesheet" href="/bimailer/extra/style.css"><link rel="stylesheet" href="/bimailer/extra/menu.css"><script src="/bimailer/extra/jquery.js"></script><script src="/bimailer/extra/allsite.js"></script><script src="/bimailer/extra/proj.js"></script><script src="/bimailer/ckeditor/ckeditor.js"></script><style> #thems input{
	font-size:15px;
	font-weight:bold;
	color:#000;
}
input[type="text"]:not(.inLog){
	width:100%;
}
img.dell{
	position:absolute;
	margin-left:-20px;
	margin-top:4px;
	cursor:pointer;
}
img.delm{
	position:absolute;
	margin-left:945px;
	margin-top:5px;
	cursor:pointer;
	z-index:100;
}
.urladd{
	cursor:pointer;
	color:#083e71;
	font-weight:bold;
	font-size:12px;
	text-decoration: underline;
}
#ah{
	width:100%;
	background-color:#222;
	color:#ccc;
	font-family: Menlo, Monaco, monospace, sans-serif;
	resize:vertical;
	height:120px;
}
select[name="выбор"]{
	max-width: 500px;	
	}
span.ers{
	font-size:11px;
	color:#cc0000;
}
.proces{
	text-align: center;
	font-size: 14px;
    } 
</style></head><?php is_array($INT) ?: require_once "advanced/enter.php"; ?><body><?php require_once "menu.php"; ?><h1>Создание/ред. шаблона: <select name="выбор" form="form" onchange="vibor(this.value);" >
<option value="none" selected="selected">Новый проект</option><?php $rdp=mysqli_query($s, 'SELECT name,id FROM bus_proj');
while($projs=mysqli_fetch_array($rdp)){ ?><option value="<?=$projs['id']?>"><?=htmlspecialchars(base64_decode($projs['name']), ENT_QUOTES); ?></option>
<?php } ?></select></h1><section><span id="respr"><?php require "advanced/sozdprojekt.php"; ?></span></section><footer class="foo"><a href="https://bimailer.ru/help/template-mail.php" class="but butO" title="Создание, редактирование проектов" target="_blank">Справка раздела</a><?php require_once "footer.php"; ?></footer></body></html>