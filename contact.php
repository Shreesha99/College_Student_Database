<?php

session_start();

$con = mysqli_connect('localhost','root','','suggestions');



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$text = $_POST['text'];

$s = " select * from contact where fname = '$fname'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 9999999){
     
}
else{ 
    $reg = " insert into contact(Fname,Lname,Email,Suggestion) values ('$fname' , '$lname' , '$email' , '$text')";
    mysqli_query($con, $reg);
     header('location:thanks.php');
}

?>