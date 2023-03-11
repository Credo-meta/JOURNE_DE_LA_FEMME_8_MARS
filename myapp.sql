-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  sam. 11 mars 2023 à 12:59
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `myapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posts_id` int(11) NOT NULL,
  `libele` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `posts_id`, `libele`) VALUES
(1, 5, 'houeto\r\n'),
(11, 5, 'houetoc'),
(12, 47, 'adminadmin'),
(4, 52, 'credocredo'),
(5, 8, 'ArielPrisca'),
(6, 8, 'ArielPrisca');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `cretead_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `cretead_at`) VALUES
(1, ' Angélique Kidjo ', '\r\nAngélique Kidjo, l\'énergique auteur-compositeur-interprète et militante de la République du Bénin, représente un phénomène africain rare.\r\n\r\nÀ bien des égards, elle appartient à l\'illustre lignée musicale des “Mama Africa”, à l\'instar de Miriam Makeba, Letta Mbulu et Yvonne Chaka Chaka d\'Afrique du Sud, de Cesaria Evora du Cap-Vert et de Oumou Sangare du Mali.\r\n\r\nCes grandes personnalités féminines se distinguent par leur allure royale, un grand sens de la responsabilité dans le partage de l\'héritage culturel de l\'Afrique et la protection de la dignité de la femme africaine. Elles n\'expriment pas toujours cette vision du monde politique et esthétique en autant de mots, mais leur port en dit long.', '2023-02-24 00:00:00'),
(2, 'Claudine Talon', 'La Fondation Claudine Talon adoptera une approche holistique pour améliorer la situation sanitaire et sociale des femmes et des enfants au Bénin. Ses principales actions porteront sur l’extension des services de santé maternelle et pédiatrique, l’amélioration des conditions générales d’hygiène et d’assainissement, l’élargissement de l’accès à une eau potable de qualité, l’amélioration des normes nutritionnelles et l’augmentation des taux d’alphabétisation grâce à un plus grand accès à l’éducation. Les activités comprendront une hausse de l’accès au dépistage du VIH dans les centres de santé pédiatrique et l’aide aux organisations qui s’occupent des orphelins. Elle se penchera également sur la lutte contre la discrimination à l’encontre des personnes vivant avec le VIH et touchées par le virus.', '2023-02-16 06:15:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
