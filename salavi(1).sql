-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 12:07 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `salavi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cater_customer_info`
--

CREATE TABLE IF NOT EXISTS `cater_customer_info` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `cust_add` varchar(50) NOT NULL,
  `cust_phone` varchar(10) NOT NULL,
  `discount` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `cater_customer_info`
--

INSERT INTO `cater_customer_info` (`c_id`, `date`, `event_name`, `cust_name`, `cust_add`, `cust_phone`, `discount`, `total`) VALUES
(2, '2018-11-02', '', 'aarti powar', 'kop', '9874563210', 20, 100),
(6, '0000-00-00', '', 'Sajida Mujawar', 'Kop', '9874563210', 10, 162),
(7, '2018-11-22', '', 'ranjeet patil', 'kop', '9874563210', 10, 324),
(8, '2018-11-02', '', 'xyz', 'kop', '9874563210', 20, 212),
(9, '0000-00-00', '', 'Rohit Powar', 'dsad, dsadsa', '+919890305', 10, 954),
(10, '2018-11-01', '', 'sajida', 'kop', '9874563210', 10, 90),
(11, '2018-11-24', '', 'sajida', 'kop', '9874563210', 10, 1530),
(12, '2018-11-09', '', 'sajida', 'k', '9874563210', 10, 1458),
(13, '2018-11-24', '', 'sajida', 'kop', '9874563210', 10, 450),
(15, '2018-11-09', '', 'arshiya', 'kop', '7894561230', 10, 450),
(16, '2018-11-22', '', 'sajida', 'kop', '9874563210', 0, 20),
(19, '2018-11-24', '', 'ABC', 'kop', '9874563210', 0, 500),
(20, '0000-00-00', '', 'sajida', 'kop', '9874563210', 10, 1350),
(21, '2018-11-29', '', 'Sajida Mujawar', 'shiroli', '9874563210', 0, 0),
(22, '2018-11-29', '', 'Sajida Mujawar', 'shiroli', '9874563210', 0, 0),
(23, '2018-11-29', '', 'Sajida Mujawar', 'shiroli', '9874563210', 0, 0),
(24, '2018-11-29', '', 'Sajida Mujawar', 'shiroli', '9874563210', 0, 0),
(25, '2018-11-29', '', 'Sajida Mujawar', 'shiroli', '9874563210', 0, 0),
(26, '2018-11-29', '', 'Sajida Mujawar', 'shiroli', '9874563210', 0, 0),
(27, '2018-11-29', '', 'Sajida Mujawar', 'shiroli', '9874563210', 0, 0),
(28, '2018-11-29', 'birthday', 'Sajida Mujawar', 'shiroli', '9874563210', 20, 960),
(29, '2018-11-14', 'wedding', 'ranjeet patil', 'yelavi', '9503125690', 10, 82800);

-- --------------------------------------------------------

--
-- Table structure for table `cat_dishes`
--

