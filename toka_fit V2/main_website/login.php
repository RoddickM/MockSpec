<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="styles/signup.css" type="text/css" rel="stylesheet">
		<title>Login</title>
	</head>
	<body>
		<!-- PHP code to include navigation bar -->
		<?php include('includes/navbar.html') ?>
		<!-- login box div -->
		<div class="login-box">
			<!-- Login title -->
			<h1>Login</h1>
			<!-- Login form that will send data to login_action.php file -->
			<form action="login_action.php" method="POST">
				<!-- email input (email) -->
				<label>Email</label>
				<input type="email" name="email" placeholder="e.g, johndoe1999@fmail.com" required/>
				<!-- password input (password) -->
				<label>Password</label>
				<input type="password" name="password" required/>
				<!-- submit button -->
				<button class="submit" type="submit" value="Submit" />LOG IN</button>
				<closeform></closeform>
			</form>
		</div>
		<!-- link to signup page -->
		<p class="para-2">
			Not have an account? <a href="signup.php">Sign Up Here</a>
		</p>
	</body>
</html>
