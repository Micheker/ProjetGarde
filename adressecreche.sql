-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 10 avr. 2020 à 15:41
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `geoloc`
--

-- --------------------------------------------------------

--
-- Structure de la table `adressecreche`
--

DROP TABLE IF EXISTS `adressecreche`;
CREATE TABLE IF NOT EXISTS `adressecreche` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adressecreche`
--

INSERT INTO `adressecreche` (`id`, `lat`, `lng`) VALUES
(1, 0.000000, 0.000000),
(2, 0.000000, 0.000000),
(3, 0.000000, 0.000000),
(4, 0.000000, 0.000000),
(5, 49.452923, 1.085567),
(6, 49.462742, 1.116466);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
