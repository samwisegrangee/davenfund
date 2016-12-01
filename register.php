<?php include 'assets/includes/header.php'; ?>

<h1>Register</h1>
<span>or <a href="login.php">login here</a></span>

<form action="register.php" method="POST">

  <input type="text" placeholder="Enter your email" name="email">
  <input type="password" placeholder="and password" name="password">
  <input type="password" placeholder="confirm password" name="confirm_password">
  <input type="submit">

</form>

<?php include 'assets/includes/footer.php'; ?>
