-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2014 at 04:18 PM
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
-- Stand-in structure for view `a0`
--
CREATE TABLE IF NOT EXISTS `a0` (
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `a1`
--
CREATE TABLE IF NOT EXISTS `a1` (
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
('1a36f876f78453b446270d8376385dad', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36', 1418138067, 'a:2:{s:9:"user_data";s:0:"";s:7:"idGuest";s:5:"admin";}');

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
  `category` set('Panjat','Arung Jeram','Telusur Gua','Selam','Daki Gunung','Paralayang','Layar','BKP','Lainnya') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `name`, `location`, `start_year`, `end_year`, `category`) VALUES
(3, 'Half Marathon 2014', 'UI Depok', '2014', '2014', 'Telusur Gua,Selam'),
(8, 'BKP 2012', 'Jawa Barat-Yogyakarta', '2012', '2012', 'Panjat'),
(9, 'Suksesi Mapala UI 2012', 'Pusat Kegiatan Mahasiswa UI', '2012', '2012', 'Lainnya'),
(10, 'Ekspedisi Arung Jeram Sungai Lariang', 'Sungai Lariang, Sulawesi Tengah', '2013', '2014', 'Arung Jeram');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `guest_log`
--

INSERT INTO `guest_log` (`id`, `login_time`, `name`, `institution`) VALUES
(1, '2014-12-08 11:29:46', 'gg', 'ggg'),
(2, '2014-12-08 11:34:02', 'satria.ramadhan', 'admin'),
(3, '2014-12-08 11:35:55', 'satria.ramadhan', 'ad'),
(4, '2014-12-08 11:36:38', 'j', 'j');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id_owner`, `name`, `phone`, `address`) VALUES
(1, 'Qatrunnada Fadhila', '08987572633', 'Wisma Trio Melati, Kukusan, Beji, Depok');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`id_photographer`, `name`, `membership`, `no.M`) VALUES
(32, 'Satria Ramadhan', 'Mapala UI', 877),
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
  `format` set('Digital','Repro / Scan','Tercetak') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` enum('Berwarna','Hitam Putih','Sephia') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_event` int(11) NOT NULL,
  `category` enum('Panjat','Arung Jeram','Telusur Gua','Selam','Daki Gunung','Paralayang','Layar','BKP','Lainnya') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `taken_date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `taken_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `notes` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
  `tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_photo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_record`
--

INSERT INTO `photo_record` (`id_photo`, `title`, `id_photographer`, `format`, `size`, `color`, `id_event`, `category`, `taken_date`, `taken_location`, `description`, `notes`, `id_editor`, `repro_date`, `published_on`, `published_date`, `photo_upload`, `location_HDD_name`, `location_HDD_folder`, `location_sekret_album`, `id_owner`, `location_notes`, `tag`, `last_update`) VALUES
('aa-aa-aa', 'aa', 32, 'Digital', '3104 x 1746', 'Berwarna', 0, 'Panjat', ' - / - / - ', '', '', '', 0, ' - / - / - ', '', ' - / - / - ', 'DSC_0364.JPG', '', '', '', 0, '', '', '2014-12-09 13:35:20'),
('FLW_2012_0002', 'Bunga Kuning', 33, 'Tercetak', '1024 x 768', 'Berwarna', 10, 'Lainnya', '18/Januari/2002', 'Hutan Terlarang', 'Bunga berwarna kuning di tengah hutan', '', 32, ' - / - / -', '', ' - / - / -', 'Tulips.jpg', '', '', '', 0, '', '', '2014-11-13 02:00:54'),
('FLW_2014_00003', 'Bunga Merah', 33, 'Tercetak', '1024 x 768', 'Berwarna', 10, 'Lainnya', '16/Nopember/2003', 'Taman Nasional Lore Lindu', 'Bunga merah di Taman Nasional Lore Lindu', '', 32, ' - / - / - ', '', ' - / - / - ', 'Chrysanthemum.jpg', '', '', '', 0, '', '', '2014-11-13 02:18:54'),
('HKG_2014_001', 'Percobaan Memanjat Tebing Citatah 125', 32, 'Digital,Repro / Scan,Tercetak', '1357 x 2048', 'Berwarna', 9, 'Panjat', '16/September/2003', 'Tebing Citatah', 'Entahlah', 'Tes', 32, '16/September/2003', 'Twitter', '18/Januari/2017', '10368835_10203239610584676_5225809205169447584_o.jpg', '', '', '', 0, '', 'Pemanjat', '2014-11-18 15:31:04'),
('HWN_2001_0001', 'Gurun Pasir', 32, 'Digital,Tercetak', '1024 x 768', 'Berwarna', 8, 'Lainnya', '15/Januari/2001', 'Gurun Gobi', 'Panasnya Gurun Gobi', '', 0, ' - / - / -', '', ' - / - / -', 'Desert.jpg', '', '', '', 0, '', '', '2014-11-13 01:59:45'),
('HWN_2007_0002', 'Koala Di Pohon', 32, 'Digital,Repro / Scan,Tercetak', '1024 x 768', 'Berwarna', 10, 'Lainnya', '1/Januari/2017', 'Pohon Mangga', 'Ada Koala', '', 0, ' - / - / - ', '', ' - / - / - ', 'Koala.jpg', '', '', '', 0, '', '', '2014-11-13 02:34:02'),
('HWN_2011_007', 'Ubur-ubur', 32, 'Repro / Scan,Tercetak', '1024 x 768', 'Berwarna', 10, 'Selam', '15/Desember/2001', 'Danau Poso', 'Ada ubur-ubur di Danau Poso', '', 0, ' - / - / - ', '', ' - / - / - ', 'Jellyfish.jpg', '', '', '', 0, '', '', '2014-11-13 02:27:36'),
('LRG_2014_001', 'Arung Jeram Sungai Lariang', 34, 'Digital', '1024 x 768', 'Berwarna', 10, 'Arung Jeram', '4/Maret/2014', 'Sungai Lariang', 'Tambal Perahu', '', 32, '13/September/2002', '', ' - / - / -', 'Penguins.jpg', '', '', '', 0, '', '', '2014-11-13 01:58:08'),
('LRG_2014_098', 'Mendayung Pop Mie', 32, 'Digital,Repro / Scan', '3104 x 1746', 'Berwarna', 10, 'Arung Jeram', '18/Desember/2014', 'Sungai Lariang', 'Mendayung menuju jeram', '', 0, ' - / - / - ', '', ' - / - / - ', 'DSC_03927.JPG', '', '', '', 0, '', '', '2014-11-30 05:43:56');

-- --------------------------------------------------------

--
-- Stand-in structure for view `result`
--
CREATE TABLE IF NOT EXISTS `result` (
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `temp`
--
CREATE TABLE IF NOT EXISTS `temp` (
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `viewactivity`
--
CREATE TABLE IF NOT EXISTS `viewactivity` (
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `viewcolor`
--
CREATE TABLE IF NOT EXISTS `viewcolor` (
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `viewformat`
--
CREATE TABLE IF NOT EXISTS `viewformat` (
);
-- --------------------------------------------------------

--
-- Structure for view `a0`
--
DROP TABLE IF EXISTS `a0`;
-- in use(#1356 - View 'mui_photo_library.viewactivity' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `a1`
--
DROP TABLE IF EXISTS `a1`;
-- in use(#1356 - View 'mui_photo_library.viewactivity' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `result`
--
DROP TABLE IF EXISTS `result`;
-- in use(#1356 - View 'mui_photo_library.viewactivity' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `temp`
--
DROP TABLE IF EXISTS `temp`;
-- in use(#1356 - View 'mui_photo_library.viewactivity' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `viewactivity`
--
DROP TABLE IF EXISTS `viewactivity`;
-- in use(#1356 - View 'mui_photo_library.viewactivity' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `viewcolor`
--
DROP TABLE IF EXISTS `viewcolor`;
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
