INSERT INTO `departements` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Production / Boulangerie', '2023-08-08 11:29:40', NULL),
(2, 'Technologie / Energie', '2023-08-08 11:29:50', NULL),
(3, 'Auto / Moto', '2023-08-08 11:29:55', NULL),
(4, 'Bâtiment et Travaux Public', '2023-08-08 11:30:02', NULL),
(5, 'Formation Pro et Diplomatique', '2023-08-08 11:30:09', NULL),
(6, 'Assistances Finances, Juridiques', '2023-08-08 11:30:16', NULL),
(7, 'Voyage et Découverte', '2023-08-08 11:30:21', NULL),
(8, 'Environnement / Agriculture', '2023-08-08 11:30:29', NULL),
(9, 'Elevage', '2023-08-08 11:30:38', NULL),
(10, 'Emploi / Concours', '2023-08-08 11:30:51', NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
