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
-- Table structure for table `inventory_stock_hotel`
--

CREATE TABLE `inventory_stock_hotel` (
  `i_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory_stock_hotel`
--

INSERT INTO `inventory_stock_hotel` (`i_id`, `t_id`, `item`, `qty`, `unit`, `price`) VALUES
(1, 0, 'डालडा', 23, '', 0),
(2, 0, 'तांदूळ', 23, '', 0),
(3, 0, 'तांदूळ', 100, '', 0),
(4, 0, 'गहू पीठ', 10, '', 0),
(5, 0, 'तूप', 2, '', 0),
(6, 0, 'मटन', 2, 'kg', 1000),
(7, 0, 'अंडी', 2, 'dozen', 80),
(8, 0, 'तेल', 2, 'ltr', 150),
(9, 0, 'डालडा', 1, 'kg', 50),
(10, 0, '9', 1, 'kg', 20),
(11, 0, '9', 1, 'gm', 20),
(12, 26, 'à¤®à¤Ÿà¤£', 0, 'kg', 22),
(13, 27, 'à¤®à¤Ÿà¤£', 1, 'kg', 500),
(14, 27, 'à¤¤à¤¾à¤‚à¤¦à¥‚à¤³', 2, 'kg', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory_stock_hotel`
--
ALTER TABLE `inventory_stock_hotel`
  ADD PRIMARY KEY (`i_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory_stock_hotel`
--
ALTER TABLE `inventory_stock_hotel`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
