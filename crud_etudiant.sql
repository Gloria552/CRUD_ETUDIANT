-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 avr. 2025 à 06:21
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
  `statut` enum('Passe','Double') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Double',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id`, `prenom`, `nom`, `email`, `photo`, `statut`) VALUES
(8, 'Melissa', 'WOOD', 'melissa.wod@example.com', '0.jpg', ''),
(9, 'Emily', 'Finley', 'emily.finley@example.com', '11.jpg', ''),
(10, 'Tommy', 'Washington', 'tommy.washington@example.com', '28.jpg', ''),
(11, 'Cynthia', 'Anderson', 'cynthia.anderson@example.com', '37.jpg', ''),
(12, 'Sarah', 'Clements', 'sarah.clements@example.com', '43.jpg', ''),
(13, 'Angela', 'Case', 'angela.case@example.com', '60.jpg', ''),
(14, 'Kimberly', 'Carlson', 'kimberly.carlson@example.com', '43 (1).jpg', ''),
(15, 'Kathryn', 'Hawkins', 'kathryn.hawkins@example.com', '4.jpg', ''),
(16, 'Deborah', 'Booker', 'deborah.booker@example.com', '5.jpg', ''),
(17, 'Robin', 'Hobbs', 'robin.hobbs@example.com', '9.jpg', ''),
(18, 'Matthew', 'Frye', 'matthew.frye@example.com', '17.jpg', ''),
(19, 'Ronald', 'Cruz', 'ronald.cruz@example.com', '22.jpg', ''),
(20, 'Bruce', 'Greene', 'bruce.greene@example.com', '22.jpg', ''),
(21, 'Justin', 'Nolan', 'justin.nolan@example.com', '28.jpg', ''),
(22, 'Hector', 'Shaffer', 'hector.shaffer@example.com', '31.jpg', ''),
(23, 'Isaiah', 'Warren', 'isaiah.warren@example.com', '42.jpg', ''),
(24, 'Daniel', 'Roy', 'daniel.roy@example.com', '46.jpg', ''),
(25, 'Patricia', 'Garza', 'patricia.garza@example.com', '11.jpg', ''),
(26, 'Samantha', 'Howard', 'samantha.howard@example.com', '15 (1).jpg', ''),
(27, 'Donna', 'Acosta', 'donna.acosta@example.com', '17 (1).jpg', ''),
(28, 'Keith', 'Maldonado', 'keith.maldonado@example.com', '19.jpg', ''),
(29, 'Shawna', 'Green', 'shawna.green@example.com', '27.jpg', ''),
(30, 'Vanessa', 'Chambers', 'vanessa.chambers@example.com', '28 (1).jpg', ''),
(31, 'Sean', 'Combs', 'sean.combs@example.com', '0 (1).jpg', ''),
(32, 'Dennis', 'Walker', 'dennis.walker@example.com', '23.jpg', ''),
(33, 'Kristen', 'Schaefer', 'kristen.schaefer@example.com', '30.jpg', ''),
(34, 'Erik', 'Salas', 'erik.salas@example.com', '20.jpg', ''),
(35, 'Jerry', 'Morales', 'jerry.morales@example.com', '21.jpg', ''),
(36, 'Mary', 'Moss', 'mary.moss@example.com', '31 (1).jpg', ''),
(38, '', 'Chavez', 'joseph.chavez@example.com', '2.jpg', ''),
(50, 'Smith ', 'michael', 'michael.smith@example.com', '82.jpg', ''),
(51, 'Booth ', 'paul', 'paul.booth@example.com', '23.jpg', ''),
(52, 'Martinez', 'todd', 'todd.martinez@example.com', '64.jpg', ''),
(53, 'Lane ', 'april', 'april.lane@example.com', '54.jpg', ''),
(54, 'Lopez', 'kristy', 'kristy.lopez@example.com', '53.jpg', ''),
(55, 'Terrell ', 'matthew', 'matthew.terrell@example.com', '55.jpg', ''),
(56, 'Riddle', 'amber', 'amber.riddle@example.com', '13.jpg', ''),
(57, 'King', 'jason', 'jason.king@example.com', '65 (1).jpg', ''),
(58, 'Cantu', 'diane', 'diane.cantu@example.com', '65.jpg', ''),
(59, 'Payne ', 'larry', 'larry.ayne@example.com', '85.jpg', ''),
(60, 'Fleming', 'wanda', 'wanda.fleming@example.com', '67.jpg', ''),
(61, 'Baldwin ', 'jessica', 'jessica.baldwin@example.com', '69.jpg', ''),
(62, 'Berry', 'paul', 'paul.berry@example.com', '85 (2).jpg', ''),
(63, 'Johnson', 'stacey', 'stacey.johnson@example.com', '2.jpg', ''),
(64, 'Harris ', 'michael', 'michael.harris@example.com', '83.jpg', ''),
(65, 'Harris ', 'michael', 'michael.harris@example.com', '71.jpg', ''),
(66, 'Williams', 'Lynn', 'Lynn.williams@example.com', '93.jpg', ''),
(67, 'Crawford', 'chad', 'chad.crawford@example.com', '77.jpg', ''),
(68, 'Lopez ', 'joshua', 'joshua.lopez@example.com', '62.jpg', ''),
(69, 'Lopez', 'anthony', 'anthony.lopez@example.com', '0 (1).jpg', ''),
(70, 'Smith ', 'anthony', 'anthony.smith@example.com', '54 (1).jpg', ''),
(71, 'Johnson ', 'justin', 'justin.johnson@example.com', '2.jpg', ''),
(72, 'Bowman ', 'alicia', 'alicia.bowman@example.com', '6.jpg', ''),
(73, 'Wheeler', 'michael', 'michael.wheeler@example.com', '1.jpg', ''),
(74, 'Miller', 'matthew', 'matthew.miller@example.com', '20.jpg', ''),
(75, 'Robinson', 'scott', 'scott.robinson@example.com', '24.jpg', ''),
(76, 'Saunders', 'andrea', 'andrea.saunders@example.com', '19.jpg', ''),
(77, 'Norton ', 'julie', 'julie.norton@example.com', '52.jpg', ''),
(78, 'Carter', 'diane', 'diane.carter@example.com', '5.jpg', ''),
(79, 'Smith ', 'walter', 'walter.smith@example.com', '70.jpg', ''),
(80, 'Gonzalez', 'holly', 'holly.gonzalez@example.com', '48.jpg', ''),
(81, 'Garcia', 'anthony', 'anthony.garcia@example.com', '76.jpg', ''),
(82, 'Bennett', 'elizabeth', 'elizabeth.bennett@example.com', '30.jpg', ''),
(83, 'Lynn ', 'lisa', 'lisa.lynn@example.com', '69.jpg', ''),
(84, 'Kim ', 'shane', 'shane.kim@example.com', '60.jpg', ''),
(85, 'Parker', 'zachary', 'zachary.parker@example.com', '78.jpg', ''),
(86, 'Jackson ', 'tammy', 'tammy.jackson@example.com', '50.jpg', ''),
(87, 'Sanchez', 'christina', 'christina.sanchez@example.com', '61.jpg', ''),
(88, 'Weber', 'lawrence', 'lawrence.weber@example.com', '32.jpg', ''),
(89, 'Delgado', 'courtney', 'courtney.delgado@example.com', '73.jpg', ''),
(90, 'Herrera', 'chris', 'chris.herrera@example.com', '94 (1).jpg', ''),
(91, 'White', 'ryan', 'ryan.white@example.com', '52.jpg', ''),
(92, 'Smith', 'emily', 'emily.smith@example.com', '11.jpg', ''),
(93, 'Adams', 'erika', 'erika.adams@example.com', '39.jpg', ''),
(94, 'Larson', 'yvette', 'yvette.larson@example.com', '4.jpg', ''),
(95, 'Hartman', 'destiny', 'destiny.hartman@example.com', '54.jpg', ''),
(96, 'Lewis', 'ryan', 'ryan.lewis@example.com', '42.jpg', ''),
(97, 'Liu', 'frank', 'frank.liu@example.com', '82.jpg', ''),
(98, 'Jackson', 'richard', 'richard.jackson@ecxample.com', '77.jpg', ''),
(99, 'Yates', 'christopher', 'christopher.Yates@example.com', '93.jpg', ''),
(100, 'Griffith', 'laura', 'laura.griffith@example.com', '4.jpg', ''),
(101, 'Bauer', 'eric', 'eric.bauer@example.com', '17.jpg', ''),
(102, 'Collins ', 'amber', 'amber.collins@example.com', '2.jpg', ''),
(103, 'Duncan', 'rachel', 'rachel.duncan@example.com', '64.jpg', ''),
(104, 'Garcia', 'eric', 'eric.garcia@example.com', '11.jpg', ''),
(105, 'Floyd', 'katie', 'katie.floyd@example.com', '64 (1).jpg', ''),
(106, 'Adams', 'thomas', 'thomas.adams@example.com', '94 (1).jpg', ''),
(107, 'Hale', 'steven', 'steven.hale@example.com', '28.jpg', ''),
(108, 'Smith', 'alex', 'alex.smith@example.com', '43 (1).jpg', ''),
(109, 'Pratt', 'samuel', 'samuel.pratt@example.com', '62.jpg', ''),
(110, 'Sanders', 'daniel', 'daniel.sanders@example.com', '28.jpg', ''),
(111, 'Campbell', 'travis', 'travis.campbell@example.com', '1.jpg', ''),
(112, 'Barrera', 'jenna', 'jenna.Barrera@example.com', '37.jpg', ''),
(113, 'Williams', 'terri', 'terri.williams@example.com', '62.jpg', ''),
(114, 'Sean', 'Espinoza', 'sean.espinoza@example.com', '28.jpg', ''),
(115, 'Amanda', 'Thompson', 'amanda.thompson@example.com', '0 (1).jpg', ''),
(116, 'Gina', 'Johnson', 'gina.johnson@example.com', '11.jpg', ''),
(117, 'Joshua', 'Castillo', 'joshua.castillo@example.com', '85 (2).jpg', ''),
(118, 'Jacob', 'Boyer', 'jacob.boyer@example.com', '50.jpg', ''),
(119, 'azef', 'zsdfg', 'gloria.zinzinshou@gmail.com', '6.jpg', 'Passe'),
(120, 'Melis', 'ZINZINSOUH', 'gloriazinzinsouhu@gmail.com', '1.jpg', 'Double'),
(121, 'Melis', 'ZINZINSOUHOU', 'gloria.souhou@gmail.com', '9.jpg', 'Passe'),
(122, 'sdnr', 'dvfg', 'mahu@gmail.com', '2.jpg', 'Passe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
