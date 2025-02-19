<?php
echo"An array is a special variable , which can hold more than one value at a time in a single variable.<br>";
echo"PHP Array Types : There are three types of arrays:<br>

1.Indexed arrays - Arrays with a numeric index. Values are stored and accessed in linear way.<br>
2.Associative arrays - Arrays with named keys.Array with string as index .<br>
3.Multidimensional arrays - Arrays containing one or more arrays 
<br>
Syntax: array() function is used to create an Array <br><br><br>";


//1. Indesed Array

$arr1=array("Maruti Suzuki","Volvo", "BMW", "Toyota","Tata");
echo"<pre>";
print_r($arr1);
echo"</pre>";

echo$arr1[2]; echo"<br>";
echo$arr1[0];

//adding more value in arr1

$arr1[]="KIA";
echo"<pre>";
print_r($arr1);
echo"</pre>";


//2. Associative arrays

$arr2=array(
'name'=> 'Saurabh Caterers',
'contact' => '7518175625',
'status' => true
);

$arr2['Instagram_ID']="saurabh_caterers_khalilabad";

echo"<pre>";
print_r($arr2);
echo"</pre>";


//3.Multidimensional arrays

$arr3=array(
'Company_Name'=> 'Saurabh Caterers Khalilabad',
'contact' => '7518175625',
'Address' => array("Khalilabad","Basti",9839029547),
'status' => true
);

$arr3['Instagram_ID']="saurabh_caterers_khalilabad";

echo"<pre>";
print_r($arr3);
echo"</pre>";


// Another way to creating array in PHP

$arr4=[9,8,3,9,0,2,9,5,4,7];
echo"<pre>";
print_r($arr4);
echo"</pre>";


$arr5=[
		9,
		8,
		3,
		9,
		0,
		2 => [77,78,69],
		9,
		5,
		4,
		7
		];
echo"<pre>";
print_r($arr5);
echo"</pre>";

?>