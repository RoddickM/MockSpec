<!-- File is placed outside the main website folder for security reasons and make sure users does not access the database unauthorised -->
<?php
   
    $servername = "localhost"; 
    $username = "root"; 
    // Password will be added to the field below 
    $password = "";
    $database = "toka_db";
   
     // Create a connection 
     $conn = mysqli_connect($servername, 
         $username, $password, $database);
   
    // Code written below is a step taken
    // to check that our Database is 
    // connected properly or not. If our 
    // Database is properly connected we
    // can remove this part from the code 
    // or we can simply make it a comment 
    // for future reference.
   
    if($conn) {
        echo ""; 
    } 
    else {
        die("Error". mysqli_connect_error()); 
    } 
?>