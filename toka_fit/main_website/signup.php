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
		<form>
			<label>First Name</label>
			<input type="text" placeholder="e.g., John" />
			<label>Last Name</label>
			<input type="text" placeholder="e.g., Doe" />
			<label>Email</label>
			<input type="email" placeholder="e.g, johndoe1999@fmail.com" />
			<label>Post Code</label>
			<input type="text" placeholder="e.g., BH1 6HJ" />
			<label>Password</label>
			<input type="password" placeholder="8 charcacters minimum" />
			<label>Confirm Password</label>
			<input type="password" />
			<input type="button" value="Submit" />
		<closeform></closeform></form>
		<p>
			By clicking the Sign Up button,you agree to our <br />
			<a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
		</p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.html">Login here</a>
    </p>
  </body>
</html>
