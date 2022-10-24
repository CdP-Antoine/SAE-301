-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 oct. 2022 à 11:27
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
(1, 'Clan du tonnerre', 'Le Clan du Tonnerre (  Angl.  ThunderClan ) est un des quatre Clans de chats sauvages de la forêt. Le premier chef et fondateur du Clan, Étoile du Tonnerre, a été baptisé ainsi en allusion au Chemin du Tonnerre, et, par extension, le Clan a été nommé ainsi.Un magnifique clan tah la guerre des clans ces livres sont trop biens jle jure même maintenant je peux chialer devant des lettres sur du papier', 'https://static.wikia.nocookie.net/lgdc/images/d/df/Clan_du_Tonnerre.jpg/revision/latest?cb=20131005203850&path-prefix=fr'),
(2, 'Clan du vent', 'Le Clan du Vent ( Angl. WindClan ) est l\'un des quatre clans de chats dont l\'histoire est racontée dans la série La guerre des Clans. Leurs ancêtres appartiennent au Clan des Étoiles. Les chats du Clan du Vent aiment les grands espaces et vivent dans une lande où ils attrapent essentiellement des lièvres et des lapins.', 'https://static.wikia.nocookie.net/lgdc/images/b/b8/Clan_du_Vent.jpg/revision/latest?cb=20131116204927&path-prefix=fr'),
(3, 'Clan de la rivière', 'Le Clan de la Rivière ( Angl. RiverClan ) est un des quatre clans de chats dont l\'histoire est racontée dans la série La guerre des Clans. Il a été fondé par Rivière. Leurs ancêtres appartiennent au Clan des Étoiles', 'https://static.wikia.nocookie.net/lgdc/images/e/e0/Clan_de_la_Rivi%C3%A8re.jpg/revision/latest?cb=20140826164128&path-prefix=fr'),
(4, 'Clan de l\'ombre', 'Le Clan de l\'Ombre ( Angl. ShadowClan ) est un des quatre Clans de chats dont l\'histoire est racontée dans la série La guerre des Clans. Leur territoire est composé d\'une forêt de pins et de marécages. Les chats du Clan de l\'Ombre sont de bons chasseurs nocturnes.', 'https://static.wikia.nocookie.net/lgdc/images/5/57/Clan_de_l%27Ombre.jpg/revision/latest?cb=20131005203958&path-prefix=fr');

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
(3, 'Passage d\'apprenti à guerrier', 'Cérémonie officielle de clan où un apprenti obtient son nom de guerrirer', 'Sur le tas de roches, le soleil au zénith ', 1);

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
(1, 'Camp du tonnerre', 'Camp de chat au coeur de la forêt, lieu de camp du Clan du Tonnerre', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Foret.JPG/1200px-Foret.JPG'),
(2, 'Camp de la Rivière', 'Camp du Clan de la rivière, à proximité d\'un cours d\'eau', 'https://www.aquaportail.com/pictures1212/riviere.jpg'),
(3, 'L\'île', 'Ile appartenant à aucun des clans\r\nAccessible par un tronc d\'arbre couché', 'https://img.freepik.com/photos-gratuite/petite-ile-au-milieu-du-lac-dans-sud-norvege_181624-28090.jpg'),
(4, 'Source de Lune', 'Petit cours d\'eau perché dans les rochers. La légende raconte que les êtres buvant cette eau sacrée sont en contact avec les étoiles.', 'https://static.wikia.nocookie.net/lgdc/images/2/29/Source_de_Lune.png/revision/latest?cb=20160704163044&path-prefix=fr');

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
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id_lieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
