<?php
// подключаем конфиг
require_once "config.php";
// Подключение к базе данных
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));
// Создаем таблицу базы данных
$query ="CREATE Table IF NOT EXISTS ifora_data
(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    contact text NOT NULL,
    date date NOT NULL,
    time time NOT NULL
)";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
// Переменные с формы
$name = $_POST['name'];
$contact = $_POST['contact'];
$date = $_POST['date'];
$time = $_POST['time'];
// Почта администратора
$recepient = "test@gmail.com";
// Отправляем письмо с данными
$name = trim($_POST["name"]);
$contact = trim($_POST["contact"]);
$date = trim($_POST["date"]);
$time = trim($_POST["time"]);
$message = "ФИО: $name \nКонтактная информация: $contact \nДата показа: $date \nВремя показа: $time";
$pagetitle = "Данные с формы";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
// Запись в базу данных
$result = $link->query("INSERT INTO " . ifora_data . " (name, contact, date, time) VALUES ('$name','$contact','$date','$time')");
// Закрываем подключение
mysqli_close($link);
?>