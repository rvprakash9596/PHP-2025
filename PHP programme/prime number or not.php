<html>
<body bgcolor="lightblue">
<form method="get">
<pre>
Enter A Number : <input type="number" name="t1">

<input type="submit" name="s1" value="OK">

</form>
</body>
</html>

<?php
$s=0;
if(isset($_GET['s1']))
{
	
	$a=$_GET['t1'];
	
	for($i=1; $i<=$a; $i++)
	{
		if($a%$i==0)
		{
			$s++;
		}
	}

if ($s==2)
{
	echo"Prime Number";
}
else
{
echo"Not a Prime Number";
}
}
?>