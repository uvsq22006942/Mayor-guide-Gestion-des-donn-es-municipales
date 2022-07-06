-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 21, 2020 at 07:57 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

DROP TABLE IF EXISTS `adminn`;
CREATE TABLE IF NOT EXISTS `adminn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf16_bin NOT NULL,
  `password` varchar(20) COLLATE utf16_bin NOT NULL,
  `firstname` varchar(20) COLLATE utf16_bin NOT NULL,
  `lastname` varchar(20) COLLATE utf16_bin NOT NULL,
  `idtown` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `username`, `password`, `firstname`, `lastname`, `idtown`, `role`) VALUES
(13, 'Jihad', 'secret', 'jihad', 'soulayman', 9, 1),
(11, 'tawfik', 'secret', 'tawfik', 'alzohbie', 8, 0),
(12, 'houssam', 'secrett', 'houssam', 'ali', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

DROP TABLE IF EXISTS `birth`;
CREATE TABLE IF NOT EXISTS `birth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fn` varchar(70) COLLATE utf16_bin NOT NULL,
  `fbirth` date NOT NULL,
  `mn` varchar(70) COLLATE utf16_bin NOT NULL,
  `mbirth` date NOT NULL,
  `newborn` varchar(70) COLLATE utf16_bin NOT NULL,
  `bbirth` date NOT NULL,
  `nbr` int(11) NOT NULL,
  `placebirth` varchar(30) COLLATE utf16_bin NOT NULL,
  `namemayor` varchar(30) COLLATE utf16_bin NOT NULL,
  `addressmayor` int(11) NOT NULL,
  `date` date NOT NULL,
  `deletee` varchar(10) COLLATE utf16_bin NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `birth`
--

INSERT INTO `birth` (`id`, `fn`, `fbirth`, `mn`, `mbirth`, `newborn`, `bbirth`, `nbr`, `placebirth`, `namemayor`, `addressmayor`, `date`, `deletee`) VALUES
(6, 'houssam', '1999-06-01', 'hiba', '2020-01-01', 'jana', '2005-01-01', 1, 'berkayel', 'wissam ali', 11, '2020-06-21', 'true'),
(5, 'ahmad al zohbi', '1970-01-01', 'mouna al zohbi', '1975-04-04', 'mouhamd', '2020-01-01', 37, '', 'khaled shhadi', 9, '2020-05-22', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

DROP TABLE IF EXISTS `death`;
CREATE TABLE IF NOT EXISTS `death` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf16_bin NOT NULL,
  `bd` date NOT NULL,
  `nbreg` int(11) NOT NULL,
  `bdocument` date NOT NULL,
  `mayorname` varchar(100) COLLATE utf16_bin NOT NULL,
  `address` int(11) NOT NULL,
  `date` date NOT NULL,
  `deletee` varchar(20) COLLATE utf16_bin NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`id`, `name`, `bd`, `nbreg`, `bdocument`, `mayorname`, `address`, `date`, `deletee`) VALUES
(2, 'houssam nour al din ali', '1999-04-07', 4, '2019-01-01', 'khaled shhadi', 9, '2020-05-22', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `divorce`
--

DROP TABLE IF EXISTS `divorce`;
CREATE TABLE IF NOT EXISTS `divorce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `man` varchar(100) COLLATE utf16_bin NOT NULL,
  `bdman` date NOT NULL,
  `nbreg` int(11) NOT NULL,
  `women` varchar(100) COLLATE utf16_bin NOT NULL,
  `bd` date NOT NULL,
  `nbregb` int(11) NOT NULL,
  `placeb` varchar(100) COLLATE utf16_bin NOT NULL,
  `ddocument` date NOT NULL,
  `namemyor` varchar(100) COLLATE utf16_bin NOT NULL,
  `address` int(11) NOT NULL,
  `date` date NOT NULL,
  `deletee` varchar(100) COLLATE utf16_bin NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `divorce`
--

