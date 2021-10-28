-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 02:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backbone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `mobile`, `email`) VALUES
(1, 'devarsh chauhan', 'devarsh', '9898876465', 'd@gmail.coml'),
(2, 'vimal b', 'vimal', '9898876465', 'm@gmail.coml'),
(3, 'jigar d', 'jigar', '9898876465', 'j@gmail.coml'),
(4, 'menil kothari', 'menil', '989884565', 'menil@gmail.coml'),
(5, 'gopal patel', 'gopipatel', '989887647', 'gopi@gmail.coml');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) DEFAULT NULL,
  `cat_description` varchar(50) DEFAULT NULL,
  `cat_picture` varchar(50) DEFAULT NULL,
  `cat_active` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_description`, `cat_picture`, `cat_active`) VALUES
(1, 'footwear', 'shoes', NULL, 'available'),
(2, 'footwear', 'sliper', NULL, 'available'),
(3, 'footwear', 'sports', NULL, 'available'),
(4, 'footwear', 'lofers', NULL, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `contact_mobile` varchar(50) DEFAULT NULL,
  `contact_email` varchar(50) DEFAULT NULL,
  `cus_comment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `cust_id`, `contact_mobile`, `contact_email`, `cus_comment`) VALUES
(1, 1, '4567', 'd@gmail.com', 'nice product'),
(2, 2, '45674567', 'manish@gmail.com', 'good product'),
(3, 3, '4567', 'devarsh@gmail.com', 'very very nice');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(50) DEFAULT NULL,
  `cust_password` varchar(50) DEFAULT NULL,
  `cust_email` varchar(50) DEFAULT NULL,
  `cust_mobile` varchar(50) DEFAULT NULL,
  `cust_city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_password`, `cust_email`, `cust_mobile`, `cust_city`) VALUES
(1, 'devarsh chauhan', 'devarshchauahn', 'd@gmail.com', '456789', 'ahmedabad'),
(2, 'yuvrajsinh chauhan', 'uvchauhan', 'uv@gmail.com', '458765489', 'ahmedabad'),
(3, 'bhupendrabhai patel', 'bhupendra', 'b@gmail.com', '456722289', 'gandhinagar');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(50) DEFAULT NULL,
  `e_password` varchar(50) DEFAULT NULL,
  `e_email` varchar(50) DEFAULT NULL,
  `e_mobile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `e_password`, `e_email`, `e_mobile`) VALUES
(1, 'piyush tewari', 'xcvgh', 'd@gmail.com', '45678'),
(2, 'amish laambha', 'xcvgh', 'd@gmail.com', '45678'),
(3, 'manishb thakkar', 'qwdnk', 'de@gmail.vom', '987654'),
(4, 'manishb thakkar', 'qwdnk', 'de@gmail.vom', '987654');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `order_number` varchar(50) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `pro_id`, `order_number`, `customer_id`) VALUES
(1, 24, '234', 1),
(2, 32, '244', 2),
(3, 12, '344', 8),
(4, 23, 'f', 432),
(5, 432, 'f', 432);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `o_id` int(11) NOT NULL,
  `cus_id` varchar(50) DEFAULT NULL,
  `o_num` varchar(50) DEFAULT NULL,
  `o_date` varchar(50) DEFAULT NULL,
  `payemnt_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`o_id`, `cus_id`, `o_num`, `o_date`, `payemnt_id`) VALUES
(1, 'vghvg', 'ndnjd', '9-2-2021', 89),
(65, '8b ', '98 b', '0-9-2021', 345),
(98, 'bjhbs', '899', '0-9-2021', 67),
(789, 'yujvbj', 'ybhj', '6-7-2021', 3232);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pyment_id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `payment_date_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pyment_id`, `cust_id`, `payment_type`, `payment_date_time`) VALUES
(1, 1, 'paytm', '3-4-2021'),
(2, 1, 'paytm', '3-4-2011');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(50) DEFAULT NULL,
  `pro_details` varchar(50) DEFAULT NULL,
  `pro_price` varchar(50) DEFAULT NULL,
  `pro_image` varchar(50) DEFAULT NULL,
  `pro_offer` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_details`, `pro_price`, `pro_image`, `pro_offer`) VALUES
(1, 'sport shoes', 'qwfhb', 'qwqnbqw', 'dwqidnh', 'bqdhjqeb'),
(2, 'jknbqwfhj', 'bdhwbd', 'qbbchcjw', 'dbnqhije', 'qfn');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `pro_id` varchar(50) DEFAULT NULL,
  `pro_name` varchar(50) DEFAULT NULL,
  `pro_description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `cust_id`, `pro_id`, `pro_name`, `pro_description`) VALUES
(1, 1, '11', 'shoes', 'hbccuweweuhcbcuw  weh  h fh fu'),
(2, 2, '090', 'sliper', 'qqinwf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pyment_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=790;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pyment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
