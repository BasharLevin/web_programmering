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
        header('Location: home.php');
        exit;
    } else {
        // If incorrect, show an error message
        $error = 'Invalid username or password.';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Login Page</title>
</head>
<body>
<h1>Login Page</h1>
<?php if (isset($error)) { ?>
    <p><?php echo $error; ?></p>
<?php } ?>
<form method="post" id = "login_section">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>

    <input type="submit" id = "login" name="login" value="Login">
</form>
</body>
</html>