-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2013 at 01:21 AM
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
-- Table structure for table `regtable`
--

CREATE TABLE IF NOT EXISTS `regtable` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `atmos_id` varchar(12) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `college` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `confirmcode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `regtable`
--

INSERT INTO `regtable` (`id_user`, `name`, `atmos_id`, `email`, `phone_number`, `college`, `city`, `username`, `password`, `confirmcode`) VALUES
(1, 'Nilayan Ahmed', '', 'nilayan_ahmed@outlook.com', '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'y'),
(3, 'Aryan Ahmed', '', 'aryan_ahmed@live.in', '', '', '', 'aryan', 'e2071528cf1aa685779d9898ccd9b308', '82d5cf3c561a1538991a5201f22da499'),
(4, 'Taina Kapoor', '', 'taina_kapoor@live.com', '', '', '', 'taina', '50c8f225f6d89437a2d52ee2f7460e34', 'y'),
(5, 'mythrandir', '', 'myth@live.com', '', '', '', 'mythrandir', '9b87b1ff71e8b4a5a0711c3d82f5bcba', 'bbbc5a72b3a8052c0e91319e490b0256'),
(6, 'Gandalf The Grey', '', 'gandalfgrey@lotr.com', '8398299222', '', '', 'gandalfgrey', 'ca50000a180a293de0b27acb67a695cb', '8463cb92f8cfd8893bc5fe9bef69f29a'),
(7, 'sid', '', 'si@eh.com', '9288', '', '', 'sid', 'b8c1a3069167247e3503f0daba6c5723', 'y'),
(8, 'admin', '100', 'admin@bits-atmos.org', '9666812830', 'BPHC', 'Hyderabad', 'administrator', '21232f297a57a5a743894a0e4a801fc3', 'f7736f35ce406a20f4c12f78f923a022'),
(9, 'test1', '101', 'test1@live.in', '839089898', 'sps', 'delhi', 'test', '098f6bcd4621d373cade4e832627b4f6', '664ec993cbc979ad1402db61e51f137e'),
(10, 'test2', '102', 'test2@live.in', '9789337938', 'jm', 'delhi', 'test2', 'ad0234829205b9033196ba818f7a872b', '4ed3e1fdb098fb8445af7795ec0cc80c'),
(11, 'test3', 'atmos13103', 'test3@live.com', '9379328903', 'stephens', 'delhi', 'test3', '8ad8757baa8564dc136c1e07507f4a98', '38fd8b053c845781a9c7569e83eccd99'),
(12, 'testing', 'atmos13104', 'testing@testing.com', '9372379381', 'iitk', 'kanpur', 'testing', 'ffef4fcfad21fcf2d420a98aa859a188', 'fc3d28d2b0bed878bb420d3a674b4a8b'),
(13, 'testingagain', 'atmos13105', 'testingagain@testing.com', '9372379381', '9372379381', '9372379381', 'testingagain', '9dd5e669cd97edb08b786f7e3eea2ba6', '270ec530c8d23d4d4f2d880b880aa8ce'),
(14, 'tgg', 'atmos13106', 'gffgh@liev.cd', '674645', '565', 'ghg', 'wer', '7c6d64da91c9207ef78a67ef1a1d5c52', 'e90ef3bcad3709265cb0345cc7c2040d'),
(15, 'kai', 'atmos13107', 'kai@live.com', '9327379980', 'bpgc', 'goa', 'kai', 'e79fb748c3c8ab532a8fcf2da53ae54d', 'y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
