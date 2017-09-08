-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 10 2017 г., 13:56
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diary`
--

-- --------------------------------------------------------

--
-- Структура таблицы `organizer`
--

CREATE TABLE IF NOT EXISTS `organizer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `organizer`
--

INSERT INTO `organizer` (`id`, `user_id`, `text`, `date`) VALUES
(29, 3, '<p>af</p>', '2017-08-07 07:38:24'),
(37, 3, '<ol>\r\n	<li>asdaefweafew</li>\r\n	<li>asdfweraf</li>\r\n	<li>afeewafewfaw</li>\r\n	<li>awefcwefew</li>\r\n</ol>', '2017-08-08 17:00:00'),
(65, 3, '<ol>\r\n	<li>текст</li>\r\n	<li>второй</li>\r\n	<li>третий</li>\r\n	<li>пятый</li>\r\n	<li>шестой</li>\r\n	<li>семь</li>\r\n</ol>', '2017-08-10 00:00:00'),
(70, 3, '<p>ФЯМАуы</p>', '2017-08-09 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `text-diary`
--

CREATE TABLE IF NOT EXISTS `text-diary` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `text-diary`
--

INSERT INTO `text-diary` (`id`, `user_id`, `text`, `date`) VALUES
(5, 3, 'aaaaaaa', '2017-08-06 18:00:30'),
(6, 3, '1111111', '2017-08-06 18:02:09'),
(7, 3, 'sdfa', '2017-08-06 18:04:47'),
(8, 3, 'asf', '2017-08-06 18:05:07'),
(9, 3, '2222222', '2017-08-06 18:07:23'),
(10, 3, '&lt;p&gt;&lt;strong&gt;addwaqefweaf&lt;em&gt;efwfwefwefw&lt;/em&gt;&lt;/strong&gt;&lt;u&gt;wefewfwf&lt;sub&gt;wefefw&lt;sup&gt;e&lt;/sup&gt;&lt;/sub&gt;&lt;/u&gt;&lt;sub&gt;&lt;sup&gt;&lt;s&gt;eewfwefw&lt;/s&gt;&lt;/sup&gt;&lt;/sub&gt;efscsdfefewfaweff&lt;span style=&quot;background-color:#1abc9c&quot;&gt;efefwafef&lt;/span&gt;dsafeaf&lt;img alt=&quot;yes&quot; src=&quot;http://diary/ckeditor/plugins/smiley/images/thumbs_up.png&quot; style=&quot;height:23px; width:23px&quot; title=&quot;yes&quot; /&gt;&lt;/p&gt;', '2017-08-06 19:37:39');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `diary_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'user.jpg'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `diary_id`, `name`, `email`, `password`, `image`) VALUES
(1, 0, 'admin', 'Vlad@mail.ru', '1234', 'user.jpg'),
(2, 0, 'Vlad_Babin_2013@mail.ru', '', '123', 'user.jpg'),
(3, 0, 'Vlad', 'Vlad_babin_2013@ukr.net', '1234', 'medved-na-chernom-fone_1536x864.jpg'),
(4, 0, 'anton', 'Vlad@adsf.as', '123', 'user.jpg'),
(5, 0, 'vasy', 'asf@asf.asd', '12', 'user.jpg'),
(6, 0, 'Дима', 'Cd@fwd.re', '123', 'user.jpg'),
(7, 0, 'антон', 'ыва@dsf.d', '12', 'user.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `text-diary`
--
ALTER TABLE `text-diary`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `organizer`
--
ALTER TABLE `organizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT для таблицы `text-diary`
--
ALTER TABLE `text-diary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
