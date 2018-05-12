-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  sam. 12 mai 2018 à 19:59
-- Version du serveur :  5.6.39-cll-lve
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mathieu1_gif`
--

-- --------------------------------------------------------

--
-- Structure de la table `gif`
--

CREATE TABLE `gif` (
  `id` int(11) NOT NULL,
  `categorie` int(11) NOT NULL,
  `urlGif` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gif`
--

INSERT INTO `gif` (`id`, `categorie`, `urlGif`) VALUES
(1, 1, 'https://media.giphy.com/media/9xijGdDIMovchalhxN/source.gif'),
(3, 0, 'https://media.giphy.com/media/aYAlzeNnDDn4k/source.mp4'),
(4, 2, 'https://media.giphy.com/media/5xtDarlGFcf42cURiRa/giphy.gif');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `gif`
--
ALTER TABLE `gif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `gif`
--
ALTER TABLE `gif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
