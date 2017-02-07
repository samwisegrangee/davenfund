<?php
	session_start();

	require 'assets/includes/db.php';

  include('assets/includes/get-user.php');

	include('assets/includes/header.php');
?>

 <div class="video-container">
   <video loop muted autoplay>
     <source src="assets/img/small-employee-loop.mp4" type="video/mp4">
   </video>

   <div class="center-container field-box card" id="buffer-card">
   <div class="center-title">

     <h1>Would you like <br> to make a profile...</h1>

   </div>

   <div class="buffer-box">
     <a href="edit.php?id=<?php echo $_SESSION['user_id']; ?>"><h2>Now</h2></a>
     <h2>or</h2>
     <a href="everybody.php"><h2>Later</h2></a><h2>?</h2>
   </div>

   </div>
 </div>
 <?php include 'assets/includes/corner-logo.php'; ?>

 <?php include 'assets/includes/footer.php'; ?>
