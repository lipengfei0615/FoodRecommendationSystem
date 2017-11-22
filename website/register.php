<?php
  session_start();
  $_SESSION['message']='';
  $mysqli = new mysqli('localhost','root','1234','foodrecommendation');
  if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['password']==$_POST['ConfirmPassword']){
      $username = $mysqli->real_escape_string($_POST['Username']);
      $password = $mysqli->real_escape_string($_POST['password']);
      $favoritefood = $_POST['favoriteFood'];
      $role = $mysqli->real_escape_string($_POST['role']);

      if($favoritefood==10){

        $sql = "INSERT INTO registration(username,password,prefer_french,prefer_turkey,prefer_china,prefer_italy,role)"."VALUES('$username','$password','20','1','2',3,'$role')";
        //if($mysqli->query($sql)===true){
          //  $sql ="UPDATE registration SET prefer_french=$favoritefood ";
        if($mysqli->query($sql)===true){
          $_SESSION['message']="Registration Successfully! Please log in now!";
          header("location:login.php");
        }else{
          $_SESSION['message']="Failed! User cannot be added into database!";
        }
      }

      if($favoritefood==11){

        $sql = "INSERT INTO registration(username,password,prefer_french,prefer_turkey,prefer_china,prefer_italy,role)"."VALUES('$username','$password','0','21','2',3,'$role')";
        //if($mysqli->query($sql)===true){
          //  $sql ="UPDATE registration SET prefer_french=$favoritefood ";
        if($mysqli->query($sql)===true){
          $_SESSION['message']="Registration Successfully! Please log in now!";
          header("location:login.php");
        }else{
          $_SESSION['message']="Failed! User cannot be added into database!";
        }
      }

      if($favoritefood==12){

        $sql = "INSERT INTO registration(username,password,prefer_french,prefer_turkey,prefer_china,prefer_italy,role)"."VALUES('$username','$password','0','1','22',3,'$role')";
        //if($mysqli->query($sql)===true){
          //  $sql ="UPDATE registration SET prefer_french=$favoritefood ";
        if($mysqli->query($sql)===true){
          $_SESSION['message']="Registration Successfully! Please log in now!";
          header("location:login.php");
        }else{
          $_SESSION['message']="Failed! User cannot be added into database!";
        }
      }

      if($favoritefood==13){

        $sql = "INSERT INTO registration(username,password,prefer_french,prefer_turkey,prefer_china,prefer_italy,role)"."VALUES('$username','$password','0','1','2',23,'$role')";
        //if($mysqli->query($sql)===true){
          //  $sql ="UPDATE registration SET prefer_french=$favoritefood ";
        if($mysqli->query($sql)===true){
          $_SESSION['message']="Registration Successfully! Please log in now!";
          header("location:login.php");
        }else{
          $_SESSION['message']="Failed! User cannot be added into database!";
        }
      }

    }
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign Up</title>
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
							<li class="head-dpdn">
								<a href="login.php"><i class="fa fa-sign-in" aria-hidden="true">Login</i></a>
							</li>
							<li class="head-dpdn">
								<a href="register.php"><i class="fa fa-user-plus" aria-hidden="true">Sign Up</i></a>
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
							<h1><a href="index2.html">Seeker<span>Best Food Recommendation</span></a></h1>
						</div>
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index2.html">Home</a></li>
								<!-- Mega Menu -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Cuisine</h6>
													<li><a href="menu.html">Chinese Recipes</a></li>
													<li><a href="menu.html">American Recipes</a></li>
													<li><a href="menu.html">French Recipes</a></li>
													<li><a href="menu.html">Italian Recipes</a></li>
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
			<li class="active">Sign Up</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- sign up-page -->
	<div class="login-page about">
		<img class="login-w3img" src="images/img3.jpg" alt="">
		<div class="container">
			<h3 class="w3ls-title w3ls-title1">Sign Up to your account</h3>
			<div class="login-agileinfo">
				<form action="register.php" method="post">
          <div class="alter alter-error"><?= $_SESSION['message']?></div>
					<input class="agile-ltext" type="text" name="Username" placeholder="Username" required="true">
					<input class="agile-ltext" type="password" name="password" placeholder="Password" required="true">
					<input class="agile-ltext" type="password" name="ConfirmPassword" placeholder="Confirm Password" required="true">
					<div class="wthreelogin-text">
            <p align="left">Which is your favourite type of Foods and your role</P>
						<br>
						<ul>
						 <select id="role_search" name="favoriteFood" required="true">
							<option value="">Which is your favourite type of Foods</option>
							<option value="12">Chinese Recipes</option>
							<option value="11">Turkey Recipes</option>
							<option value="10">French Recipes</option>
							<option value="13">Italian Recipes</option>
						</select>
						</ul>
            <br>
						<br>
						<br>
						<br>
            <ul>
						 <select id="role_search" name="role" required="true">
							<option value="">Which is your role</option>
							<option value="manager">Manager of a restaurant</option>
							<option value="customer">customer</option>
						</select>
						</ul>

						<div class="clearfix"> </div>
					</div>
					<input type="submit" value="Sign Up">
				</form>
				<p>Already have an account?  <a href="login.html"> Login Now!</a></p>
			</div>
		</div>
	</div>
	<!-- //sign up-page -->
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
