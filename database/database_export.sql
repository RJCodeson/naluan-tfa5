-- IT0049 (Web System Technologies) - Technical Formative Assessment 5
-- Database Export File: POS Management System
-- Generated: 2026-10-17

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `membership` varchar(255) NOT NULL DEFAULT 'Regular',
  `total_spent` varchar(255) NOT NULL DEFAULT '₱0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `address`, `membership`, `total_spent`, `created_at`, `updated_at`) VALUES
(101, 'Juan Dela Cruz', 'juan.delacruz@example.com', '+63 917 123 4567', '123 Rizal Avenue, Manila', 'VIP', '₱24,500.00', '2026-10-17 13:50:00', '2026-10-17 13:50:00'),
(102, 'Maria Clara Santos', 'maria.santos@example.com', '+63 918 234 5678', '456 Mabini Street, Quezon City', 'Regular', '₱8,920.00', '2026-10-17 13:50:00', '2026-10-17 13:50:00'),
(103, 'Antonio Luna', 'antonio.luna@example.com', '+63 919 345 6789', '789 Luna Boulevard, San Juan', 'VIP', '₱31,450.00', '2026-10-17 13:50:00', '2026-10-17 13:50:00'),
(104, 'Gabriela Silang', 'gabriela.silang@example.com', '+63 920 456 7890', '101 Ilocos Road, Pasig City', 'Regular', '₱12,300.00', '2026-10-17 13:50:00', '2026-10-17 13:50:00'),
(105, 'Jose Rizal', 'jose.rizal@example.com', '+63 921 567 8901', '55 Calamba Way, Makati City', 'VIP', '₱45,120.00', '2026-10-17 13:50:00', '2026-10-17 13:50:00'),
(106, 'Melchora Aquino', 'melchora.aquino@example.com', '+63 922 678 9012', '88 Banlat Road, Caloocan City', 'Regular', '₱6,750.00', '2026-10-17 13:50:00', '2026-10-17 13:50:00');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Juan Dela Cruz', 'admin.juan@possystem.local', '$2y$12$e8YQ...', '2026-10-17 13:50:00', '2026-10-17 13:50:00'),
(2, 'Maria Clara Santos', 'maria.cashier@possystem.local', '$2y$12$e8YQ...', '2026-10-17 13:50:00', '2026-10-17 13:50:00'),
(3, 'Antonio Luna', 'antonio.mgr@possystem.local', '$2y$12$e8YQ...', '2026-10-17 13:50:00', '2026-10-17 13:50:00'),
(4, 'Gabriela Silang', 'gabriela.inv@possystem.local', '$2y$12$e8YQ...', '2026-10-17 13:50:00', '2026-10-17 13:50:00'),
(5, 'Jose Rizal', 'jose.sup@possystem.local', '$2y$12$e8YQ...', '2026-10-17 13:50:00', '2026-10-17 13:50:00'),
(6, 'Melchora Aquino', 'melchora.acct@possystem.local', '$2y$12$e8YQ...', '2026-10-17 13:50:00', '2026-10-17 13:50:00');
