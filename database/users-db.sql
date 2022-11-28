-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 07:59 AM
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
-- Database: `users-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `csv_import`
--

CREATE TABLE `csv_import` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Initial` varchar(1) NOT NULL,
  `Age` int(11) NOT NULL,
  `DateOfBirth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(13) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `dob`) VALUES
(1010100000083, 'Jan ', 'Oberholzer', '2022-11-15'),
(8907123001080, 'Bobby', 'Gunn', '2022-11-19'),
(9011065225086, 'Ryno', 'Rossouw', '2022-11-15'),
(9201015897083, 'Tebogo', 'Motaung', '1992-01-01'),
(9502253001081, 'Godfrey', 'Willemse', '1995-02-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csv_import`
--
ALTER TABLE `csv_import`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID_No` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
