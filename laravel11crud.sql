-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2024 at 06:45 AM
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
-- Database: `laravel11crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `abdatabases`
--

CREATE TABLE `abdatabases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1726286236),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1726286236;', 1726286236);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conferenceposters`
--

CREATE TABLE `conferenceposters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `authors` text NOT NULL,
  `journal` varchar(255) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `doi` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conferenceposters`
--

INSERT INTO `conferenceposters` (`id`, `title`, `authors`, `journal`, `year`, `doi`, `created_at`, `updated_at`) VALUES
(1, 'Apolipoprotein E genotype, cognitive performance, and dementia in Hispanic populations.', 'Llibre‐Guerra, J. J., Li, J., Qian, Y., Llibre-Rodriguez, J., Jiménez‐Velázquez, I. Z., Acosta, D., Salas, A., Harrati, A., Weiss, J., Liu, M.-M. & Dow, W. H.', 'Alzheimer’s Association International Conference', '2021', 'https://populationsciences.berkeley.edu/wp-content/uploads/2021/10/PosterApoE1.pdf', NULL, NULL),
(2, 'The Caribbean-American Dementia and Aging Study (CADAS): a multinational initiative to address dementia in Caribbean populations.', 'Llibre‐Guerra, J. J., Li, J., Harrati, A., Jiménez‐Velázquez, I. Z., Acosta, D., Llibre-Rodriguez, J., Liu, M.-M. & Dow, W. H. ', 'Alzheimer’s Association International Conference', '2021', 'https://populationsciences.berkeley.edu/wp-content/uploads/2021/10/PosterCADAS1.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `databases`
--

CREATE TABLE `databases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(6, '2024_09_03_091837_create_products_table', 2),
(7, '2024_09_04_060654_create_publications_table', 2),
(8, '2024_09_04_065745_create_databases_table', 2),
(9, '2024_09_04_065925_create_abdatabases_table', 2),
(10, '2024_09_07_061259_create_publications_table', 3),
(11, '2024_09_09_053158_create_conferenceposters_table', 4);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'product1', '1234', 1200000, NULL, NULL, '2024-09-04 02:41:12', '2024-09-04 02:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `authors` text NOT NULL,
  `journal` varchar(255) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `volume_issue` varchar(50) DEFAULT NULL,
  `doi` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `title`, `authors`, `journal`, `year`, `volume_issue`, `doi`, `created_at`, `updated_at`) VALUES
(1, 'Dementia Research in the Caribbean Hispanic Islands: Present Findings and Future Trends', 'Acosta, D. M., Llibre-Guerra, J. J., Jiménez-Velázquez, I. Z., & Llibre-Rodríguez, J. J.', 'Frontiers in Public Health,', '2020', '8, 1046', 'https://www.frontiersin.org/journals/public-health/articles/10.3389/fpubh.2020.611998/full', NULL, NULL),
(2, 'Associations between education and dementia in the Caribbean and the United States: An international comparison.', 'Li, J., Llibre‐Guerra, J. J., Harrati, A., Weiss, J., Jiménez‐Velázquez, I. Z., Acosta, D., Llibre-Rodriguez, J., Liu, M. M. & Dow, W. H.', 'Alzheimer’s & Dementia: Translational Research & Clinical Interventions,', '2021', '7(1), e12204', 'https://alz-journals.onlinelibrary.wiley.com/doi/pdfdirect/10.1002/trc2.12204', NULL, NULL),
(3, 'Cuba’s cardiovascular risk factors: International comparison of levels and education gradients.', 'Dieci, M., Llibre-Rodriguez, J. J., Acosta, D., & Dow, W. H.', 'Plos One,', '2021', '16(3), e0247831,', 'https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0247831', NULL, NULL),
(4, 'Color disparities in cognitive aging among Puerto Ricans on the archipelago', 'Liu, M. M., Crowe, M., Telles, E. Jiménez Velázquez, I. Z. & Dow, W. H.', 'SSM – Population Health,', '2022', 'volume 17, 100998,', 'https://pubmed.ncbi.nlm.nih.gov/35231118/', NULL, NULL),
(5, 'Race/Ethnic Differences, Skin Tone and Cognitive Aging among Older Latinos in the U.S.', 'Liu, M. M., Telles, E., Tucker, K., Jiménez‐Velázquez, I. Z., & Dow, W. H.', 'The Journals of Gerontology: Series B', '2022', 'gbac043,', 'https://pubmed.ncbi.nlm.nih.gov/35231118/', NULL, NULL),
(6, 'Apolipoprotein E (APOE) genotype, dementia, and memory performance among Caribbean Hispanic versus US populations.', 'Llibre-Guerra, J. J., Li, J., Qian, Y., Llibre-Rodriguez, J. J., Jiménez-Velázquez, I. Z., Acosta, D., Salas, A., Llibre-Guerra, J. C., Valvuerdi, A., Harrati, A., Weiss, J., Liu, M. M., & Dow, W. H.', 'Alzheimer’s & dementia : the journal of the Alzheimer’s Association,', '2022', '10.1002/alz.12699,', 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC10754385/', NULL, NULL),
(7, 'Dementia Attributable Healthcare Utilizations in the Caribbean versus United States', 'Li J, Weiss J, Rajadhyaksha A, Acosta D, Harrati A, Jiménez Velázquez IZ, Liu MM, Guerra JJL, Rodriguez JJL, Dow WH.', 'J Alzheimers Dis. ', '2023', '96(2):801-811', 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC10754385/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HBAtmiL3JTxL6C2M4Ql4wgLU4X0hwzCXTnEU4jGI', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWRPbmQ1Z1l1Qldva01idUlDT2FmSUJXenBqQzNXRDhaQWdmcWVUYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9BYm91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726331122),
('RUYGzQ5ScYnXLE0n6XAJmjNAjYxCQBPMR0mupWY2', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWXhYc21BSWdvWUx4NjlHZ2U1Z0VxdzlYd1pDbFkwdmt6MWczZmQxbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726375474);

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$J3IVFhULdoIEUO6MKRcNNuoMTaTtliKIQKInNVOIIBYlarZpTyXF.', NULL, '2024-09-12 00:05:18', '2024-09-12 00:05:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abdatabases`
--
ALTER TABLE `abdatabases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `conferenceposters`
--
ALTER TABLE `conferenceposters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `databases`
--
ALTER TABLE `databases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `abdatabases`
--
ALTER TABLE `abdatabases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conferenceposters`
--
ALTER TABLE `conferenceposters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `databases`
--
ALTER TABLE `databases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
