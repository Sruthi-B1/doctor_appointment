<?php
 session_start();
?>
<?php include '../hspt_cnct.php' ?>
<html>
<head>
<style>
.pro-div{
    margin-left:100px;
    margin-top:10px;
   width:100%;
   height:100%;
   padding:10px;
   padding-top:10px;
}
.re-form{
  border: 2px solid rgb(3, 4, 60);
  border-radius: 12px;

  display: block;
  padding: 3em;
  justify-content: center;
  background: rgba(14, 14, 14, 0.61);

  background-color:black;
 
  padding:50px;
  
   float:center;
  
   margin-top:0px;
   margin-left:10px;
   width:80%;
   height:1000px;
   margin-right:20px;
   opacity:0.6;
color:white;  

}
input[type = text],#dd,#email,[type="file"],.splz-select,#addr,.wrk-time{
  margin-left:30px;
  margin-top: 20px;
  margin-right: 20px;
  width:200px; 
  border:none;
 border-bottom:2px solid white;
 background-color:black;
 color:white;
 border-top:black;
 border-right:black;
 border-left:black;

}
body{
  background-image: url('../img/l.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
label{
margin-left: 0px;
margin-top: 20px; 
margin-right: 0px;
float:left;
color:white;
font-size:15px;
}
.gen,#gend{
  color:white;
  margin-left:40px;
  
}
.div2{
  width:90%;
  margin-top:10px;
  height:10%;


}
.name1{
  width:50%;
  float:left;

}
.name2{
  width:50%;

  float:right;
  
}
.lab{
  width:15%;
  float:left;
  font-style:Sans-serif;
}
.div-text{
  width:80%;
  float:right;
  margin-top:0px;
}
.can-sub{
  border-radius:10px;

  padding:10px 2px;
  font-size:20px;
  font-weight:solid 4px black;
    font-size: 14px;
    text-decoration: none;
    cursor: pointer;
    margin-left:40px;
  margin-top: 0px;
  margin-right: 20px;
  width:200px; 
 border:2px solid white;
 background-color:black;
 color:white;
   
}
.can-sub:hover{
  background-color:white;
  color:black;
}
#user-availability-status{
  float:bottom;
}
h1{
  text-align:center;
  font-family: serif;
}
</style>
<title>Doctor Registration</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>
<?php  
	$i=1;
	$ar=mysqli_query($al,"select * from specilization");

?>
<body>
<div class="pro-div">
<div class="re-form">
<h1 style="color:white;">Doctor Register Here.....</h1>
<br>
<form method="post" enctype="multipart/form-data" >
  <div class="div2">
      <div class="name1">
        <div class="lab"><label >Doctor Name<font color=red>*</font>:</label>
       </div>
        <div class="div-text"> <input type="text" name="fname" placeholder="First Name" required="required" pattern="[a-zA-Z\s]{3,20}" title="Enter the valid  Name!" onfocus="this.placeholder=''"onblur="this.placeholder='First Name'"   autocomplete="off" >
        </div>
      </div>
     <div class="name2">
     <div class="lab"><label >SurName <font color=red>*</font>:</label>
     </div>
        <div class="div-text"> <input type="text" name="lname" placeholder="SurName " required="required" pattern="[a-zA-Z\s]{1,20}" title="Enter the valid  Name!" onfocus="this.placeholder=''"onblur="this.placeholder='SurName '"   autocomplete="off" >
      </div>
      </div>
  </div>
    <br>
    <div class="div2">
      <div class="name1">
      <div class="lab">  <label >Address<font color=red>*</font>:</label>
      </div>
        <div class="div-text"> <textarea name="add" id="addr" placeholder="Address" required="required"  title="Enter the valid  Address!" onfocus="this.placeholder=''"onblur="this.placeholder='Address'"   autocomplete="off" cols="20" rows="2"></textarea>
      </div> </div>
     <div class="name2">
     <div class="lab"> 
     <label >Phone Number<font color=red>*</font>:</label>
     </div>
        <div class="div-text"> <input type="text" id="idwe" name="phn" placeholder="Phone Number" required="required" pattern="[0-9]{10,11}" title="Enter the valid Phone Number!" onfocus="this.placeholder=''"onblur="this.placeholder='Phone Number'"   autocomplete="off" >
      </div> 
      </div>
  </div>
    <br>
    <div class="div2">
    <div class="name1"> 
      <div class="lab">
            <label >E-mail<font color=red>*</font>:</label>
        </div>
        <div class="div-text"> 
        <input type="email"  name="mail" id="email" required="required" placeholder="E-mail"  title="Enter the valid  E-mail!" onfocus="this.placeholder=''"onblur="this.placeholder='E-mail'"   autocomplete="off" > 
         </div>
     </div> 
     <div class="name2">
       <div class="lab"> 
        <label >DOB<font color=red>*</font>:</label>
        </div>
       <div class="div-text"> 
         <input type="date" name="date"  id="dd" placeholder="dd/mm/yy" required="required" onfocus="this.placeholder=''"onblur="this.placeholder='dd/mm/yy'"   autocomplete="off" >
       </div>
      </div>
   </div>
    
    
  <br>
    <div class="div2">
      <div class="name1"> 
        <div class="lab">
        <label>Gender<font color=red>*</font>: </label>
       </div>&nbsp;&nbsp;
       <div class="div-text" id="gend">  <input  type="radio"  name="gen" value="male">
      <span class="gen">Male</span>
      <br>
      <input  type="radio"  name="gen" value="female" >
      <span class="gen">Female</span>
      <br>
      <input  type="radio"  name="gen" value="others" >
      <span class="gen">Custom</span>				
        </div>
      </div> 
     <div class="name2" >
       <div class="lab"> 
        <label > Specialization<font color=red>*</font>:</label>
        </div>
        <div class="div-text">
        <select name="spz" class="splz-select" required="required">
	        <option value="">-select-</option>
            <?php  foreach ($ar as $qw) {  ?>
                <option value="<?php echo $qw['spelz_id'] ?>">
 							<?php  echo $qw['spelz_name']; ?> 
						</option>
							<?php } ?>
	        </select>	
        </div>
      </div>
   </div>
   <br>
    <div class="div2">
      <div class="name1">
      <div class="lab">  <label >Photo<font color=red>*</font>:</label>
      </div>
        <div class="div-text"> <input type="file" name="pic"  required="required"  title="Select doctor photo!" onfocus="this.placeholder=''"onblur="this.placeholder='Docter'"   autocomplete="off" >
      </div> </div>
     <div class="name2">
     <div class="lab"> <label >Consultation Fee<font color=red>*</font>:</label>
     </div>
        <div class="div-text"> <input type="text" id="fee" name="fee" placeholder="Amount" required="required" pattern="[0-9]{3,4}" title="Enter the valid Amount!" onfocus="this.placeholder=''"onblur="this.placeholder='Amount'"   autocomplete="off" >
      </div> </div>
  </div>
    <br>
    <div class="div2">
    <div class="name1">
        <div class="lab">
          <label>Working Time<font color=red>*</font>: </label> 
        </div>  
        <div class="div-text">
          <select name="wtime" class="wrk-time" required>
	        <option value="">-select-</option>
          <option value="8.30 AM - 12.30 PM">8.30 AM - 12.30 PM</option>
      	  <option value="12.30 PM - 4.30 PM">12.30 PM - 4.30 PM</option>
	      
	        </select>				
        </div>
      </div>
      <div class="name2">
      <div class="lab"> 
        <label > Username<font color=red>*</font>:</label>
        </div>
        <div class="div-text">
        
        <input type="text" name="username"  placeholder="Username" id="username" required="required"     autocomplete="off" onBlur="checkAvailability()" ><span id="user-availability-status"></span>
        <i class="fa fa-check-circle" id="loaderIcon" style="display:none" ></i> 
  </div></div>
    
  </div>
