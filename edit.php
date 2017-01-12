<?php

include('assets/includes/db.php');

include 'assets/includes/header.php';

include 'assets/includes/rowvars.php';

?>

<div class="center-container field-box">
  <div class="center-title">
    <h1>Records for <?php echo $pn; ?></h1>
    <h3>Update Information</h3>
  </div>
  <div class="center-form">

    <form action='update.php?id=<?php echo $id ?>' method="post">

      <input type="text" name="pname" required value="<?php echo $pn; ?>" placeholder="Proposal Name"><br><br>

      <input type="text" name="pdept" required value="<?php echo $pd; ?>" placeholder="Department"><br><br>

      <input type="number" name="pamount" required value="<?php echo $pa; ?>" placeholder="Amount ($0 — $5,000)" min="0" max="5000"><br><br>



      <!--Use jQuery or something to Check the one in DB-->

      <p class="form-text">Fund Request Category and Item</p>
      <div class="radio-container">

        <input type="radio" name="prequest" value="Professional Development" checked>&nbsp;&nbsp;&nbsp;&nbsp;Professional Development<br>
        <input type="radio" name="prequest" value="Equipment">&nbsp;&nbsp;&nbsp;&nbsp;Equipment<br>
        <input type="radio" name="prequest" value="Other">&nbsp;&nbsp;&nbsp;&nbsp;Other<br>
      </div>



      <br>
      <div class="question-container">
        <p class="form-text">How will these funds help improve your role, your department, and/or DU in general?</p>
        <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="pdescription"><?php echo $pdes; ?></textarea>

        <p class="form-text">How will you measure the improvements the funds provide?</p>
        <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="pmeasure"><?php echo $pm; ?></textarea>

        <p class="form-text">Provide documentation on cost to justify requested amount.</p>
        <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="pdocument"><?php echo $pdoc; ?></textarea>

        <p class="form-text">Do you have any feedback on this process or program? Would you like to see this program continued?</p>
        <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="pfeedback"><?php echo $pf; ?></textarea>

        <p class="form-text">Additional comments:</p>
        <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="pcomments"><?php echo $pc; ?></textarea>
      </div>

      <input type="file" name="image" id="fileToUpload"><br><br>


      <input type="submit" name="update" value="Update">

    </form>
</div>
</div>



<?php include 'assets/includes/footer.php'; ?>
