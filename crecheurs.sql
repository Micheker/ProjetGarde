-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  Dim 19 avr. 2020 à 19:20
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
-- Base de données :  `crecheurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `creche_list`
--

DROP TABLE IF EXISTS `creche_list`;
CREATE TABLE IF NOT EXISTS `creche_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telephone` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `creche_list`
--

INSERT INTO `creche_list` (`id`, `slug`, `nom`, `description`, `adresse`, `telephone`) VALUES
(1, 'graffiti-s', 'Graffiti\'s', 'Les graffitis c\'est ça la joies des enfants.', '10 Rue Eustache de la Querière, 76000 Rouen', '0235720338'),
(2, 'le-jardin-des-bisous', 'Le Jardin des Bisous', 'Un jardin où l\'on accueille jeunes garçons et filles mais ils ne se font pas de bisous, ils jouent ensemble.', '68 Boulevard de l\'Europe, 76100 Rouen', '0235721045'),
(3, 'les-cherubins-de-rouen', 'Les Chérubins de Rouen', 'Apportez votre enfant nous sommes fiables.', '13 Rue Malouet, 76100 Rouen', '0634427149'),
(4, 'les-jeunes-pousses', 'Les Jeunes Pousses', 'Les enfants c\'est comme les fleurs, ça pousse et ça mûrit.', 'Rue des Peupliers, 76300 Sotteville-lès-Rouen', '0235630762'),
(5, 'liberty-creche', 'Liberty Crèche', 'Dans cette crèche, faites ce que vous voulez vous êtes libre.', '8 Rue Pouchet, 76000 Rouen', '0235889288'),
(6, 'rose-des-vents', 'Rose des Vents', 'Une crèche douce comme le vent.', '8 bis rue Le Verrier, 76000 Rouen', '0235002912'),
(7, 'abc-la-loupiote', 'ABC La Loupiote', 'ABC nous irons au bois.\r\nDEF ce ne sont pas des chiffres.', '1 Clos de l\'Aulnay, 76160 Darnétal', '0235083400'),
(8, 'baby-recre', 'Baby récré', 'Une crèche ça a aussi une récré comme les écoles et les collèges.', '5 rue Racine, 76000 Rouen', '0235709906'),
(9, 'les-petits-matelots', 'Les petits matelots', 'Que tout le monde viennent avec des vêtements de la marque \"Petit bateau\".', '2 rue Henri Gadeau de Kerville, 76100 Rouen', '0235700582'),
(10, 'les-oursons-malicieux', 'Les Oursons Malicieux', 'Les oursons malicieux c\'est quelque chose, les bisounours c\'est autre chose.', 'Rue Le Nôtre, 76300 Sotteville-lès-Rouen', '0232911545'),
(11, 'les-souris-dansent', 'Les souris dansent', 'Et oui, comme on le dit si bien quand les parents ne sont pas là, les \"souris\" dansent.', '2 Rue Jules Guesde, 76300 Sotteville-lès-Rouen', '0235737489'),
(12, 'graine-de-vanille', 'Graine de Vanille', 'Déposer votre enfant chez nous sera aussi agréable que de manger un yaourt aux fruits.', '30 Rue Newton, 76000 Rouen', '0235609985'),
(13, 'am-stram-gram', 'Am Stram Gram', 'Am Stram Gram, Pic et Pic et télégramme: NON\r\nAm Stram Gram, Pic et Pic et bourrégramme: NON\r\nAm Stram Gram, Pic et Pic et Colégram, Bour et Bour et Ratatam: D\'accord\r\nOuverture en décembre 2020', 'Parc du Madrillet, 76650 Petit-Couronne', '0767128466'),
(14, 'happy-zou', 'Happy Zou', 'EUHHHHH.....Sans commentaires.', '23/26 Quai du Havre, 76000 Rouen', '0278770917'),
(15, 'le-cafe-des-mouflets', 'Le Café Des Mouflets\r\n', 'Si vous voulez déposer vous petits grains de cafés dans cette crèche, ne les déposez pas dans une tasse de café forte, plutôt une tasse de café allongée.', '66 Rue Beauvoisine, 76000 Rouen', '0235885592'),
(16, 'maison-de-la-petite-enfance', 'Maison de la petite enfance\r\n', 'Ça y\'est mon enfant à trouvé son bonheur dans ce paradis, et le votre ?', '2 Place François Mitterrand, 76250 Déville-lès-Rouen', '0232823576'),
(17, 'neptune', 'Neptune', 'Vous allez entrer dans le sanctuaire du Dieu des Océans.', '1 Place des Coquets, 76130 Mont-Saint-Aignan', '0767484648'),
(18, 'crescendo', 'Crescendo', 'Houlà c\'est très Crescendo cet crèche.', '63 Rue Louis Pasteur, 76130 Mont-Saint-Aignan', '0276306230'),
(19, 'maman-les-p-tits-bateaux', 'Maman les P\'tits Bateaux', 'Pète et répète sont dans un bateau qui pète en premier ? Répète ! Pète et répète sont dans un bateau qui pète en premier ? Répète ! Pète et répète sont dans un bateau qui pète en premier ? Répète ! Pète et répète sont dans un bateau qui pète en premier ? Rohhhh...Ça suffit, maintenant !', '3 Rue François Herr, 76240 Le Mesnil-Esnard', '0232860504'),
(20, 'saturne', 'Saturne', 'Cet endroit est la meilleure garderie de tous les temps, c\'est vrai, posez la question à Michel.', '45 rue Cité Grenet, 76300 Sotteville-Lès-Rouen', '0767128466');

-- --------------------------------------------------------

--
-- Structure de la table `creche_user`
--

DROP TABLE IF EXISTS `creche_user`;
CREATE TABLE IF NOT EXISTS `creche_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `creche_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `creche_user`
--

INSERT INTO `creche_user` (`id`, `user_id`, `creche_id`, `created_at`, `modified_at`) VALUES
(1, '2', '5', '2020-04-06 13:26:00', '2020-04-06 13:32:36'),
(2, '2', '3', '2020-04-07 12:14:12', NULL),
(3, '1', '18', '2020-04-07 16:11:03', NULL),
(4, '1', '7', '2020-04-07 16:18:33', NULL),
(5, '2', '14', '2020-04-07 16:34:49', NULL),
(6, '2', '11', '2020-04-08 12:10:32', NULL),
(7, '1', '12', '2020-04-09 14:39:17', NULL),
(8, '1', '19', '2020-04-09 15:05:57', NULL),
(9, '3', '1', '2020-04-10 14:27:52', NULL),
(10, '1', '20', '2020-04-19 04:48:36', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `adresse`, `password`, `token`, `role`, `created_at`) VALUES
(1, 'caveamichel', 'sofien76@gmail.com', '25 rue du Bourg Palette', '$2y$10$Ee8ml2D4KcN1buJGMkJJCunwJPgm61cj8bUxmgWfOZFVlJy6G8vfK', 'a2WNxJjL4zpF6k19JPaKXsni2ZdJv7UBmFExR8bz7MoxZ6IMxwayGpQ9FUV0lPm6LAwjrIs0uL41RTG78z9H0ADMdyUquhzuzQXVUoNwS1MACROoS9NT5u14', 'users', '2019-12-03 09:14:03'),
(2, 'Sofien', 'sosobg76@hotmail.fr', '25+rue+du+Bourg+Geon', '$2y$10$YQH.K0cTrywChWvpyRmP5OPKUAIvns9ephvmivqy.3WIDJ7LFaeSy', 'cba2czv8X4rkxdcuaDOwl3d79fWdrDwbvQ6ja98LTryNsSO6aSZA6UPyDgDKlO8vt3TyIEpvgbKouoihXVDD0KsS5rqjJUasKMkP70bof8BDimx1uyqF1u5uxqHzKXu2H1eYMGVSB19m3ga99GiAGmxsce1nE1zf4koA16FL8yhpby66wWpqf1iQ3DSKVjAUMf80NmvY', 'users', '2020-04-06 11:06:23'),
(3, 'Loanlink', 'link91past@gmail.com', '28+rue+du+pass%C3%A9', '$2y$10$pJPvzWV1R2GInS9V2KNVHezQR3O5qDDoS9qpUG9vwDiP8uXnmHHDq', 'jRoxpIyCzbyCNVRfs6f4H9z0rjJVmOmHQ0NLyRKAkS61dMGWs0AcdLnAxVAStLD8lxHafdaRyLAgecEvIUqE2ElyiHZRLEkX4xzA5H3b80DJbuOhCOoO7ayw', 'users', '2020-04-10 14:25:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
