-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 12:59 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayrem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `admin_id` int(40) NOT NULL,
  `full_name` varchar(400) NOT NULL,
  `phone` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `uimage` varchar(400) NOT NULL,
  `userdate` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`admin_id`, `full_name`, `phone`, `email`, `password`, `uimage`, `userdate`) VALUES
(1, 'adio', '07069176577', 'moboluwaduro0112@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'images/bitt1.jpg', '2019-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE `category_tb` (
  `category_id` int(10) NOT NULL,
  `name` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tb`
--

INSERT INTO `category_tb` (`category_id`, `name`) VALUES
(3, 'MTN Data'),
(4, 'DSTV Subscription'),
(5, 'GoTv Subscription'),
(6, 'Startime Subscription');

-- --------------------------------------------------------

--
-- Table structure for table `mail_tb`
--

CREATE TABLE `mail_tb` (
  `mail_id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `datesend` varchar(200) NOT NULL,
  `datereplied` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_tb`
--

INSERT INTO `mail_tb` (`mail_id`, `name`, `email`, `subject`, `message`, `status`, `datesend`, `datereplied`) VALUES
(2, 'adio', 'moboluwaduro0112@gmail.com', 'mtn', 'dvffdf', 'reply', '2019-01-12 15:37:08', '2019-01-12 15:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `orderd_tb`
--

CREATE TABLE `orderd_tb` (
  `orderd_id` int(10) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `status` varchar(200) NOT NULL,
  `dateOrdered` varchar(200) NOT NULL,
  `dateDelivered` varchar(200) NOT NULL,
  `type_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderd_tb`
--

INSERT INTO `orderd_tb` (`orderd_id`, `phone`, `email`, `status`, `dateOrdered`, `dateDelivered`, `type_id`) VALUES
(1, '07069176577', 'moboluwaduro0112@gmail.com', '', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_tb`
--

CREATE TABLE `order_tb` (
  `order_id` int(11) NOT NULL,
  `iuc` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `status` varchar(200) NOT NULL,
  `dateOrdered` varchar(200) NOT NULL,
  `dateDelivered` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_tb`
--

INSERT INTO `order_tb` (`order_id`, `iuc`, `phone`, `email`, `status`, `dateOrdered`, `dateDelivered`, `type_id`) VALUES
(1234501, '2038404383', '070783646', 'sema@gmail.com', 'unconfirmed', '12/01/2019', '', 13),
(1234502, '3000049565', '07069176577', 'moboluwaduro0112@gmail.com', 'unconfirmed', '2019-01-12 13:37:46', '', 8),
(1234503, '2000675687', '09004347587', 'mjjjwej@gamil.com', 'unconfirmed', '2019-01-12 13:41:26', '', 9);

-- --------------------------------------------------------

--
-- Table structure for table `type_tb`
--

CREATE TABLE `type_tb` (
  `type_id` int(40) NOT NULL,
  `catname` varchar(400) NOT NULL,
  `price` varchar(400) NOT NULL,
  `category_id` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_tb`
--

INSERT INTO `type_tb` (`type_id`, `catname`, `price`, `category_id`) VALUES
(1, '350 500mb', '350', 3),
(2, '550 1Gb', '550', 3),
(3, '1100 2Gb', '1100', 3),
(4, '1650 3Gb', '1650', 3),
(5, '2200 4Gb', '2200', 3),
(6, '2750 5Gb', '2750', 3),
(7, 'Nova - 900 Naira', '900', 4),
(8, 'Basic - 1,300 Naira', '1300', 4),
(9, 'Smart - 1,900 Naira', '1900', 4),
(10, 'Classic - 1,900 Naira -Promo Price', '1900', 4),
(11, 'Super -3,800 Naira', '3800', 4),
(12, 'Nova - 900 Naira', '900', 5),
(13, 'Basic - 1,300 Naira', '1300', 5),
(14, 'Smart - 1,900 Naira', '1900', 5),
(15, 'Classic - 1,900 Naira -Promo Price', '1900', 5),
(16, 'Super -3,800 Naira', '3800', 5),
(17, 'Nova - 900 Naira', '900', 6),
(18, 'Basic - 1,300 Naira', '1300', 6),
(19, 'Smart - 1,900 Naira', '1900', 6),
(20, 'Classic - 1,900 Naira -Promo Price', '1900', 6),
(21, 'Super -3,800 Naira', '3800', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `user_id` int(23) NOT NULL,
  `firstname` varchar(400) NOT NULL,
  `lastname` varchar(400) NOT NULL,
  `state` varchar(400) NOT NULL,
  `username` varchar(400) NOT NULL,
  `phone` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `aboutus` varchar(400) NOT NULL,
  `udate` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`user_id`, `firstname`, `lastname`, `state`, `username`, `phone`, `email`, `password`, `aboutus`, `udate`) VALUES
(1, 'adio', 'tawa', 'osun', 'admin', '07069176577', 'moboluwaduro0112@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Instagram', '2018-12-31 00:00:00.00000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category_tb`
--
ALTER TABLE `category_tb`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `mail_tb`
--
ALTER TABLE `mail_tb`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `orderd_tb`
--
ALTER TABLE `orderd_tb`
  ADD PRIMARY KEY (`orderd_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `order_tb`
--
ALTER TABLE `order_tb`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `type_tb`
--
ALTER TABLE `type_tb`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `admin_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category_tb`
--
ALTER TABLE `category_tb`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mail_tb`
--
ALTER TABLE `mail_tb`
  MODIFY `mail_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orderd_tb`
--
ALTER TABLE `orderd_tb`
  MODIFY `orderd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order_tb`
--
ALTER TABLE `order_tb`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234504;
--
-- AUTO_INCREMENT for table `type_tb`
--
ALTER TABLE `type_tb`
  MODIFY `type_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `user_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderd_tb`
--
ALTER TABLE `orderd_tb`
  ADD CONSTRAINT `orderd_tb_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type_tb` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_tb`
--
ALTER TABLE `order_tb`
  ADD CONSTRAINT `order_tb_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type_tb` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `type_tb`
--
ALTER TABLE `type_tb`
  ADD CONSTRAINT `type_tb_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_tb` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
