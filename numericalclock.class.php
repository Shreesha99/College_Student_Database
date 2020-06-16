<?php
/* IMPORTANT: READ BEFORE DOWNLOADING, COPYING, INSTALLING OR USING.
			
			 By downloading, copying, installing or using the software you agree to this license.
			 If you do not agree to this license, do not download, install,
			 copy or use the software.
			
			
			                          License Agreement
			                      For numericalclock.class.package V 1.0.0
			
			Copyright (C) 2017, Akpe Aurelle Emmanuel Moïse Zinsou, all rights reserved.
			
			Redistribution and use in source and binary forms, with or without modification,
			are permitted provided that the following conditions are met:
			
			  * Redistribution's of source code must retain the above copyright notice,
			    this list of conditions and the following disclaimer.
			
			  * Redistribution's in binary form must reproduce the above copyright notice,
			    this list of conditions and the following disclaimer in the documentation
			    and/or other materials provided with the distribution.
			
			  * The name of the copyright holders may not be used to endorse or promote products
			    derived from this software without specific prior written permission.
			
			This software is provided by the copyright holders and contributors "as is" and
			any express or implied warranties, including, but not limited to, the implied
			warranties of merchantability and fitness for a particular purpose are disclaimed.
			In no event shall Akpe Aurelle Emmanuel Moïse Zinsou or contributors be liable for 
			any direct, indirect, incidental, special, exemplary, or consequential damages(including, 
			but not limited to, procurement of substitute goods or services;loss of use,  data, or 
			interruption) however caused and on any theory of profits; or business liability, 
			whether  in contract, strict liability, or tort (including negligence or otherwise)
			arising in any way out of the use of this software, even if advised of the possibility
			of such damage.

			EZAMA contact:leizmo@gmail.com
*/
	
class numericalclock {
				protected $code1,$code2,$hide=0;
				public function __construct($time='',$button=0,$nothiden=1,$trueclock=false,$buttonify="undefined"){
					if(is_array($time)&&count($time)>=3&&$trueclock==true){
						$this->code1 ='<div id="compteur"></div>
						<script language="JavaScript"> 
						m='.intval($time[1]).',
						h='.intval($time[0]).',
						s=duree='.intval($time[2]).',
						leave=false;
						var compteur=document.getElementById("compteur");
						trueclock=true;
						t();
						
						</script>';   
					}
					elseif(is_array($time)&&count($time)>=3){
						$this->code1 =' <div id="compteur"></div>
						<script language="JavaScript">
							m='.intval($time[1]).',
							h='.intval($time[0]).',
							duree='.intval($time[2]).',
							leave=false;
							var compteur=document.getElementById("compteur");
							trueclock=false;
							t();
							// setInterval(ajaxify,999);
							addEvent(window,"mouseleave",function(){
								leave=true;
								ajaxify();
								}
							);
							addEvent(window,"mouseenter",function(){			
									if(leave===true){
										leave=false;
										truthify();
										t();
									}
								}
							);
						</script>';     
					}elseif($time==''&&$button==true&&$nothiden){
						$this->code1 ='<div id="compteur"></div><div id="BUTTON"><form><button id="START">START</button><button id="STOP">STOP</button><button id="PAUSE">PAUSE</button><button id="RESUME">RESUME</button></form></div>
							<script language="JavaScript">
								m=0,
								h=0,
								duree="0",
								s=0,
								leave=true;
								var compteur=document.getElementById("compteur");
								var start=document.getElementById("START");
								notstopped=false;
								oncestart=false;
								oncepause=false;
								forresume=false;
								onceforresume=false;
								addEvent(start,"click",function(e){
									e = e || window.event ;
									
										notstopped=true;
										oncestart=true;
										trueclock=false;
									if((h==0&&m==0&s==0)){	
										leave=false;
										t();
										realtimeupload("'.$buttonify.'");
										forresume=false;
									}
									e.returnValue= false;
									if (e.preventDefault) {
										e.preventDefault();
									}
								});
								var stop=document.getElementById("STOP");
								addEvent(stop,"click",function(e){
										e = e || window.event ;
										leave=true;
										m=0,
										h=0,
										s=duree="0";
										buttonify("'.$buttonify.'",true);
										if(notstopped===true||forresume){
											compteur.innerHTML="TIMER STOPPED";
										}
										oncepause=false;
										oncestart=false;
										notstopped=false;
										e.returnValue= false;
										if (e.preventDefault) {
											e.preventDefault();
										}
									}
								);
								var pause=document.getElementById("PAUSE");
								addEvent(pause,"click",function(e){
										e = e || window.event ;
										if(oncestart===true){
											leave=true;
											oncepause=true;
											forresume=false;
										}
										e.returnValue= false;
										if (e.preventDefault) {
											e.preventDefault();
										}
									}
								);
								var resume=document.getElementById("RESUME");
								addEvent(resume,"click",function(e){
										e = e || window.event ;
										truebuttonify("'.$buttonify.'");
										if(oncepause&&oncestart){
											forresume=false;
											leave=false;
											trueclock=false;
											t();	
											realtimeupload("'.$buttonify.'");
											oncepause=false;
										}
										else if((h!=0||m!=0||s!=0)&&forresume){
											forresume=false;
											onceforresume=true;
											leave=false;
											trueclock=false;
											t();
											realtimeupload("'.$buttonify.'");
											oncestart=true;
											notstopped=true;
											oncepause=false;
										}
										e.returnValue= false;
										if (e.preventDefault) {
											e.preventDefault();
										}
									}
								);
								truebuttonify("'.$buttonify.'");
								// setInterval(buttonify,1500,"'.$buttonify.'");	
							</script>';   
					}else{
						$this->code1 =' <div id="compteur"></div>
						<script language="JavaScript">
							m=0,
							h=0,
							duree="0",
							leave=false;
							var compteur=document.getElementById("compteur");
							trueclock=false;
							t();
							// setInterval(ajaxify,999);
							addEvent(window,"mouseleave",function(){
								leave=true;
								ajaxify();
								}
							);
							addEvent(window,"mouseenter",function(){
									if(leave===true){
										leave=false;
										truthify();
										t();
									}
								}
							);
						</script>';     
					}
					$this->hide=$nothiden;
				}
		
			
		
