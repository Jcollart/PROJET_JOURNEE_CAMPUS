-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 02 sep. 2019 à 08:47
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `basetud`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

DROP TABLE IF EXISTS `administration`;
CREATE TABLE IF NOT EXISTS `administration` (
  `id_administration` int(11) NOT NULL AUTO_INCREMENT,
  `nom_administration` varchar(250) DEFAULT NULL,
  `prenom_administration` varchar(250) DEFAULT NULL,
  `pseudo_administration` varchar(250) DEFAULT NULL,
  `password_administration` varchar(250) DEFAULT NULL,
  `email_administration` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_administration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id_equipe` int(11) NOT NULL AUTO_INCREMENT,
  `nom_equipe` varchar(250) NOT NULL,
  PRIMARY KEY (`id_equipe`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id_equipe`, `nom_equipe`) VALUES
(13, 'bras cassÃ©'),
(14, 'bras cassÃ©'),
(15, 'tutu'),
(16, 'erer'),
(17, 'zegty');

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

DROP TABLE IF EXISTS `etape`;
CREATE TABLE IF NOT EXISTS `etape` (
  `id_point` int(11) NOT NULL,
  `id_equipe` int(11) NOT NULL,
  `temps` datetime DEFAULT NULL,
  PRIMARY KEY (`id_point`,`id_equipe`),
  KEY `etape_equipe0_FK` (`id_equipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_etudiant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) DEFAULT NULL,
  `prenom` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `participant` int(11) DEFAULT NULL,
  `cle` varchar(255) DEFAULT NULL,
  `typeform` varchar(255) DEFAULT NULL,
  `actif` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_etudiant`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `nom`, `prenom`, `password`, `email`, `mobile`, `participant`, `cle`, `typeform`, `actif`) VALUES
(23, NULL, 'jÃ©Ã´me', NULL, 'jejecollart@hotmail.com', 664589741, 1, NULL, 'CUISINE', NULL),
(24, NULL, 'jÃ©Ã´me', NULL, 'jejecollart@hotmail.com', 664589741, 1, NULL, 'CUISINE', NULL),
(25, 'fred', 'fred', 'trestres', 'j.collart@simplon-charleville.fr', 665857425, 4, 'cb73882c3560b659d3b3f08db22a2649', 'EXPRESS', NULL),
(26, NULL, 'heh', NULL, 'jerome@prestashop.com', 668953214, 1, NULL, 'CUISINE', NULL),
(27, 'aeyaerh', 'qrehr', NULL, 'jejecollart@hotmail.com', 658547896, 1, 'fb45e2c7b818364d75bef63fef900a78', 'WARRIOR', NULL),
(28, 'rgth', 'tjhkkeytk', NULL, 'jerome@prestashop.com', NULL, NULL, 'ae03ff5a213b5da1542d8fdbda1afd6a', 'PIQUE-NIQUE', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
CREATE TABLE IF NOT EXISTS `formulaire` (
  `id_formulaire` int(11) NOT NULL AUTO_INCREMENT,
  `etablissement` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_formulaire`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`id_formulaire`, `etablissement`) VALUES
(18, 'LABDA'),
(19, 'LABDA'),
(20, 'LMDS'),
(21, 'IUTRCC'),
(22, 'CFAI'),
(23, 'ESNAM');

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

DROP TABLE IF EXISTS `galerie`;
CREATE TABLE IF NOT EXISTS `galerie` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `nom_image` varchar(250) DEFAULT NULL,
  `id_administration` int(11) NOT NULL,
  `id_theme` int(11) NOT NULL,
  PRIMARY KEY (`id_image`),
  KEY `galerie_administration_FK` (`id_administration`),
  KEY `galerie_theme0_FK` (`id_theme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `liste_point`
--

DROP TABLE IF EXISTS `liste_point`;
CREATE TABLE IF NOT EXISTS `liste_point` (
  `id_point` int(11) NOT NULL AUTO_INCREMENT,
  `code_point` varchar(250) DEFAULT NULL,
  `question_point` text,
  `reponse1_point` varchar(250) DEFAULT NULL,
  `reponse2_point` varchar(250) DEFAULT NULL,
  `reponse3_point` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_point`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `relation`
--

DROP TABLE IF EXISTS `relation`;
CREATE TABLE IF NOT EXISTS `relation` (
  `id_equipe` int(11) NOT NULL,
  `id_formulaire` int(11) NOT NULL,
  PRIMARY KEY (`id_equipe`,`id_formulaire`),
  KEY `relation_formulaire0_FK` (`id_formulaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `remplirform`
--

DROP TABLE IF EXISTS `remplirform`;
CREATE TABLE IF NOT EXISTS `remplirform` (
  `id_formulaire` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  PRIMARY KEY (`id_formulaire`,`id_etudiant`),
  KEY `remplirform_etudiant0_FK` (`id_etudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `id_temoignage` int(11) NOT NULL AUTO_INCREMENT,
  `nom_temoignage` varchar(250) DEFAULT NULL,
  `photo_temoignage` varchar(250) DEFAULT NULL,
  `temoignage` text,
  `id_etudiant` int(11) NOT NULL,
  PRIMARY KEY (`id_temoignage`),
  KEY `temoignage_etudiant_FK` (`id_etudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `id_theme` int(11) NOT NULL AUTO_INCREMENT,
  `type_theme` varchar(250) NOT NULL,
  PRIMARY KEY (`id_theme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etape`
--
ALTER TABLE `etape`
  ADD CONSTRAINT `etape_equipe0_FK` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `etape_liste_point_FK` FOREIGN KEY (`id_point`) REFERENCES `liste_point` (`id_point`);

--
-- Contraintes pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD CONSTRAINT `galerie_administration_FK` FOREIGN KEY (`id_administration`) REFERENCES `administration` (`id_administration`),
  ADD CONSTRAINT `galerie_theme0_FK` FOREIGN KEY (`id_theme`) REFERENCES `theme` (`id_theme`);

--
-- Contraintes pour la table `relation`
--
ALTER TABLE `relation`
  ADD CONSTRAINT `relation_equipe_FK` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `relation_formulaire0_FK` FOREIGN KEY (`id_formulaire`) REFERENCES `formulaire` (`id_formulaire`);

--
-- Contraintes pour la table `remplirform`
--
ALTER TABLE `remplirform`
  ADD CONSTRAINT `remplirform_etudiant0_FK` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id_etudiant`),
  ADD CONSTRAINT `remplirform_formulaire_FK` FOREIGN KEY (`id_formulaire`) REFERENCES `formulaire` (`id_formulaire`);

--
-- Contraintes pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD CONSTRAINT `temoignage_etudiant_FK` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id_etudiant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
