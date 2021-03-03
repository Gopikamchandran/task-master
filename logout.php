<?php
    session_start();
    // Destroy session
   unset($_SESSION["user"]);
   
        // Redirecting To Home Page
        header("Location: sampleref.php");
   
?>