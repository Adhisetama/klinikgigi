-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 01:55 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `username` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`username`, `password`, `nama`) VALUES
('azka', 'azka', 'Azka Adhisetama');

-- --------------------------------------------------------

--
-- Table structure for table `daftarpasien`
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
-- Dumping data for table `daftarpasien`
--

INSERT INTO `daftarpasien` (`id`, `nocm`, `namapasien`, `lahir`, `alamat`, `telp`) VALUES
(1, '71692786579', 'Sena Arief Widagda', '2002-12-17', 'Jl. Mulawarman III No.12 Bulusan', '081225808788'),
(2, '34567987653', 'Arsyad Sukma Bagaskara', '2003-07-21', 'Jl. Toras II RT.04/RW.07 Pudakpayung Banyumanik', '081273894341'),
(3, '26592784909', 'Muhammad Azka Adhisetama', '2003-04-25', 'Griya Sakinah Jl. Mina No.19 RT.03/RW.06 Bandarjo Ungaran Barat', '081225805559'),
(4, '19379425367', 'Ilham Rizky Harsafrizal', '2003-03-19', 'Jl. Durian IV No.7 Blok D Banyumanik', '081578522990'),
(5, '33334444444', 'Tes Pasien 5 ver 4', '2222-02-12', '33 3 44444', '33344444'),
(6, '18713618388', 'Tes Pasien 2', '2003-06-22', 'Jl. bersamamu di malioboro', '081225678889'),
(7, '18713618389', 'Tes Pasien 3', '1945-09-25', 'Jalan Jalan ke kota semarang', '081226782229'),
(8, '18713618380', 'Tes Pasien 4', '1999-08-27', 'Jalan Hos Cokroaminoto 11, Chernobyl', '081226788827'),
(9, '45287652678', 'Tes Pasien 5', '2382-07-29', 'VY Canis Majoris', '081292082278'),
(10, '99999999999', 'tes terakhir', '9999-09-09', 'jalan 99 no.99', '081299999999'),
(11, '71378647683', 'Athallah Tsaqif Musyaffak', '2001-07-25', 'Jalan Mangga Durian Indah Berseri', '081225557680');

-- --------------------------------------------------------

--
-- Table structure for table `rekammedis`
--

CREATE TABLE `rekammedis` (
  `anamnesa` varchar(200) NOT NULL,
  `terapiobat` varchar(200) NOT NULL,
  `riwayatalergi` varchar(200) NOT NULL,
  `tindakan` varchar(200) NOT NULL,
  `nocp` varchar(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `daftarpasien`
--
ALTER TABLE `daftarpasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarpasien`
--
ALTER TABLE `daftarpasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
