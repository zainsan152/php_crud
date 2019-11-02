<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title></title>
	<style>
		.container
		{
				margin-top: 10px;



		}
	</style>
</head>
<body>
	<div class="container">
	<?php
	require_once('db.php');
	session_start();
    if($_SESSION['username']==""){
header("location:login.php");
    }else{
    	echo "<div class='welmessage'>Wel Come in Student Register Portal</div>";
    }

	$id = $_GET['id'];

	$query = "SELECT * from info WHERE id = '$id'";

	$q_1 =   mysqli_query($conn , $query);

	if ($q_2 = mysqli_fetch_array($q_1)) {

?>

		<form action="update_rec.php?id=<?php echo $q_2['id'];?>" method = "post" enctype="multipart/form-data">

						
				<div class="form-group">
					<label for="name">Name:</label>
						 <input type="text" name="fname" class="form-control" value="<?php echo $q_2['name']; ?>"> <br>
				</div>

				
				<div class="form-group">
					<label for="contact">Contact:</label>
				 		<input type="text" name="contact" class="form-control" value=" <?php echo $q_2['contact']; ?>"> <br>
				</div>			


				<div class="form-group">
					<label for="address">Address:</label>
						<input type="text" name="address" class="form-control" value="<?php echo $q_2['address']; ?>"> <br>
				</div>		

				<div class="form-group">
					<label for="age">Age:</label>
						<input type="text" name="age" class="form-control" value="<?php echo $q_2['age']; ?>"> <br>
				</div>
						


				<div class="form-group">
					<label for="qualification">Qualification:</label>
					    <input type="text" name="qualification" class="form-control" value="<?php echo $q_2['qualification']; ?>" > <br>
					</div>


				 <div class="form-group">	
					<label for="uploadfile">Upload Your Image</label>
						<input type="file" name="image" value="<?php echo $q_2['pic']; ?>" />	
						</div>


						<input type="submit" name="submit" class="btn btn-success" value="Update">
						<a href="view_all.php"><input type="button" name="view" value="View All" class="btn btn-info"> </a>

			</form>	

<?php

	}



?>
</div>

</body>
</html>
