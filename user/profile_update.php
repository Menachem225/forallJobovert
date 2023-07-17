<?php
include 'includes/session.php';

if (isset($_GET['return'])) {
	$return = $_GET['return'];
} else {
	$return = 'home.php';
}

if (isset($_POST['save'])) {
	$curr_password = $_POST['curr_password'];

	$password = $_POST['password'];


	if (password_verify($curr_password, $user['password'])) {
		if ($password == $user['password']) {
			$password = $user['password'];
		} else {
			$password = password_hash($password, PASSWORD_DEFAULT);
		}

		$sql = "UPDATE etudiants SET  password = '$password'  WHERE id = '" . $user['id'] . "'";
		if ($conn->query($sql)) {
			$_SESSION['success'] = ' profile mis a jour correctement';
		} else {
			$_SESSION['error'] = $conn->error;
		}
	} else {
		$_SESSION['error'] = 'Mot de passe incorrect';
	}
} else {
	$_SESSION['error'] = 'Veuillez remplir les infos';
}

header('location:' . $return);