<?php include '../hspt_cnct.php' ?>


<?php
 $di = $_GET['appo_id'];


 $v=  mysqli_query($al,"SELECT MAX(token) AS max  FROM `appointment` where appo_date = (SELECT appo_date FROM `appointment` where appo_id=$di)"); 
 foreach($v as $row){
 $largestNumber = $row['max'];
 
}
$token = $largestNumber +1;
 $q4 = "UPDATE `appointment` SET `status`='approved',`token`= '$token' WHERE appo_id = $di";
 echo $q4;
 mysqli_query($al,$q4);

  
?>
<?php
   
header("Location:aprv_appo.php");
 

?>