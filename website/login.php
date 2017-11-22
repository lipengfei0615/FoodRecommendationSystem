<?php
session_start(); // Starting Session
//$error=''; // Variable To Store Error Message
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$con = mysqli_connect("localhost", "root", "1234");
mysqli_select_db($con,"foodrecommendation");
if (isset($_POST['Username'])) {
  $username =$_POST['Username'];
  $password = $_POST['password'];
  $_SESSION['Username']=$username;
// SQL query to fetch information of registerd users and finds user match.
  $query = mysqli_query($con, "SELECT * FROM registration WHERE password='".$password."' AND username='".$username."' ");
  $rows = mysqli_fetch_row($query);
  if ($rows != 0) {
  //  $_SESSION['message']="Log in Successfully!"; // Initializing Session
    header("location:recom.php");

  }else {
    echo "Username or Password is invalid";

  }
   //mysql_close($con); // Closing Connection

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href="http://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
	<!-- banner -->
	<div class="banner about-w3bnr">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header"><!-- header-one -->
				<div class="container">
					<div class="w3ls-header-left">
						<p>Best food ever</p>
					</div>
					<div class="w3ls-header-right">
						<ul>
							<li class="head-dpdn">
								<i class="fa fa-phone" aria-hidden="true">Call us:(+1)2269613354</i>
							</li>

						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //header-one -->
			<!-- navigation -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1><a href="index3.html">Seeker<span>Best Food Recommendation</span></a></h1>
						</div>
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index3.html">Home</a></li>
								<!-- Mega Menu -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">

											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Cuisine</h6>
													<li><a href="mainpage.html">Chinese Recipes</a></li>
													<li><a href="mainpage.html">Turkey Recipes</a></li>
													<li><a href="mainpage.html">French Recipes</a></li>
													<li><a href="mainpage.html">Italian Recipes</a></li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- //navigation -->
		</div>
		<!-- //header-end -->
		<!-- banner-text -->
		<div class="banner-text">
			<div class="container">
				<h2>Delicious food from the World<br> <span>Best recommendation For you.</span></h2>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- breadcrumb -->
	<div class="container">
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Login</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- login-page -->
	<div class="login-page about">
		<img class="login-w3img" src="images/img3.jpg" alt="">
		<div class="container">
			<h3 class="w3ls-title w3ls-title1">Login to your account</h3>
			<div class="login-agileinfo">
				<form action="login.php" method="post">
					<input class="agile-ltext" type="text" name="Username" placeholder="Username" required="true">
					<input class="agile-ltext" type="password" name="password" placeholder="Password" required="true">
	                <div class="wthreelogin-text">
					<div class="clearfix"> </div>
					</div>
					<input type="submit" value="LOGIN" name="submit">
				</form>
				<p>Don't have an Account? <a href="signup.html"> Sign Up Now!</a></p>
			</div>
		</div>
	</div>
	<!-- //login-page -->
	<!-- subscribe -->

	<!-- //footer -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        		}
        	}
        });
    </script>
	<!-- //cart-js -->
	<!-- start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();

			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
