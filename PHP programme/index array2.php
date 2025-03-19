<html>
<body>
<form method="get">
Enter Number :<input type="text" name="t1"><br>
			  <input type="submit" name="s1">
</form>
</body>
</html>
<?php
if (isset($_GET['s1']))
{
	$ar;
	$a=$_GET['t1'];
	$ar=explode(" ",$a);
	$l=count($ar);
	
	for($i=0; $i<$l; $i++)
	{
		echo $ar[$i],"<br>";
		
	}
}

?>

