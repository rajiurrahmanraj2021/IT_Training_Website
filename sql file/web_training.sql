-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 03:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `amadersomporkes`
--

CREATE TABLE `amadersomporkes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'about_img.jpg',
  `description1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amadersomporkes`
--

INSERT INTO `amadersomporkes` (`id`, `about_img`, `description1`, `description2`, `description3`, `description4`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', '২০১৮ সালের ৩১ শে ডিসেম্বর ইউটিউব চ্যানেল এর মাধ্যমে ওয়েব ট্রেনিং ইনস্টিটিউট এর যাত্রা শুরু হয় । প্রতিষ্ঠানটির প্রতিষ্ঠাতা মো: রাজিউর রাহমান ও মো: সোহেল পারভেজ এর ঐকান্তিক প্রচেষ্ঠায় ওয়েব ট্রেনিং ইনস্টিটিউটের ইউটিউব চ্যানেলে যুক্ত হচ্ছে নতুন নতুন টিউটোরিয়াল।', 'ওয়েব ট্রেনিং ইনস্টিটিউট হচ্ছে মূলত IT(Information Technology) বিষয়ক একটি প্রতিষ্ঠান। আমরা ওয়েব ডিজাইন এবং ডেভেলপমেন্ট, ওয়ার্ডপ্রেস, গ্রাফিক্স ডিজাইন, সেক্টরে সার্ভিস প্রোভাইড করে থাকি। পাশাপাশি যারা এই সকল বিষয়ে কাজ শিখতে চায় তাদের জন্য সম্পূর্ণ প্রফেশনাল ভিডিও কোর্স তৈরি করা হয়ে থাকে। আমাদের ইউটিউব চ্যানেলে এই সব বিষয় এর উপর ফ্রী তে অনেক ভিডিও টিউটোরিয়াল রয়েছে, যেগুলো দেখলে আপনারা নিজেই বুঝতে পারবেন। গত কয়েক বছরে আমরা বেশ সংখ্যক লোকাল এবং গ্লোবাল প্রোজেক্টে কাজ করেছি। আইটিতে উন্নত মানের সার্ভিস দেয়ার পাশাপাশি এই সেক্টরে যারা নতুন, যারা আসলে বুঝতে পারে না কিভাবে শুরু করতে হবে তাদেরকে সঠিক গাইডলাইন প্রোভাইড করাও আমাদের অন্যতম প্রধান মোটিভ।', NULL, NULL, '2020-02-06 15:23:43', '2020-02-06 15:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `bonusoffers`
--

CREATE TABLE `bonusoffers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `your_message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dvdquestions`
--

CREATE TABLE `dvdquestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `freecourses`
--

CREATE TABLE `freecourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `freecourse_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'freecourse_img.jpg',
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_one` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_two` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_three` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `freecourses`
--

INSERT INTO `freecourses` (`id`, `freecourse_img`, `title`, `description_one`, `description_two`, `description_three`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'এইচটিএমএল', 'আপনি যদি ওয়েব ডিজাইন শিখতে চান তাহলে প্রথমে আপনাকে এইচটিএমএল শিখতে হবে। এইচটিএমএল এর মাধ্যমে প্রথমে একটি ওয়েবসাইট এর মার্কআপ তৈরি করতে হয় ।', 'এইচটিএমএল এর পূর্নরূপঃ হাইপার টেক্সট মার্কআপ ল্যাংগুয়েজ।বর্তমানে একজন অতি সাধারণ মানুষেরও একটি নিজস্ব ওয়েব সাইট থাকে।এইচটিএমএল এর মাধ্যমে আপনি আপনার এই নিজস্ব ওয়েবসাইটের ডিজাইন তৈরি করতে পারবেন।আমাদের এই এইচটিএমএল টিউটোরিয়ালটি আমরা খুবই সহজভাবে উপস্থাপন করেছি যেন আপনিও খুব সহজেই পুরো এইচটিএমএল শিখতে পারেন এবং নিজের ওয়েবসাইটটি ডিজাইন করতে কোন ডেভেলপার ভাড়া না করে নিজেই করতে পারেন।এইচটিএমএল শেখা খুবই সহজ এবং আশা করি আপনি আমাদের এই টিউটোরিয়ালটি উপভোগ করবেন।', 'এইচটিএমএল কোর্সের সম্পূর্ণ ভিডিওগুলো নিচে সিরিয়াল বাই সিরিয়াল দেওয়া হলোঃ', '2020-02-07 12:11:25', '2020-02-07 15:59:01'),
(2, '2.jpg', 'সিএসএস', 'সিএসএস এর মাধ্যমে একটি ওয়েবসাইট এর স্টাইল করা হয় । ওয়েব ডিজাইনার হওয়ার জন্য আপনাকে প্রথমে এইচটিএমএল শিখতে হবে এবং তারপর অবশ্যই সিএসএস শিখতে হবে।', 'সিএসএস একটি প্রোগ্রামিং ভাষা যা এইচটিএমএল ডকুমেন্টকে সুদর্শনীয় করে তোলার জন্য ব্যবহৃত হয়।একটি এইচটিএমএল এলিমেন্টকে কিভাবে প্রদর্শন করানো হবে তা সিএসএসের মাধ্যমে নির্ধারণ করে দেওয়া হয়।এই টিউটোরিয়ালটি আপনাকে সিএসএস এর প্রাথমিক থেকে এডভান্স পর্যন্ত শিখতে সাহায্য করবে।', 'সিএসএস কোর্সের সম্পূর্ণ ভিডিওগুলো নিচে সিরিয়াল বাই সিরিয়াল দেওয়া হলোঃ', '2020-02-07 12:12:28', '2020-02-07 15:59:41'),
(3, '3.jpg', 'জাভাস্ক্রিপ্ট', 'জাভাস্ক্রিপ্ট সারা বিশ্বের মধ্যে সবচেয়ে জনপ্রিয় প্রোগ্রামিং ভাষা।ওয়েব ডেভেলপমেন্ট এর জন্য তিনটি প্রোগ্রামিং ল্যাংগুয়েজ ব্যবহৃত হয়।জাভাস্ক্রিপ্ট এই ৩টি ল্যাংগুয়েজের মধ্যে অন্যতম যা প্রত্যেক ওয়েব ডেভেলপারের জন্যই জানা আবশ্যক....', NULL, 'জাভাস্ক্রিপ্ট কোর্সের সম্পূর্ণ ভিডিওগুলো নিচে সিরিয়াল বাই সিরিয়াল দেওয়া হলোঃ', '2020-02-07 12:13:03', '2020-02-07 16:01:22');

