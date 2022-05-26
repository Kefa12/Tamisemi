-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 05:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamisemi1`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DED` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DEO` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Government_rank',
  `regional_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `DED`, `DEO`, `description`, `regional_id`, `created_at`, `updated_at`) VALUES
(1, 'choose-district', 'district', 'district', 'Government_rank', 3, '2022-03-03 20:50:14', '2022-03-03 20:50:14'),
(2, 'choose-district', 'district', 'district', 'Government_rank', 1, '2022-03-05 20:52:43', '2022-03-06 20:52:43'),
(3, 'choose-district', 'district', 'district', 'Government_rank', 9, '2022-03-03 21:14:37', '2022-03-03 21:14:37'),
(4, 'ilala', 'van', 'van2', 'Government_rank', 3, '2022-03-02 20:06:39', '2022-03-02 20:06:39'),
(5, 'kigamboni', 'fray', 'lame', 'Government_rank', 3, '2022-03-02 18:06:40', '2022-03-02 18:06:40'),
(6, 'Temeke', 'jack', 'habil', 'Government_rank', 3, '2022-03-03 18:07:58', '2022-03-03 18:07:58'),
(7, 'kinondoni', 'anjela', 'anna', 'Government_rank', 3, '2022-04-02 20:25:26', '2022-04-02 20:25:26'),
(8, 'kyela', 'fay', 'fay', 'Government_rank', 1, '2022-04-02 20:31:42', '2022-04-02 20:31:42'),
(9, 'mbozi', 'ally', 'fray', 'Government_rank', 1, '2022-04-02 20:31:42', '2022-04-02 20:31:42'),
(10, 'Mbarali', 'kefa', 'kali', 'Government_rank', 1, '2022-04-02 20:33:10', '2022-04-02 20:33:10'),
(11, 'ilolo', 'pascal', 'paul', 'Government_rank', 2, '2022-04-02 20:34:22', '2022-04-02 20:34:22'),
(12, 'mufindi', 'dere', 'rey', 'Government_rank', 2, '2022-04-02 20:35:14', '2022-04-02 20:35:14'),
(13, 'mikumi', 'merry', 'lily', 'Government_rank', 4, '2022-04-02 20:36:23', '2022-04-02 20:36:23'),
(14, 'Morogoro-mjini', 'musa', 'habil', 'Government_rank', 4, '2022-04-02 20:37:14', '2022-04-02 20:37:14'),
(15, '5', 'jesca', NULL, 'Government_rank', 3, '2022-04-23 03:31:30', '2022-04-23 03:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `district_role`
--

CREATE TABLE `district_role` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `ward_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `letters`
--

CREATE TABLE `letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cschool` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cdistrict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tdistrict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Headmaster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDIND',
  `WEO` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDIND',
  `DEO` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDIND',
  `DED` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDIND',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `letters`
--

INSERT INTO `letters` (`id`, `name`, `cschool`, `cdistrict`, `tdistrict`, `description`, `Message`, `author`, `ward`, `Headmaster`, `WEO`, `DEO`, `DED`, `created_at`, `updated_at`) VALUES
(1, 'jesca', 'mwenge', 'kinondoni', 'ilala', 'Marriage', '', '', '', 'REJECTED BY HEADMASTER', 'APPROVED BY WEO', 'APPROVED BY District_Education_Officer', 'REJECTED BY District_Executive_Director', '2022-03-14 06:56:51', '2022-03-14 09:24:59'),
(3, 'evan', 'makambako', 'njombe', 'ilala', 'marriage', '', '', '', 'pending', 'pending', 'pending', 'pending', '2022-03-14 10:26:08', '2022-03-14 10:26:08'),
(4, 'evan', 'singida', 'kisamvu', 'mbarali', 'Nearby_To staff job', '', '', 'ruanda', 'APPROVED BY HEADMASTER', 'APPROVED BY WEO', 'REJECTED BY District_Education_Officer', 'APPROVED BY District_Executive_Director', '2022-03-14 10:33:42', '2022-03-22 12:56:58'),
(5, 'anjela', 'gaezi', 'songea', 'ntwara', 'Nearby_To staff job', '', '', '', 'pending', 'pending', 'pending', 'pending', '2022-03-14 10:53:17', '2022-03-14 10:53:17'),
(6, 'hh', 'mwenge', 'kyela', 'mwenge', 'Nearby_To staff job', '', '', 'same', 'REJECTED BY HEADMASTER', 'pending', 'pending', 'pending', '2022-03-14 12:36:18', '2022-03-26 00:10:14'),
(7, 'ally', 'maswi', 'morogoro', 'kyela', 'Nearby_To staff job', '', '', 'ruanda', 'pending', 'pending', 'pending', 'pending', '2022-03-15 09:12:41', '2022-03-22 12:32:46'),
(8, 'gd', 'mwanza primary', 'mwanza', 'shinyanga', 'Nearby_To staff job', '', '', '', 'APPROVED BY HEADMASTER', 'REJECTED BY WEO', 'pending', 'pending', '2022-03-15 12:59:50', '2022-03-16 13:35:14'),
(9, 'asha', 'MpandaPR', 'mpanda', 'ihumwa', 'Nearby_To staff job', '', '', 'same', 'REJECTED BY HEADMASTER', 'pending', 'pending', 'pending', '2022-03-16 17:07:07', '2022-03-17 03:02:29'),
(10, 'peter', 'mwenge', 'kyela', 'morogoro', 'marriage', '', '', 'same', 'APPROVED BY HEADMASTER', 'REJECTED BY WEO', 'pending', 'pending', '2022-03-17 01:14:56', '2022-03-23 03:38:33'),
(11, 'jon', 'mashujaa', 'makambako', 'ileje', 'older age', '', '', 'same', 'pending', 'pending', 'pending', 'pending', '2022-03-17 06:54:13', '2022-03-17 07:43:40'),
(12, 'jon', 'mashujaa', 'makambako', 'ileje', 'marriage', '', '', 'same', 'APPROVED BY HEADMASTER', 'REJECTED BY WEO', 'pending', 'pending', '2022-03-17 06:55:30', '2022-03-17 08:05:27'),
(13, 'Rehema', 'maendeleo', 'kinondoni', 'kyela', 'marriage', '', '', 'same', 'REJECTED BY HEADMASTER', 'pending', 'pending', 'pending', '2022-03-21 03:56:48', '2022-03-22 18:07:56'),
(14, 'evan', 'mwenge', 'kinondoni', 'ilala', 'marriage', 'Mambo', 'jesca', 'same', 'pending', 'pending', 'pending', 'pending', '2022-03-22 16:30:42', '2022-03-22 16:30:42'),
(15, 'evan', 'kambarage', 'mpanda', 'ileje', 'marriage', '', '', 'same', 'pending', 'pending', 'pending', 'pending', '2022-03-24 05:23:46', '2022-03-24 05:23:46'),
(16, 'kun', 'hanang', 'mpanda', 'kyela', 'Nearby_To staff job', '', '', 'same', 'pending', 'pending', 'pending', 'pending', '2022-03-28 05:46:54', '2022-03-28 05:46:54'),
(17, 'kun11', 'hanang', 'mpanda', 'kyela', 'marriage', '', '', 'same', 'pending', 'pending', 'pending', 'pending', '2022-03-28 05:56:31', '2022-03-28 05:56:31'),
(18, 'kun11', 'hanang', 'kinondoni', 'ilala', 'marriage', '', '', 'same', 'REJECTED BY HEADMASTER', 'pending', 'pending', 'pending', '2022-03-28 06:45:07', '2022-03-28 06:59:16'),
(19, 'evan', 'mwenge', 'kinondoni', 'ileje', 'marriage', '', '', 'same', 'pending', 'pending', 'pending', 'pending', '2022-03-29 14:59:36', '2022-03-29 14:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_08_003659_laratrust_setup_tables', 1),
(6, '2022_03_13_064650_create__users_table', 2),
(7, '2022_03_13_065240_create_users_table', 3),
(8, '2022_03_13_065618_create_users_table', 4),
(9, '2022_03_13_071544_create_users_table', 5),
(10, '2022_03_13_111738_create_studs_table', 6),
(11, '2022_03_13_150654_create_users_table', 7),
(12, '2022_03_13_200857_create_transfers_table', 8),
(13, '2022_03_13_201546_create_transfers_table', 9),
(14, '2022_03_14_061049_create_letters_table', 10),
(15, '2022_03_14_095442_create_letters_table', 11),
(16, '2022_03_15_133357_create_schools_table', 12),
(17, '2022_03_16_194104_create_wards_table', 13),
(18, '2022_03_16_201012_create_wards_table', 14),
(19, '2022_03_16_202226_create_districts_table', 15),
(20, '2022_03_27_073741_create_wards_role_table', 16),
(21, '2022_03_27_092307_laratrust_setup_teams', 16),
(22, '2022_03_27_161048_create_schools_role_table', 17),
(23, '2022_03_27_161952_create_district_role_table', 18),
(24, '2022_04_02_200024_create_regionals_table', 19),
(25, '2022_04_22_220057_create_users_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'mwenge', 'mwenge', 'mwenge', '2022-03-14 13:19:24', '2022-03-14 13:19:24'),
(2, 'kambarage', 'kambarage', 'kambarage', '2022-03-14 13:19:57', '2022-03-14 13:19:57'),
(3, 'maendeleo', 'Maendeleo', 'Maendeleo', '2022-03-14 13:20:19', '2022-03-14 13:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`, `team_id`) VALUES
(2, 1, 'App\\Models\\User', NULL),
(1, 3, 'App\\Models\\User', NULL),
(1, 4, 'App\\Models\\User', NULL),
(1, 5, 'App\\Models\\User', NULL),
(1, 6, 'App\\Models\\User', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regionals`
--

CREATE TABLE `regionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NOT_YET_ASSIGN',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regionals`
--

INSERT INTO `regionals` (`id`, `name`, `RD`, `created_at`, `updated_at`) VALUES
(1, 'MBEYA', 'NOT_YET_ASSIGN', '2022-04-01 20:06:38', '2022-04-01 20:06:38'),
(2, 'IRINGA', 'NOT_YET_ASSIGN', '2022-04-02 20:06:38', '2022-04-02 20:06:38'),
(3, 'DAR-ES-SALAAM', 'NOT_YET_ASSIGN', '2022-04-02 20:07:24', '2022-04-02 20:07:24'),
(4, 'MOROGORO', 'NOT_YET_ASSIGN', '2022-04-02 20:07:24', '2022-04-02 20:07:24'),
(5, 'PWANI', 'NOT_YET_ASSIGN', '2022-04-02 20:08:29', '2022-04-02 20:08:29'),
(6, 'TANGA', 'NOT_YET_ASSIGN', '2022-04-02 20:08:29', '2022-04-02 20:08:29'),
(7, 'DODOMA', 'NOT_YET_ASSIGN', '2022-04-02 20:09:45', '2022-04-02 20:09:45'),
(8, 'MWANZA', 'NOT_YET_ASSIGN', '2022-04-02 20:09:45', '2022-04-02 20:09:45'),
(9, 'RUKWA', 'NOT_YET_ASSIGN', '2022-04-02 20:10:51', '2022-04-02 20:10:51'),
(10, 'ARUSHA', 'NOT_YET_ASSIGN', '2022-04-02 20:10:51', '2022-04-02 20:10:51'),
(11, 'KILIMANJARO', 'NOT_YET_ASSIGN', '2022-04-02 20:12:02', '2022-04-02 20:12:02'),
(12, 'TABORA', 'NOT_YET_ASSIGN', '2022-04-02 20:12:02', '2022-04-02 20:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tamisemi_Director', 'Tamisemi_Director', 'Tamisemi_Director', '2022-03-13 04:01:39', '2022-03-13 04:03:20'),
(2, 'Teacher', 'Teacher', 'Teacher', '2022-03-02 19:43:02', '2022-03-02 19:43:02'),
(3, 'Headmaster', 'Headmaster', 'Headmaster', '2022-03-02 08:50:42', '2022-03-02 08:50:42'),
(5, 'Weo', 'Weo', 'WEO', '2022-03-14 07:10:20', '2022-03-14 07:16:21'),
(6, 'DEO', 'DEO', 'DISTRICT_EDUCATION_OFFICER', '2022-03-14 07:27:57', '2022-03-14 07:27:57'),
(7, 'DED', 'DED', 'DED', '2022-03-14 08:23:32', '2022-03-14 08:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`, `team_id`) VALUES
(1, 1, 'App\\Models\\User', NULL),
(2, 1, 'App\\Models\\User', NULL),
(2, 1, 'App\\Models\\User', 1),
(2, 2, 'App\\Models\\User', NULL),
(2, 3, 'App\\Models\\User', NULL),
(5, 3, 'App\\Models\\User', NULL),
(3, 4, 'App\\Models\\User', NULL),
(5, 4, 'App\\Models\\User', NULL),
(3, 5, 'App\\Models\\User', NULL),
(2, 6, 'App\\Models\\User', NULL),
(5, 6, 'App\\Models\\User', NULL),
(5, 7, 'App\\Models\\User', NULL),
(6, 8, 'App\\Models\\User', NULL),
(2, 9, 'App\\Models\\User', NULL),
(2, 10, 'App\\Models\\User', NULL),
(1, 11, 'App\\Models\\User', NULL),
(3, 11, 'App\\Models\\User', NULL),
(2, 12, 'App\\Models\\User', NULL),
(7, 13, 'App\\Models\\User', NULL),
(7, 14, 'App\\Models\\User', NULL),
(2, 15, 'App\\Models\\User', NULL),
(2, 16, 'App\\Models\\User', NULL),
(3, 17, 'App\\Models\\User', NULL),
(6, 18, 'App\\Models\\User', NULL),
(2, 19, 'App\\Models\\User', NULL),
(1, 20, 'App\\Models\\User', NULL),
(2, 21, 'App\\Models\\User', NULL),
(2, 22, 'App\\Models\\User', NULL),
(1, 23, 'App\\Models\\User', NULL),
(1, 24, 'App\\Models\\User', NULL),
(5, 25, 'App\\Models\\User', NULL),
(1, 27, 'App\\Models\\User', NULL),
(1, 28, 'App\\Models\\User', NULL),
(3, 29, 'App\\Models\\User', NULL),
(1, 30, 'App\\Models\\User', NULL),
(2, 31, 'App\\Models\\User', NULL),
(2, 32, 'App\\Models\\User', NULL),
(2, 33, 'App\\Models\\User', NULL),
(3, 34, 'App\\Models\\User', NULL),
(2, 35, 'App\\Models\\User', NULL),
(2, 36, 'App\\Models\\User', NULL),
(2, 37, 'App\\Models\\User', NULL),
(2, 38, 'App\\Models\\User', NULL),
(2, 39, 'App\\Models\\User', NULL),
(3, 40, 'App\\Models\\User', NULL),
(2, 41, 'App\\Models\\User', NULL),
(5, 42, 'App\\Models\\User', NULL),
(5, 43, 'App\\Models\\User', NULL),
(5, 44, 'App\\Models\\User', NULL),
(5, 45, 'App\\Models\\User', NULL),
(5, 46, 'App\\Models\\User', NULL),
(2, 47, 'App\\Models\\User', NULL),
(3, 48, 'App\\Models\\User', NULL),
(3, 49, 'App\\Models\\User', NULL),
(3, 50, 'App\\Models\\User', NULL),
(2, 51, 'App\\Models\\User', NULL),
(3, 52, 'App\\Models\\User', NULL),
(3, 53, 'App\\Models\\User', NULL),
(2, 54, 'App\\Models\\User', NULL),
(3, 55, 'App\\Models\\User', NULL),
(3, 56, 'App\\Models\\User', NULL),
(2, 57, 'App\\Models\\User', NULL),
(2, 58, 'App\\Models\\User', NULL),
(2, 59, 'App\\Models\\User', NULL),
(2, 60, 'App\\Models\\User', NULL),
(2, 61, 'App\\Models\\User', NULL),
(3, 62, 'App\\Models\\User', NULL),
(2, 63, 'App\\Models\\User', NULL),
(2, 64, 'App\\Models\\User', NULL),
(2, 65, 'App\\Models\\User', NULL),
(2, 66, 'App\\Models\\User', NULL),
(2, 67, 'App\\Models\\User', NULL),
(2, 68, 'App\\Models\\User', NULL),
(2, 69, 'App\\Models\\User', NULL),
(2, 70, 'App\\Models\\User', NULL),
(2, 71, 'App\\Models\\User', NULL),
(2, 72, 'App\\Models\\User', NULL),
(2, 73, 'App\\Models\\User', NULL),
(1, 74, 'App\\Models\\User', NULL),
(3, 77, 'App\\Models\\User', NULL),
(3, 79, 'App\\Models\\User', NULL),
(3, 80, 'App\\Models\\User', NULL),
(3, 81, 'App\\Models\\User', NULL),
(2, 82, 'App\\Models\\User', NULL),
(3, 83, 'App\\Models\\User', NULL),
(3, 84, 'App\\Models\\User', NULL),
(3, 85, 'App\\Models\\User', NULL),
(3, 86, 'App\\Models\\User', NULL),
(3, 87, 'App\\Models\\User', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Headmaster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Government_school',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ward_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `Headmaster`, `description`, `created_at`, `updated_at`, `ward_id`) VALUES
(1, 'mwenge', 'ally', 'Government_school', '2022-03-02 15:07:46', '2022-03-02 15:07:46', 0),
(2, 'maendeleo', 'juma', 'Government_school', '2022-03-03 15:42:52', '2022-03-03 15:42:52', 0),
(3, 'maswi', 'liz', 'Government_school', '2022-03-02 19:29:15', '2022-03-02 19:29:15', 0),
(4, 'singida', 'son', 'Government_school', '2022-03-03 10:46:44', '2022-03-03 10:46:44', 0),
(5, 'namename', '', 'Government_school', '2022-03-28 02:52:39', '2022-03-28 02:52:39', 0),
(6, 'mwenge', '', 'Government_school', '2022-03-28 03:26:27', '2022-03-28 03:26:27', 0),
(7, 'Hanang', '', 'Government_school', '2022-03-28 05:54:39', '2022-03-28 05:54:39', 0),
(8, 'hanang', '', 'Government_school', '2022-03-28 06:40:51', '2022-03-28 06:40:51', 0),
(9, 'hanang', '', 'Government_school', '2022-03-28 06:42:25', '2022-03-28 06:42:25', 0),
(10, 'hanang', 'kun1101', 'Government_school', '2022-03-28 06:47:30', '2022-03-28 06:47:30', 0),
(12, 'vijiweni-shule', 'jack', 'Government_school', '2022-03-02 18:22:46', '2022-03-02 18:22:46', 3),
(13, 'tungi-shule', 'kaole', 'Government_school', '2022-03-03 18:24:56', '2022-03-03 18:24:56', 4),
(14, 'buguruni-shule', 'jackline', 'Government_school', '2022-03-04 18:24:56', '2022-03-04 18:24:56', 6),
(15, 'chanika-shule', 'ikolo', 'Government_school', '2022-03-02 18:26:37', '2022-03-03 18:26:37', 7),
(17, 'bunju-shule', 'frayson', 'Government_school', '2022-03-04 18:26:37', '2022-03-04 18:26:37', 10),
(18, 'goba-shule', 'haika', 'Government_school', '2022-03-03 18:28:12', '2022-03-03 18:28:12', 11),
(19, 'mwenge', 'P', 'Government_school', '2022-04-22 18:40:30', '2022-04-22 18:40:30', 4),
(20, 'mwenge', 'evan', 'Government_school', '2022-04-22 19:11:46', '2022-04-22 19:11:46', 4),
(21, 'Hanang', 'P', 'Government_school', '2022-04-22 20:11:20', '2022-04-22 20:11:20', 7);

-- --------------------------------------------------------

--
-- Table structure for table `schools_role`
--

CREATE TABLE `schools_role` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools_role`
--

INSERT INTO `schools_role` (`user_id`, `role_id`, `school_id`, `created_at`, `updated_at`) VALUES
(28, 7, 18, '2022-03-02 07:29:42', '2022-03-03 07:29:42'),
(30, 2, 17, '2022-03-02 16:51:51', '2022-03-02 16:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `studs`
--

CREATE TABLE `studs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'school', 'school', 'school', '2022-03-01 09:31:33', '2022-03-01 09:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cschool` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cdistrict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tdistrict` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `name`, `cschool`, `cdistrict`, `tdistrict`, `description`, `Message`, `author`, `created_at`, `updated_at`) VALUES
(2, 'anjela', 'mwenge', 'kinondoni', 'kigogo', 'marriage', '', '', '2022-03-13 18:26:43', '2022-03-13 18:36:29'),
(3, 'jesse', 'shakilango', 'kinondoni', 'ilala', 'marriage', '', '', '2022-03-13 18:35:51', '2022-03-13 18:35:51'),
(4, 'Rehema', 'mpanda', 'ilala', 'ilala', 'marriage', 'UKO WAPI', 'evan', '2022-03-13 18:36:15', '2022-03-24 02:47:55'),
(5, 'ally', 'mapambano', 'kinondoni', 'mbeya', 'marriage', 'can transfer by exchange', 'evan', '2022-03-13 18:47:36', '2022-03-24 03:04:23'),
(7, 'evan', 'mwenge', 'ilala', 'ilala', 'marriage', 'can transfer by exchange', 'Rehema', '2022-03-22 01:33:25', '2022-03-24 02:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Employee_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDIND',
  `regional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDIND',
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDIND',
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDIND',
  `schools` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDIND',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Employee_id`, `name`, `name1`, `email`, `email1`, `email_verified_at`, `password`, `school`, `regional`, `district`, `ward`, `schools`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'TD03', 'tami', 'tami', 'tami@gmail.com', NULL, NULL, '$2y$10$J1TNGY2Nc3IMRoKLZueOr.tr.8XglDBDE6tXrFUQc3wNI24G1moCm', 'Hanang', '3', '5', '4', '19', NULL, '2022-04-22 19:10:08', '2022-04-22 19:10:08'),
(2, 'TD08888', 'evan', 'evan', 'evan@gmail.com', NULL, NULL, '$2y$10$297GTkN8XfatBX9A.73L.eN0jyQQwSNFx9wRGDPZnTqtNlV5MYLr2', 'mwenge', '3', '5', '4', '13', NULL, '2022-04-22 19:11:46', '2022-04-22 19:11:46'),
(3, 'TD08888', 'Juma', 'Juma', 'juma@gmail.com', NULL, NULL, '$2y$10$RzeLqlKdHwny6/g6Exl.JOD2Xif/D9vkx59THlQMUU.WiU3JJb8D2', 'PENDIND', '3', '5', '4', 'PENDIND', NULL, '2022-04-22 19:39:01', '2022-04-22 19:39:01'),
(4, 'TD03', 'kefa', 'kefa', 'kefa@gmail.com', NULL, NULL, '$2y$10$YQgQCdvL/ubXbSXUYvZrJuYQPtYJVTpnZkbpzWKItyoTy5GSNyf0y', 'PENDIND', '3', '5', '4', 'PENDIND', NULL, '2022-04-22 19:41:43', '2022-04-22 19:41:43'),
(5, 'TD02115', 'P', 'P', 'P@gmail.com', NULL, NULL, '$2y$10$tS/VtMMN/qFpoi92dzw6nuOUF0Wcp9wRn.uLfqs8898NPJJXX1iKW', 'Hanang', '3', '4', '7', '15', NULL, '2022-04-22 20:11:19', '2022-04-22 20:11:19'),
(6, 'TD01111', 'P1', 'P1', 'P1@gmail.com', NULL, NULL, '$2y$10$hUjmyU.R8Kz70AtwxoZxGeYoVTYvmNDkaLv9xRUu1n/02yBYW.ldq', 'PENDIND', '3', '5', '3', 'PENDIND', NULL, '2022-04-22 20:12:59', '2022-04-22 20:12:59'),
(7, 'TD038', 'dear', 'dear', 'daer@gmail.com', NULL, NULL, '$2y$10$2he8GV3FX5orx8EXeKvK5.lP8et79ODmnauuJsNuvk7E.bJUwLf8W', 'PENDIND', '3', '5', '3', 'PENDIND', NULL, '2022-04-23 03:04:29', '2022-04-23 03:04:29'),
(8, 'TD021111', 'jesca', 'jesca', 'jes@gmail.com', NULL, NULL, '$2y$10$kqPS..CfaORNs30KS/Ee6ulA/A/YKvh2/6.IWYf8DHPzoIqyvw2M2', 'PENDIND', '3', '5', 'PENDIND', 'PENDIND', NULL, '2022-04-23 03:31:29', '2022-04-23 03:31:29'),
(9, 'TD0300ooo', 'hh', 'hh', 'hh@gmail.com', NULL, NULL, '$2y$10$nMIN.21uDRd.JiXfe05jqub4F0Q1mcWJ5N9NVQaE4doqfbWpvN.pO', 'PENDIND', '11', 'PENDIND', 'PENDIND', 'PENDIND', NULL, '2022-04-23 03:53:17', '2022-04-23 03:53:17'),
(10, 'TD0122', 'fa', 'fa', 'fa@gmail.com', NULL, NULL, '$2y$10$jZynYwiairZ9WdI83puRBepXv6vp8v.6C55y/oeSzLqA9wP2S/2F.', 'PENDIND', '10', 'PENDIND', 'PENDIND', 'PENDIND', NULL, '2022-04-23 03:56:51', '2022-04-23 03:56:51'),
(11, 'TD0122999', 'tami9', 'tami9', 'tami9@gmail.com', NULL, NULL, '$2y$10$zHx16Ely1KM41L0bCe9GQ.M3loD8Nk2IkLmDsKozcdZKxWJNsuQQ2', 'PENDIND', 'PENDIND', 'PENDIND', 'PENDIND', 'PENDIND', NULL, '2022-04-23 04:05:47', '2022-04-23 04:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WEO` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Government_rank',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `name`, `WEO`, `description`, `created_at`, `updated_at`, `district_id`) VALUES
(1, 'same', 'anjela', 'Government_rank', '2022-03-02 20:11:15', '2022-03-03 20:11:15', 0),
(2, 'ilanga', 'anjela89', 'Government_rank', '2022-03-28 03:54:35', '2022-03-28 03:54:35', 0),
(3, 'vijiweni', 'amina', 'Government_rank', '2022-03-02 18:09:59', '2022-03-03 18:09:59', 5),
(4, 'tungi', 'paul', 'Government_rank', '2022-03-02 18:09:59', '2022-03-02 18:09:59', 5),
(6, 'buruguni', 'dan', 'Government_rank', '2022-03-02 18:17:02', '2022-03-02 18:17:02', 4),
(7, 'chanika', 'wenda', 'Government_rank', '2022-03-03 18:17:02', '2022-03-03 18:17:02', 4),
(10, 'CHOOSE CITY', 'sobby', 'Government_rank', '2022-03-04 18:19:34', '2022-03-04 18:19:34', 1),
(11, 'goba', 'ole', 'Government_rank', '2022-03-03 18:19:34', '2022-03-03 18:19:34', 1),
(12, '4', 'Juma', 'Government_rank', '2022-04-22 19:39:02', '2022-04-22 19:39:02', 5),
(13, '4', 'kefa', 'Government_rank', '2022-04-22 19:41:43', '2022-04-22 19:41:43', 5),
(14, '3', 'P1', 'Government_rank', '2022-04-22 20:13:00', '2022-04-22 20:13:00', 5),
(15, '3', 'dear', 'Government_rank', '2022-04-23 03:04:29', '2022-04-23 03:04:29', 5);

-- --------------------------------------------------------

--
-- Table structure for table `wards_role`
--

CREATE TABLE `wards_role` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `ward_id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_users`
--

CREATE TABLE `_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district_role`
--
ALTER TABLE `district_role`
  ADD UNIQUE KEY `district_role_user_id_role_id_ward_id_district_id_unique` (`user_id`,`role_id`,`ward_id`,`district_id`),
  ADD KEY `district_role_role_id_foreign` (`role_id`),
  ADD KEY `district_role_district_id_foreign` (`district_id`),
  ADD KEY `district_role_ward_id_foreign` (`ward_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD UNIQUE KEY `permission_user_user_id_permission_id_user_type_team_id_unique` (`user_id`,`permission_id`,`user_type`,`team_id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `regionals`
--
ALTER TABLE `regionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD UNIQUE KEY `role_user_user_id_role_id_user_type_team_id_unique` (`user_id`,`role_id`,`user_type`,`team_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools_role`
--
ALTER TABLE `schools_role`
  ADD UNIQUE KEY `schools_role_user_id_role_id_school_id_unique` (`user_id`,`role_id`,`school_id`),
  ADD KEY `schools_role_role_id_foreign` (`role_id`),
  ADD KEY `schools_role_school_id_foreign` (`school_id`);

--
-- Indexes for table `studs`
--
ALTER TABLE `studs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_name_unique` (`name`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards_role`
--
ALTER TABLE `wards_role`
  ADD KEY `wards_role_role_id_foreign` (`role_id`),
  ADD KEY `wards_role_user_id_foreign` (`user_id`),
  ADD KEY `wards_role_school_id_foreign` (`school_id`),
  ADD KEY `wards_role_ward_id_foreign` (`ward_id`);

--
-- Indexes for table `_users`
--
ALTER TABLE `_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `letters`
--
ALTER TABLE `letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regionals`
--
ALTER TABLE `regionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `studs`
--
ALTER TABLE `studs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `_users`
--
ALTER TABLE `_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `district_role`
--
ALTER TABLE `district_role`
  ADD CONSTRAINT `district_role_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `district_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `district_role_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `district_role_ward_id_foreign` FOREIGN KEY (`ward_id`) REFERENCES `wards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schools_role`
--
ALTER TABLE `schools_role`
  ADD CONSTRAINT `schools_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schools_role_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schools_role_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wards_role`
--
ALTER TABLE `wards_role`
  ADD CONSTRAINT `wards_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wards_role_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wards_role_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wards_role_ward_id_foreign` FOREIGN KEY (`ward_id`) REFERENCES `wards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
