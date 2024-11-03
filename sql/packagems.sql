-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 01:55 PM
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
-- Database: `packagems`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contacts` varchar(12) NOT NULL,
  `massage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contacts`, `massage`) VALUES
('', '', '', ''),
('dulan', 'dulan@email.com', '087978', 'buhnimbyhj'),
('VDF', 'XWDE@email.com', '32446', 'cbb c xx'),
('ciergh', 'tvhyunjy@gmail.com', '354567', 'bjyuj'),
('bqwdsw3ew', 'nw@email.com', '42i39892', 'noxpjogdde'),
('bj', 'nw@email.com', '4555555', 'noxpjog'),
('3zz', 'njnnj@email.com', '45678', 'nvi7yui;'),
('jbyuj', 'nnkg@email.com', '46458', ' nki'),
('cfddv', 'hyuinndi@email.com', '7873', 'mw k k'),
('bjhu', 'u@email.com', '8954', ' ghft'),
('amaya', 'anil@email.com', 'r3uriv', ' n kw kcrf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contacts`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
