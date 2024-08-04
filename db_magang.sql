-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 28, 2024 at 02:23 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `asal_instansi`
--

CREATE TABLE `asal_instansi` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asal_instansi`
--

INSERT INTO `asal_instansi` (`id`, `nama`, `alamat`, `email`, `created_at`, `updated_at`) VALUES
(4, 'universitas indonesia', 'jakarta', 'contact@ui.ac.id', '2024-01-21 07:13:56', '2024-01-21 07:13:56'),
(5, 'SMKN 1 Lhokseumawe', 'kota', 'ray@gmail.com', '2024-01-21 07:19:27', '2024-01-21 07:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `durasi_magang`
--

CREATE TABLE `durasi_magang` (
  `id` bigint UNSIGNED NOT NULL,
  `durasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `durasi_magang`
--

INSERT INTO `durasi_magang` (`id`, `durasi`, `created_at`, `updated_at`) VALUES
(3, '30', '2024-01-19 09:31:14', '2024-01-19 09:31:14'),
(4, '60', '2024-01-21 06:37:10', '2024-01-21 06:37:10'),
(5, '120', '2024-01-21 21:30:33', '2024-01-21 21:30:33'),
(6, '333', '2024-01-26 02:39:47', '2024-01-26 02:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fungsi`
--

CREATE TABLE `fungsi` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fungsi`
--

INSERT INTO `fungsi` (`id`, `nama`, `pembimbing`, `created_at`, `updated_at`) VALUES
(2, 'IT', 'khbkhbkb', '2024-01-19 09:31:08', '2024-01-21 07:38:38'),
(3, 'HR', 'maharani', '2024-01-19 11:10:24', '2024-01-19 11:10:24'),
(5, 'Pembantu', 'alika', '2024-01-24 08:12:39', '2024-01-24 08:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_21_075543_add_hasil_and_status_to_alternatif', 2),
(6, '2024_01_19_120454_create_asal_instansi_table', 3),
(7, '2024_01_19_120658_create_fungsi_table', 3),
(8, '2024_01_19_120741_create_durasi_magang_table', 3),
(9, '2024_01_19_121001_create_peserta_table', 3),
(10, '2024_01_28_121543_update_peserta_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_instansi_id` bigint UNSIGNED NOT NULL,
  `fungsi_id` bigint UNSIGNED NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `durasi` int DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `tanggal_lahir`, `alamat`, `asal_instansi_id`, `fungsi_id`, `tanggal_masuk`, `tanggal_keluar`, `durasi`, `foto`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
(27, 'DANA', '2024-01-28', 'tamiang', 4, 2, '2024-01-28', '2024-02-01', 4, '2f134b8a9f4f0014ec877b3eefeddfdb8a154ac5e5aeee13c3f63d6a00038cfc.png', '2222222412312', 'dinda@gmail.com', '2024-01-28 05:18:11', '2024-01-28 05:18:11'),
(29, 'DANA', '2024-01-28', 'tamiang', 5, 3, '2024-01-28', '2024-02-27', 30, 'e5a58a842c6354852364e5474064657e6406b641cfcc3fc2d34b12632a6272c8.png', '2222222412312', 'dinda@gmail.com', '2024-01-28 05:28:27', '2024-01-28 05:31:27'),
(30, 'DANA', '2024-01-28', 'tamiang', 4, 5, '2024-01-28', '2024-03-28', 60, 'e9e94d7934cdd02f029e5be3bccd8c54f74598949fc6faa696593451cde53825.png', '2222222412312', 'dinda@gmail.com', '2024-01-28 05:29:46', '2024-01-28 05:31:10'),
(31, 'DANA', '2024-01-28', 'tamiang', 4, 2, '2024-01-28', '2024-02-27', 30, '5ee48701a32eacd57291c7591dd7d9e20c20cc53607145c43bb134aa46709a09.png', '2222222412312', 'dinda@gmail.com', '2024-01-28 05:43:28', '2024-01-28 05:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$XmLwj5k3j8l/iJv7rSpt/.ZOvp6xSMAHMEJ/CXk.PW5nvcfy0.W9.', '8xPMEDfEiWaOHBGmryQSJdBuvInci25b3Jw4fVVjnzXaLub8Z5uydXlB9oqQ', NULL, NULL),
(2, 'penilai', 'penilai@gmail.com', 'penilai', NULL, '$2y$10$ewNej6M0gSpMBCk8lr3sW.2iRVprtbENbEvqcloOeUH0JxhMDwK8S', 'iNPgqKPqZo7i7cN4ZSdg7jADurJr9uGhgBKXiP6SRuVJ7kfLHEkD2uEzRyBI', NULL, NULL),
(3, 'manager', 'manager@gmail.com', 'manajer', NULL, '$2y$10$68VT8paRdJls0Em6eMCnSeXCl2Ozz3bWBu1RWg0R/n/JxGX.SWriO', 'PS3DvLcpvenFs9ApdMqjX4SOy1na9hcQaoBZvfOQ3rA4673JV0sUzNwYgJ5g', NULL, NULL),
(4, 'tes', 'tes@gmail.com', 'penilai', NULL, '$2y$10$/SIXi71jygZzoUVZtpsin./RjI5Z8H7AotnQ/sZ1MB/yFeIomdmtC', 'cdvIR9OgM88gnsCJZvW8acuCCcSUGSv7xbGLP5arhi0NO03QSIH37QafU7Z8', NULL, NULL),
(5, 'penilai1', 'penilai1@gmail.com', 'penilai', NULL, '$2y$10$pJ1y9oUj6Lf96EtUdaVUaOqdFacoPfivMQjGqjv7KcA9bukNSMvtG', 'f6zcAtCNzpCH3SyuDTP4Fe9hW2MtPVCEzgtvGqEy4JP6ziqBRUAGZTqE4TgF', NULL, NULL),
(6, 'manajer', 'manajer@gmail.com', 'manajer', NULL, '$2y$10$I38cZaGX9OmxQxatgD8VreLA76YS8a8SJhMrJjxePNSQXSLrPUt5C', 'XVGJ38DPwuBGQVi5Oyl5vSlzDIYVBB4uV3C8F0WVaNrzrpEi8FiYFDGmUmKz', NULL, NULL),
(7, 'haha', 'haha@mail.com', 'admin', NULL, '$2y$10$aNLrp.wg6hjqgU89okgPpugtmjqgX1uVTSgdCKTcUJ5FfG8Xj4Dsi', 'YM7zqU08DRurHPDVh9za7fqH4yKdC7ahx75lBWHBT7qs4P4Qn79PN813COSy', NULL, NULL),
(8, 'dawdw', 'dawdaw@gmail.com', 'admin', NULL, '$2y$10$nU7gJbIK52veAyvholRTb.ATJJXLMplpFercfd0LIfAPnV0GtE3/m', 'cdOLoxEMOTolM1i5BDo4V9JbNWYtLUBJhBKqlgUxTBYO24vmvTuDfAYtdzJF', NULL, NULL),
(9, 'dwawd', 'wdawdawd@fawf', 'admin', NULL, '$2y$10$hryEVgvgoOWLuHmicrfA6uB5gSTN4KidYK73.5P7DS5PwR.uy5RZK', 'XQJpDhDLaPXFCcO8jT7qtwUUvw8GvagPYDlFmAjGaVBof1E4T9mqovhSO8OV', NULL, NULL),
(10, 'adwawd', 'wdawdawdawfdawf@fawfwa', 'admin', NULL, '$2y$10$s0sooU6PRkYbgRX6OwdXceUiKKco3jxL6MaY9cauQg/LVfVvsjlEu', 'XXYzvksm50PMlpLxgWJI77khJKZsvYcaFTbMqUnr0t0VEyFRP8Q6Jxy49iWQ', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asal_instansi`
--
ALTER TABLE `asal_instansi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asal_instansi_email_unique` (`email`);

--
-- Indexes for table `durasi_magang`
--
ALTER TABLE `durasi_magang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fungsi`
--
ALTER TABLE `fungsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_asal_instansi_id_foreign` (`asal_instansi_id`),
  ADD KEY `peserta_fungsi_id_foreign` (`fungsi_id`);

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
-- AUTO_INCREMENT for table `asal_instansi`
--
ALTER TABLE `asal_instansi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `durasi_magang`
--
ALTER TABLE `durasi_magang`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fungsi`
--
ALTER TABLE `fungsi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_asal_instansi_id_foreign` FOREIGN KEY (`asal_instansi_id`) REFERENCES `asal_instansi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peserta_fungsi_id_foreign` FOREIGN KEY (`fungsi_id`) REFERENCES `fungsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
