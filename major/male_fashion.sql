-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2021 at 02:20 PM
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
-- Database: `male_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `id` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`id`, `email`, `password`, `date_time`, `ip_address`) VALUES
(1, 'dev@gmail.com', 'devchauhan', '10:30 / 10-nov-2021', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(10) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `cat_img`) VALUES
(1, 'man', ''),
(2, 'female', 'images/images.png'),
(3, '3', 'images/children.jpeg'),
(4, 'shop', 'images/children.jpeg'),
(5, '', 'images/'),
(6, '', 'images/'),
(7, '', 'images/');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

CREATE TABLE `customer_reg` (
  `id` bigint(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `registration_date` varchar(50) NOT NULL,
  `audit_ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`id`, `fullname`, `password`, `email`, `mobile`, `registration_date`, `audit_ip`) VALUES
(1, 'Devarsh Chauhan', 'devchauhan', 'devchauhan2200@gmail.com', '1234567890', '2021-11-09 17:49:56', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` bigint(10) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_code` varchar(50) NOT NULL,
  `pro_price` varchar(50) NOT NULL,
  `pro_img` varchar(50) NOT NULL,
  `pro_img_s` varchar(50) NOT NULL,
  `pro_img_t` varchar(50) NOT NULL,
  `pro_decs` varchar(300) NOT NULL,
  `currrent_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_code`, `pro_price`, `pro_img`, `pro_img_s`, `pro_img_t`, `pro_decs`, `currrent_date`) VALUES
(1, 'hoodie', '1001', '899', 'images/a1.jpg', 'images/a2.jpg', 'images/a3.jpg', 'Rejuvenate your clothing with the awesome collection of Cotton Sweatshirts from Scott International. ', '2021-11-10 11:18:52'),
(2, 'hoodie', '1011', '989', 'images/b1.jpg', 'images/b2.jpg', 'images/b3.jpg', 'Rejuvenate your clothing with the awesome collection of Cotton Sweatshirts from Scott International. ', '2021-11-10 11:27:00'),
(3, 'T-sirt', '901', '659', 'images/c1.jpg', 'images/c2.jpg', 'images/c3.jpg', 'Lavender sweatshirt , Lavender Hoodie , Lavender stylish hoodie. Lavender Stylish sweatshirt Made from premium cotton blend material perfect for cool places .', '2021-11-10 11:28:21'),
(4, 'T-sirt', '902', '499', 'images/d1.jpg', 'images/d2.jpg', 'images/d3.jpg', 'It is a Shaun Men winter Sweatshirt. It is comfortable to wear and printed sweathirt', '2021-11-10 11:29:29'),
(5, 'Man Shorts', '601', '389', 'images/e1.jpg', 'images/e2.jpg', 'images/e3.jpg', 'It is a Shaun Men winter Sweatshirt. It is comfortable to wear and printed sweathirt', '2021-11-10 11:39:14'),
(6, 'Man Night Wear', '501', '589', 'images/f1.jpg', 'images/f2.jpg', 'images/f3.jpg', 'Any Season wear - summer, spring and casual, manufactured with fine light weight fabric to give extra comfort. Men jogger pants, track pant, High quality and light- weight. ', '2021-11-10 11:42:21'),
(7, 'Man Gogals', '1201', '569', 'images/6a.jpg', 'images/6b.jpg', 'images/6c.jpg', 'You don’t just need to apply sunscreen to protect your skin from the sun. ', '2021-11-10 11:44:36'),
(8, 'Man Gogals', '1202', '449', 'images/7a.jpg', 'images/7b.jpg', 'images/7c.jpg', 'Comfortable Nose Pads Design - This pair of polarized sunglasses for men with its one-piece rubber.', '2021-11-10 11:51:18'),
(9, 'Man Gogals', '1203', '749', 'images/8a.jpg', 'images/8b.jpg', 'images/8c.jpg', 'Comfortable Nose Pads Design - This pair of polarized sunglasses for men with its one-piece rubber', '2021-11-10 11:52:47'),
(10, 'women Western Wear', '101', '655', 'images/9a.jpg', 'images/9b.jpg', 'images/9c.jpg', 'Flaunt a smart look by wearing this trendy top presented by Laya. Tailored with care using superior quality fabric, it is not only easy to maintain but also comfortable to wear.', '2021-11-10 11:54:56'),
(11, 'women Western Wear', '102', '501', 'images/10a.jpg', 'images/10b.jpg', 'images/10c.jpg', 'DISCLAIMER: The images shown are for representational purposes only.', '2021-11-10 12:01:24'),
(12, 'women Western Wear', '103', '649', 'images/11a.jpg', 'images/11b.jpg', 'images/11c.jpg', 'Shop This Must-Have Versatile Top From Hipie.Wear It With A Pair Of Jeans And Sneakers For A Day Out Or With A Tailored Skirt And Nude Heels For The Much Awaited Party Night.', '2021-11-10 12:02:51'),
(13, 'women Western Wear', '104', '999', 'images/12a.jpg', 'images/12b.jpg', 'images/12c.jpg', 'Shop from a wide range of Tops from MAAHI DESIGNS. Perfect for your everyday use, you could pair it with a stylish pair of Jeans or Trousers complete the look.', '2021-11-10 12:03:42'),
(14, 'women Western Wear', '104', '999', 'images/12a.jpg', 'images/12b.jpg', 'images/12c.jpg', 'Shop from a wide range of Tops from MAAHI DESIGNS. Perfect for your everyday use.', '2021-11-10 12:04:44'),
(15, 'Man Shoes', '001', '1299', 'images/13a.jpg', 'images/13b.jpg', 'images/13c.jpg', 'Description Enjoy all-day cushioned comfort with the Skechers GOwalk Max - Meadows shoe.', '2021-11-10 12:07:34'),
(16, 'Men casual shoes', '002', '999', 'images/14a.jpg', 'images/14b.jpg', 'images/14c.jpg', 'CENTRINO MATERIAL: SYNTHETIC MATERIAL. THESE SHOES ARE MADE UP OF HIGH QUALITY SYNTHETIC MATERIAL STAYS STRONG AND DURABLE .', '2021-11-10 12:10:59'),
(17, 'Men casual shoes', '003', '1410', 'images/15a.jpg', 'images/15b.jpg', 'images/15c.jpg', 'USE SHOE BAGS TO PREVENT ANY STAINS OR MILDEW; DUST ANY DRY DIRT FROM THE SURFACE USING A CLEAN CLOTH. FOR MENS', '2021-11-10 12:12:18'),
(18, 'man casual pant', '221', '599', 'images/17a.jpg', 'images/17b.jpg', 'images/17c.jpg', 'Very Good Qulity But only washing soft', '2021-11-10 13:30:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reg`
--
ALTER TABLE `customer_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_reg`
--
ALTER TABLE `customer_reg`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
