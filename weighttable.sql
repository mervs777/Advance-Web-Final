-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 04:11 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webappdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `weighttable`
--

CREATE TABLE `weighttable` (
  `id` int(50) NOT NULL,
  `kgrms` double DEFAULT NULL,
  `grms` double DEFAULT NULL,
  `pnds` double DEFAULT NULL,
  `startDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weighttable`
--

INSERT INTO `weighttable` (`id`, `kgrms`, `grms`, `pnds`, `startDate`) VALUES
(3, 5, 4, 3, '0000-00-00'),
(4, 5, 4, 3, '0000-00-00'),
(5, 0, 0, 0, '0000-00-00'),
(6, 12, 12000, 26.46, '0000-00-00'),
(7, 12, 12000, 26.46, '0000-00-00'),
(8, 13, 13000, 28.665, '0000-00-00'),
(9, 17, 17000, 37.485, '0000-00-00'),
(10, 17, 17000, 37.485, '0000-00-00'),
(11, 20, 20000, 44.1, '0000-00-00'),
(12, 14, 14000, 30.87, '0000-00-00'),
(13, 13, 13000, 28.665, '0000-00-00'),
(14, 1.2, 1200, 2.646, '0000-00-00'),
(15, 1, 1000, 2.205, '0000-00-00'),
(16, 20, 20000, 44.1, '0000-00-00'),
(17, 12, 12000, 26.46, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weighttable`
--
ALTER TABLE `weighttable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weighttable`
--
ALTER TABLE `weighttable`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
