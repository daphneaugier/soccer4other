<?php
$to      = 'soccer4other@gmail.com';
$subject = "[Soccer4Other] Mail de " .$_POST['email'];
$message = $_POST['message'];
$headers = array(
    'From' => $_POST['email'],
    'Reply-To' => $_POST['email'],
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);


header("Location:https://www.soccer4other.com");