<?php

// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();
$_SESSION['logdin'] = false;

// Redirect to the login page
header("Location: index.php");
exit;
