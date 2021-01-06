<?php include '../hspt_cnct.php' ?>


<?php
   
    $di = $_GET['appo_id'];


  $q4 = "UPDATE `appointment` SET `status`='Canceled' WHERE appo_id = '$di'";
 
  mysqli_query($al,$q4);
  header("Location:can_appp.php");

?>