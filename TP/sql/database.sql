-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 17 nov. 2022 à 13:57
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp`
--

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `code` varchar(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `trigram` varchar(3) NOT NULL,
  `thumbnail_url` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`id`, `code`, `name`, `description`, `trigram`, `thumbnail_url`, `user_id`) VALUES
(1, 'D42', 'Consolidation des compétences en programmation', 'PHP: Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n\'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.', 'JRI', 'php.jpg', 1),
(2, 'D41', 'Consolidation des compétences réseaux', 'En premier ressort, un réseau désigne au sens concret « un ensemble de lignes entrelacées » et, au figuré « un ensemble de relations ».', 'MBE', 'networks.jpg', 3),
(3, 'AD9', 'Consolidation des compétences système (Linux)', 'Linux ou GNU/Linux est une famille de systèmes d\'exploitation open source de type Unix fondé sur le noyau Linux, créé en 1991 par Linus Torvalds. De nombreuses distributions Linux ont depuis vu le jour et constituent un important vecteur de popularisation du mouvement du logiciel libre.', 'FSI', 'linux.jpg', 4),
(4, 'D12', 'Consolidation des compétences en intégration web (HTML / CSS / UX)', 'Le HyperText Markup Language, généralement abrégé HTML ou, dans sa dernière version, HTML5, est le langage de balisage conçu pour représenter les pages web.', 'JHA', 'html.jpg', 5);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `thumbnail_url` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `role`, `thumbnail_url`, `address`, `phone`) VALUES
(1, 'Fabien', 'Simon', 'Professeur', 'elon_musk.jpg', '12 rue de Paris', '06 54 12 85 96'),
(3, 'Julio', 'Ribeiro', 'Professeur', 'jeff_bezos.jpg', '48 Rue de Paris', '07 87 21 56 85'),
(4, 'Martial', 'Berger', 'Professeur', 'mark_zuckerberg.jpg', '41 Rue de la Fontaine', '04 54 96 85 42'),
(5, 'Jihane', 'Haddad', 'Professeur', 'steve_jobs.jpg', '15 Route de Paris', '06 54 85 62 11');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
