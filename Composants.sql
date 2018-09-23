-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 20 sep. 2018 à 22:17
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pw-project`
--

-- --------------------------------------------------------

--
-- Structure de la table `Composants`
--

CREATE TABLE `Composants` (
  `idcomp` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `quantite` varchar(50) DEFAULT NULL COMMENT 'N''est pas de type Numeric pour pouvoir associer une mesure aux quantites',
  `prod_associe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Composants`
--
ALTER TABLE `Composants`
  ADD PRIMARY KEY (`idcomp`),
  ADD KEY `fk_produits_composants` (`prod_associe`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Composants`
--
ALTER TABLE `Composants`
  MODIFY `idcomp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Composants`
--
ALTER TABLE `Composants`
  ADD CONSTRAINT `fk_produits_composants` FOREIGN KEY (`prod_associe`) REFERENCES `Composants` (`idcomp`);
COMMIT;

--
-- Déchargement des données de la table `Composants`
--

INSERT INTO `Composants` (`idcomp`, `type`, `quantite`, `prod_associe`) VALUES
(1, 'Préparation à la framboise', '41%', 1),
(2, 'Chocolat', '24%', 1),
(3, 'Lactose', NULL, 1),
(4, 'Chocolat', '24%', 1),
(5, 'Lactose', NULL, 1);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
