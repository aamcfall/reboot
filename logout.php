<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("include/db.php"); 

	session_start();
	session_unset();
	session_destroy();
	
	header("Location: index.php");
	
?>