CREATE TABLE IF NOT EXISTS `cat_dishes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `outsource` varchar(20) NOT NULL DEFAULT 'No',
  `d_name` varchar(20) NOT NULL,
  `c_id` int(11) NOT NULL,
  `d_qty` int(11) NOT NULL,
  `d_price` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `cat_dishes`
--

INSERT INTO `cat_dishes` (`id`, `outsource`, `d_name`, `c_id`, `d_qty`, `d_price`, `total`) VALUES
(1, '', 'Surmai fry', 3, 2, 2, 4),
(2, '', 'Paneer Masala', 3, 3, 3, 9),
(3, '', 'Chicken 65', 4, 2, 30, 60),
(4, '', '', 4, 2, 50, 100),
(5, '', 'Chicken 65', 5, 2, 50, 100),
(6, '', 'Kanda bhaji', 5, 2, 40, 80),
(7, '', 'Chicken 65', 6, 2, 50, 100),
(8, '', 'Kanda bhaji', 6, 2, 40, 80),
(9, '', 'Surmai fry', 7, 1, 120, 120),
(10, '', 'Kanda bhaji', 7, 2, 120, 240),
(11, '', 'Chicken 65', 8, 2, 50, 100),
(12, '', 'Surmai fry', 8, 3, 55, 165),
(13, '', 'Surmai fry', 9, 2, 30, 60),
(14, '', 'Kanda bhaji', 9, 2, 500, 1000),
(15, '', 'Chicken 65', 9, 2, 30, 60),
(16, '', 'Chicken 65', 10, 2, 50, 100),
(24, 'No', 'Paneer Tikka', 13, 2, 50, 100),
(25, 'No', 'Mutton Biryani', 13, 2, 100, 200),
(26, 'Yes', 'Icecream', 13, 2, 50, 100),
(27, 'Yes', 'Parathas', 13, 5, 20, 100),
(28, 'No', 'Mutton Biryani', 15, 1, 500, 500),
(29, 'No', 'Paneer Tikka', 16, 1, 20, 20),
(30, 'No', 'Surmai Fish', 20, 2, 100, 200),
(31, 'No', 'Veg Thali', 20, 1, 300, 300),
(32, 'Yes', 'chairs', 20, 2, 200, 400),
(33, 'Yes', 'tables', 20, 3, 200, 600),
(34, 'No', 'Veg Thali', 28, 10, 120, 1200),
(35, 'No', 'Veg Thali', 29, 130, 200, 26000),
(36, 'No', 'Mutton Biryani', 29, 20, 2000, 40000),
(37, 'Yes', 'chairs', 29, 130, 200, 26000);

-- --------------------------------------------------------

--
-- Table structure for table `dish_list`
--

CREATE TABLE IF NOT EXISTS `dish_list` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `dish_name` varchar(250) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=224 ;

--
-- Dumping data for table `dish_list`
--

INSERT INTO `dish_list` (`d_id`, `dish_name`) VALUES
(12, 'Batata Vada'),
(13, 'Aalu Corn Tikki'),
(14, 'Veg Birdnest'),
(15, 'Samosa'),
(16, 'Kachori'),
(17, 'Batata Bhaji'),
(18, 'Kanda Bhaji'),
(19, 'Mini Vada'),
(20, 'Palak Bhaji'),
(21, 'Sweet Corn Bhaji'),
(22, 'Mirchi Bhaji'),
(23, 'Mix Pakoda'),
(24, 'Veg Pattice'),
(25, 'Hara-Bhara Kabab'),
(26, 'Sweet Corn Cutlet'),
(27, 'Gobi Manchurian'),
(28, 'Veg Cutlet'),
(29, 'Mutter Karanji'),
(30, 'Batate Fingerchips'),
(31, 'Tomato Soup'),
(32, 'Veg manchaw Soup'),
(33, 'Sweet Corn Soup'),
(34, 'Upma/Shira'),
(35, 'Idli-Sambhar-Chatani'),
(36, 'Medu-Vada-Sambhar'),
(37, 'Batate Pohe/Kande Pohe'),
(38, 'Paav-Bhaji'),
(39, 'Misal'),
(40, 'Veg/Cheese Sandwich'),
(41, 'Dahi Vada'),
(42, 'Kurma Puri'),
(43, 'Shabu-Khichadi'),
(44, 'Dum Aalu'),
(45, 'Veg Kheema'),
(46, 'Veg Makhanwala'),
(47, 'Paneer Shahi Kurma'),
(48, 'Methi Malai mutter'),
(49, 'Veg Jaipuri'),
(50, 'Veg Kolhapuri'),
(51, 'Mutter Korma'),
(52, 'Mutter Paneer'),
(53, 'Paneer Tikka Masala'),
(54, 'Paneer Bhurji'),
(55, 'Palak Paneer'),
(56, 'Baingan Masala'),
(57, 'Bharla Dodaka'),
(58, 'Akkha Masoor'),
(59, 'Pivala Batata'),
(60, 'Mutter Flower'),
(61, 'Methi Besan'),
(62, 'Aalu Gobi'),
(63, 'Tawa Fry'),
(64, 'Bhendi Masala'),
(65, 'Dhabu Batata Dry'),
(66, 'Mix Veg'),
(67, 'Bhendi Fry'),
(68, 'Matki Usal'),
(69, 'Moogachi Usal'),
(70, 'Akkha Masoor Batata'),
(71, 'Mutter Pivala Batata'),
(72, 'Baingan Bharta'),
(73, 'Stuff Simla'),
(74, 'Kurma'),
(75, 'Koshimbir'),
(76, 'Kakadichi Koshimbir'),
(77, 'Tomato Koshimbir'),
(78, 'Beet Koshimbir'),
(79, 'Gajar Koshimbir'),
(80, 'Flower Koshimbir'),
(81, 'Kobi Koshimbir'),
(82, 'Bundi Raita'),
(83, 'Salad'),
(84, 'Mix Fruit Raita'),
(85, 'Green Salad'),
(86, 'Mix Salad'),
(87, 'Dahi Kanda'),
(88, 'Rabadi'),
(89, 'Shitafal Basundi'),
(90, 'Anjeer Basundi'),
(91, 'Mango Basundi'),
(92, 'Basundi'),
(93, 'Fruit Basundi'),
(94, 'Rasmalai'),
(95, 'Mango Rasmalai'),
(96, 'Shrikhand'),
(97, 'Amrakhand'),
(98, 'Fruit Khand'),
(99, 'Gulab Jaam'),
(100, 'Jilebi'),
(101, 'Pineapple Shira'),
(102, 'Mix Fruit Shira'),
(103, 'Mango Shira'),
(104, 'Shira'),
(105, 'Gajar Halwa'),
(106, 'Dudhi Halwa'),
(107, 'Dry Fruit Shevaya'),
(108, 'Shevaya'),
(109, 'Mango Shevaya'),
(110, 'Tandalache Modak'),
(111, 'Ukadlele Modak'),
(112, 'Talalele Modak'),
(113, 'Plain Rice'),
(114, 'Jeera Rice'),
(115, 'Kaju Mutter Pulao'),
(116, 'Veg Pulao'),
(117, 'Masale Bhaat'),
(118, 'Kala Bhaat'),
(119, 'Veg Biryani'),
(120, 'Fried Rice'),
(121, 'Moogachi Khichadi'),
(122, 'Dahi Butti'),
(123, 'Tomato Rice'),
(124, 'Daal Tadaka'),
(125, 'Daal Fry'),
(126, 'Shevga Aamti'),
(127, 'Matki Rassa'),
(128, 'Masoor  Rassa'),
(129, 'Katachi Aamti'),
(130, 'Tomato Saar'),
(131, 'Golyacha Sambhar'),
(132, 'Kadhi'),
(133, 'Sambhar'),
(134, 'Daal Makhani'),
(135, 'Puri'),
(136, 'Palak Puri'),
(137, 'Chapati/Fulke'),
(138, 'Rumali Roti/Bhakri'),
(139, 'Shengdana Chutni'),
(140, 'Khobryachi  Chutni'),
(141, 'Kortyachi  Chutni'),
(142, 'Tomato  Chutni'),
(143, 'Pudina  Chutni'),
(144, 'Lasoon khobare  Chutni'),
(145, 'Kharda'),
(146, 'Alu Vadi'),
(147, 'Suralichya Vadya'),
(148, 'Thapat Vadi'),
(149, 'Kothimbir Vadi'),
(150, 'Kaju Paneer'),
(151, 'Veg Kadhai'),
(152, 'Panner Butter Masala'),
(153, 'Paneer Makhanwala Masala'),
(154, 'Paneer Shahi'),
(155, 'Navratna Kurma '),
(156, 'Kaju Kurma'),
(157, 'Kaju Green Palak Masala'),
(158, 'Veg Hariyali'),
(159, 'Veg Bhuna '),
(160, 'Chole Masala'),
(161, 'Kaju Mutter Masala'),
(162, 'Mutton Lonche'),
(163, 'Dry Chicken'),
(164, 'Lollipop 12 Nag'),
(165, 'Chicken Manchurian'),
(166, 'Chicken 65'),
(167, 'Boneless 65'),
(168, 'Kolambi Bhaji'),
(169, 'Anda Bhaji'),
(170, 'Egg Cutlet'),
(171, 'Kheema Patties'),
(172, 'Kolambi Rolls'),
(173, 'Kheema Cutlet'),
(174, 'Kheema Samosa'),
(175, 'Mutton Biryani'),
(176, 'Chicken Biryani'),
(177, 'Anda Biryani'),
(178, 'Kheema Goli Pulao'),
(179, 'Mutton Dum Biryani'),
(180, 'Chicken Dum Biryani'),
(181, 'Chicken Fry'),
(182, 'Chicken Curry'),
(183, 'Chicken Masala'),
(184, 'Green Chicken'),
(185, 'Butter Chicken'),
(186, 'Gavraan Chicken'),
(187, 'Anda Curry'),
(188, 'Anda Masala'),
(189, 'Anda Bhurji'),
(190, 'Anda Omelette'),
(191, 'Boiled Eggs 12 Nag'),
(192, 'Orange '),
(193, 'Cola Punch '),
(194, 'Sarbat '),
(195, 'Chai/Coffee'),
(196, 'Dudh/Masala Dudh'),
(197, 'Vada Kombda Plate'),
(198, 'Mutton Kala'),
(199, 'Malvani Mutton'),
(200, 'Mutton Fry'),
(201, 'Mutton Masala'),
(202, 'Mutton Chops'),
(203, 'Mutton Kheema'),
(204, 'Mutton Kurma'),
(205, 'Mundi Rassa'),
(206, 'Mundi Rakti'),
(207, 'Kheema Masala'),
(208, 'Sadhi Thali 1'),
(209, 'Sadhi Thali 2'),
(210, 'Sadhi Thali 3'),
(211, 'Special Veg Thali'),
(212, 'Puran Poli Thali'),
(213, 'Shira Thali'),
(214, 'Jilebi Thali'),
(215, 'Shrikhand Thali'),
(216, 'Gulabjam Thali'),
(217, 'Basundi Thali'),
(218, 'Mutton Thali 1'),
(219, 'Mutton Thali 2'),
(220, 'Mutton Thali 3'),
(221, 'Chicken Thali');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_info`
--

