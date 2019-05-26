<?php
require_once "../../../dbuser.php";
is_array($INT)&& isset($_GET['psev'])?:exit(header('Location: /bimailer/bases.php',TRUE,301));
if(isset($_GET['s']))ini_set("memory_limit",'-1');
date_default_timezone_set('Europe/Moscow');
$psev=htmlspecialchars(substr($_GET['psev'],0,6),ENT_QUOTES);
$spis=mysqli_fetch_assoc(mysqli_query($s,"SELECT * FROM bus_baser WHERE psev='$psev'"));
isset($spis['spis'])?:exit('База не найдена');
$order=isset($spis['orders'])?$spis['orders']:'id';
$arr=range('A','Z');
include('sxlsx.php');
$sxlsx=new sxlsx($spis['spis'].'.xlsx');
$bsz=mysqli_query($s,"SELECT * FROM $psev ORDER BY $order");
$u=1;$list=1;
$sxlsx->addSheet($list,'Лист' .$list);
while($ra=mysqli_fetch_assoc($bsz)){
	if($u>25000){
		$u=1;
		$list=$list+1;
		$sxlsx->addSheet($list,'Лист' .$list);
	}
	$m=0;
	foreach($ra as $k=>$v){
		if($k=='id')continue;$sxlsx->addData($arr[$m] .$u,$v);$m++;}$u++;
	}$sxlsx->generate($spis['spis'] .'.xlsx');