-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Ago-2026 às 21:04
-- Versão do servidor: 8.4.6
-- versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dados: `weddingplanning`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `guests`
--

DROP TABLE IF EXISTS `guests`;
CREATE TABLE IF NOT EXISTS `guests` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `wedding_id` bigint UNSIGNED NOT NULL,
  `table_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsvp_token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsvp_status` enum('pending','confirmed','declined') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `companions_adult` int UNSIGNED DEFAULT '0',
  `dietary_restrictions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `companions_children` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rsvp_token` (`rsvp_token`),
  KEY `wedding_id` (`wedding_id`),
  KEY `table_id` (`table_id`)
) ENGINE=MyISAM AUTO_INCREMENT=189 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `guests`
--

INSERT INTO `guests` (`id`, `wedding_id`, `table_id`, `name`, `email`, `phone`, `rsvp_token`, `rsvp_status`, `companions_adult`, `dietary_restrictions`, `notes`, `created_at`, `updated_at`, `companions_children`) VALUES
(162, 1, NULL, 'Toi Gosta', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(161, 1, NULL, 'Zezinho', NULL, NULL, NULL, 'pending', 3, NULL, NULL, NULL, NULL, 0),
(160, 1, NULL, 'Teresa Paula', NULL, NULL, NULL, 'pending', 2, NULL, NULL, NULL, NULL, 0),
(159, 1, NULL, 'João Figueira', NULL, NULL, NULL, 'pending', 4, NULL, NULL, NULL, NULL, 0),
(158, 1, NULL, 'Filipe Pires', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(157, 1, NULL, 'Mika', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(156, 1, NULL, 'Maria Margarida', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(155, 1, NULL, 'Pedro Mata', NULL, NULL, NULL, 'pending', 3, NULL, NULL, NULL, NULL, 0),
(154, 1, NULL, 'Machado', NULL, NULL, NULL, 'pending', 3, NULL, NULL, NULL, NULL, 0),
(153, 1, NULL, 'Vitor Pardal', NULL, NULL, NULL, 'pending', 2, NULL, NULL, NULL, NULL, 0),
(152, 1, NULL, 'Duarte', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(151, 1, NULL, 'André', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 1),
(150, 1, NULL, 'Pedro Brissos', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(149, 1, NULL, 'Manolo', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 1),
(148, 1, NULL, 'André Sousa', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(147, 1, NULL, 'André Vargas', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 2),
(146, 1, NULL, 'Ângelo', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 2),
(145, 1, NULL, 'Sónia', NULL, NULL, NULL, 'pending', 2, NULL, NULL, NULL, NULL, 0),
(144, 1, NULL, 'Paula', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(143, 1, NULL, 'Daniel', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 1),
(142, 1, NULL, 'Zé Luciano', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(141, 1, NULL, 'Beu', NULL, NULL, NULL, 'pending', 4, NULL, NULL, NULL, NULL, 0),
(140, 1, NULL, 'Luís Palaio', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(139, 1, NULL, 'Serra', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(138, 1, NULL, 'Tomás Pereira', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(137, 1, NULL, 'Marco', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(136, 1, NULL, 'Martim', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(135, 1, NULL, 'Bomboca', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(134, 1, NULL, 'Fernando', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(133, 1, NULL, 'Celso', NULL, NULL, NULL, 'pending', 5, NULL, NULL, NULL, NULL, 0),
(132, 1, NULL, 'Carlos', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(131, 1, NULL, 'Esther', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 5),
(130, 1, NULL, 'Beatriz Martins', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(129, 1, NULL, 'Dina', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(128, 1, NULL, 'Vera', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(127, 1, NULL, 'Ester', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(126, 1, NULL, 'Priscilha', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(125, 1, NULL, 'Moisés Galhardo', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(124, 1, NULL, 'Lucas Galhardo', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(123, 1, NULL, 'Mariana Galhardo', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(122, 1, NULL, 'Zezinha', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(121, 1, NULL, 'Isabel', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(120, 1, NULL, 'Susana Monteiro', NULL, NULL, NULL, 'pending', 2, NULL, NULL, NULL, NULL, 0),
(119, 1, NULL, 'Fernando', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 1),
(118, 1, NULL, 'Carolina Leisico', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(117, 1, NULL, 'Margarida Costa', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 1),
(116, 1, NULL, 'Raquel Costa', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(115, 1, NULL, 'Kiko Sinfronio', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(114, 1, NULL, 'Mariline', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(113, 1, NULL, 'Ana Rita Sousa', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(112, 1, NULL, 'Carolina Romão', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(111, 1, NULL, 'Rita Costa', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(110, 1, NULL, 'Fernando Cipriano', NULL, NULL, NULL, 'pending', 5, NULL, NULL, NULL, NULL, 0),
(109, 1, NULL, 'João André', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 1),
(108, 1, NULL, 'Gabriel', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(107, 1, NULL, 'Critiano', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 2),
(106, 1, NULL, 'Raul', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(105, 1, NULL, 'São', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(104, 1, NULL, 'Laurinda', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(103, 1, NULL, 'Maria', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(102, 1, NULL, 'Silvia', NULL, NULL, NULL, 'pending', 4, NULL, NULL, NULL, NULL, 0),
(101, 1, NULL, 'Luísa', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(100, 1, NULL, 'Grancinda', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(99, 1, NULL, 'Suzana', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(98, 1, NULL, 'Sónia', NULL, NULL, NULL, 'pending', 4, NULL, NULL, NULL, NULL, 1),
(163, 1, NULL, 'Luciana', NULL, NULL, NULL, 'pending', 3, NULL, NULL, NULL, NULL, 0),
(164, 1, NULL, 'Manelinho', NULL, NULL, NULL, 'pending', 3, NULL, NULL, NULL, NULL, 0),
(165, 1, NULL, 'Toi Manel', NULL, NULL, NULL, 'pending', 2, NULL, NULL, NULL, NULL, 0),
(166, 1, NULL, 'Toi Ferrereia', NULL, NULL, NULL, 'pending', 3, NULL, NULL, NULL, NULL, 0),
(167, 1, NULL, 'Ana Maria', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(168, 1, NULL, 'Anais', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 2),
(169, 1, NULL, 'Dora', NULL, NULL, NULL, 'pending', 3, NULL, NULL, NULL, NULL, 0),
(170, 1, NULL, 'Lilia', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 2),
(171, 1, NULL, 'João Palma', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(172, 1, NULL, 'Ricardo', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 1),
(173, 1, NULL, 'Pedro Brissos', NULL, NULL, NULL, 'pending', 2, NULL, NULL, NULL, NULL, 0),
(174, 1, NULL, 'Mónica', NULL, NULL, NULL, 'pending', 2, NULL, NULL, NULL, NULL, 0),
(175, 1, NULL, 'Pinheiro', NULL, NULL, NULL, 'pending', 3, NULL, NULL, NULL, NULL, 0),
(176, 1, NULL, 'Tiago São João', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(177, 1, NULL, 'Bárbara', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(178, 1, NULL, 'Bomboca', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(179, 1, NULL, 'Bruno Cantinho', NULL, NULL, NULL, 'pending', 2, NULL, NULL, NULL, NULL, 1),
(180, 1, NULL, 'Mondinho', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(181, 1, NULL, 'Zé', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(182, 1, NULL, 'Sebastião', NULL, NULL, NULL, 'pending', 1, NULL, NULL, NULL, NULL, 0),
(183, 1, NULL, 'Jaime Palma', NULL, NULL, NULL, 'pending', 2, NULL, NULL, NULL, NULL, 0),
(184, 1, NULL, 'Amorim', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(185, 1, NULL, 'Manuela', NULL, NULL, NULL, 'pending', 2, NULL, NULL, NULL, NULL, 0),
(186, 1, NULL, 'Tinóco', NULL, NULL, NULL, 'pending', 3, NULL, NULL, NULL, NULL, 0),
(187, 1, NULL, 'Paulo', NULL, NULL, NULL, 'pending', 0, NULL, NULL, NULL, NULL, 0),
(188, 1, NULL, 'Domingas', NULL, NULL, NULL, 'pending', 2, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0W69kxN39qc4HTEpxuQAe6JQykEaP1XRjxyPFIw6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJpaUVoTjk5U2hKUVFTMXdBWWVGcUZNeXNMbWJiWXRNNmdXVkw5UkxzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9jb252aWRhZG9zIiwicm91dGUiOiJDb252aWRhZG9zIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1784152363),
('LKVL640poBbDVHrGYYbxVYsk4XLsIGY25AEZFXzz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJxR3JaZThhMHFvdmNxaVVXVXlsWmlxRWppbmZMRVdrZ0dwRWVCYVk1IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9jb252aWRhZG9zIiwicm91dGUiOiJDb252aWRhZG9zIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1785351448),
('hj3ulZIgnaVT14RU89x5PJlgMZRb2ZLWNYmnekL5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJ2TTJsYUlPaUcyR1V5ZWlEVDdJVUh4amk5MGk3bG1XNlBza1V6RUVOIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9jb252aWRhZG9zIiwicm91dGUiOiJDb252aWRhZG9zIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1784741859),
('TVcJZFxWjKUBVTAO13noNu4NaQo6xvIgZCUPD3rC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJZWGVhUmx2YzkxNmhja2tMYW5sV1dhdWlHazVPdzJpVnJFcDNHZXFjIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9jb252aWRhZG9zIiwicm91dGUiOiJDb252aWRhZG9zIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1784227484),
('y3DCm3ZL3D2LnXqslweGEbfLC4LZtT5hZwNYoJ2n', NULL, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 26_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.6 Mobile/15E148 Safari/604.1', 'eyJfdG9rZW4iOiJxM1lRcG9yajBIWGg1dXFueEVPTnpkMWtTbXdMcEU5czlBRlJBUFdYIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9jb252aWRhZG9zIiwicm91dGUiOiJDb252aWRhZG9zIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1785592040);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tables`
--

DROP TABLE IF EXISTS `tables`;
CREATE TABLE IF NOT EXISTS `tables` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `wedding_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int UNSIGNED NOT NULL DEFAULT '8',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wedding_id` (`wedding_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mateus Admin', 'admin@weddingplanning.test', '2026-07-05 21:41:03', '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2026-07-05 21:41:03', '2026-07-05 21:41:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `weddings`
--

DROP TABLE IF EXISTS `weddings`;
CREATE TABLE IF NOT EXISTS `weddings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `couple_name_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_name_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wedding_date` date DEFAULT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_budget` decimal(10,2) DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `weddings`
--

INSERT INTO `weddings` (`id`, `user_id`, `couple_name_1`, `couple_name_2`, `wedding_date`, `venue`, `total_budget`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sofia', 'Miguel', '2027-06-12', 'Quinta da Bela Vista', 15000.00, '2026-07-05 20:09:51', '2026-07-05 20:09:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