				public function chronoscript(){
					$hide=$this->hide;
					$this->code2 =' <script language="JavaScript">
										var hide='.$hide.';
										function t()
										{
											
											s=duree;
											if(s>59){
												s=0;
												duree=0;
												m++;
											}
											
											if(m>59){				   
												m=0;
												h++;
											}
											if(trueclock){
												if(h>23){
													h=0,
													m=0,
													s=0;
													duree=0;
												}
											}
											
											if(s<10){
												s="0"+s;
											}
											if(m<10){
												m="0"+parseInt(m,10);
											}
											if(h<10){
												h="0"+parseInt(h,10);
											}
											if(hide){
													compteur.innerHTML=h+":"+m+":"+s;
											}
											duree=parseInt(duree,10)+1;
											if(leave!==true){
												timeout=window.setTimeout(t,999);
											}
										}	

										function addEvent (element,event,func) {
											if (element.attachEvent){ 
												element.attachEvent ("on"+event,func) ; 
											}else{
												element.addEventListener(event,func,true) ;
											} 
										}	
										
										function ajaxify(){
											var xhr=new XMLHttpRequest;
											xhr.open("GET","./ajax.php?hour="+h+"&minute="+m+"&segund="+s);
											xhr.send(null);
										}
										function truthify(){
											var xhr=new XMLHttpRequest;
											xhr.open("GET","./ajax2.php");
											xhr.onreadystatechange=function(){
												if(xhr.readyState==4&&xhr.status==200){
													var resp=xhr.responseText.split(":");
													m=resp[1],
													h=resp[0],
													duree=resp[2];
												}		
											}
											xhr.send(null);
										}
										
										function truebuttonify(timer){
											var xhr=new XMLHttpRequest;
											xhr.open("GET","./truebuttontimer.php?timer="+timer);
											xhr.onreadystatechange=function(){
												if(xhr.readyState==4&&xhr.status==200){
													var resp=xhr.responseText.split(":");
													m=resp[1],
													h=resp[0],
													s=duree=resp[2];
													if(s<10){
														s="0"+s;
													}
													if(m<10){
														m="0"+parseInt(m,10);
													}
													if(h<10){
														h="0"+parseInt(h,10);
													}
													if(h!=0||m!=0||s!=0){
														if(!onceforresume)forresume=true;
													}
													compteur.innerHTML=h+":"+m+":"+s;
												}		
											}
											xhr.send(null);
										}
										function buttonify(timer,stop=false){
											var xhr=new XMLHttpRequest;
											if(stop){
												xhr.open("GET","./buttontimer.php?hour="+h+"&minute="+m+"&segund="+s+"&timer="+timer+"&stop="+stop);
											}else{
												xhr.open("GET","./buttontimer.php?hour="+h+"&minute="+m+"&segund="+s+"&timer="+timer);	
											}
											xhr.send(null);
										}
										
										function realtimeupload(button){
											if(leave!==true){
												buttonify(button)
											}
											timeinterval=window.setTimeout(realtimeupload,1000,button);
										}
										
									</script>';
					return $this->code2;
				}
				
				
				public function displayclock() {
					
					return $this->code1;
				}
}
?>