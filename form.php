<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['subject'];
    $msg = $_POST['message'];
    
    $all = array($name, $email, $text, $msg);

    for ($i = 0; i < count($all); $i++) {
        echo $all[$i];
    }
?>