-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2023 at 06:47 AM
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
  `id` int(99) NOT NULL,
  `accession_no` text DEFAULT NULL,
  `case_type` enum('OSCER','LONG','MEDIUM','SHORT','GENERAL') NOT NULL,
  `date` date NOT NULL,
  `history` longtext NOT NULL,
  `imaging` text NOT NULL,
  `max_marks` int(2) DEFAULT NULL,
  `observation` longtext DEFAULT NULL,
  `intepretation` longtext DEFAULT NULL,
  `safety` text DEFAULT NULL,
  `intrinsic_roles` text DEFAULT NULL,
  `management` text DEFAULT NULL,
  `anatomy` longtext DEFAULT NULL,
  `pathology` longtext DEFAULT NULL,
  `findings` longtext DEFAULT NULL,
  `diagnosis` longtext DEFAULT NULL,
  `differential_diagnosis` longtext DEFAULT NULL,
  `further_investigation` longtext DEFAULT NULL,
  `teaching_points` longtext DEFAULT NULL,
  `seen_by` text DEFAULT NULL,
  `tags` longtext DEFAULT NULL,
  `contributer` enum('TRAINEE','CONSULTANT','LIBRARY') NOT NULL,
  `speciality` text NOT NULL,
  `rating` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `moncases`
--

INSERT INTO `moncases` (`id`, `accession_no`, `case_type`, `date`, `history`, `imaging`, `max_marks`, `observation`, `intepretation`, `safety`, `intrinsic_roles`, `management`, `anatomy`, `pathology`, `findings`, `diagnosis`, `differential_diagnosis`, `further_investigation`, `teaching_points`, `seen_by`, `tags`, `contributer`, `speciality`, `rating`) VALUES
(15, '8794501', 'OSCER', '2023-06-05', 'Know malignancy follow up staging', 'CT chest', 10, 'Tree in bud opacities bronchiectasis', 'Tree in bud - not perilymphatic', 'Need to raised possibility endobronchial TB', '', 'Call treating unit\r\n', '', 'Bronchiectasis - ', NULL, NULL, NULL, NULL, 'How to differentiate tree in bud vs perilympahtic \r\nSparing of subpleural space\r\nAtypical mycobacterial infection', 'MN', '', 'CONSULTANT', 'CARDIOTHORACIC', 4),
(16, 'll\\\\llllll', 'MEDIUM', '2023-07-27', 'dsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadad', 'dsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsada222222222', 99, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsada222222222', NULL, NULL, NULL, 'dsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsada222222222', 'dsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsada222222222', 'dsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsadadsada222222222', 'TRAINEE', 'BREAST', 4);

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
