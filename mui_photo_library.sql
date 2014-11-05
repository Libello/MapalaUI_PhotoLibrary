-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2014 at 12:00 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mui_photo_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14102 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(14101, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('4cf10c446767970a7148582ccab7711e', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.101 Safari/537.36 OPR/25.0.1614.50', 1414058102, 'a:2:{s:9:"user_data";s:0:"";s:7:"idGuest";i:6;}');

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE IF NOT EXISTS `editor` (
`id_editor` int(5) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `membership` enum('Mapala UI','Not - Mapala UI') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `no.M` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`id_event` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_year` year(4) DEFAULT NULL,
  `end_year` year(4) DEFAULT NULL,
  `category` enum('climbing','rafting','caving','diving','paragliding','mountaineering','sailing','BKP','others') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `name`, `location`, `start_year`, `end_year`, `category`) VALUES
(1, 'Arung Jeram Sungai Lariang dan Telusur Taman Nasional Lore Lindu (TNLL)', 'Sulawesi Tengah', 2014, 2014, 'climbing'),
(2, 'Perjalanan Panjang Gunung Masurai dan Bakti Sosial Mapala UI Berbagi', 'Jambi', 2012, 2012, 'climbing');

-- --------------------------------------------------------

--
-- Table structure for table `guest_log`
--

CREATE TABLE IF NOT EXISTS `guest_log` (
`id` int(5) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `guest_log`
--

INSERT INTO `guest_log` (`id`, `login_time`, `name`, `institution`) VALUES
(19, '2014-10-23 08:15:31', 'Joni Ganteng', 'Klub Meong Smi'),
(20, '2014-10-23 08:15:59', 'Mama Meong', 'Klub Meong Dpk'),
(21, '2014-10-23 08:16:42', 'Adik Jessica Alba', 'Washington'),
(22, '2014-10-23 08:17:32', 'Qatrunnada Fadhila', 'FIB UI'),
(23, '2014-10-23 08:17:49', 'Satria Ramadhan', 'Fasilkom UI'),
(24, '2014-10-23 09:55:21', 'satria', 'sasasa');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
`id_owner` int(5) NOT NULL,
  `name` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE IF NOT EXISTS `photographer` (
`id_photographer` int(5) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `membership` enum('Mapala UI','Not - Mapala UI') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no.M` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photo_record`
--

CREATE TABLE IF NOT EXISTS `photo_record` (
`id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_photographer` int(11) NOT NULL,
  `type` set('digital','print','repro/scan') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` enum('color','b&w','sephia') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `event` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `activity` set('climbing','rafting','caving','diving','mountaineering','paragliding','sailing','BKP','others') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) DEFAULT NULL,
  `place` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `notes` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `editor` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `repro_year` year(4) DEFAULT NULL,
  `publication` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `publishing year` year(4) DEFAULT NULL,
  `photo_upload` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_location_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_location_detail1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_location_detail2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_location_detail3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_location_detail4` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `editor`
--
ALTER TABLE `editor`
 ADD PRIMARY KEY (`id_editor`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `guest_log`
--
ALTER TABLE `guest_log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
 ADD PRIMARY KEY (`id_owner`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
 ADD PRIMARY KEY (`id_photographer`);

--
-- Indexes for table `photo_record`
--
ALTER TABLE `photo_record`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14102;
--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
MODIFY `id_editor` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `id_event` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `guest_log`
--
ALTER TABLE `guest_log`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
MODIFY `id_owner` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
MODIFY `id_photographer` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo_record`
--
ALTER TABLE `photo_record`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
