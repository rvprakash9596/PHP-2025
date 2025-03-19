<html>
<body bgcolor="greenyellow">
<form method="get" action="abs.php">
<pre>
<center> <h1> This is a programme of absolute value </h1></center>
Enter A Number:<input type="number" name="n1">

<input type="submit" value="Abs" name="s1">

</form>
</body>
</html>

<?php
if(isset($_GET ['s1']))
{
	$a=$_GET['n1'];
	if($a<0)
	{
		$a=$a*(-1);
	}	
	echo"Absolute Value Is = ",$a;
}
?>