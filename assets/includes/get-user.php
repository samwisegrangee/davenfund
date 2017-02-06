<?php
/////BEGIN TO GET USER//////
try {
  $sql = 'SELECT id, email, password FROM proposals WHERE email = :email';

     // prepare statement for execution
     $q = $pdoConnect->prepare($sql);

     // pass values to the query and execute it
     $q->execute([':email' => $_SESSION['user_email']]);

     $q->setFetchMode(PDO::FETCH_ASSOC);

     // print out the result set
     while ($r = $q->fetch()) {
         $_SESSION['user_email'] = $r['email'];
         $_SESSION['user_id'] = $r['id'];
     }
 } catch (PDOException $e) {
     die("Could not connect to the database $database :" . $e->getMessage());
 }
/////END OF GET USER//////
?>
