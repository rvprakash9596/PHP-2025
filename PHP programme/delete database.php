<?php
$server="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($server,$user,$pass);
if($conn)
{
	echo"Connected Successfully."."<br>";
}
else
{
	echo"Connection Failed";
}
$delete_db="drop database raviprakash";
if(mysqli_query($conn,$delete_db))
{
	echo"Database Deleted Successfully.";
}
else
{
	echo"Database Not Deleted";
}
mysqli_close($conn);
?>