-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2016 at 02:30 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tier`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment1`
--

CREATE TABLE IF NOT EXISTS `comment1` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `comment1`
--

INSERT INTO `comment1` (`ID`, `NAME`, `COMMENT`) VALUES
(31, 'eshanw48', 'asa'),
(32, 'eshanw48', 'harshhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(33, 'eshanw48', '&#128591;&#128591;&#128591;'),
(34, 'eshanw48', '&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;&#128591;'),
(35, 'eshanw48', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `commentarena`
--

CREATE TABLE IF NOT EXISTS `commentarena` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `commentarena`
--

INSERT INTO `commentarena` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshanw48', 'j'),
(2, 'eshanw48', 'j'),
(3, 'eshanw48', 'p'),
(4, 'eshanw48', 'p'),
(5, 'srikar', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `commentashe`
--

CREATE TABLE IF NOT EXISTS `commentashe` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `commentashe`
--

INSERT INTO `commentashe` (`ID`, `NAME`, `COMMENT`) VALUES
(5, 'd', ''),
(6, 'd', '.'),
(7, 'd', '..........................................'),
(8, 'd', '.......................................................................................................................;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhlllllllllllllllllllllllllllllllllllllllllllllllllllllllliiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiihhhhhhhhhhhhhhhhhhhhhhhhhhhlllllllllllllllllllllllllllllllllllllllllllllllllllllllluuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuyyyyyyyyyyyyyyyyyyyyyyyyyyyyuuuuuuuuuuuuuuuuuuuuuuuyyyyyyyyyyyyyyyyyyyyyyyyyy.');

-- --------------------------------------------------------

--
-- Table structure for table `commentcaityln`
--

CREATE TABLE IF NOT EXISTS `commentcaityln` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commentcorki`
--

CREATE TABLE IF NOT EXISTS `commentcorki` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commentdraven`
--

CREATE TABLE IF NOT EXISTS `commentdraven` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commentdraven`
--

INSERT INTO `commentdraven` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshanw48', 's');

-- --------------------------------------------------------

--
-- Table structure for table `commentdru`
--

CREATE TABLE IF NOT EXISTS `commentdru` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `commentdru`
--

INSERT INTO `commentdru` (`ID`, `NAME`, `COMMENT`) VALUES
(6, 'eshanw48', 's');

-- --------------------------------------------------------

--
-- Table structure for table `commentezreal`
--

CREATE TABLE IF NOT EXISTS `commentezreal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `commentezreal`
--

INSERT INTO `commentezreal` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshanw48', 's'),
(2, 'eshanw48', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `commenthun`
--

CREATE TABLE IF NOT EXISTS `commenthun` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `commenthun`
--

INSERT INTO `commenthun` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshan', 'test'),
(2, 'eshan', 'test'),
(3, 'eshan', 'te'),
(4, 'eshan', 'te'),
(5, 'eshanw48', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `commentjhin`
--

CREATE TABLE IF NOT EXISTS `commentjhin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commentjhin`
--

INSERT INTO `commentjhin` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshanw48', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `commentjinx`
--

CREATE TABLE IF NOT EXISTS `commentjinx` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `commentjinx`
--

INSERT INTO `commentjinx` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshanw48', 'kk'),
(2, 'eshanw48', 't'),
(3, 'eshanw48', 'ASAS');

-- --------------------------------------------------------

--
-- Table structure for table `commentkalista`
--

CREATE TABLE IF NOT EXISTS `commentkalista` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commentkogmaw`
--

CREATE TABLE IF NOT EXISTS `commentkogmaw` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentkogmaw`
--

INSERT INTO `commentkogmaw` (`ID`, `NAME`, `COMMENT`) VALUES
(0, 'swaggyp', ''),
(0, 'swaggyp', 's'),
(0, 'swaggyp', 'sd'),
(0, 'swaggyp', ';'),
(0, 'swaggyp', ''),
(0, 'swaggyp', 'l'),
(0, 'eshanw48', 's'),
(0, 'eshanw48', ';'),
(0, 'eshanw48', 'gh'),
(0, 'eshanw48', 'gh'),
(0, 'eshanw48', 'y'),
(0, 'eshanw48', ''),
(0, 'eshanw48', ''),
(0, 'eshanw48', ''),
(0, 'eshanw48', 'j'),
(0, 'eshanw48', 'j'),
(0, 'eshanw48', 'j'),
(0, 'eshanw48', 'ghjjh'),
(0, 'swaggyp', 's'),
(0, 'eshanw48', ''),
(0, 'eshanw48', 'l'),
(0, 'eshanw48', 'j'),
(0, 'eshanw48', ''),
(0, 'eshanw48', ''),
(0, 'eshanw48', 'b'),
(0, 'eshanw48', ''),
(0, 'eshanw48', 'l'),
(0, 'eshanw48', 'l'),
(0, 'eshanw48', 'f'),
(0, 'eshanw48', 's'),
(0, 'eshanw48', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `commentlol`
--

CREATE TABLE IF NOT EXISTS `commentlol` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `commentlol`
--

INSERT INTO `commentlol` (`ID`, `NAME`, `COMMENT`) VALUES
(9, 'd', 'vf'),
(19, 'd', 'hhhhhhhhhh'),
(20, 'eshanw48', 'DF'),
(21, 'kyleiscool', 'hello'),
(22, 'ateeb', 'ateeb > kyle');

-- --------------------------------------------------------

--
-- Table structure for table `commentlucian`
--

CREATE TABLE IF NOT EXISTS `commentlucian` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commentmag`
--

CREATE TABLE IF NOT EXISTS `commentmag` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `commentmag`
--

INSERT INTO `commentmag` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshanw48', 'p'),
(2, 'eshanw48', 's'),
(3, 'eshanw48', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `commentmissfortune`
--

CREATE TABLE IF NOT EXISTS `commentmissfortune` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commentmissfortune`
--

INSERT INTO `commentmissfortune` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshanw48', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `commentpal`
--

CREATE TABLE IF NOT EXISTS `commentpal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `commentpal`
--

INSERT INTO `commentpal` (`ID`, `NAME`, `COMMENT`) VALUES
(16, 'eshanw48', '90'),
(17, 'eshanw48', 'A1'),
(18, 'eshanw48', 'A1'),
(19, 'eshanw48', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `commentpri`
--

CREATE TABLE IF NOT EXISTS `commentpri` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `commentpri`
--

INSERT INTO `commentpri` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshan', 'test'),
(2, 'eshan', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `commentquinn`
--

CREATE TABLE IF NOT EXISTS `commentquinn` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commentquinn`
--

INSERT INTO `commentquinn` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshanw48', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `commentrog`
--

CREATE TABLE IF NOT EXISTS `commentrog` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commentrog`
--

INSERT INTO `commentrog` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'elfboxers', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `commentsha`
--

CREATE TABLE IF NOT EXISTS `commentsha` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `commentsha`
--

INSERT INTO `commentsha` (`ID`, `NAME`, `COMMENT`) VALUES
(4, 'eshanw48', 'Elitegamer is a weeb'),
(5, 'eshanw48', 'f'),
(6, 'eshanw48', ''),
(7, 'eshanw48', ''),
(8, 'eshanw48', ''),
(9, 'eshanw48', '');

-- --------------------------------------------------------

--
-- Table structure for table `commentsivir`
--

CREATE TABLE IF NOT EXISTS `commentsivir` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commenttristana`
--

CREATE TABLE IF NOT EXISTS `commenttristana` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commenttwitch`
--

CREATE TABLE IF NOT EXISTS `commenttwitch` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commenttwitch`
--

INSERT INTO `commenttwitch` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshanw48', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `commenturgot`
--

CREATE TABLE IF NOT EXISTS `commenturgot` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commentvarus`
--

CREATE TABLE IF NOT EXISTS `commentvarus` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commentvayne`
--

CREATE TABLE IF NOT EXISTS `commentvayne` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commentvayne`
--

INSERT INTO `commentvayne` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshanw48', 's');

-- --------------------------------------------------------

--
-- Table structure for table `commentwar`
--

CREATE TABLE IF NOT EXISTS `commentwar` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commentwar`
--

INSERT INTO `commentwar` (`ID`, `NAME`, `COMMENT`) VALUES
(1, 'eshanw48', 'fffff');

-- --------------------------------------------------------

--
-- Table structure for table `commentwarr`
--

CREATE TABLE IF NOT EXISTS `commentwarr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kogmaw`
--

CREATE TABLE IF NOT EXISTS `kogmaw` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(10) NOT NULL,
  `COMMENT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `NAME`, `PASSWORD`) VALUES
(13, 'dev', 'f9d10e6780d8bf1e22958b10f71a06e677da55e2'),
(14, 'swaggyp', 'a3b7565a06797f13208a1338571ee5738680b78c'),
(15, 'eshanw48', 'e7de71bdf80c1cc31647eae63701e2499ab2b1d7'),
(16, 'dgandham', '35b908a915f86c538752b09e633f576df2c2b349'),
(17, '1234567', '20eabe5d64b0e216796e834f52d61fd0b70332fc'),
(18, 'drgnush', '4574043368daf2f9583e0eae8d6d23632e6a1853'),
(19, 'd', '20eabe5d64b0e216796e834f52d61fd0b70332fc'),
(20, 'harsh', 'a3c384fc80444761072420f8b606e9bdc2a753a7'),
(21, 'elfboxers', 'e7de71bdf80c1cc31647eae63701e2499ab2b1d7'),
(22, 'elfunderwe', 'f8aab0f8adf34f8354e5f8e8f8d0bc379bfecf84'),
(23, 'kyleiscool', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'),
(24, 'ateebiscoo', '93265589cef4a4e45b2226c4c0878703629c938b'),
(25, 'ateebiscoo', 'd4207cec57c2b64aa5572215dba043ecee00d729'),
(26, 'ateeb', '93265589cef4a4e45b2226c4c0878703629c938b'),
(27, 'srikar', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');

-- --------------------------------------------------------

--
-- Table structure for table `votehearth`
--

CREATE TABLE IF NOT EXISTS `votehearth` (
  `INDEX` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(11) NOT NULL,
  `PALA` int(11) NOT NULL,
  `DRUI` int(11) NOT NULL,
  `MAGE` int(11) NOT NULL,
  `WARL` int(11) NOT NULL,
  `SHAM` int(11) NOT NULL,
  `WARR` int(11) NOT NULL,
  `PRIE` int(11) NOT NULL,
  `ROGU` int(11) NOT NULL,
  `HUNT` int(11) NOT NULL,
  PRIMARY KEY (`INDEX`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `votehearth`
--

INSERT INTO `votehearth` (`INDEX`, `NAME`, `PALA`, `DRUI`, `MAGE`, `WARL`, `SHAM`, `WARR`, `PRIE`, `ROGU`, `HUNT`) VALUES
(1, 'dev', 2, 4, 1, 8, 6, 9, 5, 3, 7),
(2, 'elfboxers', 1, 2, 3, 4, 5, 6, 7, 8, 9),
(3, 'srikar', 1, 4, 2, 5, 6, 9, 8, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `votehearthstone`
--

CREATE TABLE IF NOT EXISTS `votehearthstone` (
  `INDEX` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(11) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `PALA` int(10) NOT NULL,
  `DRUI` int(10) NOT NULL,
  `MAGE` int(10) NOT NULL,
  `WARL` int(10) NOT NULL,
  `SHAM` int(10) NOT NULL,
  `WARR` int(10) NOT NULL,
  `PRIE` int(10) NOT NULL,
  `ROGU` int(10) NOT NULL,
  `HUNT` int(10) NOT NULL,
  PRIMARY KEY (`INDEX`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `votehearthstone`
--

INSERT INTO `votehearthstone` (`INDEX`, `NAME`, `PALA`, `DRUI`, `MAGE`, `WARL`, `SHAM`, `WARR`, `PRIE`, `ROGU`, `HUNT`) VALUES
(30, 'swaggyp', 1, 2, 3, 4, 5, 6, 7, 9, 8),
(31, 'dev', 3, 1, 5, 4, 9, 2, 6, 8, 7),
(35, 'dgandham', 3, 2, 4, 7, 1, 5, 6, 9, 8),
(37, 'eshanw48', 1, 2, 3, 4, 5, 6, 7, 9, 8),
(38, 'd', 7, 8, 6, 2, 1, 3, 9, 4, 5),
(39, 'harsh', 4, 5, 3, 7, 1, 2, 9, 6, 8),
(42, 'elfboxers', 2, 3, 5, 4, 8, 7, 9, 1, 6),
(43, 'srikar', 6, 7, 3, 4, 1, 2, 8, 9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `voteleague`
--

CREATE TABLE IF NOT EXISTS `voteleague` (
  `INDEX` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(11) NOT NULL,
  `KOG` int(10) NOT NULL,
  `ASH` int(10) NOT NULL,
  `SIV` int(10) NOT NULL,
  `TWI` int(10) NOT NULL,
  `JIN` int(10) NOT NULL,
  `JHI` int(10) NOT NULL,
  `MIS` int(10) NOT NULL,
  `VAR` int(10) NOT NULL,
  `CAI` int(10) NOT NULL,
  `DRA` int(10) NOT NULL,
  `VAY` int(10) NOT NULL,
  `EZR` int(10) NOT NULL,
  `LUC` int(10) NOT NULL,
  `TRI` int(10) NOT NULL,
  `QUI` int(10) NOT NULL,
  `URG` int(10) NOT NULL,
  `KAL` int(10) NOT NULL,
  `COR` int(10) NOT NULL,
  PRIMARY KEY (`INDEX`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `voteleague`
--

INSERT INTO `voteleague` (`INDEX`, `NAME`, `KOG`, `ASH`, `SIV`, `TWI`, `JIN`, `JHI`, `MIS`, `VAR`, `CAI`, `DRA`, `VAY`, `EZR`, `LUC`, `TRI`, `QUI`, `URG`, `KAL`, `COR`) VALUES
(1, 'eshanw48', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18),
(3, 'elfboxers', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18),
(4, 'kyleiscool', 14, 2, 8, 13, 3, 6, 4, 12, 10, 16, 7, 17, 1, 9, 11, 15, 5, 18),
(5, 'ateeb', 17, 3, 5, 4, 11, 9, 12, 10, 8, 15, 14, 2, 1, 6, 7, 18, 13, 16),
(6, 'srikar', 13, 5, 4, 15, 8, 14, 16, 6, 9, 11, 7, 2, 1, 3, 12, 17, 10, 18);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
