<?php

$server="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($server,$user,$pass);
if($conn)
{
	echo"Connected Successfully";
	echo"<br>";
}
else
{
	echo"Connection Failed";
}
$create_db="create database ram";

if(mysqli_query($conn,$create_db))
{
	echo"Database Created Successfully";
}
else
{
	echo"Database Not Created";
}
mysqli_close($conn);
?>