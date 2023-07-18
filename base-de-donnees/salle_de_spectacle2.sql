-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 18 juil. 2023 à 13:35
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

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

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE IF NOT EXISTS `artiste` (
  `num_arstiste` int(11) NOT NULL AUTO_INCREMENT,
  `nom_artiste` varchar(250) NOT NULL,
  PRIMARY KEY (`num_arstiste`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `artiste_representation`
--

DROP TABLE IF EXISTS `artiste_representation`;
CREATE TABLE IF NOT EXISTS `artiste_representation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_representation` int(11) NOT NULL,
  `num_artiste` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `artiste_representation_representation_num_representation` (`num_representation`),
  KEY `artiste_representation_artiste_num_artiste` (`num_artiste`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `num_piece` int(11) NOT NULL AUTO_INCREMENT,
  `lib_piece` varchar(250) NOT NULL,
  PRIMARY KEY (`num_piece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `piece_salle`
--

DROP TABLE IF EXISTS `piece_salle`;
CREATE TABLE IF NOT EXISTS `piece_salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_salle` int(11) NOT NULL,
  `num_piece` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `piece_salle_salle_num_salle` (`num_salle`),
  KEY `piece_salle_piece_num_piece` (`num_piece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `representation`
--

DROP TABLE IF EXISTS `representation`;
CREATE TABLE IF NOT EXISTS `representation` (
  `num_representation` int(11) NOT NULL AUTO_INCREMENT,
  `date_representation` date NOT NULL,
  `hdeb_representation` time NOT NULL,
  `hfin_representation` time NOT NULL,
  `num_salle` int(11) NOT NULL,
  `num_spectacle` int(11) NOT NULL,
  PRIMARY KEY (`num_representation`),
  KEY `representation_salle_num_salle` (`num_salle`),
  KEY `representation_spectacle_num_spectacle` (`num_spectacle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `num_salle` int(11) NOT NULL AUTO_INCREMENT,
  `capacite` int(11) NOT NULL,
  `type_salle` varchar(250) NOT NULL,
  `nom_pro` varchar(250) NOT NULL,
  `pre_pro` varchar(250) NOT NULL,
  `num_representation` int(11) NOT NULL,
  PRIMARY KEY (`num_salle`),
  KEY `salle_representation_num_representation` (`num_representation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `spectacle`
--

DROP TABLE IF EXISTS `spectacle`;
CREATE TABLE IF NOT EXISTS `spectacle` (
  `num_spectacle` int(11) NOT NULL AUTO_INCREMENT,
  `nom_spectacle` varchar(250) NOT NULL,
  `num_arstiste` int(11) NOT NULL,
  PRIMARY KEY (`num_spectacle`),
  KEY `spectacle_artiste_num_artiste` (`num_arstiste`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `cod_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `Libellé` text NOT NULL,
  PRIMARY KEY (`cod_ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ticket_representation`
--

DROP TABLE IF EXISTS `ticket_representation`;
CREATE TABLE IF NOT EXISTS `ticket_representation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `montant` int(11) NOT NULL,
  `nb_ticket` int(11) NOT NULL,
  `num_representation` int(11) NOT NULL,
  `cod_ticket` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ticket_representation_representation_num_representation` (`num_representation`),
  KEY `ticket_representation_ticket_cod_ticket` (`cod_ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `token`
--

DROP TABLE IF EXISTS `token`;
CREATE TABLE IF NOT EXISTS `token` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `token`
--

INSERT INTO `token` (`user_id`, `type`, `token`) VALUES
(11, 'VALIDATION_COMPTE', '649219d73e0fd'),
(12, 'VALIDATION_COMPTE', '64921b2c001ab'),
(13, 'VALIDATION_COMPTE', '64921b9fb3b25'),
(14, 'VALIDATION_COMPTE', '64921ca6e9ba9'),
(15, 'VALIDATION_COMPTE', '64921d28bb520'),
(17, 'VALIDATION_COMPTE', '64aed90008a7e'),
(18, 'VALIDATION_COMPTE', '64af21e4b04cf'),
(20, 'VALIDATION_COMPTE', '64af236844653'),
(21, 'VALIDATION_COMPTE', '64af72ab1718f'),
(22, 'VALIDATION_COMPTE', '64b5b9d1e7a04'),
(16, 'VALIDATION_COMPTE', '64b5c66e454aa');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenoms` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `profil` varchar(255) DEFAULT NULL,
  `est_actif` int(11) NOT NULL DEFAULT '0',
  `est_supprime` int(11) NOT NULL DEFAULT '0',
  `cree_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mis_a_jour_le` varchar(255) DEFAULT NULL,
  `client` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenoms`, `email`, `username`, `password`, `avatar`, `profil`, `est_actif`, `est_supprime`, `cree_le`, `mis_a_jour_le`, `client`) VALUES
(16, 'AGBEGNINOU', 'momo', 'madisonjdoss954@gmail.com', 'vegor', '6e498b8130f962b40326e3eb2253db93', NULL, NULL, 0, 0, '2023-07-08 09:55:15', NULL, 'client'),
(17, 'fabio', 'biobio', 'fabio123@gmail.com', 'bio', '973c61d96a7f26714c1bfb02fb4df9fd', NULL, NULL, 0, 0, '2023-07-12 16:46:55', NULL, 'client'),
(18, 'flora', 'maria', 'floramaria@gmail.com', 'malolo', '8163a2ea4dad02b7244794114720b227', NULL, NULL, 0, 0, '2023-07-12 21:57:56', NULL, 'client'),
(19, 'flora', 'maria', 'floramaria@gmail.com', 'malolo', '8163a2ea4dad02b7244794114720b227', NULL, NULL, 0, 0, '2023-07-12 21:58:47', NULL, 'client'),
(20, 'frejo', 'demain', 'demain@gmail.com', 'ojo', '11a106754fb6698e5a1f47f5ed0aaa06', NULL, NULL, 0, 0, '2023-07-12 22:04:24', NULL, 'client'),
(21, 'moumouni', 'isis', 'isomoumouni@gmail.com', 'isis', 'c069821833532463d138e5bdde2e15c5', NULL, NULL, 0, 0, '2023-07-13 03:42:35', NULL, 'client'),
(22, 'herman', 'herr', 'emaildemoi@gmail.com', 'herm', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, 0, 0, '2023-07-17 21:59:45', NULL, 'client'),
(23, 'madison', 'momo', 'madisonjdoss954@gmail.com', 'momo', '25f9e794323b453885f5181f1b624d0b', NULL, NULL, 0, 0, '2023-07-17 22:53:34', NULL, 'client'),
(24, 'madison', 'momo', 'madisonjdoss954@gmail.com', 'momo', '25f9e794323b453885f5181f1b624d0b', NULL, NULL, 0, 0, '2023-07-18 13:12:14', NULL, 'client'),
(25, 'modeste', 'momo', 'madisonjdoss954@gmail.com', 'momo', '25f9e794323b453885f5181f1b624d0b', NULL, NULL, 0, 0, '2023-07-18 13:12:52', NULL, 'client');

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
