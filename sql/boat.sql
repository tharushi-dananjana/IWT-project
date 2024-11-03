-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 12:52 PM
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
-- Database: `boat`
--

-- --------------------------------------------------------

--
-- Table structure for table `boat1`
--

CREATE TABLE `boat1` (
  `ID` varchar(10) NOT NULL,
  `code` int(10) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `rent` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boat1`
--

INSERT INTO `boat1` (`ID`, `code`, `owner`, `type`, `rent`) VALUES
('1010', 12, 'Ishini', '12', 1950),
('1110', 206, 'Bineth', 'S2', 1000),
('1212', 5050, 'Sewni', 'L1', 1200),
('1261', 223, 'Tharushi', 'M3', 1800),
('2360', 5050, 'adeesha', '12', 3500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boat1`
--
ALTER TABLE `boat1`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
