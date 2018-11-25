-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 12:43 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinikanak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(255) NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `username`, `password`) VALUES
(1, 'Admin Chopra', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` varchar(255) NOT NULL,
  `kode_reservasi` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  `waktu_ambilantrian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `apoteker`
--

CREATE TABLE `apoteker` (
  `id_apoteker` int(255) NOT NULL,
  `nama_apoteker` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nip` int(255) NOT NULL,
  `no_hp` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `daftar` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apoteker`
--

INSERT INTO `apoteker` (`id_apoteker`, `nama_apoteker`, `tgl_lahir`, `nip`, `no_hp`, `email`, `alamat`, `gender`, `username`, `password`, `daftar`) VALUES
(1, 'Yuliani Tri', '1981-11-06', 35467765, 9876541, 'yuliani@gmail.com', 'Yogyakarta', 'Female', 'yuliani', '50f1ded93f45107bc4f946049eb07b37', '2018-11-25 10:17:06'),
(2, 'Yani', '1990-11-01', 135754, 543, 'yani@gmail.com', 'Bandung', 'Female', 'yani', 'd41d8cd98f00b204e9800998ecf8427e', '2018-11-23 23:06:39'),
(3, 'Yuli', '1989-11-01', 6543, 78654, 'yuli@gmail.com', 'Nganjuk', 'Female', 'Yuli', 'd41d8cd98f00b204e9800998ecf8427e', '2018-11-23 23:09:08'),
(6, 'Yayuk', '1900-11-01', 75789, 976, 'yayuk@gmail.com', 'Bandung', 'Female', 'yayuk2', 'bf56e3574f961a3b4dae55b1418eb5b9', '2018-11-25 10:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(255) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `nip` int(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` int(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `daftar` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `nip`, `tgl_lahir`, `no_hp`, `email`, `alamat`, `gender`, `username`, `password`, `daftar`) VALUES
(1, 'Sinta Tantular Maharaja', 12345678, '1980-11-01', 98765431, 'sinta@gmail.com', 'Yogyakarta', 'Female', 'sinta2', '08ca451b5ef1a7c86763d31e7711a522', '2018-11-25 10:14:00'),
(5, 'Dadat Manila', 9875, '1980-11-01', 468976, 'dadat@gmail.com', 'Yogyakarta', 'Male', 'dadat', '0f6e2d24c06a69acf0a68c3ece783ac0', '2018-11-25 12:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(255) NOT NULL,
  `no_antri` int(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `no_antri`, `waktu`, `status`) VALUES
(12, 1, '08.00-08.15 WIB', 0),
(13, 2, '08.15-08.30 WIB', 0),
(14, 3, '08.30-08.45 WIB', 0);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(255) NOT NULL,
  `nama_obat` varchar(25) NOT NULL,
  `jumlah` int(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jumlah`, `status`) VALUES
(1, 'ABBOCATH 18', 50, 'Tersedia'),
(2, 'ACETON 60ML', 56, ''),
(3, 'ADEM SARI @24', 78, ''),
(4, 'ALKOHOL 70% 100 ML AFI', 100, ''),
(5, 'AMINOPHYLLIN 200MG @1000', 45, ''),
(6, 'ANASTAN TAB', 45, ''),
(7, 'BATUGIN 300 ML', 67, ''),
(8, 'BENZOLAC CR 5% 5GR', 122, '');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(255) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Female','Male') NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `no_hp` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `status_registrasi` tinyint(1) NOT NULL,
  `tgl_registrasi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tgl_lahir`, `jk`, `nama_ibu`, `no_hp`, `email`, `alamat`, `username`, `password`, `kk`, `status_registrasi`, `tgl_registrasi`) VALUES
(1, 'dadi', '2018-11-01', 'Male', 'dadu', 965, 'dadu@gmail.com', 'yk', 'dadi', '50f1ded93f45107bc4f946049eb07b37', '', 0, '2018-11-23 21:57:22'),
(56, 'Haha', '2018-11-01', 'Male', 'hihi', 543, 'hihi@gmail.com', 'yk', 'haha', '4e4d6c332b6fe62a63afe56171fd3725', '', 0, '2018-11-23 20:48:05'),
(67, 'y', '2018-11-06', 'Female', 'y', 765, 'y@gmail.com', 'yk', 'yyy', 'f0a4058fd33489695d53df156b77c724', '', 0, '2018-11-23 20:36:21'),
(4323, 'ani', '2018-11-07', 'Female', 'ana', 987, 'ana@gmail.com', 'yk', 'ani', '29d1e2357d7c14db51e885053a58ec67', '', 0, '2018-11-23 20:29:39'),
(5432, 'kumala', '2018-10-31', 'Female', 'sari', 96543, 'sari@gmail.com', 'Malang', 'kumala1', 'd59e91ac55e85ee959ce36407306ed0b', '', 0, '2018-11-25 10:44:05'),
(12345, 'Susi', '2018-11-01', 'Female', 'Sari', 987654, 'sari@gmail.com', 'Surabaya', 'susi', '536931d80decb18c33db9612bdd004d4', '', 0, '2018-11-23 20:12:37'),
(65432, 'nini', '2018-11-02', 'Female', 'nunu', 987532, 'nunu@gmail.com', 'yk', 'nini', 'db5cee64d8879581f189d71178dcb055', '', 0, '2018-11-23 20:32:54'),
(75465, 'Kaka', '2018-11-15', 'Male', 'lala', 987676, 'lala@gmail.com', 'Yk', 'kaka', '5541c7b5a06c39b267a5efae6628e003', '', 0, '2018-11-23 20:25:43'),
(347890, 'Bagus', '2018-10-31', 'Male', 'Rini', 953, 'rini@gmail.com', 'Nganjuk', 'bagus', '17b38fc02f', '0', 1, '2018-11-13 19:07:26'),
(566677, 'Nando Surya', '2018-11-15', 'Female', 'Leli', 644678, 'leli@gmail.com', 'YK', 'nando', '45a9a31e5f1ff59621b681a5edbffe85', '', 0, '2018-11-25 10:43:48'),
(767564, 'Akbar', '2018-10-31', 'Male', 'Kala', 87657, 'kala@gmai.com', 'Yk', 'akbar', '4f033a0a2bf2fe0b68800a3079545cd1', '', 0, '2018-11-23 20:39:56'),
(876757, 'Tata', '2018-11-07', 'Female', 'Titi', 765643, 'titi@gmail.com', 'Malang', 'tata', '49d02d55ad10973b7b9d0dc9eba7fdf0', '', 0, '2018-11-23 21:12:09'),
(6566777, 'Citra', '2018-11-06', 'Female', 'Nani', 985678, 'nani@gmail.com', 'Surabaya', 'citra', 'e260eab6a7', '0', 0, '2018-11-20 10:03:11'),
(55555654, 'Lala', '2018-11-01', 'Female', 'lili', 9754, 'lili@gmail.com', 'Yk', 'lala', '2e3817293fc275dbee74bd71ce6eb056', '', 0, '2018-11-23 20:21:09'),
(356774325, 'Pasi', '2016-11-01', 'Female', 'Roro', 857310, 'roro@gmail.com', 'Yogyakarta', 'pasi', '0363afa9861a8cb70300fcacb47381fa', '0', 1, '2018-11-24 22:36:59'),
(1234567890, 'Ahmad', '2011-02-16', 'Female', 'Siti', 7654321, 'ahmad@gmail.com', 'Yogyakarta', 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12', '0', 0, '2018-11-23 19:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `periksa`
--

CREATE TABLE `periksa` (
  `id_periksa` int(255) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `obat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(255) NOT NULL,
  `id_antrian` varchar(255) NOT NULL,
  `id_jadwal` int(255) NOT NULL,
  `id_pasien` int(255) NOT NULL,
  `id_dokter` int(255) NOT NULL,
  `id_apoteker` int(255) NOT NULL,
  `id_obat` int(255) NOT NULL,
  `id_periksa` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `apoteker`
--
ALTER TABLE `apoteker`
  ADD PRIMARY KEY (`id_apoteker`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id_periksa`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_pasien` (`id_pasien`),
  ADD UNIQUE KEY `id_apoteker` (`id_apoteker`),
  ADD UNIQUE KEY `id_obat` (`id_obat`),
  ADD KEY `id_antrian` (`id_antrian`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_periksa` (`id_periksa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apoteker`
--
ALTER TABLE `apoteker`
  MODIFY `id_apoteker` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id_periksa` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_apoteker`) REFERENCES `apoteker` (`id_apoteker`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `transaksi_ibfk_5` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `transaksi_ibfk_6` FOREIGN KEY (`id_antrian`) REFERENCES `antrian` (`id_antrian`),
  ADD CONSTRAINT `transaksi_ibfk_7` FOREIGN KEY (`id_periksa`) REFERENCES `periksa` (`id_periksa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
