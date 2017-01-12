<?php   // get values form input text and number

  $pname = $_POST['pname'];
  $pdept = $_POST['pdept'];
  $pamount = $_POST['pamount'];
  $prequest = $_POST['prequest'];
  $pdescription = $_POST['pdescription'];
  $pmeasure = $_POST['pmeasure'];
  $pdocument = $_POST['pdocument'];
  $pfeedback = $_POST['pfeedback'];
  $pcomments = $_POST['pcomments'];

  $folder = "uploaded_images/";

  $upload_image = $folder . basename($_FILES["image"]["name"]);
