-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 04:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'qqqqqqqq', 'FGK Clinical Research. FGK Clinical Research is a Europe-based CRO of an ideal size for cooperation with smaller and middle-size biotech, pharmaceutical or medical device companies. We currently have 140 employees in-house at our offices – all very experienced in their own fields and trained according to the latest standards in clinical research.', '1638508165.jpg', NULL, '2021-12-13 00:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cname`, `created_at`, `updated_at`) VALUES
(1, 'Bioderma', NULL, '2021-12-04 00:43:19'),
(5, 'Chanca Piedra', NULL, NULL),
(6, 'Umcka Cold Care', NULL, NULL),
(7, 'Cetyl Pure', NULL, NULL),
(8, 'CLA Core', NULL, NULL),
(9, 'Poo Pourri', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `create_at`, `update_at`) VALUES
(1, 'syrup', '2021-12-15 05:11:29', '2021-12-15 05:11:29'),
(2, 'medicine', '2021-12-15 05:11:43', '2021-12-15 05:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'syrup', NULL, NULL),
(2, 'medicine', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Plot No 2/A, Survey No 30, 150 Feet Ring Rd, opposite Big Bazaar, Nana Mava, Rajkot, Gujarat 360006', '999999999', 'hetu@gmail.com', NULL, '2021-12-13 01:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `counter_table`
--

CREATE TABLE `counter_table` (
  `id` int(11) NOT NULL,
  `ip_address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `countpages`
--

CREATE TABLE `countpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `views` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countpages`
--

INSERT INTO `countpages` (`id`, `views`, `created_at`, `updated_at`) VALUES
(1, 16, NULL, '2021-12-16 02:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallaries`
--

CREATE TABLE `gallaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `image`, `category`, `created_at`, `updated_at`) VALUES
(1, '1639201022.png', '1', NULL, '2021-12-11 00:07:02'),
(3, '1639201331.png', '2', '2021-12-11 00:12:11', '2021-12-11 00:12:11'),
(4, '1639201431.jpg', '1', '2021-12-11 00:13:51', '2021-12-11 00:13:51'),
(5, '1639201442.jpg', '2', '2021-12-11 00:14:02', '2021-12-11 00:14:02'),
(6, '1639201451.jpg', '1', '2021-12-11 00:14:11', '2021-12-11 00:14:11'),
(7, '1639201461.jpg', '2', '2021-12-11 00:14:21', '2021-12-11 00:14:21'),
(8, '1639201470.jpg', '2', '2021-12-11 00:14:30', '2021-12-11 00:14:30'),
(9, '1639201482.jpg', '2', '2021-12-11 00:14:42', '2021-12-11 00:14:42'),
(10, '1639201496.jpg', '1', '2021-12-11 00:14:56', '2021-12-11 00:14:56'),
(12, '1639201553.jpg', '1', '2021-12-11 00:15:53', '2021-12-11 00:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1638773125.jpg', NULL, '2021-12-06 01:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `map` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `map`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.360753807107!2d70.71388641426783!3d22.264320349827806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cc75df2110d5%3A0x1c95537980ada719!2sMTV%20Cafe!5e0!3m2!1sen!2sin!4v1638778802479!5m2!1sen!2sin', NULL, '2021-12-06 02:50:24');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_12_02_081705_create__abouts_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 2),
(5, '2021_12_04_035518_create_categorys_table', 2),
(6, '2021_12_04_061823_create_products_table', 3),
(7, '2021_12_06_061545_create_logos__table', 4),
(8, '2021_12_06_065442_create__socialmedia__table', 5),
(9, '2021_12_06_074134_create__maps__table', 6),
(10, '2021_12_06_083105_create__sliders__table', 7),
(11, '2021_12_06_091825_create_contacts__table', 8),
(12, '2021_12_08_075628_create_team__table', 9),
(13, '2021_12_08_092411_create__query__table', 10),
(14, '2021_12_10_102037_create_testimonials_table', 11),
(15, '2021_12_11_050048_create_gallarys_table', 12),
(16, '2021_12_15_052458_create_cats_table', 13),
(17, '2021_12_16_042702_create_countpage_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `page_counts`
--

CREATE TABLE `page_counts` (
  `id` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `cname`, `created_at`, `updated_at`) VALUES
(7, 'Bioderma', 'Search secure for Medical Device Companies Usa. Search with Visymo.com', '55.00', '1638945537.png', '1', '2021-12-08 01:08:57', '2021-12-10 03:57:00'),
(8, 'Chanca Piedra', 'the science and art dealing with the maintenance of health and the prevention, alleviation, or cure of disease.', '70.00', '1638945604.png', '5', '2021-12-08 01:10:04', '2021-12-10 03:57:30'),
(9, 'Umcka Cold Care', 'Medicine is the field of health and healing.', '120.00', '1638945659.png', '6', '2021-12-08 01:10:59', '2021-12-10 03:57:53'),
(10, 'Cetyl Pure', 'Medical definitions for medicine ·', '20.00', '1638945710.png', '7', '2021-12-08 01:11:50', '2021-12-10 03:57:17'),
(11, 'Poo Pourri', 'Medicines are chemicals or compounds used to cure, halt, or prevent disease;', '38.00', '1638945773.png', '9', '2021-12-08 01:12:53', '2021-12-10 03:58:08'),
(12, 'CLA Core', 'The science of diagnosing, treating, or preventing disease and other damage to the body or mind.', '38.00', '1638945846.png', '8', '2021-12-08 01:14:06', '2021-12-10 03:57:44'),
(13, 'Bioderma', 'If not, probably you are calling other method. Probably you iterate over the index method somewhere else for multiple times so that you get all the data in the database.', '60.55', '1639130468.png', '1', '2021-12-10 04:31:08', '2021-12-10 04:32:09'),
(14, 'bioderma', 'If not, probably you are calling other method. Probably you iterate over the index method somewhere else for multiple times so that you get all the data in the database.hfifleifeifwg', '55.55', '1639130510.png', '1', '2021-12-10 04:31:50', '2021-12-10 04:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `firstname`, `lastname`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'yg', 'y56y', 'hetu@gmail.com', 't4t', 't4r', '2021-12-10 06:50:47', '2021-12-10 06:50:47'),
(2, 'yg', 'y56y', 'hetu@gmail.com', 't4t', 't4r', '2021-12-10 06:51:16', '2021-12-10 06:51:16'),
(3, 'yg', 'y56y', 'hetu@gmail.com', 't4t', 't4r', '2021-12-10 06:51:42', '2021-12-10 06:51:42'),
(4, 'yg', 'y56y', 'hetu@gmail.com', 't4t', 't4r', '2021-12-10 06:52:36', '2021-12-10 06:52:36'),
(5, 'yg', 'y56y', 'hetu@gmail.com', 't4t', 't4r', '2021-12-10 06:52:39', '2021-12-10 06:52:39'),
(6, 't', 'g', 'hetu@gmail.com', 'g', 'ggg', '2021-12-10 06:52:57', '2021-12-10 06:52:57'),
(7, 't', 'g', 'hetu@gmail.com', 'g', 'ggg', '2021-12-10 06:53:19', '2021-12-10 06:53:19'),
(8, 't', 'g', 'hetu@gmail.com', 'g', 'ggg', '2021-12-10 06:53:21', '2021-12-10 06:53:21'),
(9, 'ff', 'gg', 'hetu@gmail.com', 'gg', 'ggg', '2021-12-10 06:53:45', '2021-12-10 06:53:45'),
(10, 't', 'y56y', 'hetu@gmail.com', 'gggggggg', 'gggggggg', '2021-12-10 07:07:25', '2021-12-10 07:07:25'),
(11, 't', 'y56y', 'hetu@gmail.com', 'gggggggg', 'gggggggg', '2021-12-10 07:08:08', '2021-12-10 07:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Bioderma', '55.00', '1638947400.png', '2021-12-08 01:40:00', '2021-12-08 01:40:00'),
(4, 'Chanca Piedra', '70.00', '1638947444.png', '2021-12-08 01:40:44', '2021-12-08 01:40:44'),
(5, 'CLA Core', '38.00', '1638947474.png', '2021-12-08 01:41:14', '2021-12-08 01:41:14'),
(6, 'Poo Pourri', '38.00', '1638947512.png', '2021-12-08 01:41:52', '2021-12-08 01:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instragram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `instragram`, `facebook`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'https://www.instagram.com/accounts/login/', 'https://www.facebook.com/add.a.link/', 'https://twitter.com/link?lang=en', NULL, '2021-12-06 01:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `mail`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Elizabeth Graham', 'CEO/CO-FOUNDER', 'eli@gmail.com', '1638954439.jpg', '2021-12-08 03:37:19', '2021-12-08 03:37:19'),
(3, 'Jennifer Greive', 'CO-FOUNDER', 'jennifer@gmail.com', '1638954571.jpg', '2021-12-08 03:39:31', '2021-12-08 03:39:31'),
(4, 'Patrick Marx', 'MARKETING', 'patricks@gmail.com', '1638954604.jpg', '2021-12-08 03:40:04', '2021-12-08 03:40:04'),
(5, 'Mike Coolbert', 'SALES MANAGER', 'mike@gmail.com', '1638954632.jpg', '2021-12-08 03:40:32', '2021-12-08 03:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'hetuu', '1639133364.jpg', 'In this article, we’ll share 50 positive’ words with you to describe human beings. A good story can fail miserably to convey the message to people, if not used a correct adjective to describe a character. These words can be used in your essays, short stories, long stories or even in real life conversations.', NULL, '2021-12-10 05:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hetuu', 'hetu@gmail.com', NULL, '$2y$10$FKijtNHmgnSh5X4iNjU/8.9IQh911b15lSlspzfGg2l6i/txHd7Mm', NULL, '2021-12-03 00:14:55', '2021-12-03 00:14:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_table`
--
ALTER TABLE `counter_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countpages`
--
ALTER TABLE `countpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallaries`
--
ALTER TABLE `gallaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_counts`
--
ALTER TABLE `page_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `counter_table`
--
ALTER TABLE `counter_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countpages`
--
ALTER TABLE `countpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallaries`
--
ALTER TABLE `gallaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `page_counts`
--
ALTER TABLE `page_counts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
