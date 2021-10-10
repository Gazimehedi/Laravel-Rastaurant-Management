-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 10:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rastaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `name`, `speciality`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Randy Walker', 'Pastry Chef', '1633494317.jpg', '2021-10-05 22:25:17', '2021-10-05 22:25:17'),
(2, 'David Martin', 'Cookie Chef', '1633494356.jpg', '2021-10-05 22:25:56', '2021-10-05 22:25:56'),
(3, 'Peter Perkson', 'Pancake Chef', '1633494400.jpg', '2021-10-05 22:26:40', '2021-10-05 22:26:40');

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
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `price`, `image`, `description`, `food_type`, `created_at`, `updated_at`) VALUES
(1, 'Klassic Cake', '18', '1633370025.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', 4, '2021-10-04 11:53:45', '2021-10-09 22:37:31'),
(2, 'Chocolate Cake', '14', '1633375938.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', 4, '2021-10-04 12:04:33', '2021-10-09 22:44:54'),
(3, 'Klassy Cup Cake', '8.50', '1633371158.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', 4, '2021-10-04 12:12:38', '2021-10-09 22:45:51'),
(4, 'Klassy Pancake', '22', '1633376240.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', 4, '2021-10-04 13:37:20', '2021-10-09 22:45:15'),
(5, 'Blueberry CheeseCake', '10', '1633376370.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', 4, '2021-10-04 13:39:30', '2021-10-09 22:45:33'),
(6, 'Fresh Chicken Salad', '10.50', '1633841216.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 1, '2021-10-09 22:46:56', '2021-10-09 22:47:35'),
(7, 'Eggs Omelette', '14', '1633841341.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 2, '2021-10-09 22:49:01', '2021-10-09 22:49:01'),
(8, 'Dollma Pire', '18', '1633841479.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 2, '2021-10-09 22:51:19', '2021-10-09 22:51:19'),
(9, 'Omelette & Cheese', '22', '1633896275.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 2, '2021-10-09 22:52:31', '2021-10-10 14:04:35'),
(10, 'Orange Juice', '20', '1633896495.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 2, '2021-10-10 14:08:15', '2021-10-10 14:08:15'),
(11, 'Fruit Salad', '30', '1633896566.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 2, '2021-10-10 14:09:26', '2021-10-10 14:09:26'),
(12, 'Fresh Chicken Salad', '10', '1633896632.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 2, '2021-10-10 14:10:32', '2021-10-10 14:10:32'),
(13, 'Orange Juice', '20', '1633896719.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do', 1, '2021-10-10 14:11:59', '2021-10-10 14:11:59'),
(14, 'Fruit Salad', '30', '1633896811.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 1, '2021-10-10 14:13:31', '2021-10-10 14:13:31'),
(15, 'Eggs Omelette', '14', '1633896864.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 1, '2021-10-10 14:14:24', '2021-10-10 14:14:24'),
(16, 'Dollma Pire', '18', '1633896914.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 1, '2021-10-10 14:15:14', '2021-10-10 14:15:14'),
(17, 'Omelette & Cheese', '22', '1633897004.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 1, '2021-10-10 14:16:44', '2021-10-10 14:16:44'),
(18, 'Eggs Omelette', '14', '1633897084.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 3, '2021-10-10 14:18:04', '2021-10-10 14:18:04'),
(19, 'Orange Juice', '10', '1633897141.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 3, '2021-10-10 14:19:01', '2021-10-10 14:19:01'),
(20, 'Fruit Salad', '18', '1633897187.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 3, '2021-10-10 14:19:47', '2021-10-10 14:19:47'),
(21, 'Fresh Chicken Salad', '10.50', '1633897250.png', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', 3, '2021-10-10 14:20:50', '2021-10-10 14:20:50');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_10_03_154611_create_sessions_table', 1),
(7, '2021_10_04_070423_create_food_table', 2),
(9, '2021_10_05_092047_create_reservations_table', 3),
(11, '2021_10_06_031258_create_chefs_table', 4),
(12, '2021_10_07_034828_create_carts_table', 5),
(14, '2021_10_08_075442_create_orders_table', 6),
(15, '2021_10_09_092126_create_settings_table', 7),
(16, '2021_10_09_205739_create_meals_table', 8),
(17, '2021_10_10_190328_create_sliders_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foodname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userid`, `name`, `email`, `phone`, `address`, `foodname`, `price`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Gazi Mehedi Hasan', 'gazimehedihasan512@gmail.com', '+8801730891770', '3500-kayempur,kasba,brahmanbaria.', 'Klassy Pancake', '22', '2', 'pending', '2021-10-08 07:47:20', '2021-10-08 07:47:20');

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guests` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `guests`, `date`, `time`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Gazi Mehedi Hasan', 'gazimehedihasan512@gmail.com', '+8801730891770', '2', '04.10.2021', '22:00', 'test', '2021-10-05 04:09:13', '2021-10-05 04:09:13'),
(2, 'Mehedi Hasan', 'gazimehedihasan512@gmail.com', '+8801730891770', '3', '04.10.2021', '22:00', 'test', '2021-10-05 04:11:39', '2021-10-05 04:11:39'),
(4, 'Gazi Mehedi Hasan', 'gazimehedihasan512@gmail.com', '+8801730891770', '1', '04.10.2021', '05:45', 'test', '2021-10-07 03:44:02', '2021-10-07 03:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('N4TdwxaaT1NRk3H6cQHCWTb9TLeMlyW7zL17F2mn', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoialpzWnVKaTNzR3dpUHZkbER1aDk1YzhOdzZaOEVQSWlUNG5JbksxNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9mb29kbWVudSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR4MUYvL013NWZyV0szbk02dzFYTTJlUHl3em1LaVNvTDU3MlNIZ2pBZmlEV2VkV09yZHBxUyI7fQ==', 1633898762),
('nQ5VR34rJCPtQp2Tb6Fd6ixjiKWPlqrMoBhvYmA1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjE2SUxMckJCbEhvVTFaRmtUQVdxbm1HcldNNXkzc09kVVBtdDlxciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1633892243);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ig_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_icon`, `logo`, `fb_link`, `tw_link`, `in_link`, `ig_link`, `footer_logo`, `footer_info`, `created_at`, `updated_at`) VALUES
(1, '318095329.png', '950246589.png', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.instagram.com', '1633778759.png', 'Copyright Klassy Cafe Co.', NULL, '2021-10-09 16:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '635079238.jpg', '2021-10-10 13:37:56', '2021-10-10 13:58:47'),
(2, '254621207.jpg', '2021-10-10 13:42:44', '2021-10-10 13:42:44'),
(4, '277712343.jpg', '2021-10-10 13:58:24', '2021-10-10 13:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Gazi Mehedi Hasan', 'mehedi@gmail.com', '1', NULL, '$2y$10$x1F//Mw5frWK3nM6w1XM2ePywzmKiSoL572SHgjAfiDWedWOrdpqS', NULL, NULL, 'lY304nnYTEuVMctjgt6JcdKIGCsLXpuqeegmhGkQ8DK1GI7UGXs7oRQpQVsP', NULL, NULL, '2021-10-03 10:45:33', '2021-10-03 10:45:33'),
(2, 'user', 'user@gmail.com', '0', NULL, '$2y$10$nmiI4Q55FjOcOfOufG52ouu5I5rvZ/AZQJ9.SGh9tr5JWIa83AO0a', NULL, NULL, NULL, NULL, NULL, '2021-10-03 13:13:52', '2021-10-03 13:13:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
