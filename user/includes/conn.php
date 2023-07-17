<?php
$conn = new mysqli('localhost', 'root', '', 'algroup');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}



//Serveur Mysql : 91.216.107.185 (à la place de localhost quand vous installez un CMS)

//Nom de la base Mysql : menac1911449

//Identifiant / login : menac1911449

//Mot de passe : k6tfdcsfht	