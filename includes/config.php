<?php

	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "Bank_System";

	$conn = mysqli_connect($serverName, $userName, $password, $dbName);

	if(!$conn)
		die("Couldn't connect to database due to following error --> ".mysqli_connect_error());

?>