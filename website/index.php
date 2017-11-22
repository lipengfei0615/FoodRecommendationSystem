<?php
session_start();


$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '1234';          // mysql用户名密码
$dbname = "foodrecommendation";

if(isset($_SESSION['Username']) && !empty($_SESSION['Username'])){
$username = $_SESSION['Username'];

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(! $conn )
{
    die('Could not connect: ' . mysqli_error());
}



if($_POST['agileinfo_search'] == "100"){

    $url = "./index2.html";
    header( "Location: $url");
}elseif ($_POST['agileinfo_search'] == "1"){
    mysqli_query($conn,"UPDATE registration SET prefer_china=prefer_china+10 WHERE username='".$username."'");
    $url = "./cmain.html";
    header( "location: $url" );
}elseif ($_POST['agileinfo_search'] == "2"){
    mysqli_query($conn,"UPDATE registration SET prefer_turkey=prefer_turkey+10 WHERE username='".$username."'");
    $url = "./tmain.html";
    header( "location: $url" );
}elseif ($_POST['agileinfo_search'] == "3"){
    mysqli_query($conn,"UPDATE registration SET prefer_french=prefer_french+10 WHERE username='".$username."'");
    $url = "./fmain.html";
    header( "location: $url" );
}elseif ($_POST['agileinfo_search'] == "4"){
    mysqli_query($conn,"UPDATE registration SET prefer_italy=prefer_italy+10 WHERE username='".$username."'");
    $url = "./imain.html";
    header( "location: $url" );
}
}else{
  header ("location:login.php");
}
?>
<!DOCTYPE html>
<!-- Cookies and Sessions -->
<html lang="en">
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript">
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
</script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
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
	<div class="banner">
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
								<i class="fa fa-phone" aria-hidden="true">Call us: (+1)2269613354</i>
							</li>
							<li class="head-dpdn">
								<a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
							</li>
							<li class="head-dpdn">
								<a href="signup.html"><i class="fa fa-user-plus" aria-hidden="true"></i> sign up</a>
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
								<li><a href="index2.html" class="active">Home</a></li>
								<!-- Mega Menu -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Choice <b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Menu</h6>
													<li><a href="mainpage.html">ALL Recipes</a></li>
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
				<h2>Delicious food from the World<br> <span>Best recommendation For you.</span> <br><span>Believe our recommendation good for you</span> </h2>
				<div class="agileits_search">
						<form name="indexform" method ="POST" action="index.php">
							<select id="search" name="agileinfo_search" required="">
							<option value="100">Popular Foods</option>
							<option value="1">Chinese Recipes</option>
							<option value="2">Turkey Recipes</option>
							<option value="3">French Recipes</option>
							<option value="4">Italian Recipes</option>
						</select>
						<input type="submit" value="Search"> <br>
						<br>

					</form>
				</div>
			</div>
		</div>
	</div>
    <br>
	<br>
	<br>
	<!-- //deals -->
	<!-- dishes -->
	<div class="header">
			<div class="w3ls-header"><!-- header-one -->
				<div class="container">
					<div class="w3ls-header-left">
						<p>Go back to main menu</p>
					</div>
					<div class="w3ls-header-right">
						<ul>
							<li class="head-dpdn">
								<a href="mainpage.html"><i class="fa fa-user-plus" aria-hidden="true"></i>Go back to main menu</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	<!-- //dishes -->

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
	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 3,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->
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
