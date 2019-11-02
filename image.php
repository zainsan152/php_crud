<!DOCTYPE html>
<html>
<head>
	<title>image</title>
</head>
<body>

	<form method="POST" enctype="multipart/form-data">

	<label for="uploadfile">Upload Your Image</label>
	<input type="file" name="image" value="" />
	<input type="submit" name="image" value="Upload Image"/>
	</form>

	
</body>
</html>


<?php
	
	
	$file = $_FILES["image"]['name'];
	$temp_file = $_FILES["image"]['tmp_name'];
	$folder = 'student/'.$file;
	//echo $file;
	move_uploaded_file($temp_file, $folder);
	echo "<img src = '$folder' height= '100px' width = '100px'  />";





?>