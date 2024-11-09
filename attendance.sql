-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 07:41 AM
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
-- Database: `attendancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  `undertime` time DEFAULT NULL,
  `absences` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `time_in`, `time_out`, `undertime`, `absences`, `created_at`, `updated_at`) VALUES
(36, 1, '2024-11-05', '14:33:33', '14:34:35', '00:00:08', 0, '2024-11-04 22:33:33', '2024-11-04 22:34:36'),
(37, 2, '2024-11-05', '14:36:47', NULL, NULL, 0, '2024-11-04 22:36:47', '2024-11-04 22:36:47'),
(38, 4, '2024-11-05', '14:42:17', NULL, NULL, 0, '2024-11-04 22:42:17', '2024-11-04 22:42:17'),
(39, 5, '2024-11-05', '14:42:58', NULL, NULL, 0, '2024-11-04 22:42:58', '2024-11-04 22:42:58'),
(40, 1, '2024-11-09', '12:45:37', '12:46:51', '00:00:08', 0, '2024-11-08 20:45:37', '2024-11-08 20:46:51'),
(41, 2, '2024-11-09', '12:51:09', '12:53:18', '00:00:08', 0, '2024-11-08 20:51:09', '2024-11-08 20:53:18'),
(42, 6, '2024-11-09', '12:51:33', '12:54:07', '00:00:08', 0, '2024-11-08 20:51:33', '2024-11-08 20:54:07'),
(43, 5, '2024-11-09', '12:51:57', NULL, NULL, 0, '2024-11-08 20:51:57', '2024-11-08 20:51:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_employee_id_foreign` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