<br>
    <div class="div2">
    <div class="name1">
     <div class="lab"> 
       <label >Password<font color=red>*</font>:</label>
       </div>
        <div class="div-text">
        <input type="text" name="pass" placeholder="Password" required="required" onfocus="this.placeholder=''"onblur="this.placeholder='Password'"   autocomplete="off" >
      </div>
      </div>
     <div class="name2">
     <div class="lab">
       <br>
     <a href="admin_home.php" class="can-sub">CANCEL</a>
     </div>
       <div class="div-text"> 
     <input type="submit" id="submit" class="can-sub" name="reg" value="Get Start" required>
      </div>
      </div>
  </div>
    <br>
    
     
    </form>
</div>
</div>
<script type="text/javascript">
function checkAvailability(){
	$("#loaderIcon").show();

	$.ajax({
		type:"POST",
		url:"check.php",
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
    
</body>
</html>
<?php
if(isset($_POST['reg'])){
extract($_POST);

basename($_FILES["pic"]["name"]);
$target_file =  "../pic/".uniqid().basename($_FILES["pic"]["name"]);
$result = move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);

	$q="insert into login(type,uname,password)
	values('doctor','$username','$pass')";
	mysqli_query($al,$q);
	$lid=mysqli_insert_id($al);
	$q2="insert into doct(logi_id,doct_name,last_name,doct_add,doct_phn,doct_email,doct_dob,gender,spelz_id,doct_img,con_fee,wtime,ds) values('$lid','$fname','$lname','$add','$phn','$mail','$date','$gen','$spz','$target_file','$fee','$wtime','active')";

  mysqli_query($al,$q2);
  echo "<script>alert('Registerd Suscessfully!')</script>";
  echo "<script>window.location=('view_doct.php')</script>";

}
 ?>
 <script type="text/javascript">
	$(document).ready(function(){
		$('#dd').change(function(){
			// if($('#dob').val()>"<?php echo date('Y-m-d') ?>"){
				if($('#dd').val()>"<?php echo date('Y-m-d') ; ?>"){
					alert('Invalid Date of Birth');
					$('#dd').val('');
				}
				});
        $('#idwe').keydown(function(e){
				if(e.key>='0' && e.key<='9' || e.key=='Backspace'){

				}
				else{
					e.preventDefault();
				}

			}

			);
      $('#fee').keydown(function(e){
				if(e.key>='0' && e.key<='9' || e.key=='Backspace'){

				}
				else{
					e.preventDefault();
				}

			}

			);
      });
</script>
<?php  include 'session.php'?>

