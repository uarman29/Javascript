-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2016 at 01:25 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

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
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `Name` varchar(13) DEFAULT NULL,
  `Temp` int(4) DEFAULT NULL,
  `Oxygen` varchar(3) DEFAULT NULL,
  `Danger` varchar(3) DEFAULT NULL,
  `Time` varchar(11) DEFAULT NULL,
  `Order` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`Name`, `Temp`, `Oxygen`, `Danger`, `Time`, `Order`) VALUES
('Hadean', 212, 'No', 'No', '4.6 B years', 1),
('Snowball', -74, 'Yes', 'No', '650 M years', 2),
('Jurrasic', 68, 'Yes', 'Yes', '170 M years', 3),
('Stone Age', 50, 'Yes', 'No', '6000 B.C.E', 4),
('Ancient Egypt', 85, 'Yes', 'No', '2000 B.C.E', 5),
('Mongol Empire', 80, 'Yes', 'Yes', '1209', 6),
('WW2', 80, 'Yes', 'Yes', '1939', 7),
('Moon', -243, 'No', 'No', '1969', 8),
('Future', 120, 'Yes', 'Yes', '5067', 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
