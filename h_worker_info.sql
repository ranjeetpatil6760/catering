-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 06:59 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

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
-- Table structure for table `h_worker_info`
--

CREATE TABLE `h_worker_info` (
  `w_hid` int(11) NOT NULL,
  `w_name` varchar(100) NOT NULL,
  `w_add` text NOT NULL,
  `w_mob` varchar(10) NOT NULL,
  `w_gen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_worker_info`
--

INSERT INTO `h_worker_info` (`w_hid`, `w_name`, `w_add`, `w_mob`, `w_gen`) VALUES
(1, 'Arshiya Salati', 'Kop', '9874563210', 'Female'),
(2, 'Sajida Mujawar', 'shiroli', '9890658368', 'Female'),
(3, 'Ranjeet Patil', 'Rajarampuri', '8390856981', 'male'),
(4, 'Nishu Sharma', 'Rajarampuri', '8390856981', 'male'),
(5, 'Ranjeet Patil', 'Rajarampuri', '8390856981', ''),
(6, 'Rohit Powar', 'dsad, dsadsa', '9890305454', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `h_worker_info`
--
ALTER TABLE `h_worker_info`
  ADD PRIMARY KEY (`w_hid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `h_worker_info`
--
ALTER TABLE `h_worker_info`
  MODIFY `w_hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
