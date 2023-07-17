<?php
	include 'includes/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'home.php';
	}

	if(isset($_POST['save'])){
		$idplainte ="'".$_SESSION['student']."'";
		$tquery = $_POST['tquery'];
		$nom= $user['firstname'];
		$prenom = $user['lastname'];
		$matricule = $user['etudiant_id'];
        $plainte = $_POST['bdr'];
		$statut = 'en cours';
			$sql = "INSERT INTO badr (idplainte, tquery, nom, prenom, matricule,plainte,statut)VALUES 
			('$idplainte','$tquery', '$nom', '$prenom','$matricule', '$plainte','$statut')";
			if($conn->query($sql)){
				$_SESSION['success'] = ' Requete validée';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
			
		
	}
	else{
		$_SESSION['error'] = 'Veuillez remplir les infos';
	}

	header('location:'.$return);

?>