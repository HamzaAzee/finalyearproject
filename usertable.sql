-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2021 at 09:56 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration2`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `name` varchar(255) NOT NULL,
  `rollno` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `program` text NOT NULL,
  `semester` text NOT NULL,
  `cgpa` text NOT NULL,
  `pics` varchar(255) DEFAULT NULL,
  `feeimg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `rollno`, `email`, `password`, `program`, `semester`, `cgpa`, `pics`, `feeimg`) VALUES
('Hamza Azeem', 'sp19m2ma009', 'prada3213@gmail.com', 'sub7-7', 'MCS', '4th', '3.40', 'edited.jpg', 'Screenshot_2020-11-10-00-24-20-20.png'),
('Ameer Hamza Khan Lodhi', 'sp19m2ma006', 'lodhinmbr1@gmail.com', 'add1+1', 'MCS', '4', '3.00', 'IMG-20171110-WA0037.jpg', 'Screenshot_2020-11-26-12-49-06-41.png'),
('Faizan Aslam', 'sp19m2ma019', 'faizanaslam@gmail.com', 'sixsix', 'MCS', '4', '3.00', 'IMG-20180418-WA0009.jpg', 'download.png'),
('Alisher Khakwani', 'sp19m2ma001', 'alikhakwani@gmail.com', 'svnsvn', 'MCS', '4', '3.60', 'IMG-20191217-WA0014.jpg', ''),
('Hamza Ahmad', 'sp19m2ma005', 'hamzaahmad@gmail.com', '321321', 'MCS', '4', '2.90', '', ''),
('Shah Zaman', 'sp19m2ma008', 'shahzaman@gmail.com', '112233', 'MCS', '4', '3.00', 'jet.jpg', 'IMG-20201122-WA0003.jpg'),
('Moaz Mehmood', 'sp19m2ma015', 'moazmehmood@gmail.com', '43214321', 'MCS', '4', '3.15', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
