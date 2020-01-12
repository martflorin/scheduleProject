-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: ian. 12, 2020 la 03:49 PM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `scheduleproject`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `alege`
--

CREATE TABLE `alege` (
  `id` int(100) NOT NULL,
  `id_profesor` int(100) NOT NULL,
  `sala` int(10) NOT NULL,
  `zi` varchar(10) NOT NULL,
  `interval_timp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `sala`
--

CREATE TABLE `sala` (
  `id` int(100) NOT NULL,
  `zi` varchar(10) NOT NULL,
  `interval_timp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(100) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `prenume` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `parola` varchar(40) NOT NULL,
  `materie_predata` varchar(30) NOT NULL,
  `nr_seminarii` int(50) NOT NULL,
  `nr_cursuri` int(50) NOT NULL,
  `nr_alegeri` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `alege`
--
ALTER TABLE `alege`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`id_profesor`) USING BTREE;

--
-- Indexuri pentru tabele `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `alege`
--
ALTER TABLE `alege`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `sala`
--
ALTER TABLE `sala`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `alege`
--
ALTER TABLE `alege`
  ADD CONSTRAINT `alege_ibfk_1` FOREIGN KEY (`id_profesor`) REFERENCES `utilizatori` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
