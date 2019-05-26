<?php
$dbname = "admin_auction";//Укажите имя базы данных в кавычках
$dbuser = "admin_auction";//Укажите имя пользователя базы данных в кавычках
$dbpass = "Rjhjkm432";//Укажите пароль пользователя базы данных в кавычках
$dbhost = "localhost";//Укажите IP адрес, если MySQL сервер размещен удаленно
$s = mysqli_init();
mysqli_real_connect($s, $dbhost, $dbuser, $dbpass, $dbname, NULL, NULL, MYSQLI_CLIENT_INTERACTIVE);
mysqli_set_charset($s, _4(0));
function _3($t = NULL)
{
    global $s;
    $it = mysqli_query($s, _4(1));
    if (!$it) {
        return _4(2);
    }
    $res = mysqli_fetch_assoc($it);
    $nc = $res[_4(3)];
    $res[_4(4)] = (bool)$res[_4(5)];
    $vc = md5(md5(strrev($res[_4(6)] . $res[_4(7)] . str_replace(_4(8), _4(9), $_SERVER[_4(10)]))));
    if ($t == _4(11)) {
        $res[_4(12)] = $vc;
        return $res;
    }
    $res[_4(13)] = @$_COOKIE[$nc];
    return @$_COOKIE[$nc] !== $vc ? _4(14) : $res;
}

$INT = _3();
function _4($i)
{
    $a = array('utf8', "SELECT login, cooc, nam, vers, date, act FROM bus_admin", 'install', 'cooc', 'act', 'act', 'date', 'login', 'www.', '', 'HTTP_HOST', 'test', 'vcooc', 'vcooc', 'false');
    return $a[$i];
}

if (empty($_GET['test'])) {
    error_reporting(0);
} else {
    ini_set("display_errors", "1");
    ini_set("display_startup_errors", "1");
    ini_set('error_reporting', E_ALL);
}
