-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 17, 2018 lúc 04:25 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thegioididong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hang_hoa`
--

CREATE TABLE `chi_tiet_hang_hoa` (
  `ma_hh` varchar(7) NOT NULL,
  `anh` text NOT NULL,
  `man_hinh` text NOT NULL,
  `hdh` text NOT NULL,
  `camera_sau` text NOT NULL,
  `camera_truoc` text NOT NULL,
  `cpu` text NOT NULL,
  `ram` text NOT NULL,
  `bo_nho_trong` text NOT NULL,
  `the_nho` text,
  `sim` text,
  `pin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_hang_hoa`
--

INSERT INTO `chi_tiet_hang_hoa` (`ma_hh`, `anh`, `man_hinh`, `hdh`, `camera_sau`, `camera_truoc`, `cpu`, `ram`, `bo_nho_trong`, `the_nho`, `sim`, `pin`) VALUES
('HW001', 'hua3.0.PNG@hua3.1.PNG@hua3.2.PNG@hua3.3.PNG@huawei-nova-3e-2-400x460.png@', 'IPS LCD, 5.84\", Full HD+', 'Android 8.0 (Oreo)', '16 MP vÃ  2 MP (2 camera)', '16 MP', 'HiSilicon Kirin 659 8 nhÃ¢n', '4 GB', '64 GB', 'MicroSD, há»— trá»£ tá»‘i Ä‘a 256 GB', '2 Nano SIM, Há»— trá»£ 4G', '3000 mAh'),
('HW002', 'hua7.0.PNG@hua7.1.PNG@hua7.2.PNG@hua7.3.PNG@huawei-y7-prime-400x460.png@', 'IPS LCD, 5.5\", HD', 'Android 7.0 (Nougat)', '12 MP', '8 MP', 'Snapdragon 435 8 nhÃ¢n', '3 GB', '32 GB', 'MicroSD, há»— trá»£ tá»‘i Ä‘a 256 GB', '2 Nano SIM, Há»— trá»£ 4G', '4000 mAh'),
('IP001', 'iphone6.0.PNG@iphone6.1.PNG@iphone6.2.PNG@iphone6.3.PNG@iphone-6-32gb-vang-400-400x460.png@', 'LED-backlit IPS LCD, 4.7\", Retina HD', 'iOS 11', '8 MP', '1.2 MP', 'Apple A8 2 nhÃ¢n 64-bit', '1 GB', '32 GB', '', ' 1 Nano SIM, Há»— trá»£ 4G', '1810 mAh'),
('IP002', 'IP6.0.PNG@IP6.1.PNG@IP6.3.PNG@IP6.4.PNG@iphone-6s-plus-32gb-400x450-400x450.png@', 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '12 MP', '5 MP', 'Apple A9 2 nhÃ¢n 64-bit', '2 GB', '32 GB', '', '1 Nano SIM, Há»— trá»£ 4G', '2750 mAh'),
('IP003', 'ipx1.0.PNG@ipx1.1.PNG@ipx1.2.PNG@ipx1.3.PNG@iphone-x-256gb-h2-400x460.png@', 'OLED, 5.8\", Super Retina', 'iOS 11', '2 camera 12 MP', '7 MP', 'Apple A11 Bionic 6 nhÃ¢n', '3 GB', '256 GB', '', '1 Nano SIM, Há»— trá»£ 4G', '2716 mAh'),
('IP004', 'ipx2.0.PNG@ipx2.1.PNG@ipx2.2.PNG@ipx2.3.PNG@iphone-x-64gb-h1-400x460-400x460.png@', 'OLED, 5.8\", Super Retina', 'iOS 11', '2 camera 12 MP', '7 MP', 'Apple A11 Bionic 6 nhÃ¢n', '3 GB', '64 GB', '', '1 Nano SIM, Há»— trá»£ 4G', '2716 mAh'),
('NO001', 'No1.0.PNG@No1.1.PNG@No1.2.PNG@No1.3.PNG@nokia-6-400x460.png@', 'IPS LCD, 5.5\", Full HD', 'Android 7.0 (Nougat)', '16 MP', '8 MP', 'Qualcomm Snapdragon 430 8 nhÃ¢n 64 bit', '3 GB', '32 GB', 'MicroSD, há»— trá»£ tá»‘i Ä‘a 128 GB', '2 SIM Nano (SIM 2 chung khe tháº» nhá»›), Há»— trá»£ 4G', '3000 mAh'),
('NO002', 'no5.0.PNG@no5.1.PNG@no5.2.PNG@no5.3.PNG@nokia-5-2-400x460.png@', 'IPS LCD, 5.2\", HD', 'Android 7.1 (Nougat)', '13 MP', '8 MP', 'Qualcomm Snapdragon 430 8 nhÃ¢n 64 bit', '2 GB', '16 GB', 'MicroSD, há»— trá»£ tá»‘i Ä‘a 128 GB', '2 Nano SIM, Há»— trá»£ 4G', '3000 mAh'),
('OP001', 'op5.2.PNG@opf5.0.PNG@opf5.1.PNG@opf5.3.PNG@oppo-f5-youth-vang-hong-6002-400x460.png@', 'IPS LCD, 6.0\", Full HD+', 'ColorOS 3.2 (Android 7.1)', '13 MP', '16 MP', 'Mediatek Helio P23', '3 GB', '32 GB', 'MicroSD, há»— trá»£ tá»‘i Ä‘a 256 GB', '2 Nano SIM, Há»— trá»£ 4G', '3200 mAh'),
('OP002', 'oppf5.0.PNG@oppf5.1.PNG@oppf5.2.PNG@oppf5.3.PNG@oppo-f5-6gb-a-2-400x460.png@', 'IPS LCD, 6.0\", Full HD+', 'ColorOS 3.2 (Android 7.1)', '16 MP', '20 MP', 'Mediatek Helio P23', '6 GB', '64 GB', 'MicroSD, há»— trá»£ tá»‘i Ä‘a 256 GB', '2 Nano SIM, Há»— trá»£ 4G', '3200 mAh'),
('SN001', 'sony1.0.PNG@sony1.1.PNG@sony1.2.PNG@sony1.3.PNG@sony-xperia-xz-premium-1-400x460.png@', 'IPS LCD, 5.5\", Ultra HD (4K)', 'Android 8.0 (Oreo)', '19 MP', '13 MP', 'Qualcomm Snapdragon 835 8 nhÃ¢n 64-bit', '4 GB', '64 GB', 'MicroSD, há»— trá»£ tá»‘i Ä‘a 256 GB', '2 SIM Nano (SIM 2 chung khe tháº» nhá»›), Há»— trá»£ 4G', '3230 mAh'),
('SN002', 'sony2.0.PNG@sony2.1.PNG@sony2.2.PNG@sony2.3.PNG@sony-xperia-xz1-xanhduong-400x460.png@', 'IPS HDR LCD, 5.2\", Full HD', 'Android 8.0 (Oreo)', '19 MP', '13 MP', 'Qualcomm Snapdragon 835 8 nhÃ¢n 64-bit', '4 GB', '64 GB', 'MicroSD, há»— trá»£ tá»‘i Ä‘a 256 GB', '2 Nano SIM, Há»— trá»£ 4G', '2700 mAh'),
('SN003', 'snx1.0.PNG@snx1.1.PNG@snx1.2.PNG@snx1.3.PNG@sony-xperia-xz-premium-pink-gold-400x460.png@', 'IPS LCD, 5.5\", Ultra HD (4K)', 'Android 8.0 (Oreo)', '19 MP', '13 MP', 'Qualcomm Snapdragon 835 8 nhÃ¢n 64-bit', '4 GB', '64 GB', 'MicroSD, há»— trá»£ tá»‘i Ä‘a 256 GB', '2 SIM Nano (SIM 2 chung khe tháº» nhá»›), Há»— trá»£ 4G', '3230 mAh'),
('SS001', 'samsung-galaxy-j7-pro-2323-400x460.png@samsungj7.0.PNG@samsungj7.1.PNG@samsungj7.2.PNG@samsungj7.3.PNG@', 'Super AMOLED, 5.5\", Full HD', 'Android 7.0 (Nougat)', '13 MP', '13 MP', 'Exynos 7870 8 nhÃ¢n 64-bit', '3 GB', '32 GB', 'MicroSD, há»— trá»£ tá»‘i Ä‘a 256 GB', '2 Nano SIM, Há»— trá»£ 4G', '3600 mAh'),
('SS002', 'samsung-galaxy-s9-plus-128gb-400x460.png@ssg9.0.PNG@ssg9.1.PNG@ssg9.2.PNG@ssg9.3.PNG@', 'Super AMOLED, 6.2\", Quad HD+ (2K+)', 'Android 8.0 (Oreo)', '2 camera 12 MP', '8 MP', 'Exynos 9810 8 nhÃ¢n 64 bit', '6 GB', '128 GB', 'MicroSD, há»— trá»£ tá»‘i Ä‘a 400 GB', '2 SIM Nano (SIM 2 chung khe tháº» nhá»›), Há»— trá»£ 4G', '3500 mAh'),
('SS003', 'samsung-galaxy-note8-1-400x460.png@ssgn8.0.PNG@ssgn8.1.PNG@ssgn8.2.PNG@ssgn8.3.PNG@', 'Super AMOLED, 6.3\", Quad HD+ (2K+)', 'Android 7.1 (Nougat)', '2 camera 12 MP', '8 MP', 'Exynos 8895 8 nhÃ¢n 64-bit', '6 GB', '64 GB', 'MicroSD, há»— trá»£ tá»‘i Ä‘a 256 GB', '2 Nano SIM, Há»— trá»£ 4G', '3300 mAh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` varchar(7) NOT NULL,
  `ma_thuong_hieu` int(11) NOT NULL,
  `ten` text NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ma_thuong_hieu`, `ten`, `so_luong`, `gia`, `ma_loai`) VALUES
('1', 1, '1', 1, 1, 1),
('2', 2, '2', 2, 2, 1),
('3', 1, '2', 2, 2, 1),
('7', 1, '6', 2, 3, 2),
('a', 1, 'a', 0, 0, 1),
('HW001', 6, 'Äiá»‡n thoáº¡i Huawei Nova 3e', 60, 6990, 1),
('HW002', 6, 'Äiá»‡n thoáº¡i Huawei Y7 Prime', 40, 4290, 1),
('IP001', 3, 'Äiá»‡n thoáº¡i iPhone 6 32GB', 100, 6990, 1),
('IP002', 1, 'Äiá»‡n thoáº¡i iPhone 6s Plus 32GB', 120, 13990, 1),
('IP003', 3, 'Äiá»‡n thoáº¡i iPhone X 256GB', 50, 34790, 1),
('IP004', 3, 'Äiá»‡n thoáº¡i iPhone X 64GB', 80, 29990, 1),
('NO001', 1, 'Äiá»‡n thoáº¡i Nokia 6', 110, 5590, 1),
('NO002', 1, 'Äiá»‡n thoáº¡i Nokia 5', 40, 4260, 1),
('OP001', 5, 'Äiá»‡n thoáº¡i OPPO F5 Youth', 150, 6190, 1),
('OP002', 5, 'Äiá»‡n thoáº¡i OPPO F5 6GB', 30, 8990, 1),
('SN001', 7, 'Äiá»‡n thoáº¡i Sony Xperia XZ Premium', 120, 15990, 1),
('SN002', 7, 'Äiá»‡n thoáº¡i Sony Xperia XZ1', 60, 13990, 1),
('SN003', 7, 'Äiá»‡n thoáº¡i Sony Xperia XZ Premium Pink Gold', 60, 14490, 1),
('SS001', 2, 'Äiá»‡n thoáº¡i Samsung Galaxy J7 Pro', 250, 6090, 1),
('SS002', 2, 'Äiá»‡n thoáº¡i Samsung Galaxy S9+ 128GB', 80, 24990, 1),
('SS003', 2, 'Äiá»‡n thoáº¡i Samsung Galaxy Note 8', 70, 22490, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(1, 'Smartphone'),
(2, 'Tablet');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_nguoi_dung`
--

