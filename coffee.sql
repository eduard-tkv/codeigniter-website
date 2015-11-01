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
-- Table structure for table `coffee`
--

CREATE TABLE IF NOT EXISTS `coffee` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) DEFAULT NULL,
  `price` varchar(40) DEFAULT NULL,
  `id_tag` varchar(60) DEFAULT NULL,
  `list_name` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`id`, `description`, `price`, `id_tag`, `list_name`) VALUES
(1, 'Coffee, a blended Columbian brew served hot and to order', '', 'list_head', 'coffee'),
(2, 'Small $1.20', NULL, 'list_', 'coffee'),
(3, 'Medium $1.40', NULL, 'list_', 'coffee'),
(4, 'Large $1.60', NULL, 'list_', 'coffee'),
(5, 'Jumbo Love $2.00', NULL, 'list_', 'coffee'),
(6, 'Add a flirt of flavour, free! Coffee syrups offered are Kahlua, Caramel, French Vanilla, Hazelnut, Irish Cream, and English Toffee.', '', 'note', ''),
(7, 'Espresso or Americano $1.75', '', 'note_price', ''),
(8, 'French Cappuccino $2.50', '', 'note_price', ''),
(9, 'Icy Cappuccino $3.50', '', 'note_price', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
