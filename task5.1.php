<?php

require 'vendor/autoload.php';

$message = "Сообщение от Данила Балуева";

$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('examle.waisee@bk.ru')
    ->setPassword('loftschool123')
;
$mailer = new Swift_Mailer($transport);

$email = (new Swift_Message())
    ->setSubject("Сообщение")
    ->setFrom(['examle.waisee@bk.ru' => 'Danil Baluev'])
    ->setTo("examle.waisee@bk.ru")
    ->setBody("$message")
;
if($mailer->send($email, $errors)){
    echo "Сообщение отправлено";
}else{
    print_r($errors);
}