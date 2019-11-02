<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<div class="alert alert-success" role="alert">
	<?php
	require_once('db.php');
	//require_once __DIR__ . '/vendor/autoload.php';



		$name =	$_POST['fname'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$qualification = $_POST['qualification'];
		$file = $_FILES["image"]['name'];
		$temp_file = $_FILES["image"]['tmp_name'];
		$folder = 'student/'.$file;

		//$mpdf = new\Mpdf\Mpdf();
		//echo $file;
		move_uploaded_file($temp_file, $folder);
		echo "<img src = '$folder' height= '100px' width = '100px'  />";


		$insert = "insert into info(name , pic , contact , address , age , qualification) 

							values ('$name' , '$folder' , '$contact' , '$address' , '$age' , '$qualification')";


		$query = mysqli_query($conn , $insert);
		echo '<h1>'."Data Inserted".'</h1>';	

		header("refresh:2, url=view_all.php");				 
?>
</div>

</body>
</html>
<?php
	if(isset($_POST['contact']))



?>