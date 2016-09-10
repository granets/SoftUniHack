-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2016 at 03:42 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `monsters`
--

-- --------------------------------------------------------

--
-- Table structure for table `cl_class_letters`
--

CREATE TABLE IF NOT EXISTS `cl_class_letters` (
  `id` int(10) unsigned NOT NULL,
  `letter` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_class_numbers`
--

CREATE TABLE IF NOT EXISTS `cl_class_numbers` (
  `id` int(10) unsigned NOT NULL,
  `class_number` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_class_subjects`
--

CREATE TABLE IF NOT EXISTS `cl_class_subjects` (
  `id` int(10) unsigned NOT NULL,
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_monster_pictures`
--

CREATE TABLE IF NOT EXISTS `cl_monster_pictures` (
  `id` int(10) unsigned NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_roles`
--

CREATE TABLE IF NOT EXISTS `cl_roles` (
  `id` int(10) unsigned NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_schools`
--

CREATE TABLE IF NOT EXISTS `cl_schools` (
  `id` int(10) unsigned NOT NULL,
  `school_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `school_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_school_years`
--

CREATE TABLE IF NOT EXISTS `cl_school_years` (
  `id` int(10) unsigned NOT NULL,
  `start_year` int(10) unsigned NOT NULL,
  `end_year` int(10) unsigned NOT NULL,
  `school_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_subjects`
--

CREATE TABLE IF NOT EXISTS `cl_subjects` (
  `id` int(10) unsigned NOT NULL,
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cm_awardings`
--

CREATE TABLE IF NOT EXISTS `cm_awardings` (
  `id` int(10) unsigned NOT NULL,
  `monster_id` int(10) unsigned NOT NULL,
  `mission_id` int(10) unsigned NOT NULL,
  `day_achievement` int(10) unsigned NOT NULL,
  `achievement_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(10) unsigned NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cm_awardings`
--

INSERT INTO `cm_awardings` (`id`, `monster_id`, `mission_id`, `day_achievement`, `achievement_comment`, `created_at`, `created_by`, `updated_at`, `updated_by`, `date_deleted`, `deleted_by`) VALUES
(1, 1, 1, 20, 'проба                                        ', '2016-06-05 10:32:48', 0, '2016-06-05 10:32:48', NULL, NULL, NULL),
(2, 1, 1, 20, 'проба                                        ', '2016-06-05 10:33:06', 0, '2016-06-05 10:33:06', NULL, NULL, NULL),
(3, 1, 7, 250, 'Където                                        ', '2016-06-05 10:33:59', 0, '2016-06-05 10:33:59', NULL, NULL, NULL),
(4, 1, 1, 11, '           дай му                             ', '2016-06-05 10:34:49', 0, '2016-06-05 10:34:49', NULL, NULL, NULL),
(5, 1, 7, 450, 'ново ниво                                        ', '2016-06-05 10:35:03', 0, '2016-06-05 10:35:03', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cm_levels`
--

CREATE TABLE IF NOT EXISTS `cm_levels` (
  `id` int(10) unsigned NOT NULL,
  `number` int(10) unsigned NOT NULL,
  `levels` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(10) unsigned NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cm_missions`
--

CREATE TABLE IF NOT EXISTS `cm_missions` (
  `id` int(10) unsigned NOT NULL,
  `mission` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `points` int(10) unsigned NOT NULL,
  `min_level` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(10) unsigned NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cm_missions`
--

INSERT INTO `cm_missions` (`id`, `mission`, `points`, `min_level`, `created_at`, `created_by`, `updated_at`, `updated_by`, `date_deleted`, `deleted_by`) VALUES
(1, 'Всички ученици са навреме за час и са по местата си преди да е бил звънецът', 100, 0, '2016-06-04 12:01:32', 1, NULL, NULL, NULL, NULL),
(2, 'Всички ученици имат необходимите материали за работа в клас', 100, 0, '2016-06-04 12:02:09', 1, NULL, NULL, NULL, NULL),
(3, 'Всички ученици имат подготвена домашна работа', 100, 0, '2016-06-04 12:02:09', 1, NULL, NULL, NULL, NULL),
(4, 'Учениците подготвят писмен текст от минимум 10 изречения на тема: “Моята бъдеща професия”', 200, 0, '2016-06-04 12:02:40', 1, NULL, NULL, NULL, NULL),
(5, 'Учениците представят коригирано копие на своя текст, след обсъждане на грешките', 200, 0, '2016-06-04 12:02:40', 1, NULL, NULL, NULL, NULL),
(6, 'Всички ученици изнасят устна презентация от минимум 5 минути на тема: “Моята бъдеща професия”', 300, 0, '2016-06-04 12:03:13', 1, NULL, NULL, NULL, NULL),
(7, 'Вскичи ученици дават обратна връзка на своите съученици презентатори', 300, 0, '2016-06-04 12:03:13', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cm_monsters`
--

CREATE TABLE IF NOT EXISTS `cm_monsters` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(10) unsigned NOT NULL,
  `points` int(10) unsigned NOT NULL,
  `pictureId` int(10) unsigned NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(10) unsigned NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cm_monsters`
--

INSERT INTO `cm_monsters` (`id`, `name`, `level`, `points`, `pictureId`, `picture`, `code`, `class`, `subject`, `created_at`, `created_by`, `updated_at`, `updated_by`, `date_deleted`, `deleted_by`) VALUES
(1, 'Гошо', 3, 751, 1, 'monster2.jpg', 'GOGO123', '', '', '2016-06-05 13:35:03', 1, '2016-06-05 10:35:03', NULL, NULL, NULL),
(2, 'Ново', 1, 0, 1, 'monster0.jpg', 'асдфа', '3г', 'Този', '2016-06-05 10:29:50', 0, '2016-06-05 10:29:50', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `con_accounts_monsters`
--

CREATE TABLE IF NOT EXISTS `con_accounts_monsters` (
  `id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  `monster_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `con_level_missions`
--

CREATE TABLE IF NOT EXISTS `con_level_missions` (
  `id` int(10) unsigned NOT NULL,
  `mission_id` int(10) unsigned NOT NULL,
  `level_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(10) unsigned DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `con_level_missions`
--

INSERT INTO `con_level_missions` (`id`, `mission_id`, `level_id`, `created_at`, `updated_at`, `deleted_by`, `date_deleted`) VALUES
(1, 1, 1, '2016-06-05 13:21:10', NULL, NULL, NULL),
(2, 2, 1, '2016-06-05 13:21:10', NULL, NULL, NULL),
(3, 3, 1, '2016-06-05 13:21:10', NULL, NULL, NULL),
(4, 1, 2, '2016-06-05 13:21:10', NULL, NULL, NULL),
(5, 2, 2, '2016-06-05 13:21:10', NULL, NULL, NULL),
(6, 3, 2, '2016-06-05 13:21:10', NULL, NULL, NULL),
(7, 4, 2, '2016-06-05 13:21:10', NULL, NULL, NULL),
(8, 5, 2, '2016-06-05 13:21:10', NULL, NULL, NULL),
(9, 1, 3, '2016-06-05 13:21:10', NULL, NULL, NULL),
(10, 2, 3, '2016-06-05 13:21:10', NULL, NULL, NULL),
(11, 3, 3, '2016-06-05 13:21:10', NULL, NULL, NULL),
(12, 4, 3, '2016-06-05 13:21:10', NULL, NULL, NULL),
(13, 5, 3, '2016-06-05 13:21:10', NULL, NULL, NULL),
(14, 6, 3, '2016-06-05 13:21:10', NULL, NULL, NULL),
(15, 7, 3, '2016-06-05 13:21:10', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_04_075528_create_cl_class_letters', 1),
('2016_06_04_082029_create_cl_roles', 1),
('2016_06_04_090113_create_cl_class_numbers', 1),
('2016_06_04_090506_create_cl_class_subjects', 1),
('2016_06_04_090529_create_cl_monster_pictures', 1),
('2016_06_04_090607_create_cl_schools', 1),
('2016_06_04_090627_create_cl_subjects', 1),
('2016_06_04_090948_create_cl_school_years', 1),
('2016_06_04_093719_create_cm_missions', 1),
('2016_06_04_094158_create_cm_levels', 1),
('2016_06_04_094451_create_cm_monsters', 1),
('2016_06_04_094723_create_cm_awardings', 1),
('2016_06_04_100057_create_con_accounts_monsters', 1),
('2016_06_04_133231_create_con_level_missions', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `date_deleted`) VALUES
(1, 'user12', 'us@er.com', '$2y$10$cyvipH7bC8.ZxfCIP7WOD.LI7hrUBcL3Q6QmNNwUCxP92PzfwoWT6', NULL, '2016-06-04 09:00:57', '2016-06-04 09:00:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cl_class_letters`
--
ALTER TABLE `cl_class_letters`
  ADD PRIMARY KEY (`id`), ADD KEY `cl_class_letters_deleted_by_index` (`deleted_by`);

--
-- Indexes for table `cl_class_numbers`
--
ALTER TABLE `cl_class_numbers`
  ADD PRIMARY KEY (`id`), ADD KEY `cl_class_numbers_deleted_by_index` (`deleted_by`), ADD KEY `cl_class_numbers_class_number_index` (`class_number`);

--
-- Indexes for table `cl_class_subjects`
--
ALTER TABLE `cl_class_subjects`
  ADD PRIMARY KEY (`id`), ADD KEY `cl_class_subjects_deleted_by_index` (`deleted_by`);

--
-- Indexes for table `cl_monster_pictures`
--
ALTER TABLE `cl_monster_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_roles`
--
ALTER TABLE `cl_roles`
  ADD PRIMARY KEY (`id`), ADD KEY `cl_roles_deleted_by_index` (`deleted_by`);

--
-- Indexes for table `cl_schools`
--
ALTER TABLE `cl_schools`
  ADD PRIMARY KEY (`id`), ADD KEY `cl_schools_deleted_by_index` (`deleted_by`);

--
-- Indexes for table `cl_school_years`
--
ALTER TABLE `cl_school_years`
  ADD PRIMARY KEY (`id`), ADD KEY `cl_school_years_deleted_by_index` (`deleted_by`);

--
-- Indexes for table `cl_subjects`
--
ALTER TABLE `cl_subjects`
  ADD PRIMARY KEY (`id`), ADD KEY `cl_subjects_deleted_by_index` (`deleted_by`);

--
-- Indexes for table `cm_awardings`
--
ALTER TABLE `cm_awardings`
  ADD PRIMARY KEY (`id`), ADD KEY `cm_awardings_created_by_index` (`created_by`), ADD KEY `cm_awardings_updated_by_index` (`updated_by`), ADD KEY `cm_awardings_deleted_by_index` (`deleted_by`);

--
-- Indexes for table `cm_levels`
--
ALTER TABLE `cm_levels`
  ADD PRIMARY KEY (`id`), ADD KEY `cm_levels_created_by_index` (`created_by`), ADD KEY `cm_levels_updated_by_index` (`updated_by`), ADD KEY `cm_levels_deleted_by_index` (`deleted_by`);

--
-- Indexes for table `cm_missions`
--
ALTER TABLE `cm_missions`
  ADD PRIMARY KEY (`id`), ADD KEY `cm_missions_created_at_index` (`created_at`), ADD KEY `cm_missions_updated_at_index` (`updated_at`), ADD KEY `cm_missions_deleted_by_index` (`deleted_by`);

--
-- Indexes for table `cm_monsters`
--
ALTER TABLE `cm_monsters`
  ADD PRIMARY KEY (`id`), ADD KEY `cm_monsters_created_by_index` (`created_by`), ADD KEY `cm_monsters_updated_by_index` (`updated_by`), ADD KEY `cm_monsters_deleted_by_index` (`deleted_by`);

--
-- Indexes for table `con_accounts_monsters`
--
ALTER TABLE `con_accounts_monsters`
  ADD PRIMARY KEY (`id`), ADD KEY `con_accounts_monsters_deleted_by_index` (`deleted_by`), ADD KEY `con_accounts_monsters_account_id_index` (`account_id`), ADD KEY `con_accounts_monsters_monster_id_index` (`monster_id`);

--
-- Indexes for table `con_level_missions`
--
ALTER TABLE `con_level_missions`
  ADD PRIMARY KEY (`id`), ADD KEY `con_level_missions_deleted_by_index` (`deleted_by`), ADD KEY `con_level_missions_mission_id_index` (`mission_id`), ADD KEY `con_level_missions_level_id_index` (`level_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cl_class_letters`
--
ALTER TABLE `cl_class_letters`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cl_class_numbers`
--
ALTER TABLE `cl_class_numbers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cl_class_subjects`
--
ALTER TABLE `cl_class_subjects`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cl_monster_pictures`
--
ALTER TABLE `cl_monster_pictures`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cl_roles`
--
ALTER TABLE `cl_roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cl_schools`
--
ALTER TABLE `cl_schools`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cl_school_years`
--
ALTER TABLE `cl_school_years`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cl_subjects`
--
ALTER TABLE `cl_subjects`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cm_awardings`
--
ALTER TABLE `cm_awardings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cm_levels`
--
ALTER TABLE `cm_levels`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cm_missions`
--
ALTER TABLE `cm_missions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cm_monsters`
--
ALTER TABLE `cm_monsters`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `con_accounts_monsters`
--
ALTER TABLE `con_accounts_monsters`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `con_level_missions`
--
ALTER TABLE `con_level_missions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
