<?php
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password are correct
    if ($username === 'bn' && $password === '123') {
        // If correct, store the username in a session variable
        $_SESSION['username'] = $username;
        $_SESSION['logdin'] = true;
        // Redirect to the secure page
        header('Location: index2.php');
        exit;
    } else {
        // If incorrect, show an error message
        $error = 'Invalid username or password.';
    }
}
include ("includes/login.php");
