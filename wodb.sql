-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2023 pada 20.00
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` varchar(5) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Nama_Admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
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
  `keterangan` enum('indoor','outdoor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`IdPaket`, `nama_kendaraan`, `jumlah_kendaraan`, `tempat`, `jumlah_pengunjung`, `jumlah_mc`, `nama_hiburan`, `nama_dekorasi`, `nama_makeup`, `namapaket`, `deskripsi`, `harga`, `keterangan`) VALUES
(1, 'Limosin', 1, 'Lembang', 500, 2, 'Ustad Adi Hidayat', 'Creative Wedding', 'Wardah', 'Paket 1', 'panjangggggggggggggggggggggggggggggggggggggggggggg', 15000000, 'indoor'),
(2, 'Ankot', 1, 'Alun Alun CImahi', 20, 1, 'Badut', 'Decorative Desain', 'Wardah', 'Paket 2', 'panjangggggggggggggggggggggggggggggggggggggggggggg', 500000, 'outdoor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `ID_Pelanggan` varchar(5) NOT NULL,
  `Nama_Pelanggan` varchar(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `No_telepon` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`ID_Pelanggan`, `Nama_Pelanggan`, `Alamat`, `Jenis_Kelamin`, `Email`, `No_telepon`) VALUES
('1', 'Acep', 'Sumedang', 'Laki-laki', 'acep@gmail.com', 34454),
('2', 'Deri', 'Sumedang', 'Laki-laki', 'acep@gmail.com', 34454);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewaan`
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
-- Dumping data untuk tabel `penyewaan`
--

INSERT INTO `penyewaan` (`Nama_Pelanggan`, `ID_Sewa`, `Alamat`, `Pembayaran`, `harga`, `IdPaket`) VALUES
('Acep', 5, 'fgsdfsdf', 'Tunai', 15000000, 1),
('Deri', 6, 'Bandung', 'Tunai', 15000000, 1),
('Deri', 7, 'Bandung', 'Tunai', 15000000, 1),
('Deri', 8, 'Bandung', 'Tunai', 15000000, 1),
('Deri', 9, 'Bandung', 'Tunai', 15000000, 1),
('Deri', 10, 'Bandung', 'Tunai', 15000000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`IdPaket`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`ID_Pelanggan`),
  ADD UNIQUE KEY `Nama_Pelanggan` (`Nama_Pelanggan`);

--
-- Indeks untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`ID_Sewa`),
  ADD KEY `Nama_Pelanggan` (`Nama_Pelanggan`),
  ADD KEY `IdPaket` (`IdPaket`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`ID_Registrasi`),
  ADD KEY `Nama_Pelanggan` (`Nama_Pelanggan`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `ID_Sewa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD CONSTRAINT `penyewaan_ibfk_2` FOREIGN KEY (`Nama_Pelanggan`) REFERENCES `pelanggan` (`Nama_Pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyewaan_ibfk_3` FOREIGN KEY (`IdPaket`) REFERENCES `paket` (`IdPaket`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `registrasi_ibfk_1` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `pelanggan` (`ID_Pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
