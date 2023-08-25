-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 25, 2023 at 01:39 PM
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
  `image_url` varchar(255) NOT NULL,
  `accession_no` text DEFAULT NULL,
  `case_type` enum('OSCER','LONG','MEDIUM','SHORT','GENERAL') DEFAULT NULL,
  `date` date DEFAULT NULL,
  `imaging` text DEFAULT NULL,
  `diagnosis` text DEFAULT NULL,
  `differential_diagnosis` text DEFAULT NULL,
  `findings` text DEFAULT NULL,
  `teaching_points` text DEFAULT NULL,
  `speciality` text DEFAULT NULL,
  `history` text DEFAULT NULL,
  `max_marks` int(2) DEFAULT NULL,
  `observation` text DEFAULT NULL,
  `intepretation` text DEFAULT NULL,
  `safety` text DEFAULT NULL,
  `intrinsic_roles` text DEFAULT NULL,
  `management` text DEFAULT NULL,
  `anatomy` text DEFAULT NULL,
  `pathology` text DEFAULT NULL,
  `further_investigation` text DEFAULT NULL,
  `seen_by` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `contributor` enum('TRAINEE','CONSULTANT','LIBRARY') DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `author` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `moncases`
--

INSERT INTO `moncases` (`id`, `image_url`, `accession_no`, `case_type`, `date`, `imaging`, `diagnosis`, `differential_diagnosis`, `findings`, `teaching_points`, `speciality`, `history`, `max_marks`, `observation`, `intepretation`, `safety`, `intrinsic_roles`, `management`, `anatomy`, `pathology`, `further_investigation`, `seen_by`, `tags`, `contributor`, `rating`, `author`) VALUES
(17, 'uploads/6b52dedaf1ec7b7ae663e14a92b4bb6e.jpg', 'q', 'OSCER', '2023-08-18', 'q', 'q', 'q', 'q', '1', 'CARDIOTHORACIC', 'q', 1, 'q', 'q', 'q', 'q', 'q', 'q', 'q', '1', 'q', 'q', 'TRAINEE', 1, 'q'),
(18, 'uploads/914504f61feb5691cb0d433b0725b618.jpg', '12345678', 'OSCER', '2023-08-18', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'CARDIOTHORACIC', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 12, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'CONSULTANT', 1, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(22, 'uploads/7314a74055365f084dd0ef903e5592bf.jpg', 'q', 'OSCER', '2023-08-04', 'q', 'q', 'q', 'q', 'q', 'CARDIOTHORACIC', 'qq', 1, 'q', 'q', 'q', NULL, NULL, 'q', 'q', 'q', 'q', 'q', 'CONSULTANT', 1, 'q'),
(23, 'uploads/截屏2023-08-15 11.28.07.png', 'q', 'OSCER', '2023-08-24', 'q', 'q', 'q', 'q', 'q', 'ABDOMINAL', 'q', 1, 'q', 'q', 'q', NULL, NULL, 'q', 'q', 'q', 'q', 'q', 'TRAINEE', 2, 'q');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `username` varchar(65) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(96) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `access_role` enum('ADMIN','CONSULTANT','TRAINEE','') NOT NULL,
  `avatar` text DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nonce` char(128) DEFAULT NULL,
  `nonce_expiry` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `access_role`, `avatar`, `created`, `modified`, `nonce`, `nonce_expiry`) VALUES
('25d2e98e-ffd2-4649-bd1c-3fb05ac9a217', 'Admin', 'zwan0237@student.monash.edu', '$2y$10$U4EKLjmBzp5mirg5g4m6SueV/52uOOtSh8FDvxUF1tCm50amgcifG', 'Roger', 'Wang', 'ADMIN', '', '2023-08-15 09:09:04', '2023-08-15 09:43:29', '819c2a16b9622af7d6288348ca9d3d610ffe0ae979222c478bc7660dc8d7046a08481cb6332515af97fa400bea7363ff06ba8d0f8279d90328d28eee766316f1', '2023-08-22 09:43:29'),
('b3cd8091-0007-4138-9ef0-0673a3d92902', 'Student', 'yjia0139@student.monash.edu', '$2y$10$StkebyIFejM9WV1gzlmh6.b08MXJ/UnW1xuwn9gmeJC/IlUgRyz96', 'Ethan', 'Jiang', 'TRAINEE', NULL, '2023-08-20 13:20:27', '2023-08-20 13:20:27', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
