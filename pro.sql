-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 02:28 PM
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
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `about_title` varchar(100) NOT NULL,
  `about_description` varchar(255) NOT NULL,
  `about_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_title`, `about_description`, `about_image`, `created_at`, `updated_at`) VALUES
(1, 'QUALITY EQUIPMENT', 'The quality of equipment relates to the value of an asset pledged against a loan.', '1732972457png', '2024-11-27 18:43:54', '2024-11-27 18:43:54'),
(2, 'NUTRITION', 'Nutrition is the process of consuming, absorbing, and using nutrients needed by the body.', '1732972554png', '2024-11-27 18:44:16', '2024-11-27 18:44:16'),
(3, 'HEALTHY DIET PLAN', 'A healthy eating plan: Emphasizes vegetables, fruits, whole grains and fat-free.', '1732972642png', '2024-11-27 18:45:08', '2024-11-27 18:45:08'),
(5, 'SPORT TRAINING', 'Sport training is a process of preparation for a sport performance, put simply.', '1732972701png', '2024-11-29 17:27:20', '2024-11-29 17:27:20');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `contact_message` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_name`, `contact_email`, `contact_number`, `contact_message`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'mohamed arafa', 'mohamed@gmail.com', '01091212943', 'Hello nice to meet you', '2024-11-27 19:13:10', '2024-11-27 19:13:10', '0'),
(3, 'ali ali', 'ali@gmail.com', '019837624', 'Hello ', '2024-11-29 17:15:18', '2024-11-29 17:15:18', '0'),
(4, 'mahmoud ahmed', 'mahmoud@gmail.com', '0192978746', 'hi ', '2024-11-29 19:31:53', '2024-11-29 19:31:53', '0'),
(5, 'mohamed ali', 'moali@gmail.com', '0109287655', 'hello', '2024-11-29 19:34:33', '2024-11-29 19:34:33', '0');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `trainer_name` varchar(100) NOT NULL,
  `trainer_image` varchar(255) NOT NULL,
  `trainer_facebook` varchar(255) NOT NULL,
  `trainer_twitter` varchar(255) NOT NULL,
  `trainer_instagram` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `trainer_name`, `trainer_image`, `trainer_facebook`, `trainer_twitter`, `trainer_instagram`, `created_at`, `updated_at`) VALUES
(3, 'ali', '1732892195jpg', 'alkh', 'alkh', 'alkh', '2024-11-29 16:56:35', '2024-11-29 16:56:35'),
(4, 'ahmed', '1732892338jpg', 'mkoj', 'mkoj', 'mkoj', '2024-11-29 16:58:58', '2024-11-29 16:58:58'),
(5, 'mohamed', '1732892399png', 'nahi', 'nahi', 'nahi', '2024-11-29 16:59:59', '2024-11-29 16:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `phone`, `email`, `password`, `avatar`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'mohamed', 'mohamed arafa', '01091212943', 'mohamed@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1732888400jpg', '2024-11-27 18:03:41', '2024-11-27 18:03:41', '0'),
(2, 'ahmed', 'ahmed arafa', '09000831097', 'ahmed@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1732889375jpg', '2024-11-27 18:04:39', '2024-11-27 18:04:39', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
