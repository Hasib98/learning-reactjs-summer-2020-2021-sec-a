-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 10:00 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contentmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `contentcreator`
--

CREATE TABLE `contentcreator` (
  `id` int(50) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` varchar(200) NOT NULL,
  `pdf` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  `cdescription` varchar(200) NOT NULL,
  `crating` varchar(200) NOT NULL,
  `ccomplain` varchar(500) NOT NULL,
  `cstatus` int(1) NOT NULL,
  `cprice` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contentcreator`
--

INSERT INTO `contentcreator` (`id`, `title`, `image`, `pdf`, `video`, `cdescription`, `crating`, `ccomplain`, `cstatus`, `cprice`) VALUES
(1, 'This is Title 1', 'scenery.jpg', '', 'scenery.mp4', 's simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled ', '5', 'a', 1, 1000),
(2, 'This is Title 2', 'study.jpg', 'study.pdf', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believabl', '4', '', 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(50) NOT NULL,
  `invoiceid` int(50) NOT NULL,
  `invoicetitle` varchar(50) NOT NULL,
  `invoiceprice` int(50) NOT NULL,
  `invoicestatus` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoiceid`, `invoicetitle`, `invoiceprice`, `invoicestatus`) VALUES
(8, 1, 'a', 1000, 1),
(9, 1, 'a', 1000, 1),
(10, 1, 'a', 1000, 1),
(11, 1, 'a', 1000, 1),
(12, 1, 'a', 1000, 1),
(13, 1, 'a', 1000, 1),
(14, 1, 'a', 1000, 1),
(15, 1, 'a', 1000, 1),
(16, 1, 'a', 1000, 1),
(17, 1, 'a', 1000, 1),
(18, 1, 'a', 1000, 1),
(19, 1, 'a', 1000, 1),
(20, 1, 'a', 1000, 1),
(21, 1, 'a', 1000, 1),
(22, 1, 'scenery ', 1000, 1),
(23, 1, 'scenery ', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(50) NOT NULL,
  `ordername` varchar(200) DEFAULT NULL,
  `orderdescription` varchar(200) DEFAULT NULL,
  `orderstatus` int(1) DEFAULT NULL,
  `template` varchar(200) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `ordername`, `orderdescription`, `orderstatus`, `template`, `picture`) VALUES
(9, 'This is Title 1', 'hasib all content', 1, '9.jpg', 'scenery.jpg'),
(10, 'This is Title 2', 'duita balti', 1, NULL, 'study.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(50) NOT NULL,
  `orderid` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `orderstatus` int(2) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `amount` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `orderid`, `userid`, `name`, `orderstatus`, `title`, `image`, `amount`) VALUES
(1, 0, 9, '', 0, 'This is Title 1', '', '20'),
(2, 9, 3, 'Shourav Shome', 1, 'This is Title 1', 'scenery.jpg', '1000'),
(11, 10, 3, 'Shourav Shome', 1, 'This is Title 2', 'study.jpg', '100'),
(12, 9, 9, 'Shourav Shome', 1, 'This is Title 1', 'scenery.jpg', '1000'),
(13, 9, 9, 'Shourav Shome', 1, 'This is Title 1', 'scenery.jpg', '1000'),
(14, 10, 10, 'Shourav Shome', 1, 'This is Title 2', 'study.jpg', '100'),
(15, 9, 9, 'Shourav Shome', 1, 'This is Title 1', 'scenery.jpg', '1000'),
(16, 9, 9, 'Shourav Shome', 1, 'This is Title 1', 'scenery.jpg', '1000'),
(17, 9, 9, 'Shourav Shome', 1, 'This is Title 1', 'scenery.jpg', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `profilepic` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `name`, `password`, `email`, `phoneno`, `type`, `profilepic`) VALUES
(1, 'Pritha', 'Pritha Saha', '1234', 'pritha@gmail.com', '12345678', 'admin', ''),
(2, 'Rajan', 'Rajan Das', '1234', 'rajan@gmail.com', '12345678', 'creator', ''),
(3, 'Shourav', 'Shourav Shome', '1234', 'shourav.shome98@gmail.com', '12345678', 'user', 'Shourav.jpeg'),
(4, 'Hasib', 'S.M.Hasib', '1234', 'hasib@gmail.com', '1234566', 'manager', 'Hasib.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contentcreator`
--
ALTER TABLE `contentcreator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contentcreator`
--
ALTER TABLE `contentcreator`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
