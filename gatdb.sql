-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2018 at 03:44 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gatdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buy_id` int(11) NOT NULL,
  `buy_nic` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT 'gat',
  `tel` int(10) DEFAULT NULL,
  `emp_type` varchar(50) NOT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `fname`, `lname`, `email`, `password`, `tel`, `emp_type`, `img`) VALUES
(1, 'Isuru', 'Jayasinghe', 'icbjayasinghe@gmail.com', 'gat', 772080786, 'Admin', NULL),
(2, 'Amil', 'Jayasinghe', 'amiljayasinghe@gmail.com', 'amil1', 718058588, 'Admin', 'amil_jayasinghe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` varchar(10) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `brand`, `price`, `description`) VALUES
('1', 'CRV RD 2 - 1999', '31.50/= ', 'Leasing Facility Can be arrnged. Down payment :Rs.350.000/= '),
('2', 'Maruti Alto 800cc', '15.75.000/=', 'Price Negotible.\r\nLeasing Facility Can Be Arrenged.\r\nPlz call 0773843822'),
('3', 'TOYOTA AXIO WXB', 'Rs.65.00.000/= ', 'Call 0774353362 Leasing Faicility can be arrenged. For Lease Facility call'),
('4', 'Toyata G superior 2014', 'Rs.6350.000/=', '57.700KM\r\nPlz call me 0773843822\r\nLeasing Facility can be arrneged.');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `sup_id` int(11) NOT NULL,
  `nic` varchar(12) DEFAULT 'Company',
  `sup_name` varchar(255) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `cond` varchar(20) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `number` varchar(10) DEFAULT 'UR',
  `ch_number` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `buy_nic` int(11) DEFAULT NULL,
  `buy_name` varchar(255) DEFAULT NULL,
  `buy_tel` varchar(10) DEFAULT NULL,
  `buy_address` varchar(255) DEFAULT NULL,
  `leasing` varchar(255) DEFAULT NULL,
  `installment` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `insurance` varchar(255) DEFAULT NULL,
  `buy_discription` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `buy_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`sup_id`, `nic`, `sup_name`, `tel`, `address`, `cond`, `type`, `brand`, `model`, `number`, `ch_number`, `price`, `description`, `selling_price`, `buy_nic`, `buy_name`, `buy_tel`, `buy_address`, `leasing`, `installment`, `amount`, `insurance`, `buy_discription`, `status`, `buy_date`, `end_date`) VALUES
(1, '941501249', 'isuru', '0772080786', '119/4', 'Registered', 'Motor Cycle', 'Bajaj', 'CT100', 'cpBAA1515', '15151551', 100000, 'good', 100000, 123456789, 'asda', '0772080783', '123', 'asda', 4, 12000, 'asd', 'wqeq', 'sold', '2018-02-02', '2018-02-03'),
(2, '861501249V', 'Amil Jayasinghe', '0718058588', '119/4', 'Unregistered', 'Motor Cycle', 'TVS', 'apache', '', '121212121', 150000, 'nice', 123333, 123456789, 'asda', '1234567890', 'adad', 'asda', 12, 12, 'asd', 'hai', 'sold', '2018-01-30', NULL),
(4, '941501246V', 'Erandi Silva', '0770368954', 'arunam mv, nagoda', 'Registered', 'Car', 'Toyota', 'vitz', 'wpKF1212', '123123123', 2600000, 'Great condition', 2600000, 941501249, 'Isuru Jayasinghe', '0755568955', '11/9/4, 4th lane, Jayamalapura', 'Central Finance', 1, 150000, 'Celinco Insurance', 'Good deal', 'sold', '2018-02-02', '2018-02-20'),
(5, '581501249V', 'Lesly Jayasinghe', '0772422544', '119/4', 'Registered', 'Car', 'Suzuki', 'Alto k10', 'cpCAM1212', '11111111', 2400000, 'Brand new condition', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL),
(6, '941501246V', 'Erandi Silva', '0772080786', '11/4', 'Unregistered', 'Motor Cycle', 'Bajaj', 'pulsur', NULL, '1212333', 12121212, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL),
(7, '1994052121V', 'Jonathan', '0755568955', '1221/1', 'Unregistered', 'Three Wheel', 'Bajaj', '2 stroc', NULL, '777777', 120000, 'damaged', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL),
(8, '59000000V', 'Kusum Jayasinghe', '0755568955', '119/4', 'Unregistered', 'Van', 'Toyota', 'CR41', NULL, '888888', 100000000, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL),
(9, '1212121V', 'Nadeesha Kumari', '0772422544', '119/4', 'Unregistered', 'Lorry', 'Suzuki', 'buddy', NULL, '333333', 1200000, 'not bad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL),
(10, '9415151515V', 'Buddhima Rathnayake', '0772080786', '4545/2', 'Registered', 'Other', 'Other', 'caravan', '12-1212', '121212121212', 1200000, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL),
(11, '948888888V', 'Daham Silva', '0812351857', 'Galgediyawa,Gampola', 'Registered', 'Motor Cycle', 'Bajaj', 'Platina 125cc', 'cpBAA1212', '555555', 80000, 'Old version', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL),
(12, '', 'Central Finance', '0812351857', 'Gampola', 'Unregistered', 'Three Wheel', 'Bajaj', '2stroc', NULL, '131313', 300000, 'brand new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL),
(13, '', 'David Peris', '0812351857', 'Gampola', 'Unregistered', 'Three Wheel', 'TVS', '4stroc', NULL, '3333333', 3000000, 'brand new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL),
(14, '862370066V', 'Amil Jayasinghe', '0718058588', 'No.119/4, 4th lane, Jayamalapura, Gampola', 'Registered', 'Car', 'Suzuki', 'Alto 800cc LX1 (2015)', 'cpCAL4288', '111222333', 1850000, 'Silver Color', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buy_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`sup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
