<?php
	session_start();

	require 'assets/includes/db.php';

	if(!empty($_POST['email']) && !empty($_POST['password']) && $_POST['password'] == $_POST['confirm_password']):

		// Enter the new user in the database
		$sql = "INSERT INTO proposals (email, password) VALUES (:email, :password)";
		$stmt = $pdoConnect->prepare($sql);

		$stmt->bindParam(':email', $_POST['email']);
		$stmt->bindParam(':password', $_POST['password']);

		if( $stmt->execute() ):
			$_SESSION['user_email'] = $_POST['email'];
			header("Location: everybody.php");
		else:
			echo 'Sorry there must have been an issue creating your account';
		endif;
	endif;
	include('assets/includes/header.php');
?>

 <div class="video-container">
   <video loop muted autoplay>
     <source src="assets/img/employee_loop.mp4" type="video/mp4">
   </video>

   <div class="center-container field-box">
     <div class="center-title">
       <h1>Register</h1>
       <p>or <a href="login.php">Login Here</a></p>
     </div>
     <div class="center-form">
			 	<form method="POST">
 					<input type="text" placeholder="Enter your email" name="email"><br>
 					<input type="password" placeholder="and password" name="password"><br>
 					<input type="password" placeholder="confirm password" name="confirm_password"><br>
 					<input type="submit">
 				</form>
     </div>
   </div>
 </div>
 <?php include 'assets/includes/corner-logo.php'; ?>

 <?php include 'assets/includes/footer.php'; ?>
