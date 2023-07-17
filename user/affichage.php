<?php
//echo "requete reçue"
// Connexion à la base de données
$server = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "JOBOVER";

$conn = new mysqli($server, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("La connexion a échoué : " . $conn->connect_error);
}

// Récupération des données envoyées en POST
$id = $_POST['id'];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$accuracy = "2";
$systeme = $_POST["systeme"];
$platform = $_POST["platform"];
$language = $_POST["language"];


// Insertion des données dans la base de données

$sql = "UPDATE position SET
latitude = '$latitude',
longitude = '$longitude',
accuracy = '$accuracy',
systeme = '$systeme',
platform = '$platform',
language = '$language'
WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Position enregistrée avec succès !";
} else {
  echo "Erreur lors de l'enregistrement de la position : " . $conn->error;
}

// Fermer la connexion
$conn->close();


?>