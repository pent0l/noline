-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2022 at 11:30 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jns_kel` enum('P','L') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` enum('aggota','admin') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `username`, `password`, `jns_kel`, `tgl_lahir`, `email`, `status`) VALUES
(3, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'L', '2012-01-01', 'kikihaerani@gmail,com', 'admin'),
(4, 'kiki haerani', 'coki', 'cokicoki', 'P', '2011-08-23', 'kikihaerani@gmail,com', 'aggota');

-- --------------------------------------------------------

--
-- Table structure for table `baca`
--

DROP TABLE IF EXISTS `baca`;
CREATE TABLE IF NOT EXISTS `baca` (
  `id_baca` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `tgl_baca` datetime NOT NULL,
  PRIMARY KEY (`id_baca`),
  KEY `id` (`id`),
  KEY `id_buku` (`id_buku`),
  KEY `id_comment` (`id_comment`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `nama_buku` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tgl_rilis` date NOT NULL,
  `id_genre` int(11) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  PRIMARY KEY (`id_buku`),
  KEY `id_genre` (`id_genre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `comment` text NOT NULL,
  `tgl_comment` datetime NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id` (`id`),
  KEY `id_buku` (`id_buku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_genre` varchar(30) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perpus`
--

DROP TABLE IF EXISTS `perpus`;
CREATE TABLE IF NOT EXISTS `perpus` (
  `id_perpus` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  PRIMARY KEY (`id_perpus`),
  KEY `id_buku` (`id_buku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
