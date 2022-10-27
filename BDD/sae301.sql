-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 oct. 2022 à 16:29
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae301`
--

-- --------------------------------------------------------

--
-- Structure de la table `clan`
--

CREATE TABLE `clan` (
  `id_clan` int(11) NOT NULL,
  `titre` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clan`
--

INSERT INTO `clan` (`id_clan`, `titre`, `description`, `img`) VALUES
(1, 'Clan Liostra', 'Regroupement des occupants de Lioussac et d\'Estrapade, ce clan réunit par affinité deux Isles aux valeurs semblables. Mélangez des gros lourdauds équipés de vos pires cauchemars, un manque conséquent de logique, et une barbarie renommée. Vous vous trouvez à Liostra. Faites gaffe à vos arrières.', 'Clans/carreliostra.png'),
(2, 'Clan Viguera', 'Alliance entre les Isles de Miramande et de la Viguerie, cette faction est le résultat d\'une longue bonne entente entre les deux quartiers. Ses habitants sont intelligents et ont un bon sens de l\'observation, leur meilleure arme est la parole. Viguera est le clan de la culture, de la poésie et du bon sens.', 'Clans/carreviguera.png'),
(3, 'Clan Paylen', 'Panaveyres et Papelengue se sont découvert lors d\'une quête commune pendant les tensions en ville. Ils fonctionnent désormais ensemble et compose Paylen. C\'est un clan stratège mais pataud, ils savent quoi faire mais ont souvent du mal à l\'exécuter. Ils sont auteur de l\'enlèvement de Lorin Valora (Femme du chef de la Liostra). Vous n\'êtes pas à l\'abris de leurs dagues, restez vigilant.', 'Clans/carrepaylen.png'),
(4, 'Clan Morafen', 'Rassemblement entre Morafède et Garamentes, c\'est un clan composé suite à un accord avec d\'un côté, des forgerons, des armuriers, sans doute les meilleurs de la région, et de l\'autre côté, des commerçants pragmatiques et autoritaires. Leur but est de récupérer les clés de la ville pour remettre de l’ordre dans cette histoire.', 'Clans/carremorafen.png');

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

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `info` text NOT NULL,
  `id_lieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id_event`, `titre`, `description`, `info`, `id_lieu`) VALUES
(1, 'L\'Assemblée', 'Rendez-vous mensuel réunissant tous les clans à chaque pleine lune. Une trêve temporaire est mise en place.', 'Le soir de la pleine lune, sur l\'île', 3),
(2, 'Rendez-vous ds guérisseurs', 'Les guérisseurs de chaque clans se retrouvent pour partager des visions du Clan des Etoiles', 'Chaque demi-lunes, le soir à la source de Lune', 4),
(3, 'Passage d\'apprenti à guerrier', 'Cérémonie officielle de clan où un apprenti obtient son nom de guerrirer', 'Sur le tas de roches, le soleil au zénith ', 1),
(4, 'oui', 'oui', 'oui', 7),
(5, 'oui', 'oui', 'oui', 9),
(6, 'oui', 'oui', 'oui', 9),
(7, 'oui', 'oui', 'oui', 5);

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id_lieu` int(11) NOT NULL,
  `titre` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id_lieu`, `titre`, `description`, `img`) VALUES
