# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: chris_collection_app
# Generation Time: 2020-02-16 10:18:18 +0000
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
  `hidden` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `wines` WRITE;
/*!40000 ALTER TABLE `wines` DISABLE KEYS */;

INSERT INTO `wines` (`id`, `name`, `year`, `origin`, `profile`, `body`, `abv`, `cheese`, `link`, `img`, `hidden`)
VALUES
	(1,'Babylonstoren Nebukadnesar','2017','South Africa','Dry red wine','Full Bodied',14.0,'Pont l\'Eveque soft','https://www.novelwines.co.uk/products/babylonstoren-nebukadnesar-south-african-red?_pos=2&_sid=becdb1abf&_ss=r','imgs/BABYLONSTOREN_Nebukadnesar_x700.jpg',0),
	(2,'Haywire White Label Gamay Noir','2016','Canada','Dry red wine','Medium Bodied',13.0,'Camembert','https://www.novelwines.co.uk/products/haywire-white-label-gamay?_pos=6&_sid=93497c3a0&_ss=r','imgs/HAYWIRE_Gamay_Noir_Okanagan_Valley_Crush_Pad_Winery_x700.jpg',0),
	(3,'Alves de Sousa Quinta da Gaivosa LBV Porto','2013','Portugal','Fortified dessert wine','Not applicaple',20.0,'Stilton','https://www.novelwines.co.uk/collections/portugal/products/alves-de-sousa-quinta-da-gaivosa-lbv-porto','imgs/ALVES_DE_SOUSA_Quinta_da_Gaivosa_LBV_Porto_ee1be277-aea9-485f-ab1d-eea4557f2de2_x700.jpg',0),
	(4,'Bodegas Vinatigo Gual','2016','Tenerife','Dry white wine','Full Bodied',13.0,'Tomme de Chevre goats cheese','https://www.novelwines.co.uk/collections/white-wines/products/bodegas-vinatigo-gual','imgs/BODEGAS_VINATIGO_Gual_6bfe6033-ac6c-42dc-a08e-169db6b7da7f_x700.jpg',0),
	(14,'Michael Aguirre','2012','Pariatur Reprehende','Quo esse omnis iust','Voluptatum dolore do',75.0,'Delectus ut ea dolo','https://www.novelwines.co.uk/','imgs/cheese-4592091_1920.jpg',1),
	(53,'Vivien Daniels','2019','Minus molestiae nisi','Reiciendis mollitia','Velit magnam qui del',64.0,'Nisi duis rerum mole','https://www.novelwines.co.uk','imgs/cheese-4592091_1920.jpg',1),
	(54,'Hayley Hatfield','2019','Nesciunt quia ipsa','Consectetur sit qua','Dolore qui ea tempor',56.0,'Quia rerum rerum Nam','https://www.novelwines.co.uk','imgs/cheese-4592091_1920.jpg',1),
	(55,'Kylynn Decker','1984','Id possimus quaerat','Officia optio porro','Aliquam consequatur',47.0,'Et consequatur dolo','https://www.novelwines.co.uk','imgs/cheese-4592091_1920.jpg',0),
	(56,'Colorado Oneil','2018','Obcaecati dicta ipsa','Iste ut delectus nu','Perferendis deleniti',83.0,'Voluptatibus quia su','https://www.novelwines.co.uk','imgs/cheese-4592091_1920.jpg',1),
	(57,'Prescott Jenkins','1988','Dolore nostrum iusto','Rerum ea dolores est','Minima sint eum mini',94.0,'Iure in accusamus ex','https://www.novelwines.co.uk','imgs/cheese-4592091_1920.jpg',1),
	(58,'Raphael Oneill','2012','Labore non ex ut ist','Unde iste quas facer','Culpa pariatur Cons',57.0,'Nostrum ut sed venia','https://www.novelwines.co.uk','imgs/cheese-4592091_1920.jpg',1),
	(59,'Scott Conrad','2017','Ut minim magna eiusm','Quasi eaque sapiente','Nostrum irure ration',42.0,'Est et omnis consequ','https://www.novelwines.co.uk','imgs/cheese-4592091_1920.jpg',1),
	(60,'Upton Sutton','1996','Officiis magni tempo','Quaerat dolorem fugi','Nisi dolor amet sed',36.0,'Tempor voluptatem no','https://www.novelwines.co.uk','imgs/cheese-4592091_1920.jpg',1),
	(61,'Charlotte Clayton','1999','Et eveniet vitae to','Omnis voluptate et e','Qui nobis doloribus',1.0,'In molestiae sapient','https://www.novelwines.co.uk','imgs/cheese-4592091_1920.jpg',0);

/*!40000 ALTER TABLE `wines` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
