<html>
<body bgcolor="skublue">
<form method="get">
Enter A Number:<input type="number" name="t1"><br>
<input type="submit" value="OK" name="s1">
</form>
</body>
</html>

<?php
	$f=1;
	
if(isset($_GET['s1']))
{
	$n=$_GET['t1'];
	for($i=$n; $i>=1; $i--)
	{
		$f=$f*$i;
	}
}
echo"Factoril of given number = ",$f;

?>