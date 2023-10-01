-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2023 at 05:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE `table_category` (
  `id` int NOT NULL,
  `ProductCategory` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`id`, `ProductCategory`) VALUES
(1, 'Electronics'),
(2, 'Clothing'),
(3, 'Home and Garden'),
(4, 'Books'),
(5, 'Toys');

-- --------------------------------------------------------

--
-- Table structure for table `table_products`
--

CREATE TABLE `table_products` (
  `id` int NOT NULL,
  `ProductName` varchar(25) NOT NULL,
  `ProductDescription` text,
  `ProductCategoryID` int DEFAULT NULL,
  `ProductQuantity` int DEFAULT NULL,
  `ProductPrice` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_products`
--

INSERT INTO `table_products` (`id`, `ProductName`, `ProductDescription`, `ProductCategoryID`, `ProductQuantity`, `ProductPrice`) VALUES
(2, 'Laptop', 'Powerful laptop for gaming and productivity', 1, 5, 1299.99),
(3, 'T-shirt', 'Cotton t-shirt in various colors', 2, 50, 19.99),
(5, 'Action Fig', 'Collectible action figure', 5, 8, 49.99),
(6, 'Sofa', 'Comfortable three-seater sofa', 3, 3, 799.99),
(7, 'Science Fiction Book', 'Classic sci-fi novel', 4, 30, 9.99),
(8, 'Cookbook', 'Collection of delicious recipes', 4, 25, 14.99),
(9, 'Action Figure', 'Collectible action figure', 5, 8, 29.99),
(10, 'Board Game', 'Family board game for entertainment', 5, 12, 24.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `table_products`
--
ALTER TABLE `table_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ProductCategoryID` (`ProductCategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_category`
--
ALTER TABLE `table_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `table_products`
--
ALTER TABLE `table_products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_products`
--
ALTER TABLE `table_products`
  ADD CONSTRAINT `table_products_ibfk_1` FOREIGN KEY (`ProductCategoryID`) REFERENCES `table_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
