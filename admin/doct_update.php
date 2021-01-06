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
input[type = text],#dob,#email,[type="file"],.splz-select,#addr,.wrk-time,.ds{
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
 $di = $_GET['doct_id'];
 
 $tt = mysqli_query($al, "SELECT * FROM doct INNER join specilization USING (spelz_id) WHERE doct_id=$di");

?>
<?php  

	$ar=mysqli_query($al,"select * from specilization");

?>
<body>
<div class="pro-div">
<div class="re-form">
<h1 style="color:white;">Doctor Updation.....</h1>
<br>
<?php  foreach ($tt as $qw) { ?>
<form method="post" enctype="multipart/form-data" >
<img style="width:200px;height:200px;margin-left:500px;border-radius: 50%;" src="<?php echo $qw['doct_img'] ?>">
  <div class="div2">
      <div class="name1">
        <div class="lab"><label >Doctor Name<font color=red>*</font>:</label>
       </div>
        <div class="div-text"> <input type="text" name="fname"  required="required" pattern="[a-zA-Z\s]{3,20}" title="Enter the valid  Name!"   value="<?php echo $qw['doct_name'];?>" >
        </div>
      </div>
     <div class="name2">
     <div class="lab"><label >SurName <font color=red>*</font>:</label>
     </div>
        <div class="div-text"> <input type="text" name="lname" placeholder="Last Name" required="required" pattern="[a-zA-Z\s]{3,20}" title="Enter the valid  Name!" onfocus="this.placeholder=''"onblur="this.placeholder='Last Name'"   autocomplete="off"  value="<?php echo $qw['last_name'];?>">
      </div>
      </div>
  </div>
    <br>
    <div class="div2">
      <div class="name1">
      <div class="lab">  <label >Address<font color=red>*</font>:</label>
      </div>
        <div class="div-text"> <textarea name="add" id="addr" placeholder="Address" required="required"  title="Enter the valid  Address!" onfocus="this.placeholder=''"onblur="this.placeholder='Address'"   autocomplete="off" cols="20" rows="2" ><?php echo htmlspecialchars($qw['doct_add']);?></textarea>
      </div> </div>
     <div class="name2">
     <div class="lab"> 
     <label >Phone Number<font color=red>*</font>:</label>
     </div>
        <div class="div-text"> <input type="text" name="phn" id="idwe" placeholder="Phone Number" required="required" pattern="[0-9]{10,11}" title="Enter the valid Phone Number!" onfocus="this.placeholder=''"onblur="this.placeholder='Phone Number'"   autocomplete="off" value="<?php echo $qw['doct_phn'];?>" >
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
        <input type="email"  name="mail" id="email" required="required" placeholder="E-mail"  title="Enter the valid  E-mail!" onfocus="this.placeholder=''"onblur="this.placeholder='E-mail'"   autocomplete="off" value="<?php echo $qw['doct_email'];?>" > 
         </div>
     </div> 
     <div class="name2">
       <div class="lab"> 
        <label >DOB<font color=red>*</font>:</label>
        </div>
       <div class="div-text"> 
         <input type="date" name="date"  id="dob" placeholder="dd/mm/yy" required="required" onfocus="this.placeholder=''"onblur="this.placeholder='dd/mm/yy'"   autocomplete="off" value="<?php echo $qw['doct_dob'];?>" >
       </div>
      </div>
   </div>
    
    
  <br>
    <div class="div2">
      <div class="name1"> 
        <div class="lab">
        <label>Gender<font color=red>*</font>: </label>
       </div>&nbsp;&nbsp;
       <div class="div-text" id="gend">  <input  type="radio"  name="gen" value="male" <?php if($qw['gender']=='male'){ echo "checked"; } ?>>
      <span class="gen">Male</span>
      <br>
      <input  type="radio"  name="gen" value="female" <?php if($qw['gender']=='female'){ echo "checked"; } ?> >
      <span class="gen">Female</span>
      <br>
      <input  type="radio"  name="gen" value="others" <?php if($qw['gender']=='others'){ echo "checked"; } ?> >
      <span class="gen">Custom</span>				
        </div>
      </div> 
     <div class="name2" >
       <div class="lab"> 
        <label > Specialization<font color=red>*</font>:</label>
        </div>
        <div class="div-text">
        <select name="spz" class="splz-select" required="required">
		<option value="<?php echo $qw['spelz_id'] ?>">
						<?php echo $qw['spelz_name']?>
					</option>
            <?php  foreach ($ar as $w) {  ?>
                <option value="<?php echo $w['spelz_id'] ?>">
 							<?php  echo $w['spelz_name']; ?> 
						</option>
							<?php } ?>
	        </select>	
        </div>
      </div>
   </div>
   <br>
    <div class="div2">
      
     <div class="name1">
     <div class="lab"> <label >Consultation Fee<font color=red>*</font>:</label>
     </div>
        <div class="div-text"> <input type="text" name="fee" id="fee" placeholder="Amount" required="required" pattern="[0-9]{3,4}" title="Enter the valid Amount!" onfocus="this.placeholder=''"onblur="this.placeholder='Amount'"   autocomplete="off" value="<?php echo $qw['con_fee']?>"  >
      </div> </div>
      <div class="name2">
        <div class="lab">
          <label>Working Time<font color=red>*</font>: </label> 
        </div>  
        <div class="div-text">
          <select name="wtime" class="wrk-time" required>
	        <option>
							<?php echo $qw['wtime']?>
						</option>
            <option value="8.30 AM - 12.30 PM">8.30 AM - 12.30 PM</option>
      	  <option value="12.30 PM - 4.30 PM">12.30 PM - 4.30 PM</option>
	        </select>				
        </div>
      </div>
  </div>
    <br>
   
    <div class="div2">
    <div class="name1">
        <div class="lab">
          <label>Status<font color=red>*</font>: </label> 
        </div>  
        <div class="div-text">
          <select name="ds" class="ds" required>
	        <option>
							<?php echo $qw['ds']?>
						</option>
          <option value="active">active</option>
      	  <option value="deactive">deactive</option>
	      
	        </select>				
        </div>
      </div>
    
     <div class="name2">
     <div class="lab">
       <br>
     <a href="view_doct.php" class="can-sub">CANCEL</a>
     </div>
       <div class="div-text"> 
     <input type="submit" id="submit" class="can-sub" name="reg" value="Update" required>
      </div>
      </div>
  </div>
    <br>
    
     
	</form>
	<?php } ?>
</div>
</div>

    
</body>
</html>
<?php
if(isset($_POST['reg'])){
extract($_POST);


	$q="UPDATE `doct` SET `doct_name`='$fname',`last_name`='$lname',`doct_add`='$add',`doct_phn`='$phn',`doct_email`='$mail',`doct_dob`='$date',`gender`='$gen',`spelz_id`='$spz',`con_fee`='$fee' ,`wtime`='$wtime',`ds`='$ds' WHERE doct_id = $di";
	mysqli_query($al,$q);

	
  echo "<script>alert('Updated Suscessfully!')</script>";
  echo "<script>window.location=('view_doct.php')</script>";
}
 ?>
 <script type="text/javascript">
	$(document).ready(function(){
		$('#dob').change(function(){
			// if($('#dob').val()>"<?php echo date('Y-m-d') ?>"){
				if($('#dob').val()>"<?php echo date('Y-m-d'); ?>"){
					alert('Invalid Date of Birth');
					$('#dob').val('');
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