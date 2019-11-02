<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="alert alert-success" role="alert">
		<?php
	require_once('db.php');


				$id=$_GET['id'];
				$name =	$_POST['fname'];
				$contact = $_POST['contact'];
				$address = $_POST['address'];
				$age = $_POST['age'];
				$qualification = $_POST['qualification'];
				$file = $_FILES["image"]['name'];
				$temp_file = $_FILES["image"]['tmp_name'];
				$folder = 'student/'.$file;
				//echo $file;
				move_uploaded_file($temp_file, $folder);
				echo "<img src = '$folder' height= '100px' width = '100px'  />";

							$update = "UPDATE info SET name = '$name'  , pic = '$folder' , contact = '$contact' , address = '$address' , age = '$age' , qualification = '$qualification' where id = '$id'";

							


							$query = mysqli_query($conn , $update);
							echo '<h1>'."Data Updated".'</h1>';	

							header("refresh:2, url=view_all.php");				 
?>	
</div>

</body>
</html>