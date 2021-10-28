-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 03:39 PM
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
(5, 'gopal patel', 'gopipatel', '989887647', 'gopi@gmail.coml'),
(6, 'dhiraj ravta', 'dhiraj', '987654', 'd@gmail.com'),
(7, 'raval', 'drupal', '23456789', 'd@gmail.com'),
(8, 'devendra', 'varma', '0987654321', 'd@gmail.com'),
(9, 'dr sarad', 'sarad', '425678272627', 's@gmail.com'),
(10, 'vrudhhi', 'panchal', '876538685', 'v@gmail.com');

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
(4, 'footwear', 'lofers', NULL, 'available'),
(5, 'cloth', 'jeans', 'null', 'yes'),
(6, 'cloth', 'sirt', 'null', 'yes'),
(7, 'kitchan', 'boul', 'null', 'yes'),
(8, 'kitchan', 'dish', 'null', 'yes'),
(9, 'mobile', 'nokia', 'null', 'yes'),
(10, 'mobile', 'oppo', 'null', 'yes');

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
(3, 3, '4567', 'devarsh@gmail.com', 'very very nice'),
(4, 11, '12345678', 'd@gmail.com', 'now open '),
(5, 41, '8765345687', 'f@gmail.com', 'hey siri'),
(6, 11, '12345678', 'd@gmail.com', 'now open '),
(7, 41, '8765345687', 'f@gmail.com', 'hey siri'),
(8, 11, '12345678', 'd@gmail.com', 'now open '),
(9, 41, '8765345687', 'f@gmail.com', 'hey siri');

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
(3, 'bhupendrabhai patel', 'bhupendra', 'b@gmail.com', '456722289', 'gandhinagar'),
(4, 'payal', 'pyaal', 'p@gmail.com', '987654567', 'amd'),
(5, 'nikki', 'chauhan', 'n@gmail.com', '876545678', 'amd'),
(6, 'payal', 'pyaal', 'p@gmail.com', '987654567', 'amd'),
(7, 'nikki', 'chauhan', 'n@gmail.com', '876545678', 'amd'),
(8, 'payal', 'pyaal', 'p@gmail.com', '987654567', 'amd'),
(9, 'nikki', 'chauhan', 'n@gmail.com', '876545678', 'amd'),
(10, 'nidhi', 'chauahan', 'n@gmail.com', '987654345', 'khedbrahma');

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
(4, 'manishb thakkar', 'qwdnk', 'de@gmail.vom', '987654'),
(5, 'nutan', 'damor', 'n@gmail.com', '987654'),
(6, 'sunil', 'pig', 's@gmail.com', '423525425'),
(7, 'vinit', 'chauhan', 'v@gmail.com', '9776678767'),
(8, 'vuni', 'panchal', 'v@gmail.com', '655667878'),
(9, 'niti', 'patel', 'n@gmail.com', '7677654655'),
(10, 'nishi', 'rathod', 'n@gmail.com', '876668768');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `feedback` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `u_id`, `email`, `feedback`) VALUES
(11, 1, 'virat@gmail.com', 'I recommend to use MRF bat'),
(12, 2, 'rohit@gmail.com', 'I recommend to use CEAT bat'),
(13, 3, 'rahul@gmail.com', 'I recommend to use SG bat'),
(14, 4, 'sky@gmail.com', 'I recommend to use SG bat'),
(15, 5, 'pant@gmail.com', 'I recommend to use SG bat'),
(16, 6, 'pandya@gmail.com', 'I recommend to use SG bat'),
(17, 7, 'jadeja@gmail.com', 'I recommend to use SS bat'),
(18, 8, 'bhuvi@gmail.com', 'I recommend to use SG ball'),
(19, 9, 'jasprit@gmail.com', 'I recommend to use SG ball'),
(20, 10, 'chahal@gmail.com', 'I recommend to use SG ball');

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
(5, 432, 'f', 432),
(6, 21, '8h8h', 12),
(7, 97, 'huh9', 989),
(8, 78, 'bihi9', 879),
(9, 99, 'uhbu99', 988),
(10, 899, 'hkuh9', 88);

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

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `s_ac_no` int(11) DEFAULT NULL,
  `s_mobile` int(11) DEFAULT NULL,
  `s_address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`s_id`, `s_name`, `s_ac_no`, `s_mobile`, `s_address`) VALUES
(1, 'Manish', 1234567890, 1234323231, 'Ahmedabad'),
(2, 'Devarsh', 1234567810, 434322111, 'Ahmedabad'),
(3, 'Ranjeet', 456789123, 1234323232, 'Ahmedabad'),
(4, 'Jaydeep', 143143143, 234234234, 'Rajkot'),
(5, 'Shriya', 234567890, 123456789, 'Delhi'),
(6, 'Himanshu', 157157156, 444555666, 'jaipur'),
(7, 'mansi', 199199888, 888777541, 'Jaipur'),
(8, 'Vinit', 456456478, 143123140, 'jaipur'),
(9, 'Nikhil', 987654321, 654321987, 'Jaipur'),
(10, 'Anjani', 987645677, 909098765, 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `user_regi`
--

CREATE TABLE `user_regi` (
  `id` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_regi`
--

INSERT INTO `user_regi` (`id`, `email`, `username`, `password`, `mobile`, `address`, `date`) VALUES
(1, 'virat@gmail.com', 'virat', 'kohli', 901165223, 'Delhi', NULL),
(2, 'rohit@gmail.com', 'rohit', 'sharma', 876587658, 'Mumbai', '2021-10-06'),
(3, 'rahul@gmail.com', 'kl', 'rahul', 876543876, 'Mumbai', '2021-10-03'),
(4, 'sky@gmail.com', 'sky', 'yadav', 1234567890, 'Mumbai', '2021-10-14'),
(5, 'pant@gmail.com', 'Pant', 'rishabh', 1234567980, 'Delhi', '2021-08-02'),
(6, 'pandya@gmail.com', 'hardik', 'pandya', 1234567676, 'mumbai', '2020-12-15'),
(7, 'jadeja@gmail.com', 'ravindra', 'bapu', 1431231431, 'Jamnagar', '2020-10-05'),
(8, 'bhuvi@gmail.com', 'bhuvi', 'swing', 1321541441, 'Mumbai', '2018-10-17'),
(9, 'jasprit@gmail.com', 'jassi', 'yorker', 1234554321, 'Mumbai', '2019-12-12'),
(10, 'chahal@gmail.com', 'yuzi', 'gamechanger', 1543215234, 'Mumbai', NULL);

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `u_id` (`u_id`);

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
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_ac_no` (`s_ac_no`),
  ADD UNIQUE KEY `s_mobile` (`s_mobile`);

--
-- Indexes for table `user_regi`
--
ALTER TABLE `user_regi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_regi`
--
ALTER TABLE `user_regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
