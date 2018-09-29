-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 27 sep. 2018 à 15:34
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
  `nomcomp` varchar(255) NOT NULL,
  `valcomp` varchar(255) NOT NULL,
  `dateajoutcomp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idprod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Composants`
--

INSERT INTO `Composants` (`idcomp`, `nomcomp`, `valcomp`, `dateajoutcomp`, `idprod`) VALUES
(56664, 'Sucre', 'Beaucoup', '2018-09-27 15:15:13', 645615);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
