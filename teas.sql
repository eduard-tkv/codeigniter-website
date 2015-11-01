-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2015 at 10:34 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `teas`
--

CREATE TABLE IF NOT EXISTS `teas` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) DEFAULT NULL,
  `id_tag` varchar(50) DEFAULT NULL,
  `list_name` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teas`
--

INSERT INTO `teas` (`id`, `description`, `id_tag`, `list_name`) VALUES
(1, 'Tea, a large selection taking up a wall and offering over 500 different varieties.', 'h5', ''),
(2, 'Any size $1.25!', 'h5', ''),
(3, 'Hot Chocolate, milky goodness.', 'h5', ''),
(4, 'Any size $1.25', 'h5', ''),
(5, 'Milkshake, old fashioned and simply delicious. Vanilla, Strawberry, or Chocolate $3', 'h5', ''),
(6, 'Cold Beverages in bottles and cans include fruit juices, spring water, and Coca Cola products. $1', 'h5', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
