-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 17 juil. 2023 à 22:10
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `al_group`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `departement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `mail`, `password`, `departement`) VALUES
(2, 'Dr Yao Kouassi Maynard', 'menachem225@iua.ci', '$2y$10$fLK8s7ZDnM.1lE7XMP.J6OuPbQ.DPUVKBo7rENnQY7gYq0xAzsKJy', 'scpo'),
(3, 'suzanne aliali', 'suzanne225@stugesda.com', '$2y$10$fLK8s7ZDnM.1lE7XMP.J6OuPbQ.DPUVKBo7rENnQY7gYq0xAzsKJy', 'scpo');

-- --------------------------------------------------------

--
-- Structure de la table `candidatures`
--

CREATE TABLE `candidatures` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `cv2` varchar(255) NOT NULL,
  `lettre_motivation` varchar(255) NOT NULL,
  `logs` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `candidatures`
--

INSERT INTO `candidatures` (`id`, `nom`, `prenom`, `email`, `cv`, `cv2`, `lettre_motivation`, `logs`) VALUES
(1, '', '', '', 'Memoire correction.docx', '', '', '2023-07-11 03:45:14'),
(2, 'Elhim', 'Menachem', 'menachemstore225@gmail.com', '', '', '', '2023-07-11 03:52:04'),
(3, 'Elhim', 'Menachem', 'menachemstore225@gmail.com', '', '', '', '2023-07-11 03:55:24'),
(4, 'Elhim', 'Menachem', 'menachemstore225@gmail.com', '', '', 'dzsgds', '2023-07-11 04:00:55'),
(5, 'Elhim', 'Menachem', 'menachemstore225@gmail.com', '', '', 'dzsgds', '2023-07-11 04:21:33'),
(6, 'Elhim', 'Menachem', 'menachemstore225@gmail.com', '', '', 'dzsgds', '2023-07-11 04:21:42'),
(7, 'Elhim', 'Menachem', 'menachemstore225@gmail.com', '', '', 'jcgc bbvjkhb nihj', '2023-07-11 04:22:47'),
(8, 'Elhim', 'Menachem', 'menachemstore225@gmail.com', '', '', 'jcgc bbvjkhb nihj', '2023-07-11 04:23:17'),
(9, 'Elhim', 'Menachem', 'menachemstore225@gmail.com', '', '', 'JE SUIS LE BOSS', '2023-07-11 04:27:26'),
(10, 'Yao', 'Kouassi Maynard', 'maynardkeynes225@gmail.com', '', '0', 'JE SUIS KEKE', '2023-07-11 04:35:31'),
(11, 'Elhim', 'Menachem', 'menachem225@iua.ci', '', '0', 'zd ;zn zd', '2023-07-11 04:42:45'),
(12, 'Elhim', 'Menachem', 'menachemstore225@gmail.com', '', '0', 'wcxvbsfdg', '2023-07-11 04:43:20'),
(13, 'jeje', 'jeje', 'jeje@iuua.ci', '', '0', 'ndhdhdh', '2023-07-11 04:46:23'),
(0, 'moustapha emmanuel', 'al koudia', 'alkouadio@sobovert.com', '', '0', 'ds,nbfljxw lkzedc sl lmzfaihb ', '2023-07-17 17:10:26'),
(0, 'marine', 'boni', 'bonimarine@iua.ci', '', '0', 'En tant qu’africain , loin d’être fataliste je crois qu’on est déjà foutu sur la question .\r\n\r\nJe prends par exemple le cas du processus de traitement . Les technologies de lithographies sont extrêmement protégées et brevetées . Le savoir faire est sous l', '2023-07-17 17:15:46');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(1) DEFAULT NULL,
  `categorie` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
-- Structure de la table `id`
--

CREATE TABLE `id` (
  `id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `metier`
--

