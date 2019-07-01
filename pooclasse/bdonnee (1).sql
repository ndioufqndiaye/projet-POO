-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 01 Juillet 2019 à 08:57
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdonnee`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `id_bat` int(11) NOT NULL,
  `nom_bat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `batiment`
--

INSERT INTO `batiment` (`id_bat`, `nom_bat`) VALUES
(1, 'batiment A'),
(2, 'batimentB'),
(3, 'batimentC'),
(4, 'batiment D'),
(5, 'batiment E'),
(6, 'batiment F');

-- --------------------------------------------------------

--
-- Structure de la table `boursier`
--

CREATE TABLE `boursier` (
  `id_etu` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `boursier`
--

INSERT INTO `boursier` (`id_etu`, `id_type`) VALUES
(70, 1),
(71, 2),
(99, 2);

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id_chambre` int(11) NOT NULL,
  `nom_chambre` varchar(150) NOT NULL,
  `id_bat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`id_chambre`, `nom_chambre`, `id_bat`) VALUES
(1, 'chambre1', 1),
(2, 'chambre2', 1),
(3, 'chambre3', 2),
(4, 'chambre4', 3),
(5, 'chambre5', 3),
(6, 'chambre6', 5);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etu` int(11) NOT NULL,
  `matricule` varchar(150) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `date_naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etu`, `matricule`, `nom`, `prenom`, `email`, `date_naissance`) VALUES
(1, 'ND123', 'ndiaye', 'ndioufa', 'ndioufa@gmail.com', '2019-06-04'),
(6, 'A12', 'ndiaye', 'amy', 'ndiaye@gmail.com', '2019-06-19'),
(40, 'AM412', 'Diouf', 'naby', 'nv@gmail.com', '2019-06-04'),
(51, 'A122', 'ba', 'abdou', 'abdou@gmail.com', '2019-06-12'),
(64, 'FA754', 'diop', 'fatou', 'fa@gmail.com', '1955-02-02'),
(70, 'ND41', 'sarr', 'ndeye', 'ndeye@gmail.com', '1955-02-02'),
(71, 'AS123', 'gueye', 'Moussa', 'sa@gmail.com1', '2019-06-14'),
(72, 'AS123', 'fall', 'codou', 'nd@gmail.com1', '2019-06-14'),
(86, 'AS123', 'diop', 'modou', 'seyna@gmail.com', '2019-06-07'),
(88, 'DC456', 'Sall', 'yacine', 'yas@gmail.com', '2019-06-21'),
(89, 'OM412', 'ngom', 'yama', 'ya@gmail.com', '2019-06-06'),
(90, 'DE125', 'sow', 'ouseynou', 'ouz@gmail.com', '2019-06-05'),
(91, 'AS123', 'fall', 'doudou', 'dou@gmail.com1', '2019-06-14'),
(92, 'SA74', 'faye', 'khady', 'dikha@gmail.com', '2011-01-06'),
(93, 'SA74', 'faye', 'khady', 'dikha@gmail.com', '2011-01-06'),
(94, 'D854', 'sall', 'awa', 'sa@gmail.com', '2017-06-08'),
(95, 'SA54', 'dem', 'yacine', 'dem@gmail.com', '2019-06-12'),
(96, 'SA54', 'dem', 'yacine', 'dem@gmail.com', '2019-06-12'),
(99, 'TA85', 'ba', 'tamara', 'ta@gmail.com', '1995-06-19'),
(100, 'K524', 'diouf', 'khady', 'dikha@gmail.com', '2019-06-05');

-- --------------------------------------------------------

--
-- Structure de la table `loyer`
--

CREATE TABLE `loyer` (
  `id_boursier` int(11) NOT NULL,
  `id_chambre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `loyer`
--

INSERT INTO `loyer` (`id_boursier`, `id_chambre`) VALUES
(95, 1),
(90, 4),
(100, 4),
(94, 6);

-- --------------------------------------------------------

--
-- Structure de la table `non_boursier`
--

CREATE TABLE `non_boursier` (
  `id_etu` int(11) NOT NULL,
  `adresse` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `non_boursier`
--

INSERT INTO `non_boursier` (`id_etu`, `adresse`) VALUES
(1, 'bopp rue6'),
(6, 'bb'),
(40, 'dk'),
(51, 'thies'),
(64, 'DAKAR'),
(96, 'mbour');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL,
  `montant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id_type`, `libelle`, `montant`) VALUES
(1, 'pension', 20000),
(2, 'demi_pension', 10000);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`id_bat`);

--
-- Index pour la table `boursier`
--
ALTER TABLE `boursier`
  ADD PRIMARY KEY (`id_etu`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_etu` (`id_etu`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_chambre`),
  ADD KEY `id_bat` (`id_bat`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etu`);

--
-- Index pour la table `loyer`
--
ALTER TABLE `loyer`
  ADD PRIMARY KEY (`id_boursier`),
  ADD KEY `id_boursier` (`id_boursier`),
  ADD KEY `id_chambre` (`id_chambre`);

--
-- Index pour la table `non_boursier`
--
ALTER TABLE `non_boursier`
  ADD PRIMARY KEY (`id_etu`),
  ADD KEY `id_etu` (`id_etu`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `batiment`
--
ALTER TABLE `batiment`
  MODIFY `id_bat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id_chambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `boursier`
--
ALTER TABLE `boursier`
  ADD CONSTRAINT `boursier_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`),
  ADD CONSTRAINT `boursier_ibfk_2` FOREIGN KEY (`id_etu`) REFERENCES `etudiant` (`id_etu`);

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`id_bat`) REFERENCES `batiment` (`id_bat`);

--
-- Contraintes pour la table `loyer`
--
ALTER TABLE `loyer`
  ADD CONSTRAINT `loyer_ibfk_1` FOREIGN KEY (`id_boursier`) REFERENCES `etudiant` (`id_etu`),
  ADD CONSTRAINT `loyer_ibfk_2` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`id_chambre`);

--
-- Contraintes pour la table `non_boursier`
--
ALTER TABLE `non_boursier`
  ADD CONSTRAINT `non_boursier_ibfk_1` FOREIGN KEY (`id_etu`) REFERENCES `etudiant` (`id_etu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
