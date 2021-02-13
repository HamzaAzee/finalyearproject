-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 25, 2021 at 10:00 AM
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
-- Table structure for table `stafftable`
--

DROP TABLE IF EXISTS `stafftable`;
CREATE TABLE IF NOT EXISTS `stafftable` (
  `staffid` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `designation` text NOT NULL,
  `department` text NOT NULL,
  `qualification` text NOT NULL,
  `pics` varchar(255) DEFAULT NULL,
  `quiz` varchar(255) DEFAULT NULL,
  `assignment` varchar(255) DEFAULT NULL,
  `complaints` text NOT NULL,
  `announcements` text NOT NULL,
  PRIMARY KEY (`staffid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafftable`
--

INSERT INTO `stafftable` (`staffid`, `name`, `password`, `designation`, `department`, `qualification`, `pics`, `quiz`, `assignment`, `complaints`, `announcements`) VALUES
('P.S 619', 'Pascal Suvage', 'fadbc2c0', 'Lecturer', 'Computer Science & IT', 'PHD in Information Technology', 'IMG-20201122-WA0003.jpg', NULL, NULL, 'Hasta La Vista Baby', 'ass soon as possible'),
('J.E 001', 'Johnny English', 'qazwsx', 'Lecturer', 'Computer Science & IT', 'PHD in Information Security', 'maxresdefault.jpg', NULL, NULL, '', 'ass soon as possible'),
('A.D 111', 'Albus Dumbldore', '', 'Professor', 'Computer Science & IT', 'PHD in Data Science', NULL, NULL, NULL, '', 'ass soon as possible'),
('M.M 112', 'Minerva McGonigall', '', 'Professor', 'Computer Science & IT', 'PHD in Information Technology', NULL, NULL, NULL, '', 'ass soon as possible'),
('S.S 113', 'Severur Snape', '', 'Professor', 'Computer Science & IT', 'PHD in Software Engineering', NULL, NULL, NULL, '', 'ass soon as possible'),
('M.L 123', 'Martin Lawrance', '97531', 'Lecturer', 'Computer Science & IT', 'PHD in Software Testing', NULL, NULL, NULL, '', 'ass soon as possible'),
('S.L 432', 'Shanzay Lizay', 'edcrfv', 'Assistant Professor', 'Computer Science & IT', 'MS in Software Engineering', NULL, NULL, NULL, '', 'ass soon as possible'),
('L.M 999', 'Lusious Malfoy', '1+1=2', 'Lecturer', 'Computer Science & IT', 'MS in Computer Science', NULL, NULL, NULL, '', 'ass soon as possible');

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
  `complaints` text NOT NULL,
  `announcement` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `rollno`, `email`, `password`, `program`, `semester`, `cgpa`, `pics`, `feeimg`, `complaints`, `announcement`) VALUES
('Hamza Azeem', 'sp19m2ma009', 'prada3213@gmail.com', 'div3/3', 'MCS', '4th', '3.40', '1523644253128_camera.jpg', 'Screenshot_2020-11-10-00-24-20-20.png', 'Pakistan Zindabad', 'Students to submit their paid fee vouchers at old campus, Thank you!'),
('Ameer Hamza Khan Lodhi', 'sp19m2ma006', 'lodhinmbr1@gmail.com', 'add1+1', 'MCS', '4', '3.00', 'IMG-20171110-WA0037.jpg', 'Screenshot_2020-11-26-12-49-06-41.png', '', 'Students to submit their paid fee vouchers at old campus, Thank you!'),
('Faizan Aslam', 'sp19m2ma019', 'faizanaslam@gmail.com', 'sixsix', 'MCS', '4', '3.00', 'IMG-20180418-WA0009.jpg', 'download.png', '', 'Students to submit their paid fee vouchers at old campus, Thank you!'),
('Alisher Khakwani', 'sp19m2ma001', 'alikhakwani@gmail.com', 'svnsvn', 'MCS', '4', '3.60', 'IMG-20191217-WA0014.jpg', '', '', 'Students to submit their paid fee vouchers at old campus, Thank you!'),
('Hamza Ahmad', 'sp19m2ma005', 'hamzaahmad@gmail.com', '321321', 'MCS', '4', '2.90', '', '', '', 'Students to submit their paid fee vouchers at old campus, Thank you!'),
('Shah Zaman', 'sp19m2ma008', 'shahzaman@gmail.com', '757575', 'MCS', '4', '3.00', 'jet.jpg', 'IMG-20201122-WA0003.jpg', '', 'Students to submit their paid fee vouchers at old campus, Thank you!'),
('Moaz Mehmood', 'sp19m2ma015', 'moazmehmood@gmail.com', '43214321', 'MCS', '4', '3.15', NULL, NULL, '', 'Students to submit their paid fee vouchers at old campus, Thank you!'),
('Ifra Ghaffar', 'sp19m2ma002', 'ifraghaffar@gmail.com', '676767', 'MCS', '4', '3.10', NULL, NULL, '', 'Students to submit their paid fee vouchers at old campus, Thank you!'),
('Mian Atif Rizwan Bashir', 'sp19m2ma043', 'atifrizwan@gmail.com', '13579', 'MCS', '4', '3.28', NULL, NULL, '', 'Students to submit their paid fee vouchers at old campus, Thank you!'),
('Hafiz Saqib Aslam', 'sp19m2ma007', 'hafizsaqibaslam@gmail.com', 'okmijn', 'MCS', '1', '2.50', NULL, NULL, '', 'Students to submit their paid fee vouchers at old campus, Thank you!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
