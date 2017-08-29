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
-- Table structure for table `leads`
--

DROP TABLE IF EXISTS `leads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) NOT NULL,
  `line_of_business` varchar(50) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `collector_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `stage` varchar(50) NOT NULL,
  `contact_first_name` varchar(35) NOT NULL,
  `contact_last_name` varchar(35) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `primary_phone` varchar(15) NOT NULL,
  `alternate_phone` varchar(15) NOT NULL DEFAULT 'None',
  `physical_address` varchar(255) NOT NULL DEFAULT 'None',
  `physical_address_city` varchar(255) NOT NULL DEFAULT 'None',
  `physical_address_state` varchar(20) NOT NULL DEFAULT 'NA',
  `physical_address_zip` varchar(10) NOT NULL DEFAULT 'None',
  `mailing_address` varchar(255) NOT NULL DEFAULT 'None',
  `mailing_address_city` varchar(255) NOT NULL DEFAULT 'None',
  `mailing_address_state` varchar(20) NOT NULL DEFAULT 'NA',
  `mailing_address_zip` varchar(10) NOT NULL DEFAULT 'None',
  `job_year_id` int(11) NOT NULL,
  `sale_amount` float NOT NULL DEFAULT '0',
  `ad_type` varchar(20) NOT NULL DEFAULT 'single',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leads`
--

LOCK TABLES `leads` WRITE;
/*!40000 ALTER TABLE `leads` DISABLE KEYS */;
INSERT INTO `leads` VALUES (1,'1 Call We Haul','Transportation - Moving',4,2,'New Lead','Direct Bill','Bill','Cooper','bill@wehaul.com','4234380502','4234380502','12 MLK Blvd','Morristown','TN','37814','12 MLK Blvd','Morristown','TN','37814',1,132.5,'double'),(2,'Academy Mortgage','banking - lending',2,9,'Left Message Machine','Invoiced','Billy','Robertson','bill@wehaul.com','345-556-3456','None','546 My Street','Atlanta','GA','78657','546 My Street','Atlanta','GA','78657',1,0,'single'),(3,'Auto Club Inc','car sales',1,4,'Left Message Machine','Invoiced','Billy','Robertson','bill@wehaul.com','345-556-3456','None','None','None','NA','None','None','None','NA','None',1,0,'single'),(4,'New Company','Unknown',1,1,'New Lead','Invoiced','','','','','None','','','','','','','','',1,0,'single'),(5,'New Company','Unknown',1,1,'New Lead','Invoiced','','','','','None','','','','','','','','',1,0,'single'),(6,'New Company','Unknown',1,1,'New Lead','Invoiced','Andrew','Cooper','andrew@opengatefellowship.org','4234380502','4234380502','550 Susong Drive','Morristown','TN','37814','550 Susong Drive','Morristown','TN','37814',1,0,'single'),(7,'New Company','Unknown',1,1,'New Lead','Invoiced','Andrew','Cooper','andrew@opengatefellowship.org','4234380502','4234380502','550 Susong Drive','Morristown','TN','37814','550 Susong Drive','Morristown','TN','37814',1,0,'single'),(8,'New Company','Unknown',1,1,'New Lead','Invoiced','Andrew','Cooper','andrew@opengatefellowship.org','4234380502','4234380502','550 Susong Drive','Morristown','TN','37814','550 Susong Drive','Morristown','TN','37814',1,0,'single'),(9,'Intrados Inc','Unknown',1,1,'New Lead','Invoiced','Andrew','Cooper','andrew@opengatefellowship.org','4234380502','4234380502','550 Susong Drive','Morristown','TN','37814','550 Susong Drive','Morristown','TN','37814',1,0,'single');
/*!40000 ALTER TABLE `leads` ENABLE KEYS */;
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
