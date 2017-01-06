<?php include 'assets/includes/header.php'; ?>

  <div class="center-container field-box">
    <div class="center-title">
      <h1>Edit Your Proposal Profile</h1>
    </div>
    <div class="center-form">
      <form class="edit" action="edit.php" method="post">
        <input type="text" placeholder="Your Proposal's Name" name="prop-name">
        <input type="text" placeholder="Your Deparment" name="prop-dept">
        <input type="text" placeholder="Dollar Amount Requesting?" name="prop-amount">

        <p class="form-text">Fund Request Category and Item</p>
        <div class="radio-container">
                  <!--Need Item fields-->
          <input type="radio" name="fund-request" value="professional-development" checked>&nbsp;&nbsp;&nbsp;&nbsp;Professional Development<br>
          <input type="radio" name="fund-request" value="equipment">&nbsp;&nbsp;&nbsp;&nbsp;Equipment<br>
          <input type="radio" name="fund-request" value="other">&nbsp;&nbsp;&nbsp;&nbsp;Other<br>
        </div>
        <br>

        <div class="question-container">
          <p class="form-text">How will these funds help improve your role, your department, and/or DU in general?</p>
          <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="prop-help"></textarea>

          <p class="form-text">How will you measure the improvements the funds provide?</p>
          <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="prop-measure"></textarea>

          <p class="form-text">Provide documentation on cost to justify requested amount.</p>
          <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="prop-document"></textarea>

          <p class="form-text">Do you have any feedback on this process or program? Would you like to see this program continued?</p>
          <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="prop-feedback"></textarea>

          <p class="form-text">Additional comments:</p>
          <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="prop-comments"></textarea>
        </div>


        <p class="form-text">Upload a picture</p>
        <div class="img-upload">
          <input type="image" src="assets/img/file-image.svg" alt="Submit" width="48" height="48">
        </div>


        <!--<input type="submit">-->

      </form>
      <!--REMOVE AFTER MOCKUP?-->
      <a href="everybody.php">
        <button class="btn btn-lg">Submit</button>
      </a>

    </div>
  </div>

<?php include 'assets/includes/footer.php'; ?>
