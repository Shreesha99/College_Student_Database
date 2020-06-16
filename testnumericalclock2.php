<?php session_start();?>
<!DOCTYPE>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>DYNAMIC NUMERICAL CLOCK 2</title>	

	<style type="text/css">

		 #clock {
			
			font-family: verdana;
			font-weight: bold;
			font-size: 24px;
			color:red;
			background-color: green;
			width: auto;
			position:fixed;
			margin-left: 63%;
			 		
		}
		 #other {
			
			font-family: verdana;
			font-weight: bold;
			font-size: 14px;
			font-style:italic;
			color: #FFFFFF;
			background-color: grey;
			width: auto;
			margin-left: 15%;
			margin-right: 15%;
			padding:2%;
			 		
		}
		
		</style>
	
	</head>
<body>
<div id="clock">
<?php
	/**
	 * Example file
	 * 
	 */
	require_once('numericalclock.class.php');
	// $numericalclock1  = new numericalclock(explode('-',date('H-I-s')),0,1,true);//simple exemple to make a true clock
	// $numericalclock1  = new numericalclock(isset($_SESSION['time'])?$_SESSION['time']:null,0,1);//timer without buttons allways procede like this on every page you use it 
	$numericalclock1  = new numericalclock('',1,1);//timer with button and no specification of which instanceof numericalclock class; you could just use this to allow the same timer on all the chosen pages	
	echo $numericalclock1->chronoscript();
	echo $numericalclock1->displayclock();
	
	
?>
</div><div id="other">
<h1>About the String Foreach class</h1>
Stringforeach  class is a usefull way to handle some actions over the string type of PHP.<br>
It allows user to look and go trough a string just like an array and then make easier the manipulation like
search, replacement, deletion,explosion,case transformation  .<br>

for some examples of use see the teststrforeach.php script file<br>
bug reporting qnd feeback to leizmo@gmail.com or just use the dedicated forum of the package.<br>
</div>

</body></html>