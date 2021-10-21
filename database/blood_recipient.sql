-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 06:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_recipient`
--

CREATE TABLE `blood_recipient` (
  `reci_id` int(25) NOT NULL,
  `reci_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reci_age` int(100) DEFAULT NULL,
  `reci_bgrp` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reci_bqnty` int(11) DEFAULT NULL,
  `reci_sex` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reci_reg_date` date DEFAULT NULL,
  `reci_phno` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blood_recipient`
--

INSERT INTO `blood_recipient` (`reci_id`, `reci_name`, `reci_age`, `reci_bgrp`, `reci_bqnty`, `reci_sex`, `reci_reg_date`, `reci_phno`) VALUES
(15, 'Lương Chí Thành', 19, '', 5, 'Nam', '2006-06-21', '0564897941'),
(16, 'Lương Chí Thành', 19, '', 5, 'Nam', '2006-06-21', '0564897941'),
(17, 'admin', 12, '', 12412, 'Nam', '2310-03-12', '0564897941'),
(18, 'admin', 12, '', 12412, 'Nam', '2310-03-12', '0564897941');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_recipient`
--
ALTER TABLE `blood_recipient`
  ADD PRIMARY KEY (`reci_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_recipient`
--
ALTER TABLE `blood_recipient`
  MODIFY `reci_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
