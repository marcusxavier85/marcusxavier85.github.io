# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.31)
# Database: pokedex
# Generation Time: 2020-09-29 09:19:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table kanto_pokedex
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kanto_pokedex`;

CREATE TABLE `kanto_pokedex` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pokedex_no` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `img_source` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kanto_pokedex` WRITE;
/*!40000 ALTER TABLE `kanto_pokedex` DISABLE KEYS */;

INSERT INTO `kanto_pokedex` (`id`, `pokedex_no`, `name`, `type`, `img_source`)
VALUES
	(1,6,'Charizard','Fire Flying','charizard.png'),
	(4,25,'Pikachu','Electric','pikachu.png'),
	(5,51,'Dugtrio','Ground','dugtrio.png'),
	(6,54,'Psyduck','Water','psyduck.png'),
	(7,106,'Hitmonlee','Fighting','hitmonlee.png');

/*!40000 ALTER TABLE `kanto_pokedex` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
