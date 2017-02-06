<?php

session_start();

require 'assets/includes/db.php';

if(!empty($_POST['author_email']) && !empty($_POST['author_password']) && $_POST['password'] == $_POST['confirm_password']):

	// Enter the new user in the database
	$sql = "INSERT INTO proposals (author_email, author_password) VALUES (:author_email, :author_password)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':author_email', $_POST['author_email']);
	$stmt->bindParam(':author_password', $_POST['author_password']);

	if( $stmt->execute() ):
		$_SESSION['user_email'] = $_POST['author_email'];
		header("Location: everybody.php");
	else:
		$message = 'Sorry there must have been an issue creating your account';
	endif;
endif;
?>
