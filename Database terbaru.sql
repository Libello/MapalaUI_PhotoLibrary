-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2014 at 02:01 AM
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
('2d9a80df28a9b2052c886319f2afc429', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415840468, ''),
('ea0ef6d1d451fc203e249186121c07d3', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415783499, 'a:1:{s:7:"idGuest";s:5:"admin";}'),
('f2b1f0447845ee5a4e0926daf0d8bdba', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415809059, 'a:2:{s:9:"user_data";s:0:"";s:7:"idGuest";s:5:"admin";}');

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE IF NOT EXISTS `editor` (
`id_editor` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `membership` enum('Mapala UI','Non - Mapala UI') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no.M` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`id_editor`, `name`, `membership`, `no.M`) VALUES
(32, 'Admin', 'Mapala UI', '123');

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
  `category` enum('panjat','arung jeram','telusur gua','selam','paralayang','daki gunung','layar','BKP','lainnya') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `name`, `location`, `start_year`, `end_year`, `category`) VALUES
(3, 'Half Marathon 2014', 'UI Depok', '2014', '2014', ''),
(8, 'BKP 2012', 'Jawa Barat-Yogyakarta', '2012', '2012', 'BKP'),
(9, 'Suksesi Mapala UI 2012', 'Pusat Kegiatan Mahasiswa UI', '2012', '2012', 'lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `guest_log`
--

CREATE TABLE IF NOT EXISTS `guest_log` (
`id` int(5) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `institution` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
`id_owner` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE IF NOT EXISTS `photographer` (
`id_photographer` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `membership` enum('Mapala UI','Non - Mapala UI') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no.M` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`id_photographer`, `name`, `membership`, `no.M`) VALUES
(32, 'Yudhi Yanto', 'Mapala UI', 821),
(33, 'Hizkia Dianne Angela', 'Mapala UI', 778),
(34, 'Satya Winnie Sidabutar', 'Mapala UI', 864);

-- --------------------------------------------------------

--
-- Table structure for table `photo_record`
--

