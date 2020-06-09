<?php
require "config.php"; // подключаем конфиг
// Подключение к базе данных
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));
//Переменные с формы
$name = $_POST['name'];
$contact = $_POST['contact'];
$date = $_POST['date'];
$time = $_POST['time'];

$recepient = "test@gmail.com";

$name = trim($_POST["name"]);
$contact = trim($_POST["contact"]);
$date = trim($_POST["date"]);
$time = trim($_POST["time"]);
$message = "ФИО: $name \nКонтактная информация: $contact \nДата показа: $date \nВремя показа: $time";
$pagetitle = "Данные с формы";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

$result = $link->query("INSERT INTO " . ifora_data . " (name, contact, date, time) VALUES ('$name','$contact','$date','$time')");
// закрываем подключение
mysqli_close($link);
?>