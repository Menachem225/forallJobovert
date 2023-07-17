<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$mail = mysqli_real_escape_string($conn, $_POST['mail']);
	$password = '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC';


	$sql = "UPDATE recruteurs SET
	 username = '$username', 
	mail = '$mail', 
	password = '$password' WHERE id = '$id'";

	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Modification complete';
	} else {
		$_SESSION['error'] = $conn->error;
	}
} else {
	$_SESSION['error'] = 'Echec';
}

header('location: enseignant.php');