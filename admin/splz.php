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
}
.sp-div{
    margin-top:200px;
    width:100%;
   height:80%;
   margin-left:200px;
   color:black;
}
.left{
width:50%;
float:left;

}
.right{
    width:50%;
float:left;
margin-right:100px;
}
.lab{
    width:20%;
float:left;
color:black;
}
.sp{
    width:60%;
float:center; 
}
input[type = text]{
  margin-left:0px;
  margin-right: 20px;
  width:200px; 
  border:none;
 border-bottom:2px solid black;
 
 color:black;
 border-top:white;
 border-right:white;
 border-left:white;
 background-color:white;

}
.bt{
    float:left;
    padding:20px 180px;
    color:black;
    
}
.bt:hover{
 
 cursor: pointer;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<?php 
$i=1;
$f = mysqli_query($al,"SELECT * FROM `specilization`");

?>
<div class="main-div">
    <div class="sp-div">
    <div class="left">
        <u><h3>Add Specilization</h3></u>
        <br>
        <form method="post">
        <div class="lab"><label for="">Specilization Name</label></div>
        <div class="sp"><input type="text"  name="username"   id="username" placeholder="Specilization Name" required="required" pattern="[a-zA-Z\s]{3,20}" title="Enter the Specilization Name!"   autocomplete="off"   onBlur="checkAvailability()"><span id="user-availability-status"></span></div>
        <i class="fa fa-check-circle" id="loaderIcon" style="display:none" ></i>
        <div class="bt"><button id="submit" name="add">Add</button></div>   
    </form>
    <script type="text/javascript">
function checkAvailability(){
	$("#loaderIcon").show();

	$.ajax({
		type:"POST",
		url:"sp_check.php",
		cache:false,
		data:{
			type:1,
			username:$("#username").val(),
		},
		success:function(data){
			$("#user-availability-status").html(data);
			$("#loaderIcon").hide(1000);
		}
	});
	
}

</script>
   
    </div>
    <br>
    <div class="right"><table class="newtable" >
        <tr><th>SI/No</th><th>Specilization</th><th>Delete</th></tr>
        <?php  foreach ($f as $qw) { ?>
        <tr> <td><?php echo $i++;?> </td>
        <td ><?php  echo $qw['spelz_name']; ?> </td>
<td><a href="sp_del.php?spelz_id=<?php echo $qw['spelz_id']?>">Delete</a></td>
    </tr>
        <?php } ?>
    </table></div>
    </div>
   

</div>
<?php
if(isset($_POST['add'])){
       
        $add = $_POST['username'];
	

		// Insert user data into table
		$result =  "insert into specilization(spelz_name) values('$add')";
		
		mysqli_query($al,$result);
      echo "<script>alert('Add Specilization Suscessfully!')</script>";
      echo "<script>window.location=('splz.php')</script>";
    }
?>
