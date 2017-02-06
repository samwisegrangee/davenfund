<?php
  session_start();
  
  include('assets/includes/db.php');

  include('assets/includes/rowvars.php');

  include('assets/includes/header.php');
?>

<div class="promo-box">
  <h3>Getting some ideas?</h3>
  <div class="promo-text-box">
    <p class="promo-text">
      Email us at <a href="mailto:davenfund@davenport.edu">davenfund@davenport.edu</a> and we'll let you know when registration is open!
    </p>
  </div>
</div>
<?php include 'assets/includes/gallery.php'; ?>

<?php include 'assets/includes/footer.php'; ?>
