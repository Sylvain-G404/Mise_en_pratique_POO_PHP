-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 26 août 2023 à 07:37
-- Version du serveur : 5.7.24
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `production_inc`
--

-- --------------------------------------------------------

--
-- Structure de la table `usines`
--

CREATE TABLE `usines` (
  `id` int(11) NOT NULL,
  `nomProd` text NOT NULL,
  `numProd` int(10) NOT NULL,
  `tempProd` int(10) NOT NULL,
  `coutProd` int(10) NOT NULL,
  `prixUnite` int(10) NOT NULL,
  `materiauRequi_id` int(10) NOT NULL,
  `materiauRequiQuantite` int(10) NOT NULL,
  `inventaire` int(10) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `usines`
--

INSERT INTO `usines` (`id`, `nomProd`, `numProd`, `tempProd`, `coutProd`, `prixUnite`, `materiauRequi_id`, `materiauRequiQuantite`, `inventaire`, `active`) VALUES
(1, 'Bois', 5, 8, 5, 2, 0, 0, 0, 0),
(2, 'Buche', 4, 12, 10, 5, 1, 1, 0, 0),
(3, 'Charbon', 8, 20, 20, 5, 1, 2, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `usines`
--
ALTER TABLE `usines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `usines`
--
ALTER TABLE `usines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
