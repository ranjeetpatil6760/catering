-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 07:47 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salavi`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel_info`
--

CREATE TABLE `hotel_info` (
  `t_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `subtotal` float NOT NULL,
  `paid` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_info`
--

INSERT INTO `hotel_info` (`t_id`, `date`, `subtotal`, `paid`, `total`) VALUES
(1, '2018-11-26', 0, 0, 160),
(2, '2018-11-26', 0, 0, 220),
(3, '2018-11-26', 0, 0, 230),
(4, '2018-11-26', 0, 0, 220),
(5, '2018-11-26', 0, 0, 675),
(6, '0000-00-00', 0, 0, 4500),
(7, '0000-00-00', 0, 0, 0),
(8, '2018-12-21', 0, 0, 0),
(9, '0000-00-00', 0, 0, 0),
(10, '0000-00-00', 0, 0, 0),
(11, '0000-00-00', 900, 200, 700),
(12, '0000-00-00', 900, 200, 700),
(13, '0000-00-00', 111, 1, 110),
(14, '0000-00-00', 111, 1, 110),
(15, '0000-00-00', 200, 100, 100),
(16, '0000-00-00', 200, 100, 100),
(17, '0000-00-00', 200, 100, 100),
(18, '0000-00-00', 200, 100, 100),
(19, '0000-00-00', 200, 100, 100),
(20, '0000-00-00', 200, 100, 100),
(21, '0000-00-00', 400, 200, 200),
(22, '0000-00-00', 400, 200, 200),
(23, '0000-00-00', 400, 200, 200),
(24, '0000-00-00', 400, 200, 200),
(25, '0000-00-00', 0, 0, 0),
(26, '0000-00-00', 22, 2, 20),
(27, '0000-00-00', 800, 200, 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_info`
--
ALTER TABLE `hotel_info`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_info`
--
ALTER TABLE `hotel_info`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
