-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2022 at 07:18 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--
CREATE DATABASE IF NOT EXISTS `kampus` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kampus`;

-- --------------------------------------------------------

--
-- Table structure for table `makul`
--

CREATE TABLE `makul` (
  `kdmk` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sks_teori` int(11) NOT NULL,
  `sks_praktek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makul`
--

INSERT INTO `makul` (`kdmk`, `nama`, `sks_teori`, `sks_praktek`) VALUES
('CC-4M41', 'Cloud Computing', 2, 2),
('PMA2-4M41A', 'Pemrograman Mobile 2', 0, 4),
('TPS-4M41', 'Technopreneurship', 4, 0),
('WSA-4M41', 'Web Service Application', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makul`
--
ALTER TABLE `makul`
  ADD PRIMARY KEY (`kdmk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
