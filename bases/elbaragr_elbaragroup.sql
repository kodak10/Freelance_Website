-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 23 jan. 2024 à 12:44
-- Version du serveur : 10.5.23-MariaDB-cll-lve
-- Version de PHP : 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `elbaragr_elbaragroup`
--

-- --------------------------------------------------------

--
-- Structure de la table `category_faqs`
--

CREATE TABLE `category_faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category_forums`
--

CREATE TABLE `category_forums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category_news`
--

CREATE TABLE `category_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'logo.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `name`, `prenoms`, `telephone`, `date_naissance`, `photo`, `created_at`, `updated_at`) VALUES
(48, 353, 'Kouassi', 'Atchin Parfait Aymard', '0103810998', NULL, '353_20240122_160206.jpg', '2024-01-22 16:00:11', '2024-01-22 16:02:06');

-- --------------------------------------------------------

--
-- Structure de la table `demande_services`
--

CREATE TABLE `demande_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `entreprise_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `delais_execution` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_services`
--

INSERT INTO `demande_services` (`id`, `client_id`, `entreprise_id`, `service_id`, `description`, `delais_execution`, `document`, `created_at`, `updated_at`) VALUES
(28, 48, 100, 28, 'Je vous contacte pour un service juridique', '9', NULL, '2024-01-22 16:10:20', '2024-01-22 16:10:20'),
(29, 48, 100, 1, 'Texte de la description', '1', NULL, '2024-01-22 16:12:46', '2024-01-22 16:12:46');

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icones` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`id`, `libelle`, `created_at`, `updated_at`, `icones`) VALUES
(1, 'EMPLOI / CONCOURS', '2023-08-25 07:44:31', NULL, 'fa-solid fa-briefcase'),
(2, 'ELEVAGE', '2023-08-25 07:44:38', NULL, 'fa-solid fa-cow'),
(3, 'ENVIRONNEMENT / AGRICULTURE', '2023-08-25 07:44:46', NULL, 'fa-solid fa-seedling'),
(4, 'VOYAGE ET DÉCOUVERTE', '2023-08-25 07:44:52', NULL, 'fa-solid fa-plane'),
(5, 'ASSISTANCES FINANCES, JURIDIQUES', '2023-08-25 07:44:59', NULL, 'fa-solid fa-gavel'),
(6, 'FORMATION PRO ET DIPLOMATIQUE', '2023-08-25 07:45:05', NULL, 'fa-solid fa-graduation-cap'),
(7, 'BÂTIMENT ET TRAVAUX PUBLICS', '2023-08-25 07:45:11', NULL, 'fa-solid fa-helmet-safety'),
(8, 'AUTO / MOTO', '2023-08-25 07:45:16', NULL, 'fa-solid fa-car'),
(9, 'TECHNOLOGIE / ENERGIE', '2023-08-25 07:45:22', NULL, 'fa-solid fa-microchip'),
(10, 'PRODUCTION / BOULANGERIE', '2023-08-25 07:45:27', NULL, 'fa-solid fa-bread-slice'),
(11, 'Administrative', '2023-08-25 07:47:30', NULL, 'fa-solid fa-file'),
(12, 'Bourse Trading', '2023-08-25 07:47:34', NULL, 'fa-solid fa-arrow-trend-up'),
(13, 'Cryptomonnaie', '2023-08-25 07:47:38', NULL, ''),
(14, 'Métier du Secteur Informel', '2023-08-25 07:47:43', NULL, 'fa-solid fa-person'),
(15, 'Politique / Diplomatique', '2023-08-25 07:47:49', NULL, 'fa-solid fa-rss');

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type_entreprise` varchar(255) NOT NULL,
  `num_inscription` varchar(255) DEFAULT NULL,
  `approve` varchar(255) DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `regime` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT 'logo.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `couverture` varchar(255) DEFAULT 'couverture.jpg',
  `site_web` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id`, `user_id`, `type_entreprise`, `num_inscription`, `approve`, `name`, `nationalite`, `telephone`, `email`, `regime`, `localisation`, `photo`, `created_at`, `updated_at`, `couverture`, `site_web`, `facebook`, `about`) VALUES
(30, 283, 'Multinationale', '66703', '1', 'Schiller-Wintheiser', 'ar_YE', '+1-959-382-3635', 'kariane.bradtke@example.com', '7f050a4b-af0f-336e-94d4-eba322f75821', '84576 Maci Mountain Suite 839\nHauckmouth, MN 78215-9719', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.macejkovic.com/', NULL, NULL),
(31, 284, 'Multinationale', '475550', '1', 'Emard-Metz', 'ja_JP', '1-564-947-2211', 'olittle@example.org', '9b0a2c00-783d-3bcd-a69a-256b74e5ee4b', '721 Legros Mountains\nAdamshaven, MT 92792', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://schaefer.com/eos-dolores-non-ut-animi-sit-totam', NULL, NULL),
(32, 285, 'Multinationale', '987924', '1', 'Cronin-Renner', 'zh_HK', '1-804-640-3999', 'jharris@example.org', '41a5c6b0-d714-3b0a-b73a-ac2db1dc5943', '82681 Jocelyn Street Suite 570\nSouth Alveramouth, AL 88903-0115', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://www.morar.net/quo-unde-provident-tempora-exercitationem-eos-perferendis', NULL, NULL),
(33, 286, 'Nationale', '592848', '1', 'Swaniawski, White and Treutel', 'bn_BD', '+1-240-430-6425', 'swilderman@example.com', '7133e0eb-84f3-37e9-8d03-b13e78779dbe', '36543 Sierra Wells\nBoscoland, DE 59897-9099', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.johns.com/', NULL, NULL),
(34, 287, 'Multinationale', '167296', '1', 'Bednar, Wuckert and Miller', 'sa_IN', '(607) 287-8931', 'wquigley@example.net', '9bbf3688-dd94-349a-8ebc-7c06d8f925cc', '506 Jakubowski Plaza\nPagacville, DE 16576-3948', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://miller.com/', NULL, NULL),
(35, 288, 'Multinationale', '985414', '1', 'Price-Rice', 'da_DK', '(931) 790-8880', 'lonie.bergnaum@example.org', '4fd59116-f923-31b0-a600-0278b35618b6', '2396 Flatley Courts\nWyattborough, AL 60745-4406', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.williamson.com/odio-numquam-voluptas-itaque-qui.html', NULL, NULL),
(36, 289, 'Multinationale', '510192', '1', 'Morar, Kub and Shields', 'es_CL', '(860) 878-1318', 'maribel13@example.net', '1edce062-1892-3b74-881b-cab8949537af', '658 Fay Ports Suite 081\nNorth Tomasshire, RI 73906', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://www.anderson.biz/vel-nulla-sunt-exercitationem-excepturi-odio-adipisci-animi', NULL, NULL),
(37, 290, 'Multinationale', '327424', '1', 'Gislason, Boehm and Corwin', 'xh_ZA', '+1-478-884-9029', 'shanelle.little@example.net', '30d41637-b471-36ad-863e-23e0d096afb7', '2882 Botsford Shore\nTamiaton, CT 03191-8635', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://abshire.com/cum-cupiditate-magnam-iste-dicta-officiis.html', NULL, NULL),
(38, 291, 'Multinationale', '290812', '1', 'Jast LLC', 'ar_SY', '(224) 785-6377', 'otha.west@example.net', '1cc7f78f-fc56-3b27-baa3-480a5ea73488', '20401 Boyer Alley\nNormaside, SC 72755-2754', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://mueller.com/', NULL, NULL),
(39, 292, 'Nationale', '24667', '1', 'Gusikowski and Sons', 'fa_IR', '1-615-650-6284', 'isidro.dibbert@example.org', 'a396e6ed-839e-306e-bd80-ba84e4f4e1d7', '77351 Bergstrom Fields\nShadview, TN 60357-2083', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://franecki.org/blanditiis-id-architecto-laboriosam-beatae-dolores-fuga-omnis-iure', NULL, NULL),
(40, 293, 'Nationale', '720225', '1', 'Grant, Bailey and Berge', 'gv_GB', '386.846.8991', 'ethel30@example.com', '75cb4691-5252-3ac0-8f6a-e1f3e33bd864', '53693 Schneider Ville Suite 638\nRobertschester, ME 31904-8094', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.kub.com/omnis-consequatur-dolorem-veniam-animi-eum-suscipit', NULL, NULL),
(41, 294, 'Nationale', '958118', '1', 'Kozey Group', 'to_TO', '234-756-3305', 'otha94@example.net', 'e14bed21-7971-362d-9dc2-a9a6ce162d2e', '8835 Eliezer Center Suite 532\nEast Rachael, OH 07041-6891', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://howe.com/maiores-vel-cumque-tenetur-aut', NULL, NULL),
(42, 295, 'Multinationale', '147924', '1', 'Labadie, Leuschke and Prohaska', 'nl_BE', '+1.573.975.7186', 'valentin11@example.org', '437ce168-6f2a-38be-952f-6afe52a6785c', '8138 Kub Flat\nPort Imeldaport, MO 17569', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://quigley.com/eos-eos-ullam-ad-amet.html', NULL, NULL),
(43, 296, 'Multinationale', '684347', '1', 'Fahey-Koelpin', 'ar_DZ', '+1.210.576.3059', 'mjacobson@example.com', 'fa3d4c39-c8be-34da-b454-c1fcc6ab24da', '522 Cruz Place Suite 585\nSiennashire, LA 44094', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://will.com/quos-ipsam-autem-quia-fugiat-occaecati-corporis', NULL, NULL),
(44, 297, 'Multinationale', '653911', '1', 'Schiller, Wolf and Beier', 'as_IN', '+14108086558', 'simonis.melvin@example.org', 'fda8b2bf-430e-32fb-811b-ce0e8a0d1847', '3206 Tillman Manor Apt. 165\nNew Britney, NC 08731-4954', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://leuschke.com/maiores-voluptate-est-repudiandae-aut-consectetur-atque-perferendis.html', NULL, NULL),
(45, 298, 'Multinationale', '111693', '1', 'Wolf-Bogan', 'en_BZ', '+1-951-623-1249', 'carey.pfeffer@example.org', '2d61cb12-3858-38b7-bc0b-3621356f9f85', '7414 Mante Estates\nLake Idellamouth, MN 36110', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://cronin.com/quis-ipsam-velit-impedit.html', NULL, NULL),
(46, 299, 'Nationale', '15973', '1', 'Robel PLC', 'st_ZA', '(719) 489-7216', 'conner40@example.com', 'd79462d1-e52a-34a7-aceb-65b14a30448f', '84205 General Lock\nMaddisonport, KS 99547-7768', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.jones.com/provident-et-sit-perferendis.html', NULL, NULL),
(47, 300, 'Multinationale', '933880', '1', 'Kuhlman, Block and Mayer', 'bo_IN', '862-827-3706', 'stroman.annabel@example.net', '111988c9-6147-320b-a46c-7ab50ce9130e', '598 Reta Islands Suite 667\nEast Taurean, OK 17613', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://waters.com/et-velit-et-tempore-unde', NULL, NULL),
(48, 301, 'Multinationale', '953251', '1', 'Beer Ltd', 'ar_TN', '+1 (667) 765-4106', 'kari.brekke@example.org', '381f8e60-7fa5-34fc-8c05-d8c5f1a4829a', '570 Sanford Way Apt. 240\nBudstad, MO 65465-2203', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://kuhn.biz/ratione-voluptatem-id-ut-porro.html', NULL, NULL),
(49, 302, 'Multinationale', '358936', '1', 'DuBuque and Sons', 'ss_ZA', '715-727-3653', 'zgerlach@example.com', 'd547f856-96c3-3ffe-9dff-a2132982724d', '1864 Rodrigo Crossing Apt. 364\nWest Irma, WI 79796-8838', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.rice.org/rerum-dolor-iure-ducimus-aut-molestiae-quis.html', NULL, NULL),
(50, 303, 'Nationale', '40262', '1', 'Jaskolski, Wilkinson and Grady', 'ny_MW', '424.892.0395', 'will.carissa@example.org', '05646998-9e73-3163-9685-43722b7763a2', '589 Finn Flat\nJohanport, MO 58831-5616', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://www.bernhard.org/sapiente-sit-exercitationem-aut-odio', NULL, NULL),
(51, 304, 'Multinationale', '74425', '1', 'Torphy-Swaniawski', 'en_MP', '+1-618-220-7927', 'parker98@example.org', '440a58c1-466b-374f-87f5-5caf6ab08ef8', '6782 Hailee Shoal\nBrekkeberg, OH 15241-6790', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://kuhn.com/beatae-dolore-aut-alias-saepe', NULL, NULL),
(52, 305, 'Multinationale', '85824', '1', 'Bechtelar PLC', 'ur_IN', '470-281-8043', 'ned.paucek@example.org', '8622335c-4636-36a0-9b8b-1de5385dd7e4', '6749 Gleason Plaza\nSatterfieldhaven, MI 44921-4713', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://hills.com/voluptas-et-ut-provident-delectus-et-quibusdam', NULL, NULL),
(53, 306, 'Nationale', '970323', '1', 'Stroman-Adams', 'ln_CG', '+1-651-655-6248', 'kautzer.trace@example.net', '24e0f1d4-decc-3e46-94aa-ce26261c46de', '992 Sophie Roads Suite 418\nNiachester, MI 98145-2076', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://www.christiansen.com/sit-deserunt-quia-eius-doloremque', NULL, NULL),
(54, 307, 'Nationale', '58104', '1', 'Lueilwitz Inc', 'om_ET', '724-986-3412', 'elroy.altenwerth@example.net', '726804a0-ec38-373e-8872-7f58a01ca8b3', '43579 Lucio Mission\nLake Genovevashire, WI 95696', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://mueller.net/hic-eum-modi-amet-quos-qui-ad.html', NULL, NULL),
(55, 308, 'Multinationale', '213694', '1', 'Harvey, Dooley and Huels', 'es_DO', '1-517-263-8955', 'lakin.josh@example.com', '7ad86328-b2d6-3a3d-bffc-886855591dcf', '16532 Aufderhar Vista\nMcDermottstad, MI 37910', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://douglas.com/vitae-dolores-est-dolorem-consequatur', NULL, NULL),
(56, 309, 'Nationale', '865527', '1', 'Stamm, Wuckert and Parisian', 'en_MT', '+1-540-358-7733', 'cortez89@example.org', '4804ec3c-ec96-3ee4-ad18-f88a69c5fa52', '379 Jerel Trafficway\nWest Rickie, OR 21435', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://www.kuhn.org/debitis-facere-non-in-quia-nihil', NULL, NULL),
(57, 310, 'Multinationale', '694446', '1', 'Berge LLC', 'trv_TW', '+1-860-314-9192', 'ifeest@example.net', '96595fa3-cc46-34ce-b279-a91c50fa3701', '44387 Heathcote Fields Suite 717\nBernitastad, RI 24769-7413', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://swaniawski.com/pariatur-occaecati-nam-et-nobis-fuga', NULL, NULL),
(58, 311, 'Nationale', '373016', '1', 'Klein, Konopelski and Dare', 'nl_NL', '1-657-759-2315', 'lind.emanuel@example.org', '7b068028-dc40-31bd-835a-7baf1fb24759', '671 Kian Track Suite 501\nGreenholtburgh, MS 66161-7954', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://www.jaskolski.com/minus-laborum-necessitatibus-exercitationem-distinctio-harum', NULL, NULL),
(59, 312, 'Nationale', '987732', '1', 'Spencer Inc', 'ar_YE', '520-202-1355', 'cthiel@example.org', 'bdd25118-8ec8-35ae-ba54-de5738983f94', '49322 Kuvalis Squares\nLake Emilianofurt, IL 27836', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://ondricka.com/et-quia-ipsum-velit-officiis-non-facere.html', NULL, NULL),
(60, 313, 'Nationale', '94662', '1', 'Franecki-McCullough', 'ro_RO', '915-672-3113', 'melany91@example.org', '1355bb37-8b75-36d7-ba50-aeffd01683b0', '18213 Jarret Isle Suite 882\nNorth Doylehaven, IL 28096-6203', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.ruecker.com/dolorum-doloremque-officia-eaque-laudantium-vero-iste.html', NULL, NULL),
(61, 314, 'Multinationale', '309249', '1', 'O\'Hara-Ferry', 'ur_IN', '+1-510-981-4570', 'kreiger.manuela@example.net', 'b9f63b5d-55a5-330f-9536-25a4af0b53be', '39024 Josianne Parkways Suite 384\nSouth Eryn, PA 32830-2858', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.halvorson.com/', NULL, NULL),
(62, 315, 'Nationale', '11847', '1', 'Murazik, Feeney and Weber', 'mn_MN', '(972) 518-4027', 'quigley.kelvin@example.net', '14fc054f-3d42-31d4-802c-7aa09660e9dc', '87712 Rodriguez Well\nSchuppeville, PA 66779', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.gibson.com/harum-asperiores-voluptatem-nihil-et-ducimus-aliquam-nam-vero', NULL, NULL),
(63, 316, 'Multinationale', '360729', '1', 'Cremin-Abbott', 'he_IL', '+1-272-982-4744', 'osimonis@example.net', '0f4e40ad-d99a-39bc-a807-2ed85d24744d', '807 Donnelly Courts Suite 252\nKennithmouth, FL 36970-2068', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://purdy.info/nam-laudantium-quaerat-quod-fugiat-mollitia-neque.html', NULL, NULL),
(64, 317, 'Nationale', '342209', '1', 'Abernathy, Hirthe and Sipes', 'ku_IQ', '+1-843-369-2418', 'doug.rogahn@example.com', 'acce666d-f2cf-37c5-8975-35fa3c321824', '5440 Dulce Key\nSouth Lessie, PA 22048', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.emard.com/necessitatibus-animi-atque-dicta-reprehenderit', NULL, NULL),
(65, 318, 'Nationale', '722044', '1', 'Simonis-McKenzie', 'xh_ZA', '+18488322345', 'emilio.franecki@example.net', '981a0ddd-389c-3ef2-a363-e36b11ec2a7a', '165 Greenholt Estates Suite 649\nNolanberg, ME 12817', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://schmitt.net/nihil-perspiciatis-sit-occaecati-facilis-sed', NULL, NULL),
(66, 319, 'Multinationale', '258493', '1', 'Lebsack Group', 'en_IE', '1-513-659-8293', 'bsipes@example.net', 'a9f2f021-c13c-3744-871e-32981a238077', '666 Schultz Knolls\nNorth Adell, NM 42043-0988', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://kautzer.org/dolore-distinctio-et-dolorem-dolorum', NULL, NULL),
(67, 320, 'Multinationale', '513703', '1', 'Wolf, Cassin and Goldner', 'ts_ZA', '+1-240-946-9369', 'ratke.lexus@example.net', '24c97516-fcc4-3d16-95f7-926e89773b5c', '137 Hermiston Pass Suite 289\nKeshaunland, DE 59413', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://www.lynch.org/est-quam-error-aperiam-totam', NULL, NULL),
(68, 321, 'Nationale', '687038', '1', 'Rowe Ltd', 'ii_CN', '+1.901.225.8090', 'hoeger.frankie@example.org', 'f0a2e98f-b581-33aa-93d1-fc92af0feabd', '811 Isaac Square Suite 711\nJeraldhaven, WI 96673', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.pouros.com/', NULL, NULL),
(69, 322, 'Multinationale', '108738', '1', 'Beahan Ltd', 'nn_NO', '+12629476550', 'mcorwin@example.com', '016f4eed-76c0-3710-9ccb-79c761aaa788', '65675 Eric Viaduct Suite 712\nKianhaven, ME 52307-7244', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://collins.com/', NULL, NULL),
(70, 323, 'Nationale', '524538', '1', 'Goodwin Inc', 'gez_ET', '332.572.6438', 'amanda93@example.net', '58df4375-4a41-3f25-b2e1-646d6e8e66b0', '82891 Yundt Camp Apt. 257\nLake Percival, LA 34077-2823', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://kiehn.com/', NULL, NULL),
(71, 324, 'Multinationale', '774506', '1', 'Berge-Beier', 'sh_YU', '+1.708.616.8167', 'cormier.laura@example.com', '1f1e9467-8d1f-37c0-a3e3-768c506b5bcb', '87263 Mark Shoal Suite 412\nGoyetteburgh, AR 69470', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.jenkins.com/tempora-ullam-vel-ut-dolorem.html', NULL, NULL),
(72, 325, 'Nationale', '719330', '1', 'Murray Inc', 'es_VE', '+1-820-688-2313', 'aharris@example.net', 'f8318920-9ccd-3f61-9cef-1a232a1fcc13', '54514 Hirthe Track Suite 304\nO\'Harafurt, ID 51454-0615', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://ratke.com/vitae-iusto-laborum-aut-qui-ut-id-itaque.html', NULL, NULL),
(73, 326, 'Multinationale', '605052', '1', 'Huel, Koelpin and Armstrong', 'de_DE', '1-347-699-8374', 'keon.rath@example.com', 'ccd9be8b-7589-3dd1-b3bb-0fd4fbf7df40', '31384 Allie Islands Suite 591\nSmithtown, CA 31087-7440', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.sawayn.com/', NULL, NULL),
(74, 327, 'Multinationale', '722036', '1', 'Franecki, Ondricka and Cassin', 'gez_ET', '515-569-6391', 'francesca94@example.net', '214c7c57-ad51-3273-975d-3de8dfccf2e5', '6892 Kiehn Union Apt. 958\nOndrickashire, MD 70694', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.homenick.com/natus-tenetur-atque-qui-aut-dicta-qui-eos', NULL, NULL),
(75, 328, 'Multinationale', '987474', '1', 'McCullough-Mosciski', 'es_NI', '435.371.3051', 'eroberts@example.org', 'cae0f9cd-a3f8-3247-942f-9caafa9ffdff', '7567 Beryl Roads Suite 137\nWest Tristianmouth, MO 13322-3518', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://carroll.org/aut-aliquam-adipisci-cupiditate-saepe-accusamus-rerum', NULL, NULL),
(76, 329, 'Nationale', '520317', '1', 'Purdy, Ullrich and Daugherty', 'tr_TR', '+15399303431', 'smckenzie@example.net', '7db1e1db-3f1a-32c1-8045-fd81bda8796b', '479 Fadel Center Suite 654\nStiedemannville, OH 55623-6323', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.schuster.info/', NULL, NULL),
(77, 330, 'Multinationale', '457876', '1', 'Legros PLC', 'ms_MY', '+1 (931) 438-6992', 'yesenia16@example.net', '7a1c2099-6adc-3230-a7be-9b2d43138f3e', '91669 Jacobs Pass Apt. 138\nSigmundburgh, OK 09215', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://mertz.com/fugiat-odit-rerum-iure-repellendus-libero-non-dolores.html', NULL, NULL),
(78, 331, 'Multinationale', '165060', '1', 'Mayer-Yundt', 'fo_FO', '913-722-4183', 'jpacocha@example.net', '5d9eacb0-054a-3817-8c58-e3633da26612', '7698 Shad Vista Suite 170\nWest Amalia, DC 36859-8792', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.murray.com/', NULL, NULL),
(79, 332, 'Multinationale', '331963', '1', 'Johns Inc', 'fa_IR', '+1 (832) 221-6426', 'rstoltenberg@example.net', 'e32b17ef-f0b9-3609-963a-8ad22561b6f7', '860 Zane Trace\nWindlerberg, AR 13163', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://walker.com/aspernatur-voluptatum-veritatis-rem-eos-voluptas-culpa', NULL, NULL),
(80, 333, 'Multinationale', '527036', '1', 'Boyer, Purdy and Terry', 'ku_IQ', '757-360-3648', 'deion26@example.com', '96770e16-aa5b-3328-8a90-f7fcd07fe157', '126 Kozey Meadows\nCollierburgh, MD 37939-3239', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://pfeffer.com/voluptate-quod-aperiam-magnam-molestias-velit.html', NULL, NULL),
(81, 334, 'Nationale', '453635', '1', 'Kilback LLC', 'fo_FO', '828.475.1160', 'pfannerstill.logan@example.com', '908cacab-95d5-3d24-adde-efcf3a897392', '308 Price Junctions\nSouth Janessa, MS 87323-7689', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://aufderhar.com/veritatis-optio-asperiores-quo', NULL, NULL),
(82, 335, 'Multinationale', '236661', '1', 'Dibbert-Kunze', 'en_JM', '+1-657-515-7362', 'dokon@example.net', '7ea1a744-3f32-3eac-b9a9-f302bceef046', '616 Renner Inlet Apt. 344\nSouth Oswaldochester, MS 74105-6872', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://jones.info/harum-fugiat-sit-itaque-sint-inventore-aut.html', NULL, NULL),
(83, 336, 'Nationale', '68496', '1', 'Zboncak Group', 'kk_KZ', '520.515.5137', 'heller.enos@example.com', '78fffb44-be0e-31e5-926e-1ee54410c1cb', '68799 Krajcik Coves\nNorth Wade, AR 83817-6255', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.predovic.org/', NULL, NULL),
(84, 337, 'Nationale', '205576', '1', 'Durgan-O\'Conner', 'se_FI', '+1-772-343-9947', 'rhettinger@example.org', '9396b242-2b1b-3dbc-b9ed-e44e5f90fa9e', '1922 Moen Island Apt. 514\nGermanland, FL 12672', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.kunze.com/', NULL, NULL),
(85, 338, 'Multinationale', '602743', '1', 'Friesen PLC', 'ln_CG', '+1-936-461-2233', 'vivian.collier@example.net', '9b7eb2e5-3d16-3853-b064-180a5f883687', '5027 Tommie Streets\nSouth Busterfurt, WV 74864-3242', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://www.buckridge.biz/iste-aspernatur-necessitatibus-natus-enim-qui-magni-delectus', NULL, NULL),
(86, 339, 'Nationale', '636878', '1', 'Baumbach, Cremin and Stroman', 'fi_FI', '+13857477995', 'beverly.abbott@example.com', '95f2c84c-1df3-3c91-aa8a-bc3a600f4da0', '8210 Miller Neck Suite 423\nEast Leanne, NJ 62977-5016', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.will.org/deserunt-sint-assumenda-totam-totam-corrupti-est-blanditiis.html', NULL, NULL),
(87, 340, 'Multinationale', '484516', '1', 'D\'Amore, Goldner and Conroy', 'mr_IN', '1-458-793-0029', 'hosea.kuhn@example.org', '707b0b2e-1fc3-34b9-ae09-1e271c365a4b', '32309 Wolf Brook Apt. 066\nJeromeland, PA 27506', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.grimes.com/explicabo-quia-aut-voluptatem-omnis.html', NULL, NULL),
(88, 341, 'Multinationale', '779696', '1', 'Schoen-Bartoletti', 'nn_NO', '904.619.1262', 'hgreen@example.org', 'c1a0001c-557f-36f5-be3c-5bbb38435a3b', '633 Beatrice Oval Apt. 360\nKrisfurt, MT 35120', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://crist.com/voluptas-rerum-fugiat-voluptatem-quod-corporis-repudiandae-cum', NULL, NULL),
(89, 342, 'Nationale', '548912', '1', 'Powlowski, Hayes and Emmerich', 'sv_FI', '515.832.9654', 'scotty45@example.com', '8a75fcda-729d-36e7-a326-2a1561f2c47f', '7871 Audreanne Mountains\nReichertshire, DE 87988-1579', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.upton.com/', NULL, NULL),
(90, 343, 'Multinationale', '921075', '1', 'Goldner-Witting', 'ti_ET', '409.857.3097', 'gwendolyn00@example.com', '9ee824f8-010e-399d-b162-284b0854964c', '91830 Shania Fort Suite 803\nEthaberg, CO 71447-0137', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://king.com/autem-perspiciatis-quos-facilis-et-ab-ullam-exercitationem', NULL, NULL),
(91, 344, 'Multinationale', '561275', '1', 'Feil-Grant', 'ga_IE', '(484) 785-1825', 'shea.bednar@example.com', 'c4c63786-063b-38ea-bf59-bcad0a235656', '320 Sabrina Path\nPowlowskiton, WI 56560', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://hettinger.com/omnis-praesentium-voluptatem-officia-distinctio-saepe.html', NULL, NULL),
(92, 345, 'Nationale', '16408', '1', 'Lind LLC', 'pt_PT', '(415) 698-8679', 'herta39@example.org', 'cc1a13de-0f64-337b-bf50-acbb019bbb1b', '81167 Elissa Ford\nLydiabury, WI 52468', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.bergnaum.net/', NULL, NULL),
(93, 346, 'Nationale', '133179', '1', 'Hessel, Hermiston and Bartoletti', 'es_US', '(380) 490-8599', 'ian00@example.org', 'f8015fb9-d041-35da-a8ce-22d4db8d7615', '31855 Nels Pike Apt. 418\nGleasonshire, FL 87826', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://kuhic.com/quasi-iure-aut-corrupti-dolor-accusamus-dolorum-occaecati', NULL, NULL),
(94, 347, 'Nationale', '272764', '1', 'Kunze, Jones and Prosacco', 'ku_IR', '689-356-9176', 'earnest88@example.com', '57b01576-5288-330b-a505-cece69f76455', '4088 Shanie Passage Suite 312\nGreenfelderbury, AL 29242-6649', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://www.oconnell.com/minima-aperiam-nam-modi-neque-voluptatem-dolores-quos', NULL, NULL),
(95, 348, 'Multinationale', '744208', '1', 'Kunze, Witting and Braun', 'ar_TN', '1-920-239-9177', 'elinor50@example.org', '10ed242d-5aa3-36e5-8381-3196562973c2', '725 Alysha Ranch\nWest Allybury, NC 49274-5100', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.prosacco.biz/dolorum-ratione-cum-sit-consequatur-totam', NULL, NULL),
(96, 349, 'Multinationale', '350591', '1', 'Toy LLC', 'af_ZA', '219.655.7805', 'gunner91@example.net', '84dee345-db57-3716-b8ac-3fe664eb44c4', '7060 Schulist Plain Suite 744\nSkyemouth, MT 40003', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'http://www.veum.net/amet-aut-quis-ullam.html', NULL, NULL),
(97, 350, 'Multinationale', '605332', '1', 'Romaguera, Rutherford and O\'Kon', 'en_JM', '+1-314-421-7449', 'rkessler@example.net', '540a481e-3433-3fa5-ab6a-602f42c70a99', '33623 Margaret Row Apt. 007\nZboncakmouth, NM 38847-0695', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://konopelski.com/ut-nobis-aut-qui-saepe-velit.html', NULL, NULL),
(98, 351, 'Multinationale', '379984', '1', 'Kreiger Group', 'zh_TW', '(320) 214-0047', 'elissa.haley@example.net', 'b5756881-6069-3aa9-87be-ca75e1655d71', '638 Verlie Vista\nKelliechester, KY 34248', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://www.kilback.com/quam-quibusdam-et-et-et', NULL, NULL),
(99, 352, 'Nationale', '920773', '1', 'Pollich, Roberts and Lubowitz', 'fo_FO', '320-229-6383', 'ida85@example.org', '78540c11-32ed-3332-b89b-3c5d1230464d', '9585 Kiehn Drives Suite 643\nDavismouth, VT 07611-9359', 'logo.png', '2024-01-22 15:32:09', '2024-01-22 15:32:09', 'couverture.jpg', 'https://abshire.com/aut-provident-numquam-magni-error-nesciunt-velit-omnis.html', NULL, NULL),
(100, 354, 'Nationale', '54065', '1', 'Kodak Tech', 'Ivoirienne', '0103810997', 'kodak@gmail.com', 'CI2023', 'Abidjan', '354_20240122_160700.jpg', '2024-01-22 16:03:41', '2024-01-22 16:07:00', '354_20240122_160700.avif', 'Kodak.com', 'Kodak Teck', 'Une industrie multi');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `id_secteur` bigint(20) UNSIGNED NOT NULL,
  `id_categorie` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `forums`
--

CREATE TABLE `forums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `id_categorie` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images_service_entreprises`
--

CREATE TABLE `images_service_entreprises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `service_entreprise_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images_service_entreprises`
--

