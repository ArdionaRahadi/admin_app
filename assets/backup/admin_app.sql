-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2024 pada 08.37
-- Versi server: 11.5.2-MariaDB
-- Versi PHP: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pemasukan_Ardiona`
--

CREATE TABLE `t_pemasukan_Ardiona` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `banyaknya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pemasukan_Gamingxyz1223`
--

CREATE TABLE `t_pemasukan_Gamingxyz1223` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `banyaknya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_pemasukan_Gamingxyz1223`
--

INSERT INTO `t_pemasukan_Gamingxyz1223` (`id`, `nama`, `harga`, `banyaknya`) VALUES
(1, 'Uang saku', 20000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengeluaran_Ardiona`
--

CREATE TABLE `t_pengeluaran_Ardiona` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga_satuan` int(11) DEFAULT NULL,
  `banyaknya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengeluaran_Gamingxyz1223`
--

CREATE TABLE `t_pengeluaran_Gamingxyz1223` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga_satuan` int(11) DEFAULT NULL,
  `banyaknya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_pengeluaran_Gamingxyz1223`
--

INSERT INTO `t_pengeluaran_Gamingxyz1223` (`id`, `nama`, `harga_satuan`, `banyaknya`) VALUES
(1, 'Parkir', 2000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_users`
--

CREATE TABLE `t_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_users`
--

INSERT INTO `t_users` (`id`, `email`, `username`, `password`) VALUES
(1, 'gamingxyz1223@gmail.com', 'Gamingxyz1223', '$2y$10$Hl86KCQtaf9ecNg5mkeQyOa7d.gY/rUb0ErM5x/Bep8bL9GV3EYq.'),
(2, 'ardionaschool1223@gmail.com', 'Ardiona', '$2y$10$VDSoob3P1JwHV6ISU.JBWe3HhD/19IEAsZ5lxkTLYZiEWkSffZIC2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_pemasukan_Ardiona`
--
ALTER TABLE `t_pemasukan_Ardiona`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_pemasukan_Gamingxyz1223`
--
ALTER TABLE `t_pemasukan_Gamingxyz1223`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_pengeluaran_Ardiona`
--
ALTER TABLE `t_pengeluaran_Ardiona`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_pengeluaran_Gamingxyz1223`
--
ALTER TABLE `t_pengeluaran_Gamingxyz1223`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_pemasukan_Ardiona`
--
ALTER TABLE `t_pemasukan_Ardiona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_pemasukan_Gamingxyz1223`
--
ALTER TABLE `t_pemasukan_Gamingxyz1223`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_pengeluaran_Ardiona`
--
ALTER TABLE `t_pengeluaran_Ardiona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_pengeluaran_Gamingxyz1223`
--
ALTER TABLE `t_pengeluaran_Gamingxyz1223`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
