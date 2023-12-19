-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 02:40 PM
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
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `ID_Pelanggan` varchar(5) NOT NULL,
  `Nama_Pelanggan` varchar(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `No_telepon` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyewaan`
--

CREATE TABLE `penyewaan` (
  `ID_Pelanggan` varchar(5) NOT NULL,
  `Nama_Pelanggan` varchar(30) NOT NULL,
  `ID_Sewa` varchar(5) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Pembayaran` varchar(30) NOT NULL,
  `Harga_Sewa` int(20) NOT NULL,
  `ID_Admin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

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
  ADD UNIQUE KEY `ID_Pelanggan_2` (`ID_Pelanggan`),
  ADD KEY `ID_Admin` (`ID_Admin`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`),
  ADD KEY `Nama_Pelanggan` (`Nama_Pelanggan`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`ID_Registrasi`),
  ADD KEY `Nama_Pelanggan` (`Nama_Pelanggan`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD CONSTRAINT `penyewaan_ibfk_1` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `pelanggan` (`ID_Pelanggan`),
  ADD CONSTRAINT `penyewaan_ibfk_2` FOREIGN KEY (`Nama_Pelanggan`) REFERENCES `pelanggan` (`Nama_Pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyewaan_ibfk_3` FOREIGN KEY (`ID_Admin`) REFERENCES `admin` (`ID_Admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `registrasi_ibfk_1` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `pelanggan` (`ID_Pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;