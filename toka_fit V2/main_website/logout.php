<?php
    #Allow access to session data
    session_start();

    #Clear existing session variables
    $_SESSION = array();

    #End the session
    session_destroy();

    #Redirect to home page
    header("Location: home.php");
    exit();
    
?>