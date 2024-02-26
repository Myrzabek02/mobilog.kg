<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $country = $_POST['country'];
    $region = $_POST['region'];
    
    
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);
    
  
    $to = "ваш_nabzhanovmyrzabek@gmail.com";
    $subject = "Новая Заявка на Курс Мобилографии";
    $message = "ФИО: $name\n";
    $message .= "Телефон: $phone\n";
    $message .= "Возраст: $age\n";
    $message .= "Страна: $country\n";
    $message .= "Регион: $region\n";
    
    $headers = "From: ваш_nabzhanovmyrzabek@gmail.com";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Ваша заявка успешно отправлена!";
    } else {
        echo "Произошла ошибка при отправке заявки.";
    }
}
?>