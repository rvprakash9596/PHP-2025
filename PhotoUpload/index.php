<?php
include("config.php");

if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) )
  {
	  // Insert record
     $query = "insert into images(Name) values('".$name."')";
     mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }
 
}
?>

<form method="post" action="" enctype='multipart/form-data'>
  <input type='file' name='file' />
  <input type='submit' value='Save File' name='but_upload'>
</form>

<table border="0">

<?php
$a=0;
$sql = "select * from images order by id desc";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
	$a++;
	$image = $row['name'];
	$image_src = "images/".$image;
	if($a%8==0)
	{
	echo '<tr>';
	}
?>
<td>
<img src='<?php echo $image_src;  ?>' height="300" width="210">
</td>

<?php
}
?></tr>