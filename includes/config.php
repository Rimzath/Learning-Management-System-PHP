<?php
    session_start();
    $host ="localhost";
    $user ="root";
    $password="";
    $db = "cs-3101";  // please provide the Database Name here

    $db_conn = mysqli_connect($host,$user,$password,$db);

    if(!$db_conn){   // Checking wheather the data base is connected succesfully
        die("Connection Error I'm in login_check.php");
    }
?>