<?php

session_start();

if(isset($_POST['login']))
{
require_once('db.php');

$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * from signup where username = '$username' AND password = '$password'";
$q = mysqli_query($conn , $query);

$sql = mysqli_num_rows($q);

if($sql == 1)
{
	
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	
	header("location:view_all.php");
}else
{
   header("location:login.php?ar=incro");
	
}






}
?>