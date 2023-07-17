<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['student']) || trim($_SESSION['student']) == ''){
		header('location: index.php');
	}

$sql = "SELECT * FROM etudiants WHERE id = '".$_SESSION['student']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();

	//$sql = "SELECT * FROM sf WHERE id = '".$_SESSION['student']."'";
	//$query = $conn->query($sql);
	//$user2 = $query->fetch_assoc();

	//$sql = "SELECT * FROM fquery WHERE id = '".$_SESSION['student']."'";
	//$query = $conn->query($sql);
	//$user3 = $query->fetch_assoc();

	$sql = "SELECT * FROM position ";
	$query = $conn->query($sql);
	$user4 = $query->fetch_assoc();

	
?>