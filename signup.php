<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<style>
		.container
		{
				margin-top: 10px;



		}
	</style>
	<title>Sign Up</title>
</head>
<body>
	<div class="container">
	

			<form method="post" action="signup_process.php">

				<div class="form-group">
					<label for="uname">Username:</label>
						 <input type="text" name="username" class="form-control" > <br>
				</div>

				
				<div class="form-group">
					<label for="password">Password:</label>
				 		<input type="password" name="password" class="form-control" > <br>
				</div>			


				<div class="form-group">
					<label for="email">Email:</label>
						<input type="email" name="email" class="form-control" > <br>
				</div>		

				<div class="form-group">
					<label for="contact">Contact:</label>
						<input type="text" name="contact" class="form-control" > <br>
				</div>
						


				<div class="form-group">
					<label for="city">City:</label>
					    <input type="text" name="city" class="form-control" > <br>

				 <div class="form-group">
					<label for="country">Country:</label>
					    <input type="text" name="country" class="form-control" > <br>

					    


						<input type="submit" name="submit" class="btn btn-success" value="Create Your Account">
						<a href="login.php"><input type="button" name="login" value="Login Page" class="btn btn-info"> </a>
						

			</form>

	</div>

</body>
</html>