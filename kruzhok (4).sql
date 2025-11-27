-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 29 2024 г., 02:33
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kruzhok`
--

-- --------------------------------------------------------

--
-- Структура таблицы `add_course_himbio`
--

CREATE TABLE `add_course_himbio` (
  `id` int(11) NOT NULL,
  `name_course` varchar(500) NOT NULL,
  `name_topic` varchar(200) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `add_course_himbio`
--

INSERT INTO `add_course_himbio` (`id`, `name_course`, `name_topic`, `data`) VALUES
(1, 'олдавыопжав', 'длфаподылваоп', '2024-02-23');

-- --------------------------------------------------------

--
-- Структура таблицы `add_course_it`
--

CREATE TABLE `add_course_it` (
  `id` int(11) NOT NULL,
  `name_course` varchar(500) NOT NULL,
  `name_topic` varchar(200) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `add_course_it`
--

INSERT INTO `add_course_it` (`id`, `name_course`, `name_topic`, `data`) VALUES
(1, 'какой-то там курс', 'какая-то там тема\r\nтема', '2024-02-02');

-- --------------------------------------------------------

--
-- Структура таблицы `add_course_phis`
--

CREATE TABLE `add_course_phis` (
  `id` int(11) NOT NULL,
  `name_course` varchar(500) NOT NULL,
  `name_topic` varchar(200) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `add_course_phis`
--

INSERT INTO `add_course_phis` (`id`, `name_course`, `name_topic`, `data`) VALUES
(1, 'лдфоаджлыовады', 'ывфдлаожвофа', '2024-02-07');

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `name`, `role`) VALUES
(11, 'admin', '202cb962ac59075b964b07152d234b70', 'Пароль', 'user'),
(12, 'admin2', '202cb962ac59075b964b07152d234b70', 'Лягушкина', 'user'),
(13, 'admin3', '202cb962ac59075b964b07152d234b70', 'Пащенко', 'user'),
(14, 'admin', '6512bd43d9caa6e02c990b0a82652dca', 'Дмитриев Михаил Павлович', 'user'),
(15, 'admin_admin', '202cb962ac59075b964b07152d234b70', 'Дмитриев Михаил Павлович', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `class` varchar(3) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `class`, `phone`, `id_admin`) VALUES
(30, 'Дмитриев Михаил Павлович', '1', '111111111', 11),
(31, 'миша', '2', '222222223', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `visit`
--

CREATE TABLE `visit` (
  `id` int(11) NOT NULL,
  `dayoflesson` date DEFAULT NULL,
  `spisok` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `visit`
--

INSERT INTO `visit` (`id`, `dayoflesson`, `spisok`) VALUES
(5, '2024-02-20', 'lksajflksjalfkjsd\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `visit_himbio`
--

CREATE TABLE `visit_himbio` (
  `id` int(11) NOT NULL,
  `dayoflesson` date NOT NULL,
  `spisok` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `visit_himbio`
--

INSERT INTO `visit_himbio` (`id`, `dayoflesson`, `spisok`) VALUES
(2, '2024-02-20', 'rrrrrr');

-- --------------------------------------------------------

--
-- Структура таблицы `visit_phis`
--

CREATE TABLE `visit_phis` (
  `id` int(11) NOT NULL,
  `dayoflesson` date NOT NULL,
  `spisok` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `visit_phis`
--

INSERT INTO `visit_phis` (`id`, `dayoflesson`, `spisok`) VALUES
(2, '2024-02-20', 'kkkkkkk'),
(3, '2024-02-01', 'блабла '),
(4, '2024-02-23', 'ashjdflkjdhfa');

-- --------------------------------------------------------

--
-- Структура таблицы `zayavki`
--

CREATE TABLE `zayavki` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `class` varchar(3) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `zayavki`
--

INSERT INTO `zayavki` (`id`, `name`, `class`, `phone`, `id_admin`) VALUES
(32, 'миша', '234', '235352', 12);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `add_course_himbio`
--
ALTER TABLE `add_course_himbio`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `add_course_it`
--
ALTER TABLE `add_course_it`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `add_course_phis`
--
ALTER TABLE `add_course_phis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `visit_himbio`
--
ALTER TABLE `visit_himbio`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `visit_phis`
--
ALTER TABLE `visit_phis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zayavki`
--
ALTER TABLE `zayavki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `add_course_himbio`
--
ALTER TABLE `add_course_himbio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `add_course_it`
--
ALTER TABLE `add_course_it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `add_course_phis`
--
ALTER TABLE `add_course_phis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `visit`
--
ALTER TABLE `visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `visit_himbio`
--
ALTER TABLE `visit_himbio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `visit_phis`
--
ALTER TABLE `visit_phis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `zayavki`
--
ALTER TABLE `zayavki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `zayavki`
--
ALTER TABLE `zayavki`
  ADD CONSTRAINT `zayavki_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
