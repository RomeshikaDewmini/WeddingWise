-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2023 at 09:32 AM
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
-- Database: `wwise`
--

-- --------------------------------------------------------

--
-- Table structure for table `Register`
--

CREATE TABLE `Register` (
  `useID` int(10) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `repassword` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Register`
--

INSERT INTO `Register` (`useID`, `firstname`, `lastname`, `email`, `pass`, `repassword`) VALUES
(52, 'Nirmal', 'Subashana', 'nirmalsubshanak@gmail.com', '123', '123'),
(55, 'Ramesh', 'Hemal', 'ramesh@gmail.com', 'aa', 'aa'),
(62, 'aaaa', 's', 'ni@gmail.com', 'cc', 'cc'),
(63, 'Sub', 'mmm', 'mahe@gmail.com', 'mm', 'mm'),
(64, 'Maheesh', 'Theekshana', 'mahe@gmail.com', 'll', 'll');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Register`
--
ALTER TABLE `Register`
  ADD PRIMARY KEY (`useID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Register`
--
ALTER TABLE `Register`
  MODIFY `useID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
