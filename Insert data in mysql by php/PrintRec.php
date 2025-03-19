<?php
$con=mysqli_connect("localhost","root","","database4") or die(mysqli_error());

if (isset($_GET['s1']))
{?>
<table border="2" height="200" width="300" align="center" cellspacing="2" cellpadding="50">
<caption> Employee Data </caption>
<tr>
<th>Name </th>
<th>Address </th>
<th>Cono</th>
</tr>

<?php


$rs=mysqli_query($con, "select * from rec");

while($row=mysqli_fetch_row($rs))
{?>
<tr>
<td><?php echo $row[0]; ?> </td>
<td><?php echo $row[1]; ?> </td>
<td><?php echo $row[2]; ?> </td>
</tr>
<?php
}
}
?>
</table>