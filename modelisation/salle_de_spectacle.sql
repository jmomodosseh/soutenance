-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 08 fév. 2023 à 15:55
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `salle_de_spectacle`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE `artiste` (
  `num_arstiste` int(11) NOT NULL,
  `nom_artiste` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `artiste_representation`
--

CREATE TABLE `artiste_representation` (
  `id` int(11) NOT NULL,
  `num_representation` int(11) NOT NULL,
  `num_artiste` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `num_piece` int(11) NOT NULL,
  `lib_piece` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `piece_salle`
--

CREATE TABLE `piece_salle` (
  `id` int(11) NOT NULL,
  `num_salle` int(11) NOT NULL,
  `num_piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `representation`
--

CREATE TABLE `representation` (
  `num_representation` int(11) NOT NULL,
  `date_representation` date NOT NULL,
  `hdeb_representation` time NOT NULL,
  `hfin_representation` time NOT NULL,
  `num_salle` int(11) NOT NULL,
  `num_spectacle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `num_salle` int(11) NOT NULL,
  `capacite` int(11) NOT NULL,
  `type_salle` varchar(250) NOT NULL,
  `nom_pro` varchar(250) NOT NULL,
  `pre_pro` varchar(250) NOT NULL,
  `num_representation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `spectacle`
--

CREATE TABLE `spectacle` (
  `num_spectacle` int(11) NOT NULL,
  `nom_spectacle` varchar(250) NOT NULL,
  `num_arstiste` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `cod_ticket` int(11) NOT NULL,
  `Libellé` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ticket_representation`
--

CREATE TABLE `ticket_representation` (
  `id` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `nb_ticket` int(11) NOT NULL,
  `num_representation` int(11) NOT NULL,
  `cod_ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artiste`
--
ALTER TABLE `artiste`
  ADD PRIMARY KEY (`num_arstiste`);

--
-- Index pour la table `artiste_representation`
--
ALTER TABLE `artiste_representation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artiste_representation_representation_num_representation` (`num_representation`),
  ADD KEY `artiste_representation_artiste_num_artiste` (`num_artiste`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`num_piece`);

--
-- Index pour la table `piece_salle`
--
ALTER TABLE `piece_salle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `piece_salle_salle_num_salle` (`num_salle`),
  ADD KEY `piece_salle_piece_num_piece` (`num_piece`);

--
-- Index pour la table `representation`
--
ALTER TABLE `representation`
  ADD PRIMARY KEY (`num_representation`),
  ADD KEY `representation_salle_num_salle` (`num_salle`),
  ADD KEY `representation_spectacle_num_spectacle` (`num_spectacle`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`num_salle`),
  ADD KEY `salle_representation_num_representation` (`num_representation`);

--
-- Index pour la table `spectacle`
--
ALTER TABLE `spectacle`
  ADD PRIMARY KEY (`num_spectacle`),
  ADD KEY `spectacle_artiste_num_artiste` (`num_arstiste`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`cod_ticket`);

--
-- Index pour la table `ticket_representation`
--
ALTER TABLE `ticket_representation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_representation_representation_num_representation` (`num_representation`),
  ADD KEY `ticket_representation_ticket_cod_ticket` (`cod_ticket`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artiste`
--
ALTER TABLE `artiste`
  MODIFY `num_arstiste` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `artiste_representation`
--
ALTER TABLE `artiste_representation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `num_piece` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `piece_salle`
--
ALTER TABLE `piece_salle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `representation`
--
ALTER TABLE `representation`
  MODIFY `num_representation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `num_salle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `spectacle`
--
ALTER TABLE `spectacle`
  MODIFY `num_spectacle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `cod_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ticket_representation`
--
ALTER TABLE `ticket_representation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `artiste_representation`
--
ALTER TABLE `artiste_representation`
  ADD CONSTRAINT `artiste_representation_artiste_num_artiste` FOREIGN KEY (`num_artiste`) REFERENCES `artiste` (`num_arstiste`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artiste_representation_representation_num_representation` FOREIGN KEY (`num_representation`) REFERENCES `representation` (`num_representation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `piece_salle`
--
ALTER TABLE `piece_salle`
  ADD CONSTRAINT `piece_salle_piece_num_piece` FOREIGN KEY (`num_piece`) REFERENCES `piece` (`num_piece`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `piece_salle_salle_num_salle` FOREIGN KEY (`num_salle`) REFERENCES `salle` (`num_salle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `representation`
--
ALTER TABLE `representation`
  ADD CONSTRAINT `representation_salle_num_salle` FOREIGN KEY (`num_salle`) REFERENCES `salle` (`num_salle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `representation_spectacle_num_spectacle` FOREIGN KEY (`num_spectacle`) REFERENCES `spectacle` (`num_spectacle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `salle_representation_num_representation` FOREIGN KEY (`num_representation`) REFERENCES `representation` (`num_representation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `spectacle`
--
ALTER TABLE `spectacle`
  ADD CONSTRAINT `spectacle_artiste_num_artiste` FOREIGN KEY (`num_arstiste`) REFERENCES `artiste` (`num_arstiste`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ticket_representation`
--
ALTER TABLE `ticket_representation`
  ADD CONSTRAINT `ticket_representation_representation_num_representation` FOREIGN KEY (`num_representation`) REFERENCES `representation` (`num_representation`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_representation_ticket_cod_ticket` FOREIGN KEY (`cod_ticket`) REFERENCES `ticket` (`cod_ticket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
