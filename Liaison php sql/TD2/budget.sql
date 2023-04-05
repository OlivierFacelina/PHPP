-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 14 avr. 2021 à 17:59
-- Version du serveur :  10.5.8-MariaDB-log
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `budget`
--

-- --------------------------------------------------------

--
-- Structure de la table `expenses`
--

CREATE TABLE `expenses` (
  `exp_id` int(11) NOT NULL,
  `exp_date` datetime NOT NULL,
  `exp_amount` decimal(10,0) NOT NULL,
  `exp_label` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `expenses`
--

INSERT INTO `expenses` (`exp_id`, `exp_date`, `exp_amount`, `exp_label`, `user_id`) VALUES
(1, '2021-04-16 00:00:00', '500', 'Achat', 1);

-- --------------------------------------------------------

--
-- Structure de la table `incomes`
--

CREATE TABLE `incomes` (
  `inc_id` int(11) NOT NULL,
  `inc_amount` decimal(10,0) NOT NULL,
  `inc_receipt_date` datetime NOT NULL,
  `inc_cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `incomes`
--

INSERT INTO `incomes` (`inc_id`, `inc_amount`, `inc_receipt_date`, `inc_cat_id`, `user_id`) VALUES
(2, '1500', '2021-04-22 00:00:00', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `incomes_categories`
--

CREATE TABLE `incomes_categories` (
  `inc_cat_id` int(11) NOT NULL,
  `inc_cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `incomes_categories`
--

INSERT INTO `incomes_categories` (`inc_cat_id`, `inc_cat_name`) VALUES
(1, 'Salaire'),
(2, 'BIC'),
(3, 'BNC'),
(4, 'Pension'),
(5, 'Rente'),
(6, 'Produit financier'),
(7, 'Allocation chômage'),
(8, 'Allocation familial'),
(9, 'Autre allocation');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `birth_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `birth_date`) VALUES
(1, 'John', 'doe', '1992-01-06 00:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`exp_id`),
  ADD KEY `expenses_users_FK` (`user_id`);

--
-- Index pour la table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`inc_id`),
  ADD KEY `incomes_users_FK` (`user_id`),
  ADD KEY `incomes_inc_cat_id_FK` (`inc_cat_id`);

--
-- Index pour la table `incomes_categories`
--
ALTER TABLE `incomes_categories`
  ADD PRIMARY KEY (`inc_cat_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `inc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `incomes_categories`
--
ALTER TABLE `incomes_categories`
  MODIFY `inc_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_users_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `incomes`
--
ALTER TABLE `incomes`
  ADD CONSTRAINT `incomes_inc_cat_id_FK` FOREIGN KEY (`inc_cat_id`) REFERENCES `incomes_categories` (`inc_cat_id`),
  ADD CONSTRAINT `incomes_users_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
