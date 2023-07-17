<?php
	include 'includes/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'home.php';
	}

	if(isset($_POST['save'])){
		//$idplainte ="'".$_SESSION['student']."'";
		$nom = $_POST['nom'];
		$etabli_origine = $_POST['etabli_origine'];
		$contact = $_POST['contact'];
		$contact_parent = $_POST['contact_parent'];
		$serie = $_POST['serie'];
		$filiere = $_POST['filiere'];
		
		$statut = 'en cours';
			$sql = "INSERT INTO prospect (nom,etabli_o,contact,contact_parent,serie,filiere)VALUES 
			('$nom', '$etabli_origine','$contact','$contact_parent', '$serie','$filiere')";
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