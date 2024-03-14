-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 04:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ninja_adventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(100) NOT NULL,
  `username1` varchar(100) NOT NULL,
  `passwot` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `username1`, `passwot`, `nama`, `nohp`, `alamat`) VALUES
(0, 'JJ', 'JJ', 'JJ', 'JJ', 'JJ');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbr` varchar(33) NOT NULL,
  `namabr` varchar(50) NOT NULL,
  `harga` varchar(33) NOT NULL,
  `lastused` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` varchar(33) NOT NULL,
  `username` varchar(33) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(33) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `username`, `nama`, `password`, `nohp`, `alamat`) VALUES
('xxxxxxxxxxx01', 'xxxxxxxxxxx01', 'Joko', 'x01', '081xxxxxxx35', 'xxxxxxx, xxxxxxxxx, xxxxxxxxxx, DIY'),
('xxxxxxxxxxx01', 'xxxxxxxxxxx01', 'Joko', 'x01', '081xxxxxxx35', 'xxxxxxx, xxxxxxxxx, xxxxxxxxxx, DIY');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
