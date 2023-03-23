<section id="Display_comment">
    <h4>Gästboksinlägg</h4>
    <?php
    if(file_exists("text_file/output.txt")){
    $array = unserialize(file_get_contents("text_file/output.txt"));
}
else{
    $array = array();
}

if(!empty($array)) {
    $my_array=array_reverse($array);
    foreach ($my_array as $key => $value) {
        print_r(  $value->getUserName() . "<br>" . $value->getComment() . "<br>");
        print_r("Submitted " . $value->getDate());
        echo '<form method="POST"><input type="hidden" name="delPost" value="' . $key . '"><input type="submit" name="del" id="del" value="Delete"></form>';
        echo "<br>";
        echo "<hr>";
    }
}else{
    echo "No comments";
}
?>


</section>
