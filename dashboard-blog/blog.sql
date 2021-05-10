-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 05 mai 2021 à 13:27
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `contact`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL,
  `notes` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `address1`, `group`, `notes`, `date_added`) VALUES
(51, 'Rama', 'Blevins', 'kugozewop@mailinator.com', '+1 (466) 765-1965', 'Facere ut ipsa volu', 'friends', 'Officia non eum id v', '2021-03-03 18:26:38'),
(52, 'Nehru', 'Miranda', 'sebonu@mailinator.com', '+1 (803) 563-2403', 'Ad voluptatibus non ', 'business', 'Reprehenderit in ali', '2021-03-04 08:19:46'),
(53, 'Hayes', 'Sellers', 'xofotinyt@mailinator.com', '+1 (369) 288-3529', 'Ut qui nihil expedit', 'family', 'Deserunt ut id qui c', '2021-03-04 10:19:53'),
(54, 'Echo', 'Justice', 'lezez@mailinator.com', '+1 (608) 736-2075', 'Odio doloremque duis', 'business', 'Pariatur Distinctio', '2021-03-04 10:41:31'),
(55, 'Doris', 'Deleon', 'qapilynal@mailinator.com', '+1 (408) 206-3641', 'Consectetur nostrum', 'family', 'Ea occaecat recusand', '2021-03-04 12:35:48'),
(56, 'Alfreda', 'Daniels', 'kunovola@mailinator.com', '+1 (967) 732-8319', 'Iusto mollitia est o', 'business', 'Et aut non quia dolo', '2021-04-12 20:37:52'),
(57, 'Zephr', 'Sears', 'wenihe@mailinator.com', '+1 (115) 176-8004', 'Molestiae voluptatem', 'family', 'Et quibusdam laborum', '2021-04-13 08:54:39'),
(58, 'Colin', 'Byers', 'zabecimyj@mailinator.com', '+1 (606) 478-6589', 'Ea fugiat qui sit a', 'business', 'Ipsam rem in velit ', '2021-04-13 10:09:59');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'abdelilah', 'abdilahzroud1984@mail.com', '1234', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
