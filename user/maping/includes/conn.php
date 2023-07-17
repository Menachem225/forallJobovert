<?php
/* Local Database*/

$servername = "91.216.107.185";
$username = "menac1911449";
$password = "k6tfdcsfht";
$dbname = "menac1911449";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Echec de connexion: " . mysqli_connect_error());
}



?> 