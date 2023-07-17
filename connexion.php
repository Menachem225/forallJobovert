<?php
/* Local Database*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "al_group";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Echec de connexion: " . mysqli_connect_error());
}



?>