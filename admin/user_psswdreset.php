<?php
include 'includes/session.php';

if (isset($_POST['reset'])) {
    $password = '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC';
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "UPDATE tchname set password = '$password' WHERE id = '$id'";
    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Mot de passe modifié ';
    } else {
        $_SESSION['error'] = $conn->error;
    }
} else {
    $_SESSION['error'] = 'echec de Modification';
}

header('location: mod_enseignant.php');










//UPDATE `tchname` SET `password` = '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC' WHERE `tchname`.`id` = 39