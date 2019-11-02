<?php
session_start();
    if($_SESSION['username']==""){
header("location:login.php");
    }else{
    	echo "<div class='welmessage'>Wel Come in Student Register Portal</div>";
    }
session_destroy();
header('location:login.php');
?>