INSERT INTO `divorce` (`id`, `man`, `bdman`, `nbreg`, `women`, `bd`, `nbregb`, `placeb`, `ddocument`, `namemyor`, `address`, `date`, `deletee`) VALUES
(2, 'mouhamd jamil ahmad', '2001-04-02', 4, 'lina ahmamd mouhamad', '2021-02-02', 2, 'hayzouk', '2020-02-01', 'khaled shhadi', 9, '2020-05-22', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

DROP TABLE IF EXISTS `marriage`;
CREATE TABLE IF NOT EXISTS `marriage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groom` varchar(70) COLLATE utf16_bin NOT NULL,
  `bdgroom` date NOT NULL,
  `nbreg` int(11) NOT NULL,
  `bride` varchar(70) COLLATE utf16_bin NOT NULL,
  `bd` date NOT NULL,
  `nbregb` int(11) NOT NULL,
  `placeb` varchar(50) COLLATE utf16_bin NOT NULL,
  `ddocument` date NOT NULL,
  `namemyor` varchar(70) COLLATE utf16_bin NOT NULL,
  `address` int(11) NOT NULL,
  `date` date NOT NULL,
  `deletee` varchar(20) COLLATE utf16_bin NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `marriage`
--

INSERT INTO `marriage` (`id`, `groom`, `bdgroom`, `nbreg`, `bride`, `bd`, `nbregb`, `placeb`, `ddocument`, `namemyor`, `address`, `date`, `deletee`) VALUES
(3, 'mouhamd jamil ahmad', '1998-12-19', 37, 'farah khaled jihad', '2000-01-30', 3, 'masha', '2020-01-01', 'khaled shhadi', 9, '2020-05-22', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `mayor`
--

DROP TABLE IF EXISTS `mayor`;
CREATE TABLE IF NOT EXISTS `mayor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf16_bin NOT NULL,
  `password` varchar(20) COLLATE utf16_bin NOT NULL,
  `firstname` varchar(20) COLLATE utf16_bin NOT NULL,
  `lastname` varchar(20) COLLATE utf16_bin NOT NULL,
  `address` varchar(20) COLLATE utf16_bin NOT NULL,
  `idtown` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `mayor`
--

INSERT INTO `mayor` (`id`, `username`, `password`, `firstname`, `lastname`, `address`, `idtown`, `role`) VALUES
(30, 'khaled', 'secret', 'khaled', 'shhadi', 'hayzouk', 9, 2),
(29, 'Ghays', 'secret', 'Ghays', 'zouhbi', 'machha', 8, 2),
(31, 'moustafa', 'secret', 'moustafa', 'massoud', 'halba', 10, 2),
(32, 'wissam', 'secret', 'wissam', 'ali', 'berkayel', 11, 2),
(33, 'yahya', 'secret', 'yahyah', 'abd', 'mashha', 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fn` varchar(20) COLLATE utf16_bin NOT NULL,
  `mn` varchar(20) COLLATE utf16_bin NOT NULL,
  `ln` varchar(20) COLLATE utf16_bin NOT NULL,
  `mothername` varchar(20) COLLATE utf16_bin NOT NULL,
  `nbreg` int(11) NOT NULL,
  `bd` date NOT NULL,
  `address` varchar(20) COLLATE utf16_bin NOT NULL,
  `placeb` varchar(20) COLLATE utf16_bin NOT NULL,
  `gender` varchar(20) COLLATE utf16_bin NOT NULL,
  `status` varchar(20) COLLATE utf16_bin NOT NULL,
  `denomination` varchar(80) COLLATE utf16_bin NOT NULL,
  `religion` varchar(80) COLLATE utf16_bin NOT NULL,
  `district` varchar(20) COLLATE utf16_bin NOT NULL,
  `governorate` varchar(20) COLLATE utf16_bin NOT NULL,
  `fid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `townid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `townid` (`townid`),
  KEY `townid_2` (`townid`),
  KEY `townid_3` (`townid`),
  KEY `townid_4` (`townid`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `fn`, `mn`, `ln`, `mothername`, `nbreg`, `bd`, `address`, `placeb`, `gender`, `status`, `denomination`, `religion`, `district`, `governorate`, `fid`, `mid`, `townid`) VALUES
(112, 'houssam', 'nour aldin', 'ali', 'halima', 1, '1999-01-01', 'berkayel', 'berkayel', 'male', 'death', 'mouslem', 'souni', 'akkar', 'akkar', 0, 0, 11),
(111, 'sara', 'houssam', 'ali', 'massara', 130, '2010-01-01', 'mashha', 'mashha', 'female', 'death', 'mouslem', 'souni', 'akkar', 'akkar', 0, 108, 8),
(110, 'lina', 'mouhamad', 'khoder', 'amina', 20, '2001-01-01', 'mashha', 'mashha', 'female', 'single', 'mouslem', 'souni', 'akkar', 'akkar', 0, 0, 8),
(107, 'tawfik', 'ahmad', 'alzohbi', 'mouna', 37, '1998-11-19', 'machha', 'machha', 'male', 'single', 'mouslem', 'souni', 'akkar', 'akkar', 0, 0, 8),
(109, 'abd elkader', 'ahmad', 'abd elkarim', 'maha', 47, '1990-01-01', 'halba', 'mashha', 'male', 'single', 'mouslem', 'souni', 'akkar', 'akkar', 0, 0, 8),
(108, 'Ghays', 'moustafa', 'salim', 'fadwa', 130, '2000-01-01', 'mashha', 'mashha', 'male', 'Devorced', 'mouslem', 'souni', 'akkar', 'akkar', 0, 0, 8),
(113, 'hiba', 'mouhamad ', 'hamzi', 'hanan', 1, '1996-11-30', 'berkayel', 'halba', 'female', 'Married', 'mouslem', 'souni', 'akkar', 'akkar', 0, 112, 11),
(114, 'jana', 'houssam', 'ali', 'hiba', 1, '2005-06-01', 'berkayel', 'berkayel', 'female', 'single', 'seni', 'mouslem', 'akkar', 'akkar', 112, 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `town`
--

DROP TABLE IF EXISTS `town`;
CREATE TABLE IF NOT EXISTS `town` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf16_bin NOT NULL,
  `governorate` varchar(20) COLLATE utf16_bin NOT NULL,
  `district` varchar(20) COLLATE utf16_bin NOT NULL,
  `deletee` varchar(20) COLLATE utf16_bin NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `town`
--

INSERT INTO `town` (`id`, `name`, `governorate`, `district`, `deletee`) VALUES
(8, 'mashha', 'akkarr', 'akkar', 'false'),
(9, 'hayzouk', 'akkar', 'akkar', 'false'),
(10, 'halba', 'akkar', 'akkar', 'false'),
(11, 'berkayel', 'akkar', 'akkar', 'true'),
(12, 'abdi', 'akkar', 'akkar', 'true');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
