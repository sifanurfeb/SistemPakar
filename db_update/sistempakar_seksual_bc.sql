-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2024 pada 14.10
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

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`id`, `nama_admin`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

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
-- Struktur dari tabel `data_hasil`
--

CREATE TABLE `data_hasil` (
  `id_hasil` int(20) NOT NULL,
  `penyakit` varchar(100) NOT NULL,
  `id_gejala` int(20) NOT NULL,
  `kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_rule`
--

CREATE TABLE `data_rule` (
  `id_rule` int(20) NOT NULL,
  `kode_rule` varchar(100) NOT NULL,
  `id_penyakit` int(20) NOT NULL,
  `id_gejala` int(20) NOT NULL,
  `pertanyaan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_rule`
--

INSERT INTO `data_rule` (`id_rule`, `kode_rule`, `id_penyakit`, `id_gejala`, `pertanyaan`) VALUES
(1, 'R001', 1, 3, 'Apakah mengalami benjolan yang akan pecah?'),
(2, 'R002', 1, 4, 'Apakah terdapat luka menganga yang perih dan panas?'),
(3, 'R003', 1, 5, 'Apakah luka semakin melebar?'),
(4, 'R004', 1, 9, 'Apakah terdapat infeksi virus HSV?'),
(5, 'R005', 3, 12, 'Apakah dapat sembuh tanpa diobati?'),
(6, 'R006', 3, 14, 'Apakah gejala tersebut hilang?'),
(7, 'R007', 3, 15, 'Apakah penyakit ini dapat menyerang syarah otak, jantung dan pembuluh darah setelah 5 tahun?'),
(8, 'R008', 4, 18, 'Apakah mengeluarkan nanah dari penis?'),
(9, 'R009', 4, 21, 'Apakah keluar sedikit nanah pada pagi hari saja?'),
(10, 'R010', 4, 24, 'Apakah terjadi peradangan karena belum diobati?'),
(11, 'R001', 4, 25, 'Apakah sering berkemih?'),
(12, 'R001', 4, 26, 'Apakah lubang penis tampak merah dan bengkak?'),
(13, 'R001', 5, 17, 'Apakah merasakan nyeri saat berkemih?'),
(14, 'R001', 5, 19, 'Apakah merasa sakit saat buang air kecil?'),
(15, 'R001', 6, 28, 'Apakah terdapat benjolan kecil seperti kutil?'),
(16, 'R001', 6, 29, 'Apakah merasa gatal pada kutil tersebut serta ujung batang penis?'),
(17, 'R001', 7, 33, 'Apakah mengalami nafsu makan hilang?'),
(18, 'R001', 7, 36, 'Apakah merasakan lelah berlebihan?'),
(19, 'R001', 7, 37, 'Apakah merasakan diare?');

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
-- Indeks untuk tabel `data_hasil`
--
ALTER TABLE `data_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indeks untuk tabel `data_penyakit`
--
ALTER TABLE `data_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `data_rule`
--
ALTER TABLE `data_rule`
  ADD PRIMARY KEY (`id_rule`),
  ADD KEY `id_penyakit` (`id_penyakit`,`id_gejala`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_gejala`
--
ALTER TABLE `data_gejala`
  MODIFY `id_gejala` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `data_hasil`
--
ALTER TABLE `data_hasil`
  MODIFY `id_hasil` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_penyakit`
--
ALTER TABLE `data_penyakit`
  MODIFY `id_penyakit` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `data_rule`
--
ALTER TABLE `data_rule`
  MODIFY `id_rule` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_hasil`
--
ALTER TABLE `data_hasil`
  ADD CONSTRAINT `data_hasil_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `data_rule` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_rule`
--
ALTER TABLE `data_rule`
  ADD CONSTRAINT `data_rule_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `data_gejala` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_rule_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `data_penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
