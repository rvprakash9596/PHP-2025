<html>
<body>
<form method="post">
<input type="text" name="Mobile_no">
<input type="submit" name="s1" value="Submit">
</form>

<?php
if(isset($_POST['s1']))
	{
		$mobileno=$_POST['Mobile_no'];
		if(preg_match("/^[0-9]*$/",$mobileno))
		{
		$ErrMsg="Only numeric value is allowed.";
		echo"$ErrMsg";
		}
		else
		{
		echo $mobileno;
		}
	}
?>

</body>
</html>