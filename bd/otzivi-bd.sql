-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 24, 2020 at 06:00 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otzivi-bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `otzivi`
--

CREATE TABLE `otzivi` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `otziv` varchar(500) NOT NULL,
  `balli` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `otzivi`
--

INSERT INTO `otzivi` (`id`, `login`, `otziv`, `balli`) VALUES
(10, 'test5', 'Супер', '5'),
(9, 'test5', 'Хорошо', '4'),
(8, 'test', 'выфвыфв', '1'),
(7, 'test', 'Хороший сервис', '5'),
(11, 'test2', 'Топ', '5'),
(12, 'test3', 'test3', '5'),
(13, 'test5', 'Все гуд', '5'),
(14, 'test99', 'отлично', '4'),
(15, 'test50', 'Хороший сервис', '5'),
(16, 'user1', 'топ', '3'),
(17, 'rinat', 'Хорош', '4'),
(18, 'test', 'хорошо', '1'),
(19, 'testtest', 'гуд', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `otzivi`
--
ALTER TABLE `otzivi`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `otzivi`
--
ALTER TABLE `otzivi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
