<?php
session_start();
if (!isset($_SESSION['logdin']) || $_SESSION['logdin'] !== true) {
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="Sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sten sax påse </title>
    <style>
body {
    background-color: burlywood;
        }
    </style>
</head>

<body>
<h2> Sten, Sax, Påse</h2>
<p> Välje</p>
<div class="bottom-left">1 Sten, 2 Sax, 3 Påse</div>
<script src="game3.js"></script>
<img src="rock_paper_scissors__2x.png">
</body>
</html>