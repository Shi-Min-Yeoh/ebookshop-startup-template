-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 11:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `IDAdmin` varchar(50) NOT NULL,
  `NamaAdmin` varchar(50) NOT NULL,
  `EmelAdmin` varchar(100) NOT NULL,
  `KtlaluanAdmin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`IDAdmin`, `NamaAdmin`, `EmelAdmin`, `KtlaluanAdmin`) VALUES
('A01', 'Zayne', 'zayne@hotmail.com', 'Zayne123'),
('A02', 'Jasmine', 'jasmin@hotmail.com', 'jasmine123'),
('A03', 'Jonathan', 'jonathan@hotmail.com', 'jonathan123');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `IDBuku` varchar(4) NOT NULL,
  `NamaBuku` varchar(100) NOT NULL,
  `Harga` decimal(10,2) NOT NULL,
  `Penulis` varchar(100) NOT NULL,
  `TahunTerbitan` year(4) NOT NULL,
  `IDJenis` varchar(4) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `IDJenis` varchar(50) NOT NULL,
  `NamaJenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`IDJenis`, `NamaJenis`) VALUES
('J001', 'Novel'),
('J002', 'Light Novel'),
('J003 ', 'Komik');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `IDPengguna` varchar(4) NOT NULL,
  `NamaPengguna` varchar(100) NOT NULL,
  `EmelPengguna` varchar(100) NOT NULL,
  `KtlaluanPengguna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`IDPengguna`, `NamaPengguna`, `EmelPengguna`, `KtlaluanPengguna`) VALUES
('P001', 'Ahmad', 'Ahmad@hotmail.com', 'Ahmad123'),
('P002', 'Adam', 'adam@hotmail.com', 'adam123');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `IDBuku` varchar(4) NOT NULL,
  `IDPengguna` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IDAdmin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`IDBuku`),
  ADD KEY `IDJenis` (`IDJenis`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`IDJenis`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`IDPengguna`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD KEY `IDBuku` (`IDBuku`),
  ADD KEY `IDPengguna` (`IDPengguna`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`IDJenis`) REFERENCES `jenis` (`IDJenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`IDBuku`) REFERENCES `buku` (`IDBuku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`IDPengguna`) REFERENCES `pengguna` (`IDPengguna`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
