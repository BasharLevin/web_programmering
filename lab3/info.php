<?php session_start();
if (!isset($_SESSION['logdin']) || $_SESSION['logdin'] !== true){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>info</title>
</head>
<body>
<link rel="stylesheet" href="styles.css">
<div id="divQA">
    <h2>Q/A</h2>
    <ul>
        <li>Har du tidigare erfarenhet av utveckling med PHP?</li>
        <p>Nej</p>
        <li>Hur har du valt att strukturera upp dina filer och kataloger?</li>
        <p>Med katalogen "includes" som i exemplet från <a href="https://elearn20.miun.se/moodle/pluginfile.php/1068127/mod_resource/content/29/moment_3_teori.htm">Teori och läsanvisningar</a></p>
        <li>Har du följt guiden, eller skapat på egen hand?</li>
        <p>Följde guiden</p>
        <li>Har du gjort några förbättringar eller vidareutvecklingar av guiden (om du följt denna)?</li>
        <p>Nej</p>
        <li>Vilken utvecklingsmiljö har du använt för uppgiften (Editor, webbserver etcetera)?</li>
        <p>PHP storm</p>
        <li>Har något varit svårt med denna uppgift?</li>
        <p>att inte ha tillgång när man loggar ut</p>
    </ul>
</div>


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