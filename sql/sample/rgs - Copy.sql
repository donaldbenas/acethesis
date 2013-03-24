


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

-- -----
