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
<link rel="stylesheet" href="CSS/styles.css" type="text/css">
<form method="post" id = "login_section">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>

    <input type="submit" id = "login" name="login" value="Login">
</form>
</body>
</html>