-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 12:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_name` varchar(100) NOT NULL,
  `ad_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_name`, `ad_pass`) VALUES
('admin', 'admin'),
('shreya', 'dsvv');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `msg` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `phone`, `msg`) VALUES
(1, 'Sakshee', 'sakshee@gmail.com', '2342342341', 'Thank you'),
(2, 'Nupur Soni', 'nupur@gmail.com', '4653625662', 'Hello'),
(3, 'shreya', 'Singhsingh1820@gmail.com', '+37063821639', 'hello'),
(5, 'Shreya', 'Singhsingh1820@gmail.com', '8445093601', 'hello'),
(7, 'new user', 'new@gmail.com', '345678901', 'new message');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `ID` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `a_time` varchar(255) NOT NULL,
  `applied` tinyint(1) NOT NULL DEFAULT 0,
  `disaprove` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`ID`, `name`, `address`, `email`, `phone`, `a_time`, `applied`, `disaprove`) VALUES
(1, 'shreya', 'Hope world', 'Singhsingh1820@gmail.com', '863821639', ' 2.30 pm to 4.30 pm', 1, 0),
(2, 'Vb', 'asd', 'vb@gmail.com', '3486537428', 'i5637854', 1, 0),
(3, 'nupur', 'abc', 'abc@gmail.com', '1234567890', '12 - 5', 1, 0),
(4, 'Sadhana', 'Chhindwara 1(MP)', 'sadhanapawar321@gmail.com', '6265340060', ' 10.30 am to 4.30 pm', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `username`, `email`, `password`) VALUES
(1, 'singhsingh1820@gmail.com', 'singhsingh1820@gmail.com', 'hope@123'),
(2, 'uarmyhome', 'uarmyhope@gmail.com', 'army'),
(3, 'sakshee', 'sakshisharma.dsvv@gmail.com', 'sak'),
(4, 'shrty', 'shr@gmail.com', '123'),
(5, 'DP', 'abcd@gmail.com', 'singh');

-- --------------------------------------------------------

--
-- Table structure for table `shelter`
--

CREATE TABLE `shelter` (
  `ID` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `adress` varchar(1000) NOT NULL,
  `email` varchar(250) NOT NULL,
  `s_name` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `applied` tinyint(1) NOT NULL,
  `disaprove` tinyint(1) NOT NULL DEFAULT 0,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shelter`
--

INSERT INTO `shelter` (`ID`, `name`, `adress`, `email`, `s_name`, `phone`, `applied`, `disaprove`, `city`) VALUES
(1, 'shreya', 'Hope world', 'Singhsingh1820@gmail.com', 'shreya', '+37063821639', 1, 0, ''),
(2, 'Vb', 'asd', 'vb@gmail.com', 'vaibhav', '123456', 1, 1, ''),
(3, 'new hope', 'new adress', 'seventeen@gmail.com', 'hope', '1234567890', 1, 0, ''),
(4, 'Vaibhav', 'asd', '123345534212234554', 'abc', '1234565678899009876543', 0, 1, ''),
(5, 'new hope', 'new adress', 'seventeen@gmail.com', 'tes', '1234567890', 1, 0, ''),
(6, 'New Life', 'Indore(MP)', 'sadhanapawar321@gmail.com', 'Sadhana Pawar', '6265340060', 1, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shelter`
--
ALTER TABLE `shelter`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shelter`
--
ALTER TABLE `shelter`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
