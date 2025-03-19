<html>
<body bgcolor="lightblue">
<form method="get">
enter a number<input type="number" name="t1"><br><br>
<input type="submit" value="table of this number" name="s1">
</form>
</body>
</html>


<?php
if(isset($_GET['s1']))
{
$n=$_GET['t1'];
for($i=1; $i<=10; $i++)
{
$t=$n*$i;
echo $t,"<br>";
}
}

?>