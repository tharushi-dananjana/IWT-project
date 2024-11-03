-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 12:44 PM
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
-- Database: `userlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Full_Name` varchar(20) NOT NULL,
  `User_Name` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Phone_num` int(10) NOT NULL,
  `E-mail` varchar(15) NOT NULL,
  `Newpassword` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Full_Name`, `User_Name`, `DOB`, `Address`, `Phone_num`, `E-mail`, `Newpassword`) VALUES
('bineth', 'bine_y', '2003-12-03', 'Flower rd, Colombo 0', 712348905, 'bineth@gmail.co', '123654'),
('Chathura', 'chathura_j', '2001-02-01', 'kandy rd, Colombo 11', 774534219, 'chathura@gmail.', '017496'),
('Ishini', 'ishini_k', '2002-11-08', 'Main rd, Colombo 10', 710945905, 'ishini@gmail.co', '123908'),
('Tharushi', 'tharushi_p', '0000-00-00', 'kandy rd, Colombo 10', 710945123, 'tharushi@gmail.', '789451');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
