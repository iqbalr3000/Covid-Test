-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 07.00
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_survey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(5) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(30) NOT NULL,
  `b` varchar(30) NOT NULL,
  `knc_jawaban` varchar(30) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `knc_jawaban`, `aktif`) VALUES
(1, 'Saya pergi ke luar rumah', 'ya', 'tidak', 'a', 'Y'),
(2, 'Saya menggunakan transportasi umum', 'ya', 'tidak', 'a', 'Y'),
(3, 'Saya tidak memakai masker saat berkumpul dengan orang lain', 'ya', 'tidak', 'a', 'Y'),
(4, 'Saya berjabat tangan dengan orang lain', 'ya', 'tidak', 'a', 'Y'),
(5, 'Saya tidak membersihkan tangan sebelum pegang kemudi mobil atau motor', 'ya', 'tidak', 'a', 'Y'),
(6, 'Saya menyentuh benda atau uang yang juga disentuh oleh orang lain', 'ya', 'tidak', 'a', 'Y'),
(7, 'Saya tidak menjaga jarak 1 setengah meter dengan  orang lain ketika belanja atau bekerja', 'ya', 'tidak', 'a', 'Y'),
(8, 'saya makan diluar rumah warung atau restoran', 'ya', 'tidak', 'a', 'Y'),
(9, 'Saya tidak minum hangat dan cuci tangan dengan sabun setelah tiba di tujuan', 'ya', 'tidak', 'a', 'Y'),
(10, 'Saya berada di wilayah kelurahan tempat pasien tertular', 'ya', 'tidak', 'a', 'Y'),
(11, 'Saya tidak memasang hand sanitizer di depan pintu masuk', 'ya', 'tidak', 'a', 'Y'),
(12, 'Saya tidak mencuci tangan denggan sabun setelah tiba dirumah', 'ya', 'tidak', 'a', 'Y'),
(13, 'Saya tidak menyediakan tisu basah atau anti septic bagi keluarga dirumah', 'ya', 'tidak', 'a', 'Y'),
(14, 'Saya tidak segera merendam baju dan celana bekas pakai diluar rumah kedalam air panas atau sabun', 'ya', 'tidak', 'a', 'Y'),
(15, 'Saya tidak segera mandi keramas setelah tiba di rumah', 'ya', 'tidak', 'a', 'Y'),
(16, 'Saya tidak mengsosialisasikan check list penilaian resiko pribadi ini kepada keluarga dirumah', 'ya', 'tidak', 'a', 'Y'),
(17, 'Saya dalam sehari tidak kena cahaya matahari minimal 15 menit', 'ya', 'tidak', 'a', 'Y'),
(18, 'Saya tidak jalan kaki atau berolahraga minimal 30 menit setiap hari', 'ya', 'tidak', 'a', 'Y'),
(19, 'Saya jarang minum vitamin C dan E dan kurang tidur', 'ya', 'tidak', 'a', 'Y'),
(20, 'Usia saya diatas 60 tahun', 'ya', 'tidak', 'a', 'Y'),
(21, 'Saya mempunyai penyakit jantung, diabetes, atau gannguan pernafasan kronik', 'ya', 'tidak', 'a', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `usia` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `nama`, `usia`) VALUES
(6, '', 0),
(7, '', 0),
(8, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
