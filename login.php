<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
   
  <title>Faculty Login</title>
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
</head>

<body>
  <!-- Start your project here-->
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

 <div class="container">
        <div class="login-box">
    <div class="row">
        <div class="col-md-6  login-left">
        <h2>Login</h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                <label>Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-orange">Login</button>

            </form>
        </div>
        <div class="col-md-6 login-right">
        <h2>Create User</h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                <label>Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Phone No.</label>
                    <input type="number" name="Pnumber" class="form-control" required>
                </div>
                <div class="form-group">
                <label>E-mail</label>
                    <input type="email" name="ema" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-orange">Create</button>
            </form>
            </div>
        </div>
        </div>
    </div>
 <div id="dropDownSelect1"></div>
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
     <script src="https://apis.google.com/js/platform.js" async defer></script>

    
    <script>
    var open = document.getElementById('hamburger');
var changeIcon = true;

open.addEventListener("click", function(){

    var overlay = document.querySelector('.overlay');
    var nav = document.querySelector('nav');
    var icon = document.querySelector('.menu-toggle i');

    overlay.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
    }
    else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
    }
});
    </script>
    
    <style>
    
        body{
            background-image: url(0dafb7928a99a9cb552a941895a6e586.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}


a{
	text-decoration: none;
	color: black;
}

header{
	width: 100%;
    background-color: transparent;
	background-size: cover;
    background-attachment: fixed;
    overflow: hidden;
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
    float: left;
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
	animation-delay: .3s;
}

nav ul li:nth-child(3){
	animation-delay: .6s;
}

nav ul li:nth-child(4){
	animation-delay: .9s;
}
        
nav ul li:nth-child(5){
	animation-delay: 1.2s;
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
    
   .login-box{
        max-width: 700px;
        float: none;
       margin-top: 90px;
        margin-left: 350px;

    }
    
    
    .login-left{
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
    } 
    
    .login-right{
        background: rgb(0,0,0,0.1);
        padding: 30px;
        color: white;
    }
    
    .form-control{
        background-color: transparent!important;
        color: black;
        
    }
    
        
         /*//////////////////////////////////////////////////////////////////
[ FONT ]*/

@font-face {
  font-family: Ubuntu-Regular;
  src: url('../fonts1/ubuntu/Ubuntu-Regular.ttf'); 
}

@font-face {
  font-family: Ubuntu-Bold;
  src: url('../fonts1/ubuntu/Ubuntu-Bold.ttf'); 
}




    </style>
</body>

</html>
