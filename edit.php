<?php include 'assets/includes/header.php'; ?>

  <div class="center-container">
    <div class="center-title">
      <h1>Edit Your Proposal Profile</h1>
    </div>
    <div class="center-form">
      <form class="" action="edit.php" method="post">
        <input type="text" placeholder="Your Proposal's Name" name="prop-name">
        <input type="text" placeholder="Your Deparment" name="prop-department">
        <input type="text" placeholder="How could the Davenfund help you?" name="prop-descr" id="descr">

        <!--<input type="submit">-->

      </form>
      <!--REMOVE AFTER MOCKUP?-->
      <a href="everybody.php">
        <button class="btn btn-lg">Submit</button>
      </a>

    </div>
  </div>

<?php include 'assets/includes/footer.php'; ?>
