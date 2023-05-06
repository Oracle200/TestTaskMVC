-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 06 2023 г., 21:56
-- Версия сервера: 10.3.36-MariaDB
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `TestTaskDB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `algebra` int(11) DEFAULT NULL,
  `russian_language` int(11) DEFAULT NULL,
  `Biology` int(11) DEFAULT NULL,
  `Chemistry` int(11) DEFAULT NULL,
  `History` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `surname`, `firstname`, `patronymic`, `dob`, `algebra`, `russian_language`, `Biology`, `Chemistry`, `History`) VALUES
(1, 'direktor', '$2y$10$o0YFaVXIdNDg/nRLmVxNROF6hOS2QONfK0y.C8PaKcRuGnlzZdVQ6', 'admin', '', '', '', '0000-00-00', 0, 0, 0, 0, 0),
(4, 'ilnur', '$2y$10$CR9I9velbReqFfXodS2bZ.tkWmjvVuizMvJ/M4CoCrLjcqde4.D42', 'student', 'Салаховdd', 'Илнур', 'Рамисович', '2002-09-23', 2, 2, 2, 3, 3),
(7, 'alex', '$2y$10$WW1B7oWkWo7DHxoGCbOqrObc6.3nQ7nVBVsKdVl.ReynR7DRRyQCm', 'student', 'Калинин', 'Александр', 'Константинович', '2001-08-10', 5, 2, 3, 3, 5),
(8, 'polina', '$2y$10$rcQyGHhaO3c6y69BjgNaCeB/48b6j3/5C6qLKOJY0x1drujpSqL7u', 'student', 'Андреева', 'Полина', '', '2001-05-09', 1, 2, 3, 4, 5),
(9, 'aaa', '$2y$10$j8/cIWcq2m.3uzkpiv9DPe8.iR1KApCt6ffGgZw3c3/4RfhNwZk0e', 'student', 'aaa', 'aaa', 'aaa', '2023-04-12', 2, 2, 2, 5, 3),
(12, 'samira', '$2y$10$u3YbCMmceThOU//d0V8r8.L4FewADMaVD95I6fyvJbRpAfBfOZ0hy', 'student', 'Самира', 'Самира', 'Рамисовна', '2010-05-30', 5, 5, 5, 5, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
