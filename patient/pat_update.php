<?php
 session_start();
?>
<?php include '../hspt_cnct.php' ?>
<html>
<head>
<style>
.re-form{
  border: 2px solid rgb(3, 4, 60);
  border-radius: 12px;
  margin: 0px auto;
  display: block;
  padding: 3em;
  justify-content: center;
  background: rgba(14, 14, 14, 0.61);
  margin:100px;
  height:90%;
  background-color:black;
  opacity:0.6;
  height:100%;
  

}
input[type = text],[type="date"],[type="email"],.blood-select,#addr{
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
.div1{
  width:90%;
  margin-top:20px;
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
<title>Patient Registration</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>
<body>
<?php
 $di = $_GET['pat_id'];
 
 $tt = mysqli_query($al, "SELECT * FROM patient  WHERE pat_id=$di");

?>
<div class="re-form">
<h1 style="color:white;">Update Patient Details</h1>
<br>
<?php  foreach ($tt as $qw) { ?>
<form method="post" >
  <div class="div1">
      <div class="name1">
        <div class="lab"><label >First Name<font color=red>*</font>:</label>
       </div>
        <div class="div-text"> <input type="text" name="fname" placeholder="First Name" required="required" pattern="[a-zA-Z\s]{3,20}" title="Enter the valid  Name!" onfocus="this.placeholder=''"onblur="this.placeholder='First Name'"   autocomplete="off"  value="<?php echo $qw['first_name'];?>">
        </div>
      </div>
     <div class="name2">
     <div class="lab"><label >SurName <font color=red>*</font>:</label>
     </div>
        <div class="div-text"> <input type="text" name="lname" placeholder="Last Name" required="required" pattern="[a-zA-Z\s]{3,20}" title="Enter the valid  Name!" onfocus="this.placeholder=''"onblur="this.placeholder='Last Name'"   autocomplete="off" value="<?php echo $qw['last_name'];?>" >
      </div>
      </div>
  </div>
    <br>
    <div class="div1">
      <div class="name1">
      <div class="lab">  <label >Address<font color=red>*</font>:</label>
      </div>
        <div class="div-text"> <textarea name="add" id="addr" placeholder="Address" required="required"  title="Enter the valid  Address!" onfocus="this.placeholder=''"onblur="this.placeholder='Address'"   autocomplete="off" cols="30" rows="3"><?php echo htmlspecialchars($qw['address']);?></textarea>
      </div> </div>
     <div class="name2">
     <div class="lab"> <label >Phone Number<font color=red>*</font>:</label>
     </div>
        <div class="div-text"> <input type="text" name="phn" id="idwe" placeholder="Phone Number" required="required" pattern="[0-9]{10,11}" title="Enter the valid Phone Number!" onfocus="this.placeholder=''"onblur="this.placeholder='Phone Number'"   autocomplete="off" value="<?php echo $qw['phn'];?>" >
      </div> </div>
  </div>
    <br>
    <div class="div1">
      <div class="name1">
        <div class="lab"><label >E-mail<font color=red>*</font>:</label>
        </div>
        <div class="div-text"> <input type="email"  name="mail" required="required" placeholder="E-mail"  title="Enter the valid  E-mail!" onfocus="this.placeholder=''"onblur="this.placeholder='E-mail'"   autocomplete="off"  value="<?php echo $qw['email'];?>">  </div>
     </div> 
     <div class="name2">
       <div class="lab"> 
        <label >DOB<font color=red>*</font>:</label>
        </div>
       <div class="div-text"> 
         <input type="date" name="date" placeholder="dd/mm/yy" id="indate" required="required" onfocus="this.placeholder=''"onblur="this.placeholder='dd/mm/yy'"   autocomplete="off" value="<?php echo $qw['dob'];?>" >
       </div>
      </div>
   </div>
    
  <br>
    <div class="div1">
      <div class="name1">
        <div class="lab">
          <label>Blood Group<font color=red>*</font>: </label> 
        </div>  
        <div class="div-text">
          <select name="bgroup" class="blood-select" required>
          <option>
							<?php echo $qw['blood']?>
						</option>
          <option value="O+">O+</option>
      	  <option value="O-">O-</option>
	        <option value="AB+">AB+</option>
	        <option value="AB-">AB-</option>
	        <option value="A+">A+</option>
	        <option value="A-">A-</option>
	        <option value="B+">B+</option>
	        <option value="B-">B-</option>
	        </select>				
        </div>
      </div> 
     <div class="name2" >
       <div class="lab"> 
         <label>Gender<font color=red>*</font>: </label>
       </div>&nbsp;&nbsp;
       <div class="div-text" id="gend">  <input  type="radio"  name="gen" value="male" <?php if($qw['gen']=='male'){ echo "checked"; } ?>>
      <span class="gen">Male</span>
      <br>
      <input  type="radio"  name="gen" value="female" <?php if($qw['gen']=='female'){ echo "checked"; } ?> >
      <span class="gen">Female</span>
      <br>
      <input  type="radio"  name="gen" value="others"  <?php if($qw['gen']=='others'){ echo "checked"; } ?>>
      <span class="gen">Custom</span>
     </div>
      </div>
   </div>
  <br>
   
    <div class="div1">
     <div class="name2">
     <div class="lab">
       <br>
     <a href="pat_pro.php" class="can-sub">CANCEL</a>
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
    
</body>
</html>
<?php
if(isset($_POST['reg'])){
extract($_POST);
	
    $q2="UPDATE `patient` SET `first_name`='$fname',`last_name`='$lname',`address`='$add',`phn`='$phn',`email`='$mail',`dob`='$date',`blood`='$bgroup',`gen`='$gen' WHERE pat_id=$di";
	
  mysqli_query($al,$q2);
  echo "<script>alert('Updated Suscessfully!')</script>";
  echo "<script>window.location=('pat_pro.php')</script>";
}
 ?>
  <script type="text/javascript">
	$(document).ready(function(){
		$('#indate').change(function(){
			// if($('#indate').val()>"<?php echo date('Y-m-d') ?>"){
				if($('#indate').val()>"<?php echo date('Y-m-d'); ?>"){
					alert('Invalid Date of Birth');
					$('#indate').val('');
				}
				});

        $('#idwe').keydown(function(e){
				if(e.key>='0' && e.key<='9' || e.key=='Backspace'){

				}
				else{
					e.preventDefault();
				}

			});
      });
</script>