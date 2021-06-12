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
-- Database: `pelanggan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_pelanggan`
--

CREATE TABLE `jumlah_pelanggan` (
  `tanggal` date NOT NULL,
  `pelanggan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumlah_pelanggan`
--

INSERT INTO `jumlah_pelanggan` (`tanggal`, `pelanggan`) VALUES
('2021-06-02', 4),
('2021-06-02', 50),
('2021-05-28', 25),
('2021-05-26', 10),
('2021-06-03', 2),
('2021-06-03', 12),
('2021-06-10', 5);

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`id`, `nama`, `email`, `no_telp`, `isi`) VALUES
(2, 'Laura Georgia', 'LauraG@yahoo.com', '08948564262', 'Web yang sangat bagus dan mempunyai fungsi yang banyak, mohon untuk membalas pesan ini karena ada beberapa hal yang ingin saya bicarakan. '),
(3, 'Abrahan Mulya', 'abrahamM@mail.com', '08954526484', 'Penggunaan web yang sangat luar biasa, mohon kontak kami karena ada beberapa hal yang ingin dibicarakan'),
(4, 'Steven Kurniawan', 'steven4@gmail.com', '08965846546', 'Web yang sangat bermanfaat, mohon kontak saya karena ada beberapa hal yang ingin dibicarakan bersama.');

-- --------------------------------------------------------

--
-- Table structure for table `pending_services`
--

CREATE TABLE `pending_services` (
  `no_tiket` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat_pelanggan` varchar(500) NOT NULL,
  `email_pelanggan` varchar(255) NOT NULL,
  `jenis_services` varchar(255) NOT NULL,
  `tipe_motor` varchar(50) NOT NULL,
  `tanggal_pesanan` datetime NOT NULL,
  `status_pembayaran` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_services`
--

INSERT INTO `pending_services` (`no_tiket`, `nama_pelanggan`, `no_telp`, `alamat_pelanggan`, `email_pelanggan`, `jenis_services`, `tipe_motor`, `tanggal_pesanan`, `status_pembayaran`) VALUES
('BKL001', 'Joseph', '089123456757', 'Tambun', 'joseph@mail.com', 'Service Sedang', 'CB 150R', '2021-06-11 14:00:00', 0),
('BKL002', 'Braham', '081254897645', 'Kranji', 'braham@mail.com', 'Service Berat', 'Vario Honda', '2021-06-30 21:00:00', 1),
('BKL004', 'Brodi', '0842649854524', 'Pasar Kranji', 'brodi@mail.com', 'Service Sedang', 'Vario Honda', '2021-06-18 15:00:00', 0),
('BKL005', 'Jason', '0812457896', 'Kranji', 'jason@mail.com', 'Service Sedang', 'Nmax', '2021-06-16 10:00:00', 1),
('BKL006', 'Brandon', '089612457836', 'Bulak Kapal', 'brandon@mail.com', 'Service Berat', 'Aerox', '2021-06-12 12:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_services`
--
ALTER TABLE `pending_services`
  ADD PRIMARY KEY (`no_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
