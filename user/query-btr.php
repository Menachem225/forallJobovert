<?php
	include 'includes/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'home.php';
	}

	if(isset($_POST['save'])){
		$tquery = 'tquery';
		$nom= $user['firstname'];
		$prenom = $user['lastname'];
		$matricule = $user['etudiant_id'];
        $plainte = 'bdr';
			$sql = "INSERT INTO badr (tquery, nom, prenom, matricule,plainte)VALUES 
			('$tquery', '$nom', '$prenom','$matricule', '$plainte')";
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