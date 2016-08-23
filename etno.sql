-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2016 at 05:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etno`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessions`
--

CREATE TABLE `accessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `accession_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `groupcountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photodate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photographer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relatedimages` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `originalformat_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `originalformat_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eformat_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eformat_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `original_location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `elocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provenance_notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instrumentcatalog_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instrumentcategory_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instrument_localname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instrument_englishname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `musicscore_catalogername` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `musicscore_instrumentation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `musicscore_performances` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `musicscore_category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `length` double(8,2) DEFAULT NULL,
  `width` double(8,2) DEFAULT NULL,
  `height` double(8,2) DEFAULT NULL,
  `diameter` double(8,2) DEFAULT NULL,
  `no_of_pages` int(11) DEFAULT NULL,
  `original_work` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_score` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accessions`
--

INSERT INTO `accessions` (`id`, `accession_no`, `title`, `category_id`, `author`, `groupcountry`, `year`, `description`, `notes`, `picture`, `photodate`, `photographer`, `relatedimages`, `originalformat_type`, `originalformat_description`, `eformat_type`, `eformat_description`, `original_location`, `elocation`, `provenance_notes`, `instrumentcatalog_no`, `instrumentcategory_no`, `instrument_localname`, `instrument_englishname`, `musicscore_catalogername`, `musicscore_instrumentation`, `musicscore_performances`, `musicscore_category`, `length`, `width`, `height`, `diameter`, `no_of_pages`, `original_work`, `repo`, `full_score`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'UPCE-P-1', '(1) Bukidnon 1973-74 (Zayas) Colored Prints (34-51) Bkd 1', 2, 'Cynthia Zayas', 'Bukidnon', '1973-74', 'UPCE 1 Sitio Kilabaraw from a hill. Road between plots under trees.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 08:14:32', '2016-08-21 08:14:32', NULL),
(2, 'UPCE-P-2', 'Colored Prints (34-51) Bkd 1', 2, 'Janet Valade', 'Surigao', '1995', 'asdasddasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 08:16:04', '2016-08-21 08:16:04', NULL),
(3, 'UPCE-P-3', 'tribal', 3, 'Michael Jackson', 'USA', '1992', 'asdasdasdasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 08:17:24', '2016-08-21 08:17:24', NULL),
(4, 'UPCE-P-4', 'Ruby', 3, 'Sungha Jung', 'Korea', '1998', 'asdasdasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 08:18:15', '2016-08-21 08:18:15', NULL),
(5, 'UPCE-P-5', 'samba', 4, 'Tra La', 'Brazil', '1990', 'asdasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 08:24:58', '2016-08-21 08:24:58', NULL),
(6, 'UPCE-P-6', 'bamba', 4, 'La Bamba', 'Mexico', '1997', 'asdasdasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 08:35:57', '2016-08-21 08:35:57', NULL),
(7, 'UPCE-P-7', 'Dummies', 5, 'Steven Hawking', 'England', '1999', 'zsdasdsdad', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 08:38:59', '2016-08-21 08:38:59', NULL),
(8, 'UPCE-P-8', 'Tambol', 5, 'Rain', 'Mindanao', '2003', 'sssssssssfdfds', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 08:39:51', '2016-08-21 08:39:51', NULL),
(10, 'UPCE-P-9', 'pop', 6, 'MJ', 'Korea', '2000', 'kpop', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 16:41:27', '2016-08-21 16:41:27', NULL),
(11, 'UPCE-P-10', 'musika', 6, 'Gates', 'nepal', '2000', 'ping', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 16:42:26', '2016-08-21 16:42:26', NULL),
(12, 'UPCE-P-11', 'ideapad', 7, 'Print', 'USA', '2006', 'dahsdjhadkjh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 19:31:44', '2016-08-21 19:31:44', NULL),
(13, 'UPCE-P-12', 'video blog', 7, 'HD', 'Korea', '1999', 'xamppsfsfsf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 19:33:03', '2016-08-21 19:33:03', NULL),
(14, 'UPCE-P-13', 'vertical horizon', 8, 'bamboo', 'philippines', '2000', 'cubao cubao  cubao  cubao cubao cubao  cubao ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 19:35:08', '2016-08-21 19:35:08', NULL),
(15, 'UPCE-P-14', 'intel', 8, 'energy', 'nepal', '1990', 'caps', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0, '', '', '', '2016-08-21 19:36:28', '2016-08-21 19:36:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `deleted_at`) VALUES
(1, 'All', '', NULL),
(2, 'Photo', '', NULL),
(3, 'Field Notes', '', NULL),
(4, 'Audio Recording', '', NULL),
(5, 'Instrument', '', NULL),
(6, 'Music Scores', '', NULL),
(7, 'Video', '', NULL),
(8, 'Vertical Files', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_04_075815_create_users_table', 1),
('2016_08_04_081038_create_categories_table', 1),
('2016_08_04_081251_create_accessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessions`
--
ALTER TABLE `accessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accessions_accession_no_unique` (`accession_no`),
  ADD KEY `accessions_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `accessions`
--
ALTER TABLE `accessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessions`
--
ALTER TABLE `accessions`
  ADD CONSTRAINT `accessions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
