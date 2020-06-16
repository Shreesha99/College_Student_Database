<?php
session_start();
if(isset($_SESSION[$_GET['timer']])){
	echo intval($_SESSION[$_GET['timer']][0]).':'.intval($_SESSION[$_GET['timer']][1]).':'.intval($_SESSION[$_GET['timer']][2]);
}else{
echo "0:0:0";}
?>