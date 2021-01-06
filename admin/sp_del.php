<?php include '../hspt_cnct.php' ?>


<?php
   
    $di = $_GET['spelz_id'];


  $q4 = "DELETE FROM `specilization`  WHERE spelz_id = '$di'";
 
  mysqli_query($al,$q4);
  header("Location:splz.php");

?>