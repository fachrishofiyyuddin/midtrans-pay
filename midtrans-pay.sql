-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 23, 2024 at 03:34 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midtrans-pay`
--

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `color` text NOT NULL,
  `capacity` text NOT NULL,
  `product` text NOT NULL,
  `price` text NOT NULL,
  `email` text NOT NULL,
  `status` enum('completed') NOT NULL,
  `date_pay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `name`, `color`, `capacity`, `product`, `price`, `email`, `status`, `date_pay`) VALUES
(4, 'Dimas', 'war-pink', '128', 'Iphone 15', 'Rp 14.249.000', 'dimas@gmail.com', 'completed', '2024-07-23'),
(5, 'Putri', 'war-yellow', '258', 'Iphone 15', 'Rp 17.249.000', 'putri@gmail.com', 'completed', '2024-07-23'),
(6, 'Kevin', 'war-green', '128', 'Iphone 15', 'Rp 14.249.000', 'kevin@gmail.com', 'completed', '2024-07-23'),
(7, 'Erika', 'war-blue', '128', 'Iphone 15', 'Rp 14.249.000', 'erika@gmail.com', 'completed', '2024-07-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
