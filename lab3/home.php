<?php session_start();
if (!isset($_SESSION['logdin']) || $_SESSION['logdin'] !== true){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
</head>
<h1>Welcome to this website, this is the home page</h1>
<body>
<link rel="stylesheet" href="styles.css">
<nav>
    <ul>
    <li><a href="info.php">Q/A</a></li>
    <li><a href="info2.php">Info</a></li>
</ul>
    </nav>
</body>
<footer id = "footer_id">
    <div id="footer_div1">
        <p>Creator: Bashar Levin.</p>
        <a href="mailto: bashar98ab@gmail.com"> bashar98ab@gmail.com </a>
    </div>
    <div id="footer_div2">
        <p>Contact us @ 073-xxxxxxx</p>
        <p>From: 9:00  - 16:00 </p>
    </div>
    <a href="home.php"> Home</a>
    <a href="logout.php">Logout</a>

</footer>
</html>