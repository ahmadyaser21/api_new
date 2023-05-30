-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 07:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_std`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `phone`) VALUES
(2, 'mohammed', 'asd@sd.cc', '05990174047'),
(3, 'ahmed', 'amm@moh.com', '1236547895'),
(4, 'Ahmae', 'mohammed@gmail.com', '0592369565'),
(5, 'Ahmae', 'mohammed@gmail.com', '0592369565'),
(6, 'Ahmae', 'mohammed@gmail.com', '0592369565'),
(7, 'Ahmae', 'mohammed@gmail.com', '0592369565'),
(8, 'Ahmae', 'mohammed@gmail.com', '0592369565'),
(9, 'Ahmae', 'mohammed@gmail.com', '0592369565'),
(10, 'Ahmae', 'mohammed@gmail.com', '0592369565'),
(11, 'Ahmae', 'mohammed@gmail.com', '0592369565'),
(12, '', 'mohammed@gmail.com', '0592369565'),
(13, 'Ahmae', 'mohammed@gmail.com', '0592369565');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
