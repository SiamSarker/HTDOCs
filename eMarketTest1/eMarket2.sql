-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2021 at 09:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eMarket2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Area`
--

CREATE TABLE `Area` (
  `District` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Area`
--

INSERT INTO `Area` (`District`, `City`) VALUES
('Chittagong', 'Comilla'),
('Chittagong', 'Daudkandi'),
('Chittagong', 'Feni'),
('Dhaka', 'Badda'),
('Dhaka', 'Dhaka'),
('Dhaka', 'Mohammadpur'),
('district', 'city');

-- --------------------------------------------------------

--
-- Table structure for table `Bid_rank`
--

CREATE TABLE `Bid_rank` (
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
-- Table structure for table `Bid_room`
--

CREATE TABLE `Bid_room` (
  `bid_id` int(10) NOT NULL,
  `totalWeight` int(10) NOT NULL,
  `lowest_bidWeight` int(10) NOT NULL,
  `lowestPrice_perUnit` int(10) NOT NULL,
  `bid_start` datetime NOT NULL,
  `bid_end` datetime NOT NULL,
  `Productp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Buyer`
--

CREATE TABLE `Buyer` (
  `b_username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact_no` int(10) NOT NULL,
  `buyer_acc_no` int(15) NOT NULL,
  `District` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Buyer`
--

INSERT INTO `Buyer` (`b_username`, `password`, `Name`, `Address`, `Contact_no`, `buyer_acc_no`, `District`, `City`) VALUES
('arif', '96055f5b06bf9381ac43879351642cf5', 'Arif Sarker', 'Baragow, Daudkandi', 1791988866, 234567189, 'Chittagong', 'Comilla'),
('siam', '81dc9bdb52d04dc20036dbd8313ed055', 'Siam46', 'Baragow', 1245, 2454, 'Chittagong', 'Comilla'),
('test11', '81dc9bdb52d04dc20036dbd8313ed055', 'sf', 'fdsbv', 2434, 23243, 'Dhaka', 'Dhaka'),
('test12', '81dc9bdb52d04dc20036dbd8313ed055', 'vfd', 'vfadsv', 3455, 24355, 'Chittagong', 'Comilla'),
('test6', '81dc9bdb52d04dc20036dbd8313ed055', 'Siam6', 'Dhaka', 1234637890, 1234563890, 'district', 'city');

-- --------------------------------------------------------

--
-- Table structure for table `Buyer_Bid_rank`
--

CREATE TABLE `Buyer_Bid_rank` (
  `Buyerb_username` varchar(25) NOT NULL,
  `Bid_rankid` int(10) NOT NULL,
  `productName` varchar(25) NOT NULL,
  `totalWeight` int(10) NOT NULL,
  `totalPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Buyer_Bid_room`
--

CREATE TABLE `Buyer_Bid_room` (
  `Buyerb_username` varchar(25) NOT NULL,
  `Bid_roombid_id` int(10) NOT NULL,
  `Bid_rankid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Buyer_Product`
--

CREATE TABLE `Buyer_Product` (
  `Buyerb_username` varchar(25) NOT NULL,
  `Productp_id` int(10) NOT NULL,
  `productName` varchar(25) NOT NULL,
  `totalWeight` int(10) NOT NULL,
  `totalPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `f_username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact_no` int(10) NOT NULL,
  `farmer_acc_no` int(15) NOT NULL,
  `District` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`f_username`, `password`, `Name`, `Address`, `Contact_no`, `farmer_acc_no`, `District`, `City`) VALUES
('test1', '81dc9bdb52d04dc20036dbd8313ed055', 'Siam Sarker', 'Daudka', 1826557650, 34546456, 'Chittagong', 'Comilla'),
('test2', '81dc9bdb52d04dc20036dbd8313ed055', 'Siam2', 'Comilla', 2456524, 6546, 'district', 'city'),
('test3', '81dc9bdb52d04dc20036dbd8313ed055', 'Siam3', 'Comilla', 1453597890, 1256767890, 'district', 'city');

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
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `p_id` int(10) NOT NULL,
  `productName` varchar(25) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `Weight` int(10) NOT NULL,
  `Price_perUnit` int(10) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Added_date` datetime NOT NULL,
  `farmerf_username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Area`
--
ALTER TABLE `Area`
  ADD PRIMARY KEY (`District`,`City`);

--
-- Indexes for table `Bid_rank`
--
ALTER TABLE `Bid_rank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKBid_rank901001` (`Bid_roombid_id`);

--
-- Indexes for table `Bid_room`
--
ALTER TABLE `Bid_room`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `FKBid_room169742` (`Productp_id`);

--
-- Indexes for table `Buyer`
--
ALTER TABLE `Buyer`
  ADD PRIMARY KEY (`b_username`),
  ADD KEY `FKBuyer19772` (`District`,`City`);

--
-- Indexes for table `Buyer_Bid_rank`
--
ALTER TABLE `Buyer_Bid_rank`
  ADD PRIMARY KEY (`Buyerb_username`,`Bid_rankid`),
  ADD KEY `FKBuyer_Bid_45225` (`Buyerb_username`),
  ADD KEY `FKBuyer_Bid_402928` (`Bid_rankid`);

--
-- Indexes for table `Buyer_Bid_room`
--
ALTER TABLE `Buyer_Bid_room`
  ADD PRIMARY KEY (`Buyerb_username`,`Bid_roombid_id`),
  ADD KEY `FKBuyer_Bid_58712` (`Buyerb_username`),
  ADD KEY `FKBuyer_Bid_31019` (`Bid_roombid_id`),
  ADD KEY `FKBuyer_Bid_389441` (`Bid_rankid`);

--
-- Indexes for table `Buyer_Product`
--
ALTER TABLE `Buyer_Product`
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
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `FKProduct80401` (`farmerf_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bid_rank`
--
ALTER TABLE `Bid_rank`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Bid_room`
--
ALTER TABLE `Bid_room`
  MODIFY `bid_id` int(10) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bid_rank`
--
ALTER TABLE `Bid_rank`
  ADD CONSTRAINT `FKBid_rank901001` FOREIGN KEY (`Bid_roombid_id`) REFERENCES `Bid_room` (`bid_id`);

--
-- Constraints for table `Bid_room`
--
ALTER TABLE `Bid_room`
  ADD CONSTRAINT `FKBid_room169742` FOREIGN KEY (`Productp_id`) REFERENCES `Product` (`p_id`);

--
-- Constraints for table `Buyer`
--
ALTER TABLE `Buyer`
  ADD CONSTRAINT `FKBuyer19772` FOREIGN KEY (`District`,`City`) REFERENCES `Area` (`District`, `City`);

--
-- Constraints for table `Buyer_Bid_rank`
--
ALTER TABLE `Buyer_Bid_rank`
  ADD CONSTRAINT `FKBuyer_Bid_402928` FOREIGN KEY (`Bid_rankid`) REFERENCES `Bid_rank` (`id`),
  ADD CONSTRAINT `FKBuyer_Bid_45225` FOREIGN KEY (`Buyerb_username`) REFERENCES `Buyer` (`b_username`);

--
-- Constraints for table `Buyer_Bid_room`
--
ALTER TABLE `Buyer_Bid_room`
  ADD CONSTRAINT `FKBuyer_Bid_31019` FOREIGN KEY (`Bid_roombid_id`) REFERENCES `Bid_room` (`bid_id`),
  ADD CONSTRAINT `FKBuyer_Bid_389441` FOREIGN KEY (`Bid_rankid`) REFERENCES `Bid_rank` (`id`),
  ADD CONSTRAINT `FKBuyer_Bid_58712` FOREIGN KEY (`Buyerb_username`) REFERENCES `Buyer` (`b_username`);

--
-- Constraints for table `Buyer_Product`
--
ALTER TABLE `Buyer_Product`
  ADD CONSTRAINT `FKBuyer_Prod253` FOREIGN KEY (`Productp_id`) REFERENCES `Product` (`p_id`),
  ADD CONSTRAINT `FKBuyer_Prod310173` FOREIGN KEY (`Buyerb_username`) REFERENCES `Buyer` (`b_username`);

--
-- Constraints for table `farmer`
--
ALTER TABLE `farmer`
  ADD CONSTRAINT `FKfarmer247222` FOREIGN KEY (`District`,`City`) REFERENCES `Area` (`District`, `City`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `FKnotificati27373` FOREIGN KEY (`farmerf_username`) REFERENCES `farmer` (`f_username`),
  ADD CONSTRAINT `FKnotificati754038` FOREIGN KEY (`Buyerb_username`) REFERENCES `Buyer` (`b_username`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FKpayment301829` FOREIGN KEY (`Buyerb_username`) REFERENCES `Buyer` (`b_username`),
  ADD CONSTRAINT `FKpayment943095` FOREIGN KEY (`farmerf_username`) REFERENCES `farmer` (`f_username`);

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `FKProduct80401` FOREIGN KEY (`farmerf_username`) REFERENCES `farmer` (`f_username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
