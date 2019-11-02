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
		.welmessage{
			padding: 10px;
		    background-color: #77cc8a;
		    margin: 6%;
		    font-size: 22px;
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


	$query = "SELECT * from info";
	$q_1 = mysqli_query($conn , $query);

	?>



	<table border="1" width="100%" class="table table-striped">
		<tr>
			<th> Sr no. </th>
			<th>Picture</th>
			<th> Name </th>
			<th> Contact </th>
			<th> Address </th>
			<th> Age </th>
			<th> Qualification </th>
			<th colspan="2"> Actions </th>

		</tr>

	



<?php
	$count = 0;
	while ($q_2 = mysqli_fetch_array($q_1)) {
		$count++;	
?>		

		<tr>
			<td> <?php echo $count; ?> </td>
			<td> <img src=" <?php echo $q_2['pic']; ?>" height = '100px' width = '100px'/> </td>
			<td> <?php echo $q_2['name']; ?></td>	
			<td> <?php echo $q_2['contact']; ?></td>	
			<td> <?php echo $q_2['address']; ?></td>	
			<td> <?php echo $q_2['age']; ?></td>	
			<td> <?php echo $q_2['qualification']; ?></td>	
			<td> <a href="update.php?id=<?php echo $q_2['id']; ?>"</a><input type="button" name="update" value="Update" class="btn btn-success"> </td>
			<td> <a href="delete.php?id=<?php echo $q_2['id']; ?>"</a> <input type="button" name="delete" value="Delete" class="btn btn-warning"> </td>

		</tr>



		<?php

	}





?>
	</div>
	
	<a href="form.php"> <input type="button" name="form" value="Back To Form" class="btn btn-danger"></a>
	<a href="logout.php"><input type="button" name="logout" value="Log Out" class="btn btn-warning"> </a>
	<input type="submit" name="submit" class="btn btn-success" value="Generate PDF">
	

</body>
</html>
