<?php
	if(isset($_GET['error'])){
		echo "<script>alert('".$_GET['error']."')</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Interior Design | Sign Up</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="vendors/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalized.css">
	<link rel="stylesheet" href="css/form.css">
</head>
<body>
	<div class="sign-company-logo">
		<img src="vendors/images/logo.png" alt="">
	</div>
	<div class="signup-form-container">
		<h2>Sign Up</h2>
		<form action="signup.php" method="post">
			<input type="email" name="email" placeholder="Email" id ="email" required>
			<input type="text" name="username" placeholder="Username" id="name" required>
			<input type="password" name="password" placeholder="Password" required id="password">
			<input type="password" name="c_password" placeholder="Confirm Password" required id="confirm-password" >
			<a href="#" name="login" class="login" id="signin">Verify</a>
			<button href="signup.php" type="submit" id = "submit" class="login">Sign Up</button>
		</form>
	</div>
	<div class="toaster">
		<div class="icon-outter clearfix">
			<div class="icon-close pull-right">
				<i class="fa fa-times"></i>
			</div>
			<div class="message">

			</div>
		</div>
	</div>
	<script src="scripts/jquery/jQuery-3.3.1.min.js"></script>
	<script src="scripts/forms.js"></script>
</body>
</html>
