-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 04:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_keuanagan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cicilan`
--

CREATE TABLE `cicilan` (
  `id_cicilan` varchar(255) DEFAULT NULL,
  `id_pinjaman` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `id_nasabah` int(11) NOT NULL,
  `nama_nasabah` varchar(255) NOT NULL,
  `pekerjaan_nasabah` varchar(255) NOT NULL,
  `alamat_nasabah` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`id_nasabah`, `nama_nasabah`, `pekerjaan_nasabah`, `alamat_nasabah`, `telepon`) VALUES
(9, 'Adrian', 'Hadinata Hadi', 'Klaten', '085802520642');

-- --------------------------------------------------------

--
-- Table structure for table `pelunasan`
--

CREATE TABLE `pelunasan` (
  `id_pelunasan` int(11) NOT NULL,
  `nama_nasabah` varchar(255) NOT NULL,
  `jumlah_pinjaman` varchar(255) NOT NULL,
  `tanggal_pelunasan` date NOT NULL,
  `id_pinjaman` varchar(255) DEFAULT NULL,
  `cicilan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelunasan`
--

INSERT INTO `pelunasan` (`id_pelunasan`, `nama_nasabah`, `jumlah_pinjaman`, `tanggal_pelunasan`, `id_pinjaman`, `cicilan`) VALUES
(7, 'Nirma', '1500000', '2023-02-03', '4', '10000'),
(8, 'Adrian', '1000000', '2023-02-03', '7', '60000'),
(9, 'Nirma', '1500000', '2023-02-03', '4', '20000'),
(11, 'Nirma', '2000000', '2023-02-03', '5', '50000'),
(12, 'Nirma', '1500000', '2023-02-04', '4', '50000'),
(13, 'Nirma', '1500000', '2023-02-04', '4', '100000'),
(14, 'Nirma', '1500000', '2023-02-04', '4', '10000'),
(15, 'Nirma', '1500000', '2023-02-04', '4', '10000'),
(16, 'Adrian', '1000000', '2023-02-03', '11', '50000'),
(17, 'Adrian', '1000000', '2023-02-04', '11', '60000');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2023-01-19 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `email`, `photo`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(1, 'irza', '$2y$10$j3UadJGKV37LWqorZYNU7ONJadhtkBQZPyXtfvJje6nenEPptU6A6', 'irzafebrianto990@gmail.com', 'http://localhost/keuangan/uploads/files/z65xdb3tuiyokq2.jpg', 'a29f4b50f0b39754f02f1fc8c2fcbfc9', NULL, '2023-01-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `nama_nasabah` varchar(255) NOT NULL,
  `jumlah_pinjaman` varchar(255) NOT NULL,
  `tanggal_pinjaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `nama_nasabah`, `jumlah_pinjaman`, `tanggal_pinjaman`) VALUES
(11, 'Adrian', '1000000', '2023-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `id_tabungn` int(11) NOT NULL,
  `nama_nasabah` varchar(255) NOT NULL,
  `jumlah_pinjaman` varchar(255) NOT NULL,
  `tabungan_masuk` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`id_nasabah`);

--
-- Indexes for table `pelunasan`
--
ALTER TABLE `pelunasan`
  ADD PRIMARY KEY (`id_pelunasan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id_tabungn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `id_nasabah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pelunasan`
--
ALTER TABLE `pelunasan`
  MODIFY `id_pelunasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `id_tabungn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
