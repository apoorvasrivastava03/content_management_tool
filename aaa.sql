-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2023 at 01:55 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo_form`
--

CREATE TABLE `demo_form` (
  `s.no` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demo_form`
--

INSERT INTO `demo_form` (`s.no`, `fname`, `lname`, `email`, `company`, `address`) VALUES
(1, 'Suraj ', 'Gupta', 'sg@gmail.com', 'UX Design India', 'Varanasi, UP'),
(3, 'Neha', 'Patil', 'nehap@gmail.com', 'UX Design India', 'Mumbai'),
(4, 'Richa', 'Gupta', 'Richag1@gmail.com', 'Student', 'Varanasi, UP'),
(5, 'Aachal', '..........', 'aachal12@gmail.com', 'UX Design India', 'Mumbai'),
(6, 'Priyanka', 'Maam', 'puiux12@gmail.com', 'UX Design India', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `s.no` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `Product_brand` varchar(100) NOT NULL,
  `purches_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`s.no`, `user_id`, `full_name`, `mobile_no`, `address`, `product_name`, `Product_brand`, `purches_date`) VALUES
(1, 2, 'Neha Patil', '8303398052', 'Burhanpur, Mp', 'Mask', 'Puma', '2023-01-07'),
(2, 2, 'Neha', '9988776655', 'Burhanpur, MP', 'T-shirt ', 'Puma', '2023-01-09'),
(3, 1, 'Suraj Kumar Gupta', '8303398052', 'Varanasi, UP', 'Shooese', 'Adidas', '2023-01-09'),
(4, 2, 'Neha', '9988776655', '', 'Shooese', 'Adidas', '2023-01-09'),
(5, 1, 'Suraj Gupta', '8303398052', 'Varanasi, UP', 'Sell Phone', 'Realme', '2023-01-09'),
(6, 1, 'Suraj Gupta', '8303398052', 'Varanasi, UP', 'Laptop', 'Asus', '2023-01-09'),
(7, 3, 'Alok', '8877665544', 'Varanasi, UP', 'Laptop', 'Asus', '2023-01-09'),
(8, 3, 'Alok', '8877665544', 'Varanasi, UP', 't', 'Asus', '2023-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `s.no` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`s.no`, `fname`, `lname`, `email`, `gender`, `password`) VALUES
(1, 'Suraj ', 'Gupta', 'sg116942@gmail.com', 'Male', '1234'),
(2, 'Neah', 'Patil', 'neha123@gmail.com', 'Feamle', '1234'),
(3, 'Alok', 'Maurya', 'alok12@gmail.com', 'Feamle', '12345'),
(4, 'Richa', 'Gupta', 'Richa12@gmail.com', 'Feamle', '1234'),
(7, 'Pritam', 'Yadav', 'pritam13x@gmail.com', 'Male', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo_form`
--
ALTER TABLE `demo_form`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo_form`
--
ALTER TABLE `demo_form`
  MODIFY `s.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `s.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `s.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
