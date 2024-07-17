-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 08:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'ไอดีสินค้า',
  `name` varchar(255) NOT NULL COMMENT 'ชื่อสินค้า',
  `picture` varchar(255) NOT NULL COMMENT 'รูปสินค้า',
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `picture`, `category`, `description`, `price`, `stock`, `create_date`, `update_date`) VALUES
(1, 'มาม่ารสต้มยำกุ้งน้ำข้น', 'มาม่ารสต้มยำกุ้งน้ำข้น.jpg', 'อาหารกึ่งสำเร็จ', 'มาม่ารสต้มยำกุ้งน้ำข้น เป็นอาหารกึ่งสำเร็จที่เราจะกินได้ทุกเมื่อทุกเวลา โดยแค่ต้มน้ำและเถใส่ แค่งี้คุณก็สามารถกินอย่างอร่อยได้แล้ว ', 8.00, 50, '2024-07-17 04:51:16', '2024-07-17 05:35:25'),
(2, 'มาม่ารสต้มยำกุ้ง', 'มาม่ารสต้มยำกุ้ง.jpg', 'อาหารกึ่งสำเร็จ', 'มาม่ารสต้มยำกุ้งน้ำข้น เป็นอาหารกึ่งสำเร็จที่เราจะกินได้ทุกเมื่อทุกเวลา โดยแค่ต้มน้ำและเถใส่ แค่งี้คุณก็สามารถกินอย่างอร่อยได้แล้ว ', 7.00, 50, '2024-07-17 05:15:35', '2024-07-17 05:35:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีสินค้า', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
