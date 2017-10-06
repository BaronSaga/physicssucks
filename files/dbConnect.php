<?php
	$name = "name";
	$password = "password";
	$host = "localhost";
	$db = "tier";
	
	$GLOBALS['con'] = mysqli_connect($host, $name, $password); 
	mysqli_select_db($GLOBALS['con'], $db); 
?>