-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2014 at 08:59 AM
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
('cf01e5dbed0a660dc744d8ffe15e0fd7', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415333437, 'a:2:{s:9:"user_data";s:0:"";s:7:"idGuest";i:4;}');

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE IF NOT EXISTS `editor` (
`id_editor` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `membership` enum('Mapala UI','Non - Mapala UI') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no.M` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`id_editor`, `name`, `membership`, `no.M`) VALUES
(1, 'Nada (editor)', 'Mapala UI', '873'),
(16, 'Sukri', 'Non - Mapala UI', '-'),
(17, 'Joni', 'Non - Mapala UI', '-'),
(18, 'Topi', 'Non - Mapala UI', '-');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`id_event` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_year` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `end_year` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `category` enum('climbing','rafting','caving','diving','paragliding','mountaineering','sailing','BKP','others') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `name`, `location`, `start_year`, `end_year`, `category`) VALUES
(2, 'Perjalanan Panjang Gunung Masurai dan Bakti Sosial Mapala UI Berbagi', 'Jambi', '2012', '2012', 'mountaineering'),
(3, 'Half Marathon 2014', 'UI Depok', '2014', '2014', 'others'),
(4, 'BKP 2011', 'Depok-Jambi', '2011', '2012', 'BKP'),
(8, 'BKP 2012', 'Jawa Barat-Yogyakarta', '2012', '2012', 'BKP'),
(9, 'Duduk di Perpus Sambil Bersenandung', 'Perpustakaan UI', '2014', '2014', 'others'),
(10, 'UI Bookfest', 'Depok', '2014', '2014', 'others');

-- --------------------------------------------------------

--
-- Table structure for table `guest_log`
--

CREATE TABLE IF NOT EXISTS `guest_log` (
`id` int(5) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `institution` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `guest_log`
--

INSERT INTO `guest_log` (`id`, `login_time`, `name`, `institution`) VALUES
(1, '2014-10-27 08:34:31', 'nada', 'kukusan'),
(2, '2014-10-29 09:50:14', 'nada', 'nada'),
(3, '2014-11-04 03:37:53', 'admin', 'admin'),
(4, '2014-11-07 04:11:28', 'nada', 'Depok');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
`id_owner` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id_owner`, `name`, `phone`, `address`) VALUES
(1, 'Nada (owner)', '08987572633', 'Kukusan, Depok');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE IF NOT EXISTS `photographer` (
`id_photographer` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `membership` enum('Mapala UI','Non - Mapala UI') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no.M` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`id_photographer`, `name`, `membership`, `no.M`) VALUES
(29, 'Comi', 'Mapala UI', 873),
(31, 'Bonny', 'Non - Mapala UI', 0),
(32, 'Toto', 'Non - Mapala UI', 0),
(33, 'Lulu', 'Non - Mapala UI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `photo_record`
--

CREATE TABLE IF NOT EXISTS `photo_record` (
  `id_photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_photographer` int(11) NOT NULL,
  `format` set('digital','repro/scan','print') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` enum('color','b&w','sephia') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_event` int(11) NOT NULL,
  `category` set('climbing','rafting','caving','diving','mountaineering','paragliding','sailing','BKP','others') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `taken_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `taken_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_editor` int(11) NOT NULL,
  `repro_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `published_on` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `published_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo_upload` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location_HDD_name` varchar(255) NOT NULL,
  `location_HDD_folder` varchar(255) NOT NULL,
  `location_sekret_album` varchar(255) NOT NULL,
  `id_owner` int(11) NOT NULL,
  `location_notes` text NOT NULL,
  `notes` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_record`
--

INSERT INTO `photo_record` (`id_photo`, `title`, `id_photographer`, `format`, `size`, `color`, `id_event`, `category`, `taken_date`, `taken_location`, `description`, `id_editor`, `repro_date`, `published_on`, `published_date`, `photo_upload`, `location_HDD_name`, `location_HDD_folder`, `location_sekret_album`, `id_owner`, `location_notes`, `notes`, `tag`, `last_update`) VALUES
('asas/asas/asasas', 'asasasa', 0, 'print', '', 'color', 0, 'climbing', 'dd/mm/yyyy', '', '', 0, 'dd/mm/yyyy', '', 'dd/mm/yyyy', '', '', '', '', 0, '', '', '', '2014-11-06 06:38:12'),
('Lalalala/2014/232323', 'Liat-liat Brosur Wing Stop', 31, 'digital', '', 'b&w', 0, 'others', '7/November/2014', 'Gedung 7 FIB UI', '', 0, 'dd/mm/yyyy', '', 'dd/mm/yyyy', '', '', '', '', 0, '', '', '', '2014-11-07 03:42:05'),
('Lalalann/2014/232323', 'Liat-liat Brosur Wing Stop', 31, 'digital', '', 'b&w', 0, 'others', '7/November/2014', 'Gedung 7 FIB UI', '', 0, 'dd/mm/yyyy', '', 'dd/mm/yyyy', '', '', '', '', 0, '', '', '', '2014-11-07 03:43:08'),
('LRG/2014/00000001', 'Duduk-duduk di Warung Desa Tuare', 0, 'digital', '', 'color', 4, 'others', '4/March/2014', 'Warung Bu Susi', 'Orang yang sedang duduk di warung bernama Sasa, Sisi dan Sosis', 16, '6/September/2014', '', 'dd/mm/yyyy', '', '', '', '', 0, '', 'Fotonya harus dibayangin sendiri', '', '2014-11-06 06:29:48'),
('LRG/2014/0000003', 'Duduk-duduk di Pinggir Sungai', 0, 'digital', '', 'color', 4, 'others', '4/March/2014', 'Warung Bu Susi', 'Orang yang sedang duduk di pinggir sungai bernama Lulu', 16, '6/September/2014', '', 'dd/mm/yyyy', '', '', '', '', 0, '', 'Fotonya harus dibayangin sendiri', '', '2014-11-06 06:32:29'),
('MSR/2012/00001', 'Contoh Judul Foto', 0, 'digital,repro/scan', '', 'color', 2, 'mountaineering', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '2014-10-27 07:54:40'),
('q/q/aaa', 'q', 0, 'repro/scan', '', 'color', 0, 'climbing', 'dd/mm/yyyy', '', '', 0, 'dd/mm/yyyy', '', 'dd/mm/yyyy', '', '', '', '', 0, '', '', '', '2014-11-06 06:37:29'),
('q/q/q', 'q', 0, 'repro/scan', '', 'color', 0, 'climbing', 'dd/mm/yyyy', '', '', 0, 'dd/mm/yyyy', '', 'dd/mm/yyyy', '', '', '', '', 0, '', '', '', '2014-11-06 06:35:09'),
('SAT/2014/00001', 'Satria Lagi Tidur Nih', 29, 'digital', '', '', 0, 'others', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '2014-10-27 09:47:51');

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
 ADD PRIMARY KEY (`id_photo`);

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
MODIFY `id_editor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `guest_log`
--
ALTER TABLE `guest_log`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
MODIFY `id_owner` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
MODIFY `id_photographer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
