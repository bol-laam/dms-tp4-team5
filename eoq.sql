-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2023 at 05:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eoq`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `id_bagian` int(8) NOT NULL,
  `nama_bagian` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `nama_bagian`) VALUES
(7, 'administrator'),
(12, 'gudang'),
(8, 'manajer'),
(9, 'pesan ke supplier s'),
(11, 'produksi');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(16) NOT NULL,
  `nama_barang` varchar(64) NOT NULL,
  `harga_barang` varchar(16) NOT NULL,
  `biaya_penyimpanan` varchar(16) NOT NULL,
  `periode_permintaan` varchar(4) NOT NULL,
  `satuan` varchar(16) NOT NULL,
  `konversi` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `biaya_penyimpanan`, `periode_permintaan`, `satuan`, `konversi`) VALUES
(137, 'Kertas Kalkir Ukuran A4', '10000', '1000', '30', 'rim', '500'),
(138, 'Kertas Kalkir Ukuran F4', '11500', '1150', '30', 'rim', '500'),
(139, 'Kertas Kalkir Ukuran A3', '20000', '2000', '30', 'rim', '500'),
(140, 'Kertas HVS Ex Tjiwi Kimia 65 x 100', '23900', '3000', '30', 'rim', '500'),
(142, 'Kertas HVS Ex Tjiwi Kimia 65 x 100 2', '26750', '2500', '30', 'rim', '500'),
(143, 'Kertas HVS Ex Tjiwi Kimia 65 x 100 3', '30550', '3000', '30', 'rim', '500'),
(144, 'Kertas HVS Ex Tjiwi Kimia 65 x 100 4', '38200', '3000', '30', 'rim', '500'),
(145, 'Kertas HVS Ex Tjiwi Kimia 79 x 109', '41000', '4100', '30', 'rim', '500'),
(146, 'Tinta Cetak Offset s', '12000', '1200', '30', 'kaleng', '1'),
(147, 'Laser Film A4', '15500', '2000', '30', 'lembar', '1'),
(148, 'Laser Film F4', '18500', '2000', '30', 'lembar', '1'),
(149, 'Laser Film A3', '27500', '3000', '30', 'lembar', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(16) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pegawai` varchar(32) NOT NULL,
  `alamat_pegawai` varchar(64) NOT NULL,
  `hp_pegawai` varchar(16) NOT NULL,
  `id_bagian` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `password`, `nama_pegawai`, `alamat_pegawai`, `hp_pegawai`, `id_bagian`) VALUES
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'kantor', '085214021108', 1),
(9, 'satria', '21232f297a57a5a743894a0e4a801fc3', 'satria', 'semarang', '085214021108', 7),
(10, 'amir', '63eefbd45d89e8c91f24b609f7539942', 'amir', 'semarang', '08080808', 8),
(11, 'anin', '9058e374a4ab7705d2283b33bf0f23ae', 'anin', 'semarang', '004859', 10),
(14, 'sandi', 'ac9b4e0b6a21758534db2a6324d34a54', 'sandi', 'semarang', '009', 9),
(15, 'mini', '44c6c370fd1859325f7119e96a81584e', 'mini', 'semarang', '006', 11),
(17, 'gudang', '202446dd1d6028084426867365b0c7a1', 'gudai', 'gudang', '08151515', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesanan` int(16) NOT NULL,
  `nama_pemesan` varchar(32) NOT NULL,
  `id_barang` int(16) NOT NULL,
  `jumlah_pesanan` varchar(16) NOT NULL,
  `lead_time` int(4) NOT NULL,
  `pakai` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesanan`, `nama_pemesan`, `id_barang`, `jumlah_pesanan`, `lead_time`, `pakai`) VALUES
