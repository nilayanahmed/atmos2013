-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2013 at 07:02 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventregs`
--

CREATE TABLE IF NOT EXISTS `eventregs` (
  `username` varchar(16) NOT NULL,
  `event_name` varchar(32) NOT NULL,
  `branch` varchar(32) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`event_name`,`branch`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventregs`
--

INSERT INTO `eventregs` (`username`, `event_name`, `branch`, `time`) VALUES
('admin', 'BrainStorm', 'computers', '2013-09-19 18:59:30'),
('admin', 'Codewars', 'computers', '2013-09-19 18:59:41'),
('kai', 'Trigger Your Grey Cells', 'bio', '2013-09-19 19:00:22'),
('taina', 'Circuit  Art', 'Electronics', '2013-09-19 19:01:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
