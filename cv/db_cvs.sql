-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 30 jan. 2018 à 05:06
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_cvs`
--

-- --------------------------------------------------------

--
-- Structure de la table `codeuses`
--

CREATE TABLE `codeuses` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenoms` varchar(50) NOT NULL,
  `datenais` text NOT NULL,
  `image` text NOT NULL,
  `specialisation` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` text NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `codeuses`
--

INSERT INTO `codeuses` (`id`, `nom`, `prenoms`, `datenais`, `image`, `specialisation`, `email`, `mdp`, `telephone`, `resume`) VALUES
(1, 'EHOUO', 'Ariane', '1978-04-12', '12744131_770513723080746_5497152316734641463_n.jpg', '', 'esehou@gmail.com', 'azerty', '45967815', 'sdfghjk'),
(2, 'zertyu', 'ertyuio', '', '21641615_1120529604746476_123181220_n.jpg', '', 'rtyuiop@oiuyt.cfghj', 'dfghjkl', 'dfghjklm', 'ertyuiop'),
(3, 'SORO', 'Ariane', '2007-01-10', '23376472_1913451972250751_6355238725918097322_n.jpg', '', 'salimata@salimata.com', '123456', '07312252', 'yes pour tout'),
(4, 'SORO', 'Ariane', '2007-01-10', '23376472_1913451972250751_6355238725918097322_n.jpg', '', 'salimata@salimata.com', '123456', '07312252', 'yes pour tout'),
(5, 'SORO', 'Ariane', '2007-01-10', '23376472_1913451972250751_6355238725918097322_n.jpg', '', 'salimata@salimata.com', '123456', '07312252', 'yes pour tout'),
(6, 'EHOUO', 'Danielle', '1956-04-12', '22528497_1139592899506158_315643807663639074_n.jpg', 'coding', 'esehou@gmail.com', 'azerty', '49647895', 'dfghjk'),
(7, 'YEO', 'Aicha', '1987-05-12', 'yeo.jpg', 'Coding', 'aicha@gmail.com', 'aichayeo', '07198545', 'Je suis front-end web developpeuse chez Sheisthe code. Passionn\" en ui/ux design');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `githud` int(11) NOT NULL,
  `id_codeuses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `id` int(11) NOT NULL,
  `annee_obtention` text NOT NULL,
  `libdiplom` text NOT NULL,
  `ecole` varchar(100) NOT NULL,
  `id_codeuses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `titre_occupe` varchar(50) NOT NULL,
  `date_debut` text NOT NULL,
  `date_fin` text NOT NULL,
  `entreprise` varchar(50) NOT NULL,
  `id_codeuses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `interets`
--

CREATE TABLE `interets` (
  `id` int(11) NOT NULL,
  `titre_interet` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `codeuses`
--
ALTER TABLE `codeuses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `interets`
--
ALTER TABLE `interets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `codeuses`
--
ALTER TABLE `codeuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `interets`
--
ALTER TABLE `interets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
