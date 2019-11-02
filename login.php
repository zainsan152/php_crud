<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d4a9800e5ae967ef80edc77/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

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
		.
		.error{
width: 25%;
    background-color: #c81b1b;
    padding: 6px;
    color: #ffff;
		}
	</style>
	<title>Login</title>
</head>
<body>
	<div class="container">
	<?php 
	if(isset($_GET['ar'])){
echo "<div class='error'>Incorrect username or password</div>";
	}

	?>

			<form method="post" action="login_process.php">

				<div class="form-group">
					<label for="uname">Username:</label>
						 <input type="text" name="username" class="form-control" > <br>
				</div>

				
				<div class="form-group">
					<label for="password">Password:</label>
				 		<input type="password" name="password" class="form-control" > <br>
				</div>

				<input type="submit" name="login" class="btn btn-success" value="Login ">
				<a href="signup.php"><input type="button" name="page" value="Create Your Account" class="btn btn-info"> </a>

			</form>
			
		</div>		


</body>
</html>