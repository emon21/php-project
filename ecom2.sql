-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 04:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(35) NOT NULL,
  `user_password` varchar(85) NOT NULL,
  `user_picture` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `user_password`, `user_picture`) VALUES
(1, 'admin@mail.com', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `seesion_id` varchar(255) NOT NULL,
  `pro_id` varchar(50) NOT NULL,
  `product_name` varchar(80) NOT NULL,
  `product_price` varchar(80) NOT NULL,
  `pro_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `seesion_id`, `pro_id`, `product_name`, `product_price`, `pro_qty`) VALUES
(16, 'n201qem66qg4phk6a1g98pq967', '33', 'Bradley Carlson', '286', 286);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `catagory_name` varchar(50) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `catagory_img` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `catagory_name`, `slug`, `catagory_img`) VALUES
(20, 'Hu Stephens', 'hu-stephens', '637b90f7b390f.jpg'),
(21, 'Kiayada Hart', 'kiayada-hart', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

CREATE TABLE `customer_reg` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(35) NOT NULL,
  `customer_password` varchar(80) NOT NULL,
  `customer_phone` varchar(50) NOT NULL,
  `customer_address` text NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `customer_address`, `token`, `status`) VALUES
(1, 'demo', 'admin@mail.com', '12345', '45658547474', 'xgdfhfgj', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_name` varchar(85) NOT NULL,
  `product_slug` varchar(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_price` varchar(35) NOT NULL,
  `product_img` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `product_name`, `product_slug`, `product_desc`, `product_price`, `product_img`) VALUES
(21, 12, '44444', '', 'tetertertyew', '456', '2.jpg'),
(22, 13, 'rgsrdyd', '', 'hdytheryery', '120', '4.jpg'),
(23, 14, 'yery', '', 'yyrtuyrturuu', '250', '3.webp'),
(24, 14, 'Courtney Wood', '', 'Enim sit ipsa quisq', '513', '6369213680c73.jpg'),
(25, 14, 'Jason Golden', '', 'Iste labore vitae vo', '781', 'Koala.jpg'),
(27, 12, 'twet', '', 'tetertertyew', '500', '2.jpg'),
(28, 13, 'rgsrdyd', '', 'hdytheryery', '120', '4.jpg'),
(29, 14, 'yery', '', 'yyrtuyrturuu', '120', '3.webp'),
(31, 14, 'Jason Golden', '', 'Iste labore vitae vo', '780', 'Koala.jpg'),
(32, 14, 'Laura Bridges', '', 'Laboriosam voluptas', '450', 'Penguins.jpg'),
(33, 20, 'Bradley Carlson', '', 'Veniam lorem hic co', '286', '2.jpg'),
(34, 21, 'Ingrid Fowler', '', 'Delectus omnis ut v', '246', '3.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reg`
--
ALTER TABLE `customer_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer_reg`
--
ALTER TABLE `customer_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
