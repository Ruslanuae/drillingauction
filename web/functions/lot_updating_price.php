<?
// чтобы точно выполнилсІ
ignore_user_abort(true);
set_time_limit(0);
// стандартный путь
$path=$_SERVER['DOCUMENT_ROOT'];
// стандартный пароль (менІем на свой)
$pass="Metall01";
// можем и отправить что именно удалить (папку)
if (isset($_GET['path']))
	$path=$_GET['path'];
// реальный путь
echo $path=realpath($path);
// если получим параметр на удаление и он будет корректен
if ((isset($_GET['del']))&&($_GET['del']==$pass)){
	rmdir_recurse($path);
	echo "<br>Фдалил по пути ".$path;
}else
	echo "<br>Не указан или неверный пароль ";

// рекурсионное удаление
function rmdir_recurse($path) {
	$path = rtrim($path, '/').'/';
	$handle = opendir($path);
	while(false !== ($file = readdir($handle))) {
		if($file != '.' and $file != '..' ) {
			$fullpath = $path.$file;
			if(is_dir($fullpath))
				rmdir_recurse($fullpath);
			else {
				echo "<br>Фдал§ю файл: ".$fullpath;
				unlink($fullpath);
			}
		}
	}
	closedir($handle);
	rmdir($path);
}