-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Гру 08 2017 р., 11:36
-- Версія сервера: 5.6.37
-- Версія PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `testtask`
--

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `friend_id` int(11) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `friend_id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Администратор', 0, 'admin@test.com', '$2y$10$C8GA0ognIHlf.Dr0OwC75.hMqPbe7BLBtqN2iVpb/ZhxKZ/aE28X2', 'YtHROZlcLNpZ1VOOvG5A6wc8lkgOqu89xgPtC5Zl4FrFRA4wc13IDsGsmmN6', NULL, NULL),
(2, 'Менеджер1', 0, 'admin2@test.com', '$2y$10$O1RW87eZNv56BkEdAHNE9eIVbStqZ9b.fJskKh/QIYLxF60pGLVk2', NULL, NULL, NULL),
(3, 'Менеджер2', 0, 'pZ71PmKtFU@gmail.com', '$2y$10$/IYjzPZSLp2vqDn8qVgOeu8NP5wU2Tr5JcUj.MUzl6ebZNX/Axu2C', NULL, NULL, NULL),
(4, 'Пользователь1', 0, 'f95v7Dypxh@gmail.com', '$2y$10$ziM.s8rJxA2RY4fLvPHKW.id9Ql8Rld/4XIiWr4QAN600L3sho/VW', NULL, NULL, NULL),
(5, 'Пользователь2', 0, 'J6EnC3mVzg@gmail.com', '$2y$10$xZzY4cqpzf4JHBApadH9o.OIxg3UW6ce0VnowlJ7sY9PDsS9b2qgy', NULL, NULL, NULL),
(6, 'Пользователь3', 0, 'yjS8hGd4wJ@gmail.com', '$2y$10$Kv7ow0C8ihK6KCjvcqYALuN4pH.q1eJUl0cZGC2tU8r29ySBayPU2', NULL, NULL, NULL),
(7, 'Пользователь4', 0, '6UZNflgHLC@gmail.com', '$2y$10$pDz3W9nJLg/Ye5P4U2fsw.4h3GKOfA3P163oiK6PjDrkADyrihlfK', NULL, NULL, NULL),
(8, 'Пользователь5', 0, 'SaqgyyVrJz@gmail.com', '$2y$10$4dOiW4tuPY0JxCkTum0mmuh6SAOemm1rG8z.7xWyZJYByBmH2U/.i', NULL, NULL, NULL),
(9, 'Пользователь6', 0, 'L8EcTYDvWn@gmail.com', '$2y$10$9u8HHSFn1.GEtaR8yxLrZ.ucSraZXbuD6epWzD3TKXzmwctF1Q2l6', NULL, NULL, NULL);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
