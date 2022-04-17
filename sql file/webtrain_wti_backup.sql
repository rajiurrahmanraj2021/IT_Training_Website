-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2020 at 11:03 AM
-- Server version: 5.7.32
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtrain_wti`
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
  `description3` longtext COLLATE utf8mb4_unicode_ci,
  `description4` longtext COLLATE utf8mb4_unicode_ci,
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

--
-- Dumping data for table `bonusoffers`
--

INSERT INTO `bonusoffers` (`id`, `name`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Md Jan E Alam', '01882072989', 'valo laglo apnader free video gula.', '2020-02-26 01:11:07', NULL),
(2, 'mahadi hasan shuvo', '01868655178', 'bhai apnader idea ta khub valo....amar khub valo lagsey...ami apnader course ti kortey chai', '2020-04-15 23:22:36', NULL),
(3, 'Sheikh Sohel', '01775517788', 'I watched your html & CSS tutorials on youtube. Those are fantastic and so helpful. That\'s why I\'m interested to buy your premium course of web design.', '2020-04-21 13:09:28', NULL),
(4, 'Md Aslam', '01645400122', 'খুব ভালো উদ্যোগ', '2020-05-04 02:41:58', NULL),
(5, 'Md. Shafiqul Islam', '01726194403', 'আস্সালামুআলাইকুম, রাজ ভাই, কেমন আছেন? আশাকরি ভাল আছেন। আপনার কোর্সের ওভারভিউ দেখে আমি আসলেই আশাবাদি এই কোর্সটি কমপ্লিট করলে ভালমানের ওয়েব ডিজাইনার হতে পারবো, ইনশাআল্লাহ্। তাই আমি কোর্সটি কিনতে আগ্রহী। গতকাল আপনার দেওয়া মোবাইল নাম্বারে কল করেছিলাম কিন্তু ব্যস্ততার কারনে হয়তোবা ফোন ধরতে পারেন নাই। একটি বিষয়ে যদি আমাকে অবহত করেণ তাহলে আমার সিদ্ধান্ত নিতে সুবিধা হয়। বিষয়টি হল- একজন ওয়েব ডিজাইনার একটি ওয়েবসাইট তৈরী করার পর তার চুরান্ত বহি:প্রকাশ করার জন্য Domain এবং Hosting ব্যবহার করে থাকেন বা ব্যবহার করতেই হয়, কিন্তু আপনার কোর্সে এ বিষয়ে অর্থাৎ Domain এবং Hosting বিষয়ে কোন Lesson নাই বা আমার নজরে আসেনাই। Domain এবং Hosting বিষয়ে আপনার কোর্সে কোন নির্দেশনা আছে কি? যদি না থাকে, তাহলে কোন পূর্নাঙ্গ Lesson পাবার কোন ব্যবস্থা আছে কি? জানালে উপকৃত হব। আল্লাহাফেজ।', '2020-05-04 09:45:49', NULL),
(6, 'md.khalaquzzaman', '01714084791,01779015399', 'খুব ভাল । এতে করে সবাই উথসাহিত হবে।', '2020-05-09 08:14:54', NULL),
(8, 'A.K.M. Didarul Alam', '+88 01711 679562', 'Obviously it is an effective attempt.\r\nThis will increase internal relations, respect among the group members which will turn to the institute to a success.', '2020-06-12 05:08:55', NULL),
(9, 'Subbroto Kumer', '01788736583', 'Youtube Videos গুলো অনেক ভাল। আর মেসেজটা অনেক হেলপফুল', '2020-09-01 05:41:35', NULL),
(10, 'Mozammel', '01865772755', 'ভালো লেগেছে', '2020-09-12 16:09:53', NULL),
(11, 'সায়েম আহমেদ', '01734206585', 'আলহামদুলিল্লাহ অনেক ভালো একটা উদ্যেগ নিয়েছেন।আশা করছি আমাদেরকে নিয়ে একটা ভালো জায়গায় পৌঁছাতে পারবেন ইনশা-আল্লাহ।', '2020-09-13 15:57:03', NULL),
(12, 'মো: সুমন আলী', '01722424632/01751857823', 'ভাই দীর্ঘদিন ধরে আপনার ভিডিওগুলো  দেখছি সত্যি বলতে আপনার চ্যানেলের শুরু থেকে। আমার কাছে মনে হয় আমি একজন ভালো ওয়েব ডিজাইনার হতে পারবো। কিন্তু দুঃখে বিষয় যে আমি আপনার Full Website Design Live [using only HTML5 & CSS3] কোর্সটি সম্পন করেছিলাম কিন্তু আমার পিসি 20 রমজানে হেক হয়ে যায় আপনার মতো। আমি বেকাপ করতে পারি নি।আমার প্রচন্ড আগ্রহ আছে কিন্তু আমি একটুর জন্য আটকে আছি। দয়া করে আমাকে সহায়তা করেন।ভাই আমার মেসেজটা মনোযোগ দিয়ে পড়েন প্লিজ। আমি সাধারণ একজন ছেলে আমি বিল্ডিং এর কাজ করি দিনরাত এক করে টাকা জমিয়ে 2500টাকায় একটা লেপটপ কিনেছি। পরিবার থেকে অনেক বাধা আসে ।কিন্তু আমি শুনি নাই। কারণ আমার বাবা মা শিক্ষিত না তারা কোনোদিন স্কুলে পর্যন্ত যায় নি। পরিবার চালাতে হয় আমাকে তাই প্রতিদিন যে টাকা ইনকাম করি তা সংসারের পিছনেই চলে যায়।তাই আনার পিমিয়ম কোর্সটা ওডার করতে পারছি না। কিন্তু আমার আগ্রহ দিন দিন বাড়ছে।আমাকে অনেক বড় হতে হবে মা বাবাকে দেখতে হবে।তাই দয়া করে আপনার কোর্স ফি টা যদি আমাকে পরিষধের জন্য সময় দিতেন আমার কুব উপকার হতো। আমি ফ্রি চাই না আপনার কোর্স ফি যত আমি ততই দিতে রাজি। কিন্তু আমাকে একটু সময় দিতে হবে। আমি জানি রাজিউর ভাইয়া আপনি একজন ভালো মনের মানুষ আর আপনার সহ কর্মীরাও আমি আপনার অনেক বড় ভক্ত। আপনাকে মেসেজটি যদি পড়ে থাকেন দয়া করে আমার সাথে যোগাযোগ করবেন।', '2020-09-19 12:58:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_name` text COLLATE utf8mb4_unicode_ci,
  `your_message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `name`, `phone`, `email`, `message_name`, `your_message`, `created_at`, `updated_at`) VALUES
(9, 'tanveer sakib shaon', '+966592805061', 'tanveersakibshaon@gmail.com', NULL, 'ei course e koyta video royeche.\r\nr video gulor somoy koto.', '2020-05-04 02:51:30', NULL),
(10, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Hey, this is Eric and I ran across webtraininginstitute.com a few minutes ago.\r\n\r\nLooks great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website – either through Search or just bouncing around – what happens next?  Do you get a lot of leads from your site, or at least enough to make you happy?\r\n\r\nHonestly, most business websites fall a bit short when it comes to generating paying customers. Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment.\r\n\r\nHere’s an idea…\r\n \r\nHow about making it really EASY for every visitor who shows up to get a personal phone call you as soon as they hit your site…\r\n \r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nYou’ll be amazed - the difference between contacting someone within 5 minutes versus a half-hour or more later could increase your results 100-fold.\r\n\r\nIt gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation.\r\n  \r\nThat way, even if you don’t close a deal right away, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nPretty sweet – AND effective.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-05-25 00:08:14', NULL),
(11, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found webtraininginstitute.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for SEO, looks like it’s working well.\r\n\r\nSo here’s my question – what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappear… forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work – and the great site you’ve built – go to waste?\r\n\r\nBecause the odds are they’ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut here’s a thought… what if you could make it super-simple for someone to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can – thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re still there at your site.\r\n  \r\nYou know, strike when the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to learn more about everything Talk With Web Visitor can do for your business – you’ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that don’t turn into paying customers. \r\nCLICK HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-06-03 06:14:19', NULL),
(12, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Hey, my name’s Eric and for just a second, imagine this…\r\n\r\n- Someone does a search and winds up at webtraininginstitute.com.\r\n\r\n- They hang out for a minute to check it out.  “I’m interested… but… maybe…”\r\n\r\n- And then they hit the back button and check out the other search results instead. \r\n\r\n- Bottom line – you got an eyeball, but nothing else to show for it.\r\n\r\n- There they go.\r\n\r\nThis isn’t really your fault – it happens a LOT – studies show 7 out of 10 visitors to any site disappear without leaving a trace.\r\n\r\nBut you CAN fix that.\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know right then and there – enabling you to call that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nPlus, now that you have their phone number, with our new SMS Text With Lead feature you can automatically start a text (SMS) conversation… so even if you don’t close a deal then, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nStrong stuff.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-06-03 15:11:50', NULL),
(13, 'Leandro Frisina', '0322 8745796', 'noreply@ghostdigital.co', 'Leandro Frisina', 'Here is your quotation regarding the promotion of your Google Maps listing\r\n\r\nhttps://www.ghostdigital.co/google-maps-citations/', '2020-06-08 22:19:07', NULL),
(14, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Good day, \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement – Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work you’ve done with webtraininginstitute.com definitely stands out. \r\n\r\nIt’s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catch… more accurately, a question…\r\n\r\nSo when someone like me happens to find your site – maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors don’t stick around – they’re there one second and then gone with the wind.\r\n\r\nHere’s a way to create INSTANT engagement that you may not have known about… \r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know INSTANTLY that they’re interested – so that you can talk to that lead while they’re literally checking out webtraininginstitute.com.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business – and it gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately (and there’s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you don’t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-06-09 14:21:55', NULL),
(15, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'My name’s Eric and I just came across your website - webtraininginstitute.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like webtraininginstitute.com will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE http://www.talkwithwebvisitor.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-06-12 05:53:47', NULL),
(16, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Hi, my name is Eric and I’m betting you’d like your website webtraininginstitute.com to generate more leads.\r\n\r\nHere’s how:\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you as soon as they say they’re interested – so that you can talk to that lead while they’re still there at webtraininginstitute.com.\r\n\r\nTalk With Web Visitor – CLICK HERE http://www.talkwithwebvisitor.com for a live demo now.\r\n\r\nAnd now that you’ve got their phone number, our new SMS Text With Lead feature enables you to start a text (SMS) conversation – answer questions, provide more info, and close a deal that way.\r\n\r\nIf they don’t take you up on your offer then, just follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nTry Talk With Web Visitor and get more leads now.\r\n\r\nEric\r\nPS: The studies show 7 out of 10 visitors don’t hang around – you can’t afford to lose them!\r\nTalk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-06-12 11:10:22', NULL),
(17, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Hi, Eric here with a quick thought about your website webtraininginstitute.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE http://www.talkwithwebvisitor.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-06-27 15:10:00', NULL),
(18, 'Ash Mansukhani', '(888) 938-8893', 'ash@techknowspace.com', 'Ash Mansukhani', 'Hello, \r\n\r\nMy Name is Ash and I Run Tech Know Space https://techknowspace.com We are your Premium GO-TO Service Centre for All Logic Board & Mainboard Repair\r\n\r\nWhen other shops say \"it can\'t be fixed\" WE CAN HELP!\r\n\r\nALL iPHONE 8 & NEWER\r\nBACK GLASS REPAIR - 1 HOUR\r\n \r\nDevices We Repair\r\nAudio Devices Audio Device Repair\r\n\r\nBluetooth Speakers - Headphones - iPod Touch\r\nComputers All Computer Repair\r\n\r\nAll Brands & Models - Custom Built - PC & Mac\r\nGame Consoles Game Console Repair\r\n\r\nPS4 - XBox One - Nintendo Switch\r\nLaptops All Laptop Repair\r\n\r\nAll Brands & Models - Acer, Asus, Compaq, Dell, HP, Lenovo, Toshiba\r\nMacBooks All MacBook Repair\r\n\r\nAll Series & Models - Air, Classic, Pro\r\nPhones All Phone Repair\r\n\r\nAll Brands & Models - BlackBerry, Huawei, iPhone, LG, OnePlus, Samsung, Sony\r\nSmart Watches Apple Watch Repair\r\n\r\nApple Watch - Samsung Gear - Moto 360\r\nTablets All Tablet Repair\r\n\r\nAll Brands & Models - iPad, Lenovo Yoga, Microsoft Surface, Samsung Tab\r\n\r\nDrone Repair\r\n\r\nCall us and tell us your issues today!\r\n\r\nToll Free: (888) 938-8893 \r\nhttps://techknowspace.com\r\n\r\nAsh Mansukhani\r\nash@techknowspace.com\r\nhttps://twitter.com/techknowspace\r\nhttps://www.linkedin.com/company/the-techknow-space', '2020-06-30 20:13:36', NULL),
(19, 'Monirul Islam', '01746383849', 'monirul166199@gmail.com', 'Decrising Prise', 'Assalamu Alaikum brother, your course has been very good, now I am completing it and I want to take it, but now my budget is less, if you consider me a little, I can take it.', '2020-07-10 12:42:02', NULL),
(21, 'Erik Furey', '06-88459089', 'noreplymonkeydigital@gmai.com', 'Erik Furey', 'Get backlinks from websites which have Domain Authority above 50. Very rare and hard to get backlinks. Order today at a very low price, while the offer lasts.\r\n\r\nread more:\r\nhttps://www.monkeydigital.co/product/250-da-50-backlinks/\r\n\r\nthanks and regards\r\nMonkey Digital Team\r\nsupport@monkeydigital.co', '2020-07-10 21:05:18', NULL),
(22, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Hi, my name is Eric and I’m betting you’d like your website webtraininginstitute.com to generate more leads.\r\n\r\nHere’s how:\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you as soon as they say they’re interested – so that you can talk to that lead while they’re still there at webtraininginstitute.com.\r\n\r\nTalk With Web Visitor – CLICK HERE http://www.talkwithwebvisitor.com for a live demo now.\r\n\r\nAnd now that you’ve got their phone number, our new SMS Text With Lead feature enables you to start a text (SMS) conversation – answer questions, provide more info, and close a deal that way.\r\n\r\nIf they don’t take you up on your offer then, just follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nTry Talk With Web Visitor and get more leads now.\r\n\r\nEric\r\nPS: The studies show 7 out of 10 visitors don’t hang around – you can’t afford to lose them!\r\nTalk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-07-15 12:21:55', NULL),
(23, 'Barbara Atyson', '0376 6753451', 'barbaratysonhw@yahoo.com', 'Barbara Atyson', 'Hi,\r\n\r\nWe\'d like to introduce to you our explainer video service which we feel can benefit your site webtraininginstitute.com.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=zvGF7uRfH04\r\nhttps://www.youtube.com/watch?v=cZPsp217Iik\r\nhttps://www.youtube.com/watch?v=JHfnqS2zpU8\r\n\r\nAll of our videos are in a similar animated format as the above examples and we have voice over artists with US/UK/Australian accents.\r\n\r\nThey can show a solution to a problem or simply promote one of your products or services. They are concise, can be uploaded to video such as Youtube, and can be embedded into your website or featured on landing pages.\r\n\r\nOur prices are as follows depending on video length:\r\n0-1 minutes = $169\r\n1-2 minutes = $279\r\n2-3 minutes = $389\r\n\r\n*All prices above are in USD and include a custom video, full script and a voice-over.\r\n\r\nIf this is something you would like to discuss further, don\'t hesitate to get in touch.\r\nIf you are not interested, simply delete this message and we won\'t contact you again.\r\n\r\nKind Regards,\r\nBarbara', '2020-07-27 20:31:49', NULL),
(24, 'Kristi Johansen', '416-409-6140', 'johansen.kristi@googlemail.com', 'Kristi Johansen', 'Hi there,\r\n\r\nAre You Using Videos to Turn webtraininginstitute.com Website Traffic into Leads???\r\n\r\nIf a picture is worth a thousand words, a product video could very well be worth a thousand sales. Considering that video now appears in 70% of the top 100 search results listings, and that viewers are anywhere from 64-85% more likely to buy after watching a product video – this is one marketing force you can’t afford to ignore. Here’s why:\r\n\r\nOnline video marketing has finally come of age. We no longer have to deal with a glut of sluggish connections, incompatible technologies or bland commercials begging for our business. These days, smart companies and innovative entrepreneurs are turning the online broadcast medium into a communications cornucopia: a two-way street of give-and-take.\r\n\r\nHow Well Does Online Video Convert?\r\nThe great thing about online video is that people vastly prefer watching over reading (just consider the last time you watched the news versus reading a newspaper!) It spans nearly every industry and demographic. \r\n\r\nYou know that few things are more annoying. when watching a video,,,\r\nthan a terrible audio track – tinny sounding, bad volume and you struggle to get what is being said…\r\nBut even WORSE! Text To Speech!\r\n\r\nThose terrible Text To Speech audios on videos that sound…\r\nFake, emotionless, robotic and cheap!\r\nThat makes me hit the Back Button every time\r\n\r\nSo what to do if we don’t have a nice voice for our own or our clients videos?\r\nWe pay somebody to do it for us, and that ain’t cheap! There was no real alternative…\r\nUNTIL NOW!\r\n\r\n> http://www.zoomsoft.net/Text2Speach\r\n\r\nSpeechelo is the incredible new Text To Speech software that actually sounds like Real People\r\nwith pauses, tone, inflection – so much so that you are hard put to tell that it’s not a Real Person.\r\n\r\nIn just a few clicks you can have natural sounding Voice-overs for your videos.\r\n\r\nIt’s available at an incredible low price if you are quick.\r\nJust listen to the app, in action in the Sales video on the page…\r\n\r\n> http://www.zoomsoft.net/Text2Speach\r\n\r\n\r\nIf you would like to stop future emails, http://www.zoomsoft.net/unsubscribe', '2020-07-28 17:09:39', NULL),
(25, 'Claudia Clement', '426 1279', 'claudiauclement@yahoo.com', 'Claudia Clement', 'Hi, We are wondering if you would be interested in our service, where we can provide you with a dofollow link from Amazon (DA 96) back to webtraininginstitute.com?\r\n\r\nThe price is just $77 per link, via Paypal.\r\n\r\nTo explain what DA is and the benefit for your website, along with a sample of an existing link, please read here: https://pastelink.net/1nm60\r\n\r\nIf you\'d be interested in learning more, reply to this email but please make sure you include the word INTERESTED in the subject line field, so we can get to your reply sooner.\r\n\r\nKind Regards,\r\nClaudia', '2020-08-01 16:52:32', NULL),
(26, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found webtraininginstitute.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for SEO, looks like it’s working well.\r\n\r\nSo here’s my question – what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappear… forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work – and the great site you’ve built – go to waste?\r\n\r\nBecause the odds are they’ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut here’s a thought… what if you could make it super-simple for someone to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can – thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re still there at your site.\r\n  \r\nYou know, strike when the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to learn more about everything Talk With Web Visitor can do for your business – you’ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that don’t turn into paying customers. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-08-11 15:17:38', NULL),
(27, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - webtraininginstitute.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n \r\nBut if you don’t mind me asking – after someone like me stumbles across webtraininginstitute.com, what usually happens?\r\n\r\nIs your site generating leads for your business? \r\n \r\nI’m guessing some, but I also bet you’d like more… studies show that 7 out 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHere’s a thought – what if there was an easy way for every visitor to “raise their hand” to get a phone call from you INSTANTLY… the second they hit your site and said, “call me now.”\r\n\r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nThat’s why we built out our new SMS Text With Lead feature… because once you’ve captured the visitor’s phone number, you can automatically start a text message (SMS) conversation.\r\n  \r\nThink about the possibilities – even if you don’t close a deal then and there, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nWouldn’t that be cool?\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-08-11 17:19:45', NULL),
(28, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found webtraininginstitute.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for SEO, looks like it’s working well.\r\n\r\nSo here’s my question – what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappear… forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work – and the great site you’ve built – go to waste?\r\n\r\nBecause the odds are they’ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut here’s a thought… what if you could make it super-simple for someone to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can – thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re still there at your site.\r\n  \r\nYou know, strike when the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to learn more about everything Talk With Web Visitor can do for your business – you’ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that don’t turn into paying customers. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-08-12 17:01:56', NULL),
(29, 'Calvin Avila', '06-70589295', 'avila.calvin@hotmail.com', 'Calvin Avila', 'hi there\r\nI have just checked webtraininginstitute.com for the ranking keywords and seen that your SEO metrics could use a boost.\r\n\r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support.\r\n\r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/\r\n\r\nStart increasing your sales and leads with us, today!\r\n\r\nBe safe and best regards\r\n\r\nMike\r\nHilkom Digital Team\r\nsupport@hilkom-digital.de', '2020-08-31 20:55:14', NULL),
(30, 'Mozammel', '01865772755', 'mozammelk21@gmail.com', 'কোর্সের বিস্তারিত', 'কোর্সের বিস্তারিত একটি কথা জানার ছিল।\r\nভিডিও  লিংক জিমেইলে আসার পরে সেটা কি      ডাউনলোড করা যাবে সেটা একটু জানার চিলো', '2020-09-12 14:50:03', NULL),
(31, 'Alannah Strub', '902-980-8248', 'alannah.strub@yahoo.com', 'Alannah Strub', 'This Google doc exposes how this scamdemic is part of a bigger plan to crush your business and keep it closed or semi-operational (with heavy rescritions) while big corporations remain open without consequences. This Covid lie has ruined many peoples lives and businesses and is all done on purpose to bring about the One World Order. It goes much deeper than this but the purpose of this doc is to expose the evil and wickedness that works in the background to ruin peoples lives. So feel free to share this message with friends and family. No need to reply to the email i provided above as its not registered. But this information will tell you everything you need to know. https://docs.google.com/document/d/18u2MsgvHDPfMtTgLRRIT26oDmYBlWDzAPl05mjeswK8/edit', '2020-09-14 16:30:29', NULL),
(32, 'Dee Trudel', '01.84.67.65.56', 'support@hyperlabs.co', 'Dee Trudel', 'hi there\r\nhere is the your quote on the Country targeted organic website traffic:\r\n\r\nhttps://hyperlabs.co/quote/\r\n\r\nthanks and regards\r\nMike\r\nHyperlabs LTF', '2020-09-14 20:51:45', NULL),
(33, 'Adam Prakash', '0611-4455922', 'adam.forfallahc@businesspromoted.online', 'Adam Prakash', 'I am expert SEO consultant and was looking for potential sites where I can help. \r\n\r\nHere is your current tarffic analyzer report: https://app.neilpatel.com/en/traffic_analyzer/overview?&domain=webtraininginstitute.com    \r\n\r\nWe can certainly do better! \r\n\r\nI have analyzed your site in-depth and you can view your website audit report at\r\n\r\nhttps://businesspromoted.websiteauditserver.com/webtraininginstitute.com\r\n\r\n\r\nYou have created good website but your site will not rank in Google until content and images are  optimized correctly. We need to optimize your website for search engines and make it search engine friendly. With in-depth keyword research and on-page optimization we can easily improve your traffic. \r\n\r\nOur backlink building strategy is simple but powerful. We will reverse engineer competitor\'s link building strategies and get the links from similar sources.\r\n\r\nIts perfect time to plan your marketing strategy. \r\n\r\nif you have a keyword in mind where you want to rank then please let me know and I will use that seed keyword to create detailed plan of action for you to show you how to rank for that keyword. If you want me to do keyword research then I will be happy to do that also. \r\n\r\nOur SEO packages start from $500/month. I will also include free social media marketing.\r\n\r\nI will offer 7 days of free trial so that you can experience our expertise. \r\n\r\nLooking forward to working with you.\r\n\r\nAdam Prakash\r\nBusiness Development Manager\r\nBusiness Promoted', '2020-09-22 17:39:09', NULL),
(34, 'Adam Prakash', '0651 37 72 11', 'adam.hpkwok91@businesspromoted.online', 'Adam Prakash', 'I am expert SEO consultant and was looking for potential sites where I can help. \r\n\r\nHere is your current tarffic analyzer report: https://app.neilpatel.com/en/traffic_analyzer/overview?&domain=webtraininginstitute.com    \r\n\r\nWe can certainly do better! \r\n\r\nI have analyzed your site in-depth and you can view your website audit report at\r\n\r\nhttps://businesspromoted.websiteauditserver.com/webtraininginstitute.com\r\n\r\n\r\nYou have created good website but your site will not rank in Google until content and images are  optimized correctly. We need to optimize your website for search engines and make it search engine friendly. With in-depth keyword research and on-page optimization we can easily improve your traffic. \r\n\r\nOur backlink building strategy is simple but powerful. We will reverse engineer competitor\'s link building strategies and get the links from similar sources.\r\n\r\nIts perfect time to plan your marketing strategy. \r\n\r\nif you have a keyword in mind where you want to rank then please let me know and I will use that seed keyword to create detailed plan of action for you to show you how to rank for that keyword. If you want me to do keyword research then I will be happy to do that also. \r\n\r\nOur SEO packages start from $500/month. I will also include free social media marketing.\r\n\r\nI will offer 7 days of free trial so that you can experience our expertise. \r\n\r\nLooking forward to working with you.\r\n\r\nAdam Prakash\r\nBusiness Development Manager\r\nBusiness Promoted', '2020-09-24 05:46:33', NULL),
(35, 'Kristy Tiemann', '618-938-0043', 'tiemann.kristy@gmail.com', 'Kristy Tiemann', 'Do you want more people to visit your website? Get thousands of people who are ready to buy sent directly to your website. Boost your profits quick. Start seeing results in as little as 48 hours. For more info Visit: http://bit.ly/buy-website-visitors', '2020-09-27 22:21:43', NULL),
(36, 'Jamel Cruickshank', '06-94995538', 'jamel.cruickshank78@yahoo.com', 'Jamel Cruickshank', 'Hi,\r\n\r\nWe\'re wondering if you\'ve considered taking the written content from webtraininginstitute.com and converting it into videos to promote on Youtube? It\'s another method of generating traffic.\r\n\r\nThere\'s a 14 day free trial available to you at the following link: https://www.vidnami.com/c/HarryO-vn-freetrial\r\n\r\nRegards,\r\nJamel', '2020-09-28 11:15:55', NULL),
(37, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - webtraininginstitute.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n \r\nBut if you don’t mind me asking – after someone like me stumbles across webtraininginstitute.com, what usually happens?\r\n\r\nIs your site generating leads for your business? \r\n \r\nI’m guessing some, but I also bet you’d like more… studies show that 7 out 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHere’s a thought – what if there was an easy way for every visitor to “raise their hand” to get a phone call from you INSTANTLY… the second they hit your site and said, “call me now.”\r\n\r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nThat’s why we built out our new SMS Text With Lead feature… because once you’ve captured the visitor’s phone number, you can automatically start a text message (SMS) conversation.\r\n  \r\nThink about the possibilities – even if you don’t close a deal then and there, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nWouldn’t that be cool?\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-09-29 05:14:27', NULL),
(38, 'Hong Lai', '0494 84 71 94', 'hong.lai@gmail.com', 'Hong Lai', 'Say no to paying thousands of $$ for overpriced Google advertising! I have a system that costs only a small bit of cash and generates an almost infinite volume of web traffic to your website\r\n\r\nGet more info by visiting: http://bit.ly/endless-traffic-forever', '2020-10-03 01:33:33', NULL),
(39, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Hey, this is Eric and I ran across webtraininginstitute.com a few minutes ago.\r\n\r\nLooks great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website – either through Search or just bouncing around – what happens next?  Do you get a lot of leads from your site, or at least enough to make you happy?\r\n\r\nHonestly, most business websites fall a bit short when it comes to generating paying customers. Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment.\r\n\r\nHere’s an idea…\r\n \r\nHow about making it really EASY for every visitor who shows up to get a personal phone call you as soon as they hit your site…\r\n \r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nYou’ll be amazed - the difference between contacting someone within 5 minutes versus a half-hour or more later could increase your results 100-fold.\r\n\r\nIt gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation.\r\n  \r\nThat way, even if you don’t close a deal right away, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nPretty sweet – AND effective.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-10-09 00:55:02', NULL),
(40, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - webtraininginstitute.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n \r\nBut if you don’t mind me asking – after someone like me stumbles across webtraininginstitute.com, what usually happens?\r\n\r\nIs your site generating leads for your business? \r\n \r\nI’m guessing some, but I also bet you’d like more… studies show that 7 out 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHere’s a thought – what if there was an easy way for every visitor to “raise their hand” to get a phone call from you INSTANTLY… the second they hit your site and said, “call me now.”\r\n\r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nThat’s why we built out our new SMS Text With Lead feature… because once you’ve captured the visitor’s phone number, you can automatically start a text message (SMS) conversation.\r\n  \r\nThink about the possibilities – even if you don’t close a deal then and there, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nWouldn’t that be cool?\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-10-11 22:04:19', NULL),
(41, 'Sherlyn Barlee', '(21) 2798-7148', 'barlee.sherlyn@outlook.com', 'Sherlyn Barlee', 'Looking for fresh buyers? Receive hundreds of keyword targeted visitors directly to your site. Boost revenues fast. Start seeing results in as little as 48 hours. To get info Have a look at: http://www.easy-web-traffic.xyz', '2020-10-15 11:17:42', NULL),
(42, 'Alissa Grimstone', '06-61249439', 'grimstone.alissa@yahoo.com', 'Alissa Grimstone', 'Say no to paying 1000\'s of dollars for overpriced Google ads! I can show you a system that requires only a tiny bit of cash and delivers an almost endless amount of traffic to your website\r\n\r\nFor all the details, check out: http://www.permanent-web-links.xyz', '2020-10-22 02:43:19', NULL),
(43, 'Jaime Derry', '02191 70 69 11', 'derry.jaime@gmail.com', 'Jaime Derry', 'Do you want to submit your advertisement on thousands of online ad websites every month? For a small monthly payment you can get almost unlimited traffic to your site forever!\r\n\r\nFor details check out: http://bit.ly/no-cost-web-traffic', '2020-10-25 08:06:52', NULL);
INSERT INTO `contactuses` (`id`, `name`, `phone`, `email`, `message_name`, `your_message`, `created_at`, `updated_at`) VALUES
(44, 'Eric Jones', '416-385-3200', 'eric@talkwithwebvisitor.com', 'Eric Jones', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found webtraininginstitute.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for SEO, looks like it’s working well.\r\n\r\nSo here’s my question – what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappear… forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work – and the great site you’ve built – go to waste?\r\n\r\nBecause the odds are they’ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut here’s a thought… what if you could make it super-simple for someone to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can – thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re still there at your site.\r\n  \r\nYou know, strike when the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to learn more about everything Talk With Web Visitor can do for your business – you’ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that don’t turn into paying customers. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=webtraininginstitute.com', '2020-10-26 22:08:34', NULL),
(45, 'Leonida Ewart', '462 04 492', 'leonida.ewart@gmail.com', 'Leonida Ewart', 'Yes you can promote your website without any cost at all!\r\n\r\nTake a peek at this amazing list of the hottest new classified ad sites over here >>http://bit.ly/list-of-free-ad-websites', '2020-10-29 08:39:25', NULL);

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

--
-- Dumping data for table `dvdquestions`
--

INSERT INTO `dvdquestions` (`id`, `name`, `phone`, `question`, `created_at`, `updated_at`) VALUES
(1, 'Md. Shafiqul Islam', '01558150037', 'এই কোর্সে  সর্ব মোট কতটি ভিডিও টিউটরিয়াল আছে।', '2020-03-17 20:20:32', NULL),
(2, 'nayeem', '01748682848', 'i want to talk to you about admission process nd others\r\npls!', '2020-04-22 10:28:30', NULL),
(3, 'Mohammad Ismail', '01849729699', 'আচ্ছালামু আলাইকুম... \r\nভাইয়া আমার একটা প্রশ্ন ছিল‌।\r\nআমি আপনার সবগুলো ভিডিও অনেক আগে থেকে দেখেছি।\r\n\r\nএখন আমি যদি কোর্সটি ডিভিড়ির মাধ্যমে নি তাহলে কোর্সটি কিভাবে পাবো কারণ এখনতো সব ধরনের কুরিয়ার বন্ধ।\r\nআমাকে একটু জানাবেন।', '2020-04-25 10:16:32', NULL),
(4, 'Ariful islam', '+971562092877', 'Ami Dubai thaki sir. Ami ki babe nite pari course ta. Pls janaven', '2020-04-29 15:19:38', NULL),
(5, 'Sultan nadim', '01827601472', 'Vai success course at ki YouTube their download more neya jabe..?.ami free course are 56 at video an k dekhe sea korlam    ... Akron vai advance level at site chai...vai payment a kick discount day have?ektu janaben.', '2020-06-13 15:09:08', NULL),
(6, 'Md Asadul Islam Asad', '01798966886', 'Ami HTML and CSS sikhe niyeci but akhon kaj korte gele ba taka incame korte gele ki korte hobe and kivabe korte hobe ata jodi aktu bolen vai.....\r\nAmi Rangpur theke......vai amar kaj sekhar khub issa..', '2020-07-04 14:39:47', NULL),
(7, 'মোজাম্মেল', '01865772755', 'কোর্সের ফ্রি এখন কতো টাকা করে?', '2020-09-12 16:27:18', NULL),
(8, 'মোজাম্মেল', '০১৮৬৫৭৭২৭৫৫', 'কোর্সের ফ্রি বর্তমানে কতো টাকা', '2020-09-16 06:22:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `freecourses`
--

CREATE TABLE `freecourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `freecourse_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'freecourse_img.jpg',
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_one` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_two` longtext COLLATE utf8mb4_unicode_ci,
  `description_three` longtext COLLATE utf8mb4_unicode_ci,
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
  `delivary_address` longtext COLLATE utf8mb4_unicode_ci,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bks_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bks_trxid` text COLLATE utf8mb4_unicode_ci,
  `rocket_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rocket_trxid` text COLLATE utf8mb4_unicode_ci,
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `name`, `phone`, `email`, `order`, `delivary_address`, `payment`, `bks_number`, `bks_trxid`, `rocket_number`, `rocket_trxid`, `condition`, `created_at`, `updated_at`) VALUES
(1, '2441', 'Priya devi', '01532338607', 'ahraa336@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01871245202', 'Tx=7CA2QKJ2VY', NULL, NULL, 'yes', '2020-03-10 21:41:02', NULL),
(2, '4149', 'Mahadi Hasan', '01868655178', 'mahadihasanshuvo01868655178@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01841110090', '7DG49MCERU', NULL, NULL, 'yes', '2020-04-16 13:38:22', NULL),
(3, '4430', 'MD Touhidul Islam', '01795209794', 'matouhidul1@gmail.com', 'Download Link', NULL, 'Rocket Transfer', NULL, NULL, '01516028470', '1705894174', 'yes', '2020-04-21 12:57:25', NULL),
(4, '4242', 'Md Mamun Sorder', '01637263491', 'mdmamunsd9@gmail.com', 'Download Link', NULL, 'Rocket Transfer', NULL, NULL, '018626277176', '1706103396', 'yes', '2020-04-21 15:22:40', NULL),
(5, '4918', 'Robin Khan', '01756921347', 'robiulhassan140@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01756921347', '7DM9CM6FI1', NULL, NULL, 'yes', '2020-04-22 11:26:26', NULL),
(6, '3835', 'Rifat Mojumder', '01632904010', 'rifatmojumder2002@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01632904010', '7DM1CMAUEN', NULL, NULL, 'yes', '2020-04-22 11:26:38', NULL),
(7, '3368', 'Md. Parvez', '01951790143', 'md.parvez222444@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01627685838', '7DM3CMXNXP', NULL, NULL, 'yes', '2020-04-22 12:08:33', NULL),
(8, '1225', 'khalil Rahaman', '96599867377', 'knaz6767@gmail.com', 'Download Link', 'COMILLA JUDGE COURTE( EAST GATE ) BISMILLAH COMPUTERS\r\nKAPTAN BAZAR .COMILLA CITY\r\n01715735168 ----   01811990099--- 01711136529', 'Bks Transfer', '01868752464', '01771016633', NULL, NULL, 'yes', '2020-04-22 13:26:43', NULL),
(9, '3551', 'Sumon chandra pal', '01912443827', 'sumonpal194@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01912443827', '7DN5D1EWWD', NULL, NULL, 'yes', '2020-04-23 08:43:57', NULL),
(10, '2164', 'Masud Bin Ahmed', '01740435651', 'masudcse16@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01823611454', '7DN9D96N8P', NULL, NULL, 'yes', '2020-04-23 16:21:48', NULL),
(11, '2540', 'আব্দুল কাদের', '01971891979', 'abdulkaderbd375@gmail.com', 'Download Link', NULL, 'Rocket Transfer', NULL, NULL, '01971891979', '1708531332', 'yes', '2020-04-23 17:45:01', NULL),
(12, '1400', 'Md Jan E Alam Fouad', '01877737048', 'janealamfouad@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01877737048', '7DO8DHXKY6', NULL, NULL, 'yes', '2020-04-24 08:53:47', NULL),
(13, '4036', 'Maruf Hossain', '01893670348', 'marufshobo@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01318839790', '7D03D0D9VD', NULL, NULL, 'yes', '2020-04-24 14:55:14', NULL),
(14, '1355', 'MD.RUBEL MIA', '01717070087', 'mdrubelmia1121@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01943446674', '7DP6DXE1QO', NULL, NULL, 'yes', '2020-04-25 08:38:37', NULL),
(15, '4362', 'Mohammad Ismail', '01849729699', 'mdismailkhan187@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01849729699', '7DR1EZOJON', NULL, NULL, 'yes', '2020-04-27 17:40:27', NULL),
(16, '2388', 'Md. Salmonil Hasan', '01626357934', 'hasansalmonil@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01704704520', '7DS9F6Q3X1', NULL, NULL, 'yes', '2020-04-28 08:49:48', NULL),
(17, '4319', 'Sajib Poddar', '01675115714', 'sajib.anoy@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01675115714', '7DU0G03KNI', NULL, NULL, 'yes', '2020-04-30 06:13:29', NULL),
(18, '1981', 'Ummey salma oni', '01892251577', 'ummeyoni1995@gmail.com', 'Download Link', NULL, 'Rocket Transfer', NULL, NULL, '01737626131', '1715946433', 'yes', '2020-04-30 15:37:03', NULL),
(19, '3580', 'Md Hasan Miah', '01796326423', 'mdhasanmiahtangail@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01820894232', '7E16GBA8OM', NULL, NULL, 'yes', '2020-04-30 18:10:31', NULL),
(20, '2236', 'Md.Enamul Kabir', '01713163883', 'mdenamulkabir@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01717180115', '7E14GJ34Z2', NULL, NULL, 'yes', '2020-05-01 08:54:30', NULL),
(21, '1698', 'Md. Maksudur Rahman', '01724497579', 'm.tuhin02bd@yahoo.com', 'Download Link', NULL, 'Bks Transfer', '01724497579', '7E28GXZAYK', NULL, NULL, 'yes', '2020-05-02 06:29:33', NULL),
(22, '2023', 'SHAMIK', '01611711233', 'arohiill385@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01819206123', '7E36HDR5U4', NULL, NULL, 'yes', '2020-05-03 06:36:42', NULL),
(24, '4716', 'Azim Afnaan', '01619654128', 'azim.afnan@yahoo.com', 'Download Link', NULL, 'Bks Transfer', '01891908060', '7E33HG909D', NULL, NULL, 'yes', '2020-05-03 08:49:35', NULL),
(25, '1331', 'Jamil', '01726079794', 'jsjamil28@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01726079794', '7E39HMOLYL', NULL, NULL, 'yes', '2020-05-03 14:19:16', NULL),
(26, '3029', 'Md. Ashikur Rahman', '01981159811', 'ashikur809@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01981159811', '7E44HWPH3K', NULL, NULL, 'yes', '2020-05-04 08:05:33', NULL),
(27, '2410', 'Md. Shafiqul Islam (Ripon)', '01726194403', 'ripon.alien@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01910050155', '7E59IDCG9B', NULL, NULL, 'yes', '2020-05-05 07:21:14', NULL),
(28, '4393', 'Md.Rabbi Hasan', '01965148773', 'e13rabbi@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01977551109', '7E68ISE4G8', NULL, NULL, 'yes', '2020-05-06 07:13:21', NULL),
(29, '4080', 'Md. Faruk Hossen', '01711222741', 'faa434@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01711222741', '7EA2KUKQF6', NULL, NULL, 'yes', '2020-05-10 11:25:19', NULL),
(30, '2296', 'Md. Akhter Hossain akash', '01717475059', 'akhterhossain.info.786@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01717475059', '7EA2KV185M', NULL, NULL, 'yes', '2020-05-10 14:10:10', NULL),
(31, '2379', 'Md Bayezid Hossain', '01781061850', 'bayezidnirat28@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01944874983', '7EA8L0BVRI', NULL, NULL, 'yes', '2020-05-10 16:25:18', NULL),
(32, '2186', 'Md.khalaquzzaman.Liton', '01714084791', 'khalequzzaman.08@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01779015399', '7ED7M7U37N', NULL, NULL, 'yes', '2020-05-13 04:59:52', NULL),
(33, '1625', 'Riasat Raihan Noor', '01672702437', 'riasatraihan@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01534205003', '7EE3MNUBJ3', NULL, NULL, 'yes', '2020-05-13 21:05:22', NULL),
(34, '4012', 'Mohammad Sadat Rahman', '01993280618', 'jonysadat1@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01993280618', '7EG3O9F9CJ', NULL, NULL, 'yes', '2020-05-16 14:11:46', NULL),
(35, '1591', 'tanveer sakib shaon', '+966592805061', 'tanveersakibshaon@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01873724242', '7EH6OSE931', NULL, NULL, 'yes', '2020-05-17 13:04:35', NULL),
(36, '1125', 'Paul Roy', '01733540270', 'paulroy9010@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01934191592', 'TrxID:7EH8ON1KAA', NULL, NULL, 'yes', '2020-05-18 17:44:26', NULL),
(37, '1081', 'Ruman khan', '01309179368', 'rumank180@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01309179368', '7EJ8Q5VLNM', NULL, NULL, 'yes', '2020-05-19 14:15:49', NULL),
(38, '1977', 'golam hasnat', '01629719292', 'himel700@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01629719292', '7EM9RJEEY1', NULL, NULL, 'yes', '2020-05-21 19:33:05', NULL),
(39, '2481', 'Md Aktharuzzaman miay', '01948996627', 'akhteruzzaman461@gmail.com', 'Download Link', NULL, 'Rocket Transfer', NULL, NULL, '019489966271', 'Tk2,000.00 transferred to A/C:018687524643 Fee:Tk1.27, Your A/C Balance: Tk311.96 TxnId:1755363871 Date:23-MAY-20 03:28:02 pm. Download https://bit.ly/nexuspay', 'yes', '2020-05-23 09:43:58', NULL),
(40, '2731', 'Tazveer', '01615963953', 'tanveerhossainkhan007@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01675963953', '7EV1WI67JJ', NULL, NULL, 'yes', '2020-05-31 04:39:13', NULL),
(41, '1633', 'Md.Rasel Uddin', '01736153003', 'raselwh@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01911164965', '7F3010T348', NULL, NULL, 'yes', '2020-06-03 05:33:45', NULL),
(42, '3440', 'Jakir hussain', '01778943653', 'jakirhussain88534@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01778943653', '7F491IFTCT', NULL, NULL, 'yes', '2020-06-04 04:31:29', NULL),
(43, '4855', 'MD YUNUS', '01835802179', 'mdyunusjaber79@mail.com', 'Download Link', NULL, 'Bks Transfer', '01835802179', '7F502ANDGG', NULL, NULL, 'yes', '2020-06-05 14:00:38', NULL),
(44, '4603', 'Arman Islam', '01531768342', 'amiarman932@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01714437828', '7FA04RE2DU', NULL, NULL, 'yes', '2020-06-10 08:45:08', NULL),
(45, '3865', 'Shawon Miah', '01949328232', 'shawonmd16@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01949328232', '7FB55CIJ8D', NULL, NULL, 'yes', '2020-06-11 10:16:59', NULL),
(46, '2059', 'sultan nadim', '01827601472', 'sultan5218coc@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01827601472', '7FF77KYCBX', NULL, NULL, 'yes', '2020-06-15 13:45:07', NULL),
(47, '3639', 'A K M Didarul Alam', '01711679562', 'didarul.alam@dhaka.net', 'Download Link', NULL, 'Bks Transfer', '01707080758', '7FF87IVCPA', NULL, NULL, 'yes', '2020-06-15 14:55:55', NULL),
(48, '4387', 'Rumana Parvin', '01611001161', 'rumanaparvin323@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01711288939', '7FL6AFO21E', NULL, NULL, 'yes', '2020-06-21 07:09:52', NULL),
(49, '4928', 'Rumana Parvin', '01611001161', 'rumanaparvin323@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01711288939', '7FL6AFO21E', NULL, NULL, 'yes', '2020-06-21 07:15:50', NULL),
(50, '1040', 'Md. Shihab Hasan', '01638099544', 'shihab.cse.knu@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01741493196', '7FM9AYPFR3', NULL, NULL, 'yes', '2020-06-22 07:13:43', NULL),
(51, '1128', 'Md Faysal Hossain', '01768595679', 'faysalhossain679@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01768595679', '7FN6BNF9Q2', NULL, NULL, 'yes', '2020-06-23 12:46:18', NULL),
(52, '1300', 'Raju', '01868752464', 'raju@gmil.com', 'Download Link', NULL, 'Bks Transfer', '01318948051', 'Dgfdbkssb', NULL, NULL, 'yes', '2020-07-02 10:22:26', NULL),
(53, '4272', 'Sarwar', '01558962965', 'sarwarmorsed2015@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01673035397', '7G34H1UKAG', NULL, NULL, 'yes', '2020-07-03 13:48:05', NULL),
(54, '3959', 'Rahat', '01637551985', 'rahathossain1112@gmail.com', 'Download Link', 'জেলা:চট্টগ্রাম, উপজেলা: মিরসরাই\r\nসুন্দরবন  সার্ভিস বারইয়ারহাট শাখা বললে হবে', 'Bks Transfer', '01637551985', '7G66IQNPZ4', NULL, NULL, 'yes', '2020-07-06 12:37:21', NULL),
(55, '4470', 'Adiba diya', '01307316953', 'adiba.diya01@gmail.com', 'Download Link', NULL, 'Rocket Transfer', NULL, NULL, '019635881285', '1819264179', 'yes', '2020-07-08 07:28:12', NULL),
(56, '1259', 'Md Mithun Islam', '01795388188', 'mithunkpi2011@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01795388188', '7GD3MO5OXP', NULL, NULL, 'yes', '2020-07-13 09:20:27', NULL),
(57, '3015', 'Diponkor das', '01835391221', 'diponkor.dip1998@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01835391221', '7GK5QHUT1H', NULL, NULL, 'yes', '2020-07-20 07:08:54', NULL),
(58, '2540', 'Toushif Ahmed', '01969356062', 'toushif15-8571@diu.edu.bd', 'Download Link', NULL, 'Bks Transfer', '01819213627', '7G01SWCM7Z', NULL, NULL, 'yes', '2020-07-24 08:26:10', NULL),
(59, '4845', 'Jahid Hasan', '01701080122', 'freelancerjahid.hstu@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01851993215', '7GQ7UFGSH1', NULL, NULL, 'yes', '2020-07-26 14:40:19', NULL),
(60, '2674', 'Md. Sabbir Hosen', '01671051982', 'sabbir338333@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01671051982', '7GR0UQ0MJ8', NULL, NULL, 'yes', '2020-07-27 06:12:20', NULL),
(61, '1567', 'Md. Saiful Islam', '01849485393', 'md.syful.max970@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01755699228', '7GV90ETH63', NULL, NULL, 'yes', '2020-07-31 05:19:02', NULL),
(62, '1957', 'Hridoy', '01811273977', 'arafathridoy01811@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01862271667', '7GV20U6LI2', NULL, NULL, 'yes', '2020-07-31 14:38:38', NULL),
(63, '3945', 'Md.Akash biswas', '01610570868', 'Mdakashbiswas63@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01842090417', '7H1117PQQ1', NULL, NULL, 'yes', '2020-08-01 21:14:06', NULL),
(64, '2092', 'Md.', 'Mohiuddin', 'mohictg35@gmail.com', 'DVD ORDER', 'সুন্দরবন কুরিয়ার সার্ভিসঃ খাতুনগঞ্জ শাখা, চট্টগ্রাম।', 'Bks Transfer', '01866383191', '7HA55NK309', NULL, NULL, 'yes', '2020-08-10 09:46:15', NULL),
(65, '2920', 'Roni Kar', '9710501427470', 'jroy15941@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01868752464', '01631290505', NULL, NULL, 'yes', '2020-08-19 11:48:59', NULL),
(66, '2424', 'Rasel ahammed', '01307366655', 'aexpress835@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01765653940', '7HM9BV2UYM', NULL, NULL, 'yes', '2020-08-22 06:30:28', NULL),
(67, '3103', 'Md. Mushfikur Rahman Rizvy', '01719716070', 'rizvynews24@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01719716070', '7HN5CNRNWX', NULL, NULL, 'yes', '2020-08-23 13:13:50', NULL),
(68, '4191', 'Md Biplob Sarker', '01755351859', 'biplobskr5559@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01885438129', '7HQ5E3Z689', NULL, NULL, 'yes', '2020-08-26 06:04:32', NULL),
(69, '1924', 'Md. Abdus Salam', '01830155909', 'FreelancerSalam0419@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01780372995', '7HR7EXZXRP', NULL, NULL, 'yes', '2020-08-27 11:50:51', NULL),
(70, '1849', 'kazi Nahid Nayem', '01990346764', 'kazineom2018@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01990346764', '7HS8FERDP4', NULL, NULL, 'yes', '2020-08-28 10:11:04', NULL),
(71, '1173', 'Shakir Rahman', '01879369754', 'shakirrahman950@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01733739857', '7HU9GDWG7F', NULL, NULL, 'yes', '2020-08-30 06:24:39', NULL),
(72, '4680', 'Asad Nur', '01575230575', 'asadnur468198@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01575230575', '7I66KTU6I8', NULL, NULL, 'yes', '2020-09-06 15:42:09', NULL),
(73, '3353', 'Md.Anower Hossen', '01625748262/01816095016', 'anowerhossen004@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01937893624', '7IG0QRB4YS', NULL, NULL, 'yes', '2020-09-16 13:20:06', NULL),
(74, '1235', 'Mahmud Hassan', 'Mahmudulhasanmeghna38@gmail.com', NULL, 'Download Link', NULL, 'Bks Transfer', '01910514200', '7IG6QT3H8I', NULL, NULL, 'yes', '2020-09-16 14:21:12', NULL),
(75, '3727', 'মো: সুমন আলী', '01722424632/01751857823', 'sumanmail7401@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01767296004', '7IKSWZ838', NULL, NULL, 'yes', '2020-09-20 13:49:37', NULL),
(76, '3809', 'Shuhel Ahmed', '01865381235', 'shuhel020@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01825392958', '7J2828BGBK', NULL, NULL, 'yes', '2020-10-02 08:13:47', NULL),
(77, '1296', 'Sadia Haque', '01715623455', 'sadiahaque2017@gmail.com', 'Download Link', NULL, 'Bks Transfer', '01847074534', '7JLIDP8XOD', NULL, NULL, 'yes', '2020-10-21 08:33:04', NULL);

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
  `link` longtext COLLATE utf8mb4_unicode_ci,
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
(5, 'Rimon Hasan', 'vaiya ami daffodil international university te cse korchi,, ami web design sekhar jonno vorti o hoyechi ekta course e 15 hazar taka diye,, oi khane je sir course ta nei ,, tar kono class ei ami thik moto bujte pari na,, tokhon ami youtube e khujte khujte apnar tutorial pelam,, apni eto sundor kore sob kichu bujiyechen, ami oikhan theke class kore aser pore apnar tutorial follow kori,, apnader ke onk onk dhonnobad vaiya,,', '5.jpg', '2020-02-15 14:39:06', '2020-02-15 14:39:07'),
(9, 'Anonymous', 'আমি এখান থেকে অনেক হেল্প পেয়েছি আর জিনিস গুলাও খুব সুন্দর করে বুঝানো হয়েছে।সামনে আর ভালো দেখতে চাই।', 'student_img.jpg', '2020-02-17 06:59:45', NULL),
(11, 'Md Jan E Alam', 'Web development er bangla course ei prothom dekhlam je eto efford diye free te video korsen. valo laglo. asa kori apnader premium course e ongsogrohon korbo.', 'student_img.jpg', '2020-02-26 00:57:28', NULL),
(12, 'Mamun Sd', 'Web Training Institute is a distinguished establishment with many beautiful web design lessons from them.', 'student_img.jpg', '2020-03-14 02:10:43', NULL),
(19, 'Raiful', 'I watched all of youtube video(part 1-57) regarding basic web design . These video is really so much helpful for beginners. The teaching style of Rajiur Bhai\'s just awesome. May allah bless him.', 'student_img.jpg', '2020-04-05 03:59:49', NULL),
(23, 'Sajib Poddar', 'ইউটিউবে আপনাদের ফ্রি ভিডিওগুলো দেখে ওয়েব ডিজাইন সম্পর্কে  বেসিক  ধারণাগুলো খুব ভালোভাবে শিখতে পেরেছি।এইরকম সুনিপুণ দক্ষতা এবং এত সুন্দর  ও সাবলীলভাবে গুছানো ভিডিও ইউটিউবে আর নেই।খুব শীঘ্রই আপনাদের প্রিমিয়াম কোর্সটি অর্ডার করব।আমাদের জন্য আপনাদের এই অক্লান্ত পরিশ্রমের জন্য আপনাদের অসংখ্য ধন্যবাদ।', 'student_img.jpg', '2020-04-29 17:53:38', NULL),
(24, 'Md.khalaquzzaman', 'apnader web site visit korlam.apnader commitment khub valo laglo..............', 'student_img.jpg', '2020-05-12 19:13:04', NULL),
(25, 'Ifthekhar uddin ahamed', 'the web traning instatute determines the peace of my life. specially raj sir\'s teaching skills made it possible for me to dream of being a programmer . in my eyes,he is most of the best teacher and i will always remember him with respect, inshallah.', 'student_img.jpg', '2020-06-04 12:52:11', NULL),
(32, 'sourav saha', 'Dear sir\r\nAapnar bojhanor koushol gulo etotai sundor... jara ei bisoy ti somondhe zero knowlage rakhe  tader pokhheo sob kichu bujhe neoa somvob... ....egulo theke kaj ta sikhte parbe sokole... eta 100% sothik... ami web development tao aapnar theke sikhte chai...', 'student_img.jpg', '2020-07-23 13:02:48', NULL),
(38, 'Md.Rasel Uddin', 'ভাই আপনার বোঝানোর ধরন অনেক ভাল। আমার কাছে অনেক ভাল লাগে। সত্যি বলছি আপনার class গুলোর জন্যই আমি অনেক আগ্রহ বোধ করি শেখার জন্য। দোয়া করবেন যেন এই লাইনে এসে কিছু করতে পারি। আর ভাইয়া কুষ্টিয়াই যাওয়ার দাওয়াত রইল। শেষে আপনার সু-সাস্থ কামনা করি। আস্-সালামু আলাইকুম ওয়া রহমতউল্লাহ।', 'student_img.jpg', '2020-08-12 12:17:01', NULL),
(48, 'jakir hussain', 'অসাধারণ কোর্স ধন্যবাদ রাজ স্যার,অনেক দিন ধরে চিন্তা করতেছিলাম ওয়েব-ডিজাইন শিখব কিন্তু কোনো সোর্স পাইনি যে ভালোভাবে শিখব ইউটিউবে অনেক ঘাটাঘাটি করেছি কিন্তু দিনশেষে অনেক টিউটোরিয়াল দেখে ও আগামাথা বুঝিনি,ঠিক কয়েকদিন পর webtraininginstitute নামে রাজ স্যারের ইউটিউব চ্যানেল পাই সেখানের ফ্রি ৫৭ টা টিউটোরিলা দেখে স্যারের প্রিমিয়াম কোর্সটা কিনি আলহামদুলিল্লাহ এখন আমি ভালো মানের ওয়েব-ডিজাইনার', 'student_img.jpg', '2020-09-02 16:11:43', NULL),
(51, 'Asad Nur', 'কিছু বলার নাই ভাই ,জাস্ট অসাম। এত সহজে শিখতে পারব কখন কল্পনাও করতে পারি নাই । অনেক ইচ্ছা আছে ভাই অনেক বড় একজন ওয়েব ডিজাইন এন্ড ডিভলপার হওয়ার ।দেখি কতটুকু পারি।', 'student_img.jpg', '2020-09-06 14:55:11', NULL),
(55, 'Md Hasan Miah', 'আসসালামু আলাইকুম । আপনাকে অনেক অনেক ধন্যবাদ ভাই । আপনার বোঝানোর দক্ষতা এবং বন্ধুত্বপূর্ণ মনোভাব বলার মতো না । দোয়া করি, আল্লাহ আপনার মঙ্গল করুক ।', 'student_img.jpg', '2020-09-12 16:45:09', NULL),
(60, 'MarquisGlync', 'HAVE YOU EVER WANTED TO LEARN HOW TO CLOSE 100% OF YOUR CONSULTATIONS & HELP YOUR COMPANY  WIN IN OUR NEW  COVID-19  ECONOMY? \r\n \r\nSEE THE OFFICIAL TRAILER:@ \r\nThe Author site https://www.tonydeoleo.com \r\n \r\n \r\nDownload your E-book Copy Now @ The Author official site: \r\nhttps://www.tonydeoleo.com \r\nAmazon : https://www.amazon.com/dp/195226359X \r\nBarns&Nobles : https://m.barnesandnoble.com/w/closing-100-of-your-fitness-consultations-tony-deoleo/1137240205', 'student_img.jpg', '2020-10-06 01:35:59', NULL),
(61, 'James Chapman', 'Hi! \r\nI have just checked webtraininginstitute.com for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', 'student_img.jpg', '2020-10-06 09:09:37', NULL),
(62, 'Gidget Devore', 'ATT: webtraininginstitute.com / হোম WEBSITE SERVICES\r\nThis notice ENDS ON: Oct 06, 2020\r\n\r\n\r\nWe have actually not gotten a settlement from you.\r\nWe  have actually tried to call you but were not able to contact you.\r\n\r\n\r\nKindly Visit: https://bit.ly/2Spao66 .\r\n\r\nFor details and also to process a discretionary payment for solutions.\r\n\r\n\r\n\r\n10062020115511.', 'student_img.jpg', '2020-10-06 15:55:13', NULL),
(63, 'WillieCET', 'Welcome to the world of short term bitcoin investments.  \r\n \r\nToday \"Turbo MMM\" is number 1 in the list of investment blockchain projects! \r\nThe innovative program provides an opportunity to participate in short-term investment in the cryptocurrency market.  \r\n \r\n \r\nTop up your balance by at least 0.005 and get profit. \r\nEvery 2 days \"Turbo MMM\" adds +10% to your bitcoin balance to your wallet. \r\nThe program is available immediately after registration on the official website.   \r\n \r\nFor example: invest 0.1 bitcoins today, in 2 days you will receive 0.11 bitcoins in your personal bitcoin wallet. \r\n \r\nRe-investment is available.  \r\n \r\n \r\n \r\n \r\nGet a bonus when registering in the amount of 0.001 BTC and become a full member of the Turbo MMM project. \r\n \r\n \r\nRegister and get a bonus: https://bit.ly/3h8c9Pu', 'student_img.jpg', '2020-10-11 14:22:24', NULL),
(64, 'Dave Stills', 'Hey webtraininginstitute.com, \r\n \r\nCan I get you on the horn to discuss relaunching marketing? \r\n \r\nGet started on a conversion focused landing page, an automated Linkedin marketing tool, or add explainer videos to your marketing portfolio and boost your ROI. \r\n \r\nWe also provide graphic design and call center services to handle all those new leads you\'ll be getting. \r\n \r\n \r\nd.stills@starkwoodmarketing.com \r\n \r\nMy website is http://StarkwoodMarketing.com', 'student_img.jpg', '2020-10-11 21:40:25', NULL),
(65, 'Md.Mahmudul Hasan Akash', 'it;s good place,learning for web-design.I like it.I support it.Good Luck.Go a head', 'student_img.jpg', '2020-10-12 05:45:27', NULL),
(66, 'Linda Ray', 'I noticed that you are not running Google Remarketing on your website. \r\n \r\nThe most affordable advertising is marketing to previous web viewers who didn\'t convert. \r\n \r\nRemarketing via Google & Facebook ads means tracking and engaging these \'lost\' customers. \r\nThey were on your site once and may only need a reminder of your services and business. \r\n \r\nCan I help you grab these low hanging fruits? \r\n \r\nLinda Ray \r\nEmail - linda@theremarketingguys.com \r\nWebsite - http://www.theremarketingguys.com', 'student_img.jpg', '2020-10-25 12:11:23', NULL),
(67, 'Mike Carter', 'Hi there \r\n \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. \r\n \r\nThis service is guaranteed \r\n \r\nFor more information, check our service here \r\nhttps://www.monkeydigital.co/Get-Guaranteed-Domain-Authority-50/ \r\n \r\nN E W : \r\nDA60 is now available here \r\nhttps://www.monkeydigital.co/product/moz-da60-seo-plan/ \r\n \r\n \r\nthank you \r\nMike Carter\r\n \r\nMonkey Digital \r\nsupport@monkeydigital.co', 'student_img.jpg', '2020-10-27 22:10:06', NULL),
(68, 'WilliamFup', 'Looking for Facebook likes or Instagram followers? \r\nWe can help you. Please visit https://1000-likes.com/ to place your order.', 'student_img.jpg', '2020-10-29 03:17:09', NULL);

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
(1, 'Rajiur Rahman', 'rajiurrahmanraj2021@gmail.com', NULL, '$2y$10$FIh6nIlEgu0nnIJMUPAv2OFuo8v3fqEsdtGfVRwqgE4PdBvwLl64a', NULL, '2019-11-29 05:02:33', '2020-08-31 14:34:40');

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
  `link` longtext COLLATE utf8mb4_unicode_ci,
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
  `offer_one` longtext COLLATE utf8mb4_unicode_ci,
  `offer_two` longtext COLLATE utf8mb4_unicode_ci,
  `offer_three` longtext COLLATE utf8mb4_unicode_ci,
  `offer_four` longtext COLLATE utf8mb4_unicode_ci,
  `offer_five` longtext COLLATE utf8mb4_unicode_ci,
  `offer_six` longtext COLLATE utf8mb4_unicode_ci,
  `offer_seven` longtext COLLATE utf8mb4_unicode_ci,
  `offer_eight` longtext COLLATE utf8mb4_unicode_ci,
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `dvdquestions`
--
ALTER TABLE `dvdquestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `premiumvideos`
--
ALTER TABLE `premiumvideos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentfeedbacks`
--
ALTER TABLE `studentfeedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wtsdetails`
--
ALTER TABLE `wtsdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
