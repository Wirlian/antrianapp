-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 07:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `no_antrian` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `waktu_panggil` timestamp NULL DEFAULT NULL,
  `waktu_selesai` timestamp NULL DEFAULT NULL,
  `pelayanan_id` int(11) NOT NULL,
  `loket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `tanggal`, `no_antrian`, `status`, `waktu_panggil`, `waktu_selesai`, `pelayanan_id`, `loket_id`) VALUES
(1, '2022-07-13 06:48:39', 1, 0, NULL, NULL, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_antrian_pelayanan1_idx` (`pelayanan_id`),
  ADD KEY `fk_antrian_loket1_idx` (`loket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `fk_antrian_loket1_idx` FOREIGN KEY (`loket_id`) REFERENCES `loket` (`id`),
  ADD CONSTRAINT `fk_antrian_pelayanan1_idx` FOREIGN KEY (`pelayanan_id`) REFERENCES `pelayanan` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
