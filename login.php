<?php include 'assets/includes/header.php'; ?>

<div class="center-container">
  <div class="center-title">
    <h1>Login</h1>
    <span>or <a href="register.php">register here</a></span>
  </div>
  <div class="center-form">
    <form action="login.php" method="POST">

      <input type="text" placeholder="Enter your email" name="email">
      <input type="password" placeholder="and password" name="password">

      <!--<input type="submit">-->

    </form>
    <!--REMOVE AFTER MOCKUP?-->
    <a href="everybody.php">
      <button class="btn btn-lg">Submit</button>
    </a>

  </div>
</div>

<?php include 'assets/includes/footer.php'; ?>
