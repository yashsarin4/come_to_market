-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2020 at 08:52 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olx`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Books'),
(2, 'Cycles'),
(3, 'Electronics'),
(4, 'Formals'),
(5, 'Room Decoration'),
(6, 'Fashion & Beauty');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `seller_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(12) UNSIGNED NOT NULL,
  `purchase_year` varchar(4) DEFAULT NULL,
  `description` text NOT NULL,
  `brand` varchar(15) DEFAULT NULL,
  `image1` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `seller_id`, `category_id`, `product_name`, `price`, `purchase_year`, `description`, `brand`, `image1`, `image2`, `image3`) VALUES
(35, 16, 1, 'Analysis Book', 180, '2018', 'very useful analysis book . short notes , summarized data is here . hope it is helpful for you ', 'springer', 'imgs/de01341d29bd2bed323cdd32f6c881c2b1.jpg', 'imgs/bcd6743bb04f1441e94555b3511d590eb2.jpg', 'imgs/be30bdb9d49c2d96313f7272b4b85820b3.jpg'),
(36, 16, 1, 'group theory book', 350, '2019', 'definition are written in a very oganized way with some solved examples . hope it turn out benifitial for you .', 'springer', 'imgs/c16fdf6a33f8dc35e9ebcce15814a5cdb4.jpg', 'imgs/d559bf0e70d6f7b0fdb29190051d1e52b6.jpg', 'imgs/59c03002915eeb16a041f85a1d9a75fbb5.jpg'),
(37, 16, 1, 'Analysis Book', 180, '2018', 'very useful analysis book . short notes , summarized data is here . hope it is helpful for you ', 'springer', 'imgs/de01341d29bd2bed323cdd32f6c881c2b1.jpg', 'imgs/bcd6743bb04f1441e94555b3511d590eb2.jpg', 'imgs/be30bdb9d49c2d96313f7272b4b85820b3.jpg'),
(38, 16, 1, 'group theory book', 350, '2019', 'definition are written in a very oganized way with some solved examples . hope it turn out benifitial for you .', 'springer', 'imgs/c16fdf6a33f8dc35e9ebcce15814a5cdb4.jpg', 'imgs/d559bf0e70d6f7b0fdb29190051d1e52b6.jpg', 'imgs/59c03002915eeb16a041f85a1d9a75fbb5.jpg'),
(39, 16, 1, 'Physics Book', 400, '2018', 'very useful analysis book . short notes , summarized data is here . hope it is helpful for you ', 'springer', 'imgs/de01341d29bd2bed323cdd32f6c881c2b1.jpg', 'imgs/bcd6743bb04f1441e94555b3511d590eb2.jpg', 'imgs/be30bdb9d49c2d96313f7272b4b85820b3.jpg'),
(40, 16, 1, 'Modern Algebra book', 350, '2019', 'definition are written in a very oganized way with some solved examples . hope it turn out benifitial for you .', 'springer', 'imgs/c16fdf6a33f8dc35e9ebcce15814a5cdb4.jpg', 'imgs/d559bf0e70d6f7b0fdb29190051d1e52b6.jpg', 'imgs/59c03002915eeb16a041f85a1d9a75fbb5.jpg'),
(41, 16, 1, 'Chemistry Book', 180, '2018', 'very useful analysis book . short notes , summarized data is here . hope it is helpful for you ', 'springer', 'imgs/de01341d29bd2bed323cdd32f6c881c2b1.jpg', 'imgs/bcd6743bb04f1441e94555b3511d590eb2.jpg', 'imgs/be30bdb9d49c2d96313f7272b4b85820b3.jpg'),
(42, 16, 1, 'group theory book', 350, '2019', 'definition are written in a very oganized way with some solved examples . hope it turn out benifitial for you .', 'springer', 'imgs/c16fdf6a33f8dc35e9ebcce15814a5cdb4.jpg', 'imgs/d559bf0e70d6f7b0fdb29190051d1e52b6.jpg', 'imgs/59c03002915eeb16a041f85a1d9a75fbb5.jpg'),
(43, 16, 3, 'iphone ten', 45000, '2019', 'very fast , handy , durable , light weight .', 'Apple', 'imgs/9ffab74430bab5a998146d5665c5bfa2m1.jpg', 'imgs/dc8810e9e3f25554aaa44ac4e1ba68e5m2.jpg', 'imgs/13907e475409544f65e4e0beeb1c3d93m3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `room_number` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `user_id`, `phone`, `address`, `room_number`) VALUES
(16, 19, '9999999999', 'disang', 'g-15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `pass`) VALUES
(19, 'yash', 'sarin', 'yash@gmail.com', '$2y$10$XUSFR9mO4ipzH7ZRjvun/.OXFq2TkrgdK32I5aevLNb0OXRY6x4mG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE SET NULL;

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
