-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2021 pada 12.06
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinikgigi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `accounts`
--

CREATE TABLE `accounts` (
  `username` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `accounts`
--

INSERT INTO `accounts` (`username`, `password`, `nama`) VALUES
('azka', 'azka', 'Azka Adhisetama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarpasien`
--

CREATE TABLE `daftarpasien` (
  `id` int(11) NOT NULL,
  `nocm` char(11) NOT NULL,
  `namapasien` varchar(50) NOT NULL,
  `lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `daftarpasien`
--

INSERT INTO `daftarpasien` (`id`, `nocm`, `namapasien`, `lahir`, `alamat`, `telp`) VALUES
(1, '71692786579', 'Sena Arief WWWWW', '2002-12-17', 'Jl. Mulawarman III No.12 Bulusan', '081225808788'),
(2, '34567987653', 'Arsyad Sukma Bagaskara', '2003-07-21', 'Jl. Toras II RT.04/RW.07 Pudakpayung Banyumanik', '081273894341'),
(3, '26592784909', 'Muhammad Azka Adhisetama', '2003-04-25', 'Griya Sakinah Jl. Mina No.19 RT.03/RW.06 Bandarjo Ungaran Barat', '081225805559'),
(4, '19379425367', 'Ilham Rizky Harsafrizal', '2003-03-19', 'Jl. Durian IV No.7 Blok D Banyumanik', '081578522990'),
(5, '33334444444', 'Tes Pasien 5 ver 4', '2222-02-12', '33 3 44444sahvdadgagkevkahbkjebvajv', '33344444'),
(6, '18713618388', 'Tes Pasien 2', '2003-06-22', 'Jl. bersamamu di malioboro', '081225678889'),
(7, '18713618389', 'Tes Pasien 3', '1945-09-25', 'Jalan Jalan ke kota semarang', '081226782229'),
(8, '18713618380', 'Tes Pasien 4', '1999-08-27', 'Jalan Hos Cokroaminoto 11, Chernobyl', '081226788827'),
(9, '45287652678', 'Tes Pasien 5', '2382-07-29', 'VY Canis Majoris', '081292082278'),
(10, '99999999999', 'tes terakhir', '9999-09-09', 'jalan 99 no.99', '081299999999'),
(11, '71378647683', 'Athallah Tsaqif Musyaffak', '2001-07-25', 'Jalan Mangga Durian Indah Berseri', '081225557680'),
(12, '53458273764', 'Bapak', '1111-11-11', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2398892968592874'),
(13, '32222222222', 'aaa', '2021-07-30', 'di mana saja', '6476382486823764');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekammedis`
--

CREATE TABLE `rekammedis` (
  `anamnesa` varchar(200) NOT NULL,
  `terapiobat` varchar(200) NOT NULL,
  `riwayatalergi` varchar(200) NOT NULL,
  `tindakan` varchar(200) NOT NULL,
  `id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekammedis`
--

INSERT INTO `rekammedis` (`anamnesa`, `terapiobat`, `riwayatalergi`, `tindakan`, `id`) VALUES
('aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaa', '1'),
('avdvadvdvadv', 'dvadvavadvva', 'vdavadvdvadvadv', 'advdavdvavavaddvd', '1'),
('aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa', '1'),
('testestest', 'opqopoqpoqpqopqo', 'abcabcabcabcba', 'ghfhgfhgfhgfh', '1'),
('sakit gigi', 'di antemi', 'nggak ada', 'di sembuhin', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `daftarpasien`
--
ALTER TABLE `daftarpasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftarpasien`
--
ALTER TABLE `daftarpasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
