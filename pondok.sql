-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2019 at 08:14 PM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pondok`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `jam` varchar(11) NOT NULL,
  `rilis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `user_id`, `gambar`, `status`, `kategori_id`, `jam`, `rilis`) VALUES
(9, 'Gobak Sodor neng Ndeso', '<p>ini adalah olahraga</p>\r\n', 61, '134828.jpg', 1, 18, '10:20 WIB', '2019-01-22'),
(10, 'Bal Balan Jowo', '<p>ini adalah bal balan jowo</p>\r\n', 61, '887824.jpg', 1, 18, '12:59 WIB', '2019-01-21'),
(11, 'Nasi Goreng Basi', '<p>ini adalah nasi goreng</p>\r\n', 60, '759431.jpg', 1, 15, '13:01 WIB', '2019-01-21'),
(12, 'Ndok Asin Bosok', '<p>ini adalah ndok asin bosok</p>\r\n', 60, '548208.jpg', 0, 15, '13:02 WIB', '2019-01-21'),
(14, 'Dolanan Catur', '<p>ini pendidikan dolanan catur</p>\r\n', 62, '452233.jpg', 1, 20, '21:20 WIB', '2019-01-21'),
(15, 'Omah Jowo - Sinau Bahasa Jawa', '<p>ini adalah pendidikan</p>\r\n', 62, '777401.jpg', 0, 20, '20:42 WIB', '2019-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `id_user`) VALUES
(14, 'agama', 60),
(15, 'makanan', 60),
(16, 'pendidikan', 60),
(17, 'kesenian', 61),
(18, 'olahraga', 61),
(19, 'kesenian', 62),
(20, 'pendidikan', 62);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama`) VALUES
(1, 'Admin'),
(2, 'Penulis');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `photo`, `role_id`) VALUES
(60, 'Suryo Widiyanto', 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '5336024.jpg', 1),
(61, 'Anonim', 'anonim@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '4564604.jpg', 1),
(62, 'Muslim', 'muslim@aku.com', 'c4ca4238a0b923820dcc509a6f75849b', '2127181.jpg', 2),
(65, 'Owl', 'owl@gg.com', 'c4ca4238a0b923820dcc509a6f75849b', '9269858.jpg', 2),
(68, 'Lexandra', 'lexa@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1342500.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
