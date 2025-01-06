-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 10:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_scan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `school_id`, `name`, `status`, `created_by`, `is_deleted`, `created_at`, `updated_at`) VALUES
(7, 6, '1st', 'active', 12, '0', '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(8, 6, '2nd', 'active', 12, '0', '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(9, 6, '3rd', 'active', 12, '0', '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(10, 6, '4th', 'active', 12, '0', '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(11, 6, '5th', 'active', 12, '0', '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(12, 6, '6th', 'active', 12, '0', '2023-07-04 03:08:26', '2023-07-04 03:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `class_assign_sections`
--

CREATE TABLE `class_assign_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_assign_sections`
--

INSERT INTO `class_assign_sections` (`id`, `school_id`, `class_id`, `section_id`, `created_at`, `updated_at`) VALUES
(16, 6, 7, 4, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(17, 6, 7, 5, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(18, 6, 7, 6, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(19, 6, 7, 7, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(20, 6, 8, 5, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(21, 6, 8, 7, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(22, 6, 8, 8, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(23, 6, 9, 4, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(24, 6, 9, 6, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(25, 6, 9, 8, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(26, 6, 10, 5, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(27, 6, 10, 6, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(28, 6, 10, 7, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(29, 6, 11, 4, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(30, 6, 11, 5, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(31, 6, 11, 6, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(32, 6, 11, 7, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(33, 6, 12, 4, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(34, 6, 12, 5, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(35, 6, 12, 9, '2023-07-04 03:08:26', '2023-07-04 03:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `class_assign_subjects`
--

CREATE TABLE `class_assign_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_assign_subjects`
--

INSERT INTO `class_assign_subjects` (`id`, `school_id`, `class_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(19, 6, 7, 8, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(20, 6, 7, 5, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(21, 6, 7, 9, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(22, 6, 7, 7, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(23, 6, 7, 6, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(24, 6, 8, 8, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(25, 6, 8, 5, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(26, 6, 8, 9, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(27, 6, 9, 5, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(28, 6, 9, 7, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(29, 6, 9, 6, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(30, 6, 10, 8, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(31, 6, 10, 5, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(32, 6, 10, 9, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(33, 6, 11, 8, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(34, 6, 11, 5, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(35, 6, 11, 9, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(36, 6, 11, 7, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(37, 6, 11, 6, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(38, 6, 12, 5, '2023-07-04 03:08:26', '2023-07-04 03:08:26'),
(39, 6, 12, 7, '2023-07-04 03:08:26', '2023-07-04 03:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `school_id`, `name`, `status`, `created_by`, `is_deleted`, `created_at`, `updated_at`) VALUES
(3, 6, 'Class Teacher', 'active', 12, '0', '2023-07-04 03:08:41', '2023-07-04 03:08:41'),
(4, 6, 'Principle', 'active', 12, '0', '2023-07-04 03:08:41', '2023-07-04 03:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `from_class` bigint(20) UNSIGNED NOT NULL,
  `to_class` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `school_id`, `title`, `from_class`, `to_class`, `date`, `created_by`, `is_deleted`, `created_at`, `updated_at`) VALUES
(6, 6, 'Mid Term', 7, 9, '2023-07-04', 12, '0', '2023-07-04 03:12:48', '2023-07-04 03:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `exam_time_sheets`
--

CREATE TABLE `exam_time_sheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_time_sheets`
--

INSERT INTO `exam_time_sheets` (`id`, `school_id`, `exam_id`, `class_id`, `subject_id`, `date`, `start_time`, `end_time`, `created_by`, `is_deleted`, `created_at`, `updated_at`) VALUES
(53, 6, 6, 7, 5, '2023-07-04', '08:00 AM', '08:30 AM', 12, '0', '2023-07-04 10:48:24', '2023-07-04 10:48:24');

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
-- Table structure for table `home_works`
--

CREATE TABLE `home_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `created_by_staff` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'homework',
  `title` longtext NOT NULL,
  `description` longtext DEFAULT NULL,
  `files` longtext DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_works`
--

INSERT INTO `home_works` (`id`, `school_id`, `created_by_staff`, `class_id`, `section_id`, `type`, `title`, `description`, `files`, `due_date`, `date`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(7, 6, 4, 7, 4, 'homework', 'Hello this is home work', 'Hello', NULL, '2023-07-14', '2023-07-14 14:46:00', 'pending', '0', '2023-07-14 09:46:00', '2023-07-14 09:46:00'),
(8, 6, 4, 7, 4, 'homework', 'Hello this is home work', 'Hello', '25168934597055.png', '2023-07-14', '2023-07-14 14:46:10', 'pending', '0', '2023-07-14 09:46:10', '2023-07-14 09:46:10'),
(9, 6, 4, 7, 4, 'syllabus', 'Hello this is Syllabus', 'Hello', NULL, NULL, '2023-07-14 14:46:22', 'pending', '0', '2023-07-14 09:46:22', '2023-07-14 09:46:22'),
(10, 6, 4, 7, 4, 'syllabus', 'Hello this is Syllabus', 'Hello', '25168934598947.png', NULL, '2023-07-14 14:46:29', 'pending', '0', '2023-07-14 09:46:29', '2023-07-14 09:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `leave_applications`
--

CREATE TABLE `leave_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_10_19_125905_create_roles_table', 1),
(11, '2022_10_19_142014_add_role_to_users_table', 1),
(12, '2022_10_21_073030_create_permissions_table', 1),
(13, '2022_10_21_104024_create_permission_roles_table', 1),
(14, '2023_06_02_144624_create_schools_table', 1),
(15, '2023_06_06_081732_create_sections_table', 1),
(16, '2023_06_06_112651_create_subjects_table', 1),
(17, '2023_06_06_145311_create_classes_table', 1),
(18, '2023_06_06_145312_create_class_assign_sections_table', 1),
(19, '2023_06_12_104207_designations', 1),
(20, '2023_06_12_111207_create_staff_table', 1),
(21, '2023_06_12_112140_create_staff_qualifications_table', 1),
(22, '2023_06_12_112730_create_staff_experiences_table', 1),
(23, '2023_06_12_113014_create_staff_assign_classes_table', 1),
(24, '2023_06_12_113140_create_staff_assign_subjects_table', 1),
(25, '2023_06_13_144437_create_class_assign_subjects_table', 1),
(26, '2023_06_14_122554_create_parents_table', 1),
(27, '2023_06_14_122555_create_students_table', 1),
(28, '2023_06_14_124455_create_student_class_assigns_table', 1),
(29, '2023_06_14_124818_create_student_fee_structures_table', 1),
(30, '2023_06_15_144328_add_user_id_table', 1),
(31, '2023_06_15_145527_add_user_id_to_table', 1),
(32, '2023_06_15_150325_add_user_id_to_parent_table', 1),
(33, '2023_06_15_151101_add_user_id_to_school_table', 1),
(34, '2023_06_20_124358_create_study_materials_table', 1),
(35, '2023_06_21_130928_create_time_table_settings_table', 1),
(36, '2023_06_21_141751_create_time_table_periods_table', 1),
(37, '2023_06_23_140700_create_time_table_assign_periods_table', 1),
(38, '2023_06_26_143109_create_push_notifications_table', 1),
(39, '2023_06_27_092658_create_exams_table', 1),
(40, '2023_06_27_131535_create_syllabi_table', 1),
(41, '2023_07_03_100300_create_exam_time_sheets_table', 1),
(42, '2023_07_03_154757_create_student_results_table', 1),
(43, '2023_07_04_085143_create_student_attendances_table', 1),
(44, '2023_07_04_133249_add_school_idto_role', 1),
(45, '2023_07_04_161312_add_school_idto_user', 1),
(47, '2023_07_11_142155_add_colomn_to_teacher_table', 2),
(48, '2023_07_12_122602_create_leave_applications_table', 3),
(50, '2023_07_13_094503_add_status_column_to_leave_applications_table', 4),
(53, '2023_07_13_101042_create_home_works_table', 5),
(54, '2023_07_14_143452_create_student_leave_applications_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('23fe383cc3db60ef3092f0b841aaf6a22ef7dad79d6afe484a4cf1f7f2bdf67d797dc3d234d78423', 25, 1, 'MyAppToken', '[]', 0, '2023-07-14 08:33:29', '2023-07-14 08:33:29', '2024-07-14 13:33:29'),
('35e9a7677483ecb94994b345b1d3e96536396901ff6a42643dbcde6140be6cf7cc879dd071da931d', 22, 1, 'MyAppToken', '[]', 0, '2023-07-14 09:46:39', '2023-07-14 09:46:39', '2024-07-14 14:46:39'),
('414c3c2e9efc21fe1c7349bd929cf36c62de949413cc989cf9c404d248b976d424333445d5a250dd', 25, 1, 'MyAppToken', '[]', 0, '2023-07-14 10:44:46', '2023-07-14 10:44:46', '2024-07-14 15:44:46'),
('44531e0ed356bc6a46a788e9ac1683178cc9c350789c06d5870a4af9a8fa2226a705fc8db182fe42', 13, 1, 'MyAppToken', '[]', 0, '2023-07-14 08:18:53', '2023-07-14 08:18:53', '2024-07-14 13:18:53'),
('4d8b5cf95e0e6911ce1579fced89b12a82b73d262eaeee204a4ca9a8801ccccf5eb8ff762b9de9fc', 13, 1, 'MyAppToken', '[]', 0, '2023-07-12 09:42:42', '2023-07-12 09:42:42', '2024-07-12 14:42:42'),
('5d09c83f744a6e56f6c08703ba34449d70022dcdba2b1e1e8b0f9a8a037d6c33476c7262e998f856', 25, 1, 'MyAppToken', '[]', 0, '2023-07-14 09:45:35', '2023-07-14 09:45:35', '2024-07-14 14:45:35'),
('616c8e3d46dd7c755ddc5afa20d123f51645d5b537d0e97ed3aa07b670178f52060e5e4616f6deb8', 13, 1, 'MyAppToken', '[]', 0, '2023-07-14 08:25:23', '2023-07-14 08:25:23', '2024-07-14 13:25:23'),
('78a997eb127b80d2bc3e3708ef4992560946c819050703d96589760f432456832e7944ba8f03a65a', 13, 1, 'MyAppToken', '[]', 0, '2023-07-13 02:57:25', '2023-07-13 02:57:25', '2024-07-13 07:57:25'),
('7b1bb037a5e97a11592cd851355bcbb9e3da23ef66304847859645bcf8f8b418756d7b7c259387bc', 22, 1, 'MyAppToken', '[]', 0, '2023-07-14 02:44:39', '2023-07-14 02:44:39', '2024-07-14 07:44:39'),
('84cde893a65776dde52627043a1b8a867564c4db35667640f9aa6e78a531f9be2a43dc1877baf7f1', 22, 1, 'MyAppToken', '[]', 0, '2023-07-14 10:48:56', '2023-07-14 10:48:56', '2024-07-14 15:48:56'),
('d086983c824bce84089b0b5130e3f4a485ace45e7a342a08da3e8776d16c556fdc642b4dd45d3b48', 25, 1, 'MyAppToken', '[]', 0, '2023-07-14 08:39:42', '2023-07-14 08:39:42', '2024-07-14 13:39:42'),
('d6d93f87bbbe4dc8e3e88f1568a7f2429b4976c2edf95879900541a31181965fc365a447f3c2cfa3', 22, 1, 'MyAppToken', '[]', 0, '2023-07-14 02:30:37', '2023-07-14 02:30:37', '2024-07-14 07:30:37'),
('deb15700030642d79963140dfcf05b5457e9e0261c86a7017678795eb953a5777b3fd0d47a7b622d', 22, 1, 'MyAppToken', '[]', 0, '2023-07-14 09:52:45', '2023-07-14 09:52:45', '2024-07-14 14:52:45'),
('fd8c6d7a58fd5d2572a16e224674a47b475041699f3d4cb3cc84d6886dc8df3013f62a6e7855f8b1', 22, 1, 'MyAppToken', '[]', 0, '2023-07-14 08:40:33', '2023-07-14 08:40:33', '2024-07-14 13:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'SMSScan Personal Access Client', '3LVpVAgtiCpZntOfo3U9KzjigJb9Rmbtl8L8z7TL', NULL, 'http://localhost', 1, 0, 0, '2023-07-11 05:53:59', '2023-07-11 05:53:59'),
(2, NULL, 'SMSScan Password Grant Client', 'oTd31AcCuclyqwZ8qnZGAFqdAvWWSJAMZjs2vUDX', 'users', 'http://localhost', 0, 1, 0, '2023-07-11 05:53:59', '2023-07-11 05:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-07-11 05:53:59', '2023-07-11 05:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `emergency_phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `username`, `name`, `email`, `phone`, `emergency_phone`, `created_at`, `updated_at`, `user_id`) VALUES
(2, 'mwZP4Xjf', 'Hector Landry', 'xivudodog@mailinator.com1', '+1 (184) 602-9856', '+1 (481) 375-3524', '2023-07-04 03:09:56', '2023-07-04 03:09:56', 15),
(3, '22EQwlMs', 'Mechelle Woodward', 'huzy@mailinator.com', '+1 (558) 103-8233', '+1 (558) 103-8233', '2023-07-05 07:11:57', '2023-07-05 07:11:57', NULL),
(4, 'T52v3DA6', 'Hector Landry', 'xivudodog@mailinator.com1', '+1 (184) 602-9856', '+1 (481) 375-3524', '2023-07-11 05:38:06', '2023-07-11 05:38:06', NULL),
(5, '1LO1tbIA', 'Hector Landry', 'xivudodog@mailinator.com1', '+1 (184) 602-9856', '+1 (481) 375-3524', '2023-07-11 05:38:54', '2023-07-11 05:38:54', NULL),
(6, 'Lbix7PRl', 'Hector Landry', 'xivudodog@mailinator.com1', '+1 (184) 602-9856', '+1 (481) 375-3524', '2023-07-11 05:41:50', '2023-07-11 05:41:51', 29);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(83, 'Manage Roles', '2023-07-04 09:34:02', '2023-07-04 09:34:02'),
(84, 'Manage Users', '2023-07-04 09:34:02', '2023-07-04 09:34:02'),
(85, 'Manage Permissions', '2023-07-04 09:34:02', '2023-07-04 09:34:02'),
(86, 'Dashboard', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(87, 'List of Section', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(88, 'Add Section', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(89, 'Edit Section', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(90, 'Delete Section', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(91, 'List of Subject', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(92, 'Add Subject', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(93, 'Edit Subject', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(94, 'Delete Subject', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(95, 'List of Class', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(96, 'Add Class', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(97, 'Edit Class', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(98, 'Detail Class', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(99, 'Delete Class', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(100, 'List of Designation', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(101, 'Add Designation', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(102, 'Edit Designation', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(103, 'Delete Designation', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(104, 'List of Staff', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(105, 'Add Staff', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(106, 'Edit Staff', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(107, 'Detail Staff', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(108, 'Delete Staff', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(109, 'List of Student', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(110, 'Add Student', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(111, 'Edit Student', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(112, 'Detail Student', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(113, 'Delete Student', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(114, 'List of Parent', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(115, 'List of Study Material', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(116, 'Add Study Material', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(117, 'Edit Study Material', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(118, 'Detail Study Material', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(119, 'Delete Study Material', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(120, 'List of Time Range', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(121, 'Add Time Range', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(122, 'Edit Time Range', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(123, 'Delete Time Range', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(124, 'List of Time Range Period', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(125, 'Add Time Range Period', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(126, 'Edit Time Range Period', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(127, 'Detail Time Range Period', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(128, 'Delete Time Range Period', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(129, 'List of Assign Period', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(130, 'Add Assign Period', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(131, 'Edit Assign Period', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(132, 'Detail Assign Period', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(133, 'Delete Assign Period', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(134, 'List of Push Notification', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(135, 'Add Push Notification', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(136, 'Edit Push Notification', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(137, 'Send push Notification', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(138, 'Delete Push Notification', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(139, 'List of Exam', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(140, 'Add Exam', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(141, 'Edit Exam', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(142, 'Detail Exam', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(143, 'Delete Exam', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(144, 'List of Syllabus', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(145, 'Add Syllabus', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(146, 'Edit Syllabus', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(147, 'Detail Syllabus', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(148, 'Delete Syllabus', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(149, 'List of Exam Time Sheet', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(150, 'Add Exam Time Sheet', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(151, 'Edit Exam Time Sheet', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(152, 'Detail Exam Time Sheet', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(153, 'Delete Exam Time Sheet', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(154, 'List of Result', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(155, 'Filter Result', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(156, 'List of Attendance', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(157, 'Filter Attendance', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(158, 'List of Roles', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(159, 'Add Roles', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(160, 'Edit Roles', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(161, 'Delete Roles', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(162, 'List of Admin Users', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(163, 'Add Admin Users', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(164, 'Edit Admin Users', '2023-07-04 09:34:21', '2023-07-04 09:34:21'),
(165, 'Delete Admin Users', '2023-07-04 09:34:21', '2023-07-04 09:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(240, 10, 83, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(241, 10, 84, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(242, 10, 85, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(243, 10, 86, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(244, 10, 87, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(245, 10, 88, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(246, 10, 89, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(247, 10, 90, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(248, 10, 91, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(249, 10, 92, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(250, 10, 93, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(251, 10, 94, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(252, 10, 95, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(253, 10, 96, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(254, 10, 97, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(255, 10, 98, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(256, 10, 99, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(257, 10, 100, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(258, 10, 101, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(259, 10, 102, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(260, 10, 103, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(261, 10, 104, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(262, 10, 105, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(263, 10, 106, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(264, 10, 107, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(265, 10, 108, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(266, 10, 109, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(267, 10, 110, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(268, 10, 111, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(269, 10, 112, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(270, 10, 113, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(271, 10, 114, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(272, 10, 115, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(273, 10, 116, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(274, 10, 117, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(275, 10, 118, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(276, 10, 119, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(277, 10, 120, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(278, 10, 121, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(279, 10, 122, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(280, 10, 123, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(281, 10, 124, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(282, 10, 125, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(283, 10, 126, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(284, 10, 127, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(285, 10, 128, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(286, 10, 129, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(287, 10, 130, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(288, 10, 131, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(289, 10, 132, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(290, 10, 133, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(291, 10, 134, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(292, 10, 135, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(293, 10, 136, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(294, 10, 137, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(295, 10, 138, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(296, 10, 139, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(297, 10, 140, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(298, 10, 141, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(299, 10, 142, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(300, 10, 143, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(301, 10, 144, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(302, 10, 145, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(303, 10, 146, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(304, 10, 147, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(305, 10, 148, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(306, 10, 149, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(307, 10, 150, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(308, 10, 151, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(309, 10, 152, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(310, 10, 153, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(311, 10, 154, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(312, 10, 155, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(313, 10, 156, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(314, 10, 157, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(315, 10, 158, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(316, 10, 159, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(317, 10, 160, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(318, 10, 161, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(319, 10, 162, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(320, 10, 163, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(321, 10, 164, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(322, 10, 165, '2023-07-04 11:36:50', '2023-07-04 11:36:50'),
(323, 11, 86, '2023-07-04 11:43:35', '2023-07-04 11:43:35'),
(324, 11, 87, '2023-07-04 11:43:35', '2023-07-04 11:43:35'),
(325, 11, 91, '2023-07-04 11:43:35', '2023-07-04 11:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `push_notifications`
--

CREATE TABLE `push_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `push_notifications`
--

INSERT INTO `push_notifications` (`id`, `type`, `title`, `message`, `created_at`, `updated_at`) VALUES
(10, '[\"Teacher\",\"Student\"]', 'Hello', 'Nice', '2023-06-27 03:42:18', '2023-06-27 03:47:58'),
(11, '[\"Teacher\",\"Student\"]', 'heelo', 'hello', '2023-06-27 05:40:18', '2023-06-27 05:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `school_id`, `name`, `created_at`, `updated_at`) VALUES
(10, 6, 'Admin', '2023-07-04 09:40:33', '2023-07-04 09:40:33'),
(11, 6, 'School Admin', '2023-07-04 11:43:35', '2023-07-04 11:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `landline_number` varchar(255) NOT NULL,
  `affilliation_number` varchar(255) NOT NULL,
  `board` varchar(255) NOT NULL,
  `type` enum('secondary','higher_secondary') NOT NULL,
  `medium` enum('english','bhutness','both') NOT NULL,
  `address` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('active','pending','blocked') NOT NULL DEFAULT 'active',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `created_by`, `username`, `name`, `email`, `password`, `contact_number`, `landline_number`, `affilliation_number`, `board`, `type`, `medium`, `address`, `image`, `status`, `is_deleted`, `created_at`, `updated_at`, `user_id`) VALUES
(6, 1, '1Wm1zOD4', 'Rogan Richmond', 'mbilal44559@gmail.com', '$2y$10$TqFi1kwc7HjKhHZVKB3Y6eheX25uA5szfEkoe7iGurSL983iXBkI6', '190', '556', '760', 'Laborum Aut itaque', 'higher_secondary', 'english', 'Quaerat sapiente eos', '11688457778.png', 'active', '0', '2023-07-04 03:02:58', '2023-07-04 03:02:58', 12);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `school_id`, `name`, `status`, `created_by`, `is_deleted`, `created_at`, `updated_at`) VALUES
(4, 6, 'A', 'active', 12, '0', '2023-07-04 03:04:07', '2023-07-04 03:04:07'),
(5, 6, 'B', 'active', 12, '0', '2023-07-04 03:04:07', '2023-07-04 03:04:07'),
(6, 6, 'C', 'active', 12, '0', '2023-07-04 03:04:07', '2023-07-04 03:04:07'),
(7, 6, 'D', 'active', 12, '0', '2023-07-04 03:04:07', '2023-07-04 03:04:07'),
(8, 6, 'E', 'active', 12, '0', '2023-07-04 03:04:07', '2023-07-04 03:04:07'),
(9, 6, 'F', 'active', 12, '0', '2023-07-04 03:04:07', '2023-07-04 03:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `assign_class_to_class_teacher` bigint(20) UNSIGNED DEFAULT NULL,
  `assign_section_to_class_teacher` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `address` longtext NOT NULL,
  `salary` varchar(255) NOT NULL,
  `joining_date` varchar(255) NOT NULL,
  `additional_documents` varchar(255) DEFAULT NULL,
  `fb_profile` varchar(255) DEFAULT NULL,
  `insta_profile` varchar(255) DEFAULT NULL,
  `linkedIn_profile` varchar(255) DEFAULT NULL,
  `twitter_profile` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `school_id`, `assign_class_to_class_teacher`, `assign_section_to_class_teacher`, `username`, `first_name`, `last_name`, `email`, `password`, `image`, `phone`, `gender`, `designation_id`, `address`, `salary`, `joining_date`, `additional_documents`, `fb_profile`, `insta_profile`, `linkedIn_profile`, `twitter_profile`, `created_by`, `is_deleted`, `created_at`, `updated_at`, `user_id`) VALUES
(4, 6, 7, 4, 'YuARxyaq', 'Ann', 'Bright', 'tozud@mailinator.com', '$2y$10$vJhN7tjzNlaRXE7LTYTGy.1r54P6Ej1lXzhsKTxFURFpMVcRWhLV6', '121689071616.png', '+1 (436) 713-3818', 'female', 3, 'In quis est hic dolo', 'Ab quae veniam reic', '1971-05-25', NULL, 'Quo occaecat rerum i', 'Saepe aliqua A ad a', 'Nemo sed dignissimos', 'Nisi qui accusamus h', 12, '0', '2023-07-11 05:33:36', '2023-07-14 08:35:00', 25);

-- --------------------------------------------------------

--
-- Table structure for table `staff_assign_classes`
--

CREATE TABLE `staff_assign_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_assign_classes`
--

INSERT INTO `staff_assign_classes` (`id`, `school_id`, `staff_id`, `class_id`, `section_id`, `created_at`, `updated_at`) VALUES
(35, 6, 4, 7, 4, '2023-07-14 08:34:53', '2023-07-14 08:34:53'),
(36, 6, 4, 7, 5, '2023-07-14 08:34:53', '2023-07-14 08:34:53'),
(37, 6, 4, 7, 6, '2023-07-14 08:34:53', '2023-07-14 08:34:53'),
(38, 6, 4, 7, 7, '2023-07-14 08:34:53', '2023-07-14 08:34:53'),
(39, 6, 4, 8, 5, '2023-07-14 08:34:53', '2023-07-14 08:34:53'),
(40, 6, 4, 8, 7, '2023-07-14 08:34:53', '2023-07-14 08:34:53'),
(41, 6, 4, 8, 8, '2023-07-14 08:34:53', '2023-07-14 08:34:53'),
(42, 6, 4, 9, 6, '2023-07-14 08:34:53', '2023-07-14 08:34:53'),
(43, 6, 4, 10, 5, '2023-07-14 08:34:53', '2023-07-14 08:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `staff_assign_subjects`
--

CREATE TABLE `staff_assign_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_assign_subjects`
--

INSERT INTO `staff_assign_subjects` (`id`, `school_id`, `staff_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(16, 6, 4, 8, '2023-07-14 08:34:53', '2023-07-14 08:34:53'),
(17, 6, 4, 5, '2023-07-14 08:34:53', '2023-07-14 08:34:53'),
(18, 6, 4, 9, '2023-07-14 08:34:53', '2023-07-14 08:34:53'),
(19, 6, 4, 7, '2023-07-14 08:34:53', '2023-07-14 08:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `staff_experiences`
--

CREATE TABLE `staff_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `from_date` varchar(255) NOT NULL,
  `to_date` varchar(255) NOT NULL,
  `instituation` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_experiences`
--

INSERT INTO `staff_experiences` (`id`, `school_id`, `staff_id`, `from_date`, `to_date`, `instituation`, `created_at`, `updated_at`) VALUES
(5, 6, 4, '2017-05-07', '2022-04-02', 'Consequuntur omnis v', '2023-07-14 08:34:53', '2023-07-14 08:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `staff_qualifications`
--

CREATE TABLE `staff_qualifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `instituation` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_qualifications`
--

INSERT INTO `staff_qualifications` (`id`, `school_id`, `staff_id`, `year`, `education`, `instituation`, `created_at`, `updated_at`) VALUES
(5, 6, 4, '1982', 'Magnam', 'Impedit', '2023-07-14 08:34:53', '2023-07-14 08:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_type` varchar(255) DEFAULT NULL,
  `sibling_id` bigint(20) NOT NULL DEFAULT 0,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `permanent_address` longtext NOT NULL,
  `dob` varchar(255) NOT NULL,
  `admission_date` varchar(255) NOT NULL,
  `bg_school_name` varchar(255) DEFAULT NULL,
  `bg_class_name` varchar(255) DEFAULT NULL,
  `school_leave_certificate` varchar(255) DEFAULT NULL,
  `mark_sheet` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `school_id`, `parent_id`, `parent_type`, `sibling_id`, `username`, `first_name`, `last_name`, `email`, `image`, `phone`, `gender`, `address`, `permanent_address`, `dob`, `admission_date`, `bg_school_name`, `bg_class_name`, `school_leave_certificate`, `mark_sheet`, `created_by`, `is_deleted`, `created_at`, `updated_at`, `user_id`) VALUES
(2, 6, 2, 'new_parent', 0, 'CRN2kihL', 'Linda', 'Christian', 'guby@mailinator.com', '121688458196.png', '+1 (133) 406-2198', 'female', 'Ex ut ab et ut', 'Aut atque sunt perfe', '2021-01-18', '2012-09-29', 'Neville Sellers', 'Marcia Daugherty', NULL, NULL, 12, '0', '2023-07-04 03:09:56', '2023-07-04 03:09:56', 14),
(3, 6, 2, 'sibling', 2, 'W5q5Q5vF', 'Malik', 'Flynn', 'paza@mailinator.com', '121688555976.png', '+1 (139) 351-4272', 'female', 'Accusantium praesent', 'Qui fugit quia rem', '2021-08-21', '2014-02-07', NULL, NULL, NULL, NULL, 12, '0', '2023-07-05 06:19:36', '2023-07-05 06:19:36', 22),
(4, 6, 3, 'staff', 2, 'hQQxpkTf', 'Demo', 'Gillespie', 'kibehokewa@mailinator.com', '121688559117.png', '+1 (979) 595-3572', 'female', 'Qui nihil alias reru', 'Est rerum est expli', '1979-04-14', '1978-02-02', NULL, NULL, NULL, NULL, 12, '0', '2023-07-05 07:11:57', '2023-07-05 07:11:57', 23),
(5, 6, 4, 'new_parent', 0, '6DokvXPG', 'Maggy', 'Frazier', 'gyjolohim@mailinator.com', '121689071886.png', '+1 (651) 181-8044', 'female', 'Totam ea odit in ape', 'Sapiente vel rerum a', '1992-07-24', '2000-04-13', 'Nash Sargent', 'Inga Mckee', NULL, NULL, 12, '0', '2023-07-11 05:38:06', '2023-07-11 05:38:06', 26),
(6, 6, 5, 'new_parent', 0, 'j22Hk9JG', 'Jessica', 'Scott', 'nysohovad@mailinator.com', '121689071934.png', '+1 (364) 121-2953', 'female', 'Consectetur in accu', 'Vel cupidatat ut tem', '2023-05-07', '1991-03-10', 'Cecilia Wiggins', 'Channing Baker', NULL, NULL, 12, '0', '2023-07-11 05:38:54', '2023-07-11 05:38:54', 27),
(7, 6, 6, 'new_parent', 0, 'er0YxVeb', 'September', 'Herman', 'jucyfo@mailinator.com', '121689072110.png', '+1 (945) 819-1844', 'male', 'Voluptatibus esse c', 'Sint voluptatem Sim', '1982-08-25', '2010-12-27', 'Leo Tanner', 'Nash House', NULL, NULL, 12, '0', '2023-07-11 05:41:50', '2023-07-11 05:41:50', 28);

-- --------------------------------------------------------

--
-- Table structure for table `student_attendances`
--

CREATE TABLE `student_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `attendance` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_attendances`
--

INSERT INTO `student_attendances` (`id`, `school_id`, `class_id`, `section_id`, `staff_id`, `student_id`, `date`, `attendance`, `created_at`, `updated_at`) VALUES
(5, 6, 7, 4, 4, 3, '2023-07-11 00:00:00', 0, '2023-07-14 08:38:16', '2023-07-14 08:38:16'),
(6, 6, 7, 4, 4, 3, '2023-07-12 00:00:00', 1, '2023-07-14 08:38:22', '2023-07-14 08:38:22'),
(7, 6, 7, 4, 4, 3, '2023-07-13 00:00:00', 2, '2023-07-14 08:38:29', '2023-07-14 08:38:29'),
(8, 6, 7, 4, 4, 3, '2023-07-14 00:00:00', 0, '2023-07-14 08:38:54', '2023-07-14 08:38:54');

-- --------------------------------------------------------

--
-- Table structure for table `student_class_assigns`
--

CREATE TABLE `student_class_assigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_class_assigns`
--

INSERT INTO `student_class_assigns` (`id`, `school_id`, `student_id`, `class_id`, `section_id`, `created_at`, `updated_at`) VALUES
(2, 6, 2, 7, 4, '2023-07-04 03:09:56', '2023-07-04 03:09:56'),
(4, 6, 3, 7, 4, '2023-07-05 06:20:33', '2023-07-05 06:20:33'),
(5, 6, 4, 7, 4, '2023-07-05 07:11:57', '2023-07-05 07:11:57'),
(6, 6, 5, 7, 5, '2023-07-11 05:38:06', '2023-07-11 05:38:06'),
(7, 6, 6, 7, 4, '2023-07-11 05:38:54', '2023-07-11 05:38:54'),
(8, 6, 7, 11, 4, '2023-07-11 05:41:50', '2023-07-11 05:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_structures`
--

CREATE TABLE `student_fee_structures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `fee` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_fee_structures`
--

INSERT INTO `student_fee_structures` (`id`, `school_id`, `student_id`, `fee`, `amount`, `created_at`, `updated_at`) VALUES
(2, 6, 2, 'monthly', '2000', '2023-07-04 03:09:56', '2023-07-04 03:09:56'),
(4, 6, 3, 'yearly', '10', '2023-07-05 06:20:33', '2023-07-05 06:20:33'),
(5, 6, 4, 'monthly', '6000', '2023-07-05 07:11:57', '2023-07-05 07:11:57'),
(6, 6, 5, 'quarterly', '2500', '2023-07-11 05:38:06', '2023-07-11 05:38:06'),
(7, 6, 6, 'monthly', '2500', '2023-07-11 05:38:54', '2023-07-11 05:38:54'),
(8, 6, 7, 'monthly', '2500', '2023-07-11 05:41:50', '2023-07-11 05:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `student_leave_applications`
--

CREATE TABLE `student_leave_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_leave_applications`
--

INSERT INTO `student_leave_applications` (`id`, `school_id`, `staff_id`, `student_id`, `subject`, `message`, `file`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 4, 3, 'khasblkdamd', 'jasbdjsbalda', NULL, '2023-07-07', 'pending', NULL, NULL),
(2, 6, 4, 3, 'khasblkdamd', 'jasbdjsbalda', NULL, '2023-07-14', 'accepted', NULL, NULL),
(3, 6, 4, 3, 'Leave Application', 'I need a Leave for two days', NULL, '2023-07-14', 'pending', '2023-07-14 10:40:24', '2023-07-14 10:40:24'),
(4, 6, 4, 3, 'Leave Application', 'I need a Leave for two days', '221689349237.png', '2023-07-14', 'pending', '2023-07-14 10:40:37', '2023-07-14 10:40:37'),
(5, 6, 4, 3, 'Leave Application', 'I need a Leave for two days', NULL, '2023-07-14', 'pending', '2023-07-14 10:55:14', '2023-07-14 10:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `student_results`
--

CREATE TABLE `student_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `obtained_marks` decimal(8,2) NOT NULL,
  `total_marks` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `study_materials`
--

CREATE TABLE `study_materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `media` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` longtext NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_materials`
--

INSERT INTO `study_materials` (`id`, `school_id`, `title`, `type`, `class_id`, `subject_id`, `media`, `date`, `description`, `created_by`, `is_deleted`, `created_at`, `updated_at`) VALUES
(2, 6, 'Eius consectetur ma', 'Irure facere consequ', 7, 8, '121688478821.pdf', '2023-07-04', 'Aut sint ex vitae ve', 12, '0', '2023-07-04 08:53:41', '2023-07-04 08:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `school_id`, `name`, `status`, `created_by`, `is_deleted`, `created_at`, `updated_at`) VALUES
(5, 6, 'English', 'active', 12, '0', '2023-07-04 03:06:24', '2023-07-04 03:06:24'),
(6, 6, 'Urdu', 'active', 12, '0', '2023-07-04 03:06:24', '2023-07-04 03:06:24'),
(7, 6, 'Math', 'active', 12, '0', '2023-07-04 03:06:24', '2023-07-04 03:06:24'),
(8, 6, 'Chemistry', 'active', 12, '0', '2023-07-04 03:06:24', '2023-07-04 03:06:24'),
(9, 6, 'Hindi', 'active', 12, '0', '2023-07-04 03:06:24', '2023-07-04 03:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `syllabi`
--

CREATE TABLE `syllabi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `syllabi`
--

INSERT INTO `syllabi` (`id`, `school_id`, `exam_id`, `title`, `class_id`, `subject_id`, `file`, `description`, `created_by`, `is_deleted`, `created_at`, `updated_at`) VALUES
(7, 6, 6, 'Fugiat irure velit', 12, 5, '121688485362.pdf', '<p>asnkjasbkldasda</p>', 12, '0', '2023-07-04 10:42:43', '2023-07-04 10:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `time_table_assign_periods`
--

CREATE TABLE `time_table_assign_periods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `time_table_setting_id` bigint(20) UNSIGNED NOT NULL,
  `time_table_period_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_table_assign_periods`
--

INSERT INTO `time_table_assign_periods` (`id`, `school_id`, `class_id`, `section_id`, `staff_id`, `subject_id`, `time_table_setting_id`, `time_table_period_id`, `created_by`, `is_deleted`, `created_at`, `updated_at`) VALUES
(29, 6, 7, 4, 4, 5, 15, 54, 12, '0', '2023-07-14 10:24:18', '2023-07-14 10:24:18'),
(30, 6, 7, 4, 4, 6, 15, 55, 12, '0', '2023-07-14 10:24:18', '2023-07-14 10:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `time_table_periods`
--

CREATE TABLE `time_table_periods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `time_table_setting_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_table_periods`
--

INSERT INTO `time_table_periods` (`id`, `school_id`, `time_table_setting_id`, `title`, `start_time`, `end_time`, `created_by`, `is_deleted`, `created_at`, `updated_at`) VALUES
(54, 6, 15, 'English', '08:00 AM', '08:30 AM', 12, '0', '2023-07-13 09:59:41', '2023-07-13 09:59:41'),
(55, 6, 15, 'Urdu', '08:30 AM', '09:00 AM', 12, '0', '2023-07-13 09:59:41', '2023-07-13 09:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `time_table_settings`
--

CREATE TABLE `time_table_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `from_class` bigint(20) UNSIGNED NOT NULL,
  `to_class` bigint(20) UNSIGNED NOT NULL,
  `class_range` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `weekdays` varchar(255) NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_table_settings`
--

INSERT INTO `time_table_settings` (`id`, `school_id`, `from_class`, `to_class`, `class_range`, `start_time`, `end_time`, `weekdays`, `created_by`, `is_deleted`, `created_at`, `updated_at`) VALUES
(15, 6, 7, 9, '[\"7\",\"9\"]', '08:00', '14:00', '[\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\"]', 12, '0', '2023-07-04 03:10:48', '2023-07-04 03:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('admin','school','teacher','student','parent') NOT NULL DEFAULT 'admin',
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `orgnization` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('active','pending','blocked') NOT NULL DEFAULT 'active',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `school_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `type`, `first_name`, `last_name`, `orgnization`, `phone_number`, `address`, `image`, `status`, `is_deleted`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, NULL, 'Admin', NULL, 'admin@gmail.com', NULL, '$2y$10$KC.qzKLHwOTEld3BWmxFDuwBrYx7lFV6epsK3BLir4Fmi2m0bK1ta', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '0', NULL, '2023-06-21 07:45:55', '2023-07-12 09:30:59', NULL),
(12, NULL, 'Rogan Richmond', '1Wm1zOD4', 'mbilal44559@gmail.com', NULL, '$2y$10$FquKUKvAMew3h2ktFYumF.Xk6x7q4vTy1BiLiDp7NbIvxq1BHqZyu', 'school', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '0', NULL, '2023-07-04 03:02:58', '2023-07-04 03:02:58', 10),
(14, 6, 'Linda Christian', 'CRN2kihL', 'guby@mailinator.com', NULL, '$2y$10$FquKUKvAMew3h2ktFYumF.Xk6x7q4vTy1BiLiDp7NbIvxq1BHqZyu', 'student', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '0', NULL, '2023-07-04 03:09:56', '2023-07-04 03:09:56', NULL),
(15, NULL, 'Hector Landry', 'mwZP4Xjf', 'xivudodog@mailinator.com1', NULL, '$2y$10$4ytkNXvnXVapU5FpdqroK.7NSlDfaD304JahQS31kktL9Y0Pm7XFq', 'parent', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '0', NULL, '2023-07-04 03:09:56', '2023-07-04 03:09:56', NULL),
(17, 6, 'Sasha', NULL, 'vufoxibu@mailinator.com', NULL, '$2y$10$dU1CUl98JT/R1AOhfOUWmORlaejYxx6nggfuygH8WkwfWBXOZU7kK', 'admin', NULL, NULL, NULL, '+1 (874) 463-8852', NULL, NULL, 'active', '0', NULL, '2023-07-04 11:17:22', '2023-07-04 11:17:22', 10),
(21, 6, 'Nicholas', '64YxhcL7', 'bilal.sheikh@appcrates.com', NULL, '$2y$10$6JatS0KgGR9R3DHuRKj8o.L384vJt3DeQiFLqQuB.oS3Xp0EcEpdS', 'school', NULL, NULL, NULL, '+1 (252) 582-2533', NULL, NULL, 'active', '0', NULL, '2023-07-04 11:29:46', '2023-07-04 11:29:46', 10),
(22, 6, 'Malik Flynn', 'W5q5Q5vF', 'paza@mailinator.com', NULL, '$2y$10$FquKUKvAMew3h2ktFYumF.Xk6x7q4vTy1BiLiDp7NbIvxq1BHqZyu', 'student', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '0', NULL, '2023-07-05 06:19:36', '2023-07-05 06:19:36', 11),
(23, 6, 'Demo Gillespie', 'hQQxpkTf', 'kibehokewa@mailinator.com', NULL, '$2y$10$j0R8Aad0HNkXCZzblQ2GU.5HmlvA8Xe/Gfg58.cVQHfxFvf.0qhYu', 'student', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '0', NULL, '2023-07-05 07:11:57', '2023-07-05 07:11:57', 11),
(25, 6, 'Ann Bright', 'YuARxyaq', 'tozud@mailinator.com', NULL, '$2y$10$KC.qzKLHwOTEld3BWmxFDuwBrYx7lFV6epsK3BLir4Fmi2m0bK1ta', 'teacher', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '0', NULL, '2023-07-11 05:33:35', '2023-07-11 05:33:35', 11),
(26, 6, 'Maggy Frazier', '6DokvXPG', 'gyjolohim@mailinator.com', NULL, '$2y$10$qpqLQUyNqTARTrZzeM7hGOZlgVOsTUCO9K4zTCF4crqQKgNKu3YkO', 'student', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '0', NULL, '2023-07-11 05:38:06', '2023-07-11 05:38:06', 11),
(27, 6, 'Jessica Scott', 'j22Hk9JG', 'nysohovad@mailinator.com', NULL, '$2y$10$OjAPwMfb0RjSvcjGxCuWaeG8NrfLw6MdeygnR4eISt/X0EQb90Rgq', 'student', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '0', NULL, '2023-07-11 05:38:54', '2023-07-11 05:38:54', 11),
(28, 6, 'September Herman', 'er0YxVeb', 'jucyfo@mailinator.com', NULL, '$2y$10$x3VWr8VC7KKSitiqrDMwhOAZnEaw0EEjBa/qx/SOSsqnsoEGoVO6u', 'student', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '0', NULL, '2023-07-11 05:41:50', '2023-07-11 05:41:50', 11),
(29, NULL, 'Hector Landry', 'Lbix7PRl', 'xivudodog@mailinator.com1', NULL, '$2y$10$pEX8WbQBOepzS5L77.FFxeoZVDiwHf1f92IJitHLvwoJYta73B8vq', 'parent', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '0', NULL, '2023-07-11 05:41:51', '2023-07-11 05:41:51', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classes_school_id_foreign` (`school_id`),
  ADD KEY `classes_created_by_foreign` (`created_by`);

--
-- Indexes for table `class_assign_sections`
--
ALTER TABLE `class_assign_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_assign_sections_school_id_foreign` (`school_id`),
  ADD KEY `class_assign_sections_class_id_foreign` (`class_id`),
  ADD KEY `class_assign_sections_section_id_foreign` (`section_id`);

--
-- Indexes for table `class_assign_subjects`
--
ALTER TABLE `class_assign_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_assign_subjects_school_id_foreign` (`school_id`),
  ADD KEY `class_assign_subjects_class_id_foreign` (`class_id`),
  ADD KEY `class_assign_subjects_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designations_school_id_foreign` (`school_id`),
  ADD KEY `designations_created_by_foreign` (`created_by`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_school_id_foreign` (`school_id`),
  ADD KEY `exams_from_class_foreign` (`from_class`),
  ADD KEY `exams_to_class_foreign` (`to_class`),
  ADD KEY `exams_created_by_foreign` (`created_by`);

--
-- Indexes for table `exam_time_sheets`
--
ALTER TABLE `exam_time_sheets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_time_sheets_school_id_foreign` (`school_id`),
  ADD KEY `exam_time_sheets_exam_id_foreign` (`exam_id`),
  ADD KEY `exam_time_sheets_class_id_foreign` (`class_id`),
  ADD KEY `exam_time_sheets_subject_id_foreign` (`subject_id`),
  ADD KEY `exam_time_sheets_created_by_foreign` (`created_by`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_works`
--
ALTER TABLE `home_works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_works_school_id_foreign` (`school_id`),
  ADD KEY `home_works_created_by_staff_foreign` (`created_by_staff`),
  ADD KEY `home_works_class_id_foreign` (`class_id`),
  ADD KEY `home_works_section_id_foreign` (`section_id`);

--
-- Indexes for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leave_applications_school_id_foreign` (`school_id`),
  ADD KEY `leave_applications_staff_id_foreign` (`staff_id`),
  ADD KEY `leave_applications_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parents_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `push_notifications`
--
ALTER TABLE `push_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schools_created_by_foreign` (`created_by`),
  ADD KEY `schools_user_id_foreign` (`user_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_school_id_foreign` (`school_id`),
  ADD KEY `sections_created_by_foreign` (`created_by`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_school_id_foreign` (`school_id`),
  ADD KEY `staff_designation_id_foreign` (`designation_id`),
  ADD KEY `staff_created_by_foreign` (`created_by`),
  ADD KEY `staff_user_id_foreign` (`user_id`),
  ADD KEY `staff_assign_class_to_class_teacher_foreign` (`assign_class_to_class_teacher`),
  ADD KEY `staff_assign_section_to_class_teacher_foreign` (`assign_section_to_class_teacher`);

--
-- Indexes for table `staff_assign_classes`
--
ALTER TABLE `staff_assign_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_assign_classes_school_id_foreign` (`school_id`),
  ADD KEY `staff_assign_classes_staff_id_foreign` (`staff_id`),
  ADD KEY `staff_assign_classes_class_id_foreign` (`class_id`),
  ADD KEY `staff_assign_classes_section_id_foreign` (`section_id`);

--
-- Indexes for table `staff_assign_subjects`
--
ALTER TABLE `staff_assign_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_assign_subjects_school_id_foreign` (`school_id`),
  ADD KEY `staff_assign_subjects_staff_id_foreign` (`staff_id`),
  ADD KEY `staff_assign_subjects_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `staff_experiences`
--
ALTER TABLE `staff_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_experiences_school_id_foreign` (`school_id`),
  ADD KEY `staff_experiences_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `staff_qualifications`
--
ALTER TABLE `staff_qualifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_qualifications_school_id_foreign` (`school_id`),
  ADD KEY `staff_qualifications_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_school_id_foreign` (`school_id`),
  ADD KEY `students_parent_id_foreign` (`parent_id`),
  ADD KEY `students_created_by_foreign` (`created_by`),
  ADD KEY `students_user_id_foreign` (`user_id`);

--
-- Indexes for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_attendances_school_id_foreign` (`school_id`),
  ADD KEY `student_attendances_class_id_foreign` (`class_id`),
  ADD KEY `student_attendances_section_id_foreign` (`section_id`),
  ADD KEY `student_attendances_staff_id_foreign` (`staff_id`),
  ADD KEY `student_attendances_student_id_foreign` (`student_id`);

--
-- Indexes for table `student_class_assigns`
--
ALTER TABLE `student_class_assigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_class_assigns_school_id_foreign` (`school_id`),
  ADD KEY `student_class_assigns_student_id_foreign` (`student_id`),
  ADD KEY `student_class_assigns_class_id_foreign` (`class_id`),
  ADD KEY `student_class_assigns_section_id_foreign` (`section_id`);

--
-- Indexes for table `student_fee_structures`
--
ALTER TABLE `student_fee_structures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_fee_structures_school_id_foreign` (`school_id`),
  ADD KEY `student_fee_structures_student_id_foreign` (`student_id`);

--
-- Indexes for table `student_leave_applications`
--
ALTER TABLE `student_leave_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_leave_applications_school_id_foreign` (`school_id`),
  ADD KEY `student_leave_applications_staff_id_foreign` (`staff_id`),
  ADD KEY `student_leave_applications_student_id_foreign` (`student_id`);

--
-- Indexes for table `student_results`
--
ALTER TABLE `student_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_results_school_id_foreign` (`school_id`),
  ADD KEY `student_results_exam_id_foreign` (`exam_id`),
  ADD KEY `student_results_class_id_foreign` (`class_id`),
  ADD KEY `student_results_section_id_foreign` (`section_id`),
  ADD KEY `student_results_staff_id_foreign` (`staff_id`),
  ADD KEY `student_results_subject_id_foreign` (`subject_id`),
  ADD KEY `student_results_student_id_foreign` (`student_id`);

--
-- Indexes for table `study_materials`
--
ALTER TABLE `study_materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `study_materials_school_id_foreign` (`school_id`),
  ADD KEY `study_materials_class_id_foreign` (`class_id`),
  ADD KEY `study_materials_subject_id_foreign` (`subject_id`),
  ADD KEY `study_materials_created_by_foreign` (`created_by`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_school_id_foreign` (`school_id`),
  ADD KEY `subjects_created_by_foreign` (`created_by`);

--
-- Indexes for table `syllabi`
--
ALTER TABLE `syllabi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `syllabi_school_id_foreign` (`school_id`),
  ADD KEY `syllabi_exam_id_foreign` (`exam_id`),
  ADD KEY `syllabi_class_id_foreign` (`class_id`),
  ADD KEY `syllabi_subject_id_foreign` (`subject_id`),
  ADD KEY `syllabi_created_by_foreign` (`created_by`);

--
-- Indexes for table `time_table_assign_periods`
--
ALTER TABLE `time_table_assign_periods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `time_table_assign_periods_school_id_foreign` (`school_id`),
  ADD KEY `time_table_assign_periods_class_id_foreign` (`class_id`),
  ADD KEY `time_table_assign_periods_section_id_foreign` (`section_id`),
  ADD KEY `time_table_assign_periods_staff_id_foreign` (`staff_id`),
  ADD KEY `time_table_assign_periods_subject_id_foreign` (`subject_id`),
  ADD KEY `time_table_assign_periods_time_table_setting_id_foreign` (`time_table_setting_id`),
  ADD KEY `time_table_assign_periods_time_table_period_id_foreign` (`time_table_period_id`),
  ADD KEY `time_table_assign_periods_created_by_foreign` (`created_by`);

--
-- Indexes for table `time_table_periods`
--
ALTER TABLE `time_table_periods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `time_table_periods_school_id_foreign` (`school_id`),
  ADD KEY `time_table_periods_time_table_setting_id_foreign` (`time_table_setting_id`),
  ADD KEY `time_table_periods_created_by_foreign` (`created_by`);

--
-- Indexes for table `time_table_settings`
--
ALTER TABLE `time_table_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `time_table_settings_school_id_foreign` (`school_id`),
  ADD KEY `time_table_settings_from_class_foreign` (`from_class`),
  ADD KEY `time_table_settings_to_class_foreign` (`to_class`),
  ADD KEY `time_table_settings_created_by_foreign` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_school_id_foreign` (`school_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `class_assign_sections`
--
ALTER TABLE `class_assign_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `class_assign_subjects`
--
ALTER TABLE `class_assign_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exam_time_sheets`
--
ALTER TABLE `exam_time_sheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_works`
--
ALTER TABLE `home_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `leave_applications`
--
ALTER TABLE `leave_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `push_notifications`
--
ALTER TABLE `push_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_assign_classes`
--
ALTER TABLE `staff_assign_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `staff_assign_subjects`
--
ALTER TABLE `staff_assign_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `staff_experiences`
--
ALTER TABLE `staff_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff_qualifications`
--
ALTER TABLE `staff_qualifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_attendances`
--
ALTER TABLE `student_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_class_assigns`
--
ALTER TABLE `student_class_assigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_fee_structures`
--
ALTER TABLE `student_fee_structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_leave_applications`
--
ALTER TABLE `student_leave_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_results`
--
ALTER TABLE `student_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `study_materials`
--
ALTER TABLE `study_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `syllabi`
--
ALTER TABLE `syllabi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `time_table_assign_periods`
--
ALTER TABLE `time_table_assign_periods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `time_table_periods`
--
ALTER TABLE `time_table_periods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `time_table_settings`
--
ALTER TABLE `time_table_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `classes_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `class_assign_sections`
--
ALTER TABLE `class_assign_sections`
  ADD CONSTRAINT `class_assign_sections_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_assign_sections_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_assign_sections_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `class_assign_subjects`
--
ALTER TABLE `class_assign_subjects`
  ADD CONSTRAINT `class_assign_subjects_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_assign_subjects_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_assign_subjects_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `designations`
--
ALTER TABLE `designations`
  ADD CONSTRAINT `designations_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `designations_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exams_from_class_foreign` FOREIGN KEY (`from_class`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exams_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exams_to_class_foreign` FOREIGN KEY (`to_class`) REFERENCES `classes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_time_sheets`
--
ALTER TABLE `exam_time_sheets`
  ADD CONSTRAINT `exam_time_sheets_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_time_sheets_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_time_sheets_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_time_sheets_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_time_sheets_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `home_works`
--
ALTER TABLE `home_works`
  ADD CONSTRAINT `home_works_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `home_works_created_by_staff_foreign` FOREIGN KEY (`created_by_staff`) REFERENCES `staff` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `home_works_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `home_works_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD CONSTRAINT `leave_applications_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `leave_applications_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `leave_applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`);

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `schools_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schools_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sections_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_assign_class_to_class_teacher_foreign` FOREIGN KEY (`assign_class_to_class_teacher`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `staff_assign_section_to_class_teacher_foreign` FOREIGN KEY (`assign_section_to_class_teacher`) REFERENCES `sections` (`id`),
  ADD CONSTRAINT `staff_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff_assign_classes`
--
ALTER TABLE `staff_assign_classes`
  ADD CONSTRAINT `staff_assign_classes_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_assign_classes_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_assign_classes_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_assign_classes_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff_assign_subjects`
--
ALTER TABLE `staff_assign_subjects`
  ADD CONSTRAINT `staff_assign_subjects_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_assign_subjects_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_assign_subjects_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff_experiences`
--
ALTER TABLE `staff_experiences`
  ADD CONSTRAINT `staff_experiences_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_experiences_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff_qualifications`
--
ALTER TABLE `staff_qualifications`
  ADD CONSTRAINT `staff_qualifications_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_qualifications_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD CONSTRAINT `student_attendances_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_class_assigns`
--
ALTER TABLE `student_class_assigns`
  ADD CONSTRAINT `student_class_assigns_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_class_assigns_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_class_assigns_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_class_assigns_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_fee_structures`
--
ALTER TABLE `student_fee_structures`
  ADD CONSTRAINT `student_fee_structures_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_fee_structures_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_leave_applications`
--
ALTER TABLE `student_leave_applications`
  ADD CONSTRAINT `student_leave_applications_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_leave_applications_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_leave_applications_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_results`
--
ALTER TABLE `student_results`
  ADD CONSTRAINT `student_results_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_results_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_results_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_results_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_results_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_results_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_results_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `study_materials`
--
ALTER TABLE `study_materials`
  ADD CONSTRAINT `study_materials_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `study_materials_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `study_materials_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `study_materials_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subjects_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `syllabi`
--
ALTER TABLE `syllabi`
  ADD CONSTRAINT `syllabi_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `syllabi_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `syllabi_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `syllabi_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `syllabi_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `time_table_assign_periods`
--
ALTER TABLE `time_table_assign_periods`
  ADD CONSTRAINT `time_table_assign_periods_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_assign_periods_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_assign_periods_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_assign_periods_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_assign_periods_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_assign_periods_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_assign_periods_time_table_period_id_foreign` FOREIGN KEY (`time_table_period_id`) REFERENCES `time_table_periods` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_assign_periods_time_table_setting_id_foreign` FOREIGN KEY (`time_table_setting_id`) REFERENCES `time_table_settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `time_table_periods`
--
ALTER TABLE `time_table_periods`
  ADD CONSTRAINT `time_table_periods_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_periods_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_periods_time_table_setting_id_foreign` FOREIGN KEY (`time_table_setting_id`) REFERENCES `time_table_settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `time_table_settings`
--
ALTER TABLE `time_table_settings`
  ADD CONSTRAINT `time_table_settings_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_settings_from_class_foreign` FOREIGN KEY (`from_class`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_settings_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_settings_to_class_foreign` FOREIGN KEY (`to_class`) REFERENCES `classes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
