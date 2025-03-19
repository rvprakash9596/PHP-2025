<?php

for($i=1; $i<=7; $i++)
{
	for($j=1; $j<=5; $j++)
	{
		if(i==1 or i==7)
		{
			echo("*");
		}
		elseif ((i>1&&i<7))&& j==2 or $j==4)
		{
			echo("*");
		}
		else
		{
			echo("&nbsp");
		}
			
	}
}
 /* output
 ******
  *	  *
  *   * 
  *   *
  *   *
  *   *
 ****** 

*/ 
 
 
 
 
 
?> 