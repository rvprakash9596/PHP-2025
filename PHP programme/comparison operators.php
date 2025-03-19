<?php

//equal to 
$a=10;
$b=10;
echo $a==$b;
echo"<br>";

//equl to 
$a1=10;
$b1=20;
echo $a1==$b1;
echo"<br>";

//equal value and equal datatype
$a2=10;
$b2="10";
echo $a2===$b2; //result=1
echo"<br>";

//not equal to 
$c=10;
$d=3;
echo $c != $d;  //result=1
echo"<br>";

//not equal to
$e=10;
$f=10;
echo $e<>$f; //result=false
echo"<br>";

$e=10;
$f=30;
echo $e<>$f; //result=true
echo"<br>";

//not equal value or not equal type
$g=20;
$h=10;
echo $g !== $h; //result=true
echo"<br>";


$g=20;
$h=20;
echo $g !== $h; //result=false
echo"<br>";

$g=20;
$h="20";
echo $g !== $h; //result=true
echo"<br>";


//greater than operator
$i=50;
$j=60;
echo $i>$j; ##result=false(0)
echo"<br>";

$i1=60;
$j1=50;
echo $i1>$j1; //result=true(1)
echo"<br>"

// Less than operator
$k=20;
$l=30;
echo $k<$l; //result=true
echo"<br>";

$k1=50;
$l1=40;
echo $k1<$l1; //result=false
echo"<br>"

//greater than or equal to
$m=10;
$n=10;
echo $m>=$n; //result=true
echo"<br>";

//less than or equal to
$o=5;
$p=50;
echo $o<=$p; //result=true
echo"<br>";

$o1=30;
$p1=10;
echo $o1<=$p1; //result=false
echo"<br>";

//spaceship operator which have come in php 7
$x=10;
$y=10;
echo $x<=>$y; //result=0
echo"<br>";

$x1=10;
$y1=20;
echo$x1<=>$y1; //result=-1
echo"<br>";

$x2=50;
$y2=40;
echo $x2<=>$y2;  //result=1
echo"<br>";
?>