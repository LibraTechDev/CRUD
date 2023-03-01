-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 05:13 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prima-todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_prima`
--

CREATE TABLE `kegiatan_prima` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `batas_waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan_prima`
--

INSERT INTO `kegiatan_prima` (`id_kegiatan`, `nama_kegiatan`, `batas_waktu`) VALUES
(32, 'makan roti SEDAP', '3333-02-10'),
(34, 'makan roti enak rafas', '2022-12-31'),
(37, 'GA JADI MBABU', '2000-01-01'),
(38, 'makan roti enak SEDAP SU', '2022-12-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan_prima`
--
ALTER TABLE `kegiatan_prima`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan_prima`
--
ALTER TABLE `kegiatan_prima`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
