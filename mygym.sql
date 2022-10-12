-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 oct. 2022 à 16:28
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mygym`
--

-- --------------------------------------------------------

--
-- Structure de la table `exercice`
--

CREATE TABLE `exercice` (
  `exercice_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `exercice`
--

INSERT INTO `exercice` (`exercice_id`, `title`, `img`, `date_created`, `tags`) VALUES
(1, 'Curl barre-ondulée', 'https://www.espacecorps-espritforme.fr/wp-content/uploads/2010/12/curl-barre.png', '2022-10-12 07:30:54', 'barre,biceps,debout'),
(2, 'Curl Marteau', 'http://www.fitnition.fr/wp-content/uploads/2017/06/Curls-biceps-prise-mateau.jpg', '2022-10-12 07:30:54', 'biceps,haltère,debout');

-- --------------------------------------------------------

--
-- Structure de la table `performance`
--

CREATE TABLE `performance` (
  `performance_id` int(11) NOT NULL,
  `exercice_id` int(11) NOT NULL,
  `reps` varchar(255) NOT NULL,
  `series` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lift` varchar(255) NOT NULL,
  `perf_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `performance`
--

INSERT INTO `performance` (`performance_id`, `exercice_id`, `reps`, `series`, `user_id`, `lift`, `perf_date`) VALUES
(1, 1, '12,10,8', 3, 1, '10,10,10', '2022-10-12 07:39:04'),
(2, 2, '8,8,8', 3, 1, '15,15,15', '2022-10-12 07:39:04'),
(3, 1, '10,11,11', 3, 1, '10,9,9', '2022-10-12 07:53:15'),
(4, 1, '10,11,11', 3, 1, '10,10,10', '2022-10-12 07:54:15'),
(5, 1, '11,10,11', 3, 1, '9,9,9', '2022-10-12 07:57:58');

-- --------------------------------------------------------

--
-- Structure de la table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `title_program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `program`
--

INSERT INTO `program` (`program_id`, `user_id`, `date_created`, `title_program`) VALUES
(1, 1, '2022-10-12 07:27:36', 'La sueur');

-- --------------------------------------------------------

--
-- Structure de la table `routine`
--

CREATE TABLE `routine` (
  `exercice_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `week` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `routine`
--

INSERT INTO `routine` (`exercice_id`, `program_id`, `day`, `week`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `program_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `actual_day` int(11) NOT NULL,
  `actual_week` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `mail`, `pwd`, `program_id`, `date_created`, `actual_day`, `actual_week`) VALUES
(1, 'benjamin@gmail.com', '$2y$10$N31qiKVEJggB7ZLIFtwAG.FINzx7M9cS76wKvN4fSV8M4RWUBgwUC', 1, '2022-10-12 07:13:18', 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `exercice`
--
ALTER TABLE `exercice`
  ADD PRIMARY KEY (`exercice_id`);

--
-- Index pour la table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`performance_id`);

--
-- Index pour la table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `exercice`
--
ALTER TABLE `exercice`
  MODIFY `exercice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `performance`
--
ALTER TABLE `performance`
  MODIFY `performance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
