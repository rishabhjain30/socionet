-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2015 at 10:49 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `socio_net`
--

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE IF NOT EXISTS `draft` (
  `frm` varchar(100) NOT NULL,
  `too` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `att` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `aid` varchar(100) NOT NULL DEFAULT '',
  `rid` varchar(100) NOT NULL DEFAULT '',
  `dat` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `frireq`
--

CREATE TABLE IF NOT EXISTS `frireq` (
  `sid` varchar(100) NOT NULL DEFAULT '',
  `rid` varchar(100) NOT NULL DEFAULT '',
  `dat` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `frm` varchar(100) NOT NULL,
  `too` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `msg` varchar(400) NOT NULL,
  `att` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` varchar(100) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `qual` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fname`, `lname`, `qual`) VALUES
('chitrank123', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE IF NOT EXISTS `regis` (
  `id` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `gen` varchar(8) NOT NULL,
  `city` varchar(20) NOT NULL,
  `sq` varchar(20) NOT NULL,
  `ans` varchar(60) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `pass`, `uname`, `age`, `gen`, `city`, `sq`, `ans`, `date`) VALUES
('chitrank123', 'e10adc3949ba59abbe56e057f20f883e', 'chitrank', 13, 'male', 'India', 'What is ur pet name?', 'asda', '2015-10-04 17:12:23.000000');

-- --------------------------------------------------------

--
-- Table structure for table `sent`
--

CREATE TABLE IF NOT EXISTS `sent` (
  `frm` varchar(100) NOT NULL,
  `too` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `att` varchar(100) NOT NULL,
  `data` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`aid`,`rid`);

--
-- Indexes for table `frireq`
--
ALTER TABLE `frireq`
  ADD PRIMARY KEY (`sid`,`rid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
