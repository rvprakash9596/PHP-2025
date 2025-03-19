<?php

$a=array(5,8,6,2,8,6,1,0,7,11,21);
  sort ($a);
//asort ($a);
//rsort ($a);
//ksort ($a);
//arsort ($a);
//krsort ($a);
for($i=0; $i<11; $i++)
{
	echo $a[$i],"<br>";
}
?>