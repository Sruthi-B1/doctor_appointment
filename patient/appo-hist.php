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
.sec-div{
	margin-left:100px;
    margin-top:100px;
   width:100%;
   height:100%;
   padding:10px;
   padding-top:10px;
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
h2{
  color:#2E4053;
  font-weight:bold;
  text-shadow:black 5px;
}
.d{
 
  margin-left:20px;
 width : 20%;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<?php


?>
<div class="pro-div">
<div class="sec-div">
<?php
    $ii = $_SESSION['ap'];

    $ar=mysqli_query($al, "SELECT * FROM appointment  INNER join doct USING (doct_id) WHERE pat_id=$ii   order by appo_id DESC");
$i=1;

  ?>

    
<form method="post" >

<h2 align="center"><b> Appointment History </b></h2>
<input type="" id="myInput" name="text" class="se" placeholder="search Patients here.."><th style="padding:10px;margin-left:10px;" ><img style="width:30px;height:30px;" src="../img/se.jpg" ></th><td style="padding:10px">
	
  	<table  class="newtable" >
		<tr>
		<th>SI/No:</th>	<th>Doctor's</th><th>Appointment taken</th><th>Appointment Date</th><th>Status</th><th >Purpose</th>
			</tr>
			<tbody id="myTable">
        <?php  foreach ($ar as $qw) { ?>
          
			
			<tr>
      <td><?php echo $i++;?> </td> 
     
     
      <td><img style="width:100px;height:100px;border-radius: 50%;" src="<?php echo $qw['doct_img'];?>"><br><?php  echo  $qw[ 'doct_name'].'    '.$qw['last_name']; ?> </td>
               
      <?php $tr=date('d-m-Y',strtotime($qw['app_take_date'])); ?>
 			        	<td ><?php  echo $tr;?>  </td>
               <?php $sr=date('d-m-Y',strtotime($qw['appo_date'])); ?>
 			        	<td ><?php  echo $sr;?>  </td>
                <td ><?php  echo $qw['status']; ?> </td>
                <td ><?php  echo $qw['purpose']; ?> </td>
              
              
               

       </tr>

			<?php } ?>
			</tbody>
		</table>
	</form>

</div>

</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

});
</script>
<?php
