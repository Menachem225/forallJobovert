<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_GET['id'];
		$sql = "SELECT * FROM metier WHERE id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}