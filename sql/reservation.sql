-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 01:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` varchar(15) NOT NULL,
  `Apassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `Apassword`) VALUES
('1234', 'Bineth123'),
('2345', 'Tharushi123'),
('3456', 'Sewni123'),
('4567', 'Ishini123'),
('5678', 'Amaya123');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `Rid` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Arrival_Date` varchar(20) NOT NULL,
  `Time` int(20) NOT NULL,
  `No_Members` int(2) NOT NULL,
  `CardNo` varchar(10) NOT NULL,
  `CardName` varchar(20) NOT NULL,
  `Country` varchar(10) NOT NULL,
  `ExpDate` varchar(20) NOT NULL,
  `cvv` int(3) NOT NULL,
  `Currency` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`Rid`, `Name`, `Phone`, `Email`, `Arrival_Date`, `Time`, `No_Members`, `CardNo`, `CardName`, `Country`, `ExpDate`, `cvv`, `Currency`) VALUES
(1, 'Chathura', 12345, '$Chathura@gmail.com', '2003-01-03', 8, 0, '1231231231', 'Chathu', 'Australia', '2003-01-03', 222, 'Rupees'),
(2, 'Sewni', 777741474, 'Sewni@gmail.com', '2023-02-12', 8, 7, '0987678909', 'Sewni', 'Australia', '2022-03-23', 123, 'Dollars'),
(3, 'Tharushi', 714545869, 'Tharushi@gmail.com', '2004-03-23', 8, 3, '1232343454', 'Tharumax', 'Korea', '2090-12-22', 789, 'Rupees');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
