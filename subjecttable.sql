-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2021 at 04:14 PM
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
-- Table structure for table `subjecttable`
--

DROP TABLE IF EXISTS `subjecttable`;
CREATE TABLE IF NOT EXISTS `subjecttable` (
  `subcode` int(15) NOT NULL,
  `subname` text NOT NULL,
  `assignment` varchar(255) DEFAULT NULL,
  `quiz` varchar(255) DEFAULT NULL,
  `assignedto` text,
  `staffid` text NOT NULL,
  `enrolledstudents` text,
  `rollno` text,
  `assignmenta` varchar(255) DEFAULT NULL,
  `quiza` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`subcode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjecttable`
--

INSERT INTO `subjecttable` (`subcode`, `subname`, `assignment`, `quiz`, `assignedto`, `staffid`, `enrolledstudents`, `rollno`, `assignmenta`, `quiza`) VALUES
(101, 'Data structures', NULL, 'greedy approach.pdf', 'Lusious Malfoy', 'L.M 999', 'Hamza Azeem', 'sp19m2ma009', NULL, ''),
(103, 'Object Oriented Pogramming', NULL, NULL, 'Johnny English', 'J.E 001', 'Hamza Azeem', 'sp19m2ma009', NULL, ''),
(105, 'Distributed Dayabase systems', 'precedence(1).pdf', 'My Resume(5).pdf', 'Pascal Suvage', 'P.S 619', 'Hamza Azeem', 'sp19m2ma009', NULL, 'ER Diagram.docx'),
(106, 'Software Engineering', NULL, NULL, 'Shanzay Lizay', 'S.L 432', 'Hamza Azeem', 'sp19m2ma009', NULL, ''),
(104, 'Networkin Management', 'Ali Report.pdf', 'Form.pdf', 'Abraham Lincoln', 'A.L 203', 'Hamza Azeem', 'sp19m2ma009', 'Ali Report.pdf', ''),
(102, 'Web Programming', NULL, NULL, 'Augus Filrch', 'A.F 1000', 'Hamza Azeem', 'sp19m2ma009', NULL, ''),
(107, 'Data structures', NULL, NULL, 'Lusious Malfoy', 'L.M 999', 'Ameer Hamza Khan Lodhi', 'sp19m2ma006', '', NULL),
(108, 'Object Oriented Pogramming', NULL, NULL, 'Johnny English', 'J.E 001', 'Ameer Hamza Khan Lodhi', 'sp19m2ma006', '', NULL),
(109, 'Distributed Dayabase systems', 'precedence(1).pdf', 'My Resume(5).pdf', 'Pascal Suvage', 'P.S 619', 'Ameer Hamza Khan Lodhi', 'sp19m2ma006', '', NULL),
(110, 'Software Engineering', NULL, NULL, 'Shanzay Lizay', 'S.L 432', 'Ameer Hamza Khan Lodhi', 'sp19m2ma006', '', NULL),
(111, 'Networkin Management', 'Ali Report.pdf', 'Form.pdf', 'Abraham Lincoln', 'A.L 203', 'Ameer Hamza Khan Lodhi', 'sp19m2ma006', '', NULL),
(112, 'Web Programming', NULL, NULL, 'Augus Filrch', 'A.F 1000', 'Ameer Hamza Khan Lodhi', 'sp19m2ma006', '', NULL),
(113, 'Data structures', NULL, NULL, 'Lusious Malfoy', 'L.M 999', 'Faizan Aslam', 'sp19m2ma019', '', NULL),
(114, 'Object Oriented Pogramming', NULL, NULL, 'Johnny English', 'J.E 001', 'Faizan Aslam', 'sp19m2ma019', '', NULL),
(115, 'Distributed Dayabase systems', 'precedence(1).pdf', 'My Resume(5).pdf', 'Pascal Suvage', 'P.S 619', 'Faizan Aslam', 'sp19m2ma019', '', NULL),
(116, 'Software Engineering', NULL, NULL, 'Shanzay Lizay', 'S.L 432', 'Faizan Aslam', 'sp19m2ma019', '', NULL),
(117, 'Networkin Management', 'Ali Report.pdf', 'Form.pdf', 'Abraham Lincoln', 'A.L 203', 'Faizan Aslam', 'sp19m2ma019', '', NULL),
(118, 'Web Programming', NULL, NULL, 'Augus Filrch', 'A.F 1000', 'Faizan Aslam', 'sp19m2ma019', '', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
