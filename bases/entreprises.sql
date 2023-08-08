INSERT INTO `entreprises` (`id`, `user_id`, `type_entreprise`, `num_inscription`, `approve`, `name`, `nationalite`, `telephone`, `email`, `regime`, `localisation`, `photo`, `created_at`, `updated_at`) VALUES
(1, 2, 'nationale', '25233', '0', 'Entreprise', 'Ivoirienne', '0101010101', 'entreprise01@gmail.com', 'eee', 'eee', NULL, '2023-08-08 10:31:40', '2023-08-08 10:31:40');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
