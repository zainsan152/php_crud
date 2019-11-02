<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>
		.container
		{
				margin-top: 10px;
				height: 100%;



		}
	</style>
</head>
<body>
	<div class="container">
	<div class="alert alert-success" role="alert">
	<?php
	session_start();
    if($_SESSION['username']==""){
header("location:login.php");
    }else{
    	echo "<div class='welmessage'>Wel Come in Student Register Portal</div>";
    }
	require_once('db.php');

	$id = $_GET['id'];

	echo $id.'<br><br>';

	$query = "DELETE from info WHERE id = '$id'";

	$q_1 =   mysqli_query($conn , $query);

	echo "Deleted";

	header("refresh:2, url=view_all.php");


?>
</div>
</div>

</body>
</html>