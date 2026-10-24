-- IT0049 (Web System Technologies) - Technical Formative Assessment 6
-- Database Export File: POS Management System (From Arrays to Eloquent)
-- Matching TFA2 Schema: customers & users tables

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Angela Cruz', 'angela.cruz@example.com', '0917 123 4567', '2026-09-13 13:00:00', '2026-09-13 13:00:00'),
(2, 'Marco Santos', 'marco.santos@example.com', '0918 234 5678', '2026-09-13 13:05:00', '2026-09-13 13:05:00'),
(3, 'Beatrice Reyes', 'beatrice.reyes@example.com', '0919 345 6789', '2026-09-13 13:10:00', '2026-09-13 13:10:00'),
(4, 'Joshua Garcia', 'joshua.garcia@example.com', '0920 456 7890', '2026-09-13 13:15:00', '2026-09-13 13:15:00'),
(5, 'Nicole Mendoza', 'nicole.mendoza@example.com', '0921 567 8901', '2026-09-13 13:20:00', '2026-09-13 13:20:00');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$oie6x3InUZ2Sga2/9S1GU.tXrQSYw/a.TsK3pV/gqMB8i8UNMqH/G', 'Administrator', NULL, '2026-09-13 13:00:00', '2026-09-13 13:00:00'),
(2, 'admin01', '$2y$10$oie6x3InUZ2Sga2/9S1GU.tXrQSYw/a.TsK3pV/gqMB8i8UNMqH/G', 'Paolo Dela Cruz', NULL, '2026-09-13 13:00:00', '2026-09-13 13:00:00'),
(3, 'manager01', '$2y$10$oie6x3InUZ2Sga2/9S1GU.tXrQSYw/a.TsK3pV/gqMB8i8UNMqH/G', 'Sofia Ramos', NULL, '2026-09-13 13:05:00', '2026-09-13 13:05:00'),
(4, 'cashier01', '$2y$10$oie6x3InUZ2Sga2/9S1GU.tXrQSYw/a.TsK3pV/gqMB8i8UNMqH/G', 'Miguel Torres', NULL, '2026-09-13 13:10:00', '2026-09-13 13:10:00'),
(5, 'cashier02', '$2y$10$oie6x3InUZ2Sga2/9S1GU.tXrQSYw/a.TsK3pV/gqMB8i8UNMqH/G', 'Andrea Flores', NULL, '2026-09-13 13:15:00', '2026-09-13 13:15:00'),
(6, 'staff01', '$2y$10$oie6x3InUZ2Sga2/9S1GU.tXrQSYw/a.TsK3pV/gqMB8i8UNMqH/G', 'Daniel Lim', NULL, '2026-09-13 13:20:00', '2026-09-13 13:20:00');
