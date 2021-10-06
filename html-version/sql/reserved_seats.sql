-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 02:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seat_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `reserved_seats`
--

CREATE TABLE `reserved_seats` (
  `uuid` int(11) NOT NULL,
  `useruuid` varchar(36) NOT NULL,
  `selected_movie` varchar(25) NOT NULL,
  `selected_seats` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserved_seats`
--

INSERT INTO `reserved_seats` (`uuid`, `useruuid`, `selected_movie`, `selected_seats`) VALUES
(1, 'b4b0eaa3-c0bb-42c4-983e-38db7930b3a6', '12', 'B1, B2, B3, B4'),
(2, 'e8faf24b-9daf-4254-b4a9-7c81b40e69d2', '12', 'A1, A2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reserved_seats`
--
ALTER TABLE `reserved_seats`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `UUID` (`useruuid`),
  ADD UNIQUE KEY `uuid_2` (`uuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserved_seats`
--
ALTER TABLE `reserved_seats`
  MODIFY `uuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
