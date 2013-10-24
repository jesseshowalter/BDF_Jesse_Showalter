# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.33)
# Database: bdf_1310
# Generation Time: 2013-10-24 07:19:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table todolist
# ------------------------------------------------------------

DROP TABLE IF EXISTS `todolist`;

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `check_value` varchar(50) DEFAULT 'false',
  `title` varchar(50) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `todolist` WRITE;
/*!40000 ALTER TABLE `todolist` DISABLE KEYS */;

INSERT INTO `todolist` (`id`, `user_id`, `check_value`, `title`, `description`)
VALUES
	(4,4,'false','','amy'),
	(5,4,'false','','jesse'),
	(6,4,'false','','jovi'),
	(7,4,'true','','nixon'),
	(16,2,'false','  Clean the deck \noutside and scrub really good','  Clean the deck \noutside and scrub really good'),
	(18,2,'false','Ask Cindy about uncle Jr. and the missions trip','Ask Cindy about uncle Jr. and the missions trip'),
	(19,2,'false','Talk to mom about vacation with the kids','Talk to mom about vacation with the kids'),
	(20,2,'false',' Feed the dogs and walk them at night',' Feed the dogs and walk them at night'),
	(21,2,'false','safeway is having a sale on 2% milk today.\n','safeway is having a sale on 2% milk today.\n'),
	(22,2,'false','Fullsail BDF video homework due today.  ','Fullsail BDF video homework due today.  '),
	(29,2,'false','add change to the meter to keep the car parked the','add change to the meter to keep the car parked there'),
	(30,2,'false','take out the garbage to the street tonight','take out the garbage to the street tonight');

/*!40000 ALTER TABLE `todolist` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `location`, `gender`)
VALUES
	(1,'test','098f6bcd4621d373cade4e832627b4f6','Test User','La La Land','Male'),
	(2,'Jesse','a1361cb85be840d6a2d762c68e4910e2','Jesse Showalter','Honolulu','Male'),
	(3,'demo','demo','Demo User','Anywhere','Male'),
	(4,'amy','7771fbb20af6ef10827c593daa3aff7b','Amy Jean Showalter','Oahu','Female'),
	(5,'amyjean','26827b9f7b6f89f0ad0eaae797566f73','Amyjean Wagner','New Jersey','Female'),
	(6,'matthew','e6a5ba0842a531163425d66839569a68','Matthew Jones','California','Male'),
	(7,'new','22af645d1859cb5ca6da0c484f1f37ea','New User','Someplace','Male');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
