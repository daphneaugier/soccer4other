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

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Démo envoi mail</title>
</head>
<body>
    <h1>Mail sent</h1>
</body>
</html>';

//header("Location:https://www.soccer4other.com");