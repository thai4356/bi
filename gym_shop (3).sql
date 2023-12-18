-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 01:39 PM
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
-- Database: `gym_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `cat_status`) VALUES
(1, ' Dumbbell', 1),
(2, 'Running', 1),
(3, 'Jumping rope', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `maHD` int(11) NOT NULL,
  `maSP` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `maHD`, `maSP`, `amount`, `price`) VALUES
(16, 14, 12, 1, 800000),
(17, 14, 1, 1, 80000),
(18, 15, 2, 1, 100000),
(19, 15, 1, 1, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `ngaydat` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL,
  `payment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `buyer`, `address`, `phone`, `ngaydat`, `status`, `payment`) VALUES
(14, 'bibeo', '123', 123, '2023-11-01 11:17:36', 2, 'pay on shipment'),
(15, 'user', '123', 123, '2023-11-02 12:39:22', 0, 'pay on shipment');

-- --------------------------------------------------------

--
-- Table structure for table `momo`
--

CREATE TABLE `momo` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_Id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_nfo` varchar(100) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `images` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `title`, `brand`, `price`, `images`, `description`, `content`, `status`, `cat_id`) VALUES
(1, 'Incline Bench Press', 'Dumbell', 80000, 'incline.webp', 'The dumbbell, a type of free weight, is a piece of equipment used in weight training. It is usually used individually or in pairs.', '', 1, 1),
(2, 'Smith Machine', 'Dumbell', 100000, '8_30db99a3-262f-4fc0-a285-ec5ae6c47865_550x.webp', 'The purpose of dumbbells is to strengthen the body and to tone the muscles, along with increasing their size.', '', 1, 1),
(3, 'Elliptical Trainer', 'Dumbell', 200000, '11_c24a2d64-fb3a-4ca1-af77-5275eaf8216d_550x.webp', 'Weight plates come in different types of materials. When referring to traditional or standard weight plates, you\'re looking plates.', '', 1, 1),
(4, 'Capsule Pipe', 'Dumbell', 800000, '14_10ff9a7f-126c-49f8-86e5-1f4928890f37_550x.webp', 'A kettlebell is a type of dumbbell or free weight that is round with a flat base and an arced handle easier.', '', 1, 1),
(5, 'Cable Cross', 'Dumbell', 500000, '12_b4f898c8-f575-47e9-881c-10f41011ac01_550x.webp', '', '', 1, 2),
(6, 'Hack Squat', 'Dumbell', 50000, '18_476121db-60d7-475d-b65f-94fae541f820_550x.webp', '', '', 1, 3),
(7, 'Denim Jacket', 'Dumbell', 15000000, '2_f0c2312d-3888-4fe0-837f-d9fab714c8ee_550x.webp', '', '', 1, 2),
(8, 'LKey Dumbbells', 'Dumbell', 800000, '5_fecd38b0-8de5-4a8a-baa7-8b45b7d6c682_550x.webp', '', '', 1, 2),
(9, 'Flat Bench Press', 'Dumbell', 500000, '10_cf191014-f1a3-46c9-9944-28cdd96c5886_550x.webp', '', '', 1, 2),
(10, 'Dumbbells Stand', 'Dumbell', 13500000, '1_53f999bc-1e5c-4db6-b3ae-dc92b63d1522_550x.webp', '', '', 1, 2),
(11, 'Gym Accessories', 'Dumbell', 800000, '9_80c20f88-b884-438d-aa27-0f89bf1c7cf5_550x.webp', 'Sportswear or activewear is clothing, including footwear, worn for sport or physical exercise. Definition Of Sportswear.', '', 1, 1),
(12, 'Weight Plate Stand', 'Dumbell', 800000, '6_1238b435-8442-464b-93d6-2a62c6463b1b_550x.webp', 'An electrical or optical cable used to connect (\"patch in\") one electronic or optical device to another for signal routing.', '', 1, 1),
(13, 'Seated Dip Machine', 'Dumbell', 23000000, '4_cb1d48dc-8e32-4c83-bbec-7468b843f877_550x.webp', '', '', 1, 3),
(14, 'INTENZA 450 TREADMILL', 'Dumbell', 230045000, '9ee9fae5127ff6783f2734b77ceba4af.jpg', '', '', 1, 3),
(15, 'Nike Dri-Fit Head', 'Dumbell', 120000, '61PN8+WEzAL._AC_SX679_.jpg', '', '', 1, 2),
(16, 'Deluxe Tricep Rope', 'Dumbell', 300000, '61Je00pKUNL._AC_SX679_.jpg', 'Designed with rubber ends this rope has been lab-tested to hold up to 1000 Lbs', '', 1, 3),
(17, 'Sof Sole Sneaker Balls', 'Dumbell', 280000, '71LRas9JEhL._AC_SX679_.jpg', ' a red carpet, upscale, black tie, silk dress, dressed to the nines event, just with sneakers!', '', 1, 3),
(18, 'Adjustable Ankle', 'Dumbell', 100000, '616FIDabHwL._AC_SX569_.jpg', 'Flat strip or thong of a flexible material and especially leather used for securing, holding.', '', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `quyen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `account`, `password`, `quyen`) VALUES
(12, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
(13, 'user', 'e10adc3949ba59abbe56e057f20f883e', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id_momo`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account` (`account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `momo`
--
ALTER TABLE `momo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
