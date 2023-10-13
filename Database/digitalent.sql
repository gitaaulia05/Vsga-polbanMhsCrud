-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 08:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalent`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_siswa`
--

CREATE TABLE `daftar_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `sekolah_asal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_siswa`
--

INSERT INTO `daftar_siswa` (`id_siswa`, `nama`, `alamat`, `jenkel`, `agama`, `sekolah_asal`) VALUES
(1, 'Medi Noviana', 'Depok', 'Laki-laki', 'Islam', 'SMKN 4 DEPOK'),
(2, 'Medi Noviana', 'Depok', 'Laki-laki', 'Islam', 'SMKN 4 DEPOK'),
(3, 'Arion', 'Depok', 'Laki-laki', 'Kristen', 'SMKN 4 DEPOK'),
(4, 'Alec', 'Depok', 'Laki-laki', 'Hindu', 'SMKN 4 DEPOK'),
(5, 'Valen', 'Depok', 'Perempuan', 'Hindu', 'SMKN 4 DEPOK'),
(6, 'Cashel', 'Depok', 'Perempuan', 'Kristen', 'SMKN 4 DEPOK'),
(7, 'Evelyn', 'Depok', 'Perempuan', 'Kristen', 'SMKN 4 DEPOK'),
(8, 'Emily', 'Depok', 'Perempuan', 'Hindu', 'SMKN 4 DEPOK'),
(9, 'Lily', 'Depok', 'Perempuan', 'Hindu', 'SMKN 4 DEPOK'),
(10, 'Stella', 'Depok', 'Perempuan', 'Islam', 'SMKN 4 DEPOK'),
(11, 'Aiden', 'Jakarta', 'Laki-laki', 'Kristen', 'SMKN 47 JAKARTA'),
(12, 'Liam', 'Jakarta', 'Laki-laki', 'Islam', 'SMKN 47 JAKARTA'),
(13, 'William', 'Jakarta', 'Laki-laki', 'Islam', 'SMKN 47 JAKARTA'),
(14, 'Matthew', 'Jakarta', 'Laki-laki', 'Islam', 'SMKN 47 JAKARTA'),
(15, 'Gabriel', 'Jakarta', 'Laki-laki', 'Konghucu', 'SMKN 47 JAKARTA'),
(16, 'Savannah', 'Jakarta', 'Perempuan', 'Islam', 'SMKN 47 JAKARTA'),
(17, 'Ellie', 'Jakarta', 'Perempuan', 'Islam', 'SMKN 47 JAKARTA'),
(18, 'Penelope', 'Jakarta', 'Perempuan', 'Kristen', 'SMKN 47 JAKARTA'),
(19, 'Zoey', 'Jakarta', 'Perempuan', 'Islam', 'SMKN 47 JAKARTA'),
(20, 'Hannah', 'Jakarta', 'Perempuan', 'Islam', 'SMKN 47 JAKARTA'),
(21, 'Logan', 'Bandung', 'Laki-laki', 'Kristen', 'SMAN 1 BANDUNG'),
(22, 'Ethan', 'Bandung', 'Laki-laki', 'Kristen', 'SMAN 1 BANDUNG'),
(23, 'Owen', 'Bandung', 'Laki-laki', 'Kristen', 'SMAN 1 BANDUNG'),
(24, 'Jackson', 'Bandung', 'Laki-laki', 'Hindu', 'SMAN 1 BANDUNG'),
(25, 'Christopher', 'Bandung', 'Laki-laki', 'Islam', 'SMAN 1 BANDUNG'),
(26, 'Charlotte', 'Bandung', 'Perempuan', 'Islam', 'SMAN 1 BANDUNG'),
(27, 'Grace', 'Bandung', 'Perempuan', 'Islam', 'SMAN 1 BANDUNG'),
(28, 'Olivia', 'Bandung', 'Perempuan', 'Islam', 'SMAN 1 BANDUNG'),
(29, 'Victoria', 'Bandung', 'Perempuan', 'Konghucu', 'SMAN 1 BANDUNG'),
(30, 'Addison', 'Bandung', 'Perempuan', 'Hindu', 'SMAN 1 BANDUNG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'siswa', '$2y$10$oGYGd/JxgLyZN7W01VXLbeJPLwdqwB.C9QekZn5L/JNqutIEZM/fW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
