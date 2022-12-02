
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

create database anticovidshop;
use anticovidshop;

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL,
  `categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `categorie` (`id`, `categorie`) VALUES
(1, 'Masques'),
(2, 'Gel hydroalcoolique'),
(3, 'Autres');


DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `prix_de_base` decimal(10,2) NOT NULL,
  `categorie` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `produits` (`id`, `nom`, `prix`, `prix_de_base`, `categorie`, `image`, `description`) VALUES
(1, 'Masque chirurgical', '10.00', '15.00', 1, 'images/masque.jpg', 'Boîte de 100 masques chirurgicaux'),
(4, 'Gel hydroalcoolique', '20.00', '30.00', 2, 'images/gel.jpg', 'Ce gel marche bien'),
(6, 'Visière', '5.00', '8.00', 3, 'images/visiere.jpg', 'Bonne visière'),
(13, 'Masque FFP2', '10.00', '12.00', 1, 'images/masqueFFP2.jpg', ''),
(14, 'Gants en latex', '11.00', '16.00', 3, 'images/gants.jpg', '');


DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

