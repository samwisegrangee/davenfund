<?php
  session_start();

  include('assets/includes/db.php');

  include ('assets/includes/alt-header.php');
?>

<div class="video-container">
  <video loop muted autoplay>
    <source src="assets/img/small-employee-loop.mp4" type="video/mp4">
  </video>

  <div class="video-overlay card" id="video-card">
    <div class="video-overlay-content">
      <h1 class="title"><img src="assets/img/5554 Davenfund Logo - Transparent Background.png" alt="Davenfund Logo"></h1>

      <a href="login.php"><button class="btn btn-lg log-it logo-in" alt="logo">Get Started</button></a>
    </div>
  </div>

</div>

<?php include ('assets/includes/footer.php'); ?>
