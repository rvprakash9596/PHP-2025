<html>
<head>
<style>
th
{
	color:red; font-size:50px; font-family:times new roman;
}
</style>
<title> TA DA HRA ITAX </title>
</head>
<body bgcolor=>
<form method="get">
<PRE>
<table border="2">
<tr>
<th> Basic Salary:<input type="number" name="t1"></th>
</tr>
<tr>
<th> TA:<input type="number" name="t2"></th>
</tr>
<tr>
<th>DA:<input type="number" name="t3"></th>
</tr>
<tr>
<th>HRA:<input type="number" name="t4"></th>
</tr>
<tr>
<th>Income Tax:<input type="number" name="t5"></th>
</tr>
<tr>
<th><input type="submit" value="OK" name="s1"></th>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_GET['s1']))
{
$bsal=$_GET['t1'];
$ta=$_GET['t2'];
$da=$_GET['t3'];
$hra=$_GET['t4'];
$itax=$_GET['t5'];
		
		$ta=$bsal*($ta/100);
		$da=$bsal*($da/100);
		$hra=$bsal*($hra/100);
		$tsal=$bsal+$ta+$da+$hra;
		$itax=$tsal*($itax/100);
		$nsal=$tsal-$itax;


echo"Basic Salary = ",$bsal;
echo"<br>";

echo"TA = ",$ta;
echo"<br>";

echo"DA = ",$da;
echo"<br>";

echo"HRA = ",$hra;
echo"<br>";

echo"itax = ",$itax;
echo"<br>";

echo"Total Salary = ",$tsal;
echo"<br>";

echo"Net Salary = ",$nsal;
}
?>