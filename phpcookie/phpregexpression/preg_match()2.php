<?php

$str="raviprakash4344@gmail.com";
$pattern="/@/i";
$a=preg_match($pattern,$str);

if($a==true)
{
echo"pattern match";
}
else
{
echo"pattern not match ";
}


?>