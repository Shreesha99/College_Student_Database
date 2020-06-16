<?php session_start();?>
<!DOCTYPE>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>DYNAMIC NUMERICAL CLOCK</title>	

	<style type="text/css">

		 #clock {
			
			font-family: verdana;
			font-weight: bold;
			font-size: 24px;
			color:red;
			background-color: green;
			width: auto;
			position:fixed;
			margin-left: 60%;
			 		
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
	// $numericalclock1  = new numericalclock('',1,1,0,'$numericalclock1');//timer with button
	// $numericalclock1  = new numericalclock(array(23,59,55));//timer without buttons but which will always start from 23:59:55 instead of keep in memory time
	$numericalclock1  = new numericalclock('',1,1);//timer with button and no specification of which instanceof numericalclock class; you could just use this to allow the same timer on all the chosen pages	
	echo $numericalclock1->chronoscript();
	echo $numericalclock1->displayclock();
	
?>
</div><div id="other">
<h1>About the String Foreach class</h1>
Stringforeach  class is a usefull way to handle some actions over the string type of PHP.<br>
It allows user to look and go trough a string just like an array and then make easier the manipulation like
search, replacement, deletion,explosion,case transformation  .<br>






<h2>About the String Foreach class methods</h2>

class Stringforeach{<br>
		protected $str, $length;<br>
					public function __construct($string){<br>
						the constructor<br>
					}<br>
					
					public function explodemore ($separate=''){<br>
					can be used to explode the string in array<br>
					$separate can be chosen  in this set of values {word,ponctuation,phrase} or  any string or even a numeric<br>
					when $separate is a numeric the string is split in array of string of which the length is equal to the chosen numeric<br>
					when $separate is a string==word the string will be split in array of words<br>
					when $separate is is a string==ponctuation the string will be split before ponctuation in array of string <br>
					when $separate is a string==phrase the string will be split in array of phrases.<br>
					when $separate is a string=="" the string will be split in array before any space type character<br>
					when $separate is just any other  string, the method will just act like the function explode of PHP.<br>
						}<br>
					
					}<br>
					
					public function strforeach(){<br>
						can be used to explode the string in array of characters<br>
					}<br>
					
					public function strposall($s){<br>
						can be used to find all the occurences of the string $s and their precise position in the string<br>
					}<br>
					
					public function strposreplace($s,$s2,$pos){<br>
						can be used to replace  the  occurence of the string $s  in the position $pos by the given string $s2<br>
					}<br>
					
					
				
					public function strposadd($s,$s2,$pos,$before=true){<br>
					can be used to add $before or after  the  occurence of the string $s  in the position $pos , the given string $s2<br>
					}<br>

					
					
					
					public function addstratpos($s,$pos,$before=true){<br>
						can be used to add $before or after   the position $pos , the given string $s<br>
					}<br>
					
					
					public function upper_1stletter(){<br>
						can be used to upper  the first letter of all the phrases contained in the string<br>
					}<br>
					
					
					public function upper_pos($pos){<br>
						can be used to upper  the  letter in the position $pos in the string<br>
					}<br>


					public function lower_pos($pos){<br>
					can be used to lower  the  letter in the position $pos in the string<br>
					}<br>
					
					public function upper_strpos($s,$pos){<br>
						can be used to upper  the occurence of the string $s  in the position $pos in the string<br>
					}<br>
					
					public function lower_strpos($s,$pos){<br>
						can be used to lower  the occurence of the string $s  in the position $pos in the string<br>
					}<br>
					
					public function upper_preciseletter($s){<br>
						can be used to upper all the occurences of the letter $s   in the string<br>
					}<br>
					
					public function lower_preciseletter($s){<br>
						can be used to lower all the occurences of the letter $s   in the string<br>
					}<br>
					
					public function delete_posletter($s,$pos){<br>
						can be used to delete  the occurence of the letter $s  in the position $pos in the string<br>
					}<br>
					
					
					public function delete_pos($pos){<br>
						can be used to delete  the character   in the position $pos in the string<br>
					}<br>
					
					
					public function delete_preciseletter($s){<br>
						can be used to delete all the occurences of the letter $s   in the string<br>
					}<br>
					
					public function delete_strpos($s,$pos){<br>
						can be used to delete  the occurence of the string $s  in the position $pos in the string<br>
					}<br>
					
					
					public function delete_strelements($offset,$length){<br>
						can be used to delete  some string's elements by specifying the starting point $offset and the $length to specify the precise number<br>
						of characters to delete<br>
					}<br>
					
					public function delete_last(){<br>
						can be used to delete  the last character  in the string<br>
					}<br>
					
					public function delete_first(){<br>
						can be used to delete  the first character  in the string<br>
					}<br>
					
					
					public function wordmatches($pattern){<br>
						can be used to control if the given pattern is  in the string<br>
						$pattern must use the pcre language<br>
					}<br>
					
					public function patternsmatches($patterns){<br>
						can be used to control if the given $patterns in array  are in the string<br>
						$patterns must be an array of which each value use the pcre language<br>
					}<br>
					
					public function wordmatchespos($pattern){<br>
					can be used to find all the occurences and the postions of the given pattern   in the string<br>
						$pattern must use the pcre language<br>
					}<br>
					
					public function patternsmatchespos($patterns){<br>
						can be used to find all the occurences and the postions of each given pattern in the array of $patterns  in the string<br>
						$patterns must be an array of which each value use the pcre language<br>
					}<br>
					
					public function len(){<br>
						return the string length<br>
					}<br>
					
					
					
					
					public function numberdetect($lan='php'){<br>
						return the first occurence of special format number in the string and its offset<br>
						$lan is used to specify if the numbers in the string are in french format with a comma instead of point for float number<br>
						(example: 25.000,025) <br>
						or if numbers are in english format (example: 25,000.025) or simply in PHP format (example: 25000.025) <br>
				
					}<br>
					
					
					public function allnumberdetect($lan){<br>
						return all the  occurences of special format number in the string and their offset<br>
						$lan is used to specify if the numbers in the string are in french format with a comma instead of point for float number<br>
						(example: 25.000,025) <br>
						or if numbers are in english format (example: 25,000.025) or simply in PHP format (example: 25000.025) <br>
					}<br>
}

for some examples of use see the teststrforeach.php script file<br>
bug reporting qnd feeback to leizmo@gmail.com or just use the dedicated forum of the package.<br>
</div>

</body></html>