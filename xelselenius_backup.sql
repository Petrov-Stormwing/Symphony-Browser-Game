-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: xelselenius
-- ------------------------------------------------------
-- Server version	10.1.16-MariaDB

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
-- Table structure for table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buildings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `planet_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `req_minerals` int(11) NOT NULL,
  `req_hydrogen` int(11) NOT NULL,
  `req_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `finished_on` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9A51B6A7C54C8C93` (`type_id`),
  KEY `IDX_9A51B6A7A25E9820` (`planet_id`),
  CONSTRAINT `FK_9A51B6A7A25E9820` FOREIGN KEY (`planet_id`) REFERENCES `planets` (`id`),
  CONSTRAINT `FK_9A51B6A7C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `buildings_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buildings`
--

LOCK TABLES `buildings` WRITE;
/*!40000 ALTER TABLE `buildings` DISABLE KEYS */;
/*!40000 ALTER TABLE `buildings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buildings_type`
--

DROP TABLE IF EXISTS `buildings_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buildings_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `req_minerals` int(11) NOT NULL,
  `req_hydrogen` int(11) NOT NULL,
  `req_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `yield` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CD3553E55E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buildings_type`
--

LOCK TABLES `buildings_type` WRITE;
/*!40000 ALTER TABLE `buildings_type` DISABLE KEYS */;
INSERT INTO `buildings_type` VALUES (1,'Mining_Facility',64,24,'30',50,'2017-04-25 17:10:06'),(2,'Hydrogen_Extractor',64,24,'30',25,'2017-04-25 17:10:54'),(3,'Shipyard',64,24,'30',0,'2017-04-25 17:11:09');
/*!40000 ALTER TABLE `buildings_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planets`
--

DROP TABLE IF EXISTS `planets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` int(11) NOT NULL,
  `ships` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `storage` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `yield` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `coordinates` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `buildings_level` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BDDA8B069816D676` (`coordinates`),
  KEY `IDX_BDDA8B06A76ED395` (`user_id`),
  CONSTRAINT `FK_BDDA8B06A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planets`
--

LOCK TABLES `planets` WRITE;
/*!40000 ALTER TABLE `planets` DISABLE KEYS */;
INSERT INTO `planets` VALUES (19,20378,'s:69:\"{\"Fighter\":0,\"Cruiser\":0,\"Battleship\":0,\"Cargo_ship\":0,\"Colonizer\":0}\";','s:69:\"{\"Minerals_Storage\":147000.37500001,\"Hydrogen_Tanks\":106500.32638886}\";','s:47:\"{\"Minerals_per_hour\":50,\"Hydrogen_per_hour\":25}\";','{\"x\":2,\"y\":1}',47,'s:57:\"{\"Mining_Facility\":0,\"Hydrogen_Extractor\":0,\"Shipyard\":0}\";'),(20,22247,'s:69:\"{\"Fighter\":0,\"Cruiser\":0,\"Battleship\":0,\"Cargo_ship\":0,\"Colonizer\":0}\";','s:46:\"{\"Minerals_Storage\":1000,\"Hydrogen_Tanks\":500}\";','s:46:\"{\"Minerals_per_hour\":10,\"Hydrogen_per_hour\":5}\";','{\"x\":1,\"y\":20}',48,'s:57:\"{\"Mining_Facility\":0,\"Hydrogen_Extractor\":0,\"Shipyard\":0}\";'),(21,20024,'s:69:\"{\"Fighter\":0,\"Cruiser\":0,\"Battleship\":0,\"Cargo_ship\":0,\"Colonizer\":0}\";','s:46:\"{\"Minerals_Storage\":1000,\"Hydrogen_Tanks\":500}\";','s:46:\"{\"Minerals_per_hour\":10,\"Hydrogen_per_hour\":5}\";','{\"x\":18,\"y\":0}',49,'s:57:\"{\"Mining_Facility\":0,\"Hydrogen_Extractor\":0,\"Shipyard\":0}\";'),(22,8569,'s:69:\"{\"Fighter\":0,\"Cruiser\":0,\"Battleship\":0,\"Cargo_ship\":0,\"Colonizer\":0}\";','s:69:\"{\"Minerals_Storage\":1000.0583333334,\"Hydrogen_Tanks\":500.02916666665}\";','s:47:\"{\"Minerals_per_hour\":50,\"Hydrogen_per_hour\":25}\";','{\"x\":6,\"y\":5}',50,'s:57:\"{\"Mining_Facility\":0,\"Hydrogen_Extractor\":0,\"Shipyard\":0}\";'),(23,6251,'s:69:\"{\"Fighter\":0,\"Cruiser\":0,\"Battleship\":0,\"Cargo_ship\":0,\"Colonizer\":0}\";','s:46:\"{\"Minerals_Storage\":1000,\"Hydrogen_Tanks\":500}\";','s:46:\"{\"Minerals_per_hour\":10,\"Hydrogen_per_hour\":5}\";','{\"x\":12,\"y\":12}',51,'s:57:\"{\"Mining_Facility\":0,\"Hydrogen_Extractor\":0,\"Shipyard\":0}\";'),(24,23063,'s:69:\"{\"Fighter\":0,\"Cruiser\":0,\"Battleship\":0,\"Cargo_ship\":0,\"Colonizer\":0}\";','s:69:\"{\"Minerals_Storage\":1000.0027777778,\"Hydrogen_Tanks\":500.00138888889}\";','s:47:\"{\"Minerals_per_hour\":50,\"Hydrogen_per_hour\":25}\";','{\"x\":19,\"y\":1}',52,'s:57:\"{\"Mining_Facility\":0,\"Hydrogen_Extractor\":0,\"Shipyard\":0}\";'),(25,8411,'s:69:\"{\"Fighter\":0,\"Cruiser\":0,\"Battleship\":0,\"Cargo_ship\":0,\"Colonizer\":0}\";','s:46:\"{\"Minerals_Storage\":1000,\"Hydrogen_Tanks\":500}\";','s:46:\"{\"Minerals_per_hour\":10,\"Hydrogen_per_hour\":5}\";','{\"x\":7,\"y\":4}',53,'s:57:\"{\"Mining_Facility\":0,\"Hydrogen_Extractor\":0,\"Shipyard\":0}\";'),(26,22360,'s:69:\"{\"Fighter\":0,\"Cruiser\":0,\"Battleship\":0,\"Cargo_ship\":0,\"Colonizer\":0}\";','s:46:\"{\"Minerals_Storage\":1000,\"Hydrogen_Tanks\":500}\";','s:46:\"{\"Minerals_per_hour\":10,\"Hydrogen_per_hour\":5}\";','{\"x\":1,\"y\":5}',54,'s:57:\"{\"Mining_Facility\":0,\"Hydrogen_Extractor\":0,\"Shipyard\":0}\";'),(27,29043,'s:69:\"{\"Fighter\":0,\"Cruiser\":0,\"Battleship\":0,\"Cargo_ship\":0,\"Colonizer\":0}\";','s:46:\"{\"Minerals_Storage\":1000,\"Hydrogen_Tanks\":500}\";','s:46:\"{\"Minerals_per_hour\":10,\"Hydrogen_per_hour\":5}\";','{\"x\":17,\"y\":3}',55,'s:57:\"{\"Mining_Facility\":0,\"Hydrogen_Extractor\":0,\"Shipyard\":0}\";'),(28,11360,'s:69:\"{\"Fighter\":0,\"Cruiser\":0,\"Battleship\":0,\"Cargo_ship\":0,\"Colonizer\":0}\";','s:46:\"{\"Minerals_Storage\":1000,\"Hydrogen_Tanks\":500}\";','s:46:\"{\"Minerals_per_hour\":10,\"Hydrogen_per_hour\":5}\";','{\"x\":3,\"y\":19}',57,'s:57:\"{\"Mining_Facility\":0,\"Hydrogen_Extractor\":0,\"Shipyard\":0}\";'),(29,26114,'s:69:\"{\"Fighter\":0,\"Cruiser\":0,\"Battleship\":0,\"Cargo_ship\":0,\"Colonizer\":0}\";','s:69:\"{\"Minerals_Storage\":1000.0027777778,\"Hydrogen_Tanks\":500.00138888889}\";','s:47:\"{\"Minerals_per_hour\":50,\"Hydrogen_per_hour\":25}\";','{\"x\":7,\"y\":13}',58,'s:57:\"{\"Mining_Facility\":0,\"Hydrogen_Extractor\":0,\"Shipyard\":0}\";');
/*!40000 ALTER TABLE `planets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_57698A6A5E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (2,'ROLE_ADMIN'),(1,'ROLE_USER');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ship`
--

DROP TABLE IF EXISTS `ship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `req_minerals` int(11) NOT NULL,
  `req_hydrogen` int(11) NOT NULL,
  `req_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `started_on` datetime NOT NULL,
  `finish_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ship`
--

LOCK TABLES `ship` WRITE;
/*!40000 ALTER TABLE `ship` DISABLE KEYS */;
/*!40000 ALTER TABLE `ship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `support_ticket`
--

DROP TABLE IF EXISTS `support_ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `support_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1F5A4D53A76ED395` (`user_id`),
  CONSTRAINT `FK_1F5A4D53A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `support_ticket`
--

LOCK TABLES `support_ticket` WRITE;
/*!40000 ALTER TABLE `support_ticket` DISABLE KEYS */;
INSERT INTO `support_ticket` VALUES (1,57,'Gitna igra','Tapanar, zaw1r6iq naj setne','Suggestion','2017-04-29 20:59:24'),(2,58,'problem','asdfasdfasdf','error','2017-04-30 09:28:52');
/*!40000 ALTER TABLE `support_ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `IDX_54FCD59FA76ED395` (`user_id`),
  KEY `IDX_54FCD59FD60322AC` (`role_id`),
  CONSTRAINT `FK_54FCD59FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `FK_54FCD59FD60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` VALUES (47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1);
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E9F85E0677` (`username`),
  UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (47,'a','$2y$13$ZHuzvCbfCBEp25aoBnPgi.YPg.G/6CMEDT9IiyT2RmnM9iuzp6H9e','a@a.com'),(48,'b','$2y$13$sQrXCbiSwb.buMQEmX81Vu/Xae7ULZ6n0jOpCzxPPp2IH4.O9f3zW','b@b.com'),(49,'c','$2y$13$gF.Mf29Y6HyVikdipSVCYeqOcD966mt53Ib1VALkl6UxP.5Bb.bBO','c@c.com'),(50,'d','$2y$13$fQQFU8PgIEnyzNzppZWAquo.pUU8eGdvEbliqVEeqz/fbDdY1jmD.','d@d.com'),(51,'e','$2y$13$BdTVt6cAD/tjd.jy4xsiTeHGIsj.a7oiWD0h24BvDvk45Z5QmCHoO','e@e.com'),(52,'f','$2y$13$ybI/Il.1N6./1cQxiYj.K.GuNgCSGHHbdd4j4ArNAdRKurCzKBaai','f@f.com'),(53,'g','$2y$13$SF9yYG44RXGZtnzJ27GXpOI4h4Wq7soVLMN5IKziS4oLiYTpKf68O','g@g.com'),(54,'z','$2y$13$MA5Fn640obz/ZU9uI3/Ot.5OHyLUKCidkbVF/ibRDmnJ.WmDbCHNq','z@z.com'),(55,'y','$2y$13$3APgPuuw2gV4QUmdfJ06vO1LSwmp.IJHsrV5I0Ikf49O24wgd27li','y@y.com'),(56,'qqq','$2y$13$A3Z5UqpW.FpVC7L1byAuEeU0BlkwaTlGzaa/CwD.NkP0tCwgwZnMu','q@q.com'),(57,'sss','$2y$13$OgM7h1SWYZf2oi.aYxxFe.HjibkiCRC.CAmqyMqODFmXUEwanWuIS','s@s.com'),(58,'k','$2y$13$pF2PxbGyMcF/M8XpcrVJt.yJBVRQq.ETn6cN6IkEDOkvJXaaJxN4u','k@k.com');
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

-- Dump completed on 2017-05-06 19:39:38
