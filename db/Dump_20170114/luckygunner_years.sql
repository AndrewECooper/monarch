-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: luckygunner
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
-- Table structure for table `years`
--

DROP TABLE IF EXISTS `years`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `years` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(4) NOT NULL,
  `job_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `years`
--

LOCK TABLES `years` WRITE;
/*!40000 ALTER TABLE `years` DISABLE KEYS */;
INSERT INTO `years` VALUES (1,'2017',1,'active','2016-11-01','2016-12-29','2016-12-22 20:10:11'),(2,'2016',1,'inactive','2015-11-01','2015-12-21','2016-12-22 20:10:11'),(3,'2017',2,'active','2016-09-01',NULL,'2016-12-22 20:10:11'),(4,'2017',3,'active','2016-11-01',NULL,'2016-12-22 20:10:11'),(5,'2017',4,'active','2016-04-01','2016-12-23','2016-12-22 20:10:11'),(6,'2015',1,'inactive','2014-07-01','2014-11-11','2016-12-22 20:10:11'),(7,'2016',2,'inactive','2015-04-01','2015-10-10','2016-12-22 20:10:11'),(8,'',5,'inactive',NULL,NULL,'2016-12-26 16:23:15'),(9,'2016',6,'inactive',NULL,NULL,'2016-12-26 16:26:06'),(10,'2016',7,'active','2016-12-26',NULL,'2016-12-26 16:26:22'),(11,'2016',8,'inactive',NULL,NULL,'2016-12-26 20:12:26'),(12,'2016',9,'inactive',NULL,NULL,'2016-12-26 20:12:29'),(13,'2016',10,'active','2016-12-26',NULL,'2016-12-26 20:13:35'),(25,'2018',1,'inactive',NULL,NULL,'2016-12-29 19:29:20');
/*!40000 ALTER TABLE `years` ENABLE KEYS */;
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
