-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2016 at 12:25 AM
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
-- Table structure for table `condition`
--

CREATE TABLE IF NOT EXISTS `condition` (
  `Health` int(11) NOT NULL,
  `Oxygen` int(11) NOT NULL,
  `BodyTemp` int(11) NOT NULL,
  `Temp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `condition`
--

INSERT INTO `condition` (`Health`, `Oxygen`, `BodyTemp`, `Temp`) VALUES
(10, 10, 5, 5),
(10, 10, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `room` text NOT NULL,
  `item` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`room`, `item`) VALUES
('foyer', 'keys'),
('short corridor', 'painting'),
('living room', 'ash tray'),
('living room', 'coaster'),
('piano room', 'music book'),
('piano room', 'opera glasses'),
('kitchen', 'knife'),
('kitchen', 'fork'),
('kitchen', 'spoon'),
('kitchen', 'plate'),
('kitchen', 'loaf of bread'),
('solarium', 'plant'),
('solarium', 'newspaper'),
('garage', 'oil can'),
('dining room', 'doily'),
('dining room', 'tea cup'),
('upstairs bathroom', 'toothbrush'),
('upstairs bathroom', 'nail clippers'),
('upstairs bathroom', 'razor'),
('upstairs bathroom', 'toilet brush'),
('upstairs bathroom', 'pillow'),
('upstairs bathroom', 'robe'),
('small bedroom', 'doll'),
('pantry', 'cereal'),
('servant quarters', 'acid'),
('basement', 'cardboard box'),
('basement', 'mouse trap'),
('workshop', 'hammer'),
('workshop', 'wrench'),
('workshop', 'screwdriver'),
('master bathroom', 'soap'),
('master closet', 'dress'),
('master closet', 'towel'),
('attic', 'rocking horse'),
('attic', 'picture album'),
('attic', 'bat'),
('laundry room', 'bleach'),
('torture room', 'american idol DVD'),
('middle bedroom', 'book'),
('middle bedroom', 'book'),
('upstairs hallway', 'teddy bear'),
('upstairs hallway', 'teddy bear'),
('upstairs hallway', 'teddy bear'),
('basement staircase', 'torch');

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE IF NOT EXISTS `pizza` (
  `Pizza` varchar(25) NOT NULL,
  `Sold` int(11) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`Pizza`, `Sold`, `Price`) VALUES
('Round', 350, 14),
('Square', 250, 21),
('Grandma', 275, 18),
('Pan/Deep Dish', 120, 20),
('pepperoni', 0, 18);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room` text NOT NULL,
  `connection` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room`, `connection`) VALUES
('foyer', 'main staircase'),
('foyer', 'short corridor'),
('foyer', 'living room'),
('foyer', 'piano room'),
('main staircase', 'foyer'),
('main staircase', 'upstairs hallway'),
('short corridor', 'foyer'),
('short corridor', 'kitchen'),
('short corridor', 'basement staircase'),
('living room', 'foyer'),
('living room', 'solarium'),
('piano room', 'foyer'),
('piano room', 'garage'),
('piano room', 'dining room'),
('upstairs hallway', 'main staircase'),
('upstairs hallway', 'upstairs bathroom'),
('upstairs hallway', 'master bedroom'),
('upstairs hallway', 'attic stairs'),
('upstairs hallway', 'middle bedroom'),
('upstairs hallway', 'small bedroom'),
('kitchen', 'short corridor'),
('kitchen', 'pantry'),
('kitchen', 'dining room'),
('kitchen', 'servant quarters'),
('basement staircase', 'basement'),
('basement staircase', 'short corridor'),
('solarium', 'living room'),
('garage', 'piano room'),
('garage', 'workshop'),
('dining room', 'piano room'),
('dining room', 'kitchen'),
('upstairs bathroom', 'upstairs hallway'),
('master bedroom', 'master bathroom'),
('master bedroom', 'upstairs hallway'),
('master bedroom', 'master closet'),
('attic stairs', 'attic'),
('attic stairs', 'upstairs hallway'),
('middle bedroom', 'upstairs hallway'),
('small bedroom', 'upstairs hallway'),
('pantry', 'kitchen'),
('servant quarters', 'kitchen'),
('servant quarters', 'laundry room'),
('basement', 'torture room'),
('basement', 'basement staircase'),
('workshop', 'garage'),
('master bathroom', 'master bedroom'),
('master closet', 'master bedroom'),
('attic', 'attic stairs'),
('laundry room', ' servant quarters'),
('torture room', 'basement');

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
('Stone Age', 50, 'Yes', 'Yes', '6000 B.C.E', 4),
('Ancient Egypt', 85, 'Yes', 'Yes', '2000 B.C.E', 5),
('Mongol Empire', 80, 'Yes', 'Yes', '1209', 6),
('WW2', 80, 'Yes', 'Yes', '1939', 7),
('Moon', -243, 'No', 'No', '1969', 8),
('Future', 120, 'Yes', 'Yes', '5067', 9);

-- --------------------------------------------------------

--
-- Table structure for table `timeitems`
--

CREATE TABLE IF NOT EXISTS `timeitems` (
  `item` varchar(2) NOT NULL,
  `obtained` varchar(3) NOT NULL,
  UNIQUE KEY `item` (`item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeitems`
--

INSERT INTO `timeitems` (`item`, `obtained`) VALUES
('p1', 'No'),
('p2', 'No'),
('p3', 'No'),
('p4', 'No'),
('p5', 'No'),
('p6', 'No'),
('p7', 'No'),
('p8', 'No'),
('p9', 'No');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
