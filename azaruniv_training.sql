-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 04:09 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `azaruniv_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'دوره های حضوری', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(2, 'دوره های زبان خارجی', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(3, 'دوره های مجازی', '2018-11-07 20:30:00', '2018-11-07 20:30:00', '2018-11-27 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `master_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cost` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `start_date` date DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  `is_open` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_master_id_foreign` (`master_id`),
  KEY `courses_category_id_foreign` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `master_id`, `category_id`, `title`, `description`, `cost`, `duration`, `capacity`, `gender`, `start_date`, `finish_date`, `is_open`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 'دوره ی جدید آموزش ساختمان داده', '<p dir="ltr"><em>متن ایتالیک</em></p><p dir="ltr"><strong>متن بولد</strong></p><p dir="ltr"><em><strong>متن بولد و ایتالیک</strong></em></p><p dir="ltr">تمامی متن های بالا راست چین اند(این متن معمولی است)</p><p dir="ltr"><a href="http://google.com">این یک لینک است</a></p><ul dir="ltr"><li>this is li1</li><li>this is li2</li></ul><p dir="ltr"><em>متن ایتالیک</em></p><p dir="ltr"><strong>متن بولد</strong></p><p dir="ltr"><em><strong>متن بولد و ایتالیک</strong></em></p><p dir="ltr">تمامی متن های بالا راست چین اند(این متن معمولی است)</p><p dir="ltr"><a href="http://google.com">این یک لینک است</a></p><ul dir="ltr"><li>this is li1</li><li>this is li2</li></ul><p dir="ltr"><em>متن ایتالیک</em></p><p dir="ltr"><strong>متن بولد</strong></p><p dir="ltr"><em><strong>متن بولد و ایتالیک</strong></em></p><p dir="ltr">تمامی متن های بالا راست چین اند(این متن معمولی است)</p><p dir="ltr"><a href="http://google.com">این یک لینک است</a></p><ul dir="ltr"><li>this is li1</li><li>this is li2</li></ul><p dir="ltr"><em>متن ایتالیک</em></p><p dir="ltr"><strong>متن بولد</strong></p><p dir="ltr"><em><strong>متن بولد و ایتالیک</strong></em></p><p dir="ltr">تمامی متن های بالا راست چین اند(این متن معمولی است)</p><p dir="ltr"><a href="http://google.com">این یک لینک است</a></p><ul dir="ltr"><li>this is li1</li><li>this is li2</li></ul><p dir="ltr"><em>متن ایتالیک</em></p><p dir="ltr"><strong>متن بولد</strong></p><p dir="ltr"><em><strong>متن بولد و ایتالیک</strong></em></p><p dir="ltr">تمامی متن های بالا راست چین اند(این متن معمولی است)</p><p dir="ltr"><a href="http://google.com">این یک لینک است</a></p><ul dir="ltr"><li>this is li1</li><li>this is li2</li></ul>', 100000, 20, 21, 'coeducational', '2018-10-24', '2018-11-30', 1, '2018-11-18 20:30:00', '2018-12-09 19:15:41', NULL),
