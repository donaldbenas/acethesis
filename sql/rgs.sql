-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2013 at 04:44 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

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
(97, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

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
(25, 124, 2, 5, 10, 'Chesee', 'Chese whiz', 45879, 45.00);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

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
(55, 127, NULL, 'paid', NULL, NULL, '2013-03-18', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `tbl_invoices`
--

INSERT INTO `tbl_invoices` (`id`, `fld_customerID`, `fld_code`, `fld_dateCreated`, `fld_dueDate`, `fld_active`) VALUES
(124, 91, '2013-03-000124', '2013-03-18', '2013-03-28', 1),
(125, NULL, '', '2013-03-18', '0000-00-00', 0),
(126, NULL, '', '2013-03-18', '0000-00-00', 0),
(127, 97, '', '2013-03-18', '0000-00-00', 0);

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
