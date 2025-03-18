-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 18 mars 2025 à 20:29
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud_etudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(224) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id`, `prenom`, `nom`, `email`, `photo`) VALUES
(3, 'Gloria', 'ZINZINSOUHOU ', '', '0.jpg'),
(7, 'Joan ', 'HALL', 'joan.hall@example.com', '1.jpg'),
(8, 'Melissa', 'WOOD', 'melissa.wod@example.com', '0.jpg'),
(9, 'Emily', 'Finley', 'emily.finley@example.com', '11.jpg'),
(10, 'Tommy', 'Washington', 'tommy.washington@example.com', '28.jpg'),
(11, 'Cynthia', 'Anderson', 'cynthia.anderson@example.com', '37.jpg'),
(12, 'Sarah', 'Clements', 'sarah.clements@example.com', '43.jpg'),
(13, 'Angela', 'Case', 'angela.case@example.com', '60.jpg'),
(14, 'Kimberly', 'Carlson', 'kimberly.carlson@example.com', '43 (1).jpg'),
(15, 'Kathryn', 'Hawkins', 'kathryn.hawkins@example.com', '4.jpg'),
(16, 'Deborah', 'Booker', 'deborah.booker@example.com', '5.jpg'),
(17, 'Robin', 'Hobbs', 'robin.hobbs@example.com', '9.jpg'),
(18, 'Matthew', 'Frye', 'matthew.frye@example.com', '17.jpg'),
(19, 'Ronald', 'Cruz', 'ronald.cruz@example.com', '22.jpg'),
(20, 'Bruce', 'Greene', 'bruce.greene@example.com', '22.jpg'),
(21, 'Justin', 'Nolan', 'justin.nolan@example.com', '28.jpg'),
(22, 'Hector', 'Shaffer', 'hector.shaffer@example.com', '31.jpg'),
(23, 'Isaiah', 'Warren', 'isaiah.warren@example.com', '42.jpg'),
(24, 'Daniel', 'Roy', 'daniel.roy@example.com', '46.jpg'),
(25, 'Patricia', 'Garza', 'patricia.garza@example.com', '11.jpg'),
(26, 'Samantha', 'Howard', 'samantha.howard@example.com', '15 (1).jpg'),
(27, 'Donna', 'Acosta', 'donna.acosta@example.com', '17 (1).jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
