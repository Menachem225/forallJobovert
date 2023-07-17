<?php
	include 'includes/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'home.php';
	}

	if(isset($_POST['save'])){
		$id = $_SESSION['student'];
		$service= "sinfor";
		$status = "en cours";
        $section = $_POST['section'];
		$tquery = $_POST['tquery'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$matricule =$_POST['matricule'];
	
				
			$sql = "INSERT INTO fquery (id, tquery, section, firstname, lastname, etudiant_id, statut, service)VALUES ('$id','$tquery', '$section', '$firstname', '$lastname','$matricule', '$status','$service')";
			if($conn->query($sql)){
				$_SESSION['success'] = ' Requete validée en cours de traitement';
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