<?php
    // print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if(trim($email) == '')
        $error = 'Введите ваш email';
    else if(trim($message) == '')
        $error = 'Введите сообщение';
    else if(strlen($message) < 3)
        $error = 'Пожалуйста введите сообщение больше 3 символов';

    if($error != ''){
        echo $error;
        exit;
    }


    $subject = "=?utf-8?B?".base64_encode("Пример сообщение")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail('merzhan0101@mail.ru', $subject, $message, $headers);

    header('Location: /about.php');
?>