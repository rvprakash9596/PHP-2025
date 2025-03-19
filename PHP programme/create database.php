<?php
$server="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($server,$user,$pass);
if($conn)
{
	echo"Database Connected Successfully."."<br>";
}
else
{
	"Database Connection Failed";
}
$db="create database Raviprakash";
if(mysqli_query($conn,$db))
{
	echo"Database Created.";
}
else
{
	echo"Database Not Created";
}
mysqli_close($conn);
?>