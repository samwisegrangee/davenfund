<?php

include('assets/includes/db.php');

// get values form input text and number
include('assets/includes/postvars.php');

$id = $_GET['id'];

$imgFile = $_FILES['image']['name'];
$tmp_dir = $_FILES['image']['tmp_name'];
$imgSize = $_FILES['image']['size'];

$upload_image = $folder . basename($imgFile);

if($imgFile) {
  unlink($folder.$edit_row['image']);
  move_uploaded_file($tmp_dir,$upload_image);
} else {
  include('assets/includes/rowvars.php');
  $upload_image = $pim;
}

// mysql query to insert data
$pdoUpdate = $pdoConnect->prepare("UPDATE proposals SET id=:id, pname=:pname, pdept=:pdept, pamount=:pamount, prequest=:prequest, pdescription=:pdescription, pmeasure=:pmeasure, pdocument=:pdocument, pfeedback=:pfeedback, pcomments=:pcomments, image=:image WHERE id=:id");

$pdoUpdate->bindParam(':id', $id, PDO::PARAM_INT);
$pdoUpdate->bindParam(':pname', $pname, PDO::PARAM_STR);
$pdoUpdate->bindParam(':pdept', $pdept, PDO::PARAM_STR);
// prequest needs to have JS for the radio buttons
$pdoUpdate->bindParam(':prequest', $prequest, PDO::PARAM_STR);
$pdoUpdate->bindParam(':pamount', $pamount, PDO::PARAM_INT);
$pdoUpdate->bindParam(':pdescription', $pdescription, PDO::PARAM_STR);
$pdoUpdate->bindParam(':pmeasure', $pmeasure, PDO::PARAM_STR);

$pdoUpdate->bindParam(':pdocument', $pdocument, PDO::PARAM_STR);
$pdoUpdate->bindParam(':pfeedback', $pfeedback, PDO::PARAM_STR);
$pdoUpdate->bindParam(':pcomments', $pcomments, PDO::PARAM_STR);
$pdoUpdate->bindParam(':image', $upload_image, PDO::PARAM_STR);
$pdoUpdate->execute();

//

// check if mysql update query successfu
if($pdoUpdate){
  //echo '<br>Data Updated';
  header('Location: everybody.php');
  //header('Location: profile.php?id=.$id.);
}else{
  echo 'Data Not Updated';
}


?>
