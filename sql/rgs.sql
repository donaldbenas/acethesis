-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2013 at 01:12 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `fld_status`, `fld_firstname`, `fld_middlename`, `fld_lastname`, `fld_address`, `fld_mobile`, `fld_telephone`, `fld_email`, `fld_dateCreated`) VALUES
(1, 'regular', 'Donald', 'Platino', 'Benas', 'Dasmarinas, Cavite', '0923646597', '4524978', 'donaldbenas@gmail.com', '0000-00-00'),
(2, 'regular', 'Jethro', 'Acse', 'Brillion', 'Lucban, Quezon', '0965461324', '4584697', 'jethro@yahoo.com', '0000-00-00');

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
  `fld_status` varchar(10) DEFAULT NULL,
  `fld_code` int(11) NOT NULL DEFAULT '0',
  `fld_dateCreated` date DEFAULT NULL,
  `fld_dueDate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_supplierID` int(11) NOT NULL DEFAULT '0',
  `fld_name` varchar(50) DEFAULT NULL,
  `fld_description` varchar(50) DEFAULT NULL,
  `fld_code` int(11) NOT NULL DEFAULT '0',
  `fld_dateCreated` date DEFAULT NULL,
  `fld_price` float(7,2) DEFAULT NULL,
  `fld_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `fld_supplierID`, `fld_name`, `fld_description`, `fld_code`, `fld_dateCreated`, `fld_price`, `fld_amount`) VALUES
(1, 1, 'Fish Ball', 'Balls in a Balls', 89465, '0000-00-00', 45.00, 5),
(2, 2, 'Hotdog', 'Hot in a dog', 56876, '0000-00-00', 102.00, 100);

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
  `fld_companyName` varchar(255) NOT NULL,
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

INSERT INTO `tbl_suppliers` (`id`, `fld_companyName`, `fld_representativeName`, `fld_representativeID`, `fld_address`, `fld_mobile`, `fld_telephone`, `fld_email`, `fld_dateCreated`) VALUES
(1, 'Pure Foods', 'Jethro', 2147483647, 'Alabang', '098645613164', '8954-5464', 'jethro@yahoo.com', '0000-00-00'),
(2, 'Pure Foods', 'Donald', 59464678, 'Santa Rosa', '09326646548', '481-98979', 'donaldbenas@gmail.com', '0000-00-00');

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
