-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 07:42 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `itemprice` double NOT NULL,
  `brand` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `itemname`, `itemprice`, `brand`, `description`, `image`) VALUES
(1, 'SAMSUNG GALAXY S8+', 3299, 'SAMSUNG', 'The Good The Galaxy S8 Plus is a big phone that manages to make a 6.2-inch screen look graceful. It has every hardware and software advantage of the ultrasleek, curved Galaxy S8, including long battery life.', 's8.png'),
(2, 'IPHONE 7PLUS', 3499, 'APPLE', 'Apple iPhone 7 Plus smartphone was launched in September 2016. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 401 pixels per inch. ... The Apple iPhone 7 Plus is powered by quad-core Apple A10 Fusion processor and it comes with 3GB of RAM.', 'iphone7plus.jpg'),
(3, 'ZENPHONE3', 1200, 'ASUS', 'ZenFone 3 is an agile, exquisite design inspired by the beauty of nature. A glass-and-metal wonder that captures the world with absolute clarity. An extraordinary smartphone for a life less ordinary.', 'zenphone3.jpg'),
(5, 'MI5', 799, 'XIAOMI', 'Mi 5\r\nFast as light\r\nSnapdragon 820 / 3GB RAM / 32GB UFS 2.0 Flash\r\n4-axis OIS camera / 3D glass body', 'mi5.jpeg'),
(6, 'NOKIA3310', 299, 'NOKIA', 'A modern classic reimagined,\r\nBattery standby for up to a month,\r\nFour colors to choose from,\r\nPlay the classic Snake.', 'nokia.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
