-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2013 at 03:28 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `fld_status`, `fld_firstname`, `fld_middlename`, `fld_lastname`, `fld_address`, `fld_mobile`, `fld_telephone`, `fld_email`, `fld_dateCreated`) VALUES
(110, 'regular', 'Erick', '', 'Santos', '', '', '', '', '0000-00-00'),
(111, 'regular', 'Cammile', '', 'Prats', '', '', '', '', '0000-00-00'),
(112, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(113, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(114, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(115, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(116, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(117, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(118, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(119, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(120, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(121, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(122, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(123, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `tbl_invoiceitems`
--

INSERT INTO `tbl_invoiceitems` (`id`, `fld_invoiceID`, `fld_productCompanyID`, `fld_productID`, `fld_productQuantity`, `fld_productName`, `fld_productDescription`, `fld_productCode`, `fld_productPrice`) VALUES
(54, 183, 3, 16, 6, '555 Tuna Mackarel in original flavor', '210g', 5, 48.00),
(55, 183, 3, 24, 4, 'AngelCondensed', '410ml', 9, 40.00),
(56, 183, 8, 38, 12, 'Nestle Cofee Mate', 'Sachet ', 35, 84.00),
(57, 188, 7, 34, 3, 'Happy Napkin', '8pcs', 29, 17.00);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `tbl_invoicereceipts`
--

INSERT INTO `tbl_invoicereceipts` (`id`, `fld_invoiceID`, `fld_orNumber`, `fld_status`, `fld_paid`, `fld_price`, `fld_dateCreated`, `fld_dateCanceled`) VALUES
(106, 178, '111111111111', 'paid', 3000.00, 2078.00, '2013-03-20', NULL),
(107, 179, '24444441231', 'unpaid', 2000.00, 2336.00, '2013-03-20', NULL),
(108, 180, '24444441231', 'paid', 550.00, 540.00, '2013-03-20', NULL),
(109, 181, NULL, 'paid', NULL, NULL, '2013-03-20', NULL),
(110, 182, NULL, 'paid', NULL, NULL, '2013-03-21', NULL),
(111, 183, '', 'paid', 700.00, 1456.00, '2013-03-21', NULL),
(112, 184, NULL, 'paid', NULL, NULL, '2013-03-21', NULL),
(113, 185, NULL, 'paid', NULL, NULL, '2013-03-21', NULL),
(114, 186, NULL, 'paid', NULL, NULL, '2013-03-21', NULL),
(115, 187, NULL, 'paid', NULL, NULL, '2013-03-21', NULL),
(116, 188, NULL, 'paid', NULL, NULL, '2013-03-21', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=189 ;

--
-- Dumping data for table `tbl_invoices`
--

INSERT INTO `tbl_invoices` (`id`, `fld_customerID`, `fld_code`, `fld_dateCreated`, `fld_dueDate`, `fld_active`) VALUES
(178, 116, '2013-03-000178', '2013-03-20', '2013-03-20', 1),
(179, 111, '2013-03-000179', '2013-03-20', '2013-03-26', 1),
(180, 111, '2013-03-000180', '2013-03-20', '2013-04-03', 1),
(181, NULL, '', '2013-03-20', '0000-00-00', 0),
(182, 117, '', '2013-03-21', '0000-00-00', 0),
(183, 118, '2013-03-000183', '2013-03-21', '2013-03-21', 1),
(184, 119, '', '2013-03-21', '0000-00-00', 0),
(185, 120, '', '2013-03-21', '0000-00-00', 0),
(186, 121, '', '2013-03-21', '0000-00-00', 0),
(187, 122, '', '2013-03-21', '0000-00-00', 0),
(188, 123, '', '2013-03-21', '0000-00-00', 0);

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
(6, 3, 'Youngs Town Corned beef', '155g', 26, '0000-00-00', 26.00, 80, '2013-03-21'),
(7, 3, '555 Tuna Adobo Flavor', '155g', 3, '0000-00-00', 22.00, 80, '2013-03-21'),
(8, 3, '555 Tuna Caldereta Flavor', '155g', 4, '0000-00-00', 22.00, 80, '2013-03-21'),
(9, 3, '555 Tuna Mechada', '155g', 6, '0000-00-00', 22.00, 80, '2013-03-21'),
(10, 3, 'Youngs Town Sardines Spicy', '155g', 27, '0000-00-00', 14.50, 80, '2013-03-21'),
(11, 3, 'Youngs Town SardinesTomato Sauce', '155g', 28, '0000-00-00', 14.50, 80, '2013-03-21'),
(12, 3, 'Master Sardines Tomato ', '155g', 22, '0000-00-00', 14.00, 80, '2013-03-21'),
(13, 3, 'Sardines Tomato ', '155g', 23, '0000-00-00', 14.50, 80, '2013-03-21'),
(14, 3, 'Fiesta Mechado', '210g', 18, '0000-00-00', 47.00, 80, '2013-03-21'),
(15, 3, 'Sardines Tomato Sauce', '210g', 24, '0000-00-00', 36.00, 80, '2013-03-21'),
(16, 3, '555 Tuna Mackarel in original flavor', '210g', 5, '0000-00-00', 48.00, 14, '2013-03-21'),
(17, 3, 'Argentina Meat Loaf', '210g', 12, '0000-00-00', 29.00, 80, '2013-03-21'),
(18, 3, 'Argentina Corned beef', '210g', 11, '0000-00-00', 46.00, 80, '2013-03-21'),
(19, 3, 'Argentina Meat Loaf', '155g', 13, '0000-00-00', 34.00, 80, '2013-03-21'),
(20, 3, 'Argentina Beef Loaf', '150g', 10, '0000-00-00', 16.50, 80, '2013-03-21'),
(21, 3, 'Angel Evaporada', '170g', 8, '0000-00-00', 19.00, 80, '2013-03-21'),
(22, 3, 'Alpine Evaporated', '410ml', 7, '0000-00-00', 27.00, 80, '2013-03-21'),
(23, 3, 'Liberty Condensed', '410ml', 20, '0000-00-00', 48.00, 80, '2013-03-21'),
(24, 3, 'AngelCondensed', '410ml', 9, '0000-00-00', 40.00, 36, '2013-03-21'),
(25, 7, 'Holidays Meat sauce', '380g', 30, '0000-00-00', 39.00, 80, '2013-03-21'),
(26, 3, 'Autralian Karne Norte Corned beef', '380g', 14, '0000-00-00', 38.00, 80, '2013-03-21'),
(27, 3, 'Winner Meat Loaf', '110g', 25, '0000-00-00', 14.00, 80, '2013-03-21'),
(28, 3, 'El rancho Corned beef', '155g', 17, '0000-00-00', 16.50, 80, '2013-03-21'),
(29, 3, 'El rancho Corned beef', '155g', 16, '0000-00-00', 21.00, 80, '2013-03-21'),
(30, 3, 'Jersey Condensed', '155g', 19, '0000-00-00', 26.50, 80, '2013-03-21'),
(31, 3, 'Ligo Calmares', '390ml', 21, '0000-00-00', 32.00, 80, '2013-03-21'),
(32, 3, 'El rancho Corned beef', '155g', 15, '0000-00-00', 26.00, 80, '2013-03-21'),
(33, 7, 'Huggies Pampers', '4m', 31, '0000-00-00', 16.00, 80, '2013-03-21'),
(34, 7, 'Happy Napkin', '8pcs', 29, '0000-00-00', 17.00, 80, '2013-03-21'),
(35, 7, 'Those Days Napkin', '8pcs', 33, '0000-00-00', 20.00, 80, '2013-03-21'),
(36, 7, 'Surf', 'Blue bar', 32, '0000-00-00', 21.50, 80, '2013-03-21'),
(37, 7, 'Tide', 'White bar', 34, '0000-00-00', 20.00, 80, '2013-03-21'),
(38, 8, 'Nestle Cofee Mate ', 'Sachet ', 35, '0000-00-00', 84.00, 56, '2013-03-21');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=496 ;

--
-- Dumping data for table `tbl_stockproductlogs`
--

INSERT INTO `tbl_stockproductlogs` (`id`, `fld_supplier`, `fld_product`, `fld_description`, `fld_price`, `fld_quantity`, `fld_sold`, `fld_dateCreated`) VALUES
(463, 'Akramont Marketing Corp.', 'Happy Napkin', '8pcs', 17.00, 80, 0, '2013-03-21'),
(464, 'Akramont Marketing Corp.', 'Holidays Meat sauce', '380g', 39.00, 80, 0, '2013-03-21'),
(465, 'Akramont Marketing Corp.', 'Huggies Pampers', '4m', 16.00, 80, 0, '2013-03-21'),
(466, 'Akramont Marketing Corp.', 'Surf', 'Blue bar', 21.50, 80, 0, '2013-03-21'),
(467, 'Akramont Marketing Corp.', 'Those Days Napkin', '8pcs', 20.00, 80, 0, '2013-03-21'),
(468, 'Akramont Marketing Corp.', 'Tide', 'White bar', 20.00, 80, 0, '2013-03-21'),
(469, 'Dranix Distributor Inc.', '555 Tuna Adobo Flavor', '155g', 22.00, 80, 0, '2013-03-21'),
(470, 'Dranix Distributor Inc.', '555 Tuna Caldereta Flavor', '155g', 22.00, 80, 0, '2013-03-21'),
(471, 'Dranix Distributor Inc.', '555 Tuna Mackarel in original flavor', '210g', 48.00, 26, 12, '2013-03-21'),
(472, 'Dranix Distributor Inc.', '555 Tuna Mechada', '155g', 22.00, 80, 0, '2013-03-21'),
(473, 'Dranix Distributor Inc.', 'Alpine Evaporated', '410ml', 27.00, 80, 0, '2013-03-21'),
(474, 'Dranix Distributor Inc.', 'Angel Evaporada', '170g', 19.00, 80, 0, '2013-03-21'),
(475, 'Dranix Distributor Inc.', 'AngelCondensed', '410ml', 40.00, 44, 8, '2013-03-21'),
(476, 'Dranix Distributor Inc.', 'Argentina Beef Loaf', '150g', 16.50, 80, 0, '2013-03-21'),
(477, 'Dranix Distributor Inc.', 'Argentina Corned beef', '210g', 46.00, 80, 0, '2013-03-21'),
(478, 'Dranix Distributor Inc.', 'Argentina Meat Loaf', '155g', 34.00, 80, 0, '2013-03-21'),
(479, 'Dranix Distributor Inc.', 'Argentina Meat Loaf', '210g', 29.00, 80, 0, '2013-03-21'),
(480, 'Dranix Distributor Inc.', 'Autralian Karne Norte Corned beef', '380g', 38.00, 80, 0, '2013-03-21'),
(481, 'Dranix Distributor Inc.', 'El rancho Corned beef', '155g', 26.00, 80, 0, '2013-03-21'),
(482, 'Dranix Distributor Inc.', 'El rancho Corned beef', '155g', 16.50, 80, 0, '2013-03-21'),
(483, 'Dranix Distributor Inc.', 'El rancho Corned beef', '155g', 21.00, 80, 0, '2013-03-21'),
(484, 'Dranix Distributor Inc.', 'Fiesta Mechado', '210g', 47.00, 80, 0, '2013-03-21'),
(485, 'Dranix Distributor Inc.', 'Jersey Condensed', '155g', 26.50, 80, 0, '2013-03-21'),
(486, 'Dranix Distributor Inc.', 'Liberty Condensed', '410ml', 48.00, 80, 0, '2013-03-21'),
(487, 'Dranix Distributor Inc.', 'Ligo Calmares', '390ml', 32.00, 80, 0, '2013-03-21'),
(488, 'Dranix Distributor Inc.', 'Master Sardines Tomato ', '155g', 14.00, 80, 0, '2013-03-21'),
(489, 'Dranix Distributor Inc.', 'Sardines Tomato ', '155g', 14.50, 80, 0, '2013-03-21'),
(490, 'Dranix Distributor Inc.', 'Sardines Tomato Sauce', '210g', 36.00, 80, 0, '2013-03-21'),
(491, 'Dranix Distributor Inc.', 'Winner Meat Loaf', '110g', 14.00, 80, 0, '2013-03-21'),
(492, 'Dranix Distributor Inc.', 'Youngs Town Corned beef', '155g', 26.00, 80, 0, '2013-03-21'),
(493, 'Dranix Distributor Inc.', 'Youngs Town Sardines Spicy', '155g', 14.50, 80, 0, '2013-03-21'),
(494, 'Dranix Distributor Inc.', 'Youngs Town SardinesTomato Sauce', '155g', 14.50, 80, 0, '2013-03-21'),
(495, 'Fast Distribution Corporation', 'Nestle Cofee Mate ', 'Sachet ', 84.00, 68, 12, '2013-03-21');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_stocks`
--

INSERT INTO `tbl_stocks` (`id`, `fld_productID`, `fld_invoiceID`, `fld_quantity`, `fld_amount`, `fld_dateCreated`) VALUES
(16, 16, 1, 0, 6, '2013-03-21'),
(17, 24, 1, 0, 4, '2013-03-21'),
(18, 16, 1, 0, 6, '2013-03-21'),
(19, 24, 1, 0, 4, '2013-03-21'),
(20, 38, 1, 0, 12, '2013-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stockupdatelogs`
--

CREATE TABLE IF NOT EXISTS `tbl_stockupdatelogs` (
  `id` int(11) NOT NULL,
  `fld_dateCreated` date NOT NULL,
  `fld_sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stockupdatelogs`
--

INSERT INTO `tbl_stockupdatelogs` (`id`, `fld_dateCreated`, `fld_sold`) VALUES
(0, '2013-03-21', 32);

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
