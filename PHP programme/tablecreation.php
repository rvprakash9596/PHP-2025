<?php
$server="localhost";
$user="root";
$pass="";
$db="ram";
$conn=mysqli_connect($server,$user,$pass,$db);
if($conn)
{
	echo"Connected Successfully";
}
else
{
	echo"Connection Failed";
}
$tb_create="create table studentinfo(SerialNumber int(3) not null auto_increment,primary key(SerialNumber),EnrollmentNumber varchar(15),unique key(EnrollmentNumber),StudentName varchar(35),FathersName varchar(35),MothersName varchar(35),MobileNumber bigint(10),EmailId varchar(60),DateOfBirth date,Gender varchar(10),StudentAddress varchar(200),Qualifiications varchar(50),InstituteName varchar(150),Branch varchar(80),Semester varchar(3),Photo varchar(100))";

if(mysqli_query($conn,$tb_create))
{
	echo"Table Created Successfully";
}
else
{
	echo"Table Creation Failed";
}

mysqli_close($conn);

?>