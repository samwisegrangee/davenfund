<?php include 'assets/includes/header.php'; ?>

<div class="video-container">
  <video loop muted autoplay>
    <source src="assets/img/df-video.mp4" type="video/mp4">
  </video>

  <div class="center-container field-box">
    <div class="center-title">
      <h1>Login</h1>
      <p>or <a href="register.php">Register Here</a></p>
    </div>
    <div class="center-form">
      <form action="login.php" method="POST">

        <input type="text" placeholder="Enter your email" name="email">
        <input type="password" placeholder="and password" name="password">

        <!--<input type="submit">-->

      </form>
      <!--REMOVE AFTER MOCKUP for "submit"-->

      <a href="everybody.php">
        <button class="btn btn-lg">Submit</button>
      </a>
    </div>
  </div>
  
</div>




<?php include 'assets/includes/footer.php'; ?>
