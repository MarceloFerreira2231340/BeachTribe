-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2024 at 10:07 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beachtribe`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Marcelo', 'marcelo.png', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(2, 'João', 'joao.png', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(3, 'Carolina', 'carolina.png', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(4, 'Dinis', 'dinis.png', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(5, 'Samuel', 'samuel.png', '2024-12-17 22:06:54', '2024-12-17 22:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint UNSIGNED NOT NULL,
  `type` enum('A','M','B') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'M',
  `title` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('A','H') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'H',
  `location` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `bgtime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endtime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `duration` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `type`, `title`, `state`, `location`, `date`, `bgtime`, `endtime`, `price`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'A', 'Aula de Surf - Iniciação', 'A', 'Praia S. Pedro de Moel', '2024-06-15', '08:00', '10:00', '30.00', 2, '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(2, 'M', 'Aula de Surf - Intermediário', 'A', 'Praia de Carcavelos', '2024-06-20', '10:00', '13:00', '45.50', 3, '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(3, 'B', 'Aula de Surf - Avançado', 'A', 'Praia do Guincho', '2024-06-25', '09:30', '11:30', '50.00', 2, '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(4, 'A', 'Aula de Surf - Iniciação', 'H', 'Praia de Santa Cruz', '2024-06-10', '07:00', '09:00', '25.00', 2, '2024-12-12 22:06:54', '2024-12-12 22:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `class_subscriptions`
--

CREATE TABLE `class_subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `classes_id` bigint UNSIGNED NOT NULL,
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(360) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Formações','Festivais') COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('ativado','desativado') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'desativado',
  `local` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `description`, `type`, `state`, `local`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Quim Barreiros', 'quimbarreiros.png', 'Veja o espetáculo da estrela nacional Quim Barreiros', 'Festivais', 'ativado', 'Praia da Rocha', '2024-06-28 18:00:00', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(2, 'Surf', 'aulassurf.png', 'Aprenda a surfar com os melhores instrutores das nossas praias.', 'Formações', 'ativado', 'Praia de Carcavelos', '2024-07-10 09:00:00', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(3, 'Festival do Cinema', 'festival_cinema.jpg', 'Exibição de filmes ao ar livre, aberto ao público.', 'Festivais', 'ativado', 'Praia de São Rafael', '2024-08-20 21:00:00', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(4, 'Formação de Yoga', 'formacao_yoga.jpg', 'Sessões de yoga ao amanhecer, aprender a esticar-se e a relaxar.', 'Formações', 'ativado', 'Praia da Marinha', '2024-09-05 08:00:00', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(5, 'Festival de Gastronomia', 'festival_gastronomia.jpg', 'Degustação de pratos típicos portugueses.', 'Festivais', 'ativado', 'Praia do Guincho', '2024-10-12 12:00:00', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(6, 'Construções de areia', 'construcao_areia.jpg', 'Vem competir no concurso de construções de areia, qualquer um pode divertir-se!', 'Festivais', 'ativado', 'Praia da Vieira', '2024-11-18 15:00:00', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(7, 'Festival de Dança', 'festival_danca.jpg', 'Apresentações de dança, e animação ao publico.', 'Festivais', 'ativado', 'Praia de Odeceixe', '2024-12-25 17:00:00', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(8, 'Formação de Mergulho', 'formacao_mergulho.jpg', 'Curso de mergulho para iniciantes.', 'Formações', 'ativado', 'Praia do Amado', '2025-01-15 10:00:00', '2024-12-17 22:06:54', '2024-12-17 22:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_11_27_122314_create_events_table', 1),
(7, '2024_11_28_142912_create_sports_table', 1),
(8, '2024_11_28_143243_create_classes_table', 1),
(9, '2024_12_02_133513_create_class_subscriptions_table', 1),
(10, '2024_12_02_141345_create_aboutus', 1),
(11, '2024_12_02_151830_create_contacts', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `difficulty` enum('Easy','Medium','Hard') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Medium',
  `description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `image`, `title`, `difficulty`, `description`, `created_at`, `updated_at`) VALUES
