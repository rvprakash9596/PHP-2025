<?php
$server="localhost";
$user="root";
$pass="";
$db="raviprakash";

$conn=mysqli_connect($server,$user,$pass,$db);
if($conn)
{
	echo"Connected Successfully."."<br>";
}
else
{
	echo"Connection Failed";
}
$createtable="create table student(ID int(5) not null auto_increment primary key,Student_Name varchar(50),Contact_Number bigint(10))";

if(mysqli_query($conn,$createtable))
{
	echo"Table Created Successfully";
}
else
{
	echo"Table Not Created";
}
mysqli_close($conn);
?>