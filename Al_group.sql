-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 30 juin 2023 à 20:33
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Al_group`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(1) DEFAULT NULL,
  `categorie` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `categorie`) VALUES
(1, 'Energie renouvelable'),
(2, 'Eco-construction'),
(4, 'Gestion des dechets'),
(4, 'Analyste dechet'),
(5, 'mobilite durable'),
(6, 'Biodiversité');

-- --------------------------------------------------------

--
-- Structure de la table `salaire`
--

CREATE TABLE `salaire` (
  `id` int(2) DEFAULT NULL,
  `valeur` varchar(27) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salaire`
--

INSERT INTO `salaire` (`id`, `valeur`) VALUES
(1, '500 000 FCFA - 700 000 FCFA'),
(2, '300 000 FCFA - 400 000 FCFA'),
(3, '400 000 FCFA - 600 000 FCFA'),
(4, '500 000 FCFA - 700 000 FCFA'),
(5, '400 000 FCFA - 600 000 FCFA'),
(6, '300 000 FCFA - 400 000 FCFA'),
(7, '500 000 FCFA - 700 000 FCFA'),
(8, '400 000 FCFA - 600 000 FCFA'),
(9, '300 000 FCFA - 400 000 FCFA'),
(10, '400 000 FCFA - 600 000 FCFA'),
(11, '300 000 FCFA - 400 000 FCFA'),
(12, '500 000 FCFA - 700 000 FCFA'),
(13, '400 000 FCFA - 600 000 FCFA'),
(14, '500 000 FCFA - 700 000 FCFA'),
(15, '400 000 FCFA - 600 000 FCFA'),
(16, '300 000 FCFA - 400 000 FCFA');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(2) DEFAULT NULL,
  `ville` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `ville`) VALUES
(1, 'Abidjan'),
(2, 'Abidjan'),
(2, 'Abidjan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