(1, 'surf.jpg', 'Surf', 'Medium', 'Deslize pelas ondas e sinta a adrenalina de surfar.', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(2, 'yoga.jpg', 'Yoga', 'Easy', 'Relaxe e estique-se com as nossas aulas de yoga.', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(3, 'futebol.jpg', 'Futebol', 'Hard', 'Jogue futebol com os seus amigos e sinta a competição.', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(4, 'voleibol.jpg', 'Voleibol', 'Medium', 'Salte e ataque a bola com os seus amigos.', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(5, 'natacao.jpg', 'Natação', 'Easy', 'Nade e sinta a frescura da água.', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(6, 'caminhada.jpg', 'Caminhada', 'Easy', 'Caminhe e descubra novos locais.', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(7, 'ciclismo.jpg', 'Ciclismo', 'Medium', 'Pedale e sinta a brisa do vento.', '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(8, 'corrida.jpg', 'Corrida', 'Hard', 'Corra e sinta a adrenalina da competição.', '2024-12-17 22:06:54', '2024-12-17 22:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` enum('A','C') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'C',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `tipo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Carolina', '2231378@my.ipleiria.pt', NULL, '$2y$12$H721hzcP85rWpz.s9xbpN.JSxSdx0p8RrlNkt3DytlzKZkDEwbc5u', NULL, NULL, 'A', NULL, '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(2, 'Dinis', '2231338@my.ipleiria.pt', NULL, '$2y$12$arl0YeMW2WchZFNLaaquGeb2icaN5BfWOfCso7KheWRrHDk/xm1hK', NULL, NULL, 'A', NULL, '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(3, 'João', '2223235@my.ipleiria.pt', NULL, '$2y$12$C16TSDbq8BUDBS3EzgK92Ojer/dSfqSv35d8D3n0F9vqTsrBsCpw6', NULL, NULL, 'A', NULL, '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(4, 'Marcelo', '2231340@my.ipleiria.pt', NULL, '$2y$12$gYjfiz1yPg8mpinr9IVMtuz/XFpp4OrrtcLSloO2SQZvD88r4BfVS', NULL, NULL, 'A', NULL, '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(5, 'Samuel', '2220841@my.ipleiria.pt', NULL, '$2y$12$jZFDcpBjmcgUW6zG.KvozOjCjcxWrNz3.Tcw2jfpymhyS1UeMwEbO', NULL, NULL, 'A', NULL, '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(6, 'Felipe Pino', 'felipe.pino@gmail.com', NULL, '', 923547681, '2001-650, Rua do Pino, Guimarães', 'C', NULL, '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(7, 'Gustavo Lima', 'gustavo.lima@gmail.com', NULL, '$2y$12$jZFDcpBjmcgUW6zG.KvozOjCjcxWrNz3.Tcw2jfpymhyS1UeMwEbO', 912345678, '1001-123, Rua da Favela, Minas Gerais', 'C', NULL, '2024-12-17 22:06:54', '2024-12-17 22:06:54'),
(8, 'João Parente', '2231371@my.ipleiria.pt', NULL, '$2y$12$jZFDcpBjmcgUW6zG.KvozOjCjcxWrNz3.Tcw2jfpymhyS1UeMwEbO', 912775739, '175 Av. Gen. Humberto Delgado', 'C', NULL, '2024-12-17 22:06:54', '2024-12-17 22:06:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_subscriptions`
--
ALTER TABLE `class_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_subscriptions_classes_id_foreign` (`classes_id`),
  ADD KEY `class_subscriptions_users_id_foreign` (`users_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_subscriptions`
--
ALTER TABLE `class_subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_subscriptions`
--
ALTER TABLE `class_subscriptions`
  ADD CONSTRAINT `class_subscriptions_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_subscriptions_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
