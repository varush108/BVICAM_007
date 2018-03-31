<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
session_start();
$_SESSION["logged_in"]=false;
header("location: home/index.html");
exit;
?>