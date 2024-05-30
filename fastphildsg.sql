-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 04:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastphildsg`
--

-- --------------------------------------------------------

--
-- Table structure for table `fastphildsg_users`
--

CREATE TABLE `fastphildsg_users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(1000) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `status` enum('Registered','TDC_Complete','PDC_Complete','Game_Complete') NOT NULL DEFAULT 'Registered',
  `dateCreated` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fastphildsg_users`
--

INSERT INTO `fastphildsg_users` (`id`, `firstName`, `middleName`, `lastName`, `username`, `password`, `status`, `dateCreated`, `dateUpdated`) VALUES
(4, 'Jose Antonio', 'Rogel', 'Santos', 'josesantos', '$2y$10$JpgT70NvFn8GWV.mKjnDEuKvu0l/kmluM06MZH59FIPp/6OUtsRnO', 'Registered', '2024-05-28 14:27:30', '2024-05-28 14:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `fastphildsg_users_login`
--

CREATE TABLE `fastphildsg_users_login` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `loginTimestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fastphildsg_users`
--
ALTER TABLE `fastphildsg_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `fastphildsg_users_login`
--
ALTER TABLE `fastphildsg_users_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fastphildsg_users`
--
ALTER TABLE `fastphildsg_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fastphildsg_users_login`
--
ALTER TABLE `fastphildsg_users_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
