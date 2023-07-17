<?php
include 'includes/session.php';

if (isset($_POST['add'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username']);
    $mail  = mysqli_real_escape_string($conn, $_POST['mail']);
	//$departement = $_POST['departement'];
	$password = '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC';
	$departement = '1';

	$sql = "INSERT INTO recruteurs 
	(username, mail, password, departement) VALUES  ('$username', '$mail', '$password','$departement')";
	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Utilisateur ajouté';
	} else {
		$_SESSION['error'] = $conn->error;
	}
	
} else {
	$_SESSION['error'] = 'Fill up add form first';
}

header('location: list_rect.php');