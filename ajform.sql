-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Окт 20 2022 г., 19:02
-- Версия сервера: 5.7.38
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ajform`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reg_user`
--

CREATE TABLE `reg_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reg_user`
--

INSERT INTO `reg_user` (`id`, `name`, `surname`, `email`, `login`, `pass`, `datetime`, `ip`) VALUES
(34, 'wwwww', 'wwwwww', 'wwwwww@gmail.com', 'wwwwwwwww', '9nm2rv8q14f27811629a801ef1e8a621efb653e92yo6z', '2022-10-20 18:30:36', '127.0.0.1'),
(35, 'wwwww', 'wwwwww', 'wwwwww@gmail.com', 'wwwwwwwww', '9nm2rv8q14f27811629a801ef1e8a621efb653e92yo6z', '2022-10-20 18:41:25', '127.0.0.1'),
(36, 'wwwww', 'wwwwww', 'wwwwww@gmail.com', 'wwwwwwwww', '9nm2rv8q14f27811629a801ef1e8a621efb653e92yo6z', '2022-10-20 18:43:15', '127.0.0.1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reg_user`
--
ALTER TABLE `reg_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
