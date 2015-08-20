-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2015 at 04:25 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `installer`
--

-- --------------------------------------------------------

--
-- Table structure for table `bms_utilities`
--

CREATE TABLE IF NOT EXISTS `bms_utilities` (
  `link` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_utilities`
--

CREATE TABLE IF NOT EXISTS `other_utilities` (
  `link` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `printer_dnr`
--

CREATE TABLE IF NOT EXISTS `printer_dnr` (
  `link` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scripts`
--

CREATE TABLE IF NOT EXISTS `scripts` (
  `link` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `systemuser`
--

CREATE TABLE IF NOT EXISTS `systemuser` (
  `IDno` varchar(7) NOT NULL,
  `Designation` varchar(25) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemuser`
--

INSERT INTO `systemuser` (`IDno`, `Designation`, `Username`, `Password`) VALUES
('0000000', 'Admin', 'Elites.Admin', 'mmpiforever'),
('00014', 'IT Support Specialist', 'Elites.Mikko', 'mmpi2015'),
('0608064', 'IT Support Specialist', 'Elites.Fermin', 'mmpi2015'),
('0804067', 'Technical Support Special', 'Elites.Matt', 'mmpi2015'),
('0808061', 'Technical Support Special', 'Elites.Mac', 'mmpi2015'),
('1304122', 'IT Support Specialist', 'Elites.Ram', 'mmpi2015'),
('1503081', 'Technical Support Special', 'Elites.Edison', 'mmpi2015');

-- --------------------------------------------------------

--
-- Table structure for table `tbltitle`
--

CREATE TABLE IF NOT EXISTS `tbltitle` (
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltitle`
--

INSERT INTO `tbltitle` (`title`) VALUES
('bms utilities'),
('printer driver/resetter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `systemuser`
--
ALTER TABLE `systemuser`
 ADD PRIMARY KEY (`IDno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
