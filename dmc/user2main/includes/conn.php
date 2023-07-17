<?php
	$conn = new mysqli('localhost', 'root', '', 'JOBOVER');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>