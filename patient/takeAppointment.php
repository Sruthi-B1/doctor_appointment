<?php include '../hspt_cnct.php' ?>
<?php include 'pat_header.php' ?>
<style>
.pro-div{
    margin-left:100px;
    margin-top:0px;
 
  
   
  
   width:100%;
   height:90%;
   padding:50px;
   padding-top:150px;
}
.div-main{
	float:center;
   box-shadow: 5px #888888;
   box-shadow:5px 5px 5px 5px grey;
   border-radius: 12px;
   margin-top:0px;
   margin-left:100px;
   width:60%;
   height:90%;
   color:black;
   padding-right:1300px;
   margin-right:100px;
}
h2{
  color:#2E4053;
  font-weight:bold;
  text-shadow:black 5px;
  text-align:center;
}
.table-response{
    margin-left:150px;
    margin-top:50px;
    margin-bottom:50px;
    margin-right:200px;
}
.div-img{
    
    width:100%;
    float:center;
}
</style>
<head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<div class="pro-div">
<h2>APPOINTMENT</h2>
<div class="div-main">
<?php

    $di = $_GET['doct_id'];
    
    $ar=mysqli_query($al,"SELECT * FROM `doct`   INNER join `specilization` USING (spelz_id)  WHERE doct_id=$di");
    $did = $_SESSION['ap'];
  
    ?>
    <form  method="post" >
		<table  class="table-response"  >
        <?php  foreach ($ar as $qw) { ?>
            <tr>
                
               <div class="div-img"><td></td> <td><img style="width:200px;height:200px;border-radius: 50%;" src="<?php echo $qw['doct_img'];?>"> </td><td></td></div>
            </tr>
            <tr>
				<th style="padding:30px">Doctor  Name: </th>
                <td ><?php  echo  $qw[ 'doct_name'].'    '.$qw['last_name']; ?> </td>
                
                 <th style="padding:30px">Specilization: </th>
                 <td ><?php  echo $qw['spelz_name']; ?> </td>
                 </tr>
                 <tr>
                 <th style="padding:40px">Contact:</th>
                 <td><?php  echo $qw['doct_email'].'  <br>  '.$qw['doct_phn']; ?> </td>
                 <th style="padding:30px">Consultation Fee: </th>
                 <td ><?php  echo $qw['con_fee']; ?> </td>
                 </tr>
                 <tr>
                 <th style="padding:30px">Date for Appointment<font color=red>*</font>:</th>
                 <td><input type="date" id="dob" name="apdate" required="required"></td>
          
                 </tr>
                 <tr><th>PURPOSE:</th>
                <td> <textarea name="appurpose"  cols="30" rows="3"></textarea></td>
                <th></th>
                <td><button name="app">REQUEST FOR APPOINTMENT</button></td>
                 </tr>
               <?php  $take_app_date = date('Y-m-d');
               ?>
                 
			<?php } ?>
		</table>
	</form>

</div>
</div>
<?php
if(isset($_POST['app'])){
extract($_POST);

	$q2="insert into appointment(`doct_id`, `pat_id`, `appo_date`, `app_take_date`, `status`, `purpose`,`token`) values('$di','$did','$apdate',' $take_app_date','pending','$appurpose','0')";

  mysqli_query($al,$q2);
  
  echo "<script>alert('Appointment Requested Sucessfulyy!')</script>";
  echo "<script>window.location=('appo-hist.php')</script>";
}
 ?>
 <script type="text/javascript">
	$(document).ready(function(){
		$('#dob').change(function(){
			// if($('#dob').val()>"<?php echo date('Y-m-d') ?>"){
				if($('#dob').val()<"<?php echo date('Y-m-d'); ?>"){ 
					alert('Invalid Date');
					$('#dob').val('');
				}
				});
        $('#dob').change(function(){
			// if($('#dob').val()>"<?php echo date('Y-m-d') ?>"){
				if($('#dob').val()>"<?php echo date('Y-m-d', strtotime('+1 years')); ?>"){ 
					alert('Invalid Date');
					$('#dob').val('');
				}
				});
      });
</script>