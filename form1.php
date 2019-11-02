<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>form</title>
	<style>
		.container
		{
				margin-top: 10px;



		}
	</style>
</head>

<body>
	<div class="container">
	

			<form method="post" action="pdf.php" enctype="multipart/form-data">

				<div class="form-group">
					<label for="name">Name:</label>
						 <input type="text" name="fname" class="form-control" required> <br>
				</div>

				
				<div class="form-group">
					<label for="contact">Contact:</label>
				 		<input type="text" name="contact" class="form-control" required> <br>
				</div>			


				<div class="form-group">
					<label for="address">Address:</label>
						<input type="text" name="address" class="form-control" required> <br>
				</div>		

				<div class="form-group">
					<label for="age">Age:</label>
						<input type="text" name="age" class="form-control" required> <br>
				</div>
						


				<div class="form-group">
					<label for="qualification">Qualification:</label>
					    <input type="text" name="qualification" class="form-control" required> <br>
					</div>


				<div class="form-group">	
					<label for="uploadfile">Upload Your Image</label>
						<input type="file" name="image" value="" />	
					</div>





						<input type="submit" name="submit" class="btn btn-success" value="Generate PDF">
						
			</form>

	</div>
	



	

</body>
</html>