CREATE TABLE `loai_nguoi_dung` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_nguoi_dung`
--

INSERT INTO `loai_nguoi_dung` (`ma_loai`, `ten_loai`) VALUES
(1, 'admin'),
(2, 'khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ma_loai` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `ten_dang_nhap` text NOT NULL,
  `mat_khau` text NOT NULL,
  `email` text,
  `so_dien_thoai` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`ma_loai`, `ma_nguoi_dung`, `ten_dang_nhap`, `mat_khau`, `email`, `so_dien_thoai`) VALUES
(1, 2, 'hoang', '123456', 'hoanghd.cnt@gmail.com', '090000000'),
(1, 3, 'toan', '123456', 'toan@gmail.com', NULL),
(1, 4, 'ngan', '123456', 'ngan@gmail.com', NULL),
(2, 5, 'admin', '123456', 'admin@gmail.com', '8888888');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quang_cao`
--

CREATE TABLE `quang_cao` (
  `ma_quang_cao` int(11) NOT NULL,
  `anh` text NOT NULL,
  `state` int(11) NOT NULL,
  `noi_dung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuong_hieu`
--

CREATE TABLE `thuong_hieu` (
  `ma_thuong_hieu` int(11) NOT NULL,
  `ten_thuong_hieu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thuong_hieu`
--

INSERT INTO `thuong_hieu` (`ma_thuong_hieu`, `ten_thuong_hieu`) VALUES
(1, 'NOKIA'),
(2, 'SAMSUNG'),
(3, 'Apple'),
(4, 'BlackBerry'),
(5, 'Oppo'),
(6, 'Huawei'),
(7, 'SONY');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `ma_tt` int(11) NOT NULL,
  `ma_hh` varchar(7) NOT NULL,
  `noi_dung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_hang_hoa`
--
ALTER TABLE `chi_tiet_hang_hoa`
  ADD PRIMARY KEY (`ma_hh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `fk_hanghoa_loaihang` (`ma_loai`);

--
-- Chỉ mục cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`ma_nguoi_dung`),
  ADD KEY `fk_nguoidung_loainguoidung` (`ma_loai`);

--
-- Chỉ mục cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`ma_quang_cao`);

--
-- Chỉ mục cho bảng `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  ADD PRIMARY KEY (`ma_thuong_hieu`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`ma_tt`),
  ADD KEY `fk_tintuc_hanghoa` (`ma_hh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `ma_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `ma_quang_cao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `ma_thuong_hieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `ma_tt` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_hang_hoa`
--
ALTER TABLE `chi_tiet_hang_hoa`
  ADD CONSTRAINT `fk_chitiet_hanghoa` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_hanghoa_loaihang` FOREIGN KEY (`ma_loai`) REFERENCES `loai_hang` (`ma_loai`);

--
-- Các ràng buộc cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD CONSTRAINT `fk_nguoidung_loainguoidung` FOREIGN KEY (`ma_loai`) REFERENCES `loai_nguoi_dung` (`ma_loai`);

--
-- Các ràng buộc cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD CONSTRAINT `fk_tintuc_hanghoa` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
