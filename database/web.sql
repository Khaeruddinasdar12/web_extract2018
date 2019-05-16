-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 04:26 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `alamat`, `no_telp`) VALUES
(2, 'Abdi Gunawan', 'Abdi', '123', 'Bone', '082344949500'),
(1, 'Khaeruddin Asdar', 'asdar', '123', 'jln Paccerakkan', '082344949505'),
(3, 'rahmat agus nahru', 'rahmat', 'root', 'sukaria 17 ', '085343634613');

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE `judul` (
  `id` int(5) NOT NULL,
  `kode_buku` varchar(10) NOT NULL,
  `judulbuku` varchar(100) NOT NULL,
  `namapengarang` varchar(100) NOT NULL,
  `kodepenerbit` varchar(100) NOT NULL,
  `kategori` int(3) NOT NULL,
  `thn_terbit` int(4) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`id`, `kode_buku`, `judulbuku`, `namapengarang`, `kodepenerbit`, `kategori`, `thn_terbit`, `pdf`) VALUES
(98, 'A1', 'Pemrograman web', 'Rismon', 'Gramedia', 1, 2010, 'EBOOK HTML.pdf'),
(107, 'A10', 'Pemrograman web', 'Rismon', 'Gramedia', 1, 2010, 'EBOOK HTML.pdf'),
(108, 'A11', 'JavaScript ', 'Gusri', 'Erlangga', 1, 2008, '88691-ID-antisipasi-cybercrime-menggunakan-teknik.pdf'),
(99, 'A2', 'Hukum Dan Komputer', 'Ir. Sianipar', 'Gramedia', 1, 2018, 'dan ini_2.pdf'),
(100, 'A3', 'Farmakologi Industri', 'Hamsidar', 'Erlangga', 4, 2012, 'Brown2015vol9issue1.pdf'),
(102, 'A4', 'Farmakologi Industri', 'Hamsidar', 'Erlangga', 4, 2012, 'JURNAL HK11271.pdf'),
(103, 'A5', 'Farmakologi Industri', 'Hamsidar', 'Erlangga', 4, 2012, 'Brown2015vol9issue1.pdf'),
(101, 'A6', 'JavaScript ', 'Gusri', 'Erlangga', 1, 2008, 'Javascript_tuts.pdf'),
(104, 'A7', 'Farmakologi Industri', 'Hamsidar', 'Erlangga', 4, 2012, '7e489ed46eba880af22223fa102f0dbd.pdf'),
(105, 'A8', 'Pemrograman web', 'Rismon', 'Gramedia', 1, 2010, '7e489ed46eba880af22223fa102f0dbd.pdf'),
(106, 'A9', 'Pemrograman web', 'Rismon', 'Gramedia', 1, 2010, '7e489ed46eba880af22223fa102f0dbd.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(3) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `rak` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `rak`) VALUES
(1, 'Komputer        ', 'A1'),
(2, 'Biologi', 'A2'),
(3, 'Pendidikan pancasila', ' A3'),
(4, 'Farmasi', 'A4'),
(5, 'Hukum', 'A6'),
(6, 'Komik', 'A8');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `no_telp`, `alamat`, `nama`) VALUES
('asdar', '12345', '082344090789', 'jln perintis', 'Khaeruddin Asdar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`kode_buku`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `judul`
--
ALTER TABLE `judul`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `judul`
--
ALTER TABLE `judul`
  ADD CONSTRAINT `judul_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
