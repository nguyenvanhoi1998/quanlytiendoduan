-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlytiendosinhvienthuctap`
--

-- --------------------------------------------------------

--
-- Table structure for table `duan`
--

CREATE TABLE `duan` (
  `id` int(11) NOT NULL,
  `ma_duan` varchar(20) NOT NULL,
  `ten_duan` text NOT NULL,
  `start_duan` varchar(15) NOT NULL,
  `end_duan` varchar(15) NOT NULL,
  `tiendo_duan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `duan`
--

INSERT INTO `duan` (`id`, `ma_duan`, `ten_duan`, `start_duan`, `end_duan`, `tiendo_duan`) VALUES
(7, 'Duan01', 'Tạo module quản lý tiến độ dự án', '2021,06,14', '2021,07,14', 85);

-- --------------------------------------------------------

--
-- Table structure for table `duancon`
--

CREATE TABLE `duancon` (
  `id` int(11) NOT NULL,
  `ma_duancon` varchar(20) NOT NULL,
  `ten_duancon` text NOT NULL,
  `start_duancon` varchar(15) NOT NULL,
  `end_duancon` varchar(15) NOT NULL,
  `tiendo_duancon` int(11) NOT NULL,
  `ma_duancha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `duancon`
--

INSERT INTO `duancon` (`id`, `ma_duancon`, `ten_duancon`, `start_duancon`, `end_duancon`, `tiendo_duancon`, `ma_duancha`) VALUES
(2, 'Chay01', 'Tìm hiểu các công cụ liên quan đến module', '2021,06,14', '2021,06,21', 70, 'Duan01'),
(3, 'Chay02', 'Tiếp tục hoàn thiện module', '2021,06,21', '2021,06,27', 80, 'Duan01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`id`,`ma_duan`);

--
-- Indexes for table `duancon`
--
ALTER TABLE `duancon`
  ADD PRIMARY KEY (`id`,`ma_duancon`),
  ADD KEY `ma_duan` (`ma_duancha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duan`
--
ALTER TABLE `duan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `duancon`
--
ALTER TABLE `duancon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