CREATE TABLE IF NOT EXISTS `hotel_info` (
  `date` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_info`
--

INSERT INTO `hotel_info` (`date`, `total`) VALUES
('2018-11-26', 160),
('2018-11-26', 220),
('2018-11-26', 230),
('2018-11-26', 220),
('2018-11-26', 675),
('0000-00-00', 4500),
('0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `h_worker_info`
--

CREATE TABLE IF NOT EXISTS `h_worker_info` (
  `w_hid` int(11) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(100) NOT NULL,
  `w_add` text NOT NULL,
  `w_mob` varchar(10) NOT NULL,
  `w_age` int(11) NOT NULL,
  `w_gender` varchar(10) NOT NULL,
  PRIMARY KEY (`w_hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `h_worker_info`
--

INSERT INTO `h_worker_info` (`w_hid`, `w_name`, `w_add`, `w_mob`, `w_age`, `w_gender`) VALUES
(1, 'Arshiya Salati', 'Kop', '9874563210', 22, 'Female'),
(5, 'nishu', 'kop', '9874563210', 24, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_stock_cater`
--

CREATE TABLE IF NOT EXISTS `inventory_stock_cater` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `inventory_stock_cater`
--

INSERT INTO `inventory_stock_cater` (`i_id`, `date`, `item`, `qty`, `unit`, `price`) VALUES
(3, '2018-11-28', 'तांदूळ', 3, '', 0),
(4, '2018-11-28', 'तेल', 2, '', 0),
(5, '0000-00-00', 'तांदूळ', 1, '', 120),
(6, '0000-00-00', 'बदाम', 230, '', 120),
(7, '2018-11-29', 'तांदूळ', 2, '', 123),
(8, '2018-11-29', 'गहू पीठ', 130, '', 200),
(9, '0000-00-00', 'अंडी', 2, '', 120),
(10, '0000-00-00', 'चिकन', 2, '', 500),
(11, '0000-00-00', 'अंडी', 2, '', 120),
(12, '0000-00-00', 'चिकन', 2, '', 500),
(13, '2018-11-29', 'काजू', 10, '', 500),
(14, '2018-12-06', 'मटन', 1, 'kg', 400);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_stock_hotel`
--

CREATE TABLE IF NOT EXISTS `inventory_stock_hotel` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `inventory_stock_hotel`
--

INSERT INTO `inventory_stock_hotel` (`i_id`, `date`, `item`, `qty`, `unit`, `price`) VALUES
(1, '2018-11-28', 'डालडा', 23, '', 0),
(2, '2018-11-28', 'तांदूळ', 23, '', 0),
(3, '2018-11-07', 'तांदूळ', 100, '', 0),
(4, '2018-11-07', 'गहू पीठ', 10, '', 0),
(5, '2018-11-19', 'तूप', 2, '', 0),
(6, '2018-12-06', 'मटन', 2, 'kg', 1000),
(7, '0000-00-00', 'अंडी', 2, 'dozen', 80),
(8, '0000-00-00', 'तेल', 2, 'ltr', 150),
(9, '2018-12-06', 'डालडा', 1, 'kg', 50);

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE IF NOT EXISTS `item_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `items` varchar(50) CHARACTER SET utf8 NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=171 ;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`id`, `items`, `qty`) VALUES
(1, 'मटन', 0),
(2, 'चिकन', 0),
(3, 'अंडी', 0),
(4, 'तांदूळ', 0),
(5, 'तेल', 0),
(6, 'डालडा', 0),
(7, 'तूप', 0),
(8, 'काजू', 0),
(9, 'बदाम ', 0),
(10, 'गहू पीठ', 0),
(11, 'रवा', 0),
(12, 'चेरी ', 0),
(13, 'चारोळे ', 0),
(14, 'पिस्ता', 0),
(15, 'काजू कणी', 0),
(16, 'मगज बी', 0),
(17, 'टॉमॅटो सौस', 0),
(18, 'कॉर्न फ्लॉवर', 0),
(19, 'रेड चिली सौस', 0),
(20, 'कस्टर्ड', 0),
(21, 'ग्रीन चिली सौस', 0),
(22, 'बेकिंग पावडर', 0),
(23, 'सोया सौस', 0),
(33, 'जेली', 0),
(34, 'अजिनो मोटो', 0),
(35, '\r\nव्हिनेगर', 0),
(36, 'मैदा', 0),
(37, '\r\nबारीक मीठ', 0),
(38, '\r\nमोठे मीठ', 0),
(39, 'खजूर', 0),
(40, '\r\nचिंच', 0),
(41, 'गूळ ', 0),
(42, 'लवंग', 0),
(43, 'दालचिनी', 0),
(44, '\r\nमसाला वेलदोडे', 0),
(45, 'काळीमिरी', 0),
(46, '\r\nशहा जिरे', 0),
(47, '\r\nबदाम फूल', 0),
(48, 'हिरवे वेलदोडे', 0),
(49, '\r\nजायफळ', 0),
(50, '\r\nतमाल पत्री', 0),
(51, '\r\nजाय पत्री', 0),
(65, 'राम पत्री', 0),
(66, 'तीळ', 0),
(67, 'सुखे खोबरे', 0),
(68, '\r\nमिरची पूड', 0),
(69, 'जिरे पूड', 0),
(70, 'धना पूड', 0),
(71, 'जिरे ', 0),
(72, 'खसखस', 0),
(73, '\r\nमोहरी', 0),
(74, 'हिंग पूड', 0),
(75, 'खायचा सोडा', 0),
(76, 'ओवा', 0),
(77, 'अखंड धणे', 0),
(78, 'सुखी मेथी', 0),
(79, 'कसुरी मेथी', 0),
(80, 'गरम मसाला', 0),
(81, 'मसाला चटणी', 0),
(82, 'गोडा मसाला', 0),
(83, 'चाट मसाला', 0),
(84, 'कला मसाला', 0),
(85, '\r\nकिचन किंग मसाला', 0),
(86, 'एव्हरेस्ट मटण मसाला', 0),
(87, 'एव्हरेस्ट चिकण मसाला', 0),
(88, 'एव्हरेस्ट बिर्याणी मसाला', 0),
(89, '\r\nओला मसाला', 0),
(90, 'सब्जी मसाला', 0),
(91, '\r\nछोले मसाला', 0),
(92, '\r\nसांबर मसाला', 0),
(93, 'पांढरे तीळ', 0),
(94, '\r\nडाळीचे पीठ', 0),
(95, '\r\nलोणचे', 0),
(96, 'कच्चे शेंगदाणे', 0),
(97, '\r\nभाजके शेंगदाणे', 0),
(98, '\r\nफुटाणे डाळ', 0),
(99, '\r\nकांदा पोहे', 0),
(100, 'दूध पॉवडर', 0),
(101, 'केसरी कलर', 0),
(102, 'ऑरेंज कलर', 0),
(103, 'रेड चायनीज', 0),
(104, 'पिवळा कलर', 0),
(105, 'अक्खी लाल मिरची', 0),
(106, 'लिज्जत पापड', 0),
(107, 'डिस्को पापड', 0),
(108, 'पनीर ', 0),
(109, 'नारळ', 0),
(110, 'उडीद डाळ', 0),
(111, 'मुग डाळ', 0),
(112, 'तुर डाळ', 0),
(113, 'हरबरा डाळ', 0),
(114, 'क्रीम', 0),
(115, 'ब्रेड क्रम्ब्स', 0),
(116, '\r\nमनुके', 0),
(117, 'काडीपत्ता', 0),
(118, 'कांदा', 0),
(119, 'बटाटा', 0),
(120, 'टॉमॅटो', 0),
(121, 'लिंबू', 0),
(122, 'आले', 0),
(123, 'लसूण', 0),
(124, 'कोथिंबीर', 0),
(125, 'पुदिना', 0),
(126, 'काकडी', 0),
(127, 'कोबी', 0),
(128, 'मटकी', 0),
(129, 'छोले', 0),
(130, 'बीट', 0),
(131, 'मुळा', 0),
(132, 'गाजर', 0),
(133, 'फ्लॉवर', 0),
(134, 'श्रावणघेवडा', 0),
(135, 'ढबूमिरची', 0),
(136, 'वांगी', 0),
(137, 'दुधीभोपळा', 0),
(138, 'दोडका', 0),
(139, 'शेवगाशेंगा ', 0),
(140, 'मेथी', 0),
(141, 'पालक', 0),
(142, 'चिकु', 0),
(143, 'सफ़रचंद', 0),
(144, 'द्राक्षे', 0),
(145, 'मॅपको वाटाणा', 0),
(146, '\r\nहिरवी मिरची', 0),
(147, 'कच्चा आंबा', 0),
(148, 'दूध', 0),
(149, 'चहा पूड', 0),
(150, 'साखर', 0),
(151, 'दही', 0),
(152, 'आम्रखंड ', 0),
(153, 'श्रीखंड', 0),
(154, 'चक्का', 0),
(155, 'बासुंदी', 0),
(156, 'अंगुर', 0),
(157, 'लोणी', 0),
(158, 'खावा', 0),
(159, '\r\nअमुल बटर', 0),
(160, 'सिलेंडर', 0),
(161, 'युज न थ्रो चमचे', 0),
(162, 'जुनी फडकी', 0),
(163, 'मिक्सर', 0),
(164, 'बर्फ', 0),
(165, 'निरमा', 0),
(166, 'रद्दी पेपर', 0),
(167, 'पेपर नॅपकिन', 0),
(168, 'माचीस/काडी पेटी', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
