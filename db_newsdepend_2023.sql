-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 09:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_newsdepend_2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addposition`
--

CREATE TABLE `tbl_addposition` (
  `id` int(11) NOT NULL,
  `PositionName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisement`
--

CREATE TABLE `tbl_advertisement` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `company_link` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_wise_information`
--

CREATE TABLE `tbl_menu_wise_information` (
  `id` int(11) NOT NULL,
  `category` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_bn` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `sironam_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homepage_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'No',
  `highlight_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'No',
  `title_bn` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_bn` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_en` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewers` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoryid` varchar(250) DEFAULT NULL,
  `top_news` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` mediumtext DEFAULT NULL,
  `publish_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archieve_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Division` varchar(50) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `Upozila` varchar(50) DEFAULT NULL,
  `ReporterName` varchar(100) NOT NULL,
  `news_live_time` varchar(100) DEFAULT NULL,
  `i_user` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `sironam_status`, `homepage_status`, `highlight_status`, `title_bn`, `title_en`, `detail_bn`, `detail_en`, `image`, `viewers`, `categoryid`, `top_news`, `date`, `publish_date`, `publish_time`, `archieve_date`, `created_by`, `update_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`, `Division`, `District`, `Upozila`, `ReporterName`, `news_live_time`, `i_user`) VALUES
