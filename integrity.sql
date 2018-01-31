-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: integrity
-- ------------------------------------------------------
-- Server version	5.7.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `link_lists`
--

LOCK TABLES `link_lists` WRITE;
/*!40000 ALTER TABLE `link_lists` DISABLE KEYS */;
INSERT INTO `link_lists` VALUES (1,'Footer',1,2,3,4,NULL,NULL,NULL,NULL,NULL,NULL,'2018-01-31 21:56:12','2018-01-31 21:56:12');
/*!40000 ALTER TABLE `link_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,'History','history','about',NULL,'page',NULL,NULL,'2018-01-31 18:54:11','2018-01-31 18:54:11'),(2,'Small Groups','small-groups','connect',NULL,'page',NULL,NULL,'2018-01-31 18:54:33','2018-01-31 18:54:33'),(3,'Events','events','connect',NULL,'page',NULL,NULL,'2018-01-31 18:54:46','2018-01-31 18:54:46'),(4,'Integrity Stories','stories','resources',NULL,'page',NULL,NULL,'2018-01-31 18:54:50','2018-01-31 18:54:50'),(5,'Sunday Mornings','sunday-mornings','about',NULL,'page',NULL,NULL,'2018-01-31 19:00:35','2018-01-31 19:00:35'),(6,'Leadership','leadership','about',NULL,'page',NULL,NULL,'2018-01-31 19:00:35','2018-01-31 19:00:35'),(7,'Contact Us','contact-us','about',NULL,'page',NULL,NULL,'2018-01-31 19:00:35','2018-01-31 19:00:35'),(8,'Sermons','sermons','resources',NULL,'page',NULL,NULL,'2018-01-31 19:00:35','2018-01-31 19:00:35'),(13,'Sermon: Ephesus','sermons/7-letters-to-7-churches/ephesus','resources',NULL,'subpage',NULL,NULL,'2018-01-31 20:49:21','2018-01-31 20:49:21');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (25,'2018_01_31_035623_create_sermons_table',1),(26,'2018_01_31_035704_create_articles_table',1),(27,'2018_01_31_035718_create_blogs_table',1),(28,'2018_01_31_035818_create_preachers_table',1),(29,'2018_01_31_035859_create_groups_table',1),(30,'2018_01_31_035915_create_events_table',1),(31,'2018_01_31_035950_create_sermon_series_table',1),(32,'2018_01_31_040014_create_media_table',1),(33,'2018_01_31_171818_create_link_lists_table',1),(34,'2018_01_31_172203_create_links_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES ('index','/',NULL,NULL,1,'This is a large line of text that can be a quote or a mission statement. Use it for whatever the heck you want.');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `preachers`
--

LOCK TABLES `preachers` WRITE;
/*!40000 ALTER TABLE `preachers` DISABLE KEYS */;
/*!40000 ALTER TABLE `preachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES ('info',1,'Location & Service Times',NULL,'index','<div><span>2725 E. 14th Street in Greenville, NC</span><br><span>Sundays | 9 AM & 11 AM</span></div>',''),('about',1,'Mission',NULL,'index','Integrity\'s mission is to mature and multiply, son.',''),('contact',0,NULL,NULL,'index',NULL,''),('latest sermon',0,'Latest Sermon',NULL,'index',NULL,''),('links',1,'Here are some links',NULL,'index','<a href=\"#\"><div><span>Join Us for Worship</span></div></a><a href=\"#\"><div><span>Join A Smallgroup</span></div></a><a href=\"#\"><div><span>Contact Us</span></div></a><a href=\"#\"><div><span>Serve With Us</span></div></a>','');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sermon_series`
--

LOCK TABLES `sermon_series` WRITE;
/*!40000 ALTER TABLE `sermon_series` DISABLE KEYS */;
/*!40000 ALTER TABLE `sermon_series` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sermons`
--

LOCK TABLES `sermons` WRITE;
/*!40000 ALTER TABLE `sermons` DISABLE KEYS */;
/*!40000 ALTER TABLE `sermons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES ('Integrity Church','liveintegrity.org','1414 14th Street','Greenville','NC',27858,123546789,'inf@liveintegrity.org','930AM & 11AM','2017-12-06 05:00:00',NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-31 17:06:45
