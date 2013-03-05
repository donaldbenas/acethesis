/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : rgs

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2013-02-09 00:30:55
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tbl_credit`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_credit`;
CREATE TABLE `tbl_credit` (
  `fld_creditID` int(11) NOT NULL AUTO_INCREMENT,
  `fld_debtorID` int(11) DEFAULT NULL,
  `fld_userID` int(11) DEFAULT NULL,
  `fld_personEnvolve` varchar(50) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`fld_creditID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_credit
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_credititems`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_credititems`;
CREATE TABLE `tbl_credititems` (
  `fld_creditID` int(11) NOT NULL DEFAULT '0',
  `fld_stockID` int(11) DEFAULT NULL,
  `fld_quantity` int(11) DEFAULT NULL,
  `fld_sellingPrice` int(11) DEFAULT NULL,
  `fld_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`fld_creditID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_credititems
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_customerpayment`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_customerpayment`;
CREATE TABLE `tbl_customerpayment` (
  `fld_debtorID` int(11) NOT NULL DEFAULT '0',
  `fld_dateCreated` date DEFAULT NULL,
  `fld_ORN` int(16) DEFAULT NULL,
  `fld_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`fld_debtorID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_customerpayment
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_debtor`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_debtor`;
CREATE TABLE `tbl_debtor` (
  `fld_debtorID` int(11) NOT NULL AUTO_INCREMENT,
  `fld_debtorName` varchar(50) DEFAULT NULL,
  `fld_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fld_debtorID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_debtor
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_delivery`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_delivery`;
CREATE TABLE `tbl_delivery` (
  `fld_deliveryID` int(11) NOT NULL AUTO_INCREMENT,
  `fld_supplierID` int(11) DEFAULT NULL,
  `fld_userID` int(11) DEFAULT NULL,
  `fld_deliveryNumber` int(16) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  `fld_totalAmount` int(11) DEFAULT NULL,
  PRIMARY KEY (`fld_deliveryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_delivery
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_deliverypayment`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_deliverypayment`;
CREATE TABLE `tbl_deliverypayment` (
  `fld_deliveryID` int(11) NOT NULL DEFAULT '0',
  `fld_ORN` int(16) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  `fld_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`fld_deliveryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_deliverypayment
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_drawings`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_drawings`;
CREATE TABLE `tbl_drawings` (
  `fld_drawingID` int(11) NOT NULL AUTO_INCREMENT,
  `fld_userID` int(11) DEFAULT NULL,
  `fld_debtorID` int(11) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  `fld_amount` int(11) DEFAULT NULL,
  `fld_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fld_drawingID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_drawings
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_expenses`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_expenses`;
CREATE TABLE `tbl_expenses` (
  `fld_expenseID` int(11) NOT NULL AUTO_INCREMENT,
  `fld_userID` int(11) DEFAULT NULL,
  `fld_type` varchar(30) DEFAULT NULL,
  `fld_description` varchar(255) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`fld_expenseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_expenses
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_invoice`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_invoice`;
CREATE TABLE `tbl_invoice` (
  `fld_userID` int(11) NOT NULL DEFAULT '0',
  `fld_salesID` int(11) DEFAULT NULL,
  `fld_invoiceNumber` int(16) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`fld_userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_invoice
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_purchaseitems`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_purchaseitems`;
CREATE TABLE `tbl_purchaseitems` (
  `fld_stockID` int(11) NOT NULL DEFAULT '0',
  `fld_deliveryID` int(11) DEFAULT NULL,
  `fld_supplierID` int(11) DEFAULT NULL,
  `fld_unitPrice` int(11) DEFAULT NULL,
  `fld_quantity` int(11) DEFAULT NULL,
  `fld_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`fld_stockID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_purchaseitems
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_sales`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_sales`;
CREATE TABLE `tbl_sales` (
  `fld_saleID` int(11) NOT NULL AUTO_INCREMENT,
  `fld_stockID` int(11) DEFAULT NULL,
  `fld_quantity` int(11) DEFAULT NULL,
  `fld_sellingPrice` int(11) DEFAULT NULL,
  `fld_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`fld_saleID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_sales
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_salesreturn`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_salesreturn`;
CREATE TABLE `tbl_salesreturn` (
  `fld_stockID` int(11) NOT NULL DEFAULT '0',
  `fld_returnDate` date DEFAULT NULL,
  `fld_quantity` int(11) DEFAULT NULL,
  `fld_amount` int(11) DEFAULT NULL,
  `fld_customerName` varchar(50) DEFAULT NULL,
  `fld_buyingDate` date DEFAULT NULL,
  `fld_sellingPrice` int(11) DEFAULT NULL,
  PRIMARY KEY (`fld_stockID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_salesreturn
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_stock`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_stock`;
CREATE TABLE `tbl_stock` (
  `fld_stockID` int(11) NOT NULL AUTO_INCREMENT,
  `fld_description` varchar(255) DEFAULT NULL,
  `fld_size` int(11) DEFAULT NULL,
  `fld_unit` int(11) DEFAULT NULL,
  `fld_sellingPrice` int(11) DEFAULT NULL,
  `fld_unitPrice` int(11) DEFAULT NULL,
  `fld_quantity` int(11) DEFAULT NULL,
  `fld_begginingInventory` int(11) DEFAULT NULL,
  `fld_totalAmount` int(11) DEFAULT NULL,
  PRIMARY KEY (`fld_stockID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_stock
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_supplier`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_supplier`;
CREATE TABLE `tbl_supplier` (
  `fld_supplierID` int(11) NOT NULL AUTO_INCREMENT,
  `fld_supplierName` varchar(50) DEFAULT NULL,
  `fld_type` varchar(30) DEFAULT NULL,
  `fld_contactNumber` int(11) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  `fld_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`fld_supplierID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_supplier
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `fld_userID` int(11) NOT NULL AUTO_INCREMENT,
  `fld_type` varchar(30) DEFAULT NULL,
  `fld_password` varchar(30) DEFAULT '',
  `fld_username` varchar(30) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  `fld_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`fld_userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_waste`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_waste`;
CREATE TABLE `tbl_waste` (
  `fld_stockID` int(11) NOT NULL DEFAULT '0',
  `fld_quantity` int(11) DEFAULT NULL,
  `fld_unitPrice` int(11) DEFAULT NULL,
  `fld_amount` int(11) DEFAULT NULL,
  `fld_remarks` varchar(50) DEFAULT NULL,
  `fld_dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`fld_stockID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_waste
-- ----------------------------
