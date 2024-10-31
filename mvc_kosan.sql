-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2024 pada 07.35
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_kosan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kosan`
--

CREATE TABLE `kosan` (
  `id` int(11) NOT NULL,
  `nama_kosan` varchar(255) DEFAULT NULL,
  `jenis_kosan` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `harga_perbulan` int(11) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `no_hp` int(20) NOT NULL,
  `deskripsi_singkat` varchar(255) NOT NULL,
  `img_kamar` varchar(255) DEFAULT NULL,
  `img_wc` varchar(255) DEFAULT NULL,
  `img_dapur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kosan`
--

INSERT INTO `kosan` (`id`, `nama_kosan`, `jenis_kosan`, `alamat`, `harga_perbulan`, `img_url`, `deskripsi`, `no_hp`, `deskripsi_singkat`, `img_kamar`, `img_wc`, `img_dapur`) VALUES
(1, 'Kosan Sejahtera', 'Kos Tunggal', 'Jl. Raya Cikini No. 10', 1000000, 'uploads/images/kost1.png', 'Kosan Sejahtera adalah kosan nyaman dengan fasilitas lengkap. Terletak di Jl. Raya Cikini No. 10. Kosan Sejahtera menyediakan kenyamanan dan keamanan bagi penghuninya. Dengan fasilitas seperti kamar mandi dalam, dapur bersama', 2147483647, 'Kosan nyaman dengan fasilitas lengkap.', 'uploads/images/kost1_kamar.png', 'uploads/images/kost1_wc.png', 'uploads/images/kost1_dapur.png'),
(2, 'Kosan Bahagia', 'Kos Campuran', 'Jl. Raya Kebayoran No. 15', 800000, 'uploads/images/kost2.png', 'Kosan Bahagia adalah kosan strategis dekat dengan transportasi umum. Terletak di Jl. Raya Kebayoran No. 15. Kosan Bahagia adalah pilihan ideal bagi mereka yang mencari kosan dengan akses mudah ke transportasi umum dan fasilit', 2147483647, 'Kosan strategis dekat dengan transportasi umum.', 'uploads/images/kost2_kamar.png', 'uploads/images/kost2_wc.png', 'uploads/images/kost2_dapur.png'),
(3, 'Kosan Asri', 'Kos Putri', 'Jl. Raya Gandaria No. 20', 1200000, 'uploads/images/kost3.png', 'Kosan Asri adalah kosan tenang dengan lingkungan hijau. Terletak di Jl. Raya Gandaria No. 20. Kosan Asri menawarkan suasana yang tenang dan nyaman bagi para penghuninya. Dikelilingi oleh pepohonan hijau dan udara segar, pengh', 2147483647, 'Kosan tenang dengan lingkungan hijau.', 'uploads/images/kost3_kamar.png', 'uploads/images/kost3_wc.png', 'uploads/images/kost3_dapur.png'),
(4, 'Kosan Damai', 'Kos Putra', 'Jl. Raya Meruya No. 25', 900000, 'uploads/images/kost4.png', 'Kosan Damai adalah kosan modern dengan fasilitas premium. Terletak di Jl. Raya Meruya No. 25. Kosan Damai menawarkan fasilitas modern dan premium bagi penghuninya. Dengan desain yang minimalis dan fungsional, kosan ini cocok ', 2147483647, 'Kosan modern dengan fasilitas premium.', 'uploads/images/kost4_kamar.png', 'uploads/images/kost4_wc.png', 'uploads/images/kost4_dapur.png'),
(5, 'Kosan Harmoni', 'Kos Campuran', 'Jl. Raya Kuningan No. 30', 1500000, 'uploads/images/kost5.png', 'Kosan Harmoni adalah kosan eksklusif dengan fasilitas lengkap. Terletak di Jl. Raya Kuningan No. 30. Kosan Harmoni adalah pilihan tepat bagi mereka yang mencari hunian eksklusif dengan fasilitas lengkap. Dikelilingi oleh pusa', 2147483647, 'Kosan eksklusif dengan fasilitas lengkap.', 'uploads/images/kost5_kamar.png', 'uploads/images/kost5_wc.png', 'uploads/images/kost5_dapur.png'),
(29, 'aaaa', 'aaa', '111', 111, 'uploads/images/6659eddb20ede_3f2cbf323c1797b28e658227e99da849.jpg', '1a1', 1111, 'a1', 'uploads/images/6659eddb21237_3f2cbf323c1797b28e658227e99da849.jpg', 'uploads/images/6659eddb2139f_3f2cbf323c1797b28e658227e99da849.jpg', 'uploads/images/6659eddb21535_357a8c2d1fba92b85eec057524e79d99.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `useradmin`
--

CREATE TABLE `useradmin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `useradmin`
--

INSERT INTO `useradmin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin1', 'admin1@example.com', 'password1'),
(2, 'admin2', 'admin2@example.com', 'password2'),
(3, 'admin3', 'admin3@example.com', 'password3'),
(4, 'admin4', 'admin4@example.com', 'password4'),
(5, 'admin', 'admin@gmail', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kosan`
--
ALTER TABLE `kosan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kosan`
--
ALTER TABLE `kosan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
