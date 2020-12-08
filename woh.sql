-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2019 at 01:34 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woh`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` text,
  `comment` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `comment`, `img`, `alt`) VALUES
(2, 'SONY WH-1000XM3 Wireless Noise Cancelling Headphones', 'The best noise-cancelling headphones ever made.', 'IMG_1575145355_banner1.png', 'Banner-1'),
(3, 'Baseus Encok Wireless Headphone D03', 'Fashionable and simple appearanceã€Hi-Fi stereoã€Comfortable to wearã€Long battery enduranceã€Bluetooth / wired earphone dual modeã€Small and portable', 'IMG_1575145398_banner2.png', 'Banner-2'),
(4, 'Remax Rm 510 Touch Music Wired Headphone', 'Try the newest lightweight and comfortable design for the Ovleng headphones', 'IMG_1575145431_banner3.png', 'Banner-3');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `product_price` varchar(50) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `product_discount` varchar(50) DEFAULT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `customer_username` varchar(50) DEFAULT NULL,
  `customer_mobile_no` varchar(50) DEFAULT NULL,
  `delivary_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Wireless-Headphone'),
(2, 'Wire-Headphone'),
(6, 'Cable');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `emppicture` varchar(255) DEFAULT NULL,
  `empidcardpicture` varchar(255) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `is_active` varchar(50) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `mobile`, `emppicture`, `empidcardpicture`, `position`, `gender`, `is_active`, `salary`, `address`) VALUES
(9, 'Joy Das', 'joydascsepuc@gmail.com', '01831586368', 'IMG_1575129267_JDPic2.jpg', 'IMG_1575129267_EditedID.png', 'Developer', 'Male', '1', '50000', '<p><strong>2no Gate, Nasirabad, CTG</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL DEFAULT '0',
  `product_name` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `product_price` varchar(50) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `product_discount` varchar(50) DEFAULT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `customer_username` varchar(50) DEFAULT NULL,
  `customer_mobile_no` varchar(50) DEFAULT NULL,
  `delivary_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `product_id` varchar(50) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` text,
  `comment` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `product_id`, `category`, `description`, `comment`, `img`, `price`, `discount`, `supplier`, `is_active`, `created_at`, `modified_at`) VALUES
(14, 'Z1R Premium Headphones', 'Z1RP', 'WireHeadphone', '<p>High-Resolution Audio compatible</p><p>40mm HD driver unit with aluminium-coated LCP</p><p>&Phi;4.4mm balanced connection compatible</p>', 'The Way The Artists Truly Intended', 'IMG_1575214201_Untitled-1.png', 3000, 0, 'Sony', 1, '2019-12-01 21:30:01', NULL),
(15, 'MDR-Z7M2 Headphone', 'MDR-Z7M2', 'WireHeadphone', '<p>High-Resolution Audio compatible</p><p>40mm HD driver unit with aluminium-coated LCP</p><p>&Phi;4.4mm balanced connection compatible</p>', 'The Way The Artists Truly Intended', 'IMG_1575214282_Untitled-2.png', 3000, 0, 'Sony', 1, '2019-12-01 21:31:22', NULL),
(16, 'WH-1000XM3 Wireless', 'WH-1000XM3', 'WireHeadphone', '<p>High-Resolution Audio compatible</p><p>40mm HD driver unit with aluminium-coated LCP</p><p>&Phi;4.4mm balanced connection compatible</p>', 'The best noise-cancelling headphones ever made.', 'IMG_1575214389_Untitled-3.png', 3000, 0, 'BaseUs', 1, '2019-12-01 21:33:09', NULL),
(17, 'MDR-1AM2 Headphones', 'MDR-1AM2', 'WireHeadphone', '<p>High-Resolution Audio compatible</p><p>40mm HD driver unit with aluminium-coated LCP</p><p>&Phi;4.4mm balanced connection compatible</p>', 'The Way The Artists Truly Intended', 'IMG_1575214437_Untitled-4.png', 2000, 0, 'BaseUs', 1, '2019-12-01 21:33:57', NULL),
(18, 'WH-H910N h.ear on 3', 'WH-H910N', 'WireHeadphone', '<p>High-Resolution Audio compatible</p><p>40mm HD driver unit with aluminium-coated LCP</p><p>&Phi;4.4mm balanced connection compatible</p>', 'The best noise-cancelling headphones ever made.', 'IMG_1575214474_Untitled-5.png', 1400, 0, 'Sony', 1, '2019-12-01 21:34:34', NULL),
(19, 'WH-H900N h.ear on 2', 'WH-H900N', 'WireHeadphone', '<p>High-Resolution Audio compatible</p><p>40mm HD driver unit with aluminium-coated LCP</p><p>&Phi;4.4mm balanced connection compatible</p>', 'The Way The Artists Truly Intended', 'IMG_1575214517_Untitled-6.png', 5000, 10, 'Sony', 1, '2019-12-01 21:35:17', NULL),
(20, 'Z1R Premium Headphones', 'Z1RPremium', 'WireHeadphone', '<p>High-Resolution Audio compatible</p><p>40mm HD driver unit with aluminium-coated LCP</p><p>&Phi;4.4mm balanced connection compatible</p>', 'The best noise-cancelling headphones ever made.', 'IMG_1575214564_Untitled-7.png', 3000, 10, 'Sony', 1, '2019-12-01 21:36:04', NULL),
(21, 'WH-1000XM3 Wireless', 'WH-1000XM3', 'WireHeadphone', '<p>High-Resolution Audio compatible</p><p>40mm HD driver unit with aluminium-coated LCP</p><p>&Phi;4.4mm balanced connection compatible</p>', 'The best noise-cancelling headphones ever made.', 'IMG_1575214622_Untitled-8.png', 6000, 0, 'Sony', 1, '2019-12-01 21:37:02', NULL),
(22, 'MDR-Z7M2 Headphone', 'MDR-Z7M2', 'WireHeadphone', '<p>High-Resolution Audio compatible</p><p>40mm HD driver unit with aluminium-coated LCP</p><p>&Phi;4.4mm balanced connection compatible</p>', 'The Way The Artists Truly Intended', 'IMG_1575214685_Untitled-9.png', 1000, 20, 'Indeed', 1, '2019-12-01 21:38:05', NULL),
(23, 'MDR-1AM2 Headphones', 'MDR-1AM2', 'WireHeadphone', '<p>High-Resolution Audio compatible</p><p>40mm HD driver unit with aluminium-coated LCP</p><p>&Phi;4.4mm balanced connection compatible</p>', 'The Way The Artists Truly Intended', 'IMG_1575214754_Untitled-10.png', 10000, 10, 'Indeed', 1, '2019-12-01 21:39:14', NULL),
(24, 'WH-H910N h.ear on 3', 'WH-H910N', 'WireHeadphone', '<p>High-Resolution Audio compatible</p><p>40mm HD driver unit with aluminium-coated LCP</p><p>&Phi;4.4mm balanced connection compatible</p>', 'The best noise-cancelling headphones ever made.', 'IMG_1575214816_Untitled-11.png', 3000, 20, 'XMTP', 1, '2019-12-01 21:40:16', NULL),
(25, 'WH-H900N h.ear on 2', 'WH-H900N', 'WireHeadphone', '<p>High-Resolution Audio compatible</p><p>40mm HD driver unit with aluminium-coated LCP</p><p>&Phi;4.4mm balanced connection compatible</p>', 'The Way The Artists Truly Intended', 'IMG_1575214859_Untitled-12.png', 2000, 0, 'XMTP', 1, '2019-12-01 21:40:59', NULL),
(26, 'WF-1000-Wireless Noise Cancelling Headphones', 'WF-1000', 'WirelessHeadphone', '<p>Digital Noise Cancelling with HD Noise Cancelling Processor QN1e and Dual Noise Sensor Technology</p><p>Truly wireless design with Bluetooth&reg; wireless technology</p><p>Smart listening experience by Adaptive Sound Control</p>', 'Industry-leading noise cancellation1 and stunning sound in a compact, stylish, truly wireless design.', 'IMG_1575214968_Untitled-1.png', 15000, 0, 'mi', 1, '2019-12-01 21:42:48', NULL),
(27, 'WF-H800 h.ear in 3 Truly Wireless Headphones', 'WF-H800', 'WirelessHeadphone', '<p>Digital Noise Cancelling with HD Noise Cancelling Processor QN1e and Dual Noise Sensor Technology</p><p>Truly wireless design with Bluetooth&reg; wireless technology</p><p>Smart listening experience by Adaptive Sound Control</p>', 'Industry-leading noise cancellation1 and stunning sound in a compact, stylish, truly wireless design.', 'IMG_1575215036_Untitled-2.png', 2000, 10, 'mi', 1, '2019-12-01 21:43:56', NULL),
(28, 'WF-SP900 Sports Wireless Headphones', 'WF-SP900', 'WirelessHeadphone', '<p>Digital Noise Cancelling with HD Noise Cancelling Processor QN1e and Dual Noise Sensor Technology</p><p>Truly wireless design with Bluetooth&reg; wireless technology</p><p>Smart listening experience by Adaptive Sound Control</p>', 'Industry-leading noise cancellation1 and stunning sound in a compact, stylish, truly wireless design.', 'IMG_1575215097_Untitled-3.png', 7000, 0, 'Sony', 1, '2019-12-01 21:44:57', NULL),
(29, '2.0m Balanced standard plug', '2.0m', 'Cable', '<p>8-wire braid</p><p>Oxygen-free copper conductor</p><p>2.0m in length</p>', 'Music sounds crisp and clear thanks to the 8-wire braid design', 'IMG_1575215200_Untitled-1.png', 500, 0, 'Sony', 1, '2019-12-01 21:46:40', NULL),
(30, 'M12NB1 Balanced Standard 1.2m Headphone Cable', 'M12NB1', 'Cable', '<p>8-wire braid</p><p>Oxygen-free copper conductor</p><p>2.0m in length</p>', 'Music sounds crisp and clear thanks to the 8-wire braid design', 'IMG_1575215285_Untitled-2.png', 700, 0, 'BaseUs', 1, '2019-12-01 21:48:05', NULL),
(31, '1.2m Balanced standard plug', '1.2m', 'Cable', '<p>8-wire braid</p><p>Oxygen-free copper conductor</p><p>2.0m in length</p>', 'Music sounds crisp and clear thanks to the 8-wire braid design', 'IMG_1575215349_Untitled-3.png', 2000, 10, 'BaseUs', 1, '2019-12-01 21:49:09', NULL),
(32, '2.2 Onixious Cable', '2.2Onixious', 'Cable', '<p>8-wire braid</p><p>Oxygen-free copper conductor</p><p>2.0m in length</p>', 'Music sounds crisp and clear thanks to the 8-wire braid design', 'IMG_1575215425_Untitled-4.png', 1400, 0, 'Indeed', 1, '2019-12-01 21:50:25', NULL),
(33, '2.4 Aquixity Cable', '2.4Aquixity', 'Cable', '<p>8-wire braid</p><p>Oxygen-free copper conductor</p><p>2.0m in length</p>', 'Music sounds crisp and clear thanks to the 8-wire braid design', 'IMG_1575215478_Untitled-5.png', 3000, 20, 'XMTP', 1, '2019-12-01 21:51:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `usertype`, `mobile`, `password`) VALUES
(1, 'Joy', 'Das', 'admin@admin.com', 'admin', 'admin', '01831586368', 'password'),
(2, 'Prothom', 'Acharjya', 'admin@admin.com', 'user', 'user', '17817187187', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
