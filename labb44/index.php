<?php
date_default_timezone_set('Europe/Stockholm');
new DateTime('now');
include("class/guest_book.php");
if (isset($_POST['bt'])) {
    $results = new guest_book($_POST['name'], $_POST['massage'], date("Y-m-d h:i:s"));
    file_put_contents("text_file/output.txt",$results->add_comment($results));
}
if (isset( $_POST['delPost'] )) {
    //Tar bort inlägg beroende på valt index
    $remove = new guest_book("","","");
    $remove->remove_comment($_POST["delPost"]);
}

include("includes/header.php");
include("includes/comment.php");
include("includes/display_comment.php");
include("includes/footer.php");
