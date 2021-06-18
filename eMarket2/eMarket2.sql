-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2021 at 02:21 AM
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
-- Table structure for table `All_Bid`
--

CREATE TABLE `All_Bid` (
  `bid_id` int(10) NOT NULL,
  `auction_id` int(10) NOT NULL,
  `b_username` varchar(25) NOT NULL,
  `b_bidQuantity` int(10) NOT NULL,
  `b_bidPrice_perUnit` int(10) NOT NULL,
  `farmer_profit` int(10) NOT NULL,
  `lastcheck` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `Bid_room`
--

CREATE TABLE `Bid_room` (
  `auction_id` int(10) NOT NULL,
  `totalQuantity` int(10) NOT NULL,
  `lowest_bidQuantity` int(10) NOT NULL,
  `lowestPrice_perUnit` int(10) NOT NULL,
  `bid_start` datetime NOT NULL,
  `bid_end` datetime NOT NULL,
  `Productp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Bid_room`
--

INSERT INTO `Bid_room` (`auction_id`, `totalQuantity`, `lowest_bidQuantity`, `lowestPrice_perUnit`, `bid_start`, `bid_end`, `Productp_id`) VALUES
(5, 18, 10, 15, '2021-06-17 22:24:00', '2021-06-17 22:27:00', 2),
(12, 0, 0, 21, '2021-06-18 05:38:00', '2021-06-18 05:42:00', 5);

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
('buyer1', '81dc9bdb52d04dc20036dbd8313ed055', 'Buyer one', 'H#45, Housing Limited', 1234567890, 123435798, 'Dhaka', 'Mohammadpur'),
('buyer2', '81dc9bdb52d04dc20036dbd8313ed055', 'Rajeet', 'fafs', 23234, 2343543, 'Dhaka', 'Badda'),
('siam', '81dc9bdb52d04dc20036dbd8313ed055', 'Siam46', 'Baragow', 1245, 2454, 'Chittagong', 'Comilla'),
('test11', '81dc9bdb52d04dc20036dbd8313ed055', 'sf', 'fdsbv', 2434, 23243, 'Dhaka', 'Dhaka'),
('test12', '81dc9bdb52d04dc20036dbd8313ed055', 'vfd', 'vfadsv', 3455, 24355, 'Chittagong', 'Comilla'),
('test6', '81dc9bdb52d04dc20036dbd8313ed055', 'Siam6', 'Dhaka', 1234637890, 1234563890, 'district', 'city'),
('user123', '81dc9bdb52d04dc20036dbd8313ed055', 'siam Sarker', 'H12', 345645645, 235346546, 'Chittagong', 'Comilla');

-- --------------------------------------------------------

--
-- Table structure for table `Buyer_Product`
--

CREATE TABLE `Buyer_Product` (
  `Buyerb_username` varchar(25) NOT NULL,
  `Productp_id` int(10) NOT NULL,
  `productName` varchar(25) NOT NULL,
  `totalQuantity` int(10) NOT NULL,
  `totalPrice` int(10) NOT NULL,
  `BidCheck` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Buyer_Product`
--

INSERT INTO `Buyer_Product` (`Buyerb_username`, `Productp_id`, `productName`, `totalQuantity`, `totalPrice`, `BidCheck`) VALUES
('buyer2', 5, 'Apple', 15, 345, 1);

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
('farmer1', '81dc9bdb52d04dc20036dbd8313ed055', 'Farmer One', 'H#36, Iqbal Road', 1924558259, 3345678, 'Dhaka', 'Badda'),
('farmer2', '81dc9bdb52d04dc20036dbd8313ed055', 'Siam Sarker', 'wef', 1234567890, 1234567890, 'Dhaka', 'Badda'),
('test1', '81dc9bdb52d04dc20036dbd8313ed055', 'Siam Sarker', 'Daudka', 1826557650, 34546456, 'Chittagong', 'Comilla'),
('test2', '81dc9bdb52d04dc20036dbd8313ed055', 'Siam2', 'Comilla', 2456524, 6546, 'district', 'city'),
('test3', '81dc9bdb52d04dc20036dbd8313ed055', 'Siam3', 'H#36, Iqbal Road', 1453597890, 1256767890, 'Dhaka', 'Mohammadpur');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notify_id` int(10) NOT NULL,
  `text` varchar(255) NOT NULL,
  `notify_datetime` datetime NOT NULL,
  `farmerf_username` varchar(25) NOT NULL,
  `Buyerb_username` varchar(25) NOT NULL,
  `f_text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notify_id`, `text`, `notify_datetime`, `farmerf_username`, `Buyerb_username`, `f_text`) VALUES
(62, 'Payment successfull for 35 kg of Mango for total 1055 taka. <br>Check your payment history for more details. ', '2021-06-18 00:23:48', 'farmer2', 'buyer2', NULL),
(65, 'Potato added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 00:27:49', 'test3', 'user123', NULL),
(66, 'Tomato added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 00:32:00', 'test3', 'user123', NULL),
(67, 'Potato added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 01:08:53', 'test3', 'user123', NULL),
(68, 'Tomato added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 01:25:24', 'test3', 'user123', NULL),
(69, 'Potatonew added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 01:25:33', 'test3', 'user123', NULL),
(70, 'Mango added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 01:27:05', 'farmer2', 'user123', NULL),
(71, 'Potatonew added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 01:28:50', 'test3', 'user123', NULL),
(72, 'Potatonew added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 01:29:05', 'test3', 'user123', NULL),
(73, 'Mango added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 01:29:11', 'farmer2', 'user123', NULL),
(74, 'Potatonew added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 01:34:29', 'test3', 'user123', NULL),
(75, 'Tomato added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 01:41:17', 'test3', 'user123', NULL),
(76, 'Potato added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 01:51:47', 'test3', 'user123', NULL),
(77, '<?php if(=farmer){>?Mango is sold.<?php} else {?> Mango added to your cart. <br>Please check your cart and complete the payment.<?php}?>', '2021-06-18 02:15:20', 'farmer2', 'user123', NULL),
(78, '<?php if(=farmer){?>Mango is sold.<?php} else {?> Mango added to your cart. <br>Please check your cart and complete the payment.<?php}?>', '2021-06-18 02:16:06', 'farmer2', 'user123', NULL),
(79, '', '2021-06-18 02:28:38', 'farmer2', 'user123', 'Mango is sold. <br>Check your product list.'),
(80, 'Mango added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 04:01:44', 'farmer2', 'user123', 'Mango is sold. <br>Check your product list.'),
(81, 'Mango added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 04:10:58', 'farmer2', 'user123', 'Mango is sold. <br>Check your product list.'),
(82, 'Payment successfull for 8 kg of Mango for total 240 taka. <br>Check your payment history for more details.', '2021-06-18 04:11:04', 'farmer2', 'user123', 'Payment successfull for 8 kg of Mango for total 240 taka.'),
(83, 'Apple added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 04:46:53', 'farmer2', 'buyer2', 'Apple is sold. <br>Check your product list.'),
(84, 'Payment successfull for 10 kg of Apple for total 550 taka. <br>Check your payment history for more details.', '2021-06-18 04:47:15', 'farmer2', 'buyer2', 'Payment successfull for 10 kg of Apple for total 550 taka.'),
(85, 'A bid is placed for Auction 11 by buyer2', '2021-06-18 05:13:22', 'farmer2', 'buyer2', NULL),
(86, 'You won Auction 5 check cart', '2021-06-18 05:13:41', 'test3', 'buyer2', 'Auction 5 has ended'),
(87, 'Please check Auction 5', '2021-06-18 05:13:41', 'test3', 'buyer2', 'Next ranked notifiyed.'),
(88, 'A bid is placed for Auction 11 by test6', '2021-06-18 05:14:32', 'farmer2', 'test6', NULL),
(89, 'You won Auction 11 check cart', '2021-06-18 05:15:44', 'farmer2', 'test6', 'Auction 11 has ended'),
(90, 'Please check Auction 11', '2021-06-18 05:15:44', 'farmer2', 'test6', 'Next ranked notifiyed.'),
(91, 'You won Auction 11 check cart', '2021-06-18 05:17:09', 'farmer2', 'buyer2', 'Auction 11 has ended'),
(92, 'A bid is placed for Auction 12 by buyer2', '2021-06-18 05:38:33', 'farmer2', 'buyer2', NULL),
(93, 'A bid is placed for Auction 12 by test6', '2021-06-18 05:39:41', 'farmer2', 'test6', NULL),
(94, 'A bid is placed for Auction 12 by buyer2', '2021-06-18 05:40:19', 'farmer2', 'buyer2', NULL),
(95, 'Payment successfull for 2 kg of Tomato for total 10 taka. <br>Check your payment history for more details.', '2021-06-18 05:41:39', 'test3', 'buyer2', 'Payment successfull for 2 kg of Tomato for total 10 taka.'),
(96, 'Payment successfull for 13 kg of Apple for total 728 taka. <br>Check your payment history for more details.', '2021-06-18 05:41:39', 'farmer2', 'buyer2', 'Payment successfull for 13 kg of Apple for total 728 taka.'),
(97, 'You won Auction 12 check cart', '2021-06-18 05:42:16', 'farmer2', 'buyer2', NULL),
(98, 'Please check Auction 12', '2021-06-18 05:42:16', 'farmer2', 'buyer2', NULL),
(99, 'Mango added to your cart. <br>Please check your cart and complete the payment.', '2021-06-18 05:56:31', 'farmer2', 'test6', 'Mango is sold. <br>Check your product list.'),
(100, 'Payment successfull for 10 kg of Potato for total 300 taka. <br>Check your payment history for more details.', '2021-06-18 05:57:20', 'test3', 'test6', 'Payment successfull for 10 kg of Potato for total 300 taka.'),
(101, 'Payment successfull for 20 kg of Tomato for total 500 taka. <br>Check your payment history for more details.', '2021-06-18 05:57:20', 'test3', 'test6', 'Payment successfull for 20 kg of Tomato for total 500 taka.'),
(102, 'Payment successfull for 3 kg of Mango for total 90 taka. <br>Check your payment history for more details.', '2021-06-18 05:57:20', 'farmer2', 'test6', 'Payment successfull for 3 kg of Mango for total 90 taka.'),
(103, 'Payment successfull for 13 kg of Apple for total 741 taka. <br>Check your payment history for more details.', '2021-06-18 05:57:20', 'farmer2', 'test6', 'Payment successfull for 13 kg of Apple for total 741 taka.'),
(104, 'Delevary of product Tomato is ok. <br>Check your payment history for more details.', '2021-06-18 06:07:04', 'test3', 'test6', 'Delevary of product Tomato is ok');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL,
  `trans_id` int(10) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `delivery_status` varchar(25) NOT NULL,
  `Buyerb_username` varchar(25) NOT NULL,
  `farmerf_username` varchar(25) NOT NULL,
  `payment_time` datetime NOT NULL,
  `p_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `trans_id`, `amount`, `delivery_status`, `Buyerb_username`, `farmerf_username`, `payment_time`, `p_id`) VALUES
(2, 23432, '730', 'on the way', 'test6', 'farmer1', '2021-06-14 13:13:18', 1),
(3, 4568, '755', 'On the Way', 'test6', 'test3', '0000-00-00 00:00:00', 1),
(4, 23243, '755', 'On the Way', 'test6', 'test3', '2021-06-10 20:11:10', 1),
(5, 213421, '705', 'On the Way', 'test6', 'test3', '2021-06-10 20:13:08', 1),
(6, 12421, '455', 'On the Way', 'test6', 'test3', '2021-06-10 20:18:29', 1),
(7, 345435, '305', 'On the Way', 'test6', 'test3', '2021-06-13 22:33:27', 1),
(9, 324342, '630', 'On the Way', 'test6', 'test3', '2021-06-14 01:37:33', 1),
(10, 324342, '800', 'On the Way', 'test6', 'test3', '2021-06-14 01:37:33', 1),
(11, 234324, '30', 'delivered', 'test6', 'test3', '2021-06-17 17:51:17', 1),
(12, 234324, '125', 'On the Way', 'test6', 'test3', '2021-06-14 02:16:34', 2),
(13, 3234, '23 kg.<br>690 taka.', 'On the Way', 'test6', 'test3', '2021-06-17 18:12:26', 1),
(14, 3234, '12 kg.<br>300 taka.', 'On the Way', 'test6', 'test3', '2021-06-17 18:12:26', 2),
(15, 234345, '23 kg.<br>690 taka.', 'null', 'test6', 'test3', '2021-06-17 22:14:19', 1),
(16, 234345, '21 kg.<br>525 taka.', 'delivered', 'test6', 'test3', '2021-06-17 19:54:04', 2),
(17, 122334, '35 kg.<br>1055 taka.', 'On the Way', 'buyer2', 'farmer2', '2021-06-18 00:23:48', 4),
(18, 23432, '23 kg.<br>690 taka.', 'On the Way', 'user123', 'farmer2', '2021-06-18 04:07:13', 4),
(19, 1231, '8 kg.<br>240 taka.', 'On the Way', 'user123', 'farmer2', '2021-06-18 04:11:04', 4),
(20, 234254, '10 kg.<br>550 taka.', 'delivered', 'buyer2', 'farmer2', '2021-06-18 04:48:00', 5),
(21, 232453, '2 kg.<br>10 taka.', 'On the Way', 'buyer2', 'test3', '2021-06-18 05:41:39', 2),
(22, 232453, '13 kg.<br>728 taka.', 'On the Way', 'buyer2', 'farmer2', '2021-06-18 05:41:39', 5),
(23, 12343, '10 kg.<br>300 taka.', 'On the Way', 'test6', 'test3', '2021-06-18 05:57:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `p_id` int(10) NOT NULL,
  `productName` varchar(25) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Price_perUnit` int(10) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Added_date` datetime NOT NULL,
  `farmerf_username` varchar(25) NOT NULL,
  `AvailableQuantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`p_id`, `productName`, `productImage`, `Quantity`, `Price_perUnit`, `Unit`, `Added_date`, `farmerf_username`, `AvailableQuantity`) VALUES
(1, 'Potato', 'productimage/potato.jpg', 30, 30, 'Kg', '2021-06-05 20:35:06', 'test3', 6),
(2, 'Tomato', 'productimage/tomato.jpg', 28, 25, 'Kg', '2021-06-10 13:08:08', 'test3', 6),
(3, 'Potatonew', 'productimage/Potatoes.jpg', 40, 11, 'Kg', '2021-06-17 21:52:53', 'test3', 6),
(4, 'Mango', 'productimage/1555773058.jpg', 3, 30, 'Kg', '2021-06-17 23:24:58', 'farmer2', 3),
(5, 'Apple', 'productimage/apples-still-life-fruit-1296x728-header-1296x728.jpg', 6, 23, 'Kg', '2021-06-18 04:45:05', 'farmer2', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `All_Bid`
--
ALTER TABLE `All_Bid`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `FKBid_1` (`auction_id`),
  ADD KEY `FKBid_2` (`b_username`);

--
-- Indexes for table `Area`
--
ALTER TABLE `Area`
  ADD PRIMARY KEY (`District`,`City`);

--
-- Indexes for table `Bid_room`
--
ALTER TABLE `Bid_room`
  ADD PRIMARY KEY (`auction_id`),
  ADD KEY `FKBid_room169742` (`Productp_id`),
  ADD KEY `FKBid_room169743` (`Productp_id`);

--
-- Indexes for table `Buyer`
--
ALTER TABLE `Buyer`
  ADD PRIMARY KEY (`b_username`),
  ADD KEY `FKBuyer19772` (`District`,`City`);

--
-- Indexes for table `Buyer_Product`
--
ALTER TABLE `Buyer_Product`
  ADD PRIMARY KEY (`Buyerb_username`,`Productp_id`),
  ADD KEY `FKBuyer_Prod310173` (`Buyerb_username`),
  ADD KEY `FKBuyer_Prod253` (`Productp_id`),
  ADD KEY `FKBuyer_Prod310174` (`Buyerb_username`);

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
  ADD KEY `FKpayment943095` (`farmerf_username`),
  ADD KEY `id` (`p_id`);

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
-- AUTO_INCREMENT for table `All_Bid`
--
ALTER TABLE `All_Bid`
  MODIFY `bid_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Bid_room`
--
ALTER TABLE `Bid_room`
  MODIFY `auction_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notify_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `All_Bid`
--
ALTER TABLE `All_Bid`
  ADD CONSTRAINT `FKBid_1` FOREIGN KEY (`auction_id`) REFERENCES `Bid_room` (`auction_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKBid_2` FOREIGN KEY (`b_username`) REFERENCES `buyer` (`b_username`) ON DELETE CASCADE;

--
-- Constraints for table `Bid_room`
--
ALTER TABLE `Bid_room`
  ADD CONSTRAINT `FKBid_room169742` FOREIGN KEY (`Productp_id`) REFERENCES `Product` (`p_id`) ON DELETE CASCADE;

--
-- Constraints for table `Buyer`
--
ALTER TABLE `Buyer`
  ADD CONSTRAINT `FKBuyer19772` FOREIGN KEY (`District`,`City`) REFERENCES `Area` (`District`, `City`);

--
-- Constraints for table `Buyer_Product`
--
ALTER TABLE `Buyer_Product`
  ADD CONSTRAINT `FKBuyer_Prod253` FOREIGN KEY (`Productp_id`) REFERENCES `Product` (`p_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKBuyer_Prod310173` FOREIGN KEY (`Buyerb_username`) REFERENCES `Buyer` (`b_username`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKBuyer_Prod310174` FOREIGN KEY (`Buyerb_username`) REFERENCES `Buyer` (`b_username`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `FKpayment943095` FOREIGN KEY (`farmerf_username`) REFERENCES `farmer` (`f_username`),
  ADD CONSTRAINT `id` FOREIGN KEY (`p_id`) REFERENCES `Product` (`p_id`);

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `FKProduct80401` FOREIGN KEY (`farmerf_username`) REFERENCES `farmer` (`f_username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
