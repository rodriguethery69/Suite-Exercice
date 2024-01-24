-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 jan. 2024 à 18:00
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbmovie_utopia`
--

-- --------------------------------------------------------

--
-- Structure de la table `director`
--

DROP TABLE IF EXISTS `director`;
CREATE TABLE IF NOT EXISTS `director` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `director`
--

INSERT INTO `director` (`id`, `name`) VALUES
(14, 'Abdellatif Kechiche\r\n\r\n'),
(15, 'Christopher Nolan\r\n\r\n'),
(16, 'Francis Ford Coppola\r\n\r\n'),
(17, 'Frank Darabont\r\n'),
(18, 'Jonathan Demme\r\n'),
(19, 'Olivier Nakache\r\n'),
(20, 'Peter Jackson\r\n'),
(21, 'Quentin Tarantino\r\n'),
(22, 'Robert Zemeckis\r\n'),
(23, 'Sergio Leone\r\n'),
(24, 'Sidney Lumet\r\n'),
(25, 'Steven Spielberg\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `distribution_compagny`
--

DROP TABLE IF EXISTS `distribution_compagny`;
CREATE TABLE IF NOT EXISTS `distribution_compagny` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(110) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `distribution_compagny`
--

INSERT INTO `distribution_compagny` (`id`, `name`) VALUES
(1, 'Columbia Pictures\r\n'),
(2, 'Gaumont Film Company\r\n'),
(3, 'Miramax Films\r\n'),
(4, 'New Line Cinema\r\n'),
(5, 'Orion Pictures\r\n'),
(6, 'Paramount Pictures\r\n'),
(7, 'The Weinstein Company\r\n'),
(8, 'United Artists\r\n'),
(9, 'Universal Pictures\r\n'),
(10, 'Warner Bros\r\n'),
(11, 'Wild Bunch\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Drama'),
(2, 'Crime'),
(3, 'Action'),
(4, 'Fantasy'),
(5, 'Western'),
(6, 'Comedy'),
(7, 'Thriller'),
(8, 'War'),
(9, 'Romance');

-- --------------------------------------------------------

--
-- Structure de la table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
(1, 'English\r\n'),
(2, 'Sicilian\r\n'),
(3, 'German\r\n'),
(4, 'Yiddish'),
(5, 'Italian\r\n'),
(6, 'Spanish'),
(7, 'French\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `rating` float NOT NULL,
  `year_released` int NOT NULL,
  `box_office` bigint NOT NULL,
  `budget` bigint NOT NULL,
  `duration` int NOT NULL,
  `distribution_company_id` int NOT NULL,
  `genreID` int NOT NULL,
  `directorID` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `distribution_company_id` (`distribution_company_id`),
  KEY `genreID` (`genreID`),
  KEY `directorID` (`directorID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `rating`, `year_released`, `box_office`, `budget`, `duration`, `distribution_company_id`, `genreID`, `directorID`) VALUES
(1, 'The Shawshank Redemption\r\n', 9.2, 1994, 73300000, 25000000, 142, 1, 1, 17),
(2, 'Intouchables\r\n', 8.5, 2011, 426600000, 10800000, 112, 2, 6, 19),
(3, 'Pulp Fiction\r\n', 8.8, 1994, 213900000, 8500000, 154, 3, 2, 21),
(4, 'The Lord of the Rings: The Return of the King\r\n', 8.9, 2003, 1146000000, 94000000, 201, 4, 4, 20),
(5, 'The Lord of the Rings: The Fellowship of the Ring\r\n', 8.8, 2001, 898200000, 93000000, 178, 4, 4, 20),
(6, 'The Silence of the Lambs\r\n', 8.6, 1991, 272700000, 19000000, 118, 5, 7, 18),
(7, '12 Angry Men\r\n', 9, 1957, 2000000, 340000, 96, 5, 1, 24),
(8, 'The Godfather\r\n', 9.2, 1972, 291000000, 7200000, 175, 6, 2, 16),
(9, 'The Godfather Part II\r\n', 9, 1974, 93000000, 13000000, 202, 6, 2, 16),
(10, 'Inglourious Bastards\r\n', 8.4, 2009, 321500000, 125500000, 153, 7, 8, 21),
(11, 'The Good, the Bad and the Ugly\r\n', 8.8, 1966, 38900000, 1200000, 161, 8, 5, 23),
(12, 'Forrest Gump\r\n', 8.7, 1994, 677400000, 55000000, 142, 9, 1, 22),
(13, 'Schindler\'s List\r\n', 8.9, 1993, 322200000, 22000000, 195, 9, 1, 25),
(14, 'The Dark Knight\r\n', 9, 2008, 1006000000, 185000000, 152, 10, 3, 15),
(15, 'La Vie d\'Adèle\r\n', 7.7, 2013, 19000000, 4000000, 180, 11, 9, 14);

-- --------------------------------------------------------

--
-- Structure de la table `movie_language`
--

DROP TABLE IF EXISTS `movie_language`;
CREATE TABLE IF NOT EXISTS `movie_language` (
  `movieID` int NOT NULL,
  `languageID` int NOT NULL DEFAULT '1',
  KEY `movieID` (`movieID`),
  KEY `languageID` (`languageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `movie_language`
--

INSERT INTO `movie_language` (`movieID`, `languageID`) VALUES
(8, 1),
(14, 1),
(9, 1),
(9, 2),
(6, 1),
(12, 1),
(12, 3),
(12, 4),
(3, 1),
(2, 1),
(4, 1),
(11, 1),
(11, 5),
(11, 6),
(13, 1),
(1, 7),
(7, 1),
(10, 1),
(10, 3),
(10, 7),
(10, 5),
(15, 7);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`distribution_company_id`) REFERENCES `distribution_compagny` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movies_ibfk_2` FOREIGN KEY (`genreID`) REFERENCES `genre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movies_ibfk_3` FOREIGN KEY (`directorID`) REFERENCES `director` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `movie_language`
--
ALTER TABLE `movie_language`
  ADD CONSTRAINT `movie_language_ibfk_1` FOREIGN KEY (`movieID`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_language_ibfk_2` FOREIGN KEY (`languageID`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
