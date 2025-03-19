<?php
$a=20;
$b=30;
function demo()
{
	$GLOBALS['x']=$GLOBALS['a']*$GLOBALS['b'];
}
demo();
echo $x;



?>