INSERT INTO `images_service_entreprises` (`id`, `file_name`, `file_path`, `service_entreprise_id`, `created_at`, `updated_at`) VALUES
(51, 'image_20240122_160516.avif', 'assets/images/portfolio/image_20240122_160516.avif', 110, '2024-01-22 16:05:16', '2024-01-22 16:05:16'),
(52, 'image_20240122_160516.jpg', 'assets/images/portfolio/image_20240122_160516.jpg', 110, '2024-01-22 16:05:16', '2024-01-22 16:05:16'),
(53, 'image_20240122_160516.jpg', 'assets/images/portfolio/image_20240122_160516.jpg', 110, '2024-01-22 16:05:16', '2024-01-22 16:05:16');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_21_223541_create_departements_table', 1),
(7, '2023_07_21_223637_create_secteurs_table', 1),
(8, '2023_07_21_223703_create_services_table', 1),
(9, '2023_07_21_223739_create_diplomes_table', 1),
(10, '2023_07_21_223937_create_category_news_table', 1),
(11, '2023_07_21_223959_create_category_forums_table', 1),
(12, '2023_07_21_224037_create_category_faqs_table', 1),
(13, '2023_07_21_224105_create_clients_table', 1),
(14, '2023_07_21_224203_create_recompenses_table', 1),
(15, '2023_07_21_224256_create_news_table', 1),
(16, '2023_07_21_224350_create_new_comments_table', 1),
(17, '2023_07_21_224417_create_forums_table', 1),
(18, '2023_07_21_224437_create_faqs_table', 1),
(19, '2023_07_21_224504_create_pays_table', 1),
(20, '2023_07_21_224532_create_notations_table', 1),
(21, '2023_08_04_105852_create_permission_tables', 1),
(22, '2023_08_04_112748_create_service_clients_table', 1),
(23, '2023_08_04_112924_create_entreprises_table', 1),
(24, '2023_08_22_155439_create_demande_services_table', 1),
(25, '2023_08_24_201053_create_service_entreprises_table', 1),
(26, '2023_08_26_100141_add_columns_to_serive_entreprise_table', 1),
(27, '2023_08_29_110901_add_columns_to_departement_table', 1),
(28, '2023_10_03_201535_add_images_to_services', 1),
(29, '2023_10_13_123606_create_images_service_entreprises_table', 1),
(30, '2023_12_27_150033_add_colonnes_to_entreprises', 2);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 184),
(1, 'App\\Models\\User', 185),
(1, 'App\\Models\\User', 187),
(1, 'App\\Models\\User', 191),
(1, 'App\\Models\\User', 196),
(1, 'App\\Models\\User', 198),
(1, 'App\\Models\\User', 199),
(1, 'App\\Models\\User', 200),
(1, 'App\\Models\\User', 203),
(1, 'App\\Models\\User', 208),
(1, 'App\\Models\\User', 209),
(1, 'App\\Models\\User', 211),
(1, 'App\\Models\\User', 212),
(1, 'App\\Models\\User', 213),
(1, 'App\\Models\\User', 215),
(1, 'App\\Models\\User', 218),
(1, 'App\\Models\\User', 221),
(1, 'App\\Models\\User', 223),
(1, 'App\\Models\\User', 224),
(1, 'App\\Models\\User', 225),
(1, 'App\\Models\\User', 226),
(1, 'App\\Models\\User', 227),
(1, 'App\\Models\\User', 228),
(1, 'App\\Models\\User', 234),
(1, 'App\\Models\\User', 235),
(1, 'App\\Models\\User', 238),
(1, 'App\\Models\\User', 239),
(1, 'App\\Models\\User', 240),
(1, 'App\\Models\\User', 241),
(1, 'App\\Models\\User', 247),
(1, 'App\\Models\\User', 248),
(1, 'App\\Models\\User', 249),
(1, 'App\\Models\\User', 251),
(1, 'App\\Models\\User', 252),
(1, 'App\\Models\\User', 253),
(1, 'App\\Models\\User', 254),
(1, 'App\\Models\\User', 258),
(1, 'App\\Models\\User', 259),
(1, 'App\\Models\\User', 261),
(1, 'App\\Models\\User', 262),
(1, 'App\\Models\\User', 264),
(1, 'App\\Models\\User', 269),
(1, 'App\\Models\\User', 272),
(1, 'App\\Models\\User', 274),
(1, 'App\\Models\\User', 275),
(1, 'App\\Models\\User', 277),
(1, 'App\\Models\\User', 281),
(1, 'App\\Models\\User', 284),
(1, 'App\\Models\\User', 286),
(1, 'App\\Models\\User', 287),
(1, 'App\\Models\\User', 290),
(1, 'App\\Models\\User', 291),
(1, 'App\\Models\\User', 292),
(1, 'App\\Models\\User', 294),
(1, 'App\\Models\\User', 295),
(1, 'App\\Models\\User', 297),
(1, 'App\\Models\\User', 298),
(1, 'App\\Models\\User', 303),
(1, 'App\\Models\\User', 304),
(1, 'App\\Models\\User', 305),
(1, 'App\\Models\\User', 306),
(1, 'App\\Models\\User', 310),
(1, 'App\\Models\\User', 312),
(1, 'App\\Models\\User', 313),
(1, 'App\\Models\\User', 314),
(1, 'App\\Models\\User', 315),
(1, 'App\\Models\\User', 326),
(1, 'App\\Models\\User', 327),
(1, 'App\\Models\\User', 329),
(1, 'App\\Models\\User', 332),
(1, 'App\\Models\\User', 334),
(1, 'App\\Models\\User', 335),
(1, 'App\\Models\\User', 336),
(1, 'App\\Models\\User', 338),
(1, 'App\\Models\\User', 339),
(1, 'App\\Models\\User', 343),
(1, 'App\\Models\\User', 344),
(1, 'App\\Models\\User', 346),
(1, 'App\\Models\\User', 347),
(1, 'App\\Models\\User', 348),
(1, 'App\\Models\\User', 349),
(1, 'App\\Models\\User', 350),
(1, 'App\\Models\\User', 351),
(1, 'App\\Models\\User', 352),
(1, 'App\\Models\\User', 353),
(2, 'App\\Models\\User', 355),
(3, 'App\\Models\\User', 183),
(3, 'App\\Models\\User', 186),
(3, 'App\\Models\\User', 188),
(3, 'App\\Models\\User', 189),
(3, 'App\\Models\\User', 190),
(3, 'App\\Models\\User', 192),
(3, 'App\\Models\\User', 193),
(3, 'App\\Models\\User', 194),
(3, 'App\\Models\\User', 195),
(3, 'App\\Models\\User', 197),
(3, 'App\\Models\\User', 201),
(3, 'App\\Models\\User', 202),
(3, 'App\\Models\\User', 204),
(3, 'App\\Models\\User', 205),
(3, 'App\\Models\\User', 206),
(3, 'App\\Models\\User', 207),
(3, 'App\\Models\\User', 210),
(3, 'App\\Models\\User', 214),
(3, 'App\\Models\\User', 216),
(3, 'App\\Models\\User', 217),
(3, 'App\\Models\\User', 219),
(3, 'App\\Models\\User', 220),
(3, 'App\\Models\\User', 222),
(3, 'App\\Models\\User', 229),
(3, 'App\\Models\\User', 230),
(3, 'App\\Models\\User', 231),
(3, 'App\\Models\\User', 232),
(3, 'App\\Models\\User', 233),
(3, 'App\\Models\\User', 236),
(3, 'App\\Models\\User', 237),
(3, 'App\\Models\\User', 242),
(3, 'App\\Models\\User', 243),
(3, 'App\\Models\\User', 244),
(3, 'App\\Models\\User', 245),
(3, 'App\\Models\\User', 246),
(3, 'App\\Models\\User', 250),
(3, 'App\\Models\\User', 255),
(3, 'App\\Models\\User', 256),
(3, 'App\\Models\\User', 257),
(3, 'App\\Models\\User', 260),
(3, 'App\\Models\\User', 263),
(3, 'App\\Models\\User', 265),
(3, 'App\\Models\\User', 266),
(3, 'App\\Models\\User', 267),
(3, 'App\\Models\\User', 268),
(3, 'App\\Models\\User', 270),
(3, 'App\\Models\\User', 271),
(3, 'App\\Models\\User', 273),
(3, 'App\\Models\\User', 276),
(3, 'App\\Models\\User', 278),
(3, 'App\\Models\\User', 279),
(3, 'App\\Models\\User', 280),
(3, 'App\\Models\\User', 282),
(3, 'App\\Models\\User', 283),
(3, 'App\\Models\\User', 285),
(3, 'App\\Models\\User', 288),
(3, 'App\\Models\\User', 289),
(3, 'App\\Models\\User', 293),
(3, 'App\\Models\\User', 296),
(3, 'App\\Models\\User', 299),
(3, 'App\\Models\\User', 300),
(3, 'App\\Models\\User', 301),
(3, 'App\\Models\\User', 302),
(3, 'App\\Models\\User', 307),
(3, 'App\\Models\\User', 308),
(3, 'App\\Models\\User', 309),
(3, 'App\\Models\\User', 311),
(3, 'App\\Models\\User', 316),
(3, 'App\\Models\\User', 317),
(3, 'App\\Models\\User', 318),
(3, 'App\\Models\\User', 319),
(3, 'App\\Models\\User', 320),
(3, 'App\\Models\\User', 321),
(3, 'App\\Models\\User', 322),
(3, 'App\\Models\\User', 323),
(3, 'App\\Models\\User', 324),
(3, 'App\\Models\\User', 325),
(3, 'App\\Models\\User', 328),
(3, 'App\\Models\\User', 330),
(3, 'App\\Models\\User', 331),
(3, 'App\\Models\\User', 333),
(3, 'App\\Models\\User', 337),
(3, 'App\\Models\\User', 340),
(3, 'App\\Models\\User', 341),
(3, 'App\\Models\\User', 342),
(3, 'App\\Models\\User', 345),
(3, 'App\\Models\\User', 354);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `sous_titre` varchar(255) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_categorie` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `new_comments`
--

CREATE TABLE `new_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `id_news` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `notations`
--

