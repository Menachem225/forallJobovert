<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Récupérer les valeurs du formulaire
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $email = $_GET["email"];
    $cv = $_FILES["cv"]["name"];
    $cv2 = '0';
    $lettre_motivation = $_GET["lettre_motivation"];

    // Valider les données (vous pouvez ajouter des validations supplémentaires ici)

    // Connexion à la base de données (exemple avec MySQL)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "al_group";


    // Création de la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données : " . $conn->connect_error);
    }

    // Préparation et exécution de la requête d'insertion
    $sql = "INSERT INTO candidatures (nom, prenom, email, cv, cv2, lettre_motivation) VALUES 
    ('$nom', '$prenom', '$email', '$cv','$cv2', '$lettre_motivation')";

    if ($conn->query($sql) === TRUE) {
        echo "Candidature envoye !";
    } else {
        echo "Erreur lors de l'inscription : " . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();
}

header("location: formulaire.php")
?>