<?php
	session_start();
	if(isset($_SESSION['student']))
	{
		unset($_SESSION['student']);
	}
	header("location:home.php");
?>