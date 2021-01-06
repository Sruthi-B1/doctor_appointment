<?php  
include_once("hspt_cnct.php");
if(isset($_POST['type']) == 1){
    $username =$_POST['username'];
     $query ="SELECT * FROM `login` where uname ='".$username."' ";
    $result =mysqli_query($al, $query);
   $rowcount=mysqli_num_rows($result);
    if($rowcount >0){
        echo "<span style='color:red' class='status-not-available'>  Already Exist.</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
       
    }else{
         echo "<span style='color:green' class='status-available'>  New User.</span>";
         echo "<script>$('#submit').prop('disabled',false);</script>";
    }
}

?>
