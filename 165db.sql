-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 07:10 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `165db`
--

-- --------------------------------------------------------

--
-- Table structure for table `notic`
--

CREATE TABLE `notic` (
  `id_notic` int(100) NOT NULL,
  `message` varchar(165) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notic`
--

INSERT INTO `notic` (`id_notic`, `message`) VALUES
(1, 'Arigatou');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_report` int(100) NOT NULL,
  `nama_klien` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `referensi` varchar(50) NOT NULL,
  `tanggal_visit` date NOT NULL,
  `tanggal_event` date NOT NULL,
  `jumlah_pax` int(10) NOT NULL,
  `kategori_event` varchar(50) NOT NULL,
  `sales` varchar(10) NOT NULL,
  `progres` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_report`, `nama_klien`, `nama_perusahaan`, `no_telp`, `email`, `referensi`, `tanggal_visit`, `tanggal_event`, `jumlah_pax`, `kategori_event`, `sales`, `progres`) VALUES
(1, 'Ari Susanto', 'Menara 165', '085772802605', 'iboyxc@gmail.com', 'Walk In', '2018-02-03', '2018-02-22', 1000, 'Wedding', 'Oke', 'Confirm'),
(2, 'Hari Saputra', 'Menara Batavia', '085772802606', 'harisaputra@gmail.com', 'Web Site', '2018-03-01', '2018-03-16', 10000, 'Gathering', 'Diland', 'On Progres'),
(3, 'Septian', 'EL Nusa', '085772802609', 'septian@gmail.com', 'Walk In', '2018-03-15', '2018-04-27', 3000, 'Wedding', 'Desi', 'On Progres'),
(4, 'Thufeil', 'SMK Bina Informatika', '08772802637', 'smkbitubel@ok.com', 'Walk In', '2018-02-17', '2018-02-17', 1000, 'Wedding', 'Oke', 'On Progres'),
(6, 'aboi', 'PT. Ijoy global sukses jaya', '085772801692', 'addausirayhan@gmail.com', 'In Coming Call Office', '2018-03-10', '2018-03-31', 798787, 'Paket Pernikahan Platinum 1.200 - 2.500', 'Diland', 'On Progres - DP 20.000.000'),
(7, 'Ari Susanto', 'Menara 165', '085772802605', 'iboyxc@gmail.com', 'Walk In', '2018-02-03', '2018-02-22', 1000, 'Wedding', 'Oke', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Administrator','Sales') NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `img`) VALUES
(1, 'sales', '1234', 'Sales', 'sales.png'),
(2, 'admin', '1234', 'Administrator', 'admin.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notic`
--
ALTER TABLE `notic`
  ADD PRIMARY KEY (`id_notic`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notic`
--
ALTER TABLE `notic`
  MODIFY `id_notic` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
