<!DOCTYPE HTML>
<html>
	<head>
		<title>Valley Resorts a Hotel and Restaurants</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Luxury Resorts  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);
			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<script src="js/jquery-1.8.3.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style4.css" />
		<script src="js/responsiveslides.min.js"></script>
		<script>
			$(function() {
				$("#slider").responsiveSlides({
					auto : true,
					nav : true,
					speed : 500,
					namespace : "callbacks",
					pager : true,
				});
			});

		</script>

		<!---- start-smoth-scrolling---->

		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop : $(this.hash).offset().top
					}, 1200);
				});
			});
		</script>
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
				$().UItoTop({
					easingType : 'easeOutQuart'
				});
			});
		</script>
		<!---End-smoth-scrolling---->
		<link rel="stylesheet" href="css/swipebox.css">
		<script src="js/jquery.swipebox.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
	</head>
	<body>
		<div class="header" id="home">
			<div class="header-top">
				<div class="container">
					<div class="logo">
						<a href="index.html">Valley <span>resorts</span></a>
					</div>
					<div class="top-menu">
						<span class="menu"> </span>

						<ul>
							<nav class="cl-effect-3">
								<li>
									<a href="#home" class="active scroll">home</a>
								</li>
								<li>
									<a href="#facility" class="scroll">facility</a>
								</li>
								<li>
									<a href="#Reservation" class="scroll">reservation</a>
								</li>
								<li>
									<a href="#About" class="scroll">about</a>
								</li>

								<li>
									<a href="#contact" class="scroll">Contact Us</a>
								</li>
							</nav>
						</ul>
					</div>
					<!--script-nav-->
					<script>
						$("span.menu").click(function() {
							$(".top-menu ul").slideToggle("slow", function() {
							});
						});
					</script>

					<div class="clearfix"></div>
				</div>
			</div>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="slider-info">
								<img src="images/baner.jpg" class="img-responsive" alt="">

							</div>
						</li>
						<li>
							<div class="slider-info">
								<img src="images/banner1.jpg" class="img-responsive" alt="">

							</div>
						</li>

					</ul>
				</div>
			</section>
			<!-- FlexSlider -->
			<script defer src="js/jquery.flexslider.js"></script>
			<script type="text/javascript">
				$(function() {
					SyntaxHighlighter.all();
				});
				$(window).load(function() {
					$('.flexslider').flexslider({
						animation : "slide",
						start : function(slider) {
							$('body').removeClass('loading');
						}
					});
				});
			</script>
			<!-- FlexSlider -->
			<!-- slider -->
		</div>
		<div class="content">
			<div class="facility-section" id="facility">
				<div class="container">
					<h3>facility</h3>
					<div class="facility-grids">
						<div class="col-lg-4 facility-grid">
							<img src="images/free-wifi.jpg">
							<h4>Free Wifi</h4>
							<p>
								Free Wifi 24 Hours with high-speed connection in all rooms.
							</p>
						</div>
						<div class="col-lg-4 facility-grid">
							<img src="images/fasilitas2.JPG">
							<h4>Traditional Restaurant</h4>
							<p>
								This restaurant has traditional foods and traditional beverages from Indonesia. And it has a traditional style and ambience.
							</p>
						</div>
						<div class="col-lg-4 facility-grid">
							<img src="images/fasilitas3.jpg">
							<h4>24-hour Reception</h4>
							<p>
								We are ready to welcome you at any time. And we are ready to help you anytime. Call center center 24-hours.
							</p>
						</div>
						<div class="col-lg-4 facility-grid">
							<img src="images/souvenir-shop.jpg">
							<h4>Souvenir Shop</h4>
							<p>
								We have a beautiful collection of Indonesia souvenirs for you as memento. There are many souvenirs that became the hallmark .
							</p>
						</div>
						<div class="col-lg-4 facility-grid">
							<img src="images/fasilitas5.jpg">
							<h4>Swimming Pool</h4>
							<p>
								Enjoy a rejuvenating swim in the azure depths of our swimming pool. Or you could just choose to sit by the pool and read a book.
							</p>
						</div>
						<div class="col-lg-4 facility-grid">
							<img src="images/page1_img4.jpg">
							<h4>Restaurant Modern</h4>
							<p>
								This restaurant has many delicious foods and beverages from all over the world.
							</p>
						</div>
						<div class="clearfix"></div>
					</div>

				</div>
			</div>

			<div class="contact-section" id="contact">
				<div class="container">
					<h3>Contact Us</h3>
					<div class="contact-grid">
						<div class="col-md-6 contactdetails-grid">
							<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
								<h4>contact form</h4>

								<h5>name <span>*</span></h5>
								<input type="text" name="name" required="required">

								<h5>email address <span>*</span></h5>
								<input type="email" name="email" required="required">

								<h5>message <span>*</span></h5>
								<textarea name="message" required="required"> </textarea>
								<input type="submit"  value="send" name="send" class="btn btn-info btn-lg" />

							</form>
						</div>

						<div class="clearfix"></div>
					</div>

				</div>
			</div>
		</div>

		<script type="text/javascript">
			/*
			 * footer ditambahi
			 alamat
			 ikon sosmed
			 data hotel (alamat , phone , email)
			 logo perusahaan
			 */
		</script>

		<div class="footer-section">
			<div class="container">
				<div class="footer-top">
					<div class="social-icons">
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
					</div>
				</div>
				<div class="footer-bottom" id="About">
					<p>
						Copyright &copy;2015  All rights  Reserved | Design by Terserah
					</p>
				</div>
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

						$().UItoTop({
							easingType : 'easeOutQuart'
						});

					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>
	</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$to = "manager@valleyresot.com";
	$subject = "Complaint";
	$pesan = $_POST["message"];
	$from = "From : anonymous@mail.com";
	mail($to, $subject, $message);
	//	mail($to, $subject, $message)
}
?>