-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 30 juin 2023 à 19:50
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
-- Base de données : `Al_group`
--

-- --------------------------------------------------------
--
-- Structure de la table `metier`
--

CREATE TABLE `metier` (
  `id` int(2) DEFAULT NULL,
  `categorie` varchar(30) DEFAULT NULL,
  `metier` varchar(47) DEFAULT NULL,
  `description` varchar(383) DEFAULT NULL,
  `salaire` varchar(27) DEFAULT NULL,
  `ville` varchar(7) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
--
-- Déchargement des données de la table `metier`
--

INSERT INTO `metier` (
    `id`,
    `categorie`,
    `metier`,
    `description`,
    `salaire`,
    `ville`
  )
VALUES (
    1,
    'Energie renouvelable',
    'Ingénieur en Énergies Renouvelables',
    'Responsable de la conception, du développement et de l\'implémentation de projets d\'énergies renouvelables tels que l\'énergie solaire et éolienne. Coordonne les études techniques et assure la mise en œuvre des installations.\nQualités recherchées : Solides connaissances en génie électrique, capacité à résoudre les problèmes techniques, sens de l\'innovation, esprit d\'équipe.',
    '500 000 FCFA - 700 000 FCFA',
    'Abidjan'
  ),
  (
    2,
    'Energie renouvelable',
    'Technicien en Installation de Panneaux Solaires',
    'Responsable de l\'installation, de la maintenance et du dépannage des systèmes solaires photovoltaïques. Effectue des vérifications de performance et assure la conformité des installations.\nQualités recherchées : Compétences techniques en électricité et en énergie solaire, capacité à travailler en hauteur, souci du détail, sens des responsabilités.',
    '300 000 FCFA - 400 000 FCFA',
    'Abidjan'
  ),
  (
    3,
    'Energie renouvelable',
    'Chargé de Projet en Énergie Éolienne',
    'Responsable de la gestion et de la coordination des projets d\'énergie éolienne. Évalue la faisabilité technique et économique des projets, supervise la construction des parcs éoliens.\nQualités recherchées : Connaissances en génie mécanique, aptitude à gérer les projets de grande envergure, compétences en planification, esprit d\'analyse.',
    '400 000 FCFA - 600 000 FCFA',
    'Abidjan'
  ),
  (
    4,
    'Eco-Construction',
    'Architecte Éco-Constructeur',
    'Conçoit des bâtiments respectueux de l\'environnement en utilisant des matériaux durables et des techniques de construction écologiques. Gère les projets de la conception à la réalisation.\nQualités recherchées : Compétences en architecture durable, créativité, connaissance des réglementations en matière de construction, esprit novateur',
    '500 000 FCFA - 700 000 FCFA',
    'Abidjan'
  ),
  (
    5,
    'Eco-Construction',
    'Conducteur de Travaux Écologiques',
    'Supervise et coordonne les chantiers de construction écologique. Veille à l\'utilisation de matériaux respectueux de l\'environnement et à l\'adoption de pratiques de construction durables.\nQualités recherchées : Solides compétences en gestion de projet, aptitude à travailler avec diverses équipes, capacité à résoudre les problèmes sur le terrain, sens de l\'organisation.',
    '400 000 FCFA - 600 000 FCFA',
    'Abidjan'
  ),
  (
    6,
    'Eco-Construction',
    'Technicien en Gestion des Matériaux Durables',
    'Responsable de la gestion des matériaux et des ressources durables sur les chantiers de construction. Assure la traçabilité des matériaux, recommande des alternatives écologiques.\nQualités recherchées : Connaissances des matériaux durables, compétences en logistique et en approvisionnement, capacité à travailler en équipe, sens de l\'efficacité.',
    '300 000 FCFA - 400 000 FCFA',
    'Abidjan'
  ),
  (
    7,
    'Gestion de dechet',
    'Responsable de la Gestion des Déchets',
    'Planifie, organise et supervise les activités liées à la gestion des déchets. Développe des stratégies de réduction des déchets, coordonne les opérations de collecte et de traitement.\nQualités recherchées : Expertise en gestion des déchets, connaissance des réglementations environnementales, compétences en leadership, capacité à résoudre les problèmes complexes.',
    '500 000 FCFA - 700 000 FCFA',
    'Abidjan'
  ),
  (
    8,
    'Gestion de dechet',
    'Ingénieur en Traitement des Eaux Usées',
    'Conçoit, développe et gère les systèmes de traitement des eaux usées. Évalue les technologies de traitement, supervise les installations et assure le respect des normes environnementales.\nQualités recherchées : Solides compétences en génie environnemental, connaissance des processus de traitement des eaux usées, esprit analytique, capacité à travailler en équipe.',
    '400 000 FCFA - 600 000 FCFA',
    'Abidjan'
  ),
  (
    9,
    'Gestion de dechet',
    'Technicien en Recyclage des Déchets',
    'Effectue des opérations de tri, de collecte et de recyclage des déchets. S\'assure du bon fonctionnement des équipements de recyclage et de la conformité aux normes de sécurité.\nQualités recherchées : Connaissances des techniques de recyclage, compétences techniques en mécanique, rigueur, respect des consignes de sécurité.',
    '300 000 FCFA - 400 000 FCFA',
    'Abidjan'
  ),
  (
    10,
    'Agriculture durable',
    'Analyste des Déchets',
    'Effectue des analyses et des évaluations des déchets afin de proposer des solutions de gestion et de réduction efficaces. Collecte et interprète les données, élabore des rapports et des recommandations.\nQualités recherchées : Compétences en analyse des données, connaissance des réglementations en matière de gestion des déchets, esprit critique, capacité à communiquer efficacement.',
    '400 000 FCFA - 600 000 FCFA',
    'Abidjan'
  ),
  (
    11,
    'Agriculture durable',
    'Technicien en Échantillonnage des Déchets',
    'Collecte des échantillons de déchets, réalise des tests et des analyses en laboratoire. Suit les procédures d\'échantillonnage, assure la précision des résultats.\nQualités recherchées : Compétences en échantillonnage et en analyse de laboratoire, rigueur, attention aux détails, respect des normes de sécurité.',
    '300 000 FCFA - 400 000 FCFA',
    'Abidjan'
  ),
  (
    12,
    'Mobilite durable',
    'Planificateur de Mobilité Durable',
    'Développe et met en œuvre des plans de mobilité durables pour les villes et les entreprises. Favorise les modes de transport écologiques et améliore l\'efficacité des systèmes de transport.\nQualités recherchées : Expertise en planification urbaine, connaissance des solutions de transport durable, compétences en analyse des données, capacité à collaborer avec différents acteurs.',
    '500 000 FCFA - 700 000 FCFA',
    'Abidjan'
  ),
  (
    13,
    'Mobilite durable',
    'Ingénieur en Transports Durables',
    'Conçoit, développe et évalue les infrastructures de transport durable telles que les réseaux de vélos, les transports en commun écologiques. Réalise des études de faisabilité et des analyses de performance.\nQualités recherchées : Compétences en génie civil, connaissance des enjeux de la mobilité durable, esprit d\'innovation, capacité à résoudre les problèmes techniques.',
    '400 000 FCFA - 600 000 FCFA',
    'Abidjan'
  ),
  (
    14,
    'Biodiversite',
    'Spécialiste en Conservation de la Biodiversité',
    'Élabore et met en œuvre des stratégies de conservation de la biodiversité. Effectue des évaluations écologiques, surveille les espèces et les écosystèmes, coordonne des projets de préservation.\nQualités recherchées : Expertise en écologie, connaissances des enjeux de la biodiversité, compétences en gestion de projet, sens de l\'observation.',
    '500 000 FCFA - 700 000 FCFA',
    'Abidjan'
  ),
  (
    15,
    'Biodiversite',
    'Botaniste',
    'Étudie les plantes et leur écosystème, effectue des inventaires floristiques, réalise des recherches scientifiques. Contribue à la préservation et à la gestion des espèces végétales.\nQualités recherchées : Connaissances en botanique, compétences en recherche scientifique, patience, curiosité.',
    '400 000 FCFA - 600 000 FCFA',
    'Abidjan'
  ),
  (
    16,
    'Biodiversite',
    'Guide Naturaliste',
    'Accompagne les visiteurs dans des réserves naturelles ou des parcs nationaux, partage des connaissances sur la biodiversité locale, sensibilise à la préservation de l\'environnement.\nQualités recherchées : Passion pour la nature, connaissances en écologie, compétences en communication, adaptabilité.',
    '300 000 FCFA - 400 000 FCFA',
    'Abidjan'
  );
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;