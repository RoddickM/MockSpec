<?php
    #Allow access to session data
    session_start();

    #Set the page title and include a page header
    include('includes/navbar.html');

    #Clear existing session variables
    $_SESSION = array();

    #End the session
    session_destroy();

    #Confirmation message and link back to Login page
    echo'<h1>Goodbye!</h1>
    <p>You have now logged out.</p> 
    <p><a href = "login.php">Login</a></p>';

    #Include the footer
    include('includes/footer.html');
?>