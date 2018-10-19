-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 04.58
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamhs`
--

CREATE TABLE `datamhs` (
  `nama` varchar(25) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `asal` varchar(25) NOT NULL,
  `moto` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datamhs`
--

INSERT INTO `datamhs` (`nama`, `nim`, `jenis_kelamin`, `prodi`, `fakultas`, `asal`, `moto`) VALUES
('Valen', '6701170079', 'Laki-Laki', 'DKV', 'Fakultas Teknik Elektro', 'Kuningan', 'Sing Enjoy'),
('Tama', '6701174034', 'Laki-Laki', 'Sistem Informasi', 'Fakultas Ilmu Terapan', 'Bandung', 'Yang penting edan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datamhs`
--
ALTER TABLE `datamhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
