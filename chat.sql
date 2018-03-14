-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 04:08 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender` varchar(8) NOT NULL,
  `message` varchar(300) NOT NULL,
  `timestamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `message`, `timestamp`) VALUES
(1, 'test', 'first message test', '20180314103338'),
(2, 'test', 'try message', '20180314103915'),
(3, 'test', 'test test tasdasdasdasdasdsadasdas dsad asd as das dasd sa das dasd asd asd asd asd as', '20180314104654'),
(4, 'test', 'est test tasdasdasdasdasdsadasdas dsad asd as das dasd sa das dasd asd asd asd asd asest test tasdasdasdasdasdsadasdas dsad asd as das dasd sa das dasd asd asd asd asd asest test tasdasdasdasdasdsadasdas dsad asd as das dasd sa das dasd asd asd asd asd asest test tasdasdasdasdasdsadasdas dsad asd as', '20180314104744'),
(5, 'test', 'tes', '20180314105040'),
(6, 'test', 'test message', '20180314105044'),
(7, 'test', 'test', '20180314105136'),
(8, 'test2', 'test', '20180314105138'),
(9, 'test2', 'test', '20180314105217'),
(10, 'test', 'hi', '20180314105222'),
(11, 'test2', 'test', '20180314105303'),
(12, 'test', 'test', '20180314110322'),
(13, 'test', 'hehe', '20180314110452'),
(14, 'test', 'test', '20180314110454'),
(15, 'test', 'test', '20180314110455'),
(16, 'test', 'test', '20180314110456'),
(17, 'test2', 'test', '20180314110517'),
(18, 'test', 'test', '20180314110636'),
(19, 'test2', 'hello', '20180314110732'),
(20, 'test2', 'hi', '20180314110736'),
(21, 'test2', 'test', '20180314110741'),
(22, 'test2', 'testtesttesttesttest', '20180314110742'),
(23, 'test2', 'test', '20180314110742'),
(24, 'test2', 'test', '20180314110742'),
(25, 'test2', 'test', '20180314110743'),
(26, 'test2', 'test', '20180314110743'),
(27, 'test2', 'test', '20180314110743'),
(28, 'test', 'TAPOS NA', '20180314110751'),
(29, 'test', 'THANK YOU GUYS :D SANA MAKATULONG', '20180314110757');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'jhay', '3eeff41f76705ffcb8305f75fc3fba89'),
(2, 'test', 'cc03e747a6afbbcbf8be7668acfebee5'),
(3, 'test2', 'cc03e747a6afbbcbf8be7668acfebee5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
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
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
