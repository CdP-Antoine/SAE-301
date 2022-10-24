-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 oct. 2022 à 11:20
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `guerre_do`
--

-- --------------------------------------------------------

--
-- Structure de la table `clan_event`
--

CREATE TABLE `clan_event` (
  `id_clanevent` int(11) NOT NULL,
  `id_clan` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clan_event`
--

INSERT INTO `clan_event` (`id_clanevent`, `id_clan`, `id_event`) VALUES
(1, 1, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clan_event`
--
ALTER TABLE `clan_event`
  ADD PRIMARY KEY (`id_clanevent`),
  ADD KEY `id_clan` (`id_event`),
  ADD KEY `id_clan_2` (`id_clan`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clan_event`
--
ALTER TABLE `clan_event`
  MODIFY `id_clanevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clan_event`
--
ALTER TABLE `clan_event`
  ADD CONSTRAINT `clan_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clan_event_ibfk_2` FOREIGN KEY (`id_clan`) REFERENCES `clan` (`id_clan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
