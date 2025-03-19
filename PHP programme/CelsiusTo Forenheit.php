<html> 
<body>
<form method="get">
<input type="number" name="n1">
<br>
<input type="submit" value="c" name="s1">
<input type="submit" value="f" name="s2">
</form>
</body>
<?php
{
if(isset($_GET["s1"]))
{
$f=$_GET["n1"];
$c=($f-32)*(5/9);
echo "Temp in C = ",$c;
}
if(isset($_GET["s2"]))
{
$c=$_GET["n1"];
$f=$c*(9/5)+32;
echo "Temp in F = ",$f;
}

}
?>