-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 07:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(5) NOT NULL,
  `tgl_beli` date NOT NULL,
  `no_polis` varchar(30) CHARACTER SET utf8 NOT NULL,
  `jenis_typr` varchar(30) CHARACTER SET utf8 NOT NULL,
  `warna` varchar(30) CHARACTER SET utf8 NOT NULL,
  `bahan_bakar` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tahun_keluaran` int(5) NOT NULL,
  `harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `tgl_beli`, `no_polis`, `jenis_typr`, `warna`, `bahan_bakar`, `tahun_keluaran`, `harga`) VALUES
(1, '2021-04-11', 'BE 1111 AA', 'Toyota Yaris', 'Hitam', 'Bensin', 2012, 120800000),
(2, '2021-04-10', 'BE 2222 AA', 'Toyota Fortuner', 'Hitam', 'Bensin', 2008, 122800000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(5) NOT NULL,
  `tgl_beli` date NOT NULL,
  `no_polis` varchar(30) CHARACTER SET utf8 NOT NULL,
  `jenis_type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `warna` varchar(30) CHARACTER SET utf8 NOT NULL,
  `bahan_bakar` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tahun_keluaran` int(5) NOT NULL,
  `harga_beli` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `tgl_beli`, `no_polis`, `jenis_type`, `warna`, `bahan_bakar`, `tahun_keluaran`, `harga_beli`) VALUES
(1, '2021-04-11', 'BE 1111 AA', 'Toyota Yaris', 'Hitam', 'Bensin', 2012, 110000000),
(2, '2021-04-10', 'BE 2222 AA', 'Toyota Fortuner', 'Hitam', 'Bensin', 2008, 115000000);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_jual` int(5) NOT NULL,
  `tgl_jual` date NOT NULL,
  `no_polis` varchar(30) CHARACTER SET utf8 NOT NULL,
  `jenis_type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `warna` varchar(30) CHARACTER SET utf8 NOT NULL,
  `bahan_bakar` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tahun_keluar` int(5) NOT NULL,
  `harga_jual` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_jual`, `tgl_jual`, `no_polis`, `jenis_type`, `warna`, `bahan_bakar`, `tahun_keluar`, `harga_jual`) VALUES
(1, '2021-04-12', 'BE 2222 AA', 'Toyota Fortuner', 'Hitam', 'Bensin', 2008, 122800000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `no_polis` (`no_polis`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `polis_bel_mob` (`no_polis`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_jual`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_jual` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
