# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: chris_collection_app
# Generation Time: 2020-02-06 15:39:56 +0000
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
  `name` varchar(100) NOT NULL DEFAULT '',
  `year` year(4) NOT NULL,
  `origin` varchar(100) NOT NULL DEFAULT '',
  `profile` varchar(100) NOT NULL DEFAULT '',
  `body` varchar(100) NOT NULL DEFAULT '',
  `abv` float(3,1) unsigned NOT NULL,
  `cheese` varchar(100) NOT NULL DEFAULT '',
  `link` varchar(500) NOT NULL DEFAULT 'https://www.novelwines.co.uk/',
  `img` varchar(500) NOT NULL DEFAULT 'imgs/cheese-4592091_1920.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `wines` WRITE;
/*!40000 ALTER TABLE `wines` DISABLE KEYS */;

INSERT INTO `wines` (`id`, `name`, `year`, `origin`, `profile`, `body`, `abv`, `cheese`, `link`, `img`)
VALUES
	(1,'Babylonstoren Nebukadnesar','2017','South Africa','Dry red wine','Full Bodied',14.0,'Pont l\'Eveque soft','https://www.novelwines.co.uk/products/babylonstoren-nebukadnesar-south-african-red?_pos=2&_sid=becdb1abf&_ss=r','imgs/BABYLONSTOREN_Nebukadnesar_x700.jpg'),
	(2,'Haywire White Label Gamay Noir','2016','Canada','Dry red wine','Medium Bodied',13.0,'Camembert','https://www.novelwines.co.uk/products/haywire-white-label-gamay?_pos=6&_sid=93497c3a0&_ss=r','imgs/HAYWIRE_Gamay_Noir_Okanagan_Valley_Crush_Pad_Winery_x700.jpg'),
	(3,'Alves de Sousa Quinta da Gaivosa LBV Porto','2013','Portugal','Fortified dessert wine','Not applicaple',20.0,'Stilton','https://www.novelwines.co.uk/collections/portugal/products/alves-de-sousa-quinta-da-gaivosa-lbv-porto','imgs/ALVES_DE_SOUSA_Quinta_da_Gaivosa_LBV_Porto_ee1be277-aea9-485f-ab1d-eea4557f2de2_x700.jpg'),
	(4,'Bodegas Vinatigo Gual','2016','Tenerife','Dry white wine','Full Bodied',13.0,'Tomme de Chevre goats cheese','https://www.novelwines.co.uk/collections/white-wines/products/bodegas-vinatigo-gual','imgs/BODEGAS_VINATIGO_Gual_6bfe6033-ac6c-42dc-a08e-169db6b7da7f_x700.jpg'),
	(9,'Dennis Garcia','2013','Ut at dolorem volupt','Aut aliquid assumend','Minima in voluptatem',20.0,'Et corporis quam pro','Occaecat minus nulla','imgs/cheese-4592091_1920.jpg'),
	(10,'Peter Sanchez','1984','Modi quis exercitati','Laboris qui labore i','Esse quia dolore eo',5.0,'Sit in sint dolorum','Dolores minim repell','imgs/cheese-4592091_1920.jpg');

/*!40000 ALTER TABLE `wines` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
