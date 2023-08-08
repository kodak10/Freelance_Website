INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user01@gmail.com', '2023-08-08 12:32:26', '$2y$10$tA73kSby8Br/dqlXoXi91OanNj/bv3Xm4ftaFl6MCw9WV8pYWkH0.', NULL, '2023-08-08 10:31:14', '2023-08-08 10:31:14'),
(2, 'Entreprise', 'entreprise01@gmail.com', '2023-08-08 12:32:18', '$2y$10$QN3.ZlYq3.lYGQG2owQUDecPK8sIrDSzF7N4UHaFZ19syviIGGQQa', NULL, '2023-08-08 10:31:40', '2023-08-08 10:31:40'),
(3, 'Admin', 'admin@gmail.com', '2023-08-08 12:31:59', '$2y$10$QN3.ZlYq3.lYGQG2owQUDecPK8sIrDSzF7N4UHaFZ19syviIGGQQa', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

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
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
