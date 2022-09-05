-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 03:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_masuk`
--

CREATE TABLE `data_masuk` (
  `nik` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_diagnosa` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_masuk`
--

INSERT INTO `data_masuk` (`nik`, `nama`, `tgl_diagnosa`, `keterangan`) VALUES
('325467819763412', 'Alfarizky Maulana Putra Wahyudi', '2022-05-04', 'fhhrhtx'),
('676543567898765', 'EHEHEE', '2022-02-17', 'GA TAU'),
('337410220505000', 'berita', '2022-04-05', 'fhhrhtx'),
('676543567898799', 'EHEHEE', '2022-05-04', 'GA TAU'),
('325467819763412', 'bukutamu', '2022-05-20', 'fhhrhtx');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `no_hp` bigint(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `fullname`, `agama`, `no_hp`) VALUES
(0, 'admin', 'admin', 'aswrt@gmail.com', 'aezer', 'ueijf', 47692167),
(0, 'tetete', 'S3mbarang', 'fqwgw@gmail.com', 'aewrw', 'atheis', 454645786078);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
