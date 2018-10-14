-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 13 Octobre 2018 à 16:13
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `clco`
--

-- --------------------------------------------------------

--
-- Structure de la table `avisresto`
--

CREATE TABLE `avisresto` (
  `id` int(11) NOT NULL,
  `id_r` int(11) NOT NULL,
  `nom_r` varchar(255) NOT NULL,
  `q_n` double NOT NULL,
  `q_salle` double NOT NULL,
  `q_service` double NOT NULL,
  `moyenne` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `avisresto`
--

INSERT INTO `avisresto` (`id`, `id_r`, `nom_r`, `q_n`, `q_salle`, `q_service`, `moyenne`) VALUES
(1, 1, 'La rochelle', 13, 7, 15, 11.666666666667),
(2, 1, 'La rochelle', 11, 18, 6, 11.666666666667),
(3, 2, 'Mirabelle', 9, 14, 10, 11),
(4, 3, 'Shawarma', 16, 13, 14, 14.333333333333),
(5, 3, 'Shawarma', 13, 15, 10, 12.666666666667),
(6, 1, 'La rochelle', 17, 18, 15, 16.666666666667);

-- --------------------------------------------------------

--
-- Structure de la table `resto`
--

CREATE TABLE `resto` (
  `id` int(11) NOT NULL,
  `id_r` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `moy_g` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `resto`
--

INSERT INTO `resto` (`id`, `id_r`, `nom`, `image`, `moy_g`) VALUES
(1, 1, 'La rochelle', 'rochelle.jpg', 14.166666666667),
(2, 2, 'Mirabelle', 'mirabelle.jpg', 11),
(3, 3, 'Shawarma', 'shawarma.jpg', 13.5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `avisresto`
--
ALTER TABLE `avisresto`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resto`
--
ALTER TABLE `resto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `avisresto`
--
ALTER TABLE `avisresto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `resto`
--
ALTER TABLE `resto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
