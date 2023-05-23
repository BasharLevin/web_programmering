<?php
session_start();
if (!isset($_SESSION['logdin']) || $_SESSION['logdin'] !== true){
    header("location: index.php");
}
include ("includes/header.php");
include ("includes/main.html");
include ("includes/footer2.php");
