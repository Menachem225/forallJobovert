<?php
// ce fichier montre la reception des données et leurs rejets
	include 'includes/session.php';

    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'home.php';
	}


	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM badr WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Requete effacée';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Veuillez choisir un element à effacer';
	}

	header('location: home.php');
	
?>