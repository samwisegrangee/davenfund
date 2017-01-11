<?php

if(isset($_POST['insert']))
{
  include('assets/includes/db.php');

  // get values form input text and number
  $pname = $_POST['pname'];
  $pdept = $_POST['pdept'];
  $pamount = $_POST['pamount'];
  $prequest = $_POST['prequest'];
  $pdescription = $_POST['pdescription'];
  $pmeasure = $_POST['pmeasure'];
  $pdocument = $_POST['pdocument'];
  $pfeedback = $_POST['pfeedback'];
  $pcomments = $_POST['pcomments'];


  // Query to insert data
  $pdoQuery = "INSERT INTO `proposals`(`pname`, `pdept`, `pamount`, `prequest`, `pdescription`, `pmeasure`, `pdocument`, `pfeedback`, `pcomments`) VALUES (:pname, :pdept, :pamount, :prequest, :pdescription, :pmeasure, :pdocument, :pfeedback, :pcomments)";

  $pdoResult = $pdoConnect->prepare($pdoQuery);

  $pdoExec = $pdoResult->execute(array(":pname"=>$pname, ":pdept"=>$pdept, ":pamount"=>$pamount, ":prequest"=>$prequest, ":pdescription"=>$pdescription, ":pmeasure"=>$pmeasure, ":pdocument"=>$pdocument, ":pfeedback"=>$pfeedback, ":pcomments"=>$pcomments));

  // check if mysql insert query successful
  if($pdoExec){
    header('Location: everybody.php');
    //echo 'Data Inserted';
  }else{
    echo 'Data Not Inserted';
  }

}

include('assets/includes/header.php')

?>

<div class="center-container field-box">
  <div class="center-title">
    <h1>Create Your Proposal</h1>
  </div>
  <div class="center-form">

    <form action="" method="post">

        <input type="text" name="pname" required placeholder="Proposal Name"><br><br>

        <input type="text" name="pdept" required placeholder="Department"><br><br>

        <input type="number" name="pamount" required placeholder="Amount ($0 — $5,000)" min="0" max="5000"><br><br>

        <p class="form-text">Fund Request Category and Item</p>
        <div class="radio-container">
                  <!--Need Item fields-->
          <input type="radio" name="prequest" value="Professional Development" checked>&nbsp;&nbsp;&nbsp;&nbsp;Professional Development<br>
          <input type="radio" name="prequest" value="Equipment">&nbsp;&nbsp;&nbsp;&nbsp;Equipment<br>
          <input type="radio" name="prequest" value="Other">&nbsp;&nbsp;&nbsp;&nbsp;Other<br>
        </div>
        <br>
        <div class="question-container">
          <p class="form-text">How will these funds help improve your role, your department, and/or DU in general?</p>
          <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;Description" name="pdescription"></textarea>

          <p class="form-text">How will you measure the improvements the funds provide?</p>
          <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="pmeasure"></textarea>

          <p class="form-text">Provide documentation on cost to justify requested amount.</p>
          <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="pdocument"></textarea>

          <p class="form-text">Do you have any feedback on this process or program? Would you like to see this program continued?</p>
          <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="pfeedback"></textarea>

          <p class="form-text">Additional comments:</p>
          <textarea rows="4" cols="47" placeholder="&nbsp;&nbsp;..." name="pcomments"></textarea>
        </div>

        <input type="submit" name="insert" value="Submit">

    </form>

  </div>
</div>

<?php include ('assets/includes/footer.php'); ?>
