-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Май 15 2020 г., 04:57
-- Версия сервера: 5.7.26
-- Версия PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES cp1251 */;

--
-- База данных: `ktelekom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `city_org` varchar(50) NOT NULL,
  `contract` int(11) NOT NULL,
  `name_org` varchar(150) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `postal_code` int(6) NOT NULL,
  `country` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `dtc` timestamp NOT NULL,
  `dtu` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id`, `city_org`, `contract`, `name_org`, `phone_number`, `last_name`, `first_name`, `middle_name`, `date_of_birth`, `postal_code`, `country`, `region`, `district`, `city`, `street`, `dtc`, `dtu`) VALUES
(11, 'Тюмень', 679, 'ООО Ромашка', '89999999900', 'Иванов', 'Иван', 'Иванович', '1987-08-23', 6543, 'Россия', 'Свердловская', '', 'Первоуральск', 'Малышева', '2020-05-14 23:32:08', '2020-05-14 23:50:13');

-- --------------------------------------------------------

--
-- Структура таблицы `operators`
--

CREATE TABLE `operators` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pass` varchar(120) NOT NULL,
  `name` varchar(40) NOT NULL,
  `role` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `operators`
--

INSERT INTO `operators` (`id`, `login`, `pass`, `name`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `operators`
--
ALTER TABLE `operators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
