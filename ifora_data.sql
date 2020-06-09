-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 09 2020 г., 23:07
-- Версия сервера: 5.6.38
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ifora`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ifora_data`
--

CREATE TABLE `ifora_data` (
  `name` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ifora_data`
--

INSERT INTO `ifora_data` (`name`, `contact`, `date`, `time`) VALUES
('Иванов Иван Иванович', 'ул. Ленина 43', '2020-06-10', '14:20:00'),
('Петров Петр Петрович', 'ул. Ленина 44', '2020-06-11', '15:09:00'),
('Сидоров Сергей Сидорович', 'ул. Ленина 45', '2020-06-12', '16:00:00'),
('Виноградов Ростислав Глебович', 'ул. Ленина 46', '2020-06-12', '15:21:00'),
('Самсонова Риана Еремеевна', 'ул. Ленина 47', '2020-06-11', '19:35:00'),
('Медведева Ариадна Протасьевна', 'ул. Ленина 47', '2020-06-12', '17:05:00'),
('Сысоев Роман Наумович', 'ул. Ленина 48', '2020-06-25', '09:50:00'),
('Голубев Аскольд Михаилович', 'ул. Ленина 49', '2020-06-14', '16:20:00'),
('Гордеева Леся Даниловна', 'ул. Ленина 50', '2020-06-10', '10:56:00'),
('Силина Земфира Александровна', 'ул. Ленина 14', '2020-06-09', '17:25:00'),
('Суворов Виталий Ильяович', 'ул. Ленина 98', '2020-06-26', '04:14:00'),
('Зимина Нания Куприяновна', 'ул. Ленина 143', '2020-06-23', '16:20:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
