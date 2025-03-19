<html>
<body>
<form method="get">

Enter 1st Number :<input type="text" name="t1"><br><br><br>

Enter 2nd Number :<input type="text" name="t2"><br><br><br>

<input type="submit" name="s1" value="OK">
</form>
</body>
</html>
<?php
function sum($a=100,$b=120)
{
	$c=$a+$b;
	echo "Sum of number = ",$c,"<br>";
}
if (isset($_GET['s1']))
{
	$n1=$_GET['t1'];
	$n2=$_GET['t2'];
	sum($n1,$n2);
	echo"<br>";
	sum();
}
?>