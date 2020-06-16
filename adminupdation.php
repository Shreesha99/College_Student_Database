<!DOCTYPE html>
<html>
<head>
<title>Updation</title>
<link href="style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="logo1.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Update Data</h2>
</div>
<div class="divB">
<div class="divD">
<?php
$connection = mysqli_connect("localhost", "root", "","college student database");
if (isset($_GET['submit'])) {
$name = $_GET['Name'];
$USN = $_GET['USN'];
$query = mysqli_query("update batch20157thsem set
Name='$name', USN='$USN'", $connection);
}
$query = mysqli_query( $connection,"select * from batch20157thsem");  
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href='adminupdation.php?update={$row['Name']}'>{$row['USN']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysqli_query( $connection,"select * from batch20157thsem where Name=$update && USN=$update");
while ($row1 = mysqli_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='USN' value='{$row1['USN']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='Name' value='{$row1['Name']}' />";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysqli_close($connection);
?>
    <style>
    @import "http://fonts.googleapis.com/css?family=Droid+Serif";
/* Above line is used to import Google font style */
        body{
            background-image: url(0dafb7928a99a9cb552a941895a6e586.jpg);
    background-repeat: repeat;
    background-size: cover;
        }
.maindiv{
margin:0 auto;
width:980px;
height:500px;
background:#fff;
padding-top:20px;
font-size:14px;
font-family:'Droid Serif',serif
}
.title{
width:100%;
height:70px;
text-shadow:2px 2px 2px #cfcfcf;
font-size:16px;
text-align:center;
font-family:'Droid Serif',serif
}
.divA{
width:70%;
float:left;
margin-top:30px
}
.form{
width:400px;
float:left;
background-color:#f0f8ff;
font-family:'Droid Serif',serif;
padding-left:30px
}
.divB{
width:100%;
height:100%;
background-color:#f0f8ff;
border:dashed 1px #999
}
.divD{
width:200px;
height:480px;
float:left;
background-color:#f0f8ff;
border-right:dashed 1px #999
}
#form3{
color:green;
font-weight:700
}
p{
font-weight:700;
text-align:center;
color:#5678C0;
font-size:18px;
text-shadow:2px 2px 2px #cfcfcf
}
form h2{
text-align:center;
text-shadow:2px 2px 2px #cfcfcf
}
textarea{
width:250px;
height:60px;
border-radius:1px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:5px 0;
border:none
}
.input{
width:250px;
height:15px;
border-radius:1px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:5px 0;
border:none;
margin-bottom:20px
}
.submit{
color:#fff;
border-radius:3px;
background:#1F8DD6;
padding:5px;
margin-top:40px;
border:none;
width:100px;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:16px
}
a{
text-decoration:none;
font-size:16px;
margin:2px 0 0 30px;
padding:3px;
color:#1F8DD6
}
a:hover{
text-shadow:2px 2px 2px #cfcfcf;
font-size:18px
}
.clear{
clear:both
}
    
    
    </style>
    
</body>
</html>