<?php
	$conn = new mysqli('0.0.0.0:8082', 'root', '', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>