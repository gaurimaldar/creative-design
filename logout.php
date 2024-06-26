<?php
    session_start();
    // echo "Session Logout Success";
    // $_SESSION = array();
    $_SESSION["loggedin"] = false;
    header("location: index.php");
        session_destroy();
?>