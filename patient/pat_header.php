<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
  #nav{
  overflow: hidden;
  position: fixed;
  width:100%;
  margin-top:0px;
  padding-top:0px;
  height:120px;
}
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 220px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:#2E4053;
  overflow-x: hidden;
  padding-top: 100px;
  margin-top:50px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn,.doct-btn,.pro-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover,.doct-btn,.pro-btn {
  color:blue;
}




/* Add an active class to the active dropdown button */
.active {
  background-color:#2E4053;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container,.doct-btn,.pro-btn {
  display: none;
  background-color: #426284;
  padding-left: 4px;
  margin-left:0px;
}
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.fa-user-md,.fa-user-circle,.fa-medkit,.fa-address-book-o,.fa-envelope{
    float: left;
  padding-right: 18px;
  
}
.social{
  float:bottom;
  padding:20px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="../css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="../css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="../css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="../css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/style.css" /> 
</head>

<body>

	<!-- Header -->
	<header>

		<!-- Nav -->
		<nav id="nav" class="navbar">
			<div class="container">
			<marquee behavior="scroll" direction="left">DEVIMATHA HOSPITAL,RAJAKUMARY</marquee>
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						
							<img class="logo" src="../img/tels.png" alt="logo">
						
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav  button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li> <a href="pat_pro.php"><i class="fa fa-user-circle"> <?php echo $_SESSION['ulp'];?> </i></a></li>
                    <li> <a href="../public_home.php"> <i class="fa fa-sign-out"> Sign Out</i> </a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		
				
				 
		<div class="head-nav">

</div>
<div class="sidenav">

  <a href="pat_pro.php"><i class="fa fa-user-circle"></i> Profile  </a>
  <a href="view_doct.php"><i class="fa fa-user-md"></i> Doctors </a>
  <button class="dropdown-btn">Appointment 
  <i class="fa fa-address-book-o"></i>
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="aprved_app.php">Approved Appointment</a>
    <a href="can_appp.php">Cancel Appointment</a>
    <a href="appo-hist.php">Appointment History</a>
  </div>
  <a href="msg.php"><i class="fa fa-envelope" aria-hidden="true"></i>
 Messages</a>
  
</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<?php  include 'session.php'?>