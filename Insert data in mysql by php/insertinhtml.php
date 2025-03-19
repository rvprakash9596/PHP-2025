<html>
<body>
	<form method="get" action="">
<pre>
Name: 		<input type="text" name="name">
	
Address: 	<input type="text" name="add">
	
Contact.No: 	<input type="text" name="cono">
	
<input type="submit" name="s1" value="Inserts data">

</form>	

</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","database4") or die(mysqli_error());

if(isset($_GET['s1']))
{
	$n=$_GET['name'];
	$add=$_GET['add'];
	$cono=$_GET['cono'];
		
$set=mysqli_query($con,"insert into rec(Name,Address,ContactNo) values('$n','$add','$cono')");

	if($set==true)
		echo("data insert in to table");
	else
		echo("data not insert in to table! kuchh to hai");
}
?>

<table border="2" height="250" width="400" cellspacing="2" cellpadding="8" 
       align="center">
<caption>Employee Record </caption>
<tr>
	
	<th>Name</th>
	<th>Address</th>
	<th>ContactNo</th>
</tr>

<?php

$rs=mysqli_query($con,"select * from rec");
	
while($row=mysqli_fetch_row($rs))
{
?>
	<tr>
	 <td><?php echo $row[0]; ?> </td>
	 <td><?php echo $row[1]; ?> </td>
	 <td><?php echo $row[2]; ?> </td>
	 
	</tr>
<?php
}
?>