-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 04:02 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azin`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(255) NOT NULL,
  `nik_dosen` int(255) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `alamat_dosen` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `skill_dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nik_dosen`, `nama_dosen`, `alamat_dosen`, `jenis_kelamin`, `skill_dosen`) VALUES
(3, 234234234, '2342342', '34234234', 'Perempuan', 'Nyuntik'),
(4, 2342, '34234', '234234', 'Laki-laki', 'Nyuntik'),
(5, 53333, 'qq', 'qq', 'qq', 'qq');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `password`) VALUES
(1, 'azin', 'azin', 'b752145f0b3d345b35de9e2a5acb2634'),
(2, 'aa', 'aa', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'aa', 'aa', '46c9e2ad5b69bffd74d6919c7e4744bd'),
(4, 'aa', 'aa', '4124bc0a9335c27f086f24ba207a4912'),
(5, 'aa', 'aa', '4124bc0a9335c27f086f24ba207a4912'),
(6, 'aa', 'aa', '4124bc0a9335c27f086f24ba207a4912'),
(7, 'aa', 'aa', '4124bc0a9335c27f086f24ba207a4912'),
(8, 'aa', 'aa', '4124bc0a9335c27f086f24ba207a4912'),
(9, 'aa', 'aa', '4124bc0a9335c27f086f24ba207a4912'),
(10, 'aa', 'aa', '4124bc0a9335c27f086f24ba207a4912');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
