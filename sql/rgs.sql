-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2013 at 03:07 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `fld_status`, `fld_firstname`, `fld_middlename`, `fld_lastname`, `fld_address`, `fld_mobile`, `fld_telephone`, `fld_email`, `fld_dateCreated`) VALUES
(1, 'regular', 'Donald', 'Platino', 'Benas', 'Dasmarinas, Cavite', '0923646597', '4524978', 'donaldbenas@gmail.com', '0000-00-00'),
(2, 'regular', 'Jethro', 'Acse', 'Brillion', 'Lucban, Quezon', '0965461324', '4584697', 'jethro@yahoo.com', '0000-00-00'),
(3, 'ordinary', 'Jethro', 'Acse', 'Brillion', 'Lucban, Quezon', '0965461324', '4584697', 'jethro@yahoo.com', '0000-00-00'),
(5, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(6, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(7, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(8, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(9, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(10, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(11, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(12, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(13, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(14, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(15, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(16, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(17, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(18, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(19, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(20, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(21, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(22, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(23, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(24, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(25, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(26, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(27, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(28, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(29, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(30, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(31, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(32, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(33, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(34, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(35, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(36, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(37, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(38, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(39, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(40, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(41, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(42, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(43, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(44, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(45, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(46, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(47, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(48, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(49, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(50, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(51, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(52, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(53, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(54, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(55, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(56, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(57, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(58, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(59, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(60, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(61, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(62, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(63, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(64, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(65, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(66, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(67, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(68, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(69, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(70, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(71, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(72, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(73, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(74, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(75, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(76, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(77, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(78, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(79, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(80, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(81, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(82, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(83, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
(15, 98, 1, 1, 6, 'Fish Ball', 'Balls in a Balls', 89465, 45.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoicereceipts`
--

CREATE TABLE IF NOT EXISTS `tbl_invoicereceipts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_invoiceID` int(11) DEFAULT NULL,
  `fld_orNumber` varchar(20) DEFAULT NULL,
  `fld_paid` float(8,2) DEFAULT NULL,
  `fld_price` float(8,2) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  `fld_dateCanceled` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbl_invoicereceipts`
--

INSERT INTO `tbl_invoicereceipts` (`id`, `fld_invoiceID`, `fld_orNumber`, `fld_paid`, `fld_price`, `fld_dateCreated`, `fld_dateCanceled`) VALUES
(1, 45, '33333', 0.00, 945.00, '2013-03-16', NULL),
(2, 64, '31241431-23', NULL, 800.00, '2013-03-16', NULL),
(3, 75, NULL, NULL, NULL, '0000-00-00', NULL),
(4, 76, NULL, NULL, NULL, '2013-03-16', NULL),
(5, 77, NULL, NULL, NULL, '2013-03-16', NULL),
(6, 78, NULL, NULL, NULL, '2013-03-16', NULL),
(7, 79, NULL, NULL, NULL, '2013-03-16', NULL),
(8, 80, NULL, NULL, NULL, '2013-03-16', NULL),
(9, 81, NULL, NULL, NULL, '2013-03-16', NULL),
(10, 82, NULL, NULL, NULL, '2013-03-16', NULL),
(11, 83, NULL, NULL, NULL, '2013-03-16', NULL),
(12, 84, NULL, NULL, NULL, '2013-03-16', NULL),
(13, 85, NULL, NULL, NULL, '2013-03-16', NULL),
(14, 86, NULL, NULL, NULL, '2013-03-16', NULL),
(15, 87, NULL, NULL, NULL, '2013-03-16', NULL),
(16, 88, NULL, NULL, NULL, '2013-03-16', NULL),
(17, 89, NULL, NULL, NULL, '2013-03-16', NULL),
(18, 90, NULL, NULL, NULL, '2013-03-16', NULL),
(19, 91, NULL, NULL, NULL, '2013-03-16', NULL),
(20, 92, NULL, NULL, NULL, '2013-03-16', NULL),
(21, 93, NULL, NULL, NULL, '2013-03-16', NULL),
(22, 94, NULL, NULL, NULL, '2013-03-16', NULL),
(23, 95, NULL, NULL, NULL, '2013-03-17', NULL),
(24, 96, NULL, NULL, NULL, '2013-03-17', NULL),
(25, 97, NULL, NULL, NULL, '2013-03-17', NULL),
(26, 98, '41241241', 0.00, 630.00, '2013-03-17', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `tbl_invoices`
--

INSERT INTO `tbl_invoices` (`id`, `fld_customerID`, `fld_code`, `fld_dateCreated`, `fld_dueDate`, `fld_active`) VALUES
(45, 49, '2013-03-000045', '2013-03-16', '2013-03-17', 1),
(46, 50, '0', '0000-00-00', '0000-00-00', 0),
(47, 51, '0', '0000-00-00', '0000-00-00', 0),
(48, 52, '0', '0000-00-00', '0000-00-00', 0),
(49, 53, '0', '0000-00-00', '0000-00-00', 0),
(50, 54, '0', '0000-00-00', '0000-00-00', 0),
(51, 55, '0', '0000-00-00', '0000-00-00', 0),
(52, 56, '0', '0000-00-00', '0000-00-00', 0),
(53, 57, '0', '0000-00-00', '0000-00-00', 0),
(54, 58, '0', '0000-00-00', '0000-00-00', 0),
(55, 59, '0', '0000-00-00', '0000-00-00', 0),
(56, 60, '0', '0000-00-00', '0000-00-00', 0),
(57, 61, '0', '0000-00-00', '0000-00-00', 0),
(58, 62, '0', '0000-00-00', '0000-00-00', 0),
(59, 63, '0', '0000-00-00', '0000-00-00', 0),
(60, 64, '0', '0000-00-00', '0000-00-00', 0),
(61, 65, '0', '0000-00-00', '0000-00-00', 0),
(62, 66, '0', '0000-00-00', '0000-00-00', 0),
(63, 67, '0', '0000-00-00', '0000-00-00', 0),
(64, 68, '2013-03-000064', '2013-03-16', '0000-00-00', 1),
(65, 69, '', '0000-00-00', '0000-00-00', 0),
(66, 70, '', '0000-00-00', '0000-00-00', 0),
(67, 71, '', '0000-00-00', '0000-00-00', 0),
(68, 72, '', '0000-00-00', '0000-00-00', 0),
(69, 73, '', '0000-00-00', '0000-00-00', 0),
(70, 74, '', '0000-00-00', '0000-00-00', 0),
(71, 75, '', '0000-00-00', '0000-00-00', 0),
(72, 76, '', '0000-00-00', '0000-00-00', 0),
(73, 77, '', '0000-00-00', '0000-00-00', 0),
(74, 78, '', '0000-00-00', '0000-00-00', 0),
(75, 79, '', '0000-00-00', '0000-00-00', 0),
(76, 80, '', '0000-00-00', '0000-00-00', 0),
(77, NULL, '', '2013-03-16', '0000-00-00', 0),
(78, NULL, '', '2013-03-16', '0000-00-00', 0),
(79, NULL, '', '2013-03-16', '0000-00-00', 0),
(80, NULL, '', '2013-03-16', '0000-00-00', 0),
(81, NULL, '', '2013-03-16', '0000-00-00', 0),
(82, 81, '', '2013-03-16', '0000-00-00', 0),
(83, NULL, '', '2013-03-16', '0000-00-00', 0),
(84, NULL, '', '2013-03-16', '0000-00-00', 0),
(85, NULL, '', '2013-03-16', '0000-00-00', 0),
(86, 82, '', '2013-03-16', '0000-00-00', 0),
(87, NULL, '', '2013-03-16', '0000-00-00', 0),
(88, NULL, '', '2013-03-16', '0000-00-00', 0),
(89, NULL, '', '2013-03-16', '0000-00-00', 0),
(90, NULL, '', '2013-03-16', '0000-00-00', 0),
(91, NULL, '', '2013-03-16', '0000-00-00', 0),
(92, NULL, '', '2013-03-16', '0000-00-00', 0),
(93, NULL, '', '2013-03-16', '0000-00-00', 0),
(94, NULL, '', '2013-03-16', '0000-00-00', 0),
(95, NULL, '', '2013-03-17', '0000-00-00', 0),
(96, NULL, '', '2013-03-17', '0000-00-00', 0),
(97, NULL, '', '2013-03-17', '0000-00-00', 0),
(98, 83, '2013-03-000098', '2013-03-17', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productcompany`
--

CREATE TABLE IF NOT EXISTS `tbl_productcompany` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `fld_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_productcompany`
--

INSERT INTO `tbl_productcompany` (`id`, `fld_name`) VALUES
(1, 'Pure Foods'),
(2, 'Magnolia');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `fld_productCompanyID`, `fld_name`, `fld_description`, `fld_code`, `fld_dateCreated`, `fld_price`, `fld_amount`) VALUES
(1, 1, 'Fish Ball', 'Balls in a Balls', 89465, '0000-00-00', 45.00, 5),
(2, 1, 'Hotdog', 'Hot in a dog', 56876, '0000-00-00', 102.00, 100),
(5, 2, 'Chesee', 'Chese whiz', 45879, '0000-00-00', 45.00, 8);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_suppliers`
--

INSERT INTO `tbl_suppliers` (`id`, `fld_productCompanyID`, `fld_representativeName`, `fld_representativeID`, `fld_address`, `fld_mobile`, `fld_telephone`, `fld_email`, `fld_dateCreated`) VALUES
(1, 2, 'Jethro', 2147483647, 'Alabang', '098645613164', '8954-5464', 'jethro@yahoo.com', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`fld_userID`, `fld_type`, `fld_username`, `fld_password`, `fld_firstname`, `fld_middlename`, `fld_lastname`, `fld_address`, `fld_mobile`, `fld_telephone`, `fld_email`, `fld_dateCreated`, `fld_active`) VALUES
(9, 'owner', 'dondon', '0304048562a305972d5695f551940f', 'DOn', 'DOn', 'Don', 'Don', '23123131', '21312', '1231231', '0000-00-00', 1),
(10, 'owner', 'admin', 'd033e22ae348aeb5660fc2140aec35', 'ad', 'asd', 'sd', 'asd', 'ad', 'asdasd', 'ad@yahoo.com', '0000-00-00', 1);

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
