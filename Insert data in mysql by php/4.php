<html>
<head>
<style type="text/css">
input[type="submit"]
{
background-color:aqua;
}

</style>
</head>
<body><center>
	<font color="Maroon" >
	<form method="get" action="">
	<b><table bgcolor="pink" border="1" height="200" width="400" cellpadding="15">
	<tr><td><center>Id Only For Update/Delete <input type="text" name="id"></center></td></tr>
	
	<tr><td>Name: 	<input type="text" name="name"></tr></td>
	
	<tr><td>Address: <input type="text" name="add"></tr></td>
	
	<tr><td>ContactNo: <input type="text" name="cono"></tr></td>
	
	</b></table>
	<table border="0" bgcolor="" width="500" >
	
	<td><input type="submit" name="s" value="Insert Data"></td><br>
	<td><input type="submit" name="s1" value="Update Data"></td><br>
	<td><input type="submit" name="s2" value="Delete Data"></td>
	</table>
	
	</form>
</center>	
</body>
</html>

<?php
// Database Name="database4" & Table Name="rec2" 

$con=mysqli_connect("localhost","root","","database4") or die(mysql_error());

//insert data

if(isset($_GET['s']))
{
	$n=$_GET['name'];
	$add=$_GET['add'];
	$cono=$_GET['cono'];
		
    $set=mysqli_query($con,"insert into rec2(Name,Address,ContactNo) values('$n','$add',
	'$cono')");
	
	if($set==true)
		
		echo("data insert in to table");
		
	else
		
		echo("data not insert in to table! kuchh to hai");
		echo $n;
}

//update data 

if(isset($_GET['s1']))
{
	$id=$_GET['id'];
	$n=$_GET['name'];
	$u="update rec2 set name='$n' where id='$id'";
	$res=mysqli_query($con,$u);
	if($res)
	{
	echo"Record Update";
	}
	else
	{
	echo"Record Not Update";
	}
}

//delete data

if(isset($_GET['s2']))
{
		$id1=$_GET['id'];
		$u="delete from rec2 where id='$id1'";
		$res=mysqli_query($con,$u);
	if($res)
	{
	echo"Record Delete";
	}
	else
	{
	echo"Record Not Delete";
	}
}
?>

<table border="2" height="200" width="400" align="center" bgcolor="cyan"><br><br>
			<caption><button><font color="red"><b>Displaying Record Here<br><br></b></font></button></caption>
	<br><br>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Address</th>
	<th>ContactNo</th>
	</tr>
	
	<?php
	$rs=mysqli_query($con,"select * from rec2 order by id ");
	while($row=mysqli_fetch_row($rs))
	{?>
	<tr>
	 <td><?php echo $row[0]; ?> </td>
	 <td><?php echo $row[1]; ?> </td>
	 <td><?php echo $row[2]; ?> </td>
	 <td><?php echo $row[3]; ?> </td>
	 </tr>
	<?php
	}?>
	</textarea>