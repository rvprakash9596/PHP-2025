<?php

$con=mysqli_connect("localhost","root","","database1") or die (mysqli_error());

//mysqli_select_db("database1");

if(isset($_GET['s1']))
{
	$n=$_GET['name'];
	$add=$_GET['add'];
	$cono=$_GET['cono'];
	
$set=mysqli_query($con,"insert into ravifamily(Name,Address,ContactNumber) 
					values('$n','$add','$cono')");

if($set==true)
echo("Data has been insert into table");
else
echo("Data has not been insert into table");
}

?>