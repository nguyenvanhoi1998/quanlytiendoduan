-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2021 lúc 09:58 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlytiendosinhvienthuctap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duan`
--

CREATE TABLE `duan` (
  `id` int(11) NOT NULL,
  `ma_duan` varchar(20) NOT NULL,
  `ten_duan` text NOT NULL,
  `start_duan` varchar(15) NOT NULL,
  `end_duan` varchar(15) NOT NULL,
  `tiendo_duan` int(11) NOT NULL,
  `file_duan` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `duan`
--

INSERT INTO `duan` (`id`, `ma_duan`, `ten_duan`, `start_duan`, `end_duan`, `tiendo_duan`, `file_duan`) VALUES
(7, 'Duan01', 'Tạo module quản lý tiến độ dự án', '2021,06,14', '2021,07,14', 85, 0x2e2f66696c656475616e2f323032315f435644692d3031365f4b6520686f616368205454545420484b3320323032302d323032312e706466);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duancon`
--

CREATE TABLE `duancon` (
  `id` int(11) NOT NULL,
  `ma_duancon` varchar(20) NOT NULL,
  `ten_duancon` text NOT NULL,
  `start_duancon` varchar(15) NOT NULL,
  `end_duancon` varchar(15) NOT NULL,
  `tiendo_duancon` int(11) NOT NULL,
  `file_duancon` longblob NOT NULL,
  `ma_duancha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `duancon`
--

INSERT INTO `duancon` (`id`, `ma_duancon`, `ten_duancon`, `start_duancon`, `end_duancon`, `tiendo_duancon`, `file_duancon`, `ma_duancha`) VALUES
(2, 'Chay01', 'Tìm hiểu các công cụ liên quan đến module', '2021,06,14', '2021,06,21', 70, 0x2e2f66696c656475616e2f323032315f435644692d3031365f4b6520686f616368205454545420484b3320323032302d323032312e706466, 'Duan01'),
(3, 'Chay02', 'Tiếp tục hoàn thiện module', '2021,06,21', '2021,06,27', 80, 0x2e2f66696c656475616e2f323032315f435644692d3031365f4b6520686f616368205454545420484b3320323032302d323032312e706466, 'Duan01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`id`,`ma_duan`);

--
-- Chỉ mục cho bảng `duancon`
--
ALTER TABLE `duancon`
  ADD PRIMARY KEY (`id`,`ma_duancon`),
  ADD KEY `ma_duan` (`ma_duancha`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `duan`
--
ALTER TABLE `duan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `duancon`
--
ALTER TABLE `duancon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
