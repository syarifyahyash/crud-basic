-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 06:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2021_belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `footballer`
--

CREATE TABLE `footballer` (
  `id_footballer` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `klub` varchar(50) NOT NULL,
  `usia` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footballer`
--

INSERT INTO `footballer` (`id_footballer`, `nama`, `negara`, `klub`, `usia`) VALUES
(1, 'syahroney', 'england', 'manchester united', 29),
(5, 'ronis', 'INDONESIAs', 'PERSIBs', 215),
(12, 'rofi\'i', 'INDONESIA', 'PERSIB', 21),
(16, 'nuril', 'afrika', 'manchester united', 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `footballer`
--
ALTER TABLE `footballer`
  ADD PRIMARY KEY (`id_footballer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `footballer`
--
ALTER TABLE `footballer`
  MODIFY `id_footballer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
