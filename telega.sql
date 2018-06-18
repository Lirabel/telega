-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 18 2018 г., 07:12
-- Версия сервера: 5.6.37
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `telega`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bus`
--

CREATE TABLE `bus` (
  `id_bus` int(11) NOT NULL,
  `number_bus` int(11) NOT NULL,
  `seat` int(11) NOT NULL DEFAULT '3',
  `date_travel` date NOT NULL,
  `time_travel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bus`
--

INSERT INTO `bus` (`id_bus`, `number_bus`, `seat`, `date_travel`, `time_travel`) VALUES
(1, 1, 3, '2018-06-20', '9:00 - 11:00'),
(6, 2, 3, '2018-06-20', '9:00 - 11:00'),
(7, 3, 3, '2018-06-20', '9:00 - 11:00'),
(8, 4, 3, '2018-06-20', '9:00 - 11:00'),
(9, 5, 3, '0000-00-00', '9:00 - 11:00'),
(10, 6, 3, '0000-00-00', '9:00 - 11:00'),
(11, 7, 3, '0000-00-00', '9:00 - 11:00'),
(12, 8, 3, '0000-00-00', '9:00 - 11:00'),
(13, 9, 3, '0000-00-00', '9:00 - 11:00'),
(14, 10, 3, '0000-00-00', '9:00 - 11:00'),
(15, 1, 3, '2018-06-23', '11:00 - 15:00'),
(16, 2, 3, '0000-00-00', '11:00 - 15:00'),
(17, 3, 3, '0000-00-00', '11:00 - 15:00'),
(18, 4, 3, '0000-00-00', '11:00 - 15:00'),
(19, 5, 3, '0000-00-00', '11:00 - 15:00'),
(20, 6, 3, '0000-00-00', '11:00 - 15:00'),
(21, 7, 3, '0000-00-00', '11:00 - 15:00'),
(22, 8, 3, '0000-00-00', '11:00 - 15:00'),
(23, 9, 3, '0000-00-00', '11:00 - 15:00'),
(24, 10, 3, '0000-00-00', '11:00 - 15:00'),
(25, 1, 3, '2018-06-22', '15:00 - 17:00'),
(26, 2, 3, '0000-00-00', '15:00 - 17:00'),
(27, 3, 3, '0000-00-00', '15:00 - 17:00'),
(28, 4, 3, '0000-00-00', '15:00 - 17:00'),
(29, 5, 3, '0000-00-00', '15:00 - 17:00'),
(30, 6, 3, '0000-00-00', '15:00 - 17:00'),
(31, 7, 3, '0000-00-00', '15:00 - 17:00'),
(32, 8, 3, '0000-00-00', '15:00 - 17:00'),
(33, 9, 3, '0000-00-00', '15:00 - 17:00'),
(34, 10, 3, '0000-00-00', '15:00 - 17:00'),
(35, 1, 3, '2018-06-21', '17:00 - 19:00'),
(36, 2, 3, '0000-00-00', '17:00 - 19:00'),
(37, 3, 3, '0000-00-00', '17:00 - 19:00'),
(38, 4, 3, '0000-00-00', '17:00 - 19:00'),
(39, 5, 3, '0000-00-00', '17:00 - 19:00'),
(40, 6, 3, '0000-00-00', '17:00 - 19:00'),
(41, 7, 3, '0000-00-00', '17:00 - 19:00'),
(42, 8, 3, '0000-00-00', '17:00 - 19:00'),
(43, 9, 3, '0000-00-00', '17:00 - 19:00'),
(44, 10, 3, '0000-00-00', '17:00 - 19:00');

-- --------------------------------------------------------

--
-- Структура таблицы `offer`
--

CREATE TABLE `offer` (
  `id_offer` int(11) NOT NULL,
  `point_A` varchar(255) NOT NULL,
  `point_B` varchar(255) NOT NULL,
  `date_travel` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `offer`
--

INSERT INTO `offer` (`id_offer`, `point_A`, `point_B`, `date_travel`) VALUES
(1, '1', '3', '2013-11-20'),
(2, '1', '3', '2013-09-20'),
(3, '1', '3', '2008-03-20'),
(4, '1', '3', '2023-09-20'),
(5, '1', '3', '2001-08-20'),
(6, '1', '3', '2013-03-20'),
(7, '1', '3', '2007-02-20'),
(8, '1', '3', '2002-04-20'),
(9, '1', '3', '2010-05-20'),
(10, '1', '3', '2011-06-20'),
(11, '1', '3', '2013-09-20'),
(14, 'fwe', 'wef', '2018-06-19');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `dadname` varchar(255) NOT NULL,
  `date_birth` date NOT NULL,
  `phone` varchar(13) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `surname`, `dadname`, `date_birth`, `phone`, `addres`, `info`) VALUES
(3, 'Ivan', '123', 'Ivanov', 'Ivanovich', '1990-12-12', '+380972754261', 'newucblibjkwkzebliuebclieucl', 'asfhgdl;klhgsdtyuiuoitysdfhkmmncvxfutiyrgxvb');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`);

--
-- Индексы таблицы `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id_offer`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bus`
--
ALTER TABLE `bus`
  MODIFY `id_bus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT для таблицы `offer`
--
ALTER TABLE `offer`
  MODIFY `id_offer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
