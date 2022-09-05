<?php
 $name = $_POST['name']
 $surname = $_POST['surname']
 $subject = $_POST['subject']
 $message = $_POST['message']

$name = htmlspecialchars($name);
$surname = htmlspecialchars($surname);
$subject = htmlspecialchars($subject);
$message = htmlspecialchars($message);

$name = urldecode($name);
$surname = urldecode($surname);
$subject = urldecode($subject);
$message = urldecode($message);

$name = trim($name);
$surname = trim($surname);
$subject = trim($subject);
$message = trim($message);

if (mail("sergey-hudyakow@mail.ru",
         "Новое письмо с сайта",
         "Имя: ".$name. "\n".
         "Фамилия: ".$surname. "\n".
         "Email: ".$subject. "\n".
         "Сообщение: ".$message,
         "From: no-reply@mydomain.ru \r\n")
) {
    echo ('письмо отправлено');
} else {
    echo ('ошибка')
}

?>