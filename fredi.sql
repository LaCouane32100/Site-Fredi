-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 04 Décembre 2020 à 20:16
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `fredi`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherents`
--

CREATE TABLE IF NOT EXISTS `adherents` (
  `numero_licence` varchar(17) NOT NULL DEFAULT '',
  `sexe` varchar(4) DEFAULT NULL,
  `nom` varchar(10) DEFAULT NULL,
  `prenom` varchar(10) DEFAULT NULL,
  `dateNais` varchar(10) DEFAULT NULL,
  `adresse1` varchar(27) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `ville` varchar(17) DEFAULT NULL,
  `num_club` int(11) NOT NULL,
  PRIMARY KEY (`numero_licence`),
  KEY `numero_licence` (`numero_licence`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `adherents`
--

INSERT INTO `adherents` (`numero_licence`, `sexe`, `nom`, `prenom`, `dateNais`, `adresse1`, `cp`, `ville`, `num_club`) VALUES
('17 05 40 010 443', 'M', 'BANDILELLA', 'CLEMENT', '26/07/1998', '30, rue Widric 1er', '54600', 'Villers l', 1),
('17 05 40 010 340', 'F', 'BERBIER', 'LUCILLE', '24/03/1998', '12, rue de Marron', '54600', 'Villers l', 2),
(' 17 05 40 010 338', 'M', 'BERBIER', 'THEO', '24/03/1998', '12, rue de Marron', '54600', 'Villers l', 1),
(' 17 05 40 010 309', 'M', 'BECKER', 'ROMAIN', '28/03/1998', '1, rue des M', '54600', 'Villers l', 1),
('17 05 40 010 850', 'F', 'BIACQUEL', 'VERONIQUE', '09/12/1962', '27, rue de Santifontaine', '54000', 'Nancy', 2),
(' 17 05 40 010 399', 'F', 'BIDELOT', 'BRIGITTE', '20/09/1958', '5, rue des trois ', '54600', 'Villers l', 1),
(' 17 05 40 010 442', 'F', 'BIDELOT', 'JULIE', '30/11/1991', '5, rue des trois ', '54600', 'Villers l', 1),
(' 17 05 40 010 308', 'M', 'BILLOT', 'DIDIER', '24/09/1962', '6, rue de la Sapini', '54600', 'Villers l', 1),
(' 17 05 40 010 329', 'F', 'BILLOT', 'CLAIRE', '07/06/1963', '6, rue de la Sapini', '54600', 'Villers l', 1),
(' 17 05 40 010 254', 'F', 'BILLOT', 'MARIANNE', '28/09/1986', '6, rue de la Sapini', '54600', 'Villers l', 1),
('17 05 40 010 740', 'M', 'BINNET', 'MARIUS', '21/08/1997', '12, rue Edouard Grosjean', '54520', 'Laxou', 3),
(' 17 05 40 010 444', 'M', 'CALDI', 'THOMAS', '22/09/1998', '12, rue de Malz', '54000', 'Nancy', 1),
(' 17 05 40 010 431', 'M', 'CASTEL', 'TIMOTHE', '10/06/1998', '26, rue de l''abb', '54600', 'Villers l', 1),
(' 17 05 40 010 428', 'M', 'CHEOLLE', 'NICOLAS', '19/04/1983', '46, rue de l''abb', '54520', 'Laxou', 1),
(' 17 05 40 010 414', 'M', 'CHERPION', 'UGO', '24/09/1999', '63, rue Fran', '54000', 'Nancy', 1),
(' 17 05 40 010 441', 'M', 'CHEVOITINE', 'LOUIS', '29/03/1998', '40, rue de la r', '54320', 'Max', 1),
(' 17 05 40 010 440', 'M', 'CHOUARNO', 'TOM', '02/08/1999', '168, avenue de Boufflers', '54000', 'Nancy', 1),
(' 17 05 40 010 402', 'M', 'COTIN', 'FLORIAN', '15/04/1995', '14 route de Toul', '54113', 'Blenod les toul', 1),
(' 17 05 40 010 351', 'M', 'DEPERRIN', 'ARNAUD', '31/12/1982', '40 rue Paul Bert', '54600', 'Villers l', 1),
(' 17 05 40 010 409', 'F', 'DEPRETRE', 'BEATRICE', '27/01/1998', '26, rue du petit ', '54110', 'Buissoncourt', 1),
(' 17 05 40 010 446', 'M', 'DUCRICK', 'AUGUSTIN', '03/12/1996', '31, rue du chanoine Pierron', '54600', 'Villers l', 1),
(' 17 05 40 010 395', 'M', 'GARBILLON', 'GILLES', '08/07/1963', '31, avenue de Marron', '54600', 'Villers l', 1),
(' 17 05 40 010 337', 'M', 'GARBILLON', 'YANN', '21/03/1994', '31, avenue de Marron', '54600', 'Villers l', 1),
(' 17 05 40 010 382', 'F', 'HAGENBACH', 'CLEMENTINE', '26/11/1997', '19, rue de Lavaux', '54520', 'Laxou', 1),
(' 17 05 40 010 420', 'F', 'HASFELD', 'AUXANE', '08/03/1999', '32, all', '54520', 'Laxou', 1),
(' 17 05 40 010 341', 'F', 'HUMERT', 'ISABELLE', '04/06/1976', '4 rue du mar', '54600', 'Villers l', 1),
(' 17 05 40 010 432', 'M', 'LAFIEGLON', 'CLEMENT', '16/11/2002', '62, avenue Paul D', '54600', 'Villers l', 1),
(' 17 05 40 010 429', 'M', 'LAMOINE', 'GREGOIRE', '23/07/1993', '65, rue de la sivrite', '54600', 'Villers l', 1),
(' 17 05 40 010 419', 'M', 'LANIELLE', 'NICOLAS', '02/09/1998', '10, rue des orchid', '54600', 'Villers les Nancy', 1),
(' 17 05 40 010 401', 'M', 'LIEVIN', 'NATHAN', '24/01/1997', '42, rue de la commanderie', '54840', 'Sexey les bois', 1),
(' 17 05 40 010 439', 'M', 'LOTANG', 'CYPRIEN', '30/09/1999', '16, rue de Gerb', '54000', 'Nancy', 1),
(' 17 05 40 010 364', 'M', 'LUQUE', 'ETIENNE', '26/12/1951', '1, rue de Normandie', '54500', 'Vandoeuvre', 1),
(' 17 05 40 010 353', 'M', 'PERNOT', 'PAUL', '26/04/1996', '6, rue Winston Churchill', '54000', 'Nancy', 1),
(' 17 05 40 010 438', 'M', 'REMILLON', 'ELIOT', '13/11/2001', '3, rue de l''Embanie', '54520', 'Laxou', 1),
(' 17 05 40 010 121', 'M', 'SILBERT', 'GILLES', '03/01/1957', '2 , grande rue', '54210', 'Azelot', 1),
(' 17 05 40 010 447', 'F', 'SILBERT', 'LEA', '14/04/2000', '1, all', '54520', 'Laxou', 1),
(' 17 05 40 010 405', 'M', 'TORTEMANN', 'PIERRE', '13/10/1997', '34, rue de Badonviller', '54000', 'Nancy', 1),
(' 17 05 40 010 437', 'M', 'ZOECKEL', 'MATHIEU', '02/06/2000', '15, rue de la Seille', '54320', 'Max', 1),
(' 17 05 40 010 418', 'F', 'ZUEL', 'STEPHANIE', '25/09/1970', '8, sentier de Saint-Arriant', '54520', 'Laxou', 1),
(' 17 05 40 010 448', 'M', 'ZUERO', 'THOMAS', '14/08/2000', 'immeuble Savoie', '54520', 'Laxou', 1);

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `num_club` int(11) NOT NULL AUTO_INCREMENT,
  `nom_club` varchar(30) NOT NULL,
  `num_ligue` int(11) NOT NULL,
  PRIMARY KEY (`num_club`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `club`
--

INSERT INTO `club` (`num_club`, `nom_club`, `num_ligue`) VALUES
(1, 'Villeuf', 1),
(2, 'TFT', 2),
(3, 'Gardouch', 1),
(4, 'PSG', 1);

-- --------------------------------------------------------

--
-- Structure de la table `demandeurs`
--

CREATE TABLE IF NOT EXISTS `demandeurs` (
  `adresse_mail` varchar(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `rue` varchar(50) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `infoPers` text NOT NULL,
  PRIMARY KEY (`adresse_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `demandeurs`
