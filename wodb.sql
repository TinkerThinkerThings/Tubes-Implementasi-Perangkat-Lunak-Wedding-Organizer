-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 12:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` varchar(5) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Nama_Admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `IdPaket` int(5) NOT NULL,
  `nama_kendaraan` varchar(50) NOT NULL,
  `jumlah_kendaraan` int(5) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `jumlah_pengunjung` int(5) NOT NULL,
  `jumlah_mc` int(5) NOT NULL,
  `nama_hiburan` varchar(50) NOT NULL,
  `nama_dekorasi` varchar(50) NOT NULL,
  `nama_makeup` varchar(50) NOT NULL,
  `namapaket` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `keterangan` enum('indoor','outdoor') NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `gambar3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`IdPaket`, `nama_kendaraan`, `jumlah_kendaraan`, `tempat`, `jumlah_pengunjung`, `jumlah_mc`, `nama_hiburan`, `nama_dekorasi`, `nama_makeup`, `namapaket`, `deskripsi`, `harga`, `keterangan`, `gambar`, `gambar2`, `gambar3`) VALUES
(1, 'Limosin', 1, 'Lembang', 500, 2, 'Ustad Adi Hidayat', 'Creative Wedding', 'Wardah', 'Paket 1', 'panjangggggggggggggggggggggggggggggggggggggggggggg', 15000000, 'indoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/paket2.jpg', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/paket1.jpg', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/paket2.jpg'),
(2, 'Ankot', 1, 'Alun Alun CImahi', 20, 1, 'Badut', 'Decorative Desain', 'Wardah', 'Paket 2', 'panjangggggggggggggggggggggggggggggggggggggggggggg', 500000, 'outdoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/paket1.jpg', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/paket1.jpg', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/paket2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `ID_Pelanggan` varchar(5) NOT NULL,
  `Nama_Pelanggan` varchar(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `No_telepon` int(14) NOT NULL,
  `Role` enum('Admin','Pelanggan','Owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`ID_Pelanggan`, `Nama_Pelanggan`, `Alamat`, `Jenis_Kelamin`, `Email`, `No_telepon`, `Role`) VALUES
('1', 'Acep', 'Sumedang', 'Laki-laki', 'acep@gmail.com', 34454, 'Admin'),
('2', 'Deri', 'Sumedang', 'Laki-laki', 'acep@gmail.com', 34454, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `penyewaan`
--

CREATE TABLE `penyewaan` (
  `Nama_Pelanggan` varchar(30) NOT NULL,
  `ID_Sewa` int(5) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Pembayaran` varchar(30) NOT NULL,
  `harga` int(50) NOT NULL,
  `IdPaket` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyewaan`
--

INSERT INTO `penyewaan` (`Nama_Pelanggan`, `ID_Sewa`, `Alamat`, `Pembayaran`, `harga`, `IdPaket`) VALUES
('Acep', 5, 'fgsdfsdf', 'Tunai', 15000000, 1),
('Deri', 6, 'Bandung', 'Tunai', 15000000, 1),
('Deri', 7, 'Bandung', 'Tunai', 15000000, 1),
('Deri', 8, 'Bandung', 'Tunai', 15000000, 1),
('Deri', 9, 'Bandung', 'Tunai', 15000000, 1),
('Deri', 10, 'Bandung', 'Tunai', 15000000, 1),
('deri', 13, 'bandung', 'Tunai', 15000000, 1),
('deri', 14, 'bandung', 'Tunai', 15000000, 1),
('deri', 15, 'bandung', 'Tunai', 15000000, 1),
('deri', 16, 'bandung', 'Tunai', 15000000, 1),
('deri', 17, 'bandung', 'Tunai', 15000000, 1),
('deri', 18, 'bandung', 'Tunai', 15000000, 1),
('deri', 19, 'bandung', 'Tunai', 15000000, 1),
('deri', 20, 'bandung', 'Tunai', 15000000, 1),
('deri', 21, 'bandung', 'Tunai', 15000000, 1),
('deri', 22, 'cimahi', 'Tunai', 15000000, 1),
('deri', 23, 'dd', 'Tunai', 15000000, 1),
('deri', 24, 'bandung', 'Tunai', 15000000, 1),
('deri', 25, 'bandung', 'Tunai', 500000, 2),
('deri', 26, 'bandung', 'Tunai', 500000, 2),
('deri', 27, 'bandung', 'Tunai', 15000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `ID_Registrasi` varchar(5) NOT NULL,
  `ID_Pelanggan` varchar(5) NOT NULL,
  `Nama_Pelanggan` varchar(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `No_Telepon` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(5) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Jenis_Kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `Email` varchar(30) NOT NULL,
  `No_Hp` varchar(13) NOT NULL,
  `Role` enum('Admin','Pelanggan','Owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Nama`, `Alamat`, `Password`, `Jenis_Kelamin`, `Email`, `No_Hp`, `Role`) VALUES
(1, 'Deri', 'Bandung', '12345', 'Laki-Laki', 'meru@gmail.com', '081234567891', 'Pelanggan'),
(2, 'Asep', 'Cibaduyut', '12345', 'Laki-Laki', 'rara@gmail.com', '081233546781', 'Admin'),
(3, 'Deri', 'Cidahu', 'ganteng', 'Laki-Laki', 'mana@gmail.com', '081230001124', 'Owner'),
(4, 'der', 'Cimahi', '$2y$10$ukQSThFAzHxyvdRZx4tB1O3', '', 'asdsc@gmail.com', '081293984743', 'Pelanggan'),
(5, 'despacito', 'Chj', '$2y$10$pdZKzWsWgt61CYpqG.1KAee', '', 'des@gmail.com', '081293985555', 'Pelanggan'),
(6, 'rere', 'Flamingo', '$2y$10$UQKjtypdCuS.YtgBBzafuuZ', 'Perempuan', 'rere@gmail.com', '081293984743', 'Pelanggan'),
(7, 'der', 'cimahi', '$2y$10$VIvlRb5UBNuQ8OagO3Ymbeh', 'Laki-Laki', 'dee@gmail.com', '081293984743', 'Pelanggan'),
(8, 'derians', 'cimahi', '$2y$10$CqXPtG1wlmjsfo97kGE.C.b', 'Laki-Laki', 'deep@gmail.com', '081293984743', 'Pelanggan'),
(9, 'desi', 'chj', '222', 'Perempuan', 'desi@gmail.com', '081293984743', 'Pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`IdPaket`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`ID_Pelanggan`),
  ADD UNIQUE KEY `Nama_Pelanggan` (`Nama_Pelanggan`);

--
-- Indexes for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`ID_Sewa`),
  ADD KEY `Nama_Pelanggan` (`Nama_Pelanggan`),
  ADD KEY `IdPaket` (`IdPaket`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`ID_Registrasi`),
  ADD KEY `Nama_Pelanggan` (`Nama_Pelanggan`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `ID_Sewa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD CONSTRAINT `penyewaan_ibfk_2` FOREIGN KEY (`Nama_Pelanggan`) REFERENCES `pelanggan` (`Nama_Pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyewaan_ibfk_3` FOREIGN KEY (`IdPaket`) REFERENCES `paket` (`IdPaket`) ON DELETE CASCADE;

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `registrasi_ibfk_1` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `pelanggan` (`ID_Pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
