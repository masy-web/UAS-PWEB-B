-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 10:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_satwa1`
--

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id` int(11) NOT NULL,
  `nama_hewan` varchar(50) NOT NULL,
  `nama_latin` varchar(50) DEFAULT NULL,
  `habitat` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `jenis_id` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id`, `nama_hewan`, `nama_latin`, `habitat`, `status`, `jenis_id`, `jumlah`) VALUES
(1, 'Anoa', 'Bubalus sp.', 'Hutan Hujan', 'Endagengered', 1, 1000),
(2, 'Babi Rusa', 'Babyrousa', 'Rawa', 'Critically Endangered', 1, 100),
(7, 'Harimau Jawa', 'Panthera tigris sondaica', 'Hutan dataran rendah', 'Punah', 1, 0),
(10, 'Komodo', 'Varanus komodoensis', 'Tanah tandus', 'Dilindungi', 3, 5700),
(11, 'Burung Jalak Bali', 'Leucopsar rothschildi', 'Hutan mangrove', 'Critically Endangered', 2, 303),
(12, 'Kucing Merah', 'Catopuma badia', 'dataran rendah', 'Vulnerable', 1, 2500),
(13, 'Kucing Bakau', 'Prionailurus viverrinus', 'Hutan Bakau', 'Vulnerable', 1, 2000),
(14, 'Elang Flores', 'Nisaetus flores', 'Hutan dataran rendah', 'Critically Endangered', 2, 240),
(15, 'Kura-kura Leher Ular ', 'Chelodina mccordi', 'Danau peto', 'Critically Endangered', 3, 26),
(16, 'Orangutan', 'Pongo', 'Hutan hujan tropis dan hutan tanah gambut', 'Critically Endangered', 1, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `jenis_hewan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `jenis_hewan`) VALUES
(1, 'Mamalia'),
(2, 'Aves'),
(3, 'Reptil'),
(61, 'Amfibi'),
(62, 'Insecta');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(2, 'Arif Rahman', 'arif', '202cb962ac59075b964b07152d234b70'),
(4, 'Masyhuri Farhan', 'masyhuri', '94c36ae6c664614dd5f150cfdc91b8d7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`jenis_id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hewan`
--
ALTER TABLE `hewan`
  ADD CONSTRAINT `hewan_ibfk_1` FOREIGN KEY (`jenis_id`) REFERENCES `jenis` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
