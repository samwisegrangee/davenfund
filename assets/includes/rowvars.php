<?php
//For posting by ID in .profile div
$id = $_GET['id'];

try {
$sql = "SELECT * FROM proposals WHERE id='$id'";
$results = $pdoConnect->query($sql);

} catch (PDOException $e) {
  echo $e->getMessage();
}

while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
  $id = $row['id'];
  $pn = $row['pname'];
  $pd = $row['pdept'];
  $pa = $row['pamount'];
  $pr = $row['prequest'];
  $pdes = $row['pdescription'];
  $pm = $row['pmeasure'];
  $pdoc = $row['pdocument'];
  $pf = $row['pfeedback'];
  $pc = $row['pcomments'];
  $pim = $row['image']; //IMAGE ADDED

}
