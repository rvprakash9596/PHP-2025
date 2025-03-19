<html>
<body>
<form method="get";>
Enter Number :<input type="number" name="n1">
<input type="submit" value="OK" name="s1">
</form>
</body>
</html>
<?php
$s=0;
{
	if (isset($_GET['s1']))
	{
		$n=$_GET['n1'];
		while($n>0)
		{
			$d=$n%10;
			$s=$s*10+$d;
			$n=intval($n/10);
		}
		echo"Reverse of number=",$s;
	}
}

?>