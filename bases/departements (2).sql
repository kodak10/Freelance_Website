INSERT INTO `departements` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'EMPLOI / CONCOURS', '2023-08-25 08:44:31', NULL),
(2, 'ELEVAGE', '2023-08-25 08:44:38', NULL),
(3, 'ENVIRONNEMENT / AGRICULTURE', '2023-08-25 08:44:46', NULL),
(4, 'VOYAGE ET DÉCOUVERTE', '2023-08-25 08:44:52', NULL),
(5, 'ASSISTANCES FINANCES, JURIDIQUES', '2023-08-25 08:44:59', NULL),
(6, 'FORMATION PRO ET DIPLOMATIQUE', '2023-08-25 08:45:05', NULL),
(7, 'BÂTIMENT ET TRAVAUX PUBLICS', '2023-08-25 08:45:11', NULL),
(8, 'AUTO / MOTO', '2023-08-25 08:45:16', NULL),
(9, 'TECHNOLOGIE / ENERGIE', '2023-08-25 08:45:22', NULL),
(10, 'PRODUCTION / BOULANGERIE', '2023-08-25 08:45:27', NULL),
(11, 'Administrative', '2023-08-25 08:47:30', NULL),
(12, 'Bourse Trading', '2023-08-25 08:47:34', NULL),
(13, 'Cryptomonnaie', '2023-08-25 08:47:38', NULL),
(14, 'Métier du Secteur Informel', '2023-08-25 08:47:43', NULL),
(15, 'Politique / Diplomatique', '2023-08-25 08:47:49', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;