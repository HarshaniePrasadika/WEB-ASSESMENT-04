<?php
// Start the PHP session
session_start();

// Check if the user is logged in (you can redirect to the login page if not)
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// Rest of your protected page code goes here
// ...
?>
