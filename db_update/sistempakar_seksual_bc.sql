-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2024 pada 03.32
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempakar_seksual_bc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(20) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_gejala`
--

CREATE TABLE `data_gejala` (
  `id_gejala` int(20) NOT NULL,
  `kode_gejala` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `probabilitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_gejala`
--

INSERT INTO `data_gejala` (`id_gejala`, `kode_gejala`, `gejala`, `probabilitas`) VALUES
(1, 'G001', 'Bagian dubur, paha dan alat kelamin terasa gatal', 12),
(2, 'G002', 'Timbul benjolan kecil seperti jerawat', 10),
(3, 'G003', 'Benjolan akan pecah', 12),
(4, 'G004', 'Luka menganga yang sangat perih dan panas', 20),
(5, 'G005', 'Luka bertambah lebar', 12),
(6, 'G006', 'Suhu kelamin lembab', 12),
(7, 'G007', 'Sakit kepala', 12),
(8, 'G008', 'Demam', 12),
(9, 'G009', 'Virus HSV yang sedang menginfeksi', 10),
(10, 'G010', 'Pusing-pusing', 12),
(11, 'G011', 'Nyeri tulang seperti flu', 12),
(12, 'G012', 'Sembuh tanpa diobati', 12),
(13, 'G013', 'Timbul bercak kemerahan pada tubuh sekitar 6-12 minggu setelah berhubungan', 12),
(14, 'G014', 'Gejala akan hilang', 12),
(15, 'G015', 'Setelah 5-10 tahun penyakit ini akan menyerang susunan syaraf otak, jantung dan pembuluh darah ', 15),
(16, 'G016', 'Rasa tidak enak pada uretra dalam waktu 2-7 hari setelah terinfeksi', 12),
(17, 'G017', 'Nyeri ketika berkemih', 20),
(18, 'G018', 'Keluar nanah dari penis', 12),
(19, 'G019', 'Sakit pada saat buang air kecil', 12),
(20, 'G020', 'Keluar nanah berwarna hijau kuning dari mulut saluran kencing', 11),
(21, 'G021', 'Setelah beberapa hari keluar sedikit nanah pada pagi hari saja', 18),
(22, 'G022', 'Nanah encer', 16),
(23, 'G023', 'Rasa nyeri berkurang', 22),
(24, 'G024', 'Bila tidak diobati peradangan pada alat kelamin', 12),
(25, 'G025', 'Penderita sering berkemih', 8),
(26, 'G026', 'Lubang penis tampak merah dan membengkak', 10),
(27, 'G027', 'Mengeluarkan cairan seperti susu dari saluran kencing', 14),
(28, 'G028', 'Timbul benjolan kecil seperti kutil setelah waktu 2 minggu sampai 2 tahun', 15),
(29, 'G029', 'Kutil tersebut akan terasa gatal pada ujung batang penis', 12),
(30, 'G030', 'Nyeri pada area perut', 18),
(31, 'G031', 'Urine berwarna gelap', 12),
(32, 'G032', 'Nyeri sendi', 16),
(33, 'G033', 'Hilang nafsu makan', 12),
(34, 'G034', 'Mual', 17),
(35, 'G035', 'Feses berwarna pucat', 10),
(36, 'G036', 'Rasa lelah berlebihan', 17),
(37, 'G037', 'Diare', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penyakit`
--

CREATE TABLE `data_penyakit` (
  `id_penyakit` int(20) NOT NULL,
  `kode_penyakit` varchar(50) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penyakit`
--

INSERT INTO `data_penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`) VALUES
(1, 'P01', 'Herpes Genital'),
(3, 'P02', 'Sifilis'),
(4, 'P03', 'Gonore'),
(5, 'P04', 'Klamidia'),
(6, 'P05', 'Genital Warts'),
(7, 'P06', 'Hepatitis B');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_gejala`
--
ALTER TABLE `data_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `data_penyakit`
--
ALTER TABLE `data_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_gejala`
--
ALTER TABLE `data_gejala`
  MODIFY `id_gejala` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `data_penyakit`
--
ALTER TABLE `data_penyakit`
  MODIFY `id_penyakit` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
