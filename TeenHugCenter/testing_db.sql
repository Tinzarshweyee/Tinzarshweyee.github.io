-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 11:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_tbl`
--

CREATE TABLE `class_tbl` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_tbl`
--

INSERT INTO `class_tbl` (`class_id`, `class_name`) VALUES
(1, 'Web Development'),
(2, 'Java Programming'),
(3, 'C++'),
(4, 'C#'),
(5, 'Discrete Math');

-- --------------------------------------------------------

--
-- Table structure for table `comment_tbl`
--

CREATE TABLE `comment_tbl` (
  `comment_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_tbl`
--

INSERT INTO `comment_tbl` (`comment_id`, `name`, `email`, `phone`, `feedback`) VALUES
(1, 'Myint Moh Lin', 'linmyintmoh@gmail.com', '09788429391', 'Testing'),
(2, 'Myint Moh Lin', 'linmyintmoh@gmail.com', '09788429391', 'Testing 1');

-- --------------------------------------------------------

--
-- Table structure for table `item_tbl`
--

CREATE TABLE `item_tbl` (
  `itemid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_tbl`
--

INSERT INTO `item_tbl` (`itemid`, `name`, `category`, `price`, `description`, `photo`) VALUES
(13, 'HP PAVILION X360', 'IT', 1900000, 'Brand - HP,\r\nScreen size - 14 Inches,\r\nHard disk size - 256 GB,\r\nCPU model - Core i5,\r\nOperating System - Windows,\r\nCPU speed - 2.4 GHz,\r\nProcessor count - 1,\r\nCPU manufacturer - Intel', '41rxXxZWPxL._AC_.jpg'),
(14, 'Macbook Air', 'IT', 2500000, 'Brand	Apple\r\nScreen size	13 Inches\r\nItem weight	2.08 Kilograms\r\nTotal USB ports	2\r\nProcessor count	8\r\nHuman interface input	Keyboard', 'macbook-air-midnight-select-20220606.jfif'),
(15, 'Lenovo IdeaPad Gaming 3 Laptop', 'IT', 1500000, 'Brand - Lenovo\r\nSeries - IdeaPad Gaming 3 15ACH6 - 82K200MYAX\r\nScreen size - 15 Inches\r\nHard disk size - 1256 GB\r\nCPU model - Ryzen 5 5600H\r\nInstalled RAM memory size - 16 GB\r\nOperating System - DOS\r\nGraphics card description - Dedicated\r\nGraphics co-proc', '51PptKyIYbL._AC_SX522_.jpg'),
(16, 'MSI Modern 14', 'IT', 2000000, 'Brand - MSI, Series - Modern 14, Screen size - 14 Inches, Colour - Carbon grey, Hard disk size - 256 GB, CPU model - Ryzen 5 4500U, Installed RAM memory size - 8 GB, Operating System - DOS\r\nGraphics card description	Integrated\r\nCPU speed	4 GHz', '41yZltbSxwL._AC_SX522_.jpg'),
(17, 'Mac', 'IT', 3500000, 'Brand - Apple, Screen size - 24 Inches, Human interface - input', '61p-ADlugUS._AC_SX522_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `std_tbl`
--

CREATE TABLE `std_tbl` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_tbl`
--

INSERT INTO `std_tbl` (`std_id`, `std_name`, `birth_date`, `class_id`) VALUES
(1, 'Myint Moh Lin', '19-05-2001', 4),
(2, 'Kyaw Kyaw', '12-08-2002', 1),
(3, 'Aung Aung', '05-11-2001', 5),
(4, 'Aye Aye', '15-04-2003', 3),
(5, 'Hla Hla', '05-10-2005', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_email` varchar(255) NOT NULL,
  `std_phone` varchar(255) NOT NULL,
  `std_class` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_name`, `user_email`, `password`) VALUES
(1, 'Myint Moh Lin', 'linmyintmoh@gmail.com', 'Myintmoh123!@3'),
(4, 'Teen Hug', 'teenhug777@gmail.com', 'ec77528678416c8c1f99ecb3a53a2568553135f1953c2135e2f48e55f907648a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_tbl`
--
ALTER TABLE `class_tbl`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `item_tbl`
--
ALTER TABLE `item_tbl`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `std_tbl`
--
ALTER TABLE `std_tbl`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_tbl`
--
ALTER TABLE `class_tbl`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_tbl`
--
ALTER TABLE `item_tbl`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `std_tbl`
--
ALTER TABLE `std_tbl`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
