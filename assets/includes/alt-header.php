<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <title>Davenfund</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/main.css" media="screen" title="no title">
  </head>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">


          <div class="dropdown">
            <div class="btn btn-primary dropdown-toggle" value=" " type="button" data-toggle="dropdown" id="df-nav-name">
              <img src="assets/img/DavenFund Text Menu.png" alt=" Davenfund logo">
            </div>
          </div>
          <div class="nav-it">
              <img src="assets/img/DU Logo Center Navbar.png" class="long-logo" alt="Davenport long logo">
              <img src="assets/img/White DU.png" class="short-logo" alt="Davenport short logo">
          </div>

          <div class="navbar-toggle" value=" " data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </div>
        </div>

        <div class="collapse navbar-collapse navHeaderCollapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="edit.php?id=<?php echo $_SESSION['user_id']; ?>">Edit</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="everybody.php">Gallery</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="logout.php">Sign Out</a></li>
          </ul>
        </div>
      </div>

    </div>

    <div class="container-fluid">
