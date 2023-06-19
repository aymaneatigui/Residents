-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 12 juin 2021 à 13:40
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `cne` varchar(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `number` varchar(11) NOT NULL,
  `custid` int(11) NOT NULL AUTO_INCREMENT,
  `apa` int(11) NOT NULL,
  `bat` int(11) NOT NULL,
  PRIMARY KEY (`custid`),
  UNIQUE KEY `cne` (`cne`),
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`cne`, `nom`, `prenom`, `number`, `custid`, `apa`, `bat`) VALUES
('AB123456', 'ELON', 'MUSK', '0123456789', 25, 10, 1),
('BB197004', 'aymane', 'atigui', '0700321784', 26, 5, 1),
('RA5620123', 'Katheryn', 'Winnick', '0636465232', 27, 3, 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `custid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_ibfk_1` (`custid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `custid`) VALUES
(1, 'admin', 'admin', NULL),
(16, 'elon', 'pass', 25),
(17, 'aymane', 'pass', 26),
(18, 'katheryn', 'pass', 27);

-- --------------------------------------------------------

--
-- Structure de la table `worker`
--

DROP TABLE IF EXISTS `worker`;
CREATE TABLE IF NOT EXISTS `worker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `number` varchar(12) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `comm` varchar(200) NOT NULL,
  `apa` varchar(50) NOT NULL,
  `photo` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `worker`
--

INSERT INTO `worker` (`id`, `nom`, `prenom`, `number`, `profession`, `comm`, `apa`, `photo`) VALUES
(1, 'aymane', 'atigui', '0700321784', 'Développeur', 'It is a good worker .', '1', '../NUM/images/photos/0700321784.jpg'),
(2, 'Daniel ', 'Radcliffe', '0700325964', 'Serveur', 'Always come in on time.', '3', '../NUM/images/photos/0700325964.jpg');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`custid`) REFERENCES `etudiant` (`custid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
