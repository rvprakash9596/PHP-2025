<html>
<body bgcolor="yellowgreen">
<form method="get">
NAME :<input type="text" name="t1"><br><br>
AGE :<input type="text" name="age"><br><br>
<button type="submit" name="b1"> SUBMIT </button>
</form>
</body>
</html>
<?php

if(isset($_GET['b1']))
{
	$a=$_GET['t1'];
	$b=$_GET['age'];
	
	echo"$a is $b years old.";
}

?>
