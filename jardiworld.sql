-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 06 Décembre 2018 à 14:24
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jardiworld`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `libelle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'Clôtures Eden'),
(2, 'Clôtures Helsinki'),
(3, 'Clôtures Venise');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `reference` int(11) NOT NULL,
  `essence` varchar(250) NOT NULL,
  `traitement` varchar(250) NOT NULL,
  `garantie` varchar(250) NOT NULL,
  `cadre` varchar(250) NOT NULL,
  `remplissage` varchar(250) NOT NULL,
  `assemblage` varchar(250) NOT NULL,
  `miniature` varchar(250) NOT NULL,
  `chemin` varchar(250) NOT NULL,
  `consultation` int(250) NOT NULL,
  `categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `designation`, `reference`, `essence`, `traitement`, `garantie`, `cadre`, `remplissage`, `assemblage`, `miniature`, `chemin`, `consultation`, `categorie`) VALUES
(1, 'Panneau Eden droit', 10020, 'Epicéa', 'Classe 4 en autoclave', '20 ans hors-sol et 15 ans en contact avec le sol', '46 x 68 mm', 'lamelles rabotées', 'pré-monté avec vis inox', '10020.jpg', '10020-big.jpg', 429, 1),
(2, 'Panneau Eden droit ajouré', 10021, 'Epicéa', 'Classe 4 en autoclave', '20 ans hors-sol et 15 ans en contact avec le sol', '46 x 68 mm', 'lamelles rabotées', 'pré-monté avec vis inox', '10021.jpg', '10021-big.jpg', 528, 1),
(3, 'Panneau Helsinki droit', 10090, 'Epicéa', 'Classe 4 en autoclave', '20 ans hors-sol et 15 ans en contact avec le sol', '46 x 68 mm', 'Lames bombées', 'pré-monté avec vis inox et lames assemblées à mi-bois', '10090.jpg', '10090-big.jpg', 203, 2),
(4, 'Panneau Helsinki droit chapeau de gendarme', 10091, 'Epicéa', 'Classe 4 en autoclave', '20 ans hors-sol et 15 ans en contact avec le sol', '46 x 68 mm', 'Lames bombées', 'pré-monté avec vis inox et lames assemblées à mi-bois', '10091.jpg', '10091-big.jpg', 615, 2),
(5, 'Panneau Venise droit', 10060, 'Epicéa', 'Classe 4 en autoclave', '20 ans hors-sol et 15 ans en contact avec le sol', '46 x 68 mm', 'lamelles rabotées', 'pré-monté avec vis inox et lames assemblées à mi-bois', '10060.jpg', '10060-big.jpg', 1005, 3),
(6, 'Panneau Venise en chapeau de gendarme', 10061, 'Epicéa', 'Classe 4 en autoclave', '20 ans hors-sol et 15 ans en contact avec le sol', '46 x 68 mm', 'lamelles rabotées', 'pré-monté avec vis inox et lames assemblées à mi-bois', '10061.jpg', '10061-big.jpg', 1225, 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie` (`categorie`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_categorie_produit` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
