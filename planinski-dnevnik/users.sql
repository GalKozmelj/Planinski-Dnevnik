-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 11. feb 2019 ob 11.54
-- Različica strežnika: 10.1.35-MariaDB
-- Različica PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `hribolazci`
--

-- --------------------------------------------------------

--
-- Struktura tabele `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_slovenian_ci NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, 'gal', '$2y$10$pkyxWU5F5Qz8lEzCYSwXWOMCpxtO.VxmUaAIPQryLePlbMQeLpPOu', 'galnik.kozmelj@gmail.com', '2019-02-05', '2019-02-05', '5k0clAQ09biHbjxfnSeO8zSMseWvxJ72CSmSQfr29iSv7ILYGGFIHsaRF5l4'),
(2, 'lol', '$2y$10$ZWYAWDIN8dMJ2yxSGBlS0eTWxy9hGKMalLWrIA1j3C6Mo6J6NEaLO', 'lol@gmail.com', '2019-02-07', '2019-02-07', NULL);

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
