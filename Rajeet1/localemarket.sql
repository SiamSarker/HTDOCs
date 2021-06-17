-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 07:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localemarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_bid`
--

CREATE TABLE `all_bid` (
  `bid_id` int(10) NOT NULL,
  `auction_id` int(10) NOT NULL,
  `b_username` varchar(25) NOT NULL,
  `b_bidQuantity` int(10) NOT NULL,
  `b_bidPrice_perUnit` int(10) NOT NULL,
  `farmer_profit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_bid`
--

INSERT INTO `all_bid` (`bid_id`, `auction_id`, `b_username`, `b_bidQuantity`, `b_bidPrice_perUnit`, `farmer_profit`) VALUES
(1, 1, 'buyer2', 10, 150, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `District` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`District`, `City`) VALUES
('DHAKA', 'DHAKA NORTH'),
('DHAKA', 'DHAKA SOUTH');

-- --------------------------------------------------------

--
-- Table structure for table `bid_rank`
--

CREATE TABLE `bid_rank` (
  `id` int(10) NOT NULL,
  `rank_id` int(10) NOT NULL,
  `b_bidWeight` int(10) NOT NULL,
  `b_bidPrice_perUnit` int(10) NOT NULL,
  `farmer_profit` int(10) NOT NULL,
  `afterBidstart` datetime DEFAULT NULL,
  `afterBidstop` datetime DEFAULT NULL,
  `Bid_roombid_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bid_room`
--

CREATE TABLE `bid_room` (
  `auction_id` int(10) NOT NULL,
  `totalQuantity` int(10) NOT NULL,
  `lowest_bidQuantity` int(10) NOT NULL,
  `lowestPrice_perUnit` int(10) NOT NULL,
  `bid_start` datetime NOT NULL,
  `bid_end` datetime NOT NULL,
  `Productp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid_room`
--

INSERT INTO `bid_room` (`auction_id`, `totalQuantity`, `lowest_bidQuantity`, `lowestPrice_perUnit`, `bid_start`, `bid_end`, `Productp_id`) VALUES
(1, 50, 10, 150, '2021-06-15 21:09:00', '2021-06-15 21:12:00', 1),
(2, 40, 20, 100, '2021-06-16 21:10:00', '2021-06-18 21:10:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `b_username` varchar(25) NOT NULL,
  `password` char(6) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact_no` int(11) NOT NULL,
  `buyer_acc_no` int(10) NOT NULL,
  `District` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`b_username`, `password`, `Name`, `Address`, `Contact_no`, `buyer_acc_no`, `District`, `City`) VALUES
('buyer1', '123456', 'Akash Rahman', '4/1, Tajmahal Road', 1711221112, 1, 'DHAKA', 'DHAKA NORTH'),
('buyer2', '123456', 'Kabir Hossain', '52, Ring Road', 1712211123, 2, 'DHAKA', 'DHAKA SOUTH');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_bid_rank`
--

CREATE TABLE `buyer_bid_rank` (
  `Buyerb_username` varchar(25) NOT NULL,
  `Bid_rankid` int(10) NOT NULL,
  `productName` varchar(25) NOT NULL,
  `totalWeight` int(10) NOT NULL,
  `totalPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_bid_room`
--

CREATE TABLE `buyer_bid_room` (
  `Buyerb_username` varchar(25) NOT NULL,
  `Bid_roombid_id` int(10) NOT NULL,
  `Bid_rankid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_product`
--

CREATE TABLE `buyer_product` (
  `Buyerb_username` varchar(25) NOT NULL,
  `Productp_id` int(10) NOT NULL,
  `productName` varchar(25) NOT NULL,
  `totalWeight` int(10) NOT NULL,
  `totalPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer_product`
--

INSERT INTO `buyer_product` (`Buyerb_username`, `Productp_id`, `productName`, `totalWeight`, `totalPrice`) VALUES
('buyer2', 1, 'Apple', 10, 1550);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `f_username` varchar(25) NOT NULL,
  `password` char(6) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact_no` int(11) NOT NULL,
  `farmer_acc_no` int(10) NOT NULL,
  `District` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`f_username`, `password`, `Name`, `Address`, `Contact_no`, `farmer_acc_no`, `District`, `City`) VALUES
('akash1', '123456', 'Akash Rahman', '4/1, Tajmahal Road', 1711221112, 1, 'DHAKA', 'DHAKA NORTH'),
('kabir1', '123456', 'Kabir Hossain', '52, Ring Road', 1712211123, 2, 'DHAKA', 'DHAKA SOUTH');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notify_id` int(10) NOT NULL,
  `text` varchar(255) NOT NULL,
  `notify_datetime` datetime NOT NULL,
  `farmerf_username` varchar(25) NOT NULL,
  `Buyerb_username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL,
  `trans_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `delivery_status` varchar(25) NOT NULL,
  `Buyerb_username` varchar(25) NOT NULL,
  `farmerf_username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(10) NOT NULL,
  `productName` varchar(25) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Price_perUnit` int(10) NOT NULL,
  `Added_date` datetime NOT NULL,
  `farmerf_username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `productName`, `productImage`, `Quantity`, `Unit`, `Price_perUnit`, `Added_date`, `farmerf_username`) VALUES
