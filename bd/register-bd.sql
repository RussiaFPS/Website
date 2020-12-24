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
-- Database: `register-bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `role`) VALUES
(55, 'test50', 'c32c8eaa00c0c7fe73d638eeb09de6c3', 'test50', ''),
(54, 'test99', 'c32c8eaa00c0c7fe73d638eeb09de6c3', 'test99', ''),
(52, 'test4', 'c32c8eaa00c0c7fe73d638eeb09de6c3', 'test4', ''),
(51, 'test3', 'c32c8eaa00c0c7fe73d638eeb09de6c3', 'test3', ''),
(47, 'test', 'c32c8eaa00c0c7fe73d638eeb09de6c3', 'test', ''),
(60, 'admin2', '1ce0011f4e0283d9f88d6439aef6e9d0', 'admin2', 'admin'),
(72, 'testtest', '3cd27caec2eb1156aee63b8a97ecac88', 'testtest', 'user'),
(57, 'admin', '6600ba545c4deb7948327855d20f3427', 'admin', 'admin'),
(58, 'test77', 'c32c8eaa00c0c7fe73d638eeb09de6c3', 'test77', 'user'),
(59, 'rinat', 'c32c8eaa00c0c7fe73d638eeb09de6c3', 'rinat', 'rinat'),
(71, 'gfdgfdgfdg', '902053bd4d58b698b1977018211a572d', 'fdgfgdfd', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
