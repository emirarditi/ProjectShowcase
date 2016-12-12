-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2016 at 08:58 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showcaseproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(20) DEFAULT NULL,
  `reg_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `reg_date`) VALUES
(1, 'Furniture', '2016-12-11'),
(2, 'Cookware', '2016-12-11'),
(3, 'Electronics', '2016-12-11'),
(4, 'Accessories', '2016-12-11'),
(5, 'Clothes', '2016-12-11'),
(6, 'Footwear', '2016-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `detailtypes`
--

CREATE TABLE `detailtypes` (
  `detail_id` int(11) NOT NULL,
  `detail_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailtypes`
--

INSERT INTO `detailtypes` (`detail_id`, `detail_name`) VALUES
(1, 'Weight'),
(2, 'Color'),
(3, 'Size'),
(4, 'Height'),
(5, 'Width'),
(6, 'Shape'),
(7, 'Specification');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` text,
  `product_category_id` int(11) DEFAULT NULL,
  `reg_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_category_id`, `reg_date`) VALUES
(1, 'Neil Round Couch', 'Neil Round Couch : Red Round 2meter 30kgs diameter couch', 1, '2016-09-07'),
(2, 'T-fal Cooking Pot', 'T-fal Cooking Pot : Black 5 lt 28 cm diameter cooking pot', 2, '2016-12-11'),
(3, 'Zee SaucePan', 'Zee SaucePan : Black 1lt 14cm diameter nonstick saucepan ', 2, '2016-12-11'),
(4, 'Flashy16', 'Flashy16 : Green 16 GB usb 2.0 flash drive', 3, '2016-12-11'),
(5, 'SeaWeed HardDisk', 'SeaWeed HardDisk : Blue 1TB 15x9cm external hard disk', 3, '2016-12-11'),
(6, 'Liverpool Protein Shaker Cup', 'Liverpool Protein Shaker Cup : Red 0.5lt Protein Shaker (TheOnlyCupLiverpoolWillHaveThisSeason)', 4, '2016-12-11'),
(7, 'Miami Heat Iphone 6s Case', 'Miami Heat Iphone 6s Case : Transparent 15.8x7.78cm iphone 6s Case', 4, '2016-12-11'),
(8, 'UCLA hoodie', 'UCLA hoodie : Medium-Large-XLarge Navy blue hoodie ', 5, '2016-12-11'),
(9, 'WaterP Boots', 'WaterP Boots : Brown 42-43-44-45-46 EU waterproof boots', 6, '2016-12-11'),
(10, 'Fire Js', 'Fire Js : Black and orange 9.5-10-10.5-11 US Js Jordan basketball shoes ', 6, '2016-12-11'),
(11, 'T-fal Frying Pan', 'T-fal Frying Pan : Black 30cm diameter non-stick Frying pan', 2, '2016-12-11'),
(12, 'Light as a feather Kitchen Table', 'Light as a feather Kitchen Table : White Square 2kg 2x2m 1.5m height table', 1, '2016-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_detail_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `detail_type_id` int(11) DEFAULT NULL,
  `detail_value` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_detail_id`, `product_id`, `detail_type_id`, `detail_value`) VALUES
(1, 1, 1, '30kgs'),
(2, 1, 2, 'Red'),
(3, 1, 5, '2meter'),
(4, 1, 6, 'Round'),
(5, 2, 2, 'Black'),
(6, 2, 3, '5lt'),
(7, 2, 5, '28cm'),
(8, 3, 2, 'Black'),
(9, 3, 5, '14cm'),
(10, 3, 3, '1lt'),
(11, 3, 7, 'non stick'),
(12, 4, 3, '16gb'),
(13, 4, 2, 'Green'),
(14, 4, 7, 'USB 2.0'),
(15, 5, 3, '1TB'),
(16, 5, 2, 'Blue'),
(17, 5, 4, '15'),
(18, 5, 5, '9'),
(19, 6, 2, 'Red'),
(20, 6, 3, '0.5lt'),
(21, 7, 2, 'Transparent'),
(22, 7, 4, '15.8'),
(23, 7, 5, '7.78'),
(24, 8, 2, 'Navy Blue'),
(25, 8, 3, 'Medium-Large-XLarge'),
(26, 9, 2, 'Brown'),
(27, 9, 3, '42-43-44-45-46 EU'),
(28, 9, 7, 'Waterproof'),
(29, 10, 2, 'Black and Orange'),
(30, 10, 3, '9.5-10-10.5-11 US'),
(31, 12, 1, '2kg'),
(32, 11, 2, 'Black'),
(33, 11, 5, '30cm'),
(34, 12, 2, 'White'),
(35, 11, 7, 'Nonstick'),
(36, 12, 5, '2x2m'),
(37, 12, 4, '1m'),
(38, 12, 6, 'Square');

-- --------------------------------------------------------

--
-- Table structure for table `product_pictures`
--

CREATE TABLE `product_pictures` (
  `picture_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `picture_type` int(11) DEFAULT NULL,
  `picture_location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `reg_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `Categories_category_id_uindex` (`category_id`);

--
-- Indexes for table `detailtypes`
--
ALTER TABLE `detailtypes`
  ADD PRIMARY KEY (`detail_id`),
  ADD UNIQUE KEY `DetailTypes_detail_id_uindex` (`detail_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `Categories_product_id_uindex` (`product_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_detail_id`),
  ADD UNIQUE KEY `Product_Details_product_detail_id_uindex` (`product_detail_id`);

--
-- Indexes for table `product_pictures`
--
ALTER TABLE `product_pictures`
  ADD PRIMARY KEY (`picture_id`),
  ADD UNIQUE KEY `Product_Pictures_picture_id_uindex` (`picture_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `Users_user_id_uindex` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `detailtypes`
--
ALTER TABLE `detailtypes`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `product_pictures`
--
ALTER TABLE `product_pictures`
  MODIFY `picture_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;