(1, 'Apple', 'Product_Image/apples-still-life-fruit-1296x728-header-1296x728.jpg', 100, 'Kg', 160, '2021-06-15 21:08:04', 'akash1'),
(2, 'Pineapple', 'Product_Image/Household-Treasures-Pineapples-benefits-and-uses.jpg', 40, 'Piece', 50, '2021-06-15 21:08:34', 'akash1'),
(3, 'Mango', 'Product_Image/1555773058.jpg', 80, 'Kg', 120, '2021-06-15 21:08:57', 'akash1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_bid`
--
ALTER TABLE `all_bid`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `FKBid_1` (`auction_id`),
  ADD KEY `FKBid_2` (`b_username`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`District`,`City`);

--
-- Indexes for table `bid_rank`
--
ALTER TABLE `bid_rank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKBid_rank901001` (`Bid_roombid_id`);

--
-- Indexes for table `bid_room`
--
ALTER TABLE `bid_room`
  ADD PRIMARY KEY (`auction_id`),
  ADD KEY `FKBid_room169742` (`Productp_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`b_username`),
  ADD KEY `FKBuyer19772` (`District`,`City`);

--
-- Indexes for table `buyer_bid_rank`
--
ALTER TABLE `buyer_bid_rank`
  ADD PRIMARY KEY (`Buyerb_username`,`Bid_rankid`),
  ADD KEY `FKBuyer_Bid_45225` (`Buyerb_username`),
  ADD KEY `FKBuyer_Bid_402928` (`Bid_rankid`);

--
-- Indexes for table `buyer_bid_room`
--
ALTER TABLE `buyer_bid_room`
  ADD PRIMARY KEY (`Buyerb_username`,`Bid_roombid_id`),
  ADD KEY `FKBuyer_Bid_58712` (`Buyerb_username`),
  ADD KEY `FKBuyer_Bid_31019` (`Bid_roombid_id`),
  ADD KEY `FKBuyer_Bid_389441` (`Bid_rankid`);

--
-- Indexes for table `buyer_product`
--
ALTER TABLE `buyer_product`
  ADD PRIMARY KEY (`Buyerb_username`,`Productp_id`),
  ADD KEY `FKBuyer_Prod310173` (`Buyerb_username`),
  ADD KEY `FKBuyer_Prod253` (`Productp_id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`f_username`),
  ADD KEY `FKfarmer247222` (`District`,`City`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notify_id`),
  ADD KEY `FKnotificati27373` (`farmerf_username`),
  ADD KEY `FKnotificati754038` (`Buyerb_username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `FKpayment301829` (`Buyerb_username`),
  ADD KEY `FKpayment943095` (`farmerf_username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `FKProduct80401` (`farmerf_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_bid`
--
ALTER TABLE `all_bid`
  MODIFY `bid_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bid_rank`
--
ALTER TABLE `bid_rank`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bid_room`
--
ALTER TABLE `bid_room`
  MODIFY `auction_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notify_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `all_bid`
--
ALTER TABLE `all_bid`
  ADD CONSTRAINT `FKBid_1` FOREIGN KEY (`auction_id`) REFERENCES `bid_room` (`auction_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKBid_2` FOREIGN KEY (`b_username`) REFERENCES `buyer` (`b_username`) ON DELETE CASCADE;

--
-- Constraints for table `bid_rank`
--
ALTER TABLE `bid_rank`
  ADD CONSTRAINT `FKBid_rank901001` FOREIGN KEY (`Bid_roombid_id`) REFERENCES `bid_room` (`auction_id`) ON DELETE CASCADE;

--
-- Constraints for table `bid_room`
--
ALTER TABLE `bid_room`
  ADD CONSTRAINT `FKBid_room169742` FOREIGN KEY (`Productp_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE;

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `FKBuyer19772` FOREIGN KEY (`District`,`City`) REFERENCES `area` (`District`, `City`) ON DELETE CASCADE;

--
-- Constraints for table `buyer_bid_rank`
--
ALTER TABLE `buyer_bid_rank`
  ADD CONSTRAINT `FKBuyer_Bid_402928` FOREIGN KEY (`Bid_rankid`) REFERENCES `bid_rank` (`id`),
  ADD CONSTRAINT `FKBuyer_Bid_45225` FOREIGN KEY (`Buyerb_username`) REFERENCES `buyer` (`b_username`) ON DELETE CASCADE;

--
-- Constraints for table `buyer_bid_room`
--
ALTER TABLE `buyer_bid_room`
  ADD CONSTRAINT `FKBuyer_Bid_31019` FOREIGN KEY (`Bid_roombid_id`) REFERENCES `bid_room` (`auction_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKBuyer_Bid_389441` FOREIGN KEY (`Bid_rankid`) REFERENCES `bid_rank` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKBuyer_Bid_58712` FOREIGN KEY (`Buyerb_username`) REFERENCES `buyer` (`b_username`) ON DELETE CASCADE;

--
-- Constraints for table `buyer_product`
--
ALTER TABLE `buyer_product`
  ADD CONSTRAINT `FKBuyer_Prod253` FOREIGN KEY (`Productp_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKBuyer_Prod310173` FOREIGN KEY (`Buyerb_username`) REFERENCES `buyer` (`b_username`) ON DELETE CASCADE;

--
-- Constraints for table `farmer`
--
ALTER TABLE `farmer`
  ADD CONSTRAINT `FKfarmer247222` FOREIGN KEY (`District`,`City`) REFERENCES `area` (`District`, `City`) ON DELETE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `FKnotificati27373` FOREIGN KEY (`farmerf_username`) REFERENCES `farmer` (`f_username`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKnotificati754038` FOREIGN KEY (`Buyerb_username`) REFERENCES `buyer` (`b_username`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FKpayment301829` FOREIGN KEY (`Buyerb_username`) REFERENCES `buyer` (`b_username`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKpayment943095` FOREIGN KEY (`farmerf_username`) REFERENCES `farmer` (`f_username`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FKProduct80401` FOREIGN KEY (`farmerf_username`) REFERENCES `farmer` (`f_username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
