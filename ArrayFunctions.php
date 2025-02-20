<?php
echo"<center><u>PHP Array Functions.</u><br><br>
array_slice()<br>
print_r()<br>
array_search()<br>
array_chunk()<br>
array_pop()<br>
array_kry_exists()<br>
array_merge()<br>
array_push()<br>
array_count_values()<br>
count()<br>
array_keys()<br>
is_array()<br>
</center>";

/*
$car = array(
    0=>"Dzire",
    1=>"KIA",
    2=>"Brezza",
    3=>"Ertiga",
    4=>"Fortuner",
);
echo"<pre>";
print_r($car);
echo"</pre>";

var_dump(is_array($car));
*/


/*
// Checking an array and returns true or false
$x=5;
// var_dump(is_array($x));//false
if(is_array($x)){
    echo"x is an array";
}
else{
    echo"x is not an array";
}
*/

/*
//searching an element in an array and returns indexed value
$car = array(
    0=>"Dzire",
    1=>"KIA",
    2=>"Brezza",
    3=>"Ertiga",
    4=>"Fortuner",
);
echo array_search('Ertiga',$car); // Returns indexed value
*/

//array_slice()
$car = array(
    0=>"Dzire",
    1=>"KIA",
    2=>"Brezza",
    3=>"Ertiga",
    4=>"Fortuner",
);
echo"<pre>";
print_r($car);
echo"</pre>";

print_r(array_slice($car,1));











?>