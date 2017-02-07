<div class="gallery">

  <div class="gall-head">
    <div class="banner blue-box"></div>
    <div class="banner yellow-box"></div>
    <div class="banner green-box"></div>
    <div class="gall-title">
      <h1>DavenFund Gallery</h1>
    </div>
  </div>
  <div class="gall-undertitle">
    <h2>Random Selection May 15, 2017</h2>
  </div>

  <div class="gallery-contents row" id="shuffle">
    <?php
     $query = $pdoConnect ->query('SELECT * FROM proposals');
     $query->execute();
     for($i=0; $row = $query->fetch(); $i++){
    ?>

    <?php if( !empty($row['pname']) ): ?>

    <div class="box col-lg-4 col-md-4 col-sm-6">
      <a href="profile.php?id=<?php echo $row['id']?>" id="profile-open">
        <div class="overlay" style="background-image: url(<?php echo $row['image']; ?>)">
          <h2><?php echo $row['pname']; ?></h1>
          <p>$<?php echo $row['pamount']; ?></p>
        </div>
        <div class="lower-third">
          <img class="overlay-logo" src="assets/img/df-logo-white.png" alt="">
        </div>
      </a>
    </div>
    <?php endif; ?>

    <?php
     }
    ?>

  </div>



</div>
