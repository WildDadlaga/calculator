<?php


		$servername = "localhost";
		$dbuser = "root";
		$password = "root";
		$dbname = "user";

		// Create connection
		$conn = new mysqli($servername, $dbuser, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 


 
?>