<?php
$con=mysqli_connect("localhost","root","","database4") or die (mysqli_error());

if(isset($_GET['s1']))
{
	$id=$_GET['id'];
	$n=$_GET['name'];
	
	$u="update rec3 set name='$n' where id='$id'";
	
	$res=mysqli_query($con,$u);
	
	if($res)
	{
		echo"Record Updated";
	}
	else
	{
		echo"Record Not Update";
	}
}
?>