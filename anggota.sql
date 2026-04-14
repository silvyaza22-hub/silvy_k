-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2026 at 10:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_anggota`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nomor_anggota` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nomor_anggota`, `nama`, `alamat`, `telepon`, `email`, `tanggal_daftar`, `status`) VALUES
(1, 'radii', 'tangerang', '08765', 'radi@gmail.com', '2026-04-14', 1),
(2, 'silvy', 'tangerang', '09867', 'silvy@gmail.com', '2026-04-13', 1),
(3, 'ta', 'jkt', '0657', 'ta@gmail.com', '2026-04-07', 1),
(4, 'ratu', 'jkt', '09888', 'ra@gmail.com', '2026-04-15', 1),
(5, 'ayu', 'cirebon', '09888', 'ra@gmail.com', '2026-04-15', 1),
(6, 'muhamad', 'jakarta', '09888', 'ra@gmail.com', '2026-04-15', 1),
(7, 'rara', 'bandung', '08976', 'rara@gmail.com', '2026-04-25', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nomor_anggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
