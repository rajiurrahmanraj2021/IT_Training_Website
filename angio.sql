-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 05:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angio`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_news`
--

CREATE TABLE `all_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_category_id` int(11) NOT NULL,
  `news_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_new_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_news`
--

INSERT INTO `all_news` (`id`, `news_category_id`, `news_title`, `news_description`, `news_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'The Urban Dental Camp has been conducted successfully at Mohammadpur, Dhaka.', 'The Urban Dental Camp has been conducted successfully at Borabo Govt. Primary School, Mohammadpur, Dhaka.\r\n\r\nMinistry of Water Resources led to organizing the rally and discussion session, officials of NGO Forum for Public Health were included for processioning the rally. About thousands of participants at the rally which started from South Plaza of National Parliament while respective State Minister for Water Resources along with other high officials was in lead.\r\n\r\nThis AusBangla Care for Dental (ABCD) Project funded by Rotary Club of Australia, Rotary Club of Dhaka and organized by NGO Forum for Public Health.', '1.jpg', '2019-11-09 19:39:32', '2019-11-09 19:39:33'),
(2, 1, 'Seminar on \"can deep tubewells solve arsenic crisis in rural Bangladesh ?\"', '\"First Secretary of Japan Embassy Mr. Yasuharu Shinto along with high officials of UNICEF namely- Chief of Field Office, UNICEF Cox’s Bazar Mr. Jean Metenier, WASH Manager Mr. Martin Worth, WASH Officer Mst. Saleha Khatun and Communication Specialist Ms. Karen Reidy visited Camp- 6 WASH Activities and Infrastructures. They have visited 95K liters capacity Water Network, Water Taps, FSM, Cleaning Stations, Communal Latrines, Disabled Friendly Latrines and MHM Learning Center maintained by NGO Forum as WASH Focal Agency for the camp. NGOF Senior Technical Manager Mr. Toriqul Islam, Project Coordinator Mr. Mosarraf Hossain with other official of the project accompanied the delegates.', '2.jpg', '2019-11-09 19:40:14', '2019-11-09 19:40:14'),
(3, 1, 'A team of UNICEF consisting of Head of WaSH visited camp- 6', 'A team of UNICEF consisting of Head Of WaSH(UNICEF-Bangladesh)- Dara, WaSH Manager-Martin Worth, Programme Specialist-Climate and Environment-Cristine, WaSH Specialist- Zahidul Mamun and WaSH Officer-Kabita Yesmin visited camp- 6 to observe the WaSH sector partner NGO Forum’s WaSH activities and infrastructures especially the Piped Water Network of 95,000-liter capacity, ABR FSM, Latrines, Tube wells as well as the work of the MHM Learning center. NGO Forum Colleagues has also supported the visit along with the UNICEF Team. The Head Of WaSH(UNICEF-Bangladesh) conveyed his satisfaction to NGO Forum for executing such activities over', '3.jpg', '2019-11-09 19:40:48', '2019-11-09 19:40:48'),
(4, 2, 'The Urban Dental Camp has been conducted successfully', 'A team of UNICEF consisting of Head Of WaSH(UNICEF-Bangladesh)- Dara, WaSH Manager-Martin Worth, Programme Specialist-Climate and Environment-Cristine, WaSH Specialist- Zahidul Mamun and WaSH Officer-Kabita Yesmin visited camp- 6 to observe the WaSH sector partner NGO Forum’s WaSH activities and infrastructures especially the Piped Water Network of 95,000-liter capacity, ABR FSM, Latrines, Tube wells as well as the work of the MHM Learning center. NGO Forum Colleagues has also supported the visit along with the UNICEF Team. The Head Of WaSH(UNICEF-Bangladesh) conveyed his satisfaction to NGO Forum for executing such activities over', '4.jpg', '2019-11-09 19:59:46', '2019-11-09 19:59:46'),
(5, 2, 'The theme for World Water Day 2019 is ‘Leaving no one behind’.', 'This is an adaptation of the central promise of the 2030 Agenda for Sustainable Development: as sustainable development progresses, everyone must benefit. Sustainable Development Goal 6 (SDG 6) includes a target to ensure availability and sustainable management of water for all. By definition, this means leaving no one behind.\r\n\r\nNGO Forum for Public Health with the Sectors and Sub-sectors, relevant ministries, Departments (MoWR, BWDB, DPHE, WASA, Bangladesh River Commission), different networks and alliances has observed the day in a festive mood.\r\n\r\nMinistry of Water Resources led to organizing the rally and discussion session, officials of NGO Forum for Public Health were included for processioning the rally. About thousands of participants at the rally which started from South Plaza of National Parliament while respective State Minister for Water Resources along with other high officials was in lead.\r\n\r\nHonorable Prime Minister Sheikh Hasina was humbly present at the opening session at Bangabandhu International Convention Center. As the chief guest, the Prime Minister delivered her speech of encouragement for water resource management, supply system and best of its inclusive uses for all. She expressed the political commitment of the government and urges all concerns for appropriate actions aiming at achieving SDG goals by 2030.\r\n\r\nTo ensure safe WaSH and sound environment for a healthy society, NGO Forum for Public Health is in line with the directions have been made by the Prime Minister during her speech regards to the WWD Celebration Program. NGO Forum is always active with its mandate for the collaborative initiatives, supportive for implementation of policies, mobilize to engage communities and sharing experiences with stakeholders respectively.', '5.jpg', '2019-11-09 20:00:21', '2019-11-09 20:00:22'),
(6, 4, 'sdgfdgdfgdsfgdfgdsfgdf', 'adfsgdsfgdsfgdsf', '6.jpg', '2019-11-09 20:14:20', '2019-11-09 20:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_tatile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deadline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `job_tatile`, `Type`, `Location`, `Salary`, `Deadline`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Finance & Admin officer', 'Full-time', 'Cox\'s Bazar', 'Tk. 75,000 (Monthly)', '11/11/2019,11/11/2019', 'https://www.google.com/', '2019-11-10 18:33:04', NULL),
(2, 'Finance & Admin officer', 'Full-time', 'Cox\'s Bazar', 'Tk. 75,000 (Monthly)', '11/11/2019,11/11/2019', 'https://www.google.com/', '2019-11-10 18:33:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cells_departments`
--

CREATE TABLE `cells_departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cells_departments`
--

INSERT INTO `cells_departments` (`id`, `position_name`, `name`, `position`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Programme :', 'Mr. Rizwan Ahmed', 'Head of Programme (Humanitarian & Emergency) & Coordinator, Bangladesh Water Integrity Network (BAWIN)', 'rizwan@ngof.org', '2019-11-10 18:18:33', NULL),
(2, 'Programme :', 'Mr. Rizwan Ahmed', 'Head of Programme (Humanitarian & Emergency) & Coordinator, Bangladesh Water Integrity Network (BAWIN)', 'rizwan@ngof.org', '2019-11-10 18:18:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `existing_projects`
--

CREATE TABLE `existing_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `existing_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `existing_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `existing_period` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `existing_donar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `existing_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'existing_img.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `existing_projects`
--

INSERT INTO `existing_projects` (`id`, `existing_title`, `description_one`, `existing_description`, `existing_period`, `existing_donar`, `existing_image`, `created_at`, `updated_at`) VALUES
(1, 'title one', 'description one', '<p style=\"padding-left: 120px; text-align: left;\"><img style=\"float: left;\" src=\"/photos/3/admin.jpg\" alt=\"\" width=\"280\" height=\"280\" /></p>\r\n<p style=\"padding-left: 160px; text-align: left;\">&nbsp;</p>\r\n<p style=\"padding-left: 160px; text-align: left;\">&nbsp;</p>\r\n<p style=\"padding-left: 160px; text-align: left;\">&nbsp;</p>\r\n<p style=\"padding-left: 160px; text-align: left;\">&nbsp;</p>\r\n<p style=\"padding-left: 160px; text-align: left;\">&nbsp;</p>\r\n<p style=\"padding-left: 160px; text-align: left;\">&nbsp;</p>\r\n<p style=\"padding-left: 160px; text-align: left;\">&nbsp;</p>\r\n<p style=\"padding-left: 160px; text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<ul>\r\n<li style=\"text-align: left;\">&nbsp; <strong>Funding Agency :</strong> FORMAS (Swedish Research Council for sustainable&nbsp; development)</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li style=\"text-align: left;\"><strong>Project Period :</strong>&nbsp;February 2019 &ndash; January 2022</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li style=\"text-align: left;\"><strong>Total Budget :</strong>&nbsp;2,99,98,500 taka only</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong><u>Objective</u></strong></li>\r\n</ul>\r\n<ul class=\"mb-5\">\r\n<li>To provide causal evidence regarding the impact of participation in the design, financing and construction of the water source on sustainability</li>\r\n</ul>', 'February 2019 – January 2022', 'FORMAS (Swedish Research Council for sustainable development)', '1.jpg', '2019-11-08 20:20:28', '2019-11-08 20:20:28'),
(2, 'WASH in Health Care Facility-Advocacy Strategy', 'To define the WASH problem and root causesin HCF. Describe the main WASH in HCF problem you see in your country/sphere of influence. What are some causes of the problem that could be alleviated through changes in policies, influencing, and advocacy.', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/photos/3/cam1.jpg\" alt=\"\" width=\"354\" height=\"266\" /></p>\r\n<p>&nbsp; &nbsp; <strong>Funding Agency :</strong>&nbsp;IRC, Netherlands</p>\r\n<p style=\"padding-left: 40px;\"><img style=\"float: left;\" src=\"/photos/3/irc.jpg\" alt=\"\" width=\"225\" height=\"128\" /></p>\r\n<p style=\"padding-left: 40px;\">&nbsp;</p>\r\n<p style=\"padding-left: 40px;\">&nbsp;</p>\r\n<p style=\"padding-left: 40px;\">&nbsp;</p>\r\n<p style=\"padding-left: 40px;\">&nbsp;</p>\r\n<p style=\"padding-left: 40px;\"><strong>Project Period :</strong>&nbsp;December 2018 &ndash; January 2020</p>\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; Total Budget :</strong>&nbsp;12,41,431 taka only</p>\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; Location :</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; <u>Objective</u></strong></p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;To define the WASH problem and root causesin HCF</p>', 'December 2018 – January 2020', 'IRC, Netherlands', '2.jpg', '2019-11-08 19:16:49', '2019-11-08 19:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `implementeds`
--

CREATE TABLE `implementeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thematic_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `implementeds`
--

INSERT INTO `implementeds` (`id`, `name`, `duration`, `year`, `doner`, `thematic_area`, `details`, `created_at`, `updated_at`) VALUES
(1, 'DASFC', 'ADSCF', 'DSAWC', 'Ascd', 'ASC', '<h3>Collaborative research:&nbsp;Enhancing Informal risk-sharing and private initiative to mitigate local environmental risks</h3>\r\n<p><img src=\"/photos/3/p-24 (1).jpg\" alt=\"\" width=\"505\" height=\"334\" /></p>\r\n<p><strong>Funding Agency :</strong>&nbsp;The Trustees of Columbia University in the City of NY, USA</p>\r\n<p><img src=\"/photos/3/columbia_logo.gif\" alt=\"\" /></p>\r\n<p><strong>Project Period :</strong>&nbsp;March 2019 &ndash; February 2020</p>\r\n<p><strong>Location :</strong></p>\r\n<p><strong><u>Objective</u></strong></p>\r\n<p><strong><u>To combine empirical analysis and data collection to understand how a higher level of mitigation to local environmental and health risks can be achieved with individual and community-level efforts to share privately-owned resources in a social group.</u></strong></p>\r\n<p><strong><u>Project Materials :</u></strong><img src=\"/photos/3/annual_report_20173.jpg\" alt=\"\" width=\"304\" height=\"406\" /></p>', '2019-11-10 18:09:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_05_070550_create_jobs_table', 1),
(8, '2019_11_07_194342_create_existing_projects_table', 2),
(10, '2019_11_09_114107_create_latest_news_table', 3),
(11, '2019_11_09_162035_create_press_media_table', 4),
(12, '2019_11_09_181131_create_news_categories_table', 5),
(13, '2019_11_09_221918_create_all_news_table', 6),
(14, '2019_11_08_103048_create_implementeds_table', 7),
(15, '2019_11_09_073726_create_cells_departments_table', 8),
(16, '2019_11_09_093235_create_regionaloffices_table', 9),
(17, '2019_11_09_112313_create_careers_table', 10),
(19, '2019_11_11_004328_create_projectoffices_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Latest News', '2019-11-09 19:29:41', NULL),
(2, 'Press & Media', '2019-11-09 19:30:08', NULL),
(3, 'Press Release', '2019-11-09 19:33:02', NULL),
(4, 'Archived News', '2019-11-09 19:33:35', NULL),
(5, 'Special Message', '2019-11-09 19:36:32', NULL),
(6, 'Events', '2019-11-09 19:37:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projectoffices`
--

CREATE TABLE `projectoffices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `funded_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'funded_logo.jpg',
  `contact_parson` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projectoffices`
--

INSERT INTO `projectoffices` (`id`, `project_location`, `project_name`, `funded_logo`, `contact_parson`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Cox’s Bazar', 'Improved WaSH Services for Rohingya Refugees and Host Communities in Cox’s Bazar', '1.png', 'Md. Mosarraf Hossain (Project Coordinator', 'Sayeman Pink Pearl, Plot # 71, 3rd Floor,  Block-A, Kolatoli, Cox’s Baza', '01712003560', 'ngof.ukhia2@gmail.com', '2019-11-10 20:10:06', '2019-11-10 20:10:07'),
(2, 'Dhaka', 'Integrity Management Project with CWASA and KWASA', '2.png', 'Kazi Monir Mosharrof (Project Focal)', '4/6, Block-E, Lalmatia, Dhaka-1207', '01725011857', 'kazi.monir@ngof.org', '2019-11-10 20:11:13', '2019-11-10 20:11:13'),
(3, 'Mymensingh', 'Resilience, Inclusive & Innovative Cities in Bangladesh (RIICB', '3.png', 'Sauda Sultana (Project Coordinator)', 'Shainpukur Garden, 309/25  Sugandha Residential Area , Maskanda  Mymensingh-2200', '01717277713', 'urb@gmail.com', '2019-11-10 20:12:10', '2019-11-10 20:12:11'),
(4, 'Pirojpur', 'Community Led Total Sanitation Project NGO Forum for Public Health', '4.png', 'Md. Abdus Salam (Team Leader)', 'Pirojpur', '01716-101144', 'ngof.cats@yahoo.com', '2019-11-10 20:13:08', '2019-11-10 20:13:08'),
(5, 'Rangpur', 'Strengthening Pro-Poor and Participatory local Governance in City Corporation', '5.jpg', 'N.S.M. Asad (Project Coordinator', 'House # 84 Road # 2 R.K. Road  Rangpur -5400', '01712682878', 'nsmasad@gmail.com', '2019-11-10 20:14:12', '2019-11-10 20:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `regionaloffices`
--

CREATE TABLE `regionaloffices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_covergae` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regionaloffices`
--

INSERT INTO `regionaloffices` (`id`, `region`, `person`, `street_address`, `phone`, `email`, `district_covergae`, `created_at`, `updated_at`) VALUES
(1, 'Bogura', 'Dr. Mohammad Rezwanul Karim (Regional Manager)', 'NGO Forum Regional Office\r\n\r\nBetgari, Banani, Bogura-5800', 'Tel: 63290 (051)   Mob : 01712762855', 'bogura@ngof.org', 'Bagura     Joypurhat   Naogaon   Sirajgan', '2019-11-10 18:28:48', NULL),
(2, 'Bogura', 'Dr. Mohammad Rezwanul Karim (Regional Manager)', 'NGO Forum Regional Office\r\n\r\nBetgari, Banani, Bogura-5800', 'Tel: 63290 (051)   Mob : 01712762855', 'bogura@ngof.org', 'Bagura     Joypurhat   Naogaon   Sirajgan', '2019-11-10 18:28:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'limon', 'hasan@live.com', NULL, '$2y$10$vVD6PIaNEuiGgCxSxvGoF.PTbz/Vg.6AkPGFmrAjpZKRfEOAZiCaO', NULL, '2019-11-05 16:21:44', '2019-11-05 16:21:44'),
(2, 'sabbir khan', 'arvi@live.com', NULL, '$2y$10$ppM/qsXcXCR2pG2M26I4ZuLwwTmvzi46CSu4rCby0Z3Y7jwTHuAaO', NULL, '2019-11-05 16:26:17', '2019-11-05 16:26:17'),
(3, 'lllllll', 'imran2@live.com', NULL, '$2y$10$Bwtv6TQiyUTD.wyEU3PZTOAyJPluWGWTo53KsSBaGDjpJcb6QScfO', NULL, '2019-11-06 02:11:59', '2019-11-06 02:11:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_news`
--
ALTER TABLE `all_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cells_departments`
--
ALTER TABLE `cells_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `existing_projects`
--
ALTER TABLE `existing_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `implementeds`
--
ALTER TABLE `implementeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projectoffices`
--
ALTER TABLE `projectoffices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regionaloffices`
--
ALTER TABLE `regionaloffices`
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
-- AUTO_INCREMENT for table `all_news`
--
ALTER TABLE `all_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cells_departments`
--
ALTER TABLE `cells_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `existing_projects`
--
ALTER TABLE `existing_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `implementeds`
--
ALTER TABLE `implementeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projectoffices`
--
ALTER TABLE `projectoffices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regionaloffices`
--
ALTER TABLE `regionaloffices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
