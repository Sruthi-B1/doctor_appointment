<?php include '../hspt_cnct.php' ?>
<?php include 'doct_head.php' ?>
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
   margin-left:300px;
   width:60%;
   height:90%;
   color:black;
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
<div class="pro-div">
<h2>My Profile</h2>
<div class="div-main">
<?php
    $ii =$_SESSION['lpa'];

    $ar=mysqli_query($al,"SELECT * FROM `doct`   INNER join `specilization` USING (spelz_id)  WHERE logi_id=$ii");
 
    ?>
    <form  method="post" >
		<table  class="table-response"  >
        <?php  foreach ($ar as $k) { ?>
            <tr>
          <?php $_SESSION['ap'] = $k['doct_id']; ?>
               <div class="div-img"><td></td> <td><img style="width:200px;height:200px;border-radius: 50%;" src="<?php echo $k['doct_img'];?>"> </td><td></td></div>
            </tr>
            <tr>
				<th style="padding:30px">Doctor  Name: </th>
                <td ><?php  echo  $k[ 'doct_name'].'    '.$k['last_name']; ?> </td>
                <th style="padding:10px">Gender:</th>
				<td style="padding:10px"><?php  echo $k['gender']; ?> </td>
                
                
                 </tr>
                 <tr>
                 <th style="padding:40px">Contact:</th>
                 <td><?php  echo $k['doct_add'].'  <br>  '.$k['doct_email'].'  <br>  '.$k['doct_phn']; ?> </td>
                 <th style="padding:10px">Date of Birth:</th>
				<?php $sr=date('d-m-Y',strtotime($k['doct_dob'])); ?>
 				<td style="padding:10px"><?php  echo $sr;?> </td>
                 </tr>
                 <tr>
                 <th style="padding:30px">Specilization: </th>
                 <td ><?php  echo $k['spelz_name']; ?> </td>
                 <th style="padding:30px">Consultation Fee: </th>
                 <td ><?php  echo $k['con_fee']; ?> </td>
                
                 </tr>
                
                 
			<?php } ?>
		</table>
	</form>

</div>
</div>