<html>
<head>
<title> area of circle </title>
</head>
<body bgcolor="deepskyblue">
<form method="get">
Enter value of R:<input type="number" name="t1"><br>
<input type="submit" value="Result" name="b1">
</form>
</body>
</html>
<?php
 define ("pi",3.14);
 if (isset($_GET['b1']))
 {
	 $r=$_GET['t1'];
	 $ar=pi*$r*$r;
	 $cm=2*pi*$r;
	 echo"Area is =",$ar;
	 
	 echo "<br>Circumforence =",$cm;
 }

?>

