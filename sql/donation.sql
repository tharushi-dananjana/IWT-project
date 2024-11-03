-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 01:06 PM
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
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donerinformation`
--

CREATE TABLE `donerinformation` (
  `ID` varchar(12) NOT NULL,
  `salutation` varchar(5) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `uphone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `country` varchar(10) NOT NULL,
  `D_card` int(15) NOT NULL,
  `D_name_card` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `MM/YY` varchar(15) NOT NULL,
  `CVV` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donerinformation`
--

INSERT INTO `donerinformation` (`ID`, `salutation`, `firstname`, `lastname`, `uphone`, `email`, `country`, `D_card`, `D_name_card`, `amount`, `MM/YY`, `CVV`) VALUES
('1', 'miss', 'Tharushi', 'Dananjana', 705823421, ' tharu@gmail.com', 'Japan', 2147483647, 'tharu', 10, '01/31', 601),
('2', 'miss', 'Ishini', 'Kavishka', 705823433, 'ishi@gmail.com', 'Italy', 2147483647, 'ishi', 20, '02/20', 600),
('3', 'miss', 'sewni', 'Ransadi', 705823444, ' sew@gmail.com', 'Sri Lanka', 2147483647, 'ransadi', 30, '03/31', 602),
('4', 'mr', 'Bineth', 'Rasindu', 775823444, ' bine@gmail.com', 'Korea', 2147483647, 'bine', 40, '04/30', 603);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donerinformation`
--
ALTER TABLE `donerinformation`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
