<?php
session_start();
?>
<?php include 'hspt_cnct.php' ?>
<?php include 'public_header.php' ?>
<html>

<head>
    <style>
.imgbg{
    background-image: url('./img/l.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
 
  
}
</style>
    
    <link href="./css/loginstyle.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="./css/fontawesome-all.css" rel="stylesheet" />
    
    <title>Admin login</title>
</head>    
<div class="imgbg">
<body>
    <div class=" w3l-login-form">
        <h2> Admin Login </h2>
        <form action="#" method="POST">

            <div class=" w3l-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="u_name" placeholder="Username" required="required" onfocus="this.placeholder=''"onblur="this.placeholder='user name'"   autocomplete="off"/>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required" onfocus="this.placeholder=''"onblur="this.placeholder='user name'"   autocomplete="off" />
                </div>
            </div>
            <div class="forgot">
                
                <p><input type="checkbox">Remember Me</p>
            </div>
            <button type="submit" name="l">Sign in</button>
        </form>
        <a href="public_home.php">CANCEL</a>
        <p class=" w3l-register-p">Hi! </p>
    </div>
  

</body>
</div>

</html>
<?php 
if(isset($_POST['l'])){
extract($_POST);
$q="select * from login where uname='$u_name' and password='$password'";
$rs=mysqli_query($al,$q);
$ar=mysqli_fetch_all($rs,MYSQLI_BOTH);
//print_r($ar);
$sdf=456789;
$_SESSION['li'] = $sdf;
if(sizeof($ar)>0){

	//echo"valid";
	//echo $val['type'];
		//find the type of user
	foreach ($ar as $val) {
        $id=$val['logi_id'];
        $nm=$val['uname'];
		//redirectio 
		if($val['type']=='admin')
		{
            $_SESSION['lpa'] = $id;
            $_SESSION['ulp'] = $nm;

			echo "<script>window.location=('./admin/admin_home.php')</script>";

        }
        else{
            //echo"invalid";
            //java script
            echo "<script>alert('invalid user!')</script>";
        }
	}
}
else{
	//echo"invalid";
	//java script
	echo "<script>alert('invalid user!')</script>";
}
}
 ?>
<div style="height:50px"></div>


</div>  

		</div> </div> </div> 

        <?php include 'footer.php' ?>