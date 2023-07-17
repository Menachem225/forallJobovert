-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 15 juin 2023 à 05:30
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Base de données : `JOBOVER`
--
-- --------------------------------------------------------
--
-- Structure de la table `prospect`
--
CREATE TABLE `prospect` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `etabli_o` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `contact_parent` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `filiere` varchar(255) NOT NULL,
  `logs` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
--
-- Index pour les tables déchargées
--
--
-- Index pour la table `prospect`
--
ALTER TABLE `prospect`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT pour les tables déchargées
--
--
-- AUTO_INCREMENT pour la table `prospect`
--
ALTER TABLE `prospect`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;