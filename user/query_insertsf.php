<?php
	include 'includes/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'home.php';
	}

	if(isset($_POST['save'])){
		$service= "service financier";
		$status = "en cours";
		$tquery = mysqli_real_escape_string($conn, $_POST['tquery']);
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$matricule = mysqli_real_escape_string($conn, $_POST['matricule']);
		$photo = mysqli_real_escape_string($conn, $_FILES['photo']['name']);
		
			if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/doc_sco/'.$photo);
				$filename = $photo;	
			}
			else{
				$filename = $user['photo'];
			}
			
			$sql = "INSERT INTO fquery (tquery,  firstname, lastname, etudiant_id, photo,statut, service)VALUES ('$tquery', '$firstname', '$lastname','$matricule', '$photo', '$status' , '$service')";
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