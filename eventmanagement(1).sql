-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2025 at 04:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `address`, `image`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Nazrul Khan', NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$7Bu/sAc0dm2MG2SIpCA3.ecHTOmY41ujn17OCIT0Ifqi6O/6EoPd2', '2024-12-10 21:58:53', '2024-12-10 21:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `attendees`
--

CREATE TABLE `attendees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendees`
--

INSERT INTO `attendees` (`id`, `name`, `phone`, `address`, `photo`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Nusrat', '01789689865', 'Jatrabari, Dhaka.', 'images/20241213025521.jpg', 'nusrat@gmail.com', NULL, '$2y$10$iqvjDsj4RZB66hlDYdh.2OsQL/EYmghvTTSd91M97DMzCaCqs5.LO', NULL, '2024-12-12 20:55:21', '2024-12-12 20:55:21'),
(3, 'Arif Hasan', '017687967676', 'Nandipara, Dhaka.', 'images/20241216132233.jpg', 'arif@gmail.com', NULL, '$2y$10$6TS71Sztp900NN5UcRdoP.E3yNviFBTjpv8bym/5Toe0engX3q6ja', NULL, '2024-12-16 01:16:58', '2024-12-16 07:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `attendings`
--

CREATE TABLE `attendings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attendee_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `num_tickets` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(25) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `admin_id`, `title`, `photo`, `date`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, 'what an amazing Music Festival was last night', 'images/20241211040001.jpg', '2024-12-11', 'lfklsdjflk jclkslkjdf ksfkdlskndvvskfnlkjasv kdfkasnldk nakdnvljand kdjnvjkand', '2024-12-10 22:00:01', '2024-12-10 22:00:01'),
(2, 1, 'Waiting is end! Get ready to perform in front of world.', 'images/20241213031546.jpg', '2024-12-15', 'lcjflskdjlf jsjdfkds jjdflsj jlfk aksflkaskfd  jskjlfsdhkjfuael flsjdfjndcakfelseihlifi ijflsdkfs ifksndkjfh iafvjdkf fjsjk lsk fsjkdf jfksdkfjksa hfjs', '2024-12-12 21:15:46', '2024-12-12 21:15:46'),
(3, 1, 'The Book Fair of 2025 was Amazing!', 'images/20250119043729.jpg', '2025-01-19', 'sjdhflhs ahsdjsjdf sjdhfljhsaldjfh lasjdfhjshdlfj lsajdfh ljsadlfjslaj dfjhlsihfiuw efhmxncl jsiffihlfslkjhilfuhw fwhflih wlihfl hf whfliwhlflaihsfih', '2025-01-18 22:37:29', '2025-01-18 22:37:29'),
(4, 1, 'Sara Astonished everyone with her amazing dance steps!', 'images/20250119043833.jpg', '2025-01-19', 'aihdfli isdflals fl skdflksal fsjdlfkjl jfkdlaksdjfl kjsdflksldkf ksjldfklskjdf kajsdflkjls fasdkjflksjd ksdflkasl flskdfl klfdkl askfls l', '2025-01-18 22:38:33', '2025-01-18 22:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attendee_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `num_tickets` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` enum('pending','confirmed') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `attendee_id`, `event_id`, `num_tickets`, `total_price`, `status`, `created_at`, `updated_at`) VALUES
(32, 2, 1, 10, 1500, 'confirmed', '2024-12-15 20:14:47', '2024-12-16 06:08:51'),
(52, 2, 3, 5, 500, 'pending', '2024-12-16 06:49:52', '2024-12-16 06:49:52'),
(53, 2, 3, 4, 400, 'pending', '2024-12-16 09:26:20', '2024-12-16 09:26:20'),
(54, 2, 4, 5, 500, 'pending', '2024-12-16 21:59:10', '2024-12-16 21:59:10'),
(56, 3, 4, 7, 700, 'pending', '2025-01-08 07:20:55', '2025-01-08 07:20:55'),
(57, 2, 1, 10, 3000, 'pending', '2025-01-08 07:27:21', '2025-01-08 07:27:21'),
(58, 3, 3, 4, 400, 'pending', '2025-01-08 08:10:29', '2025-01-08 08:10:29'),
(59, 3, 3, 4, 400, 'confirmed', '2025-01-08 08:11:34', '2025-01-08 08:12:44'),
(60, 2, 4, 1000, 100000, 'pending', '2025-01-17 03:01:33', '2025-01-17 03:01:33'),
(61, 2, 3, 4, 1000, 'pending', '2025-01-18 22:01:17', '2025-01-18 22:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `name`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Music', 'Do pal ruki, Dilo ki waste', '2024-12-13 08:06:35', '2024-12-15 08:29:14'),
(2, 'Dance', 'djgfjygkuygulliuh', '2024-12-15 20:25:07', '2024-12-15 20:25:07'),
(3, 'Athletics', 'jkjgjhghjff', '2024-12-15 20:25:28', '2024-12-15 20:25:28'),
(4, 'Book Fair', 'fjgffgfhtthththgfg', '2024-12-15 20:25:44', '2024-12-15 20:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1, '2024-12-13 08:07:55', '2024-12-13 08:07:55'),
(2, 'Cumilla', 1, '2024-12-15 20:30:43', '2024-12-15 20:30:43'),
(3, 'Chattagram', 1, '2024-12-15 20:30:59', '2024-12-15 20:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attendee_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `attendee_id`, `blog_id`, `content`, `date`, `created_at`, `updated_at`) VALUES
(5, 2, 2, 'xcbcxvbcvb', '2024-12-16', '2024-12-15 22:31:27', '2024-12-15 22:31:27'),
(6, 2, 1, 'Too much enjoyable it was', '2025-01-19', '2025-01-18 22:05:51', '2025-01-18 22:05:51'),
(7, 2, 1, 'Too much enjoyable it was', '2025-01-19', '2025-01-18 22:05:51', '2025-01-18 22:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', '2024-12-13 08:07:38', '2024-12-13 08:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `designation`, `email`, `phone`, `photo`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Sara Khan', 'MD, Marketing', 'sara@gmail.com', '018748267367', 'images/20250119042744.jpeg', 'Malibag, Dhaka', '2025-01-18 22:27:44', '2025-01-18 22:27:44'),
(3, 'Mohiuddin Islam', 'Admin, HR', 'mohiuddin@gmail.com', '018748267368', 'images/20250119042938.jpeg', 'Banani, Dhaka', '2025-01-18 22:29:38', '2025-01-18 22:29:38'),
(4, 'Jamil Sarder', 'Manager, Compliance', 'jamil@gmail.com', '018748267457', 'images/20250119043037.jpg', 'Shantinagar, Dhaka', '2025-01-18 22:30:37', '2025-01-18 22:30:37'),
(5, 'Saif Jahan', 'Manager, Production', 'saif@gmail.com', '018748267368', 'images/20250119043152.jpeg', 'Siddik Bazar', '2025-01-18 22:31:52', '2025-01-18 22:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `num_tickets` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `speaker_id` int(11) NOT NULL,
  `organiser_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `start_date`, `end_date`, `start_time`, `image`, `address`, `num_tickets`, `unit_price`, `catagory_id`, `speaker_id`, `organiser_id`, `country_id`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'Asian Music Festival 2024', 'duhfsj hsfjsdhkfj sjhdfkjs kjshdkjfh kjshfdksj', '2025-01-28', '2025-01-28', '15:00:00', 'images/20241221112230.jpg', 'Army Stadium', 1200, 300, 1, 1, 1, 1, 1, '2024-12-13 08:09:10', '2024-12-21 05:22:30'),
(3, 'Cake Party', 'okóklklklkmlm', '2025-01-22', '2025-01-06', '17:00:00', 'images/20241221112139.jpg', 'Sena Malancha', 200, 250, 1, 2, 1, 1, 1, '2024-12-15 20:18:54', '2024-12-21 05:21:39'),
(4, 'Dhaka Book Fair 2025', 'hhgfjftt trtdtfgfh tfytftfhtf ftfhfghg tdhtdhfd', '2025-01-30', '2025-02-01', '10:00:00', 'images/20250119042622.jpg', 'Ramna Park, Dhaka', 2000, 200, 4, 3, 2, 1, 1, '2024-12-15 20:33:54', '2025-01-18 22:26:22');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attendee_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `attendee_id`, `photo`, `caption`, `created_at`, `updated_at`) VALUES
(2, 2, 'images/20241126163217.jpg', 'dfsdf efsfd df d', NULL, NULL),
(3, 2, 'images/20241216141207.jpg', 'So nice of you', '2024-12-16 08:12:07', '2024-12-16 08:12:07'),
(4, 2, 'images/20241216141301.jpg', 'So nice of you', '2024-12-16 08:13:01', '2024-12-16 08:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attendee_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mohiuddin', 'mohiuddin@gmail.com', '02817839264', 'ahkjfh hfl jhlsjdflk lkfjsk jhhljkfask h', '2024-12-13 11:34:49', '2024-12-13 11:34:49'),
(2, 'Rafiqul islam', 'rafiq@gmail.com', '0167894356', 'Nothing to say. just wanna buy tickets.', '2024-12-28 07:14:31', '2024-12-28 07:14:31'),
(3, 'Nazrul islam Khan', 'nazrul@gmail.com', '0167894354', 'Nothing to say.', '2024-12-28 08:03:33', '2024-12-28 08:03:33'),
(4, 'Nusrat Jahan Suraiya', 'nusrat@gmail.com', '0167894355', 'I Ain\'t Love U', '2024-12-28 08:14:03', '2024-12-28 08:14:03'),
(5, 'Nusu', 'nusrat@gmail.com', '0167894354', 'I don\'t Like You', '2024-12-28 08:17:24', '2024-12-28 08:17:24'),
(6, 'Rakib', 'rakib@gmail.com', '0167894354', 'gdfgdfdh', '2024-12-28 10:49:04', '2024-12-28 10:49:04'),
(7, 'Rahat Ali Khan', 'rahat@gmail.com', '01856478903', 'I love You', '2025-01-18 06:36:50', '2025-01-18 06:36:50'),
(8, 'Md. Arif Hasan', 'arifhasan@gmail.com', '01846523644', 'I am naughty boy!', '2025-01-18 06:54:14', '2025-01-18 06:54:14'),
(9, 'sfsdf', 'fsd@gmail.com', '01846523644', 'gdsgfgd', '2025-01-18 07:03:12', '2025-01-18 07:03:12'),
(10, 'jhfjszk', 'sddss@gmail.com', 'sdfdsgfdsf', 'dfgdfgfd', '2025-01-18 11:52:49', '2025-01-18 11:52:49');

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
(101, '2024_11_25_154520_create_attendings_table', 1),
(137, '2014_10_12_000000_create_users_table', 2),
(138, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(139, '2019_08_19_000000_create_failed_jobs_table', 2),
(140, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(141, '2024_11_16_044829_create_attendees_table', 2),
(142, '2024_11_18_145516_create_admins_table', 2),
(143, '2024_11_20_164311_create_catagories_table', 2),
(144, '2024_11_25_153221_create_events_table', 2),
(145, '2024_11_25_154815_create_organisers_table', 2),
(146, '2024_11_25_155204_create_saved_events_table', 2),
(147, '2024_11_25_155543_create_countries_table', 2),
(148, '2024_11_25_155720_create_cities_table', 2),
(149, '2024_11_25_160545_create_comments_table', 2),
(150, '2024_11_25_160744_create_likes_table', 2),
(151, '2024_11_25_160932_create_galleries_table', 2),
(152, '2024_11_25_161419_create_speakers_table', 2),
(153, '2024_12_04_114321_create_testimonials_table', 2),
(154, '2024_12_04_122259_create_bookings_table', 2),
(155, '2024_12_10_125653_create_employees_table', 2),
(156, '2024_12_10_141645_create_feedbacks_table', 2),
(157, '2024_12_10_162956_create_messages_table', 2),
(158, '2024_12_11_013000_create_blogs_table', 2),
(159, '2024_12_13_143517_create_payments_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `organisers`
--

CREATE TABLE `organisers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organisers`
--

INSERT INTO `organisers` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Blue Bird', 'bluebird@gmail.com', '01834973463', 'Banani, Dhaka', '2024-12-13 08:06:13', '2024-12-13 08:06:13'),
(2, 'Black shine ltd.', 'blackshine@gmail.com', '0168986947', 'Shantinagar, Dhaka.', '2024-12-15 20:29:21', '2024-12-15 20:29:21'),
(3, 'Happy Event ltd.', 'happy@gmail.com', '01689862323', 'Panthpath, Dhaka.', '2024-12-15 20:30:18', '2024-12-15 20:30:18');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` int(11) NOT NULL,
  `trxn_no` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `method` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `booking_id`, `trxn_no`, `amount`, `method`, `created_at`, `updated_at`) VALUES
(8, 32, 'fjfgfgfgffggfgf', 1500, 'nagad', '2024-12-15 20:15:12', '2024-12-15 20:15:12'),
(9, 33, 'kkgfjtfdtdtd', 300, 'bkash', '2024-12-15 20:19:42', '2024-12-15 20:19:42'),
(10, 34, 'gkuygukyukytuytu', 900, 'nagad', '2024-12-15 20:20:25', '2024-12-15 20:20:25'),
(11, 35, 'rtrtftf rytfyt ytftf', 1000, 'nagad', '2024-12-15 20:35:36', '2024-12-15 20:35:36'),
(12, 36, 'dfgdgdfdfgdfg', 500, 'bkash', '2024-12-15 22:27:48', '2024-12-15 22:27:48'),
(13, 37, 'gfjftdhtrdrtd', 3000, 'upay', '2024-12-16 00:21:31', '2024-12-16 00:21:31'),
(14, 38, 'jhsflksjhdlfkjhksjfks', 6000, 'upay', '2024-12-16 00:35:28', '2024-12-16 00:35:28'),
(15, 38, 'jhsflksjhdlfkjhksjfks', 6000, 'upay', '2024-12-16 00:45:09', '2024-12-16 00:45:09'),
(16, 39, 'jislfjhldkjfhs', 200, 'upay', '2024-12-16 00:46:53', '2024-12-16 00:46:53'),
(17, 39, 'jislfjhldkjfhs', 200, 'upay', '2024-12-16 00:48:33', '2024-12-16 00:48:33'),
(18, 40, 'k;lkjkjgseafeafs', 300, 'bkash', '2024-12-16 00:49:44', '2024-12-16 00:49:44'),
(19, 41, 'kjkhkjgjgjfgdhrd', 300, 'nagad', '2024-12-16 00:51:10', '2024-12-16 00:51:10'),
(20, 42, '56756rur', 1000, 'nagad', '2024-12-16 00:53:47', '2024-12-16 00:53:47'),
(21, 43, 'ljugjtrderreegre', 1900, 'bkash', '2024-12-16 00:55:52', '2024-12-16 00:55:52'),
(22, 44, 'lkjkdfxdd', 100, 'bkash', '2024-12-16 00:58:10', '2024-12-16 00:58:10'),
(23, 45, 'dfsdfsdfs', 150, 'bkash', '2024-12-16 01:02:56', '2024-12-16 01:02:56'),
(24, 46, 'gdfgdfgdf', 500, 'bkash', '2024-12-16 01:04:08', '2024-12-16 01:04:08'),
(25, 47, 'uuytuyjf', 500, 'nagad', '2024-12-16 01:12:33', '2024-12-16 01:12:33'),
(26, 48, 'ghgfhfgdhgfdfd', 1500, 'nagad', '2024-12-16 01:17:50', '2024-12-16 01:17:50'),
(27, 49, 'iwehlijwhe', 400, 'nagad', '2024-12-16 01:23:34', '2024-12-16 01:23:34'),
(28, 50, 'jkdkjalkdsjlkjsjh', 2000, 'bkash', '2024-12-16 02:04:36', '2024-12-16 02:04:36'),
(29, 51, 'jhkjhjjkjjhghffd', 750, 'bkash', '2024-12-16 02:34:55', '2024-12-16 02:34:55'),
(30, 52, 'nothing_to_pay', 500, 'nagad', '2024-12-16 06:50:15', '2024-12-16 06:50:15'),
(31, 53, 'dfsdgfsdfgsfgd', 400, 'bkash', '2024-12-16 09:26:56', '2024-12-16 09:26:56'),
(32, 54, 'iuisauiufausudfu', 500, 'bkash', '2024-12-16 21:59:36', '2024-12-16 21:59:36'),
(33, 55, 'hkjhjkhjhhjhj', 360000, 'nagad', '2024-12-21 05:23:19', '2024-12-21 05:23:19'),
(34, 57, 'gyfjytdtrseafaw', 3000, 'nagad', '2025-01-08 07:27:51', '2025-01-08 07:27:51'),
(35, 60, 'sdfsadfsdd', 100000, 'nagad', '2025-01-17 03:01:43', '2025-01-17 03:01:43'),
(36, 61, 'rtdtyrddfh', 1000, 'bkash', '2025-01-18 22:01:28', '2025-01-18 22:01:28');

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
-- Table structure for table `saved_events`
--

CREATE TABLE `saved_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`id`, `name`, `profession`, `photo`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Arijit Singh', 'Singer', 'images/20241213140720.jpg', 'fsdflihs ihlijfhisj hdjhfkjsdh shdijhf jhifjdh', '2024-12-13 08:07:20', '2024-12-13 08:07:20'),
(2, 'Md. Nazrul Khan', 'Moderator', 'images/20241216021724.jpg', 'lhjhjh hvhj hhjjh', '2024-12-15 20:17:24', '2024-12-15 20:17:24'),
(3, 'Sumi Akter', 'Dancer', 'images/20241216022630.jpg', 'fjytdtddc fgfdf gfjgg', '2024-12-15 20:26:30', '2024-12-15 20:26:30'),
(4, 'Mohiuddin', 'Comedy', 'images/20241216022755.jpg', 'yuyyfyv gggdfdrfd gjfdrd', '2024-12-15 20:27:55', '2024-12-15 20:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attendee_id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `attendee_id`, `designation`, `company`, `subjects`, `feedback`, `created_at`, `updated_at`) VALUES
(4, 2, 'manager, HR', 'Skylink pvt ltd.', 'Decoration', 'Hopefully You have better tried but something were lack.', NULL, NULL),
(6, 2, 'manager, HR', 'Skylink pvt ltd', 'Performance', 'fsdfskj jkjfsdkf jhdfkjhsa kjahsfjd ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attendees_email_unique` (`email`);

--
-- Indexes for table `attendings`
--
ALTER TABLE `attendings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisers`
--
ALTER TABLE `organisers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `saved_events`
--
ALTER TABLE `saved_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendees`
--
ALTER TABLE `attendees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendings`
--
ALTER TABLE `attendings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `organisers`
--
ALTER TABLE `organisers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saved_events`
--
ALTER TABLE `saved_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
