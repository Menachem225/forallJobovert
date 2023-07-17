<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM etudiants WHERE etudiant_id = '$username'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Identifiant incorrect';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['student'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Probleme de connexion';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Inserez vos identifiants';
	}

	header('location: index.php');

?>