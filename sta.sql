-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 10:46 AM
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
-- Database: `sta`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studentId` varchar(255) NOT NULL,
  `classId` int(11) NOT NULL,
  `blockId` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `studentId`, `classId`, `blockId`, `status`, `created_at`, `updated_at`) VALUES
(11, '1', 1, 2, 'absent', '2024-05-12 07:45:52', '2024-05-12 07:45:52'),
(12, '2', 1, 2, 'excused', '2024-05-12 07:45:52', '2024-05-12 07:45:52'),
(13, '3', 1, 2, 'present', '2024-05-12 07:45:52', '2024-05-12 07:45:52'),
(14, '4', 1, 2, 'present', '2024-05-12 07:45:52', '2024-05-12 07:45:52'),
(15, '5', 1, 2, 'present', '2024-05-12 07:45:52', '2024-05-12 07:45:52'),
(16, '6', 1, 2, 'present', '2024-05-12 07:45:52', '2024-05-12 07:45:52'),
(17, '7', 1, 2, 'present', '2024-05-12 07:45:52', '2024-05-12 07:45:52'),
(18, '8', 1, 2, 'present', '2024-05-12 07:45:52', '2024-05-12 07:45:52'),
(19, '9', 1, 2, 'present', '2024-05-12 07:45:52', '2024-05-12 07:45:52'),
(20, '10', 1, 2, 'present', '2024-05-12 07:45:52', '2024-05-12 07:45:52'),
(21, '1', 1, 2, 'excused', '2024-05-13 15:02:38', '2024-05-13 15:02:38'),
(22, '2', 1, 2, 'present', '2024-05-13 15:02:38', '2024-05-13 15:02:38'),
(23, '3', 1, 2, 'present', '2024-05-13 15:02:38', '2024-05-13 15:02:38'),
(24, '4', 1, 2, 'present', '2024-05-13 15:02:38', '2024-05-13 15:02:38'),
(25, '5', 1, 2, 'present', '2024-05-13 15:02:38', '2024-05-13 15:02:38'),
(26, '6', 1, 2, 'present', '2024-05-13 15:02:38', '2024-05-13 15:02:38'),
(27, '7', 1, 2, 'present', '2024-05-13 15:02:38', '2024-05-13 15:02:38'),
(28, '8', 1, 2, 'absent', '2024-05-13 15:02:38', '2024-05-13 15:02:38'),
(29, '9', 1, 2, 'absent', '2024-05-13 15:02:38', '2024-05-13 15:02:38'),
(30, '10', 1, 2, 'absent', '2024-05-13 15:02:38', '2024-05-13 15:02:38'),
(31, '11', 1, 3, 'present', '2024-05-14 00:39:39', '2024-05-14 00:39:39'),
(32, '12', 1, 3, 'absent', '2024-05-14 00:39:39', '2024-05-14 00:39:39'),
(33, '13', 1, 3, 'excused', '2024-05-14 00:39:39', '2024-05-14 00:39:39'),
(34, '14', 1, 3, 'present', '2024-05-14 00:39:39', '2024-05-14 00:39:39'),
(35, '15', 1, 3, 'present', '2024-05-14 00:39:39', '2024-05-14 00:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classId` bigint(20) UNSIGNED NOT NULL,
  `blockName` varchar(255) NOT NULL,
  `isAssigned` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `classId`, `blockName`, `isAssigned`, `created_at`, `updated_at`) VALUES
(2, 1, 'BSIT-3A', 1, '2024-05-11 15:22:39', '2024-05-11 22:00:11'),
(3, 1, 'BSIT-3B', 1, '2024-05-11 15:22:58', '2024-05-14 00:33:09'),
(5, 1, 'BSIT-3C', 0, '2024-05-11 16:45:17', '2024-05-11 16:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('judyapf888@gmail.com|127.0.0.1', 'i:1;', 1714836282),
('judyapf888@gmail.com|127.0.0.1:timer', 'i:1714836282;', 1714836282);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `className` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `className`, `created_at`, `updated_at`) VALUES
(1, 'BSIT 3rd Year', '2024-05-11 10:36:33', '2024-05-11 10:36:33'),
(2, 'BSIT 4th Year', '2024-05-11 10:36:46', '2024-05-11 10:36:46'),
(5, 'BSIT 1st Year', '2024-05-11 16:15:07', '2024-05-11 16:22:03'),
(6, 'BSIT 2nd Year', '2024-05-11 16:15:34', '2024-05-11 16:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phoneNo` varchar(255) DEFAULT NULL,
  `classId` bigint(20) UNSIGNED DEFAULT NULL,
  `blockId` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `user_id`, `phoneNo`, `classId`, `blockId`, `created_at`, `updated_at`) VALUES
