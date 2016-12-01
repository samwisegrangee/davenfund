<?php include 'assets/includes/header.php'; ?>

<h1>Login</h1>
<span>or <a href="register.php">register here</a></span>

<form action="login.php" method="POST">

  <input type="text" placeholder="Enter your email" name="email">
  <input type="password" placeholder="and password" name="password">

  <input type="submit">

</form>

<?php include 'assets/includes/footer.php'; ?>
