-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 07:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara_ecommerce_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alamin', 'alamin@gmail.com', 'alamin', 'active', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', NULL, NULL),
(2, 'Apple', NULL, NULL),
(3, 'Hp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', NULL, NULL),
(2, 'Laptop', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countrys`
--

CREATE TABLE `countrys` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countrys`
--

INSERT INTO `countrys` (`id`, `country_name`, `shipping_charge`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', '5', NULL, NULL),
(2, 'India', '6', NULL, NULL),
(3, 'Pakistan', '7', NULL, NULL),
(4, 'Nepal', '8', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(36, '2019_07_09_043121_create_brands_table', 1),
(37, '2019_07_09_043721_create_cats_table', 1),
(38, '2019_07_09_044117_create_orders_table', 1),
(39, '2019_07_09_044522_create_products_table', 1),
(40, '2019_07_09_045008_create_customers_table', 1),
(41, '2019_07_09_050500_create_admins_table', 1),
(42, '2019_07_16_003959_create_countrys_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int(11) NOT NULL,
  `address_line` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `product_name`, `qty`, `trx_id`, `customer_name`, `phone`, `email`, `country`, `city`, `zip_code`, `address_line`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 11, 'iPhone 7 waterproffed', 1, 'ZZOX1245457KL', 'Henry Petter', '+966125444', 'henry@gmail.com', 'India', 'Calcata', 22245, 'zoom buinding H-10,R-2', '1', '2019-08-01 11:20:29', '2019-08-01 11:20:29'),
(2, 2, 'Apple MacBook', 1, 'ZX341245457KL', 'Krishna', '+6627487847', 'krishna@gmail.com', 'Bangladesh', 'dhaka', 11, 'mirpur', '0', '2019-08-01 11:22:07', '2019-08-01 11:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `brand_id`, `product_name`, `product_price`, `product_qty`, `product_description`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Apple MacBook Air MREA2HN/A Ultrabook', 99000, 15, 'best product for you', '71FuucX5RqL._SL1200_.jpg', '2019-08-01 08:12:00', '2019-08-01 08:12:00'),
(2, 2, 2, 'Apple MacBook', 70000, 20, 'best mac for you.best performance and fast speed', '39c98a29c24e8227ba1864fe874468a3.jpg', '2019-08-01 08:13:30', '2019-08-01 08:13:30'),
(3, 2, 2, 'apple laptop', 100000, 15, 'best speed for gamming laptop. high speed', '71Sw3ca5QsL._SL1200_.jpg', '2019-08-01 08:15:16', '2019-08-01 08:15:16'),
(4, 2, 3, 'Hp laptop 450 pro notebook', 60000, 15, 'best quality, best performance, fast speed', '1-67.jpg', '2019-08-01 08:16:54', '2019-08-01 08:16:54'),
(5, 2, 3, 'Hp laptop zigzar', 55555, 20, 'best perfoemance for gamming laptop', '1x1_1200x1200_highres-hp-envy-wood-edition-laptop.jpg', '2019-08-01 08:19:00', '2019-08-01 08:19:00'),
(6, 2, 3, 'Hp laptop probook', 60000, 15, 'best quality for ever', 'HP-Spectre-x360-133-Ultra-HD-4K-Laptop-Core-i7-8GB-RAM-512GB-SSD-2QH38EAABU-273486051797-4.jfif', '2019-08-01 08:20:57', '2019-08-01 08:20:57'),
(7, 1, 1, 'samsung mobile s4 mini', 35000, 15, 'best quality for you', 'samsung-galaxy-note-5-j3-2016-j5-2016-j7-2016-plating-soft-case-cover-soky6019-1904-23-F1000736_9.jpg', '2019-08-01 08:22:45', '2019-08-01 08:22:45'),
(8, 1, 1, 'samsung s8 waterproffed', 55555, 15, 'water proffed mobile fast speed', '3e25b57e-6937-4d2c-8bc7-30bb8f036304.jpg', '2019-08-01 08:23:54', '2019-08-01 08:23:54'),
(9, 1, 1, 'samsung galaxy pro', 20000, 20, 'best quality for you', 'asuszmaxm12.jpg', '2019-08-01 08:25:51', '2019-08-01 08:25:51'),
(10, 1, 2, 'iPhone 7 plus', 55000, 20, 'supper fast and best quality', '41l4Tf2pRML._SR500,500_.jpg', '2019-08-01 08:27:31', '2019-08-01 08:27:31'),
(11, 1, 2, 'iPhone 7 waterproffed', 777777, 15, 'waterproffed and super fast', 'apple-iphone-7-plus-128gb-jet-black.jpg', '2019-08-01 08:29:07', '2019-08-01 08:29:07'),
(12, 2, 1, 'samsung laptop', 55555, 30, 'best quality high speed', 'csm_2_1_81add33ffb.jpg', '2019-08-01 08:31:47', '2019-08-01 08:31:47'),
(13, 2, 1, 'samsung probook', 60000, 20, 'best quality for you', 'thumb_122220_default_td_480x480.jpeg', '2019-08-01 08:32:59', '2019-08-01 08:32:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admins_admin_email_unique` (`admin_email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countrys`
--
ALTER TABLE `countrys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countrys`
--
ALTER TABLE `countrys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
