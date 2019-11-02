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
	require_once __DIR__ . '/vendor/autoload.php';



		$name =	$_POST['fname'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$qualification = $_POST['qualification'];
		$file = $_FILES["image"]['name'];
		$temp_file = $_FILES["image"]['tmp_name'];
		$folder = 'student/'.$file;

		$mpdf = new\Mpdf\Mpdf();

		$data = '';

		$data .= '<h1> Your Details </h1>';

		$data .= '<Strong> Name </strong>' . $name .'<br>';
		$data .= '<Strong> Contact </strong>' . $contact .'<br>';
		$data .= '<Strong> Address </strong>' . $address .'<br>';
		$data .= '<Strong> Age </strong>' . 	$age .'<br>';
		$data .= '<Strong> Qualification </strong>' . $qualification .'<br>';
		$data .= '<Strong> Image </strong>' . $folder .'<br>';
		


		//echo $file;
		move_uploaded_file($temp_file, $folder);


		$mpdf -> WriteHTML($data);

		$mpdf -> Output('myfile.pdf' , 'D');

		?>
		
		
</div>

</body>
</html>
