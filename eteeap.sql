-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 03:13 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eteeap`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE IF NOT EXISTS `certificates` (
  `idno` int(11) NOT NULL AUTO_INCREMENT,
  `certino` varchar(50) NOT NULL,
  `certititle` varchar(250) NOT NULL,
  `dateissued` varchar(20) NOT NULL,
  `studid` varchar(50) NOT NULL,
  PRIMARY KEY (`idno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `infosheet`
--

CREATE TABLE IF NOT EXISTS `infosheet` (
  `idno` int(11) NOT NULL,
  `imagename` varchar(250) NOT NULL,
  `imagepath` varchar(250) NOT NULL,
  PRIMARY KEY (`idno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studinfo`
--

CREATE TABLE IF NOT EXISTS `studinfo` (
  `idno` int(11) NOT NULL,
  `age` int(3) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `civilstatus` varchar(50) NOT NULL,
  `emailAdd` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `companyaddress` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `prevComp` varchar(250) DEFAULT NULL,
  `prevCompAdd` varchar(250) DEFAULT NULL,
  `prevPosi` varchar(100) DEFAULT NULL,
  `yeargraduated` varchar(50) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `datecreated` varchar(10) NOT NULL,
  `imagepath` varchar(255) DEFAULT NULL,
  `imagename` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `counter` int(11) NOT NULL AUTO_INCREMENT,
  `idno` varchar(15) NOT NULL,
  `code` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `grades` varchar(8) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `datetime` varchar(15) NOT NULL,
  PRIMARY KEY (`counter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ttoa`
--

CREATE TABLE IF NOT EXISTS `ttoa` (
  `stud_id` varchar(8) NOT NULL,
  `enrolment` varchar(8) DEFAULT NULL,
  `personality` varchar(8) DEFAULT NULL,
  `documentary` varchar(8) DEFAULT NULL,
  `part2` varchar(8) DEFAULT NULL,
  `worksite` varchar(8) DEFAULT NULL,
  `submission` varchar(8) DEFAULT NULL,
  `applied` varchar(8) DEFAULT NULL,
  `reports` varchar(8) DEFAULT NULL,
  `listo` varchar(8) DEFAULT NULL,
  `graduation` varchar(8) DEFAULT NULL,
  `takeno` varchar(8) DEFAULT NULL,
  `thesis` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idno` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `datecreated` varchar(15) NOT NULL,
  PRIMARY KEY (`idno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idno`, `password`, `lastname`, `firstname`, `level`, `datecreated`) VALUES
('admin', '96e79218965eb72c92a549dd5a330112', 'admin', 'admin', 2, 'Jan.31.17 22:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
