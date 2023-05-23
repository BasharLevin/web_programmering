<?php
function colect_data()
{

    $date = date('d-m-Y-H-i-s');
    $friday = " -Äntligen fredag";
    if (date("l") == "Friday") {
        return $date . " " . $friday;
    }
    return $date;
}
?>
<body>
<link rel="stylesheet" href="styles.css">
<h1> Info </h1>
<h2>Today's Date is: <?php print colect_data()?></h2>
<h3>Your IP Address is: <?php echo $_SERVER['REMOTE_ADDR']; ?></h3>
<h4>The Filename is: <?php echo basename($_SERVER['PHP_SELF']); ?></h4>
<h5>Your User-Agent String is: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></h5>

</body>