(103, 'raja tulis', 137, '5', 2, '2000'),
(104, 'raja tulis', 137, '3', 1, '2000'),
(105, 'Indo trading', 137, '4', 3, '1900'),
(106, 'global offset', 137, '5', 3, '2488'),
(107, 'kedai grafika', 137, '6', 3, '2790'),
(108, 'deprintz', 137, '3', 3, '1490'),
(109, 'elevent printing', 137, '8', 3, '3999'),
(110, 'Indo trading', 137, '3', 3, '1499'),
(111, 'global offset', 137, '7', 3, '3499'),
(112, 'platindo jaya', 137, '5', 3, '2400'),
(113, 'platindo jaya', 137, '8', 3, '3760'),
(114, 'global offset', 137, '6', 3, '2999'),
(115, 'global offset', 146, '4', 3, '3'),
(116, 'global offset', 146, '3', 3, '4'),
(117, 'global offset', 146, '4', 3, '3'),
(118, 'global offset', 146, '5', 3, '3'),
(119, 'global offset', 146, '4', 3, '6'),
(120, 'global offset', 146, '6', 3, '4'),
(121, 'global offset', 146, '8', 3, '6'),
(122, 'global offset', 146, '4', 3, '7'),
(123, 'global offset', 146, '5', 3, '3'),
(124, 'global offset', 146, '3', 3, '5'),
(125, 'global offset', 146, '3', 3, '5'),
(126, 'global offset', 146, '4', 3, '4'),
(127, 'Indo trading', 147, '200', 3, '170'),
(128, 'platindo jaya', 149, '400', 3, '350'),
(129, 'platindo jaya', 147, '300', 3, '400'),
(130, 'platindo jaya', 147, '100', 3, '100'),
(131, 'deprintz', 147, '120', 3, '150'),
(132, 'kedai grafika', 147, '100', 3, '90'),
(133, 'elevent printing', 147, '140', 3, '120'),
(134, 'global offset', 147, '90', 3, '100'),
(135, 'global offset', 147, '200', 3, '175'),
(136, 'global offset', 147, '100', 3, '120'),
(137, 'platindo jaya', 147, '200', 3, '200'),
(138, 'global offset', 147, '120', 3, '140'),
(139, 'global offset', 147, '400', 3, '350'),
(140, 'platindo jaya', 149, '500', 3, '500'),
(141, 'kedai grafika', 149, '250', 3, '300'),
(142, 'deprintz', 149, '100', 3, '99'),
(143, 'platindo jaya', 149, '200', 3, '180'),
(144, 'platindo jaya', 149, '120', 3, '120'),
(145, 'platindo jaya', 149, '250', 3, '230'),
(146, 'platindo jaya', 149, '300', 3, '300'),
(147, 'platindo jaya', 149, '450', 3, '400'),
(148, 'platindo jaya', 149, '200', 3, '250'),
(149, 'platindo jaya', 149, '300', 3, '325'),
(150, 'platindo jaya', 149, '500', 3, '510'),
(151, 'raja tulis', 144, '5', 3, '2000'),
(152, 'kedai grafika', 144, '6', 3, '2500'),
(153, 'kedai grafika', 144, '10', 3, '5000'),
(154, 'Indo trading', 144, '4', 3, '2500'),
(155, 'platindo jaya', 144, '8', 3, '4000'),
(156, 'platindo jaya', 144, '7', 3, '3000'),
(157, 'elevent printing', 144, '10', 3, '4000'),
(158, 'global offset', 144, '5', 3, '3000'),
(159, 'global offset', 144, '12', 3, '6000'),
(160, 'global offset', 144, '15', 3, '7500'),
(161, 'global offset', 144, '8', 3, '4000'),
(162, 'global offset', 144, '10', 3, '6000'),
(163, 'Indo trading', 138, '8', 3, '3500'),
(164, 'Indo trading', 138, '10', 3, '4500'),
(166, 'kedai grafika', 138, '13', 3, '6500'),
(167, 'kedai grafika', 138, '18', 3, '7500'),
(168, 'platindo jaya', 138, '12', 3, '9000'),
(169, 'platindo jaya', 138, '10', 3, '6000'),
(170, 'global offset', 138, '20', 3, '5000'),
(171, 'global offset', 138, '7', 3, '11000'),
(172, 'raja tulis', 138, '5', 3, '3000'),
(173, 'platindo jaya', 138, '8', 3, '2000'),
(174, 'raja tulis', 138, '10', 3, '4000'),
(175, 'deprintz', 138, '15', 3, '5000');

-- --------------------------------------------------------

--
-- Table structure for table `pengambilan`
--

CREATE TABLE `pengambilan` (
  `id_pengambilan` int(11) NOT NULL,
  `nama_pengambil` varchar(255) NOT NULL,
  `id_produksi` int(11) DEFAULT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_pengambilan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengambilan`
--

INSERT INTO `pengambilan` (`id_pengambilan`, `nama_pengambil`, `id_produksi`, `id_barang`, `jumlah_pengambilan`) VALUES
(1, 'tes', 10, 137, 10),
(2, 'tes', NULL, 140, 100);

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id_produksi` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_produksi` int(11) NOT NULL,
  `lead_time` int(11) NOT NULL,
  `proses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id_bagian`),
  ADD UNIQUE KEY `nama_bagian` (`nama_bagian`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `nama_barang` (`nama_barang`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD UNIQUE KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `pengambilan`
--
ALTER TABLE `pengambilan`
  ADD PRIMARY KEY (`id_pengambilan`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id_bagian` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pesanan` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `pengambilan`
--
ALTER TABLE `pengambilan`
  MODIFY `id_pengambilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_produksi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
