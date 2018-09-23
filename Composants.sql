-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2018 at 06:55 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Composants`
--

CREATE TABLE `Composants` (
  `idcomp` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `quantite` varchar(50) DEFAULT NULL COMMENT 'N''est pas de type Numeric pour pouvoir associer une mesure aux quantites',
  `prod_associe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Composants`
--

INSERT INTO `Composants` (`idcomp`, `type`, `quantite`, `prod_associe`) VALUES
(7, 'azedf', '', 27),
(8, 'azef', '', 27),
(9, 'fe', '', 27),
(10, 'zd', 'zdfz', 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Composants`
--
ALTER TABLE `Composants`
  ADD PRIMARY KEY (`idcomp`),
  ADD KEY `fk_composants_produits` (`prod_associe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Composants`
--
ALTER TABLE `Composants`
  MODIFY `idcomp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Composants`
--
ALTER TABLE `Composants`
  ADD CONSTRAINT `fk_composants_produits` FOREIGN KEY (`prod_associe`) REFERENCES `Produits` (`idprod`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
