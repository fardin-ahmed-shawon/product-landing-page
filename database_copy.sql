-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2025 at 07:58 AM
-- Server version: 10.6.20-MariaDB
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easytechx_landing_page`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin_39_', '87654321');

-- --------------------------------------------------------

--
-- Table structure for table `brand_info`
--

CREATE TABLE `brand_info` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_logo` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `insta_link` varchar(255) NOT NULL,
  `wp_link` varchar(255) NOT NULL,
  `yt_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_id` int(11) NOT NULL,
  `feature_title` varchar(255) NOT NULL,
  `feature_description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_id`, `feature_title`, `feature_description`, `created_at`) VALUES
(4, 'Innovative technology', 'It will be provide a innovation that made by us', '2025-05-07 10:29:31'),
(5, 'Fast and secure', 'The application is very fast & highly secured', '2025-05-07 10:29:46'),
(6, 'Easy to operat', 'It is very simple to use according to your needs\r\n\r\n', '2025-05-07 10:30:01'),
(7, 'GPS Tracking', 'It has a build in gps tracking system & it works smarty', '2025-05-07 10:31:07'),
(8, 'Heartbeat Analysis', 'It will analysis your current heartbeat & alert you from heart attack', '2025-05-07 10:31:18'),
(9, 'Gorgeous color', 'You have some sevarel color option which you can preview the product page', '2025-05-07 10:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `home_text`
--

CREATE TABLE `home_text` (
  `text_id` int(11) NOT NULL,
  `home_title` varchar(255) NOT NULL,
  `home_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_text`
--

INSERT INTO `home_text` (`text_id`, `home_title`, `home_description`) VALUES
(2, 'WATCH is the best Landing Page to showcause your product', 'Android and iOS Support\r\nGPS & Health Tracker\r\nRead & reply to messages\r\nCompatible with all devices');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `home_image` varchar(255) DEFAULT NULL,
  `feature_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `background_image`, `home_image`, `feature_image`) VALUES
(1, 'header-bg.jpg', 'watch-header.png', 'watch-features.png');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `order_no` int(11) NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_address` text NOT NULL,
  `city_address` varchar(50) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `order_status` varchar(50) DEFAULT 'Pending',
  `order_visibility` varchar(50) DEFAULT 'Show'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`order_no`, `user_first_name`, `user_last_name`, `user_phone`, `user_email`, `user_address`, `city_address`, `invoice_no`, `product_id`, `product_title`, `product_quantity`, `total_price`, `payment_method`, `order_date`, `order_status`, `order_visibility`) VALUES
(1, 'Fardin', 'Ahmed', '01944667441', 'mdshawon7443@gmail.com', 'Mohammadpur', 'Inside Dhaka', 'XYZ238967', 1, 'Sports Edition', 1, 1550, 'Cash On Delivery', '2025-05-04 11:55:23', 'Completed', 'Show'),
(2, 'Fardin', 'Ahmed', '01944667441', 'mdshawon7443@gmail.com', 'Dhaka', 'Inside Dhaka', 'XAB237GJ', 4, 'Premium Edition', 2, 7998, 'Cash On Delivery', '2025-05-04 11:58:04', 'Shipped', 'Show'),
(3, 'Fardin', 'Ahmed', '01944667441', 'mdshawon7443@gmail.com', 'Dhaka', 'Inside Dhaka', 'XAB237GJ', 3, 'Standard Edition', 3, 7497, 'Cash On Delivery', '2025-05-04 11:59:44', 'Shipped', 'Show'),
(4, 'Tanvin', 'Ahmed', '01944667441', 'tanvin7443@gmail.com', 'Dhaka', 'Inside Dhaka', 'XAB23436', 2, 'Classic Edition', 1, 1990, 'Cash On Delivery', '2025-05-04 12:01:22', 'Processing', 'Show'),
(5, 'Tanvin', 'Ahmed', '01944667441', 'tanvin7443@gmail.com', 'Dhaka', 'Inside Dhaka', 'XAB234GJ', 2, 'Classic Edition', 1, 1990, 'Cash On Delivery', '2025-05-04 12:02:02', 'Canceled', 'Show'),
(6, 'Tanvin', 'Ahmed', '01944667441', 'tanvin7443@gmail.com', 'Dhaka', 'Inside Dhaka', 'ENVXAB23436', 2, 'Classic Edition', 1, 1990, 'Cash On Delivery', '2025-05-04 12:02:56', 'Pending', 'Show'),
(7, 'Tanvin', 'Ahmed', '01944667441', 'tanvin7443@gmail.com', 'Dhaka', 'Inside Dhaka', 'ENVXAB23436', 1, 'Sports Edition', 1, 1550, 'Cash On Delivery', '2025-05-04 12:03:21', 'Pending', 'Show'),
(10, 'Fardin', 'Ahmed', '01944667441', 'mdshawon7443@gmail.com', 'Apishpara', 'Inside Dhaka', 'INV-66UL1QMR8', 2, '', 0, 0, 'Cash On Delivery', '2025-05-04 13:01:01', 'Pending', 'Hide'),
(11, 'Tanvin', 'Ahmed', '01944667441', 'mdshawon7443@gmail.com', 'dhanmondi', 'Outside Dhaka', 'INV-66UL2CAU7', 2, '', 0, 0, 'Cash On Delivery', '2025-05-04 13:02:42', 'Pending', 'Hide'),
(12, 'Mehedi', 'Hasan', '01714564267', 'fardin.easy.tech@gmail.com', 'Apishpara', 'Inside Dhaka', 'INV-66UL5L9PU', 1, 'Sports Edition', 2, 3100, 'Cash On Delivery', '2025-05-04 13:11:47', 'Pending', 'Show'),
(13, 'Mehedi', 'Hasan', '01714564267', 'fardin.easy.tech@gmail.com', 'Apishpara', 'Inside Dhaka', 'INV-66UL5L9PU', 3, 'Standard Edition', 3, 7497, 'Cash On Delivery', '2025-05-04 13:11:47', 'Pending', 'Show'),
(14, 'Rafi', 'Hasan', '01889177349', 'rafi@gmail.com', 'Dhanmondi', 'Outside Dhaka', 'INV-66UL8RN92', 4, 'Premium Edition', 3, 11997, 'Cash On Delivery', '2025-05-04 13:20:41', 'Processing', 'Show'),
(15, 'Rafi', 'Hasan', '01889177349', 'rafi@gmail.com', 'Dhanmondi', 'Outside Dhaka', 'INV-66UL8RN92', 1, 'Sports Edition', 5, 7750, 'Cash On Delivery', '2025-05-04 13:20:41', 'Processing', 'Show'),
(16, 'Tanvin', 'Ahmed', '01944667441', 'mdshawon7443@gmail.com', 'Apishpara', 'Inside Dhaka', 'INV-66UY9DX7R', 2, 'Classic Edition', 5, 9950, 'Cash On Delivery', '2025-05-05 11:12:31', 'Pending', 'Show'),
(17, 'Tanvin', 'Ahmed', '01944667441', 'mdshawon7443@gmail.com', 'Apishpara', 'Inside Dhaka', 'INV-66UY9DX7R', 4, 'Premium Edition', 3, 11997, 'Cash On Delivery', '2025-05-05 11:12:31', 'Pending', 'Show'),
(18, 'Tanvin', 'Ahmed', '01944667441', 'mdshawon7443@gmail.com', 'Apishpara', 'Inside Dhaka', 'INV-66UY9DX7R', 3, 'Standard Edition', 2, 4998, 'Cash On Delivery', '2025-05-05 11:12:31', 'Pending', 'Show');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `serial_no` int(11) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `order_no` int(11) NOT NULL,
  `order_status` varchar(50) DEFAULT 'Pending',
  `order_visibility` varchar(50) DEFAULT 'Show',
  `payment_method` varchar(50) NOT NULL,
  `acc_number` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(50) DEFAULT NULL,
  `payment_date` datetime DEFAULT current_timestamp(),
  `payment_status` varchar(50) DEFAULT 'Unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_regular_price` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `available_stock` int(11) NOT NULL,
  `product_keyword` varchar(255) DEFAULT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `product_img1` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`product_id`, `product_title`, `product_regular_price`, `product_price`, `available_stock`, `product_keyword`, `product_code`, `product_img1`, `created_at`) VALUES
