-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2013 at 07:30 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=367 ;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `fld_status`, `fld_firstname`, `fld_middlename`, `fld_lastname`, `fld_address`, `fld_mobile`, `fld_telephone`, `fld_email`, `fld_dateCreated`) VALUES
(110, 'regular', 'Erick', '', 'Santos', '', '', '', '', '0000-00-00'),
(111, 'regular', 'Cammile', '', 'Prats', '', '', '', '', '0000-00-00'),
(357, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(358, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(359, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(360, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(361, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(362, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(363, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(364, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(365, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(366, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=180 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=432 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=504 ;

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
  `fld_stockUpdated` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `fld_productCompanyID`, `fld_name`, `fld_description`, `fld_code`, `fld_dateCreated`, `fld_price`, `fld_amount`, `fld_stockUpdated`) VALUES
(2, 1, 'Hotdog', 'Hot in a dog', 1, '0000-00-00', 102.00, 100, '0000-00-00'),
(5, 2, 'Chesee', 'Chese whiz', 2, '0000-00-00', 45.00, 8, '0000-00-00'),
(6, 3, 'Youngs Town Corned beef', '155g', 26, '0000-00-00', 26.00, 120, '0000-00-00'),
(7, 3, '555 Tuna Adobo Flavor', '155grams', 3, '0000-00-00', 22.00, 20, '0000-00-00'),
(8, 3, '555 Tuna Caldereta Flavor', '155g', 4, '0000-00-00', 22.00, 16, '0000-00-00'),
(9, 3, '555 Tuna Mechada', '155g', 6, '0000-00-00', 22.00, 35, '0000-00-00'),
(10, 3, 'Youngs Town Sardines Spicy', '155g', 27, '0000-00-00', 14.50, 110, '0000-00-00'),
(11, 3, 'Youngs Town SardinesTomato Sauce', '155g', 28, '0000-00-00', 14.50, 26, '0000-00-00'),
(12, 3, 'Master Sardines Tomato ', '155g', 22, '0000-00-00', 14.00, 50, '0000-00-00'),
(13, 3, 'Sardines Tomato ', '155g', 23, '0000-00-00', 14.50, 25, '0000-00-00'),
(14, 3, 'Fiesta Mechado', '210g', 18, '0000-00-00', 47.00, 25, '0000-00-00'),
(15, 3, 'Sardines Tomato Sauce', '210g', 24, '0000-00-00', 36.00, 20, '0000-00-00'),
(16, 3, '555 Tuna Mackarel in original flavor', '210g', 5, '0000-00-00', 48.00, 30, '0000-00-00'),
(17, 3, 'Argentina Meat Loaf', '210g', 12, '0000-00-00', 29.00, 23, '0000-00-00'),
(18, 3, 'Argentina Corned beef', '210g', 11, '0000-00-00', 46.00, 50, '0000-00-00'),
(19, 3, 'Argentina Meat Loaf', '155g', 13, '0000-00-00', 34.00, 65, '0000-00-00'),
(20, 3, 'Argentina Beef Loaf', '150g', 10, '0000-00-00', 16.50, 55, '0000-00-00'),
(21, 3, 'Angel Evaporada', '170g', 8, '0000-00-00', 19.00, 98, '0000-00-00'),
(22, 3, 'Alpine Evaporated', '410ml', 7, '0000-00-00', 27.00, 52, '0000-00-00'),
(23, 3, 'Liberty Condensed', '410ml', 20, '0000-00-00', 48.00, 15, '0000-00-00'),
(24, 3, 'AngelCondensed', '410ml', 9, '0000-00-00', 40.00, 16, '0000-00-00'),
(25, 7, 'Holidays Meat sauce', '380grams', 30, '0000-00-00', 39.00, 24, '0000-00-00'),
(26, 3, 'Autralian Karne Norte Corned beef', '380grams', 14, '0000-00-00', 38.00, 12, '0000-00-00'),
(27, 3, 'Winner Meat Loaf', '110g', 25, '0000-00-00', 14.00, 25, '0000-00-00'),
(28, 3, 'El rancho Corned beef', '155g', 17, '0000-00-00', 16.50, 25, '0000-00-00'),
(29, 3, 'El rancho Corned beef', '155g', 16, '0000-00-00', 21.00, 15, '0000-00-00'),
(30, 3, 'Jersey Condensed', '155g', 19, '0000-00-00', 26.50, 35, '0000-00-00'),
(31, 3, 'Ligo Calmares', '390ML', 21, '0000-00-00', 32.00, 5, '0000-00-00'),
(32, 3, 'El rancho Corned beef', '155g', 15, '0000-00-00', 26.00, 36, '0000-00-00'),
(33, 7, 'Huggies Pampers', '4M', 31, '0000-00-00', 16.00, 50, '0000-00-00'),
(34, 7, 'Happy Napkin', '8pcs', 29, '0000-00-00', 17.00, 30, '0000-00-00'),
(35, 7, 'Those Days Napkin', '8pcs', 33, '0000-00-00', 20.00, 40, '0000-00-00'),
(36, 7, 'Surf', 'Blue bar', 32, '0000-00-00', 21.50, 35, '0000-00-00'),
(37, 7, 'Tide', 'White bar', 34, '0000-00-00', 20.00, 60, '0000-00-00'),
(38, 8, 'Nestle Cofee Mate ', 'Sachet ', 35, '0000-00-00', 84.00, 30, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stockproductlogs`
--

CREATE TABLE IF NOT EXISTS `tbl_stockproductlogs` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `fld_supplier` varchar(100) NOT NULL,
  `fld_product` varchar(100) NOT NULL,
  `fld_description` varchar(255) NOT NULL,
  `fld_price` float(8,2) NOT NULL,
  `fld_quantity` int(11) NOT NULL,
  `fld_sold` int(11) NOT NULL,
  `fld_dateCreated` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1059 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stocks`
--

CREATE TABLE IF NOT EXISTS `tbl_stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_productID` int(11) DEFAULT NULL,
  `fld_invoiceID` int(11) DEFAULT NULL,
  `fld_quantity` int(11) NOT NULL DEFAULT '0',
  `fld_amount` int(11) NOT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=225 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stockupdatelogs`
--

CREATE TABLE IF NOT EXISTS `tbl_stockupdatelogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_dateCreated` date NOT NULL,
  `fld_sold` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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
(10, 'owner', 'admin', 'd033e22ae348aeb5660fc2140aec35', 'Admin', 'Admin', 'Admin', 'Admin', '09101234567', '4561234', 'admin@admin.com', '0000-00-00', 1),
(11, 'employee', 'ace', 'c14f6d18c139fe4631fd0da60a5e54', 'Ace', 'cariño', 'Cortes', 'Baybay City', '09064671783', '9627763', 'aceshang@gmail.com', '0000-00-00', 1),
(12, 'employee', 'Shemang', 'ca50ee09c3c00f1095d4a6e41d9740', 'Shem', 'Codera', 'Suyom', 'Visca,Baybay Leyte', '09352838741', '3357214', 'shemsuyom@yahoo.com', '0000-00-00', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
