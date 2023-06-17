-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 05:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ranmits`
--

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
-- Table structure for table `kehilangan`
--

CREATE TABLE `kehilangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `jenisKendaraan` varchar(255) NOT NULL,
  `model_kendaraan` varchar(255) NOT NULL,
  `tahun_keluaran` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `plat_nomor` varchar(255) NOT NULL,
  `foto_kendaraan` varchar(255) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `waktu_kejadian` time NOT NULL,
  `lokasi_kejadian` varchar(255) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kehilangan`
--

INSERT INTO `kehilangan` (`id`, `kontak`, `jenisKendaraan`, `model_kendaraan`, `tahun_keluaran`, `warna`, `plat_nomor`, `foto_kendaraan`, `tanggal_kejadian`, `waktu_kejadian`, `lokasi_kejadian`, `deskripsi`, `user_id`, `created_at`, `updated_at`) VALUES
(4, '+62857526772826', 'SepedaMotor', 'vario', '2000', 'hitam', 'B 2233 NBB', 'motor2.jpg', '2023-06-01', '13:00:00', 'manarul', 'tolong hilang', 1, '2023-06-17 07:54:09', '2023-06-17 07:54:09'),
(5, '081278123', 'SepedaMotor', 'vario', '2015', 'hitam', 'B 4455 NCC', 'motor3.jpeg', '2023-06-01', '14:00:00', 'perpus', 'tolong hilang', 1, '2023-06-17 07:55:16', '2023-06-17 07:55:16'),
(6, '08127612113', 'SepedaMotor', 'beat', '2012', 'putih', 'N 1223 CDG', 'motorputih1.jpg', '2023-06-22', '13:00:00', 'taman alumni', 'tolong hilang', 2, '2023-06-17 07:57:55', '2023-06-17 07:57:55'),
(7, '08126133', 'Mobil', 'avanza', '2015', 'hitam', 'AG 7723 RPI', 'avanzahitam1.png', '2023-06-23', '15:00:00', 'tower', 'tolong hilang', 2, '2023-06-17 07:58:49', '2023-06-17 07:58:49'),
(8, '0812613533', 'SepedaMotor', 'beat', '2002', 'hitam', 'A 1199 JJJ', 'motorhitam2.jpg', '2023-06-29', '13:00:00', 'manarul', 'tolong hilang', 2, '2023-06-17 07:59:33', '2023-06-17 07:59:33'),
(9, '+6285726772826', 'SepedaMotor', 'vario', '2020', 'merah', 'H4H4', 'motor1.jpg', '2023-06-02', '00:00:00', 'keputih', 'baret di sebelah kiri', 1, '2023-06-17 08:38:07', '2023-06-17 08:38:07');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_05_22_185349_kehilangan', 1),
(10, '2023_05_22_185359_panggilan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `panggilan`
--

CREATE TABLE `panggilan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `Calltime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `panggilan`
--

INSERT INTO `panggilan` (`id`, `user_id`, `Calltime`) VALUES
(1, 1, '2023-06-17 08:39:10'),
(2, 1, '2023-06-17 08:39:11');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'epan', 'tes@gmail.com', NULL, '$2y$10$bDfL9cXUmZPqxOTU7BkxeOeeftu7Lmr7McaOfndBrN5Wr3aXtGWbO', NULL, '2023-06-17 07:47:41', '2023-06-17 07:47:41'),
(2, 'rapi', 'testes@gmail.com', NULL, '$2y$10$WO294r/5lq9aC0cnAXJju.7voCxunXlU5HPd2oUC43Ia0RYMDElTC', NULL, '2023-06-17 07:56:05', '2023-06-17 07:56:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kehilangan`
--
ALTER TABLE `kehilangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kehilangan_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panggilan`
--
ALTER TABLE `panggilan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panggilan_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kehilangan`
--
ALTER TABLE `kehilangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `panggilan`
--
ALTER TABLE `panggilan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kehilangan`
--
ALTER TABLE `kehilangan`
  ADD CONSTRAINT `kehilangan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `panggilan`
--
ALTER TABLE `panggilan`
  ADD CONSTRAINT `panggilan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
