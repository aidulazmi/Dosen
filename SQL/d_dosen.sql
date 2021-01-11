-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 07:15 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('admin','dosen','kajur') NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `status`, `nama_lengkap`, `nip`) VALUES
(1, 'admin', 'admin', 'admin', 'adminbro', '122554477'),
(3, 'dosen', 'dosen', 'dosen', 'dosen', '25211455663212452'),
(4, 'kajur', 'kajur', 'kajur', 'kajur', '123332245'),
(6, 'dosen1', 'dosen1', 'dosen', 'dosen1', '12');

-- --------------------------------------------------------

--
-- Table structure for table `akademik`
--

CREATE TABLE `akademik` (
  `id_akademik` int(11) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `jurusan` enum('SIF','TIF','Mater','TE') NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akademik`
--

INSERT INTO `akademik` (`id_akademik`, `matakuliah`, `jurusan`, `sks`) VALUES
(2, 'Bahasa Indonesia', 'Mater', 3),
(5, 'MTK', 'TIF', 2),
(9, 'Bahasa Inggris', 'SIF', 3),
(10, 'Management Projek', 'SIF', 4),
(11, 'Sistem Informasi Management', 'SIF', 4),
(12, 'Apmob', 'TIF', 3),
(13, 'Aplikasi Mobile 3', 'SIF', 4),
(14, 'Pemograman WEB', 'TIF', 6),
(15, 'Menghitung Gaya', 'Mater', 4),
(16, 'Menghitung Bangunan', 'Mater', 2),
(17, 'Menghitung Tengangan Listrik', 'TE', 6),
(18, 'Menghitung Daya Robot', 'TE', 6),
(19, 'Analisa Perancangan Robotic', 'TE', 4),
(20, 'Jaringan Komputer', 'TIF', 6);

-- --------------------------------------------------------

--
-- Table structure for table `badlb`
--

CREATE TABLE `badlb` (
  `id_bad_lb` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `semester` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `badlb`
--

INSERT INTO `badlb` (`id_bad_lb`, `nip`, `matakuliah`, `kelas`, `semester`) VALUES
(4, 2147483647, 'Bahasa Indonesia', 'Kelas A', '1'),
(6, 2147483647, 'MTK', 'Kelas M', '14'),
(7, 2147483647, 'Bahasa Indonesia', 'Kelas L', '13'),
(8, 2147483647, 'Bahasa Indonesia', 'Kelas N', '4'),
(9, 2147483647, 'Bahasa Indonesia', 'Kelas M', '12'),
(10, 1125554, 'Bahasa Indonesia', 'Kelas J', '11'),
(12, 1125554, 'Bahasa Indonesia', 'Kelas K', '12');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nip` int(11) NOT NULL,
  `PGKT` varchar(50) NOT NULL,
  `tugas_lain` varchar(2000) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(2555) NOT NULL,
  `email` varchar(2555) NOT NULL,
  `status` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `username`, `nip`, `PGKT`, `tugas_lain`, `no_hp`, `alamat`, `email`, `status`) VALUES
(1, 'DazTek', 2147483647, '2015', 'Dekan', '0852441144111', 'Jl. Rumah', 'defdul10@gmail.com', 'PNS'),
(3, 'Syukron', 1125554, '2017', 'Dosen', '08522144111', 'Jl. Kemayoran', 'c@fghg.com', 'PNS');

-- --------------------------------------------------------

--
-- Table structure for table `tbad`
--

CREATE TABLE `tbad` (
  `id_bad` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `semester` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbad`
--

INSERT INTO `tbad` (`id_bad`, `nip`, `matakuliah`, `kelas`, `semester`) VALUES
(3, 1125554, 'Bahasa Indonesia', 'Kelas K', '1'),
(4, 1125554, 'MTK', 'Kelas G', '9'),
(5, 1125554, 'MTK', 'Kelas N', '11'),
(6, 1125554, 'Bahasa Indonesia', 'Kelas H', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `akademik`
--
ALTER TABLE `akademik`
  ADD PRIMARY KEY (`id_akademik`);

--
-- Indexes for table `badlb`
--
ALTER TABLE `badlb`
  ADD PRIMARY KEY (`id_bad_lb`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tbad`
--
ALTER TABLE `tbad`
  ADD PRIMARY KEY (`id_bad`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `akademik`
--
ALTER TABLE `akademik`
  MODIFY `id_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `badlb`
--
ALTER TABLE `badlb`
  MODIFY `id_bad_lb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbad`
--
ALTER TABLE `tbad`
  MODIFY `id_bad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
