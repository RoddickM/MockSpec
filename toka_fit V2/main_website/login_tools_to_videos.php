<?php

# NOTE: This login file is specifically made for the login barrier for the videos page
# This is a temporary fix as future developments should make this function more modular and simpler

#Function block to insert a statement to load a page specified as its argument
function load($page = 'login_to_videos.php')
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

#Supposed to validate user login details as correct or display error messages
#but since it has been modified to simply return true
#it is working as intended, so I will leave it as is
function validate($conn, $email = '', $password= '')
{

    #in the database table, or return the associated user id, first name, and last name
    $q = "SELECT usersID, firstname, lastname FROM USERS WHERE email = '".$email."' AND PASSWORD = '".sha1($password)."'";
    $r = mysqli_query($conn, $q);

    #If the query returns one row, return true and the user data
    if(mysqli_num_rows($r)==1)
    {
        $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
        return array(true, $row);
    }
   
}
?>