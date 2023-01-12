-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 10:55 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `dept_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`dept_id`, `shop_id`, `category`) VALUES
(1, 2, 'fruits'),
(2, 2, 'vegetables'),
(3, 2, 'cooldrinks'),
(4, 2, 'Soap'),
(5, 2, 'icecreams');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(11) NOT NULL,
  `login_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `place` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `login_id`, `name`, `place`, `email`, `mobile`, `status`) VALUES
(1, 5, 'anu', 'kozhikode', 'a@gmail.com', '1234567890', '0');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `customer_id`, `feedback`) VALUES
(1, 4, 'Good'),
(4, 5, 'hloo'),
(7, 5, 'gu'),
(13, 5, 'goood'),
(19, 5, 'vnn');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(20) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `req_id` int(20) NOT NULL,
  `method` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `cus_id`, `req_id`, `method`) VALUES
(1, 0, 2, 'upi'),
(2, 0, 4, ''),
(3, 0, 5, 'upi'),
(4, 5, 17, 'upi'),
(5, 5, 0, 'cash on delivery');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `type`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '1'),
(2, 'family', 'family123', 'shop', '1'),
(3, 'fresh', 'fresh123', 'shop', '1'),
(4, 'abcd', 'abcd123', 'customer', '0'),
(5, 'poi', 'poi123', 'customer', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `exp_date` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `shop_id`, `cat_id`, `product`, `image`, `stock`, `exp_date`, `price`, `status`) VALUES
(1, 2, 4, 'Dove', '28075640.jfif', '100', '12/02/2022', '35', '0'),
(2, 2, 4, 'Lux', '513485332.jpg', '60', '11/06/2022', '25', '0'),
(3, 2, 1, 'Strawberry', '1672507579.jfif', '70', '12/02/2022', '120', '0'),
(4, 2, 5, 'arun icecreams', '949948909.jfif', '100', '12/02/2022', '200', '0');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(11) NOT NULL,
  `shop_id` int(20) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quandity` varchar(40) NOT NULL,
  `val` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supermarket`
--

CREATE TABLE `supermarket` (
  `shop_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `place` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supermarket`
--

INSERT INTO `supermarket` (`shop_id`, `login_id`, `name`, `place`, `mobile`, `email`, `description`, `status`) VALUES
(1, 2, 'family', 'kozhikode', '1234567890', 'family@gmail.com', 'A supermarket is a self-service shop offering a wide variety of food, beverages and household products, organized into sections. This kind of store is larger and has a wider selection than earlier grocery stores, but is smaller and more limited in th', '1'),
(2, 3, 'fresh', 'kozhikode', '1234567899', 'fresh@gmail.com', 'supermarket, large retail store operated on a self-service basis, selling groceries, fresh produce, meat, bakery and dairy products, and sometimes an assortment of nonfood goods. Supermarkets gained acceptance in the United States during the 1930s. ', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `supermarket`
--
ALTER TABLE `supermarket`
  ADD PRIMARY KEY (`shop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `supermarket`
--
ALTER TABLE `supermarket`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
