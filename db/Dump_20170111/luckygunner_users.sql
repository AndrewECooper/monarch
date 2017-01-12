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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(256) NOT NULL,
  `language` varchar(64) NOT NULL,
  `is_admin` enum('0','1') NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `validation_code` varchar(50) DEFAULT NULL COMMENT 'Temporary code for opt-in registration',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `permissions` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','6d4177cffeb9076951bb40b22943fc432fba784cf002898ed49c6bb20481bdab120cd32d05e3c690aa2421a87709684ae5402a930d7e679b05732d6ec9286208','9e8f7427ffe603b0c1a209db73df60753d0f0440f5ef0d7177d9f951e44dceb393a6c5589a4ef552fc131962fbc7178fde95abc57bf01271698992be58c4bf25','Andrew','Cooper','andrew@andrewcooperonline.com','english','1','1','0',NULL,'2013-01-01 00:00:00','2016-12-29 17:44:59','edit_self|sales|add_users|add_leads|view_logs|start_end_jobs|collector|edit_users|edit_jobs|edit_leads|clone_jobs|view_all_jobs'),(2,'johndoe','4e8ece39c9905fe6989022a7747d2c67d90582cdf483d762905f026b3f2328dbc019acf59f77a57472228933c33429de859210a3c6b2976234501462994cf73c','a876126be616f492fa9ff8fb554eadffb8e43ed9faef8e1070c2508d76c57b1613899ceb97972f7959c4c05617ce36e25ba63787a8bd3f183680863c687a7c12','John','Doe','john@doe.com','english','0','1','0',NULL,'2013-01-01 00:00:00','2016-12-27 20:14:43','edit_self|add_leads|collector'),(3,'TestUser','20d543e9b5143e32c93ab4cd1930c795a066dac2012990ce3001d63dd03b6c4f26f0fd72edd4bee405e78a05b9f327171242f145a44eaa4fae2abb25e3979a01','b66b032e14ccf3f2b7472627315af4c4fac3a180199a545df9ec91e8479223f0696ada399bb2c30c42517b54078bf765d403f7ae503a706c1a7c3f3d2e0500f6','Peter','Parker','pparker@spiderman.com','english','0','0','0',NULL,'2016-12-21 20:30:44','2016-12-27 20:14:27','edit_self|add_leads|collector'),(4,'AnotherUser','3c302c0104a74d3b82b5f4303eb31d1c4e74fbffe30a0c2cefa95026f626425889933d67270c121ea28dbb4de883be8f2667c95845428053b010eb78fb9b6978','17d802c0f0c250b9e633bb272908f08ca481d5f58237caaea279131d1818403afb5d68ef9f6a170067e8c0dde506a8a6cbb25b54eea7abc95942fd534b0b40a5','Bill','Banner','banner@hulk.org','english','0','0','0',NULL,'2016-12-21 20:33:46','2016-12-27 20:15:39','edit_self|sales|add_leads|edit_leads'),(5,'asgasg','012208fb33b43596c5def5566dade66c45beea09a623b5347a25e34b600c7b2f0f4ddbcb924824e69c6a1be0e30f95ef72d9e07c0355e57ef6e94851d5336d51','217f5cf970e96d361a5bf816f418088df87e4a50ef04e01e1546332826f160f44defc5f22461479d73fba217291d746bf00c7d6a1f54fcb4863d6dff8f15e57a','fdagafg','afgafsdg','afgafg@asdfgfasd.com','english','0','0','1',NULL,'2016-12-21 20:36:55','2016-12-21 20:46:26','edit_self'),(6,'asgasg','0f6163841a6a5171d6afc7d4e1cd353169a2235810ca5be365e0db8f651a864c80ba64d7d411af5b5764fe9353cd302e0354f9dcf6d3ec86aed683fd2945401c','78aeb3530651972f769d5fab50bf927eb5a4e6d97c34044c4dce6c79a082c44eb1e1f171f6ce0d1e5f8f84b3bc5630dbf4b4b80bcb7e7232aac1f22297b7de2f','fdagafg','afgafsdg','afgafg@asdfgfasd.com','english','0','0','1',NULL,'2016-12-21 20:38:24','2016-12-21 20:46:32','edit_self'),(7,'fhjfgjhsgh','d1cf92437a46a19cdb4008b3dc5e2310b7ef0228ced3128ccea872c1e3181d3618a5ca86924064b39edf04919460ba08ebb2b3389019e9a2c79d214e9f108a17','f05baad6ea0767c446579161a47dda7cd1416ad8ea4580481e95e28e7c4062db410b3b00497bb073e61efac7a2c61387128199c3fa6fd9c63f4e24336b9ee211','hsdghsdgh','sdfhsdgh','sdghsgdh@sjdfh.com','english','0','0','1',NULL,'2016-12-21 20:41:32','2016-12-21 20:46:36','edit_self'),(8,'fhjfgjhsgh','97f4226aaef90daa9fc70100c274efb15f7a898e127a59cc9818dffb33565eef2b8aa65274b4e4baf9c1a02315420931fda3aa1e575bcc8e9eae6c453624220c','d3248ba2559fbc5159bbbdeda364cf58e3e4ea8d1d026e27a1a0368e9ad08182f20cb6d333d5c7cd3d3a2e44978277694f809f10c44b75adca84409bbea037e5','hsdghsdgh','sdfhsdgh','sdghsgdh@sjdfh.com','english','0','0','1',NULL,'2016-12-21 20:42:20','2016-12-21 20:46:37','edit_self'),(9,'bob','c080b62afbd1662f24f7ca71749a58d857ef26f9b92e2648f8872b98c9810de2cf4a954121f855ae92e21f338b0f97e2440cbf81d261f38a93e6851f361fa87e','9a821084e55855b12f2194deee67025472df139f0ffc16f4e51608970d3d8a806fe3e693edb409b33ee8fb46081364cdba376ba55a1691786c6b3d6ed3f01d7f','Bob','Barker','bob@bob.com','english','0','1','0',NULL,'2016-12-21 20:50:58','2016-12-27 20:15:17','edit_self|sales|add_leads|edit_leads'),(10,'bob1','8ecef75a32611011027cf3cd5bf91e084803a56ed0ade545273a681f5f28d9eec966ae6ab2408b62dbc563fd1bf7d89252c9246dd9b4a6ef6fb47cba2f2bd3dd','a418791cc10eab2c30cc6d85bbff6645e2fd169fb3b90f48d166ff6e2022f3468ad8b921fc857cfce279c46dc0f6a12822326751783eba3248b90b68c4084e45','dslkfj','sldkfj','asdlfkj@sld.com','english','0','0','1',NULL,'2016-12-21 21:12:44','2016-12-21 21:13:19','edit_self|add_users'),(11,'bob2','a3b6b9cedfd9d0a393dc700053679aa78d048c47888b0dceac48af1b3c6cbdfcd0c78f5c2542d1dc3ed6b9e1cf108c4ab5ded83a1316b14734f171c928c1e31f','8c84008f49dca3a7b2424e570584521cf9e155cf24a8b5f6756bd26ed22cf266da3b7c58278007c819b6396bf424a2e82f4d13e2ccc828621ecefab187f71f03','sdlkfj','sdlkfj','fkgs@sdflgh.com','english','0','0','1',NULL,'2016-12-21 21:15:17','2016-12-21 21:15:35','edit_self|add_users|add_jobs|edit_users'),(12,'alskhglaisg','045a5d54dc116cfdcfb5516d74dacfb232bf2920bf4e7199ce40d1579af37268bd15687f622b86bf0ed75a8893678b487a0c4762940f6634c7e952f8e4a57f40','8df7bddade420775bf58a1f92acc1a661a9373b8ff04e79826fffd7628382247bf0d4238ffd4d55d22e9403f6cb506f0e79445d0d71b83e57753d8253f5c9d1b','foighslkjgnaslk','asdfg','aslkdfg@dlsha.com','english','0','0','1',NULL,'2016-12-22 18:14:38','2016-12-22 18:33:13','edit_self|add_jobs|edit_users');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-11 19:00:53
