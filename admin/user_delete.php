<?php
include 'includes/session.php';

if (isset($_POST['delete'])) {
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$sql = "DELETE FROM recruteurs WHERE id = '$id'";
	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Element supprime';
	} else {
		$_SESSION['error'] = $conn->error;
	}
} else {
	$_SESSION['error'] = 'echec de suppression';
}

header('location: employe.php');