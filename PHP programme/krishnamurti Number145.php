<form method="get">
Enter a number:<input type="number" name="n1"><br>
<input type="submit" name="s1">
</form>
<?php
	$e=1;
	$f=0;
	if(isset($_GET['s1']))
	{
		$n=$_GET['n1'];
		$m=$n;
		while($n>0)
		{
			$d=$n%10;
			for($i=$d;$i>=1;$i--)
			{
				$e=$e*$i;
			}
			$f=$f+$e;
			$n=intval($n/10);
			$e=1;
		}
		if($m==$f)
			echo "This is a Krishanmurti Number ",$f;
		else
			echo "This is not a Krishanmurti Number ",$f;
	}
?>