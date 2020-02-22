-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 19 fév. 2021 à 13:06
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hrm`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id_emp` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `date_naiss` date NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(320) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `date_req` date NOT NULL,
  `division` varchar(255) NOT NULL,
  `sit_famille` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id_emp`, `fname`, `lname`, `genre`, `date_naiss`, `tel`, `email`, `address`, `date_req`, `division`, `sit_famille`) VALUES
(1, 'btissam', '', 'Genre', '0000-00-00', '', '', '', '0000-00-00', 'Division', 'Situation Familiale'),
(2, 'fkjdhg', 'fg', 'Genre', '0000-00-00', '', '', '', '0000-00-00', 'Division', 'Situation Familiale'),
(3, 'issam', '', 'Genre', '0000-00-00', '', '', '', '0000-00-00', 'Division', 'Situation Familiale'),
(4, 'test', 'test', 'homme', '2020-02-26', '0661245387', 'test@test', 'test jh jh jh jh jh jh jh jh jh', '2020-02-26', 'DAR', 'DBM'),
(5, '', '', 'Genre', '0000-00-00', '', '', '', '0000-00-00', 'Division', 'Situation Familiale'),
(6, 'btissam', 'yaqine', 'femme', '2021-02-11', '08901804927', 'btissam123@gmail.com', 'hay mohemmed', '2021-02-12', 'DAR', 'DBM');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(320) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `role`, `fname`, `lname`, `division`, `service`, `create_at`) VALUES
(1, 'btissam', 'btissam', 'admin', NULL, NULL, NULL, NULL, '2020-02-26 16:13:53'),
(2, 'anas', 'anas', 'user', NULL, NULL, NULL, NULL, '2020-02-26 17:17:11');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id_emp`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
