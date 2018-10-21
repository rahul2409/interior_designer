
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Interior Design | Home</title>

	<link rel="stylesheet" href="vendors/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/normalized.css">

	<link rel="stylesheet" href="vendors/animate/animate.css">

	<link rel="stylesheet" href="vendors/owl/assets/owl.theme.int.min.css">

	<link rel="stylesheet" href="vendors/owl/assets/owl.carousel.min.css">


	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<!------NAV BAR STARTS ----->
	<div class="nav-container">
		<div class="nav-wrapper clearfix">
			<div class="nav-left pull-left">
				<img src="vendors/images/logo.png" alt="">
			</div>
			<div class="nav-right pull-right">
				<div class="nav-links-wrapper">
					<ul class="nav-links">
						<li class="nav-items"><a href="index.html"> <i class="fa fa-home"></i> HOME</a></li>
						<li class="nav-items"><a href="about.html"> <i class="fa fa-users"></i> ABOUT US</a></li>
						<li class="nav-items"><a href="projects.html"> <i class="fa fa-th"></i> PROJECTS</a></li>
						<li class="nav-items"><a href="contact.html"> <i class="fa fa-envelope-square"></i> CONTACT US</a></li>
						<!-- session will display it till here -->
						<li class="nav-items" id="signup"><a href="signup.html" target="_blank"><i class="fa fa-user-plus"></i> SIGN UP</a></li>
						<li class="nav-items" id="loggedin"><a href="login.html" target="_blank"> <i class="fa fa-sign-in"></i> LOGIN IN</a></li>
						<li class= "nav-items" id="after_login"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!----- NAV BAR ENDS ---->
<?php
	if(isset($_GET['username'])){
		session_start();
		$name = $_SESSION['username'];
		echo "<script>document.getElementById('signup').style.display = 'none';</script>";
		echo "<script>document.getElementById('loggedin').style.display = 'none';</script>";
		echo "<script>document.getElementById('after_login').innerHTML = 'Welcome, ".$name."';</script>";
	}
 ?>
<!----SHOWCASE SECTION ---->
	<div class="showcase owl-carousel">
		<div class="showcase-slide-1">
			<div class="showcase-text">
				<h2 class="showcase-title"><span class="gold-text">Green</span> Interior</h2>
				<p class="showcase-content">Lorem ipsum dolor sit amet,nam te agam soleat cetero his ad exerci quodsi sentiatae puetent bonorum ne.</p>
				<div class="navigation-links">
					<a href="#service-section" class="btn-gold" id="btn-gold">Our Service</a>

					<a href="contact.html" class="btn-transperent" id="btn-transperent">Get A Quote</a>
				</div>
			</div>
		</div>
		<div class="showcase-slide-2">
			<div class="showcase-text">
				<h2 class="showcase-title">Interior <span class="gold-text">Design</span></h2>
				<p class="showcase-content">Lorem ipsum dolor sit amet,nam te agam soleat cetero his ad exerci quodsi sentiatae puetent bonorum ne.</p>
				<div class="navigation-links">
					<a href="#service-section" class="btn-gold" id="btn-gold">Our Service</a>

					<a href="contact.html" class="btn-transperent" id="btn-transperent">Get A Quote</a>
				</div>
			</div>
		</div>
		<div class="showcase-slide-3">
			<div class="showcase-text">
				<h2 class="showcase-title">Your <span class="gold-text">Life Easier</span></h2>
				<p class="showcase-content">Lorem ipsum dolor sit amet,nam te agam soleat cetero his ad exerci quodsi sentiatae puetent bonorum ne.</p>
				<div class="navigation-links">
					<a href="#service-section" class="btn-gold" id="btn-gold">Our Service</a>

					<a href="contact.html" class="btn-transperent" id="btn-transperent">Get A Quote</a>
				</div>
			</div>
		</div>
	</div>
