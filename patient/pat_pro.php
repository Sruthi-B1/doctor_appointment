
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
   margin-left:300px;
   width:60%;
   height:90%;
}
.table-response{
    margin-left:170px;
    color:black;
}
#up{
	float:bottom;
	border-radius:12px;
	
	margin-left:30px;
	cursor: pointer;
	background-color:white;
  color:black;
  margin-left:20px;
  padding:20px 40px;
	
}
#up:hover{
	background-color:#2E4053;
	color:white;
}
h2{
  color:#2E4053;
  font-weight:bold;
  text-shadow:black 5px;
  text-align:center;
}
</style>

<div class="pro-div">
<h2> Profile</h2>
<div class="div-main">
    <?php
	 
	 $id = $_SESSION['lpa'];
    $ar=mysqli_query($al, "SELECT * FROM patient  WHERE logi_id=$id");

    ?>
<form method="post" >
		<table  class="table-response" >
        <?php  foreach ($ar as $qw) { ?>
            <tr>
			<?php $_SESSION['ap'] = $qw['pat_id']; ?>
                <img style="width:70px;height:70px;margin-left:250px;margin-bottom:20px;" src="../img/user.jpg" alt="">
            </tr>
			
			<tr>
				<th style="padding:10px"> Name: </th>
 				<td style="padding:10px"><?php  echo $qw[ 'first_name'].'    '.$qw['lname']; ?> </td>
                 </tr>
				 <tr>
				<th style="padding:10px">Gender:</th>
				<td style="padding:10px"><?php  echo $qw['gen']; ?> </td>
			</tr>
			<tr>
				<th style="padding:10px">Contact :</th>
				<td style="padding:10px"><?php  echo $qw['address']; ?> </td>
			</tr>
			<tr>
				<th style="padding:10px"></th>
				<td style="padding:10px"><?php  echo $qw['phn']; ?> </td>
			</tr>
			
			<tr>
			<th style="padding:10px"></th>
			<td style="padding:10px"><?php  echo $qw['email']; ?> </td>
			</tr>
			<tr>
				<th style="padding:10px">Date of Birth:</th>
				<?php $sr=date('d-m-Y',strtotime($qw['dob'])); ?>
 				<td style="padding:10px"><?php  echo $sr;?> </td>
			</tr>

			<tr>
				<th style="padding:10px">Blood Group:</th>
				<td style="padding:10px"><?php  echo $qw['blood']; ?> </td>
			</tr>
			
			
			
			<tr>
<th></th><td>				 <a href='pat_update.php?pat_id=<?php  echo $qw['pat_id']; ?>'><label id="up">UPDATE</label></a>
</td>			</tr>
			<br>
			<?php } ?>
		</table>
	</form>

</div>


</div>
