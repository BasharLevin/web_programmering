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
<body>
<link rel="stylesheet" href="styles.css">
<ul>
    <li><a href="index.php"> Inloggning</a></li>
    <li><a href="info.php">Q/A</a></li>
    <li><a href="info2.php">Contact</a></li>
</ul>
</body>
</html>