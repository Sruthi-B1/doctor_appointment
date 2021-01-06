<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
.fa-user-circle-o,#doct,.fa-wheelchair{
	float:left;
	margin-top:12px;
	margin-right:10px;
	
}


</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Doctor Appointment</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/doct.jpeg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="./img/tels.png" alt="logo" >
							<img class="logo-alt" src="img/tels.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
                    <li><a href="public_home.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					 
					<li class="has-dropdown"><a href="#blog">Sign in</a>
						<ul class="dropdown">
							<li>	<i class="fa fa-user-circle-o"></i><a href="admin_login.php">ADMIN</a></li>
							<li>	<i class="fa fa-user-md" id="doct"></i><a href="doctor_login.php">DOCTOR</a></li>
							<li>	<i class="fa fa-wheelchair"></i><a href="p_login.php">PATIENT</a></li>
						</ul>
					</li> 
					<li><a href="#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div> <br><hr style="border-color;red">
		</nav>

		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">DEVAMATHA HOSPITAL RAJAKUMARI</h1>
							<p class="white-text">Our Doctors are always in.</p>
							
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
                   
                    <h2 class="title">Why to choose us</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-user-md"></i>
						<h3>Specialist Doctors</h3>
						
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-heart-o"></i>
						<h3>No wait time, book a consultation in 5 minutes</h3>
						
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-hospital-o"></i>
						<h3>Quality Treatment</h3>
						
					</div>
				</div>
				<!-- /about -->

			

	</div> 
     	 
	

     <div style="height:50px"></div>
	 <?php unset($_SESSION['lpa']) ?>
	 <?php unset($_SESSION['ulp']) ?>
	 <?php unset($_SESSION['ap']) ?>

</div>  

		</div> </div> </div> 

        <?php include 'footer.php' ?>