(1, 'Sports Edition', 1550, 1550, 45, 'watch', '365GHS', '../img/product-1.png', '2025-05-04 05:47:45'),
(2, 'Classic Edition', 1990, 1990, 20, 'watch', '47TH', '../img/product-2.png', '2025-05-04 05:50:15'),
(3, 'Standard Edition', 2499, 2499, 25, 'watch', '239GTH', '../img/product-3.png', '2025-05-04 05:50:58'),
(4, 'Premium Edition', 3999, 3999, 15, 'watch', 'JKF327', '../img/product-4.png', '2025-05-04 05:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `review_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review_image`) VALUES
(3, 'review.png'),
(4, 'review.png'),
(5, 'review.png'),
(6, 'review.png'),
(7, 'review.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indexes for table `brand_info`
--
ALTER TABLE `brand_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `home_text`
--
ALTER TABLE `home_text`
  ADD PRIMARY KEY (`text_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`serial_no`),
  ADD UNIQUE KEY `order_no` (`order_no`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand_info`
--
ALTER TABLE `brand_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `home_text`
--
ALTER TABLE `home_text`
  MODIFY `text_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_info` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD CONSTRAINT `payment_info_ibfk_1` FOREIGN KEY (`order_no`) REFERENCES `order_info` (`order_no`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
