<html>
<head>
<title> floor height </title>
</head>
<body>
<form method="get">
1st height in feet:<input type="number" name="t1">
1st height in inch:<input type="number" name="t2"><br><br>

2nd height in feet:<input type="number" name="t3">
2nd height in inch:<input type="number" name="t4"><br><br>

<input type="submit" value="Total" name="b1">
</form>
</body>
</html>
<?php
if(isset($_GET['b1']))
{
	$ff=$_GET['t1'];
	$fi=$_GET['t2'];
	$sf=$_GET['t3'];
	$si=$_GET['t4'];
	
	$tf=$ff+$sf;
	$ti=$fi+$si;
	
	$ti=$ti+($tf*12);
    $tf=intval($ti/12);
	$ti=$ti%12;
echo"Total height in feet = ",$tf;
echo" fit<br><br>";
echo"Total height in inch = ",$ti;	
echo" inch <br><br>";

}
?>