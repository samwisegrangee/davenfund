<?php
session_start();

include('assets/includes/db.php');
include 'assets/includes/rowvars.php';
include 'assets/includes/header.php';
?>

<div class="center-container field-box">
  <div class="center-title">
      <?php
        if ($pn == "") {
          echo "<div class='lil-space'></div>";
        }
        else {
          echo "<h1>".$pn."</h1>";
        }
      ?>
    <h3>Edit Proposal</h3>
  </div>
  <div class="center-form">
    <div class="directive-box">
      <em>Please complete the following fields to be entered into the random selection Davenfund drawing May 15, 2017. <br> We encourage you to share your proposal with your direct Supervisor for additional support and awareness. <br> Thank you. </em>
    </div>

    <form action='update.php?id=<?php echo $id ?>' method="post" enctype="multipart/form-data">

      <label for="Proposal-Name">Proposal Name<input type="text" name="pname" required value="<?php echo $pn; ?>" placeholder="Proposal-Name" id="Proposal-Name"></label><br><br>

      <label for="Department">Department<input type="text" name="pdept" required value="<?php echo $pd; ?>" placeholder="Department" id="Department"></label><br><br>

      <label for="Amount">Amount<input type="number" name="pamount" required value="<?php echo $pa; ?>" placeholder="Amount ($100 — $2,000)" min="0" max="2000" id="Amount"></label><br><br>

      <p class="form-text">Fund Request Category and Item</p>
      <div class="radio-container">
        <fieldset>
          <label class="radio-label" for="Professional-Development">

            <input type="radio" name="prequest" id="Professional-Development" value="Professional Development"
          <?php
          if ($pr == "Professional Development") {
            echo "checked";
          }
          ?>>&nbsp;&nbsp;&nbsp;&nbsp;Professional Development</label>

          <label class="radio-label" for="Equipment">

            <input type="radio" name="prequest" id="Equipment" value="Equipment"
          <?php
            if ($pr == "Equipment") {
              echo "checked";
            }
            ?>>&nbsp;&nbsp;&nbsp;&nbsp;Equipment</label>

          <label class="radio-label" for="Software">

            <input type="radio" name="prequest" id="Software" value="Software"
          <?php
          if ($pr == "Software") {
            echo "checked";
          }
          ?>>&nbsp;&nbsp;&nbsp;&nbsp;Software</label>

          <label class="radio-label" for="Other">
            <input type="radio" name="prequest" id="Other" value="Other"
          <?php
          if ($pr == "Other") {
            echo "checked";
          }
          ?>>&nbsp;&nbsp;&nbsp;&nbsp;Other* <br> <em> &nbsp;*Clarify in "Additional Comments"</em><br></label>
        </fieldset>
      </div>
      <br>
      <div class="question-container">
        <!--textarea should be cols="40" when Helvetica Neue Lt-->
        <p class="form-text">How will these funds help improve your role, your department, and/or DU in general?</p>
        <label for="Description">Description<textarea rows="4" cols="35" placeholder="&nbsp;&nbsp;..." name="pdescription" id="Description"><?php echo $pdes; ?></textarea></label>
        <div class="q-box">
          <p class="q-mark">?</p>
          <p class="q-explain"><br>Ex. Able to spend less time switching between programs by having two monitors, able to utilize more program functionality by attending the conference, etc.</p>
        </div>

        <p class="form-text">How will you measure the improvements the funds provide?</p>
        <label for="Measurement">Measurement<textarea rows="4" cols="35" placeholder="&nbsp;&nbsp;..." name="pmeasure" id="Measurement"><?php echo $pm; ?></textarea></label>
        <div class="q-box">
          <p class="q-mark">?</p>
          <p class="q-explain"><br>Ex. By receiving this funding for another computer monitor, I will be able to save two hours a week by June 30, 2017.</p>
        </div>

        <p class="form-text">Provide documentation on cost to justify requested amount.</p>
        <label for="Documentation">Documentation<textarea rows="4" cols="35" placeholder="&nbsp;&nbsp;..." name="pdocument" id="Documentation"><?php echo $pdocumentation; ?></textarea></label>
        <div class="q-box">
          <p class="q-mark">?</p>
          <p class="q-explain"><br>Ex. Quote for cost of equipment or software desired, webpage showing conference or course material with content and cost, email from Facilities or IT supporting your request, etc. </p>
        </div>

        <p class="form-text">Do you have any feedback on this process or program? Would you like to see this program continued?</p>
        <label for="Feedback">Feedback<textarea rows="4" cols="35" placeholder="&nbsp;&nbsp;..." name="pfeedback" id="Feedback"><?php echo $pf; ?></textarea></label>
        <div class="q-box">
          <p class="q-mark">?</p>
          <p class="q-explain"><br>List ways we can improve this system or application process, list any feedback on future program enhancements or desires, etc.</p>
        </div>

        <p class="form-text">Additional comments:</p>
        <label for="Comments">Comments<textarea rows="4" cols="35" placeholder="&nbsp;&nbsp;..." name="pcomments" id="Comments"><?php echo $pc; ?></textarea></label>
      </div>

      <p class="form-text">Image:</p>
      <label for="Image">Image<input type="file" name="image" id="Image"></label><br><br>

      <p class="form-text">Documentation:</p>
      <label for="File">File<input type="file" name="document" id="File"></label><br><br>

      <input type="submit" name="update" value="Update">

    </form>
</div>
</div>



<?php include 'assets/includes/footer.php'; ?>
