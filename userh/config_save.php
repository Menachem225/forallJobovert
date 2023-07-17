<?php
	include 'includes/session.php';

	$return = 'home.php';
	if(isset($_GET['return'])){
		$return = $_GET['return'];
	}

	if(isset($_POST['save'])){
		$title = $_POST['title'];

		$file = 'config.ini';
		$content = 'mot de passe modifié = '.$title;

		file_put_contents($file, $content);

		$_SESSION['success'] = 'mot de passe modifié';
		
	}
	else{
		$_SESSION['error'] = "Fill up config form first";
	}

	header('location: '.$return);

?>