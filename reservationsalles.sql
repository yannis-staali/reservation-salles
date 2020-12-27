-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : Dim 27 déc. 2020 à 12:17
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservationsalles`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`) VALUES
(21, 'hazbin', 'hazbin', '2020-12-23 15:00:00', '2020-12-23 16:00:00', 8),
(22, 'poneyclub', 'poneyclub', '2020-12-22 14:00:00', '2020-12-22 15:00:00', 7),
(24, 'YOKO', 'YOKO', '2021-01-15 15:00:00', '2021-01-15 16:00:00', 8),
(28, 'select ', 'select', '2020-12-22 10:00:00', '2020-12-22 11:00:00', 7),
(29, 'seloo', 'seloo', '2021-12-21 08:00:00', '2021-12-21 09:00:00', 7),
(30, 'last', 'last', '2020-12-25 09:00:00', '2020-12-25 10:00:00', 7),
(31, 'MARDI', 'MARDI', '2020-12-22 08:00:00', '2020-12-22 09:00:00', 7),
(33, 'BABOU', 'BABOU', '2020-12-31 08:00:00', '2020-12-31 09:00:00', 8),
(34, 'prot', 'prot', '2020-12-23 08:00:00', '2020-12-23 09:00:00', 7),
(35, 'crachtest', 'crachtest', '2020-12-24 10:00:00', '2020-12-24 11:00:00', 7),
(36, 'week1', 'week1', '2020-12-29 09:00:00', '2020-12-29 10:00:00', 7),
(37, 'weeekcheeeck', 'weeekcheeeck', '2020-12-31 15:00:00', '2020-12-31 16:00:00', 7),
(38, 'salut', 'salut', '2020-12-28 08:00:00', '2020-12-28 09:00:00', 7),
(39, 'bang', 'bang', '2020-12-30 12:00:00', '2020-12-30 13:00:00', 9),
(40, '2021', '2021', '2021-01-05 08:00:00', '2021-01-05 09:00:00', 9),
(42, 'bonne année', 'bonne année', '2021-01-25 09:00:00', '2021-01-25 10:00:00', 9),
(43, 'dd', 'dd', '2021-01-04 09:00:00', '2021-01-04 10:00:00', 9),
(44, 'thrill', 'thrill', '2021-01-06 12:00:00', '2021-01-06 13:00:00', 9),
(45, 'PREVU', 'PREVU', '2021-01-29 09:00:00', '2021-01-29 10:00:00', 9),
(46, 'prevu', 'prevu', '2021-01-08 09:00:00', '2021-01-08 10:00:00', 9),
(47, 'new ', 'new', '2021-01-11 10:00:00', '2021-01-11 11:00:00', 7),
(48, 'waiting', 'waiting', '2020-12-09 08:00:00', '2020-12-09 09:00:00', 7),
(49, 'goooo', 'gooooo', '2021-01-08 11:00:00', '2021-01-08 12:00:00', 7),
(50, 'again', 'again', '2021-01-12 11:00:00', '2021-01-12 12:00:00', 7);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(3, 'Lamachine-13', '$2y$10$EnbyT9QvylNtCGHlqFii..cCzgwmR9Y8jJeNFq6eIOvVOaHYMb/lK'),
(5, 'jaja', '$2y$12$mHqC0JWMoiKLtbH9LwEHKO207z3MZw204uLGh3AzlC5TGZPCxS0P.'),
(7, 'bibi', '$2y$10$0gdrET81koy6076suF2wY.mgIRQiEidmL.DM1XxzlU2vQTDL41ARG'),
(8, 'hazbin', '$2y$10$tYmPLINp9Zikq8vKO/AGxu8Bg9XYwFErHH1tRcYKv5auXxDM6yngG'),
(9, 'toto', '$2y$10$onOdnNdMqMHfyJ10oz0csOmwHQX4dL.wKd/b4yEwL8Ar9kAjmRn9C'),
(11, 'davidfincher', '$2y$10$NndhCuHB7ZzWQBStHWDgf.2FCf4W.5ET0MmF4JakDV9QYH8NK48ii'),
(12, 'john', '$2y$10$Bxnz6pbTP5E/dqFhHsEnReWMrBMoGYuU1h8Guw40vyD5AuQbnpv7K');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
