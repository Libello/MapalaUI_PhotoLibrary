-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2014 at 01:39 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

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
-- Stand-in structure for view `activity`
--
CREATE TABLE IF NOT EXISTS `activity` (
);
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
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
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('802013a6361076b4e7d5f04360f9c650', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36', 1415623025, 'a:2:{s:9:"user_data";s:0:"";s:7:"idGuest";s:5:"admin";}');

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE IF NOT EXISTS `editor` (
  `id_editor` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `membership` enum('Mapala UI','Non - Mapala UI') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no.M` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_editor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`id_editor`, `name`, `membership`, `no.M`) VALUES
(1, 'Nada (editor)', 'Mapala UI', '873'),
(32, 'Admin', 'Mapala UI', '123');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_year` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `end_year` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `category` enum('climbing','rafting','caving','diving','paragliding','mountaineering','sailing','BKP','others') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `name`, `location`, `start_year`, `end_year`, `category`) VALUES
(2, 'Perjalanan Panjang Gunung Masurai dan Bakti Sosial Mapala UI Berbagi', 'Jambi', '2012', '2012', 'mountaineering'),
(3, 'Half Marathon 2014', 'UI Depok', '2014', '2014', 'others'),
(4, 'BKP 2011', 'Depok-Jambi', '2011', '2012', 'BKP'),
(8, 'BKP 2012', 'Jawa Barat-Yogyakarta', '2012', '2012', 'BKP');

-- --------------------------------------------------------

--
-- Stand-in structure for view `format`
--
CREATE TABLE IF NOT EXISTS `format` (
);
-- --------------------------------------------------------

--
-- Table structure for table `guest_log`
--

CREATE TABLE IF NOT EXISTS `guest_log` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `institution` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `guest_log`
--

INSERT INTO `guest_log` (`id`, `login_time`, `name`, `institution`) VALUES
(1, '2014-10-27 08:34:31', 'nada', 'kukusan'),
(2, '2014-10-29 08:43:41', 'saya', 'saya'),
(3, '2014-10-29 08:51:16', 'admin', 'admin'),
(4, '2014-10-29 09:04:16', 'satria.ramadhan', 'satria'),
(5, '2014-10-29 09:49:31', 'satria.ramadhan', 'fasilkom ui'),
(6, '2014-10-31 07:43:47', 'nada', 'fib'),
(7, '2014-10-31 07:55:15', 'nada', 'tyy'),
(8, '2014-11-10 05:43:23', 'satria', 'fasilkom');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `id_owner` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_owner`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id_owner`, `name`, `phone`, `address`) VALUES
(1, 'Nada (owner)', '08987572633', 'Kukusan, Depok'),
(10, 'Doni', '08989', 'Depok'),
(11, 'Boni', '', ''),
(12, 'Joni', '', ''),
(13, 'Ga tau', '', ''),
(14, 'Supri', '09827343', 'Di mana-mana');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE IF NOT EXISTS `photographer` (
  `id_photographer` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `membership` enum('Mapala UI','Non - Mapala UI') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no.M` int(5) NOT NULL,
  PRIMARY KEY (`id_photographer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`id_photographer`, `name`, `membership`, `no.M`) VALUES
(30, 'Satria', 'Mapala UI', 877);

-- --------------------------------------------------------

--
-- Table structure for table `photo_record`
--

CREATE TABLE IF NOT EXISTS `photo_record` (
  `id_photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_photographer` int(11) NOT NULL,
  `name_photographer` varchar(255) NOT NULL,
  `format` set('digital','repro/scan','print') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` enum('color','b&w','sephia') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_event` int(11) NOT NULL,
  `name_event` varchar(255) NOT NULL,
  `category` set('climbing','rafting','caving','diving','mountaineering','paragliding','sailing','BKP','others') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `taken_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `taken_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `notes` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_editor` int(11) NOT NULL,
  `name_editor` varchar(255) NOT NULL,
  `repro_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `published_on` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `published_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo_upload` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location_HDD_name` varchar(255) NOT NULL,
  `location_HDD_folder` varchar(255) NOT NULL,
  `location_sekret_album` varchar(255) NOT NULL,
  `id_owner` int(11) NOT NULL,
  `name_owner` varchar(255) NOT NULL,
  `location_notes` text NOT NULL,
  `tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_photo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_record`
--

INSERT INTO `photo_record` (`id_photo`, `title`, `id_photographer`, `name_photographer`, `format`, `size`, `color`, `id_event`, `name_event`, `category`, `taken_date`, `taken_location`, `description`, `notes`, `id_editor`, `name_editor`, `repro_date`, `published_on`, `published_date`, `photo_upload`, `location_HDD_name`, `location_HDD_folder`, `location_sekret_album`, `id_owner`, `name_owner`, `location_notes`, `tag`, `last_update`) VALUES
('908838_2014_8338', 'fjshs', 30, 'Satria', 'print', '35x66', 'sephia', 3, '', 'rafting', '15/Nopember/2000', 'Ciliwung', 'jdjdj', 'sjsjsj', 1, '', '16/Desember/2001', 'hdhjd', '18/Nopember/2001', '', '', '', '', 0, '', '', 'sss,sss', '2014-11-08 08:49:12'),
('asa/asa/asa', 'asa', 30, 'Satria', 'digital', '', '', 0, '-', '', 'tgl/bln/thn', '', '', '', 0, '-', 'tgl/bln/thn', '', 'tgl/bln/thn', 'WIN_20140728_095252.JPG', '', '', '', 0, '-', '', '', '2014-11-10 08:33:28'),
('MSR/2012/00001', 'Contoh Judul Foto', 30, 'Satria', 'digital,repro/scan', '', 'color', 2, '', 'mountaineering', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '2014-10-27 07:54:40'),
('SAT/2014/00001', 'Satria Lagi Tidur Nih', 30, 'Satria', 'digital', '', '', 0, '', 'others', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '2014-10-27 09:47:51');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewactivity`
--
CREATE TABLE IF NOT EXISTS `viewactivity` (
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `viewformat`
--
CREATE TABLE IF NOT EXISTS `viewformat` (
);
-- --------------------------------------------------------

--
-- Structure for view `activity`
--
DROP TABLE IF EXISTS `activity`;
-- in use(#1356 - View 'mui_photo_library.activity' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `format`
--
DROP TABLE IF EXISTS `format`;
-- in use(#1356 - View 'mui_photo_library.activity' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `viewactivity`
--
DROP TABLE IF EXISTS `viewactivity`;
-- in use(#1356 - View 'mui_photo_library.viewactivity' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `viewformat`
--
DROP TABLE IF EXISTS `viewformat`;
-- in use(#1356 - View 'mui_photo_library.viewactivity' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
