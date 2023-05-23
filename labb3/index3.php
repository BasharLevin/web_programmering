<?php session_start();
if (!isset($_SESSION['logdin']) || $_SESSION['logdin'] !== true){
    header("location: index.php");
}

include ("includes/header2.php");
include ("includes/info.php");
include("includes/footer.php");