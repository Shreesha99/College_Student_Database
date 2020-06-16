<?php

session_start();


$con = mysqli_connect("localhost", "root", "", "userregistration");  


$uname = $_POST['user'];
$passw = $_POST['password'];


$s = "select * from admin where name = '$uname' && password = '$passw'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    header("location:adminupdation.php");
}
 else{
     header("location:adminlogin.php");
 }

?>