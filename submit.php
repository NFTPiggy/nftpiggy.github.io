<?php
    // opens a new file to write
    $data_file = fopen("text.txt", "r");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $text_to_write = $name . " " . $email . " " . $message;

    // write data to server side file
    fwrite($data_file, $text_to_write);
    fclose($data_file);
?>