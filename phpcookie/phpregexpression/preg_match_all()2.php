<html>
<body bgcolor="gold">
<form method="post">
<input type="text" name="t1"><br><br>
<input type="text" name="t2"><br><br>
<input type="submit" name="s1"><br><br>
</form>
<?php
	$a=0;
	if(isset($_POST['s1']))
	{
	$str=$_POST['t1'];
	$pa=$_POST['t2'];
	$pattern="/$pa/i";
	
	echo preg_match_all($pattern,$str,$a);
	}
?>
</body>
</html>