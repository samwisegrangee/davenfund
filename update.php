<?php

include('assets/includes/db.php');

// get values form input text and number
include('assets/includes/postvars.php');

$id = $_GET['id'];

//echo "We will update $id $pname $pdept $pamount $pcomments";

// mysql query to insert data
$pdoUpdate = $pdoConnect->prepare("UPDATE proposals SET id=:id, pname=:pname, pdept=:pdept, pamount=:pamount, prequest=:prequest, pdescription=:pdescription, pmeasure=:pmeasure, pdocument=:pdocument, pfeedback=:pfeedback, pcomments=:pcomments WHERE id=:id");

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
