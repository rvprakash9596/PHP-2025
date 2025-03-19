<html>
<body>
<form method="get">
Enter Number :<input type="text" name="t1">
<input type="submit" name="s1" value="OK">
</form>
</body>
</html>
<?php
if (isset($_GET['s1']))
{
	$a=$_GET['t1'];
	
	 $n=explode(" ",$a);
	 
	  $l=count($n);
	  
		for($i=0; $i<$l; $i++)
		{
			for($j=$i+1; $j<$l; $j++)
			{
				if($n[$i] > $n[$j])
				{
					$t=$n[$i];
					$n[$i]=$n[$j];
					$n[$j]=$t;
				}
			}
		}
		
	for($i=0; $i<$l; $i++)
	{
		echo"$n[$i]","<br>";
	}
}
?>
