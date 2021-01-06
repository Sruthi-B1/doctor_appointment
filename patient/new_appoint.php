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
</style>
<div class="pro-div">
<div class="div-main">
<label for="">Doctors Name</label>
<input type="text">
</div>
</div>
<?php
    $id = $_GET['doct_id'];
    $ar=mysqli_query($al, "SELECT * FROM doct  INNER join specilization USING (spelz_id)  WHERE doct_id=1 ");

	
    ?>
    <form method="post" >
		<table  class="table-response" >
        <?php  foreach ($ar as $qw) { ?>
            <tr>
                
                <td><img style="width:100px;height:100px;" src="<?php echo $qw['doct_img'];?>"> </td>
            </tr>
            <tr>
				<th style="padding:10px">Doctor  Name : </th>
                <td ><?php  echo  $qw[ 'doct_name'].'    '.$qw['last_name']; ?> </td>
                 </tr>
                 <tr>
                 <th style="padding:10px">Specilization : </th>
                 <td ><?php  echo $qw['spelz_name']; ?> </td>
                 </tr>
                 <tr>
                 <th style="padding:10px">Contact :</th>
                 <td><?php  echo $qw['doct_add'].'  <br>  '.$qw['doct_email'].'  <br>  '.$qw['doct_phn']; ?> </td>
                 </tr>
			<?php } ?>
		</table>
	</form>

