-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2018 pada 10.48
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbjurnal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `Hobi` varchar(15) NOT NULL,
  `Fakultas` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`nim`, `nama`, `kelas`, `jeniskelamin`, `Hobi`, `Fakultas`, `Alamat`) VALUES
('6701174142', 'Kamal', 'D3MI-41-02', 'laki-laki', 'Bola', 'FIT', 'kamal'),
('6701174144', 'amaw', 'D3MI-41-02', 'laki-laki', 'Volly', 'FakultasIlmuTerapan', 'asdasdsa'),
('6701174145', 'KamalRamadhanN', 'D3MI-41-02', 'laki-laki', 'Musik', 'FIT', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datastory`
--

CREATE TABLE `datastory` (
  `nim` varchar(10) NOT NULL,
  `code_file` varchar(20) NOT NULL,
  `story` varchar(100) NOT NULL,
  `file_gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `datastory`
--
ALTER TABLE `datastory`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
