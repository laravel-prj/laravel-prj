-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 07:53 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Louis Vuitton', '20210709082729-LV.png', '2021-07-09 01:27:29', '2021-07-09 01:27:29', NULL),
(2, 'Gucci', '20210709082758-gucci.png', '2021-07-09 01:27:58', '2021-07-09 01:27:58', NULL),
(3, 'Chanel', '20210709082817-chanel.png', '2021-07-09 01:28:17', '2021-07-09 01:28:17', NULL),
(4, 'Yame', '20210709082859-yame.jpg', '2021-07-09 01:28:59', '2021-07-09 01:28:59', NULL),
(5, 'Burberry', '20210709082918-burberry.png', '2021-07-09 01:29:18', '2021-07-09 01:29:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` tinyint(1) DEFAULT 1,
  `tel` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `address`, `birthday`, `gender`, `tel`, `city`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nguyen', 'Van A', '1A', '2021-06-27', 0, '0921234432', 'HCM', 'lequanghuynt98@gmail.com', '$2y$10$sO/JRlh6JiTBeNh8.UTqZuaUy3GLernHR8sdAg.P1fMxrrb5IZ7Rm', '2021-06-27 05:32:57', '2021-07-08 03:26:01', NULL),
(5, 'le quang', 'huy', 'asdfasdg', '2021-06-23', 0, '123564658', 'asdfads', 'cus1@gmail.com', '$2y$10$yVfCxO30DY9E.TqfHMdSHuIwzQwc40bsLyDy2YsbMGrKyI1KyqAm6', '2021-06-28 18:10:49', '2021-06-28 18:10:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_img` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `item_id`, `img`, `default_img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '20210709085602-ao.jpg', 1, '2021-07-09 01:56:02', '2021-07-09 01:56:02', NULL),
(2, 1, '20210709085649-ao2.jpg', 0, '2021-07-09 01:56:49', '2021-07-09 01:56:49', NULL),
(3, 1, '20210709085649-ao3.jpg', 0, '2021-07-09 01:56:49', '2021-07-09 01:56:49', NULL),
(4, 2, '20210709090249-aolv.jpg', 1, '2021-07-09 02:02:49', '2021-07-09 02:02:49', NULL),
(5, 2, '20210709090305-aolv2.jpg', 0, '2021-07-09 02:03:05', '2021-07-09 02:03:05', NULL),
(6, 2, '20210709090305-aolv3.jpg', 0, '2021-07-09 02:03:05', '2021-07-09 02:03:05', NULL),
(7, 2, '20210709090305-aolv4.jpg', 0, '2021-07-09 02:03:05', '2021-07-09 02:03:05', NULL),
(8, 3, '20210709090635-bag.jpg', 1, '2021-07-09 02:06:35', '2021-07-09 02:15:23', '2021-07-09 02:15:23'),
(9, 3, '20210709090657-bag2.jpg', 0, '2021-07-09 02:06:57', '2021-07-09 02:15:32', '2021-07-09 02:15:32'),
(10, 3, '20210709090657-bag3.jpg', 0, '2021-07-09 02:06:57', '2021-07-09 02:15:36', '2021-07-09 02:15:36'),
(11, 3, '20210709090657-bag4.jpg', 0, '2021-07-09 02:06:57', '2021-07-09 02:15:40', '2021-07-09 02:15:40'),
(12, 4, '20210709091145-lvbag.jpg', 1, '2021-07-09 02:11:45', '2021-07-09 02:12:01', '2021-07-09 02:12:01'),
(13, 4, '20210709091214-bag.jpg', 1, '2021-07-09 02:12:14', '2021-07-09 02:12:14', NULL),
(14, 4, '20210709091230-bag2.jpg', 0, '2021-07-09 02:12:30', '2021-07-09 02:12:30', NULL),
(15, 4, '20210709091230-bag3.jpg', 0, '2021-07-09 02:12:30', '2021-07-09 02:12:30', NULL),
(16, 4, '20210709091230-bag4.jpg', 0, '2021-07-09 02:12:30', '2021-07-09 02:12:30', NULL),
(17, 3, '20210709091450-lvbag.jpg', 0, '2021-07-09 02:14:50', '2021-07-09 02:15:46', '2021-07-09 02:15:46'),
(18, 3, '20210709091515-lvbag.jpg', 0, '2021-07-09 02:15:15', '2021-07-09 02:15:49', '2021-07-09 02:15:49'),
(19, 3, '20210709091602-lvbag.jpg', 1, '2021-07-09 02:16:02', '2021-07-09 02:16:02', NULL),
(20, 3, '20210709091618-lvbag2.jpg', 0, '2021-07-09 02:16:18', '2021-07-09 02:16:18', NULL),
(21, 3, '20210709091618-lvbag3.jpg', 0, '2021-07-09 02:16:18', '2021-07-09 02:16:18', NULL),
(22, 3, '20210709091618-lvbag4.jpg', 0, '2021-07-09 02:16:18', '2021-07-09 02:16:18', NULL),
(23, 5, '20210709092221-giay.jpg', 1, '2021-07-09 02:22:21', '2021-07-09 02:22:21', NULL),
(24, 5, '20210709092239-giay2.jpg', 0, '2021-07-09 02:22:39', '2021-07-09 02:22:39', NULL),
(25, 5, '20210709092239-giay3.jpg', 0, '2021-07-09 02:22:39', '2021-07-09 02:22:39', NULL),
(26, 6, '20210709092647-pant.jpg', 1, '2021-07-09 02:26:47', '2021-07-09 02:26:47', NULL),
(27, 6, '20210709092707-pant2.jpg', 0, '2021-07-09 02:27:07', '2021-07-09 02:27:07', NULL),
(28, 6, '20210709092707-pant3.jpg', 0, '2021-07-09 02:27:07', '2021-07-09 02:27:07', NULL),
(29, 6, '20210709092707-pant4.jpg', 0, '2021-07-09 02:27:07', '2021-07-09 02:27:07', NULL),
(30, 7, '20210709093252-shoesyame.jpg', 1, '2021-07-09 02:32:52', '2021-07-09 02:32:52', NULL),
(31, 7, '20210709093314-shoesyame2.jpg', 0, '2021-07-09 02:33:14', '2021-07-09 02:33:14', NULL),
(32, 7, '20210709093314-shoesyame3.jpg', 0, '2021-07-09 02:33:14', '2021-07-09 02:33:14', NULL),
(33, 7, '20210709093314-shoesyame4.jpg', 0, '2021-07-09 02:33:14', '2021-07-09 02:33:14', NULL),
(34, 8, '20210709093548-short.jpg', 1, '2021-07-09 02:35:48', '2021-07-09 02:35:48', NULL),
(35, 8, '20210709093605-short2.jpg', 0, '2021-07-09 02:36:05', '2021-07-09 02:36:05', NULL),
(36, 8, '20210709093605-short3.jpg', 0, '2021-07-09 02:36:05', '2021-07-09 02:36:05', NULL),
(37, 8, '20210709093605-short4.jpg', 0, '2021-07-09 02:36:05', '2021-07-09 02:36:05', NULL),
(38, 9, '20210709094049-qq.jpg', 1, '2021-07-09 02:40:49', '2021-07-09 02:40:49', NULL),
(39, 9, '20210709094105-qq2.jpg', 0, '2021-07-09 02:41:05', '2021-07-09 02:41:05', NULL),
(40, 9, '20210709094105-qq3.jpg', 0, '2021-07-09 02:41:05', '2021-07-09 02:41:05', NULL),
(41, 9, '20210709094105-qq4.jpg', 0, '2021-07-09 02:41:05', '2021-07-09 02:41:05', NULL),
(42, 10, '20210709094424-shoes.jpg', 1, '2021-07-09 02:44:24', '2021-07-09 02:44:24', NULL),
(43, 10, '20210709094441-shoes2.jpg', 0, '2021-07-09 02:44:41', '2021-07-09 02:44:41', NULL),
(44, 10, '20210709094441-shoes3.jpg', 0, '2021-07-09 02:44:41', '2021-07-09 02:44:41', NULL),
(45, 10, '20210709094441-shoes4.jpg', 0, '2021-07-09 02:44:41', '2021-07-09 02:44:41', NULL),
(46, 11, '20210709094957-quan.jpg', 1, '2021-07-09 02:49:57', '2021-07-09 02:49:57', NULL),
(47, 11, '20210709095015-quan2.jpg', 0, '2021-07-09 02:50:15', '2021-07-09 02:50:15', NULL),
(48, 11, '20210709095015-quan3.jpg', 0, '2021-07-09 02:50:15', '2021-07-09 02:50:15', NULL),
(49, 11, '20210709095015-quan4.jpg', 0, '2021-07-09 02:50:15', '2021-07-09 02:50:15', NULL),
(50, 12, '20210709095422-shirt.jpg', 1, '2021-07-09 02:54:22', '2021-07-09 02:54:22', NULL),
(51, 12, '20210709095440-shirt2.jpg', 0, '2021-07-09 02:54:40', '2021-07-09 02:54:40', NULL),
(52, 12, '20210709095440-shirt3.jpg', 0, '2021-07-09 02:54:40', '2021-07-09 02:54:40', NULL),
(53, 12, '20210709095440-shirt4.jpg', 0, '2021-07-09 02:54:40', '2021-07-09 02:54:40', NULL),
(54, 14, '20210709110200-bagG.jpg', 1, '2021-07-09 04:02:00', '2021-07-09 04:02:00', NULL),
(55, 14, '20210709110213-bagG2.jpg', 0, '2021-07-09 04:02:13', '2021-07-09 04:02:13', NULL),
(56, 14, '20210709110213-bagG3.jpg', 0, '2021-07-09 04:02:13', '2021-07-09 04:02:13', NULL),
(57, 14, '20210709110213-bagG4.jpg', 0, '2021-07-09 04:02:13', '2021-07-09 04:02:13', NULL),
(58, 15, '20210709110626-hatYame.jpg', 1, '2021-07-09 04:06:26', '2021-07-09 04:06:26', NULL),
(59, 15, '20210709110641-hatYame2.jpg', 0, '2021-07-09 04:06:41', '2021-07-09 04:06:41', NULL),
(60, 15, '20210709110641-hatYame3.jpg', 0, '2021-07-09 04:06:41', '2021-07-09 04:06:41', NULL),
(61, 16, '20210709111022-poloShirt.jpg', 1, '2021-07-09 04:10:22', '2021-07-09 04:10:22', NULL),
(62, 16, '20210709111036-poloShirt2.jpg', 0, '2021-07-09 04:10:36', '2021-07-09 04:10:36', NULL),
(63, 16, '20210709111036-poloShirt3.jpg', 0, '2021-07-09 04:10:36', '2021-07-09 04:10:36', NULL),
(64, 16, '20210709111036-poloShirt4.jpg', 0, '2021-07-09 04:10:36', '2021-07-09 04:10:36', NULL),
(65, 17, '20210709111331-quanY.jpg', 1, '2021-07-09 04:13:31', '2021-07-09 04:13:31', NULL),
(66, 17, '20210709111348-quanY2.jpg', 0, '2021-07-09 04:13:48', '2021-07-09 04:13:48', NULL),
(67, 17, '20210709111348-quanY3.jpg', 0, '2021-07-09 04:13:48', '2021-07-09 04:13:48', NULL),
(68, 18, '20210709111738-shoesBur.jpg', 1, '2021-07-09 04:17:38', '2021-07-09 04:17:38', NULL),
(69, 18, '20210709111807-shoesBur2.jpg', 0, '2021-07-09 04:18:07', '2021-07-09 04:18:07', NULL),
(70, 18, '20210709111807-shoesBur3.jpg', 0, '2021-07-09 04:18:07', '2021-07-09 04:18:07', NULL),
(71, 19, '20210709112126-shortY.jpg', 1, '2021-07-09 04:21:26', '2021-07-09 04:21:26', NULL),
(72, 19, '20210709112153-shortY2.jpg', 0, '2021-07-09 04:21:53', '2021-07-09 04:21:53', NULL),
(73, 19, '20210709112153-shortY3.jpg', 0, '2021-07-09 04:21:53', '2021-07-09 04:21:53', NULL),
(74, 19, '20210709112153-shortY4.jpg', 0, '2021-07-09 04:21:53', '2021-07-09 04:21:53', NULL),
(75, 20, '20210709112536-somi.jpg', 1, '2021-07-09 04:25:36', '2021-07-09 04:25:36', NULL),
(76, 20, '20210709112556-somi2.jpg', 0, '2021-07-09 04:25:56', '2021-07-09 04:25:56', NULL),
(77, 20, '20210709112556-somi3.jpg', 0, '2021-07-09 04:25:56', '2021-07-09 04:25:56', NULL),
(78, 20, '20210709112556-somi4.jpg', 0, '2021-07-09 04:25:56', '2021-07-09 04:25:56', NULL),
(79, 21, '20210709113032-yameShirt.jpg', 1, '2021-07-09 04:30:32', '2021-07-09 04:30:32', NULL),
(80, 21, '20210709113053-yameShirt2.jpg', 0, '2021-07-09 04:30:53', '2021-07-09 04:30:53', NULL),
(81, 21, '20210709113053-yameShirt3.jpg', 0, '2021-07-09 04:30:53', '2021-07-09 04:30:53', NULL),
(82, 21, '20210709113053-yameShirt4.jpg', 0, '2021-07-09 04:30:53', '2021-07-09 04:30:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_type_id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `feature` int(11) DEFAULT NULL,
  `discout_item` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_type_id`, `shop_id`, `name`, `description`, `price`, `feature`, `discout_item`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'MONOGRAM ADMIRAL JACKET LV', 'This Monogram Admiral Jacket fuses the season’s military inspiration with a tribute to Louis Vuitton’s craftsmanship. Crafted from iconic Monogram canvas, it combines a bandolier with details inspired by the House’s leather goods: VVN leather trim and removable belts, gold hardware and cotton pocket linings. Applied pockets embody Accessomorphosis, whereby accessories and garments blend into one.', 3000, 1, 0, '2021-07-09 01:52:12', '2021-07-09 01:52:12', NULL),
(2, 2, 1, 'STYLED DESIGNER DRESS SHIRTS LV', 'Enjoy a beautifully crafted, golden tribal accents on a quality designer shirt. Complete with a beautiful color selection, turndown collar, single-breasted buttons, cuffed full sleeves, and a slim fit with a comfortable and breathable fabric. This shirt has it all.', 2500, 0, 5, '2021-07-09 02:02:22', '2021-07-09 02:02:22', NULL),
(3, 3, 1, 'Monogram Jewellery case', 'Brown leather Monogram Jewellery case from Louis Vuitton Pre-Owned featuring a round top handle, a push lock fastening, a monogram pattern, purse feet, gold-tone hardware, micro stud details, a structured design, an internal mirror, multiple interior partitions and a colourful printed logo on the front.Please be mindful that this piece has led a previous life, and may tell its story through minor imperfection. Purchasing this item continues its narrative, so you can be confident that you’re making a POSITIVELY CONSCIOUS choice for the planet.', 5000, 1, 0, '2021-07-09 02:06:08', '2021-07-09 02:06:08', NULL),
(4, 4, 1, 'Gucci Supreme Tote Bag', 'Founded by college friends Gerard Maione and Seth Weisser, What Goes Around Comes Around originated as a meticulously edited vintage boutique in Soho, NYC and now includes a store in Los Angeles. After years of traveling the world in search of the finest vintage, WGACA has expanded to include the What Goes Around Comes Around collection and an archive that houses one of the most extensive collections in the world. Vintage aficionados from across the globe look to WGACA for the best from fashion\'s past.', 8000, 1, 5, '2021-07-09 02:11:04', '2021-07-09 02:11:04', NULL),
(5, 8, 1, 'Chanel Pre-Owned', 'Comfort is key but a little style never hurt anyone. Detailed with a leather and chain-link thong strap and a logo-printed sole, these sandals from Chanel Pre-Owned are proof you can get the best of both worlds. The winner takes it all.', 2500, 0, 0, '2021-07-09 02:21:41', '2021-07-09 02:21:41', NULL),
(6, 9, 1, 'Leyton crossover-front pants', 'Channel your inner rebel with R13’s punk-inspired designs. Boasting an edgy aesthetic that evokes ‘90s nostalgia, attitude is practically built-in. These faded black cotton Leyton crossover-front jeans from R13 feature a front button fastening, belt loops, a five pocket design, a boyfriend fit and a twisted silhouette.', 1500, 1, 10, '2021-07-09 02:26:00', '2021-07-09 02:26:00', NULL),
(7, 5, 1, 'Hking closed-toe sandals', 'yame’s Spring/Summer ‘18 collection continues to channel a relaxed, carefree yet elegant fashion with the designer’s chic Parisian attitude evident in each piece. Expect luxe materials, comfortable silhouettes and a muted colour palette that exemplify the designer’s take on ‘everyday femininity’. These white leather Bryce sneakers from Isabel Marant feature a flat rubber sole, a branded insole, a round toe, a lace-up front fastening, decorative perforations, suede trims and a contrasting heel counter.', 500, 0, 20, '2021-07-09 02:31:55', '2021-07-09 02:31:55', NULL),
(8, 6, 1, 'Leyton crossover-front pants', 'Channel your inner rebel with R13’s punk-inspired designs. Boasting an edgy aesthetic that evokes ‘90s nostalgia, attitude is practically built-in. These faded black cotton Leyton crossover-front jeans from R13 feature a front button fastening, belt loops, a five pocket design, a boyfriend fit and a twisted silhouette', 200, 0, 10, '2021-07-09 02:35:16', '2021-07-09 02:35:16', NULL),
(9, 7, 1, 'Straight-fit washed jeans', 'Jane Eyre, Pride and Prejudice and some Burberry denim - you love a good classic. These dark indigo cotton distressed straight-leg jeans are best-seller material. Keep them in your closet though, not your bedside table. Featuring a front button fastening, belt loops, whiskering at the thigh and a five pocket design. POSITIVELY CONSCIOUS: By buying this cotton product from Burberry, you’re supporting more responsibly grown cotton through the Better Cotton Initiative.', 440, 0, 5, '2021-07-09 02:39:30', '2021-07-09 02:39:30', NULL),
(10, 10, 1, 'Logo-plaque leather sandals', 'Your search for the ultimate summer footwear has come to an end. In black leather, these logo-plaque leather sandals from Burberry are a versatile pick for the season ahead. Show them off on a daily basis.', 2200, 1, 0, '2021-07-09 02:44:00', '2021-07-09 02:44:00', NULL),
(11, 12, 1, 'Monogram print track pants', 'Gucci know their sportswear vibes. Here, their iconic three-stripe logo adds an athletic feel, that contrasts perfectly with the monogram print. Relaxed yet eye-catching. Featuring an elasticated drawstring waist, side zipped pockets, a monogram print, a signature three stripe detail, a relaxed fit and elasticated cuffs.', 3000, 1, 0, '2021-07-09 02:49:22', '2021-07-09 02:49:22', NULL),
(12, 11, 1, 'Monogram Stripe Print Cotton Oversized Polo Shirt', 'An oversized polo shirt in airy cotton piqué, highlighted with Burberry\'s Monogram stripe, refreshed logo and press-stud placket.', 2400, 0, 0, '2021-07-09 02:53:48', '2021-07-09 02:53:48', NULL),
(13, 13, 1, 'BURBERRY MONOGRAM KEEPALL 45 BANDOULIERE', 'Brown Monogram Coated Canvas / Brass Hardware\r\nDual Rolled Handles / Detachable and Adjustable Shoulder Strap\r\nBlack Fabric Lining at Interior\r\nDual Zip Closure at Top', 2000, 0, 5, '2021-07-09 03:59:44', '2021-07-09 04:00:21', '2021-07-09 04:00:21'),
(14, 4, 1, 'MONOGRAM KEEPALL 45 BANDOULIERE', 'Brown Monogram Coated Canvas / Brass Hardware\r\nDual Rolled Handles / Detachable and Adjustable Shoulder Strap\r\nBlack Fabric Lining at Interior\r\nDual Zip Closure at Top', 2000, 0, 5, '2021-07-09 04:01:31', '2021-07-09 04:02:35', NULL),
(15, 14, 1, 'MLB New York Yankees Heroes Adjustable', 'Featuring a 6-panel construction, high density embroidered logo, a flat brim for the ultimate style and built from premium materials for maximum comfort, this New York Yankees New Era 59FIFTY Team Logo Navy MLB Fitted Hat is a hat unlike any other - be sure to cop!', 1000, 1, 0, '2021-07-09 04:06:03', '2021-07-09 04:06:03', NULL),
(16, 11, 1, 'Vintage Check Stretch Cotton Oversized Shirt', 'Checks are the new stripes this season. Crafted in stretch cotton, this beige oversized shirt from Burberry sports the British brand\'s heritage Vintage Check. Checkmate. Featuring a button-down collar, long sleeves, button cuffs, two chest pockets, a front button fastening, a curved hem and the House\'s Icon stripe at the side seams, placket and cuffs.', 3200, 0, 5, '2021-07-09 04:10:00', '2021-07-09 04:10:00', NULL),
(17, 12, 1, 'classic chino trousers', 'Update your classics with these chino trousers from Gucci. With a high waist, they are crafted from a beige cotton-wool-mohair blend. They always say a minimalist wardrobe is the best option.', 800, 1, 15, '2021-07-09 04:13:07', '2021-07-09 04:13:07', NULL),
(18, 10, 1, 'Vintage Check Cotton Sneakers', 'A runway-inspired sneaker in our archival Vintage check, set on an accentuated tread and tagged with our refreshed logo. Upper: 99% cotton, 1% leather. Lining: 54% cotton, 37% sheep leather, 9% goat suede. Sole: 100% rubber.', 1900, 0, 0, '2021-07-09 04:16:11', '2021-07-09 04:16:11', NULL),
(19, 12, 1, 'GG Mickey Mouse Print Pants, Brand Size XX-Small', 'For the Cruise 2019 Fashion Show, Gucci staged a rave party among the ancient graves of Alyscamps\' Roman necropolis, in Arles. Walking a runway divided by flames, the models played rock stars with looks that brought back mainstays of ‘80s glam metal: like the daring zebra motif printed onto this denim skinny pant, used as a layering piece in the show. Yellow and black zebra print on stretch denim; Metallic Gucci vintage logo label at the back; Five-pocket style, sits on the waist, fitted through the legs, tapered at the ankles; Pant: 10\" leg opening; 85% cotton, 10.5% polyester and 4.5% elastane; Made in Italy.', 3300, 0, 10, '2021-07-09 04:20:49', '2021-07-09 04:20:49', NULL),
(20, 15, 1, '1997 logo printed shirt', 'When you\'re a fan, there\'s no reason for denial. Crafted from pure black silk, this smooth shirt from Chanel Pre-Owned has a Coco Chanel print in contrasting white. Number one Chanel girl.', 1000, 0, 0, '2021-07-09 04:24:36', '2021-07-09 04:24:36', NULL),
(21, 16, 1, 'Coco Who Tee', 'This Adult Grumpy Bear Costume Shirt is a unisex shirt that\'s officially licensed from the Care Bears. It\'s light blue, just like Grumpy Bear\'s fur and it has his raincloud belly badge printed onto the front. The cotton design gives you both comfort and the durability to stand up to everyday wear. You can use it as a quick and easy costume, or add it to your normal rotation of daily shirts!', 100, 0, 0, '2021-07-09 04:29:42', '2021-07-09 04:29:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

CREATE TABLE `item_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_details`
--

INSERT INTO `item_details` (`id`, `item_id`, `quantity`, `size`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 10, 'M', '2021-07-09 01:57:49', '2021-07-09 01:57:49', NULL),
(2, 1, 20, 'L', '2021-07-09 01:58:07', '2021-07-09 01:58:07', NULL),
(3, 1, 10, 'XL', '2021-07-09 01:58:24', '2021-07-09 01:58:24', NULL),
(4, 2, 10, 'L', '2021-07-09 02:03:39', '2021-07-09 02:03:39', NULL),
(5, 2, 8, 'S', '2021-07-09 02:04:06', '2021-07-09 02:04:06', NULL),
(6, 3, 10, 'Small', '2021-07-09 02:07:50', '2021-07-09 02:08:07', NULL),
(7, 4, 10, 'Small', '2021-07-09 02:17:05', '2021-07-09 02:17:05', NULL),
(8, 5, 10, 'L', '2021-07-09 02:23:15', '2021-07-09 02:23:15', NULL),
(9, 5, 20, 'XL', '2021-07-09 02:23:41', '2021-07-09 02:23:41', NULL),
(10, 6, 15, 'L', '2021-07-09 02:27:44', '2021-07-09 02:27:44', NULL),
(11, 6, 10, 'M', '2021-07-09 02:28:00', '2021-07-09 02:28:00', NULL),
(12, 6, 10, 'S', '2021-07-09 02:28:16', '2021-07-09 02:28:16', NULL),
(13, 7, 4, 'L', '2021-07-09 02:33:46', '2021-07-09 02:33:46', NULL),
(14, 8, 5, 'M', '2021-07-09 02:36:42', '2021-07-09 02:36:42', NULL),
(15, 9, 10, 'L', '2021-07-09 02:41:31', '2021-07-09 02:41:31', NULL),
(16, 9, 15, 'XL', '2021-07-09 02:41:51', '2021-07-09 02:41:51', NULL),
(17, 10, 10, 'M', '2021-07-09 02:45:07', '2021-07-09 02:45:07', NULL),
(18, 10, 20, 'XL', '2021-07-09 02:45:21', '2021-07-09 02:45:21', NULL),
(19, 11, 10, 'M', '2021-07-09 02:50:38', '2021-07-09 02:50:38', NULL),
(20, 11, 20, 'L', '2021-07-09 02:50:48', '2021-07-09 02:50:48', NULL),
(21, 11, 30, 'XL', '2021-07-09 02:51:16', '2021-07-09 02:51:16', NULL),
(22, 12, 10, 'M', '2021-07-09 02:55:17', '2021-07-09 02:55:17', NULL),
(23, 12, 10, 'L', '2021-07-09 02:55:26', '2021-07-09 02:55:26', NULL),
(24, 12, 20, 'XL', '2021-07-09 02:55:50', '2021-07-09 02:55:50', NULL),
(25, 12, 12, 'M', '2021-07-09 02:56:01', '2021-07-09 02:56:39', '2021-07-09 02:56:39'),
(26, 12, 1, 's', '2021-07-09 03:17:36', '2021-07-09 03:19:01', '2021-07-09 03:19:01'),
(27, 14, 10, 'Big', '2021-07-09 04:03:07', '2021-07-09 04:03:30', NULL),
(28, 15, 10, 'only', '2021-07-09 04:07:30', '2021-07-09 04:07:30', NULL),
(29, 16, 10, 'L', '2021-07-09 04:10:54', '2021-07-09 04:10:54', NULL),
(30, 16, 20, 'M', '2021-07-09 04:11:05', '2021-07-09 04:11:05', NULL),
(31, 16, 10, 'XL', '2021-07-09 04:11:16', '2021-07-09 04:11:16', NULL),
(32, 17, 10, 'L', '2021-07-09 04:14:09', '2021-07-09 04:14:09', NULL),
(33, 17, 10, 'M', '2021-07-09 04:14:20', '2021-07-09 04:14:20', NULL),
(34, 18, 10, 'L', '2021-07-09 04:18:59', '2021-07-09 04:18:59', NULL),
(35, 19, 10, 'M', '2021-07-09 04:22:27', '2021-07-09 04:22:27', NULL),
(36, 19, 10, 'L', '2021-07-09 04:22:37', '2021-07-09 04:22:37', NULL),
(37, 20, 10, 'L', '2021-07-09 04:26:13', '2021-07-09 04:26:13', NULL),
(38, 20, 10, 'M', '2021-07-09 04:26:24', '2021-07-09 04:26:24', NULL),
(39, 21, 10, 'L', '2021-07-09 04:31:13', '2021-07-09 04:31:13', NULL),
(40, 21, 20, 'M', '2021-07-09 04:31:26', '2021-07-09 04:31:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_types`
--

CREATE TABLE `item_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_types`
--

INSERT INTO `item_types` (`id`, `brand_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Jackets', '2021-07-09 01:32:58', '2021-07-09 01:34:22', NULL),
(2, 1, 'Shirts', '2021-07-09 01:33:28', '2021-07-09 01:34:13', NULL),
(3, 1, 'Bags', '2021-07-09 01:34:03', '2021-07-09 01:34:03', NULL),
(4, 2, 'Bags', '2021-07-09 01:35:00', '2021-07-09 01:35:00', NULL),
(5, 4, 'Shoes', '2021-07-09 01:35:34', '2021-07-09 01:35:34', NULL),
(6, 4, 'Pants', '2021-07-09 01:36:46', '2021-07-09 01:36:46', NULL),
(7, 5, 'Jeans', '2021-07-09 01:37:28', '2021-07-09 01:37:28', NULL),
(8, 3, 'Shoes', '2021-07-09 01:38:17', '2021-07-09 01:38:17', NULL),
(9, 3, 'Pants', '2021-07-09 01:39:06', '2021-07-09 01:39:06', NULL),
(10, 5, 'Shoes', '2021-07-09 01:39:50', '2021-07-09 01:39:50', NULL),
(11, 5, 'Shirts', '2021-07-09 02:46:52', '2021-07-09 02:46:52', NULL),
(12, 2, 'Pants', '2021-07-09 02:47:35', '2021-07-09 02:47:35', NULL),
(13, 5, 'Bags', '2021-07-09 03:57:04', '2021-07-09 03:57:04', NULL),
(14, 4, 'Hats', '2021-07-09 04:04:02', '2021-07-09 04:04:02', NULL),
(15, 3, 'Shirts', '2021-07-09 04:23:21', '2021-07-09 04:23:21', NULL),
(16, 4, 'Shirts', '2021-07-09 04:27:11', '2021-07-09 04:27:11', NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_24_092020_brand', 1),
(5, '2021_05_25_152101_customers', 1),
(6, '2021_05_25_154342_orders', 1),
(7, '2021_05_25_155311_shops', 1),
(8, '2021_05_25_155312_item_types', 1),
(9, '2021_05_25_155313_items', 1),
(10, '2021_05_25_155500_item_details', 1),
(11, '2021_05_25_161137_order_items', 1),
(12, '2021_05_26_155314_images', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `delivery_time` date DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `total_discount` double DEFAULT NULL,
  `total_item` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `item_details_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `discount` tinyint(2) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `user_id`, `name`, `city`, `address`, `tel`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'MO', 'HCM', '590 cmt8', '0129456789', 'MO@gmail.com', '2021-06-21 16:57:02', '2021-06-21 16:57:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'admin', 'admin@gmail.com', '$2y$10$dD/928ipPHokMpq6rJuDQeaptTGnlTiEDYN5EtkFpXL.8brpRkkbq', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_item_id_foreign` (`item_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_item_type_id_foreign` (`item_type_id`),
  ADD KEY `items_shop_id_foreign` (`shop_id`);

--
-- Indexes for table `item_details`
--
ALTER TABLE `item_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_details_item_id_foreign` (`item_id`);

--
-- Indexes for table `item_types`
--
ALTER TABLE `item_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_types_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_item_details_id_foreign` (`item_details_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shops_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `item_details`
--
ALTER TABLE `item_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `item_types`
--
ALTER TABLE `item_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_item_type_id_foreign` FOREIGN KEY (`item_type_id`) REFERENCES `item_types` (`id`),
  ADD CONSTRAINT `items_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`);

--
-- Constraints for table `item_details`
--
ALTER TABLE `item_details`
  ADD CONSTRAINT `item_details_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `item_types`
--
ALTER TABLE `item_types`
  ADD CONSTRAINT `item_types_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_item_details_id_foreign` FOREIGN KEY (`item_details_id`) REFERENCES `item_details` (`id`),
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
