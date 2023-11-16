-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 02:28 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amarnath`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(12) NOT NULL,
  `image1` varchar(1000) NOT NULL,
  `image2` varchar(1000) NOT NULL,
  `image3` varchar(1000) NOT NULL,
  `image4` varchar(1000) NOT NULL,
  `Company` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `processor` varchar(1000) NOT NULL,
  `memory` varchar(1000) NOT NULL,
  `display` varchar(1000) NOT NULL,
  `harddrive` varchar(1000) NOT NULL,
  `gc` varchar(1000) NOT NULL,
  `os` varchar(1000) NOT NULL,
  `sound` varchar(1000) NOT NULL,
  `weight` varchar(1000) NOT NULL,
  `adapter` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `image1`, `image2`, `image3`, `image4`, `Company`, `name`, `processor`, `memory`, `display`, `harddrive`, `gc`, `os`, `sound`, `weight`, `adapter`) VALUES
(76, 'image/friend.png', 'image/', 'image/', 'image/', 'Dell', '', '', '', '', '', '', '', '', '', ''),
(77, 'image/Asus-G513RM-HQ275WS-Laptops-492850461-i-11-1200Wx1200H-96Wx96H.jfif', 'image/', 'image/', 'image/', 'Hp', 'iphone 11', '', '', '', '', '', '', '', '', ''),
(79, 'image/Asus-G513RM-HQ275WS-Laptops-492850461-i-3-1200Wx1200H-96Wx96H.jfif', 'image/', 'image/', 'image/', 'Apple', '', '', '', '', '', '', '', '', '', ''),
(80, 'image/Asus-G513RM-HQ275WS-Laptops-492850461-i-5-1200Wx1200H-96Wx96H.jfif', 'image/', 'image/', 'image/', 'Lenovo', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
