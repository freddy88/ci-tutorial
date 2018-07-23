-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2018 at 10:29 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `training_ci_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE `kereta` (
  `id_kereta` int(10) NOT NULL,
  `jenis_kereta` varchar(255) NOT NULL,
  `jenama_kereta` varchar(255) NOT NULL,
  `warna_kereta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kereta`
--

INSERT INTO `kereta` (`id_kereta`, `jenis_kereta`, `jenama_kereta`, `warna_kereta`) VALUES
(1, 'Ertiga', 'Proton', 'Putih'),
(2, 'Alza', 'Perodua', 'Maroon'),
(3, 'Hilux', 'Toyota', 'Hitam'),
(4, 'Persona', 'Proton', 'Biru'),
(6, 'Preve', 'Proton', 'Putih'),
(7, 'Axia', 'Perodua', 'Merah'),
(8, 'Iriz', 'Proton', 'Putih'),
(13, 'City', 'Honda', 'Biru'),
(15, 'Jazz', 'Honda', 'Merah'),
(16, 'Civic', 'Honda', 'Putih'),
(17, 'Wira', 'Proton', 'Kelabu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`id_kereta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kereta`
--
ALTER TABLE `kereta`
  MODIFY `id_kereta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