CREATE TABLE `metier` (
  `id` int(12) NOT NULL,
  `categorie` varchar(20) DEFAULT NULL,
  `metier` varchar(47) DEFAULT NULL,
  `description` varchar(383) DEFAULT NULL,
  `salaire` varchar(27) DEFAULT NULL,
  `ville` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `metier`
--

INSERT INTO `metier` (`id`, `categorie`, `metier`, `description`, `salaire`, `ville`) VALUES
(1, '8', 'Developper attieke', '', '7890000000', 'Abidjan'),
(2, 'Energie renouvelable', 'Ingénieur en Énergies Renouvelables', 'Responsable de la conception, du développement et de l\'implémentation de projets d\'énergies renouvelables tels que l\'énergie solaire et éolienne. Coordonne les études techniques et assure la mise en œuvre des installations. Qualités recherchées : Solides connaissances en génie électrique, capacité à résoudre les problèmes techniques, sens de l\'innovation, esprit d\'équipe.', '500 000 FCFA - 700 000 FCFA', 'Abidjan'),
(3, 'Energie renouvelable', 'Technicien en Installation de Panneaux Solaires', 'Responsable de l\'installation, de la maintenance et du dépannage des systèmes solaires photovoltaïques. Effectue des vérifications de performance et assure la conformité des installations. Qualités recherchées : Compétences techniques en électricité et en énergie solaire, capacité à travailler en hauteur, souci du détail, sens des responsabilités.', '300 000 FCFA - 400 000 FCFA', 'Abidjan'),
(4, 'Energie renouvelable', 'Chargé de Projet en Énergie Éolienne', 'Responsable de la gestion et de la coordination des projets d\'énergie éolienne. Évalue la faisabilité technique et économique des projets, supervise la construction des parcs éoliens. Qualités recherchées : Connaissances en génie mécanique, aptitude à gérer les projets de grande envergure, compétences en planification, esprit d\'analyse.', '400 000 FCFA - 600 000 FCFA', 'Abidjan'),
(5, 'Eco-Construction', 'Architecte Éco-Constructeur', 'Conçoit des bâtiments respectueux de l\'environnement en utilisant des matériaux durables et des techniques de construction écologiques. Gère les projets de la conception à la réalisation. Qualités recherchées : Compétences en architecture durable, créativité, connaissance des réglementations en matière de construction, esprit novateur', '500 000 FCFA - 700 000 FCFA', 'Abidjan'),
(6, 'Eco-Construction', 'Conducteur de Travaux Écologiques', 'Supervise et coordonne les chantiers de construction écologique. Veille à l\'utilisation de matériaux respectueux de l\'environnement et à l\'adoption de pratiques de construction durables. Qualités recherchées : Solides compétences en gestion de projet, aptitude à travailler avec diverses équipes, capacité à résoudre les problèmes sur le terrain, sens de l\'organisation.', '400 000 FCFA - 600 000 FCFA', 'Abidjan'),
(7, 'Eco-Construction', 'Technicien en Gestion des Matériaux Durables', 'Responsable de la gestion des matériaux et des ressources durables sur les chantiers de construction. Assure la traçabilité des matériaux, recommande des alternatives écologiques. Qualités recherchées : Connaissances des matériaux durables, compétences en logistique et en approvisionnement, capacité à travailler en équipe, sens de l\'efficacité.', '300 000 FCFA - 400 000 FCFA', 'Abidjan'),
(8, 'Gestion de dechet', 'Responsable de la Gestion des Déchets', 'Planifie, organise et supervise les activités liées à la gestion des déchets. Développe des stratégies de réduction des déchets, coordonne les opérations de collecte et de traitement. Qualités recherchées : Expertise en gestion des déchets, connaissance des réglementations environnementales, compétences en leadership, capacité à résoudre les problèmes complexes.', '500 000 FCFA - 700 000 FCFA', 'Abidjan'),
(9, 'Gestion de dechet', 'Ingénieur en Traitement des Eaux Usées', 'Conçoit, développe et gère les systèmes de traitement des eaux usées. Évalue les technologies de traitement, supervise les installations et assure le respect des normes environnementales. Qualités recherchées : Solides compétences en génie environnemental, connaissance des processus de traitement des eaux usées, esprit analytique, capacité à travailler en équipe.', '400 000 FCFA - 600 000 FCFA', 'Abidjan'),
(10, 'Gestion de dechet', 'Technicien en Recyclage des Déchets', 'Effectue des opérations de tri, de collecte et de recyclage des déchets. S\'assure du bon fonctionnement des équipements de recyclage et de la conformité aux normes de sécurité. Qualités recherchées : Connaissances des techniques de recyclage, compétences techniques en mécanique, rigueur, respect des consignes de sécurité.', '300 000 FCFA - 400 000 FCFA', 'Abidjan'),
(11, 'Agriculture durable', 'Analyste des Déchets', 'Effectue des analyses et des évaluations des déchets afin de proposer des solutions de gestion et de réduction efficaces. Collecte et interprète les données, élabore des rapports et des recommandations. Qualités recherchées : Compétences en analyse des données, connaissance des réglementations en matière de gestion des déchets, esprit critique, capacité à communiquer efficacement.', '400 000 FCFA - 600 000 FCFA', 'Abidjan'),
(12, 'Agriculture durable', 'Technicien en Échantillonnage des Déchets', 'Collecte des échantillons de déchets, réalise des tests et des analyses en laboratoire. Suit les procédures d\'échantillonnage, assure la précision des résultats. Qualités recherchées : Compétences en échantillonnage et en analyse de laboratoire, rigueur, attention aux détails, respect des normes de sécurité.', '300 000 FCFA - 400 000 FCFA', 'Abidjan'),
(13, 'Mobilite durable', 'Planificateur de Mobilité Durable', 'Développe et met en œuvre des plans de mobilité durables pour les villes et les entreprises. Favorise les modes de transport écologiques et améliore l\'efficacité des systèmes de transport. Qualités recherchées : Expertise en planification urbaine, connaissance des solutions de transport durable, compétences en analyse des données, capacité à collaborer avec différents acteurs.', '500 000 FCFA - 700 000 FCFA', 'Abidjan'),
(14, 'Mobilite durable', 'Ingénieur en Transports Durables', 'Conçoit, développe et évalue les infrastructures de transport durable telles que les réseaux de vélos, les transports en commun écologiques. Réalise des études de faisabilité et des analyses de performance. Qualités recherchées : Compétences en génie civil, connaissance des enjeux de la mobilité durable, esprit d\'innovation, capacité à résoudre les problèmes techniques.', '400 000 FCFA - 600 000 FCFA', 'Abidjan'),
(15, 'Biodiversite', 'Spécialiste en Conservation de la Biodiversité', 'Élabore et met en œuvre des stratégies de conservation de la biodiversité. Effectue des évaluations écologiques, surveille les espèces et les écosystèmes, coordonne des projets de préservation. Qualités recherchées : Expertise en écologie, connaissances des enjeux de la biodiversité, compétences en gestion de projet, sens de l\'observation.', '500 000 FCFA - 700 000 FCFA', 'Abidjan'),
(16, 'Biodiversite', 'Botaniste', 'Étudie les plantes et leur écosystème, effectue des inventaires floristiques, réalise des recherches scientifiques. Contribue à la préservation et à la gestion des espèces végétales. Qualités recherchées : Connaissances en botanique, compétences en recherche scientifique, patience, curiosité.', '400 000 FCFA - 600 000 FCFA', 'Abidjan'),
(17, 'Biodiversite', 'Guide Naturaliste', 'Accompagne les visiteurs dans des réserves naturelles ou des parcs nationaux, partage des connaissances sur la biodiversité locale, sensibilise à la préservation de l\'environnement. Qualités recherchées : Passion pour la nature, connaissances en écologie, compétences en communication, adaptabilité.', '300 000 FCFA - 400 000 FCFA', 'Abidjan'),
(18, 'Energie renouvelable', 'Developper alloco', 'JJJEJJEJEJEJEJEJEJJEJEJE', '789456', 'Vally');

-- --------------------------------------------------------

--
-- Structure de la table `recruteurs`
--

CREATE TABLE `recruteurs` (
  `id` int(12) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `departement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `recruteurs`
--

INSERT INTO `recruteurs` (`id`, `username`, `mail`, `password`, `departement`) VALUES
(33, 'admin', 'chef@stugesda.com', '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC', 'scpo'),
(34, 'Menachem', 'menachem225@stugesda.com', '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC', 'scpo'),
(35, 'Kpeye  Manhan Casimir', 'Kpeye225@stugesda.com', '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC', 'scpo'),
(36, 'Dr Aka Kouame', 'aka@iua.ci', '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC', 'scpo'),
(37, 'Freeman Yao', 'freeman225@iua.ci', '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC', 'scpo'),
(38, 'al moustapha', 'almoustapha@iua.ci', '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC', '1');

-- --------------------------------------------------------

--
-- Structure de la table `salaire`
--

CREATE TABLE `salaire` (
  `id` int(2) DEFAULT NULL,
  `valeur` varchar(27) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `departement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `mail`, `password`, `departement`) VALUES
(33, 'admin', 'chef@stugesda.com', '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC', 'scpo'),
(34, 'Menachem', 'menachem225@stugesda.com', '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC', 'scpo'),
(35, 'Kpeye  Manhan Casimir', 'Kpeye225@stugesda.com', '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC', 'scpo'),
(36, 'Dr Aka Kouame', 'aka@iua.ci', '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC', 'scpo'),
(37, 'Freeman Yao', 'freeman225@iua.ci', '$2y$10$ztxSWfsPvczjJUYD3tF30.RFHGW49Kn5UQzScou/WrqmyJEXCsUKC', 'scpo');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(2) DEFAULT NULL,
  `ville` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `ville`) VALUES
(1, 'Abidjan'),
(2, 'Abidjan'),
(2, 'Abidjan');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `id`
--
ALTER TABLE `id`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `metier`
--
ALTER TABLE `metier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recruteurs`
--
ALTER TABLE `recruteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `id`
--
ALTER TABLE `id`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `metier`
--
ALTER TABLE `metier`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `recruteurs`
--
ALTER TABLE `recruteurs`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
