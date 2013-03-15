-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2013 at 02:06 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `fld_status`, `fld_firstname`, `fld_middlename`, `fld_lastname`, `fld_address`, `fld_mobile`, `fld_telephone`, `fld_email`, `fld_dateCreated`) VALUES
(1, 'regular', 'Donald', 'Platino', 'Benas', 'Dasmarinas, Cavite', '0923646597', '4524978', 'donaldbenas@gmail.com', '0000-00-00'),
(2, 'regular', 'Jethro', 'Acse', 'Brillion', 'Lucban, Quezon', '0965461324', '4584697', 'jethro@yahoo.com', '0000-00-00'),
(3, 'ordinary', 'Jethro', 'Acse', 'Brillion', 'Lucban, Quezon', '0965461324', '4584697', 'jethro@yahoo.com', '0000-00-00'),
(4, 'regular', 'dasda', '', '', '', '', '', '', '0000-00-00'),
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
(33, 'ordinary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00');

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
  `fld_invoiceItemsID` int(11) NOT NULL DEFAULT '0',
  `fld_productID` int(16) DEFAULT NULL,
  `fld_productQuantity` int(12) DEFAULT NULL,
  `fld_productName` varchar(50) DEFAULT NULL,
  `fld_productDescription` varchar(50) DEFAULT NULL,
  `fld_productCode` int(11) NOT NULL DEFAULT '0',
  `fld_productPrice` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoicereceipts`
--

CREATE TABLE IF NOT EXISTS `tbl_invoicereceipts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_invoiceID` int(11) DEFAULT NULL,
  `fld_orNumber` varchar(20) DEFAULT NULL,
  `fld_paid` double DEFAULT NULL,
  `fld_price` double DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  `fld_dateCanceled` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoices`
--

CREATE TABLE IF NOT EXISTS `tbl_invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_customerID` int(11) DEFAULT NULL,
  `fld_code` int(11) NOT NULL DEFAULT '0',
  `fld_dateCreated` date DEFAULT NULL,
  `fld_dueDate` date DEFAULT NULL,
  `fld_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbl_invoices`
--

INSERT INTO `tbl_invoices` (`id`, `fld_customerID`, `fld_code`, `fld_dateCreated`, `fld_dueDate`, `fld_active`) VALUES
(1, 0, 0, '0000-00-00', '0000-00-00', 0),
(2, NULL, 0, '0000-00-00', '0000-00-00', 0),
(3, 7, 0, '0000-00-00', '0000-00-00', 0),
(4, 8, 0, '0000-00-00', '0000-00-00', 0),
(5, 9, 0, '0000-00-00', '0000-00-00', 0),
(6, 10, 0, '0000-00-00', '0000-00-00', 0),
(7, 11, 0, '0000-00-00', '0000-00-00', 0),
(8, 12, 0, '0000-00-00', '0000-00-00', 0),
(9, 13, 0, '0000-00-00', '0000-00-00', 0),
(10, 14, 0, '0000-00-00', '0000-00-00', 0),
(11, 15, 0, '0000-00-00', '0000-00-00', 0),
(12, 16, 0, '0000-00-00', '0000-00-00', 0),
(13, 17, 0, '0000-00-00', '0000-00-00', 0),
(14, 18, 0, '0000-00-00', '0000-00-00', 0),
(15, 19, 0, '0000-00-00', '0000-00-00', 0),
(16, 20, 0, '0000-00-00', '0000-00-00', 0),
(17, 21, 0, '0000-00-00', '0000-00-00', 0),
(18, 22, 0, '0000-00-00', '0000-00-00', 0),
(19, 23, 0, '0000-00-00', '0000-00-00', 0),
(20, 24, 0, '0000-00-00', '0000-00-00', 0),
(21, 25, 0, '0000-00-00', '0000-00-00', 0),
(22, 26, 0, '0000-00-00', '0000-00-00', 0),
(23, 27, 0, '0000-00-00', '0000-00-00', 0),
(24, 28, 0, '0000-00-00', '0000-00-00', 0),
(25, 29, 0, '0000-00-00', '0000-00-00', 0),
(26, 30, 0, '0000-00-00', '0000-00-00', 0),
(27, 31, 0, '0000-00-00', '0000-00-00', 0),
(28, 32, 0, '0000-00-00', '0000-00-00', 0),
(29, 33, 0, '0000-00-00', '0000-00-00', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `fld_productCompanyID`, `fld_name`, `fld_description`, `fld_code`, `fld_dateCreated`, `fld_price`, `fld_amount`) VALUES
(1, 1, 'Fish Ball', 'Balls in a Balls', 89465, '0000-00-00', 45.00, 5),
(2, 1, 'Hotdog', 'Hot in a dog', 56876, '0000-00-00', 102.00, 100),
(3, 1, 'asda', 'asda', 0, '0000-00-00', 0.00, 0),
(4, 2, 'ad', 'dsa', 0, '0000-00-00', 0.00, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_suppliers`
--

INSERT INTO `tbl_suppliers` (`id`, `fld_productCompanyID`, `fld_representativeName`, `fld_representativeID`, `fld_address`, `fld_mobile`, `fld_telephone`, `fld_email`, `fld_dateCreated`) VALUES
(1, 2, 'Jethro', 2147483647, 'Alabang', '098645613164', '8954-5464', 'jethro@yahoo.com', '0000-00-00'),
(2, 1, 'Donald', 59464678, 'Santa Rosa', '09326646548', '481-98979', 'donaldbenas@gmail.com', '0000-00-00');

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
(10, 'owner', 'admin', 'f10e2821bbbea527ea02200352313b', 'ad', 'asd', 'sd', 'asd', 'ad', 'asdasd', 'ad@yahoo.com', '0000-00-00', 1),
(11, 'owner', 'admin', 'da39a3ee5e6b4b0d3255bfef956018', '', '', '', '', '', '', '', '0000-00-00', 1),
(12, 'owner', 'admin', 'd033e22ae348aeb5660fc2140aec35', '', '', '', '', '', '', '', '0000-00-00', 1);

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
