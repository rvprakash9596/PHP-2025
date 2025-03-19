<html>
<head> 
<title> add of two num </title>
</head>
<body>
<form method="get">
1st Number:<input type="number" name="n1">
2nd Number:<input type="number" name="n2">
<input type="submit" value="Add" name="s1">
</form>
</body>
</html>
<?php
if(isset ($_GET['s1']))
{
	$n=$_GET['n1'];
	$m=$_GET['n2'];
	$sum=$n+$m;
	echo "sum of number =",$sum;
}
?>