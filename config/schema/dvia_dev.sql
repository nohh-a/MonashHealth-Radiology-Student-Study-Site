-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2023 at 06:45 AM
-- Server version: 11.0.2-MariaDB
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvia_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `moncases`
--

CREATE TABLE `moncases` (
  `id` int(11) NOT NULL,
  `accession_no` text DEFAULT NULL,
  `case_type` enum('OSCER','LONG','MEDIUM','SHORT','GENERAL') NOT NULL,
  `date` date NOT NULL,
  `history` text NOT NULL,
  `imaging` text NOT NULL,
  `max_marks` int(2) DEFAULT NULL,
  `observation` text DEFAULT NULL,
  `intepretation` text DEFAULT NULL,
  `safety` text DEFAULT NULL,
  `intrinsic_roles` text DEFAULT NULL,
  `management` text DEFAULT NULL,
  `anatomy` text DEFAULT NULL,
  `pathology` text DEFAULT NULL,
  `findings` text DEFAULT NULL,
  `diagnosis` text DEFAULT NULL,
  `differential_diagnosis` text DEFAULT NULL,
  `further_investigation` text DEFAULT NULL,
  `teaching_points` text DEFAULT NULL,
  `seen_by` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `contributer` enum('TRAINEE','CONSULTANT','LIBRARY') NOT NULL,
  `speciality` text NOT NULL,
  `rating` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `moncases`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `access_role` enum('ADMIN','CONSULTANT','TRAINEE','') DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moncases`
--
ALTER TABLE `moncases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moncases`
--
ALTER TABLE `moncases`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
