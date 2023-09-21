-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2023 at 06:30 AM
-- Server version: 11.1.2-MariaDB
-- PHP Version: 8.2.10

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
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `user_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `collections_moncases`
--

CREATE TABLE `collections_moncases` (
  `collection_id` int(11) NOT NULL,
  `moncase_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `imaging` enum('X-ray','Ultrasound','CT','MRI','Nuclear Medicine','Fluoroscopy','Mammography','Other') DEFAULT NULL,
  `diagnosis` text DEFAULT NULL,
  `differential_diagnosis` text DEFAULT NULL,
  `findings` text DEFAULT NULL,
  `teaching_points` text DEFAULT NULL,
  `specialty` enum('ABDOMINAL','CARDIOTHORACIC','NEURO','HEAD AND NECK','MSK','BREAST','GYN','O+G','PEADS','VASCULAR','INTERVENTION') DEFAULT NULL,
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
  `author` text DEFAULT NULL,
  `archive_status` enum('yes','no') NOT NULL DEFAULT 'no',
  `saved_status` enum('yes','no') NOT NULL DEFAULT 'no',
  `saved_author` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saves`
--

CREATE TABLE `saves` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `case_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `contributor` enum('TRAINEE','CONSULTANT','LIBRARY') NOT NULL,
  `avatar` text DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nonce` char(128) DEFAULT NULL,
  `nonce_expiry` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `access_role`, `contributor`, `avatar`, `created`, `modified`, `nonce`, `nonce_expiry`) VALUES
('25d2e98e-ffd2-4649-bd1c-3fb05ac9a217', 'Admin', 'zwan0237@student.monash.edu', '$2y$10$U4EKLjmBzp5mirg5g4m6SueV/52uOOtSh8FDvxUF1tCm50amgcifG', 'Beng', 'Tan', 'ADMIN', 'LIBRARY', '', '2023-08-15 09:09:04', '2023-09-21 05:54:13', '190c98c0dc91bcc182466c3a590e5344151331c4abfbcb5c4c0ded04cc78604113651352463312894828605f9de426b4da17b803405d3cc76ae45df5c940ef4c', '2023-09-28 05:54:13'),
('b3cd8091-0007-4138-9ef0-0673a3d92902', 'Student', 'yjia0139@student.monash.edu', '$2y$10$StkebyIFejM9WV1gzlmh6.b08MXJ/UnW1xuwn9gmeJC/IlUgRyz96', 'Ethan', 'Jiang', 'TRAINEE', 'TRAINEE', NULL, '2023-08-20 13:20:27', '2023-09-03 15:26:05', NULL, NULL),
('cfd738c2-e2ea-4c0c-ac8f-f51c87204a99', 'Test', 'nrod0008@student.monash.edu', '$2y$10$oDuaedRkqaF/cWNUgy4YPepVDFRwj4WrMK99X3ymxnDqkQzwwpg/.', 'Test', 'Wang', 'CONSULTANT', 'CONSULTANT', NULL, '2023-08-25 21:35:51', '2023-09-03 15:25:48', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_key` (`user_id`);

--
-- Indexes for table `collections_moncases`
--
ALTER TABLE `collections_moncases`
  ADD PRIMARY KEY (`collection_id`,`moncase_id`),
  ADD KEY `moncase_key` (`moncase_id`);

--
-- Indexes for table `moncases`
--
ALTER TABLE `moncases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saves`
--
ALTER TABLE `saves`
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
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `moncases`
--
ALTER TABLE `moncases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `saves`
--
ALTER TABLE `saves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `user_key` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `collections_moncases`
--
ALTER TABLE `collections_moncases`
  ADD CONSTRAINT `collection_key` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`),
  ADD CONSTRAINT `moncase_key` FOREIGN KEY (`moncase_id`) REFERENCES `moncases` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
