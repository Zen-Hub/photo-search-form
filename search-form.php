<?php
// Получение значений полей из данных формы
$format1 = $_POST['format1'];
$quantity1 = $_POST['quantity1'];
$format2 = $_POST['format2'];
$quantity2 = $_POST['quantity2'];
$generalFormat = $_POST['generalFormat'];
$generalQuantity = $_POST['generalQuantity'];
$photoNumbers = $_POST['photoNumbers'];
$gardenNumber = $_POST['gardenNumber'];
$email = $_POST['email'];

// Формирование текста письма
$message = "Первый формат фото: $format1 \nКоличество фото в печатном виде: $quantity1 \n\n";
$message .= "Второй формат фото: $format2 \nКоличество фото в печатном виде: $quantity2 \n\n";
$message .= "Общее фото: $generalFormat \nКоличество фото в печатном виде: $generalQuantity \n\n";
$message .= "Только номера фото в электронном виде: $photoNumbers \n\n";
$message .= "Номер сада: $gardenNumber \n";
$message .= "Почта: $email";

$to = 'your-email@yandex.com'; // Замените на свой адрес электронной почты
$subject = 'Новые данные фото';
$headers = 'From: ваш-электронный-адрес@домен.com' . "\r\n" .
    'Reply-To: ваш-электронный-адрес@домен.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Отправка email
if (mail($to, $subject, $message, $headers)) {
  echo 'Email успешно отправлен! 💌';
} else {
  echo 'Произошла ошибка при отправке email. 😞';
}
?>