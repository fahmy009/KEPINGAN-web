-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 07, 2018 at 01:55 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepingan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataSapi`
--

CREATE TABLE `dataSapi` (
  `id` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `tanggalLahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataSapi`
--

INSERT INTO `dataSapi` (`id`, `berat`, `tanggalLahir`) VALUES
(1, 400, '2011-05-16'),
(2, 400, '2011-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `hasilSusu`
--

CREATE TABLE `hasilSusu` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `idSapi` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `JumlahTerjual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_`, `Tanggal`, `JumlahTerjual`) VALUES
(1, '2018-05-03', 122),
(2, '2018-05-03', 122),
(3, '2018-05-03', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataSapi`
--
ALTER TABLE `dataSapi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasilSusu`
--
ALTER TABLE `hasilSusu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataSapi`
--
ALTER TABLE `dataSapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hasilSusu`
--
ALTER TABLE `hasilSusu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
