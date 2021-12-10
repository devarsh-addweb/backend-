-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2021 at 01:53 PM
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
-- Database: `addweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(10) NOT NULL,
  `department_no` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `deductions` varchar(50) NOT NULL,
  `commision` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `joining_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `department_no`, `fullname`, `job`, `salary`, `deductions`, `commision`, `mobile`, `email`, `joining_date`) VALUES
(1, '11', 'purvil chauhan', 'clerk', '30000', '2000', '2500', '8376477387', 'p@gmail.com', '2016-10-07'),
(2, '32', 'ragu mali', 'salesman', '29000', '2100', '1300', '930498293', 'r@gmail.com', '2021-12-03'),
(3, '43', 'menil kothari', 'analytics', '38000', '2000', '3000', '9318939813', 'm@gmail.com', '2021-10-10'),
(4, '45', 'vimal shah', 'managmnent', '12000', '2000', '1000', '748873887', 'v@gmail.com', '2021-10-13'),
(5, '34', 'vinni thakur', 'devloper', '32000', '3000', '1200', '86534567', 'v@gmail.com', '2021-10-05'),
(6, '54', 'gopal patel', 'teacher', '43000', '5000', '2000', '928374827', 'g@gmail,com', '2021-10-20'),
(7, '32', 'yuvrjsinh chauhan', 'PI', '32000', '6000', '2000', '839292018', 'y@gmail.com', '2021-10-01'),
(10, '23', 'aliya bhatt', 'actor', '200000', '10000', '20000', '9389993797', 'aliya@gmail.com', '2021-10-13'),
(11, '43', 'vicky bhatt', 'IT', '20000', '1000', '2000', '9292928398', 'v@gmail.com', '2021-10-19'),
(12, '67', 'mira bhardvaj', 'IT', '34000', '3000', '1000', '9283902928', 'm@gmail.com', '2021-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `password`, `email`, `mobile`) VALUES
(1, 'devarsh chauhan', 'chauhan', 'dev@gmail.com', 9878765656),
(5, 'menil', 'menil', 'm@gmail.com', 65432345),
(6, 'uv patel', 'uv', 'u@gmail.com', 12345678),
(11, 'gopi', 'gopi', 'g@gmail.com', 0),
(12, 'devarsh', 'jsdsfkwbf', 'dev@gmail.com', 1111111111),
(13, 'gopal ', 'manish', 'manish@gmail.com', 11111),
(14, 'dev', 'eufh', 'd@gmail.com', 89),
(16, 'd chauhan', 'devarsh', 'd@gmail.com', 123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
