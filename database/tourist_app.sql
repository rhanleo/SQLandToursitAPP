-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2020 at 09:22 AM
-- Server version: 5.7.24
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_type`
--

DROP TABLE IF EXISTS `evaluation_type`;
CREATE TABLE IF NOT EXISTS `evaluation_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_type`
--

INSERT INTO `evaluation_type` (`id`, `name`, `type`) VALUES
(1, 'Taught', 1),
(2, 'Noshow', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000001_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_04_11_174835_trn_teacher', 1),
(4, '2020_04_11_175816_trn_teacher_role', 1),
(5, '2020_04_11_180841_trn_time_table', 1),
(6, '2020_04_11_180901_trn_evaluation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_role_type`
--

DROP TABLE IF EXISTS `teacher_role_type`;
CREATE TABLE IF NOT EXISTS `teacher_role_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_role_type`
--

INSERT INTO `teacher_role_type` (`id`, `role_name`, `type`) VALUES
(1, 'Trainer', 1),
(2, 'Assessor', 2),
(3, 'Staff', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_status`
--

DROP TABLE IF EXISTS `teacher_status`;
CREATE TABLE IF NOT EXISTS `teacher_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_status`
--

INSERT INTO `teacher_status` (`id`, `status_name`, `type`) VALUES
(1, 'Disconnected', 0),
(2, 'Active', 1),
(3, 'Deactivated', 2);

-- --------------------------------------------------------

--
-- Table structure for table `time-table_type`
--

DROP TABLE IF EXISTS `time-table_type`;
CREATE TABLE IF NOT EXISTS `time-table_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_type_name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time-table_type`
--

INSERT INTO `time-table_type` (`id`, `table_type_name`, `type`) VALUES
(1, 'Open', 1),
(2, 'Backup', 2),
(3, 'Reserved', 3);

-- --------------------------------------------------------

--
-- Table structure for table `trn_evaluation`
--

DROP TABLE IF EXISTS `trn_evaluation`;
CREATE TABLE IF NOT EXISTS `trn_evaluation` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `lesson_datetime` datetime NOT NULL,
  `result` int(11) NOT NULL COMMENT 'result 1=taught, 2=noshow',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trn_evaluation`
--

INSERT INTO `trn_evaluation` (`id`, `teacher_id`, `lesson_datetime`, `result`, `created_at`, `updated_at`) VALUES
(1, 110250, '2020-01-11 17:00:00', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(2, 110250, '2020-01-11 16:00:00', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(3, 110250, '2020-01-11 16:00:00', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(4, 110011, '2020-01-11 16:00:00', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(5, 110011, '2020-01-11 16:00:00', 2, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(6, 110011, '2020-01-11 16:00:00', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(7, 110030, '2020-01-11 21:00:00', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(8, 110030, '2020-01-11 20:00:00', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(9, 110030, '2020-01-11 19:00:00', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(10, 110023, '2020-01-11 16:00:00', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(11, 110023, '2020-01-11 16:00:00', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(12, 110023, '2020-01-11 16:00:00', 2, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(13, 110033, '2020-01-11 15:00:00', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(14, 110033, '2020-01-11 16:00:00', 2, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(15, 110033, '2020-01-11 10:00:00', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `trn_teachers`
--

DROP TABLE IF EXISTS `trn_teachers`;
CREATE TABLE IF NOT EXISTS `trn_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nickname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110251 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trn_teachers`
--

INSERT INTO `trn_teachers` (`id`, `nickname`, `status`, `created_at`, `updated_at`) VALUES
(110011, 'Luca', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(110023, 'Mike', 0, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(110030, 'Steph C', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(110033, 'Scottie', 2, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(110250, 'John D', 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `trn_teachers_role`
--

DROP TABLE IF EXISTS `trn_teachers_role`;
CREATE TABLE IF NOT EXISTS `trn_teachers_role` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `role` int(11) NOT NULL COMMENT 'status 1=open, 2=backup, 3=reserved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trn_teachers_role`
--

INSERT INTO `trn_teachers_role` (`id`, `teacher_id`, `role`, `created_at`, `updated_at`) VALUES
(1, 110250, 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(2, 110250, 2, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(3, 110250, 3, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(4, 110011, 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(5, 110030, 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(6, 110030, 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(7, 110030, 2, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(8, 110023, 1, '2020-04-11 18:00:00', '2020-04-11 18:00:00'),
(9, 110033, 3, '2020-04-11 18:00:00', '2020-04-11 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `trn_time_table`
--

DROP TABLE IF EXISTS `trn_time_table`;
CREATE TABLE IF NOT EXISTS `trn_time_table` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `lesson_datetime` datetime NOT NULL,
  `status` int(11) NOT NULL COMMENT 'status 1=open, 2=backup, 3=reserved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trn_time_table`
--

INSERT INTO `trn_time_table` (`id`, `teacher_id`, `lesson_datetime`, `status`, `created_at`, `updated_at`) VALUES
(1, 110250, '2020-01-11 17:00:00', 1, '2020-04-11 16:00:00', '2020-04-11 16:00:00'),
(2, 110250, '2020-01-11 16:00:00', 1, NULL, NULL),
(3, 110250, '2020-01-01 17:00:00', 1, '2020-04-11 16:00:00', '2020-04-11 16:00:00'),
(4, 110011, '2020-01-11 16:00:00', 1, NULL, NULL),
(5, 110011, '2020-01-11 16:00:00', 2, NULL, NULL),
(6, 110011, '2020-01-11 16:00:00', 3, NULL, NULL),
(7, 110030, '2020-01-11 19:00:00', 1, NULL, NULL),
(8, 110030, '2020-01-11 21:00:00', 1, NULL, NULL),
(9, 110030, '2020-01-11 20:00:00', 1, NULL, NULL),
(10, 110023, '2020-01-11 16:00:00', 1, NULL, NULL),
(11, 110023, '2020-01-11 16:00:00', 1, NULL, NULL),
(12, 110023, '2020-01-11 16:00:00', 2, NULL, NULL),
(13, 110033, '2020-01-11 16:00:00', 1, NULL, NULL),
(14, 110033, '2020-01-11 16:00:00', 2, NULL, NULL),
(15, 110033, '2020-01-11 16:00:00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `is_live` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_api_token_unique` (`api_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
