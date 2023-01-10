-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 09:49 PM
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
(2, 'বিপিএল', 'Yes', 'Yes', 'ইউরোপীয় দল সামনে এলেই চুপসে যাচ্ছে ব্রাজিল!', NULL, 'ইউরোপীয় দল সামনে এলেই চুপসে যাচ্ছে ব্রাজিল! ইউরোপীয় দল সামনে এলেই চুপসে যাচ্ছে ব্রাজিল!', NULL, 'Backlink_Khalid1672950897.jpg', '3', '7', 'No', '2023-01-06', '2023-01-08', '11:56PM', NULL, 1, 1, NULL, '2023-01-06 02:34:56am', '2023-01-08 23:56:25', NULL, '', '', '', 'Noman Abdullah', '1672950540', 'Noman Abdullah'),
(5, 'BPL', 'No', 'No', 'স্বল্প সঞ্চয় বীমা স্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমা', NULL, 'স্বল্প সঞ্চয় বীমা স্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমা&nbsp;স্বল্প সঞ্চয় বীমা স্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমা&nbsp;স্বল্প সঞ্চয় বীমা স্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমাস্বল্প সঞ্চয় বীমা', NULL, '192707899_2839050459679494_2531696464785006849_n1673021839.jpg', NULL, '4', 'No', '2023-01-06', '2023-01-06', '10:16PM', NULL, 1, NULL, NULL, '2023-01-06 10:17:18pm', NULL, NULL, NULL, NULL, NULL, 'Noman Abdullah', '1673021760', 'Noman Abdullah'),
(6, 'BPL', 'No', 'No', 'দেনমোহর বীমা', NULL, 'দেনমোহর বীমা', NULL, '185654810_848550092417398_3348277959609344151_n1673022561.jpg', NULL, '3', 'No', '2023-01-06', '2023-01-06', '10:28PM', NULL, 1, NULL, NULL, '2023-01-06 10:29:20pm', NULL, NULL, NULL, NULL, NULL, 'Noman Abdullah', '1673022480', 'Noman Abdullah'),
(7, 'শীতকাল', 'No', 'Yes', 'চট্টগ্রামকে হেসে-খেলেই হারাল সিলেট', NULL, 'বাংলাদেশ প্রিমিয়ার লিগ (বিপিএল) এর প্রথম ম্যাচে তারুণ্যনির্ভর চট্টগ্রামকে পাত্তাই দেয়নি মাশরাফি-মুশফিকের অভিজ্ঞ খুলনা দল। ব্যাট ও বল হাতে রীতিমতো', NULL, '116371777_2736191056657982_4018997381434909915_n1673040361.jpg', '3', '7', 'No', '2023-01-07', '2023-01-09', '01:52AM', NULL, 1, 1, NULL, '2023-01-07 03:26:00am', '2023-01-09 01:52:38', NULL, 'চট্টগ্রাম', 'চট্টগ্রাম', 'সীতাকুন্ড', 'Khaled Masud', '1673040240', 'Noman Abdullah'),
(8, 'বিপিএল', 'Yes', 'No', 'শীতের ঠেলায় বাঁচতে পারছি নাহ', NULL, 'শীতের ঠেলায় বাঁচতে পারছি নাহ&nbsp;শীতের ঠেলায় বাঁচতে পারছি নাহ&nbsp;শীতের ঠেলায় বাঁচতে পারছি নাহ&nbsp;শীতের ঠেলায় বাঁচতে পারছি নাহ', NULL, 'cMDRA3454bGvfZASbxviZe1673188690.jpg', '5', 'সারাদেশ', 'No', '2023-01-08', '2023-01-08', '11:54PM', NULL, 1, 1, NULL, '2023-01-08 08:38:09pm', '2023-01-08 23:54:16', NULL, 'Barishal', 'Bhola', 'Bhola Sadar', 'সেজান মাহমুদ', '1673188560', 'Noman Abdullah'),
(9, 'মেট্রোরেল', 'Yes', 'No', '১০ দিনে মেট্রোরেলের আয় ৮৮ লাখ টাকা', NULL, 'সোমবার (৯ জানুয়ারি) দুপুরে রাজধানীর পুরাতন এলিফ্যান্ট রোডে ডিএমটিসিএলের সভা কক্ষে এ তথ্য জানান প্রতিষ্ঠানটির ব্যবস্থাপনা পরিচালক এম এ এন ছিদ্দিক। তিনি বলেন, গত ২৯ ডিসেম্বর থেকে ৮ জানুয়ারি পর্যন্ত ১০ দিনে ৯০ হাজার যাত্রী&nbsp;মেট্রোরেলে চলাচল&nbsp;করেছে। তাদের মধ্যে সিঙ্গেল জার্নি টিকিট বিক্রি হয়েছে ৮৩ হাজার। আর এমআরটি পাস বিক্রি হয়েছে ৭ হাজার ২৫০টি। এসব টিকিট বিক্রি থেকে মোট ৮৮ লাখ টাকা আয় হয়েছে।এর আগে, গত বছরের ২৮ ডিসেম্বর মেট্রোরেলের উদ্বোধন করেন প্রধানমন্ত্রী শেখ হাসিনা। পরদিন ২৯ ডিসেম্বর বাণিজ্যিকভাবে যাত্রা শুরু করে মেট্রোরেল। তখন থেকে উত্তরা উত্তর (দিয়াবাড়ী) থেকে আগারগাঁও পর্যন্ত সরাসরি চলাচল করছে মেট্রোরেল।', NULL, 'pl-202301091600351673376559.jpg', '1', 'জাতীয়', 'Yes', '2023-01-11', '2023-01-11', '12:40AM', NULL, 1, NULL, NULL, '2023-01-11 12:49:18am', NULL, NULL, 'ঢাকা', 'ঢাকা', 'অন্যান্য', 'জামান আব্দুল্লাহ', '1673376000', 'Noman Abdullah'),
(10, 'বিশ্ব ইজতেমা', 'Yes', 'No', 'বিশ্ব ইজতেমায় থাকছে ৫ জোড়া বিশেষ ট্রেন ', NULL, 'ইজতেমার প্রথম পর্বে শুক্রবার (১৩ জানুয়ারি) থেকে আখেরি মোনাজাত ও দ্বিতীয় পর্বে ২০ জানুয়ারি আখেরি মোনাজাত পর্যন্ত বিভিন্ন গন্তব্যে এসব সেবা চালু হবে। বিজ্ঞপ্তিতে বলা হয়েছে, টঙ্গীতে আসন্ন বিশ্ব ইজতেমায় অংশগ্রণকারী মুসুল্লীদের যাতায়াতের সুবিধার্থে বাংলাদেশ রেলওয়ে বিভিন্ন রুটে বিশেষ ট্রেন চলাচলের ব্যবস্থা গ্রহণ করেছে। দুই পর্বের আখেরি মোনাজাতের আগে ও মোনাজাতের দিন এই বিশেষ ট্রেন পরিচালিত হবে।এর মধ্যে প্রথম পর্বের ইজতেমায় শুক্রবার ও দ্বিতীয় পর্বের শুক্রবার ঢাকা-টঙ্গী ও টঙ্গী-ঢাকা রুটে জুমা স্পেশাল পরিচালিত হবে। যা ঢাকা থেকে সকাল ১০টা ২০ মিনিটে ছেড়ে বেলা ১১টা ২০ মিনিটে টঙ্গী পৌঁছবে। একইভাবে দুপুর ২টা ৫০ মিনিটে টঙ্গী থেকে ছেড়ে বেলা ৩টা ৫০ মিনিটে ঢাকা পৌঁছবে। এছাড়াও ১৪ জানুয়ারি ও ২১ জানুয়ারি জামালপুর থেকে টঙ্গীর উদ্দেশ্যে বিশেষ ট্রেন চলবে। যা সকাল ৯টা ১৫ মিনিটে জামালপুর থেকে টঙ্গীর উদ্দেশ্যে ছেড়ে এসে দুপুর ২টা ১৫ মিনিটে পৌঁছবে।আখেরি মোনাজাতের দিন (১৫ জানুয়ারি ও ২২ জানুয়ারি) বিশেষ ট্রেন ঢাকা-টঙ্গী স্পেশাল-১, ২, ৩, ৪, ৫ নামে পাঁচটি স্পেশাল ট্রেন ঢাকা-টঙ্গীর মধ্যে চলাচল করবে। এছাড়াও টঙ্গী-ময়মনসিংহ ১, ২ ও টঙ্গী-টাঙ্গাইল স্পেশাল নামের আরও দুটি ট্রেন চলাচল করবে। এদিকে প্রথম পর্বে ১৩ জানুয়ারি থেকে ১৫ জানুয়ারি এবং দ্বিতীয় পর্বে ২০ জানুয়ারি থেকে ২২ জানুয়ারি পর্যন্ত আখেরি মোনাজাতের দিন ঢাকা অভিমুখী সকল আন্তঃনগর মেইল এক্সপ্রেস ও কমিউটার ট্রেন টঙ্গী স্টেশনে তিন মিনিট করে থামবে। ১৫ ও ২২ জানুয়ারি আখেরি মোনাজাতের দিন সুবর্ণ এক্সপ্রেস ও সোনারবাংলা এক্সপ্রেস ব্যতীত সকল আন্তঃনগর ট্রেন ও মেইল এক্সপ্রেস ট্রেন আপ-ডাউন টঙ্গী স্টেশনে তিন মিনিট করে থামবে। এছাড়াও আখেরি মোনাজাতের পরের দিন ১৬ জানুয়ারি ও ২৩ জানুয়ারি ইজতেমা হতে বর্হিগামী টিকেটধারী যাত্রীদের ফেরত যাওয়া ও টঙ্গী স্টেশনে আরোহনের সুবিধার্থে ৭০৪, ৭০৫, ৭০৭, ৭১৭, ৭২২, ৭২৬, ৭৩৫, ৭৩৭, ৭৩৯, ৭৪৫, ৭৫১, ৭৫৩, ৭৫৭, ৭৬৪, ৭৬৫, ৭৬৯, ৭৭১, ৭৭৩, ৭৭৬, ৭৭৭, ৭৮১, ৭৮৯, ৭৯৬ ও ৭৯৭ নং ট্রেন টঙ্গী স্টেশনে তিন মিনিট থামবে।আখেরি মোনাজাতের দিন ১৫ ও ২২ জানুয়ারি তুরাগ-১, ২, ৩ ও ৪ ট্রেন চলাচল করবে না ও ৪৯নং বলাকা কমিউটার ট্রেন ঢাকা হতে ৪টা ৪০ মিনিটের পরিবর্তে ৫টা ২৫ মিনিটে এবং ৪নং কর্ণফুলী কমিউটার ট্রেন আখেরি মোনাজাতের দিন সকাল ৮টা ৩০ মিনিটের পরিবর্তে দুপুর ১২টা এবং ৩৪নং তিতাস কমিউটার ৯টা ৪৫ মিনিটের পরিবর্তে দুপুর ১২টা ৩০ মিনিটে ঢাকা হতে ছেড়ে যাবে। ১৫ ও ২২ জানুয়ারি ৭০১/৭৩২নং সুবর্ণ এক্সপ্রেস বন্ধ থাকবে, ১৬ ও ২৩ জানুয়ারি সোমবার ৭০১/৭০২নং সুবর্ণ এক্সপ্রেস ট্রেন সাপ্তাহিক বন্ধের দিন চলাচল করবে, ৭৫/৭৬নং ধলেশ্বরী এক্সপ্রেস ট্রেন ২৬১-২৬৪ নং লোকার ট্রেন ১৪ ও ১৫ জানুয়ারি এবং ২১ ও ২২ জানুয়ারি তারিখে চলাচল করবে, ১৪ ও ২১ জানুয়ারি ১০ ডাউন সিলেট থেকে ১১ ডাউন নোয়াখালী থেকে, ৫৬নং ট্রেন দেওয়ানগঞ্জ থেকে টাঙ্গাইল কমিউটার বঙ্গবন্ধু সেতু পূর্ব থেকে ওপেন পাথে ইজতেমা স্পেশাল ট্রেনের কার্যক্রম পরিচালনার জন্য ঢাকায় থাকবে বলে জানানো হয়েছে।বাংলাদেশ রেওয়ে পূর্বাঞ্চলের চিফ অপারেটিং সুপারিনটেনডেন্ট (পূর্ব) মো. শহিদুল ইসলাম জানান, ইজতেমার দুই পর্বে ঢাকা থেকে পাঁচ জোড়া স্পেশাল ট্রেন চলবে। এছাড়াও জামালপুর থেকে স্পেশাল ট্রেন চলবে এবং ময়মনসিংহে আখেরি মোনাজাতের দিন দুইটি স্পেশাল ট্রেন যাবে। ইজতেমায় আগত মুসুল্লীদের যাতায়াত নির্বিঘ্ন করতে এ সিদ্ধান্ত নেওয়া হয়েছে। পাশাপাশি বিশ্ব ইজতেমা উপলক্ষে মুসল্লিদের নিরাপদ ভ্রমণ নিশ্চিতকরণ, সার্বিক আইনশৃঙ্খলা রক্ষার্থে টঙ্গী, বিমানবন্দর, তেজগাঁও, কমলাপুর, টঙ্গী রেলওয়ে স্টেশনে জিআরপি, আরএনবি অফিসারসহ প্রয়োজনীয় সংখ্যক ফোর্স মোতায়েন থাকবে।', NULL, 'untitled-6-202301101305181673377388.jpg', NULL, 'জাতীয়', 'Yes', '2023-01-11', '2023-01-11', '12:58AM', NULL, 1, NULL, NULL, '2023-01-11 01:03:07am', NULL, NULL, 'ঢাকা', 'গাজীপুর', 'গাজীপুর সদর', 'সেজান মাহমুদ', '1673377080', 'Noman Abdullah'),
(11, ' আবহাওয়ার খবর', 'Yes', 'Yes', 'দেখা মিলেছে সূর্যের, কাজে ফিরছেন শ্রমজীবীরা', NULL, '<p><strong>গেল সপ্তাহ থেকে উত্তরাঞ্চলের বেশিরভাগ জেলায় দেখা মেলেনি সূর্যের। এছাড়া গুঁড়ি গুঁড়ি বৃষ্টির মতো ঝরেছে কুয়াশা। এই হাড় কাঁপানো ঠান্ডায় কাজে যেতে না পেরে মানবেতর জীবনযাপন কেটেছে সাধারণ মানুষদের। তবে দীর্ঘ সময় পর মঙ্গলবার (১০ জানুয়ারি) সূর্যের দেখা মিলেছে লালমনিরহাটে। তাই কর্মজীবী মানুষরাও আবার কাজে ফিরছেন। কাজে ফিরতে পেরে অনেক খুশি তারা।</strong></p><p><strong></strong>মঙ্গলবার সকালে আবহাওয়া পর্যবেক্ষণ কেন্দ্রের তুহিন আহমেদ জানিয়েছেন, লালমনিরহাট ও কড়িগ্ৰাম রাজারহাটে আজ ৮ দশমিক ২ ডিগ্রি সেলসিয়াস রেকর্ড করা হয়েছে। তাপমাত্রা বৃদ্ধি হওয়ার কারণে এই লালমনিরহাটের পাঁচ উপজেলায় সূর্যের দেখা মিলেছে। সূর্যের দেখা পাওয়ায় কর্মে ফিরেছেন সকল মানুষ। যদিও ঠান্ডা হাওয়া এখনো কমেনি। বিশেষ করে ভোগান্তিতে পড়েছেন তিস্তা চর অঞ্চলের মানুষরা। শীতে সবচেয়ে বেশি দুর্ভোগে রয়েছে লালমনিরহাটের ১৩টি নদ-নদীর তীরবর্তী ৬৩টি চরের প্রায় ৫০ হাজার মানুষসহ নিম্ন আয়ের শ্রমজীবীরা। গবাদি পশুও রেহাই পাচ্ছে না শীতের প্রকোপ থেকে।এছাড়াও ঠাণ্ডার সঙ্গে পাল্লা দিয়ে বেড়েছে শীতজনিত নানা রোগ। গত এক সপ্তাহে ডায়রিয়া, নিউমোনিয়া, হাঁপানি, অ্যাজমা, হৃদরোগসহ নানা রোগে আক্রান্ত হয়ে লালমনিরহাট সদর হাসপাতালসহ উপজেলা স্বাস্থ্য কমপ্লেক্সগুলোতে ভর্তি হচ্ছে ঠান্ডাজনিত রোগীরা।&nbsp;তিস্তা অঞ্চলের মোহাম্মদ আলী বলেন, প্রায় ১০ দিন থেকে বাইরে কাজে যেতে পারিনি। যে কারণে আমি ও আমার পরিবারকে নিয়ে অনেক কষ্টে ছিলাম। প্রচন্ড শীতের কেউ আমাকে কম্বল দেয়নি। সন্তানদের গরম কাপড় কিনে দিতে গবাদি পশু বিক্রি করতে হয়েছে। এই অবস্থায় থাকলে অন্তত মানুষ না খেয়ে মরে যাবে।&nbsp; ঠান্ডায় কাবু হয়ে রমিছা বেগম বলেন, অনেকদিন পর সূর্যের দেখা পেয়েছি, সূর্যের গরম তাপ নিয়ে কাজে ফিরেছি। দিনমজুরের কাজ না করলে সংসার চালাবো কীভাবে। এই শীতে আমাদের কাজকর্ম করেই চলতে হবে।&nbsp;লালমনিরহাট জেলা প্রশাসক মোহাম্মদ উল্যাহ জানান, মানুষের পাশে সব সময় জেলা প্রশাসন আছে। জেলায় শীতার্ত ও অসহায় মানুষের মাঝে ইতোমধ্যে ২৫ হাজার কম্বল বিতরণ করা হয়েছে। জেলার পাঁচ উপজেলার নির্বাহী অফিসারদের মাধ্যমে সরকারি কম্বল বিতরণের পাশাপাশি বিভিন্ন বেসরকারি সংস্থা শীতবস্ত্র বিতরণ অব্যাহত রেখেছেন। এই শীতে কম্বল বিতরণসহ শীতের বিভিন্ন উপকরণ নিয়ে জেলা প্রশাসক মানুষের পাশে থাকবে।</p>', NULL, 'untitled-3-202301101108231673381358.jpg', NULL, 'জাতীয়', 'Yes', '2023-01-11', '2023-01-11', '02:06AM', NULL, 1, NULL, NULL, '2023-01-11 02:09:17am', NULL, NULL, 'ঢাকা', '', NULL, 'সেজান মাহমুদ', '1673381160', 'Noman Abdullah'),
(12, 'আবহাওয়ার খবর', 'Yes', 'Yes', 'পঞ্চগড়ের তাপমাত্রা ৬.৯ ডিগ্রি', NULL, 'সকালে সূর্যের দেখা মিললেও এখনও কনকনে শীতে কাঁপছে পঞ্চগড়। মঙ্গলবার (১০ জানুয়ারি) সকাল ৯টায় এ জেলায় তাপমাত্রা রেকর্ড হয়েছে ৬ দশমিক ৯ ডিগ্রি সেলসিয়াস। তাপমাত্রা গতকাল থেকে কমেছে শূন্য দশমিক ১ ডিগ্রি সেলসিয়াস। গতকাল সোমবার তাপমাত্রা রেকর্ড হয়েছিল ৭ ডিগ্রি সেলসিয়াস। দুদিন ধরে মাঝারি শৈত্যপ্রবাহের দাপটে বিপর্যস্ত হয়ে পড়েছে উত্তরের এ জনপদে।আবহাওয়া অধিদপ্তর জানায়, দুদিন ধরে সর্বনিম্ন তাপমাত্রা রেকর্ড হওয়ায় এ জেলায় মাঝারি শৈত্যপ্রবাহ বইছে। গত শুক্রবার থেকে রোববার পর্যন্ত তাপমাত্রা ৯.৬, ৯.৫ ও ৯.৪ ডিগ্রি সেলসিয়াস রেকর্ড হয়েছিল। সোমবার তাপমাত্রা কমে ৭ ডিগ্রিতে পৌঁছেছে। মঙ্গলবার সকাল থেকে তাপমাত্রা শূন্য দশমিক ১ ডিগ্রি কমে ৬ দশমিক ৯ ডিগ্রি সেলসিয়াস রেকর্ড হয়েছে। সকালে দেশের সর্বনিম্ন তাপমাত্রা রেকর্ড হওয়ার বিষয়টি ঢাকা পোস্টকে জানিয়েছেন জেলার প্রথম শ্রেণির আবহাওয়া অধিদপ্তরের ভারপ্রাপ্ত কর্মকর্তা রাসেল শাহ। এর আগে, এই জেলায় ২০১৮ সালের জানুয়ারিতে স্মরণকালের সবচেয়ে কম ২ দশমিক ৬ ডিগ্রি সেলসিয়াস তাপমাত্রা রেকর্ড হয়েছিল।&nbsp;সকাল থেকেই দেখা মিলেছে সূর্যের। তবে অনুভূত হচ্ছে প্রচন্ড শীত। সুর্যের মুখ দেখা গেলেও মিলছে না রোদের উষ্ণতা। শীত দুর্ভোগে পড়েছে নানান শ্রমজীবী-কর্মজীবী গরিব অসহায় মানুষ। পাথর শ্রমিক, চা শ্রমিক, দিনমজুর থেকে শুরু করে ছোটখাটো যানবাহন ভ্যান চালক মানুষগুলো পড়েছেন বিপাকে। তীব্র শীতের কারণে কাজে যেতে পারছেন না অনেকে। তবে জীবিকার তাগিদে কাউকে নদীতে পাথর তুলতে, কাউকে চা-বাগানে আবার কাউকে দিনমজুরের কাজ করতে যেতে দেখা গেছে। শীতের দুর্ভোগ বেড়েছে শিশু ও বয়স্কদের মধ্যে। এসব মানুষের কষ্ট লাঘবের জন্য সরকার যে ত্রাণ দিয়েছে তা একেবারে অপ্রতুল বলে জানিয়েছেন ভুক্তভোগীরা। চা শ্রমিক জামাল, জাহেরুল ও নাসির জানান, সকালে বরফের মতো ঠান্ডা। চা বাগানে কাজ করতে গেলে হাত-পা অবশ হয়ে আসে। কিন্তু জীবিকার তাগিদে কাজে বের হতে হয় আমাদের।পাথর শ্রমিক ইমরান, আরশাদ আলী ও আবু তাহের জানান, ঠান্ডায় নদীর পানি বরফের মতো মনে হয়। তারপরেও আমাদের পাথরই জীবিকা। তাই কাজে বেড়িয়েছি। কয়েকদিন ধরে নদীর ঠান্ডা পানিতে কাজ করে জ্বর-সর্দিতে ভুগলাম। ক্ষুধার্ত পেটতো ঠান্ডা বুঝে না। কিন্তু পরিবারের কথা চিন্তা করে সকালেই পাথর তোলার সরঞ্জাম নিয়ে বেড়িয়ে পড়েছি। একই কথা জানান কয়েকজন দিনমজুর ও নারী পাথর শ্রমিকরা।আরও পড়ুন &gt;&gt;&gt;&nbsp;শীতে স্বাস্থ্য সুরক্ষায় করণীয়নারী পাথর শ্রমিকরা জানান, তীব্র শীতের কারণে তাদেরও কাজে যেতে কষ্ট হচ্ছে। ঘর সংসার সামলে জীবিকার তাগিদে কাজে যেতে হচ্ছে। শীতের কারণে কাজে যেতে দেরি হলে মহাজনরা অনেক সময় কাজে নিতে চান না।বীজতলা নিয়ে বিপাকে পড়েছেন কৃষকরাও। তারা জানান, ঘন কুয়াশা আর কনকনে শীতের কারণে ক্ষেতখামারে কাজ করতে পারছেন না। দেরিতে মাঠে যেতে হচ্ছে। এখন বোরো মৌসুম। ভুট্টা, মরিচ, গমসহ বিভিন্ন ফসলের বীজ বপন করতে হচ্ছে। শীতের কারণে দেরি করে জমিতে গিয়ে কাজ এগুচ্ছে না বলেও জানান তারা।শীতের কারণে পড়ালেখা স্থবির হয়ে পড়েছে স্কুল-কলেজের শিক্ষার্থীদেরও। সকালে স্কুল শিক্ষার্থী তানিয়া, কাজল ও নাইমা খাতুন জানায়, কনকনে শীত। রাতেও শীতের কারণে পড়তে পারি না। রাতের তাপমাত্রা অনেক কমে যায়। সকালে কুয়াশা আর বাতাসের কারণে প্রাইভেট পড়তে ও স্কুলে যেতে কষ্ট হচ্ছে। &nbsp;এদিকে শীতে প্রকোপে বেড়েছে নানান শীতজনিত রোগ। জ্বর, সর্দি-কাশি, শ্বাসকষ্ট, ডায়রিয়া, নিউমোনিয়াসহ ঠান্ডাজনিত রোগ নিয়ে হাসপাতালগুলোতে ভর্তি হচ্ছেন রোগীরা। উপজেলার স্বাস্থ্য কমপ্লেক্সে প্রতিদিন সকাল থেকে দুপুর ১টা পর্যন্ত শতাধিক রোগী চিকিৎসা নিতে আসছেন। এদের মধ্যে বেশিরভাগই শিশু।চিকিৎসকরা বলেন, আবহাওয়া পরিবর্তনের কারণে রোগীর চাপ বেড়েছে। এমনিতে শীত মৌসুমে আবহাওয়া শুষ্ক থাকায় বাতাসে জীবাণুর পরিমাণ বেড়ে যায়। শীতজনিত রোগ হিসেবে সর্দি-কাশি, শ্বাসকষ্ট বেশি হয়ে থাকে। আর শিশু ও বয়োজ্যেষ্ঠরা শীতজনিত রোগে বেশি আক্রান্ত হয়। তাই এ সময়টাতে বাড়তি সতর্কতা অবলম্বন করতে পারলে কিছুটা হলেও সুরক্ষা মিলবে।তেঁতুলিয়া আবহাওয়া অফিসের ভারপ্রাপ্ত কর্মকর্তা রাসেল শাহ ঢাকা পোস্টকে বলেন, জেলায় গতকালের চেয়ে তাপমাত্রা কমে আজও সর্বনিম্ন তাপমাত্রা রেকর্ড হয়েছে। সকাল ৯টায় ৬ দশমিক ৯ ডিগ্রি সেলসিয়াস রেকর্ড করা হয়েছে। ভোর ৬টায় রেকর্ড করা হয় ৭ দশমিক ৪ ডিগ্রি সেলসিয়াস। গতকাল সোমবার রেকর্ড করা হয়েছিল ৭ ডিগ্রি সেলসিয়াস তাপমাত্রা। আজ কুয়াশা না থাকায় তাপমাত্রা কমেছে ও জেলার ওপর দিয়ে মাঝারি শৈত্যপ্রবাহ বয়ে যাচ্ছে।জেলা প্রশাসক মো.জহুরুল ইসলাম জানিয়েছেন, জেলা প্রশাসনের পক্ষ হতে এ পর্যন্ত চল্লিশ হাজার শীত বিতরণ করা হয়েছে। এ জেলার শীতার্ত মানুষের জন্য আমরা কাজ করে যাচ্ছি। তবে সরকারের পাশাপাশি বেসরকারি প্রতিষ্ঠান ও দানশীল ব্যক্তিদের এগিয়ে আসতে হবে।&nbsp;', NULL, 'untitled-3-202301101016161673381629.jpg', NULL, 'স্বাস্থ্য', 'No', '2023-01-11', '2023-01-11', '02:13AM', NULL, 1, 1, NULL, '2023-01-11 02:13:49am', '2023-01-11 02:15:03', NULL, 'রাজশাহী', '', '', 'আরিফ হোসেন', '1673381400', 'Noman Abdullah'),
(13, ' আবহাওয়ার খবর', 'Yes', 'No', 'শৈত্যপ্রবাহ অব্যাহত থাকার আভাস', NULL, 'চুয়াডাঙ্গাসহ রাজশাহী ও রংপুর বিভাগের ওপর দিয়ে মৃদু শৈত্যপ্রবাহ বয়ে যাচ্ছে। এ শৈত্যপ্রবাহ অব্যাহত থাকতে পারে বলে জানিয়েছে আবহাওয়া অধিদপ্তর।সোমবার (২৬ ডিসেম্বর) রাতে আবহাওয়া অধিদপ্তরের আবহাওয়াবিদ এ কে এম নাজমুল হক এ তথ্য জানান।Tতিনি জানিয়েছেন,&nbsp;&nbsp;চুয়াডাঙ্গা জেলাসহ রাজশাহী ও রংপুর বিভাগের উপর দিয়ে মৃদু শৈত্যপ্রবাহ বয়ে যাচ্ছে এবং তা অব্যাহত থাকতে পারে।এদিকে মধ্যরাত থেকে সকাল পর্যন্ত দেশের নদী অববাহিকায় ঘন কুয়াশার আভাস দিয়েছে আবহাওয়া অধিদপ্তর। একইসঙ্গে বর্ধিত ৫ দিনের আবহাওয়ার অবস্থায় গুঁড়ি গুঁড়ি বৃষ্টির কথাও জানানো হয়েছে।আগামী ২৪ ঘণ্টার পূর্বাভাসে বলা হয়েছে, অস্থায়ীভাবে মেঘলা আকাশসহ সারাদেশের আবহাওয়া শুষ্ক থাকতে পারে। একইসঙ্গে মধ্যরাত থেকে সকাল পর্যন্ত দেশের নদী অববাহিকায় মাঝারি থেকে ঘন কুয়াশা এবং দেশের অন্যত্র হালকা থেকে মাঝারি ধরনের কুয়াশা পড়তে পারে। এছাড়া সারাদেশের রাত ও দিনের তাপমাত্রা প্রায় অপরিবর্তিত থাকতে পারে।পরবর্তী ৪৮ ঘণ্টার পূর্বাভাসে বলা হয়েছে, বাংলাদেশে তাপমাত্রা হ্রাস পেতে পারে। বর্ধিত ৫ দিনের আবহাওয়ার অবস্থায় বলা হয়েছে, এ সময়ের প্রথমার্ধে তাপমাত্রা বৃদ্ধি পেতে পারে। এছাড়া হালকা বৃষ্টি বা গুঁড়ি গুঁড়ি বৃষ্টি হতে পারে।বর্তমানে ঢাকায় বাতাসের গতিবেগ ঘণ্টায় ৮ থেকে ১২ কিলোমিটার। যা উত্তর বা উত্তর-পশ্চিম দিক থেকে বইছে। সন্ধ্যা ৬টায় ঢাকার বাতাসের আপেক্ষিক আর্দ্রতা ছিল ৭১ শতাংশ। ১০ জানুয়ারি ঢাকায় সূর্যোদয় হবে ভোর ৬টা ৪৩ মিনিটে এবং সূর্যাস্ত যাবে সন্ধ্যা ৫টা ২৮ মিনিটে।গত ২৪ ঘণ্টায় দেশে সর্বোচ্চ ৩০.২ ডিগ্রি সেলসিয়াস তাপমাত্রা রেকর্ড করা হয়েছে শ্রীমঙ্গলে। সর্বনিম্ন ৭ ডিগ্রি সেলসিয়াস তাপমাত্রা রেকর্ড করা হয়েছে তেঁতুলিয়ায়। এছাড়া সারাদেশে কোনো বৃষ্টিপাত রেকর্ড করা হয়নি।', NULL, 'cold-bg-20221229113105-202301092100181673382058.jpg', NULL, 'আবহাওয়া', 'No', '2023-01-11', '2023-01-11', '02:18AM', NULL, 1, NULL, NULL, '2023-01-11 02:20:57am', NULL, NULL, 'খুলনা', NULL, NULL, 'সেজান মাহমুদ', '1673381880', 'Noman Abdullah');

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
(2, 'National', 'জাতীয়', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Politics', 'রাজনীতি', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Economics', 'অর্থনীতি', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'International', 'আন্তর্জাতিক', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Sports', 'খেলা', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Entertainment', 'বিনোদন', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Health', 'স্বাস্থ্য', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Education', 'শিক্ষা', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Job', 'চাকরী', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Opinion', 'মতামত', 1, NULL, NULL, '2023-01-10 10:28:13pm', NULL, NULL),
(15, 'আইন-আদালত', 'law', 1, NULL, NULL, '2023-01-11 12:37:27am', NULL, NULL),
(16, 'কৃষি ও প্রকৃতি', 'Agricultural & Nature', 1, NULL, NULL, '2023-01-11 12:38:02am', NULL, NULL),
(17, 'ধর্ম', 'Religion', 1, NULL, NULL, '2023-01-11 12:38:50am', NULL, NULL),
(18, 'তথ্যপ্রযুক্তি', 'Technology', 1, NULL, NULL, '2023-01-11 12:40:02am', NULL, NULL),
(19, 'Weather', 'আবহাওয়া', 1, NULL, NULL, '2023-01-11 02:16:44am', NULL, NULL);

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
(7, 'Winter', 'শীতকাল', 1, NULL, NULL, '2023-01-08 08:29:28pm', NULL, NULL),
(8, 'Metrorail', 'মেট্রোরেল', 1, NULL, NULL, '2023-01-11 12:39:26am', NULL, NULL),
(9, 'Bissho Ijtema', 'বিশ্ব ইজতেমা', 1, NULL, NULL, '2023-01-11 12:55:52am', NULL, NULL),
(10, 'Trade Fair', 'বাণিজ্য মেলা', 1, NULL, NULL, '2023-01-11 12:56:37am', NULL, NULL),
(11, 'Weather Update', ' আবহাওয়ার খবর', 1, NULL, NULL, '2023-01-11 12:58:08am', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_newscatagory`
--
ALTER TABLE `tbl_newscatagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_reporter`
--
ALTER TABLE `tbl_reporter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_trendingcatagory`
--
ALTER TABLE `tbl_trendingcatagory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
