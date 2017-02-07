<?php
  session_start();
  include('assets/includes/db.php');
  include('assets/includes/rowvars.php');
  include('assets/includes/header.php');
?>

<div class="center-container">
  <div class="proposal-container">
    <h2><?php echo $pn ?></h2>
    <div class="proposal-title">
      <div class="blue-box"></div>
      <div class="yellow-box"></div>
      <div class="green-box"></div>
    </div>
    <div class="half-holder">
      <div class="left-half">
       <div class="box-text twin l-twin">
          <img class="profile-img"
          <?php
              if ($pim == "uploaded_images/") {
                echo "src='assets/img/df-logo-white.png'";
              } elseif ($pim == "") {
                echo "src='assets/img/df-logo-white.png'";
              }
              else {
                echo "src='$pim'";
              }
              ?>
          alt="Profile Image">
       </div>
     </div>

     <div class="right-half">
       <div class="box-text twin r-twin">
         <ul>

           <h4><?php echo $pd ?></h4>
           <h4>$<?php echo $pa ?></h4>
           <h4><?php echo $pr ?></h4>

          </ul>
       </div>
     </div>
    </div>


   <div class="prop-answer-container">
     <h4>How will these funds help improve your role, your department, and/or DU in general?</h4>

     <p><?php echo $pdes ?></p>
     <br>

     <h4>How will you measure the improvements the funds provide?</h4>
     <p><?php echo $pm ?></p>
     <br>

      <?php
      if ($_SESSION['user_id'] == $id) {
        echo '<a href="edit.php?id='.$id.'">Click Here to Edit</a>';
      }
     ?>

   </div>
   <a href="everybody.php">
     <div class="gall-back">
       <img src="assets/img/5554 Davenfund Logo - Transparent Background.png" alt="Click for Gallery">
       <p>Return to Gallery</p>
     </div>
   </a>
  </div>


</div>

<?php include 'assets/includes/footer.php'; ?>
