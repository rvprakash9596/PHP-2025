<?php

$a=mysqli_connect("localhost","root","","database1") or die (mysqli_error());

// mysqli_select_db("database1",$a);

if(isset($_GET['s1']))
{
	$w=$_GET['en'];
	$x=$_GET['n'];
	$y=$_GET['b'];
	$z=$_GET['cn'];
	
	$set=mysqli_query($a,"insert into self1(EnrollmentNo,Name,Branch,ContactNo)
	values('$w','$x','$y','$z')");
	if($set==true)
		echo("Data Saved");
	else
		echo("Data Did Not Saved");
}
?>