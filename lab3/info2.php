<?php session_start();
if (!isset($_SESSION['logdin']) || $_SESSION['logdin'] !== true){
    header("location: index.php");
}

function colect_data()
{     //en funktion som kollar om dagen är fridag

    $date = date('d-m-Y-H-i-s');
    $friday = " -Äntligen fredag";
    if (date("l") == "Friday") {
        return $date . " " . $friday;
    }
    return $date;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>info2</title>
</head>
<body>
<link rel="stylesheet" href="styles.css">
<h1> Info </h1>
<h2>Today's Date is: <?php print colect_data()?></h2>
<h3>Your IP Address is: <?php echo $_SERVER['REMOTE_ADDR']; ?></h3>
<h4>The Filename is: <?php echo basename($_SERVER['PHP_SELF']); ?></h4>
<h5>Your User-Agent String is: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></h5>

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