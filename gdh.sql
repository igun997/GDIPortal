-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 06:15 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gdh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_terakhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `dibuat`, `login_terakhir`) VALUES
(1, 'Indra Gunanda', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-02-04 12:20:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id_donatur` int(11) NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `tanggal_lhr` date NOT NULL,
  `nomor_tlp` varchar(13) NOT NULL,
  `facebook_ig` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `tempat_bekerja` varchar(30) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id_donatur`, `nama_donatur`, `alamat`, `kota`, `tanggal_lhr`, `nomor_tlp`, `facebook_ig`, `pendidikan_terakhir`, `tempat_bekerja`, `pekerjaan`, `username`, `password`, `status`) VALUES
(1, 'Fake Donatur', 'AAa', 'Banjar', '2018-02-04', '088080', '', '', '', '', 'igun', '4ea35d7cf096fae4baf7c47d3e00aab2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `rangkuman` varchar(250) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `target_biaya` double NOT NULL,
  `mulai_acara` datetime NOT NULL,
  `selesai_acara` datetime NOT NULL,
  `mulai_donasi` datetime NOT NULL,
  `selesai_donasi` datetime NOT NULL,
  `dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `slug`, `judul`, `deskripsi`, `rangkuman`, `gambar`, `target_biaya`, `mulai_acara`, `selesai_acara`, `mulai_donasi`, `selesai_donasi`, `dibuat`, `id_admin`) VALUES
(1, 'contoh-event', 'Test', 'Contoh', 'Contoh', 'fceeb9b9d469401fe558062c4bd25954.jpg', 1000000, '2018-02-08 00:00:00', '2018-02-10 00:00:00', '2018-02-04 00:00:00', '2018-02-08 00:00:00', '2018-02-01 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_donasi`
--

CREATE TABLE `event_donasi` (
  `id_event` int(11) NOT NULL,
  `total_donasi` double NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `status` int(11) DEFAULT '0',
  `tgl_donasi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_donatur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_donasi`
--

INSERT INTO `event_donasi` (`id_event`, `total_donasi`, `bukti`, `status`, `tgl_donasi`, `id_donatur`) VALUES
(1, 100000, 'fceeb9b9d469401fe558062c4bd25954.jpg', 1, '2018-02-02 00:00:00', 1),
(1, 200000, 'as', 1, '2018-02-07 00:00:00', 1),
(1, 100000, 'fceeb9b9d469401fe558062c4bd25954.jpg', 0, '2018-02-04 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `img` varchar(50) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `deskripsi`, `img`, `id_admin`) VALUES
(1, 'Contoh Slider', 'Slider Lala', 'fceeb9b9d469401fe558062c4bd25954.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_admin_fk_artikel` (`id_admin`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `fk_admin` (`id_admin`);

--
-- Indexes for table `event_donasi`
--
ALTER TABLE `event_donasi`
  ADD KEY `fk_tbl_event` (`id_event`),
  ADD KEY `fk_user_donatur` (`id_donatur`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id_donatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_donasi`
--
ALTER TABLE `event_donasi`
  ADD CONSTRAINT `event_donasi_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON UPDATE CASCADE,
  ADD CONSTRAINT `event_donasi_ibfk_2` FOREIGN KEY (`id_donatur`) REFERENCES `donatur` (`id_donatur`) ON UPDATE CASCADE;

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
