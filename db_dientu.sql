-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 03:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dientu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `ngaydat` date DEFAULT NULL,
  `tongtien` float DEFAULT NULL,
  `payment` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `unit_price` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` tinyint(4) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `id_type`, `unit_price`, `image`, `new`) VALUES
(1, 'Điện thoại Samsung Galaxy S9+ 128GB', 1, 24490000, 'samsung-galaxy-s9-plus-128gb.png', 1),
(2, 'Điện thoại Samsung Galaxy S8 Plus', 1, 17990000, 'samsung-galaxy-s8-plus.png', 1),
(3, 'Điện thoại Samsung Galaxy J6+', 1, 4690000, 'samsung-galaxy-j6-plus.png', 1),
(4, 'Laptop Apple Macbook Pro Touch MR9Q2SA/A', 2, 44490000, 'apple-macbook-pro-touch-mr932sa-a.jpg', 1),
(5, 'Laptop Dell Inspiron 7373 i5 8250U', 2, 26990000, 'dell-inspiron-7373-i5-8250u-8gb-256gb.jpg', 0),
(6, 'Laptop Asus ROG Strix Scar GL504GM', 2, 45490000, 'asus-gl504gm-es044t.jpg', 1),
(7, 'GVN Horus 1060', 3, 21100000, 'gvn_horus_1060.png', 0),
(8, 'GVN Apollo RTX 2080Ti', 3, 63300000, 'gvn_apollo_rtx_2080ti_gearvn.jpg', 0),
(9, 'GVN Tiamat RTX 2080', 3, 49500000, 'arya_gearvn.jpg', 0),
(28, 'USB 2.0 8 GB Apacer AH112\r\n', 5, 190000, 'usb-8gb-20-apacer-ah112.jpg', 0),
(27, 'Chuột Gaming Cliptec Korono RGS565\r\n', 5, 350000, 'chuot-gaming-cliptec-korono-rgs565.jpg', 0),
(18, 'Máy tính bảng iPad Pro 10.5 inch Wifi 64GB (2017)', 4, 16990000, 'ipad-pro-105-inch-wifi-64gb-2017.png', 1),
(19, 'Máy tính bảng Samsung Galaxy Tab S4 10.5 inch S-Pen', 4, 17990000, 'samsung-galaxy-tab-s4-105.png', 1),
(20, 'Máy tính bảng Huawei MediaPad M3 8.0 (2017)', 4, 5990000, 'huawei-mediapad-m3-115.png', 0),
(21, 'Máy tính bảng Lenovo Tab 4 8\" 16GB (TB-8504X)', 4, 3690000, 'lenovo-tab-4-8-tb-8504x.png', 0),
(22, 'Điện thoại Xiaomi Mi 8', 1, 12990000, 'xiaomi-mi-8.png', 1),
(23, 'Laptop HP Pavilion X360 ad104TU i3 8130U', 2, 13490000, 'hp-pavilion-x360-cd0082tu.jpg', 0),
(24, 'GVN Chopper 1070Ti', 3, 23990000, 'chopper_m_i.jpg', 1),
(25, 'Pin sạc dự phòng eSaver 5.000 mAh Y322', 5, 200000, 'pin-sac-du-phong-esaver-5000-mah-y322.jpg', 0),
(26, 'Dây cáp Micro USB 0.2 m eSaver DS026\r\n', 5, 25000, 'cap-micro-usb-20cm-esaver-ds026.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`id`, `name`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Máy tính bàn'),
(4, 'Máy tính bảng'),
(5, 'Linh kiện điện tử');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
