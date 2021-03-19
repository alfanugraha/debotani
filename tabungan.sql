-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 03:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `debotani`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `no_urut` int(255) NOT NULL,
  `no_cif_no_rekening` int(255) DEFAULT NULL,
  `nama_nasabah` varchar(255) NOT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `gol_cust` varchar(255) DEFAULT NULL,
  `gol_cust_bi` int(255) DEFAULT NULL,
  `jnsnsbah` int(255) DEFAULT NULL,
  `npwp` int(255) DEFAULT NULL,
  `stcust` int(255) DEFAULT NULL,
  `jns_id` int(255) DEFAULT NULL,
  `no_id` int(255) DEFAULT NULL,
  `tgl_id` int(255) DEFAULT NULL,
  `tgl_jth_tempo_id` int(255) DEFAULT NULL,
  `sts_kwn` int(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kode_pos` int(255) DEFAULT NULL,
  `telp_rumah` varchar(255) DEFAULT NULL,
  `telp_kantor` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `hp` varchar(255) DEFAULT NULL,
  `sandi_dati` varchar(255) DEFAULT NULL,
  `nama_ibu_kandung` varchar(255) DEFAULT NULL,
  `nama_versi_slik` varchar(255) DEFAULT NULL,
  `ao_hand` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`no_urut`, `no_cif_no_rekening`, `nama_nasabah`, `agama`, `gol_cust`, `gol_cust_bi`, `jnsnsbah`, `npwp`, `stcust`, `jns_id`, `no_id`, `tgl_id`, `tgl_jth_tempo_id`, `sts_kwn`, `sex`, `tempat_lahir`, `tgl_lahir`, `email`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `kode_pos`, `telp_rumah`, `telp_kantor`, `fax`, `hp`, `sandi_dati`, `nama_ibu_kandung`, `nama_versi_slik`, `ao_hand`, `created_at`, `updated_at`) VALUES
(1, 0, 'Alfa', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, NULL, NULL),
(2, NULL, 'Wili', 'Choose', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-19 07:26:47', '2021-03-19 07:26:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`no_urut`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `no_urut` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
