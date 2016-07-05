-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 05 2016 г., 19:42
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `CL2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mail`
--

CREATE TABLE `mail` (
  `id` int(125) DEFAULT NULL,
  `idq` int(125) DEFAULT NULL,
  `otkogo` varchar(125) DEFAULT NULL,
  `text` varchar(125) DEFAULT NULL,
  `komu` varchar(125) DEFAULT NULL,
  `date` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `pro`
--

CREATE TABLE `pro` (
  `id` int(11) NOT NULL,
  `name` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `X` int(11) DEFAULT NULL,
  `Y` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `gruz` int(11) DEFAULT NULL,
  `cena` int(11) DEFAULT NULL,
  `goroda` int(11) DEFAULT NULL,
  `email` int(11) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `about` int(11) DEFAULT NULL,
  `uadres` int(11) DEFAULT NULL,
  `uname` int(11) DEFAULT NULL,
  `inn` int(11) DEFAULT NULL,
  `ogrn` int(11) DEFAULT NULL,
  `okpo` int(11) DEFAULT NULL,
  `kpp` int(11) DEFAULT NULL,
  `oo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `pro`
--

INSERT INTO `pro` (`id`, `name`, `m`, `X`, `Y`, `type`, `gruz`, `cena`, `goroda`, `email`, `telephone`, `about`, `uadres`, `uname`, `inn`, `ogrn`, `okpo`, `kpp`, `oo`) VALUES
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `prof2`
--

CREATE TABLE `prof2` (
  `id` int(15) NOT NULL,
  `name` varchar(125) NOT NULL,
  `mesto` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `type` varchar(125) NOT NULL,
  `telephone` varchar(125) NOT NULL,
  `about` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `prof2`
--

INSERT INTO `prof2` (`id`, `name`, `mesto`, `email`, `type`, `telephone`, `about`) VALUES
(2, '', '', '', ' ', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `login` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES
(1, 'potapytch.mix', '9', 'mihail-grekov@mail.ru'),
(2, 'potapytch.mix2', '8', 'mihail-grekov@mail.ru'),
(3, 'grekovmihail', '8', 'mihail-grekov@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `zai`
--

CREATE TABLE `zai` (
  `d` varchar(125) DEFAULT NULL,
  `login` varchar(125) DEFAULT NULL,
  `date` varchar(125) DEFAULT NULL,
  `out` varchar(125) DEFAULT NULL,
  `in` varchar(125) DEFAULT NULL,
  `type` varchar(125) DEFAULT NULL,
  `about` varchar(125) DEFAULT NULL,
  `vre` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `zai2`
--

CREATE TABLE `zai2` (
  `id` int(125) DEFAULT NULL,
  `login` varchar(125) DEFAULT NULL,
  `date` varchar(125) DEFAULT NULL,
  `mesto` varchar(125) DEFAULT NULL,
  `type` varchar(125) DEFAULT NULL,
  `about` varchar(125) DEFAULT NULL,
  `vre` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `zaipere`
--

CREATE TABLE `zaipere` (
  `login` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `raion` varchar(125) NOT NULL,
  `type` varchar(125) NOT NULL,
  `about` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `zaipere2`
--

CREATE TABLE `zaipere2` (
  `login` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `raion` varchar(125) NOT NULL,
  `type` varchar(125) NOT NULL,
  `about` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
