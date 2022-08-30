<?php
    session_start();
    session_destroy();
    session_unset();
    $_SESSION["loggedIn"] = false;
    // Redirect naar login.php
    header('location: login.php');
?>
