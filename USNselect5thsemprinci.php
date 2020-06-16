<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
    
  <link rel="shortcut icon" href="logo1.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Student Information Portal</title>
  </head>
    <header>
    <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    
    
    
    </header>
  <body>
    <div class="container" style="margin-left:90px;">
       <h4><a href="logoutp.php" style="float:right; margin-top:20px; padding-right:20px;"><button class="btn btn-orange">Logout</button></a></h4>
        <div class="jumbotron text-center login-box">
         <h4><a href="studentdetails2015princi.php" style="float:left; margin-top:-50px; padding-right:50px; margin-left:-10px;"><button class="btn btn-orange">Contact Details</button></a><a href="all5thsem.php" style="float:left; padding-right:20px; margin-top:-50px;"><button class="btn btn-orange">All Students</button></a></h4>
        <br>
        <br>
       <h1 style="color: black;">Student Information Portal</h1> 
      <p class="lead"></p>
      <hr>
      
      <form action="USNselect5thsemprinci.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
       <table class="table table-striped table-dark">
  <tbody>
    <tr>
      <th scope="row">USN</th>
      <td><input class="form-control" type="text" name="id" placeholder="Enter student USN" required></td>
    </tr>
    
     
      
  </tbody>
  
</table>
    <button type="submit" class="btn btn-orange" name="submit">Search</button>
     </div>
      </form>
    
      <div class="form-group">
       <table class="table table-bordered table-hover table-dark">
          <?php $con = mysqli_connect("localhost", "root", "", "college student database"); 
         $id=$_POST['id'];
        
        $sql="SELECT * FROM `batch20155thsem` WHERE `USN`='$id'"; 
           $run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run)?> 
           <h5>This is the Internal marks of <?php echo $data['Name'];?></h5>
  <tbody>
    <tr>
      <th scope="row">USN</th>
      <th scope="row">NAME</th>
      <th scope="row">15CS51</th>
        <th scope="row">15CS52</th>
        <th scope="row">15CS753</th>
        <th scope="row">15CS54</th>
        <th scope="row">15CS551</th>
        <th scope="row">15CS563</th>
        <th scope="row">15CSL57</th>
        <th scope="row">15CSL58</th>
    </tr>
     <?php
            
    if(isset($_POST['submit']))
        {
        $con = mysqli_connect("localhost", "root", "", "college student database"); 
         $id=$_POST['id'];
        
        $sql="SELECT * FROM `batch20155thsem` WHERE `USN`='$id'";
        $run=mysqli_query($con,$sql);
        
        if(mysqli_num_rows($run)<1)
        {
            echo"<tr><td colspan='11'>Sorry! No records found</td><tr>";
        }
        else
        {   $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                    $count++;
                ?>
                      <tr>

                      <th scope="row"><?php echo $data['USN'];?></th>
                      <th scope="row"><?php echo $data['Name'];?></th>
                      <th scope="row"><?php echo $data['15CS51I'];?></th>
                      <th scope="row"><?php echo $data['15CS52I'];?></th>
                      <th scope="row"><?php echo $data['15CS53I'];?></th>
                      <th scope="row"><?php echo $data['15CS54I'];?></th>
                      <th scope="row"><?php echo $data['15CS551I'];?></th>
                      <th scope="row"><?php echo $data['15CS563I'];?></th>
                      <th scope="row"><?php echo $data['15CSL57I'];?></th>
                      <th scope="row"><?php echo $data['15CSL58I'];?></th>
                </tr>
                <?php
                
                
if($data['15CS51I'] == 0)
        {
            echo"<tr><td colspan='11'>Please note : You are viewing the data of a drop out student</td><tr>";
        }
                
                
                
                
if(($data['15CS51I'] && $data['15CS52I'] && $data['15CS53I'] && $data['15CS54I'] && $data['15CS551I'] && $data['15CS563I'] && $data['15CSL57I'] && $data['15CSL58I'])  >= 40)
        {
          echo"<tr><td colspan='11'>The student has obtained the required minimum marks in the respective Internal Test</td><tr>";
        }
                 
            }
        }
    }
        ?>
     
  
          </table> 
          
          
         <div class="form-group">
       <table class="table table-bordered table-hover table-dark">
          <?php $con = mysqli_connect("localhost", "root", "", "college student database"); 
         $id=$_POST['id'];
        
        $sql="SELECT * FROM `batch20155thsem` WHERE `USN`='$id'"; 
           $run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run)?> 
           <h5>This is the External marks of <?php echo $data['Name'];?></h5>
  <tbody>
       <tr>
      <th scope="row">USN</th>
      <th scope="row">NAME</th>
      <th scope="row">15CS51</th>
        <th scope="row">15CS52</th>
        <th scope="row">15CS753</th>
        <th scope="row">15CS54</th>
        <th scope="row">15CS551</th>
        <th scope="row">15CS563</th>
        <th scope="row">15CSL57</th>
        <th scope="row">15CSL58</th>
    </tr>
     <?php
            
    if(isset($_POST['submit']))
        {
        $con = mysqli_connect("localhost", "root", "", "college student database"); 
         $id=$_POST['id'];
        
        $sql="SELECT * FROM `batch20155thsem` WHERE `USN`='$id'";
        $run=mysqli_query($con,$sql);
        
        if(mysqli_num_rows($run)<1)
        {
            echo"<tr><td colspan='11'>Sorry! No records found</td><tr>";
        }
        else
        {   $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                    $count++;
                ?>
                      <tr>

                      <th scope="row"><?php echo $data['USN'];?></th>
                      <th scope="row"><?php echo $data['Name'];?></th>
                      <th scope="row"><?php echo $data['15CS51E'];?></th>
                      <th scope="row"><?php echo $data['15CS52E'];?></th>
                      <th scope="row"><?php echo $data['15CS53E'];?></th>
                      <th scope="row"><?php echo $data['15CS54E'];?></th>
                      <th scope="row"><?php echo $data['15CS551E'];?></th>
                      <th scope="row"><?php echo $data['15CS563E'];?></th>
                      <th scope="row"><?php echo $data['15CSL57E'];?></th>
                      <th scope="row"><?php echo $data['15CSL58E'];?></th>
                </tr>
                <?php
                
                
if($data['15CS51E'] == 0)
        {
            echo"<tr><td colspan='11'>Please note : You are viewing the data of a drop out student</td><tr>";
        }
                
                
                
                
if(($data['15CS51E'] && $data['15CS52E'] && $data['15CS53E'] && $data['15CS54E'] && $data['15CS551E'] && $data['15CS563E'] && $data['15CSL57E'] && $data['15CSL58E'])  >= 28)
        {
          echo"<tr><td colspan='11'>The student has obtained the required minimum marks in the respective Semester</td><tr>";
        }
          
                
                
            }
        }
    }
        ?>
     
  
          </table> 
          
          <table class="table table-bordered table-hover table-dark">
          <?php $con = mysqli_connect("localhost", "root", "", "college student database"); 
         $id=$_POST['id'];
        
        $sql="SELECT * FROM `batch20155thsem` WHERE `USN`='$id'"; 
           $run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run)?> 
           <h5>This is the Total marks of <?php echo $data['Name'];?></h5>
  <tbody>
      <tr>
      <th scope="row">USN</th>
      <th scope="row">NAME</th>
      <th scope="row">15CS51</th>
        <th scope="row">15CS52</th>
        <th scope="row">15CS753</th>
        <th scope="row">15CS54</th>
        <th scope="row">15CS551</th>
        <th scope="row">15CS563</th>
        <th scope="row">15CSL57</th>
        <th scope="row">15CSL58</th>
    </tr>
     <?php
            
    if(isset($_POST['submit']))
        {
        $con = mysqli_connect("localhost", "root", "", "college student database"); 
         $id=$_POST['id'];
        
        $sql="SELECT * FROM `batch20155thsem` WHERE `USN`='$id'";
        $run=mysqli_query($con,$sql);
        
        if(mysqli_num_rows($run)<1)
        {
            echo"<tr><td colspan='11'>Sorry! No records found</td><tr>";
        }
        else
        {   $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                    $count++;
                ?>
                      <tr>

                      <th scope="row"><?php echo $data['USN'];?></th>
                      <th scope="row"><?php echo $data['Name'];?></th>
                      <th scope="row"><?php echo $data['15CS51T'];?></th>
                      <th scope="row"><?php echo $data['15CS52T'];?></th>
                      <th scope="row"><?php echo $data['15CS53T'];?></th>
                      <th scope="row"><?php echo $data['15CS54T'];?></th>
                      <th scope="row"><?php echo $data['15CS551T'];?></th>
                      <th scope="row"><?php echo $data['15CS563T'];?></th>
                      <th scope="row"><?php echo $data['15CSL57T'];?></th>
                      <th scope="row"><?php echo $data['15CSL58T'];?></th>
                </tr>
                <?php
                
                
if($data['15CS51T'] == 0)
        {
            echo"<tr><td colspan='11'>Please note : You are viewing the data of a drop out student</td><tr>";
        }
                
                
                
                
if(($data['15CS51T'] && $data['15CS52T'] && $data['15CS53T'] && $data['15CS54T'] && $data['15CS551T'] && $data['15CS563T'] && $data['15CSL57T'] && $data['15CSL58T'])  >= 40)
        {
          echo"<tr><td colspan='11'>The student has cleared all the subjects in the respective semester</td><tr>";
        }
          
                
                
                
                
            }
        }
    }
        ?>
  
          </table>
          
          
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <style>
        
 body{
            background-image: url(0dafb7928a99a9cb552a941895a6e586.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
a{
	text-decoration: none;
	color: black;
}
.container{
	max-width: 120rem;
	width: 90%;
	margin: 0 auto;
    float: left;
}

.menu-toggle{
	position: fixed;
	top: 2.5rem;
	right: 2.5rem;
	color: #eeeeee;
	font-size: 3rem;
	cursor: pointer;
	z-index: 1000;
	display: none;
}

nav{
    padding: 10px;
	text-transform: uppercase;
	font-size: 20px;
    float: left;
}

nav ul{
    display: flex;
}

nav ul li{
	list-style: none;
	transform: translateX(100rem);
	animation: slideIn .5s forwards;
}

nav ul li:nth-child(1){
	animation-delay: 0s;
}

nav ul li:nth-child(2){
	animation-delay: .1s;
}

nav ul li:nth-child(3){
	animation-delay: .2s;
}

nav ul li:nth-child(4){
	animation-delay: .3s;
}
        
nav ul li:nth-child(5){
	animation-delay: .4s;
}

nav ul li a{
	padding: 1rem 0;
	margin: 0 3rem;
	position: relative;
	letter-spacing: 2px;
}

nav ul li a:last-child{
	margin-right: 0;
}

nav ul li a::before,
nav ul li a::after{
	content: '';
	position: absolute;
	width: 100%;
	height: 2px;
	background-color: crimson;
	left: 0;
	transform: scaleX(0);
	transition: all .5s;
}

nav ul li a::before{
	top: 0;
	transform-origin: left;
}

nav ul li a::after{
	bottom: 0;
	transform-origin: right;
}

.overlay{
	background-color: rgba(0,0,0,.95);
	position: fixed;
	right: 0;
	left: 0;
	top: 0;
	bottom: 0;
	transition: opacity 650ms;
	transform: scale(0);
	opacity: 0;
  display: none;
}

nav ul li a:hover::before,
nav ul li a:hover::after{
	transform: scaleX(1);
}
        
nav ul li a:active{
	transform: scaleX(1);
}

@keyframes slideIn {
	from{

	}
	to{
		transform: translateX(0);
	}
}

@media screen and (max-width: 700px){

	.menu-toggle{
		display: block;
	}

	nav{
		padding-top: 0;
		display: none;
		flex-direction: column;
		justify-content: space-evenly;
		align-items: center;
		height: 100vh;
		text-align: center;
	}

	nav ul{
		flex-direction: column;
	}

	nav ul li{
		margin-top: 5rem;
	}

	nav ul li a{
		margin: 0;
		font-size: 2.5rem;
	}

	.brand{
		font-size: 5rem;
	}
  
  .overlay.menu-open,
  nav.menu-open{
	  display: flex;
	  transform: scale(1);
	  opacity: 1;
  }
  
}
  
        
        
        </style>
  </body>
  
  
</html>