-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 28, 2021 lúc 04:04 PM
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
  `start_duan` date NOT NULL,
  `end_duan` date NOT NULL,
  `tiendo_duan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `duan`
--

INSERT INTO `duan` (`id`, `ma_duan`, `ten_duan`, `start_duan`, `end_duan`, `tiendo_duan`) VALUES
(16, 'Duan01', 'Tạo module quản lý tiến độ dự án', '2021-06-14', '2021-08-06', 16),
(26, 'Duan02', 'Tạo module thêm dự án của đề tài', '2021-05-04', '2021-06-05', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duancon`
--

CREATE TABLE `duancon` (
  `id` int(11) NOT NULL,
  `ma_duancon` varchar(20) NOT NULL,
  `ten_duancon` text NOT NULL,
  `start_duancon` date NOT NULL,
  `end_duancon` date NOT NULL,
  `tiendo_duancon` int(3) NOT NULL,
  `ma_duancha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `duancon`
--

INSERT INTO `duancon` (`id`, `ma_duancon`, `ten_duancon`, `start_duancon`, `end_duancon`, `tiendo_duancon`, `ma_duancha`) VALUES
(9, 'Chay01', 'Tìm hiểu công cụ github', '2021-06-14', '2021-06-20', 20, 'Duan01'),
(16, 'Chay02', 'Tìm hiểu google chart', '2021-06-21', '2021-06-27', 30, 'Duan01'),
(17, 'Chay03', 'Bổ sung các tính năng thêm, sửa, xoá', '2021-06-28', '2021-07-04', 40, 'Duan01'),
(18, 'Chay04', 'Tạo task con', '2021-07-05', '2021-07-11', 35, 'Duan01'),
(19, 'Chay05', 'Xây dựng giao diện', '2021-07-12', '2021-07-18', 5, 'Duan01'),
(20, 'Chay06', 'Hoàn thiện các tính năng', '2021-07-19', '2021-07-25', 0, 'Duan01'),
(21, 'Chay07', 'Tiếp tục chỉnh sửa website', '2021-07-26', '2021-08-01', 0, 'Duan01'),
(22, 'Chay08', 'Hoàn thiện Website, hoàn thiện hồ sơ thực tập', '2021-08-02', '2021-08-06', 0, 'Duan01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fileduan`
--

CREATE TABLE `fileduan` (
  `stt` int(11) NOT NULL,
  `ma_duan` varchar(20) NOT NULL,
  `tenfile` text NOT NULL,
  `kieufile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `fileduan`
--

INSERT INTO `fileduan` (`stt`, `ma_duan`, `tenfile`, `kieufile`) VALUES
(15, 'Chay01', '2021_CVDi-016_Ke hoach TTTT HK3 2020-2021.pdf', 'application/pdf'),
(17, 'Duan01', '2021_CVDi-016_Ke hoach TTTT HK3 2020-2021.pdf', 'application/pdf'),
(18, 'Duan01', 'Sinh hoạt TTTT 08-06-2021.pdf', 'application/pdf'),
(19, 'Chay01', 'Sinh hoạt TTTT 08-06-2021.pdf', 'application/pdf'),
(20, 'Chay02', 'Sinh hoạt TTTT 08-06-2021.pdf', 'application/pdf'),
(21, 'Chay02', '2021_CVDi-016_Ke hoach TTTT HK3 2020-2021.pdf', 'application/pdf'),
(22, 'Duan01', 'Phieugiaoviec.pdf', 'application/pdf'),
(23, 'Chay03', 'Sinh hoạt TTTT 08-06-2021.pdf', 'application/pdf'),
(24, 'Chay03', '2021_CVDi-016_Ke hoach TTTT HK3 2020-2021.pdf', 'application/pdf'),
(25, 'Chay04', 'Sinh hoạt TTTT 08-06-2021.pdf', 'application/pdf'),
(26, 'Chay04', '2021_CVDi-016_Ke hoach TTTT HK3 2020-2021.pdf', 'application/pdf'),
(27, 'Chay05', 'Sinh hoạt TTTT 08-06-2021.pdf', 'application/pdf'),
(28, 'Chay05', '2021_CVDi-016_Ke hoach TTTT HK3 2020-2021.pdf', 'application/pdf'),
(29, 'Chay06', 'Sinh hoạt TTTT 08-06-2021.pdf', 'application/pdf'),
(30, 'Chay06', '2021_CVDi-016_Ke hoach TTTT HK3 2020-2021.pdf', 'application/pdf'),
(31, 'Chay07', 'Sinh hoạt TTTT 08-06-2021.pdf', 'application/pdf'),
(32, 'Chay07', '2021_CVDi-016_Ke hoach TTTT HK3 2020-2021.pdf', 'application/pdf'),
(33, 'Chay08', 'Sinh hoạt TTTT 08-06-2021.pdf', 'application/pdf'),
(34, 'Chay08', '2021_CVDi-016_Ke hoach TTTT HK3 2020-2021.pdf', 'application/pdf');

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
-- Chỉ mục cho bảng `fileduan`
--
ALTER TABLE `fileduan`
  ADD PRIMARY KEY (`stt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `duan`
--
ALTER TABLE `duan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `duancon`
--
ALTER TABLE `duancon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `fileduan`
--
ALTER TABLE `fileduan`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
