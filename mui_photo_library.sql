-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Nov 2014 pada 03.43
-- Versi Server: 5.6.16
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
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14102 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(14101, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
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
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('2d9a80df28a9b2052c886319f2afc429', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415840468, ''),
('3e71fbee191f796c84657ef6809dab21', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1415846519, 'a:2:{s:9:"user_data";s:0:"";s:7:"idGuest";s:5:"admin";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `editor`
--

CREATE TABLE IF NOT EXISTS `editor` (
  `id_editor` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `membership` enum('Mapala UI','Non - Mapala UI') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no.M` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_editor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data untuk tabel `editor`
--

INSERT INTO `editor` (`id_editor`, `name`, `membership`, `no.M`) VALUES
(32, 'Admin', 'Mapala UI', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_year` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `end_year` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `category` enum('Panjat','Arung Jeram','Telusur Gua','Selam','Daki Gunung','Paralayang','Layar','BKP','Lainnya') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `name`, `location`, `start_year`, `end_year`, `category`) VALUES
(3, 'Half Marathon 2014', 'UI Depok', '2014', '2014', ''),
(8, 'BKP 2012', 'Jawa Barat-Yogyakarta', '2012', '2012', 'BKP'),
(9, 'Suksesi Mapala UI 2012', 'Pusat Kegiatan Mahasiswa UI', '2012', '2012', 'Lainnya'),
(10, 'Ekspedisi Arung Jeram Sungai Lariang', 'Sungai Lariang, Sulawesi Tengah', '2013', '2014', 'Arung Jeram');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guest_log`
--

CREATE TABLE IF NOT EXISTS `guest_log` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `institution` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `id_owner` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_owner`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `photographer`
--

CREATE TABLE IF NOT EXISTS `photographer` (
  `id_photographer` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `membership` enum('Mapala UI','Non - Mapala UI') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no.M` int(5) NOT NULL,
  PRIMARY KEY (`id_photographer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data untuk tabel `photographer`
--

INSERT INTO `photographer` (`id_photographer`, `name`, `membership`, `no.M`) VALUES
(32, 'Yudhi Yanto', 'Mapala UI', 821),
(33, 'Hizkia Dianne Angela', 'Mapala UI', 778),
(34, 'Satya Winnie Sidabutar', 'Mapala UI', 864);

-- --------------------------------------------------------

--
-- Struktur dari tabel `photo_record`
--

CREATE TABLE IF NOT EXISTS `photo_record` (
  `id_photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_photographer` int(11) NOT NULL,
  `name_photographer` varchar(255) NOT NULL,
  `format` set('Digital','Repro / Scan','Tercetak') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` enum('Berwarna','Hitam Putih','Sephia') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_event` int(11) NOT NULL,
  `name_event` varchar(255) NOT NULL,
  `category` set('Panjat','Arung Jeram','Telusur Gua','Selam','Daki Gunung','Paralayang','Layar','BKP','Lainnya') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
-- Dumping data untuk tabel `photo_record`
--

INSERT INTO `photo_record` (`id_photo`, `title`, `id_photographer`, `name_photographer`, `format`, `size`, `color`, `id_event`, `name_event`, `category`, `taken_date`, `taken_location`, `description`, `notes`, `id_editor`, `name_editor`, `repro_date`, `published_on`, `published_date`, `photo_upload`, `location_HDD_name`, `location_HDD_folder`, `location_sekret_album`, `id_owner`, `name_owner`, `location_notes`, `tag`, `last_update`) VALUES
('FLW_2012_0002', 'Bunga Kuning', 33, 'Hizkia Dianne Angela', 'Tercetak', '1024 x 768', 'Berwarna', 10, 'Ekspedisi Arung Jeram Sungai Lariang', 'Lainnya', '18/Januari/2002', 'Hutan Terlarang', 'Bunga berwarna kuning di tengah hutan', '', 32, 'Admin', ' - / - / -', '', ' - / - / -', 'Tulips.jpg', '', '', '', 0, '-', '', '', '2014-11-13 02:00:54'),
('FLW_2014_00003', 'Bunga Merah', 33, 'Hizkia Dianne Angela', 'Tercetak', '1024 x 768', 'Berwarna', 10, 'Ekspedisi Arung Jeram Sungai Lariang', 'Lainnya', '16/Nopember/2003', 'Taman Nasional Lore Lindu', 'Bunga merah di Taman Nasional Lore Lindu', '', 32, 'Admin', ' - / - / - ', '', ' - / - / - ', 'Chrysanthemum.jpg', '', '', '', 0, '-', '', '', '2014-11-13 02:18:54'),
('HWN_2001_0001', 'Gurun Pasir', 32, 'Yudhi Yanto', '', '1024 x 768', 'Berwarna', 8, 'BKP 2012', 'Lainnya', '15/Januari/2001', 'Gurun Gobi', 'Panasnya Gurun Gobi', '', 0, '-', ' - / - / -', '', ' - / - / -', 'Desert.jpg', '', '', '', 0, '-', '', '', '2014-11-13 01:59:45'),
('HWN_2007_0002', 'Koala Di Pohon', 32, 'Yudhi Yanto', '', '1024 x 768', 'Berwarna', 10, 'Ekspedisi Arung Jeram Sungai Lariang', 'Lainnya', '1/Januari/2017', 'Pohon Mangga', 'Ada Koala', '', 0, '-', ' - / - / - ', '', ' - / - / - ', 'Koala.jpg', '', '', '', 0, '-', '', '', '2014-11-13 02:34:02'),
('HWN_2011_007', 'Ubur-ubur', 32, 'Yudhi Yanto', '', '1024 x 768', 'Berwarna', 10, 'Ekspedisi Arung Jeram Sungai Lariang', 'Selam', '15/Desember/2001', 'Danau Poso', 'Ada ubur-ubur di Danau Poso', '', 0, '-', ' - / - / - ', '', ' - / - / - ', 'Jellyfish.jpg', '', '', '', 0, '-', '', '', '2014-11-13 02:27:36'),
('LRG_2014_001', 'Arung Jeram Sungai Lariang', 34, 'Satya Winnie Sidabutar', 'Digital', '1024 x 768', 'Berwarna', 10, 'Ekspedisi Arung Jeram Sungai Lariang', 'Arung Jeram', '4/Maret/2014', 'Sungai Lariang', 'Tambal Perahu', '', 32, 'Admin', '13/September/2002', '', ' - / - / -', 'Penguins.jpg', '', '', '', 0, '-', '', '', '2014-11-13 01:58:08'),
('RMH_2000_0002', 'Rumah Hantu', 32, 'Yudhi Yanto', '', '1024 x 768', 'Berwarna', 9, 'Suksesi Mapala UI 2012', 'Lainnya', '16/Januari/2006', 'Jakarta', 'Ada rumah hantu di Jakarta', '', 0, '-', ' - / - / - ', '', ' - / - / - ', 'Lighthouse.jpg', '', '', '', 0, '-', '', '', '2014-11-13 02:42:53');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewactivity`
--
CREATE TABLE IF NOT EXISTS `viewactivity` (
`id_photo` varchar(255)
,`title` varchar(255)
,`id_photographer` int(11)
,`name_photographer` varchar(255)
,`format` set('Digital','Repro / Scan','Tercetak')
,`size` varchar(255)
,`color` enum('Berwarna','Hitam Putih','Sephia')
,`id_event` int(11)
,`name_event` varchar(255)
,`category` set('Panjat','Arung Jeram','Telusur Gua','Selam','Daki Gunung','Paralayang','Layar','BKP','Lainnya')
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
,`format` set('Digital','Repro / Scan','Tercetak')
,`size` varchar(255)
,`color` enum('Berwarna','Hitam Putih','Sephia')
,`id_event` int(11)
,`name_event` varchar(255)
,`category` set('Panjat','Arung Jeram','Telusur Gua','Selam','Daki Gunung','Paralayang','Layar','BKP','Lainnya')
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
-- Struktur untuk view `viewactivity`
--
DROP TABLE IF EXISTS `viewactivity`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewactivity` AS select `photo_record`.`id_photo` AS `id_photo`,`photo_record`.`title` AS `title`,`photo_record`.`id_photographer` AS `id_photographer`,`photo_record`.`name_photographer` AS `name_photographer`,`photo_record`.`format` AS `format`,`photo_record`.`size` AS `size`,`photo_record`.`color` AS `color`,`photo_record`.`id_event` AS `id_event`,`photo_record`.`name_event` AS `name_event`,`photo_record`.`category` AS `category`,`photo_record`.`taken_date` AS `taken_date`,`photo_record`.`taken_location` AS `taken_location`,`photo_record`.`description` AS `description`,`photo_record`.`notes` AS `notes`,`photo_record`.`id_editor` AS `id_editor`,`photo_record`.`name_editor` AS `name_editor`,`photo_record`.`repro_date` AS `repro_date`,`photo_record`.`published_on` AS `published_on`,`photo_record`.`published_date` AS `published_date`,`photo_record`.`photo_upload` AS `photo_upload`,`photo_record`.`location_HDD_name` AS `location_HDD_name`,`photo_record`.`location_HDD_folder` AS `location_HDD_folder`,`photo_record`.`location_sekret_album` AS `location_sekret_album`,`photo_record`.`id_owner` AS `id_owner`,`photo_record`.`name_owner` AS `name_owner`,`photo_record`.`location_notes` AS `location_notes`,`photo_record`.`tag` AS `tag`,`photo_record`.`last_update` AS `last_update` from `photo_record`;

-- --------------------------------------------------------

--
-- Struktur untuk view `viewformat`
--
DROP TABLE IF EXISTS `viewformat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewformat` AS select `viewactivity`.`id_photo` AS `id_photo`,`viewactivity`.`title` AS `title`,`viewactivity`.`id_photographer` AS `id_photographer`,`viewactivity`.`name_photographer` AS `name_photographer`,`viewactivity`.`format` AS `format`,`viewactivity`.`size` AS `size`,`viewactivity`.`color` AS `color`,`viewactivity`.`id_event` AS `id_event`,`viewactivity`.`name_event` AS `name_event`,`viewactivity`.`category` AS `category`,`viewactivity`.`taken_date` AS `taken_date`,`viewactivity`.`taken_location` AS `taken_location`,`viewactivity`.`description` AS `description`,`viewactivity`.`notes` AS `notes`,`viewactivity`.`id_editor` AS `id_editor`,`viewactivity`.`name_editor` AS `name_editor`,`viewactivity`.`repro_date` AS `repro_date`,`viewactivity`.`published_on` AS `published_on`,`viewactivity`.`published_date` AS `published_date`,`viewactivity`.`photo_upload` AS `photo_upload`,`viewactivity`.`location_HDD_name` AS `location_HDD_name`,`viewactivity`.`location_HDD_folder` AS `location_HDD_folder`,`viewactivity`.`location_sekret_album` AS `location_sekret_album`,`viewactivity`.`id_owner` AS `id_owner`,`viewactivity`.`name_owner` AS `name_owner`,`viewactivity`.`location_notes` AS `location_notes`,`viewactivity`.`tag` AS `tag`,`viewactivity`.`last_update` AS `last_update` from `viewactivity`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
