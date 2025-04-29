<?php
include 'Connect.php';

	if(empty($_SESSION['Username']))
	{
		header("location:Signin.php");
	}

	else
	{
		header("location:payment2.php");
	}

?>