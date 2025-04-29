<?php 
	
include 'NavBar.php';
unset($_SESSION['Username']);
unset($_SESSION['Name']);
unset($_SESSION['Email']);
unset($_SESSION['PhoneNo']);
header('location:Signin.php');
?>