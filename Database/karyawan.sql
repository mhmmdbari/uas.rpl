-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 09:22 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`nama`, `email`, `tanggal`, `jam`) VALUES
('Muhammad Bari Abdul Majid', 'bari@mail.com', '2021-06-10', '21:41:06'),
('Muhammad Rafi Nahjan', 'nahjan@mail.com', '2021-06-10', '21:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `kd_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `bagian` varchar(20) NOT NULL,
  `alamat_karyawan` varchar(30) NOT NULL,
  `ttl_karyawan` date NOT NULL,
  `umur` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`kd_karyawan`, `nama_karyawan`, `bagian`, `alamat_karyawan`, `ttl_karyawan`, `umur`) VALUES
('ABC123', 'Muhammad Rafi Nahjan', 'Montir', 'Pasar Kranji', '2001-06-20', 19),
('ABC124', 'Muhammad Bari', 'Administrasi', 'Bekasi Timur Regensi', '2001-04-13', 19);

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `nama_karyawan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`nama_karyawan`, `tanggal`, `jam`) VALUES
('Muhammad Bari Abdul Majid', '2021-06-10', '21:41:06'),
('Muhammad Rafi Nahjan', '2021-06-10', '21:42:51'),
('Muhammad Bari Abdul Majid', '2021-06-09', '21:39:06'),
('Muhammad Bari Abdul Majid', '2021-06-08', '21:39:06'),
('Muhammad Bari Abdul Majid', '2021-06-07', '21:39:06'),
('Muhammad Bari Abdul Majid', '2021-06-06', '21:39:06'),
('Muhammad Bari Abdul Majid', '2021-06-04', '21:39:06'),
('Muhammad Rafi Nahjan', '2021-06-09', '21:39:06'),
('Muhammad Rafi Nahjan', '2021-06-08', '21:39:06'),
('Muhammad Rafi Nahjan', '2021-06-07', '21:39:06'),
('Muhammad Rafi Nahjan', '2021-06-02', '21:39:06'),
('Muhammad Rafi Nahjan', '2021-06-01', '21:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `penghasilanharian`
--

CREATE TABLE `penghasilanharian` (
  `tanggal` date NOT NULL,
  `penghasilan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penghasilanharian`
--

INSERT INTO `penghasilanharian` (`tanggal`, `penghasilan`) VALUES
('2021-05-24', '600000'),
('2021-05-01', '300000'),
('2021-05-02', '400000'),
('2021-04-30', '400000'),
('2021-04-29', '350000'),
('2021-05-24', '250000'),
('2021-05-25', '350000'),
('2021-06-02', '50000'),
('2021-06-03', '50000'),
('2021-06-03', '250000'),
('2021-06-04', '250000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `email`) VALUES
('mhmmdbari', '123', 'Muhammad Bari Abdul Majid', 'bari@mail.com'),
('nahjan', '123', 'Muhammad Rafi Nahjan', 'nahjan@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`kd_karyawan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `Hapus Absen` ON SCHEDULE EVERY 1 SECOND STARTS '2021-05-14 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM absen WHERE tanggal < CURRENT_DATE$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
