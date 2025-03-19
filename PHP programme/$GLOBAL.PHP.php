<?php
$a=50;
$b=25;
function add()
{
	$GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];
}

add();
echo $c;
?>