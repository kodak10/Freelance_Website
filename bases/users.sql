
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2023-08-25 08:40:23', '$2y$10$dabO9.xb7loll56zr5yoiertoGlcDnn1RLu/yByoJ0qV4tE43bmz.', NULL, '2023-08-25 08:40:23', '2023-08-25 08:40:23'),
(2, 'Client', 'test@gmail.com', '2023-08-25 09:32:03', '$2y$10$.jdxJMFNUdOXmU5EY7IMGO4t6QRuRw/Ye.e/ScpYgPa18bouUlL7W', NULL, '2023-08-25 09:32:03', '2023-08-25 09:32:03'),
(3, 'Entreprise', 'entreprise@gmail.com', '2023-08-25 09:34:56', '$2y$10$rKOgkpujO1utlyM/4buRHO3qizo/zwd2CVF4KSSsmJKsgnjLsR8Wq', NULL, '2023-08-25 09:34:56', '2023-08-25 09:34:56'),
(4, 'Entreprise 2', 'entreprise02@gmail.com', '2023-08-26 10:38:48', '$2y$10$euzZJ5M6O5MX82TFmmoEHOJTpqXrzoMcwcrGL9HKGWvIWoMSodNv.', NULL, '2023-08-26 10:38:48', '2023-08-26 10:38:48'),
(5, 'Tata', 'gertrude.oyewumi@uvci.edu.ci', '2023-08-27 09:03:42', '$2y$10$fshTUo19BXAsqewBh84vxu4wH/p/Q5M9AjywQgPYc5RKfDZueL0Yu', NULL, '2023-08-27 09:03:42', '2023-08-27 09:03:42');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
