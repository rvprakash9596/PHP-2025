<html>
<body>
<form method="post">
Name :<input type="text" name="t1" placeholder="enter your name">
<button type="submit" name="s1">SUBMIT </button>
</form>

<?PHP
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$a=htmlspecialchars($_REQUEST['name']);
	if(empty($a))
	{
		echo "Name is empty";
	}
	else
	{
		echo "$a";
	}
}
?>

</body>
</html>