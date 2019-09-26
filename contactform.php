<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['mail'];
    $message = $_POST['message'];


    $mailTo = "soccer4other@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;



    mail($mailTo, $txt, $headers);
        header("Location: index.php?mailsend");

}