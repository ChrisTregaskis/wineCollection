# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: collectionApp
# Generation Time: 2020-02-03 14:39:33 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table wines
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wines`;

CREATE TABLE `wines` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `origin` varchar(100) DEFAULT NULL,
  `profile` varchar(100) DEFAULT NULL,
  `body` varchar(100) DEFAULT NULL,
  `abv` float(3,1) unsigned DEFAULT NULL,
  `cheese` varchar(100) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `wines` WRITE;
/*!40000 ALTER TABLE `wines` DISABLE KEYS */;

INSERT INTO `wines` (`id`, `name`, `year`, `origin`, `profile`, `body`, `abv`, `cheese`, `link`)
VALUES
	(1,'Babylonstoren Nebukadnesar','2017','South Africa','Dry red wine','Full Bodied',14.0,'Pont l\'Eveque soft','https://www.novelwines.co.uk/products/babylonstoren-nebukadnesar-south-african-red?_pos=2&_sid=becdb1abf&_ss=r'),
	(2,'Haywire White Label Gamay Noir','2016','Canada','Dry red wine','Medium Bodied',13.0,'Camembert','https://www.novelwines.co.uk/products/haywire-white-label-gamay?_pos=6&_sid=93497c3a0&_ss=r'),
	(3,'Alves de Sousa Quinta da Gaivosa LBV Porto','2013','Portugal','Fortified dessert wine',NULL,20.0,'Stilton','https://www.novelwines.co.uk/collections/portugal/products/alves-de-sousa-quinta-da-gaivosa-lbv-porto'),
	(4,'Bodegas Vinatigo Gual','2016','Tenerife','Dry white wine','Full Bodied',13.0,'Tomme de Chevre goats cheese','https://www.novelwines.co.uk/collections/white-wines/products/bodegas-vinatigo-gual');

/*!40000 ALTER TABLE `wines` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
