# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: integrity
# Generation Time: 2018-02-22 21:45:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table articles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `series` smallint(6) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table blogs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `series` smallint(6) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `all_day` tinyint(1) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table link_lists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `link_lists`;

CREATE TABLE `link_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `links` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `link_lists` WRITE;
/*!40000 ALTER TABLE `link_lists` DISABLE KEYS */;

INSERT INTO `link_lists` (`id`, `name`, `links`, `created_at`, `updated_at`)
VALUES
	(1,'Footer','{\"link1\":1,\"link2\":2,\"link3\":3,\"link4\":4}','2018-01-31 16:56:12','2018-01-31 16:56:12');

/*!40000 ALTER TABLE `link_lists` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table links
# ------------------------------------------------------------

DROP TABLE IF EXISTS `links`;

CREATE TABLE `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `dest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` smallint(6) DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;

INSERT INTO `links` (`id`, `name`, `path`, `parent`, `desc`, `dest`, `image`, `icon`, `created_at`, `updated_at`)
VALUES
	(9,'History','history','about',NULL,'page',NULL,NULL,'2018-01-31 13:54:11','2018-01-31 13:54:11'),
	(2,'Small Groups','small-groups','connect',NULL,'page',NULL,NULL,'2018-01-31 13:54:33','2018-01-31 13:54:33'),
	(3,'events','events','connect',NULL,'page',NULL,NULL,'2018-01-31 13:54:46','2018-01-31 13:54:46'),
	(4,'Integrity Stories','stories','resources',NULL,'page',NULL,NULL,'2018-01-31 13:54:50','2018-01-31 13:54:50'),
	(5,'Sunday Mornings','sunday-mornings','about',NULL,'page',NULL,NULL,'2018-01-31 14:00:35','2018-01-31 14:00:35'),
	(6,'Leadership','leadership','about',NULL,'page',NULL,NULL,'2018-01-31 14:00:35','2018-01-31 14:00:35'),
	(7,'Contact Us','contact-us','about',NULL,'page',NULL,NULL,'2018-01-31 14:00:35','2018-01-31 14:00:35'),
	(8,'Sermons','sermons','resources',NULL,'page',NULL,NULL,'2018-01-31 14:00:35','2018-01-31 14:00:35'),
	(1,'Home','',NULL,NULL,'index',NULL,'home','2018-02-02 13:24:09','2018-02-02 13:24:09'),
	(13,'Sermon: Ephesus','sermons/7-letters-to-7-churches/ephesus','resources',NULL,'subpage',NULL,NULL,'2018-01-31 15:49:21','2018-01-31 15:49:21'),
	(16,'mission','mission','about',NULL,'page',NULL,NULL,'2018-02-03 07:45:13','2018-02-03 07:45:29'),
	(17,'integrity Kids','integrity-kids','about',NULL,'page',NULL,NULL,'2018-02-03 07:46:13','2018-02-03 07:46:15'),
	(18,'membership','membership','connect',NULL,'page',NULL,NULL,'2018-02-03 07:47:04','2018-02-03 07:47:05'),
	(19,'giving','giving','connect',NULL,'page',NULL,NULL,'2018-02-03 07:47:41','2018-02-03 07:47:42'),
	(20,'Serve','serve','connect',NULL,'page',NULL,NULL,'2018-02-03 07:48:34','2018-02-03 07:48:36'),
	(21,'blog','blog','resources',NULL,'page',NULL,NULL,'2018-02-03 07:50:31','2018-02-03 07:50:33'),
	(22,'finances','finances','resources',NULL,'page',NULL,NULL,'2018-02-03 07:51:11','2018-02-03 07:51:12'),
	(23,'discipleship seminar','discipleship-seminar','resources',NULL,'page',NULL,NULL,'2018-02-03 07:51:52','2018-02-03 07:51:53');

/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table media
# ------------------------------------------------------------

DROP TABLE IF EXISTS `media`;

CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('img','aud','vid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `function` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;

INSERT INTO `media` (`id`, `name`, `type`, `filename`, `function`, `folder`, `link`, `file_size`, `thumb_link`, `thumb_size`, `created_at`, `updated_at`)
VALUES
	(1,'header_logo','img','headerlogo.png',NULL,NULL,'','','','','2018-02-02 13:42:41','2018-02-02 13:42:41'),
	(2,'logo_mm','img','logo-mm.png',NULL,'logos',NULL,NULL,NULL,NULL,'2018-02-02 14:26:51','2018-02-02 14:26:51'),
	(3,'index_billboard','img','billboard.png','billboard','',NULL,NULL,'','','2018-02-03 14:51:21','2018-02-03 14:51:23');

/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(25,'2018_01_31_035623_create_sermons_table',1),
	(26,'2018_01_31_035704_create_articles_table',1),
	(27,'2018_01_31_035718_create_blogs_table',1),
	(28,'2018_01_31_035818_create_preachers_table',1),
	(29,'2018_01_31_035859_create_groups_table',1),
	(30,'2018_01_31_035915_create_events_table',1),
	(31,'2018_01_31_035950_create_sermon_series_table',1),
	(32,'2018_01_31_040014_create_media_table',1),
	(33,'2018_01_31_171818_create_link_lists_table',1),
	(34,'2018_01_31_172203_create_links_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `link` smallint(6) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  `parent` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billboard_text` longtext COLLATE utf8_unicode_ci,
  `billboard_img` int(1) DEFAULT NULL,
  `included_media` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `basic` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `name`, `link`, `active`, `parent`, `desc`, `billboard_text`, `billboard_img`, `included_media`, `content`, `basic`)
VALUES
	(1,'index',1,1,NULL,NULL,'<div style=\"color: #fff; font-size: 20px;\">This is a large line of text that can be a quote or a mission statement. Use it for whatever the heck you want.</div>',3,'{\"media\":[1,2,3]}',NULL,0),
	(2,'history',9,1,'about',NULL,'Our first service was may 20 2007',3,NULL,'<div style=\\\"text-alignment: center\\\"><span>this is an empty page. =(</span></div>',1),
	(3,'sunday mornings',5,1,'about',NULL,'We meet on Sunday Mornings',3,NULL,'<div style=\\\"text-alignment: center\\\"><span>Sunday Morning Content</span></div>',1),
	(4,'leadership',6,1,'about',NULL,NULL,NULL,NULL,'<div style=\\\"text-alignment: center\\\"><span>Leadership Content</span></div>',1),
	(5,'contact us',7,1,'about',NULL,NULL,NULL,NULL,'<div style=\\\"text-alignment: center\\\"><span>Contact Us Content</span></div>',0),
	(6,'sermons',8,1,'resources',NULL,'<div style=\"text-alignment: center\"><span>We do sermons most days!</span</div>',3,NULL,'<div style=\\\"text-alignment: center\\\"><span>Sermons Content</span></div>',1),
	(7,'mission',16,1,'about',NULL,'Mature and Multiply, mutha ucka!',3,NULL,'<div style=\\\"text-alignment: center\\\"><span>Mission Content</span></div>',1),
	(8,'integrity kids',17,1,'about',NULL,'Oh, yeah. Kids are welcome too.',3,NULL,'<div style=\\\"text-alignment: center\\\"><span>Integrity Kids Content</span></div>',1),
	(9,'membership',18,1,'connect',NULL,'join our <strike>Church!</strike>Church!',3,NULL,'<div style=\\\"text-alignment: center\\\"><span>Membership Content</span></div>',1),
	(10,'giving',19,1,'connect',NULL,'Give More, Get Less!',3,NULL,'<div style=\\\"text-alignment: center\\\"><span>Giving Content</span></div>',0),
	(11,'serve',20,1,'connect',NULL,'Serve one another',3,NULL,'<div style=\\\"text-alignment: center\\\"><span>Serve Content</span></div>',1),
	(13,'finances',22,1,'resources',NULL,NULL,NULL,NULL,'<div style=\\\"text-alignment: center\\\"><span>Finances Content</span></div>',1),
	(14,'discipleship seminar',23,1,'resources',NULL,NULL,NULL,NULL,'<div style=\\\"text-alignment: center\\\"><span>Discipleship Seminar Content</span></div>',0),
	(15,'events',3,1,'connect',NULL,NULL,NULL,NULL,'<div style=\\\"text-alignment: center\\\"><span>Events Content</span></div>',0),
	(16,'integrity stories',4,1,'resources',NULL,NULL,NULL,NULL,'<div style=\\\"text-alignment: center\\\"><span>Integrity Stories Content</span></div>',0),
	(17,'small groups',2,1,'connect',NULL,'Small Groups! <br> Some are so small you woudn\'t know they exist.',3,NULL,'<div style=\\\"text-alignment: center\\\"><span>Small Groups Content</span></div>',1);

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table preachers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `preachers`;

CREATE TABLE `preachers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table sections
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sections`;

CREATE TABLE `sections` (
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `heading` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `where_used` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `bg` enum('dark','light') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'dark',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;

INSERT INTO `sections` (`name`, `active`, `heading`, `type`, `where_used`, `content`, `bg`)
VALUES
	('info',1,'Location & Service Times',NULL,'index','<div><span>2725 E. 14th Street in Greenville, NC</span><br><span>Sundays | 9 AM & 11 AM</span></div>',''),
	('about',1,'Mission',NULL,'index','Integrity\'s mission is to mature and multiply, son.',''),
	('contact',0,NULL,NULL,'index',NULL,''),
	('latest sermon',0,'Latest Sermon',NULL,'index',NULL,''),
	('links',1,'Here are some links',NULL,'index','<a href=\"#\"><div><span>Join Us for Worship</span></div></a><a href=\"#\"><div><span>Join A Smallgroup</span></div></a><a href=\"#\"><div><span>Contact Us</span></div></a><a href=\"#\"><div><span>Serve With Us</span></div></a>','');

/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sermon_series
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sermon_series`;

CREATE TABLE `sermon_series` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` smallint(6) DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table sermons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sermons`;

CREATE TABLE `sermons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `passage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `series` smallint(6) NOT NULL,
  `preacher` smallint(6) NOT NULL,
  `summary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `church_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` tinytext COLLATE utf8_unicode_ci,
  `zip` int(5) unsigned DEFAULT NULL,
  `phone` int(10) unsigned DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `times` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Full String. Example: Sundays at 9AM & 11AM',
  `header_logo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `small_logo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`church_name`),
  UNIQUE KEY `church_name_UNIQUE` (`church_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`church_name`, `domain`, `address`, `city`, `state`, `zip`, `phone`, `email`, `times`, `header_logo`, `small_logo`, `created_at`, `updated_at`)
VALUES
	('Integrity Church','liveintegrity.org','1414 14th Street','Greenville','NC',27858,123546789,'inf@liveintegrity.org','930AM & 11AM','headerlogo.png',NULL,'2017-12-06 00:00:00',NULL);

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
