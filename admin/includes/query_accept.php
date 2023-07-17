<?php
	include 'includes/session.php';

    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'home.php';
	}


	if(isset($_POST['accept'])){
        $statut="validé";   //le status de la requete
		$id = $_POST['id'];

        $sql = "UPDATE fquery SET statut = '$statut' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Requete validée';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Veuillez choisir un element à valider';
	}

	header('location: home.php');
	
?>