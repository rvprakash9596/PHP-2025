<html>
<body>
	<form method="get">
	<pre>
Enter value of R:<input type="number" name="t1">

<input type="submit" value="Result" name="b1">
</form>
</body>
</html>
<?php

define("pi",3.14);
if(isset($_GET['b1']))
{
$r=$_GET['t1'];
$ar=pi*$r*$r;
$cm=2*pi*$r;

echo"Area is = ",$ar;
echo"<br>";
echo"Circumference = ",$cm;

}
?>	