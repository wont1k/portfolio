-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 27 2019 г., 11:14
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fan-club`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `categorie_chat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categorie`
--

INSERT INTO `categorie` (`id`, `categorie_chat`) VALUES
(1, 'Травмы'),
(2, 'Матчи'),
(3, 'Игроки'),
(4, 'Трансферы'),
(5, 'Тренерский штаб'),
(6, 'Разное');

-- --------------------------------------------------------

--
-- Структура таблицы `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `categorie_id` varchar(11) DEFAULT NULL,
  `pubdate` datetime NOT NULL DEFAULT current_timestamp(),
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`id`, `title`, `comment`, `categorie_id`, `pubdate`, `views`) VALUES
(1, 'Тест', 'Тестовое обсуждение!', '1', '2019-11-24 13:19:00', 15),
(2, 'КАПРИЗОВ ТОП', 'ну он просто лучший', '3', '2019-11-25 00:02:01', 51),
(3, 'Григоренко хорош в этом сезоне', 'В этом сезоне у него действительно всё хорошо \r\nон успел набрать форму', '3', '2019-11-25 00:02:21', 0),
(4, 'Никитин не физрук', 'Как можно называть тренера физруком, если он выиграл кубок Гагарина?', '5', '2019-11-25 00:02:57', 9),
(5, 'Капризов в НХЛ', 'Кирилл действительно хороший игрок поэтому его переезд никого не удивит \r\nТолько вот ЦСКА без такого нападающего будет плохо', '4', '2019-12-25 01:45:25', 60),
(9, 'Добавим запись в категорию матчи', 'Теперь мы можем видеть что данная запись доступна для всех и добавлена во все нужные разделы', '2', '2019-12-27 10:35:25', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `nickname`, `text`, `article_id`) VALUES
(1, 'Alex', 'Капризов жжёт в этом сезоне!!!', 2),
(2, 'Глеб', 'СОГЛАСЕН С АВТОРОМ', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'user.jpg',
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `image`, `login`, `password`, `name`) VALUES
(1, 'user.jpg', 'admin', 'admin', ''),
(2, 'user.jpg', 'fdsfsd', 'weqweqw', 'fsdfsd'),
(3, 'user.jpg', 'andreas', '25sumave', 'andreas'),
(4, 'user.jpg', 'admin', '78b5b0c61725d90b09db8deb7cd56a78', 'admin'),
(5, 'user.jpg', 'admin', '956e13552eed8102c8ae6776834eae55', 'Глеб'),
(6, 'user.jpg', 'vasay22', '08d97a508002368aab4938b4dc50291a', 'Иван'),
(7, 'user.jpg', 'coolgirl', '08d97a508002368aab4938b4dc50291a', 'нааааааааа'),
(8, 'user.jpg', 'coolgirl1', '08d97a508002368aab4938b4dc50291a', 'ааааааан');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
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
-- AUTO_INCREMENT для таблицы `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
