<?php
session_start();

include('assets/includes/db.php');
include 'assets/includes/rowvars.php';
include 'assets/includes/header.php';
?>

<div class="center-container field-box">
  <div class="center-title">
    <h1><?php echo $pn; ?></h1>
    <h3>Edit Proposal</h3>
  </div>
  <div class="center-form">

    <form action='update.php?id=<?php echo $id ?>' method="post" enctype="multipart/form-data">

      <input type="text" name="pname" required value="<?php echo $pn; ?>" placeholder="Proposal Name"><br><br>

      <input type="text" name="pdept" required value="<?php echo $pd; ?>" placeholder="Department"><br><br>

      <input type="number" name="pamount" required value="<?php echo $pa; ?>" placeholder="Amount ($100 — $2,000)" min="0" max="2000"><br><br>

      <p class="form-text">Fund Request Category and Item</p>
      <div class="radio-container">

        <input type="radio" name="prequest" value="Professional Development"
        <?php
        if ($pr == "Professional Development") {
          echo "checked";
        }
        ?>>
        &nbsp;&nbsp;&nbsp;&nbsp;Professional Development<br>
        <input type="radio" name="prequest" value="Equipment"
        <?php
          if ($pr == "Equipment") {
            echo "checked";
          }
          ?>>
        &nbsp;&nbsp;&nbsp;&nbsp;Equipment<br>
        <input type="radio" name="prequest" value="Software"
        <?php
        if ($pr == "Software") {
          echo "checked";
        }
        ?>>
        &nbsp;&nbsp;&nbsp;&nbsp;Software<br>
        <input type="radio" name="prequest" value="Other"
        <?php
        if ($pr == "Other") {
          echo "checked";
        }
        ?>>
        &nbsp;&nbsp;&nbsp;&nbsp;Other<br>
      </div>



      <br>
      <div class="question-container">
        <!--textarea should be cols="40" when Helvetica Neue Lt-->
        <p class="form-text">How will these funds help improve your role, your department, and/or DU in general?</p>
        <textarea rows="4" cols="35" placeholder="&nbsp;&nbsp;..." name="pdescription"><?php echo $pdes; ?></textarea>
        <div class="q-box">
          <p class="q-mark">?</p>
          <p class="q-explain"><br>Ex. Able to spend less time switching between programs by having two monitors, able to utilize more program functionality by attending the conference, etc.</p>
        </div>

        <p class="form-text">How will you measure the improvements the funds provide?</p>
        <textarea rows="4" cols="35" placeholder="&nbsp;&nbsp;..." name="pmeasure"><?php echo $pm; ?></textarea>
        <div class="q-box">
          <p class="q-mark">?</p>
          <p class="q-explain"><br>Ex. Saved two hours per week because of software training, 15% more efficient with two monitors, 40% less back pain while working because of my stand up desk, etc.</p>
        </div>

        <p class="form-text">Provide documentation on cost to justify requested amount.</p>
        <textarea rows="4" cols="35" placeholder="&nbsp;&nbsp;..." name="pdocument"><?php echo $pdoc; ?></textarea>
        <div class="q-box">
          <p class="q-mark">?</p>
          <p class="q-explain"><br>Ex. Quote for cost of equipment or software desired, webpage showing conference or course material with content and cost, email from Facilities or IT supporting your request, etc. </p>
        </div>

        <p class="form-text">Do you have any feedback on this process or program? Would you like to see this program continued?</p>
        <textarea rows="4" cols="35" placeholder="&nbsp;&nbsp;..." name="pfeedback"><?php echo $pf; ?></textarea>
        <div class="q-box">
          <p class="q-mark">?</p>
          <p class="q-explain"><br>List ways we can improve this system or application process, list any feedback on future program enhancements or desires, etc.</p>
        </div>

        <p class="form-text">Additional comments:</p>
        <textarea rows="4" cols="35" placeholder="&nbsp;&nbsp;..." name="pcomments"><?php echo $pc; ?></textarea>
      </div>

      <p class="form-text">Image:</p>
      <input type="file" name="image"><br><br>

      <p class="form-text">Documentation:</p>
      <input type="file" name="document"><br><br>

      <input type="submit" name="update" value="Update">

    </form>
</div>
</div>



<?php include 'assets/includes/footer.php'; ?>
