<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="styles/signup.css" type="text/css" rel="stylesheet">
  </head>
  <body>
  	<?php include('includes/navbar.html') ?>
	<div class="signup-box">
		<h1>Sign Up</h1>
		<h4>It's free and only takes a minute</h4>
		<form action="signup.php" method="POST" autocomplete="off">
			<label>First Name</label>
			<input type="text" placeholder="e.g., John" name="f-name" id="f-name" required />
			<label>Last Name</label>
			<input type="text" placeholder="e.g., Doe" name="l-name" id="l-name" required />
			<label>Email</label>
			<input type="email" placeholder="e.g, johndoe1999@fmail.com" name="email" id="email" required />
			<label>Post Code</label>
			<input type="text" placeholder="e.g., BH1 6HJ" name="p-code" id="p-code" required />
			<label>Phone No</label>
			<input type="text" placeholder="e.g., 07234456234" name="pho-num" id="pho-num" required />
			<label>Password</label>
			<input type="password" placeholder="8 charcacters minimum" name="password" id="password" required />
			<button class="submit" type="submit" value="Submit" />JOIN NOW</button>
		<closeform></closeform>
		</form>
		<p>
			By clicking the Sign Up button,you agree to our <br />
			<a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
		</p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>

	<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		require_once "../config.php";

		$first_name =  $_POST['f-name'];
    	$last_name = $_POST['l-name'];
		$email = $_POST['email'];
    	$phone_num =  $_POST['pho-num'];
    	$post_code = $_POST['p-code'];
		$password = $_POST['password'];
		
		$sql = "INSERT INTO USERS (firstname, lastname, email, phone_no, post_code, password) 
				VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$phone_num."', '".$post_code."', '".sha1($password)."')";
    
        $result = mysqli_query($conn, $sql);

	}

	?>

  </body>
</html>
