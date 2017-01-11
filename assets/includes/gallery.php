

<div class="gallery">

  <div class="gall-head">
    <div class="banner blue-box"></div>
    <div class="banner yellow-box"></div>
    <div class="banner green-box"></div>
    <div class="gall-title">
      <h1>DavenFund Gallery</h1>
    </div>
  </div>

  <div class="gallery-contents row" id="shuffle">
    <?php
     $query = $pdoConnect ->query('SELECT * FROM proposals');
     $query->execute();
     for($i=0; $row = $query->fetch(); $i++){
    ?>

    <div class="box col-lg-4 col-md-4 col-sm-6">
      <a href="profile.php?id=<?php echo $row['id']?>" id="profile-open">
        <div class="overlay" style="background-image: url('assets/img/avatar-icon-700x200.png');">
          <h2><?php echo $row['pname']; ?></h1>
          <p>$<?php echo $row['pamount']; ?></p>
        </div>
      </a>
    </div>

    <?php
     }
    ?>

    <div class="box col-lg-4 col-md-4 col-sm-6">
      <a href="profile.php" id="profile-open">
        <div class="overlay" style="background-image: url('assets/img/avatar.jpg');">
          <h2>Profile</h2>
          <?php include 'assets/img/heart.php' ?>
        </div>
      </a>
    </div>
  </div>



</div>
