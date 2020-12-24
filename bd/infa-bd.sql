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
-- Database: `infa-bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `infa`
--

CREATE TABLE `infa` (
  `id` int(11) UNSIGNED NOT NULL,
  `gorod` varchar(50) NOT NULL,
  `dos` varchar(50) NOT NULL,
  `typeDos` varchar(50) NOT NULL,
  `cafe` varchar(50) NOT NULL,
  `checkCafe` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infa`
--

INSERT INTO `infa` (`id`, `gorod`, `dos`, `typeDos`, `cafe`, `checkCafe`) VALUES
(2, 'Москва', 'Храм Христа Спасителя', 'Религиозный объект', 'Три богатыря', '300 руб'),
(1, 'Москва', 'Кремль', 'Памятник архитектуры', 'Му-му', '700 руб'),
(3, 'Москва', 'Зарядье', 'Парк', 'Obed Bufet', '800 руб'),
(4, 'Москва', 'Москва-Сити', 'Современная архитектура', 'Кофемания', '200 руб'),
(5, 'Москва', 'Большой театр', 'Объект культурного наследия', 'Журавли', '500 руб'),
(7, 'Санкт-Петербург', 'Эрмитаж', 'Музей', 'Африка', '900 руб'),
(8, 'Санкт-Петербург', 'Александринский театр', 'Объект культурного наследия', 'Зингеръ', '1200 руб'),
(9, 'Санкт-Петербург', 'Петропавловская крепость', 'Памятник архитектуры', 'Мясорубка', '650 руб'),
(10, 'Санкт-Петербург', 'Исаакиевский собор', 'Религиозный объект', 'Клумба', '800 руб'),
(11, 'Нижний Новгород', 'Кремль', 'Памятник архитектуры', 'Лепи тесто', '500 руб'),
(12, 'Нижний Новгород', 'Технический музей', 'Музей', 'Библиотека', '700 руб'),
(13, 'Нижний Новгород', 'Нижегородский театр драмы', 'Объект культурного наследия', 'Три апельсина', '450 руб'),
(14, 'Нижний Новгород', 'Паровозы России', 'Музей', 'Виталич', '500 руб'),
(15, 'Нижний Новгород', 'Благовещенский монастырь', 'Религиозный объект', 'Волга', '400 руб');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infa`
--
ALTER TABLE `infa`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infa`
--
ALTER TABLE `infa`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
