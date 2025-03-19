<?php
if(isset($_GET ['s1']))
{
	$a=$_GET['n1'];
	if($a<0)
	{
		$a=$a*(-1);
	}	
	echo"Absolute Value Is = ",$a;
}
?>