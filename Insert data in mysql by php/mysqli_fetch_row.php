<?php

$con=mysqli_connect("localhost","root","","database4") or die(mysqli_error());

	$res=mysqli_query($con,"select * from fetch_row");
	
	while($row=mysqli_fetch_row($res))
	{
		echo $row[0].''.$row[1].''.$row[2].''.$row[3].''.$row[4]."<br>";
		
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
	<th>Contact No</th>
</tr>

<?php 

$res=mysqli_query($con,"select * from fetch_row");
	
while($row=mysqli_fetch_row($res))
{
?>
	<tr>
	 <td><?php echo $row[0]; ?> </td>
	 <td><?php echo $row[1]; ?> </td>
	 <td><?php echo $row[2]; ?> </td>
	 <td><?php echo $row[3]; ?> </td>
	 <td><?php echo $row[4]; ?> </td>
	 
	</tr>
<?php
}
?>





