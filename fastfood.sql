-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 12:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(20) NOT NULL,
  `restaurantname` varchar(50) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `address` varchar(70) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `owner` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `restaurantname`, `photo`, `address`, `city`, `state`, `mobile`, `owner`, `email`, `password`, `status`) VALUES
(2, 'pizza point', '2.jpg', 'sathana bajar', 'Bijainagar', 'Rajasthan', '8705436784', 'akhilesh', 'pizzapoint@gmail.com', '1234', 'Active'),
(3, 'HOC', '3.jpg', 'sathana bajar', 'Bijainagar', 'Rajasthan', '9087656789', 'rajesh', 'hoc@gmail.com', '1234', 'Active'),
(4, 'heritage', '4.jpg', '27 mil', 'Bijainagar', 'Rajasthan', '9234567123', 'aa', 'heritage@gmail.com', '12345', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `restaurantid` int(20) NOT NULL,
  `productname` varchar(70) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `measurement` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `description` varchar(60) NOT NULL,
  `status` varchar(10) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `restaurantid`, `productname`, `rate`, `weight`, `measurement`, `size`, `description`, `status`, `photo`) VALUES
(1, 2, 'pizza', '120', '40', 'kilo', '20x10', 'cheese pizza', 'Active', '1.jpg'),
(2, 2, 'pasta', '70', '20', 'kilo', '', 'white pasta', 'Active', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `email`, `password`, `name`, `mobile`) VALUES
(3, 'shruti@gmail.com', '1234', 'shruti dadhich', '8760987654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
