<?php
$con=mysqli_connect("localhost","root","","home") or die (mysqli_error());

if(isset($_GET['s1']))
{
$n=$_GET['name'];
$add=$_GET['add'];
$cono=$_GET['cono'];

$set=mysql_query('home',"insert into shikha(Name,Address,ContactNo) values('$n','$add','$cono')");

if($set==true)
echo("data inserted");
else
echo("data not inserted");

}
?>