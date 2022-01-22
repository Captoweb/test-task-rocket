<?php

$name = trim($_POST['name']);
$phone = trim($_POST['tel']);
$message = trim($_POST['message']);

$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['tel']);
$message = htmlspecialchars($_POST['message']);
// var_dump($_POST); die;

// указываем адрес отправителя, можно указать адрес на домене Вашего сайта
$fromMail = 'rbru-metrika@yandex.ru';
$fromName = 'rbru-metrika@yandex.ru Форма';

// Сюда введите Ваш email
$emailTo = 'rbru-metrika@yandex.ru';
$subject = 'Форма обратной связи на php';
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

// тело письма
$body = "Форма тестового задания \n Имя: $name\nТелефон: $phone \nСообщение: $message";

// сообщение будет отправлено в случае, если поле с номером телефона не пустое
if (strlen($phone) > 0 && strlen($name) > 0 ) {
    $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
}
 // header("Location: ");

?>