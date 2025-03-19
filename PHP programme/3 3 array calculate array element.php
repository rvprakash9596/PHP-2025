<?php
$a=array (
array(1,2,3),
array(4,5,6),
array(7,8,9),
);
$b=array(0,0,0);
for ($i=0; $i<3; $i++)
{
	for($j=0; $j<3; $j++)
	{
		$b[$i]=$b[$i]+$a[$i][$j];
	}
}

for($i=0; $i<3; $i++)
	
{
	echo "<br>",$b[$i];
}

?>