<!------SHOWCASE SECTION ENDS---->
<!------SERVICE SECTION----->
	<div class="service-section" id="service-section">
		<!----SERVICE SECTION HEADING START ---->
		<div class="section-heading">
			<div class="section-title">
				<h2>Our Services</h2>
				<hr class="underline">
			</div>
		</div>
		<!-----SERVICE SECTION HEADING END ---->
		<!-----SERVICE SECTION DESCRIPTION STARTS--->
		<div class="service-list clearfix">
			<div class="service-desc1 pull-left">
				<h2 class="service-desc-heading">
					<span class="gold-text">Commercial</span> Design
				</h2>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only.
				</p>
				<img src = "vendors/images/services/service1.jpg" class="service-desc-img1">
			</div>
			<div class="service-desc2 pull-left">
				<h2 class="service-desc-heading">
					<span class="gold-text">Office</span> Design
				</h2>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only.
				</p>
				<img src = "vendors/images/services/service2.jpg" class="service-desc-img2">
			</div>
			<div class="service-desc3 pull-left">
				<h2 class="service-desc-heading">
					<span class="gold-text">Residential</span> Design
				</h2>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only.
				</p>
				<img  src = "vendors/images/services/service3.jpg"class="service-desc-img3">
			</div>
		</div>
		<!----SERVICE SECTION DESCRIPTION ENDS----->
	</div>
<!------SERVICE SECTION ENDS----->
<!-----CONTACT US BUTTON AREA----->
	<div class="contact-us">
		<div class="contact-nav">
			<a href="contact.html" class="contact-link">Contact Us <i class="fa fa-arrow-right"></i></a>
		</div>
	</div>
<!-----CONTACT US BUTTON AREA ENDS----->
<!-----FOOTER ---->
	<div class="footer-outter">
		<div class="footer-inner clearfix">
			<div class="footer-col-1 pull-left">
				<img src="vendors/images/logo.png" alt="" class="footer-col-1-img">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
			</div>
			<div class="footer-col-2 pull-left">
				<h3 class="footer-list-item-heading">Latest News</h3>
				<ul class="footer-list">
					<li class="footer-list-item"><p>Lorem Ipsum is simply dummy text of the</p></li>
					<li class="footer-list-item"><p>Lorem Ipsum is simply dummy text of the</p></li>
					<li class="footer-list-item"><p>Lorem Ipsum is simply dummy text of the</p></li>
					<li class="footer-list-item"><p>Lorem Ipsum is simply dummy text of the</p></li>
					<li class="footer-list-item"><p>Lorem Ipsum is simply dummy text of the</p></li>
				</ul>
			</div>
			<div class="footer-col-3 pull-left">
				<h3 class="footer-list-item-heading">Contact Us</h3>
				<p class="company-address"> <i class="fa fa-map-marker gold-text"></i> 385 "SHUBHAM" NEW ADARSH COLONY Near MR4 Road, I/F Gajannan Park</p>
				<ul class="contact-details-list">
					<li class="contact-list-item"> <i class="fa fa-phone gold-text"></i> &#58;  <a href="">(208) 333 9296</a></li>
					<li class="contact-list-item"> <i class="fa fa-fax gold-text"></i> &#58; <a href="">(208) 333 9298</a></li>
					<li class="contact-list-item"> <i class="fa fa-envelope gold-text"></i> &#58; <a href="">contact@StudioUX.com</a></li>
					<li class="contact-list-item"> <i class="fa fa-globe gold-text"></i> &#58; <a href="">http://interior&amp;furniture.com</a></li>
				</ul>
			</div>
		</div>
	</div>
<!----FOOTER ENDS---->
<!-----COPYROGHT SECTION STARTS HERE---->
<div class="copy-right-section-container">
	<div class="copyright-section-container-inner clearfix">
		<div class="copyright-section-left pull-left">
			<p class="copy-right-text">&copy; - Students of D15</p>
		</div>
		<div class="copyright-section-right pull-right">
			<div class="copyright-links-wrapper">
				<ul class="copyright-list">
					<li class="copyright-list-items"><a href="" class="copyright-links"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li class="copyright-list-items"><a href="" class="copyright-links"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li class="copyright-list-items"><a href="" class="copyright-links"><i class="fa fa-rss fa-lg"></i></a></li>
					<li class="copyright-list-items"><a href="" class="copyright-links"><i class="fa fa-google-plus fa-lg"></i></a></li>
					<li class="copyright-list-items"><a href="" class="copyright-links"><i class="fa fa-skype fa-lg"></i></a></li>
					<li class="copyright-list-items"><a href="" class="copyright-links"><i class="fa fa-dribbble fa-lg"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!----COPYRIGHT SECTION ENDS HERE------>
	<script src="scripts/jquery/jQuery-3.3.1.min.js"></script>
	<script src="vendors/owl/owl.carousel.min.js"></script>
	<script src="vendors/wow/wow.min.js"></script>
	<script src="scripts/script.js"></script>
</body>
</html>
