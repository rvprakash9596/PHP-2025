<html>
<head>
<title> Speed of a person </title>
</head>
<body>
<form method="get">
Distance in KM:<input type="number" name="d"><br><br>
Time in Hours: <input type="number" name="t"><br><br>
<input type="submit" value="Speed" name="s"><br>
</form>
</body>
</html>
<?php
if (isset($_GET['s']))
{
	$a=$_GET['d'];
	$b=$_GET['t'];
	$speed=$a/$b;
	echo" Total Speed =",$speed;
}
?>