-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2013 at 07:22 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_status` enum('ordinary','regular') DEFAULT NULL,
  `fld_firstname` varchar(50) DEFAULT NULL,
  `fld_middlename` varchar(50) DEFAULT NULL,
  `fld_lastname` varchar(50) DEFAULT NULL,
  `fld_address` varchar(50) DEFAULT NULL,
  `fld_mobile` varchar(20) DEFAULT NULL,
  `fld_telephone` varchar(20) DEFAULT NULL,
  `fld_email` varchar(50) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `fld_status`, `fld_firstname`, `fld_middlename`, `fld_lastname`, `fld_address`, `fld_mobile`, `fld_telephone`, `fld_email`, `fld_dateCreated`) VALUES
(91, 'regular', 'Don', NULL, 'Benas', NULL, NULL, NULL, NULL, '0000-00-00'),
(92, 'regular', 'Froi', NULL, 'Benas', NULL, NULL, NULL, NULL, '0000-00-00'),
(93, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(94, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(95, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(96, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(97, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(98, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(99, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(100, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(101, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(102, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(103, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(104, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(105, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(106, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(108, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(109, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoiceattachments`
--

CREATE TABLE IF NOT EXISTS `tbl_invoiceattachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_invoiceID` int(11) DEFAULT NULL,
  `fld_name` varchar(50) DEFAULT NULL,
  `fld_size` varchar(10) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoiceitems`
--

CREATE TABLE IF NOT EXISTS `tbl_invoiceitems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_invoiceID` int(11) NOT NULL DEFAULT '0',
  `fld_productCompanyID` int(8) NOT NULL,
  `fld_productID` int(16) DEFAULT NULL,
  `fld_productQuantity` int(12) DEFAULT NULL,
  `fld_productName` varchar(50) DEFAULT NULL,
  `fld_productDescription` varchar(50) DEFAULT NULL,
  `fld_productCode` int(11) NOT NULL DEFAULT '0',
  `fld_productPrice` float(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `tbl_invoiceitems`
--

INSERT INTO `tbl_invoiceitems` (`id`, `fld_invoiceID`, `fld_productCompanyID`, `fld_productID`, `fld_productQuantity`, `fld_productName`, `fld_productDescription`, `fld_productCode`, `fld_productPrice`) VALUES
(6, 45, 1, 1, 10, 'Fish Ball', 'Balls in a Balls', 89465, 45.00),
(7, 45, 2, 5, 3, 'Chesee', 'Chese whiz', 45879, 45.00),
(8, 45, 1, 1, 2, 'Fish Ball', 'Balls in a Balls', 89465, 45.00),
(9, 45, 2, 5, 4, 'Chesee', 'Chese whiz', 45879, 45.00),
(10, 45, 2, 5, 2, 'Chesee', 'Chese whiz', 45879, 45.00),
(11, 64, 1, 1, 4, 'Fish Ball', 'Balls in a Balls', 89465, 45.00),
(12, 64, 1, 2, 7, 'Hotdog', 'Hot in a dog', 56876, 102.00),
(13, 98, 2, 5, 4, 'Chesee', 'Chese whiz', 45879, 45.00),
(14, 98, 2, 5, 4, 'Chesee', 'Chese whiz', 45879, 45.00),
(15, 98, 1, 1, 6, 'Fish Ball', 'Balls in a Balls', 89465, 45.00),
(16, 99, 2, 5, 4, 'Chesee', 'Chese whiz', 45879, 45.00),
(17, 111, 2, 5, 4, 'Chesee', 'Chese whiz', 45879, 45.00),
(18, 112, 1, 1, 32, 'Fish Ball', 'Balls in a Balls', 89465, 45.00),
(19, 113, 2, 5, 6, 'Chesee', 'Chese whiz', 45879, 45.00),
(20, 113, 1, 2, 7, 'Hotdog', 'Hot in a dog', 56876, 102.00),
(21, 114, 1, 1, 5, 'Fish Ball', 'Balls in a Balls', 89465, 45.00),
(22, 115, 1, 1, 5, 'Fish Ball', 'Balls in a Balls', 89465, 45.00),
(23, 117, 2, 5, 56, 'Chesee', 'Chese whiz', 45879, 45.00),
(24, 107, 2, 5, 42, 'Chesee', 'Chese whiz', 45879, 45.00),
(25, 124, 2, 5, 10, 'Chesee', 'Chese whiz', 45879, 45.00),
(26, 128, 2, 5, 1, 'Chesee', 'Chese whiz', 45879, 45.00),
(27, 130, 2, 5, 1, 'Chesee', 'Chese whiz', 45879, 45.00),
(28, 130, 1, 1, 2, 'Fish Ball', 'Balls in a Balls', 89465, 45.00),
(29, 132, 2, 5, 1, 'Chesee', 'Chese whiz', 45879, 45.00),
(30, 134, 2, 5, 2, 'Chesee', 'Chese whiz', 45879, 45.00),
(31, 136, 2, 5, 12, 'Chesee', 'Chese whiz', 45879, 45.00),
(32, 139, 1, 2, 12, 'Hotdog', 'Hot in a dog', 56876, 102.00),
(33, 140, 2, 5, 23, 'Chesee', 'Chese whiz', 45879, 45.00),
(34, 141, 2, 5, 22, 'Chesee', 'Chese whiz', 45879, 45.00),
(35, 142, 1, 2, 1, 'Hotdog', 'Hot in a dog', 56876, 102.00),
(36, 142, 2, 5, 3, 'Chesee', 'Chese whiz', 45879, 45.00),
(37, 143, 1, 2, 1, 'Hotdog', 'Hot in a dog', 56876, 102.00),
(38, 145, 7, 25, 1, 'Holidays Meat sauce', '380grams', 0, 39.00),
(39, 147, 7, 36, 12, 'Surf', 'Blue bar', 0, 21.50),
(40, 148, 7, 34, 1, 'Happy Napkin', '8pcs', 0, 17.00),
(41, 149, 7, 25, 1, 'Holidays Meat sauce', '380grams', 0, 39.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoicereceipts`
--

