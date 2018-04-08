-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 02 avr. 2018 à 19:24
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `post`
--

-- --------------------------------------------------------

--
-- Structure de la table `amine`
--

DROP TABLE IF EXISTS `amine`;
CREATE TABLE IF NOT EXISTS `amine` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(100) NOT NULL,
  `commentaire` varchar(10000) NOT NULL,
  `heure` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `amine`
--

INSERT INTO `amine` (`id_utilisateur`, `uid`, `commentaire`, `heure`) VALUES
(118, 'anonymous', 'tzgzgargadgfa', '2018-04-01 13:31:25'),
(116, 'anonymous', 'tarfgtaregfatgarf', '2018-03-29 16:51:55');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(100) NOT NULL,
  `user_motdepasse` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`user_id`, `user_email`, `user_motdepasse`) VALUES
(71, 'moncef.benouaghram@gmail.com', '$2y$10$m5rpskBV7fKdFcC/vMJtgOT927y9Jk9mjDe25k8DgUDDJKwgMr5KG'),
(72, 'amine.benouaghram@gmaicom', '$2y$10$fi0uqZiwCUHyy3BwYJixCOxQkg.oFptT0jpP1TqgU.D0t8kZa1ezu'),
(70, 'amine.benouaghram@gmail.com', '$2y$10$KbMrFBbiPa5KXPGk3uUIueThGBfH6AnMRj3g14zZL7ZXajgGc5P7a'),
(69, 'email.jesaispas@gmail.com', '$2y$10$PKq2mIhIqjW9O2xJ4zFou.oTnizr9nW87ujVSw2NJRdryJHWQ/JYe');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `amine`
--
ALTER TABLE `amine` ADD FULLTEXT KEY `message` (`commentaire`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
