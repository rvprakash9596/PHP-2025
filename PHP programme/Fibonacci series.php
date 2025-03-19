<html> 
<body>
<form method="get">
<table width="200" border="1">
  <tr>
    <td>Enter a number:</td>
    <td>
	<input type="text" name="t1">
	</td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="s1" value="ok"></td>
  </tr>
</table>

</body>
</html>
<?php

if(isset($_GET['s1']))
{
	$n=$_GET['t1'];
	$f1=0;
	$f2=1;
	echo $f1,",";
	echo $f2,",";
	do
	{
		$f3=$f1+$f2;
		echo $f3,",";
		$f1=$f2;
		$f2=$f3;
		$n--;
	}
	while($n>0);
}
?>