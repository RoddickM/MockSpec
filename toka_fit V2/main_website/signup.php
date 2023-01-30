<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>
		<link href="styles/signup.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<!-- PHP code to include navigation bar -->
		<?php include('includes/navbar.html') ?>

		<!-- div class for sign up "box" -->
		<div class="signup-box">
			<!-- Title and subtitle of signup box -->
			<h1>Sign Up</h1>
			<h4>It's free and only takes a minute</h4>
			<!-- Form for user to input data -->
			<!-- the form will have its data sent to the php in the same page -->
			<form action="signup.php" method="POST" autocomplete="off">
				<!-- first name input (text) -->
				<label>First Name</label>
				<input type="text" placeholder="e.g., John" name="f-name" id="f-name" required />
				<!-- last name input (text) -->
				<label>Last Name</label>
				<input type="text" placeholder="e.g., Doe" name="l-name" id="l-name" required />
				<!-- email input (email) -->
				<label>Email</label>
				<input type="email" placeholder="e.g, johndoe1999@fmail.com" name="email" id="email" required />
				<!-- post code input (text) -->
				<label>Post Code</label>
				<input type="text" placeholder="e.g., BH1 6HJ" name="p-code" id="p-code" required />
				<!-- phone number input (text) -->
				<label>Phone No</label>
				<input type="text" placeholder="e.g., 07234456234" name="pho-num" id="pho-num" required />
				<!-- password input (password) -->
				<label>Password</label>
				<input type="password" placeholder="8 charcacters minimum" name="password" id="password" required />
				<!-- submit button -->
				<button class="submit" type="submit" value="Submit" />JOIN NOW</button>
			<closeform></closeform>
			</form>
			<p>
				By clicking the Sign Up button,you agree to our <br />
				<a href="https://optimisedpersonalwellness.co.uk/terms-conditions-privacy/">Terms and Condition</a> and <a href="https://optimisedpersonalwellness.co.uk/terms-conditions-privacy/">Policy Privacy</a>
			</p>
		</div>
		<!-- Already have an account? link -->
		<p class="para-2">
		Already have an account? <a href="login.php">Login here</a>
		</p>

		<!-- PHP code to send data to the database -->
		<?php
		# Check if the form has been submitted
		if($_SERVER["REQUEST_METHOD"] == "POST") {

			# Include config file
			require_once "../config.php";

			# Define variables and initialize values from the form
			$first_name =  $_POST['f-name'];
			$last_name = $_POST['l-name'];
			$email = $_POST['email'];
			$phone_num =  $_POST['pho-num'];
			$post_code = $_POST['p-code'];
			$password = $_POST['password'];

			# Prepare an insert statement and insert values into the database
			# Password is hashed using SHA1
			$sql = "INSERT INTO USERS (firstname, lastname, email, phone_no, post_code, password) 
					VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$phone_num."', '".$post_code."', '".sha1($password)."')";
		
			# Execute the query
			$result = mysqli_query($conn, $sql);

		}
		?>

	</body>
</html>
