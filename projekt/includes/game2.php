<?php


session_start();
if (!isset($_SESSION['logdin']) || $_SESSION['logdin'] !== true) {
    header("location: ../index.php");
}
    ?>
<!DOCTYPE html>
<html lang = "sv" >
<head >
    <meta charset = "UTF-8" >
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0" >
    <meta http - equiv = "X-UA-Compatible" content = "ie=edge" >
    <title > pong</title >
    <style >
    body {
        background - color: darkseagreen;
        }
    </style >
</head >
<body >
<canvas id = "canvas" ></canvas >
<script src = "game2.js" ></script >
</body >
</html>