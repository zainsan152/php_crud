<?php
require_once('db.php');

$username =	$_POST['username'];
$password =	$_POST['password'];
$email    =	$_POST['email'];
$contact =	$_POST['contact'];
$city =	$_POST['city'];
$country =	$_POST['country'];
$pass = md5($password);




$insert = "insert into signup(username , password , email , contact , city , country) 

		values ('$username' , '$pass' , '$email' , '$contact' , '$city' , '$country' )";


$query = mysqli_query($conn , $insert);
		echo '<h1>'."Account Created Successfully".'</h1>';	

		header("refresh:2, url=signup.php");				 
?>







