INSERT INTO `service_clients` (`id`, `user_id`, `nom`, `telephone`, `email`, `localisation`, `photo`, `created_at`, `updated_at`) VALUES
(3, 1, 'Administratrateur', '0103810998', 'Admin@gmail.com ', 'Abidjan ', '', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `service_clients`
--
ALTER TABLE `service_clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_clients_user_id_unique` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `service_clients`
--
ALTER TABLE `service_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `service_clients`
--
ALTER TABLE `service_clients`
  ADD CONSTRAINT `service_clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
