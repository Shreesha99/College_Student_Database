<?php

session_start();
header("location:login.php");

$con = mysqli_connect("localhost", "root", "", "userregistration");  


$name = $_POST['user'];
$pass = $_POST['password'];
$number = $_POST['Pnumber'];
$em = $_POST['ema'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    header("location:login.php");
    echo" Username already taken";
}
 else{
     $reg = "insert into usertable(name,password,Phone,Email) values ('$name','$pass','$number','$em')";
     mysqli_query($con,$reg);
     echo" Registration Successful";
 }

?>