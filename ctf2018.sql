-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 25 Juin 2018 à 08:04
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ctf2018`
--

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

CREATE TABLE `history` (
  `idhistory` int(11) NOT NULL,
  `datectf` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `historyplace`
--

CREATE TABLE `historyplace` (
  `idplace` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `idhistory` int(11) NOT NULL,
  `nameteam` varchar(30) NOT NULL,
  `scoreteam` int(11) NOT NULL,
  `member1` varchar(30) NOT NULL,
  `member2` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE `teams` (
  `idteam` int(11) NOT NULL,
  `nameteam` varchar(30) NOT NULL,
  `member1` varchar(30) NOT NULL,
  `member2` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `namepc` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `flag1value` varchar(30) NOT NULL,
  `flag2value` varchar(30) NOT NULL,
  `flag3value` varchar(30) NOT NULL,
  `flag4value` varchar(30) NOT NULL,
  `flag5value` varchar(30) NOT NULL,
  `flag1date` datetime DEFAULT NULL,
  `flag2date` datetime DEFAULT NULL,
  `flag3date` datetime DEFAULT NULL,
  `flag4date` datetime DEFAULT NULL,
  `flag5date` datetime DEFAULT NULL,
  `finalflagdate` datetime DEFAULT NULL,
  `scoreteam` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `teams`
--

INSERT INTO `teams` (`idteam`, `nameteam`, `member1`, `member2`, `email`, `password`, `namepc`, `created`, `flag1value`, `flag2value`, `flag3value`, `flag4value`, `flag5value`, `flag1date`, `flag2date`, `flag3date`, `flag4date`, `flag5date`, `finalflagdate`, `scoreteam`) VALUES
(1, 'pokemon', 'paul', 'pierre', 'bonjour@email.com', 'azerty', 'PC31109', NULL, 'aaaaa', 'bbbbb', 'ccccc', 'ddddd', 'eeeee', '2018-06-24 17:48:57', '2018-06-24 17:56:35', '2018-06-24 17:49:25', '2018-06-24 17:56:28', '2018-06-24 17:56:08', '2018-06-24 17:56:35', 150),
(2, 'league', 'jacques', 'tom', 'hello@email.com', 'azertyuiop', 'PC31110', NULL, 'aaaaa', 'bbbbb', 'ccccc', 'ddddd', 'eeeee', NULL, '2018-06-22 00:00:00', '2018-06-22 00:00:00', NULL, NULL, '2018-06-22 00:00:00', 50),
(3, 'admin', 'admin', 'admin', 'admin@admin.com', 'admin', 'PCadmin', '2018-06-22 00:00:00', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 'vgbreziu', 'vbgai', 'bvgieuz', 'gerziu@gcvrez.fr', 'aaaaa', 'vhbiu', '2018-06-24 18:43:46', 'aaaaa', 'bbbbb', 'ccccc', 'ddddd', 'eeeee', NULL, '2018-06-24 18:45:51', NULL, NULL, '2018-06-24 18:45:43', '2018-06-24 18:45:51', 50);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`idhistory`);

--
-- Index pour la table `historyplace`
--
ALTER TABLE `historyplace`
  ADD PRIMARY KEY (`idplace`);

--
-- Index pour la table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`idteam`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `history`
--
ALTER TABLE `history`
  MODIFY `idhistory` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `historyplace`
--
ALTER TABLE `historyplace`
  MODIFY `idplace` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `teams`
--
ALTER TABLE `teams`
  MODIFY `idteam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, FILE, INDEX, ALTER, CREATE TEMPORARY TABLES, EXECUTE, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EVENT, TRIGGER ON *.* TO 'dev'@'%';

GRANT ALL PRIVILEGES ON `dev\_%`.* TO 'dev'@'%';
 
