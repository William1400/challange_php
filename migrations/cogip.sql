-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 29 nov. 2021 à 20:11
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE `companies` (
  `id_compagnies` int(11) NOT NULL,
  `name_company` varchar(255) NOT NULL,
  `country_company` varchar(255) NOT NULL,
  `tva_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id_compagnies`, `name_company`, `country_company`, `tva_number`) VALUES
(1, 'Jouets Jean-Michel', 'France', 'FR290 236 765'),
(2, 'Phoque off', 'Belgique', 'BE289 890 652'),
(3, 'Dunder Mifflin', 'France', 'FR290 829 198'),
(4, 'Raviga', 'United States', 'US376 287 117'),
(5, 'Belgalol', 'Belgique', 'BE083 710 399'),
(6, 'ElectricPower', 'Italie', 'IT387 129 387'),
(7, 'Pierre Cailloux', 'France', 'FR890 376 284');

-- --------------------------------------------------------

--
-- Structure de la table `company_type`
--

CREATE TABLE `company_type` (
  `id_company_type` int(11) NOT NULL,
  `compagny_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `company_type`
--

INSERT INTO `company_type` (`id_company_type`, `compagny_type`) VALUES
(1, 'Client'),
(2, 'Fournisseur');

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `id_invoices` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_numb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`id_invoices`, `invoice_date`, `invoice_numb`) VALUES
(1, '2021-11-01', 'F2013499-005'),
(2, '2021-11-01', 'F20125687-005'),
(3, '2021-11-02', 'F29087626-105'),
(4, '2021-11-02', 'F10476537-104'),
(5, '2021-11-03', 'F10976812-109'),
(6, '2021-11-03', 'F10937678-109'),
(7, '2021-11-04', 'F10987628-104');

-- --------------------------------------------------------

--
-- Structure de la table `peoples`
--

CREATE TABLE `peoples` (
  `id_peoples` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `peoples`
--

INSERT INTO `peoples` (`id_peoples`, `firstname`, `lastname`, `email`, `phone_number`) VALUES
(1, 'Jean-Michel', 'Jouets', 'jeanmi@jmjouets.com', '555-5467'),
(2, 'Jian', 'Yang', 'jian.yang@phoquoff.com', '555-7692'),
(3, 'Dwight', 'Schrute', 'dwight.schrute@ddmfl.com', '5555-0912'),
(4, 'Peter', 'Gregory', 'peter.gregory@raviga.com', '5555-9876'),
(5, 'Gavin', 'Belson', 'gavin.belson@belgalol.com', '5555-0270'),
(6, 'Cameron', 'Howe', 'cameron.howe@electricpower.com', '5555-1800'),
(7, 'Pierre', 'Cailloux', 'pierre@caillou.com', '5555-0116');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id_compagnies`);

--
-- Index pour la table `company_type`
--
ALTER TABLE `company_type`
  ADD PRIMARY KEY (`id_company_type`);

--
-- Index pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id_invoices`);

--
-- Index pour la table `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`id_peoples`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `id_compagnies` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `company_type`
--
ALTER TABLE `company_type`
  MODIFY `id_company_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id_invoices` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `peoples`
--
ALTER TABLE `peoples`
  MODIFY `id_peoples` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`id_compagnies`) REFERENCES `peoples` (`id_peoples`);

--
-- Contraintes pour la table `company_type`
--
ALTER TABLE `company_type`
  ADD CONSTRAINT `company_type_ibfk_1` FOREIGN KEY (`id_company_type`) REFERENCES `companies` (`id_compagnies`);

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`id_invoices`) REFERENCES `companies` (`id_compagnies`),
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`id_invoices`) REFERENCES `peoples` (`id_peoples`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
