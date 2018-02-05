-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 01:44 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websiteformulir`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataorang`
--

CREATE TABLE `dataorang` (
  `ID` varchar(100) NOT NULL,
  `NamaLengkap` varchar(30) NOT NULL,
  `TanggalLahir` varchar(2) NOT NULL,
  `BulanLahir` varchar(10) NOT NULL,
  `TahunLahir` varchar(4) NOT NULL,
  `Alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataorang`
--

INSERT INTO `dataorang` (`ID`, `NamaLengkap`, `TanggalLahir`, `BulanLahir`, `TahunLahir`, `Alamat`) VALUES
('hwRlv6HJI8MVBj0kDdbeKsUFqzig9P', 'Ryan Hazizi', '7', 'November', '2000', 'Jalan Sandat VII No 17'),
('VGkTnZPCJlvbIXhAKrawfq9LjsWHu1', 'Andi Firmansyah', '25', 'Oktober', '2000', 'Jalan Nasional Merdeka 5 No 12'),
('WLhfrkG8j4a97FzMp6wlxSJTP3Kn1O', 'Salwa Almeida', '21', 'Mei', '2006', 'Jalan Sandat VII No 17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataorang`
--
ALTER TABLE `dataorang`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
