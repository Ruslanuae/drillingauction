<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Справка пользователя</title>
<meta name="author" content="BusMail.ru">
<link rel="shortcut icon" type="image/x-icon" href="/bimailer/images/icon.png">
<link rel="stylesheet" href="/bimailer/extra/style.css">
<link rel="stylesheet" href="/bimailer/extra/menu.css">
<script src="/bimailer/extra/jquery.js"></script>
<script src="/bimailer/extra/allsite.js"></script>
<style>
section li{text-indent:10px;
	line-height: 150%;}
</style>
</head>
<?php require_once "dbuser.php";
is_array($INT) ?: require_once "advanced/enter.php";
?>

<body>
<?php require_once "menu.php"; ?>

<h1>Справочная информация</h1>
<section>
<center><a href="https://bimailer.ru/help/index.php"><input class="butG" type="button" value="На сайте издателя"></a></center>
</section>
<h1>Изменения в новой версии</h1>
<section>
<p>Примененные обновления в <span style="color:#ca6002; font-weight:bold;">Bi</span><span style="color:#445f88; font-weight:bold;">Mailer v3.6</span>
<ul>
<li>Исправлена проблема остановки фоновой рассылки после отправки первого письма на некоторых хостингах;</li>
<li>Небольшие изменения в JavaScript для расширения круга поддерживаемых браузеров;</li>
<li>Проверка наличия Flash плеера через JavaScript;</li>
<li>Переименованы состояния фоновой рассылки и их отображение после обновления страницы;</li>
<li>Поддержка PROXY двух типов SOCKS4 и SOCKS5;</li>
</ul>
</p>

</section><footer class="foo"><?php require_once "footer.php"; ?></footer>
</body>
</html>