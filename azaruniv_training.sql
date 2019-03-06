-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2019 at 02:57 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azaruniv_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'دوره های مهارتی', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(2, 'کارگاه های آموزشی', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(3, 'دوره های مجازی', '2019-02-12 20:30:00', '2019-02-12 20:30:00', NULL),
(4, 'مرکز آموزش و خدمات زبان انگلیسی', '2019-02-12 20:30:00', '2019-02-12 20:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `gender` varchar(255) NOT NULL,
  `is_open` tinyint(1) NOT NULL,
  `duration` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_master_id_foreign` (`master_id`),
  KEY `courses_category_id_foreign` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `master_id`, `title`, `description`, `cost`, `capacity`, `start_date`, `finish_date`, `created_at`, `updated_at`, `deleted_at`, `category_id`, `gender`, `is_open`, `duration`) VALUES
(2, 3, 'آموزش زبان', '<p>سیشسزسشی</p>', 100, 20, '2019-01-15', '2019-01-19', '2019-01-14 19:29:35', '2019-01-14 19:36:42', '2019-01-14 19:36:42', 1, 'coeducational', 1, 9),
(3, 3, 'زبان', '<p>درحال برگزاری</p>', 0, 25, '2019-01-30', '2019-03-11', '2019-01-14 23:10:26', '2019-02-12 22:16:22', '2019-02-12 22:16:22', 1, 'coeducational', 1, 16),
(4, 12, 'کارگاه آموزشی آشنایی با تکنیکهای جدید برنامه نویسی', '<p>آزاد</p>', 0, 100, '2019-02-24', '2019-02-24', '2019-02-16 23:40:06', '2019-02-16 23:40:06', NULL, 2, 'coeducational', 1, 3),
(5, 14, 'کارگاه آشنایی با امنیت سایبری', '<p>کارگاه</p>', 0, 1000, '2019-02-26', '2019-02-26', '2019-02-16 23:43:08', '2019-02-16 23:43:08', NULL, 2, 'coeducational', 1, 3),
(6, 11, 'کارگاه آموزشیNETWORK CARRIER', '<p>کارگاه</p>', 0, 100, '2019-02-25', '2019-02-25', '2019-02-16 23:46:43', '2019-02-16 23:46:43', NULL, 2, 'coeducational', 1, 3),
(7, 3, 'آشنایی برنامه نویسان با فرصتهای شغلی', '<p>کارگاه آموزشی</p>', 0, 100, '2019-02-23', '2019-02-23', '2019-02-18 22:11:25', '2019-02-18 22:11:25', NULL, 2, 'coeducational', 1, 3),
(8, 25, 'کارگاه آموزشی بهداشت، ایمنی و محیط زیست', '<p>کارگاه آموزشی بهداشت، ایمنی و محیط زیست در دو سطح عمومی وتخصصی</p>', 0, 100, '2019-03-10', '2019-03-10', '2019-02-26 20:06:26', '2019-02-26 20:06:26', NULL, 2, 'coeducational', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `master_extra_infos`
--

DROP TABLE IF EXISTS `master_extra_infos`;
CREATE TABLE IF NOT EXISTS `master_extra_infos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `master_id` int(10) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `docs_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `master_extra_infos_master_id_foreign` (`master_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_extra_infos`
--

INSERT INTO `master_extra_infos` (`id`, `master_id`, `content`, `created_at`, `updated_at`, `deleted_at`, `docs_path`) VALUES
(1, 3, '...', '2018-12-30 20:03:14', '2018-12-30 20:03:14', NULL, ''),
(2, 10, '...', '2019-02-16 19:49:22', '2019-02-16 19:49:22', NULL, ''),
(3, 11, '...', '2019-02-16 19:50:51', '2019-02-16 19:50:51', NULL, ''),
(4, 12, '...', '2019-02-16 19:54:25', '2019-02-16 19:54:25', NULL, ''),
(5, 13, '...', '2019-02-16 19:56:02', '2019-02-16 19:56:02', NULL, ''),
(6, 14, '...', '2019-02-16 19:57:25', '2019-02-16 19:57:25', NULL, ''),
(7, 25, '...', '2019-02-26 20:04:22', '2019-02-26 20:04:22', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `is_student_sent` tinyint(1) NOT NULL,
  `is_seen` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_course_id_foreign` (`course_id`),
  KEY `messages_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_07_151045_create_roles_table', 1),
(4, '2018_11_07_151121_create_user_role_table', 1),
(5, '2018_11_07_151304_create_courses_table', 1),
(6, '2018_11_07_151337_create_tickets_table', 1),
(7, '2018_11_07_151351_create_messages_table', 1),
(8, '2018_11_07_151417_create_payments_table', 1),
(9, '2018_11_07_151428_create_photos_table', 1),
(10, '2018_11_07_151738_create_master_extra_infos_table', 1),
(11, '2018_11_07_152828_create_site_infos_table', 1),
(12, '2018_11_07_201833_create_user_courses_table', 1),
(13, '2018_11_07_223722_create_categories_table', 1),
(14, '2018_11_07_224248_add_category_id_to_courses_table', 1),
(15, '2018_11_07_224823_add_gender_to_courses_table', 1),
(16, '2018_11_08_145846_add_is_male_to_users_table', 1),
(17, '2018_11_10_134504_create_sliders_table', 1),
(18, '2018_11_10_140202_create_posts_table', 1),
(19, '2018_11_12_195200_add_is_open_to_courses_table', 1),
(20, '2018_11_17_174135_add_text_to_messages_table', 1),
(21, '2018_11_28_212012_add_major_to_users_table', 1),
(22, '2018_11_29_002254_add_master_docs_file_path_to_master_extra_infos_table', 1),
(23, '2018_11_29_161936_create_recommended_courses_table', 1),
(24, '2018_12_06_220135_add_has_certificate_to_user_courses_table', 1),
(25, '2018_12_06_220945_add_duration_to_courses_table', 1),
(26, '2018_12_07_152620_create_orders_table', 1),
(27, '2018_12_07_180904_add_system_trace_no_to_payments_table', 1),
(28, '2018_12_23_225136_create_rules_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_course_id_foreign` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `course_id`, `amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 2, 1000, '2019-01-14 19:31:22', '2019-01-14 19:31:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mohsen1@gmail.com', '$2y$10$Qtd64Oq7ppCVOrUctD/1eORapfBexCVNfEDFHpfGz26ewsk.ZvAnG', '2019-01-09 09:12:29'),
('mnfi340@gmail.com', '$2y$10$raqRAIGYv4Kaxd.pBrnsu.n2DtWlHZ2tdCNe1IMqRBnr6eP/iQc1e', '2019-01-13 05:04:22'),
('mahdiyedehgannejad@gmail.com', '$2y$10$/FB2g60KS9KDrYeGVUl0V.JxLLIj0OZzlDzTb7.aqeuyOEJXhD2vu', '2019-03-04 21:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `is_success` tinyint(1) NOT NULL,
  `retrival_ref_no` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `system_trace_no` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payments_course_id_foreign` (`course_id`),
  KEY `payments_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `course_id`, `user_id`, `amount`, `is_success`, `retrival_ref_no`, `created_at`, `updated_at`, `deleted_at`, `system_trace_no`) VALUES
(2, 2, 6, 100, 1, '321864834158', '2019-01-14 19:32:10', '2019-01-14 19:32:10', NULL, '000016');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `imageable_id` int(10) UNSIGNED NOT NULL,
  `imageable_type` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `imageable_id`, `imageable_type`, `path`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2018-12-17 06:52:39', '2018-12-17 06:52:39', NULL),
(2, 2, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2018-12-17 06:55:17', '2018-12-17 06:55:17', NULL),
(3, 1, 'App\\Slider', 'uploads/images/sliders/2018/12/17d10h26mu67KjKdOf9.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/sliders/2018/12/17d10h26mu67KjKdOf9.jpg', '2018-12-17 06:56:45', '2018-12-17 06:56:45', NULL),
(4, 1, 'App\\Post', 'uploads/images/posts/2018/12/17d10h30mbQYmSV7UnO.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/posts/2018/12/17d10h30mbQYmSV7UnO.jpg', '2018-12-17 07:00:05', '2018-12-17 07:00:05', NULL),
(5, 3, 'App\\User', 'uploads/images/users/avatar_master_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_master_male.png', '2018-12-30 20:03:14', '2018-12-30 20:03:14', NULL),
(6, 1, 'App\\Course', 'uploads/images/courses/2018/12/30d11h33mVAPX7HtoLQ.JPG', 'http://pcms.azaruniv.ac.ir/uploads/images/courses/2018/12/30d11h33mVAPX7HtoLQ.JPG', '2018-12-30 20:03:43', '2018-12-30 20:03:43', NULL),
(7, 4, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2018-12-30 20:04:34', '2019-01-07 21:32:18', '2019-01-07 21:32:18'),
(8, 4, 'App\\User', 'uploads/images/users/2019/01/08d01h02mjl7ZCt7Im3.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/2019/01/08d01h02mjl7ZCt7Im3.png', '2019-01-07 21:32:18', '2019-01-30 04:05:22', '2019-01-30 04:05:22'),
(9, 5, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-01-13 18:32:40', '2019-01-13 18:32:40', NULL),
(10, 2, 'App\\Course', 'uploads/images/courses/2019/01/14d10h59mQNC7OJfQUB.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/courses/2019/01/14d10h59mQNC7OJfQUB.jpg', '2019-01-14 19:29:35', '2019-01-14 19:29:35', NULL),
(11, 6, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-01-14 19:31:11', '2019-02-18 20:40:01', '2019-02-18 20:40:01'),
(12, 3, 'App\\Course', 'uploads/images/courses/2019/01/15d02h40mK7kHChiBrR.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/courses/2019/01/15d02h40mK7kHChiBrR.jpg', '2019-01-14 23:10:26', '2019-01-14 23:10:26', NULL),
(13, 2, 'App\\Slider', 'uploads/images/sliders/2019/01/15d02h41mZCrQBiT2In.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/sliders/2019/01/15d02h41mZCrQBiT2In.jpg', '2019-01-14 23:11:37', '2019-01-14 23:11:37', NULL),
(14, 2, 'App\\Post', 'uploads/images/posts/2019/01/15d02h43mEXO8n2byFR.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/posts/2019/01/15d02h43mEXO8n2byFR.jpg', '2019-01-14 23:13:02', '2019-01-14 23:13:02', NULL),
(15, 3, 'App\\Slider', 'uploads/images/sliders/2019/01/15d02h55m0E2Axpa5tl.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/sliders/2019/01/15d02h55m0E2Axpa5tl.jpg', '2019-01-14 23:25:11', '2019-01-14 23:25:11', NULL),
(16, 4, 'App\\Slider', 'uploads/images/sliders/2019/01/15d02h55md46nyTIY8W.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/sliders/2019/01/15d02h55md46nyTIY8W.jpg', '2019-01-14 23:25:46', '2019-01-14 23:25:46', NULL),
(17, 5, 'App\\Slider', 'uploads/images/sliders/2019/01/15d02h57mTAGd1dUTPM.jpeg', 'http://pcms.azaruniv.ac.ir/uploads/images/sliders/2019/01/15d02h57mTAGd1dUTPM.jpeg', '2019-01-14 23:27:07', '2019-01-14 23:27:07', NULL),
(18, 6, 'App\\Slider', 'uploads/images/sliders/2019/01/19d12h18meTfyHCBKGu.pdf', 'http://pcms.azaruniv.ac.ir/uploads/images/sliders/2019/01/19d12h18meTfyHCBKGu.pdf', '2019-01-18 20:48:37', '2019-01-18 20:48:37', NULL),
(19, 7, 'App\\Slider', 'uploads/images/sliders/2019/01/20d03h18mdSn0kqkJ1m.pdf', 'http://pcms.azaruniv.ac.ir/uploads/images/sliders/2019/01/20d03h18mdSn0kqkJ1m.pdf', '2019-01-19 23:48:10', '2019-01-19 23:48:10', NULL),
(20, 8, 'App\\Slider', 'uploads/images/sliders/2019/01/20d03h19mJioWMFbkgg.pdf', 'http://pcms.azaruniv.ac.ir/uploads/images/sliders/2019/01/20d03h19mJioWMFbkgg.pdf', '2019-01-19 23:49:58', '2019-01-19 23:49:58', NULL),
(21, 9, 'App\\Slider', 'uploads/images/sliders/2019/01/20d03h20mDkDi78rTDH.pdf', 'http://pcms.azaruniv.ac.ir/uploads/images/sliders/2019/01/20d03h20mDkDi78rTDH.pdf', '2019-01-19 23:50:52', '2019-01-19 23:50:52', NULL),
(22, 10, 'App\\Slider', 'uploads/images/sliders/2019/01/20d03h21mWlG6uRKY2s.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/sliders/2019/01/20d03h21mWlG6uRKY2s.jpg', '2019-01-19 23:51:40', '2019-01-19 23:51:40', NULL),
(23, 3, 'App\\Post', 'uploads/images/posts/2019/01/23d01h48mZFVnXc2gvU.png', 'http://pcms.azaruniv.ac.ir/uploads/images/posts/2019/01/23d01h48mZFVnXc2gvU.png', '2019-01-22 22:18:23', '2019-01-22 22:18:23', NULL),
(24, 4, 'App\\Post', 'uploads/images/posts/2019/01/23d01h51mCc4qONrH0Q.png', 'http://pcms.azaruniv.ac.ir/uploads/images/posts/2019/01/23d01h51mCc4qONrH0Q.png', '2019-01-22 22:21:24', '2019-01-22 22:21:24', NULL),
(25, 5, 'App\\Post', 'uploads/images/posts/2019/01/23d03h18mYdFF1hM8I5.png', 'http://pcms.azaruniv.ac.ir/uploads/images/posts/2019/01/23d03h18mYdFF1hM8I5.png', '2019-01-22 23:48:39', '2019-01-22 23:48:39', NULL),
(26, 6, 'App\\Post', 'uploads/images/posts/2019/01/25d10h25moUidM9TEro.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/posts/2019/01/25d10h25moUidM9TEro.jpg', '2019-01-25 18:55:57', '2019-01-25 18:55:57', NULL),
(27, 4, 'App\\User', 'uploads/images/users/2019/01/30d07h35mkeZwiDnsFX.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/2019/01/30d07h35mkeZwiDnsFX.png', '2019-01-30 04:05:22', '2019-02-18 02:54:58', '2019-02-18 02:54:58'),
(28, 7, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-02-12 22:01:59', '2019-02-12 22:01:59', NULL),
(29, 11, 'App\\Slider', 'uploads/images/sliders/2019/02/13d01h43m2ju9rxuCuP.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/sliders/2019/02/13d01h43m2ju9rxuCuP.jpg', '2019-02-12 22:13:15', '2019-02-12 22:13:15', NULL),
(30, 12, 'App\\Slider', 'uploads/images/sliders/2019/02/13d01h48miW8q9DBCYk.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/sliders/2019/02/13d01h48miW8q9DBCYk.jpg', '2019-02-12 22:18:51', '2019-02-12 22:18:51', NULL),
(31, 10, 'App\\User', 'uploads/images/users/avatar_master_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_master_male.png', '2019-02-16 19:49:23', '2019-02-16 19:49:23', NULL),
(32, 11, 'App\\User', 'uploads/images/users/avatar_master_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_master_male.png', '2019-02-16 19:50:51', '2019-02-16 19:50:51', NULL),
(33, 12, 'App\\User', 'uploads/images/users/avatar_master_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_master_male.png', '2019-02-16 19:54:25', '2019-02-16 19:54:25', NULL),
(34, 13, 'App\\User', 'uploads/images/users/avatar_master_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_master_male.png', '2019-02-16 19:56:02', '2019-02-16 19:56:02', NULL),
(35, 14, 'App\\User', 'uploads/images/users/avatar_master_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_master_male.png', '2019-02-16 19:57:25', '2019-02-16 19:57:25', NULL),
(36, 7, 'App\\Post', 'uploads/images/posts/2019/02/17d02h38mTrhrOyNGR8.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/posts/2019/02/17d02h38mTrhrOyNGR8.jpg', '2019-02-16 23:08:52', '2019-02-16 23:08:52', NULL),
(37, 8, 'App\\Post', 'uploads/images/posts/2019/02/17d02h43mQBQigGrrDl.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/posts/2019/02/17d02h43mQBQigGrrDl.jpg', '2019-02-16 23:13:32', '2019-02-16 23:13:32', NULL),
(38, 9, 'App\\Post', 'uploads/images/posts/2019/02/17d02h44m1rt23mEDV2.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/posts/2019/02/17d02h44m1rt23mEDV2.jpg', '2019-02-16 23:14:54', '2019-02-16 23:14:54', NULL),
(39, 10, 'App\\Post', 'uploads/images/posts/2019/02/17d02h45mbd5fn1TH1u.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/posts/2019/02/17d02h45mbd5fn1TH1u.jpg', '2019-02-16 23:15:55', '2019-02-16 23:15:55', NULL),
(40, 11, 'App\\Post', 'uploads/images/posts/2019/02/17d02h50mWVEybmwgSl.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/posts/2019/02/17d02h50mWVEybmwgSl.jpg', '2019-02-16 23:20:22', '2019-02-16 23:20:22', NULL),
(41, 4, 'App\\Course', 'uploads/images/courses/2019/02/17d03h10mI9tMtgYl1T.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/courses/2019/02/17d03h10mI9tMtgYl1T.jpg', '2019-02-16 23:40:06', '2019-02-16 23:40:06', NULL),
(42, 5, 'App\\Course', 'uploads/images/courses/2019/02/17d03h13mhiFlNnatnA.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/courses/2019/02/17d03h13mhiFlNnatnA.jpg', '2019-02-16 23:43:08', '2019-02-16 23:43:08', NULL),
(43, 6, 'App\\Course', 'uploads/images/courses/2019/02/17d03h16m3NOstmeHrO.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/courses/2019/02/17d03h16m3NOstmeHrO.jpg', '2019-02-16 23:46:43', '2019-02-23 05:40:44', '2019-02-23 05:40:44'),
(44, 15, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-02-17 19:00:32', '2019-02-17 19:00:32', NULL),
(45, 16, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-02-18 01:29:29', '2019-02-18 01:29:29', NULL),
(46, 4, 'App\\User', 'uploads/images/users/2019/02/18d06h24mIEMbdlXMEW.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/2019/02/18d06h24mIEMbdlXMEW.png', '2019-02-18 02:54:58', '2019-02-18 20:40:52', '2019-02-18 20:40:52'),
(47, 17, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-02-18 06:11:50', '2019-02-18 06:11:50', NULL),
(48, 18, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-02-18 07:12:34', '2019-02-18 07:12:34', NULL),
(49, 19, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-02-18 07:20:11', '2019-02-18 07:20:11', NULL),
(50, 6, 'App\\User', 'uploads/images/users/2019/02/19d12h10mvlDA92f2bV.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/users/2019/02/19d12h10mvlDA92f2bV.jpg', '2019-02-18 20:40:01', '2019-02-18 20:40:01', NULL),
(51, 4, 'App\\User', 'uploads/images/users/2019/02/19d12h10maXrpVDB6nF.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/users/2019/02/19d12h10maXrpVDB6nF.jpg', '2019-02-18 20:40:52', '2019-02-18 20:40:52', NULL),
(52, 20, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-02-18 20:44:02', '2019-02-18 20:44:02', NULL),
(53, 21, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-02-18 21:31:51', '2019-02-18 21:31:51', NULL),
(54, 7, 'App\\Course', 'uploads/images/courses/2019/02/19d01h41mt8wNAAUlWA.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/courses/2019/02/19d01h41mt8wNAAUlWA.jpg', '2019-02-18 22:11:25', '2019-02-18 22:11:25', NULL),
(55, 22, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-02-20 07:07:25', '2019-02-20 07:07:25', NULL),
(56, 23, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-02-21 01:07:19', '2019-02-21 01:07:19', NULL),
(57, 24, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-02-22 08:51:57', '2019-02-22 08:51:57', NULL),
(58, 6, 'App\\Course', 'uploads/images/courses/2019/02/23d09h10mBzZqh41bo6.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/courses/2019/02/23d09h10mBzZqh41bo6.jpg', '2019-02-23 05:40:44', '2019-02-23 05:40:44', NULL),
(59, 12, 'App\\Post', 'uploads/images/posts/2019/02/26d11h29mmGpTwyesTu.png', 'http://pcms.azaruniv.ac.ir/uploads/images/posts/2019/02/26d11h29mmGpTwyesTu.png', '2019-02-26 19:59:41', '2019-02-26 19:59:41', NULL),
(60, 25, 'App\\User', 'uploads/images/users/avatar_master_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_master_male.png', '2019-02-26 20:04:22', '2019-02-26 20:04:22', NULL),
(61, 8, 'App\\Course', 'uploads/images/courses/2019/02/26d11h36mXh7IOkYVtn.png', 'http://pcms.azaruniv.ac.ir/uploads/images/courses/2019/02/26d11h36mXh7IOkYVtn.png', '2019-02-26 20:06:26', '2019-02-26 20:09:07', '2019-02-26 20:09:07'),
(62, 8, 'App\\Course', 'uploads/images/courses/2019/02/26d11h39m9LV4JFKIfW.png', 'http://pcms.azaruniv.ac.ir/uploads/images/courses/2019/02/26d11h39m9LV4JFKIfW.png', '2019-02-26 20:09:07', '2019-02-26 20:09:07', NULL),
(63, 26, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-02 21:01:58', '2019-03-02 21:01:58', NULL),
(64, 27, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-02 21:48:26', '2019-03-02 21:48:26', NULL),
(65, 28, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-03 03:05:40', '2019-03-03 03:05:40', NULL),
(66, 29, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-03 04:51:21', '2019-03-03 04:51:21', NULL),
(67, 30, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-03 04:57:25', '2019-03-03 04:57:25', NULL),
(68, 31, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-03 05:35:14', '2019-03-03 05:35:14', NULL),
(69, 32, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-03 06:15:10', '2019-03-03 06:15:10', NULL),
(70, 33, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-03 06:25:14', '2019-03-03 06:25:14', NULL),
(71, 34, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-03 06:25:39', '2019-03-03 06:25:39', NULL),
(72, 35, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-03 07:14:54', '2019-03-03 07:14:54', NULL),
(73, 36, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-03 08:25:40', '2019-03-03 08:25:40', NULL),
(74, 37, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-03 09:25:47', '2019-03-03 09:25:47', NULL),
(75, 38, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-03 09:27:01', '2019-03-03 09:27:01', NULL),
(76, 39, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-03 19:13:16', '2019-03-03 19:13:16', NULL),
(77, 40, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-03 19:53:23', '2019-03-03 19:53:23', NULL),
(78, 41, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-03 19:55:19', '2019-03-03 19:55:19', NULL),
(79, 42, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-03 20:01:03', '2019-03-03 20:01:03', NULL),
(80, 43, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-03 21:12:19', '2019-03-03 21:12:19', NULL),
(81, 44, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-03 21:39:48', '2019-03-03 21:39:48', NULL),
(82, 45, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-03 22:43:53', '2019-03-03 22:43:53', NULL),
(83, 46, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 00:09:23', '2019-03-04 00:09:23', NULL),
(84, 47, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 00:18:41', '2019-03-04 00:18:41', NULL),
(85, 48, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 00:19:46', '2019-03-04 00:19:46', NULL),
(86, 49, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 00:31:43', '2019-03-04 00:31:43', NULL),
(87, 50, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 00:33:52', '2019-03-04 00:33:52', NULL),
(88, 51, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 01:09:18', '2019-03-04 01:09:18', NULL),
(89, 52, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 01:49:35', '2019-03-04 01:49:35', NULL),
(90, 53, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 02:42:05', '2019-03-04 02:42:05', NULL),
(91, 54, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 02:46:01', '2019-03-04 02:46:01', NULL),
(92, 55, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 03:19:56', '2019-03-04 03:19:56', NULL),
(93, 56, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 03:35:29', '2019-03-04 03:35:29', NULL),
(94, 57, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 03:50:45', '2019-03-04 03:50:45', NULL),
(95, 58, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 04:18:42', '2019-03-04 04:18:42', NULL),
(96, 59, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 04:29:38', '2019-03-04 04:29:38', NULL),
(97, 60, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 04:30:19', '2019-03-04 04:30:19', NULL),
(98, 61, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 04:51:30', '2019-03-04 04:51:30', NULL),
(99, 62, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 05:06:58', '2019-03-04 05:06:58', NULL),
(100, 63, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 05:27:03', '2019-03-04 05:27:03', NULL),
(101, 64, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 05:34:44', '2019-03-04 05:34:44', NULL),
(102, 65, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 06:22:53', '2019-03-04 06:22:53', NULL),
(103, 66, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 06:32:48', '2019-03-04 06:32:48', NULL),
(104, 67, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 06:51:31', '2019-03-04 06:51:31', NULL),
(105, 68, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 06:59:32', '2019-03-04 06:59:32', NULL),
(106, 69, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 07:20:51', '2019-03-04 07:20:51', NULL),
(107, 70, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 07:30:06', '2019-03-04 07:30:06', NULL),
(108, 71, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 07:46:20', '2019-03-04 07:46:20', NULL),
(109, 72, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 07:51:34', '2019-03-04 07:51:34', NULL),
(110, 73, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 08:05:09', '2019-03-04 08:05:09', NULL),
(111, 74, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 08:19:33', '2019-03-04 08:19:33', NULL),
(112, 75, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 08:19:34', '2019-03-04 08:19:34', NULL),
(113, 76, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 09:02:44', '2019-03-04 09:02:44', NULL),
(114, 77, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 09:10:09', '2019-03-04 09:10:09', NULL),
(115, 78, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 16:17:47', '2019-03-04 16:17:47', NULL),
(116, 79, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 17:25:10', '2019-03-04 17:25:10', NULL),
(117, 80, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 18:41:30', '2019-03-04 18:41:30', NULL),
(118, 81, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 21:17:44', '2019-03-04 21:17:44', NULL),
(119, 82, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 22:07:23', '2019-03-04 22:07:23', NULL),
(120, 83, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 22:28:38', '2019-03-04 22:28:38', NULL),
(121, 84, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-04 22:45:21', '2019-03-04 22:45:21', NULL),
(122, 85, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-04 23:07:26', '2019-03-04 23:07:26', NULL),
(123, 86, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 00:10:52', '2019-03-05 00:10:52', NULL),
(124, 87, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-05 01:35:39', '2019-03-05 01:35:39', NULL),
(125, 88, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 02:45:09', '2019-03-05 02:45:09', NULL),
(126, 89, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 03:49:47', '2019-03-05 03:49:47', NULL),
(127, 90, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 07:31:46', '2019-03-05 07:31:46', NULL),
(128, 91, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-05 08:33:46', '2019-03-05 08:33:46', NULL),
(129, 92, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 10:06:07', '2019-03-05 10:06:07', NULL),
(130, 93, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 10:08:54', '2019-03-05 10:08:54', NULL),
(131, 94, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-05 16:45:29', '2019-03-05 16:45:29', NULL),
(132, 95, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 17:20:24', '2019-03-05 17:20:24', NULL),
(133, 96, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 17:39:22', '2019-03-05 17:39:22', NULL),
(134, 97, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-05 19:07:09', '2019-03-05 19:07:09', NULL),
(135, 98, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 20:35:03', '2019-03-05 20:35:03', NULL),
(136, 99, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 20:40:29', '2019-03-05 20:40:29', NULL),
(137, 100, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-05 20:54:39', '2019-03-05 20:54:39', NULL),
(138, 101, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-05 21:02:59', '2019-03-05 21:02:59', NULL),
(139, 102, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 21:12:34', '2019-03-05 21:12:34', NULL),
(140, 103, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-05 21:41:24', '2019-03-05 21:41:24', NULL),
(141, 104, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 21:59:23', '2019-03-05 21:59:23', NULL),
(142, 105, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 22:23:41', '2019-03-05 22:25:03', '2019-03-05 22:25:03'),
(143, 105, 'App\\User', 'uploads/images/users/2019/03/06d01h55mkeTY0v2afM.jpg', 'http://pcms.azaruniv.ac.ir/uploads/images/users/2019/03/06d01h55mkeTY0v2afM.jpg', '2019-03-05 22:25:03', '2019-03-05 22:25:03', NULL),
(144, 106, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-05 22:36:37', '2019-03-05 22:36:37', NULL),
(145, 107, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-05 22:43:00', '2019-03-05 22:43:00', NULL),
(146, 108, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-05 23:18:22', '2019-03-05 23:18:22', NULL),
(147, 109, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-06 00:16:01', '2019-03-06 00:16:01', NULL),
(148, 110, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-06 01:16:47', '2019-03-06 01:16:47', NULL),
(149, 111, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-06 01:38:33', '2019-03-06 01:38:33', NULL),
(150, 112, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-06 01:39:16', '2019-03-06 01:39:16', NULL),
(151, 113, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_male.png', '2019-03-06 02:01:21', '2019-03-06 02:01:21', NULL),
(152, 114, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://pcms.azaruniv.ac.ir/uploads/images/users/avatar_female.png', '2019-03-06 02:56:31', '2019-03-06 02:56:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'شروع به کار سایت مدیریت آموزشهای تخصصی دانشگاه شهید مدنی آذربایجان در هفته پژوهش', '<p dir=\"rtl\">سامانه آموزشهای تخصصی و دوره های حضوری دانشگاه شهید مدنی آذربایجان افتتاح گردید</p>', '2018-12-17 07:00:05', '2018-12-17 07:00:05', NULL),
(2, 'خبر جدید', '<p>ماهواره</p>', '2019-01-14 23:13:02', '2019-01-25 18:56:33', '2019-01-25 18:56:33'),
(3, 'خلق مدل کسب و کار و آشنایی با مدل های طرح توجیهی کسب و کار', '<p>piojimjikm</p>', '2019-01-22 22:18:23', '2019-01-22 22:20:58', '2019-01-22 22:20:58'),
(4, 'کارگاه: خلق مدل کسب و کار و آشنایی با مدل های طرح توجیهی کسب و کار', '<p>***</p>', '2019-01-22 22:21:23', '2019-01-22 22:21:23', NULL),
(5, 'کارگاه: روش های تامین منابع مالی برای آغاز فعالیت و تهیه طرح کسب و کار ) BP ) و قواعد طراحی آن', '<p>*****</p>', '2019-01-22 23:48:39', '2019-01-22 23:49:00', '2019-01-22 23:49:00'),
(6, 'کارگاه: روش های تامین منابع مالی برای آغاز فعالیت و تهیه طرح کسب و کار ) BP ) و قواعد طراحی آن', '<p>*****</p>', '2019-01-25 18:55:57', '2019-01-25 18:55:57', NULL),
(7, 'کارگاه آموزشیNETWORK CARRIER', '<p>کارگاه آموزشی</p>', '2019-02-16 23:08:52', '2019-02-16 23:08:52', NULL),
(8, 'کارگا آشنایی برنامه نویسان با فرصتهای شغلی در ایران و خارج از کشور', '<p>کار گاه آموزشی</p>', '2019-02-16 23:13:32', '2019-02-16 23:16:24', '2019-02-16 23:16:24'),
(9, 'کارگاه آموزشی آشنایی با تکنیکهای جدید برنامه نویسی', '<p>کارگاه آموزشی</p>', '2019-02-16 23:14:54', '2019-02-16 23:14:54', NULL),
(10, 'کارگاه آشنایی با امنیت سایبری', '<p>کارگاه آموزشی</p>', '2019-02-16 23:15:54', '2019-02-16 23:15:54', NULL),
(11, 'کارگاه آشنایی برنامه نویسان با فرصتهای شغلی', '<p>کارگاه آموزشی</p>', '2019-02-16 23:20:21', '2019-02-16 23:20:21', NULL),
(12, 'کارگاه آموزشی بهداشت، ایمنی و محیط زیست', '<p>کارگاه آموزشی بهداشت، ایمنی و محیط زیست در دو سطح عمومی و تخصصی</p>', '2019-02-26 19:59:41', '2019-02-26 19:59:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recommended_courses`
--

DROP TABLE IF EXISTS `recommended_courses`;
CREATE TABLE IF NOT EXISTS `recommended_courses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `recommended_courses_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recommended_courses`
--

INSERT INTO `recommended_courses` (`id`, `user_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 50, 'کاراگاه ایمنی', '2019-03-04 00:36:08', '2019-03-04 00:36:08', NULL),
(2, 105, 'اموزش نرم افزار sap', '2019-03-05 22:25:45', '2019-03-05 22:25:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '2018-11-06 20:30:00', '2018-11-06 20:30:00', NULL),
(2, 'master', '2018-11-06 20:30:00', '2018-11-06 20:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

DROP TABLE IF EXISTS `rules`;
CREATE TABLE IF NOT EXISTS `rules` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'حضور غیاب در دوره طبق قوانین آموزشی خواهد بود.', '2018-12-22 20:30:00', '2018-12-23 19:50:11', NULL),
(2, 'در صورتی که در دوره های رایگان ثبت نام کنید و در کلاس شرکت نکنید یک امتیاز منفی می گیرید، در صورت داشتن دو امتیاز منفی از سیستم حذف می شوید و کد ملی شما مسدود می گردد.', '2018-12-22 20:30:00', '2018-12-22 20:30:00', NULL),
(3, 'در صورتی که در دوره های رایگان ثبت نام کنید و حضور نداشته باشید هزینه دوره هنگام تسویه حساب اخذ خواهد شد.', '2018-12-22 20:30:00', '2018-12-22 20:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_infos`
--

DROP TABLE IF EXISTS `site_infos`;
CREATE TABLE IF NOT EXISTS `site_infos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_infos`
--

INSERT INTO `site_infos` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'phone_number', '04134327587', '2018-11-07 20:30:00', '2019-01-11 20:18:56', NULL),
(2, 'email', 'sanat@azaruniv.ac.ir', '2018-11-07 20:30:00', '2019-01-11 20:18:56', NULL),
(3, 'address', '35 کیلومتری جاده تبریز-آذرشهر  - دانشگاه شهید مدنی - مدیریت امور فناوری', '2018-11-07 20:30:00', '2019-01-11 20:18:56', NULL),
(4, 'postal_code', '5375171379', '2018-11-07 20:30:00', '2019-01-11 20:18:56', NULL),
(5, 'authority2', 'دکتر علی عجمی', '2018-12-22 20:30:00', '2018-12-23 20:22:26', NULL),
(6, 'authority1', 'دکتر بهزاد سلطانی', '2018-12-22 20:30:00', '2018-12-23 20:22:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `on_click` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `on_click`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'شروع به کار سایت مدیریت آموزشهای تخصصی دانشگاه شهید مدنی آذربایجان در هفته پژوهش', 'post/1', '2018-12-17 06:56:45', '2019-02-12 22:07:45', '2019-02-12 22:07:45'),
(2, 'زبان', 'http://pcms.azaruniv.ac.ir/course/3', '2019-01-14 23:11:37', '2019-02-12 22:07:26', '2019-02-12 22:07:26'),
(3, 'خبر جدید', 'http://pcms.azaruniv.ac.ir/course/3', '2019-01-14 23:25:11', '2019-02-12 22:07:31', '2019-02-12 22:07:31'),
(4, 'خبر جدید', 'http://pcms.azaruniv.ac.ir/course/3', '2019-01-14 23:25:46', '2019-02-12 22:07:38', '2019-02-12 22:07:38'),
(5, 'سایت آموزشهای تخصص دانشگاه شهید مدنی آذربایجان شروع بکار کرد', 'http://pcms.azaruniv.ac.ir/course/3', '2019-01-14 23:27:07', '2019-02-12 22:07:34', '2019-02-12 22:07:34'),
(6, 'کارگاه: خلق مدل کسب و کار و آشنایی با مدل های طرح توجیهی کسب و کار', ' ', '2019-01-18 20:48:37', '2019-01-19 23:49:28', '2019-01-19 23:49:28'),
(7, 'کارگاه: خلق مدل کسب و کار و آشنایی با مدل های طرح توجیهی کسب و کار', ' ', '2019-01-19 23:48:10', '2019-01-19 23:49:24', '2019-01-19 23:49:24'),
(8, 'کارگاه: خلق مدل کسب و کار و آشنایی با مدل های طرح توجیهی کسب و کار', ' ', '2019-01-19 23:49:58', '2019-01-19 23:50:21', '2019-01-19 23:50:21'),
(9, 'کارگاه: خلق مدل کسب و کار و آشنایی با مدل های طرح توجیهی کسب و کار', 'کارگاه: خلق مدل کسب و کار و آشنایی با مدل های طرح توجیهی کسب و کار', '2019-01-19 23:50:52', '2019-01-19 23:50:56', '2019-01-19 23:50:56'),
(10, 'کارگاه: خلق مدل کسب و کار و آشنایی با مدل های طرح توجیهی کسب و کار', ' ', '2019-01-19 23:51:40', '2019-02-12 19:01:31', '2019-02-12 19:01:31'),
(11, 'دانشگاه', ' ', '2019-02-12 22:13:15', '2019-02-12 22:13:15', NULL),
(12, 'دوره ها', ' ', '2019-02-12 22:18:51', '2019-02-12 22:18:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `is_user_sent` tinyint(1) NOT NULL,
  `is_seen` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tickets_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `text`, `is_user_sent`, `is_seen`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 'ثبت نام شما انجام شد', 0, 0, '2019-01-14 23:17:44', '2019-01-14 23:17:44', NULL),
(2, 109, 'سلام گارگاه بهداشت و محیط زیست چه ساعتی برگزار میشود', 1, 0, '2019-03-06 00:20:23', '2019-03-06 00:20:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `student_number` varchar(255) DEFAULT NULL,
  `national_code` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_male` tinyint(1) NOT NULL,
  `major` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_national_code_unique` (`national_code`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `student_number`, `national_code`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `is_male`, `major`) VALUES
(1, 'محسن فرجامی', 'admin@ezitech.ir', '09145821998', '931831251', '01010101', '$2y$10$DzTM/b2bpfsk5iLox6eDQeAMNoD3VPH9nNNbGiZf/w40CCfGlZv.q', 'EQZSXwBUGC1zALi1M4JvfhcjT35B0XAShvDJbeyf21XYUUU5m8DSBh3Gqzyf', '2018-12-17 06:52:39', '2018-12-17 06:52:39', NULL, 1, 'فناوری اطلاعات'),
(2, 'مدیریت', 'sanat@azaruniv.ac.ir', '00000000000', '000000000', '0000000000', '$2y$10$DzTM/b2bpfsk5iLox6eDQeAMNoD3VPH9nNNbGiZf/w40CCfGlZv.q', 'arq5V0HRzKwkzdC43Wh5d4bNWAWkdc6W8hEEQlKk1VWTvSLdAhsHAfyqUcXY', '2018-12-17 06:55:17', '2018-12-17 06:55:17', NULL, 1, 'مدیریت'),
(3, 'بهزاد فرید اقدم', 'master@ezitech.ir', '09145821998', NULL, '8767898765', '$2y$10$DzTM/b2bpfsk5iLox6eDQeAMNoD3VPH9nNNbGiZf/w40CCfGlZv.q', 'XB0v07afwBNRvKTwxkNywYi9xbx2bNwo8wkZ9CxwRbnCWtZWqUs67N7qiIs2', '2018-12-30 20:03:14', '2018-12-30 20:03:14', NULL, 1, NULL),
(4, 'محسن فرجامی', 'user@ezitech.ir', '09145821998', NULL, '1570381399', '$2y$10$DzTM/b2bpfsk5iLox6eDQeAMNoD3VPH9nNNbGiZf/w40CCfGlZv.q', 'kR69jLZuPEblNN3mN6CXwLtNQMVa9uyDen7F7g9xWr1XV1ZEaUM0mFG5rlYk', '2018-12-30 20:04:34', '2018-12-30 20:04:34', NULL, 1, 'it'),
(5, 'مهسا مهرانگیز', 'mahsa.mehrangiz@yahoo.com', '09388370433', NULL, '1610166752', '$2y$10$nNZlGzJNmC2ROblS.XM7J.h9C5SxXBHCOQw577X5rxWhECk3FQh5y', 'BDZL8qAucaV89pKzeJiXHhdMqNzqBu5EDJcVfTWJVaNjCTIa6GVliFFCnd4e', '2019-01-13 18:32:40', '2019-01-13 18:32:40', NULL, 0, 'روابط بین الملل'),
(6, 'علی عربگری', 'aliarabgary@gmail.com', '09365018124', '931831229', '4490337876', '$2y$10$1EauPUD081tS4w//Je6vMeLc3ORwAnDRzL16aoYqYKpcTko3bIJoS', '2LlUDeKebNnZTq1BOTqMAsTcxwos9dFTMD0FXxItT0a8POlHa57vochQWVAF', '2019-01-14 19:31:11', '2019-01-14 19:31:11', NULL, 1, 'it'),
(7, 'مهسا مهرانگیز', 'm.mehrangiz@azaruniv.ac.ir', '09388370433', NULL, '0123456788', '$2y$10$FZ1nTeEN2ljsn5eLb6qSC.ds8ijzUcs/wI.tWlkjDCHULw3ZW9Sm.', 'g1an1WqM1wivfISFuG7DuK5vGQHx7AX7e2E9OgqQtE5Gr0iNjVou7wueHYVY', '2019-02-12 22:01:59', '2019-02-12 22:01:59', NULL, 1, 'روابط بین الملل'),
(10, 'master', 'test@gmail.com', '09365018123', NULL, '4490337875', '$2y$10$/77hxF7LuCGDHVdQc2JTyeqdlPW.JvR2nJoL77U5fcZG66MJZpiM6', NULL, '2019-02-16 19:49:22', '2019-02-16 19:49:22', NULL, 1, NULL),
(11, 'مهندس ابراهیمی', 'sanat1@azaruniv.ac.ir', '09149117381', NULL, '1379950271', '$2y$10$FycopQN9hJF0.39fE4qR6Ox8CWsUJzrFgWeofX75SvKDzJlmyojDm', 'WHujEB44gtM6UaSyUuaGGRRn44rUZpRYTDdWASQU20ZD6Ymsw5p4jTvLWhXW', '2019-02-16 19:50:51', '2019-02-16 19:50:51', NULL, 1, NULL),
(12, 'مهندس وحید نعمت پور', 'sanat2@azaruniv.ac.ir', '09149117382', NULL, '1379950272', '$2y$10$mWHtLv3pM0g2yac.LnJa8.Eq5FH8D.R23rLpSyhtLJsirL7pzesW.', NULL, '2019-02-16 19:54:25', '2019-02-16 19:54:25', NULL, 1, NULL),
(13, 'مهندس رسول جلالی', 'sanat3@azaruniv.ac.ir', '09149117383', NULL, '1379950273', '$2y$10$1mzatl.BBydHzorqZnN.0.42bpyn36KRIWn.xO/SlBY5CzZ2vb4Qa', NULL, '2019-02-16 19:56:02', '2019-02-16 19:56:02', NULL, 1, NULL),
(14, 'مهندس انصاری', 'sanat4@azaruniv.ac.ir', '09149117384', NULL, '1379950274', '$2y$10$V466Qp2F8C5uQ3at9tygD.u3RYX/xyQzjASZpIK08aXr2Jyk.jM3m', NULL, '2019-02-16 19:57:25', '2019-02-16 19:57:25', NULL, 1, NULL),
(15, 'حسام الدین عبدی', 'abdi.azaruni@gmail.com', '09359305608', '941462203', '1361873841', '$2y$10$4FxJs3VeJ3neQjYu1U2cg.7wCHmmAQTF1GJ7xqe/NFEmwr4Ad5/Yu', 'yJAm7GeK7uqKS350NOVRyJijrFWoMZ2rJzYDfyD4r20qN4daibe7dDItAYmz', '2019-02-17 19:00:32', '2019-02-17 19:00:32', NULL, 1, 'علم اطلاعات و دانش شناسی'),
(16, 'شیرین محمدجعفری', 'shirinablfazl2@gmail.com', '09142303450', '971833238', '1690206081', '$2y$10$nhBpdw/2LKT5rYq72VLjS.oTaPuNvylzuJjIki3Mnju5W1F3m38q.', NULL, '2019-02-18 01:29:28', '2019-02-18 01:29:28', NULL, 0, 'علوم تربیتی'),
(17, 'حامد باقری', 'sahandtarh@gmail.com', '09378930078', NULL, '1360487646', '$2y$10$s7dWtu1tmOebS5qgImVrr.4W8WQXPJnp1xVQ.owNOS8huD2BLdzh.', NULL, '2019-02-18 06:11:50', '2019-02-18 06:11:50', NULL, 1, 'فناوری اطلاعات'),
(18, 'فردین آقاداداشی', 'fardindeveloper@gmail.com', '09148649380', NULL, '1690158433', '$2y$10$UTxwOC1m2DdN3RPVA1QfSuc2JD/T4IBkw1EuRaJhBdEn3mRKiF2vG', NULL, '2019-02-18 07:12:34', '2019-02-18 07:12:34', NULL, 1, 'مهندسی کامپیوتر نرم افزار'),
(19, 'سینا صادقی موحد', 'it.manegement@gmail.com', '09142211316', '960087795', '1360329447', '$2y$10$rI5Q9fixJVXG4YX0khelue3qXSLd7EN.m9xCnM3lRsgzy88FiFeGi', NULL, '2019-02-18 07:20:11', '2019-02-18 07:20:11', NULL, 1, 'کامپیوتر - مکاترونیک'),
(20, 'آسیه جلوداری', 'jelodari.asiyeh@yahoo.com', '09147835049', '962255862', '1690164506', '$2y$10$k0yCth1HmX91lDrnqJZYkufw.cXvYoLOvCLviyp/2KIlCO2PURa5C', NULL, '2019-02-18 20:44:02', '2019-02-18 20:44:02', NULL, 0, 'مهندسی نرم افزار'),
(21, 'میترا اسمعیل پور', 'mitraesmailpour@yahoo.com', '09146472736', '94211001154063', '1690174412', '$2y$10$KQV5aO7NXGwVJgbqYPjf4O9zQI4VjRzhqAq0C7/pD1VRH3GcPd9xO', NULL, '2019-02-18 21:31:51', '2019-02-18 21:31:51', NULL, 0, 'مهندسی نرم افزار کامپیوتر'),
(22, 'زهرا علی دوست اقدم', 'alidoostaghdam.zahra7699@gmail.com', '09393318853', '951830252', '1570443114', '$2y$10$5F2nHBKUl.sEbkvKd5HnlOUhBNLjAeahSpFitVMOZGFcTpfWmFBCC', 'e6V6NxeaYEl1OAJJXwmicvG86VfnmbeRdDGadavCu6tObyeU2Yj9lYqE4xXn', '2019-02-20 07:07:25', '2019-02-20 07:07:25', NULL, 0, 'مهندسی کامپیوتر'),
(23, 'سعید ابراهیمی', '09146894684p@gmail.com', '09146894684', '9718302002', '1362650439', '$2y$10$TfiRGMvd1cMUMsoLSW6TYOkx3SIcSPPu1CKl4Pklr.qrvyDnwnI.y', NULL, '2019-02-21 01:07:19', '2019-02-21 01:07:19', NULL, 1, 'مهندسی کامپیوتر'),
(24, 'حسین پورقلی', 'hpourgoli94@gmail.com', '09377407154', '961833213', '5670064607', '$2y$10$Z/9hyHQwEAqyf.ssFLoHzOT1OoU7RbLzqybRTSPDMk3NLicni9R5a', NULL, '2019-02-22 08:51:57', '2019-02-22 08:51:57', NULL, 1, 'علوم کامپیوتر'),
(25, 'آرش سلحشور', 'sanat7@azaruniv.ac.ir', '09147576969', NULL, '1379950270', '$2y$10$QnYolCywHHSPikUe39com.VyIXa0YMawANcZE34MmB4M4hTIrx48u', 'X9IHTr7r4k6olrpJna6aBBtk8zq82cebUBOsF2avmqzqyr4opo2XH7dAeYiQ', '2019-02-26 20:04:22', '2019-02-26 20:04:22', NULL, 1, NULL),
(26, 'مهسا احمدی', 'mahsaahmadi7474@gmail.com', '09374370866', '971515301', '1361735449', '$2y$10$AgaXDaJ8oWUjx7KZM1jN2eEb3kQpA48iYu/Js1lhS0Aqkthu7knMm', NULL, '2019-03-02 21:01:58', '2019-03-02 21:01:58', NULL, 0, 'بیوشیمی'),
(27, 'سمانه ساقی', 'samane.saghi.68@gmail.com', '09902906650', '971703407', '2020081415', '$2y$10$sZ0iaBDp3VT9yredZnkxxu0UjOEcGd2mOgo6DJwlgtAyyyQ5PJICq', NULL, '2019-03-02 21:48:26', '2019-03-02 21:48:26', NULL, 0, 'شیمی تجزیه'),
(28, 'نسترن محمودیان', 'nastaranmahmoudian@gmail.com', '09128775800', '971703412', '4285688964', '$2y$10$twMFgL5tOG50lzz1aoIY.O9vl6h9A0INb9FPTOYYIdvYVv8sYi/ce', NULL, '2019-03-03 03:05:40', '2019-03-03 03:05:40', NULL, 0, 'شیمی تجزیه'),
(29, 'رضا کریم زاده', 'r.karimzadeh@azaruniv.ac.ir', '09147367725', '921801405', '1378479866', '$2y$10$JRbOPEI8hXxqROSgpK86I.hYDgXwTCdCUic.Y/do1efW7gWOXtrp2', 'qpm3l2mBJZUZTzFz48OqJgmnMC009w1H0feM4OMqziHGJZIQ69p3k6xf68q8', '2019-03-03 04:51:21', '2019-03-03 04:51:21', NULL, 1, 'فیزیک'),
(30, 'Shiva', 'Zamaneh94s.m@gmail.com', '09148872101', '971384305', '1690059672', '$2y$10$bocYV8FVRChKw6gwN7drn.tSCkGJAC32cZ6LZq5TobX0PSUcOmCUm', NULL, '2019-03-03 04:57:25', '2019-03-03 04:57:25', NULL, 0, 'It-مدیریت سیستم های اطلاعاتی'),
(31, 'سیما فتحی مجد', 'simafathi7@gmail.com', '09390768278', '971703411', '1467402109', '$2y$10$bjr.n.VHRVtDIX4ijA3fDuQGNDGQ8Wosf9834/D7hst/EYhexO.qi', NULL, '2019-03-03 05:35:14', '2019-03-03 05:35:14', NULL, 0, 'شیمی تجزیه'),
(32, 'پرستو انجام', 'parastooanjam@gmail.com', '09378592412', '971713305', '1361675152', '$2y$10$qOjZqGMWr/d5OM2ZdDtUje7EmImZYRQcYTt.JUgOx2Mm6gPmbWrGe', NULL, '2019-03-03 06:15:10', '2019-03-03 06:15:10', NULL, 0, 'شیمی تجزیه'),
(33, 'مهدیه دهقان نژاد', 'mahdiyedehgannejad@gmail.com', '09145833591', '971515311', '1361581107', '$2y$10$rFDlrKr4aq4KoZbyL79aveBXn.y14lEBxazlgDeZdfHG6thlDi/Ci', 'oBhHtkdrNRSFUdMqiTm5dfVCnG2FTDMvq7PlucKUZhgteC4wt9RVxjJLS4BB', '2019-03-03 06:25:14', '2019-03-05 21:06:21', NULL, 0, 'بیوشیمی'),
(34, 'زهره حقوقی', 'Hogogiz7@gmail.com', '09370212674', '971705403', '5069959379', '$2y$10$gXBPaql9d/busRceZOpo6elMXWNe/MRyl/cUrYhhyN6okRkGHylh.', NULL, '2019-03-03 06:25:39', '2019-03-03 06:25:39', NULL, 0, 'شیمی گرایش معدنی'),
(35, 'فاطمه صمدیان', 'Mefa247h@gmail.com', '09142981688', '951782222', '1540442853', '$2y$10$9hCvvuxPPSzmZS4T6EyDBOfya.AtV1BrFixqfxuPZpzsn8vGIOzxK', NULL, '2019-03-03 07:14:54', '2019-03-03 07:14:54', NULL, 0, 'مهندسی شیمی'),
(36, 'حسین عقاب', 'onlinehosein17@gmail.com', '09220910358', '971330234', '1720182094', '$2y$10$pzCK7ZoaskwExRQ/nKMvte4FfnDmEIp0cPCODLYTYvdcHDDsyaRAa', NULL, '2019-03-03 08:25:40', '2019-03-03 08:25:40', NULL, 1, 'شیمی محض'),
(37, 'سمیرا پاشایی سرنقی', 'Samirapashayi@gmail.com', '09144478702', '971703402', '2851780069', '$2y$10$/1HiJcUvv4zP0X3QTf0mauOVTFakkoL88krm70htpjrbxKaDpvZWe', 'KrjThhE7UiKyPxW6Ylry1bj0jF9zp7pbiYzpgUltB5Ph0zRCDFWUAiDjkBbh', '2019-03-03 09:25:47', '2019-03-03 09:25:47', NULL, 0, 'شیمی تجزیه'),
(38, 'بیتا قهرمان', 'bitaghahraman70@gmail.com', '09149127698', '951713311', '1700048384', '$2y$10$fC.f4VdgXAUoaIqfc6pcce7BlKXZfmc0/dSbh28EM.a7V2UXDufrC', 'MLgQ1YbleDDSBYeZZ1HvqPZK68INC4qNFh6MOvtOfTAPwrslC6bt2oPQmoBL', '2019-03-03 09:27:01', '2019-03-03 09:27:01', NULL, 0, 'کارشناسی ارشد شیمی تجزیه'),
(39, 'میترا دباغ حسینی پور', 'mitradabbagh92@gmail.com', '09142931859', '971704403', '1381896251', '$2y$10$NsmregREZILxTgK42w/qv.DzhjNBBiCrGOQjC4yrcj2U9Xe88uiRG', 'RzWbsMfiw7ncMdcp7MhOMV6IELW6VKox2QSOBy5unzw7S28JJbIQ96JBSZUQ', '2019-03-03 19:13:16', '2019-03-03 19:13:16', NULL, 0, 'شیمی- گرایش شیمی فیزیک'),
(40, 'سیدعباس عظیمی', 'a.azimi@azaruniv.ac.ir', '09214502303', '971415307', '1451044747', '$2y$10$I8XduXVmtzOyhWA4KZzLrOcz.n0N5RmODivv72ToERanxZ/PV00eO', 'GToX2ycrTt09FZ1bjbkdkLpLXc7ZTpWMr4Q5GheXBQn6l3niNa1Sr0roS7RP', '2019-03-03 19:53:23', '2019-03-03 19:53:23', NULL, 1, 'مهندسی برق الکترونیک قدرت و ماشین های الکتریکی'),
(41, 'ارش رضازاده', 'arashrezazadeh80@gmail.com', '09351541710', '972415301', '1720126712', '$2y$10$YLadrT4MyQHLAT3sGeT/wOmdON0BevPPJ2up/Jivxe3SjgPjuF/2m', 'vf8oEUnV33n3N93L7wQ1zVkt0LIG52w69okcNG9u4e61abKUETWPrgEaCEsC', '2019-03-03 19:55:19', '2019-03-03 19:55:19', NULL, 1, 'الکترونیک قدرت وماشین های الکتریکی'),
(42, 'علی خلق خیز', 'a.kholghkhiz@azaruniv.ac.ir', '09144949120', '971415303', '1570376727', '$2y$10$1Lc2lCNE9FCRQDYZG/Xh6eyRtz8Ii5xeliXbWODPuNrhU3AYn.fHu', '7LBmr1STb7l2vQwXYEZl0gNP8wgRtj5hrDkikGLqbkoIo6m1lIXM8h3naQui', '2019-03-03 20:01:03', '2019-03-03 20:01:03', NULL, 1, 'مهندسی برق ـ الکترونیک قدرت و ماشین های الکتریکی'),
(43, 'زهرا جباری', 'zahrajabbarii1997@gmail.com', '09303483255', '971713321', '1490422897', '$2y$10$CoOGjyMGNy1k0aoAE0EpX.k/31nynGYPgVKYEv6TtxH5Ok8CyiNZ.', '4HffhLSucLRfhz1FJNLM3ggLIipgB30YG7vC0gBxSfP2A3VkZOfFepGMH56A', '2019-03-03 21:12:19', '2019-03-03 21:12:19', NULL, 0, 'کارشناسی ارشد شیمی تجزیه'),
(44, 'سمیه مجیدی', 'Somayehmajidi74@yahoo.com', '09184559572', '971515312', '3750382670', '$2y$10$3v4LU4G1LLVkWBPoJm7aJ.fD.218wrilKOokqWqlICQUNOjjKuNTu', NULL, '2019-03-03 21:39:48', '2019-03-03 21:39:48', NULL, 0, 'بیوشیمی'),
(45, 'رامین رسایی', 'raminrasaie91@gmail.com', '09038105833', '971515303', '5080038217', '$2y$10$aa7y1gQPFgt5mJbvq1HYTO/XkH0oLHUzxa4YFg0dD63Wp8FFAQ.ji', NULL, '2019-03-03 22:43:53', '2019-03-03 22:43:53', NULL, 1, 'بیوشیمی'),
(46, 'هیمن پاکزاد', 'himanpakzad@gmail.com', '09398156632', '941782204', '3840237270', '$2y$10$HGeoRejkZ.OysQVzoxM42OAvb2CyyjSmk3T.fNqBbqRSTbGDO6i5G', 'i666KXeObweN79Pc4qZbbkK4rL7LvbmmKqRJC5tvoeAQQR9IsAKI10Dx3RbN', '2019-03-04 00:09:23', '2019-03-04 00:09:23', NULL, 1, 'مهندسی شیمی'),
(47, 'زهرا معصوم پور', 'zahra1993.masoumpoor@gmail.com', '09142344696', '971629308', '1720104387', '$2y$10$MjqezI25CTXdv3EJfvyf0uM3709uevfxO8mmwKwxIwGi1v3Gb9oKK', 'nRBsUVVe6fcUZqkEfiJFNNHYFswGExjTOQWYR8Akn9qlOoYzjFsFBgQg1hFB', '2019-03-04 00:18:41', '2019-03-04 00:18:41', NULL, 1, 'اگروتکنولوژی گرایش فیزیولوژی'),
(48, 'مهسا پیمائی', 'Mahsa.paymayi20@Gmail.Com', '09354521823', '971625308', '1640229833', '$2y$10$/sOYyNuRhIj8S6yNE.CdMOR52NKqlaiROV4nQLIlxBKKX9j5Fo0a2', NULL, '2019-03-04 00:19:46', '2019-03-04 00:19:46', NULL, 0, 'مهندسی باغبانی-گیاهان دارویی'),
(49, 'هانیه نظافتی خامنه', 'monil131@hotmail.com', '09388970559', '971713320', '1720130991', '$2y$10$0amiTWCW87UtjeBf6Czjk.4iSj9IBbOIiXztVhAmawPaOZ3Qe.W5.', NULL, '2019-03-04 00:31:43', '2019-03-04 00:31:43', NULL, 0, 'ارشد شیمی تجزیه'),
(50, 'حکیمه حسین زاده', 'majidebrahimi139696@gmail.com', '09143078644', '971713311', '1382585624', '$2y$10$n4IDfuPfIZv0K69IWYxequPVv4PvpU4dQem2/KfjoFMb26k1qwCbi', NULL, '2019-03-04 00:33:52', '2019-03-04 00:33:52', NULL, 1, 'شیمی تجزیه'),
(51, 'سعید رادپور', 'radpour.s@gmail.com', '09144265705', '961611304', '1490259252', '$2y$10$hCzHuj63a5HXj5Gllwln3OEOUrLDGd83JoT1dBw8r5uxSi5EA3UGS', NULL, '2019-03-04 01:09:18', '2019-03-04 01:09:18', NULL, 1, 'مهندسی عمران'),
(52, 'جواد تقی پور حلوایی', 'javadtaghipour@gmail.com', '09144173257', '971814404', '1699452581', '$2y$10$xXwRV/kp0AaUxfpqJXgROu/7tH8nW6uMc1GSIlbf9Sfwg95EI9uCG', NULL, '2019-03-04 01:49:35', '2019-03-04 01:49:35', NULL, 1, 'فیزیک'),
(53, 'رحیم رشیدی', 'www.rashidi.r1371120@gmail.com', '09146403975', '971625304', '1700071068', '$2y$10$NJXOc9mVHgX6NUGfmBFvnetOATlBJBpKFscRzmhcRpKmyFvmwkO2.', '3DTzuJPtFLIiVFW5eja0bC9dDBL8imQC7KmgLJv8OppvOmimRbJahjantiw6', '2019-03-04 02:42:05', '2019-03-04 02:42:05', NULL, 1, 'گیاهان دارویی'),
(54, 'هادی اسدپور', 'www.asadpureskanlo@gmail.com', '09149955389', '971625301', '5190078051', '$2y$10$dd5D1R6HP94bwBJ1rzn2VuBtV0ZdnXClLudhedmMVeqtcGhQRCArC', '71nhzlTQwgIIXyrVQfConJ6ec7VF2BaUtx6tG1QQL7yRUT40AO84RvaaFXQb', '2019-03-04 02:46:01', '2019-03-04 02:46:01', NULL, 1, 'گیاهان دارویی'),
(55, 'گیتی میرزایی', 'm.gity2009@gmail.com', '09394142766', '957182245', '5060110575', '$2y$10$xvbpAFlpJjMEQpVY/.gB4OU5hDHioTr2zVoaGHzrzWNjAaVBRCnvK', NULL, '2019-03-04 03:19:56', '2019-03-04 03:19:56', NULL, 0, 'مهندسی شیمی'),
(56, 'یحیی نصیری', 'yahya.nasiri.email@gmail.com', '09143219022', '971415310', '1689570288', '$2y$10$x6v24mIl3nRW7ZUThWnFzOaB9WwLzzkQcDXZTLVHyrCNYUmHOCyXm', NULL, '2019-03-04 03:35:29', '2019-03-04 03:35:29', NULL, 1, 'مهندسی برق'),
(57, 'بهاره رحیم پور', 'baharehrahimpour45@gmail.com', '09148685343', '971629305', '1690117664', '$2y$10$/nJJ2LN5yJUkq68gxhl0nOWgnbqTHbpHIlOZNiRQQ1wT/BFnsiPNS', NULL, '2019-03-04 03:50:45', '2019-03-04 03:50:45', NULL, 0, 'اگروتکنولوژی گرایش فیزیولوژی'),
(58, 'پریاپورمحمد', 'www.paryapormohammad3546@gmail.com', '09917851675', '971629303', '5190163962', '$2y$10$h/2Hx6nLEpcH3nhByEa8/.wWcKYAYl0AVNcJijNSXsI2FeiyR0Yo.', NULL, '2019-03-04 04:18:42', '2019-03-04 04:18:42', NULL, 1, 'اگروتکنولوژی'),
(59, 'شهلا مرادی', 'www.shahlamoradi68@gmail.com', '09381048808', '971625307', '2900040787', '$2y$10$J/q0ozlCPZNtyzrCMqME0u0qwvyWOF0XA3jnJrYEgKYRr8KFiFoY.', 'oxMTKQfzpAAq4XUxL5JomMnBlF1Vp2cgtAtnuPexxPJsdSfkjlcdjvoQ3Vm3', '2019-03-04 04:29:38', '2019-03-04 04:29:38', NULL, 0, 'گیاهان دارویی'),
(60, 'فریماه', 'www.farimahalidousti@gmail.com', '09371039425', '971703410', '1972183001', '$2y$10$/OSfzbYKCkC6oUMIBZR5O.A5y7DN49EoYynQVE5rMPx55QGTe0Vdu', NULL, '2019-03-04 04:30:19', '2019-03-04 04:30:19', NULL, 0, 'شیمی تجزیه'),
(61, 'رسول مهرابی کلبی بکی', 'www.rasoolmehrabi20@gmail.com', '09032176747', '972418302', '1272196461', '$2y$10$XNZT1az92T2AYaCNwUQMKOfXuQrK2pzy3vPKf.IAswNphndsF8d8.', 'iFnRhcxTbF8qz0PlZqi55WM36q8Yt07fm3gTtdve8IZDqsANJeYQXs2xuy4c', '2019-03-04 04:51:30', '2019-03-04 04:51:30', NULL, 1, 'مهندسی برق گرایش مخابرات میدان و امواج'),
(62, 'سمیرا اسعدی هراب', 's.ah.chemistry@gmail.com', '09363964291', '971713302', '1361369399', '$2y$10$cHucGAyqpBe/n0Gk181EWe4DCwosPec2b6gmtA3oRj4Kun8KcdjXC', 'jcU5E53MMikhL2mH6tsTszoDxCRzBMcdskciuoIUUcOyZS3pgkh3jDOwnn3I', '2019-03-04 05:06:58', '2019-03-04 05:06:58', NULL, 0, 'شیمی تجزیه'),
(63, 'زهرا سلطانی', 'zahrrrasollltaniii@gmail.com', '09144397065', '971625309', '2741076154', '$2y$10$7r9wOWdvPAAABJKpuvp//eMM/nz9LK2rGjEwhHU9UjinkABuH6tde', NULL, '2019-03-04 05:27:03', '2019-03-04 05:27:03', NULL, 0, 'مهندسی گیاهان دارویی و معطر'),
(64, 'دیبا صمدی', 'raha.shahrukh@yahoo.com', '09149173021', '971515305', '1361374349', '$2y$10$Ga3TDzlfANLjzz7erP/S2eFDKewvhNXMuS4p5hjZk4HaucW3ccdr.', NULL, '2019-03-04 05:34:44', '2019-03-04 05:34:44', NULL, 0, 'بیوشیمی'),
(65, 'هانیه موسوی', 'haniyemousavi1994genetic@gmail.com', '09373768254', '971515308', '1520286236', '$2y$10$XxBRWqoR/NrpjM9QmKe9BurIHQJju2aJLcwN1hU6o589TlA5B5HTa', NULL, '2019-03-04 06:22:52', '2019-03-04 06:22:52', NULL, 0, 'بیوشیمی'),
(66, 'زهرا حسن زاده', 'zahrahasanzadeh93@yahoo.com', '09015344025', '971713322', '1361521899', '$2y$10$XoHR2ISvftbOrn7r8odJ4uBO/CLXrxdJCkXZrowVsdu36p2OllKAi', NULL, '2019-03-04 06:32:48', '2019-03-04 06:32:48', NULL, 0, 'شیمی تجزیه'),
(67, 'ناهیده خیرالهی کلوانق', 'Nahidkheirollahi21@gmail.com', '09901321081', '971625303', '1699942889', '$2y$10$RCwB0cd4TzaTQm7unH81r.wghdO9hg75ZEZ0aT3q/DV9paJ2vXlaW', 'e8LQiYIYbvqrfYxgLTlfX7rTY9m4oiMIJ60DS6v93r9j5uXyYOi10gQZYM7B', '2019-03-04 06:51:31', '2019-03-04 06:51:31', NULL, 0, 'مهندسی علوم باغبانی گرایش گیاهان دارویی'),
(68, 'شهلا مرادی', 'shahlamoradi68@gmail.com', '09381048808', '971625307', '2900040786', '$2y$10$gMQjQW7ZfWtQ7jkA3rkgkejkHvhYQb4rZxZkL/xugvyK3r4q4ppM6', NULL, '2019-03-04 06:59:31', '2019-03-04 06:59:31', NULL, 0, 'باغبانی گرایش گیاهان دارویی'),
(69, 'علی دانشوری', 'a.daneshvari@azaruniv.ac.ir', '09386673720', '971515302', '1361276835', '$2y$10$7MGlewQnfE/vUXqzmhW6/OJfccbIuVQOAmBnC7hwTtl6tkvvp8JUK', 'X5rCt5dyoeeTp3PNHWbJJg2BnslsV5nyhcC8ESVGniofDZrafaZgSG6EKkYO', '2019-03-04 07:20:51', '2019-03-04 07:20:51', NULL, 1, 'بیوشیمی'),
(70, 'نسرین جباروند بهروز', 'njabbarvand@yahoo.com', '09104000470', '971704402', '1382060971', '$2y$10$CGngBjj4sK1YncORA/oJ0OxnJjYAILTm5/pT/pjDBHDkTcogFjDS.', 'ob7YUX6YtwP6miP7USEF1WPJTS4jEp7E2s0vNldis5e56hZhl5BeKsUcDrHO', '2019-03-04 07:30:06', '2019-03-04 07:30:06', NULL, 0, 'شیمی-شیمی فیزیک'),
(71, 'مهلا سادات', 'mahlaekhteraee1992@gmail.com', '09148881005', '961713302', '0921878516', '$2y$10$aBP8e1gCMDIoo4zPw8zlPu5yIHGBONrJMrDi1iwZeFAZZfMo1VuIe', NULL, '2019-03-04 07:46:20', '2019-03-04 07:46:20', NULL, 0, 'شیمی تجزیه'),
(72, 'نسیم میناخانی', 'nasim.minakhani@gmail.com', '09142516056', '971431313', '1361553111', '$2y$10$gMfYuUZUVu26.vRNbZ3WuO.YnvuUA2Kbg6JpKHp8K81GtsQ48emyG', NULL, '2019-03-04 07:51:34', '2019-03-04 07:51:34', NULL, 0, 'ادبیات انگلیسی'),
(73, 'فرناز کلانتریان', 'farnazkln@gmail.com', '09367448980', '971431317', '1361643846', '$2y$10$pDwlc6KpCLlBdkMuqHeX../LEKq2yOLO4FoyN9p5hjUq7F6iVMFMS', NULL, '2019-03-04 08:05:09', '2019-03-04 08:05:09', NULL, 0, 'ادبیات انگلیسی'),
(74, 'فرید نادری باهر', 'fn73fn@gmail.com', '09145049629', '971716309', '1361435704', '$2y$10$qbHAw7chTRY9dvN4kIH8oOcopwTyn8zFbx.HqDUaVho0T8lXUZ85e', NULL, '2019-03-04 08:19:33', '2019-03-04 08:19:33', NULL, 1, 'ارشد شیمی کاربردی'),
(75, 'مرتضی  اسدزاده', 'asadzadeh73@hotmail.com', '09120856598', '971431301', '1361550988', '$2y$10$g/kqpbl1O9vdkJtYEPrIuuMSA5k1YpNsS8BX34qyN4itHZMlHff8y', NULL, '2019-03-04 08:19:34', '2019-03-04 08:19:34', NULL, 1, 'زبان و ادبیات انگلیسی'),
(76, 'حدیثه رضائی', 'hadisre92@yahoo.com', '09379537530', '971703405', '5530000657', '$2y$10$fg8u8sNKCDAK5vxZzi7pW.bbPfBzcSVuokWl8TShzOS4KfciCXhnK', NULL, '2019-03-04 09:02:44', '2019-03-04 09:02:44', NULL, 0, 'شیمی تجزیه'),
(77, 'مهدی اصغری', 'www.aliasghar.asghari@yahoo.com', '09142457550', '971713304', '1360412093', '$2y$10$Zi/OyytYetUrlO.D3zAlgunpZh9BK3HX1.9ydJuCOKCO7xxG8yb0e', NULL, '2019-03-04 09:10:09', '2019-03-04 09:10:09', NULL, 1, 'شیمی تجزیه'),
(78, 'حسن میرزاخانی سیلاب', 'hasanpe76@yahoo.com', '09165551376', '951352243', '1690166940', '$2y$10$ZNxdod/MDhVm0GCP1/N2nOLkzuReaNxwAXroGbS307Dwxynev6/rS', NULL, '2019-03-04 16:17:47', '2019-03-04 16:17:47', NULL, 1, 'فیزیک مهندسی'),
(79, 'فهیمه شهسواری', 'f.shahsavari91@yahoo.com', '09100927486', '971703408', '4324373191', '$2y$10$T0hvVuGkmF7yBiJ4XV5aUefMkNd4bPO9zsmNA.gc5hQCQbnwwdTDC', NULL, '2019-03-04 17:25:10', '2019-03-04 17:25:10', NULL, 0, 'شیمی تجزیه'),
(80, 'پریسا السادات موسویان', 'p.mosavian1327@gmail.com', '9145870075', '971704409', '1360954074', '$2y$10$judpB3tl.onqR/XCNjfzJepyVmOL.HE3kozsPxImwUR3E2iNOwN22', NULL, '2019-03-04 18:41:30', '2019-03-04 18:41:30', NULL, 0, 'شیمی فیزیک'),
(81, 'رقیه حضرتی', 'hazraty.r777@yahoo.com', '09142702198', '971515310', '6750024548', '$2y$10$Y0wz.unZCX6VBi..YOtybeOePBA6S3cj5fdONt1WNiQ.Gr7wHnoSm', NULL, '2019-03-04 21:17:44', '2019-03-04 21:17:44', NULL, 0, 'بیوشیمی'),
(82, 'رباب احمدی', 'OmidEsmayilpour.bralpha@gmail.com', '09145017760', '971713301', '2790428646', '$2y$10$YFBrT30rZLaEFVHmElOVKuKCrHZe9XkmI6yV9Y4X1DPSArEeKmTum', NULL, '2019-03-04 22:07:23', '2019-03-04 22:07:23', NULL, 0, 'شیمی تجزیه'),
(83, 'پریا جعفری ناصر', 'www.jafari.paria73@jmail.com', '09146504215', '971713309', '1361483741', '$2y$10$AXDfpvA4WGrgg1s.w7IV8.aMJN1Copinumqp6tu5YlJqWAij2esUe', NULL, '2019-03-04 22:28:38', '2019-03-04 22:28:38', NULL, 0, 'کارشناسی ارشد شیمی تجزیه'),
(84, 'رویا تیزرو', 'roya080808@yahoo.com', '09146129925', '971713308', '1360217770', '$2y$10$XdomAzhc7i4fwvJll1619.5KDOhE0KXQ12xj8kcGBJjEpVp9gtVt2', NULL, '2019-03-04 22:45:21', '2019-03-04 22:45:21', NULL, 0, 'شیمی تجزیه'),
(85, 'لیلا آقایی دیزج', 'Leila1996Aqaei@gmail.com', '09384732206', '971629301', '1361923741', '$2y$10$EFClr3oW/8JAY/6amATLruDJaWr8RnL5KYBHaHHnGEk.AMtyrK3sa', 'vPg30TsG0GL36FTyNO9I7GJMmELJfKwVYZu80PQGuVB4lICi9LBXAsxyroH9', '2019-03-04 23:07:26', '2019-03-04 23:07:26', NULL, 1, 'آگرو تکنولوژی فیزیولوژی گیاهان زراعی'),
(86, 'حمید رضا رضایی فرد', 'hamidrezaie@52yahoo.com', '09143124175', '972629302', '1699402914', '$2y$10$2Gp5SV53hJ1LBofE.v/BwOvHU9EwEkIoIr0PLwlHBnd80xFPVAp5u', NULL, '2019-03-05 00:10:52', '2019-03-05 00:10:52', NULL, 1, 'اگرو تکنولوژی فیزیولوژی گیاهان زراعی'),
(87, 'رویا عباسپور', 'roya.abbaspoor@gmail.com', '09381445085', '971515306', '1361326174', '$2y$10$VZ1plehxi4LG5C9DhgEUT.p1c.dFYFeaGuXvM/nNSucNH8HZKBnOe', NULL, '2019-03-05 01:35:39', '2019-03-05 01:35:39', NULL, 0, 'بیوشیمی'),
(88, 'سید محمود سیدی غفاری', 'ali.ghafari1461@gmail.com', '09902806647', '971611304', '1378104511', '$2y$10$WxX6ueUe8H93AB.RTSY88u32H/QNcXzpFksIaA/YhZ2L8NUviPPaW', NULL, '2019-03-05 02:45:09', '2019-03-05 02:45:09', NULL, 1, 'سازه - عمران'),
(89, 'saman', 'samanma921@gmail.com', '09369050345', '971611303', '2960279476', '$2y$10$QFtcrllekDTItaLIBr4fEuVYuBAdcWnWz8EvzJ6PXg0tByzPByFti', NULL, '2019-03-05 03:49:47', '2019-03-05 03:49:47', NULL, 1, 'کارشناسی ارشد سازع'),
(90, 'علی عجمی', 'aajami83@yahoo.com', '09143183362', NULL, '1370968620', '$2y$10$TBKimqavx4LUbQ2XQwgHT.py4/RHLXQqYUEMKjSa3n/NqIvTEc8A6', 'Eoqfj38x0A2JK5PP3oELNdiuY37bhszUfC6U2sC0NdwiPD6kXpEi6SiqmsTP', '2019-03-05 07:31:46', '2019-03-05 07:31:46', NULL, 1, 'مهندسی برق'),
(91, 'ماهک رضاپور', 'maahakreza@gmail.com', '09014410457', '971431308', '1361942975', '$2y$10$thkaQcYbFLph5CGoWuczQ.8g1ycL8YGhakw.2qNSN2zBI77VoDXY.', NULL, '2019-03-05 08:33:46', '2019-03-05 08:33:46', NULL, 0, 'زبان و ادبیات انگلیسی'),
(92, 'سید محمد ادیانی', 's.mohammad.ad@gmail.com', '09198890142', '951821301', '0520750284', '$2y$10$qIJk/7JlE4SJy82Ua3qJDOS0buZPyFyKffC1C4hnf/nkp7vWECKue', NULL, '2019-03-05 10:06:07', '2019-03-05 10:06:07', NULL, 1, 'مهندسی مکانیک'),
(93, 'امیر چاکری', 'amir21mt@gmail.com', '09148038224', '971680303', '1361518936', '$2y$10$PPjeGUzBOVJMvlulLHKftux/oeAEP3t1qWYDIQ8DYt5Zg33XAwUU6', NULL, '2019-03-05 10:08:54', '2019-03-05 10:08:54', NULL, 1, 'کارشناسی‌ ارشد عمران زلزله'),
(94, 'مهسا قاسمی', 'mgh_chemist88@yahoo.com', '09903501804', '971704406', '1700046136', '$2y$10$bGGltiryIXkHo7SQafhl0OBhdDWemJpbI.zcD3XtfREXLtB3Bxvay', 'AYCVn7FjFZgKtaqhW2rkWVa2zuNKjmHBPuJF1RNg3mOPIbDnzM16xNxvGonK', '2019-03-05 16:45:29', '2019-03-05 16:45:29', NULL, 0, 'شیمی فیزیک'),
(95, 'پریسا قاسمی', 'pgh.chemist@yahoo.com', '09146584312', '971704405', '1700046128', '$2y$10$gn4bTPVdz37lijCdhdklO.vjlh3wubNPCh.vmNrUtEEnYYheGwHBq', 'lGvtG6ZAYRFaOEByEqjzAGUCiJA8BK7W7HDUtvyvcBEWzbdAU2sBpzHO0PF7', '2019-03-05 17:20:24', '2019-03-05 17:20:24', NULL, 1, 'دکتری شیمی فیزیک'),
(96, 'رضاقهرمانی', 'rezaghahremani000@gmail.com', '09147314355', '971713317', '1361450398', '$2y$10$7UnZF4xi3E3Cos3B.wxysud/gRbNsRYOns0pikhbggwxX.YxKbo3u', NULL, '2019-03-05 17:39:22', '2019-03-05 17:39:22', NULL, 1, 'شیمی تجزیه'),
(97, 'سیمافرشینه ساعی', 'sfarshineh@yahoo.com', '09146308273', '971713323', '1361753781', '$2y$10$bSUw3nW1r4IMqWp6K9cIHeOwHZeFf3VJcSAkd6KNSStnWvqYEgYpm', 'rCdZ5xQG9q4r2oTlON3YF2JtsQG0DB4qUwBCfujSxVyiBYu1t57fb8HjcLOn', '2019-03-05 19:07:09', '2019-03-05 19:07:09', NULL, 0, 'شیمی تجزیه'),
(98, 'محمدحسین رازقی', 'Razeghi788@gmail.com', '09148112646', '971704404', '2753813396', '$2y$10$dREPRbknDN.x.qXeEOXIFukStXYJvw0saqHTecS1zVlavLbM5FShS', 'Q4yCHFvOqbq2lcgqwQEhF5oYJ65zYPVR3y7YD5gHoeEV1d4A7UYqwKtXy40Z', '2019-03-05 20:35:03', '2019-03-05 20:35:03', NULL, 1, 'شیمی فیزیک'),
(99, 'عطا مهدی زاده', 'ata.mehdizadeh@yahoo.com', '09143632889', '971704408', '2790308896', '$2y$10$WPtWn/YD7vOFBu3zLguMg.pyyBUZWJ/XWRqr/n84qQUH1sWImJU92', 'VtgQDe4EgsWSt9ptma9KO010gmb6I47To5JufpWdYKUSNGGue2ZLUKL0nWNu', '2019-03-05 20:40:29', '2019-03-05 20:40:29', NULL, 1, 'شیمی فیزیک'),
(100, 'انیس رنجبرزادحق', 'a.ranjbarzadeh94@gmail.com', '09148618328', '971515304', '1361022590', '$2y$10$iQFivRmsC/v7dKoQJxHIPOABbcSgp.nYb/Gi8PNVQbBLygREklqRu', NULL, '2019-03-05 20:54:39', '2019-03-05 20:54:39', NULL, 0, 'بیوشیمی'),
(101, 'فرشته وطن دوست', 'fe.vatandoust@gmail.com', '09380242217', '971515309', '1360478027', '$2y$10$G0HhxaBpNgdmdOfiJQUepeerfw/O5v0fiH0Y6Tz9I3B1ojtrjJROW', NULL, '2019-03-05 21:02:59', '2019-03-05 21:02:59', NULL, 0, 'بیوشیمی'),
(102, 'حمیدرضارضازاده', 'deniz_yoli@yahoo.com', '09198256988', '971671305', '1360546901', '$2y$10$EjF0UES7TUfRmSYIozNrC.snZE.jhXXrOo1ZMdT/tibLAG3l/99Eu', NULL, '2019-03-05 21:12:34', '2019-03-05 21:12:34', NULL, 1, 'مهندسی عمران'),
(103, 'شبنم ایمانی', 'imanishabi23@gmail.com', '09906790938', '971671303', '1361962437', '$2y$10$TSe44qOq4TIVQ/zFbxv6Ye9JGr5JweQweogCPcojSeNRt4eRfMx86', NULL, '2019-03-05 21:41:24', '2019-03-05 21:41:24', NULL, 0, 'عمران _ژئوتکنیک'),
(104, 'احسان رجبزاده', 'rajabzadehehsan1376@gmail.com', '09380381256', '951352220', '1690163666', '$2y$10$kxifRQwLtTgcO1O/ZPjrJOLfQM8ARKXh0r1kBQKD4EOLYlgetA8Km', 'hVUww6NLmmmlrvwspeyGJzHaR9ODEmxQj7gtOUFlCigsCrdXp4VmIsaszTfo', '2019-03-05 21:59:23', '2019-03-05 21:59:23', NULL, 1, 'فیزیک مهندسی'),
(105, 'فرهاد امیر کلوانق', 'f_amir67@yahoo.com', '09149015920', '971311601', '1382664801', '$2y$10$WA1RHZ/5snf4IImi5B/R..jZfXBWCI.w96ALsq3q.zflwyrQXXabe', 'hTsQQI0UmInp4koq5miED8O7V4NQ107lxD80KY4tikPIdQ0UlZfIwtqlahIi', '2019-03-05 22:23:41', '2019-03-05 22:23:41', NULL, 1, 'سازه'),
(106, 'محمد صادق پور اکبریان نیاز', 'mspmiaz@yahoo.com', '09143005080', '971311602', '1375972839', '$2y$10$2ltsOCyQfeJbE4SBUmZjF.38KJtRSgCKivVJmNunXgmUJG.KwbqUe', 'Gmxbbgp8kSvgE2U7zvWPchz0kldUDk6eGOTWB23qhgfowuPh6G1hrcnQrS8l', '2019-03-05 22:36:37', '2019-03-05 22:36:37', NULL, 1, 'سازه'),
(107, 'زهره ولی پور داشبلاغ', 'valipoor.zohreh@yahoo.com', '09190159843', '971311610', '0440164109', '$2y$10$jLM4i7S0GOUzjy17pw9V/.6Z4wpk0YDbBqAr5MIXhv2D1VkERRXmW', '8Q0lp7fjanGSKnZ7ldHYDGoJSQuYi3qshQmg0Ptv7FJsN0xWa530FFWzwLec', '2019-03-05 22:43:00', '2019-03-05 22:43:00', NULL, 0, 'سازه'),
(108, 'سمیرا انوری', 'samiraanvari97@gmail.com', '09338300310', '971713306', '0923381414', '$2y$10$5KA9YyuRfPzRwFjTkq8v5.1RziQVnqv8qR0okQl1tmW8/RdNimxW6', NULL, '2019-03-05 23:18:22', '2019-03-05 23:18:22', NULL, 0, 'شیمی تجزیه'),
(109, 'لیلا پورمحمد', 'lpmd.94@gmail.com', '09142292559', '971463304', '1490433041', '$2y$10$C7Yu2zZ17nAjDeEXd.fIsOqL9TC4Lskswn5JLLoxD7oW.uso3LCBe', NULL, '2019-03-06 00:16:01', '2019-03-06 00:16:01', NULL, 0, 'کارشناسی ارشد مدیریت اطلاعات'),
(110, 'فاطمه کشتمند', 'zohrekeshtmand@gamil.com', '09182909800', '961713313', '3360231872', '$2y$10$wdaS.lq9J/ovCntBot2oe.JE2lUcagtvhx9/D/IO1BTcrO/gTcaf6', 'ErK4JDIkFDymyHLsz5TsZZrJqE3pyDvMrwVNmz0QhNAuHJX8iQWN2obWSOfk', '2019-03-06 01:16:47', '2019-03-06 01:16:47', NULL, 0, 'شیمی تجزیه'),
(111, 'طاهره شیخی', 'Tahere.sheikhi1980@gmail.com', '09188300217', '971703409', '3255851874', '$2y$10$40/Yyv8E2MXc2PIsEgGYDe8p.eDjVxjBvpI7ALcrYtjuu0lRPd51m', 'rFVM0ZnHeinUzDbtViEYZ2057tpPhkYfWn3wMW7zywc8N2ekHBJiRNdGiULa', '2019-03-06 01:38:33', '2019-03-06 01:38:33', NULL, 0, 'شیمی تجزیه'),
(112, 'نازنین کاشفیه', 'n.kashefiyeh@gmail.com', '09141099642', '971463317', '1361522496', '$2y$10$LOAZ31b5Hcoyiy.MBkXtv.NYMCLmwZfWqWcKGrysuUgWk8pikVVYu', NULL, '2019-03-06 01:39:16', '2019-03-06 01:39:16', NULL, 1, 'علم اطلاعات_گرایش مدیریت اطلاعات'),
(113, 'عباس قدیری', 'a.ghadiri@azaruniv.ac.ir', '09210802167', '971417304', '4311047150', '$2y$10$hS30/0fs3s12d.66LyVWbe3znr.K8gS1qwCAoJbZcGU3jEKC7nwSi', NULL, '2019-03-06 02:01:21', '2019-03-06 02:01:21', NULL, 1, 'مهندسی برق مخابرات سیستم'),
(114, 'مریم حق پناه', 'maryam.hag6@gmail.com', '09144631362', '971702401', '2790128294', '$2y$10$eEkjXhI.LR71AtG5WPU.T.NBZaCS4T9FP1L0mhY0iC9IuY05Xzl12', 'b7XkLhtcy5KX3MsIe05whKYJqMi0A2uFAM4sFqu1xNPSYGy1WeOTmwz7ymRd', '2019-03-06 02:56:31', '2019-03-06 02:56:31', NULL, 0, 'شیمی الی');

-- --------------------------------------------------------

--
-- Table structure for table `user_courses`
--

DROP TABLE IF EXISTS `user_courses`;
CREATE TABLE IF NOT EXISTS `user_courses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `student_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `has_certificate` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_courses_student_id_foreign` (`student_id`),
  KEY `user_courses_course_id_foreign` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_courses`
--

INSERT INTO `user_courses` (`id`, `student_id`, `course_id`, `created_at`, `updated_at`, `deleted_at`, `has_certificate`) VALUES
(2, 6, 2, '2019-01-14 19:32:10', '2019-01-14 19:32:10', NULL, 0),
(3, 15, 4, '2019-02-17 19:03:05', '2019-02-17 19:03:05', NULL, 0),
(4, 15, 6, '2019-02-17 19:03:50', '2019-02-17 19:03:50', NULL, 0),
(5, 15, 5, '2019-02-17 19:04:16', '2019-02-17 19:04:16', NULL, 0),
(6, 4, 6, '2019-02-18 03:07:41', '2019-02-18 03:07:41', NULL, 0),
(7, 4, 5, '2019-02-18 03:08:29', '2019-02-18 03:08:29', NULL, 0),
(8, 4, 4, '2019-02-18 03:08:53', '2019-02-18 03:08:53', NULL, 0),
(9, 17, 5, '2019-02-18 06:12:17', '2019-02-18 06:12:17', NULL, 0),
(10, 18, 6, '2019-02-18 07:13:13', '2019-02-18 07:13:13', NULL, 0),
(11, 18, 5, '2019-02-18 07:13:49', '2019-02-18 07:13:49', NULL, 0),
(12, 18, 4, '2019-02-18 07:14:19', '2019-02-18 07:14:19', NULL, 0),
(13, 19, 5, '2019-02-18 07:21:06', '2019-02-18 07:21:06', NULL, 0),
(14, 19, 6, '2019-02-18 07:21:49', '2019-02-18 07:21:49', NULL, 0),
(15, 19, 4, '2019-02-18 07:22:23', '2019-02-18 07:22:23', NULL, 0),
(16, 20, 5, '2019-02-18 20:44:33', '2019-02-18 20:44:33', NULL, 0),
(17, 21, 5, '2019-02-18 21:36:46', '2019-02-18 21:36:46', NULL, 0),
(18, 21, 4, '2019-02-19 17:38:42', '2019-02-19 17:38:42', NULL, 0),
(19, 4, 7, '2019-02-19 21:39:21', '2019-02-19 21:39:21', NULL, 0),
(20, 6, 7, '2019-02-20 04:59:26', '2019-02-20 04:59:26', NULL, 0),
(21, 22, 7, '2019-02-20 07:09:14', '2019-02-20 07:09:14', NULL, 0),
(22, 22, 5, '2019-02-20 07:13:31', '2019-02-20 07:13:31', NULL, 0),
(23, 22, 4, '2019-02-20 07:15:43', '2019-02-20 07:15:43', NULL, 0),
(24, 22, 6, '2019-02-20 07:17:24', '2019-02-20 07:17:24', NULL, 0),
(25, 23, 4, '2019-02-21 01:07:42', '2019-02-21 01:07:42', NULL, 0),
(26, 15, 7, '2019-02-22 03:55:00', '2019-02-22 03:55:00', NULL, 0),
(27, 26, 8, '2019-03-02 21:03:06', '2019-03-02 21:03:06', NULL, 0),
(28, 27, 8, '2019-03-02 21:49:02', '2019-03-02 21:49:02', NULL, 0),
(29, 28, 8, '2019-03-03 03:06:11', '2019-03-03 03:06:11', NULL, 0),
(30, 29, 8, '2019-03-03 04:51:46', '2019-03-03 04:51:46', NULL, 0),
(31, 30, 8, '2019-03-03 04:58:51', '2019-03-03 04:58:51', NULL, 0),
(32, 31, 8, '2019-03-03 05:36:29', '2019-03-03 05:36:29', NULL, 0),
(33, 34, 8, '2019-03-03 06:27:19', '2019-03-03 06:27:19', NULL, 0),
(34, 32, 8, '2019-03-03 06:45:04', '2019-03-03 06:45:04', NULL, 0),
(35, 35, 8, '2019-03-03 07:26:38', '2019-03-03 07:26:38', NULL, 0),
(36, 36, 8, '2019-03-03 08:26:14', '2019-03-03 08:26:14', NULL, 0),
(37, 37, 8, '2019-03-03 09:27:28', '2019-03-03 09:27:28', NULL, 0),
(38, 38, 8, '2019-03-03 09:27:57', '2019-03-03 09:27:57', NULL, 0),
(39, 39, 8, '2019-03-03 19:13:45', '2019-03-03 19:13:45', NULL, 0),
(40, 41, 8, '2019-03-03 19:56:51', '2019-03-03 19:56:51', NULL, 0),
(41, 40, 8, '2019-03-03 19:58:41', '2019-03-03 19:58:41', NULL, 0),
(42, 42, 8, '2019-03-03 20:01:31', '2019-03-03 20:01:31', NULL, 0),
(43, 43, 8, '2019-03-03 21:12:38', '2019-03-03 21:12:38', NULL, 0),
(44, 44, 8, '2019-03-03 21:46:16', '2019-03-03 21:46:16', NULL, 0),
(45, 45, 8, '2019-03-03 22:45:20', '2019-03-03 22:45:20', NULL, 0),
(46, 46, 8, '2019-03-04 00:10:25', '2019-03-04 00:10:25', NULL, 0),
(47, 47, 8, '2019-03-04 00:22:29', '2019-03-04 00:22:29', NULL, 0),
(48, 48, 8, '2019-03-04 00:22:31', '2019-03-04 00:22:31', NULL, 0),
(49, 49, 8, '2019-03-04 00:39:39', '2019-03-04 00:39:39', NULL, 0),
(50, 50, 8, '2019-03-04 01:06:19', '2019-03-04 01:06:19', NULL, 0),
(51, 51, 8, '2019-03-04 01:09:36', '2019-03-04 01:09:36', NULL, 0),
(52, 52, 8, '2019-03-04 01:50:39', '2019-03-04 01:50:39', NULL, 0),
(53, 55, 8, '2019-03-04 03:22:31', '2019-03-04 03:22:31', NULL, 0),
(54, 57, 8, '2019-03-04 03:51:30', '2019-03-04 03:51:30', NULL, 0),
(55, 58, 8, '2019-03-04 04:20:49', '2019-03-04 04:20:49', NULL, 0),
(56, 60, 8, '2019-03-04 04:32:50', '2019-03-04 04:32:50', NULL, 0),
(57, 62, 8, '2019-03-04 05:08:30', '2019-03-04 05:08:30', NULL, 0),
(58, 64, 8, '2019-03-04 05:35:26', '2019-03-04 05:35:26', NULL, 0),
(59, 65, 8, '2019-03-04 06:24:14', '2019-03-04 06:24:14', NULL, 0),
(60, 66, 8, '2019-03-04 06:34:01', '2019-03-04 06:34:01', NULL, 0),
(61, 67, 8, '2019-03-04 06:52:55', '2019-03-04 06:52:55', NULL, 0),
(62, 69, 8, '2019-03-04 07:22:29', '2019-03-04 07:22:29', NULL, 0),
(63, 70, 8, '2019-03-04 07:31:31', '2019-03-04 07:31:31', NULL, 0),
(64, 71, 8, '2019-03-04 07:48:15', '2019-03-04 07:48:15', NULL, 0),
(65, 72, 8, '2019-03-04 07:52:09', '2019-03-04 07:52:09', NULL, 0),
(66, 73, 8, '2019-03-04 08:06:54', '2019-03-04 08:06:54', NULL, 0),
(67, 75, 8, '2019-03-04 08:20:03', '2019-03-04 08:20:03', NULL, 0),
(68, 76, 8, '2019-03-04 09:04:01', '2019-03-04 09:04:01', NULL, 0),
(69, 77, 8, '2019-03-04 09:12:14', '2019-03-04 09:12:14', NULL, 0),
(70, 78, 8, '2019-03-04 16:19:24', '2019-03-04 16:19:24', NULL, 0),
(71, 79, 8, '2019-03-04 17:25:54', '2019-03-04 17:25:54', NULL, 0),
(72, 81, 8, '2019-03-04 21:19:05', '2019-03-04 21:19:05', NULL, 0),
(73, 82, 8, '2019-03-04 22:08:28', '2019-03-04 22:08:28', NULL, 0),
(74, 83, 8, '2019-03-04 22:38:08', '2019-03-04 22:38:08', NULL, 0),
(75, 84, 8, '2019-03-04 22:45:53', '2019-03-04 22:45:53', NULL, 0),
(76, 85, 8, '2019-03-04 23:09:51', '2019-03-04 23:09:51', NULL, 0),
(77, 88, 8, '2019-03-05 02:46:35', '2019-03-05 02:46:35', NULL, 0),
(78, 90, 8, '2019-03-05 07:39:59', '2019-03-05 07:39:59', NULL, 0),
(79, 80, 8, '2019-03-05 07:50:47', '2019-03-05 07:50:47', NULL, 0),
(80, 91, 8, '2019-03-05 08:34:44', '2019-03-05 08:34:44', NULL, 0),
(81, 92, 8, '2019-03-05 10:08:45', '2019-03-05 10:08:45', NULL, 0),
(82, 93, 8, '2019-03-05 10:11:05', '2019-03-05 10:11:05', NULL, 0),
(83, 94, 8, '2019-03-05 17:01:27', '2019-03-05 17:01:27', NULL, 0),
(84, 95, 8, '2019-03-05 17:32:42', '2019-03-05 17:32:42', NULL, 0),
(85, 96, 8, '2019-03-05 17:40:28', '2019-03-05 17:40:28', NULL, 0),
(86, 97, 8, '2019-03-05 19:10:10', '2019-03-05 19:10:10', NULL, 0),
(87, 98, 8, '2019-03-05 20:36:19', '2019-03-05 20:36:19', NULL, 0),
(88, 99, 8, '2019-03-05 20:41:43', '2019-03-05 20:41:43', NULL, 0),
(89, 100, 8, '2019-03-05 20:55:33', '2019-03-05 20:55:33', NULL, 0),
(90, 101, 8, '2019-03-05 21:03:45', '2019-03-05 21:03:45', NULL, 0),
(91, 33, 8, '2019-03-05 21:08:55', '2019-03-05 21:08:55', NULL, 0),
(92, 102, 8, '2019-03-05 21:14:41', '2019-03-05 21:14:41', NULL, 0),
(93, 103, 8, '2019-03-05 21:42:23', '2019-03-05 21:42:23', NULL, 0),
(94, 104, 8, '2019-03-05 22:00:06', '2019-03-05 22:00:06', NULL, 0),
(95, 105, 8, '2019-03-05 22:27:00', '2019-03-05 22:27:00', NULL, 0),
(96, 106, 8, '2019-03-05 22:37:54', '2019-03-05 22:37:54', NULL, 0),
(97, 107, 8, '2019-03-05 22:43:16', '2019-03-05 22:43:16', NULL, 0),
(98, 108, 8, '2019-03-05 23:22:10', '2019-03-05 23:22:10', NULL, 0),
(99, 109, 8, '2019-03-06 00:18:14', '2019-03-06 00:18:14', NULL, 0),
(100, 109, 5, '2019-03-06 00:21:44', '2019-03-06 00:21:44', NULL, 0),
(101, 109, 6, '2019-03-06 00:37:03', '2019-03-06 00:37:03', NULL, 0),
(102, 110, 8, '2019-03-06 01:17:17', '2019-03-06 01:17:17', NULL, 0),
(103, 111, 8, '2019-03-06 01:40:35', '2019-03-06 01:40:35', NULL, 0),
(104, 113, 8, '2019-03-06 02:02:01', '2019-03-06 02:02:01', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_role_user_id_foreign` (`user_id`),
  KEY `user_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2018-12-16 20:30:00', '2018-12-16 20:30:00', NULL),
(2, 2, 1, '2018-12-16 20:30:00', '2018-12-16 20:30:00', NULL),
(3, 3, 2, NULL, NULL, NULL),
(4, 7, 1, '2019-02-12 20:30:00', '2019-02-12 20:30:00', NULL),
(5, 10, 2, NULL, NULL, NULL),
(6, 11, 2, NULL, NULL, NULL),
(7, 12, 2, NULL, NULL, NULL),
(8, 13, 2, NULL, NULL, NULL),
(9, 14, 2, NULL, NULL, NULL),
(10, 25, 2, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `courses_master_id_foreign` FOREIGN KEY (`master_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `master_extra_infos`
--
ALTER TABLE `master_extra_infos`
  ADD CONSTRAINT `master_extra_infos_master_id_foreign` FOREIGN KEY (`master_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `recommended_courses`
--
ALTER TABLE `recommended_courses`
  ADD CONSTRAINT `recommended_courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_courses`
--
ALTER TABLE `user_courses`
  ADD CONSTRAINT `user_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `user_courses_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `user_role_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
