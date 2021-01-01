-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 31 déc. 2020 à 11:32
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `login`
--

-- --------------------------------------------------------

--
-- Structure de la table `login_login`
--

DROP TABLE IF EXISTS `login_login`;
CREATE TABLE IF NOT EXISTS `login_login` (
  `USER` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci NOT NULL,
  `PASSWORD` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Déchargement des données de la table `login_login`
--

INSERT INTO `login_login` (`USER`, `PASSWORD`) VALUES
('diraneh1@hotmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