-- --------------------------------------------------------

--
-- Table structure for table `freecoursevideos`
--

CREATE TABLE `freecoursevideos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `freevideo_category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `freecoursevideos`
--

INSERT INTO `freecoursevideos` (`id`, `freevideo_category_id`, `video_title`, `video_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'HTML Bangla Tutorial Part-01 [ 2020 ] | Project Overview?', 'https://www.youtube.com/embed/cjE_JZ0CcPs', '2020-02-13 07:06:14', '2020-02-15 15:28:13'),
(2, '1', 'HTML Bangla Tutorial Part-02 [ 2020 ] | All Helper Tools?', 'https://www.youtube.com/embed/NhdrvszPFNQ', '2020-02-13 09:46:28', '2020-02-13 09:53:00'),
(3, '1', 'HTML Bangla Tutorial Part-03 [ 2020 ] | install photoshop cs6?', 'https://www.youtube.com/embed/bMNUFescIls', '2020-02-13 09:47:14', '2020-02-13 09:53:12'),
(4, '1', 'HTML Bangla Tutorial Part-04 [ 2020 ] | Define Html Structure?', 'https://www.youtube.com/embed/QsPnLbKFzug', '2020-02-13 09:48:02', '2020-02-13 09:53:23'),
(5, '1', 'HTML Bangla Tutorial Part-05 [ 2020 ] | paragraph and heading tag?', 'https://www.youtube.com/embed/0PC7qE_jNXE', '2020-02-13 09:48:51', '2020-02-13 09:53:37'),
(6, '1', 'HTML Bangla Tutorial Part-06 [ 2020 ] | Attributes in html?', 'https://www.youtube.com/embed/PuFRvnvL8LI', '2020-02-13 09:50:12', '2020-02-13 09:53:52'),
(7, '1', 'HTML Bangla Tutorial Part-07 [ 2020 ] | Text Formatting?', 'https://www.youtube.com/embed/Fs38ClWSDb0', '2020-02-13 09:51:50', '2020-02-13 09:54:03'),
(8, '1', 'HTML Bangla Tutorial Part-08 [ 2020 ] | Superscript and subscript?', 'https://www.youtube.com/embed/BE4ulwhpLyY', '2020-02-13 09:52:40', '2020-02-13 09:54:14'),
(9, '1', 'HTML Bangla Tutorial Part-09 [ 2020 ] | Link tag in html?', 'https://www.youtube.com/embed/ZnM_Qcgv3AE', '2020-02-13 09:55:21', NULL),
(10, '1', 'HTML Bangla Tutorial Part-10 [ 2020 ] | image in html?', 'https://www.youtube.com/embed/7YbDj_Nt8Xc', '2020-02-13 09:56:30', NULL),
(11, '1', 'HTML Bangla Tutorial Part-11 [ 2020 ] | Height Width in image?', 'https://www.youtube.com/embed/Jz4oQBKWtJ0', '2020-02-13 09:57:31', NULL),
(12, '1', 'HTML Bangla Tutorial Part-12 | [ 2020 ] | Abbreviation in html?', 'https://www.youtube.com/embed/eT2wLZL39EU', '2020-02-13 09:59:02', NULL),
(13, '1', 'HTML Bangla Tutorial Part-13 | [ 2020 ] | Block level & inline Element?', 'https://www.youtube.com/embed/FYfCEqYxX0k', '2020-02-13 10:02:01', NULL),
(14, '2', 'CSS Bangla Tutorial Part-01 [ 2020 ] | inline style in html?', 'https://www.youtube.com/embed/WnrKvCQW6x8', '2020-02-13 10:06:24', '2020-02-13 14:14:09'),
(15, '2', 'CSS Bangla Tutorial Part-02 [ 2020] | internal style in html?', 'https://www.youtube.com/embed/7gpDUVycx8U', '2020-02-13 14:15:18', NULL),
(16, '2', 'CSS Bangla Tutorial Part-03 | [ 2020 ] | External style in html css?', 'https://www.youtube.com/embed/_cc49MiJHNA', '2020-02-13 14:16:13', NULL),
(17, '2', 'CSS Bangla Tutorial Part-04 | [ 2020 ] | Power of Css?', 'https://www.youtube.com/embed/LeKgMkZ85ao', '2020-02-13 14:28:13', NULL),
(18, '2', 'CSS Bangla Tutorial Part-05 [ 2020] | Text Direction in html?', 'https://www.youtube.com/embed/qNMypn_m1Hc', '2020-02-13 14:29:10', NULL),
(19, '2', 'CSS Bangla Tutorial Part-06 [ 2020 ] | Comment in html css?', 'https://www.youtube.com/embed/EKnb5KkZjiY', '2020-02-13 14:29:57', NULL),
(20, '2', 'CSS Bangla Tutorial Part-07 [ 2020 ] | Text Decoration in css?', 'https://www.youtube.com/embed/l6937kOjk3I', '2020-02-13 14:31:00', NULL),
(21, '2', 'CSS Bangla Tutorial Part-08 [ 2020 ] | Font Customize in Css?', 'https://www.youtube.com/embed/3D8QowyzORw', '2020-02-13 14:39:53', NULL),
(22, '2', 'CSS Bangla Tutorial Part-09 [ 2020 ] | font Customize in Css_2?', 'https://www.youtube.com/embed/-yhW7-pW5sA', '2020-02-13 14:41:14', NULL),
(23, '2', 'CSS Bangla Tutorial Part-10 [ 2020 ] | ID And Class in html css?', 'https://www.youtube.com/embed/xTcghjeQ_o4', '2020-02-13 14:42:01', NULL),
(24, '2', 'CSS Bangla Tutorial Part-11 [ 2020 ] | Div in html?', 'https://www.youtube.com/embed/gOsONqCL9DQ', '2020-02-13 14:42:47', NULL),
(25, '2', 'CSS Bangla Tutorial Part-12 [ 2020 ] | margin padding in css?', 'https://www.youtube.com/embed/h8mx-Lhn5kc', '2020-02-13 14:44:05', NULL),
(26, '2', 'CSS Bangla Tutorial Part-13 [ 2020 ] | Background Property in Css?', 'https://www.youtube.com/embed/Ufy49CRudRA', '2020-02-13 14:44:53', NULL),
(27, '2', 'CSS Bangla Tutorial Part-14 [ 2020 ] | Selecting Element in Css?', 'https://www.youtube.com/embed/_iiUfioGkXw', '2020-02-13 14:49:11', NULL),
(28, '2', 'CSS Bangla Tutorial Part-15 [ 2020 ] | Display and Overflow Property?', 'https://www.youtube.com/embed/K5ju0ikjHM0', '2020-02-13 14:49:48', NULL),
(29, '2', 'CSS Bangla Tutorial Part-16 [ 2020 ] | Float Property in Css?', 'https://www.youtube.com/embed/8bu1xZ7yXvU', '2020-02-13 14:50:23', NULL),
(30, '2', 'CSS Bangla Tutorial Part-17 [ 2020 ] | linear and radial Gradiant?', 'https://www.youtube.com/embed/llN8NyLzrNg', '2020-02-13 14:51:23', NULL),
(31, '2', 'CSS Bangla Tutorial Part-18 [ 2020 ] | Pseudo Property in Css?', 'https://www.youtube.com/embed/j-A594hmN38', '2020-02-13 14:52:16', NULL),
(32, '2', 'CSS Bangla Tutorial Part-19 [ 2020 ] | Transition and Transform property?', 'https://www.youtube.com/embed/emkA_IWwU_Y', '2020-02-13 14:52:55', NULL),
(33, '2', 'CSS Bangla Tutorial Part-20 [ 2020 ] | Animation_01?', 'https://www.youtube.com/embed/dZBdvbep5kk', '2020-02-13 14:53:26', NULL),
(34, '2', 'CSS Bangla Tutorial Part-21 [ 2020 ] | Animation_02 using css?', 'https://www.youtube.com/embed/RZsXXg1bViI', '2020-02-13 14:53:54', NULL),
(35, '2', 'CSS Bangla Tutorial Part-22 [ 2020 ] | Animation_03 using css?', 'https://www.youtube.com/embed/outqxwNPhTg', '2020-02-13 14:54:29', NULL),
(36, '2', 'CSS Bangla Tutorial Part-23 [ 2020 ] | Audio in Html?', 'https://www.youtube.com/embed/Nn_3boHAPv4', '2020-02-13 14:55:22', NULL),
(37, '2', 'CSS Bangla Tutorial Part-24 [ 2020 ] | Video in html?', 'https://www.youtube.com/embed/qvHpW2ZhCRk', '2020-02-13 14:56:07', NULL),
(38, '2', 'CSS Bangla Tutorial Part-25 [ 2020 ] | Youtube Video Embed?', 'https://www.youtube.com/embed/bBUOImF6H3c', '2020-02-13 14:59:26', NULL),
(39, '2', 'CSS Bangla Tutorial Part-26 [ 2020 ] | iframe tag  in html?', 'https://www.youtube.com/embed/Ypn9ZYo3h5w', '2020-02-13 15:00:10', NULL),
(40, '2', 'CSS Bangla Tutorial Part-27 [ 2020 ] | List in html?', 'https://www.youtube.com/embed/slrK7wSPb9M', '2020-02-13 15:01:02', NULL),
(41, '2', 'CSS Bangla Tutorial Part-28 [ 2020 ] | Table in html css bangla?', 'https://www.youtube.com/embed/EWj92qWFwGE', '2020-02-13 15:01:35', NULL),
(42, '2', 'CSS Bangla Tutorial Part-29 [ 2020 ] | Form Design in HTML CSS?', 'https://www.youtube.com/embed/IZkcEZXaQUU', '2020-02-13 15:02:21', NULL),
(43, '2', 'CSS Bangla Tutorial Part-30 [ 2020 ] | Forms Design in HTML CSS-02?', 'https://www.youtube.com/embed/WaQ2mwmnhxw', '2020-02-13 15:03:06', NULL),
(44, '2', 'CSS Bangla Tutorial Part-31 [ 2020 ] | Text Shadow in HTML CSS?', 'https://www.youtube.com/embed/epu9Dw0Vq_4', '2020-02-13 15:04:06', NULL),
(45, '2', 'CSS Bangla Tutorial Part-32 [ 2020 ] | Box Shadow in html Css?', 'https://www.youtube.com/embed/hY59Bm4AhoY', '2020-02-13 15:05:22', NULL),
(46, '2', 'CSS Bangla Tutorial Part-33 [ 2020 ] | google font use in html css?', 'https://www.youtube.com/embed/LxUQRaiVILc', '2020-02-13 15:06:06', NULL),
(47, '2', 'CSS Bangla Tutorial Part-34 [ 2019 ] | Position property in html css?', 'https://www.youtube.com/embed/ViYmYBhc1bg', '2020-02-13 15:06:48', NULL),
(48, '2', 'CSS Bangla Tutorial Part-35 [ 2020 ] | Z-index in html css?', 'https://www.youtube.com/embed/NA9K6dAElLo', '2020-02-13 15:07:33', NULL),
(49, '2', 'CSS Bangla Tutorial Part-36 [ 2020 ] | Button and Marquee tag in html?', 'https://www.youtube.com/embed/9bT0HYbslyQ', '2020-02-13 15:08:34', NULL),
(50, '2', 'CSS Bangla Tutorial Part-37 [ 2020 ] | More Pseudo Classes in html css?', 'https://www.youtube.com/embed/zcaE3kgpyXA', '2020-02-13 15:09:16', NULL),
(51, '2', 'CSS Bangla Tutorial Part-38 [ 2020 ] | After-Before effect in css?', 'https://www.youtube.com/embed/8cmjqLP8DpU', '2020-02-13 15:09:55', NULL),
(52, '2', 'CSS Bangla Tutorial Part-39 [ 2020 ] | Menu Design using Html Css?', 'https://www.youtube.com/embed/NgowBLJU358', '2020-02-13 15:10:50', NULL),
(53, '2', 'CSS Bangla Tutorial Part-40 [ 2020 ] | Menu Design part-02 html css?', 'https://www.youtube.com/embed/xXa1mfQDEzM', '2020-02-13 15:12:02', NULL),
(54, '2', 'CSS Bangla Tutorial Part-41 [ 2020 ] Menu Design Part-03 Html Css?', 'https://www.youtube.com/embed/qlHjodhWHw4', '2020-02-13 15:12:51', NULL),
(55, '2', 'CSS Bangla Tutorial Part-42 [ 2020 ] | Make a website column using html css?', 'https://www.youtube.com/embed/5FFeHBCBkUw', '2020-02-13 15:13:54', NULL),
(56, '2', 'CSS Bangla Tutorial Part-43 [ 2020 ] | How to Make a Slider Using Html Css Javascript?', 'https://www.youtube.com/embed/kbJd5Goz8Lc', '2020-02-13 15:15:03', NULL),
(57, '3', 'Javascript Bangla Tutorial Part-01 [ 2020 ] | Introduction & course overview?', 'https://www.youtube.com/embed/22q_3a4GJg0', '2020-02-13 15:31:18', NULL),
(58, '3', 'Javascript Bangla Tutorial part-02 [ 2020 ]', 'https://www.youtube.com/embed/CDV14ZxXDc0', '2020-02-13 15:32:36', NULL),
(59, '3', 'Javascript Bangla Tutorial Part-03 [ 2020 ]', 'https://www.youtube.com/embed/bIjtyyR3aW0', '2020-02-13 15:33:10', NULL),
(60, '3', 'Javascript Bangla Tutorial Part-04 [ 2020 ] | Variable declaretion?', 'https://www.youtube.com/embed/7ihxVZq6RY8', '2020-02-13 15:33:52', NULL),
(61, '3', 'Javascript Bangla Tutorial Part-05 [ 2020 ] | Operators in javascript?', 'https://www.youtube.com/embed/TA3C62cHLZg', '2020-02-13 15:34:25', NULL),
(62, '3', 'Javascript Bangla Tutorial Part-06 [ 2020 ] | Display Output?', 'https://www.youtube.com/embed/HyBFiHTPNXw', '2020-02-13 15:34:58', NULL),
(63, '3', 'Javascript Bangla Tutorial Part-07 [ 2020 ] | JavaScript Arrays and  Array Methods', 'https://www.youtube.com/embed/s8cqqVvCaM0', '2020-02-13 15:35:38', NULL),
(64, '3', 'Javascript Bangla Tutorial Part-08 [ 2020 ] Javascript Objects .', 'https://www.youtube.com/embed/UeH1iQrp9Ek', '2020-02-13 15:37:30', NULL),
(65, '3', 'Javascript Bangla Tutorial Part-09 [ 2020 ]  Javascript Strings ?', 'https://www.youtube.com/embed/Vv-phUqNn10', '2020-02-13 15:38:56', NULL),
(66, '3', 'Javascript Bangla Tutorial Part-10 [ 2020 ] | JavaScript Functions ?', 'https://www.youtube.com/embed/mMOHo7vlRIg', '2020-02-13 15:39:38', NULL),
(67, '3', 'Javascript Bangla Tutorial Part-11 [ 2020 ] | Conditional Statements if else ?', 'https://www.youtube.com/embed/80RiQMgEP7Q', '2020-02-13 15:41:54', NULL),
(68, '3', 'Javascript Bangla Tutorial Part-12 [ 2020 ] | Conditional Statements Switch case ?', 'https://www.youtube.com/embed/tQ-Em-wW3xE', '2020-02-13 15:43:28', NULL),
(69, '3', 'Javascript Bangla Tutorial Part-13 [ 2020 ] | JavaScript For Loop ?', 'https://www.youtube.com/embed/QeQNi8A-bV4', '2020-02-13 15:44:06', NULL),
(70, '3', 'Javascript Bangla Tutorial Part-14 [ 2020 ] | JavaScript while loop & do while loop ?', 'https://www.youtube.com/embed/bJ6RSc-CI9g', '2020-02-13 15:49:32', NULL),
(71, '3', 'Javascript Bangla Tutorial Part-15 [ 2020 ] | JavaScript Events ?', 'https://www.youtube.com/embed/xZovockRKeA', '2020-02-13 15:50:59', NULL),
(72, '3', 'Javascript Bangla Tutorial Part-16 [ 2020 ] | JavaScript Conditional ternary operator ?', 'https://www.youtube.com/embed/0tqe631O3Yw', '2020-02-13 15:51:37', NULL),
(73, '3', 'Javascript Bangla Tutorial Part-17 [ 2020 ] | Understanding Hoisting in JavaScript', 'https://www.youtube.com/embed/xbplgPoQmSA', '2020-02-13 15:59:03', NULL),
(74, '3', 'Javascript Bangla Tutorial Part-18 [ 2020 ] | Use of  typeof operator in Javascript .', 'https://www.youtube.com/embed/WFlOp1IXEr4https://www.youtube.com/embed/WFlOp1IXEr4', '2020-02-13 15:59:43', NULL),
(75, '3', 'Javascript Bangla Tutorial Part-19 [ 2020 ] | JavaScript Break and Continue Statement ?', 'https://www.youtube.com/embed/NhHBve9XX_Y', '2020-02-13 16:00:18', NULL),
(76, '3', 'Javascript Bangla Tutorial Part-20 [ 2020 ] | JavaScript setTimeout and setInterval ?', 'https://www.youtube.com/embed/-N14lp6ID_o', '2020-02-13 16:02:16', NULL),
(77, '3', 'Javascript Bangla Tutorial Part-21 [ 2020 ] | JavaScript Window confirm() Method ?', 'https://www.youtube.com/embed/NakPyL9nqCo', '2020-02-13 16:03:45', NULL),
(78, '3', 'avascript Bangla Tutorial Part-22 [ 2020 ] | JavaScript How to Make a Clock ?', 'https://www.youtube.com/embed/zFBpcGyKVak', '2020-02-13 16:05:31', NULL),
(79, '3', 'avascript Bangla Tutorial Part-23 [ 2020 ] | JavaScript Double Equals vs Triple Equals ?', 'https://www.youtube.com/embed/B4EXBBWKZgo', '2020-02-13 16:06:26', NULL),
(80, '3', 'Javascript Bangla Tutorial Part-24 [ 2020 ] | Understanding Recursion in Javascript ?', 'https://www.youtube.com/embed/NlFyte6NYSE', '2020-02-13 16:38:38', NULL),
(81, '3', 'Javascript Bangla Tutorial Part-25 [ 2020 ] | parseInt() and Number() Method in JavaScript ?', 'https://www.youtube.com/embed/uUw_xqpBpVY', '2020-02-13 16:39:28', NULL),
(82, '3', 'Javascript Bangla Tutorial Part-26 [ 2020 ] | JavaScript this Keyword', 'https://www.youtube.com/embed/_Amhie4Yl_I', '2020-02-13 16:40:25', NULL),
(83, '3', 'Javascript Bangla Tutorial Part-27 [ 2020 ] | eval() in Javascript', 'https://www.youtube.com/embed/86oK38LtHkE', '2020-02-13 16:41:27', NULL),
(84, '3', 'Javascript Bangla Tutorial Part-28 [ 2020 ] | Simple Calculator in Javascript |', 'https://www.youtube.com/embed/3qgOkBEUPHU', '2020-02-13 16:42:41', NULL),
(85, '3', 'Javascript Bangla Tutorial Part-29 [ 2020 ] | Fade In Fade Out  in JavaScript |', 'https://www.youtube.com/embed/kMcgJixInFI', '2020-02-13 16:43:43', NULL),
(86, '3', 'Javascript Bangla Tutorial Part-30 [ 2020 ] | escape(), unescape() in JavaScript |', 'https://www.youtube.com/embed/jPBLd_hFsbA', '2020-02-13 16:45:44', NULL),
(87, '3', 'Javascript Bangla Tutorial Part-31 [ 2020 ] | Math Object  in JavaScript |', 'https://www.youtube.com/embed/1invo8U99tk', '2020-02-13 16:48:33', NULL),
(88, '3', 'Javascript Bangla Tutorial Part-32 [ 2019 ] | String Length in JavaScript |', 'https://www.youtube.com/embed/BhkReNEtV5c', '2020-02-13 16:49:41', NULL),
(89, '3', 'Javascript Bangla Tutorial Part-33 [ 2020 ] | toUpperCase and toLowerCase Method in JavaScript', 'https://www.youtube.com/embed/DQmoN2M8_Z4', '2020-02-13 16:50:51', NULL),
(90, '3', 'Javascript Bangla Tutorial Part-34 [ 2019 ] | trim() Method in JavaScript', 'https://www.youtube.com/embed/oNoKYxh0TLs', '2020-02-13 16:54:13', NULL),
(91, '3', 'Javascript Bangla Tutorial Part-35 [ 2020 ] | replace() Method in JavaScript', 'https://www.youtube.com/embed/totkABZIez4', '2020-02-13 16:55:18', NULL),
(92, '3', 'Javascript Bangla Tutorial Part-36 [ 2020 ] | split() Method in JavaScript', 'https://www.youtube.com/embed/ApUSOXIBe6k', '2020-02-13 16:56:37', NULL),
(93, '3', 'Javascript Bangla Tutorial Part-37 [ 2020 ] | search() Method in JavaScript', 'https://www.youtube.com/embed/qFeILTtXd5o', '2020-02-13 17:02:10', NULL),
(94, '3', 'Javascript Bangla Tutorial Part-38 [ 2020 ] | Discuss About DOM in JavaScript', 'https://www.youtube.com/embed/pJ0qPg5gTew', '2020-02-13 17:03:18', NULL),
(95, '3', 'Javascript Bangla Tutorial Part-39 [ 2020 ] |  DOM Tree & DOM Node Types in JavaScript', 'https://www.youtube.com/embed/Tdvj9H8vDac', '2020-02-13 17:05:32', NULL),
(96, '3', 'Javascript Bangla Tutorial Part-40 [ 2020 ] | DOM Methods in JavaScript', 'https://www.youtube.com/embed/AtdlNZNYvrg', '2020-02-13 17:07:30', NULL),
(97, '3', 'Javascript Bangla Tutorial Part-41 [ 2020 ] |  document.getElementsByTagName () in JavaScript', 'https://www.youtube.com/embed/q3QqGZmiepw', '2020-02-13 17:08:52', NULL),
(98, '3', 'Javascript Bangla Tutorial Part-42 [ 2020 ] | document.getElementsByClassName () in JavaScript', 'https://www.youtube.com/embed/LRNs2FAEFoU', '2020-02-13 17:09:54', NULL),
(99, '3', 'Javascript Bangla Tutorial Part-43 [ 2020 ] | querySelector Method in JavaScript', 'https://www.youtube.com/embed/iB0u5Gf55cU', '2020-02-13 17:13:34', NULL),
(100, '3', 'Javascript Bangla Tutorial Part-44 [ 2020 ] | Build A Clock With JavaScript', 'https://www.youtube.com/embed/r2EWE-lqYxw', '2020-02-13 17:15:16', NULL),
(101, '3', 'Javascript Bangla Tutorial Part-45 [ 2020 ] | Web Page Properties in JavaScript', 'https://www.youtube.com/embed/Tw7j7sCcA6c', '2020-02-13 17:16:52', NULL),
(102, '3', 'Javascript Bangla Tutorial Part-46 [ 2020 ] | Styling Node Element in DOM -JavaScript', 'https://www.youtube.com/embed/W_WNuZLiWNk', '2020-02-13 17:17:48', NULL),
(103, '3', 'Javascript Bangla Tutorial Part-47 [ 2020 ] | Window Open Method in JavaScript', 'https://www.youtube.com/embed/feIkzXOvuJs', '2020-02-13 17:18:51', NULL),
(104, '3', 'Javascript Bangla Tutorial Part-48 [ 2020 ] | Calculate Sum of 2D & 3D Array Element  in JavaScript', 'https://www.youtube.com/embed/BFN2gcQn8Jo', '2020-02-13 17:20:03', NULL),
(105, '3', 'Javascript Bangla Tutorial Part-49 [ 2020 ] |  Create Element Text  and Comment Node in Javascript', 'https://www.youtube.com/embed/v8gYUoAuxUw', '2020-02-13 17:20:48', NULL),
(106, '3', 'Javascript Bangla Tutorial Part-50 [ 2020 ] | Discuss About DocumentFragment in JavaScript', 'https://www.youtube.com/embed/NaVwwX9Z2lw', '2020-02-13 17:22:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homeabouts`
--

CREATE TABLE `homeabouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'about_img.jpg',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homeabouts`
--

INSERT INTO `homeabouts` (`id`, `about_img`, `description`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'web training institute started its journey through the YouTube channel on December 31, 2018. The new tutorial is being added to the youtube channel of the web training institute by the founders of the company Md. Rajiur Rahman. Web Training Institute is basically a IT (Information Technology) organization. We provide services in web design and development, wordpress, graphics design, sector. As well as full professional video courses are created for those who want to learn about the subject. There are many free video tutorials on this topic on our YouTube channel that you can understand by watching. In the past few years, we have worked on a number of local and global projects. In addition to providing the best quality services in IT, it is also one of our major motivations for those who are new to this sector, who do not really understand how to get started.', '2020-02-04 17:45:32', '2020-02-15 15:24:52');

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
(10, '2019_11_09_114107_create_latest_news_table', 3),
(11, '2019_11_09_162035_create_press_media_table', 4),
(12, '2019_11_09_181131_create_news_categories_table', 5),
(15, '2019_11_09_073726_create_cells_departments_table', 8),
(16, '2019_11_09_093235_create_regionaloffices_table', 9),
(17, '2019_11_09_112313_create_careers_table', 10),
(19, '2019_11_11_004328_create_projectoffices_table', 11),
(25, '2019_11_19_032910_create_resources_categories_table', 14),
(30, '2019_11_19_042155_create_allresources_table', 18),
(32, '2019_11_28_223646_create_programestatuses_table', 19),
(33, '2019_11_29_011942_create_ataglancecategories_table', 20),
(35, '2019_11_29_021136_create_ataglances_table', 21),
(38, '2019_11_18_030054_create_all_programmes_table', 22),
(40, '2019_11_30_222025_create_aboutcategories_table', 24),
(42, '2019_11_30_230532_create_allabouts_table', 25),
(43, '2019_12_01_222843_create_allpolicies_table', 26),
(44, '2019_12_01_233309_create_allgenerals_table', 27),
(46, '2019_12_02_233527_create_aboutnetworks_table', 28),
(47, '2019_11_29_233505_create_abouutnogforms_table', 29),
(49, '2019_12_03_204325_create_trainings_table', 30),
(51, '2019_12_03_225349_create_centers_table', 31),
(54, '2019_12_04_135949_create_centerdetails_table', 32),
(55, '2019_12_04_164929_create_servicecategories_table', 33),
(56, '2019_12_04_173016_create_allservices_table', 34),
(59, '2019_12_05_003325_create_i_c_e_s_table', 35),
(60, '2019_11_09_221918_create_all_news_table', 36),
(64, '2019_12_06_205401_create_contactoffices_table', 37),
(69, '2019_11_07_194342_create_existing_projects_table', 38),
(70, '2019_11_08_103048_create_implementeds_table', 39),
(72, '2019_12_07_200558_create_metarialscategories_table', 40),
(73, '2019_12_07_224514_create_allmetarials_table', 41),
(74, '2019_12_08_121909_create_wqtls_table', 42),
(75, '2019_12_08_135618_create_wqtltestrates_table', 43),
(76, '2019_12_08_145408_create_allwqtltestrates_table', 44),
(77, '2019_12_08_165318_create_specialpackeges_table', 45),
(78, '2019_12_08_205151_create_coxlabs_table', 46),
(79, '2019_12_08_223150_create_coxlabtestrates_table', 47),
(80, '2019_12_09_001613_create_coxlabservices_table', 48),
(82, '2019_12_09_134511_create_microkits_table', 49),
(83, '2019_12_09_152639_create_microkitvideos_table', 50),
(85, '2019_12_09_201437_create_wqtlhomes_table', 51),
(86, '2019_12_09_221021_create_wqtlhomeimages_table', 52),
(91, '2019_12_10_163611_create_whats_table', 53),
(93, '2019_12_10_214904_create_videos_table', 54),
(94, '2019_12_11_000627_create_photocategories_table', 55),
(95, '2019_12_11_011414_create_photoclickeds_table', 56),
(98, '2019_12_11_025625_create_globalevents_table', 57),
(99, '2019_12_13_001615_create_foundingagencies_table', 58),
(100, '2019_12_14_232014_create_bannercategories_table', 59),
(102, '2019_12_14_233606_create_banners_table', 60),
(103, '2019_12_16_124242_create_humans_table', 61),
(104, '2019_12_16_140935_create_humanprojects_table', 62),
(106, '2019_11_18_021906_create_programme_categories_table', 63),
(107, '2020_02_04_232330_create_homeabouts_table', 64),
(110, '2020_02_05_113932_create_whatwedos_table', 65),
(111, '2020_02_05_155330_create_premiumvideos_table', 66),
(112, '2020_02_05_163519_create_studentfeedbacks_table', 67),
(114, '2020_02_06_002257_create_amadersomporkes_table', 68),
(117, '2020_02_07_173144_create_freecourses_table', 69),
(119, '2020_02_07_223113_create_freecoursevideos_table', 70),
(120, '2020_02_08_160907_create_ourservicecategories_table', 71),
(121, '2020_02_08_201028_create_wts_table', 72),
(128, '2020_02_08_213040_create_wtsdetails_table', 75),
(129, '2020_02_11_194103_create_orderdetails_table', 76),
(131, '2020_02_13_113817_create_bonusoffers_table', 78),
(132, '2020_02_13_121730_create_dvdquestions_table', 79),
(133, '2020_02_13_003810_create_contactuses_table', 80);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivary_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bks_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bks_trxid` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rocket_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rocket_trxid` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `premiumvideos`
--

CREATE TABLE `premiumvideos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `premiumvideos`
--

INSERT INTO `premiumvideos` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'https://youtu.be/0PC7qE_jNXE', '2020-02-05 10:07:11', '2020-02-15 15:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `studentfeedbacks`
--

CREATE TABLE `studentfeedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student_img.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentfeedbacks`
--

INSERT INTO `studentfeedbacks` (`id`, `name`, `comment`, `student_img`, `created_at`, `updated_at`) VALUES
(1, 'Sanjeda Tasmin', 'আসসালামুয়ালাইকুম, ইউটিউবে আপনাদের ভিডিওগুলো কয়েকদিন ধরে দেখছি... অনেক অনেক ভালো লাগছে, সত্যি বলতে অনেক কিছু শিখতে পারছি, এভাবে গোছানো  ভিডিও ইউটিউবে খুব কম পাওয়া যায়। আশা করছি এই রকম ভিডিও আপনারা সবসময়ই আমাদের দিয়ে থাকবেন।', '1.jpg', '2020-02-15 13:46:34', '2020-02-15 15:26:38'),
(2, 'Joya Mojumder', 'apnader video gulo khubi vlo vaiya, ami apnader youtube channel theke web design er 56 ta video ses korechi,, apni bolchilen je february te  web design er upor paid course asbe,, sei course ta khub taratari asle vlo hoto vaiya,, plzzzz taratari niye asen...', '2.jpg', '2020-02-15 13:50:20', '2020-02-15 13:51:04'),
(3, 'Md Emon', 'বেশ কয়েক মাস ধরে এমন কিছু খুজছিলাম ভাই। আপনাদের  সবাইকে থ্যাংকস যে, বাংলাদেশর তরুণদের জন্য এমন কিছু করছেন। আর ভাই আমি তো আপনার চ্যানেল থেকে ওয়েব ডিজাইন এর উপর যে ৫৬ টা টিউটোরিয়াল ছিল সেগুলো শেষ করেছি, আপনি বলেছিলেন ওয়েব ডিজাইন এর উপরে প্রফেশনাল পেইড কোর্স আসতেছে, এইটা কবে আসবে ভাইয়া। আমি ওয়েট করে আছি কোর্সটির জন্য।', '3.jpg', '2020-02-15 14:13:27', '2020-02-15 14:13:28'),
(4, 'MD Sagour Khan', 'আমি এমন একটা সম্পূর্ণ টিউটোরিয়াল খুঁজছিলাম। অবশেষে পেয়েছি। ধন্যবাদ ভাইয়া। আমি আপনাদের ভিডিও ফলো করছি, সত্যি আমার খুব ভালো লাগছে, আপনারা অনেক গভীর থেকে বোঝানোর চেষ্টা করেন...', '4.jpg', '2020-02-15 14:17:33', '2020-02-15 14:17:33'),
(5, 'Rimon Hasan', 'vaiya ami daffodil international university te cse korchi,, ami web design sekhar jonno vorti o hoyechi ekta course e 15 hazar taka diye,, oi khane je sir course ta nei ,, tar kono class ei ami thik moto bujte pari na,, tokhon ami youtube e khujte khujte apnar tutorial pelam,, apni eto sundor kore sob kichu bujiyechen, ami oikhan theke class kore aser pore apnar tutorial follow kori,, apnader ke onk onk dhonnobad vaiya,,', '5.jpg', '2020-02-15 14:39:06', '2020-02-15 14:39:07');

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
(1, 'Rajiur Rahman', 'rajiurrahmanraj2021@gmail.com', NULL, '$2y$10$FSf87p3yJuLrERQxUcvOZuzt0B.4z3ImteiAyEsfKujXA5A2Vn0Qy', NULL, '2019-11-29 05:02:33', '2020-02-15 17:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bg_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_link`, `bg_image`, `created_at`, `updated_at`) VALUES
(3, 'https://www.youtube.com/embed/cjE_JZ0CcPs', '2019394807.jpg', '2019-12-12 11:58:57', '2019-12-12 11:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `whatwedos`
--

CREATE TABLE `whatwedos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whatwedos`
--

INSERT INTO `whatwedos` (`id`, `icon`, `title`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-weebly', 'ওয়েব ডিজাইন', 'আপনি যদি একজন ফুল প্রফেশনাল ওয়েব ডিজাইনার হতে চান, তাহলে আমাদের ফ্রী এবং ওয়েব ডিজাইন প্রিমিয়াম কোর্সটি আপনার জন্য যথেষ্ট। ওয়েব ডিজাইনের উপর অনেকগুলো ফ্রী ভিডিও টিউটোরিয়াল আপাদের ইউটিউব চ্যানেলে দেওয়া আছে, আপনি সেই ভিডিওগুলো একবার দেখলেই নিজেই বুঝতে পারবেন।', 'https://www.youtube.com/watch?reload=9&v=cjE_JZ0CcPs&index=1&list=PLlbCzwXIyJcGEdSCzUL1AaiMHAQI_9N1k', '2020-02-05 06:21:11', '2020-02-15 15:25:28'),
(2, 'fab fa-dev', 'ওয়েব ডেভেলপমেন্ট', 'ওয়েব ডিজাইন শেখার পরেই চলে আসে ওয়েব ডেভেলপমেন্ট এর বিষয়। আমারা ওয়েব ডেভেলপমেন্ট এর উপরেও সার্ভিস প্রোভাইড করে থাকি, ওয়েব ডেভেলপমেন্ট পার্টিকে ২ ভাগে করা হয়েছে, অনেকেই পিএইচপি, এবং লারাভেল ফ্রেমওয়ার্ক দিয়ে ডেভেলপমেন্ট শিখতে চায়, আবার অনেকেই ওয়ার্ডপ্রেস ব্যাবহার করে ডেভেলপমেন্ট করতে চাই, তার জন্য সম্পূর্ণ দুইটা আলাদা আলাদা কোর্স তৈরি হচ্ছে। যার একটি ভিডিও কোর্সে থাকছে শুধু পিএইচপি এবং লারাভেল। অন্য আর একটিতে থাকছে শুধুমাত্র ওয়ার্ডপ্রেস।', NULL, '2020-02-05 06:21:40', NULL),
(3, 'fab fa-adobe', 'গ্রাফিক্স ডিজাইন', 'ওয়েব ট্রেনিং ইনস্টিটিউট গ্রাফিক্স ডিজাইন এর উপরেও সাভিস প্রোভাইড করে থাকে, আমরা খুব শিগ্রই গ্রাফিক্স ডিজাইনের উপর সম্পূর্ণ একটি প্রফেশনাল কোর্স নিয়ে আসতে চলেছি। আপনি যদি একজন প্রফেশনাল গ্রাফিক্স ডিজাইনার হতে চান, তাহলে একটু ধৈর্য ধরে আমাদের সাথেই থাকুন।', NULL, '2020-02-05 06:22:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wts`
--

CREATE TABLE `wts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wts`
--

INSERT INTO `wts` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'ওয়েবসাইট ডিজাইন', '2020-02-08 14:22:50', '2020-02-15 15:39:39'),
(2, 'ওয়েবসাইট ডেভেলপমেন্ট', '2020-02-08 14:23:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wtsdetails`
--

CREATE TABLE `wtsdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wts_category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wts_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wts_img.jpg',
  `offer_one` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_two` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_three` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_four` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_five` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_six` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_seven` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_eight` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wtsdetails`
--

INSERT INTO `wtsdetails` (`id`, `wts_category_id`, `wts_img`, `offer_one`, `offer_two`, `offer_three`, `offer_four`, `offer_five`, `offer_six`, `offer_seven`, `offer_eight`, `created_at`, `updated_at`) VALUES
(1, '1', '1.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 25-30 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:12:45', '2020-02-13 18:12:46'),
(2, '1', '2.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : ৫০-৭০ টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:16:18', '2020-02-13 18:16:18'),
(3, '1', '3.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 20-25 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:17:39', '2020-02-13 18:17:39'),
(4, '1', '4.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 20-25 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:18:54', '2020-02-13 18:18:54'),
(5, '1', '5.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 25-30 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:20:04', '2020-02-13 18:20:04'),
(6, '1', '6.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 30-40 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:21:14', '2020-02-13 18:21:14'),
(7, '1', '7.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 30-35 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:22:19', '2020-02-13 18:22:19'),
(8, '1', '8.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 30-40 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:23:41', '2020-02-13 18:23:42'),
(9, '1', '9.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 40-50 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:26:07', '2020-02-13 18:26:08'),
(10, '1', '10.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 50-70 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:27:19', '2020-02-13 18:27:19'),
(11, '1', '11.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 30-35 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:28:19', '2020-02-13 18:28:19'),
(12, '1', '12.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 40-50 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:29:24', '2020-02-13 18:29:24'),
(13, '2', '13.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 40-50 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:30:42', '2020-02-13 18:30:42'),
(14, '2', '14.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 50-55 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:31:49', '2020-02-13 18:31:49'),
(15, '2', '15.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 25-30 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:33:50', '2020-02-13 18:33:51'),
(16, '2', '16.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 30-40 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:35:10', '2020-02-13 18:35:11'),
(17, '2', '17.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 35-45 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:37:12', '2020-02-13 18:37:55'),
(18, '2', '18.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 30-40 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:39:06', '2020-02-13 18:39:07'),
(19, '2', '19.jpg', 'ফ্রি .ডট কম / .ডট নেট', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 30-40 টি', 'ডোমেইন ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:40:06', '2020-02-13 18:40:06'),
(20, '2', '20.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 30-40 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:41:16', '2020-02-13 18:41:16'),
(21, '2', '21.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 40-50 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:42:11', '2020-02-13 18:42:11'),
(22, '2', '22.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 50-60 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:43:11', '2020-02-13 18:43:11'),
(23, '2', '23.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 35-40 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:44:06', '2020-02-13 18:44:06'),
(24, '2', '24.jpg', 'ফ্রি .ডট কম / .ডট নেট ডোমেইন', '1 জিবি হোস্টিং', '1০ টি ইমেইল এড্রেস', 'পেইজ এর সংখ্যা : 40-45 টি', 'ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', 'হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)', '২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)', '৬ মাসের ফ্রি সাপোর্ট', '2020-02-13 18:45:02', '2020-02-13 18:45:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amadersomporkes`
--
ALTER TABLE `amadersomporkes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonusoffers`
--
ALTER TABLE `bonusoffers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dvdquestions`
--
ALTER TABLE `dvdquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freecourses`
--
ALTER TABLE `freecourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freecoursevideos`
--
ALTER TABLE `freecoursevideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeabouts`
--
ALTER TABLE `homeabouts`
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
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `premiumvideos`
--
ALTER TABLE `premiumvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentfeedbacks`
--
ALTER TABLE `studentfeedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whatwedos`
--
ALTER TABLE `whatwedos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wts`
--
ALTER TABLE `wts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wtsdetails`
--
ALTER TABLE `wtsdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amadersomporkes`
--
ALTER TABLE `amadersomporkes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bonusoffers`
--
ALTER TABLE `bonusoffers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dvdquestions`
--
ALTER TABLE `dvdquestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freecourses`
--
ALTER TABLE `freecourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `freecoursevideos`
--
ALTER TABLE `freecoursevideos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `homeabouts`
--
ALTER TABLE `homeabouts`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `premiumvideos`
--
ALTER TABLE `premiumvideos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentfeedbacks`
--
ALTER TABLE `studentfeedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `whatwedos`
--
ALTER TABLE `whatwedos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wts`
--
ALTER TABLE `wts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wtsdetails`
--
ALTER TABLE `wtsdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
