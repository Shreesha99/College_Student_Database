<?php
session_start();
if(isset($_SESSION['time'])){
echo intval($_SESSION['time'][0]).':'.intval($_SESSION['time'][1]).':'.intval($_SESSION['time'][2]);
}else{
echo '0:0:0';
}
?>