-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2019 lúc 11:35 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thucthan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tt`
--

CREATE TABLE `tt` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `bac` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `cottruyen` varchar(50) DEFAULT NULL,
  `noidung` text,
  `hinhmobile` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tt`
--

INSERT INTO `tt` (`id`, `ten`, `bac`, `hinhanh`, `cottruyen`, `noidung`, `hinhmobile`) VALUES
(1, 'Shiranui', 'SSR', 'shi.webp', '[Truy Hội Ức Quyển] Dạ Ca Tinh Hỏa. ', '\r\nỞ phía đông thành Yoshiwara, truyền thuyết về đại yêu quái Bất Tri Hỏa đang được bàn tán xôn xao. Nghe đồn rằng vào một đêm trăng non, phía trên vịnh ngọai thành Yoshiwara, sẽ bất ngờ xuất hiện một con đại yêu quái', 'bg2.png'),
(2, 'Onikiri', 'SSR', 'thiet.webp', 'Test', 'Test', 'bg4.png'),
(3, 'Higanbana', 'SSR', 'bi.png', 'TEST', 'TEST', 'bg3.png'),
(4, 'Kaoru', 'SR', 'huan.png', 'TEST', 'TEST', 'bg5.png'),
(5, 'Juzu', 'R', 'sochau.png', 'Test', 'Test', 'bg6.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tt`
--
ALTER TABLE `tt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ten` (`ten`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tt`
--
ALTER TABLE `tt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
