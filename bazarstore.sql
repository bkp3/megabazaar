-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 06:48 AM
-- Server version: 8.0.12
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazarstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `un` varchar(100) NOT NULL,
  `ps` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`un`, `ps`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(10) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Cloth Brand');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_image` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(1, 10, '1', 2, 'Red ladies dress', 'download.jpg', 1, 1000, 1000),
(2, 8, '1', 2, 'Sony', 'Samsung-Galaxy-A10.jpeg', 1, 40000, 40000),
(3, 7, '1', 2, 'Laptop Pavilion', 'dell_laptop2.jpg', 1, 50000, 50000),
(4, 5, '1', 2, 'iPad 2', 'sam_mb3.jpg', 1, 10000, 10000),
(5, 2, '1', 2, 'iPhone 5s', 'sam_mb4.jpg', 1, 25000, 25000),
(14, 3, '1', 1, 'iPad', 'sam_mb5.jpg', 12, 3000, 36000),
(19, 2, '1', 1, 'iPhone 5s', 'sam_mb4.jpg', 1, 25000, 25000),
(20, 10, '1', 1, 'Red ladies dress', 'download.jpg', 1, 1000, 1000),
(21, 11, '1', 1, 'Blue Heave dress', '119a1e76d2e40b5e40fb4d984d590b2e.jpg', 1, 1200, 1200),
(22, 1, '1', 1, 'Samsung Dous 2', 'sam_mb2.jpg', 1, 5000, 5000),
(23, 4, '1', 1, 'iPhone 6s', 'Samsung-Galaxy-A10.jpeg', 1, 32000, 32000),
(24, 5, '0', 1, 'iPad 2', 'sam_mb3.jpg', 1, 10000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Electronics'),
(2, 'Ladies Wear'),
(3, 'Mens Wear'),
(4, 'Kids Wear'),
(5, 'Furnitures'),
(6, 'Home appliances'),
(7, 'Electronics Gadget');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `p_name` varchar(300) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_qty` int(100) NOT NULL,
  `p_status` varchar(300) NOT NULL,
  `trx_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `img` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_keywords` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `img`, `product_keywords`) VALUES
(1, 1, 2, 'Samsung Dous 2', 5000, 'This is the fastest mobile in this universe.', 'sam_mb2.jpg', 'product_keywords'),
(2, 1, 3, 'iPhone 5s', 25000, 'Iphone mobile most solid mobile ever', 'sam_mb4.jpg', 'mobile iphone apple'),
(3, 1, 3, 'iPad', 3000, 'iPad apple brand', 'sam_mb5.jpg', 'apple iPad tablet'),
(4, 1, 3, 'iPhone 6s', 32000, 'Apple iPhone', 'Samsung-Galaxy-A10.jpeg', 'iphone apple mobile'),
(5, 1, 2, 'iPad 2', 10000, 'Samsung ipad', 'sam_mb3.jpg', 'ipad tablet samsung'),
(6, 1, 1, 'Hp Laptop series', 35000, 'Hp Laptop black combination laptop', 'dell_laptop1.jpg', 'hp laptop'),
(7, 1, 1, 'Laptop Pavilion', 50000, 'Laptop HP pavilion', 'dell_laptop2.jpg', 'Laptop HP Pavilion'),
(8, 1, 4, 'Sony', 40000, 'Sony Mobile', 'Samsung-Galaxy-A10.jpeg', 'sony mobile'),
(9, 1, 3, 'iPhone new', 12000, 'iphone', 'sam_mb3.jpg', 'iphone mobile apple'),
(10, 2, 6, 'Red ladies dress', 1000, 'dress for girls', 'download.jpg', 'red dress'),
(11, 2, 6, 'Blue Heave dress', 1200, 'Blue dress', '119a1e76d2e40b5e40fb4d984d590b2e.jpg', 'girl dress cloth'),
(12, 2, 6, 'Ladies Casual Cloth', 1600, 'ladies casual ', 'Layered-Anarkali.jpg', 'girl dress cloth'),
(13, 1, 2, 'Samsung TV', 15000, 'Smart TV', 'tv5.jpg', 'TV samsung');

-- --------------------------------------------------------

--
-- Table structure for table `received_payment`
--

CREATE TABLE `received_payment` (
  `id` int(11) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `trx_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'BHOLA', 'KUMAR', 'shivukumar.7372@gmail.com', '0f7e44a922df352c05c5f73cb40ba115', '8789125409', 'KATH KA PUL,SAMPATCHAK', 'PATNA,PATNA-CITY.'),
(2, 'Bhola', 'Kumar', 'bholakumar.7372@gmail.com', '0f7e44a922df352c05c5f73cb40ba115', '8789125409', 'Hostel-J, NIT Jamshedpur', 'Hostel-J, NIT Jamshedpur'),
(3, 'Bhola', 'Kumar', 'abc@gmail.com', '0f7e44a922df352c05c5f73cb40ba115', '8507256983', 'kath ka pul', 'kath ka pul'),
(4, 'Suraj', 'Kumar', 'suraj@gmail.com', '0f7e44a922df352c05c5f73cb40ba115', '1234567891', 'patna', 'patna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `received_payment`
--
ALTER TABLE `received_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `received_payment`
--
ALTER TABLE `received_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
