-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 10 sep. 2023 à 15:44
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `samples_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `city` varchar(250) CHARACTER SET utf8mb3 DEFAULT NULL,
  `street_name` varchar(250) CHARACTER SET utf8mb3 DEFAULT NULL,
  `street_number` int DEFAULT NULL,
  `zipcode` int DEFAULT NULL,
  `country` varchar(250) CHARACTER SET utf8mb3 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `addresses`
--

INSERT INTO `addresses` (`id`, `city`, `street_name`, `street_number`, `zipcode`, `country`) VALUES
(1, 'Nice', 'martin', 55, 32482, 'France'),
(2, 'Lyon', 'Boulevard st michel', 12, 69003, 'France');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb3 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'drum'),
(2, 'bass'),
(3, 'effects'),
(9, 'divers'),
(10, 'drill'),
(11, '808'),
(12, 'snare'),
(13, 'kick');

-- --------------------------------------------------------

--
-- Structure de la table `samples`
--

DROP TABLE IF EXISTS `samples`;
CREATE TABLE IF NOT EXISTS `samples` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categories` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(250) CHARACTER SET utf8mb3 NOT NULL,
  `type` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `source` varchar(250) CHARACTER SET utf8mb3 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `samples`
--

INSERT INTO `samples` (`id`, `categories`, `name`, `type`, `source`) VALUES
(63, 'drill, 808', 'drill 808 (1).wav', 'audio/wav', '/uploads/drill 808 (1).wav'),
(64, 'drum, drill, kick', 'drill kick (1).wav', 'audio/wav', '/uploads/drill kick (1).wav'),
(65, 'effects, drill', 'drill fx (1).wav', 'audio/wav', '/uploads/drill fx (1).wav'),
(66, 'effects, drill', 'drill fx (2).wav', 'audio/wav', '/uploads/drill fx (2).wav'),
(67, 'effects, drill', 'drill fx (3).wav', 'audio/wav', '/uploads/drill fx (3).wav'),
(69, 'effects, drill', 'drill fx (4).wav', 'audio/wav', '/uploads/drill fx (4).wav'),
(70, 'effects, drill', 'drill fx (5).wav', 'audio/wav', '/uploads/drill fx (5).wav'),
(76, 'bass, drill, 808', 'drill 808 (10).wav', 'audio/wav', '/uploads/drill 808 (10).wav');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `addresses_id` int DEFAULT NULL,
  `role` text COLLATE utf8mb4_general_ci,
  `firstname` varchar(250) CHARACTER SET utf8mb3 NOT NULL,
  `lastname` varchar(250) CHARACTER SET utf8mb3 NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb3 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_addresses1_idx` (`addresses_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `addresses_id`, `role`, `firstname`, `lastname`, `date_of_birth`, `email`, `password`) VALUES
(2, 1, NULL, 'Michel', 'Martin', '1986-08-23', 'mart5@mich.fr', '515df656546df656122fd'),
(4, NULL, NULL, 'sqd', 'sqd', '2023-08-11', 'damien.lebon.pro1@gmail.com', '4564654kdfkshfkjsdkjh'),
(14, NULL, NULL, 'wdvdgwd', 'xscxsc', '2023-08-11', 'cocoonappart2@gmail.com', 'dsvdss'),
(15, NULL, NULL, 'rsgd', 'lebon', '2021-02-17', 'gdfgdf@hdg.com', '87987ngjjHGD46546'),
(16, NULL, NULL, 'v,,hgh', 'vh,v', '0000-00-00', 'ytjtj@gq.com', '$2y$10$MKdx/risu.hKouz2f7c4sOczJzfld8PG5hNa25EFE3fiqbL.OG2LG'),
(17, NULL, NULL, '123', '123', '0000-00-00', '123@123.com', '$2y$10$sPGvszYNL76pXMFi717tTemg9rSZ0RgihAPUTu64V6zMeOp6qIHsa'),
(18, NULL, NULL, 'ghjghjghj', 'fhgfjhjgh', '0000-00-00', 'gh@jhjkh', '$2y$10$r.9QHwsGEGRHP1noKVrwpesWwGhPNbYbH7qdsBxe4TRQaxI2eNN72'),
(21, NULL, NULL, 'John', 'Doe', '1993-09-16', 'test@test.com', '$2y$10$YVMcJFrwb8Lt.9nXm0ec..44Akjx.wcr0/nK/7vc34qcMQLGhIr0i'),
(22, NULL, NULL, '', '', '0000-00-00', 'test2@2.com', '$2y$10$acufACjBCCYwOoMWgNvDsup3pAazdrYJneOxtIr2E31bhyLf8MxP6'),
(23, NULL, 'admin', 'Damien', 'Lebon', '2000-03-28', 'damien.lebon974.44@gmail.com', '$2y$10$8IOsTIl/uD/9V1iOMeKEg.Wp2rgI7KtOF.uJJU/rdyHkfAmlIEsaW'),
(24, NULL, NULL, 'eloise', 'chauvin', '2000-10-21', 'elo@test.com', '$2y$10$cJbl1.0GuXu7r/l17xOOgeFIxiL8q6BhVT5Nn0qhVwIQ3qHy2K1wC'),
(25, NULL, NULL, 'PRENOM', 'TEST', '0000-00-00', 'test123@gmail.com', '$2y$10$6W1oEq7MVngW1i7TGXgvYeVbC9tbeCS0SuqYfgI/YFT8cIz.2rLe.'),
(28, NULL, 'admin', 'Lucas', 'Delobelle', '1900-01-01', 'chmod777@gmail.com', '$2y$10$IN1DcKGL4sjVt/4yD8bJlO9Ne8m/2DDxN2m9X4ZcZHl7zdfwiYiZq'),
(32, NULL, NULL, 'msgSuccess', 'TEST', '2023-09-12', 'msg@success.com', '$2y$10$3wRu8TExBt4122Wa7MQa8Oba1jtlImMBWg.XBN6SLqGj/1rd67B2O');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_addresses1` FOREIGN KEY (`addresses_id`) REFERENCES `addresses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;