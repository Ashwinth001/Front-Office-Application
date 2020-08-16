-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2019 at 06:49 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `AdminName` varchar(100) NOT NULL,
  `AdminPassword` varchar(100) NOT NULL,
  PRIMARY KEY (`AdminName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminName`, `AdminPassword`) VALUES
('', ''),
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

DROP TABLE IF EXISTS `admission`;
CREATE TABLE IF NOT EXISTS `admission` (
  `id` bigint(200) NOT NULL AUTO_INCREMENT,
  `Course` varchar(100) NOT NULL,
  `Session` varchar(100) NOT NULL,
  `Entno` varchar(100) NOT NULL,
  `StudentName` varchar(100) NOT NULL,
  `FatherName` varchar(100) NOT NULL,
  `FatherOccupation` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `Caste` varchar(100) NOT NULL,
  `Occupation` varchar(100) NOT NULL,
  `Ifemp` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PhoneNumber` bigint(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Doa` date NOT NULL,
  `Fees` varchar(100) NOT NULL,
  `Scheme` varchar(100) NOT NULL,
  `Timing` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `Course`, `Session`, `Entno`, `StudentName`, `FatherName`, `FatherOccupation`, `DOB`, `Age`, `Gender`, `Religion`, `Caste`, `Occupation`, `Ifemp`, `Address`, `PhoneNumber`, `Email`, `Doa`, `Fees`, `Scheme`, `Timing`) VALUES
(1, 'DCA TALLY', 'Morning', '5', 'Ashwinth', 'Raghu', 'Welder', '1999-05-29', '19', 'Male', 'Hindu', 'OC', 'Student', 'No', '3/299 Palanivel Street,Divyadass Nagar,Pozhichalur,Chennai-74', 9551891508, 'r.ashwinth001@gmail.com', '2019-02-18', '6000', 'Mega Offer', '11:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `doe` date NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `sessionhandle` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`doe`, `studentname`, `gender`, `email`, `address`, `phonenumber`, `qualification`, `timing`, `course`, `remarks`, `sessionhandle`) VALUES
('2019-02-06', 'Ashwinth', 'Male', 'r.ashwinth001@gmail.com', '3/299 palanivel Street Divyadass Nagar pozhichalur', '9551891508', 'B.C.A', '', 'HDCP', 'INTRESTED', 'MOONESH'),
('2019-02-06', 'Ashwinth', 'Male', 'r.ashwinth001@gmail.com', '3/299 palanivel Street Divyadass Nagar pozhichalur', '9551891508', 'B.C.A', '', 'HDCP', 'INTRESTED', 'MOONESH'),
('2019-02-06', 'Ashwinth', 'Male', 'r.ashwinth001@gmail.com', '3/299 palanivel Street Divyadass Nagar pozhichalur', '9551891508', 'B.C.A', '', 'HDCP', 'INTRESTED', 'MOONESH'),
('2019-02-06', 'Ashwinth', 'Male', 'r.ashwinth001@gmail.com', '3/306 Palanivel Street Divyadass Nagar,Pozhichalur', '9551891508', '8th', '10.00-11.30 Am', 'HDCA', 'inttrested', 'divya'),
('2019-02-05', 'Sudha', 'Male', 'sudh@gmail.com', 'afklj', '958962', '5th', '10.00-11.30 Am', 'PYTHON', 'intrested', 'ashwinth'),
('2019-07-13', 'sudharshan', 'Male', 'susaselvam001@gmail.com', 'vijjfsfs', '9566026610', 'B.C.A', '1.30-3.00 Pm ', 'PYTHON', 'nothing', 'susai'),
('2019-02-13', 'Ashiwth', 'Male', 'r.ashwinth001@gmail.com', 'ajdn', '955181508', 'B.C.A', '3.00-4.30 Pm', 'DCA (C)', 'nothing', 'Moonesh');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`) VALUES
(2, 'Ashwinth', 'r.ashwinth001@gmail.com', 'ashwin000'),
(5, 'Monesh', 'moneshmonu@gmail.com', 'monesh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