CREATE TABLE IF NOT EXISTS `photo_record` (
  `id_photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_photographer` int(11) NOT NULL,
  `name_photographer` varchar(255) NOT NULL,
  `format` set('digital','repro/scan','tercetak') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` enum('berwarna','hitam dan putih','sephia') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_event` int(11) NOT NULL,
  `name_event` varchar(255) NOT NULL,
  `category` set('panjat','arung jeram','telusur gua','selam','daki gunung','paralayang','layar','BKP','lainnya') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewactivity`
--
CREATE TABLE IF NOT EXISTS `viewactivity` (
`id_photo` varchar(255)
,`title` varchar(255)
,`id_photographer` int(11)
,`name_photographer` varchar(255)
,`format` set('digital','repro/scan','tercetak')
,`size` varchar(255)
,`color` enum('berwarna','hitam dan putih','sephia')
,`id_event` int(11)
,`name_event` varchar(255)
,`category` set('panjat','arung jeram','telusur gua','selam','daki gunung','paralayang','layar','BKP','lainnya')
,`taken_date` varchar(255)
,`taken_location` varchar(255)
,`description` text
,`notes` text
,`id_editor` int(11)
,`name_editor` varchar(255)
,`repro_date` varchar(255)
,`published_on` varchar(255)
,`published_date` varchar(255)
,`photo_upload` varchar(255)
,`location_HDD_name` varchar(255)
,`location_HDD_folder` varchar(255)
,`location_sekret_album` varchar(255)
,`id_owner` int(11)
,`name_owner` varchar(255)
,`location_notes` text
,`tag` varchar(255)
,`last_update` timestamp
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `viewformat`
--
CREATE TABLE IF NOT EXISTS `viewformat` (
`id_photo` varchar(255)
,`title` varchar(255)
,`id_photographer` int(11)
,`name_photographer` varchar(255)
,`format` set('digital','repro/scan','tercetak')
,`size` varchar(255)
,`color` enum('berwarna','hitam dan putih','sephia')
,`id_event` int(11)
,`name_event` varchar(255)
,`category` set('panjat','arung jeram','telusur gua','selam','daki gunung','paralayang','layar','BKP','lainnya')
,`taken_date` varchar(255)
,`taken_location` varchar(255)
,`description` text
,`notes` text
,`id_editor` int(11)
,`name_editor` varchar(255)
,`repro_date` varchar(255)
,`published_on` varchar(255)
,`published_date` varchar(255)
,`photo_upload` varchar(255)
,`location_HDD_name` varchar(255)
,`location_HDD_folder` varchar(255)
,`location_sekret_album` varchar(255)
,`id_owner` int(11)
,`name_owner` varchar(255)
,`location_notes` text
,`tag` varchar(255)
,`last_update` timestamp
);
-- --------------------------------------------------------

--
-- Structure for view `viewactivity`
--
DROP TABLE IF EXISTS `viewactivity`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewactivity` AS select `photo_record`.`id_photo` AS `id_photo`,`photo_record`.`title` AS `title`,`photo_record`.`id_photographer` AS `id_photographer`,`photo_record`.`name_photographer` AS `name_photographer`,`photo_record`.`format` AS `format`,`photo_record`.`size` AS `size`,`photo_record`.`color` AS `color`,`photo_record`.`id_event` AS `id_event`,`photo_record`.`name_event` AS `name_event`,`photo_record`.`category` AS `category`,`photo_record`.`taken_date` AS `taken_date`,`photo_record`.`taken_location` AS `taken_location`,`photo_record`.`description` AS `description`,`photo_record`.`notes` AS `notes`,`photo_record`.`id_editor` AS `id_editor`,`photo_record`.`name_editor` AS `name_editor`,`photo_record`.`repro_date` AS `repro_date`,`photo_record`.`published_on` AS `published_on`,`photo_record`.`published_date` AS `published_date`,`photo_record`.`photo_upload` AS `photo_upload`,`photo_record`.`location_HDD_name` AS `location_HDD_name`,`photo_record`.`location_HDD_folder` AS `location_HDD_folder`,`photo_record`.`location_sekret_album` AS `location_sekret_album`,`photo_record`.`id_owner` AS `id_owner`,`photo_record`.`name_owner` AS `name_owner`,`photo_record`.`location_notes` AS `location_notes`,`photo_record`.`tag` AS `tag`,`photo_record`.`last_update` AS `last_update` from `photo_record`;

-- --------------------------------------------------------

--
-- Structure for view `viewformat`
--
DROP TABLE IF EXISTS `viewformat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewformat` AS select `viewactivity`.`id_photo` AS `id_photo`,`viewactivity`.`title` AS `title`,`viewactivity`.`id_photographer` AS `id_photographer`,`viewactivity`.`name_photographer` AS `name_photographer`,`viewactivity`.`format` AS `format`,`viewactivity`.`size` AS `size`,`viewactivity`.`color` AS `color`,`viewactivity`.`id_event` AS `id_event`,`viewactivity`.`name_event` AS `name_event`,`viewactivity`.`category` AS `category`,`viewactivity`.`taken_date` AS `taken_date`,`viewactivity`.`taken_location` AS `taken_location`,`viewactivity`.`description` AS `description`,`viewactivity`.`notes` AS `notes`,`viewactivity`.`id_editor` AS `id_editor`,`viewactivity`.`name_editor` AS `name_editor`,`viewactivity`.`repro_date` AS `repro_date`,`viewactivity`.`published_on` AS `published_on`,`viewactivity`.`published_date` AS `published_date`,`viewactivity`.`photo_upload` AS `photo_upload`,`viewactivity`.`location_HDD_name` AS `location_HDD_name`,`viewactivity`.`location_HDD_folder` AS `location_HDD_folder`,`viewactivity`.`location_sekret_album` AS `location_sekret_album`,`viewactivity`.`id_owner` AS `id_owner`,`viewactivity`.`name_owner` AS `name_owner`,`viewactivity`.`location_notes` AS `location_notes`,`viewactivity`.`tag` AS `tag`,`viewactivity`.`last_update` AS `last_update` from `viewactivity`;

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
MODIFY `id_editor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `guest_log`
--
ALTER TABLE `guest_log`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
MODIFY `id_owner` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
MODIFY `id_photographer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
