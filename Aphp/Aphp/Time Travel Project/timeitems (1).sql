-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2016 at 03:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `armanuddin`
--

-- --------------------------------------------------------

--
-- Table structure for table `timeitems`
--

CREATE TABLE IF NOT EXISTS `timeitems` (
  `item` varchar(2) NOT NULL,
  `obtained` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeitems`
--

INSERT INTO `timeitems` (`item`, `obtained`) VALUES
('p1', 'No'),
('p2', 'No'),
('p3', 'Yes'),
('p4', 'No'),
('p5', 'No'),
('p6', 'No'),
('p7', 'No'),
('p8', 'No'),
('p9', 'No');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
