..<?php
session_start();
$duree=$_GET['hour']*3600+$_GET['minute']*60+$_GET['segund'];
$session=intval($_SESSION[$_GET['timer']][0])*3600+intval($_SESSION[$_GET['timer']][1])*60+intval($_SESSION[$_GET['timer']][2]);
if(isset($_GET['stop'])){
	$_SESSION[$_GET['timer']]=array($_GET['hour'],$_GET['minute'],$_GET['segund']);
}else{
	if($session<$duree){
		$_SESSION[$_GET['timer']]=array($_GET['hour'],$_GET['minute'],$_GET['segund']);
	}
}
?>
		