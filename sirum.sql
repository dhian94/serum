-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2016 at 01:49 PM
-- Server version: 5.6.27-0ubuntu1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirum`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_rumah`
--

CREATE TABLE IF NOT EXISTS `data_rumah` (
  `gambar` varchar(100) NOT NULL,
  `nama_gambar` varchar(10) NOT NULL,
  `tipe_rumah` int(3) NOT NULL,
  `luas_rumah` int(4) NOT NULL,
  `deskripsi` tinytext NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(3) unsigned NOT NULL,
  `mime_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_rumah`
--

INSERT INTO `data_rumah` (`gambar`, `nama_gambar`, `tipe_rumah`, `luas_rumah`, `deskripsi`, `harga`, `stok`, `mime_type`) VALUES
('tipe 36.jpg', 'Tipe 36', 36, 45, 'Memiliki 2 kamar tidur, 1 dapur, parkiran mobil, taman kecil di depan rumah', 10000000, 14, 'image/jpeg'),
('tipe 45.jpg', 'Tipe 45', 45, 54, 'Memilik 2 kamar tidur besar, 1 dapur, kamar mandi dalam, parkiran mobil, taman kecil di depan rumah ', 10000000, 15, 'image/jpeg'),
('tipe 54.jpg', 'Tipe 54', 54, 60, 'Memiliki 2 kamar tidur besar 1 kamar tidur kecil, kamar mandi dalam, dapur, parkiran mobil, taman depan rumah   ', 13000000, 15, 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE IF NOT EXISTS `sewa` (
  `idTransaksi` smallint(5) unsigned NOT NULL,
  `idUser` tinyint(5) unsigned NOT NULL,
  `tipe_rumah` int(3) NOT NULL,
  `mulaiSewa` date NOT NULL,
  `akhirSewa` date NOT NULL,
  `bayar` int(11) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`idTransaksi`, `idUser`, `tipe_rumah`, `mulaiSewa`, `akhirSewa`, `bayar`, `status`) VALUES
(21, 6, 36, '2015-12-28', '2017-12-28', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` tinyint(5) unsigned NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `noKTP` varchar(16) NOT NULL,
  `noHP` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `nama_lengkap`, `noKTP`, `noHP`, `jenis_kelamin`, `alamat`) VALUES
(1, 'dhian94', '5f62c3824c91fc2', 'Mohammad Nahdhiana Hasmi', '123456789', '085755172825', 'Laki-Laki', 'RT 03 RW 11 Jeding Kidul, Desa Ariyojeding, Kecamatan Rejotangan, Kabupaten Tulungagung'),
(2, 'cibiza', 'b94a64b60c06c25', 'Cici Fatmala', '123456789', '085735061065', 'Laki-Laki', 'sukorejo'),
(4, 'rizalftm', 'e80b5017098950f', 'Rizal Diyan Santoso', '156798651', '08113023150', 'Laki-Laki', 'Tegalrejo'),
(5, 'sitimut', 'd7304e43ecdabb4', 'Siti Mutmainnah', '789431256', '08125293953', 'Perempuan', 'Blimbing'),
(6, 'septidkw', '015c5d773d2f5fa', 'Septi Dwi Khusmi Wardati', '15646984963', '085854054824', 'Perempuan', 'Blitar'),
(12, 'jonys', '827ccb0eea8a706', 'jony', '1234', '12345', 'Laki-Laki', 'abcdef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_rumah`
--
ALTER TABLE `data_rumah`
  ADD PRIMARY KEY (`tipe_rumah`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `tipe_rumah` (`tipe_rumah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `idTransaksi` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` tinyint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewa_ibfk_2` FOREIGN KEY (`tipe_rumah`) REFERENCES `data_rumah` (`tipe_rumah`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
