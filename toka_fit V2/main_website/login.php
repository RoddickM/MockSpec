<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="styles/signup.css" type="text/css" rel="stylesheet">
  </head>
  <body>
  	<?php include('includes/navbar.html') ?>
	<div class="login-box">
      <h1>Login</h1>
      <form action="login_action.php" method="POST">
        <label>Email</label>
        <input type="email" name="email" placeholder="e.g, johndoe1999@fmail.com" required/>
        <label>Password</label>
        <input type="password" name="password" required/>
        <button class="submit" type="submit" value="Submit" />LOG IN</button>
      <closeform></closeform></form>
    </div>
    <p class="para-2">
      Not have an account? <a href="signup.php">Sign Up Here</a>
    </p>
  </body>
</html>
