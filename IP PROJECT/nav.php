<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

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
    						<li class="nav-items"><a href="index.php"> <i class="fa fa-home"></i> HOME</a></li>
    						<li class="nav-items"><a href="about.php"> <i class="fa fa-users"></i> ABOUT US</a></li>
    						<li class="nav-items"><a href="projects.php"> <i class="fa fa-th"></i> PROJECTS</a></li>
    						<li class="nav-items"><a href="contact1.php"> <i class="fa fa-envelope-square"></i> CONTACT US</a></li>
    						<!-- session will display it till here -->
    						<li class="nav-items" id="signup"><a href="signup_form.php" target="_blank"><i class="fa fa-user-plus"></i> SIGN UP</a></li>
    						<li class="nav-items" id="loggedin"><a href="login1.php" target="_blank"> <i class="fa fa-sign-in"></i> LOGIN IN</a></li>
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
  </body>
</html>
