-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2021 at 06:22 PM
-- Server version: 10.3.22-MariaDB-log
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `text`, `views`) VALUES
(1, 'Блог о том как похудеть', 'нужно правильно расчитывать калории  \r\nи правильно питаться и конечно занятия спортом', 5),
(2, 'Спорт-сила', 'Занимайтесь спортом пацаны', 0),
(3, 'Что-то интересное', 'Пример добавления блога на сайт \r\nнужно лишь заполнить поля и нажать кнопку добавить', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cardio`
--

CREATE TABLE `cardio` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cardio`
--

INSERT INTO `cardio` (`id`, `title`, `text`) VALUES
(1, 'Группа номер 1', 'Кардио \r\n\r\n\r\nкороче бёрпи пока не сдохнешь\r\n\r\nа потом ещё 20 минут бёрпи\r\n\r\nпотом можно попить \r\nи ещё 10 минут бёрпи'),
(2, 'Группа номер 2', 'AS\r\nJF\r\nSAJF\r\nSDJF\r\nSAKF\r\nSAF\r\nSAMF\r\nSAFK\r\n<SAMF\r\nASMF\r\nASMF\r\nASMF\r\nASK'),
(3, 'Группа номер 3', '\r\nAS<FMlas,fsa,f\r\nas\r\nF<Sl\r\na,f\r\nas,fl\r\nas,f\r\nas,f\'l\r\nas,f\r\na,sfas,f\'l\r\nas,f\'l\r\nas,f\'l\r\na'),
(4, 'Группа номер 4', '\r\nAS<FMlas,fsa,f\r\nas\r\nF<Sl\r\na,f\r\nas,fl\r\nas,f\r\nas,f\'l\r\nas,f\r\na,sfas,f\'l\r\nas,f\'l\r\nas,f\'l\r\na'),
(5, 'Группа номер 5', '\r\nAS<FMlas,fsa,f\r\nas\r\nF<Sl\r\na,f\r\nas,fl\r\nas,f\r\nas,f\'l\r\nas,f\r\na,sfas,f\'l\r\nas,f\'l\r\nas,f\'l\r\na');

-- --------------------------------------------------------

--
-- Table structure for table `cardiolist`
--

CREATE TABLE `cardiolist` (
  `id` int(11) NOT NULL,
  `id_training` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dry`
--

CREATE TABLE `dry` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dry`
--

INSERT INTO `dry` (`id`, `title`, `text`) VALUES
(1, 'Группа номер 1', 'Чисто для примера \r\n\r\nОтжиматься и хавать нормально'),
(2, 'Группа номер 2', 'jkewbriuoewn;fkds\r\nFKJ\r\nDSJF\r\nIEKPMF\r\nSDF\r\nPJ\r\noejf\r\nersjf\r\nej\r\ndsmf\r\nsmf\r\ns'),
(3, 'Группа номер 3', ' NFEBASJDLMAS\r\nFJS\r\nKFMS\r\nDKFMS\r\nDMF\r\nSM\r\nfm\r\nFMDS\r\nKFMds\r\nmf\r\nKFMDS\r\n'),
(4, 'Группа номер 4', 'ASFS\r\nFKDSL\r\nFMDSF\r\n\r\nFMDS\r\nFMD\r\nSMF\r\nLDSMF\r\nDS:L\r\nfmSDMF:\r\nDSMF;\r\nDSMFSMDF\r\n:mDS:\r\nFm\r\n'),
(5, 'Группа номер 5', '\r\n\r\nASFM\r\nL:SMF\r\n;aMF\r\n:LSAM\r\nfasL:\r\nfm\r\n:ASmf\r\n;AMF;l\r\nasMf;\r\nasm;\r\nlfasM\r\nF:asm;lfams\r\n;lf,A\r\nSfm\r\nASmf\r\n;a');

-- --------------------------------------------------------

--
-- Table structure for table `drylist`
--

CREATE TABLE `drylist` (
  `id` int(11) NOT NULL,
  `id_training` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drylist`
--

INSERT INTO `drylist` (`id`, `id_training`, `id_user`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `power`
--

CREATE TABLE `power` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `power`
--

INSERT INTO `power` (`id`, `title`, `text`) VALUES
(1, 'Тренировка груди и рук', '1) Тяга штанги к груди. 3 подхода по 10-15 повторений\r\n2)Тяжелые шраги со штангой. 3 подхода по 10-15 повторений\r\n3)Жим стоя. 3 подхода по 10-15 повторений\r\n4)Жим лежа средним хватом. 4 подхода по 12-15 повторений \r\n5)Жим лежа. 4-5 подходов по 12-15 повторений\r\n6)Подтягивание на турнике с дополнительным весом. 3 подхода по 10-12 повторений'),
(2, 'Тренировка плечи', 'редактировал\r\n1) Выполняем жим штанги на скамье лежа в горизонтальном положении. После двух разминочных следуют четыре рабочих подхода по 8-12 повторов. Это упражнение наиболее эффективно прорабатывает грудные мышцы, увеличивая их объем и массу.\r\n2) Разводка гантелей в положении лежа на горизонтальной скамье. После одного разминочного следуют четыре рабочих подхода по 8-12 повторов. Данное упражнение позволяет помимо набора мышечной массы придать мышцам красивый рельеф и хорошую атлетическую форму.\r\n3) Проработка трицепса жимом штанги узким хватом лежа. После первого разминочного выполняется четыре рабочих подхода по 8-12 повторов. Выполняя жимы, не забудьте про партнера! Упражнение эффективно для проработки трицепсов и внутренней части грудных мышц.\r\n4) Жим в положении лежа на наклонной скамье в четыре подхода по 8-12 повторов, но только после обязательного разогрева мышц плечевого сустава для снижения риска травмирования плеча. Данное упражнение отлично прорабатывает мышцы верхней части груди.\r\n5) Отжимание на брусьях в четыре подхода с максимально возможным количеством повторений в каждом подходе. Это упражнение отличный тренинг не только для трицепса, но и для всего плечевого пояса.'),
(3, 'Тренировка ноги', '[rklewpojrioewnfiudsbf\r\nFDSMAK\r\nPFds\r\nPKF\r\nPDFJ\r\nDSKFM\r\nSDF\r\nDSMF\r\nSD'),
(4, 'Тренировка спина и пресс', '\r\nAS<FMlas,fsa,f\r\nas\r\nF<Sl\r\na,f\r\nas,fl\r\nas,f\r\nas,f\'l\r\nas,f\r\na,sfas,f\'l\r\nas,f\'l\r\nas,f\'l\r\na'),
(5, 'Тренировка бицепц', 'пример'),
(6, 'Тренировка на все группы мыщц', 'ььльлдь');

-- --------------------------------------------------------

--
-- Table structure for table `powerlist`
--

CREATE TABLE `powerlist` (
  `id` int(11) NOT NULL,
  `id_training` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `powerlist`
--

INSERT INTO `powerlist` (`id`, `id_training`, `id_user`) VALUES
(1, 2, 1),
(2, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privileges` int(2) NOT NULL DEFAULT 0,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blogs` int(11) NOT NULL DEFAULT 0,
  `power` int(11) NOT NULL DEFAULT 0,
  `dry` int(11) NOT NULL DEFAULT 0,
  `cardio` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `privileges`, `name`, `second_name`, `blogs`, `power`, `dry`, `cardio`) VALUES
(1, 'admin', '$2y$10$SkZNwWOtQKp8SLlEBG8vC.wjguksibBEb3dsBZSWvvjNMj8qpEZyy', 1, 'Admin', 'admin', 0, 2, 1, 0),
(2, 'wont1k', '$2y$10$dSfhs52Azk78FsfXOvQJw.4UaCJu4Tk2.YrohwGz8dLBkaiyuF8MO', 0, 'Глеб', 'Глеб', 0, 0, 0, 0),
(9, 'qwerty', '$2y$10$UiHskc5agkwgXBopIlFIK.1fgOAhT.IBRtmcQG4kQyE1tMptnWfua', 0, NULL, NULL, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardio`
--
ALTER TABLE `cardio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardiolist`
--
ALTER TABLE `cardiolist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dry`
--
ALTER TABLE `dry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drylist`
--
ALTER TABLE `drylist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `power`
--
ALTER TABLE `power`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `powerlist`
--
ALTER TABLE `powerlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cardio`
--
ALTER TABLE `cardio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cardiolist`
--
ALTER TABLE `cardiolist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dry`
--
ALTER TABLE `dry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drylist`
--
ALTER TABLE `drylist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `power`
--
ALTER TABLE `power`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `powerlist`
--
ALTER TABLE `powerlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
