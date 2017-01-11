<?php
$db_servername = "localhost";
$db_username = "root";
$db_password = "root";
$db_name = "davfund";

try {
  //Connect to Database
  $pdoConnect = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);

  // set the PDO error mode to exception
  $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
  echo $e->getMessage();
  }

?>
