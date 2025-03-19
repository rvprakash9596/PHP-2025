<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

Name:<input type="text" name="t1" ><br><br>

<input type="submit" name="s1" value="submit">

<?php
//$n=$_REQUEST['t1'];
$n=$_GET['t1'];
echo $n;
?>
</form>
</body>
</html>