CREATE TABLE IF NOT EXISTS `tbl_invoicereceipts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_invoiceID` int(11) DEFAULT NULL,
  `fld_orNumber` varchar(20) DEFAULT NULL,
  `fld_status` enum('paid','unpaid') NOT NULL,
  `fld_paid` float(8,2) DEFAULT NULL,
  `fld_price` float(8,2) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  `fld_dateCanceled` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `tbl_invoicereceipts`
--

INSERT INTO `tbl_invoicereceipts` (`id`, `fld_invoiceID`, `fld_orNumber`, `fld_status`, `fld_paid`, `fld_price`, `fld_dateCreated`, `fld_dateCanceled`) VALUES
(34, 106, '12411231', 'paid', 500.00, 800.00, '2013-03-18', NULL),
(35, 107, '2131415-124121', 'paid', 300.00, 1000.00, '2013-03-18', NULL),
(36, 108, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(37, 109, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(38, 110, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(39, 111, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(40, 112, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(41, 113, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(42, 114, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(43, 115, '254123124-2312', 'paid', 225.00, 225.00, '2013-03-18', NULL),
(44, 116, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(45, 117, '41234-4123123', 'paid', 2520.00, 2520.00, '2013-03-18', NULL),
(46, 118, '23141231', 'paid', 423.00, 0.00, '2013-03-18', NULL),
(47, 119, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(48, 120, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(49, 121, '5123125412', 'paid', 0.00, 0.00, '2013-03-18', NULL),
(50, 122, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(51, 123, '41231', 'paid', 0.00, 0.00, '2013-03-18', NULL),
(52, 124, '412312', 'paid', 90.00, 450.00, '2013-03-18', NULL),
(53, 125, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(54, 126, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(55, 127, NULL, 'paid', NULL, NULL, '2013-03-18', NULL),
(56, 128, '', 'unpaid', 21.00, 45.00, '2013-03-19', NULL),
(57, 129, NULL, 'paid', NULL, NULL, '2013-03-19', NULL),
(58, 130, '12', 'paid', 200.00, 135.00, '2013-03-20', NULL),
(59, 131, NULL, 'paid', NULL, NULL, '2013-03-20', NULL),
(60, 132, '12', 'paid', 100.00, 45.00, '2013-03-20', NULL),
(61, 133, NULL, 'paid', NULL, NULL, '2013-03-20', NULL),
(62, 134, '12', 'paid', 100.00, 90.00, '2013-03-20', NULL),
(63, 135, NULL, 'paid', NULL, NULL, '2013-03-20', NULL),
(64, 136, '12', 'unpaid', 0.00, 540.00, '2013-03-20', NULL),
(65, 137, NULL, 'paid', NULL, NULL, '2013-03-20', NULL),
(66, 138, NULL, 'paid', NULL, NULL, '2013-03-20', NULL),
(67, 139, '', 'paid', 0.00, 1224.00, '2013-03-20', NULL),
(68, 140, '12', 'paid', 2000.00, 1035.00, '2013-03-20', NULL),
(69, 141, NULL, 'paid', NULL, NULL, '2013-03-20', NULL),
(70, 142, '13', 'unpaid', 0.00, 237.00, '2013-03-20', NULL),
(71, 143, '12', 'paid', 200.00, 102.00, '2013-03-20', NULL),
(72, 144, NULL, 'paid', NULL, NULL, '2013-03-21', NULL),
(73, 145, NULL, 'paid', NULL, NULL, '2013-03-21', NULL),
(74, 146, NULL, 'paid', NULL, NULL, '2013-03-21', NULL),
(75, 147, NULL, 'paid', NULL, NULL, '2013-03-21', NULL),
(76, 148, NULL, 'paid', NULL, NULL, '2013-03-21', NULL),
(77, 149, '23', 'paid', 50.00, 39.00, '2013-03-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoices`
--

CREATE TABLE IF NOT EXISTS `tbl_invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_customerID` int(11) DEFAULT NULL,
  `fld_code` varchar(20) NOT NULL DEFAULT '0',
  `fld_dateCreated` date DEFAULT NULL,
  `fld_dueDate` date DEFAULT NULL,
  `fld_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=150 ;

--
-- Dumping data for table `tbl_invoices`
--

INSERT INTO `tbl_invoices` (`id`, `fld_customerID`, `fld_code`, `fld_dateCreated`, `fld_dueDate`, `fld_active`) VALUES
(124, 91, '2013-03-000124', '2013-03-18', '2013-03-28', 1),
(125, NULL, '', '2013-03-18', '0000-00-00', 0),
(126, NULL, '', '2013-03-18', '0000-00-00', 0),
(127, 97, '', '2013-03-18', '0000-00-00', 0),
(128, 91, '2013-03-000128', '2013-03-19', '2013-04-14', 1),
(129, 98, '', '2013-03-19', '0000-00-00', 0),
(130, 0, '2013-03-000130', '2013-03-20', '2013-03-20', 1),
(131, NULL, '', '2013-03-20', '0000-00-00', 0),
(132, 99, '2013-03-000132', '2013-03-20', '0000-00-00', 1),
(133, NULL, '', '2013-03-20', '0000-00-00', 0),
(134, 100, '2013-03-000134', '2013-03-20', '0000-00-00', 1),
(135, 101, '', '2013-03-20', '0000-00-00', 0),
(136, 91, '2013-03-000136', '2013-03-20', '2013-03-20', 1),
(137, 102, '', '2013-03-20', '0000-00-00', 0),
(138, 103, '', '2013-03-20', '0000-00-00', 0),
(139, 0, '2013-03-000139', '2013-03-20', '2013-03-20', 1),
(140, 104, '2013-03-000140', '2013-03-20', '0000-00-00', 1),
(141, 105, '', '2013-03-20', '0000-00-00', 0),
(142, 0, '2013-03-000142', '2013-03-20', '2013-03-25', 1),
(143, 0, '2013-03-000143', '2013-03-20', '2013-03-20', 1),
(144, NULL, '', '2013-03-21', '0000-00-00', 0),
(145, 106, '', '2013-03-21', '0000-00-00', 0),
(146, NULL, '', '2013-03-21', '0000-00-00', 0),
(147, NULL, '', '2013-03-21', '0000-00-00', 0),
(148, 108, '', '2013-03-21', '0000-00-00', 0),
(149, 109, '2013-03-000149', '2013-03-21', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productcompany`
--

CREATE TABLE IF NOT EXISTS `tbl_productcompany` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `fld_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_productcompany`
--

INSERT INTO `tbl_productcompany` (`id`, `fld_name`) VALUES
(1, 'Pure Foods'),
(2, 'Magnolia'),
(3, 'Dranix Distributor Inc.'),
(4, 'Leyte Romson Trading'),
(5, 'Janles´South Food Trader Corp'),
(6, 'CCT Ventures Inc.'),
(7, 'Akramont Marketing Corp.'),
(8, 'Fast Distribution Corporation');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_productCompanyID` int(8) NOT NULL,
  `fld_name` varchar(50) DEFAULT NULL,
  `fld_description` varchar(50) DEFAULT NULL,
  `fld_code` int(11) NOT NULL DEFAULT '0',
  `fld_dateCreated` date DEFAULT NULL,
  `fld_price` float(7,2) DEFAULT NULL,
  `fld_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `fld_productCompanyID`, `fld_name`, `fld_description`, `fld_code`, `fld_dateCreated`, `fld_price`, `fld_amount`) VALUES
(2, 1, 'Hotdog', 'Hot in a dog', 1, '0000-00-00', 102.00, 100),
(5, 2, 'Chesee', 'Chese whiz', 2, '0000-00-00', 45.00, 8),
(6, 3, 'Youngs Town Corned beef', '155g', 26, '0000-00-00', 26.00, 120),
(7, 3, '555 Tuna Adobo Flavor', '155grams', 3, '0000-00-00', 22.00, 20),
(8, 3, '555 Tuna Caldereta Flavor', '155g', 4, '0000-00-00', 22.00, 16),
(9, 3, '555 Tuna Mechada', '155g', 6, '0000-00-00', 22.00, 35),
(10, 3, 'Youngs Town Sardines Spicy', '155g', 27, '0000-00-00', 14.50, 110),
(11, 3, 'Youngs Town SardinesTomato Sauce', '155g', 28, '0000-00-00', 14.50, 26),
(12, 3, 'Master Sardines Tomato ', '155g', 22, '0000-00-00', 14.00, 50),
(13, 3, 'Sardines Tomato ', '155g', 23, '0000-00-00', 14.50, 25),
(14, 3, 'Fiesta Mechado', '210g', 18, '0000-00-00', 47.00, 25),
(15, 3, 'Sardines Tomato Sauce', '210g', 24, '0000-00-00', 36.00, 20),
(16, 3, '555 Tuna Mackarel in original flavor', '210g', 5, '0000-00-00', 48.00, 30),
(17, 3, 'Argentina Meat Loaf', '210g', 12, '0000-00-00', 29.00, 23),
(18, 3, 'Argentina Corned beef', '210g', 11, '0000-00-00', 46.00, 50),
(19, 3, 'Argentina Meat Loaf', '155g', 13, '0000-00-00', 34.00, 65),
(20, 3, 'Argentina Beef Loaf', '150g', 10, '0000-00-00', 16.50, 55),
(21, 3, 'Angel Evaporada', '170g', 8, '0000-00-00', 19.00, 98),
(22, 3, 'Alpine Evaporated', '410ml', 7, '0000-00-00', 27.00, 52),
(23, 3, 'Liberty Condensed', '410ml', 20, '0000-00-00', 48.00, 15),
(24, 3, 'AngelCondensed', '410ml', 9, '0000-00-00', 40.00, 16),
(25, 7, 'Holidays Meat sauce', '380grams', 30, '0000-00-00', 39.00, 24),
(26, 3, 'Autralian Karne Norte Corned beef', '380grams', 14, '0000-00-00', 38.00, 12),
(27, 3, 'Winner Meat Loaf', '110g', 25, '0000-00-00', 14.00, 25),
(28, 3, 'El rancho Corned beef', '155g', 17, '0000-00-00', 16.50, 25),
(29, 3, 'El rancho Corned beef', '155g', 16, '0000-00-00', 21.00, 15),
(30, 3, 'Jersey Condensed', '155g', 19, '0000-00-00', 26.50, 35),
(31, 3, 'Ligo Calmares', '390ML', 21, '0000-00-00', 32.00, 5),
(32, 3, 'El rancho Corned beef', '155g', 15, '0000-00-00', 26.00, 36),
(33, 7, 'Huggies Pampers', '4M', 31, '0000-00-00', 16.00, 50),
(34, 7, 'Happy Napkin', '8pcs', 29, '0000-00-00', 17.00, 30),
(35, 7, 'Those Days Napkin', '8pcs', 33, '0000-00-00', 20.00, 40),
(36, 7, 'Surf', 'Blue bar', 32, '0000-00-00', 21.50, 35),
(37, 7, 'Tide', 'White bar', 34, '0000-00-00', 20.00, 60),
(38, 8, 'Nestle Cofee Mate ', 'Sachet ', 35, '0000-00-00', 84.00, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stocks`
--

CREATE TABLE IF NOT EXISTS `tbl_stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_productID` int(11) DEFAULT NULL,
  `fld_remainingAmount` float DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suppliers`
--

CREATE TABLE IF NOT EXISTS `tbl_suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_productCompanyID` int(8) NOT NULL,
  `fld_representativeName` varchar(50) DEFAULT NULL,
  `fld_representativeID` int(11) DEFAULT NULL,
  `fld_address` varchar(255) DEFAULT NULL,
  `fld_mobile` varchar(20) DEFAULT NULL,
  `fld_telephone` varchar(20) DEFAULT NULL,
  `fld_email` varchar(50) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_suppliers`
--

INSERT INTO `tbl_suppliers` (`id`, `fld_productCompanyID`, `fld_representativeName`, `fld_representativeID`, `fld_address`, `fld_mobile`, `fld_telephone`, `fld_email`, `fld_dateCreated`) VALUES
(1, 2, 'Jethro', 2147483647, 'Alabang', '098645613164', '8954-5464', 'jethro@yahoo.com', '0000-00-00'),
(2, 3, 'Ian', 214748367, 'Marasbaras, Tacloban City', '09125452010', '5233780', '', '0000-00-00'),
(3, 4, 'Marshall', 21474835, 'Brgy. Tigbao, Tacloban City', '09186555819', '3237441', '', '0000-00-00'),
(4, 5, 'Rumel', 2147679, 'Sitio Canmingming, Valencia Ormoc City', '09194387198', '5613915', '', '0000-00-00'),
(5, 6, 'Boboy', 214748368, 'St. Fe, Leyte', '09052660152', '', '', '0000-00-00'),
(6, 7, 'Kim', 27483647, 'YKS COMPLEX, Anibong District, Tacloban City', '09125811442', '05235035', '', '0000-00-00'),
(7, 8, 'Eugine', 12111006, 'DSC-Western leyte', '09198476857', '4581799', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `fld_userID` int(11) NOT NULL AUTO_INCREMENT,
  `fld_type` enum('employee','owner') DEFAULT NULL,
  `fld_username` varchar(30) DEFAULT NULL,
  `fld_password` varchar(30) DEFAULT NULL,
  `fld_firstname` varchar(50) DEFAULT NULL,
  `fld_middlename` varchar(50) DEFAULT NULL,
  `fld_lastname` varchar(50) DEFAULT NULL,
  `fld_address` varchar(255) DEFAULT NULL,
  `fld_mobile` varchar(20) DEFAULT NULL,
  `fld_telephone` varchar(20) DEFAULT NULL,
  `fld_email` varchar(50) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  `fld_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`fld_userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`fld_userID`, `fld_type`, `fld_username`, `fld_password`, `fld_firstname`, `fld_middlename`, `fld_lastname`, `fld_address`, `fld_mobile`, `fld_telephone`, `fld_email`, `fld_dateCreated`, `fld_active`) VALUES
(9, 'owner', 'dondon', '0304048562a305972d5695f551940f', 'DOn', 'DOn', 'Don', 'Don', '23123131', '21312', '1231231', '0000-00-00', 1),
(10, 'owner', 'admin', 'd033e22ae348aeb5660fc2140aec35', 'ad', 'asd', 'sd', 'asd', 'ad', 'asdasd', 'ad@yahoo.com', '0000-00-00', 1),
(11, 'employee', 'ace', 'c14f6d18c139fe4631fd0da60a5e54', 'Ace', 'cariño', 'Cortes', 'Baybay City', '09064671783', '9627763', 'aceshang@gmail.com', '0000-00-00', 1),
(12, 'employee', 'Shemang', 'ca50ee09c3c00f1095d4a6e41d9740', 'Shem', 'Codera', 'Suyom', 'Visca,Baybay Leyte', '09352838741', '3357214', 'shemsuyom@yahoo.com', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertimesheet`
--

CREATE TABLE IF NOT EXISTS `tbl_usertimesheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_userID` int(11) DEFAULT NULL,
  `fld_status` varchar(50) DEFAULT NULL,
  `fld_timeIn` time DEFAULT NULL,
  `fld_timeOut` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
