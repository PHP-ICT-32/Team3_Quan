-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 02:38 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categoryID` varchar(50) NOT NULL,
  `categoryName` varchar(150) NOT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryID`, `categoryName`, `description`) VALUES
(1, 'C001', 'Điện thoại thông minh', 'dòng sẩn phẩm điên thoại thông minh cầm tay'),
(2, 'C002', 'máy tính xách tay', NULL),
(3, 'C003', 'Bàn để máy tính', NULL),
(4, 'C004', 'Máy tính treo tường', NULL),
(5, 'c005', 'điện thoại thông minh', NULL),
(6, 'c006', 'điện thoại iphone', NULL),
(7, 'C007', 'máy tính cá nhân', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `fullName` varchar(100) NOT NULL,
  `birthDate` date DEFAULT NULL,
  `avatar` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employeeID` varchar(20) NOT NULL,
  `employeeName` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `avatar` text,
  `roll` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderID` varchar(20) NOT NULL,
  `productID` varchar(20) NOT NULL,
  `unitPrice` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `discount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderID` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `orderDate` date DEFAULT NULL,
  `shipperID` varchar(20) DEFAULT NULL,
  `shippedDate` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productID` varchar(20) NOT NULL,
  `productName` varchar(150) NOT NULL,
  `supplierID` varchar(150) DEFAULT NULL,
  `categoryID` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unitPrice` int(11) DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `description` text,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productID`, `productName`, `supplierID`, `categoryID`, `quantity`, `unitPrice`, `discount`, `status`, `description`, `image`) VALUES
(0, '01y00', 'Yếm Váy', 'SL01', 'C001', 12, 270, 0, 1, 'Yếm quần chất vải kaki, nhiều màu', 'image/yem0.jpg'),
(1, '01y01', 'Yếm quần short', 'S001', 'C001', 20, 280, 0, 1, 'Yếm quần short vải bò, đủ size', 'image/yem1.jpg\r\n'),
(2, '01y02', 'Yếm vải váy baloon', 'S002', 'C002', 100, 280, 0, 1, 'Yếm vải xẻ đùi, có 2 size M, L', 'image/yem2.jpg\r\n\r\n'),
(3, '01y03', 'Yếm vải Quần Dài', 'SL01', 'C004', 30, 270, 0, 1, 'Yếm vải quần dài baloon, over size', 'image/yem3.jpg\r\n'),
(4, '01y04', 'yếm váy', 'S001', 'C002', 21, 270, NULL, 1, 'yếm caro, thắt eo', 'image/yem4.jpg'),
(5, '01y06', 'Yếm Quần', 'SL01', 'C001', 23, 320, NULL, 1, 'Yếm quần rách gối và có hoa phía trước\r\n', 'image/yem6.jpg'),
(6, '01y05', 'Yếm Vải Quần có Cúc', 'S001', 'c006', 20, 280, 44, 1, 'Yếm 2 dây dáng quần, có sx M, L', 'image/yem5.jpg'),
(7, '02q01', 'quần bò dài', 'S002', 'C004', 22, 290, NULL, 1, 'quần bò dài, rách gối', 'image/q1.jpg'),
(8, '02q02', 'Quần bò ', 'SL01', 'c005', 34, 250, NULL, 1, 'quần bò ống rộng', 'image/q2.jpg'),
(9, '02q03', 'Quần bò sọc kẻ', 'S002', 'C007', 30, 270, NULL, 1, 'quần ống rộng đen, sọc kẻ trắng', 'image/q3.jpg'),
(10, '02y04', 'quần bò dài', 'SL01', 'c006', 11, 320, NULL, 1, 'quần ghi bò dài, có thắt lưng', 'image/q4.jpg'),
(11, '02y05', 'quần bò xanh rách', 'S001', 'C007', 23, 330, NULL, 1, 'quần ò xanh rách', 'image/q5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shippers`
--

CREATE TABLE `shippers` (
  `id` int(11) NOT NULL,
  `shipperID` varchar(20) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `supplierID` varchar(20) NOT NULL,
  `companyName` varchar(150) NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `website` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplierID`, `companyName`, `address`, `phone`, `website`) VALUES
(1, 'SL01', 'sam sung', 'hàn quốc', NULL, NULL),
(2, 'S001', 'INNT', 'Thanh Xuân, Hà Nội', NULL, NULL),
(3, 'S002', 'ABC', 'Hai Bà Trưng, hà nội', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categoryID` (`categoryID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderID`,`productID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipperID` (`shipperID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productID` (`productID`),
  ADD KEY `supplierID` (`supplierID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `shippers`
--
ALTER TABLE `shippers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shipperID` (`shipperID`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supplierID` (`supplierID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shippers`
--
ALTER TABLE `shippers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`shipperID`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`shipperID`) REFERENCES `shippers` (`shipperID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customers` (`username`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`supplierID`) REFERENCES `suppliers` (`supplierID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
