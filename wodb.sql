-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 04:51 PM
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
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`IdPaket`, `nama_kendaraan`, `jumlah_kendaraan`, `tempat`, `jumlah_pengunjung`, `jumlah_mc`, `nama_hiburan`, `nama_dekorasi`, `nama_makeup`, `namapaket`, `deskripsi`, `harga`, `keterangan`, `gambar`) VALUES
(2, 'Angkot', 1, 'Alun Alun Cimahi', 20, 1, 'Badut', 'Decorative Desain', 'Wardah', 'Paket 2', 'Mengusung Konsep Sederhana dan Cinta Lokal', 500000, 'indoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/paket1.jpg'),
(3, 'Alphard', 1, 'Cisarua', 1000, 2, 'Kuvaku Band', 'Decorative Desain', 'Marleen Hariman', 'Paket 3', 'Paket Dengan Konsep Budaya Alami Dari Jepang', 200000000, 'indoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/paket1.jpg'),
(5, 'Alphard', 2, 'Pangandaran', 1000, 2, 'Ustad Adi Hidayat', 'Decorative Desain', 'Marleen Hariman', 'Paket 5', 'Mengusung Konsep Keindahan Alam dan Iman', 65000000, 'outdoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/paket2.jpg'),
(6, 'Porche', 2, 'Lombok', 2500, 2, 'Raisa dan Rizky Febian', 'Decorative Desain', 'Madame', 'Paket 6', 'Konsep Megah Dan Elegant Dengan Hiburan Menarik', 100000000, 'outdoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/paket2.jpg'),
(11, 'Hino Dutro', 10, 'CIlacap', 10, 100, 'Barongsai', 'Dekorku', 'Citrasari Makeup', 'Paket 7', 'Paket Mewah Dengan Nuansa Hino Dutro', 750000000, 'indoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/gb8.jpg'),
(12, 'Optimus Prime', 1, 'Autobots', 5, 0, 'Decepticons', 'Transformer Decoration', 'Bumblebee Makeup', 'Paket 8', 'Mengusung Konsep Autobots vs Decepticons', 2147483647, 'outdoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/gb42.jpg'),
(13, 'Limosin', 2, 'Las Vegas', 45000, 5, 'Taylor Swift x Bruno Mars', 'Silk Sonic', 'Indonesian Wardrobe', 'Paket 1', 'Paket Signature Mengusung Kemewahan Tak Terhingga', 2147483647, 'indoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/paket2o62.JPG'),
(14, 'Tank', 1, 'Canbera', 5000, 5, 'Anies', 'CreativeDecoration', 'Wardah', 'Paket 4', 'Mengusung Tema Semi-Politik Indonesia', 2147483647, 'outdoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/gb62.jpg'),
(15, 'Monster Truck', 7, 'Gelora Bung Karno', 100000, 3, 'Bring Me The Horizon', 'DeadMetal Decoration', 'IaMmEtAL', 'Paket 9', 'Tema Paket Bernuansa Metal Dengan Tamu Metal Keren', 2147483647, 'outdoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/gb712.jpg'),
(18, 'Kuda', 2, 'Bali', 1000, 1, 'Saxophone', 'Monokrom', 'DeepShine', 'Paket 10', 'Paket Dengan Konsep Internal Yang Siap Untuk Kamu', 67500000, 'outdoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/Untitled6.jpg'),
(19, 'Kuda', 2, 'Bali', 1000, 1, 'Saxophone', 'Monokrom', 'DeepShine', 'Paket 11', 'Paket Dengan Konsep Intimate Yang Siap Untuk Kamu', 67500000, 'indoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/gb32.jpg'),
(20, 'Kuda', 2, 'Bali', 1000, 1, 'Saxophone', 'Monokrom', 'DeepShine', 'Paket 12', 'Paket Dengan Konsep Indoor Yang Menarik dan Nyaman', 67500000, 'indoor', 'http://localhost/Tubes-Implementasi-Perangkat-Lunak-Wedding-Organizer/asset/photo/bg2.jpg');

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
  `IdPaket` int(5) NOT NULL,
  `status` enum('diproses','diterima','ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyewaan`
--

INSERT INTO `penyewaan` (`Nama_Pelanggan`, `ID_Sewa`, `Alamat`, `Pembayaran`, `harga`, `IdPaket`, `status`) VALUES
('King', 49, 'Jakarta', 'Tunai', 65000000, 5, 'diproses'),
('Radit', 50, 'Semarang', 'Bank', 750000000, 11, 'diproses'),
('Liliya', 51, 'Boston', 'E-Wallet', 2147483647, 12, 'diterima'),
('Amin', 52, 'Subang', 'E-Wallet', 750000000, 11, 'diproses');

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
(1, 'Deri', 'Bandung', 'pw_pelanggan', 'Laki-Laki', 'meru@gmail.com', '081234567891', 'Pelanggan'),
(2, 'Des', 'Cibaduyut', 'pw_admin', 'Laki-Laki', 'rara@gmail.com', '081233546781', 'Admin'),
(10, 'Ridwan', 'Bandung', 'hambaallah', 'Laki-Laki', 'des@gmail.com', '088866553322', 'Pelanggan'),
(11, 'Nana', 'Jakarta', 'nana_pelanggan', 'Perempuan', 'nana@gmail.com', '089577668322', 'Pelanggan'),
(12, 'Killua', 'Spanyol', 'pw_owner', 'Laki-Laki', 'killua@gmail.com', '088544521638', 'Owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`IdPaket`);

--
-- Indexes for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`ID_Sewa`),
  ADD KEY `Nama_Pelanggan` (`Nama_Pelanggan`),
  ADD KEY `IdPaket` (`IdPaket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `IdPaket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `ID_Sewa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD CONSTRAINT `penyewaan_ibfk_1` FOREIGN KEY (`IdPaket`) REFERENCES `paket` (`IdPaket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
