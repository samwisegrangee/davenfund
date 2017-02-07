<?php

  session_start();

	require 'assets/includes/db.php';

	if(!empty($_POST['email']) && !empty($_POST['password'])):

		$records = $pdoConnect->prepare('SELECT id,email,password FROM proposals WHERE email = :email');
		$records->bindParam(':email', $_POST['email']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		if($_POST['password'] == $results['password']) {
			$_SESSION['user_email'] = $results['email'];
      $_SESSION['user_id'] = $results['id'];

			//echo $results['id'].$results['email'].$results['password'];
			header("Location: everybody.php");
		} else {
			echo "Sorry those credentials do not match.";
		}
	endif;
	include('assets/includes/alt-header.php');
?>
<div class="video-container">
  <video loop muted autoplay>
    <source src="assets/img/small-employee-loop.mp4" type="video/mp4">
  </video>

  <div class="center-container field-box card" id="login-card">
    <div class="center-title">
      <h1>Login</h1>
      <p>or <a href="register.php" class="reg-it">Register Here</a></p>
    </div>
    <div class="center-form">
      <form action="login.php" method="POST">
        <label for="email">Email<input type="text" placeholder="Enter your email" name="email" id="email"></label>
        <label for="password">Password<input type="password" placeholder="and password" name="password" id="password"></label>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<?php include 'assets/includes/corner-logo.php'; ?>

<?php include 'assets/includes/footer.php'; ?>
