-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2021 at 04:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fex`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountType`
--

CREATE TABLE `accountType` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(100) NOT NULL,
  `active_flag` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountType`
--

INSERT INTO `accountType` (`user_type_id`, `user_type_name`, `active_flag`) VALUES
(1, 'Admin', 'Y'),
(2, 'Vendor', 'Y'),
(3, 'Tenant', 'Y'),
(4, 'User', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `adminAccount`
--

CREATE TABLE `adminAccount` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `activation_code` varchar(10) NOT NULL,
  `valid_flag` char(1) NOT NULL,
  `active_flag` char(1) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `generalAccount`
--

CREATE TABLE `generalAccount` (
  `user_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `res_password` varchar(6) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `phone_number` varchar(17) NOT NULL,
  `user_type_id` int(11) NOT NULL DEFAULT 0,
  `admin_acc_flag` varchar(1) NOT NULL DEFAULT 'N',
  `vendor_acc_flag` varchar(1) NOT NULL DEFAULT 'N',
  `tenant_acc_flag` varchar(1) NOT NULL DEFAULT 'N',
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tenantAccount`
--

CREATE TABLE `tenantAccount` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `activation_code` varchar(10) NOT NULL,
  `valid_flag` char(1) NOT NULL,
  `active_flag` char(1) NOT NULL,
  `creation_date` datetime NOT NULL,
  `payment_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userAccount`
--

CREATE TABLE `userAccount` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date_birth` date NOT NULL,
  `activation_code` varchar(10) NOT NULL,
  `valid_flag` char(1) NOT NULL,
  `active_flag` char(1) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendorAccount`
--

CREATE TABLE `vendorAccount` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `activation_code` varchar(10) NOT NULL,
  `valid_flag` char(1) NOT NULL,
  `active_flag` char(1) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountType`
--
ALTER TABLE `accountType`
  ADD PRIMARY KEY (`user_type_id`);

--
-- Indexes for table `adminAccount`
--
ALTER TABLE `adminAccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalAccount`
--
ALTER TABLE `generalAccount`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tenantAccount`
--
ALTER TABLE `tenantAccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userAccount`
--
ALTER TABLE `userAccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendorAccount`
--
ALTER TABLE `vendorAccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountType`
--
ALTER TABLE `accountType`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `adminAccount`
--
ALTER TABLE `adminAccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generalAccount`
--
ALTER TABLE `generalAccount`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenantAccount`
--
ALTER TABLE `tenantAccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userAccount`
--
ALTER TABLE `userAccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendorAccount`
--
ALTER TABLE `vendorAccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
