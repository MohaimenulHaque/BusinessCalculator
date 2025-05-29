-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2025 at 05:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business_calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_data`
--

CREATE TABLE `business_data` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Total_Amount` int(11) NOT NULL,
  `Total_Profit` int(11) NOT NULL,
  `Tarun_Amount` int(11) NOT NULL,
  `Tarun_Percentage` int(11) NOT NULL,
  `Tarun_Profit` int(11) NOT NULL,
  `Rion_Amount` int(11) NOT NULL,
  `Rion_Percentage` int(11) NOT NULL,
  `Rion_Profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_data`
--

INSERT INTO `business_data` (`id`, `Date`, `Total_Amount`, `Total_Profit`, `Tarun_Amount`, `Tarun_Percentage`, `Tarun_Profit`, `Rion_Amount`, `Rion_Percentage`, `Rion_Profit`) VALUES
(1, '2025-05-29', 120000, 10000, 100000, 83, 8333, 20000, 17, 1667),
(2, '2025-05-30', 120000, 15000, 100000, 83, 12500, 20000, 17, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `sign_in`
--

CREATE TABLE `sign_in` (
  `id` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_in`
--

INSERT INTO `sign_in` (`id`, `Username`, `password`) VALUES
(1, 'admin', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_data`
--
ALTER TABLE `business_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_in`
--
ALTER TABLE `sign_in`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_data`
--
ALTER TABLE `business_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sign_in`
--
ALTER TABLE `sign_in`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
