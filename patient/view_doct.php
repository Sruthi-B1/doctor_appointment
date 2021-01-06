
<?php include '../hspt_cnct.php' ?>
<?php include 'pat_header.php' ?>

<style>
.main-div{
    margin-left:100px;
    margin-top:10px;
   width:100%;
   height:100%;
   padding:10px;
   padding-top:10px;
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
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<div class="main-div">
<div class="sec-div">
<?php
   
    $ar=mysqli_query($al, "SELECT * FROM doct  INNER join specilization USING (spelz_id) where ds = 'active' order by doct_name asc");
$i=1;

    ?>
<form method="post" >

<h2 align="center"><b> View Doctor Details </b></h2>
<input type="" id="myInput" name="text" class="se" placeholder="search Doctors here.."><th style="padding:10px;margin-left:10px;" ><img style="width:30px;height:30px;" src="../img/se.jpg" ></th><td style="padding:10px">
		<table  class="newtable" >
		<tr>
		<th>SI/No:</th>	<th>Doctor's </th><th>Specilization</th><th>Working <br> Time</th><th >Consultation <br> Fee</th><th >book Appointment</th>
			</tr>
			<tbody id="myTable">
        <?php  foreach ($ar as $qw) { ?>
          
			
			<tr>
      <td><?php echo $i++;?> </td> 
     
				 <td><img style="width:100px;height:100px;border-radius: 50%;" src="<?php echo $qw['doct_img'];?>"><br><?php  echo  $qw[ 'doct_name'].'    '.$qw['last_name']; ?> </td>
				<td ><?php  echo $qw['spelz_name']; ?> </td>
        <td ><?php  echo $qw['wtime']; ?> </td>

				
				<td><?php  echo $qw['con_fee']; ?> </td>
       <td><a href="takeAppointment.php?doct_id=<?php echo $qw['doct_id']?>">
       <b>BOOK APPOINTMENT</b> </a></td>
 	

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