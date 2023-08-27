
INSERT INTO `entreprises` (`id`, `user_id`, `type_entreprise`, `num_inscription`, `approve`, `name`, `nationalite`, `telephone`, `email`, `regime`, `localisation`, `photo`, `created_at`, `updated_at`) VALUES
(1, 3, 'multinationale', '36454', '1', 'Entreprise', 'Ivoirienne', '0104810997', 'entreprise@gmail.com', 'CI2023', 'Abidjan cocosy', NULL, '2023-08-25 09:34:56', '2023-08-25 09:34:56'),
(2, 4, 'nationale', '50499', '0', 'Entreprise 2', 'Burkina', '22222', 'entreprise02@gmail.com', 'dster', 'Bamako', NULL, '2023-08-26 10:38:48', '2023-08-26 10:38:48');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `entreprises_user_id_unique` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD CONSTRAINT `entreprises_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
