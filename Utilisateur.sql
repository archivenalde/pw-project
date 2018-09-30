-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 30, 2018 at 10:09 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pw-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `idutilisateur` int(11) NOT NULL,
  `nomutilisateur` varchar(50) NOT NULL,
  `prenomutilisateur` varchar(50) NOT NULL,
  `dateinscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sexe` enum('homme','femme','autre','') NOT NULL,
  `datenaissance` date NOT NULL,
  `adressemail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `statut` set('UTILISATEUR','ADMINISTRATEUR') NOT NULL DEFAULT 'UTILISATEUR'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Utilisateur`
--

INSERT INTO `Utilisateur` (`idutilisateur`, `nomutilisateur`, `prenomutilisateur`, `dateinscription`, `sexe`, `datenaissance`, `adressemail`, `password`, `statut`) VALUES
(1, 'testnu', 'testpu', '2018-09-28 16:49:02', 'autre', '0000-00-00', 'test@test.com', 'testpw', 'UTILISATEUR'),
(2, 'Adlane', 'Ladjal', '2018-09-28 16:49:19', 'homme', '1998-02-19', 'adlaneladjal.93@gmail.com', '12', 'UTILISATEUR'),
(4, 'John', 'Chaussard', '2018-09-28 17:06:41', 'femme', '1967-03-12', 'adlaneladjal.93@gmail.com', '$2y$10$/aEWtWaVboCE99eQFUEtte02TgPDYmiB3ASv1Mh7AF8bUKORZtrQO', 'UTILISATEUR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`idutilisateur`),
  ADD UNIQUE KEY `uc_nomutilisateur_utilisateur` (`nomutilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `idutilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;