<?php
  session_start();
  $username = $_SESSION['Username'];
  $con = mysqli_connect("localhost", "root", "1234");
  mysqli_select_db($con,"foodrecommendation");
  $query = mysqli_query($con, "SELECT GREATEST(prefer_french,prefer_turkey,prefer_china,prefer_italy) FROM registration WHERE username='".$username."' ");
  $row= mysqli_fetch_row($query);
  //0=Chinese 1=Turkey 2=French 3=Italian
  if($row[0]%10 == 2){
    $link1 = "./cafes/chinese/1.html";
    $link2 = "./cafes/chinese/2.html";
    $link3 = "./cafes/chinese/3.html";
    $link4 = "./cafes/chinese/4.html";
  }else if($row[0]%10 == 1){
    $link1 = "./cafes/turkey/1.html";
    $link2 = "./cafes/turkey/2.html";
    $link3 = "./cafes/turkey/3.html";
    $link4 = "./cafes/turkey/4.html";
  }else if($row[0]%10 == 0){
    $link1 = "./cafes/french/1.html";
    $link2 = "./cafes/french/2.html";
    $link3 = "./cafes/french/3.html";
    $link4 = "./cafes/french/4.html";
  }else if($row[0]%10 == 3){
    $link1 = "./cafes/italy/1.html";
    $link2 = "./cafes/italy/2.html";
    $link3 = "./cafes/italy/3.html";
    $link4 = "./cafes/italy/4.html";
  }

?>
<!DOCTYPE html>
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
								<i class="fa fa-sign-in" aria-hidden="true"> Welcome  <?=$username?> !</i>
							</li>
              <li class="head-dpdn">
								<a href="login.php"><i class="fa fa-sign- out" aria-hidden="true"> Sign out </i></a>
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
								<li><a href="index3.html" class="active">Home</a></li>
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
				<h2>Delicious food from the World<br> <span>Best recommendation For you.</span></h2> <br><br><br><br>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //deals -->
	<!-- dishes -->
	<div class="w3agile-spldishes">
		<div class="container">
			<h3 class="w3ls-title">Special recommendation</h3>
			<div class="spldishes-agileinfo">
				<div class="col-md-3 spldishes-w3left">
					<h5 class="w3ltitle">Recommendations</h5>
					<p>Best food you can ever have in windsor，believe our recommendations.</p>
				</div>
				<div class="col-md-9 spldishes-grids">
					<!-- Owl-Carousel -->
					<div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
						<a href="<?=$link1?>" class="item g1">
							<img class="lazyOwl" src="images/g1.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="<?=$link2?>" class="item g1">
							<img class="lazyOwl" src="images/g2.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="<?=$link3?>" class="item g1">
							<img class="lazyOwl" src="images/g3.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="<?=$link4?>" class="item g1">
							<img class="lazyOwl" src="images/g4.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="<?=$link3?>" class="item g1">
							<img class="lazyOwl" src="images/g5.jpg" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="<?=$link4?>" class="item g1">
							<img class="lazyOwl" src="images/g1.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="<?=$link2?>" class="item g1">
							<img class="lazyOwl" src="images/g2.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="<?=$link1?>" class="item g1">
							<img class="lazyOwl" src="images/g3.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //dishes -->
  <div class="banner">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header"><!-- header-one -->
				<div class="container">
					<div class="w3ls-header-left">
						<p>Don't like our recommendation?</p>
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
