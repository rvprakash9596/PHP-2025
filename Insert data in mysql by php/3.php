<html>
<head>

<style type="text/css">

body {color:navy; background-color:pink;}

h3 {color:white; font-size:20px; background-color:teal; text-align:center;}

</style>

<title> mmitcserecord </title>
</head>
<body>

	<form method="get" action="">
<center>
<pre><h3>
Serial No: 		<input type="text" name="srno">

Enrollment No: 		<input type="text" name="en">

Name: 			<input type="text" name="name">

Branch: 		<input type="text" name="br">

Year: 			<input type="text" name="yr">

Institute Name: 	<input type="text" name="in">
	
Institute Address: 	<input type="text" name="iad">
	
Contact No: 		<input type="text" name="cono">
	
<input type="submit" name="s1" value="Submit">
</h3>
</center>
</form>	
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","database4") or die(mysqli_error());

if(isset($_GET['s1']))
{
	$a=$_GET['srno'];
	$b=$_GET['en'];
	$c=$_GET['name'];
	$d=$_GET['br'];
	$e=$_GET['yr'];
	$f=$_GET['in'];
	$g=$_GET['iad'];
	$h=$_GET['cono'];
$set=mysqli_query($con,"insert into cserec(SerialNo,EnrollmentNo,Name,Branch,Year,
											InstituteName,InstituteAddress,ContactNo)
									values('$a','$b','$c','$d','$e','$f','$g','$h')");

	if($set==true)
		echo("Saved Successfully");
	else
		echo("Unsuccessful! kuchh to hai");
}
?>

<table border="2"  bordercolor="red" height="100" width="1400" 
                   cellspacing="2" cellpadding="15" align="center" >
<caption><h4><u>Display Record</u><h4></caption>
<tr>
	
	<th>Serial No</th>
	<th>Enrollment No</th>
	<th>Name</th>
	<th>Branch</th>
	<th>Year</th>
	<th>Institute Name</th>
	<th>Institute Address</th>
	<th>Contact No</th>
</tr>

<?php

$rs=mysqli_query($con,"select * from cserec");
	
while($row=mysqli_fetch_row($rs))
{
?>
	<tr>
	 <td><?php echo $row[0]; ?> </td>
	 <td><?php echo $row[1]; ?> </td>
	 <td><?php echo $row[2]; ?> </td>
	 <td><?php echo $row[3]; ?> </td>
	 <td><?php echo $row[4]; ?> </td>
	 <td><?php echo $row[5]; ?> </td>
	 <td><?php echo $row[6]; ?> </td>
	 <td><?php echo $row[7]; ?> </td>
	</tr>
<?php
}
?>