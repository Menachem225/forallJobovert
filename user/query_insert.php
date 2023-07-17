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
		$service= "scolarite";
		$status = "en cours";
		$tquery = $_POST['tquery'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$matricule =$_POST['matricule'];
		$photo = $_FILES['photo']['name'];
		
			if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/doc_sco/'.$photo);
				$filename = $photo;	
			}
			else{
				$filename = $user['photo'];
			}
			
			$sql = "INSERT INTO fquery (id, tquery,  firstname, lastname, etudiant_id, photo,statut, service)VALUES ('$id','$tquery', '$firstname', '$lastname','$matricule', '$photo', '$status' , '$service')";
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