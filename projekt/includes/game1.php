<?php
session_start();
if (!isset($_SESSION['logdin']) || $_SESSION['logdin'] !== true) {
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    background-color: darkseagreen;
        }
    </style>
</head>
<body>
<canvas id="canvas" width="600" height="400"></canvas>
<script src="game1.js"></script>
</body>
</html>