(1, 'No', 'No', 'No', 'স্বল্প সঞ্চয় বীমা', NULL, 'স্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমা', NULL, 'bg1672865663.jpg', NULL, '2', 'Yes', '2023-01-05', '2023-01-05', '02:40AM', NULL, 1, NULL, NULL, '2023-01-05 02:54:22am', NULL, NULL, NULL, NULL, NULL, 'Noman Abdullah', '1672864800', 'Noman Abdullah'),
(2, 'বিপিএল', 'Yes', 'Yes', 'ইউরোপীয় দল সামনে এলেই চুপসে যাচ্ছে ব্রাজিল!', NULL, 'ইউরোপীয় দল সামনে এলেই চুপসে যাচ্ছে ব্রাজিল! ইউরোপীয় দল সামনে এলেই চুপসে যাচ্ছে ব্রাজিল!', NULL, 'Backlink_Khalid1672950897.jpg', NULL, '7', 'No', '2023-01-06', '2023-01-08', '11:56PM', NULL, 1, 1, NULL, '2023-01-06 02:34:56am', '2023-01-08 23:56:25', NULL, '', '', '', 'Noman Abdullah', '1672950540', 'Noman Abdullah'),
(5, 'BPL', 'No', 'No', 'স্বল্প সঞ্চয় বীমা স্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমা', NULL, 'স্বল্প সঞ্চয় বীমা স্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমা&nbsp;স্বল্প সঞ্চয় বীমা স্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমা&nbsp;স্বল্প সঞ্চয় বীমা স্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমা', NULL, '192707899_2839050459679494_2531696464785006849_n1673021839.jpg', NULL, '4', 'No', '2023-01-06', '2023-01-06', '10:16PM', NULL, 1, NULL, NULL, '2023-01-06 10:17:18pm', NULL, NULL, NULL, NULL, NULL, 'Noman Abdullah', '1673021760', 'Noman Abdullah'),
(6, 'BPL', 'No', 'No', 'দেনমোহর বীমা', NULL, 'দেনমোহর বীমা', NULL, '185654810_848550092417398_3348277959609344151_n1673022561.jpg', NULL, '3', 'No', '2023-01-06', '2023-01-06', '10:28PM', NULL, 1, NULL, NULL, '2023-01-06 10:29:20pm', NULL, NULL, NULL, NULL, NULL, 'Noman Abdullah', '1673022480', 'Noman Abdullah'),
(7, 'শীতকাল', 'No', 'Yes', 'চট্টগ্রামকে হেসে-খেলেই হারাল সিলেট', NULL, 'বাংলাদেশ প্রিমিয়ার লিগ (বিপিএল) এর প্রথম ম্যাচে তারুণ্যনির্ভর চট্টগ্রামকে পাত্তাই দেয়নি মাশরাফি-মুশফিকের অভিজ্ঞ খুলনা দল। ব্যাট ও বল হাতে রীতিমতো', NULL, '116371777_2736191056657982_4018997381434909915_n1673040361.jpg', NULL, '7', 'No', '2023-01-07', '2023-01-09', '01:52AM', NULL, 1, 1, NULL, '2023-01-07 03:26:00am', '2023-01-09 01:52:38', NULL, 'চট্টগ্রাম', 'চট্টগ্রাম', 'সীতাকুন্ড', 'Khaled Masud', '1673040240', 'Noman Abdullah'),
(8, 'বিপিএল', 'Yes', 'No', 'শীতের ঠেলায় বাঁচতে পারছি নাহ', NULL, 'শীতের ঠেলায় বাঁচতে পারছি নাহ&nbsp;শীতের ঠেলায় বাঁচতে পারছি নাহ&nbsp;শীতের ঠেলায় বাঁচতে পারছি নাহ&nbsp;শীতের ঠেলায় বাঁচতে পারছি নাহ', NULL, 'cMDRA3454bGvfZASbxviZe1673188690.jpg', NULL, 'সারাদেশ', 'No', '2023-01-08', '2023-01-08', '11:54PM', NULL, 1, 1, NULL, '2023-01-08 08:38:09pm', '2023-01-08 23:54:16', NULL, 'Barishal', 'Bhola', 'Bhola Sadar', 'সেজান মাহমুদ', '1673188560', 'Noman Abdullah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newscatagory`
--

CREATE TABLE `tbl_newscatagory` (
  `id` int(11) NOT NULL,
  `CatagoryName` varchar(200) NOT NULL,
  `CatagoryNameBn` varchar(200) NOT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_newscatagory`
--

INSERT INTO `tbl_newscatagory` (`id`, `CatagoryName`, `CatagoryNameBn`, `create_by`, `update_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Latest', 'সর্বশেষ', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'National', 'জাতীয়', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Politics', 'রাজনীতি', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Economics', 'অর্থনীতি', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'All', 'সারাদেশ', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'International', 'আন্তর্জাতিক', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Sports', 'খেলা', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Entertainment', 'বিনোদন', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Health', 'স্বাস্থ্য', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Feature', 'ফিচার', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Education', 'শিক্ষা', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Job', 'চাকরী', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'BPL 2024', 'বিপিএল ২০২৩', 1, NULL, NULL, '2023-01-07 12:13:49am', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paper_number`
--

CREATE TABLE `tbl_paper_number` (
  `id` int(11) NOT NULL,
  `paper_name_bn` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paper_name_en` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo_gallery`
--

CREATE TABLE `tbl_photo_gallery` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `title_bn` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reporter`
--

CREATE TABLE `tbl_reporter` (
  `id` int(11) NOT NULL,
  `r_name` varchar(200) DEFAULT NULL,
  `r_nameBn` varchar(250) DEFAULT NULL,
  `mobile_number` varchar(50) DEFAULT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `address` varchar(506) DEFAULT NULL,
  `assigned_location` varchar(200) DEFAULT NULL,
  `joining_date` varchar(200) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reporter`
--

INSERT INTO `tbl_reporter` (`id`, `r_name`, `r_nameBn`, `mobile_number`, `email_address`, `address`, `assigned_location`, `joining_date`, `image`, `create_by`, `update_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Shezan Mahmud', 'সেজান মাহমুদ', '01599887766', 'shezan@gmail.com', 'Kalibari Road, Borhanuddin, Bhola', 'Mirpur, Dhaka', '07/01/2023', NULL, 1, NULL, NULL, '2023-01-07 04:18:33', NULL, NULL),
(2, 'Jaman Abdullah', 'জামান আব্দুল্লাহ', '01311223344', 'jaman@gmail.com', 'Gazipur Road, Bhola Sadar, Bhola', 'Banani, Dhaka', '07/01/2023', NULL, 1, NULL, NULL, '2023-01-07 04:25:41', NULL, NULL),
(4, 'Arif Hosen', 'আরিফ হোসেন', '01411223344', 'arif@gmail.com', 'মাজার রোড, মিরপুর-১, ঢাকা', 'হাতিরঝিল, ঢাকা', '09/01/2023', 'hafiz1673201762.jpg', 1, 1, NULL, '2023-01-09 06:16:01', '2023-01-08 18:32:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trendingcatagory`
--

CREATE TABLE `tbl_trendingcatagory` (
  `Id` int(11) NOT NULL,
  `TrendingCatName` varchar(200) NOT NULL,
  `TrendingCatNameBn` varchar(200) NOT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_trendingcatagory`
--

INSERT INTO `tbl_trendingcatagory` (`Id`, `TrendingCatName`, `TrendingCatNameBn`, `create_by`, `update_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'BPL', 'বিপিএল', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'BPL 2023', 'বিপিএল ২০২৩', 1, NULL, NULL, '2023-01-06 11:51:35pm', NULL, NULL),
(7, 'Winter', 'শীতকাল', 1, NULL, NULL, '2023-01-08 08:29:28pm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_address` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_value` blob DEFAULT NULL,
  `joining_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `menupermission` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `designation`, `detail`, `email_address`, `mobile_number`, `user_name`, `password`, `office_id_no`, `image`, `user_type`, `address`, `no_value`, `joining_date`, `user_status`, `menupermission`, `create_by`, `update_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Noman Abdullah', 'Admin', 'Myself Noman Abudllah. I\'m a full stack  web developer. ', 'noman@gmail.com', '01925111747', 'noman@gmail.com', '$2y$10$9rSh3kUwUXu7N2UnOvZVJ.rF66oNmlxQt3mKE0GEO76PHhM0uv./O', '001', '1673029060.png', 'Admin', 'Bhola', 0x6e6f6d616e313233, '18/12/2018', 'Active', NULL, NULL, 1, 5, NULL, '2023-01-07 01:53:08', '2019-04-09 12:52:08'),
(2, 'Khaled Masud', 'Admin', 'I\'m the boss', 'khaled@gmail.com', '01712233445', 'khaled@gmail.com', '$2y$10$HiDI4.1Jv0TFUh3UquNsA.CxD4ZEauN4udU6SixFVrKqyiIXEUaFW', NULL, '1673029449.jpg', 'Admin', NULL, 0x6b6d313233343536, NULL, 'Active', NULL, 1, 1, NULL, '2023-01-07 06:20:30', '2023-01-06 22:01:38', NULL),
(8, 'Sumon Hosen', 'Admin', 'reporter', 'sumon@gmail.com', '01712233445', 'sumon@gmail.com', 'sumon123', NULL, 'sumon_(300_x_300_pixel)1673112254.jpg', 'Admin', NULL, NULL, '07/01/2023', 'Active', NULL, 1, NULL, NULL, '2023-01-07 05:24:14', NULL, NULL),
(9, 'Rakibul Hasan', 'Admin', 'I am Rakib.', 'rakibul@gmail.com', '01556677889', 'rakibul@gmail.com', '$2y$10$oKvwj2Hcg92acu.ef/ojIOV/NGbwHYfkyVjfaUsYPwW7h8YSUX1/2', NULL, '', 'Admin', NULL, 0x72616b6962756c313233, '09/01/2023', 'Active', NULL, 1, NULL, NULL, '2023-01-08 19:01:07', NULL, NULL),
(10, 'Mazharul Islam', 'Admin', 'Myself Md. Mazharul Islam. From Khulna.', 'mazharul@gmail.com', '01611223344', 'mazharul@gmail.com', '$2y$10$HSrEtJFYEUCU4vhJ8HKkyOW8Un4DiassTywIWrGaMCvsz8uwv3Tci', NULL, '1673204912.png', 'Admin', NULL, 0x6d617a686172756c313233, '09/01/2023', 'Active', NULL, 1, NULL, NULL, '2023-01-08 19:08:31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `language` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_image` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `id` int(11) NOT NULL,
  `title_bn` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(506) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popular_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addposition`
--
ALTER TABLE `tbl_addposition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_advertisement`
--
ALTER TABLE `tbl_advertisement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `tbl_menu_wise_information`
--
ALTER TABLE `tbl_menu_wise_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `tbl_newscatagory`
--
ALTER TABLE `tbl_newscatagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_paper_number`
--
ALTER TABLE `tbl_paper_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photo_gallery`
--
ALTER TABLE `tbl_photo_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `tbl_reporter`
--
ALTER TABLE `tbl_reporter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_trendingcatagory`
--
ALTER TABLE `tbl_trendingcatagory`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_newscatagory`
--
ALTER TABLE `tbl_newscatagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_reporter`
--
ALTER TABLE `tbl_reporter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_trendingcatagory`
--
ALTER TABLE `tbl_trendingcatagory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_advertisement`
--
ALTER TABLE `tbl_advertisement`
  ADD CONSTRAINT `tbl_advertisement_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `tbl_addposition` (`id`);

--
-- Constraints for table `tbl_photo_gallery`
--
ALTER TABLE `tbl_photo_gallery`
  ADD CONSTRAINT `tbl_photo_gallery_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `tbl_newscatagory` (`id`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `tbl_newscatagory` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
