<html>
<body>
<form method="get">
<input type="text" name="n"><br><br>
<input type="submit" name="s">
</form>
</body>
</html>
<?php
if(isset($_GET['s']))
{
	$a=$_GET['n'];
	if(!preg_match("/^[a-zA-z]*$/",$a))
	{
		$ErrMsg="Only alphabets and whitespace are allowed.";
		
		echo $ErrMsg;
	}
	else
	{
		echo 'Have a good day!';
	}
}

?>