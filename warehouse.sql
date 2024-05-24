-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 04:15 AM
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
-- Database: `warehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_groups`
--

CREATE TABLE `delivery_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_delivery` date NOT NULL,
  `delivered_by` varchar(255) NOT NULL,
  `recieved_by` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_groups`
--

INSERT INTO `delivery_groups` (`id`, `name`, `date_of_delivery`, `delivered_by`, `recieved_by`, `created_at`, `updated_at`) VALUES
(7, 'clea', '2024-04-13', 'darwin', '', '2024-04-12 23:49:16', '2024-04-12 23:49:16'),
(8, 'clea', '0000-00-00', 'darwin', '', '2024-04-13 00:14:54', '2024-04-13 00:14:54'),
(9, 'Uniqlo', '0000-00-00', 'darwin', 'clea', '2024-04-13 00:24:44', '2024-04-13 00:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_groups`
--

CREATE TABLE `equipment_groups` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipment_groups`
--

INSERT INTO `equipment_groups` (`id`, `name`, `description`, `Timestamp`) VALUES
(1, 'adda', 'dadadadada', '2024-05-15 11:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `Name`, `Description`, `Timestamp`) VALUES
(12, 'Spring', 'Water Bottle', '2024-04-10 01:11:17'),
(13, 'Spring5', 'Water Bottle5', '2024-04-10 01:12:05'),
(14, 'stuff toy', 'Bear', '2024-05-01 03:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`username`, `password`) VALUES
('user', '456'),
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'user456', '456'),
(2, 'admin123', '123'),
(3, 'dada1234', 'dada12345'),
(4, 'dadafafa', 'dardar'),
(5, 'clea123', 'baby'),
(6, 'bebeluvs', 'dadada'),
(7, 'admin12345', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `contactnumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `name`, `username`, `contactnumber`) VALUES
(1, 'Darwin', 'Darwin123', '09090909090'),
(2, 'Darwin123456', 'dadafafa', '09090909095'),
(4, 'cleababelove', 'bebeluvs', '09090909090'),
(5, 'Darwincleadardarjoyjoy', 'admin12345', '09090909090');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(255) NOT NULL,
  `classification` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`id`, `item`, `classification`, `unit`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'sample3', 'sam3', 'pc(s)', '235', '2024-05-01 03:39:23', '2024-05-01 03:39:23'),
(3, 'sample2', 'sam2', 'pack(s)', '230', '2024-05-01 03:46:58', '2024-05-01 03:46:58'),
(4, 'sample31', 'sam21', 'pack(s)', '231', '2024-05-01 03:49:01', '2024-05-01 03:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(50) UNSIGNED NOT NULL,
  `serial` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `issued_to` varchar(255) NOT NULL,
  `date_issued` date NOT NULL,
  `unit_condition` varchar(255) NOT NULL,
  `reminder` varchar(255) NOT NULL,
  `parts` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `serial`, `description`, `department`, `status`, `issued_to`, `date_issued`, `unit_condition`, `reminder`, `parts`) VALUES
(1, '123', 'puncher', 'department', 'broken', 'me', '2024-05-06', 'con', 'tom', 'string');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contactnumber` varchar(50) NOT NULL,
  `Active` int(50) NOT NULL,
  `Inactive` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `contactnumber`, `Active`, `Inactive`) VALUES
(2, 'clea121134', 'clea1234111', 'joy12341556', '09090909097', 1, 0),
(3, 'clea', 'clea123', 'joy123', '09090909090', 1, 0),
(4, 'Darwin', 'admin', '123', '09508090988', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery_groups`
--
ALTER TABLE `delivery_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_groups`
--
ALTER TABLE `equipment_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
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
-- AUTO_INCREMENT for table `delivery_groups`
--
ALTER TABLE `delivery_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `equipment_groups`
--
ALTER TABLE `equipment_groups`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