--

INSERT INTO `demandeurs` (`adresse_mail`, `nom`, `prenom`, `rue`, `cp`, `ville`, `mdp`, `infoPers`) VALUES
('test1@gmail.com', 'moureu', 'romain', '107 rue françois baco', 32100, 'condom', 'test', '123');

-- --------------------------------------------------------

--
-- Structure de la table `lien`
--

CREATE TABLE IF NOT EXISTS `lien` (
  `num_licence` varchar(17) NOT NULL,
  `adresse_mail` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`num_licence`,`adresse_mail`),
  KEY `adresse-mail` (`adresse_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lignes_frais`
--

CREATE TABLE IF NOT EXISTS `lignes_frais` (
  `adresse_mail` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `motif` text NOT NULL,
  `trajet` varchar(30) NOT NULL,
  `km` int(11) NOT NULL,
  `cout_peage` decimal(5,2) NOT NULL,
  `cout_repas` decimal(5,2) NOT NULL,
  `cout_hebergement` decimal(5,2) NOT NULL,
  `km_valide` int(11) DEFAULT NULL,
  `peage_valide` decimal(5,2) DEFAULT NULL,
  `repas_valide` decimal(5,2) DEFAULT NULL,
  `hebergement_valide` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`adresse_mail`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lignes_frais`
--

INSERT INTO `lignes_frais` (`adresse_mail`, `date`, `motif`, `trajet`, `km`, `cout_peage`, `cout_repas`, `cout_hebergement`, `km_valide`, `peage_valide`, `repas_valide`, `hebergement_valide`) VALUES
('test1@gmail.com', '2020-10-02', '2', 'Paris-Bordeaux', 500, '100.00', '200.00', '50.00', NULL, NULL, NULL, NULL),
('test1@gmail.com', '2020-12-10', 'Compétition', 'Condom-Toulouse', 600, '200.00', '50.00', '150.00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ligues`
--

CREATE TABLE IF NOT EXISTS `ligues` (
  `n°` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `sigle` varchar(60) NOT NULL,
  `president` varchar(30) NOT NULL,
  PRIMARY KEY (`n°`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `ligues`
--

INSERT INTO `ligues` (`n°`, `nom`, `sigle`, `president`) VALUES
(1, 'Ligue de tennis', 'TN', 'Lui Marchand'),
(2, 'Ligue Foot', 'FT', 'Moi rady');

-- --------------------------------------------------------

--
-- Structure de la table `motifs`
--

CREATE TABLE IF NOT EXISTS `motifs` (
  `num_motifs` int(1) NOT NULL DEFAULT '0',
  `libelle` varchar(27) DEFAULT NULL,
  PRIMARY KEY (`num_motifs`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `motifs`
--

INSERT INTO `motifs` (`num_motifs`, `libelle`) VALUES
(1, 'Reunion'),
(2, 'Competition regionale'),
(3, 'Competition nationale'),
(4, 'Competition internationale'),
(5, 'Stage');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `lien`
--
ALTER TABLE `lien`
  ADD CONSTRAINT `lien_ibfk_1` FOREIGN KEY (`adresse_mail`) REFERENCES `demandeurs` (`adresse_mail`);

--
-- Contraintes pour la table `lignes_frais`
--
ALTER TABLE `lignes_frais`
  ADD CONSTRAINT `lignes@002dfrais_ibfk_1` FOREIGN KEY (`adresse_mail`) REFERENCES `demandeurs` (`adresse_mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
