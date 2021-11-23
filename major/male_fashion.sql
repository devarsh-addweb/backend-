-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2021 at 06:49 AM
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
(1, 'd@gmail.com', 'dev', '10:30 / 10-nov-2021', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` bigint(10) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_code` varchar(50) NOT NULL,
  `pro_price` varchar(50) NOT NULL,
  `pro_img_f` varchar(50) NOT NULL,
  `pro_cart_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `pro_name`, `pro_code`, `pro_price`, `pro_img_f`, `pro_cart_time`) VALUES
(2, 'Female T-sirt ', 'fullnk323', '559', 'images/w1a.jpg', '2021-11-17 06:34:51'),
(3, 'Feman Dress', 'wmndrs90', '699', 'images/w3a.jpg', '2021-11-17 11:11:13'),
(4, 'Man Hodieee', '0001', '799', 'images/b3.jpg', '2021-11-17 13:21:13'),
(6, 'Man Half sweater for winter', 'wntrhlf22', '899', 'images/m3a.jpg', '2021-11-18 06:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` bigint(10) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'man');

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
(1, 'Devarsh Chauhan', 'devarsh', 'd@gmail.com', '1772876766', '2021-11-17 06:10:46', '127.0.0.1'),
(2, 'Rj', 'rj', 'r@gmail.com', '3999', '2021-11-17 14:20:56', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `female`
--

CREATE TABLE `female` (
  `female_id` bigint(10) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_code` varchar(50) NOT NULL,
  `pro_price` varchar(50) NOT NULL,
  `pro_img_f` varchar(50) NOT NULL,
  `pro_img_s` varchar(50) NOT NULL,
  `pro_img_t` varchar(50) NOT NULL,
  `pro_description` varchar(50) NOT NULL,
  `pro_enter_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `female`
--

INSERT INTO `female` (`female_id`, `pro_name`, `pro_code`, `pro_price`, `pro_img_f`, `pro_img_s`, `pro_img_t`, `pro_description`, `pro_enter_time`) VALUES
(1, 'Female One Piece', 'fmlone12', '1249', 'images/w2a.jpg', 'images/w2b.jpg', 'images/w2c.jpg', 'Beautiful Round Buttons & Front Slit: The dress ha', '2021-11-14 10:19:58'),
(2, 'Female Dress', 'wmndrs90', '699', 'images/w3a.jpg', 'images/w3b.jpg', 'images/w3c.jpg', ' A wide range of  Western Dress  from BIRDLINE, Sp', '2021-11-14 10:20:53'),
(3, 'Female T-sirt ', 'fullnk323', '559', 'images/w1a.jpg', 'images/w1b.jpg', 'images/w1c.jpg', 'Shop from a wide range of long T-Shirts for girls ', '2021-11-14 10:22:13'),
(4, 'Female T-sirt ', 'multi232', '449', 'images/w4c.jpg', 'images/w4a.jpg', 'images/w4b.jpg', 'Shop from a wide range of long T-Shirts for girls ', '2021-11-14 10:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `kids_id` bigint(10) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_code` varchar(50) NOT NULL,
  `pro_price` varchar(50) NOT NULL,
  `pro_img_f` varchar(50) NOT NULL,
  `pro_img_s` varchar(50) NOT NULL,
  `pro_img_t` varchar(50) NOT NULL,
  `pro_description` varchar(500) NOT NULL,
  `pro_enter_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`kids_id`, `pro_name`, `pro_code`, `pro_price`, `pro_img_f`, `pro_img_s`, `pro_img_t`, `pro_description`, `pro_enter_time`) VALUES
(1, 'Kids Dangri', 'dngri212', '1349', 'images/k3a.jpg', 'images/k3b.jpg', 'images/k3c.jpg', 'This flap romper design looks superb with stretchable denim lycra. Now with a distress look. Get yours today before stock runs out!! Head out for an unplanned weekend with your friends by wearing these mid blue Dungarees Capri from ELENDRA.\r\n', '2021-11-14 10:24:40'),
(2, 'Kids Tsirt', 'tsit365', '599', 'images/k1c.jpg', 'images/k2b.jpg', 'images/k1a.jpg', 'Kids All type Tsirt By Rangoli Fashion Wear. All Cotten brand with Qulity Is Better than other Product.', '2021-11-14 10:26:00'),
(3, 'Kids Pair', 'pir323', '1449', 'images/k2a.jpg', 'images/k2c.jpg', 'images/k1b.jpg', 'Kids Full Pair Prduct for full balck tsirt and jeans for only kids girl..', '2021-11-14 10:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `man`
--

CREATE TABLE `man` (
  `man_id` bigint(10) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_code` varchar(50) NOT NULL,
  `pro_price` varchar(50) NOT NULL,
  `pro_img_f` varchar(50) NOT NULL,
  `pro_img_s` varchar(50) NOT NULL,
  `pro_img_t` varchar(50) NOT NULL,
  `pro_description` varchar(500) NOT NULL,
  `pro_enter_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `man`
--

INSERT INTO `man` (`man_id`, `pro_name`, `pro_code`, `pro_price`, `pro_img_f`, `pro_img_s`, `pro_img_t`, `pro_description`, `pro_enter_time`) VALUES
(1, 'Man Hodieee', '0001', '899', 'images/17c.jpg', 'images/', 'images/', '100% Super combed cotton terry fabric, rib cuffs and collar for added comfort, convenient pockets, authentic jockey logo embroidery, to be worn as loungewear, leisurewear.', '2021-11-19 06:17:35'),
(2, 'Man sweater for winter', 'swtwnt21', '1249', 'images/m4a.jpg', 'images/m4b.jpg', 'images/m4c.jpg', 'The coolest of all the colours is here. It goes with everything. Look cool this winter too. Flaunt the pomegranate colour and show the world how amazing you are. Shop for this cool sweater online, available exclusively at The Souled Store.', '2021-11-14 09:00:26'),
(3, 'Man Half sweater for winter', 'wntrhlf22', '899', 'images/m3a.jpg', 'images/m3b.jpg', 'images/m3c.jpg', 'The coolest of all the colours is here. It goes with everything. Look cool this winter too. Flaunt the pomegranate colour and show the world how amazing you are. Shop for this cool sweater online, available exclusively at The Souled Store.', '2021-11-14 09:01:57'),
(4, 'Man  Blazzer', 'mnblzr878', '599', 'images/c3.jpg', 'images/c2.jpg', 'images/c1.jpg', 'Jack & Jones Men 54%Cotton, 43%Polyester, 3%Elastane Slim Fit Full Sleeve Solid Navy Blue Single Breasted Blazer', '2021-11-17 11:32:22');

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
(18, 'man casual pant', '221', '599', 'images/17a.jpg', 'images/17b.jpg', 'images/17c.jpg', 'Very Good Qulity But only washing soft', '2021-11-10 13:30:25'),
(19, 'T-sirt', '333', '345', 'images/a1.jpg', 'images/a2.jpg', 'images/a3.jpg', 'Tsirt is very comfortable and it base only cotten.', '2021-11-11 08:04:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_reg`
--
ALTER TABLE `customer_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female`
--
ALTER TABLE `female`
  ADD PRIMARY KEY (`female_id`);

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`kids_id`);

--
-- Indexes for table `man`
--
ALTER TABLE `man`
  ADD PRIMARY KEY (`man_id`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_reg`
--
ALTER TABLE `customer_reg`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `female`
--
ALTER TABLE `female`
  MODIFY `female_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kids`
--
ALTER TABLE `kids`
  MODIFY `kids_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `man`
--
ALTER TABLE `man`
  MODIFY `man_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
