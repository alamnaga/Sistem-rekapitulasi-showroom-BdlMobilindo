-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 03:09 PM
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
  `tgl_jual` date NOT NULL,
  `no_polis` varchar(30) CHARACTER SET utf8 NOT NULL,
  `jenis_typr` varchar(30) CHARACTER SET utf8 NOT NULL,
  `warna` varchar(30) CHARACTER SET utf8 NOT NULL,
  `bahan_bakar` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tahun_keluaran` int(5) NOT NULL,
  `harga_jual` int(30) NOT NULL,
  `status` int(30) DEFAULT 1,
  `harga_beli` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `tgl_beli`, `tgl_jual`, `no_polis`, `jenis_typr`, `warna`, `bahan_bakar`, `tahun_keluaran`, `harga_jual`, `status`, `harga_beli`) VALUES
(30, '2021-03-29', '2021-04-27', 'BE 2222 AA', 'Toyota Fortuner', 'Hijau', 'Bio Solar', 2000, 600000000, 0, 500000000),
(31, '2021-04-25', '2021-04-27', 'BE 2222 AQ', 'Honda Jazz', 'Hitam', 'Bensin', 2018, 650000000, 0, 450000000),
(32, '2021-04-01', '2021-04-27', 'BE 3333 A', 'Toyota Fortuner', 'Hitam', 'Bio Solar', 2018, 650000000, 0, 500000000),
(36, '2021-04-04', '2021-04-27', 'BE 2222 AQ', 'Toyota Fortuner', 'Merah', 'Bio Solar', 2018, 700000000, 1, 600000000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(5) NOT NULL,
  `tgl_beli` date NOT NULL,
  `no_polis` varchar(30) CHARACTER SET utf8 NOT NULL,
  `jenis_typr` varchar(30) CHARACTER SET utf8 NOT NULL,
  `warna` varchar(30) CHARACTER SET utf8 NOT NULL,
  `bahan_bakar` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tahun_keluaran` int(5) NOT NULL,
  `harga_beli` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_jual` int(5) NOT NULL,
  `tgl_jual` date NOT NULL,
  `no_polis` varchar(30) CHARACTER SET utf8 NOT NULL,
  `jenis_typr` varchar(30) CHARACTER SET utf8 NOT NULL,
  `warna` varchar(30) CHARACTER SET utf8 NOT NULL,
  `bahan_bakar` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tahun_keluaran` int(5) NOT NULL,
  `harga_jual` int(30) NOT NULL,
  `status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_jual`, `tgl_jual`, `no_polis`, `jenis_typr`, `warna`, `bahan_bakar`, `tahun_keluaran`, `harga_jual`, `status`) VALUES
(30, '2021-04-27', 'BE 2222 AA', 'Toyota Fortuner', 'Hijau', 'Bio Solar', 2000, 600000000, 0),
(31, '2021-04-27', 'BE 2222 AQ', 'Honda Jazz', 'Hitam', 'Bensin', 2018, 650000000, 0),
(32, '2021-04-27', 'BE 3333 A', 'Toyota Fortuner', 'Hitam', 'Bio Solar', 2018, 650000000, 0);

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
  ADD KEY `no_polis` (`no_polis`),
  ADD KEY `harga_jual` (`harga_jual`) USING BTREE,
  ADD KEY `harga_beli` (`harga_beli`) USING BTREE;

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `polis_bel_mob` (`no_polis`),
  ADD KEY `harga_beli` (`harga_beli`) USING BTREE;

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_jual`),
  ADD KEY `mobil` (`no_polis`);

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
  MODIFY `id_mobil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_jual` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
