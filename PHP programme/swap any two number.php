<?php
$a=10;
$b=20;
echo"Before swap A=",$a; 					 //result=Before swap A=10
echo"<br>";
echo "B=",$b;             					#result=B=20
echo"<br>";
$c=$a;
$a=$b;
$b=$c;
echo"Aftar swap A=",$a;	  					//result=Aftar swap A=20
echo"<br>";
echo"B=",$b;			  					//result=B=10
echo"<br>";
?>