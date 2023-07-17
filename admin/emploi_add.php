<?php
include 'includes/session.php';

if (isset($_POST['add'])) {
	$categorie = mysqli_real_escape_string($conn, $_POST['categorie']);
    $metier  = mysqli_real_escape_string($conn, $_POST['metier']);
     $description  = mysqli_real_escape_string($conn, $_POST['description']);
      $salaire  = mysqli_real_escape_string($conn, $_POST['salaire']);
	  $ville  = mysqli_real_escape_string($conn, $_POST['ville']);


	$sql = "INSERT INTO metier 
	(categorie, metier, description, salaire, ville) VALUES  ('$categorie', '$metier', '$description','$salaire','$ville')";
	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Utilisateur ajouté';
	} else {
		$_SESSION['error'] = $conn->error;
	}
	
} else {
	$_SESSION['error'] = 'Fill up add form first';
}

header('location: emploi.php');