
<?php session_start();
?>
<?php include '../hspt_cnct.php' ?>

<style>
.pro-div{
    margin-left:100px;
    margin-top:0px;
  width:100%;
   height:90%;
   padding:50px;
   padding-top:150px;
   text-align:center;
}

.newtable{
margin-left:20px;
margin-right:20px;
}
.newtable td{
color:black;
}
.se{
	margin-left:20px;
color:black;
}
h1{
  color:#2E4053;
  font-weight:bold;
  text-shadow:black 5px;
  margin-left:0px;
}
.div-main{
	float:center;
  
 
   border-radius: 12px;
   margin-top:0px;
   margin-left:300px;
   width:60%;
   padding:50px;
   height:500px;
   color:black;
  
   
}
.pat-div{
    margin-bottom:20px;
    margin-left:200px;
    margin-top:20px;
}
.pat{
    margin-top:50px;
}
table td,tr{
  font-size:30px;
}
.t{
  border-color:blue;
  border-radius:12px;
  padding:30px 60px;
 
  text-decoration: none;
  color:black;
  
}
.t:hover{
 
  cursor: pointer;
}
a{
  text-decoration: none;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<?php


?>
<div class="pro-div">
<?php
    $ii = $_SESSION['ap'];
    $di = $_GET['appo_id'];

    $ar=mysqli_query($al, "SELECT * FROM appointment  INNER join patient USING (pat_id) WHERE appo_id=$di");
    



  ?>

<div class="div-main">
<form method="post" >



		<table >
        <?php  foreach ($ar as $qw) { ?>
          
			
			<h1><b>Appointment </b></h1>
     
      <tr>
      <th><div class="pat-div">  <u>Patient Details</u></th><th></div></th>
      </tr>
      <tr><td></td></tr>
     <div class="pat"> <tr>
     
     <th>Token Number :</th>
     <td><?php  echo $qw['token']; ?></td>
     </tr>
    <th>Patient Name :</th>
     <td ><?php  echo $qw[ 'first_name'].'    '.$qw['last_name']; ?> </td>
     </tr>
     <tr>
     <th>Gender :</th>
     <td><?php  echo $qw['gen']; ?></td>
     </tr>
     <tr>
     <th>Contact :</th>
              <td ><?php  echo $qw['address'].'  <br>  '.$qw['email'].'  <br>  '.$qw['phn']; ?> </td>
              </tr>
     <tr>
              <th>Appointment Date :</th>
              <?php $sr=date('d-m-Y',strtotime($qw['appo_date'])); ?>
                        <td ><?php  echo $sr;?> </td>
                        </tr>
                        <tr>
                        <th>Appointment Taken :</th>
                        <?php $tr=date('d-m-Y',strtotime($qw['app_take_date'])); ?>
 			        	<td ><?php  echo $tr;?>  </td>
               </tr>
     <tr>
               <th >Purpose :</th>
               <td><?php  echo $qw['purpose']; ?></td>
               </tr>
              </div> <?php  $oo = $qw['doct_id']; ?>
                <?php } ?>
      <tr>
      <?php 
      $y=mysqli_query($al, "SELECT * FROM doct  INNER join specilization USING (spelz_id) WHERE doct_id=$oo");
      ?>
   <th><div class="pat-div"><u>Doctor Details</u></div></th>

       </tr>
       <tr><td></td></tr>
       <?php  foreach ($y as $yw) { ?>
       <tr>
       <th>Doctor Name :</th>
       <td ><?php  echo  $yw[ 'doct_name'].'    '.$yw['last_name']; ?> </td>
       </tr>
       <tr>
       <th>Specilization :</th>
       <td><?php  echo $yw['spelz_name']; ?></td>
       </tr>
       <tr>
       <th>Consultation Fee :</th>
       <td><?php  echo $yw['con_fee']; ?></td>
       </tr>
<tr>
  <td><a href="pat_pro.php"><label class="t">CANCEL</label></a>
</td>
<td><button class="t" onclick="window.print()" >PRINT</button></td>
</tr>



        <?php } ?>

		
		</table>
	</form>
    </div>
</div>

</div>


