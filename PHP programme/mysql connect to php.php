1.
<?php
$host='localhost';
$user='root';
$pass='';
$conn=mysqli_connect($host,$user,$pass);
if (! $conn)
{
	echo"Failed to connect to mysql";
}
else
{
	echo"Have a good day";
}
?>
<br><br><br><br><br>


2.
<?php
$host='localhost';
$user='root';
$pass='';
$conn=mysqli_connect($host,$user,$pass);
if ($conn==true)
{
	echo"Connected Successfully";
}
else
{
	echo"Not Connected";
}
?>
