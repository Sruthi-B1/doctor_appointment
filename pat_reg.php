<?php include 'hspt_cnct.php' ?>
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
  background-image: url('./img/l.jpg');
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
<div class="re-form">
<h1 style="color:white;">Patient Register Here.....</h1>
<br>
<form method="post" >
  <div class="div1">
      <div class="name1">
        <div class="lab"><label >First Name<font color=red>*</font>:</label>
       </div>
        <div class="div-text"> <input type="text" name="fname" placeholder="First Name" required="required" pattern="[a-zA-Z\s]{2,20}" title="Enter the valid  Name!" onfocus="this.placeholder=''"onblur="this.placeholder='First Name'"   autocomplete="off" >
        </div>
      </div>
     <div class="name2">
     <div class="lab"><label >SurName <font color=red>*</font>:</label>
     </div>
        <div class="div-text"> <input type="text" name="lname" placeholder="SurName" required="required" pattern="[a-zA-Z\s]{1,20}" title="Enter the valid  Name!" onfocus="this.placeholder=''"onblur="this.placeholder='SurName'"   autocomplete="off" >
      </div>
      </div>
  </div>
    <br>
    <div class="div1">
      <div class="name1">
      <div class="lab">  <label >Address<font color=red>*</font>:</label>
      </div>
        <div class="div-text"> <textarea name="add" id="addr" placeholder="Address" required="required"  title="Enter the valid  Address!" onfocus="this.placeholder=''"onblur="this.placeholder='Address'"   autocomplete="off" cols="30" rows="3"></textarea>
      </div> </div>
     <div class="name2">
     <div class="lab"> <label >Phone Number<font color=red>*</font>:</label>
     </div>
        <div class="div-text"> <input type="text" id="idwe" name="phn" placeholder="Phone Number" required="required" pattern="[0-9]{10,10}" title="Enter the valid Phone Number!" onfocus="this.placeholder=''"onblur="this.placeholder='Phone Number'"   autocomplete="off" >
      </div> </div>
  </div>
    <br>
    <div class="div1">
      <div class="name1">
        <div class="lab"><label >E-mail<font color=red>*</font>:</label>
        </div>
        <div class="div-text"> <input type="email"  name="mail" required="required" placeholder="E-mail"  title="Enter the valid  E-mail!" onfocus="this.placeholder=''"onblur="this.placeholder='E-mail'"   autocomplete="off" >  </div>
     </div> 
     <div class="name2">
       <div class="lab"> 
        <label >DOB<font color=red>*</font>:</label>
        </div>
       <div class="div-text"> 
         <input type="date" name="date" id="indate" placeholder="dd/mm/yy" required="required" onfocus="this.placeholder=''"onblur="this.placeholder='dd/mm/yy'"   autocomplete="off" >
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
	        <option value="">-select-</option>
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
   </div>
  <br>
    <div class="div1">
      <div class="name1">
      <div class="lab"> 
        <label > Username<font color=red>*</font>:</label>
        </div>
        <div class="div-text">
        
        <input type="text" name="username"  placeholder="Username" id="username" required="required"     autocomplete="off" onBlur="checkAvailability()" ><span id="user-availability-status"></span>
        <i class="fa fa-check-circle" id="loaderIcon" style="display:none" ></i> 
  </div></div>
     <div class="name2">
     <div class="lab"> 
       <label >Password<font color=red>*</font>:</label>
       </div>
        <div class="div-text">
        <input type="text" name="pass" placeholder="Password" required="required" onfocus="this.placeholder=''"onblur="this.placeholder='Password'"   autocomplete="off" >
      </div>
      </div>
  </div>
<br>
    <div class="div1">
    <div class="name1">
      <div class="lab"> 
        <label > Conform Password<font color=red>*</font>:</label>
        </div>
        <div class="div-text">
        
        <input type="text" name="cp" placeholder="Password" required="required" onfocus="this.placeholder=''"onblur="this.placeholder='Password'"   autocomplete="off" >
        
  </div></div>
     <div class="name2">
     <div class="lab">
       <br>
     <a href="public_home.php" class="can-sub">CANCEL</a>
     </div>
       <div class="div-text"> 
     <input type="submit" id="submit" class="can-sub" name="reg" value="Get Start" required>
      </div>
      </div>
  </div>
    <br>
    
     
    </form>
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
	$q="insert into login(type,uname,password)
	values('user','$username','$pass')";
	mysqli_query($al,$q);
	$lid=mysqli_insert_id($al);
	$q2="insert into patient(logi_id,first_name,lname,address,phn,email,dob,blood,gen) values('$lid','$fname','$lname','$add','$phn','$mail','$date','$bgroup','$gen')";

  mysqli_query($al,$q2);
  echo "<script>alert('Registerd Suscessfully!')</script>";
  echo "<script>window.location=('p_login.php')</script>";
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