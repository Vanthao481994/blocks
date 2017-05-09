-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 04:01 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_list` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `content_title`, `content_list`) VALUES
(1, 'APPLE IPHONE 6S PLUS', 'HOME >'),
(2, '', ' ACCESSORIES >'),
(3, '', ' APPLE IPHONE 6S PLUS');

-- --------------------------------------------------------

--
-- Table structure for table `descrip`
--

DROP TABLE IF EXISTS `descrip`;
CREATE TABLE IF NOT EXISTS `descrip` (
  `desc_id` int(11) NOT NULL AUTO_INCREMENT,
  `desc_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `desc_heading` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `desc_images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`desc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `descrip`
--

INSERT INTO `descrip` (`desc_id`, `desc_title`, `desc_heading`, `desc_images`) VALUES
(1, 'DESCRIPTION', ' December 4, 2015', 'images/matnguoi.jpeg'),
(2, 'REVIEWS(2)', 'amin ', ''),
(3, 'ADD A REVIEW', 'Your email address will not be published.Required fields are marked ', ''),
(4, 'YOUR RATING', '', ''),
(5, 'YOUR REVIEW', '', ''),
(6, 'NAME', '', ''),
(7, 'EMAIL', '', ''),
(8, 'SUBMIT', '', ''),
(9, '', '', ''),
(10, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `form_id` int(11) NOT NULL AUTO_INCREMENT,
  `form_your` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `form_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `form_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`form_id`, `form_your`, `form_name`, `form_mail`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, 'aa', 'aa', 'aa'),
(8, 'ádasd', 'adasd', 'sadas');

-- --------------------------------------------------------

--
-- Table structure for table `our`
--

DROP TABLE IF EXISTS `our`;
CREATE TABLE IF NOT EXISTS `our` (
  `our_id` int(11) NOT NULL AUTO_INCREMENT,
  `our_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `our_heading` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `our_rity` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `our_cat` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `our_share` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`our_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `our`
--

INSERT INTO `our` (`our_id`, `our_title`, `our_heading`, `our_rity`, `our_cat`, `our_share`) VALUES
(1, 'Our price', '£600.00', 'ADD TO CARD', 'ACCESSORIES', ''),
(2, 'PRODUCT DESCRIPTION', '£560.00', 'ADD TO WISHLIST', 'CARRIER', ''),
(3, 'QUANTITY', '(2 customer reviews)', '', 'PHONES', ''),
(4, 'CATEGORIES', 'Ut enim ad minim veniam quis nostrud exercita tion ullamco laboris nisi aliquip exa commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', '', 'CASES', ''),
(5, 'SHARE', 'INSTOCK', '', 'EXCLUSIVE', ''),
(17, '', '', '', 'PHONES', ''),
(16, '', '', '', 'UNLOCKED', ''),
(15, '', '', '', 'PHONES', ''),
(14, '', '', '', '', ''),
(18, '', '', '', '', ''),
(19, '', '', '', '', ''),
(20, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_heading` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_tags` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_price` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_names` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_title`, `product_heading`, `product_images`, `product_tags`, `product_id`, `product_price`, `product_names`) VALUES
('SEARCH PRPDUCT', 'Accessories', '../images/1.jpg', 'ACCESSONRIES', 1, '£875.00', ' SAMSUNG GALAXY S5 '),
('PRODUCTS CATEGORIES', 'Carrier Phones', '../images/2.jpg', 'ANDROID', 2, ' £560.00', ' APPLE IPHONE 6S PLUS '),
('TOP RATED PRODUCTS', 'Cases', '../images/3.jpg', 'APPLE', 3, '£456.00', 'MOTO G PLUS (4TH GEN.)'),
('PRPDUCT TAGS', 'Exclusive Phones', '../images/4.jpg', 'CASES', 4, '£600.00', ' ORBIC SLIME'),
('', 'Unlocked Phones', '', 'ENVATO', 5, '', ' LG OPTIMUS ZONE '),
('', '', '', 'IPHONE', 6, '\n', ''),
('', '', '', 'NEXUS', 7, '', ''),
('', '', '', 'NOKIA', 8, '', ''),
('', '', '', 'PREMIUM', 9, '', ''),
('', '', '', 'SAMSUNG', 10, '', ''),
('', '', '', 'SMART', 11, '', ''),
('', '', '', 'ULOCKED', 12, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `slide_id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `slide_heading` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `slide_images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_title`, `slide_heading`, `slide_images`) VALUES
(1, 'LG OPTIMUS ZONE', '£875.00', 'images/4.jpg'),
(2, 'HUAWEI NEXUS 6P', '£456.00', 'images/3.jpg'),
(3, 'MOTO G PLUS (4TH GEN.)', '£600.00', 'images/6.jpg'),
(4, 'HUAWEI NEXUS 6P', '', 'images/4.png'),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sliderproduct`
--

DROP TABLE IF EXISTS `sliderproduct`;
CREATE TABLE IF NOT EXISTS `sliderproduct` (
  `slider_id` int(250) NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `slider_heading` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `slider_images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliderproduct`
--

INSERT INTO `sliderproduct` (`slider_id`, `slider_title`, `slider_heading`, `slider_images`) VALUES
(1, 'APPLE IPHONE 6S PLUS', 'Generic Box, Unlocked, 64GB, Gold Edition', 'images/1.jpg'),
(2, '', '', 'images/2.jpg'),
(3, '', '', 'images/3.jpg'),
(4, '', '', 'images/4.jpg'),
(5, '', '', 'images/5.jpg'),
(6, '', '', 'images/6.jpg'),
(7, '', '', 'images/11.jpg'),
(8, '', '', 'images/22.jpg'),
(9, '', '', 'images/33.jpg'),
(10, '', '', 'images/44.jpg'),
(11, '', '', 'images/55.jpg'),
(12, '', '', 'images/66.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
