-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 07 juin 2019 à 12:32
-- Version du serveur :  10.1.40-MariaDB
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id_mail` text NOT NULL,
  `url_photo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`id_mail`, `url_photo`) VALUES
('nisi.julien', 'http://[::1]/CodeIgniter-3.1.10/img/typeneurone6.png'),
('nisi.julien', 'http://[::1]/CodeIgniter-3.1.10/img/Glande_surrenale_fr.jpg'),
('nisi.julien@gmail.com', 'http://[::1]/CodeIgniter-3.1.10/img/typeneurone7.png'),
('nisi.julien@gmail.com', 'http://[::1]/CodeIgniter-3.1.10/img/mitose2.png'),
('shauna@gmail.com', 'http://[::1]/CodeIgniter-3.1.10/img/poto13.jpg'),
('shauna@gmail.com', 'http://[::1]/CodeIgniter-3.1.10/img/photo22.jpg'),
('shauna@gmail.com', 'http://[::1]/CodeIgniter-3.1.10/img/46503970_765312233823820_9218949294281719808_n.jpg'),
('shauna@gmail.com', 'http://[::1]/CodeIgniter-3.1.10/img/50610813_2092706170775829_8442811749995905024_n.jpg'),
('shauna@gmail.com', 'http://[::1]/CodeIgniter-3.1.10/img/photofb.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `date_inscription` date NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `cheveux` varchar(255) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `yeux` varchar(255) DEFAULT NULL,
  `tdp` varchar(255) DEFAULT NULL,
  `tdt` varchar(255) DEFAULT NULL,
  `tdh` varchar(255) DEFAULT NULL,
  `tatouage` varchar(255) DEFAULT NULL,
  `piercing` varchar(255) DEFAULT NULL,
  `bio` longtext,
  `photo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `pass`, `email`, `nom`, `date_inscription`, `prenom`, `cheveux`, `taille`, `poids`, `yeux`, `tdp`, `tdt`, `tdh`, `tatouage`, `piercing`, `bio`, `photo`) VALUES
(1, 'Julien Nisi', '123456', 'nisi.julien@gmail.com', 'Nisi', '2019-03-01', 'Julien', 'Noir', 174, 60, 'Bleu', NULL, NULL, NULL, NULL, NULL, 'Bonjo\r\n\r\n\r\n\r\nurs je me suis inscrit sur ce site car j\'ai envie de percer de de réussir. Depuis petit je m\'intersse à ce domaine et donc en faire ma vie. Mais bon vu que je suis étudiant je n\'arrive pas à prendre le temps à faire le tour des agences sur internet ou plus donc je fais apeller ce site pour pouvoir m\'aider dans mes démarche', 'http://[::1]/CodeIgniter-3.1.10/img/julien1.png'),
(6, 'tuning68', 'julienestleplusbeau', 'julien.nisi@epitech.eu', 'nisi', '0000-00-00', 'julien', 'noir', 178, 89, 'brun', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'tuningd', 'julienle', 'heritiana.goetz@gmail.com', 'nisi', '0000-00-00', 'julien', 'noir', 178, 89, 'brun', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'tuning68', 'julienestundieu', 'julien.nisi@epitech.eu', 'nisi', '0000-00-00', 'julien', 'noir', 178, 89, 'brun', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'shauna', 'shaunacabrol', 'shauna@gmail.com', 'cabrol', '0000-00-00', 'shauna', 'brun', 170, 49, 'noisette', NULL, NULL, NULL, NULL, NULL, 'Bonjours je suis la plus belle\r\n', 'http://[::1]/CodeIgniter-3.1.10/img/photo21.jpg'),
(11, 'tamere', '123456', 'tamere@sfr.fr', 'nisi', '0000-00-00', 'julien', 'noir', 178, 89, 'brun', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'BABALEPD', '123456', 'bastian.nisi@gmail.com', 'nisi', '0000-00-00', 'julien', 'noir', 178, 89, 'brun', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'test1', '123456', 'test@gmail.com', 'klein', '0000-00-00', 'nicola', 'blonde', 170, 70, 'brun', NULL, NULL, NULL, NULL, NULL, 'Le OnePlus 6 est décliné en trois coloris. Mirror Black, la version que nous avons reçue, est particulièrement réceptrice des empreintes digitales. Le versions Midnight Black et Silk White, qui imitent avec brio un aspect mat, nous semblent moins salissantes. Si vous êtes accro à la propreté, on ne peut que vous recommander d’opter pour ces couleurs, qui ne sont malheureusement proposées qu’en versions 128 et 256 Go (569 et 619 euros). Notons que l’appareil n’est pas compatible avec la recharge sans-fil Qi, malgré son dos en verre, et qu’il faudra sans doute attendre un OnePlus 6T pour en bénéficier. \r\n\r\nAu dos du OnePlus 6, on trouve toujours un capteur d’empreintes digitales. Sa forme ovale plaira sûrement à certains, même si notre préférence va à un cercle, plus esthétique. Placé sous le double module caméra, il est pile au bon endroit pour être déclenché lorsqu’on attrape son smartphone. Sans surprise, il est toujours aussi rapide, et déverrouille l’appareil immédiatement. Le très pratique interrupteur à trois positions, qui permet de passer en mode vibreur ou silencieux d\'un geste, bascule quant à lui sur la tranche droite de l’appareil.', NULL),
(15, 'LEBG', '123456', 'lebgdu25@gmail.com', 'abc', '0000-00-00', 'dd', 'brun', 300, 120, 'violette', NULL, NULL, NULL, NULL, NULL, 'je suis le plus bien', 'http://[::1]/CodeIgniter-3.1.10/img/script.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
