-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 05:40 PM
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
-- Database: `xpeed_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `sample_form`
--

CREATE TABLE `sample_form` (
  `ID` bigint(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `buyer_email` varchar(50) NOT NULL,
  `buyer_ip` varchar(20) NOT NULL,
  `note` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `receipt_id` varchar(20) NOT NULL,
  `items` varchar(255) NOT NULL,
  `entry_at` date NOT NULL,
  `entry_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sample_form`
--

INSERT INTO `sample_form` (`ID`, `amount`, `buyer`, `buyer_email`, `buyer_ip`, `note`, `city`, `phone`, `receipt_id`, `items`, `entry_at`, `entry_by`) VALUES
(50, 8888888, 'Azom', 'azomkhan@gmail.com', '127.0.0.1', 'asfsd', 'DHAKA', '0147852363969', 'rcid', 'rosun', '0000-00-00', 1),
(51, 8888, 'Azhar', 'azhr64100@gmail.com', '127.0.0.1', 'New ID', 'Feni', '01815128784', 'rcid', 'rosun peyaz', '2023-04-11', 2),
(52, 234, 'abdillah', 'abd@gmail.com', '127.0.0.1', 'First Customer', 'Chittagong', '01815128788', 'rqid', 'Ada cini Lobon', '2023-04-11', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sample_form`
--
ALTER TABLE `sample_form`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sample_form`
--
ALTER TABLE `sample_form`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
