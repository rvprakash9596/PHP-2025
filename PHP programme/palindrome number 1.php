<html>
<body>
<form method="get">
Enter Number:<input type="number" name="t1"><br>
<input type="submit" name="s1" value="Okay">
</form>
</body>
</html>
<?php
if (isset($_GET['s1']))
{
	$n=$_GET['t1'];
	
	$s=0;
	$m=$n;
	while($n>0)
	{
		$d=$n%10;
		$s=$s*10+$d;
		$n=intval ($n/10);
		
	}
	if($s==$m)
	{
		echo"Palindrome Number";
	}
	else
	{
		echo " is Not a Palindrome Number ",$s;
	}
}
?>