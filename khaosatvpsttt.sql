-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2024 lúc 05:45 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `khaosatvpsttt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khaosat`
--

CREATE TABLE `khaosat` (
  `id` int(11) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `source` varchar(50) NOT NULL,
  `used` varchar(50) NOT NULL,
  `purpose` text NOT NULL,
  `concerns` varchar(50) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khaosat`
--

INSERT INTO `khaosat` (`id`, `contact`, `source`, `used`, `purpose`, `concerns`, `feedback`) VALUES
(3, 'shin11052017@gmail.com', 'Tìm kiếm Trên Facebook', 'Đã từng sử dụng', 'Treo auto Game 24/24, Mở Server Game/App, Lưu trữ dữ liệu', 'Tốc độ CPU', 'hello');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khaosat`
--
ALTER TABLE `khaosat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khaosat`
--
ALTER TABLE `khaosat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
