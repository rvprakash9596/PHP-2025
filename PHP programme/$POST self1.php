<html>
<body bgcolor="deeppink">
<form method="post">

Name :<input type="text" name="t1" placeholder="enter your name"><br><br>
Age :<input type="text" name="age" placeholder="enter your age"><br><br> 
<button type="submit" name="b1"> SUBMIT </button>
</form>
</body>
</html>
<?php

if(isset($_POST['b1']))
{
	$name=$_POST['t1'];
	$age=$_POST['age'];
	
	echo "$name is $age years old ";
}


?>
