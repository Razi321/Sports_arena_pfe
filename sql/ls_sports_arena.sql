-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 06 juin 2020 à 03:18
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ls_sports_arena`
--

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id_course` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'noimage.jpg',
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outfit` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_month` double DEFAULT NULL,
  `price_session` double DEFAULT NULL,
  `id_gym` int(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id_course`, `name`, `image`, `description`, `duration`, `frequency`, `target`, `outfit`, `price_month`, `price_session`, `id_gym`, `created_at`, `updated_at`) VALUES
(3, 'test', 'noimage.jpg', 'haja chbeha', '3heure', 'a fois par our', 'tout', 'ay haja', 50, 6, 9, '2020-05-11 02:14:07', '2020-05-11 02:14:07'),
(4, 'zumba', 'Zumba_1591279055.jpg', 'chti7  fazet', '3h', '5 fois par semaine', 'femme', 'survetement', 50, 30, 13, '2020-06-04 12:57:35', '2020-06-04 14:25:46'),
(6, 'karaté', 's-combat-karate_1591369868.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim', '2h', '5 fois par semaine', 'tout', 'survetement', 50, 2, 13, '2020-06-05 14:11:08', '2020-06-05 14:12:22');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(20) UNSIGNED NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `belongs_to` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `body`, `user_id`, `created_at`, `updated_at`, `belongs_to`) VALUES
(26, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 1, '2020-06-05 13:37:26', '2020-06-05 13:37:26', 13);

-- --------------------------------------------------------

--
-- Structure de la table `gyms`
--

CREATE TABLE `gyms` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_month` double(8,2) DEFAULT NULL,
  `price_session` double(8,2) DEFAULT NULL,
  `owner` int(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `gyms`
--

INSERT INTO `gyms` (`id`, `name`, `adress`, `price_month`, `price_session`, `owner`, `created_at`, `updated_at`, `cover_image`, `phone_number`, `insta`, `fb`, `description`) VALUES
(9, 'sports hub', 'ezzahra', 60.00, NULL, 1, '2020-04-25 14:03:19', '2020-04-25 14:03:19', 'noimage.jpg', '12345678', '', '', ''),
(11, 'california gym', 'rades', 70.00, NULL, 1, '2020-04-25 14:25:21', '2020-04-25 14:25:21', 'noimage.jpg', '12345678', '', '', ''),
(12, 'cercena gym', 'borj cedria', 12.00, NULL, 1, '2020-05-09 03:25:47', '2020-05-09 03:25:47', 'noimage.jpg', '12345678', '', '', ''),
(13, 'sport arena', 'tunis', NULL, NULL, 1, '2020-05-22 23:54:15', '2020-06-04 08:55:18', 'photo-1480264104733-84fb0b925be3_1590195254.jfif', '53875235', NULL, NULL, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(16, 'salle test', 'tunis', NULL, NULL, 1, '2020-06-05 10:19:04', '2020-06-05 10:19:04', 'gym_1591355944.gif', '12345678', NULL, NULL, 'capture pfe');

-- --------------------------------------------------------

--
-- Structure de la table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(20) UNSIGNED NOT NULL,
  `gym_id` int(20) UNSIGNED NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL,
  `course_id` int(20) UNSIGNED NOT NULL,
  `end_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `memberships`
--

INSERT INTO `memberships` (`id`, `gym_id`, `user_id`, `course_id`, `end_at`, `created_at`, `updated_at`) VALUES
(5, 9, 43, 4, '2020-06-11', '2020-05-14 20:17:08', '2020-05-14 20:17:08'),
(6, 13, 1, 3, '2020-07-04', '2020-06-04 14:47:01', '2020-06-05 22:58:28');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2020_03_31_221133_create_gyms_table', 1),
(13, '2020_04_25_141949_add_cover_image_to_gyms', 2),
(14, '2020_04_28_174410_add_profile_img_to_user', 3),
(15, '2020_04_29_212927_add_cover_image_to_users', 4),
(16, '2020_04_30_173527_add_data_to_users', 5),
(17, '2020_05_03_010845_add_feedbacks_table', 6),
(18, '2020_05_04_021238_add_gym_to_feedbacks', 7),
(19, '2020_05_06_175242_create_courses_table', 8),
(20, '2020_05_10_220339_create_memberships_table', 9),
(21, '2020_05_16_230909_create_table_posts', 10),
(22, '2016_06_01_000001_create_oauth_auth_codes_table', 11),
(23, '2016_06_01_000002_create_oauth_access_tokens_table', 11),
(24, '2016_06_01_000003_create_oauth_refresh_tokens_table', 11),
(25, '2016_06_01_000004_create_oauth_clients_table', 11),
(26, '2016_06_01_000005_create_oauth_personal_access_clients_table', 11),
(27, '2020_05_20_103843_add_phone_to_users', 12),
(28, '2020_05_23_010511_add_columns_to_gyms', 13);

-- --------------------------------------------------------

--
-- Structure de la table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Sports_arena Personal Access Client', 'M2F4M6ZGFKBUQxGpUrqQkAs4Be22vdBKk2F1bbRv', NULL, 'http://localhost', 1, 0, 0, '2020-05-17 08:31:13', '2020-05-17 08:31:13'),
(2, NULL, 'Sports_arena Password Grant Client', 'AmogZlbIkGDBsrBLc1Jo3rBmX7mSNBUUdw23VQet', 'users', 'http://localhost', 0, 1, 0, '2020-05-17 08:31:13', '2020-05-17 08:31:13');

-- --------------------------------------------------------

--
-- Structure de la table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-05-17 08:31:13', '2020-05-17 08:31:13');

-- --------------------------------------------------------

--
-- Structure de la table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mellitir11@gmail.com', '$2y$10$ztPbaaKHDz7Uv8yXurJrOefcLXbWk1tZMT8u808Qag.w1fN.yH2xu', '2020-05-16 17:26:21');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gym_id` int(20) UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noivideo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `gym_id`, `body`, `title`, `created_at`, `updated_at`, `video`) VALUES
(2, 9, 'aaaaaaaaaaaaaa', 'aaaaaaa', '2020-05-16 23:30:52', '2020-05-16 23:30:52', 'Get Abs in 2 WEEKS - Abs Workout Challenge_1589675452.mp4'),
(3, 13, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'exercice biceps', '2020-06-05 23:58:50', '2020-06-05 23:58:50', 'novideo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noimage.jpg',
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'donnée non disponible ',
  `date_of_birth` date DEFAULT NULL,
  `sexe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'donnée non disponible ',
  `member_in` int(11) DEFAULT 0,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'donnée non disponible '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `cover_image`, `adresse`, `date_of_birth`, `sexe`, `member_in`, `phone`) VALUES
(1, 'admin razi', 'admin@gmail.com', NULL, '$2y$10$sKSHw9LjdpSmzQDIbbE1zeWAlLuo7QRtl96BmaZ7eSi/90AGBSi32', NULL, '2020-03-31 23:28:50', '2020-05-22 20:50:16', 'Admin', '86807009_2748289518603280_7299940215458627584_o_1590184216.jpg', 'tunis', NULL, NULL, 13, NULL),
(18, 'owner', 'owner@gmail.com', NULL, '$2y$10$qDMkUYE2Zctr9kCU/PBibeVqq8kMy6P3VBDZlmkjq2isrXzaXQdIe', NULL, '2020-04-29 20:35:08', '2020-05-20 11:25:37', 'Manager', 'noimage.jpg', NULL, '1998-05-15', 'hommeaa', NULL, NULL),
(19, 'manager', 'manager@gmail.com', NULL, '$2y$10$jO9bYLpLsWAyNB.nhrSzcev6XhnYQnyFqTJIBqrfktQku47z0Usuu', NULL, '2020-04-29 20:40:23', '2020-04-29 21:40:45', 'Manager', 'https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60\r\n', NULL, NULL, NULL, 9, NULL),
(39, 'aaa', 'razi.melliti@esen.tn', NULL, '$2y$10$W5j7ReijEDsBNN5GUrltwONo.AYomEqN7JXcOPsw/ywvHhPGBfEHO', NULL, '2020-05-06 03:30:49', '2020-05-12 01:19:03', 'Manager', 'noimage.jpg', NULL, NULL, NULL, NULL, NULL),
(41, 'aza', 'aza@gmail.com', NULL, '$2y$10$l3Sx71ToVH0D1k8rqHesCegcH//wbXXEAqyYGfNNlQz.D4EEvNGBa', NULL, '2020-05-09 01:18:47', '2020-05-09 01:18:47', 'User', 'noimage.jpg', NULL, NULL, NULL, 13, NULL),
(43, 'test user', 'managerrazi@gmail.com', NULL, '$2y$10$YGJX8L7nNs2iDz6I/7QWmOq4Xfn6cqKz27dgZtQlzHcuEgC8d2ilm', NULL, '2020-05-12 00:42:06', '2020-05-23 02:36:32', 'User', 'me_1590204992.jpg', 'tunis', '1999-06-24', 'homme', 13, '52538752');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_course`),
  ADD KEY `id_gym` (`id_gym`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`belongs_to`),
  ADD KEY `gyms_FK_feedbacks` (`belongs_to`);

--
-- Index pour la table `gyms`
--
ALTER TABLE `gyms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner` (`owner`);

--
-- Index pour la table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `gym_id` (`gym_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Index pour la table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Index pour la table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Index pour la table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gym_id` (`gym_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `id_course` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `gyms`
--
ALTER TABLE `gyms`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `gyms_Fk_id_cours` FOREIGN KEY (`id_gym`) REFERENCES `gyms` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `gyms_FK_feedbacks` FOREIGN KEY (`belongs_to`) REFERENCES `gyms` (`id`),
  ADD CONSTRAINT `users_Fk_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `gyms`
--
ALTER TABLE `gyms`
  ADD CONSTRAINT `gyms_Fk_id` FOREIGN KEY (`owner`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `memberships`
--
ALTER TABLE `memberships`
  ADD CONSTRAINT `memberships_ibfk_1` FOREIGN KEY (`gym_id`) REFERENCES `gyms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `memberships_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id_course`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_Fk_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`gym_id`) REFERENCES `gyms` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
