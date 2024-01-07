-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 05:30 PM
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
-- Database: `aungzay`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `person` int(11) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `visitor_message` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `person`, `check_in_date`, `check_out_date`, `visitor_message`, `user_id`) VALUES
(6, 'test', 'aa221a@gmail.com', '7123456789', 2, '2023-10-19', '2023-10-20', 'two single bed', 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer_comment`
--

CREATE TABLE `customer_comment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_comment`
--

INSERT INTO `customer_comment` (`id`, `name`, `email`, `text`) VALUES
(1, 'Aung zay Myo', 'admin@google.com', 'gggg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `Image_name` varchar(100) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `Image_name`, `item_name`, `Price`) VALUES
(3, 'tent1.jpg', 'tent', 50),
(4, 'tent5.jpg', 'camping car', 40),
(5, 'tent8.jpg', 'camping car', 30),
(7, 'tent9.jpg', 'camping car', 30),
(1, 'tent2.jpg', 'tent', 40),
(2, 'tent3.jpg', 'tent', 40),
(6, 'tent4.jpg', 'tent', 40),
(8, 'tent6.jpg', 'roofttop tent', 60),
(9, 'tent7.jpg', 'roofttop tent', 60),
(10, 'tent10.jpg', 'roofttop tent', 60);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Test', '0'),
(2, 'Test1', '0'),
(3, 'Test444', '$2y$10$NhMikSCYOoto8JzvwftjguJx4axDQ2gHPemkLZ95yHkdkVBeFHs.S'),
(4, 'Test11', '$2y$10$4gw9Zskw93xOar9BqcFLC.aWlTHPWiJZMvzzuk2J8/T8BXmowy24q'),
(5, 'Testg', '$2y$10$SoYsmgXEHrxt.HLf9a4cSufbadnj3kT19Yz4c7a/Qwq0zR3AI.G86'),
(6, 'Testaungzay', '$2y$10$.RLU2fULq7q8uIKbbSjL9.nYhR/rLcjD3apgsX6/6GucSfTS9plpS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking` (`user_id`);

--
-- Indexes for table `customer_comment`
--
ALTER TABLE `customer_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_comment`
--
ALTER TABLE `customer_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
