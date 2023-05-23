<?php session_start();
if (!isset($_SESSION['logdin']) || $_SESSION['logdin'] !== true){
    header("location: index.php");
}
include("includes/header3.php");
include("includes/info2.php");
include("includes/footer.php");