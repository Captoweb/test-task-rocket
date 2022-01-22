-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 21 2022 г., 11:35
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(50) NOT NULL,
  `user` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `old_cost` int(11) DEFAULT NULL,
  `active` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `user`, `list`, `cost`, `old_cost`, `active`) VALUES
(1, 'для мужчин', 'Гормональный скрининг\nТестостерон\nСвободный тестостерон\nГлобулин, связывающий половые гормоны', 2800, 3500, 'active'),
(2, 'для женщин', 'Гормональный скрининг\r\nЭстрогены\r\nСвободный тестостерон\r\nГлобулин, связывающий половые гормоны', 3800, 4500, ''),
(3, 'для детей', 'Lorem Ipsum has been\r\nStet clita kasd\r\nAt vero eos et accusam\r\nStet clita kasd gubergren', 1800, 2500, ''),
(4, 'для животных', 'Lorem Ipsum has been\r\nStet clita kasd\r\nAt vero eos et accusam\r\nStet clita kasd gubergren ', 800, 1800, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
