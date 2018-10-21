<?php
 if(isset($_GET['error'])){
	 echo "<script>alert('".$_GET['error']."')</script>";
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Interior Design | Log In</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="vendors/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalized.css">
	<link rel="stylesheet" href="css/form.css">

		<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="company-logo">
		<img src="vendors/images/logo.png" alt="">
	</div>
	<div class="login-form-container">
		<h2>Log In</h2>
		<form action="login.php" method="post">
			<input type="text" placeholder="Username" name ="username" required >
			<input type="password" placeholder="Password" name="password" required>

			<button type ="submit" href="contact.php" name="submit" class="btn-submit">Log In</button>
			<label for="">Remeber Me
				<input type="checkbox">
			</label>
			<button type ="submit" href="" name="forgot" class="btn-submit">Forgot ?</button>
		</form>
	</div>
	<div class="toaster">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cumque blanditiis, sequi tenetur laudantium eaque sit iure accusantium voluptate, doloribus labore magnam qui ab deleniti dolorum fuga adipisci incidunt tempore!
	</div>
</body>
</html>
