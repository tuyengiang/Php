-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 05:37 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_sach`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_danhmuc`
--

CREATE TABLE IF NOT EXISTS `t_danhmuc` (
  `id` int(11) NOT NULL,
  `madm` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tendm` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_danhmuc`
--

INSERT INTO `t_danhmuc` (`id`, `madm`, `tendm`) VALUES
(1, 'S01', 'Bút ký'),
(2, 'S02', 'Truyện tranh'),
(3, 'S03', 'Tiểu thuyết'),
(4, 'S04', 'Truyện ngắn'),
(5, 'S05', 'Học tập'),
(6, 'S06', 'Khoa học'),
(7, 'S07', 'Tự nhiên'),
(8, 'S08', 'Văn học');

-- --------------------------------------------------------

--
-- Table structure for table `t_sach`
--

CREATE TABLE IF NOT EXISTS `t_sach` (
  `id` int(11) NOT NULL,
  `masach` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tensach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sotrang` int(11) NOT NULL,
  `namxb` int(11) NOT NULL,
  `nxb` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `madm` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_sach`
--

INSERT INTO `t_sach` (`id`, `masach`, `tensach`, `tacgia`, `sotrang`, `namxb`, `nxb`, `madm`) VALUES
(3, '', '', '', 0, 0, '', 0),
(4, '', '', '', 0, 0, '', 0),
(5, '', '', '', 0, 0, '', 0),
(6, 'M02', 'Toán', 'Tuyển giảng', 1000, 2005, 'Kim dồng', 5),
(7, 'M03', 'Toán cao cấp', 'Tuyển giảng', 1000, 2005, 'Kim dồng', 5),
(8, 'M04', 'Khoa học tự nhiên', 'Tuyển giảng', 100, 2017, 'Khoa học', 6),
(9, 'M05', 'Nhất niệm vĩnh hằng', 'Mai thiên', 1000, 2016, 'Cổ thiên lạc', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_danhmuc`
--
ALTER TABLE `t_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sach`
--
ALTER TABLE `t_sach`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_danhmuc`
--
ALTER TABLE `t_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_sach`
--
ALTER TABLE `t_sach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
