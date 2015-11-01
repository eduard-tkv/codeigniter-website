-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2015 at 10:33 PM
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
-- Table structure for table `breakfast`
--

CREATE TABLE IF NOT EXISTS `breakfast` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) DEFAULT NULL,
  `id_tag` varchar(50) DEFAULT NULL,
  `list_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`id`, `description`, `id_tag`, `list_name`) VALUES
(1, 'All Day Breakfast $5.75', 'h5', ''),
(2, '3 eggs.', '', ''),
(3, 'Choice of bacon, sausage, or ham.', '', ''),
(4, 'Toast.', '', ''),
(5, 'Home fries.', '', ''),
(6, 'Choice of a small coffee or tea.', '', ''),
(7, 'Omelette Breakfast $6.75', 'h5', ''),
(8, '2 eggs with a choice of bacon, cheese, vegetables, or everything.', '', ''),
(9, 'Toast.', '', ''),
(10, 'Home fries.', '', ''),
(11, 'Choice of a small coffee or tea.', '', ''),
(12, 'French Toast Breakfast', 'h5', ''),
(13, 'Or Pancake Breakfast $7.75', '', ''),
(14, '3 French Toast slices or 3 Pancakes.', '', ''),
(15, 'Bacon, sausage, or ham.', '', ''),
(16, 'Home fries.', '', ''),
(17, 'Choice of small coffee or tea.', '', ''),
(18, 'Steak Breakfast $8.75', 'h5', ''),
(19, 'Steak.', '', ''),
(20, '3 Eggs.', '', ''),
(21, 'Toast.', '', ''),
(22, 'Home fries.', '', ''),
(23, 'Choice of small coffee or tea.', '', ''),
(24, 'Toast 0.75¢', 'h5', ''),
(25, 'Toasted bagel $1.50', 'h5', ''),
(26, 'Bagel with cream cheese or deli cheese (cheddar, mozzarella, havarti, or swiss) $3', 'h5', ''),
(27, 'Fried egg sandwich $3', 'h5', ''),
(28, 'Toasted Western $4.75', 'h5', ''),
(29, 'Egg, Bacon, ', 'h5', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
