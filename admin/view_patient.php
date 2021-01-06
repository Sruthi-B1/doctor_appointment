
<?php include '../hspt_cnct.php' ?>
<?php include 'admin_head.php' ?>
<style>
.main-div{
    margin-left:100px;
    margin-top:0px;
   width:100%;
   height:100%;
   padding:10px;
   padding-top:10px;
   margin-bottom:0px;
   padding-bottom:0px;
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
   
    $ar=mysqli_query($al, "SELECT * FROM patient ");
$i=1;

    ?>
<form method="post" >

<h2 align="center"><b> View Patient Details </b></h2>
<input type="" id="myInput" name="text" class="se" placeholder="search Patiets here.."><th style="padding:10px;margin-left:10px;" ><img style="width:30px;height:30px;" src="../img/se.jpg" ></th><td style="padding:10px">
		<table  class="newtable" >
		<tr>
		<th>SI/No:</th>	<th>Patient Name </th><th>Contact Details</th>	<th >Date of Birth</th><th >Gender</th><th >Blood Group</th>
            </tr>
			<tbody id="myTable">
        <?php  foreach ($ar as $qw) { ?>
           
			
			<tr>
      <td><?php echo $i++;?> </td>
 				<td ><?php  echo $qw[ 'first_name'].'    '.$qw['last_name']; ?> </td>
               <td ><?php  echo $qw['address'].'  <br>  '.$qw['email'].'  <br>  '.$qw['phn']; ?> </td>
			
				<?php $sr=date('d-m-Y',strtotime($qw['dob'])); ?>
 				<td ><?php  echo $sr;?> </td>
				 <td ><?php  echo $qw['gen']; ?> </td>
				
				<td ><?php  echo $qw['blood']; ?> </td>
		
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

