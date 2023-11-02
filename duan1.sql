-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 03:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL DEFAULT 0,
  `bill_name` varchar(200) NOT NULL,
  `bill_address` varchar(200) NOT NULL,
  `bill_tel` varchar(20) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán trực tiếp 2. Chuyển khoản 3. Thanh toán online',
  `ngaydathang` varchar(200) NOT NULL,
  `total` int(11) NOT NULL,
  `bill_status` tinyint(4) DEFAULT 0 COMMENT '0. Đơn hàng mới 1. Đang xử lý 3. Đang giao hàng 4. Đã giao hàng',
  `receive_name` varchar(200) NOT NULL,
  `receive_address` varchar(200) NOT NULL,
  `receive_tel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(38, 'ok', 81, 58, '11:14:44am 17/10/2023'),
(39, 'erswe', 81, 61, '09:49:16am 21/10/2023'),
(40, 'ga', 81, 62, '10:07:45am 21/10/2023'),
(41, 'dat vl', 81, 62, '10:07:49am 21/10/2023'),
(42, 'okk', 81, 58, '10:08:02am 21/10/2023');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(200) NOT NULL,
  `don_gia` double NOT NULL,
  `hinh` varchar(200) NOT NULL,
  `mo_ta` text NOT NULL,
  `so_luong` varchar(200) NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `hinh`, `mo_ta`, `so_luong`, `so_luot_xem`, `ma_loai`) VALUES
(58, 'van', 123, 'nokia.webp', '1qqsss', '', 0, 46),
(61, 'Apple', 222, 'msi.webp', 'dé', '', 0, 49),
(62, 'A', 55567, 'mabookpro14-gray-6.webp', 'jjjj', '', 0, 48),
(63, 'Điện thoại di động Samsung Galaxy S22 Ultra - 8GB/128GB', 16, 'sa14.png', 'Công nghệ màn hình: Dynamic AMOLED 2X\r\nĐộ phân giải: 3088 x 1440, 12MP (UW) + 108MP (W) + 12MP (Tele3x) + 12MP (Tele10x), 40MP\r\nKích thước màn hình: 6.8\", Tần số quét: 1 - 120 Hz\r\nHệ điều hành: Android 12\r\nVi xử lý: Snapdragon® 8 Gen 1 (4nm)\r\nBộ nhớ trong: 128GB\r\nRAM: 8GB\r\nMạng di động: 5G\r\nSố khe SIM: 1 nano SIM + 1 e-SIM\r\nDung lượng pin: 5000 mAh', '', 0, 46),
(64, 'Máy tính bảng iPad Gen 9 10.2\" Wi-Fi (64GB)', 6999000, 'laptophaw.webp', 'Công nghệ màn hình:: IPS LCD\r\nHệ điều hành: iPadOS\r\nChip xử lý (CPU): Apple A13 Bionic\r\nRAM: 3GB\r\nBộ nhớ trong: 64GB\r\nWiFi: Wi-Fi 5 (802.11ac) with 2x2 MIMO\r\nBluetooth: Bluetooth 4.2\r\nChất liệu:: Nhôm\r\nKích thước, khối lượng:: Dài 250.6 mm - Ngang 174.1 mm - Dày 7.5 mm - Nặng 487 g', '', 0, 49),
(65, 'Laptop Lenovo V14 G3 IAP (i3-1215U/4GB/256GB/15.6\'\' FHD)', 79000000, 'may-anh-sony-alpha-a7r-mark-v.webp', 'Số hiệu CPU: 1215U\r\nXung nhịp cơ bản: P-core 1.2GHz / E-core 0.9GHz\r\nRAM: 4GB\r\nKhả năng nâng cấp: SSD tối đa 512GB\r\nĐộ phân giải: 1920x1080\r\nKết nối không dây: 802.11ac 2x2 Wi-Fi® + Bluetooth® 5.1, M.2 card\r\nHệ điều hành: Không có\r\nKích thước: 324 x 215 x 19.9 mm\r\nTrọng lượng: 1.43 kg', '', 0, 50),
(66, 'Màn hình Acer VG240YS 23.8inch/FHD/IPS/165Hz', 555, 'msi.webp', 'Thời gian phản hồi : 2ms\r\nKích thước màn hình: 23.8 inch\r\nTần số quét: 165Hz', '', 0, 49),
(67, 'Đồng hồ thông minh Apple Watch SE 2022 - GPS, 40mm - Vỏ Nhôm Dây Cao Su - VN/A', 20000001, 'nikon-d7500-kit-afs-dx-nikkor-18140-vr-hang-nhap-khau.webp', 'Thông số kỹ thuật Apple Watch SE 2022 - GPS, 40mm - Vỏ Nhôm Dây Cao Su - VN/A', '', 0, 50);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `mat_khau` varchar(200) NOT NULL,
  `ho_ten` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `dia_chi` text DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `vai_tro` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `email`, `dia_chi`, `phone`, `vai_tro`) VALUES
(81, '11111', 'ban van viet', 'vietbvph33011@fpt.edu.vn', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(46, 'Smatphone'),
(48, 'Đồng Hồ'),
(49, 'Pc'),
(50, 'Tủ lạnh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_hh` (`iduser`),
  ADD KEY `idpro` (`idpro`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `idbill` (`idbill`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `hang_hoa` (`ma_hh`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `khach_hang` (`ma_kh`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`idpro`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`idbill`) REFERENCES `binh_luan` (`id`);

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
