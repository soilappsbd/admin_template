-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 09:26 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_template`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `itemid` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`, `itemid`, `active`, `flag`) VALUES
(1, 'Samsung', 1, 1, 1),
(2, 'Nokia', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(10) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `itemname`, `active`, `flag`) VALUES
(1, 'Mobile-4', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL,
  `date` date NOT NULL,
  `productname` varchar(255) DEFAULT '0',
  `product_code` varchar(255) NOT NULL,
  `product_qty` varchar(255) NOT NULL,
  `itemid` int(50) NOT NULL,
  `categoryid` int(50) NOT NULL,
  `total_pursess` int(155) NOT NULL,
  `payment` int(155) NOT NULL,
  `payment_mode` int(10) NOT NULL,
  `payment_note` int(11) NOT NULL,
  `purchase_price` varchar(255) NOT NULL,
  `sell_price` varchar(255) NOT NULL,
  `werehouse` int(11) NOT NULL,
  `memo_no` varchar(155) NOT NULL,
  `active` int(10) NOT NULL,
  `flag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `vendorid`, `date`, `productname`, `product_code`, `product_qty`, `itemid`, `categoryid`, `total_pursess`, `payment`, `payment_mode`, `payment_note`, `purchase_price`, `sell_price`, `werehouse`, `memo_no`, `active`, `flag`) VALUES
(1, 101, '2019-09-04', 'Nokia-1100', '101126064', '200', 1, 2, 200000, 100000, 0, 1, '1000', '1200', 1, '101', 1, 1),
(2, 103, '2019-09-04', 'samsung-s8', '103118828', '200', 1, 1, 4000000, 100000, 0, 0, '20000', '25000', 1, '102', 1, 1),
(3, 101, '2019-09-04', 'Nokia-1100', '101128395', '200', 1, 2, 200000, 100000, 0, 1, '1000', '1200', 1, '103', 1, 1),
(4, 101, '2019-09-08', 'watch', '101116556', '10', 1, 1, 10000, 2000, 0, 0, '1000', '12000', 1, '2525', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `flag` enum('1','0','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `mobile`, `email`, `created_at`, `updated_at`, `flag`) VALUES
(1, 'admin', '123456', 'Ramakanta Kamar', '01598755', 'ramarama@gmail.com', '2019-09-01 18:00:00', '2019-09-01 18:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(10) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `vendorname` varchar(255) NOT NULL,
  `vendor_address` varchar(255) DEFAULT '0',
  `vendor_mobile` varchar(30) NOT NULL,
  `active` int(11) NOT NULL,
  `flag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `vendor_id`, `vendorname`, `vendor_address`, `vendor_mobile`, `active`, `flag`) VALUES
(1, 101, 'Samad', 'uttara', '01716886955', 1, 1),
(2, 103, 'Pintu', 'Fulbaria', '01823151351', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_accounts`
--

CREATE TABLE `vendor_accounts` (
  `id` int(10) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `pursess_amount` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `due_amount` varchar(255) NOT NULL,
  `advance` varchar(255) NOT NULL,
  `paid` int(11) NOT NULL,
  `flag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_accounts`
--

INSERT INTO `vendor_accounts` (`id`, `vendor_id`, `pursess_amount`, `payment`, `due_amount`, `advance`, `paid`, `flag`) VALUES
(1, 101, '410000', '202000', '208000', '0', 0, 1),
(2, 103, '4000000', '100000', '3900000', '0', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `warehouse_name` varchar(155) NOT NULL,
  `flag` enum('1','0','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `warehouse_name`, `flag`) VALUES
(1, 'Uttara Showroom', '1'),
(2, 'Moheshpur', '1');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_stok`
--

CREATE TABLE `warehouse_stok` (
  `id` int(11) NOT NULL,
  `warehouse_name` varchar(155) NOT NULL,
  `productid` int(50) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_qty` int(255) NOT NULL,
  `sell_rate` int(50) NOT NULL,
  `date` date NOT NULL,
  `flag` enum('1','0','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse_stok`
--

INSERT INTO `warehouse_stok` (`id`, `warehouse_name`, `productid`, `product_cat`, `product_qty`, `sell_rate`, `date`, `flag`) VALUES
(1, '1', 101126064, 2, 200, 1200, '0000-00-00', '1'),
(2, '2', 103118828, 1, 200, 25000, '0000-00-00', '1'),
(3, '1', 101128395, 2, 200, 1200, '0000-00-00', '1'),
(4, '1', 101116556, 1, 10, 12000, '2019-09-08', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_accounts`
--
ALTER TABLE `vendor_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouse_stok`
--
ALTER TABLE `warehouse_stok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor_accounts`
--
ALTER TABLE `vendor_accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warehouse_stok`
--
ALTER TABLE `warehouse_stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
