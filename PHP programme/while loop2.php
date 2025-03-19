<html>
<body>
<form method="get";>
Enter Number :<input type="number" name="n1">
<input type="submit" value="OK" name="s1">
</form>
</body>
</html>
<?php
//enter a number and count its digit 
$s=0;
if(isset($_GET['s1']))
{
	$n=$_GET['n1'];
	while($n>0)
	{
		$n=intval($n/10);
		$s++;
	}
	echo"Number of digit = ",$s;
}
?>