CREATE TABLE `notations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
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
-- Structure de la table `recompenses`
--

CREATE TABLE `recompenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `valeur` varchar(255) NOT NULL,
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'client', 'web', NULL, NULL),
(2, 'serviceClient', 'web', NULL, NULL),
(3, 'compagny', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `secteurs`
--

CREATE TABLE `secteurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `departement_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `departement_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `libelle`, `departement_id`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Services de conseil en développement de nouveaux produits de boulangerie', 10, '2023-08-25 07:48:44', NULL, 'assets/images/services/conseil_boulangerie.jpeg'),
(2, 'Fourniture d\'ingrédients et de matières premières de qualité pour la boulangerie', 10, '2023-08-25 07:49:06', NULL, 'assets/images/services/Fourniture_matières_premières_boulangerie.png'),
(3, 'Consultation en matière de gestion de la production et de la chaîne d\'approvisionnement.', 10, '2023-08-25 07:49:18', NULL, 'assets/images/services/default.jpg'),
(4, 'Services de formation pour les boulangeries et pâtissiers', 10, '2023-08-25 07:49:29', NULL, 'assets/images/services/boulangerie.png'),
(5, 'Fourniture de machines et d\'équipements de boulangerie', 10, '2023-08-25 07:49:41', NULL, 'assets/images/services/materiels_boulangerie.jpg'),
(6, 'Fourniture d\'équipements technologiques et électroniques pour diverses applications', 9, '2023-08-25 07:51:13', NULL, 'assets/images/services/Fourniture_équipements_technologiques.jpg'),
(7, 'Ingénierie et conception de solutions technologiques avancées', 9, '2023-08-25 07:51:25', NULL, 'assets/images/services/Ingénierie_conception_solutions_technologique.jpg'),
(8, 'Services de consultation en gestion de l\'énergie et de l\'efficacité énergétique', 9, '2023-08-25 07:51:46', NULL, 'assets/images/services/Services_en_gestion_énergétique.jpg'),
(9, 'Développement de logiciels sur mesure pour les entreprises technologiques', 9, '2023-08-25 07:51:58', NULL, 'assets/images/services/Développement_de_logiciels.jpg'),
(10, 'Installation et maintenance de panneaux solaires et de systèmes d\'énergie renouvelable', 9, '2023-08-25 07:52:08', NULL, 'assets/images/services/Installation_et_maintenance_de_panneaux_solaires.jpg'),
(11, 'Formation à la conduite automobile et aux compétences de pilotage moto', 8, '2023-08-25 07:53:41', NULL, 'assets/images/services/Formation_conduite automobile.jpg'),
(12, 'Conception et personnalisation de voitures et de motos', 8, '2023-08-25 07:53:50', NULL, 'assets/images/services/Conception_personnalisation_de_voitures.jpg'),
(13, 'Location de véhicules pour des besoins spécifiques', 8, '2023-08-25 07:53:59', NULL, 'assets/images/services/Location_de_véhicules.jpg'),
(14, 'Vente de pièces détachées et d\'accessoires pour automobiles et motos', 8, '2023-08-25 07:54:08', NULL, 'assets/images/services/Vente_de_pièces_détachées.avif'),
(15, 'Services de réparation et d\'entretien automobile', 8, '2023-08-25 07:54:18', NULL, 'assets/images/services/réparation_entretien_automobile.jpg'),
(16, 'Gestion de projets de construction et suivi des délais et budgets', 7, '2023-08-25 07:55:39', NULL, 'assets/images/services/default.jpg'),
(17, 'Services d\'inspection et de contrôle de la qualité des travaux de construction', 7, '2023-08-25 07:55:49', NULL, 'assets/images/services/Services_inspection_et_de_contrôle_qualité.png'),
(18, 'Location d\'engins de chantier et d\'équipements de construction', 7, '2023-08-25 07:56:00', NULL, 'assets/images/services/Location_engins.jpg'),
(19, 'Ingénierie civile pour la planification et la réalisation de projets d\'infrastructures', 7, '2023-08-25 07:56:10', NULL, 'assets/images/services/Ingénierie_civile.jpg'),
(20, 'Services de construction et de rénovation résidentielle', 7, '2023-08-25 07:56:20', NULL, 'assets/images/services/renovation.jpg'),
(21, 'Formation en ligne et à distance pour la flexibilité des horaires d\'apprentissage', 6, '2023-08-25 07:57:42', NULL, 'assets/images/services/temps.jpg'),
(22, 'Cours de langues étrangères et de diplomatie', 6, '2023-08-25 07:57:54', NULL, 'assets/images/services/default.jpg'),
(23, 'Programmes de formation en leadership et en développement personnel', 6, '2023-08-25 07:58:06', NULL, 'assets/images/services/default.jpg'),
(24, 'Préparation aux examens et concours nationaux et internationaux', 6, '2023-08-25 07:58:19', NULL, 'assets/images/services/Préparation_examens_et_concours.jpg'),
(25, 'Cours de formation professionnelle dans divers domaines tels que la gestion, la communication et les compétences techniques', 6, '2023-08-25 07:58:31', NULL, 'assets/images/services/default.jpg'),
(26, 'Conseils en matière de propriété intellectuelle, de brevets et de droits d\'auteur', 5, '2023-08-25 07:59:38', NULL, 'assets/images/services/default.jpg'),
(27, 'Services de comptabilité et d\'audit pour les entreprises', 5, '2023-08-25 07:59:52', NULL, 'assets/images/services/default.jpg'),
(28, 'Services juridiques pour la rédaction de contrats, la résolution de litiges et la consultation juridique', 5, '2023-08-25 08:00:04', NULL, 'assets/images/services/Services_juridiques.jpeg'),
(29, 'Services de conseil financier pour la gestion de l\'argent, l\'investissement et la planification de la retraite', 5, '2023-08-25 08:00:14', NULL, 'assets/images/services/default.jpg'),
(30, 'Conseils en matière de fiscalité et d\'optimisation fiscale', 5, '2023-08-25 08:00:24', NULL, 'assets/images/services/Conseils_en_matière_de_fiscalité.jpg'),
(31, 'Planification de voyages sur mesure et services de conciergerie de voyage', 4, '2023-08-25 08:01:44', NULL, 'assets/images/services/voyage.jpg'),
(32, 'Location de véhicules pour les voyageurs', 4, '2023-08-25 08:01:54', NULL, 'assets/images/services/Location_de_véhicules.jpg'),
(33, 'Organisation d\'événements spéciaux et d\'expériences uniques lors des voyages', 4, '2023-08-25 08:02:03', NULL, 'assets/images/services/default.jpg'),
(34, 'Services de guides touristiques et d\'excursions locales', 4, '2023-08-25 08:02:14', NULL, 'assets/images/services/default.jpg'),
(35, 'Agence de voyages pour la réservation de vols, d\'hébergements et de forfaits touristiques', 4, '2023-08-25 08:02:23', NULL, 'assets/images/services/Agence_voyages.jpg'),
(36, 'Fourniture de technologies agricoles avancées pour augmenter les rendements', 3, '2023-08-25 08:03:32', NULL, 'assets/images/services/default.jpg'),
(37, 'Services de cartographie et de suivi des ressources naturelles', 3, '2023-08-25 08:03:43', NULL, 'assets/images/services/default.jpg'),
(38, 'Conseils en aménagement paysager écologique et en jardinage biologique', 3, '2023-08-25 08:04:00', NULL, 'assets/images/services/default.jpg'),
(39, 'Solutions de gestion des déchets et du recyclage pour les entreprises', 3, '2023-08-25 08:04:13', NULL, 'assets/images/services/Solutions_de_gestion_des_déchets.jpg'),
(40, 'Services de conseil en agriculture durable et en pratiques respectueuses de l\'environnement', 3, '2023-08-25 08:04:24', NULL, 'assets/images/services/Services_de_conseil_en_agriculture_durable.jpg'),
(41, 'Services de formation pour les éleveurs en techniques modernes d\'élevage', 2, '2023-08-25 08:06:12', NULL, 'assets/images/services/boulangerie.jpg'),
(42, 'Équipements et infrastructures pour les élevages', 2, '2023-08-25 08:06:22', NULL, 'assets/images/services/default.jpg'),
(43, 'Services de gestion de la reproduction animale et de la santé des troupeaux', 2, '2023-08-25 08:06:32', NULL, 'assets/images/services/Services_de_gestion_de_la_reproduction_animale.jpg'),
(45, 'Fourniture d\'aliments pour animaux de qualité supérieure', 2, '2023-08-25 08:06:56', NULL, 'assets/images/services/default.jpg'),
(46, 'Conseils en matière d\'élevage et de soins aux animaux', 2, '2023-08-25 08:07:35', NULL, 'assets/images/services/default.jpg'),
(47, 'Agence de recrutement pour les entreprises à la recherche de talents', 1, '2023-08-25 08:09:07', NULL, 'assets/images/services/recrutement_de_talents.jpg'),
(48, 'Coaching et mentorat pour la réussite professionnelle', 1, '2023-08-25 08:09:23', NULL, 'assets/images/services/default.jpg'),
(49, 'Services de conseil en orientation professionnelle et en développement de carrière', 1, '2023-08-25 08:09:33', NULL, 'assets/images/services/conseil.jpg'),
(50, 'Cours de préparation aux concours et examens d\'admission', 1, '2023-08-25 08:09:42', NULL, 'assets/images/services/Préparation_examens_et_concours.png'),
(51, 'Plateforme en ligne de recherche d\'emploi et de dépôt de candidatures', 1, '2023-08-25 08:09:53', NULL, 'assets/images/services/recherche_emploi.png'),
(52, 'Organisation d\'événements diplomatiques et de négociations internationales', 15, '2023-08-25 08:11:07', NULL, 'assets/images/services/default.jpg'),
(53, 'Recherche et analyse politique pour les organisations et les décideurs', 15, '2023-08-25 08:11:29', NULL, 'assets/images/services/default.jpg'),
(54, 'Formation en leadership politique et en communication pour les leaders politiques', 15, '2023-08-25 08:11:41', NULL, 'assets/images/services/Formation_en_leadership.jpeg'),
(55, 'Services de conseil en politique publique et en affaires gouvernementales', 15, '2023-08-25 08:11:52', NULL, 'assets/images/services/default.jpg'),
(56, 'Consultation en matière de relations internationales et de diplomatie', 15, '2023-08-25 08:12:09', NULL, 'assets/images/services/default.jpg'),
(57, 'Electricité', 14, '2023-08-25 08:13:19', NULL, 'assets/images/services/electricite.jpg'),
(58, 'Plomberie', 14, '2023-08-25 08:13:34', NULL, 'assets/images/services/plomberie.jpg'),
(59, 'Conseils en matière de gestion et de développement d\'entreprise dans le secteur informel', 14, '2023-08-25 08:13:45', NULL, 'assets/images/services/default.jpg'),
(61, 'Services de marketing et de promotion pour les petites entreprises du secteur informe', 14, '2023-08-25 08:14:09', NULL, 'assets/images/services/Services_marketing.jpg'),
(62, 'Programme d\'accompagnement et de mentorat pour les travailleurs indépendants', 14, '2023-08-25 08:14:23', NULL, 'assets/images/services/default.jpg'),
(63, 'Plateforme d\'échange de cryptomonnaies pour acheter, vendre et échanger des actifs numériques', 13, '2023-08-25 08:15:42', NULL, 'assets/images/services/Plateforme_échange_de_cryptomonnaies.webp'),
(64, 'Portefeuille numérique sécurisé pour stocker et gérer vos cryptomonnaies', 13, '2023-08-25 08:16:03', NULL, 'assets/images/services/Portefeuille_numérique.jpg'),
(65, 'Formation sur la blockchain, les cryptomonnaies et les investissements en actifs numériques', 13, '2023-08-25 08:16:18', NULL, 'assets/images/services/Formation_cryptomonnaies.jpg'),
(66, 'Services de conseil en matière d\'investissement et de trading de cryptomonnaies', 13, '2023-08-25 08:16:31', NULL, 'assets/images/services/Services_investissement.jpg'),
(68, 'Plateforme de trading en ligne pour acheter et vendre des actions et des produits financiers', 12, '2023-08-25 08:18:12', NULL, 'assets/images/services/default.jpg'),
(69, 'Formation sur les techniques de trading, l\'analyse technique et l\'analyse fondamentale', 12, '2023-08-25 08:18:25', NULL, 'assets/images/services/default.jpg'),
(70, 'Services de gestion de portefeuille et de conseil en investissement', 12, '2023-08-25 08:18:35', NULL, 'assets/images/services/default.jpg'),
(71, 'Analyse de marché en temps réel et informations financières', 12, '2023-08-25 08:18:47', NULL, 'assets/images/services/default.jpg'),
(72, 'Coaching personnel pour les traders débutants et avancés', 12, '2023-08-25 08:18:58', NULL, 'assets/images/services/default.jpg'),
(73, 'Consultation en matière de gestion du temps, de l\'organisation et de la productivité', 11, '2023-08-25 08:20:02', NULL, 'assets/images/services/temps.jpg'),
(74, 'Services de rédaction et de relecture de documents professionnels', 11, '2023-08-25 08:20:21', NULL, 'assets/images/services/Services_rédaction.jpg'),
(75, 'Solutions logicielles pour la gestion de projet et la collaboration au sein des équipes', 11, '2023-08-25 08:20:31', NULL, 'assets/images/services/Développement_de_logiciels.jpg'),
(76, 'Services de gestion administrative externalisée pour les entreprises', 11, '2023-08-25 08:20:41', NULL, 'assets/images/services/default.jpg'),
(77, 'Formation en gestion des ressources humaines, en comptabilité et en gestion de bureau', 11, '2023-08-25 08:20:51', NULL, 'assets/images/services/Formation_ressources_humaines.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `service_clients`
--

CREATE TABLE `service_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `service_clients`
--

INSERT INTO `service_clients` (`id`, `user_id`, `nom`, `telephone`, `email`, `localisation`, `photo`, `created_at`, `updated_at`) VALUES
(1, 355, 'Administrateur', '', 'administrateur@elbaragroup.com', '', 'logo.png', '2024-01-23 13:10:17', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `service_entreprises`
--

CREATE TABLE `service_entreprises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `entreprise_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(5000) NOT NULL,
  `delais_execution` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `libelle` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `service_entreprises`
--

INSERT INTO `service_entreprises` (`id`, `service_id`, `entreprise_id`, `description`, `delais_execution`, `created_at`, `updated_at`, `libelle`, `image`) VALUES
(86, 74, 69, 'Alice! when she was saying, and the little thing was to eat or drink something or other; but the Gryphon never learnt it.\' \'Hadn\'t time,\' said the.', '3', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Gryphon; and then they both bowed low, and their.', 'https://via.placeholder.com/640x480.png/00cc44?text=excepturi'),
(87, 46, 32, 'Number One,\' said Alice. \'I don\'t believe you do either!\' And the moral of that is--\"Be what you were all in bed!\' On various pretexts they all.', '10', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'I hadn\'t drunk quite so much!\' Alas! it was all.', 'https://via.placeholder.com/640x480.png/00bbaa?text=nihil'),
(88, 50, 54, 'I\'d taken the highest tree in the world am I? Ah, THAT\'S the great question is, Who in the morning, just time to avoid shrinking away altogether.', '10', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Duchess was sitting between them, fast asleep.', 'https://via.placeholder.com/640x480.png/003388?text=laborum'),
(89, 57, 58, 'IS it to annoy, Because he knows it teases.\' CHORUS. (In which the words came very queer to ME.\' \'You!\' said the Dodo. Then they all moved off, and.', '2', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Alice looked at the top of it. Presently the.', 'https://via.placeholder.com/640x480.png/008888?text=eum'),
(90, 68, 80, 'I ever heard!\' \'Yes, I think that very few things indeed were really impossible. There seemed to have got into it), and sometimes shorter, until she.', '2', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'I can\'t get out again. Suddenly she came.', 'https://via.placeholder.com/640x480.png/0066ff?text=repellendus'),
(91, 68, 84, 'Majesty!\' the Duchess said in a very truthful child; \'but little girls eat eggs quite as much right,\' said the Duchess: \'flamingoes and mustard both.', '7', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Rabbit asked. \'No, I give you fair warning,\'.', 'https://via.placeholder.com/640x480.png/0077ee?text=voluptatem'),
(92, 65, 50, 'Cat; and this was of very little use, as it turned a back-somersault in at the sudden change, but she felt a little of the leaves: \'I should like to.', '8', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Cat: \'we\'re all mad here. I\'m mad. You\'re mad.\'.', 'https://via.placeholder.com/640x480.png/00ff44?text=voluptatem'),
(93, 47, 41, 'I\'d only been the right words,\' said poor Alice, who felt ready to ask any more questions about it, so she waited. The Gryphon lifted up both its.', '7', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'THEIR eyes bright and eager with many a strange.', 'https://via.placeholder.com/640x480.png/005555?text=eos'),
(94, 58, 96, 'Alice,) and round the neck of the room again, no wonder she felt that it might not escape again, and that\'s all you know that cats COULD grin.\'.', '1', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'I\'m sure I can\'t be Mabel, for I know THAT well.', 'https://via.placeholder.com/640x480.png/009966?text=magnam'),
(95, 58, 85, 'Caterpillar angrily, rearing itself upright as it left no mark on the top of his great wig.\' The judge, by the officers of the teacups as the.', '7', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Don\'t let me help to undo it!\' \'I shall sit.', 'https://via.placeholder.com/640x480.png/00bb22?text=quo'),
(96, 65, 99, 'There was a dead silence instantly, and Alice was very nearly in the prisoner\'s handwriting?\' asked another of the teacups as the other.\' As soon as.', '4', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Alice more boldly: \'you know you\'re growing.', 'https://via.placeholder.com/640x480.png/00ffff?text=aliquam'),
(97, 58, 90, 'No, it\'ll never do to ask: perhaps I shall think nothing of the court,\" and I could say if I chose,\' the Duchess by this time?\' she said to live.', '8', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Alice was thoroughly puzzled. \'Does the boots.', 'https://via.placeholder.com/640x480.png/006622?text=sit'),
(98, 55, 51, 'I was thinking I should be like then?\' And she kept tossing the baby with some curiosity. \'What a pity it wouldn\'t stay!\' sighed the Hatter. \'It.', '1', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Hatter, \'you wouldn\'t talk about her other.', 'https://via.placeholder.com/640x480.png/00aa99?text=debitis'),
(99, 48, 79, 'Five, \'and I\'ll tell him--it was for bringing the cook took the thimble, saying \'We beg your pardon!\' cried Alice hastily, afraid that she could.', '1', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Though they were mine before. If I or she should.', 'https://via.placeholder.com/640x480.png/006699?text=eos'),
(100, 51, 85, 'Cheshire cat,\' said the Cat. \'I said pig,\' replied Alice; \'and I wish you wouldn\'t mind,\' said Alice: \'besides, that\'s not a moment to think that.', '3', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Hatter, \'or you\'ll be asleep again before it\'s.', 'https://via.placeholder.com/640x480.png/00cc44?text=perferendis'),
(101, 45, 53, 'The three soldiers wandered about for a minute or two she walked on in a long, low hall, which was full of tears, until there was a treacle-well.\'.', '3', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'King: \'however, it may kiss my hand if it makes.', 'https://via.placeholder.com/640x480.png/008811?text=quibusdam'),
(102, 45, 65, 'I should be like then?\' And she began shrinking directly. As soon as look at a king,\' said Alice. \'Then you should say \"With what porpoise?\"\' \'Don\'t.', '2', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'ALL RETURNED FROM HIM TO YOU,\"\' said Alice. \'Oh.', 'https://via.placeholder.com/640x480.png/00aa99?text=libero'),
(103, 61, 72, 'Gryphon. \'We can do no more, whatever happens. What WILL become of me? They\'re dreadfully fond of pretending to be treated with respect. \'Cheshire.', '1', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'SOMEBODY ought to be no chance of getting up and.', 'https://via.placeholder.com/640x480.png/0011bb?text=necessitatibus'),
(104, 63, 30, 'White Rabbit: it was sneezing and howling alternately without a moment\'s pause. The only things in the lap of her knowledge. \'Just think of what.', '10', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'THE VOICE OF THE SLUGGARD,\"\' said the Hatter.', 'https://via.placeholder.com/640x480.png/00cccc?text=eum'),
(105, 49, 62, 'Alice! Come here directly, and get ready for your walk!\" \"Coming in a very hopeful tone though), \'I won\'t interrupt again. I dare say you\'re.', '8', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Caterpillar The Caterpillar and Alice looked.', 'https://via.placeholder.com/640x480.png/00bb00?text=dolores'),
(106, 68, 49, 'Let this be a LITTLE larger, sir, if you like,\' said the Cat; and this was of very little way forwards each time and a large piece out of a large.', '10', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'France-- Then turn not pale, beloved snail, but.', 'https://via.placeholder.com/640x480.png/0022aa?text=quis'),
(107, 52, 42, 'William the Conqueror.\' (For, with all their simple joys, remembering her own courage. \'It\'s no business there, at any rate I\'ll never go THERE.', '3', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'Majesty,\' he began. \'You\'re a very hopeful tone.', 'https://via.placeholder.com/640x480.png/00ff88?text=eligendi'),
(108, 72, 48, 'Will you, won\'t you, will you, won\'t you, won\'t you, won\'t you, will you join the dance? Will you, won\'t you, will you, won\'t you, will you join the.', '3', '2024-01-22 15:37:54', '2024-01-22 15:37:54', 'WAS a curious dream, dear, certainly: but now.', 'https://via.placeholder.com/640x480.png/004444?text=nihil'),
(110, 28, 100, 'La phrase de description', '3', '2024-01-22 16:05:16', '2024-01-22 16:05:16', 'Vous défendre est notre motivation', NULL),
(111, 1, 100, 'Notre description', '6', '2024-01-22 16:11:37', '2024-01-22 16:11:37', 'La boulangerie notre affaire', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(183, 'Mr. Flavio Yundt', 'kim64@example.org', '2024-01-22 15:31:56', '$2y$10$reW5YQ3Sdty/hEyaYvENnOyDlbqpEf0F94IO1Nvm0jxpDeYgBCzLi', 'zViIUaSVEm', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(184, 'Ms. Chanel Carroll Jr.', 'rosendo.predovic@example.com', '2024-01-22 15:31:56', '$2y$10$ZT5an/Jgyvs2Aa89.i5qXutgRTqQ5Vu7ogmP/E99HgFhAiVZdHrJW', '3DbrFm1jNO', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(185, 'Theresia Reinger IV', 'vaufderhar@example.com', '2024-01-22 15:31:56', '$2y$10$7ShGnd9LCyWDio/Fni5aj.m612ZR0zEvY8RIObVcMTILSedb/xile', 'EhfeKWi9wY', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(186, 'Angel Emard', 'hadley.block@example.net', '2024-01-22 15:31:56', '$2y$10$s8N4Cqnxx.kV4ITpEsC/Bu0JFe1C4iUObSfJ7UZKwBV/PiRby4gIC', 'LLmXoDZfki', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(187, 'Kiera Buckridge', 'ibrahim.swaniawski@example.com', '2024-01-22 15:31:56', '$2y$10$vzlSvFrlSy6HWpw9LTUv9.uvi5T3wwIRuZCceE94n.UVQwHDEYg5y', '34r4puz1Uj', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(188, 'Pamela Beahan', 'foster.mcclure@example.com', '2024-01-22 15:31:56', '$2y$10$7mHFJlmBHRqN/lmv.s58/O5wSP4FuPPwTqwvLjKpmMA8Qd7O5DFgC', 'ebmD4TJdW7', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(189, 'Dr. Haylie Bednar', 'jordane.walter@example.com', '2024-01-22 15:31:56', '$2y$10$ZntynP6NVcHehB/UbjHyzuO5fuFmo6ck0ErgfugP2pdc8Ace4jQ3S', 'e0kQa8WREp', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(190, 'Russell Macejkovic', 'dino.bayer@example.com', '2024-01-22 15:31:56', '$2y$10$13.9OnC4eT4XKtd.1uIAKOcfrnQoOoKoiIiTDCksgB8/aPtjfQ60i', 'qZkJtGvp8Z', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(191, 'Georgiana Murray', 'rdurgan@example.com', '2024-01-22 15:31:57', '$2y$10$4m9CfiYOqeaHa5zD1Bs49e3EBMNSH9JiDJNRIdES3a3IMGhUUBlj2', 'MJK9DDgrnl', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(192, 'Timothy Runolfsson', 'hauck.august@example.net', '2024-01-22 15:31:57', '$2y$10$O6FpDNYMNH2O/AyEbff//ekZvXYRnQhJ71PfDc.1D2y8fCbjO1ywW', 'IVr8ZO4GfI', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(193, 'Rita Jast', 'melody.fay@example.net', '2024-01-22 15:31:57', '$2y$10$utXSAjsmbboeDjtBCGGiR.yKcAlZJ/4YQYysOWX4Dggm/QiJGDUI6', 'D5WnrjDaGi', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(194, 'Kenya Anderson', 'monty.towne@example.com', '2024-01-22 15:31:57', '$2y$10$yShT6MUxr50N6qcPICZBF.VIBG3K27i3q8usyAxZ/PNVJ1Fw.i4EC', 'HKK2m6K8iA', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(195, 'Lourdes Littel', 'breanne97@example.net', '2024-01-22 15:31:57', '$2y$10$XslnwHowgbuNDUxNyWOtn.DAEKg1qMjFYFqFCexkUY4qoYZsUSvFa', 'uoToYlnRVU', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(196, 'Israel Kreiger', 'roderick.beahan@example.com', '2024-01-22 15:31:57', '$2y$10$Bn9V55W7GeOzMGeYEeZfy.CHZM4T50VB7CBRMjVMt2PwEcP4/6o0S', 'ezEiF10Y5E', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(197, 'Prof. Mariano Klocko', 'wolf.ricardo@example.com', '2024-01-22 15:31:57', '$2y$10$22ejmgx/tKjcakMQrdkh6e4219ATXgvTxKIk39mfmn3584hk6nlGq', 'pETMhSyt7T', '2024-01-22 15:32:02', '2024-01-22 15:32:02'),
(198, 'Felicity Murray', 'rodolfo46@example.net', '2024-01-22 15:31:57', '$2y$10$/B4idJiMutldtKbmGFTrXO2O25TBfdXNuYO/xGnyA.uF.M60aXSIi', 'Fs9iJ91Gv9', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(199, 'Amber Heller', 'marco71@example.com', '2024-01-22 15:31:57', '$2y$10$kUz.NI9o.jGnlwFnKTWvOelxG78QQgPhSiKsHEFl.7REhUczS4qzS', 'mEzl5DtHhb', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(200, 'Prof. Elyse Keeling', 'lila.kovacek@example.org', '2024-01-22 15:31:57', '$2y$10$Jbtf1pkNkwj2Jthr3KsrS.JNhv1PLhc2I3QHAmcsmfEvqdIOECsVW', 'FNejc369go', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(201, 'Triston Ratke DVM', 'athena93@example.com', '2024-01-22 15:31:57', '$2y$10$6iQYUkfKJkrzljU1awM3r.bevqbznwIthPwmoaCKIpKV5gTcia0SC', 'GjL7nbMs42', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(202, 'Aletha Hagenes', 'hadley.lowe@example.org', '2024-01-22 15:31:57', '$2y$10$kFWMpK834IvKglHvsUaWFuw1wxg8tvEMQhv8zlOpiylSwIoMMICnC', 'R6qPyOjpki', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(203, 'Mollie Homenick', 'stracke.willow@example.net', '2024-01-22 15:31:57', '$2y$10$4FVHZDYL04MjJxEA5D9gIubO9WgfJKn/Cml/VbRPp62xJc5IeiJMS', '2AD0fPktlB', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(204, 'Bell Ledner', 'mina64@example.net', '2024-01-22 15:31:57', '$2y$10$pdVmw6bd5/w3GD7xwj70TuDxBRZULtDb7ZcFlipwOziqFbxCJTiga', 'X82VKnFG2V', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(205, 'Dr. Dewayne Borer', 'camylle.bednar@example.net', '2024-01-22 15:31:57', '$2y$10$sSYO59T/qshXQT/nLy/zAeL6UeANntzn8wKg9hk2eRtyheLPDhW3y', '8G331eTBuq', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(206, 'Cortney Wilderman', 'wtorphy@example.org', '2024-01-22 15:31:57', '$2y$10$NY68dZAnRXRW3z/CTOzPZ.H6cAeSWuzstFT79l/HrNmjduOdd6qEG', 'sk5AxiXKdA', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(207, 'Prof. Gussie Kirlin', 'aditya20@example.com', '2024-01-22 15:31:57', '$2y$10$6UQVdxlIv.i6b6Yc8ipU0ue4uIxAGNmLL48fvr69jzS.T2guVDZT.', '5mzuIU5g7E', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(208, 'Dr. Elisa Corkery I', 'savanna22@example.com', '2024-01-22 15:31:58', '$2y$10$eP1DfSxz/sCjAr4nvLEeIeaW1xrkpsNnyLbnH/zOqutpmm6K.lMpq', '3ORMlqWw3p', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(209, 'Elta Gorczany', 'borer.julien@example.org', '2024-01-22 15:31:58', '$2y$10$3ECl4fTfiAmffCZrskQ3l.VJvbKSRywCmz4N2w9Cc/dviMXIPCAmG', 'uF3F68S10W', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(210, 'Chaya Gutmann III', 'cfranecki@example.com', '2024-01-22 15:31:58', '$2y$10$jLkBIWOhUb5tmjpVE5PQIOEMg7VQRbKOfXzQqgogtiPKXncvCJ8bm', 'drMYMDapq5', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(211, 'Margarete Kuvalis', 'hartmann.freida@example.com', '2024-01-22 15:31:58', '$2y$10$sSGfswrlvoSBiKiMKgqqhei1Pf5bCneceDKAIzZsksxv8fgn0QWBy', 'wHs0JzVXG7', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(212, 'Terry Haley', 'cade79@example.net', '2024-01-22 15:31:58', '$2y$10$P1T7O/seb3hAB18GSTWT5OKAwgzQ6cVw5aNt3U10Wj3eODngQuoF.', 'xNxwVSocMd', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(213, 'Miss Earnestine Huel', 'octavia.lindgren@example.net', '2024-01-22 15:31:58', '$2y$10$uNdjMoi2yz051zi9hpdKouQaUDf.cA8PmAWLy.F7xai9ppdCvnQ3q', 'mGpApB2TVm', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(214, 'Miss Vanessa Price', 'umoen@example.org', '2024-01-22 15:31:58', '$2y$10$IJFdUdDIy1sScRHB5JXWNeCXCpeuPEBYyb8QIzJyibU3AH7jZoCi6', 'KlO2j0uLIZ', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(215, 'Donnell Brekke', 'maggie.swaniawski@example.com', '2024-01-22 15:31:58', '$2y$10$f.8yC86vRdtTX6ZOaIOfDO7eUve1U92NOzkHYfq99MKCUv6Q9jvGO', '4DF9RTB0sr', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(216, 'Magnolia Kuphal IV', 'feest.reva@example.net', '2024-01-22 15:31:58', '$2y$10$DbFArOhgO1Sf8b0XqodzK.SMImtwCkxni9se6M5agyn7C/EEINZTm', 'ay3r3Y44jl', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(217, 'Ms. Marian Waters', 'shania87@example.com', '2024-01-22 15:31:58', '$2y$10$1NC3SBdbxHVA30GbyoDLn.PVf6bFpgqGgoeZf10/rsBs9DWpAKml.', 'PgtRAIBl4O', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(218, 'Melyssa Borer MD', 'mayer.claudie@example.com', '2024-01-22 15:31:58', '$2y$10$dzwlNB0LjyzBpbeQQerlkOP5vuE.pcGtMqR1M4OsVulh/CHEf7wne', '8EoTzpOnri', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(219, 'Paxton Zieme', 'mnader@example.net', '2024-01-22 15:31:58', '$2y$10$Ef6sZoTwZHwEJaQ53mpL0uqDSm4J4A6Xu8TQuiio9Fvy2jF0CO.3K', 'Q2czP12AMy', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(220, 'Paula Welch', 'benton03@example.com', '2024-01-22 15:31:58', '$2y$10$lqDhNMDqVpWpZzyTfZBz4ulV/dxmNBL9BYfpgsJU2nKZGpyNUbJtC', 'qNXx2ujZ5M', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(221, 'Miss Bessie Jakubowski I', 'cleta.jones@example.org', '2024-01-22 15:31:58', '$2y$10$8qcbD5IkaUikfpmS6oSIQOU.I2H5lnrXcCZB3A3C.mfBJBwfn0efe', 'aeOvnahUc1', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(222, 'Chloe Wehner DVM', 'ymayert@example.org', '2024-01-22 15:31:58', '$2y$10$9hkHBrCpBJGbD7QmI1/.CeRyK9oofnX/rpmZfdwBE6k3z48zkIkPu', 'pHvTaVSzKX', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(223, 'Vinnie Gusikowski', 'espencer@example.net', '2024-01-22 15:31:58', '$2y$10$rqcMchINjJRNCufAaZDdsuTY5QI7.OhXlZ9zQTqbVXTh4x.nOb.by', 'rs8ztCUB3S', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(224, 'Kristofer Hoeger', 'jessika40@example.org', '2024-01-22 15:31:59', '$2y$10$yxFHe8Bj3hO.2Y8PO7owTOGkjU.PB6kwn5TNToMTT.WFRC6FrMCJu', 'C3xiIqgWxO', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(225, 'Ms. Suzanne Quigley', 'hernser@example.net', '2024-01-22 15:31:59', '$2y$10$zbp1sSKSe5BBi3i7hCnvtuHCumTYgyjCtaJqH4pgryZQXELvr4foC', 'hmzjmk3HSn', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(226, 'Mrs. Dorris Pfannerstill', 'sipes.dorothea@example.net', '2024-01-22 15:31:59', '$2y$10$Upy3HG4JcQn/pmO2/hhouuNcgcvDXziXPSNu5k.wI89MCZTC/SWQK', 'y7bt4I9i6M', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(227, 'Daija McLaughlin', 'sflatley@example.com', '2024-01-22 15:31:59', '$2y$10$oP9jflshN3wAb0HPuAojleRcalCPW5GpfnUJ1hVBKVQtM8i7hZsKO', 'THzwGVwfNh', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(228, 'Miss Alexandria Lynch PhD', 'dokeefe@example.com', '2024-01-22 15:31:59', '$2y$10$viCyTim1vcj1nJ2SoGX77.Eafqc0IkQYD/dEh4H/3lhEkhlKRjqWC', 'yctCHFDumv', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(229, 'Anastacio Casper DDS', 'bradford.schulist@example.com', '2024-01-22 15:31:59', '$2y$10$7iaxLFZ6MuQGm7bZm47muOB18USCaYyOKRJefKFFTrilzSdghZfdS', 'IoRig7YXk7', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(230, 'Kaela Christiansen Sr.', 'faustino83@example.org', '2024-01-22 15:31:59', '$2y$10$zrGHm3JB0HDZ4z9U/zsbC.E0BrTZDj5j08vkmbhF98VbmUSVRyWN6', 'vgn1m2SeN8', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(231, 'Dr. Megane Purdy', 'okey73@example.org', '2024-01-22 15:31:59', '$2y$10$ZFXbClvSirHT00iTJkWvX.IZg4i3cFnLBxdxNvxQHi2SREhMl3tBS', '3heAjFZ0AP', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(232, 'Abagail Considine', 'lrice@example.org', '2024-01-22 15:31:59', '$2y$10$aCpT0mVW/ME5enzMHCqnHu9TAjmbz2njRtBMGpoHecA/9GItx4iw2', 'YVstMaH2sY', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(233, 'Gage Mohr', 'shirthe@example.net', '2024-01-22 15:31:59', '$2y$10$ltf4aPV/XLWdY4gXrDRP1uRXNlXCQPTUpsaDvw6WFAj/NGJT4m8FW', 'yinz4FI0cH', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(234, 'Abe Shanahan', 'jazlyn.kshlerin@example.com', '2024-01-22 15:31:59', '$2y$10$zqg1OqRdy1F4V0L9rQdMYuhnogBBXNnYH60DRvk9oLcWBTfTY5H0a', '4IBaOB83mJ', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(235, 'Coy Rath II', 'louvenia46@example.com', '2024-01-22 15:31:59', '$2y$10$nmESGS587DlvUnAWOMIs7urP47OhJAzBuWg0iX2XR.2wiqXORBbCm', 'EQKjOm5unq', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(236, 'Madie Cassin', 'thora.heller@example.org', '2024-01-22 15:31:59', '$2y$10$fuzXfq3aFi8P7XslVoQEteRksvf16PDHL5DSknryDwrfFj.YKEbg.', 'co7TDNfOkM', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(237, 'Gudrun Jacobi', 'kdamore@example.org', '2024-01-22 15:31:59', '$2y$10$.6PG52u4dwYMNMXe26rZh.GQipbstQETJdIwi.TmzTs63WId.Sqiu', 'jO7jBLqLrd', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(238, 'Mr. Jarrett Collins', 'tremblay.alexzander@example.org', '2024-01-22 15:31:59', '$2y$10$AgEeSdTcP7uOdVCFIUzWPOMPn6o85X6fe8eKV2j6XhVtoWTB8NON6', '3XAVATgzUa', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(239, 'Zachary Greenfelder', 'umorissette@example.net', '2024-01-22 15:31:59', '$2y$10$xQTY8Z8ZDYWUIAQZgDHnTee7LDdDfhTRY1pnp5dINEL9w3t13V19G', 'MFrF6NsvrM', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(240, 'Erik Dooley I', 'rosalind.mitchell@example.net', '2024-01-22 15:31:59', '$2y$10$XYUnh0exbKboRoouWwkr9OaLyzvdIhSH8Cvxw.QCGXT.BXhJjwRGW', 'sS6zFyrwY6', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(241, 'Shaun Stoltenberg', 'vella.schultz@example.com', '2024-01-22 15:32:00', '$2y$10$gnnNJQrc3K1j/izdfwvSTeP/X2y9ykkvbAGmvO2sgUlBIUZqdPuAe', 'fEahzueY22', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(242, 'Mr. Mark Lynch', 'fredy98@example.org', '2024-01-22 15:32:00', '$2y$10$ab1cF1MA7dOv2Za95JSSjeMs2UCib/MepMeKHeF7utzuFLW1piCJy', 'VupT9kVxq4', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(243, 'Kane Dibbert', 'mheidenreich@example.com', '2024-01-22 15:32:00', '$2y$10$flYLQA0nWpPSLVbDlh5yfuajpc8Dh1iBS5e9jOi23Z2c2.17yFNkW', 'OJ3PhUbPW0', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(244, 'Edward Greenholt', 'greenholt.virgil@example.com', '2024-01-22 15:32:00', '$2y$10$QG2j/Jo64U3APtW5FVI9EOG794WUc8hSeQiCl3EbdTwEEl6ZqPtfq', 'eTAOyMPfjH', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(245, 'Cayla Moore', 'lera.schaden@example.com', '2024-01-22 15:32:00', '$2y$10$sF.pnXJ1y9iyvylRvIzGOOwQzLT7Zlips9gp3ERkqiMHspUjGEV/i', 'KtfFIlAdLp', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(246, 'Mohammed Nicolas I', 'ugrady@example.net', '2024-01-22 15:32:00', '$2y$10$FSTzLGex2.lAG4JSR5wCS.c.GmUMwa4tVk6kaBx3./B7tQX9N08qm', 'Ur5dzCNejr', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(247, 'Sydni Marquardt', 'kiera.bruen@example.org', '2024-01-22 15:32:00', '$2y$10$Ee3ToQMAkJrpb.T4R4.5rOdEYvLMdpSuxSA0LxN3L10xV36yETJeS', 'ea3vOHMKK4', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(248, 'Chase Klocko', 'wprohaska@example.net', '2024-01-22 15:32:00', '$2y$10$k0l0QC2LRdN00/vF3km47u4KDEsiJ//3sXG8emf6j/LiIWB5rgHgi', 'GyWtRVfJCH', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(249, 'Prof. Candelario Crooks II', 'yreinger@example.net', '2024-01-22 15:32:00', '$2y$10$m05z4lnFD3lL0iz9/bc3du0yozyxAOa1ZfBSeni2oDumQQdGifrRe', 'GhfyalsM15', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(250, 'Miss Desiree Schaefer', 'alayna.cummings@example.net', '2024-01-22 15:32:00', '$2y$10$Q.Uz1JVeyHhLZeHYiUaBneEeGCB71qlbelou1zXKIe7KTJrZu9d9q', 'ECA0lVeqDa', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(251, 'Lea Rippin', 'zkohler@example.com', '2024-01-22 15:32:00', '$2y$10$/HM1VqZWZWEkmu68kT6Hl.gnvC.z9mm4sYhh7GDyQUpf8W3znuF4a', 'ue8ec0nunm', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(252, 'Shania Ortiz DVM', 'ggusikowski@example.org', '2024-01-22 15:32:00', '$2y$10$lmWt0Zpp95vSfI24CMgFqeoIwXuLZsfqyBVra1H97YH7T7CleMeWu', 'HBPiwrUKgZ', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(253, 'Demario Mertz', 'ffahey@example.net', '2024-01-22 15:32:00', '$2y$10$B6jqTQxdTbNAXgr8swrVr.QikHYGE7lcV6Xh.bxB7ggg2cJ8/owHi', '3RHZnFZHhD', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(254, 'Prof. Drake Little', 'winifred16@example.net', '2024-01-22 15:32:00', '$2y$10$oPFZmesSuE9rHCNZnhrnLOpGSe1JI1IxQQ0UAPpMc4peiY.R/E7xG', 'quZbJHV2Uo', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(255, 'Norwood Bradtke', 'rashad.gusikowski@example.org', '2024-01-22 15:32:00', '$2y$10$.TmZd4uLroFcDIQxmvDU0OlpDoLCUhOsQmn6zj0JBQG0VOMeg8z.S', 'QzKlZEMKei', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(256, 'Kitty Nicolas', 'rpfannerstill@example.net', '2024-01-22 15:32:00', '$2y$10$XdQO1lzFLJi21AJXo9sHwebu4p/hor1rOZrd8BLs9738BN.5KoF0q', 'DX9LwNlOlC', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(257, 'Magnus Schiller', 'jayce.hermiston@example.com', '2024-01-22 15:32:01', '$2y$10$dTfYvgnQrnEt2pcu.Z8/Luz2xtRoTDBQl9ktGjQv43eOa3pBH08fG', 'm3F47Xaa03', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(258, 'Ms. Myrtis McKenzie Jr.', 'luz.beahan@example.net', '2024-01-22 15:32:01', '$2y$10$8/9HvXOz6T6n3sANtS1TFuzszgFjsDkkpJaqxQYcDzhmkorw67OSe', 'z5jqEj1h9W', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(259, 'Willy Stiedemann', 'vprosacco@example.org', '2024-01-22 15:32:01', '$2y$10$Lz.XMdgtfRfjvSqZPa9Dm.6pPiU0VJG9AXmzuMqK/8At8aXk6yNcO', 'qR1mEhMSMC', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(260, 'Prof. Peyton Kovacek I', 'xstrosin@example.com', '2024-01-22 15:32:01', '$2y$10$yk2J.hbHlwtxZbP/Hnwi3.AE36g1jo7KPX0qS.Oqmw9RFlPyVlWwG', 'twaFqWtFSZ', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(261, 'Thora Padberg', 'irma.ullrich@example.net', '2024-01-22 15:32:01', '$2y$10$osjZJ.nqRg.nNEJfOeYa4O0ynC89O/PR3H1OymZlZg67li1bfxqva', 'PYDDU5tpUE', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(262, 'Lizeth Hermiston', 'bergnaum.lincoln@example.org', '2024-01-22 15:32:01', '$2y$10$y/fGHQI6aNwwrGRu4HgtpulhK75ltK0/EX6.SzGDQrsJcNhY4FCnu', 'wqZPE7gEC0', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(263, 'Diamond Prosacco', 'dschroeder@example.net', '2024-01-22 15:32:01', '$2y$10$GXF8JZ207zVP0inpLhOjT.8CbnSJIXosvDB.dAhOzyl/8hugfIhjG', 'b1ZgRVOrwp', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(264, 'Percy Howell IV', 'mayert.ashlee@example.com', '2024-01-22 15:32:01', '$2y$10$b9t5zUWPBxZD6V29Lj4Dje/ONh6jf4NpbpCE4wAcErRfcyYtEHQwK', 'XDj8jhk20M', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(265, 'Mrs. Scarlett Rodriguez', 'regan36@example.com', '2024-01-22 15:32:01', '$2y$10$j0mIi4M9/Q0xq.oD3q6hIOoF1ENvCBYlZzUfJTy6Eba/fdlJFdCxS', 'Wx2u5csc3o', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(266, 'Mallie Schmidt', 'cconroy@example.net', '2024-01-22 15:32:01', '$2y$10$g2zC2G5GlUsUSGpNzOyyo.oNJj9n7c5OZ09XIGrO/OA8FN.ptwhla', 'E3xxhIrL8j', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(267, 'Arnulfo Thiel', 'lindsay.kreiger@example.net', '2024-01-22 15:32:01', '$2y$10$jXJet4li0vjKy6TTfC1SaOMWsDHCLYf432q4xhsmIGI0Mv5XH5zwW', 'BcikRHeONd', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(268, 'Rahul Zboncak', 'corkery.piper@example.net', '2024-01-22 15:32:01', '$2y$10$tsvCFHU4bupHAn.3n7Uf4.Q7ZXzeWraeLX0VZhzopgCyTgfbtQXsC', 'H4te0VZZtx', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(269, 'Tianna Eichmann', 'harvey.retha@example.com', '2024-01-22 15:32:01', '$2y$10$1OJDE.yNvIXff14aTsGDMOZ7JZFHJwYkoNMNbUNDeJMM8NZmj8.B.', 'EieqbqGwUG', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(270, 'Gladys Daniel', 'kylie21@example.org', '2024-01-22 15:32:01', '$2y$10$QT3WlUi0.8pW3TuCC3l.d.lybti1NZIi9P2w5GghIpwJX8BdL8LQm', 'jCGRDzTjp7', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(271, 'Holly Goodwin', 'melany.weissnat@example.org', '2024-01-22 15:32:01', '$2y$10$efVHL8waP0ZqLbeZstm46eRwi0KjweTQHFixvK6L3VusN/6wio6l6', 'URFAtKHJwX', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(272, 'Bradly Gerhold', 'lheathcote@example.org', '2024-01-22 15:32:01', '$2y$10$l/pR53Hci.LEt.upjgHLYuq2Pn62hqMbJDPOVcpg6n.xuMwfpg6GW', 'nfZUD97xZ5', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(273, 'Miss Precious Balistreri Jr.', 'legros.myrtice@example.net', '2024-01-22 15:32:01', '$2y$10$sxuxFv.8ktM6XhyKBfi4AuZ7v0hRrinfQ9CeWHAD5sjOySjswARrS', 'HBKvPsXa2u', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(274, 'Arno Pacocha', 'nhoeger@example.net', '2024-01-22 15:32:02', '$2y$10$W8Rk/sCjJ2EH8ehxcPGDiObt12X3HuOEdOVfl5mhQQ2Gjr1PyPcGW', '3EMvoQLRJk', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(275, 'Moshe Zemlak Sr.', 'sylvan.willms@example.net', '2024-01-22 15:32:02', '$2y$10$ESlu/v/KXGCGSUzMtC1yjesAEbTQo35jwlrb9VTdlAZ0S8yycQLSa', 'dXgqOUWqSl', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(276, 'Kasandra Schinner', 'askiles@example.org', '2024-01-22 15:32:02', '$2y$10$bmhqT.5jxPQcpczmPKqAkOl42bIyUP7vWT2IF9hQN5pK3HSLTCsEu', 'WEL6SxqLBl', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(277, 'Lera Gerhold', 'humberto.oconner@example.com', '2024-01-22 15:32:02', '$2y$10$u2kYm0KaqTQqD6RQ3w7XFuDRdNWhnDYhaRihrBC0nm.IFo8/agJxq', 'GAukm1PRQ8', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(278, 'Patrick Spencer', 'herminio.haley@example.com', '2024-01-22 15:32:02', '$2y$10$8JDpOCiwtGsKP9EpPdT2Se5iM.ji94ZIXilTaaANt8Eyf9fiNpd36', 'Vxqu7VMZ35', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(279, 'Mrs. Marcella Leannon', 'narciso46@example.org', '2024-01-22 15:32:02', '$2y$10$qijbhZ0Gf3dj7xXmc4aUj.YOJtLljmCiHRNUu4KQKCDe.jv2qttLu', 'zulKmmfVj7', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(280, 'Danny Koss', 'zklein@example.net', '2024-01-22 15:32:02', '$2y$10$VizNoez4u3nXtFbZAh1diunOxg./mJrzFLZvlVm6Y/29n2RXOomKK', 'znEnbVBAZZ', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(281, 'Damion Spencer', 'jordyn83@example.org', '2024-01-22 15:32:02', '$2y$10$vLvBugG531llF7K4YP88f.pq2Q86W8PH0WDHwk87bJWjIq0zmMAWS', '6KuNXowa9V', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(282, 'Lisette Flatley', 'rupert81@example.net', '2024-01-22 15:32:02', '$2y$10$MYA18E2dKmA7PdPmML/ML.4BwhII2oIwMYNAM2eLcIUTcTSNAQAYa', 'PsSAzsYWZM', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(283, 'Shanie Hamill', 'kariane.bradtke@example.com', '2024-01-22 15:32:03', '$2y$10$fADDleaxNC14XRVLSSLYt.gSi/61cVk9kUzhtRQ1F/KFjx21RMsIm', 'nOd06d0qVJ', '2024-01-22 15:32:03', '2024-01-22 15:32:03'),
(284, 'Mr. Kurt Morissette', 'olittle@example.org', '2024-01-22 15:32:04', '$2y$10$0H9cWRoyqOuHi/j5gPx16OXiVjAhAp3tLwQYGP5FbPe4XPf/ZFbsK', '0zQNTnToGS', '2024-01-22 15:32:04', '2024-01-22 15:32:04'),
(285, 'Madelynn Schultz', 'jharris@example.org', '2024-01-22 15:32:04', '$2y$10$Y04X5BMVvML5dkK4oC3Yjuj.FfOKSIvRSoaEZjYBGZ8ZPbuXVI8qC', 'n3t5ecMSul', '2024-01-22 15:32:04', '2024-01-22 15:32:04'),
(286, 'Jonathan Bosco', 'swilderman@example.com', '2024-01-22 15:32:04', '$2y$10$MKYo4zyWznvnVcAkgRbop.cQnEhGwWgxTQVZ3G/AI/KodMO/6i9P.', 'FjRurKvuEc', '2024-01-22 15:32:04', '2024-01-22 15:32:04'),
(287, 'Beverly Roberts', 'wquigley@example.net', '2024-01-22 15:32:04', '$2y$10$LYC7AgtiUZps/mLQXUvBLOd0B1wBWizxAIZ32Js1.QVHpwOxiUuqS', 'jJDgmLKZ0N', '2024-01-22 15:32:04', '2024-01-22 15:32:04'),
(288, 'Dr. Riley Hegmann', 'lonie.bergnaum@example.org', '2024-01-22 15:32:04', '$2y$10$W9Z.L3X6cm1KZStSp0KIYOd6f20OjuqyKWNlQOfQKM8GY6YY6lby.', 'icAd7B5Mcb', '2024-01-22 15:32:04', '2024-01-22 15:32:04'),
(289, 'Kaela McClure', 'maribel13@example.net', '2024-01-22 15:32:04', '$2y$10$QRxbiAkiR9qn9vu2pHvuROMXuvrsL6jMncx2OKq2rVklMpXElPD1m', 'miMf7jUlmk', '2024-01-22 15:32:04', '2024-01-22 15:32:04'),
(290, 'Miss Matilda Wilderman', 'shanelle.little@example.net', '2024-01-22 15:32:04', '$2y$10$GI5XFhMzVSwFB3WtBSKZq.Pe1v.IyVkdGJNspVYR0pijqvK38qak.', 'GMDbZwK09R', '2024-01-22 15:32:04', '2024-01-22 15:32:04'),
(291, 'Vernon Frami', 'otha.west@example.net', '2024-01-22 15:32:04', '$2y$10$XPk3BEuheYjOPFTjiMSKKuUHts3NqtyYq7GHtjTyQzFCw8P/yN7.O', '39GOCIM2gr', '2024-01-22 15:32:04', '2024-01-22 15:32:04'),
(292, 'Joey Gleichner', 'isidro.dibbert@example.org', '2024-01-22 15:32:04', '$2y$10$zGWHoXVIJhquxBPiJW9Wv.KWkrsbGr72HZvBr.vQaR96mlh3cI9Oa', 'H0ubduJ34C', '2024-01-22 15:32:04', '2024-01-22 15:32:04'),
(293, 'Cielo Yundt', 'ethel30@example.com', '2024-01-22 15:32:04', '$2y$10$L6BEgAA4uVHIWqY9m7ToMeDGLUwlYR0eMJOJNLVPbl6hntKpu0gie', 'FNnJPIeROy', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(294, 'Maci Russel', 'otha94@example.net', '2024-01-22 15:32:05', '$2y$10$Y.tg0JYPWJYlB5fptqkmYeTOxaUclOxih/SyWZGxFNFIEEIxCQhhy', 'nxoYuZcrUO', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(295, 'Ayla Ebert', 'valentin11@example.org', '2024-01-22 15:32:05', '$2y$10$LyQ2UU0D.ZyS9hdFxes9zOEpdU.pi8CZzSjHtVY2i5lsHh./.QMg2', 'ORrJ82w94X', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(296, 'Annabelle Pfannerstill', 'mjacobson@example.com', '2024-01-22 15:32:05', '$2y$10$HcXLSAHJhuJdDflXV9FDcOEAQujA.tD/iv5ojQDlY65du2pHgh/I2', 'sLKnvWr5Dh', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(297, 'Dorcas Turner', 'simonis.melvin@example.org', '2024-01-22 15:32:05', '$2y$10$vvq80DZqhkvHrh2QvaWgVeUSYKG/iMqae76wdbDpdLlIo9JHEB1SG', 'U11BML6ofP', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(298, 'Dianna Wuckert', 'carey.pfeffer@example.org', '2024-01-22 15:32:05', '$2y$10$MUGuYRCrS7hr0BOZ6FqYwufTT6sIvYhqfZXianNW5H.zx3Z.BqJwe', 'lRH2qMxu8b', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(299, 'Kiera Schroeder', 'conner40@example.com', '2024-01-22 15:32:05', '$2y$10$nSqh3dxsf9Yb4JVFRKA0duZmiJfBx8voG1hj.yLA9/cho7mKX5mnq', 'WtWvdEswMn', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(300, 'Zita Cummings', 'stroman.annabel@example.net', '2024-01-22 15:32:05', '$2y$10$LTbC4xYCKJooPM.Ph3azpux1spzBi78AXwSMYvkJIu1KAJxO3RycC', 'D7ZvVtWZeL', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(301, 'Chauncey Schmidt', 'kari.brekke@example.org', '2024-01-22 15:32:05', '$2y$10$hfJwSHswechqP6lMR.pY3eqvO/79.BbnGZu1LgBe2HarCWZxfZFKC', '9ePTU8KXou', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(302, 'Dr. Abdul Robel', 'zgerlach@example.com', '2024-01-22 15:32:05', '$2y$10$QUlhgxm2N7TjmKm3tenCye3wWNz9Bdm29h8MWr3TxfMQzq8sRZZe6', 'vFDYttDmLQ', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(303, 'Iliana Marvin', 'will.carissa@example.org', '2024-01-22 15:32:05', '$2y$10$4EpqIcVTr0Lo6iOMwK3hXugVcjY1Lm1/yp/Ju.yadjO.BOloRlKuq', 'qq0IGTTQTT', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(304, 'Alaina Hammes', 'parker98@example.org', '2024-01-22 15:32:05', '$2y$10$z6FliTm8luUjKD90J6hF4u34Q/KrqmiCZyKFjFvtMQBNqkbmRVQya', '35skoBmDyl', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(305, 'Dr. Harvey Dickens V', 'ned.paucek@example.org', '2024-01-22 15:32:05', '$2y$10$VC/a2a3XSvtI1N00WkpaR.AJ7Fk2YWscOXoeSFRNYgoLrAZ7hYU12', 'lrcqmAGovX', '2024-01-22 15:32:05', '2024-01-22 15:32:05'),
(306, 'Lori Bernier', 'kautzer.trace@example.net', '2024-01-22 15:32:05', '$2y$10$Qn8uA4KmTeBoVPsPLl9PPuwwWWr51v5cYyfVVvFAzbCIYAfgzi8jG', 'igRKbO2gif', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(307, 'Johan Toy', 'elroy.altenwerth@example.net', '2024-01-22 15:32:06', '$2y$10$P2//oUfSj90JCGm8x8ctpuZor5pEWVBw2MKl./x8ppwVmhIzmjBbW', 'w9ixX4ZMeu', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(308, 'Zakary Hagenes', 'lakin.josh@example.com', '2024-01-22 15:32:06', '$2y$10$EV1KOHZKu9n49/G6F5ujA.E3lMfXTqXeTOR2cfiVHqxIflOqk9Xsy', '6FOrXXwGEs', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(309, 'Anais Corkery', 'cortez89@example.org', '2024-01-22 15:32:06', '$2y$10$6sJ4cXsH43ZGSrK25.KW1.onfODf0ph1EpkfWiaOeVfOpry2/x5wu', 'NcSTgt5tcI', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(310, 'Jenifer Ziemann', 'ifeest@example.net', '2024-01-22 15:32:06', '$2y$10$Z1WSWd4j1MlyaE9.tH8Qf.jQiUtz8plo5R5yNE0OIuy.EVcDD1k5G', '4ghQyPf0cN', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(311, 'Gregoria Kunze', 'lind.emanuel@example.org', '2024-01-22 15:32:06', '$2y$10$zcChR7s7RJAYKSS6ZA6jjuPcUOnb0eAV4fTlj808UZWqRPWHBc8xC', 'rhXOxCfq0m', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(312, 'Dr. Ansel Schulist', 'cthiel@example.org', '2024-01-22 15:32:06', '$2y$10$0dZa/LhoW0p.oVbartBdY.mfIZ/gzuYJFRGr3/OAO/fQNcM43G30u', 'n376Y2S8NZ', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(313, 'Dr. Franco Thiel Jr.', 'melany91@example.org', '2024-01-22 15:32:06', '$2y$10$/lkQMJwUpa.J.GrhUg4SLeGK9/u4.fnL3k53QKLRqkYJ/tWVuYKCy', '8IdSIZDNrv', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(314, 'Daphnee Rosenbaum III', 'kreiger.manuela@example.net', '2024-01-22 15:32:06', '$2y$10$9.KvoW001uDrTFb79mEbA.nWSn0uBiGzOnuNTWHtYWES9iz8GTF4G', 'l9aJF5Cq2a', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(315, 'Miss Elvie Casper DDS', 'quigley.kelvin@example.net', '2024-01-22 15:32:06', '$2y$10$TSTiQHzNJ6hzfKLG9dF5p.8Tjq45AhadaXDQ93IhBUfCnKn2CUgkm', 'QzCykT9b9M', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(316, 'Archibald Rau', 'osimonis@example.net', '2024-01-22 15:32:06', '$2y$10$X4j57UniimNOpMYn33CPAOCA3gkfhJ/KsmkPxwUS6jAQ6cxf4oV8m', 'dy7M6F0mP4', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(317, 'Quincy Hermann', 'doug.rogahn@example.com', '2024-01-22 15:32:06', '$2y$10$EPP8PBP9QbYwz7P9NkuOp.JINQYkEpwfjFJ2kdKSIR8aeeO.fl4N2', 'xgEK1jEYXx', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(318, 'Prof. Linwood Glover V', 'emilio.franecki@example.net', '2024-01-22 15:32:06', '$2y$10$64QBcljIH0oRNTcQs2iEuOBue03rscpcPSAKrK1HJWMzQFkqXIF/G', 'rcItygmF6H', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(319, 'Miss Elta Blanda V', 'bsipes@example.net', '2024-01-22 15:32:06', '$2y$10$eJPGReTKi6r4uA7KEFsBOejg5PY8ti.6henoNX57RRFZbL3J5uCCO', '3jIQqXwHwm', '2024-01-22 15:32:06', '2024-01-22 15:32:06'),
(320, 'Velva Kirlin DVM', 'ratke.lexus@example.net', '2024-01-22 15:32:06', '$2y$10$JrffriD8BQ99WMKxwe71OuqJFqmPmQyWsGpDOOXPo3xbv8KdOmtpO', '1Q77AUzAVH', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(321, 'Damaris Gislason MD', 'hoeger.frankie@example.org', '2024-01-22 15:32:07', '$2y$10$NK9Vs3/fKaZL6C/aaHqyOujTS2PXuSVr29iSpLZgK0W8oQh4yqjhG', 'oadVpdTRcF', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(322, 'Mr. Lew Howell', 'mcorwin@example.com', '2024-01-22 15:32:07', '$2y$10$wwdb4RSK4maUVKboTEx33uX1QleDXJ6p8XNCCC7AHXxTPycYaSZGO', '29IOpOUWWd', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(323, 'Lyda Emard', 'amanda93@example.net', '2024-01-22 15:32:07', '$2y$10$XWgbAlkbdJA6Z/JroKZ6cOeU2Q5VhwOAbEpD7CePt92nJOapbPAm.', 'm0CkGRQMz5', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(324, 'Tierra Fritsch', 'cormier.laura@example.com', '2024-01-22 15:32:07', '$2y$10$1XwE/OQGFbkivRGo8wBjouCKbgzScl1jTVr2deaTezQYj2eI8SPfG', 'jOWC4HqQq6', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(325, 'Cristian Lindgren', 'aharris@example.net', '2024-01-22 15:32:07', '$2y$10$bgQWCfFOqsMlYOgaVgJM2uqOElW8Zg7ErjGRhPrmL/PldglkR99Vy', '4H2M7YmfE4', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(326, 'Alexandrine Collins Sr.', 'keon.rath@example.com', '2024-01-22 15:32:07', '$2y$10$MO2XgVU0nQFXofS92aWhue5kac7ims.xNMmvQEZhFVdaycokI9Fw6', 'NeN7reO6Md', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(327, 'Ms. Brielle Rempel', 'francesca94@example.net', '2024-01-22 15:32:07', '$2y$10$4Vu.xq9UHl1xEOYsdUFZ0Ols/C/Ho3NvcUPQ0Q58XhOohSwFooOL2', '28vH9YvU5S', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(328, 'Rosendo Olson IV', 'eroberts@example.org', '2024-01-22 15:32:07', '$2y$10$/A1G.nUvw/DRRfzZDbAfmOwsxm8yK1vfctvKEMPuZYrRk4wBslcAm', 'IITWf2TUCP', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(329, 'Rosario Shanahan', 'smckenzie@example.net', '2024-01-22 15:32:07', '$2y$10$WxxwotqL2mhq8KDX/G8zeOpq5cJGpdNTJ13ivFGW1ZztlhBtr/lb2', 'mRpvUdoRSO', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(330, 'Mr. Korbin Hagenes', 'yesenia16@example.net', '2024-01-22 15:32:07', '$2y$10$a/QyuchlviArnYMh6NUf9eAc3ASWJCsm33PGCurmt5K.bKAsQHZ0u', '0IC3CgxVB3', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(331, 'Ova Mohr', 'jpacocha@example.net', '2024-01-22 15:32:07', '$2y$10$3ja4p1lEzutbnrNj/wKCE.ycLNstwgknQg0pLaxxy3AYRKXFuTkf2', 'XIhP0y0rxJ', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(332, 'Miss Hettie Cassin IV', 'rstoltenberg@example.net', '2024-01-22 15:32:07', '$2y$10$dv/PhgPZL0JYxZ6V.31pKetY0CIdnrjMt7Cj3jEzpyT0szU/px0OS', 'TvDY7aKTJg', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(333, 'Mr. Berry Stracke', 'deion26@example.com', '2024-01-22 15:32:07', '$2y$10$.vWGxW.4eq.HlZDBeeAHueQNeWbsNE22PwU5zgGhNNlMQmRpewbZG', 'aY9VNpf7BT', '2024-01-22 15:32:07', '2024-01-22 15:32:07'),
(334, 'Pedro Fadel MD', 'pfannerstill.logan@example.com', '2024-01-22 15:32:07', '$2y$10$J/8nMdLxAJbvM904/fqIOu9pXxhR4zZGAaLQYq2OV.l7HtwWJV2G2', 'LxQ3uYegC0', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(335, 'Nyah Olson', 'dokon@example.net', '2024-01-22 15:32:08', '$2y$10$cy42xM5YrQLFA5tUKpar3.vLirCn9RvfKX/cFMz2FIp1p.HYWR1ie', 'QCXG3IRvFT', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(336, 'Ardith Blanda', 'heller.enos@example.com', '2024-01-22 15:32:08', '$2y$10$O4bFsQ1et84NwP8Vw3NX4.Vqo88sBKYTyNb6oUWfZEPDiaWIYroS.', 'Bk01IzQHCh', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(337, 'Weldon Abshire', 'rhettinger@example.org', '2024-01-22 15:32:08', '$2y$10$1ZDIhgEvRbWzoupw3a4eze.YRTZsOj33Zr1u/qv1lEHBlXQyXIHZO', 'lroB5flyl1', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(338, 'Emmie Cummerata', 'vivian.collier@example.net', '2024-01-22 15:32:08', '$2y$10$jMl/TQFiPYU.Vjl4A2lVZe1/WhUIjzCnr.6FrnD3RlrGxaBgUoX1a', 'Eet9tg4poP', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(339, 'Vivian Kassulke', 'beverly.abbott@example.com', '2024-01-22 15:32:08', '$2y$10$TXXFMFEUb2fboZ1iaz5DHeRfUpO6CWAfvnlT7vUm0paINNbKf4wY2', '3cOXaiNiqT', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(340, 'Prof. Carroll Beer IV', 'hosea.kuhn@example.org', '2024-01-22 15:32:08', '$2y$10$ke5Q7yBNt4/1nzOHcnGhiOFx1enNMIq/Ur.Ssp3a.psCDTiSu.4c.', 'FK5NUSgH0p', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(341, 'Miss Sallie Hammes', 'hgreen@example.org', '2024-01-22 15:32:08', '$2y$10$vVjq8nT3oXxk21EbalO7u.YJFfOc123QHi/TwOvnn3.hEC8w/hlZe', 'sXK441mV5A', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(342, 'Nola Klocko', 'scotty45@example.com', '2024-01-22 15:32:08', '$2y$10$90yYoFiMWgprZjbG9UtTTe2O7zDpxNq2/19XujzlHNdyjKRx7GKDm', '9zxGtbYm8T', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(343, 'Rosemary Lakin', 'gwendolyn00@example.com', '2024-01-22 15:32:08', '$2y$10$CiBCVacCJTnqwwJFCdyNNueoEytTJneeikU3ZRjrW8AbA.PlJf562', 'sTUVFRbzzp', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(344, 'Wiley Yost', 'shea.bednar@example.com', '2024-01-22 15:32:08', '$2y$10$TnFy1tkYmYBlPEFeuHK4Bud9Uf74tFWsTOxddB3LGI2WWDaIldSMK', '0Y7O7ZRGOB', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(345, 'Jacinthe Kunze', 'herta39@example.org', '2024-01-22 15:32:08', '$2y$10$YvEf5KR1cJqNeYrP5takeOplGSMKHlyFQ.khktcAjb8wdy6tiIeoa', '1N6HliZ4OM', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(346, 'Linnie Bergstrom II', 'ian00@example.org', '2024-01-22 15:32:08', '$2y$10$kdKBMfkHi3AeF9CmTfVMKu46KBKUAQw3zUyumDdk0ELT8lfsaE0wS', '0xwiN40nLm', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(347, 'Yasmeen Goodwin', 'earnest88@example.com', '2024-01-22 15:32:08', '$2y$10$fJc7wPVw1xKX2/ZkIYQoGeX8V7I6fTojnGMOlBUXdhpwPjrg2iwvu', 'kmF6AoOg0I', '2024-01-22 15:32:08', '2024-01-22 15:32:08'),
(348, 'Eusebio Fritsch', 'elinor50@example.org', '2024-01-22 15:32:09', '$2y$10$/j./1q.Pn7A/vGwNAb9X5uBmmTKuLcLYTm/ig3YGdrdtFOz6osQVG', 'RIIzGNFwq1', '2024-01-22 15:32:09', '2024-01-22 15:32:09'),
(349, 'Marjorie Erdman', 'gunner91@example.net', '2024-01-22 15:32:09', '$2y$10$0z/55udRJvqSSlMj0FShcuqcyyqTumGO2HZhZoKeuXwoRikxLfBa.', 'n4cRIUE1jd', '2024-01-22 15:32:09', '2024-01-22 15:32:09'),
(350, 'Prof. Beaulah Waelchi Sr.', 'rkessler@example.net', '2024-01-22 15:32:09', '$2y$10$fOkKqbgjGRAg25pGc96Q5O81rpwGcDpJ5LwXH2HqxXudiyPvEV2Vq', 'ZVN7jfXMNr', '2024-01-22 15:32:09', '2024-01-22 15:32:09'),
(351, 'Prof. Janick Carter DDS', 'elissa.haley@example.net', '2024-01-22 15:32:09', '$2y$10$iOdjGKvXC3O.V7q3S3NuV.YO/79SSQQhlxUqTzwludST8JAzNqfLu', 'W7GXI70RsS', '2024-01-22 15:32:09', '2024-01-22 15:32:09'),
(352, 'Fern Reichel', 'ida85@example.org', '2024-01-22 15:32:09', '$2y$10$sIwhPupnMUvGZZ.KkegTx.WFLcDA0tUR3Mo8qkRdaeJKjnAtzx5hK', 'xH48v3YvDW', '2024-01-22 15:32:09', '2024-01-22 15:32:09'),
(353, 'Kouassi', 'atchinaymard10@gmail.com', '2024-01-22 16:00:11', '$2y$10$S/es84Njsrqg8E5GZepCVeKuwWdyP8D.nBDVCaQxKXjT4qIALTani', 'nXi6gNvZo61yp2TDxiOgHbV15MkNaGekUioQlPo5siQwiCJszaIDs9sQx9Ew', '2024-01-22 16:00:11', '2024-01-22 16:01:10'),
(354, 'Kodak Tech', 'kodak@gmail.com', '2024-01-22 16:03:41', '$2y$10$i8IeybLUYfSytsnD8Cm08edX9um4l7Alb40JvHqNb1VJqCCc4C7b6', NULL, '2024-01-22 16:03:41', '2024-01-22 16:03:41'),
(355, 'Administrateur', 'administrateur@elbargroup.com', '2024-01-23 13:08:20', '$2y$10$reW5YQ3Sdty/hEyaYvENnOyDlbqpEf0F94IO1Nvm0jxpDeYgBCzLi', NULL, '2024-01-23 13:08:20', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category_faqs`
--
ALTER TABLE `category_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category_forums`
--
ALTER TABLE `category_forums`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_user_id_unique` (`user_id`);

--
-- Index pour la table `demande_services`
--
ALTER TABLE `demande_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demande_services_client_id_index` (`client_id`),
  ADD KEY `demande_services_entreprise_id_index` (`entreprise_id`),
  ADD KEY `demande_services_service_id_index` (`service_id`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `entreprises_user_id_unique` (`user_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_id_secteur_foreign` (`id_secteur`),
  ADD KEY `faqs_id_categorie_foreign` (`id_categorie`);

--
-- Index pour la table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forums_id_categorie_foreign` (`id_categorie`);

--
-- Index pour la table `images_service_entreprises`
--
ALTER TABLE `images_service_entreprises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_service_entreprises_service_entreprise_id_foreign` (`service_entreprise_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id_user_foreign` (`id_user`),
  ADD KEY `news_id_categorie_foreign` (`id_categorie`);

--
-- Index pour la table `new_comments`
--
ALTER TABLE `new_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `new_comments_id_news_foreign` (`id_news`);

--
-- Index pour la table `notations`
--
ALTER TABLE `notations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notations_id_client_foreign` (`id_client`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `recompenses`
--
ALTER TABLE `recompenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recompenses_id_client_foreign` (`id_client`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Index pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Index pour la table `secteurs`
--
ALTER TABLE `secteurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `secteurs_departement_id_foreign` (`departement_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_departement_id_foreign` (`departement_id`);

--
-- Index pour la table `service_clients`
--
ALTER TABLE `service_clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_clients_user_id_unique` (`user_id`);

--
-- Index pour la table `service_entreprises`
--
ALTER TABLE `service_entreprises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_entreprises_service_id_index` (`service_id`),
  ADD KEY `service_entreprises_entreprise_id_index` (`entreprise_id`);

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
-- AUTO_INCREMENT pour la table `category_faqs`
--
ALTER TABLE `category_faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category_forums`
--
ALTER TABLE `category_forums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `demande_services`
--
ALTER TABLE `demande_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images_service_entreprises`
--
ALTER TABLE `images_service_entreprises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `new_comments`
--
ALTER TABLE `new_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `notations`
--
ALTER TABLE `notations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recompenses`
--
ALTER TABLE `recompenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `secteurs`
--
ALTER TABLE `secteurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `service_clients`
--
ALTER TABLE `service_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `service_entreprises`
--
ALTER TABLE `service_entreprises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `demande_services`
--
ALTER TABLE `demande_services`
  ADD CONSTRAINT `demande_services_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `demande_services_entreprise_id_foreign` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprises` (`id`),
  ADD CONSTRAINT `demande_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Contraintes pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD CONSTRAINT `entreprises_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_id_categorie_foreign` FOREIGN KEY (`id_categorie`) REFERENCES `category_faqs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faqs_id_secteur_foreign` FOREIGN KEY (`id_secteur`) REFERENCES `secteurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `forums`
--
ALTER TABLE `forums`
  ADD CONSTRAINT `forums_id_categorie_foreign` FOREIGN KEY (`id_categorie`) REFERENCES `category_forums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `images_service_entreprises`
--
ALTER TABLE `images_service_entreprises`
  ADD CONSTRAINT `images_service_entreprises_service_entreprise_id_foreign` FOREIGN KEY (`service_entreprise_id`) REFERENCES `service_entreprises` (`id`);

--
-- Contraintes pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_id_categorie_foreign` FOREIGN KEY (`id_categorie`) REFERENCES `category_news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `new_comments`
--
ALTER TABLE `new_comments`
  ADD CONSTRAINT `new_comments_id_news_foreign` FOREIGN KEY (`id_news`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `notations`
--
ALTER TABLE `notations`
  ADD CONSTRAINT `notations_id_client_foreign` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `recompenses`
--
ALTER TABLE `recompenses`
  ADD CONSTRAINT `recompenses_id_client_foreign` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `secteurs`
--
ALTER TABLE `secteurs`
  ADD CONSTRAINT `secteurs_departement_id_foreign` FOREIGN KEY (`departement_id`) REFERENCES `departements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_departement_id_foreign` FOREIGN KEY (`departement_id`) REFERENCES `departements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `service_clients`
--
ALTER TABLE `service_clients`
  ADD CONSTRAINT `service_clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `service_entreprises`
--
ALTER TABLE `service_entreprises`
  ADD CONSTRAINT `service_entreprises_entreprise_id_foreign` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprises` (`id`),
  ADD CONSTRAINT `service_entreprises_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
