-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: monarch
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

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
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `contact_first_name` varchar(255) NOT NULL,
  `contact_last_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `physical_address` varchar(255) NOT NULL DEFAULT 'None',
  `physical_address_city` varchar(255) NOT NULL DEFAULT 'None',
  `physical_address_state` varchar(20) NOT NULL DEFAULT 'NA',
  `physical_address_zip` varchar(10) NOT NULL DEFAULT 'None',
  `mailing_address` varchar(255) NOT NULL DEFAULT 'None',
  `mailing_address_city` varchar(255) NOT NULL DEFAULT 'None',
  `mailing_address_state` varchar(20) NOT NULL DEFAULT 'NA',
  `mailing_address_zip` varchar(10) NOT NULL DEFAULT 'None',
  `type_other_note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (1,'Laredo Border Patrol TX','police','Tony','Stark','ironman@avengers.com','2016-12-22 19:38:43','2016-12-22 14:38:43',0,'None','None','NA','None','None','None','NA','None',''),(2,'Orangeburg Co, SC','ems','Tony','Stark','ironman@avengers.com','2016-12-22 19:38:43','2016-12-22 14:38:43',0,'None','None','NA','None','None','None','NA','None',NULL),(3,'Jackson County, GA','sheriff','Tony','Stark','ironman@avengers.com','2016-12-22 19:38:43','2016-12-22 14:38:43',0,'None','None','NA','None','None','None','NA','None',NULL),(4,'Liberty County, GA','dare','Tony','Stark','ironman@avengers.com','2016-12-22 19:38:43','2016-12-22 14:38:43',0,'None','None','NA','None','None','None','NA','None',NULL),(6,'New Job Please Edit','','','','','2016-12-26 16:24:13','2016-12-26 11:24:13',0,'','','','','','','','',NULL),(7,'Bucksnort TN','explorers','Andrew','Cooper','andrew@andrewcooperonline.com','2016-12-26 16:26:22','2016-12-26 11:26:22',0,'1503 Main Street','Morristown','TN','37814','PO Box 1786','Morristown','TN','37814',''),(8,'','','','','','2016-12-26 20:12:26','2016-12-26 15:12:26',0,'','','','','','','','',NULL),(9,'','','','','','2016-12-26 20:12:29','2016-12-26 15:12:29',0,'','','','','','','','',NULL),(10,'New Job','sheriff','Bill','Bates','bill@bates.com','2016-12-26 20:13:35','2016-12-26 15:13:35',0,'1 Some Street','Big City','MN','63789','1 Some Street','Big City','MN','63789','');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-14 15:22:17
