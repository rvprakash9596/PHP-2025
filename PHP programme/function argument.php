<html>
<body>
<form method="get">
Enter 1st number:<input type="text" name="t1"><br><br>
Enter 2nd number:<input type="text" name="t2"><br><br>
<input type="submit" name="s1" value="ok"><br>
</form>
</body>
</html>
<?php
function sum($a,$b)
{
	$c=$a+$b;
	echo "Sum Of Number = ",$c,"<br>";
}
if(isset($_GET['t1']))
{
	$n1=$_GET['t1'];
	$n2=$_GET['t2'];
	
	sum($n1,$n2);
	sum(100,200);
}
?>