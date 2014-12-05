# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.34)
# Database: php-fall
# Generation Time: 2014-12-05 00:33:47 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `to_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `user_id`, `comment`, `to_user_id`)
VALUES
	(1,2,'Hello Dan, Hope your doing well@',1),
	(2,3,'What up Dan',1),
	(5,3,'Do you think we care about that?\r\n',NULL),
	(6,14,'Hey lookie der!\r\n',NULL),
	(7,3,'What happened to the Falcons?',NULL),
	(8,1,'Yo yo yo!\r\n',NULL),
	(9,13,'Oh yeah! Colt 45!',NULL),
	(10,1,'Hello Goddess!\r\n',NULL),
	(11,19,'asdfasdfasdf',NULL);

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(16) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'http://placekitten.com/g/200/300',
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `image`, `password`, `username`, `email`, `last_name`)
VALUES
	(1,'Dan','http://placehold.it/150x150','e99a18c428cb38d5f260853678922e03','Dan','dan@live.com','DaMan'),
	(2,'Dude','http://placekitten.com/g/200/300','e99a18c428cb38d5f260853678922e03','Dude','dude@live.com','Bro'),
	(3,'Sally','http://placekitten.com/g/150/150','e99a18c428cb38d5f260853678922e03','Sally','dan@theman.com','Sally'),
	(13,'Billy','http://placehold.it/50x50','e99a18c428cb38d5f260853678922e03','Billy','billy@live.com','Dee'),
	(14,'Rae','http://placekitten.com/g/500/500','e99a18c428cb38d5f260853678922e03','Rae','rae@live.com','Ray'),
	(15,'Jon','http://placekitten.com/g/200/200','d41d8cd98f00b204e9800998ecf8427e',NULL,'joe@cool.com','Doe'),
	(16,'Jon','http://placekitten.com/g/300/300','e99a18c428cb38d5f260853678922e03',NULL,'jay@live.com','Jay'),
	(17,'Dan','http://placekitten.com/g/200/200','e99a18c428cb38d5f260853678922e03',NULL,'gill@live.com','Gill'),
	(18,'Dan','http://placekitten.com/g/200/200','e99a18c428cb38d5f260853678922e03',NULL,'boi@live.com','Boi'),
	(19,'Billy','http://placekitten.com/g/400/400','e99a18c428cb38d5f260853678922e03',NULL,'kid@live.com','TheKid');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
