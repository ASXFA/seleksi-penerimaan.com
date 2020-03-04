<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "db_seleksi";
	mysqli_connect($server, $username, $password);
	// mysqli_select_db($database);

	$conn = new mysqli($server, $username, $password, $database);
?>