<?php
  include('assets/includes/db.php');
  include('assets/includes/header.php');
  include('assets/includes/rowvars.php');
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
          <img class="profile-img" src="<?php echo $pim ?>" alt="">
       </div>
     </div>

     <div class="right-half">
       <div class="box-text twin r-twin">
         <ul>

           <h4><?php echo $pd ?></h4>
           <h4>$<?php echo $pa ?></h4>
           <h4><?php echo $pr ?></h4>

           <div class="like-box like-it">
             <img class="like like-outline" src="assets/img/Like Simple - OUTLINE.png" alt="">
             <img class="like like-block" src="assets/img/Like Simple.png" alt="">
           </div>

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
     <a href="edit.php?id=<?php echo $id ?>">Click Here to Edit</a>

   </div>
   <a href="everybody.php">
     <div class="gall-back">
       <img src="assets/img/5554 Davenfund Logo - Transparent Background.png" alt="">
       <p>Return to Gallery</p>
     </div>
   </a>
  </div>


</div>

<?php include 'assets/includes/footer.php'; ?>
