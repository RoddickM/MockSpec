<?php

#Function block to insert a statement to load a page specified as its argument
function load($page = 'login.php')
{
    #A URL string of protocol, current domain and directory
    $url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);

    #Statements to remove any trailing slashes from the URL string,
    #then append a forward slash and the specified page argument
    $url = rtrim($url, '/\\');
    $url.= '/'.$page;

    #Load the specific page, then quite the script
    header("Location: $url");
    exit();
}

#Validate user login details as correct or display error messages
function validate($conn, $email = '')
{

    #Store an error message if the email and password are not found
    #in the database table, or return the associated user id, first name,

    $q = "SELECT usersID, firstname, lastname FROM USERS WHERE email = '".$email."'";
    $r = mysqli_query($conn, $q);

    if(mysqli_num_rows($r)==1)
    {
        $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
        return array(true, $row);
    }
   
}
?>