-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Трв 06 2021 р., 15:29
-- Версія сервера: 8.0.19
-- Версія PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `lb_database`
--

-- --------------------------------------------------------

--
-- Структура таблиці `pages`
--

CREATE TABLE `pages` (
  `ID` int NOT NULL,
  `athor` varchar(150) NOT NULL,
  `article` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `pages`
--

INSERT INTO `pages` (`ID`, `athor`, `article`) VALUES
(1, 'Петров', 'В своей статье рассказывает о машинах.'),
(2, 'Иванов', 'Написал статью об инфляции.'),
(3, 'Сидоров', 'Придумал новый химический элемент.'),
(4, 'Осокина', 'Также писала о машинах.'),
(5, 'Ветров', 'Написал статью о том, как разрабатывать элементы дизайна.');

-- --------------------------------------------------------

--
-- Структура таблиці `workers`
--

CREATE TABLE `workers` (
  `ID` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `salary` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `workers`
--

INSERT INTO `workers` (`ID`, `name`, `age`, `salary`) VALUES
(1, 'Дима', 23, 400),
(2, 'Петя', 25, 500),
(3, 'Вася', 23, 500),
(4, 'Коля', 30, 1000),
(5, 'Иван', 27, 500),
(6, 'Кирилл', 28, 1000);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`ID`);

--
-- Індекси таблиці `workers`
--
ALTER TABLE `workers`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `pages`
--
ALTER TABLE `pages`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблиці `workers`
--
ALTER TABLE `workers`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