(2, 2, 2, 'دوره جدید آموزش انگلیسی', '<p>این دوره مثل دوره های قبل روزهای چهارشنبه در شهدا برگزار میشود</p>', 0, 15, 41, 'coeducational', '2018-10-27', '2018-11-27', 1, '2018-11-08 20:30:00', '2018-11-28 21:58:01', NULL),
(3, 2, 3, 'یک دوره جدید مجازی', '<p>یک دوره جدید مجازییک دوره جدید مجازییک دوره جدید مجازی</p>', 20000, 10, 20, 'coeducational', '2018-11-25', '2018-11-25', 1, '2018-11-24 21:51:34', '2018-11-24 21:51:34', NULL),
(4, 2, 1, 'یک دوره جدید مجازی2', '<p>یک دوره جدید مجازییک دوره جدید مجازییک دوره جدید مجازییک دوره جدید مجازییک دوره جدید مجازییک دوره جدید مجازی22222</p>', 30000, 12, 15, 'female', '2018-11-25', '2018-11-25', 1, '2018-11-24 21:53:04', '2018-11-24 22:01:30', '2018-11-24 22:01:30'),
(5, 17, 1, 'دوره جدید هوش مصنوعی', '<p dir="rtl">یک دوره جدید برای آموزش هوش مصنوعی میباشد</p>', 25000, 15, 20, 'coeducational', '2018-12-15', '2018-12-15', 1, '2018-12-15 10:17:18', '2018-12-15 10:18:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_extra_infos`
--

CREATE TABLE IF NOT EXISTS `master_extra_infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `master_id` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  `docs_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `master_extra_infos_master_id_foreign` (`master_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `master_extra_infos`
--

INSERT INTO `master_extra_infos` (`id`, `master_id`, `content`, `docs_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'دارای مدرک دکترا از دانشگاه شریف در رشته آیتی و برگزاری 10 دوره در گذشته1', 'http://azaruniv-training.ud/uploads/files/master_docs/2018/11/دکتر علی احمدی.txt', '2018-10-31 20:30:00', '2018-11-28 21:25:05', NULL),
(2, 14, 'دارای مدرک دکترا از دانشگاه شریف در رشته آیتی و برگزاری 10 دوره در گذشته1', 'http://azaruniv-training.ud/uploads/files/master_docs/2018/11/دکتر علی احمدی.txt', '2018-10-31 20:30:00', '2018-11-28 21:25:05', NULL),
(3, 15, 'خالی', '', '2018-11-29 12:25:45', '2018-11-29 12:25:45', NULL),
(4, 17, 'خالی', '', '2018-12-15 10:24:45', '2018-12-15 10:24:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(10) unsigned NOT NULL,
  `type` varchar(255) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `is_student_sent` tinyint(1) NOT NULL,
  `text` text NOT NULL,
  `is_seen` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_course_id_foreign` (`course_id`),
  KEY `messages_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `course_id`, `type`, `user_id`, `is_student_sent`, `text`, `is_seen`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'public', 2, 0, 'این متن برای تست پیام های استاد برای دوره میباشداین متن برای تست پیام های استاد برای دوره میباشداین متن برای تست پیام های استاد برای دوره میباشداین متن برای تست پیام های استاد برای دوره میباشداین متن برای تست پیام های استاد برای دوره میباشد', 0, '2018-10-31 20:30:00', '2018-11-09 20:30:00', NULL),
(2, 1, 'public', 2, 0, 'این متن برای تست پیام های استاد برای دوره میباشد\r\nدومین بار', 0, '2018-10-31 20:30:00', '2018-11-09 20:30:00', NULL),
(3, 1, 'public', 2, 0, 'hello from master', 1, '2018-11-20 11:00:29', '2018-11-20 11:00:29', NULL),
(4, 2, 'public', 2, 0, 'fdfd', 1, '2018-11-20 12:03:49', '2018-11-20 12:03:49', NULL),
(5, 2, 'public', 2, 0, 'fdfd', 1, '2018-11-20 12:03:57', '2018-11-20 12:03:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=32 ;

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
(15, '2018_11_07_224823_add_gender_to_courses_table', 3),
(16, '2018_11_07_223722_create_categories_table', 4),
(18, '2018_11_07_224248_add_category_id_to_courses_table', 5),
(20, '2018_11_08_145846_add_is_male_to_users_table', 6),
(21, '2018_11_10_134504_create_sliders_table', 7),
(22, '2018_11_10_140202_create_posts_table', 8),
(23, '2018_11_12_195200_add_is_open_to_courses_table', 9),
(24, '2018_11_17_174135_add_text_to_messages_table', 10),
(25, '2018_11_28_212012_add_major_to_users_table', 11),
(26, '2018_11_29_002254_add_master_docs_file_path_to_master_extra_infos_table', 12),
(27, '2018_11_29_161936_create_recommended_courses_table', 13),
(28, '2018_12_06_220135_add_has_certificate_to_user_courses_table', 14),
(29, '2018_12_06_220945_add_duration_to_courses_table', 15),
(30, '2018_12_07_152620_create_orders_table', 16),
(31, '2018_12_07_180904_add_system_trace_no_to_payments_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_course_id_foreign` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `course_id`, `amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 8, 1, 1000000, '2018-12-07 15:05:47', '2018-12-07 15:05:47', NULL),
(3, 8, 1, 1000000, '2018-12-07 19:18:57', '2018-12-07 19:18:57', NULL),
(4, 8, 1, 1000000, '2018-12-07 19:19:53', '2018-12-07 19:19:53', NULL),
(5, 8, 1, 1000000, '2018-12-07 19:20:44', '2018-12-07 19:20:44', NULL),
(6, 8, 1, 1000000, '2018-12-07 19:21:23', '2018-12-07 19:21:23', NULL),
(7, 8, 1, 1000000, '2018-12-07 19:22:25', '2018-12-07 19:22:25', NULL),
(8, 10, 3, 200000, '2018-12-15 08:54:47', '2018-12-15 08:54:47', NULL),
(9, 10, 3, 200000, '2018-12-15 08:57:06', '2018-12-15 08:57:06', NULL),
(10, 10, 3, 200000, '2018-12-15 09:05:39', '2018-12-15 09:05:39', NULL),
(11, 8, 5, 250000, '2018-12-15 10:21:55', '2018-12-15 10:21:55', NULL),
(12, 8, 5, 250000, '2018-12-15 11:03:32', '2018-12-15 11:03:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('elnaz1@gmail.com', '$2y$10$pHfhUerDIk.XmEDUN.0isO534Ev9e6ufplAoETm81HmaJMY9WZXvG', '2018-12-10 12:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `amount` int(11) NOT NULL,
  `is_success` tinyint(1) NOT NULL,
  `retrival_ref_no` varchar(255) DEFAULT NULL,
  `system_trace_no` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payments_course_id_foreign` (`course_id`),
  KEY `payments_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `course_id`, `user_id`, `amount`, `is_success`, `retrival_ref_no`, `system_trace_no`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, 100000, 1, '12345', NULL, '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(2, 1, 6, 100000, 1, '34343', NULL, '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(3, 1, 7, 100000, 1, '34343', NULL, '2018-11-08 20:30:00', '2018-11-07 20:30:00', NULL),
(4, 1, 8, 100000, 1, '34343', NULL, '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(5, 1, 8, 100000, 1, '34343', NULL, '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(6, 1, 8, 100000, 0, '34343', NULL, '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imageable_id` int(10) unsigned NOT NULL,
  `imageable_type` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `imageable_id`, `imageable_type`, `path`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_male.png', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(2, 1, 'App\\Course', 'uploads/images/courses/course1.jpg', 'http://azaruniv-training.ud/uploads/images/courses/course1.jpg', '2018-11-07 20:30:00', '2018-11-24 22:29:37', '2018-11-24 22:29:37'),
(3, 7, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_female.png', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(4, 8, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_female.png', '2018-11-07 20:30:00', '2018-11-18 17:37:26', '2018-11-18 17:37:26'),
(5, 1, 'App\\Slider', 'uploads/images/sliders/1.jpg', 'http://azaruniv-training.ud/uploads/images/sliders/1.jpg', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(6, 2, 'App\\Slider', 'uploads/images/sliders/2.jpg', 'http://azaruniv-training.ud/uploads/images/sliders/2.jpg', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(7, 3, 'App\\Slider', 'uploads/images/sliders/3.jpg', 'http://azaruniv-training.ud/uploads/images/sliders/3.jpg', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(8, 4, 'App\\Slider', 'uploads/images/sliders/4.jpg', 'http://azaruniv-training.ud/uploads/images/sliders/4.jpg', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(9, 5, 'App\\Slider', 'uploads/images/sliders/5.jpg', 'http://azaruniv-training.ud/uploads/images/sliders/5.jpg', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(10, 1, 'App\\Post', 'uploads/images/posts/1.jpg', 'http://azaruniv-training.ud/uploads/images/posts/1.jpg', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(11, 2, 'App\\Post', 'uploads/images/posts/2.jpg', 'http://azaruniv-training.ud/uploads/images/posts/2.jpg', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(12, 3, 'App\\Post', 'uploads/images/posts/3.jpg', 'http://azaruniv-training.ud/uploads/images/posts/3.jpg', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(13, 4, 'App\\Post', 'uploads/images/posts/4.jpg', 'http://azaruniv-training.ud/uploads/images/posts/4.jpg', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(14, 2, 'App\\Course', 'uploads/images/courses/2018/11/25d02h03mcvAV1MMo58.jpg', 'http://azaruniv-training.ud/uploads/images/courses/course1.jpg', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(15, 5, 'App\\Post', 'uploads/images/posts/4.jpg', 'http://azaruniv-training.ud/uploads/images/posts/4.jpg', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(16, 2, 'App\\User', 'uploads/images/users/avatar_master_male.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_master_male.png', '2018-11-07 20:30:00', '2018-11-20 11:39:48', '2018-11-20 11:39:48'),
(17, 9, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_male.png', '2018-11-17 13:33:25', '2018-11-17 13:33:25', NULL),
(18, 10, 'App\\User', 'uploads/images/users/avatar_female.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_female.png', '2018-11-17 14:57:20', '2018-11-17 14:57:20', NULL),
(19, 8, 'App\\User', 'uploads/images/users/2018/11/18d09h07mreM0jz6wml.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/18d09h07mreM0jz6wml.jpg', '2018-11-18 17:37:26', '2018-11-18 17:38:02', '2018-11-18 17:38:02'),
(20, 8, 'App\\User', 'uploads/images/users/2018/11/18d09h08mtLpKRmsbsD.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/18d09h08mtLpKRmsbsD.jpg', '2018-11-18 17:38:02', '2018-11-18 18:07:35', '2018-11-18 18:07:35'),
(21, 8, 'App\\User', 'uploads/images/users/2018/11/18d09h37mToFX9fqIB1.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/18d09h37mToFX9fqIB1.jpg', '2018-11-18 18:07:35', '2018-11-19 10:55:47', '2018-11-19 10:55:47'),
(22, 8, 'App\\User', 'uploads/images/users/2018/11/19d02h25mgMkhfOh1PG.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/19d02h25mgMkhfOh1PG.jpg', '2018-11-19 10:55:47', '2018-11-19 10:57:04', '2018-11-19 10:57:04'),
(23, 8, 'App\\User', 'uploads/images/users/2018/11/19d02h27mlfqPU8sTgQ.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/19d02h27mlfqPU8sTgQ.jpg', '2018-11-19 10:57:04', '2018-11-19 11:00:39', '2018-11-19 11:00:39'),
(24, 8, 'App\\User', 'uploads/images/users/2018/11/19d02h30mEmZFCkNI09.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/19d02h30mEmZFCkNI09.jpg', '2018-11-19 11:00:39', '2018-11-19 11:03:22', '2018-11-19 11:03:22'),
(25, 6, 'App\\User', 'uploads/images/users/2018/11/19d02h33msCdlHibFqw.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/19d02h33msCdlHibFqw.jpg', '2018-11-19 11:03:22', '2018-11-20 11:17:41', '2018-11-20 11:17:41'),
(26, 8, 'App\\User', 'uploads/images/users/2018/11/19d08h19mlstHd9yolD.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/19d08h19mlstHd9yolD.jpg', '2018-11-19 16:49:15', '2018-11-23 11:16:57', '2018-11-23 11:16:57'),
(27, 6, 'App\\User', 'uploads/images/users/2018/11/20d02h47mmXVbR1ICl2.JPG', 'http://azaruniv-training.ud/uploads/images/users/2018/11/20d02h47mmXVbR1ICl2.JPG', '2018-11-20 11:17:41', '2018-11-20 11:17:41', NULL),
(28, 2, 'App\\User', 'uploads/images/users/2018/11/20d03h09mpxANLBJESP.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/20d03h09mpxANLBJESP.jpg', '2018-11-20 11:39:48', '2018-11-20 11:41:18', '2018-11-20 11:41:18'),
(29, 2, 'App\\User', 'uploads/images/users/2018/11/20d03h11m5czpNBPoDl.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/20d03h11m5czpNBPoDl.jpg', '2018-11-20 11:41:18', '2018-11-20 11:42:56', '2018-11-20 11:42:56'),
(30, 2, 'App\\User', 'uploads/images/users/2018/11/20d03h12mGu6GGUjoWZ.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/20d03h12mGu6GGUjoWZ.jpg', '2018-11-20 11:42:56', '2018-11-20 11:53:32', '2018-11-20 11:53:32'),
(31, 2, 'App\\User', 'uploads/images/users/2018/11/20d03h23mSCHaFkFKZq.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/20d03h23mSCHaFkFKZq.jpg', '2018-11-20 11:53:32', '2018-11-20 12:19:23', '2018-11-20 12:19:23'),
(32, 2, 'App\\User', 'uploads/images/users/2018/11/20d03h49m7LUInlcUPV.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/20d03h49m7LUInlcUPV.jpg', '2018-11-20 12:19:23', '2018-11-20 12:19:23', NULL),
(33, 8, 'App\\User', 'uploads/images/users/2018/11/23d02h46mW0rdiKxvZs.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/23d02h46mW0rdiKxvZs.jpg', '2018-11-23 11:16:57', '2018-11-23 11:35:44', '2018-11-23 11:35:44'),
(34, 8, 'App\\User', 'uploads/images/users/2018/11/23d03h05mayJ6sm7xL8.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/23d03h05mayJ6sm7xL8.jpg', '2018-11-23 11:35:44', '2018-11-23 11:35:44', NULL),
(35, 6, 'App\\Post', 'uploads/images/users/2018/11/24d11h35mZQNoF0oW8W.jpg', 'http://azaruniv-training.ud/uploads/images/users/2018/11/24d11h35mZQNoF0oW8W.jpg', '2018-11-24 20:05:36', '2018-11-24 20:05:36', NULL),
(36, 3, 'App\\Course', 'uploads/images/courses/2018/11/25d01h21mb4GOOwFCAx.jpg', 'http://azaruniv-training.ud/uploads/images/courses/2018/11/25d01h21mb4GOOwFCAx.jpg', '2018-11-24 21:51:34', '2018-11-24 21:51:34', NULL),
(37, 4, 'App\\Course', 'uploads/images/courses/2018/11/25d01h23mK0lTq4hCEv.jpg', 'http://azaruniv-training.ud/uploads/images/courses/2018/11/25d01h23mK0lTq4hCEv.jpg', '2018-11-24 21:53:04', '2018-11-24 21:53:04', NULL),
(38, 1, 'App\\Course', 'uploads/images/courses/2018/11/25d01h59mS1fPycPf2B.JPG', 'http://azaruniv-training.ud/uploads/images/courses/2018/11/25d01h59mS1fPycPf2B.JPG', '2018-11-24 22:29:37', '2018-11-24 22:32:08', '2018-11-24 22:32:08'),
(39, 1, 'App\\Course', 'uploads/images/courses/2018/11/25d02h02m2PQ6SSXgyS.jpg', 'http://azaruniv-training.ud/uploads/images/courses/2018/11/25d02h02m2PQ6SSXgyS.jpg', '2018-11-24 22:32:08', '2018-11-24 22:33:40', '2018-11-24 22:33:40'),
(40, 1, 'App\\Course', 'uploads/images/courses/2018/11/25d02h03mcvAV1MMo58.jpg', 'http://azaruniv-training.ud/uploads/images/courses/2018/11/25d02h03mcvAV1MMo58.jpg', '2018-11-24 22:33:40', '2018-11-24 22:33:40', NULL),
(41, 6, 'App\\Slider', 'uploads/images/sliders/2018/11/28d08h46mYrQ9pLuAkp.jpg', 'http://azaruniv-training.ud/uploads/images/sliders/2018/11/28d08h46mYrQ9pLuAkp.jpg', '2018-11-28 17:16:58', '2018-11-28 17:16:58', NULL),
(42, 11, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_male.png', '2018-11-28 18:05:47', '2018-11-28 18:05:47', NULL),
(43, 12, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_male.png', '2018-11-28 18:11:30', '2018-11-28 18:11:30', NULL),
(44, 13, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_male.png', '2018-11-28 18:13:25', '2018-11-28 18:13:25', NULL),
(45, 7, 'App\\Post', 'uploads/images/posts/2018/11/29d12h42mMFo58cKjA5.png', 'http://azaruniv-training.ud/uploads/images/posts/2018/11/29d12h42mMFo58cKjA5.png', '2018-11-29 09:12:09', '2018-11-29 09:12:09', NULL),
(46, 14, 'App\\User', 'uploads/images/users/avatar_master_male.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_master_female.png', '2018-11-29 11:46:20', '2018-11-29 11:46:20', NULL),
(47, 15, 'App\\User', 'uploads/images/users/avatar_master_female.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_master_female.png', '2018-11-29 12:25:45', '2018-11-29 12:25:45', NULL),
(48, 16, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_male.png', '2018-12-06 20:33:32', '2018-12-06 20:33:32', NULL),
(49, 8, 'App\\Post', 'uploads/images/posts/2018/12/15d01h08mMRaJFym4NS.jpg', 'http://azaruniv-training.ud/uploads/images/posts/2018/12/15d01h08mMRaJFym4NS.jpg', '2018-12-15 09:38:36', '2018-12-15 09:38:36', NULL),
(50, 5, 'App\\Course', 'uploads/images/courses/2018/12/15d01h47mvBq86NNqk4.jpg', 'http://azaruniv-training.ud/uploads/images/courses/2018/12/15d01h47mvBq86NNqk4.jpg', '2018-12-15 10:17:18', '2018-12-15 10:17:18', NULL),
(51, 4, 'App\\Course', 'uploads/images/courses/2018/12/15d01h47mvBq86NNqk4.jpg', 'http://azaruniv-training.ud/uploads/images/courses/2018/12/15d01h47mvBq86NNqk4.jpg', '2018-12-15 10:17:18', '2018-12-15 10:17:18', NULL),
(52, 17, 'App\\User', 'uploads/images/users/avatar_master_male.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_master_male.png', '2018-12-15 10:24:45', '2018-12-15 10:24:45', NULL),
(53, 18, 'App\\User', 'uploads/images/users/avatar_male.png', 'http://azaruniv-training.ud/uploads/images/users/avatar_male.png', '2018-12-15 11:42:54', '2018-12-15 11:42:54', NULL),
(54, 7, 'App\\Slider', 'uploads/images/sliders/2018/12/15d05h35mFMzVI0XE7X.jpg', 'http://azaruniv-training.ud/uploads/images/sliders/2018/12/15d05h35mFMzVI0XE7X.jpg', '2018-12-15 14:05:48', '2018-12-15 14:05:48', NULL),
(55, 8, 'App\\Slider', 'uploads/images/sliders/2018/12/15d05h56m8Q4GuFGKg8.jpg', 'http://azaruniv-training.ud/uploads/images/sliders/2018/12/15d05h56m8Q4GuFGKg8.jpg', '2018-12-15 14:26:28', '2018-12-15 14:26:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'post title 1', 'post content 1', '2018-10-31 20:30:00', '2018-11-24 20:39:08', NULL),
(2, 'post title 2', 'post content 2', '2018-11-09 20:30:00', '2018-11-09 20:30:00', NULL),
(3, 'post title 3', 'post content 3', '2018-11-09 20:30:00', '2018-11-09 20:30:00', NULL),
(4, 'post title 4', 'post content 4', '2018-11-09 20:30:00', '2018-11-09 20:30:00', NULL),
(5, 'post title 5', 'post content 5', '2018-11-09 20:30:00', '2018-11-09 20:30:00', NULL),
(6, 'یک خبر جدید', '<p dir="rtl">یک خبر جدید از <strong>مدیر</strong></p>', '2018-11-24 20:05:36', '2018-11-24 20:05:36', NULL),
(7, 'جدید', '<p dir="rtl"><em>متن ایتالیک</em></p><p dir="rtl"><strong>متن بولد</strong></p><p dir="rtl"><em><strong>متن بولد و ایتالیک</strong></em></p><p dir="rtl">تمامی متن های بالا راست چین اند(این متن معمولی است)</p><p dir="rtl"><a href="http://google.com">این یک لینک است</a></p><ul dir="rtl"><li>this is li1</li><li>this is li2</li></ul><p dir="rtl"><em>متن ایتالیک</em></p><p dir="rtl"><strong>متن بولد</strong></p><p dir="rtl"><em><strong>متن بولد و ایتالیک</strong></em></p><p dir="rtl">تمامی متن های بالا راست چین اند(این متن معمولی است)</p><p dir="rtl"><a href="http://google.com">این یک لینک است</a></p><ul dir="rtl"><li>this is li1</li><li>this is li2</li></ul><p dir="rtl"><em>متن ایتالیک</em></p><p dir="rtl"><strong>متن بولد</strong></p><p dir="rtl"><em><strong>متن بولد و ایتالیک</strong></em></p><p dir="rtl">تمامی متن های بالا راست چین اند(این متن معمولی است)</p><p dir="rtl"><a href="http://google.com">این یک لینک است</a></p><ul dir="rtl"><li>this is li1</li><li>this is li2</li></ul><p dir="rtl"><em>متن ایتالیک</em></p><p dir="rtl"><strong>متن بولد</strong></p><p dir="rtl"><em><strong>متن بولد و ایتالیک</strong></em></p><p dir="rtl">تمامی متن های بالا راست چین اند(این متن معمولی است)</p><p dir="rtl"><a href="http://google.com">این یک لینک است</a></p><ul dir="rtl"><li>this is li1</li><li>this is li2</li></ul><p dir="rtl"><em>متن ایتالیک</em></p><p dir="rtl"><strong>متن بولد</strong></p><p dir="rtl"><em><strong>متن بولد و ایتالیک</strong></em></p><p dir="rtl">تمامی متن های بالا راست چین اند(این متن معمولی است)</p><p dir="rtl"><a href="http://google.com">این یک لینک است</a></p><ul dir="rtl"><li>this is li1</li><li>this is li2</li></ul><p dir="rtl"><em>متن ایتالیک</em></p><p dir="rtl"><strong>متن بولد</strong></p><p dir="rtl"><em><strong>متن بولد و ایتالیک</strong></em></p><p dir="rtl">تمامی متن های بالا راست چین اند(این متن معمولی است)</p><p dir="rtl"><a href="http://google.com">این یک لینک است</a></p><ul dir="rtl"><li>this is li1</li><li>this is li2</li></ul>', '2018-11-29 09:12:09', '2018-12-15 09:36:37', '2018-12-15 09:36:37'),
(8, 'افتتاح سایت جدید مدیریت آموزشهای تخصصی', '<p>افتتاح سایت جدید مدیریت آموزشهای تخصصی</p><p>افتتاح سایت جدید مدیریت آموزشهای تخصصی</p><p>افتتاح سایت جدید مدیریت آموزشهای تخصصی</p><p>افتتاح سایت جدید مدیریت آموزشهای تخصصی</p><p>&nbsp;</p>', '2018-12-15 09:38:36', '2018-12-15 09:38:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recommended_courses`
--

CREATE TABLE IF NOT EXISTS `recommended_courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `recommended_courses_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `recommended_courses`
--

INSERT INTO `recommended_courses` (`id`, `user_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 8, 'دوره حسابداری', '2018-11-29 13:05:39', '2018-12-01 10:31:15', NULL),
(2, 8, 'دوره بازاریابی', '2018-10-01 16:58:13', '2018-12-01 10:31:15', NULL),
(3, 8, 'دوره حسابداری نوین', '2018-12-15 09:16:47', '2018-12-15 09:16:47', NULL),
(4, 11, '555554', '2018-12-15 10:05:48', '2018-12-15 10:05:48', NULL),
(5, 18, 'دوره برنامه نویسی', '2018-12-15 11:45:15', '2018-12-15 11:45:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '2018-11-06 20:30:00', '2018-11-06 20:30:00', NULL),
(2, 'master', '2018-11-06 20:30:00', '2018-11-06 20:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_infos`
--

CREATE TABLE IF NOT EXISTS `site_infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `site_infos`
--

INSERT INTO `site_infos` (`id`, `key`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'phone_number', '09145821998', '2018-11-07 20:30:00', '2018-11-25 10:41:30', NULL),
(2, 'email', 'support@azaruniv.ac.ir', '2018-11-07 20:30:00', '2018-11-07 20:30:00', NULL),
(3, 'address', '35 کیلومتری جاده تبریز-آذرشهر  - دانشگاه شهید مدنی - مدیریت پژوهشی', '2018-11-07 20:30:00', '2018-11-29 08:26:16', NULL),
(4, 'postal_code', '567866', '2018-11-07 20:30:00', '2018-11-25 10:41:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `on_click` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `on_click`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'slider1', 'http://www.google.com', '2018-11-09 20:30:00', '2018-12-15 14:00:40', '2018-12-15 14:00:40'),
(2, 'slider2', 'http://www.google.com', '2018-11-09 20:30:00', '2018-12-15 14:00:38', '2018-12-15 14:00:38'),
(3, 'slider3', 'http://www.google.com', '2018-11-09 20:30:00', '2018-12-15 14:00:32', '2018-12-15 14:00:32'),
(4, 'slider4', '', '2018-11-09 20:30:00', '2018-12-15 14:00:37', '2018-12-15 14:00:37'),
(5, 'slider5', 'http://www.yahoo.com', '2018-11-09 20:30:00', '2018-12-15 14:00:35', '2018-12-15 14:00:35'),
(6, 'new slider', 'www.google.com', '2018-11-28 17:16:58', '2018-11-28 17:17:46', '2018-11-28 17:17:46'),
(7, 'شروع به کار سایت مدیریت آموزشهای تخصصی دانشگاه شهید مدنی آذربایجان در هفته پژوهش', ' ', '2018-12-15 14:05:48', '2018-12-15 14:26:32', '2018-12-15 14:26:32'),
(8, 'شروع به کار سایت آموزشهای تخصصی دانشگاه شهید مدنی آذربایجان در هفته پژوهش', ' ', '2018-12-15 14:26:28', '2018-12-15 14:26:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `text` text NOT NULL,
  `is_user_sent` tinyint(1) NOT NULL,
  `is_seen` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tickets_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `text`, `is_user_sent`, `is_seen`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 8, 'hello from admin', 0, 1, '2018-11-15 20:30:00', '2018-12-01 10:31:15', NULL),
(2, 8, 'hello from user', 1, 1, '2018-11-14 20:30:00', '2018-12-01 10:31:15', NULL),
(3, 8, 'e', 1, 1, '2018-11-18 18:04:59', '2018-12-01 10:31:15', NULL),
(4, 8, 'hello', 1, 1, '2018-11-18 18:05:06', '2018-12-01 10:31:15', NULL),
(5, 10, 'hello', 1, 1, '2018-11-18 18:05:13', '2018-11-30 12:03:44', NULL),
(6, 9, 'fjdfdjl', 1, 1, '2018-11-18 18:05:25', '2018-11-30 12:03:44', NULL),
(7, 7, 'سلام میخاستم بدونم دوره های زبان خارجی کی شروع میشود', 1, 1, '2018-11-18 18:06:44', '2018-11-30 12:03:44', NULL),
(8, 6, 'jfl;f\r\nfd\r\nfdf\r\ndfd', 1, 1, '2018-11-19 10:42:42', '2018-11-30 12:03:44', NULL),
(9, 8, 'اتااتن', 1, 1, '2018-11-19 16:49:37', '2018-12-01 10:31:15', NULL),
(10, 7, 'نتنتت', 1, 1, '2018-11-19 16:50:12', '2018-11-30 12:03:44', NULL),
(11, 2, 'salam', 1, 1, '2018-11-20 12:12:46', '2018-11-20 12:12:46', NULL),
(12, 13, 'hello from admin to master', 0, 0, '2018-11-20 12:12:46', '2018-11-20 12:13:15', NULL),
(13, 2, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 1, 1, '2018-11-20 12:14:14', '2018-11-30 12:02:17', NULL),
(14, 11, 'hello admin', 1, 1, '2018-11-28 18:06:37', '2018-11-28 18:06:37', NULL),
(15, 2, 'hello', 1, 1, '2018-11-29 12:35:11', '2018-11-30 12:02:18', NULL),
(16, 11, 'سلام', 0, 1, '2018-11-30 12:21:00', '2018-11-30 12:22:58', NULL),
(17, 11, 'سلام\r\nمدیر', 1, 1, '2018-11-30 12:23:15', '2018-11-30 12:23:45', NULL),
(18, 8, 'hello', 0, 1, '2018-11-30 12:41:16', '2018-12-01 10:31:15', NULL),
(19, 11, 'dffd', 0, 1, '2018-11-30 12:43:24', '2018-12-15 10:05:34', NULL),
(20, 11, 'fdfd', 0, 1, '2018-11-30 12:43:29', '2018-12-15 10:05:34', NULL),
(21, 10, 'hhfd', 0, 0, '2018-11-30 12:43:55', '2018-11-30 12:43:55', NULL),
(22, 10, 'hello from admin', 0, 0, '2018-11-30 12:44:04', '2018-11-30 12:44:04', NULL),
(23, 2, 'fdfd', 0, 1, '2018-11-30 12:44:33', '2018-11-30 13:23:05', NULL),
(24, 2, 'fdfd', 1, 1, '2018-11-30 13:28:19', '2018-11-30 13:28:41', NULL),
(25, 2, 'hello', 0, 1, '2018-11-30 16:52:02', '2018-11-30 16:52:18', NULL),
(26, 8, 'hello from admin', 0, 1, '2018-11-30 16:53:41', '2018-12-01 10:31:15', '2018-12-01 10:31:15'),
(27, 13, 'این یک پیام به همه دانشجویان میباشد', 0, 0, '2018-11-30 17:35:24', '2018-11-30 17:35:24', NULL),
(28, 12, 'این یک پیام به همه دانشجویان میباشد', 0, 0, '2018-11-30 17:35:24', '2018-11-30 17:35:24', NULL),
(29, 11, 'این یک پیام به همه دانشجویان میباشد', 0, 1, '2018-11-30 17:35:24', '2018-12-15 10:05:34', NULL),
(30, 10, 'این یک پیام به همه دانشجویان میباشد', 0, 0, '2018-11-30 17:35:24', '2018-11-30 17:35:24', NULL),
(31, 9, 'این یک پیام به همه دانشجویان میباشد', 0, 0, '2018-11-30 17:35:24', '2018-11-30 17:35:24', NULL),
(32, 8, 'این یک پیام به همه دانشجویان میباشد', 0, 1, '2018-11-30 17:35:24', '2018-12-01 10:31:15', '2018-12-01 10:31:15'),
(33, 7, 'این یک پیام به همه دانشجویان میباشد', 0, 0, '2018-11-30 17:35:24', '2018-11-30 17:35:24', NULL),
(34, 6, 'این یک پیام به همه دانشجویان میباشد', 0, 1, '2018-11-30 17:35:24', '2018-12-06 18:36:00', NULL),
(35, 3, 'این یک پیام به همه دانشجویان میباشد', 0, 0, '2018-11-30 17:35:25', '2018-11-30 17:35:25', NULL),
(36, 2, 'this is a message for all masters', 0, 1, '2018-11-30 17:36:55', '2018-11-30 17:37:13', NULL),
(37, 14, 'this is a message for all masters', 0, 0, '2018-11-30 17:36:55', '2018-11-30 17:36:55', NULL),
(38, 15, 'this is a message for all masters', 0, 1, '2018-11-30 17:36:55', '2018-12-15 10:04:35', NULL),
(39, 8, 'hello', 1, 1, '2018-12-06 18:55:00', '2018-12-06 18:55:05', NULL),
(40, 8, 'jfdjfkld', 1, 1, '2018-12-06 18:55:25', '2018-12-06 18:55:34', NULL),
(41, 2, 'hello from detail', 0, 1, '2018-12-09 16:37:49', '2018-12-15 09:25:15', NULL),
(42, 8, 'hello from user detail', 0, 1, '2018-12-09 17:30:21', '2018-12-09 19:05:51', NULL),
(43, 2, 'hii', 1, 1, '2018-12-15 09:25:32', '2018-12-15 09:44:47', NULL),
(44, 2, 'this message for all masters', 0, 0, '2018-12-15 10:12:02', '2018-12-15 10:12:02', NULL),
(45, 14, 'this message for all masters', 0, 0, '2018-12-15 10:12:02', '2018-12-15 10:12:02', NULL),
(46, 15, 'this message for all masters', 0, 0, '2018-12-15 10:12:03', '2018-12-15 10:12:03', NULL),
(47, 18, 'dfd', 1, 1, '2018-12-15 11:44:59', '2018-12-15 11:45:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_male` tinyint(1) NOT NULL,
  `major` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `student_number` varchar(255) DEFAULT NULL,
  `national_code` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_mobile_unique` (`mobile`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `is_male`, `major`, `email`, `mobile`, `student_number`, `national_code`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'mohsen', 1, '', 'mohsen@gmail.com', '09145821998', NULL, '1570381399', '$2y$10$u0ttp8xBcdOLC1CmEvFmWep7iuLw1VlniXi7OTVFJEf7BWUp7zw6q', 'LP9aHfACXv6g4XFGKPfCai5JT5FWUiTXrTwql4ZmmXAU0q8Ej20Vb61OUylA', '2018-11-06 20:30:00', '2018-12-09 20:21:35', NULL),
(2, 'دکتر علی احمدی', 1, '', 'mohsen1@gmail.com', '09145821999', NULL, '1570381399', '$2y$10$58RosOW/Ewah1.eeFcuxKOYuNOqeuG.vKVNuAdCDZLsXHhWvuRx1C', 'hd6ZGTiy3srH3QiqEBE7g9UUKVspg6RqLrx41UR8uivtN6ufMjQ6vg6vNCTe', '2018-11-06 20:30:00', '2018-12-06 19:40:30', NULL),
(3, 'mohsen2', 1, 'عمران', 'mohsen2@gmail.com', '09145821990', '931831251', '1570381399', '$2y$10$7wR1IlXCen0hhObxA6d9GOktJ5Ye999LS9ieheo07zrg/LbFhk1oy', 'pJQl12OKIGnDPo5WbfWZLRDInuwO2FPOQmzPjDAWChgfp4xHRugq1iQrLNSb', '2018-11-06 20:30:00', '2018-11-06 20:30:00', NULL),
(6, 'mohsen3', 1, 'فناوری اطلاعات', 'mohsen3@gmail.com', '09145821991', '931831251', '1570381399', '$2y$10$7wR1IlXCen0hhObxA6d9GOktJ5Ye999LS9ieheo07zrg/LbFhk1oy', 'o41IavA5vsPhf2z5c3Ukw4hVGp5m2uJjKYmjT9CUSHLDmKcsXD4Bvx9dDaDW', '2018-11-06 20:30:00', '2018-11-06 20:30:00', NULL),
(7, 'maryam1', 0, 'حسابداری', 'maryam1@gmail.com', '09145821994', NULL, '1570381395', '$2y$10$7wR1IlXCen0hhObxA6d9GOktJ5Ye999LS9ieheo07zrg/LbFhk1oy', 'efioJJU8ky7m0ZtrhqnVyOUqovplIFwrT3kRhAByhzq5o1b2paq5EqJCVqte', '2018-11-06 20:30:00', '2018-11-06 20:30:00', NULL),
(8, 'الناز احمدی', 0, 'ریاضی', 'elnaz1@gmail.com', '09145678976', '13759875', '1376874566', '$2y$10$u0ttp8xBcdOLC1CmEvFmWep7iuLw1VlniXi7OTVFJEf7BWUp7zw6q', 'mXhQ0mNllrU6Hq3SOi9OHqUOzKGkuEES5UVRldKyYYy52SpeqRnqSsKtIPtl', '2018-11-08 13:30:06', '2018-12-06 19:19:08', NULL),
(9, 'mohsen4', 1, 'حقوق', 'mohsen4@gmail.com', '09185879636', '1', '5695789456', '$2y$10$.bl.a0WDtupFSiJ3J6Bf9upBIbWLMPJ25TPf4FIJQrNM99KBfHv/m', 'iTBUKwVq0BEBBBIDQwEaWSDLXsuinyBFpzbSCC1OX8mIFhJQ8pC1x5e7UWgt', '2018-11-17 13:33:25', '2018-11-17 13:33:25', NULL),
(10, 'elnaz2', 0, 'زبان خارجی', 'elnaz2@gmail.com', '09165897845', '931546879', '1246973266', '$2y$10$b5xMcEh/bQQAX.jXaOvRJucy94hEP6Dr4A5VhuSZfp1Fu/fbuV9r.', '6dK5IJC6mhZahnJngdQVXswZ4kkKqIIZBT0uAh6OKv1geAyV8IYymK3ZPLpH', '2018-11-17 14:57:20', '2018-11-17 14:57:20', NULL),
(11, 'محسن فرجامی', 1, 'مهندسی مکانیک', 'mohsen5@gmail.com', '09675678765', NULL, '1376578987', '$2y$10$FzO4lEi24IhE678p1k3Q1OtFswolz0ZuyprLCoWtsuLAn53dC79.m', 'vrGqeEgCMj3e6wSfkkiERLY4MkCIDrgiJgdhfnnDyHGhi2ZXaNaFsKubLWlF', '2018-11-28 18:05:47', '2018-11-28 18:05:47', NULL),
(12, 'علی احمدی', 1, 'برق', 'ali1@gmail.com', '09765434567', '909876543', '1345658790', '$2y$10$zpuv4jkt5hwcdeD3gvVMUOLHev98YepCOQLmjELKPoCYGZXZncD/m', 'aybBGTAWLQ3YoggljN27pO1pPfyFtTzfQsjacXkhTufxCvymu27PYjv50PTj', '2018-11-28 18:11:29', '2018-11-28 18:11:29', NULL),
(13, 'علی احمدی', 1, 'فناوری اطلاعات', 'ali2@gmail.com', '08745678976', NULL, '5676430977', '$2y$10$oJs1JUjMBewQm2lF1XOfBODPwzBq.eI73Ol1r/P1QtMtUfwvjPA6m', 'CMR1Z0G9p1aD5rSPhvIrY0P7LUOBHcXN0ep514k1cEeKNpb9TjEulXrY9srX', '2018-11-28 18:13:25', '2018-11-28 18:13:25', NULL),
(14, 'دکتر علیرضا جباری', 1, NULL, 'alireza1@gmail.com', '0145879554', NULL, '7895462355', '$2y$10$SGTGpAqvqWT26JU.oq1u/.e3KnIuAIyMW/hF1DGjyaDyu.JU0Yj9q', NULL, '2018-11-29 11:46:20', '2018-11-29 11:46:20', NULL),
(15, 'دکتر فاطمه احمدی', 0, NULL, 'fateme1@gmail.com', '02136548966', NULL, '1203654899', '$2y$10$0S0hjOzsENpy1y2XnCL8luen.M43cxszTqZ1NiSPtrJVrJ8IWa.Zm', 'budEM46c0enwdKic2UYjkhKTz3naz3na52Rbz5OI6YSUELDzD9XcJbigXk5W', '2018-11-29 12:25:45', '2018-11-29 12:25:45', NULL),
(16, 'mohsen6', 1, 'فناوری اطلاعات', 'mohsen6@gmail.com', '09876789877', '765890653', '7893678966', '$2y$10$j70i3KAhhitAdGwLBAhiSePaouxC6QFlnyyxEepfQAm5ll81oUzwu', 'IX8hh3I5gzj0J9keuAvWPV3mipMe7KcUvfJ4tmcQUT7Fwc8Rr1ym0BVYTDSQ', '2018-12-06 20:33:32', '2018-12-06 20:33:32', NULL),
(17, 'دکتر علیرضا علیرضایی', 1, NULL, 'alireza2@gmail.com', '02159876335', NULL, '5463214588', '$2y$10$tgbpx/myuCP5wT0OIE6nNOq.c9Q20SbzLUGiCVVXOdXdQOgFoBFpC', NULL, '2018-12-15 10:24:45', '2018-12-15 10:24:45', NULL),
(18, 'علی عربگری', 1, 'فناوری اطلاعات', 'ali3@gmail.com', '09145423699', NULL, '1234567899', '$2y$10$b/i/WPPPmTuewkfIgUzAy.O9TMBURvfkeLMPzTQWJ2a8lfzJonlG2', 'oS4YwZ7z3HUo8O5b7HdFCHZhZD53q8kRQ2a40DDp8X3FcyfQaTYNs0h2s18Q', '2018-12-15 11:42:54', '2018-12-15 11:44:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_courses`
--

CREATE TABLE IF NOT EXISTS `user_courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `has_certificate` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_courses_student_id_foreign` (`student_id`),
  KEY `user_courses_course_id_foreign` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_courses`
--

INSERT INTO `user_courses` (`id`, `student_id`, `course_id`, `has_certificate`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 0, '2018-11-07 20:30:00', '2018-12-15 13:31:55', NULL),
(2, 6, 1, 0, '2018-11-08 20:30:00', '2018-12-15 13:31:55', NULL),
(3, 7, 1, 0, '2018-11-08 20:30:00', '2018-12-15 13:31:56', NULL),
(4, 7, 2, 1, '2018-11-08 20:30:00', '2018-12-15 12:12:19', NULL),
(6, 8, 2, 1, '2018-11-08 20:30:00', '2018-12-15 12:12:19', NULL),
(7, 8, 1, 1, '2018-11-08 20:30:00', '2018-12-15 13:52:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_role_user_id_foreign` (`user_id`),
  KEY `user_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2018-11-06 20:30:00', '2018-11-06 20:30:00', NULL),
(2, 2, 2, NULL, NULL, NULL),
(3, 14, 2, NULL, NULL, NULL),
(4, 15, 2, NULL, NULL, NULL),
(5, 17, 2, NULL, NULL, NULL);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