(1, 'Jardin Henri Vinay (Est)', 'Camp de base du clan Viguera, rival du clan Paylen qui se trouve de l\'autre côté du jardin. Des rumeurs circule sur une potentielle bataille dans la partie inoccupée du jardin.', 'Lieux/1-jardin-est.jpg'),
(2, 'Places du Plot et de la Halle', 'Camp de base du clan Liostra. C\'est l\'un des points avec le plus de passage de la ville. Qui sait qui pourrait se fondre dans la foule.', 'Lieux/2-place-du-plot.jpg'),
(3, 'Marché Couvert', 'Camp de base du clan Morafen. Il est difficile de savoir ce qu\'il s\'y passe et la sécurité y est particulièrement renforcée pour une raison obscure.', 'Lieux/3-marché-couvert.jpg'),
(4, 'Jardin Henri Vinay (Ouest)', 'Campement du clan Paylen, rival du clan Viguera qui se trouve de l\'autre côté du jardin. Certain disent qu\'un affrontement va avoir lieu dans la partie non-occupée du jardin.', 'Lieux/4-jardin-ouest.jpg'),
(5, 'La Place du Breuil', 'Espace positionné entre les camps de base des 4 clans, il pourrait vite devenir un champ de bataille. En dehors de ce probable incident, c\'est aussi le lieu où les p\'tits guerriers pourront d\'adonner à toute sorte d\'activités enfantines.', 'Lieux/5-place-du-breuil.jpg'),
(6, 'Jardin Henri Vinay (Sud)', 'Partie du jardin n\'étant pas encore sous l\'emprise de l\'un des 2 clans logeant sur ses flans. Les risques qu\'un combat violent éclate en ce lieu sont très élevés.', 'Lieux/6-jardin-sud.jpg'),
(7, 'Cathédrale Notre-Dame', 'Lieu de culte réputé dans toute l\'Europe. Elle serait le point d\'arrivée d\'une mystérieuse escorte liée aux clés de la ville.', 'Lieux/7-cathédrale.jpg'),
(8, 'Place Cadelade', 'Espace de représentation d\'un groupe de joyeux troubadours. Étant un peu isolé des camps de base des différents clans, il ets peu probable qu\'ils aient un lien avec l\'un d\'eux.', 'Lieux/8-place-cadelade.jpg'),
(9, 'Bois de Bonneterre', 'Bien à l\'écart de la ville, ce bois serait le lieu de refuge de Fjorsën Ivar, actuel détenteur des clés de la ville.', 'Lieux/9-bois-de-bonneterre.jpg'),
(10, 'Chapelle Saint-Clair', 'Située à l\'extérieur de la ville, ce leiu de culte servirait de point de rendez-vous entre des personnages importants de chacun des clans pour des raisons inconnues.', 'Lieux/10-chapelle-saint-clair.jpg'),
(11, 'Place de la Mairie', 'Espace de représentation d\'un groupe de joyeux troubadours. Ils seraient liés au clan Liostra, campant non-loin.', 'Lieux/11-place-de-la-mairie.jpg'),
(12, 'Théâtre', 'Réserve d\'armes, de matériaux, et bien. Plusieurs clans pourraient être intéressés par ces richesses. ', 'Lieux/12-theatre.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `id_participant` int(11) NOT NULL,
  `nom` varchar(70) NOT NULL,
  `prenom` varchar(70) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `pro` tinyint(1) NOT NULL,
  `id_clan` int(11) NOT NULL,
  `certificat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`id_participant`, `nom`, `prenom`, `mail`, `age`, `pro`, `id_clan`, `certificat`) VALUES
(1, 'Etoile de Feu', 'Rusty', 'mail.chat', 40, 1, 1, 'https://youtu.be/dQw4w9WgXcQ'),
(2, 'Etoile', 'Solitaire', 'mail2.chat', 55, 1, 2, 'https://www.youtube.com/watch?v=7A6GzKniAl4'),
(3, 'Nuage', 'de Prune', 'apprenti.mail1chat', 13, 0, 4, ''),
(4, 'Patte', 'de Brume', 'mail.apprenti.chaton', 11, 0, 3, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clan`
--
ALTER TABLE `clan`
  ADD PRIMARY KEY (`id_clan`);

--
-- Index pour la table `clan_event`
--
ALTER TABLE `clan_event`
  ADD PRIMARY KEY (`id_clanevent`),
  ADD KEY `id_clan` (`id_event`),
  ADD KEY `id_clan_2` (`id_clan`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_lieu` (`id_lieu`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id_lieu`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id_participant`),
  ADD KEY `id_clan` (`id_clan`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clan`
--
ALTER TABLE `clan`
  MODIFY `id_clan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `clan_event`
--
ALTER TABLE `clan_event`
  MODIFY `id_clanevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id_lieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `id_participant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clan_event`
--
ALTER TABLE `clan_event`
  ADD CONSTRAINT `clan_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clan_event_ibfk_2` FOREIGN KEY (`id_clan`) REFERENCES `clan` (`id_clan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_lieu`) REFERENCES `lieu` (`id_lieu`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `participant`
--
ALTER TABLE `participant`
  ADD CONSTRAINT `participant_ibfk_1` FOREIGN KEY (`id_clan`) REFERENCES `clan` (`id_clan`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
