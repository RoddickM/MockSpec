<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link href="styles/signup.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<!-- NOTE: This login page is specifically made for the login barrier for the videos page -->
		<!-- This is a temporary fix as future developments should make this function more modular and simpler -->


		<!-- PHP code to include navigation bar -->
		<?php include('includes/navbar.html') ?>
		<!-- login box div -->
		<div class="login-box-videos">
		<!-- Login title -->
		<h1>Login</h1>
		<h3>Please Login to Access Videos</h3>
		<!-- Login form that will send data to login_action_to_videos.php file -->
		<form action="login_action_to_videos.php" method="POST">
			<!-- email input (email) -->
			<label>Email</label>
			<input type="email" name="email" placeholder="e.g, johndoe1999@fmail.com" required/>
			<!-- password input (password) -->
			<label>Password</label>
			<input type="password" name="password" required/>
			<!-- submit button -->
			<button class="submit" type="submit" value="Submit"/>LOG IN</button>
		<closeform></closeform></form>
		</div>
		<!-- link to signup page -->
		<p class="para-2">
		Not have an account? <a href="signup.php">Sign Up Here</a>
		</p>
	</body>
</html>
