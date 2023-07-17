<?php
//echo "requete reçue"
// Connexion à la base de données
$server = "91.216.107.185";
$username = "menac1911449";
$password = "k6tfdcsfht";
$dbname = "menac1911449";

$conn = new mysqli($server, $username, $password, $dbname);
// Vérifier la connexion
if ($conn->connect_error) {
  die("La connexion a échoué : " . $conn->connect_error);
}

// Récupération des données envoyées en POST
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$accuracy = "2";
$systeme = $_POST["systeme"];
$platform = $_POST["platform"];
$language = $_POST["language"];


// Insertion des données dans la base de données
$sql = "INSERT INTO position (latitude, longitude, accuracy, systeme, 
language, platform) VALUES
 ('$latitude', '$longitude','$accuracy','$systeme',
 '$language','$platform')";


if ($conn->query($sql) === TRUE) {
  echo "Position enregistrée avec succès !";
} else {
  echo "Erreur lors de l'enregistrement de la position : " . $conn->error;
}

// Fermer la connexion
$conn->close();


?>

