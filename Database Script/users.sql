-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 22 jan. 2020 à 00:48
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `users`
--

-- --------------------------------------------------------

--
-- Structure de la table `amitie`
--

CREATE TABLE `amitie` (
  `Utilisateur1` int(11) NOT NULL,
  `Utilisateur2` int(11) NOT NULL,
  `Etat` varchar(10) NOT NULL,
  `IDA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `amitie`
--

INSERT INTO `amitie` (`Utilisateur1`, `Utilisateur2`, `Etat`, `IDA`) VALUES
(8, 9, 'accepted', 1),
(3, 7, 'accepted', 3),
(6, 5, 'accepted', 4),
(3, 9, 'pending', 5),
(8, 7, 'pending', 6),
(6, 7, 'accepted', 7),
(4, 7, 'pending', 8),
(5, 3, 'accepted', 20);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `IdU1` int(11) NOT NULL,
  `IdU2` int(11) NOT NULL,
  `Date` date NOT NULL,
  `contenu` text NOT NULL,
  `IdM` int(11) NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`IdU1`, `IdU2`, `Date`, `contenu`, `IdM`, `Time`) VALUES
(5, 3, '2020-01-20', 'Salut!', 1, '21:16:00'),
(5, 3, '2020-01-21', ':)', 2, '20:10:00'),
(3, 5, '2020-01-21', 'Salut', 3, '21:17:00'),
(5, 3, '2020-01-21', 'dacccord', 8, '23:16:00'),
(5, 3, '2020-01-22', 'aloo', 12, '12:07:28');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `IDU` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `DateNaiss` date NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Adresse` varchar(20) NOT NULL,
  `Interets` varchar(1000) NOT NULL,
  `MotDePasse` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Connexion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IDU`, `Nom`, `Prenom`, `DateNaiss`, `Email`, `Adresse`, `Interets`, `MotDePasse`, `Gender`, `Connexion`) VALUES
(3, 'Mesraf', 'Ayoub', '1999-03-02', 'ayoubmes@gmail.com', 'Fes', 'football/anime/nature/HighTech/Art/Informatique/GameDev/Basketball/Gym/Musique/gamming', '1234', 'Male', 'offline'),
(4, 'Lachhab ', 'nouamane', '1998-11-14', 'nouamaneLachhab@gmai', 'Taza', 'football/nature/HighTech/Art/Informatique/Musique/GameDev/gamming', '1234', 'Male', 'offline'),
(5, 'Bennadi', 'Kaoutar', '1998-05-09', 'koukouben@gmail.com', 'Fes', 'anime/nature/HighTech/Art/Informatique/Musique/gamming', '1234', 'Female', 'offline'),
(6, 'Hattach ', 'Kamal', '1996-07-15', 'kamelhatt@gmail.com', 'Fes', 'nature/Musique/HighTech/Informatique/gamming', '1234', 'Male', 'offline'),
(7, 'Salma', 'alaoui', '1999-06-04', 'salmaal@gmail.com', 'Rabat', 'anime/nature/HighTech/Art/Informatique/Musique/GameDev/Politique/gamming', '1234', 'Female', 'offline'),
(8, 'Bazzit', 'Ahmed', '1992-01-01', 'AhmedBaz@gmail.com', '1234', 'football/anime/nature/HighTech/Art/Informatique/GameDev/Basketball/Gym/Politique/Musique/gamming', '1234', 'Male', 'offline'),
(9, 'DidiOmar', 'Safae', '1997-04-05', 'safaeDid@gmail.com', 'Fes', 'nature/HighTech/Informatique/', '1234', 'Female', 'offline');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `amitie`
--
ALTER TABLE `amitie`
  ADD PRIMARY KEY (`IDA`),
  ADD KEY `Utilisateur1` (`Utilisateur1`),
  ADD KEY `Utilisateur2` (`Utilisateur2`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`IdM`),
  ADD KEY `Fku1` (`IdU1`),
  ADD KEY `Fku2` (`IdU2`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IDU`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `amitie`
--
ALTER TABLE `amitie`
  MODIFY `IDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `IdM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IDU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `amitie`
--
ALTER TABLE `amitie`
  ADD CONSTRAINT `amitie_ibfk_1` FOREIGN KEY (`Utilisateur1`) REFERENCES `utilisateur` (`IDU`),
  ADD CONSTRAINT `amitie_ibfk_2` FOREIGN KEY (`Utilisateur2`) REFERENCES `utilisateur` (`IDU`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `Fku1` FOREIGN KEY (`IdU1`) REFERENCES `utilisateur` (`IDU`),
  ADD CONSTRAINT `Fku2` FOREIGN KEY (`IdU2`) REFERENCES `utilisateur` (`IDU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