(1, 9, '09813216185', 1, 2, '2024-05-11 22:00:11', '2024-05-11 22:00:11'),
(3, 13, '09776986298', 1, 3, '2024-05-14 00:33:09', '2024-05-14 00:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '0001_01_01_000000_create_users_table', 1),
(8, '0001_01_01_000001_create_cache_table', 1),
(9, '0001_01_01_000002_create_jobs_table', 1),
(17, '2024_05_05_050012_create_class_table', 2),
(19, '2024_05_11_183014_create_blocks_table', 3),
(24, '2024_05_04_134213_create_instructors_table', 4),
(25, '2024_05_12_053130_create_students_table.php', 5),
(31, '2024_05_12_092227_create_attendance_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1rGIvSKs4ImXYcrf8clg0qPVuQKzLUlafNj1h60U', 13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSUNEakpoaFh3cVhiRDR5ZG5LN0xqc2ZUNEh5VVhaR3BIbTlQV05KdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hdHRlbmRhbmNlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTM7fQ==', 1715676223);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `admissionNum` varchar(255) NOT NULL,
  `classId` bigint(20) UNSIGNED NOT NULL,
  `blockId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstName`, `lastName`, `admissionNum`, `classId`, `blockId`, `created_at`, `updated_at`) VALUES
(1, 'Lily', 'Parker', 'LP567', 1, 2, '2024-05-11 22:18:46', '2024-05-11 22:18:46'),
(2, 'Mia', 'Carter', 'MC789', 1, 2, '2024-05-11 22:19:33', '2024-05-11 22:19:33'),
(3, 'Noah', 'Hayes', 'NH890', 1, 2, '2024-05-11 22:19:48', '2024-05-11 22:19:48'),
(4, 'Sophie', 'Bennett', 'SB901', 1, 2, '2024-05-11 22:20:07', '2024-05-11 22:20:07'),
(5, 'Liam', 'Evans', 'LE012', 1, 2, '2024-05-11 22:20:17', '2024-05-11 22:20:17'),
(6, 'Oliver', 'Anderson', 'OA678', 1, 2, '2024-05-11 22:21:44', '2024-05-11 22:21:44'),
(7, 'Emma', 'Cooper', 'EC123', 1, 2, '2024-05-11 22:22:07', '2024-05-11 22:22:07'),
(8, 'Lucas', 'Hughes', 'LH234', 1, 2, '2024-05-11 22:22:23', '2024-05-11 22:22:23'),
(9, 'Ava', 'Richardson', 'AR345', 1, 2, '2024-05-11 22:22:44', '2024-05-11 22:22:44'),
(10, 'Ethan', 'Morris', 'EM456', 1, 2, '2024-05-11 22:22:57', '2024-05-11 22:22:57'),
(11, 'Aurora', 'Frost', 'AF1234', 1, 3, '2024-05-14 00:36:51', '2024-05-14 00:36:51'),
(12, 'Phoenix', 'Blaze', 'PB5678', 1, 3, '2024-05-14 00:37:14', '2024-05-14 00:37:14'),
(13, 'Luna', 'Night', 'LN9012', 1, 3, '2024-05-14 00:37:31', '2024-05-14 00:37:31'),
(14, 'Orion', 'Nova', 'ON3456', 1, 3, '2024-05-14 00:37:50', '2024-05-14 00:37:50'),
(15, 'Ember', 'Stone', 'ES7890', 1, 3, '2024-05-14 00:38:13', '2024-05-14 00:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Judy Ann', 'Flores', 'instructor', 'jflores_21ur0115@gmail.com', NULL, '$2y$12$T12KPnZbAC5I1ZUzLAd8XecgXHgqSgHfXN85TzluPHKpLOEgtpvoS', NULL, '2024-05-04 07:04:05', '2024-05-04 07:04:05'),
(10, 'Keziah', 'Roa', 'admin', 'rhannah@gmail.com', NULL, '$2y$12$B7WxlOaq0XQiJSaJ5.IzReCgrMkL3OWfFOorE4qR07SMDDzkGYoa.', NULL, '2024-05-04 07:31:49', '2024-05-04 07:31:49'),
(13, 'Freya', 'Montefalco', 'instructor', 'fmontefalco@gmail.com', NULL, '$2y$12$i4dPCHaSxRw0HZ/OcoAqe.Cm9x/EvgM87ebNGvBo0XHUlVWTgjN4e', NULL, '2024-05-13 23:21:01', '2024-05-13 23:21:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blocks_classid_foreign` (`classId`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructors_user_id_foreign` (`user_id`),
  ADD KEY `instructors_classid_foreign` (`classId`),
  ADD KEY `instructors_blockid_foreign` (`blockId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blocks`
--
ALTER TABLE `blocks`
  ADD CONSTRAINT `blocks_classid_foreign` FOREIGN KEY (`classId`) REFERENCES `class` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_blockid_foreign` FOREIGN KEY (`blockId`) REFERENCES `blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `instructors_classid_foreign` FOREIGN KEY (`classId`) REFERENCES `class` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `instructors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
