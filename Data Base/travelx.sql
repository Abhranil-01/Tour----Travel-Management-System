-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 04:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelx`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlog`
--

CREATE TABLE `adlog` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adlog`
--

INSERT INTO `adlog` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'Abhranil Kundu', 'abhranilkundu01@gmail.com', 'admin123@'),
(2, 'Abhranil Kundu', 'abhranilkundu01@gmail.com', 'admin123@');

-- --------------------------------------------------------

--
-- Table structure for table `custrecord`
--

CREATE TABLE `custrecord` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `TotalAdults` varchar(255) NOT NULL,
  `TotalChildren` varchar(255) NOT NULL,
  `Tour` varchar(255) NOT NULL,
  `PackageDetails` varchar(255) NOT NULL,
  `TourDate` varchar(255) NOT NULL,
  `Address` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custrecord`
--

INSERT INTO `custrecord` (`Id`, `Name`, `Email`, `Phone`, `TotalAdults`, `TotalChildren`, `Tour`, `PackageDetails`, `TourDate`, `Address`) VALUES
(1, 'Abhranil Kundu', 'abhranilkundu05@gmail.com', '6291640218', '4', '0', 'Rajasthan Tour', '6 Night 7 Days', '17th Sep', 0),
(2, 'Abhranil Kundu', 'abhranilkundu05@gmail.com', '6291640218', '4', '0', 'Rajasthan Tour', '6 Night 7 Days', '21st Sep', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enq`
--

CREATE TABLE `enq` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Messages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enq`
--

INSERT INTO `enq` (`Id`, `Name`, `Email`, `Phone`, `Messages`) VALUES
(1, 'Abhranil Kundu', 'abhranilkundu45@gmail.com', '6291640218', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `name`, `email`, `password`, `cpassword`) VALUES
(1, 'Abhranil Kundu', 'abhranilkundu01@gmail.com', '$2y$10$t9lkewFFaZ0J0O5WirBvp.vD1dzwHyyM2LqrasUtHunuknaYpeUgW', '$2y$10$AziPjMLtA/K.jgnJa7D2Tuvz.lXN51NuuMb4SbcwfITlrtyQB9oHq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adlog`
--
ALTER TABLE `adlog`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `custrecord`
--
ALTER TABLE `custrecord`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `enq`
--
ALTER TABLE `enq`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adlog`
--
ALTER TABLE `adlog`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `custrecord`
--
ALTER TABLE `custrecord`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enq`
--
ALTER TABLE `enq`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
