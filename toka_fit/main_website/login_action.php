<?php
#Test to see if the login form has been submitted
if($_SERVER['REQUEST_METHOD']=='POST')
{
    #Opens the database connection
    require_once "../config.php";
    #Create a connection to ensure login tools are available
    require_once "login_tools.php";

    #Ensure login was successful and get associated user details
    #of id, first name and last name
    list($check, $data) = validate($conn, $_POST['email'], $_POST['password']);

    #Set the user details as session data and load a homepage, or assign
    #error message
    if($check)
    {
        session_start();
        $_SESSION['usersID'] = $data['usersID'];
        $_SESSION['first_name'] = $data['firstname'];
        $_SESSION['last_name'] = $data['lastname'];

        load('home.php');
    }
    else
    {
        $errors = $data;
    }
    
    #Close the database connection
    mysqli_close($conn);
}
#Continue the display of the login page when the login attempt fails
include('login.php');
?>