-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 13 nov. 2024 à 14:15
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `libellé` varchar(256) NOT NULL,
  `prix` float NOT NULL,
  `qte` int(11) NOT NULL,
  `des` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `promo` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `libellé`, `prix`, `qte`, `des`, `image`, `promo`) VALUES
(0, 'asus i7 To', 2500, 20, 'Pc Portable Asus X515EP, Processeur Intel Core™ I7-1165G7 Quad-Core (2,8GHz up to 4,7GHz, 12Mo Intel Smart Cache), Mémoire RAM 8Go, Disque Dur 512Go SSD, Carte graphique NVIDIA GEFORCE MX330 2Go, Wifi, Bluetooth, 1xUSB 3.2 Gen1 Type-A, 1xUSB 3.2 Gen1 Type-', 'https://picsum.photos/id/237/200/300', 0),
(1, 'HP i7 To', 3500, 20, 'Pc Portable HP X515EP, Processeur Intel Core™ I7-1165G7 Quad-Core (2,8GHz up to 4,7GHz, 12Mo Intel Smart Cache), Mémoire RAM 8Go, Disque Dur 512Go SSD, Carte graphique NVIDIA GEFORCE MX330 2Go, Wifi, Bluetooth, 1xUSB 3.2 Gen1 Type-A, 1xUSB 3.2 Gen1 Type-C,', 'https://picsum.photos/id/237/200/300', 1),
(2, 'asus i3 To', 2800, 10, 'Pc Portable Asus X515EP, Processeur Intel Core™ I7-1165G7 Quad-Core (2,8GHz up to 4,7GHz, 12Mo Intel Smart Cache), Mémoire RAM 8Go, Disque Dur 512Go SSD, Carte graphique NVIDIA GEFORCE MX330 2Go, Wifi, Bluetooth, 1xUSB 3.2 Gen1 Type-A, 1xUSB 3.2 Gen1 Type-', 'https://picsum.photos/id/237/200/300', 0),
(3, 'Cable USB', 3000, 6, ' Il permet le transfert de données et la charge minimale des anciennes versions, mais aussi de fournir une alimentation jusqu\'à 100 W', 'https://picsum.photos/id/237/200/300', 1),
(4, 'asus i7 To', 2500, 20, 'Pc Portable Asus X515EP, Processeur Intel Core™ I7-1165G7 Quad-Core (2,8GHz up to 4,7GHz, 12Mo Intel Smart Cache), Mémoire RAM 8Go, Disque Dur 512Go SSD, Carte graphique NVIDIA GEFORCE MX330 2Go, Wifi, Bluetooth, 1xUSB 3.2 Gen1 Type-A, 1xUSB 3.2 Gen1 Type-', 'https://picsum.photos/id/237/200/300', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
