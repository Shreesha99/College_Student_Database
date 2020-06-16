<?php

session_start();


$con = mysqli_connect("localhost", "root", "", "logins");  


$name = $_POST['user'];
$pass = $_POST['password'];


$s = "select * from login where Username = '$name' && Password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header("location:batchselectprinci.php");
}
 else{
     header("location:index.php");
 }

?>